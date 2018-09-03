<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

//Подключение файла Router
define('ROOT', dirname(__FILE__));
require_once (ROOT.'/components/Router.php');
require_once (ROOT.'/components/DB_connect.php');
require_once (ROOT.'/components/validation.php');

$router = new Router();
$result = $router->run();
?>


   

 <!-- https://habrahabr.ru/sandbox/89063/ -->


       