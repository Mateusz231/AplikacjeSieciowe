<?php
require_once dirname(__FILE__).'/../config.php';


include $conf->root_path.'/app/security/check.php';
if($role!='admin'){
    header("Location: ".$conf->app_url);
}

require_once $conf->root_path.'/lib/smarty/Smarty.class.php';

$smarty = new Smarty();

$smarty->assign('conf',$conf);
$smarty->assign('app_url',$conf->app_url);
$smarty->assign('root_path',$conf->root_path);

$smarty->assign('page_title','Kółko i krzyżyk');
$smarty->display($conf->root_path.'/app/admin_page.tpl');