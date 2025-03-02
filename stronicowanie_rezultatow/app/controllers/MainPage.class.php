<?php

namespace app\controllers;

use core\App;
use core\SessionUtils;


Class MainPage{

    public function action_MainPage(){
        App::getSmarty()->assign('id', $modified = SessionUtils::Load('id',true));
        App::getSmarty()->registerPlugin("modifier", "count", "count");	
        App::getSmarty()->assign('page_title','Szachowo');
        App::getSmarty()->display('MainPage.tpl');	
    }

}