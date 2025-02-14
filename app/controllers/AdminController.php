<?php
namespace app\controllers;


use app\controllers\TagController;
use app\Controllers\MainController;
use app\models\Categorie;

class AdminController extends MainController{
private TagController $controlertag;
private CategoriesController $categorieControllers;
public function __construct(){
 $this->controlertag = new TagController;
 $this->categorieControllers = new CategoriesController;
  
 
}

public function Tag(){
    $this->controlertag->index();
    
}

public function Categories(){
    $this->categorieControllers->index();
    
}
public function index(){
    $resultats = [];
$this->renderView("pages","DashboardAdmin","Admin",["project"=>$resultats]); 

}

// function edit(){
//     $this->controlertag->edit();

//     header("Location: /Admin/Tag");

// }


}

?>