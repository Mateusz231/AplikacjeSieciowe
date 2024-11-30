<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('MainPage'); // akcja/ścieżka domyślna
App::getRouter()->setLoginRoute('loginShow'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

Utils::addRoute('MainPage', 'MainPage');
Utils::addRoute('register','RegisterCtrl');
Utils::addRoute('doLogin','LoginCtrl');
Utils::addRoute('loginShow','LoginCtrl');
Utils::addRoute('logout','LoginCtrl');
Utils::addRoute('search','RankingsCtrl');
Utils::addRoute('adminsearch', 'AdminPanel');
Utils::addRoute('adminedit', 'AdminPanel');
Utils::addRoute('admindelete', 'AdminPanel');
Utils::addRoute('admineditSave','AdminPanel');
Utils::addRoute('profile','ProfileCtrl');
Utils::addRoute('play','Chess');
Utils::addRoute('news','NewsCtrl');
Utils::addRoute('profileEdit','ProfileCtrl');
Utils::addRoute('profileEditSave','ProfileCtrl');
Utils::addRoute('addpost','NewsCtrl');
Utils::addRoute('savepost','NewsCtrl');