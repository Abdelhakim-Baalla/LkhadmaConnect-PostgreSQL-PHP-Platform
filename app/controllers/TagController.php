<?php
namespace app\controllers;


use app\Controllers\MainController;
use app\models\Tag;
class TagController extends MainController{
private Tag $tags ;
public function __construct(){
 $this->tags = new Tag();
  
 
}

public function index(){
    $Alltags =  $this->tags->selectAll();
$this->renderView("component","tags","Admin",["Alltags"=>$Alltags]); 

}
public function edit(){
    $tagEdit = new Tag;
  
    $tagEdit->Tagbuilder(
    $_POST["id"], 
    $_POST["name"]
);
echo "dhf";
$tagEdit->update();

header("Location: /Admin/Tag");

}
public function deletetag(){
$newtag = new Tag;
$id = $_POST["deleted_tag"];
echo $id;
$name="vct";
$newtag->Tagbuilder($id,$name);
$newtag->delete();

    header("Location: /Admin/Tag");
}
public function Tags(){
    $this->tags->selectAll();
}
public function save(){
    $newtags = new Tag;
    $name = $_POST["name"] ;
    $newtags->setName($name);
      $newtags->setId($newtags->save());
    header("Location: /Admin/Tag");
}

}

?>