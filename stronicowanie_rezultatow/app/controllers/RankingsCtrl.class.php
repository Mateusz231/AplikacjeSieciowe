<?php


namespace app\controllers;


use core\App;
use core\Utils;
use core\RoleUtils;
use core\SessionUtils;
use core\ParamUtils;
use core\Validator;


class RankingsCtrl{

    private $table;
    private $loginsearch;
    private $rankingsearch;
    private $orderparam;
    private $validator;


    public function __construct(){
        $this->validator = new Validator();   
    }





    
    public function action_search(){

        $this->loginsearch = $this->validator->validateFromRequest("slogin",
        [
        'trim' => true,
        ]);

        $this->rankingsearch = $this->validator->validateFromRequest("srank",
        [
        'trim' => true,
        ]);

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
        $this->orderparam[1] =  $this->validator->validateFromCleanURL(2);
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

