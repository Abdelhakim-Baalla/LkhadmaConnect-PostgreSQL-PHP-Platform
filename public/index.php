<?php
define('PROJECT_ROOT', dirname(__DIR__));
session_start(); 

require '../vendor/autoload.php';
use app\Core\config\Database;
use app\Routes\Router;
$core = new Router();
$database = new Database();



?>