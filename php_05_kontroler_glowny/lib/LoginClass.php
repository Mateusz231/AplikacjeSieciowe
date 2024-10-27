<?php
require_once dirname(__FILE__).'/../config.php';
require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/CalcMessagesClass.php';
class Login{



    private $form;
    private $msgs;
    
    public function __construct(){
        $this->msgs = new CalcMessages;
    }
    


    public function getParamsLogin(){
        $this->form['login'] = isset ($_REQUEST ['login']) ? $_REQUEST ['login'] : null;
        $this->form['pass'] = isset ($_REQUEST ['pass']) ? $_REQUEST ['pass'] : null;
    }

    public function validateLogin(){
        if ( ! (isset($this->form['login']) && isset($this->form['pass']))) {
            return false;
        }
    
        if ( $this->form['login'] == "") {
            $this->msgs->addError('Nie podano loginu');
        }
        if ( $this->form['pass'] == "") {
            $this->msgs->addError('Nie podano hasła');
        }

        if (! $this->msgs->isError()){
            if ($this->form['login'] == "admin" && $this->form['pass'] == "admin") {
                session_start();
                $_SESSION['role'] = 'admin';
    
                return true;
            }
            if ($this->form['login'] == "user" && $this->form['pass'] == "user") {
                session_start();
                $_SESSION['role'] = 'user';
                return true;
            }
            
        } 

        $this->msgs->addError('Nieprawidłowy login lub hasło');
        return false; 
    }
    

    public function process(){

        global $conf;
        global $role;        
        $smarty = new Smarty();
        $smarty->assign('conf',$conf);
        $smarty->assign('page_title','Zaloguj sie');
        $smarty->assign('page_header','Logowanie');
        $smarty->registerPlugin("modifier", "count", "count");
        $smarty->assign('messages',$this->msgs);


    
        $this->getParamsLogin();
        
        
        if ( ! ($this->validateLogin()) ) {
            $smarty->assign('messages',$this->msgs);
            $smarty->display($conf->root_path.'/app/security/login_view.tpl');
        } else { 
            
            header("Location: ".$conf->app_url);
            //include_once($conf->root_path.'/app/calc_cred.php');
        }
        
        
        
        





}

}




