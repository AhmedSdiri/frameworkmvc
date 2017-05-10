<?php
function __autolaod($class_name){
    
    $lib_path = LIB.DS.strtolower($class_name).".class.php";
     $controller_path = MVC.DS."controllers".DS.strtolower($class_name).".controller.php";
     echo '</br> controller_path = '.$controller_path;
    if( file_exists($lib_path) ) {
        require_once($lib_path);
    }elseif (file_exists($controller_path)){
         require_once($controller_path);
    }
}
?>