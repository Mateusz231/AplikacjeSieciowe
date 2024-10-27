<?php
require_once dirname(__FILE__).'/../../config.php';
require_once $conf->root_path.'/lib/CheckClass.php';


$check = new Check ();
$check->checkIn();
