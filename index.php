<?php
session_start();

ini_set('display_errors', 1);
error_reporting(E_ALL);


define('ROOT', $_SERVER['DOCUMENT_ROOT']);
require_once(ROOT.'/components/Router.php');
require_once(ROOT.'/components/Db.php');
require_once(ROOT.'/components/Autoload.php');



$router = new Router();
$router->run();