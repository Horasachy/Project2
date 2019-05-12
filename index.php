<?php
// 1. Общие настройки

ini_set('display_errors', 1);
error_reporting(E_ALL);

// 2. Подключение файлов системы

define('ROOT', $_SERVER['DOCUMENT_ROOT']);
require_once(ROOT.'/components/Router.php');
require_once(ROOT.'/components/Db.php');
require_once(ROOT.'/components/Autoload.php');

// 3. Установка соединения с БД


// 4. Вызор Router

$router = new Router();
$router->run();