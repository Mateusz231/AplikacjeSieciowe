<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;
use core\Validator;



class RegisterCtrl{

    private $form;
    private $validator;
    private $record;


    public function __construct(){
    $this->form = new LoginForm();
    $this->validator = new Validator();        
    }



    public function validate(){


        
        $this->form->login = $this->validator->validateFromRequest("rlogin",
        [
        'trim' => true,
        'required' => true,
        'required_message' => 'Nie podano loginu',
        'min_length' => 1,
        'max_length' => 30,
        'validator_message' => 'Login powinnien mieścić się od 1-30 znaków',

        ]);


        if($this->validator->isLastOk()){

            $this->record=null;

            try {
            
                $this->record = App::getDB()->get("users", "login", [
                    "login" => $this->form->login
                ]);

            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }


            if(strcmp($this->record,$this->form->login) == 0 ){

              Utils::addErrorMessage("Podany login juz jest zajety!");

            }

        }

        
        $this->form->pass = $this->validator->validateFromRequest('rpass',
    
        [
            'trim' => true,
            'required' => true,
            'required_message' => 'Nie podano hasła',
            'min_length' => 8,
            'max_length' => 30,
            'validator_message' => 'Hasło powinno mieścić się pomiędzy 8 i 30 znakami',
        ]
    
    
    
        );
        $this->form->pass2 = $this->validator->validateFromRequest('rpass2',
    
    [
        'trim' => true,
        'required' => true,
        'required_message' => "Nie podano ponownie hasła",
        
    
    
    ]);


    
        if(strcmp($this->form->pass,$this->form->pass2) !== 0){
            Utils::addErrorMessage("Podane hasła nie zgadzają sie!");
        }


        if(App::getMessages()->isError()){
            return false; 
     }

     return !App::getMessages()->isError();

    }




    public function action_RegisterShow(){
        $this->generateView();
    }


    public function action_register(){


    if($this->validate()){
        try{

            App::getDB()->insert("users", [
                "login" => $this->form->login,
                "pass" => password_hash($this->form->pass, PASSWORD_BCRYPT),
                "creation_date" => Date("Y-m-d"),
                "last_modified" => Date("Y-m-d h:i:sa")
            ]);
        
        
            $this->record = App::getDB()->get("users", "userid", [
                "login" => $this->form->login
            ]);    
        
            App::getDB()->insert("rankings", [
            "users_userid" => $this->record
            ]);
        
        
            $role = App::getDB()->get("roles","roleid",[
                "rolename" => "user"
            ]);
        
            App::GetDB()->insert("users_role",[
                "users_userid" => $this->record,
                "roles_roleid" => $role,
                "last_modified" => Date("Y-m-d h:i:sa")
            ]);
        
        
            App::getDB()->update("users", [
                "who_modified" => $this->record 
            ], [
                "userid" => $this->record
            ]);
            
    
    
    
         }
    
         catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas tworzenia użytkownika!');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }    
        Utils::addInfoMessage('Utworzenie konta zakończono pomyślnie');
        $this->generateView();

    }
    else{
        $this->generateView();
    }    



    }


    public function generateView(){
        App::getSmarty()->assign('form', $this->form); 
        App::getSmarty()->assign('page_header','Rejestracja');
        App::getSmarty()->assign('page_title','Rejestracja');
        App::getSmarty()->display('register_view.tpl');
    }












}



