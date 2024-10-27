<?php


require_once dirname(__FILE__).'/../config.php';

Class Logout{


    public function logout(){   
    global $conf;
    session_start();
    session_destroy();
    include $conf->root_path.'/index.php';
    }



}


