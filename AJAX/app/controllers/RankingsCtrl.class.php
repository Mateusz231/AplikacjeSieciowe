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

    private $page;
    private $limit;
    private $offset;
    private $totalCount;


    public function __construct(){
        $this->validator = new Validator();
        $this->limit = 8;   
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

       // var_dump($this->rankingsearch);

        $column;
        $direction;


        if(empty($this->loginsearch)){
            $this->loginsearch = $this->validator->validateFromCleanURL(4); // slogn
        }

        if(empty($this->rankingsearch)){
                  
        $this->rankingsearch = $this->validator->validateFromCleanURL(5); // srank
        }



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
    

        $this->page = $this->validator->validateFromCleanURL(3);
        
        if (empty($this->page) || $this->page < 1) {
            $this->page = 1;
        }
    
        $this->offset = ($this->page - 1) * $this->limit;

        $where["LIMIT"] = [$this->offset, $this->limit];
    
        if (!empty($this->loginsearch)) {
            $where["users.login[~]"] = $this->loginsearch;
        }
        
        if (!empty($this->rankingsearch)) {
            $where["rankings.rating[~]"] = $this->rankingsearch; 
        }
       // var_dump($where);
        $countWhere = [];

        if (!empty($this->loginsearch)) {
        $countWhere["users.login[~]"] = $this->loginsearch;
         }

         if (!empty($this->rankingsearch)) {
        $countWhere["rankings.rating[~]"] = $this->rankingsearch;
        }

      

        try {


            $this->totalCount = App::getDB()->count("rankings", [
                "[>]users" => ["users_userid" => "userid"]
            ], "*", $countWhere);     



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
        App::getSmarty()->assign('current_page', $this->page);
        App::getSmarty()->assign('total_pages', ceil($this->totalCount / $this->limit));
        App::getSmarty()->assign('slogin', $this->loginsearch);
        App::getSmarty()->assign('srank', $this->rankingsearch);
        App::getSmarty()->display('leaderboard_view.tpl');    




    }
    
    
    
        


}

