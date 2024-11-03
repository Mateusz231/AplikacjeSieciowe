<?php

require_once 'init.php';


switch ($action) {
	default : 
		
	include 'check.php'; 
		$ctrl = new app\controllers\CalcCred();
		$ctrl->generateView ();

	break;
	case 'calcCompute' :
		include 'check.php'; 
		$ctrl = new app\controllers\CalcCred();
		$ctrl -> process();

		
	break;
	case 'LoginCompute' :


		$ctrl = new app\controllers\Login();
		$ctrl->doLogin();

		$ctrl = new app\controllers\CalcCred();
		$ctrl -> generateView();

	break;
	case 'Logout2' :

		include 'check.php';  
		$ctrl = new app\controllers\Login();
		$ctrl->doLogout();

	break;


	case 'Admin' : 
		include 'check.php';  
		$ctrl = new app\controllers\Admin();
		$ctrl ->admin_page();

	break;	


}
