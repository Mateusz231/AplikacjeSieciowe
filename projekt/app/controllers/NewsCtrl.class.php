<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\SessionUtils;
use core\ParamUtils;
use app\forms\PersonEditForm;


class NewsCtrl{

public function __construct(){

}


public function action_news(){


    $this->generateView();
}




public function generateView(){
    App::getSmarty()->assign('page_header','Wiadomości');
    App::getSmarty()->assign('page_title','Wiadomości');
    App::getSmarty()->display('news.tpl');   
}




}