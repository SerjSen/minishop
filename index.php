<?php
/*Front controller*/
//настройка отображения ошибок
ini_set('display_errors', 1);
error_reporting(E_ALL);

//подключение компонента роутер
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php');
require_once(ROOT.'/components/Db.php');
include_once ROOT.'/models/Category.php';
include_once ROOT.'/models/Product.php';

require_once(ROOT.'/function.php');

//запуск роутера
$router = new Router();
$router->run();