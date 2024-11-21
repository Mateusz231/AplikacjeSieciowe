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
    private $orderparam = array();

    public function __construct(){


    }


    
    public function action_search(){

        $this->loginsearch = ParamUtils::getFromRequest('slogin');
        $this->rankingsearch = ParamUtils::getFromRequest('srank');

      

        $orderparam = ParamUtils::getFromCleanURL(2, false, 'Błędne wywołanie aplikacji');


        $where = [];
    
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

