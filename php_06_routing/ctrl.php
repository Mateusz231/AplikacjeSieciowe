<?php

require_once 'init.php';

getConf()->login_action = 'login';


switch ($action) {
	default : 
		
	control('app\\controllers', 'MainPage',		'MainP');
	break;
	case 'calcCompute' :

		control('app\\controllers', 'CalcCred',		'process',['user','admin']);
	break;
	case 'LoginCompute' :

	   	control('app\\controllers', 'Login',	'doLogin');
		
	break;

	case 'LoginView':

		control('app\\controllers', 'Login',	'generateView');

		break;

	case 'Logout2' :

		control('app\\controllers', 'Login',	'doLogout',['user','admin']);

	break;


	case 'Admin' : 

		control('app\\controllers', 'Admin',	'admin_page',['admin']);

	break;	


}
