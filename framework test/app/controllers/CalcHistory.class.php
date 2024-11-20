<?php

namespace app\controllers;

use app\transfer\User;
use app\controllers\Login;

class CalcHistory{






    public function action_showHistory(){

        try{

            $database = new \Medoo\Medoo([   
            'database_type'=>'mysql',
            'database_name'=>'calc',
            'server'=>'localhost',
            'username'=>'root',
            'password'=>'',
            'charset'=>'utf8',
            'collation'=>'utf8_polish_ci',
            'port'=>3306,
            'option'=>[
               \PDO::ATTR_CASE => \PDO::CASE_NATURAL,
               \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
            ]
   
   
           ]);
   
   
           $table=$database->select("wynik",[
           "Idwynik",     
           "kwota",
           "lat",
           "procent",
           "rata",
           "data"
   
   
           ]);
   
   
           }
   
   
           catch (\PDOException $ex ){
               getMessages()->addError("DB Error: ".$ex->getMessage());
           }

            getSmarty()->assign('tabela',$table);
            getSmarty()->assign('page_title','Strona główna');
            getSmarty()->assign('page_header','Historia kalkulacji');
            getSmarty()->assign('user',unserialize($_SESSION['user']));
            getSmarty()->display('calc_history_view.tpl');	
      

    }









}