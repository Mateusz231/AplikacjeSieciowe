<?php


namespace app\controllers;


use core\App;
use core\Utils;
use core\RoleUtils;
use core\SessionUtils;
use core\ParamUtils;


class RankingsCtrl{

    private $table;
    private $loginsearch;
    private $rankingsearch;
    private $orderparam;


    public function __construct(){


    }





    
    public function action_search(){

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



    public function generateView(){
        App::getSmarty()->assign('URL',$this->orderparam);
        App::getSmarty()->assign("tabela",$this->table);
        App::getSmarty()->assign('page_header','Ranking graczy');
        App::getSmarty()->assign('page_title','Ranking');
        App::getSmarty()->display('leaderboard_view.tpl');    


    }
    
    
    
        


}

