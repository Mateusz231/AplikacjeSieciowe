<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\SessionUtils;
use core\ParamUtils;
use app\forms\LoginForm;
use core\Validator;

class LoginCtrl {

    private $form;
    private $validator;
    private $id;


    public function __construct() {
        $this->form = new LoginForm();
        $this->validator = new Validator(); 
    }

    public function validate() {
 
        $this->form->login = $this->validator->validateFromRequest("login",
        [
        'trim' => true,
        'required' => true,
        'required_message' => 'Nie podano loginu',
        ]);


        $this->form->pass = $this->validator->validateFromRequest("pass",
        [
        'trim' => true,
        'required' => true,
        'required_message' => 'Nie podano hasła',

        ]);
 
        $this->id = App::getDB()->get("users", "userid", [
            "login" => $this->form->login
        ]);  

        if(empty($this->id)){
            Utils::addErrorMessage('Podane konto nie istnieje!');
        }

        return !App::getMessages()->isError();
    }

    public function action_loginShow() {
        $this->generateView();
    }

    public function action_doLogin() {
        if ($this->validate()) {
            
            
        $temp = array();


        $temp = App::getDB()->get("users", [
            "login",
            "pass",
            ], ["userid" => $this->id
        ]);

        if(strcmp($temp["login"],$this->form->login) == 0  && password_verify($this->form->pass,$temp["pass"]) ){
         
         $role = App::getDB()->get("users_role",[
         "roles_roleid",       
         ], [ "users_userid" => $this->id
         ]);

         $role2 = App::getDB()->get("roles",[

         "rolename",
         "IsActive",   

         ],[ "roleid" => $role

         ]);
         
         RoleUtils::addRole($role2["rolename"]);
         SessionUtils::store("id", $this->id);

            Utils::addInfoMessage('Poprawnie zalogowano do systemu');
            App::getRouter()->redirectTo("MainPage");
        } 
        Utils::addErrorMessage('Nieprawidłowe hasło lub login');
        $this->generateView();

    } 

    else {
         
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


