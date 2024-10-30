<?php


Class Admin{


    public function admin_page(){

include_once getConf()->root_path.'/app/controllers/CheckClass.php';
$check = new Check();
$check->checkIn();
@session_start();
if($_SESSION['role'] && $_SESSION['role']!='admin'){
    include_once getConf()->root_path.'/app/controllers/LoginClass.php'; 
    $login = new Login();
    $login->process();
}



getSmarty()->assign('page_title','Kółko i krzyżyk');
getSmarty()->assign('$conf',getConf());
getSmarty()->display('admin_page.tpl');

    }

}
