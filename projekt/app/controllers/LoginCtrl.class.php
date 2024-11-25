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

        //nie ma sensu walidować dalej, gdy brak parametrów
        if (!isset($this->form->login))
            return false;

        // sprawdzenie, czy potrzebne wartości zostały przekazane
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

        //nie ma sensu walidować dalej, gdy brak wartości
        if (App::getMessages()->isError()){
            return false;
        }
            

        // sprawdzenie, czy dane logowania poprawne
        // (takie informacje najczęściej przechowuje się w bazie danych)




        $temp = array();


        $temp = App::getDB()->get("users", [
            "login",
            "pass",
            ], ["userid" => $idd
        ]);



      

        if(strcmp($temp["login"],$this->form->login) == 0  && password_verify($this->form->pass,$temp["pass"]) ){
          //  Utils::addErrorMessage("Poprawny login i hasło");
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
            //zalogowany => przekieruj na główną akcję (z przekazaniem messages przez sesję)
            Utils::addErrorMessage('Poprawnie zalogowano do systemu');
            App::getRouter()->redirectTo("MainPage");
        } else {
            //niezalogowany => pozostań na stronie logowania
            $this->generateView();
        }
    }

    public function action_logout() {
        // 1. zakończenie sesji
        session_destroy();
        // 2. idź na stronę główną - system automatycznie przekieruje do strony logowania
        App::getRouter()->redirectTo('MainPage');
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
        App::getSmarty()->assign('page_header','Logowanie');
        App::getSmarty()->assign('page_title','Logowanie');
        App::getSmarty()->display('login_view.tpl');
    }

}