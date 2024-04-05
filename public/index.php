<?php
require_once "../vendor/autoload.php";
$url =$_SERVER['REQUEST_URI'];
//$url = filter_var($_SERVER['REQUEST_URI'],FILTER_VALIDATE_URL);
//var_dump( filter_input(INPUT_SERVER, $_SERVER['REQUEST_URI']));

/*foreach ( array_keys($_SERVER) as $b ) {
    var_dump($b, filter_input(INPUT_SERVER, $b));
}*/
//var_dump(filter_input(INPUT_SERVER, $_SERVER['REQUEST_URI']));
$router = new \App\Router($url);




