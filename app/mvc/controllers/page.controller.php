<?php

require_once("../app/lib/controller.class.php");
class PageController extends Controller {
 
    function __construct($data = array()){
           echo'</br> <h3>je suis la class page</h3>';
        
        parent::__construct();
        
    }
    public function index()
    {
       echo 'je suis la method index';
        
    }
}