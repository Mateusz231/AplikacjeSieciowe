<?php

require_once 'init.php';



	



	getRouter()->setDefaultRoute('MainPage'); // akcja/ścieżka domyślna
	//getRouter()->setLoginRoute('doLogin'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)
	getRouter()->addRoute('MainPage', 'MainPage');
	getRouter()->addRoute('show_calc',    'CalcCred',  ['user','admin']);
	getRouter()->addRoute('calc_compute', 'CalcCred',  ['user','admin']);
	getRouter()->addRoute('LoginView',       'Login');
	getRouter()->addRoute('doLogout',      'Login', ['user','admin']);
	getRouter()->addRoute('doLogin','Login');
	getRouter()->addRoute('admin_page',      'Admin', ['admin']);
	getRouter()->addRoute('showHistory',      'CalcHistory', ['admin']);
	getRouter()->addRoute('szachy', 'Szachy',['admin']);
	
	getRouter()->go(); //wybiera i uruchamia odpowiednią ścieżkę na podstawie parametru 'action';
