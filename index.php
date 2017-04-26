<?php
/*Front controller*/


//подключение компонента роутер
define('ROOT', dirname(__FILE__));
require_once(ROOT . '/components/Autoload.php');
require_once(ROOT . '/functions.php');
require_once(ROOT . '/config/config.php');
session_start();
if (DEBUG) {
    //настройка отображения ошибок
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
}
//запуск роутера
$router = new Router();
$router->run();