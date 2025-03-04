<?php

namespace app\controllers;



use core\App;
use core\Utils;
use core\RoleUtils;
use core\SessionUtils;
use core\ParamUtils;
use app\forms\PersonEditForm;
use core\Validator;



class AdminPanel{


    
    private $table;
    private $loginsearch;
    private $rankingsearch;
    private $orderparam;
    private $form;
    private $validator;


    public function __construct(){
    $this->form = new PersonEditForm();
    $this->validator = new Validator();   
    }

    public function validateEdit(){
        $this->orderparam[0] = $this->validator->validateFromCleanURL(1,['int' => true, 'validator_message' => 'Niepoprawna liczba całkowita' ]);
        return !App::getMessages()->isError();
    }


    public function action_adminedit(){


        if($this->validateEdit()){

            $where ="";

            try {
               
                $record = App::getDB()->get("users", "*", [
                    "userid" => $this->orderparam[0]
                ]);

                if(empty($record)){
                    Utils::addErrorMessage('Nieprawidlowy identyfikator');
                    App::getRouter()->forwardTo("MainPage");   
                }

                 
                $record2 = App::getDB()->get("rankings", "*", [
                    "users_userid" => $this->orderparam[0]
                ]);

                 
                $record3 = App::getDB()->get("users_role", "*", [
                    "users_userid" => $this->orderparam[0]
                ]);

                $this->form->id = $record['userid'];
                $this->form->login = $record['login'];
                $this->form->email = $record['email'];
                $this->form->nickname = $record['nickname'];
                $this->form->country = $record['country'];
                $this->form->firstname = $record['firstname'];
                $this->form->lastname = $record['lastname'];
                $this->form->rating = $record2['rating'];
                $this->form->role = $record3['roles_roleid'];
            
    
         
    
    
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas edycji rekordu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        $this->action_generateEdit();

        }

        else{
            Utils::addErrorMessage('Nieprawidlowy identyfikator');
            App::getRouter()->forwardTo("MainPage");   
        }
       

       

    }

    

    public function validateSave(){

        $this->form->login = $this->validator->validateFromRequest('elogin',
        [
            'trim' => true,
            'required' => true,
            'required_message' => 'Login nie moze byc pusty',
           
        ]);

        $this->form->email = $this->validator->validateFromRequest('email',
        [
            'trim' => true,
            'max_length' => 45,
            'validator_message' => 'email max 45 znaków',
           
        ]);

        $this->form->country = $this->validator->validateFromRequest('ecountry',
        [
            'trim' => true,
            'max_length' => 50,
            'validator_message' => 'country(kraj) max 45 znaków',
        ]);

        $this->form->nickname = $this->validator->validateFromRequest('enickname',
        [
            'trim' => true,
            'max_length' => 45,
            'validator_message' => 'nickname max 45 znaków',
        ]);

        $this->form->firstname = $this->validator->validateFromRequest('efirstname',
        [
            'trim' => true,
            'max_length' => 45,
            'validator_message' => 'firstname max 45 znaków',
        ]);

        $this->form->lastname = $this->validator->validateFromRequest('elastname',
        [
            'trim' => true,
            'max_length' => 55,
            'validator_message' => 'lastname max 55 znaków',
        ]);


        $this->form->rating = $this->validator->validateFromRequest('erating',
        [
            'trim' => true,
            'int' => true,
            'validator_message' => 'Musi byc liczba całkowita',
        ]);

        $this->form->role = $this->validator->validateFromRequest('erole',
        [
            'trim' => true,
            'int' => true,
            'validator_message' => 'Musi być liczba całkowita',
        ]);
    
            
        try {
            
            $record = App::getDB()->get("users", "login", [
                "login" => $this->form->login
            ]);


            $record2 = App::getDB()->get("users","email",[
            "email" => $this->form->email
            ]);


            $record3 = App::getDB()->get("users","nickname",[
            "nickname"=>$this->form->nickname        
            ]);

        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }


        

       

        return !App::getMessages()->isError();

       

    }

    public function action_admineditSave(){
        $this->form->id = $this->validator->validateFromCleanURL(1,['int' => true, 'validator_message' => 'Niepoprawna liczba całkowita' ]);
        $modified = SessionUtils::Load("id",true);
        if($this->validateSave()){


            try{

                App::getDB()->update("users", [
                    "login" => $this->form->login,
                    "email" => $this->form->email,
                    "nickname" => $this->form->nickname,
                    "country" => $this->form->country,
                    "firstname" =>$this->form->firstname,
                    "lastname" =>$this->form->lastname,
                    "last_modified" => Date("Y-m-d h:i:sa"),
                    "who_modified" =>$modified,

    
                ],[

                  "userid" => $this->form->id      
                    

                 ]);


                 App::getDB()->update("rankings",[
                    "rating" =>$this->form->rating
                 ],[
                  "users_userid" => $this->form->id      
                 ]);

                 App::getDB()->update("users_role",[
                    "roles_roleid" => $this->form->role,
                    "last_modified" => Date("Y-m-d h:i:sa")   
                 ],[

                    "users_userid" =>$this->form->id
                 ]);
                 
                 
                 
                 
                 




            }

            catch(\PDOException $e){
                Utils::addErrorMessage("Wystąpił błąd podczas zmiany rekordów");
                App::getRouter()->forwardTo("MainPage");
            }
            Utils::addInfoMessage("Pomyślnie zapisano zmiany");
          //  App::getRouter()->forwardTo("generateEdit");
         // App::getRouter()->forwardTo("profile");

        }
        $this->action_generateEdit();
    }


    public function action_admindelete(){
        if ($this->validateEdit()) {

            try {

                App::getDB()->delete("users_role", [
                    "users_userid" => $this->orderparam[0]
                ]);
                App::getDB()->delete("rankings", [
                    "users_userid" => $this->orderparam[0]
                ]);

                App::getDB()->delete("users", [
                    "userid" => $this->orderparam[0]
                ]);
                Utils::addInfoMessage('Pomyślnie usunięto rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
            App::getRouter()->forwardTo('adminsearch');
        }

        Utils::addErrorMessage('Nieprawidlowy identyfikator');
        App::getRouter()->forwardTo("MainPage");   

    }



    public function action_adminsearch(){

        $this->loginsearch = ParamUtils::getFromRequest('slogin');
        $this->rankingsearch = ParamUtils::getFromRequest('srank');

        $column;
        $direction;

      

        $this->orderparam[0] = $this->validator->validateFromCleanURL(1);
        if($this->orderparam[0] == "login"){
            $column="users.login";
        }
        if($this->orderparam[0] == "gamesplayed"){
            $column="rankings.gamesplayed";
        }

        if($this->orderparam[0] == "wins"){
            $column="rankings.wins";
        }

        if($this->orderparam[0] == "loses"){
            $column="rankings.loses";
        }

        if($this->orderparam[0] == "draws"){
            $column="rankings.draws";
        }

        if($this->orderparam[0] == "rankings"){
            $column="rankings.rating";
        }
        $this->orderparam[1] = $this->validator->validateFromCleanURL(2);
        if($this->orderparam[1] =="asc"){
            $direction="ASC";
        }

        if($this->orderparam[1] =="desc"){
            $direction="DESC";
        }
        
        $where = [];


        if(!empty(trim($this->orderparam[0])) && !empty(trim($this->orderparam[1]))){
            $where["ORDER"] = [$column => $direction];
        }
    



    
        if (!empty($this->loginsearch)) {
            $where["users.login[~]"] = $this->loginsearch;
        }
        
        if (!empty($this->rankingsearch)) {
            $where["rankings.rating[~]"] = $this->rankingsearch; 
        }
      

        try {
            $this->table = App::getDB()->select("rankings", [
                "[>]users" => ["users_userid" => "userid"]
            ], [
                "users.userid",
                "rankings.gamesplayed",
                "rankings.wins",
                "rankings.loses",
                "rankings.draws",
                "rankings.rating",
                "users.login"
            ], $where);
              
                

            
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
    


        $this->generateView();
    }

    public function action_generateEdit(){
        App::getSmarty()->assign('dane',$this->form);
        App::getSmarty()->assign('page_header','Edycja użytkownika');
        App::getSmarty()->assign('page_title','Edycja');
        App::getSmarty()->display('admin_person_edit.tpl');    
    }



    public function generateView(){
        App::getSmarty()->assign("tabela",$this->table);
        App::getSmarty()->assign('page_header','Admin');
        App::getSmarty()->assign('page_title','Admin');
        App::getSmarty()->display('admin_panel_view.tpl');    


    }










}