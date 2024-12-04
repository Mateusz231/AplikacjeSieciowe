<?php
namespace app\controllers;


use core\App;
use core\Utils;
use core\RoleUtils;
use core\SessionUtils;
use core\ParamUtils;
use app\forms\PersonEditForm;
use core\Validator;

class ProfileCtrl{

    private $url;
    private $form;
    private $data;
    private $games;
    private $canedit = false;
    private $id;
    private $validator;

    public function __construct(){
    $this->form = new PersonEditForm();
    $this->validator = new Validator();   
    }


    public function profileValidateSave(){

    
        $this->form->email = $this->validator->validateFromRequest('email',
        [
            'trim' => true,
      //      "email" => true,
            'max_length' => 45,
            'validator_message' => 'email max 45 znaków',
        ]);

        $this->form->nickname = $this->validator->validateFromRequest('enickname',
        [
            'trim' => true,
            'max_length' => 45,
            'validator_message' => 'nickname max 45 znaków',
        ]);

        $this->form->country = $this->validator->validateFromRequest('ecountry',
        [
            'trim' => true,
            'max_length' => 50,
            'validator_message' => 'country(kraj) max 45 znaków',
        ]);

        $this->form->firstname = $this->validator->validateFromRequest('efirstname',
        [
            'trim' => true,
            'max_length' => 45,
            'validator_message' => 'firstname max 45 znaków',
        ]);

        $this->form->lastname = $this->validator->validateFromRequest('elastname',
        [
            'trim' => true,
            'max_length' => 55,
            'validator_message' => 'lastname max 55 znaków',
        ]);
    
    

     

            
        try {
            
            $record = App::getDB()->get("users", "login", [
                "login" => $this->form->login
            ]);


            $record2 = App::getDB()->get("users","email",[
            "email" => $this->form->email
            ]);


            $record3 = App::getDB()->get("users","nickname",[
            "nickname"=>$this->form->nickname        
            ]);

        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
        return !App::getMessages()->isError();


        }

     
      
    


    public function action_profileEditSave(){

    if($this->profileValidateSave()){
    
        $this->form->id = $this->validator->validateFromCleanURL(1,['int' => true, 'validator_message' => 'Niepoprawna liczba całkowita' ]);
        if(!$this->validator->isLastOK()){
            App::getRouter()->forwardTo("MainPage");
        }   
        $this->id = SessionUtils::Load("id",true);
        if($this->id != $this->form->id){
            Utils::addErrorMessage('Nieprawidlowy identyfikator');
            App::getRouter()->forwardTo("MainPage");   
        } 
            try{
                

                App::getDB()->update("users", [
                    "email" => $this->form->email,
                    "nickname" => $this->form->nickname,
                    "country" => $this->form->country,
                    "firstname" =>$this->form->firstname,
                    "lastname" =>$this->form->lastname,
                    "last_modified" => Date("Y-m-d h:i:sa"),
                    "who_modified" =>$this->id

    
                ],[

                  "userid" => $this->form->id      
                    

                 ]);



            }


            catch(\PDOException $e){
                Utils::addErrorMessage("Wystąpił błąd podczas zmiany rekordów");
            }


        
        Utils::addInfoMessage("Pomyślnie zapisano zmiany");
        $this->action_profile();
    }
    $this->action_profile();

    }
   

    

    public function action_profileEdit(){

    $this->url[0] = $this->validator->validateFromCleanURL(1,['int' => true, 'validator_message' => 'Niepoprawna liczba całkowita' ]);
    if(!$this->validator->isLastOK()){
        App::getRouter()->forwardTo("MainPage");
    }   
    $this->id = SessionUtils::Load("id",true);
    if($this->id == $this->url[0]){
        
        try {
               
            $record = App::getDB()->get("users", "*", [
                "userid" => $this->id
            ]);

  
            $this->form->id = $record['userid'];
            $this->form->login = $record['login'];
            $this->form->email = $record['email'];
            $this->form->nickname = $record['nickname'];
            $this->form->country = $record['country'];
            $this->form->firstname = $record['firstname'];
            $this->form->lastname = $record['lastname'];

        

     


    } catch (\PDOException $e) {
        Utils::addErrorMessage('Wystąpił błąd podczas edycji rekordu');
        if (App::getConf()->debug)
            Utils::addErrorMessage($e->getMessage());
    }










    }   
    else{
        Utils::addErrorMessage('Nie twój identyfikator');
        App::getRouter()->forwardTo('MainPage');    
    }  





    $this->generateEditView();

    }


    public function action_profile(){

    $this->url[0] = $this->validator->validateFromCleanURL(1,['int' => true, 'validator_message' => 'Niepoprawna liczba całkowita' ]);

    if(!$this->validator->isLastOK()){
        App::getRouter()->forwardTo("MainPage");
    }    

    $this->id = SessionUtils::Load("id",true);
    if($this->id == $this->url[0]){
        $this->canedit=true;
    }    


    try {
       
        $record = App::getDB()->get("users", "*", [
            "userid" => $this->url[0]
        ]);

         
        $record2 = App::getDB()->get("rankings", "*", [
            "users_userid" => $this->url[0]
        ]);

        if(empty($record)){
            Utils::addErrorMessage("Niepoprawny identyfikator profilu!");
            App::getRouter()->forwardTo("MainPage");
        }


        $this->data = [
            'login' => $record['login'],
            'nickname' => $record['nickname'],
            'country' => $record['country'],
            'rating' => $record2['rating'],
            'firstname' => $record['firstname'],
            'lastname' => $record['lastname']
        ];

       
        $this->games = App::getDB()->select("games", [
            "[>]users(black)" => ["blackplayerid" => "userid"],
            "[>]users(white)" => ["whiteplayerid" => "userid"]
        ], [
            "games.gameid",
            "games.date",
            "games.result",
            "games.blackplayerid",
            "games.whiteplayerid",
            "black.login(black_login)", // Login czarnego gracza
            "white.login(white_login)"  // Login białego gracza
        ], [
            "OR" => [
                "games.blackplayerid" => $this->url[0],
                "games.whiteplayerid" => $this->url[0]
            ]
        ]);

        foreach ($this->games as &$game) {
            if ($game['result'] === "white") {
                // Wygrywa biały
                if ($game['whiteplayerid'] == $this->url[0]) {
                    $game['user_result'] = "+"; // Obecny użytkownik wygrał
                } elseif ($game['blackplayerid'] == $this->url[0]) {
                    $game['user_result'] = "-"; // Obecny użytkownik przegrał
                }
            } elseif ($game['result'] === "black") {
                // Wygrywa czarny
                if ($game['blackplayerid'] == $this->url[0]) {
                    $game['user_result'] = "+"; // Obecny użytkownik wygrał
                } elseif ($game['whiteplayerid'] == $this->url[0]) {
                    $game['user_result'] = "-"; // Obecny użytkownik przegrał
                }
            } elseif ($game['result'] === "draw") {
                $game['user_result'] = "="; // Remis
            } else {
                $game['user_result'] = "?"; // Nieznany wynik
            }
        }
    
          
        
    } catch (\PDOException $e) {
        Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
        if (App::getConf()->debug)
            Utils::addErrorMessage($e->getMessage());
    }
    


    $this->generateView();    


    }

    public function generateEditView(){
        App::getSmarty()->assign('dane',$this->form);
        App::getSmarty()->assign('page_header','Edytuj dane ');
        App::getSmarty()->assign('page_title','Edycja');
        App::getSmarty()->display('profile_edit_view.tpl');     

    }


    public function generateView(){
        App::getSmarty()->assign('id',$this->id);
        App::getSmarty()->assign('edit',$this->canedit);
        App::getSmarty()->assign("tabela2",[$this->data]);
        App::getSmarty()->assign("tabela3",$this->games);
        App::getSmarty()->assign('page_header','Profil ');
        App::getSmarty()->assign('page_title',$this->data['login']);
        App::getSmarty()->display('profile_view.tpl');     
        
    }





}





