<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('MainPage'); // akcja/ścieżka domyślna
App::getRouter()->setLoginRoute('loginShow'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

Utils::addRoute('MainPage', 'MainPage');
Utils::addRoute('register','RegisterCtrl');
Utils::addRoute('doLogin','LoginCtrl');
Utils::addRoute('RegisterShow','RegisterCtrl');
Utils::addRoute('loginShow','LoginCtrl');
Utils::addRoute('logout','LoginCtrl',['user','admin','moderator']);
Utils::addRoute('search','RankingsCtrl',['admin','moderator','user']);
Utils::addRoute('adminsearch', 'AdminPanel',['admin']);
Utils::addRoute('adminedit', 'AdminPanel',['admin']);
Utils::addRoute('admindelete', 'AdminPanel',['admin']);
Utils::addRoute('admineditSave','AdminPanel',['admin']);
Utils::addRoute('profile','ProfileCtrl',['user','admin','moderator']);
Utils::addRoute('play','Chess',['admin','user','moderator']);
Utils::addRoute('news','NewsCtrl',['moderator','user','admin']);
Utils::addRoute('refreshNews','NewsCtrl',['moderator','user','admin']);
Utils::addRoute('profileEdit','ProfileCtrl',['user','admin','moderator']);
Utils::addRoute('profileEditSave','ProfileCtrl',['user','admin','moderator']);
Utils::addRoute('addpost','NewsCtrl',['moderator']);
Utils::addRoute('savepost','NewsCtrl',['moderator']);