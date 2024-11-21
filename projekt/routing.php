<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('MainPage'); // akcja/ścieżka domyślna
//App::getRouter()->setLoginRoute('login'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

//Utils::addRoute('personList',    'PersonListCtrl')
Utils::addRoute('MainPage', 'MainPage');
Utils::addRoute('register','RegisterCtrl');
Utils::addRoute('doLogin','LoginCtrl');
Utils::addRoute('loginShow','LoginCtrl');
Utils::addRoute('logout','LoginCtrl');
Utils::addRoute('search','RankingsCtrl');