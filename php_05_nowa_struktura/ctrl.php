<?php

require_once dirname (__FILE__).'/../config.php';


@$action = $_REQUEST['action'];



switch ($action) {
	default : 
		

	include_once $conf->root_path.'/lib/LoginClass.php'; 
        $login = new Login();
        $login->process();

	break;
	case 'calcCompute' :
		include_once $conf->root_path.'/app/calc/calc_cred_class.php';
		include_once $conf->root_path.'/lib/CheckClass.php';
       $check = new Check();
        $check->checkIn();
		$ctrl = new CalcCred ();
		$ctrl->process ();
	break;
	case 'LoginCompute' :

        include_once $conf->root_path.'/lib/LoginClass.php'; 
        $login = new Login();
        $login->process();
		include_once $conf->root_path.'/lib/CheckClass.php';
        $check = new Check();
        $check->checkIn();
		include_once $conf->root_path.'/app/calc/calc_cred_class.php';
		$ctrl = new CalcCred ();
		$ctrl->process ();
	break;
	case 'Logout2' :
		include_once $conf->root_path.'/lib/LoginClass.php'; 
        $login = new Login();
        $login->process();
	break;


	case 'Admin' : 
		require_once $conf->root_path.'/lib/admin_pageClass.php';
		$admin = new Admin();
		$admin->admin_page();

	break;	


}
