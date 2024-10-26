<?php


require_once dirname(__FILE__).'/../config.php';

require_once $conf->root_path.'/app/calc_cred_class.php';

$ctrl = new CalcCred();
$ctrl->process();