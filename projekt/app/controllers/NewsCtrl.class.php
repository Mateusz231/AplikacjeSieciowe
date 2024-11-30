<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\SessionUtils;
use core\ParamUtils;
use app\forms\PersonEditForm;


class NewsCtrl{

    private $table;
    private $title;
    private $content; 
    private $id;


public function __construct(){

}


public function action_addpost(){
$this->post_add_view();
}

public function validate(){

    $this->title = ParamUtils::getFromRequest('title');
    $this->content = ParamUtils::getFromRequest('content');

    if(!(isset($this->title))){
        return false;
    }

    if(empty($this->title)){
        Utils::addErrorMessage("Nie podano tytułu"); 
     }
     if(empty($this->content)){
         Utils::addErrorMessage("Nie podano treści");
     }

     return !App::getMessages()->isError();

}


public function action_news(){


    try {
        $this->table = App::getDB()->select("posts" 
        , [
            "post",
            "title",
            "date"
        ]);
          
            

        
    } catch (\PDOException $e) {
        Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
        if (App::getConf()->debug)
            Utils::addErrorMessage($e->getMessage());
    }

    $this->generateView();
}

public function action_savepost(){

if($this->validate()){
    $this->id = SessionUtils::Load("id",true);
    try {
       
         
        App::getDB()->insert("posts", [
            "post" => $this->content,
            "title" => $this->title,
            "date" => Date("Y-m-d h:i:sa"),
            "users_userid" =>$this->id
        ]);

        
    } catch (\PDOException $e) {
        Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
        if (App::getConf()->debug)
            Utils::addErrorMessage($e->getMessage());
    }

    $this->action_news();

}
else{
    $this->post_add_view();
}


}



public function post_add_view(){
    App::getSmarty()->assign('page_header','Dodawanie nowego postu');
    App::getSmarty()->assign('page_title','Dodawanie nowego postu');
    App::getSmarty()->display('news_add_post_view.tpl');   
}


public function generateView(){
    App::getSmarty()->assign('tabela',$this->table);
    App::getSmarty()->assign('page_header','Wiadomości');
    App::getSmarty()->assign('page_title','Wiadomości');
    App::getSmarty()->display('news.tpl');   
}




}