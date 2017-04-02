<?php
/*Front controller*/
//настройка отображения ошибок
ini_set('display_errors', 1);
error_reporting(E_ALL);

//подключение компонента роутер
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Autoload.php');
require_once(ROOT.'/functions.php');
session_start();


//запуск роутера
$router = new Router();
$router->run();