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
                // 2. usunięcie rekordu
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

        // 3. Przekierowanie na stronę listy osób
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
            $where["rankings.rating[~]"] = $this->rankingsearch; // lub inny operator np. [<=], [=]
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