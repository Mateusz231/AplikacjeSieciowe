<?php

namespace app\controllers;
use core\App;

Class MainPage{




    public function action_MainPage(){
        App::getSmarty()->registerPlugin("modifier", "count", "count");	
        App::getSmarty()->assign('page_title','Szachowo');
        App::getSmarty()->display('MainPage.tpl');	
    }





}