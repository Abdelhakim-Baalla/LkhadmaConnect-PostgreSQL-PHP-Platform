<?php
define('PROJECT_ROOT', dirname(__DIR__));
session_start(); 
require_once PROJECT_ROOT . '\app\Core\utils\CDN.php';
require '../vendor/autoload.php';
use app\Core\config\Database;
use app\Routes\Router;
$core = new Router();
$database = new Database();



?>