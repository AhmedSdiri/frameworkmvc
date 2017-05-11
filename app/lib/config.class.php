<?php
class Config {
    
    
    protected static $setting = array();
    
    /*function __construct(){
        echo "</br>je suis la class config";
    }*/
    
    
    public static function get($key){
         return isset(self::$setting[$key]) ? self::$setting[$key] : null;
    }
    
     public static function set($key, $value){
        
        ,self::$setting = $value;
    
     }
}
?>