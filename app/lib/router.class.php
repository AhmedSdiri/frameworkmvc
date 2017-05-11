<?php

class Router {
    
    protected $uri;
    protected $controller;
    protected $action;
    protected $params;
    
     public function getUri(){
        return $this->uri;
    }
    public function getController(){
        return $this->controller;
    }
    public function getAction(){
        return $this->action;
    }
    public function getParams(){
        return $this->params;
    }
    
    function __construct($uri){
        var_dump($uri);
        
        $uri_parts = explode('?', $uri);
        
        $this->controller = Config::get('default_controller');
        $this->action = Config::get('default_action'); 
        $path = $uri_parts[0];
        $path_parts = explode('/', $path);
        var_dump($path_parts);
        
        if (count($path_parts)){
        if(current($path_parts) ) {
            $this->controller = strtolower(current($path_parts));
            echo "  controller = ", $this->controller;
             array_shift($path_parts);
             array_shift($path_parts);
        }
    }
        if (count($path_parts)){
        if(current($path_parts) ) {
            $this->controller = strtolower(current($path_parts));
            echo "</br>  action = ", $this->action;
             array_shift($path_parts);
            
        }
            echo'</br> PARAMS';
            $this->params = $path_parts;
            var_dump($this->params);
            echo'</br> CONTROLLER';
            var_dump($this->controller);
            echo'</br> ACTION';
            var_dump($this->action);
    }
        
        
    }
    
} 
?>