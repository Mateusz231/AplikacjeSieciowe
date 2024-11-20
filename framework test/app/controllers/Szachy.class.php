<?php

namespace app\controllers;
use app\transfer\User;
use app\controllers\Login;


Class Szachy{





    public function action_szachy(){

    
        $temp=unserialize($_SESSION['user']);

        $temp = $temp->login;

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
    
    
           $table=$database->query("SELECT <login_name>, <ranking> FROM <players> WHERE <login_name>='$temp'");
    
    
           }
    
    
           catch (\PDOException $ex ){
               getMessages()->addError("DB Error: ".$ex->getMessage());
           }
    
            getSmarty()->assign('tabela',$table);
        

    getSmarty()->assign('page_title','Szachy');
    getSmarty()->assign('user',unserialize($_SESSION['user']));




    getSmarty()->display('Chess.tpl');
    


    }







}