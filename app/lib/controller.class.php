<?php

class Controller {
    
    protected $data;
    protected $model;
    protected $params;
    
    function getModel(){
        return $this->model;
    }
      
    function getData(){
        return $this->data;
    }
      
    function getParams(){
        return $this->params;
    }
    function __construct($data = array()){
        
        $this->data = $data;
        $this->params = APP::getRouter()->getParams();
    }
}