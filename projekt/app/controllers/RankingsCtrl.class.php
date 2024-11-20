<?php


namespace app\controllers;


use core\App;
use core\Utils;
use core\RoleUtils;
use core\SessionUtils;
use core\ParamUtils;


class RankingsCtrl{

    private $table;
    private $paramsearch;

    public function __construct(){


    }



    public function getData(){
        try {
            $this->table = App::getDB()->select("rankings", [
                "[>]users" => ["users_userid" => "userid"]
            ], [
                "rankings.gamesplayed",
                "rankings.wins",
                "rankings.loses",
                "rankings.draws",
                "rankings.rating",
                "users.login"
            ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
    }
    
    public function action_search(){

        $this->paramsearch = ParamUtils::getFromRequest('slogin');

        if(empty($this->paramsearch))
        {
            $this->action_leaderboardShow();
        }
           
        

        try {
            $this->table = App::getDB()->select("rankings", [
                "[>]users" => ["users_userid" => "userid"]
            ], [
                "rankings.gamesplayed",
                "rankings.wins",
                "rankings.loses",
                "rankings.draws",
                "rankings.rating",
                "users.login"
            ], [ "users.login" => $this->paramsearch

            ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
    


        $this->generateView();
    }





    public function action_leaderboardShow(){
        $this->getData();
        $this->generateView();
    }


    public function generateView(){
        App::getSmarty()->assign("tabela",$this->table);
        App::getSmarty()->assign('page_header','Ranking graczy');
        App::getSmarty()->assign('page_title','Ranking');
        App::getSmarty()->display('leaderboard_view.tpl');    


    }
    
    
    
        


}

