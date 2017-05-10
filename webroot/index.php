<h1>je suis page index</h1>

<?php
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

$config = new Config();
$uri = $_SERVER['REQUEST_URI'];
var_dump($uri);

$uri = str_replace("frameworkmvc/","", $uri);
echo '</uri>'.$uri.'</br>';
$uri = urldecode(trim($uri,'/'));
echo '</br> trim : '.$uri;

 
$a = Config::get('site_name');
echo '</br> site_name :'.$a;
var_dump($a);

require_once("../app/lib/router.class.php");
$route = new Router($uri);

//App
require("../app/lib/app.class.php");
$app = new App();
$app->run($uri);

?>