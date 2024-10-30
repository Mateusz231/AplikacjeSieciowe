<?php

require_once 'init.php';


switch ($action) {
	default : 
		

	include_once 'app/controllers/LoginClass.php';
        $login = new Login();
        $login->process();

	break;
	case 'calcCompute' :
		include_once getConf()->root_path.'/core/calc_cred_class.php';
		include_once getConf()->root_path.'/app/controllers/CheckClass.php';
       $check = new Check();
        $check->checkIn();
		$ctrl = new CalcCred ();
		$ctrl->process ();
	break;
	case 'LoginCompute' :

        include_once getConf()->root_path.'/app/controllers/LoginClass.php'; 
        $login = new Login();
        $login->process();
		include_once getConf()->root_path.'/app/controllers/CheckClass.php';
        $check = new Check();
        $check->checkIn();
		include_once getConf()->root_path.'/core/calc_cred_class.php';
		$ctrl = new CalcCred ();
		$ctrl->process ();
	break;
	case 'Logout2' :
		include_once getConf()->root_path.'/app/controllers/LoginClass.php'; 
        $login = new Login();
        $login->process();
	break;


	case 'Admin' : 
		require_once getConf()->root_path.'/app/controllers/admin_pageClass.php';
		$admin = new Admin();
		$admin->admin_page();

	break;	


}
