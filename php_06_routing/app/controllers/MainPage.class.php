<?php

namespace app\controllers;

Class MainPage{




    public function action_MainPage(){
        getSmarty()->assign('page_title','Strona główna');
        getSmarty()->assign('page_header','');
        getSmarty()->display('MainPage.tpl');	
    }





}