<?php
namespace app\Core\utils;
define('RTYU', dirname(dirname(__DIR__ . '')));

class Utils{

    public static function rander($folder,$fichierName){
        
            require_once RTYU. "\\views\\".$folder."\\".$fichierName.".php";
    
        
    }
















} ?>