<?php

class App {
    
    public function __construct(){}
    protected static $router;
    protected static $db;
    
    public static function getRtouter(){
        
        return self::router;
        
    }
    function run($uri){
       self::$router = new Router($uri);
        
        $class = str_replace(" ", "", self::$router->getController());
        echo'</br> class = '.$class;
        
        $controller_class = ucfirst($class.'Controller');
        $controller_method = strtolower
            (self::$router->getAction());
        echo"  controller_class est l'Action = ". $controller_method;
        echo"      Controller = ". $controller_class;
        
        $controller_object = new $controller_class();
        
    }
}