<?php
namespace app\controllers;

//zamieniamy zatem 'require' na 'use' wskazując jedynie przestrzeń nazw, w której znajduje się klasa
use app\forms\CalcForm;
use app\transfer\CalcResult;


class CalcCred{


    private $form;
    private $result;
    private $temp;


    public function __construct(){

    $this->form = new CalcForm();
    $this->result = new CalcResult();
   

    getMessages()->clear();

    }




    public function getParams(){
        $this->form->kredyt = getFromRequest('zl');
        $this->form->rok = getFromRequest('rok');
        $this->form->oprocentowanie = getFromRequest('op');
       
    }



    public function validate(){

            if ( ! (isset($this->form->kredyt) && isset($this->form->rok) && isset($this->form->oprocentowanie) ))	return false;
        
        
            $infos [] = 'Przekazano parametry.';	
            if ( $this->form->kredyt == "") {
               
                getMessages()->addError('Nie podano kredytu');
            }
            if ( $this->form->oprocentowanie == "") {     
                getMessages()->addError('Nie podano oprocentowania');
            }
        
            if ( $this->form->rok == "") {
                getMessages()->addError('Nie podano na ile lat');
            }

            if(! getMessages()->isError()){

                if (! is_numeric( $this->form->kredyt )) {
                    getMessages()->addError('Kredyt nie jest liczbą rzeczywistą');
                }
                
                if (! is_numeric( $this->form->oprocentowanie)) {
                    getMessages()->addError('Oprocentowanie nie jest liczbą rzeczywistą');
                }	
            
                if (! is_numeric( $this->form->rok)) {
                    getMessages()->addError('Rok nie jest liczbą całkowitą');
                }	

            }
            
           
            return ! getMessages()->isError();
        

    }

    public function process(){


        $this->getParams();
       
        if($this->validate()){


            
            $this->form->kredyt = floatval($this->form->kredyt);
            $this->form->oprocentowanie = floatval($this->form->oprocentowanie);
            $this->form->rok = intval($this->form->rok);

            getMessages()->addInfo('Parametry poprawne');


            $this->result->result = $this->form->kredyt/($this->form->rok*12);
            $this->temp= ($this->form->oprocentowanie*$this->result->result)/100;
            $this->result->result = round($this->result->result+$this->temp,2);


            getMessages()->addInfo('Wykonano obliczenia');

          

        }


        $this->generateView();


    }

    public function generateView(){

  
        getSmarty()->assign('page_title','Kalkulator kredytowy');
        getSmarty()->assign('page_header','Kalkulator kredytowy');
       // getSmarty()->assign('role',$this->role);
        //getSmarty()->registerPlugin("modifier", "count", "count");

        getSmarty()->assign('user',unserialize($_SESSION['user']));

        getSmarty()->assign('form',$this->form);
        getSmarty()->assign('result',$this->result);

    
        getSmarty()->display('calc_cred_view.tpl');


    }





}



