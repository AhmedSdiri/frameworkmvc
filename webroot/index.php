<h1>je suis page index</h1>

<?php

echo '</br><h3>Define + var_dump</h3>';
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));
define('WEBROOT',ROOT.DS."webroot");
define("APP", ROOT.DS."app");
echo 'app'.APP;
define("LIB", APP.DS."lib");
print_r('</br>'.LIB);
define('CONF', APP.DS."config");
echo'</br> CONF: '.CONF;
define('MVC', APP.DS."mvc");
echo'</br> MVC: '.MVC;

require_once("../app/lib/init.php");
require_once("../app/lib/config.class.php");
require_once(CONF.DS."config.php");


//mvc
require_once("../app/mvc/controllers/page.controller.php");
$config = new Config();
$uri = $_SERVER['REQUEST_URI'];
var_dump($uri);
echo '</br><h3>uri</h3>';
$uri = str_replace("frameworkmvc/","", $uri);
echo '</uri>'.$uri.'</br>';
$uri = urldecode(trim($uri,'/'));
echo '</br> trim : '.$uri;

echo '</br><h3>Config::get</h3>'; 
$a = Config::get('site_name');
echo '</br> site_name :'.$a;
var_dump($a);

require_once("../app/lib/router.class.php");
$route = new Router($uri);

//App
echo '</br><h3>APP</h3>';
require("../app/lib/app.class.php");
$app = new App();
$app->run($uri);

?>