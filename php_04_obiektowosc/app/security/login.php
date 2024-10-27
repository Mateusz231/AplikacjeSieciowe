<?php
require_once dirname(__FILE__).'/../../config.php';
require_once $conf->root_path.'/lib/LoginClass.php';

$login = new Login();
$login->process();
