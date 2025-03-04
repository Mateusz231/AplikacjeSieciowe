<?php

namespace app\controllers;


use core\App;
use core\Utils;
use core\RoleUtils;
use core\SessionUtils;
use core\ParamUtils;
use app\forms\PersonEditForm;



class Chess{


public function __construct(){

}


public function action_play(){

    $this->generateView();
}

public function generateView(){

    App::getSmarty()->assign('page_title','Graj');
    App::getSmarty()->display('chess_page.tpl');   

}


}