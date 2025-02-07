<?php

namespace app\Controllers;

abstract class MainController
{
    abstract function index():void;
  

    public function renderView(string $folder,string $fichierName,string $title,$result=null):void{

        include "../views/".$folder."/".$fichierName.".php";

    }

}