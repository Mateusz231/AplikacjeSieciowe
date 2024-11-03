<?php

namespace app\controllers;

Class MainPage{




    public function MainP(){
        getSmarty()->assign('page_title','Strona główna');
        getSmarty()->assign('page_header','');
        getSmarty()->display('MainPage.tpl');	
    }





}