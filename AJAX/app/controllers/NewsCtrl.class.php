<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\SessionUtils;
use core\ParamUtils;
use app\forms\PersonEditForm;
use core\Validator;


class NewsCtrl{

    private $table;
    private $title;
    private $content; 
    private $id;
    private $validator;


public function __construct(){
    $this->validator = new Validator(); 
}


public function action_addpost(){
$this->post_add_view();
}

public function validate(){

    $this->title= $this->validator->validateFromRequest("title",
    [
    'trim' => true,
    'required' => true,
    'required_message' => 'Nie podano tytułu',
    'min_length' => 10,
    'max_length' => 255,
    'validator_message' => 'Co najmniej 10 znaków, max 255',
    ]);

    $this->content= $this->validator->validateFromRequest("content",
    [
    'trim' => true,
    'required' => true,
    'required_message' => 'Nie podano treści',
    'min_length' => 1,
    'max_length' => 4294967295,
    'validator_message' => 'Co najmniej 1 znaków, max 4GB',
    ]);

     return !App::getMessages()->isError();

}


public function load_news_data(){


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


public function action_refreshNews(){
    $this->load_news_data(); 
    App::getSmarty()->assign('tabela',$this->table);
    App::getSmarty()->display('PostsTable.tpl');  
}


public function action_news(){
    $this->load_news_data();
    App::getSmarty()->assign('tabela',$this->table);
    App::getSmarty()->assign('page_header','Wiadomości');
    App::getSmarty()->assign('page_title','Wiadomości');
    App::getSmarty()->display('news.tpl');   
}




}