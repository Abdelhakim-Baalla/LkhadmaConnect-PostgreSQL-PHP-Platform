<?php
namespace app\Core\utils;
define('PROJECT_ROOTS', dirname(dirname(__DIR__ . '')));

class Utils{

    public static function rander($folder,$fichierName){
        
            require_once PROJECT_ROOTS. "\\views\\".$folder."\\".$fichierName.".php";
    
        
    }
















} ?>