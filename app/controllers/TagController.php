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

public function deletetag(){
$newtag = new Tag;
$newtag->Tagbuilder($_POST["deleted_tag"]);
    $this->tags->delete();

    header("Location: /Admin/Tag");
}
public function Tags(){
    $this->tags->selectAll();
}
public function save(){
    echo $_POST["name"];
    $newtags = new Tag;
    $newtags->Tagbuilder($_POST["name"]);

$newtags->setId($this->tags->save());

    // var_dump($save);
 die();
    header("Location: /Admin/Tag");

}

}

?>