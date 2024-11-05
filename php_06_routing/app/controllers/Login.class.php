<?php
namespace app\controllers;

use app\transfer\User;
use app\forms\LoginForm;

class Login{



    private $form;


    public function __construct(){

        $this->form = new LoginForm();

    }
    

    public function getParamsLogin(){
        $this->form->login = getFromRequest('login');
		$this->form->pass = getFromRequest('pass');
    }

    public function validate() {
		// sprawdzenie, czy parametry zostały przekazane
		if (! (isset ( $this->form->login ) && isset ( $this->form->pass ))) {
			// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
			getMessages()->addError('Błędne wywołanie aplikacji !');
		}
			
			// nie ma sensu walidować dalej, gdy brak parametrów
		if (! getMessages()->isError ()) {
			
			// sprawdzenie, czy potrzebne wartości zostały przekazane
			if ($this->form->login == "") {
				getMessages()->addError ( 'Nie podano loginu' );
			}
			if ($this->form->pass == "") {
				getMessages()->addError ( 'Nie podano hasła' );
			}
		}

		//nie ma sensu walidować dalej, gdy brak wartości
		if ( !getMessages()->isError() ) {
		
			// sprawdzenie, czy dane logowania poprawne
			// (takie informacje najczęściej przechowuje się w bazie danych)
			if ($this->form->login == "admin" && $this->form->pass == "admin") {

				//sesja już rozpoczęta w init.php, więc działamy ...
				$user = new User($this->form->login, 'admin');
				// zaipsz obiekt użytkownika w sesji
				$_SESSION['user'] = serialize($user);
				// dodaj rolę użytkownikowi (jak wiemy, zapisane też w sesji)
				addRole($user->role);

			} else if ($this->form->login == "user" && $this->form->pass == "user") {

				//sesja już rozpoczęta w init.php, więc działamy ...
				$user = new User($this->form->login, 'user');
				// zaipsz obiekt użytkownika w sesji
				$_SESSION['user'] = serialize($user);
				// dodaj rolę użytkownikowi (jak wiemy, zapisane też w sesji)
				addRole($user->role);

			} else {
				getMessages()->addError('Niepoprawny login lub hasło');
			}
		}
		
		return ! getMessages()->isError();
	}
    
    public function action_doLogin(){

		$this->getParamsLogin();
		
		if ($this->validate()){
			//header("Location: ".getConf()->app_url."/");
			header("Location: ".getConf()->app_url."/ctrl.php?action=show_calc");
		} else {
			$this->action_LoginView(); 
		}
		
	}

    public function action_doLogout(){
	
		session_destroy();
		getMessages()->addInfo('Poprawnie wylogowano z systemu');
		$this->action_LoginView();		 
	}

   
public function action_LoginView(){
	getSmarty()->assign('page_title','Zaloguj sie');
    getSmarty()->assign('page_header','Logowanie');
    getSmarty()->registerPlugin("modifier", "count", "count");	
    getSmarty()->assign('form',$this->form);
    getSmarty()->display('login_view.tpl');		
}

}




