<?php


Class Admin{


    public function admin_page(){

require dirname(__FILE__).'/../config.php';
include_once $conf->root_path.'/lib/CheckClass.php';
$check = new Check();
$check->checkIn();
@session_start();
if($_SESSION['role'] && $_SESSION['role']!='admin'){
    include_once $conf->root_path.'/lib/LoginClass.php'; 
    $login = new Login();
    $login->process();
}

require_once $conf->root_path.'/lib/smarty/Smarty.class.php';

$smarty = new Smarty();

$smarty->assign('conf',$conf);
$smarty->assign('app_url',$conf->app_url);
$smarty->assign('root_path',$conf->root_path);

$smarty->assign('page_title','Kółko i krzyżyk');
$smarty->display($conf->root_path.'/app/admin/admin_page.tpl');

    }

}
