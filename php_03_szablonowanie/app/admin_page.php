<?php
require_once dirname(__FILE__).'/../config.php';


include _ROOT_PATH.'/app/security/check.php';

if($role!='admin'){
    header("Location: "._APP_URL);
}

require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);

$smarty->assign('page_title','Kółko i krzyżyk');
$smarty->display(_ROOT_PATH.'/app/admin_page.tpl');