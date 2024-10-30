<?php

class Check{

    public function checkIn(){    
    @session_start();
    $role = isset($_SESSION['role']) ? $_SESSION['role'] : '';


    if ( empty($role) ){
        
        require_once getConf()->root_path.'/app/controllers/LoginClass.php';

        $login = new Login();
        $login->process();
        

	exit();
    }
  


    }

      

}









