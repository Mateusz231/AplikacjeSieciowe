<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\SessionUtils;
use core\ParamUtils;
use app\forms\LoginForm;

class LoginCtrl {

    private $form;

    public function __construct() {
        $this->form = new LoginForm();
    }

    public function validate() {
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->pass = ParamUtils::getFromRequest('pass');

   
        if (!isset($this->form->login))
            return false;

  
        if (empty($this->form->login)) {
            Utils::addErrorMessage('Nie podano loginu');
        }
        if (empty($this->form->pass)) {
            Utils::addErrorMessage('Nie podano hasła');
        }


        $idd = App::getDB()->get("users", "userid", [
            "login" => $this->form->login
        ]);  

        if(empty($idd)){
            Utils::addErrorMessage('Podane konto nie istnieje!');
        }

   
        if (App::getMessages()->isError()){
            return false;
        }
     

        $temp = array();


        $temp = App::getDB()->get("users", [
            "login",
            "pass",
            ], ["userid" => $idd
        ]);



      

        if(strcmp($temp["login"],$this->form->login) == 0  && password_verify($this->form->pass,$temp["pass"]) ){
         
         $role = App::getDB()->get("users_role",[
         "roles_roleid",       
         ], [ "users_userid" => $idd
         ]);

         $role2 = App::getDB()->get("roles",[

         "rolename",
         "IsActive",   

         ],[ "roleid" => $role

         ]);
         
         RoleUtils::addRole($role2["rolename"]);
         SessionUtils::store("id", $idd);


        }
        else{
            Utils::addErrorMessage("Niepoprawny login lub hasło");
        }

        return !App::getMessages()->isError();
    }

    public function action_loginShow() {
        $this->generateView();
    }

    public function action_doLogin() {
        if ($this->validate()) {
            
            Utils::addErrorMessage('Poprawnie zalogowano do systemu');
            App::getRouter()->redirectTo("MainPage");
        } else {
         
            $this->generateView();
        }
    }

    public function action_logout() {
        session_destroy();    
        App::getRouter()->redirectTo('MainPage');
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); 
        App::getSmarty()->assign('page_header','Logowanie');
        App::getSmarty()->assign('page_title','Logowanie');
        App::getSmarty()->display('login_view.tpl');
    }

}
