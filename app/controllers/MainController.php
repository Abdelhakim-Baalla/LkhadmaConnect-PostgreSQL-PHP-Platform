<?php
namespace app\Controllers;

define('PROJECTU', dirname(dirname(__DIR__ . '/../')));



abstract class MainController
{
    abstract function index();
  

    public function renderView(string $folder,string $fichierName,string $title,$result=null):void{
        
        require_once PROJECTU. "\\views\\".$folder."\\".$fichierName.".php";

    }

}