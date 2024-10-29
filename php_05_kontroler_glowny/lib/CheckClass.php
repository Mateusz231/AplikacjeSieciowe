<?php
require_once dirname(__FILE__).'/../config.php';


class Check{

    public function checkIn(){
    global $role;    
    @session_start();
    $role = isset($_SESSION['role']) ? $_SESSION['role'] : '';
    global $conf;

    if ( empty($role) ){
        
        require_once $conf->root_path.'/lib/LoginClass.php';

        $login = new Login();
        $login->process();
        

	exit();
    }
  


    }

      

}









