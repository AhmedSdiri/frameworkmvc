<?php

class View {
    
    protected $data;
    protected $path;
    
   
    function getDefaultViewPath(){
        $router = App::getRouter();
        if($router) {
            return false;
        }
        $controller_dir = $router->getController();
        $template_name = $router->getAction()."html";
        return MVC.DS."views".DS.$controller_dir.DS.$template_name;
    }
     function __construct($data = array(), $path = null){
        if(!$path){
            $path = self::getDefaultViewPath();
        }
        /*if(!file_exists($path)) {
            throw new Exception("le template n'existe pas"); 
        }*/
        $this->data = $data;
        $this->path = $path;
         
    }
    public function render(){
        $data = $this->data;
        ob_start();
        include ($this->path);
        $content = ob_get_clean();
        return $content;
    }
    
}