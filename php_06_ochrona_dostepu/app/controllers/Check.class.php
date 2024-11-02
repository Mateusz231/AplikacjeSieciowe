<?php
namespace app\controllers;
use app\controllers\Login;
class Check{

    public function checkIn(){    
    @session_start();
    $role = isset($_SESSION['role']) ? $_SESSION['role'] : '';


    if ( empty($role) ){
        
        $ctrl = new Login();
		$ctrl ->process();
	
	exit();
    }
  


    }

      

}









