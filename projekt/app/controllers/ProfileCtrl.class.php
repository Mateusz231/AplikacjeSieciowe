<?php
namespace app\controllers;


use core\App;
use core\Utils;
use core\RoleUtils;
use core\SessionUtils;
use core\ParamUtils;
use app\forms\PersonEditForm;


class ProfileCtrl{

    private $url;
    private $form;
    private $data;
    private $games;


    public function __construct(){
    $this->form = new PersonEditForm();
    }


    public function action_profile(){

    $this->url[0] = ParamUtils::getFromCleanURL(1, false, 'Błędne wywołanie aplikacji');


    try {
       
        $record = App::getDB()->get("users", "*", [
            "userid" => $this->url[0]
        ]);

         
        $record2 = App::getDB()->get("rankings", "*", [
            "users_userid" => $this->url[0]
        ]);


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


    public function generateView(){
       // var_dump($this->games);
        App::getSmarty()->assign("tabela2",[$this->data]);
        App::getSmarty()->assign("tabela3",$this->games);
        App::getSmarty()->assign('page_header','Profil ');
        App::getSmarty()->assign('page_title',$this->data['login']);
        App::getSmarty()->display('profile_view.tpl');     
        
    }



}





