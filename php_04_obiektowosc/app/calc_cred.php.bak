<?php

require_once dirname(__FILE__).'/../config.php';


include _ROOT_PATH.'/app/security/check.php';


function getParams(&$kredyt,&$rok,&$oprocentowanie){
	$kredyt = isset($_REQUEST['zl']) ? $_REQUEST['zl'] : null;
	$rok = isset($_REQUEST['rok']) ? $_REQUEST['rok'] : null;
	$oprocentowanie = isset($_REQUEST['op']) ? $_REQUEST['op'] : null;	
}



if(! (isset($oprocentowanie) && isset($kredyt) && isset($rok)) ){
    $messages [] = 'Błędne wywołanie aplikacji. Brak z jednego parametrów';
}


function validate(&$rok,&$kredyt,&$oprocentowanie,&$messages){
	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($oprocentowanie) && isset($kredyt) && isset($rok))) {
		// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		// teraz zakładamy, ze nie jest to błąd. Po prostu nie wykonamy obliczeń
		return false;
	}

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $kredyt == "") {
		$messages [] = 'Nie podano kredytu';
	}
	if ( $oprocentowanie == "") {
		$messages [] = 'Nie podano oprocentowania';
	}

    if ( $rok == "") {
		$messages [] = 'Nie podano roku';
	}


	//nie ma sensu walidować dalej gdy brak parametrów
	if (count ( $messages ) != 0) return false;
	
	// sprawdzenie, czy $x i $y są liczbami całkowitymi
	if (! is_numeric( $kredyt )) {
		$messages [] = 'Kredyt nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $oprocentowanie )) {
		$messages [] = 'Oprocentowanie nie jest liczbą całkowitą';
	}	

    if (! is_numeric( $rok )) {
		$messages [] = 'Rok nie jest liczbą całkowitą';
	}	

	if (count ( $messages ) != 0) return false;
	else return true;
}


function process(&$kredyt,&$rok,&$oprocentowanie,&$messages,&$result){
	global $role;
	
    $oprocentowanie = floatval($oprocentowanie);
    $kredyt = floatval($kredyt);
    $rok = intval($rok);
    
    
    $result = $kredyt/($rok*12);
    $cross = ($oprocentowanie*$result)/100;
    $result = round($result+$cross,2); 
	
}

$kredyt = null;
$oprocentowanie = null;
$rok = null;
$result = null;
$messages = array();

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($kredyt,$rok,$oprocentowanie);
if ( validate($rok,$kredyt,$oprocentowanie,$messages) ) { // gdy brak błędów
	process($kredyt,$rok,$oprocentowanie,$messages,$result);
}



include 'calc_cred_view.php';