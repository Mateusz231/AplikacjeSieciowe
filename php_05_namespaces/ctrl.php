<?php

require_once 'init.php';


switch ($action) {
	default : 
		

	$ctrl = new app\controllers\Login();
	$ctrl ->process();

	break;
	case 'calcCompute' :
		$ctrl = new app\controllers\Check();
		$ctrl -> checkIn();

		$ctrl = new app\controllers\CalcCred();
		$ctrl -> process();

		
	break;
	case 'LoginCompute' :


		$ctrl = new app\controllers\Login();
		$ctrl ->process();

		$ctrl = new app\controllers\Check();
		$ctrl -> checkIn();

		$ctrl = new app\controllers\CalcCred();
		$ctrl -> generateView();

	break;
	case 'Logout2' :

		$ctrl = new app\controllers\Login();
		$ctrl ->process();

	break;


	case 'Admin' : 
		/*
		require_once getConf()->root_path.'/app/controllers/admin_pageClass.php';
		$admin = new Admin();
		$admin->admin_page();
		*/

		$ctrl = new app\controllers\Admin();
		$ctrl ->admin_page();

	break;	


}
