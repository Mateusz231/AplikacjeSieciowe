<?php
class Login{



    private $form;
    

    public function getParamsLogin(){
        $this->form['login'] = isset ($_REQUEST ['login']) ? $_REQUEST ['login'] : null;
        $this->form['pass'] = isset ($_REQUEST ['pass']) ? $_REQUEST ['pass'] : null;
    }

    public function validateLogin(){
        @session_start();
        @session_destroy();
        if ( ! (isset($this->form['login']) && isset($this->form['pass']))) {
            return false;
        }
    
        if ( $this->form['login'] == "") {
            getMessages()->addError('Nie podano loginu');
        }
        if ( $this->form['pass'] == "") {
            getMessages()->addError('Nie podano hasła');
        }

        if (! getMessages()->isError()){
            if ($this->form['login'] == "admin" && $this->form['pass'] == "admin") {
                session_start();
                $_SESSION['role'] = 'admin';
                global $role;
                $role ='admin';
    
                return true;
            }
            if ($this->form['login'] == "user" && $this->form['pass'] == "user") {
                session_start();
                $_SESSION['role'] = 'user';
                return true;
            }
            
        } 

        getMessages()->addError('Nieprawidłowy login lub hasło');
        return false; 
    }
    

    public function process(){

        getSmarty()->assign('page_title','Zaloguj sie');
        getSmarty()->assign('page_header','Logowanie');
        getSmarty()->registerPlugin("modifier", "count", "count");
        getSmarty()->assign('messages',getMessages());
        getSmarty()->assign('$conf',getConf());

        $this->getParamsLogin();
        
        
        if ( ! ($this->validateLogin()) ) {
            getSmarty()->display('login_view.tpl');
        } else { 
            
           //   header("Location: ".$conf->app_url);
            //include_once($conf->root_path.'/app/calc_cred.php');
        }
        
        
        
        





}

}




