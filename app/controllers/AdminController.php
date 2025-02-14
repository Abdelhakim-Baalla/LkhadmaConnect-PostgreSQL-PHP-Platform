<?php
namespace app\controllers;


use app\models\Categorie;
use app\controllers\TagController;
use app\Controllers\MainController;
use app\controllers\ProjectController;

class AdminController extends MainController{
private TagController $controlertag;
private CategoriesController $categorieControllers;
private  ProjectController $projectcontroller;
public function __construct(){
 $this->controlertag = new TagController;
 $this->projectcontroller = new ProjectController;

 $this->categorieControllers = new CategoriesController;
  
 
}
public function Project(){
    $this->projectcontroller->Project();
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