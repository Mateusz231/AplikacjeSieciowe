<?php namespace core;



class Messages{


    private $infos = array();
    private $errors = array();
    private $num = 0;





    public function addError($message){
        $this->errors[] = $message;
        $this->num++;
    }


    public function addInfo($info){
        $this->infos[]=$info;
        $this->num++;
    }


    public function isEmpty(){
        return $this->num ==0;
    }


    public function isError(){
        return count($this->errors) > 0;
    }

    public function isInfo(){
        return count($this->infos)>0;
    }

    public function getErrors(){
        return $this->errors;
    }
    public function getInfos(){
        return $this->infos;
    }

    public function clear(){
        $this->infos = array();
        $this->errors = array();
        $this->num = 0;

    }




}