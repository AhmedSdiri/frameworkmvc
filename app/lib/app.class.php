<?php
require_once("view.class.php");
class App {
    
    public function __construct(){}
    protected static $router;
    protected static $db;
    
    public static function getRouter(){
        
        return self::$router;
        
    }
    function run($uri){
       self::$router = new Router($uri);
        
        $class = str_replace(" ", "", self::$router->getController());
        echo'</br> class = '.$class;
         echo '</br>';
        $controller_class = ucfirst($class."Controller");
        $controller_method = strtolower
            (self::$router->getAction());
         echo"  controller_class = ". $controller_class;
         echo '</br>';
        echo"  controller_method(action) === ". $controller_method;
         echo '</br>';
       
        
        //lancer la page comme controller
        $controller_object = new $controller_class();
        if (method_exists($controller_object,$controller_method)){
            $view_path = $controller_object->$controller_method();
            $view_object = new View($controller_object->getData(), $view_path);
            
        }
        $layout = Config::get("default_layout")."html";
        $layout_path = APP.DS."template".DS.$layout;
        
        $layout_view_object = new View(compact("content",$layout_path));
        echo $layout_view_object->render();
    }
}