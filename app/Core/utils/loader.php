<?php 

define('PROJECT_ROOTS', dirname(dirname(__DIR__ . '')));
echo PROJECT_ROOTS;
require_once PROJECT_ROOTS.'\Router\Router.php';

require_once PROJECT_ROOTS.'\Controllers\ErrorController.php';
require_once PROJECT_ROOTS.'\Controllers\PageController.php';





?>