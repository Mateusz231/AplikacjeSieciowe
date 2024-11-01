<?php

namespace app\controllers;
use app\controllers\Check;
use app\controllers\Login;
Class Admin{

  

    public function admin_page(){
		$ctrl =  new Check();
		$ctrl -> checkIn();
@session_start();
if($_SESSION['role'] && $_SESSION['role']!='admin'){

    $ctrl = new Login();
    $ctrl ->process();
}



getSmarty()->assign('page_title','Kółko i krzyżyk');
getSmarty()->assign('$conf',getConf());
getSmarty()->display('admin_page.tpl');

    }

}
