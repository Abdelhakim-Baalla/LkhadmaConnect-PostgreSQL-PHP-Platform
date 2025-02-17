<?php
namespace app\controllers;


use app\Controllers\MainController;
use app\models\Categorie;
class CategoriesController extends MainController{
private Categorie $categorie ;
public function __construct(){
 $this->categorie = new Categorie();
  
 
}

public function index(){
    $Allcategorie =  $this->categorie->selectAll();
$this->renderView("component","Categories","Categories",["Allcategorie"=>$Allcategorie]); 

}
public function edit(){
    $Editcategorie = new Categorie;
  
    $Editcategorie->BuilderCategorie(
    $_POST["id"], 
    $_POST["name"],
    $_POST["description"]

);
// echo "dhf";
$Editcategorie->update();

header("Location: /Admin/Categories");

}
public function deleteCategories(){
$deletCat = new Categorie;
$id = $_POST["deleted"];
$deletCat->setId($id);
$deletCat->delete();

    header("Location: /Admin/Categories");
}
public function Categories(){
    $this->categorie->selectAll();
}
public function save(){
    $newCategorie = new Categorie;
    $name = $_POST["name"] ;
    $description = $_POST["description"] ;

    $newCategorie->setTitle($name);
    $newCategorie->setDescription($description);

      $newCategorie->setId($newCategorie->save());

    header("Location: /Admin/Categories");
}

}

?>