<?php

namespace app\controllers;



use core\App;
use core\Utils;
use core\RoleUtils;
use core\SessionUtils;
use core\ParamUtils;
use app\forms\PersonEditForm;



class AdminPanel{


    
    private $table;
    private $loginsearch;
    private $rankingsearch;
    private $orderparam;
    private $form;


    public function __construct(){
    $this->form = new PersonEditForm();
    }

    public function validateEdit(){
        $this->orderparam[0] = ParamUtils::getFromCleanURL(1, false, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }


    public function action_adminedit(){


        if($this->validateEdit()){

            $where ="";

            try {
               
                $record = App::getDB()->get("users", "*", [
                    "userid" => $this->orderparam[0]
                ]);

                 
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


    }

    

    public function validateSave(){

        $this->form->login = ParamUtils::getFromRequest('elogin', true, 'Błędne wywołanie aplikacji');
        $this->form->email = ParamUtils::getFromRequest('email', true, 'Błędne wywołanie aplikacji');
        $this->form->nickname = ParamUtils::getFromRequest('enickname', true, 'Błędne wywołanie aplikacji');
        $this->form->country = ParamUtils::getFromRequest('ecountry', true, 'Błędne wywołanie aplikacji');
        $this->form->firstname = ParamUtils::getFromRequest('efirstname', true, 'Błędne wywołanie aplikacji');
        $this->form->lastname = ParamUtils::getFromRequest('elastname', true, 'Błędne wywołanie aplikacji');
        $this->form->rating = ParamUtils::getFromRequest('erating', true, 'Błędne wywołanie aplikacji');
        $this->form->role = ParamUtils::getFromRequest('erole', true, 'Błędne wywołanie aplikacji');

        if(empty(trim($this->form->login))){
            Utils::addErrorMessage("Login nie moze byc pusty");
        }
        else{
            
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


        }

       

        return !App::getMessages()->isError();

       

    }

    public function action_admineditSave(){
        $this->form->id = ParamUtils::getFromCleanURL(1, false, 'Błędne wywołanie aplikacji');
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
            }


        }
        Utils::addInfoMessage("Pomyślnie zapisano zmiany");
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
        }


        App::getRouter()->forwardTo('search');
    }



    public function action_adminsearch(){

        $this->loginsearch = ParamUtils::getFromRequest('slogin');
        $this->rankingsearch = ParamUtils::getFromRequest('srank');

        $column;
        $direction;

      

        $this->orderparam[0] = ParamUtils::getFromCleanURL(1, false, 'Błędne wywołanie aplikacji');
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
        $this->orderparam[1] = ParamUtils::getFromCleanURL(2, false, 'Błędne wywolanie aplikacji');
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