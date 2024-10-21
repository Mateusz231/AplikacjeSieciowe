<?php

require_once dirname(__FILE__).'/../config.php';

require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

function getParams(&$form){
	$form['kredyt'] = isset($_REQUEST['zl']) ? $_REQUEST['zl'] : null;
	$form['rok'] = isset($_REQUEST['rok']) ? $_REQUEST['rok'] : null;
	$form['oprocentowanie'] = isset($_REQUEST['op']) ? $_REQUEST['op'] : null;	
}





function validate(&$form,&$infos,&$msgs){
	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($form['kredyt']) && isset($form['rok']) && isset($form['oprocentowanie']) ))	return false;


	$infos [] = 'Przekazano parametry.';	
	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $form['kredyt'] == "") {
		$msgs [] = 'Nie podano kredytu';
	}
	if ( $form['oprocentowanie'] == "") {
		$msgs [] = 'Nie podano oprocentowania';
	}

    if ( $form['rok']== "") {
		$msgs [] = 'Nie podano na ile lat';
	}


	//nie ma sensu walidować dalej gdy brak parametrów
	if (count ( $msgs) != 0) return false;
	
	
	if (! is_numeric( $form['kredyt'] )) {
		$msgs [] = 'Kredyt nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $form['oprocentowanie'])) {
		$msgs [] = 'Oprocentowanie nie jest liczbą całkowitą';
	}	

    if (! is_numeric( $form['rok'])) {
		$msgs [] = 'Rok nie jest liczbą całkowitą';
	}	

	if (count ( $msgs ) != 0) return false;
	else return true;
}


function process(&$form,&$infos,&$msgs,&$result){
	global $role;

	$infos [] = 'Parametry poprawne. Wykonuję obliczenia.';
	
    $form['oprocentowanie'] = floatval($form['oprocentowanie']);
    $form['kredyt'] = floatval($form['kredyt']);
    $form['rok']= intval($form['rok']);
    
    
    $result = $form['kredyt']/($form['rok']*12);
    $cross = ($form['oprocentowanie']*$result)/100;
    $result = round($result+$cross,2); 
	
}

$form = null;
$infos = array();
$msgs = array();
$result = null;
 

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($form);
if ( validate($form,$infos,$messages) ) { // gdy brak błędów
	process($form,$infos,$messages,$result);
}

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Przykład 04');
$smarty->assign('page_description','Profesjonalne szablonowanie oparte na bibliotece Smarty');
$smarty->assign('page_header','Szablony Smarty');



//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);

// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/calc_cred_view.tpl');