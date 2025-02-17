<?php
namespace app\Core\utils;
define('RTYU', dirname(dirname(__DIR__ . '')));

class Utils{

    public static function rander($folder,$fichierName){
        
            require_once RTYU. "\\views\\".$folder."\\".$fichierName.".php";
    
        
    }


public static function map($uri){

    switch ($uri) {
        case '/Admin/Admin/edit':
        
            header("Location: Tag/edit");

            break;
        
        default:
            # code...
            break;
    }
    return true;
}















} ?>