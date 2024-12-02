<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;



class RegisterCtrl{

    private $form;


    public function __construct(){
    $this->form = new LoginForm();        
    }



    public function validate(){



        $this->form->login = ParamUtils::getFromRequest('rlogin');
        $this->form->pass = ParamUtils::getFromRequest('rpass');
        $this->form->pass2 = ParamUtils::getFromRequest('rpass2');




        if(!(isset($this->form->login))){
            return false;
        }


        if(empty($this->form->login)){
           Utils::addErrorMessage("Nie podano loginu"); 
        }
        if(empty($this->form->pass)){
            Utils::addErrorMessage("Nie podano hasła");
        }

        if(empty($this->form->pass2)){
            Utils::addErrorMessage("Nie podano ponownego hasła");
        }

    
        if( (strlen($this->form->login) < 3 || strlen($this->form->login) > 20 )){
            Utils::addErrorMessage("Login powinnien mieć od 3-20 znaków");
            
        }
        else{

            $record=null;

            try {
            
                $record = App::getDB()->get("users", "login", [
                    "login" => $this->form->login
                ]);

            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }


            if(strcmp($record,$this->form->login) == 0 ){

              Utils::addErrorMessage("Podany login juz jest zajety!");

            }


        }



        if(strlen($this->form->pass )<8){
            Utils::addErrorMessage("Hasło powinno mieć conajmniej 8 znaków");
        }    

        if(strcmp($this->form->pass,$this->form->pass2) !== 0){
            Utils::addErrorMessage("Podane hasła nie zgadzają sie!");
        }


        if(App::getMessages()->isError()){
            return false; 
     }

     try{

        App::getDB()->insert("users", [
            "login" => $this->form->login,
            "pass" => password_hash($this->form->pass, PASSWORD_BCRYPT),
            "creation_date" => Date("Y-m-d"),
            "last_modified" => Date("Y-m-d h:i:sa")
        ]);
    
    
        $record = App::getDB()->get("users", "userid", [
            "login" => $this->form->login
        ]);    
    
        App::getDB()->insert("rankings", [
        "users_userid" => $record
        ]);
    
    
        $role = App::getDB()->get("roles","roleid",[
            "rolename" => "user"
        ]);
    
        App::GetDB()->insert("users_role",[
            "users_userid" => $record,
            "roles_roleid" => $role,
            "last_modified" => Date("Y-m-d h:i:sa")
        ]);
    
    
        App::getDB()->update("users", [
            "who_modified" => $record 
        ], [
            "userid" => $record
        ]);
        



     }

     catch (\PDOException $e) {
        Utils::addErrorMessage('Wystąpił błąd podczas tworzenia użytkownika!');
        if (App::getConf()->debug)
            Utils::addErrorMessage($e->getMessage());
    }

      


     return !App::getMessages()->isError();

    }




    public function action_RegisterShow(){
        $this->generateView();
    }


    public function action_register(){


    if($this->validate()){

        Utils::addErrorMessage('Utworzenie konta zakończono pomyślnie');
        App::getRouter()->redirectTo("MainPage");

    }
    else{
        $this->generateView();
    }    



    }


    public function generateView(){
        App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
        App::getSmarty()->assign('page_header','Rejestracja');
        App::getSmarty()->assign('page_title','Rejestracja');
        App::getSmarty()->display('register_view.tpl');
    }












}



