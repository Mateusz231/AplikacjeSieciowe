<?php
require_once dirname(__FILE__).'/../../config.php';
require_once $conf->root_path.'/lib/LogoutClass.php';
$logout = new Logout();
$logout->logout();



