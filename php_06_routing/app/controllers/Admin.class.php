<?php

namespace app\controllers;
use app\transfer\User;
use app\controllers\Login;
Class Admin{

  

    public function action_admin_page(){

 
getSmarty()->assign('page_title','Kółko i krzyżyk');
getSmarty()->display('admin_page.tpl');


    }

}
