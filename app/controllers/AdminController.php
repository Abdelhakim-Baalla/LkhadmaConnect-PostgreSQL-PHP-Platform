<?php
namespace app\controllers;


use app\controllers\TagController;
use app\Controllers\MainController;

class AdminController extends MainController{
private TagController $controlertag;
public function __construct(){
 $this->controlertag = new TagController;
  
 
}

public function Tag(){
    $this->controlertag->index();
    
}

public function Categories(){
    $this->controlertag->index();
    
}
public function index(){
    $resultats = [];
$this->renderView("pages","DashboardAdmin","Admin",["project"=>$resultats]); 

}

function edit(){
    $this->controlertag->edit();

    header("Location: /Admin/Tag");

}


}

?>