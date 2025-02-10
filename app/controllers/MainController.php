<?php
namespace app\Controllers;

define('PROJECT_ROOTS', dirname(dirname(__DIR__ . '/../')));



abstract class MainController
{
    abstract function index();
  

    public function renderView(string $folder,string $fichierName,string $title,$result=null):void{
        
        require_once PROJECT_ROOTS. "\\views\\".$folder."\\".$fichierName.".php";

    }

}