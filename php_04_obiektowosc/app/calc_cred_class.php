<?php


require_once $conf->root_path.'lib/smarty/Smarty.class.php';
require_once $conf->root_path.'lib/CalcMessagesClass.php';
require_once $conf->root_path.'lib/CalcFormClass.php';
require_once $conf->root_path.'lib/CalcResultClass.php';


class CalcCred{



    private $msgs;
    private $form;
    private $result;
    private $temp;



    public function __construct(){

    $this->msgs= new CalcMessages();
    $this->form = new CalcForm();
    $this->result = new CalcResult();    

    }




    public function getParams(){
        $this->form->kredyt = isset($_REQUEST['zl']) ? $_REQUEST['zl'] : null;
        $this->form->rok = isset($_REQUEST['rok']) ? $_REQUEST['rok'] : null;
        $this->form->oprocentowanie = isset($_REQUEST['op']) ? $_REQUEST['op'] : null;
    }



    public function validate(){
            // sprawdzenie, czy parametry zostały przekazane
            if ( ! (isset($this->form->kredyt) && isset($this->form->rok) && isset($this->form->oprocentowanie) ))	return false;
        
        
            $infos [] = 'Przekazano parametry.';	
            // sprawdzenie, czy potrzebne wartości zostały przekazane
            if ( $this->form->kredyt == "") {
               
                $this->msgs->addError('Nie podano kredytu');
            }
            if ( $this->form->oprocentowanie == "") {     
                $this->msgs->addError('Nie podano oprocentowania');
            }
        
            if ( $this->form->rok == "") {
                $this->msgs->addError('Nie podano na ile lat');
            }
        
        
            //nie ma sensu walidować dalej gdy brak parametrów
      
            if(! $this->msgs->isError()){

                if (! is_numeric( $this->form->kredyt )) {
                    $this->msgs->addError('Kredyt nie jest liczbą całkowitą');
                }
                
                if (! is_numeric( $this->form->oprocentowanie)) {
                    $this->msgs->addError('Oprocentowanie nie jest liczbą całkowitą');
                }	
            
                if (! is_numeric( $this->form->rok)) {
                    $this->msgs->addError('Rok nie jest liczbą całkowitą');
                }	

            }
            
           
            return ! $this->msgs->isError();
        

    }

    public function process(){


        $this->getParams();

        if($this->validate()){


            $this->form->kredyt = floatval($this->form->kredyt);
            $this->form->oprocentowanie = floatval($this->form->oprocentowanie);
            $this->form->rok = intval($this->form->rok);

            $this->msgs->addInfo('Parametry poprawne');


            $result = $form['kredyt']/($form['rok']*12);
            $cross = ($form['oprocentowanie']*$result)/100;
            $result = round($result+$cross,2);     


            $this->result->result = $this->form->kredyt/($this->form->rok*12);
            $this->temp= ($this->form->oprocentowanie*$this->result->result)/100;
            $this->result->result = round($this->result->result+$this->temp,2);


            $this->msgs->addInfo('Wykonano obliczenia');

            $this->generateView();

        }





    }

    public function generateView(){


        global $conf

        $smarty = new Smarty();
        $smarty->assign('conf',$conf);
        $smarty->assign('page_title','Kalkulator kredytowy');
        $smarty->assign('page_header','Kalkulator kredytowy');
        $smarty->registerPlugin("modifier", "count", "count");

        $smarty->assign('form',$this->form);
        $smarty->assign('result',$this->result);
        $smarty->assign('messages',$this->msgs);

        $smarty->display($conf->root_path.'/app/calc_cred_view.tpl');


    }





}



