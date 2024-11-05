<?php

require_once 'init.php';


	getRouter()->setDefaultRoute('MainPage'); 
	getRouter()->addRoute('MainPage', 'MainPage');
	getRouter()->addRoute('show_calc',    'CalcCred',  ['user','admin']);
	getRouter()->addRoute('calc_compute', 'CalcCred',  ['user','admin']);
	getRouter()->addRoute('LoginView',       'Login');
	getRouter()->addRoute('doLogout',      'Login', ['user','admin']);
	getRouter()->addRoute('doLogin','Login');
	getRouter()->addRoute('admin_page',      'Admin', ['admin']);
	
	
	getRouter()->go(); 
