<?php
function __autolaod($class_name){
  
  
    echo 'je suis autoload de init';
    $lib_path = LIB.DS.strtolower($class_name).".class.php";
     $controller_path = MVC.DS."controllers".DS.strtolower($class_name).".controller.php";
     echo '</br>  dans la init.phph controller_path = '.$controller_path;
    if( file_exists($lib_path) ) {
        require_once($lib_path);
    }elseif (file_exists($controller_path)){
         require_once($controller_path);
    }else{
      //  throw new Exception("!!!!la class $class_name n'existe pas", 1);
      echo 'Exception reçue : ',  $e->getMessage(), "\n";
    }
}

?>