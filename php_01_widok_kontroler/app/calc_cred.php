<?php

require_once dirname(__FILE__).'/../config.php';



$oprocentowanie = $_REQUEST['op'];
$kredyt = $_REQUEST['zl'];
$rok = $_REQUEST['rok'];



if(! (isset($oprocentowanie) && isset($kredyt) && isset($rok)) ){
    $messages [] = 'Błędne wywołanie aplikacji. Brak z jednego parametrów';
}



if($oprocentowanie ==""){
    $messages[] = "Brak podanego oprocentowania";
}
if($kredyt==""){
    $messages[] = "Brak podanej wartosci kredytu";
}
if($rok==""){
    $messages[] = "Brak podanej ilosci lat na wziecie kredytu";
}



if(empty($messages)){
    $oprocentowanie = floatval($oprocentowanie);
    $kredyt = floatval($kredyt);
    $rok = intval($rok);
    
    
    $result = $kredyt/($rok*12);
    $cross = ($oprocentowanie*$result)/100;
    $result = round($result+$cross,2); 
    
}












include 'calc_cred_view.php';