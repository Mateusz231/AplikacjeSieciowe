<?php
require_once dirname(__FILE__).'/../config.php';

class Check{

    public function checkIn(){
    global $role;    
    session_start();
    $role = isset($_SESSION['role']) ? $_SESSION['role'] : '';
    global $conf;

    if ( empty($role) ){
	include $conf->root_path.'/app/security/login.php';
	exit();
    }
  

    }

      

}









