<?php
namespace app\controllers;

use app\Core\utils\Utils;
use app\models\Utilisateur;
use app\Controllers\MainController;
use app\models\Project;

class ClientController extends MainController{
private Project $project;
    private Utilisateur $user;
public function __construct(){
    $this->user = new Utilisateur; 
    $this->project = new Project;  
 
}

public function index(){

    $resultat =  $this->project->fetchAllProject();
    // var_dump($resultat);
      $this->renderView("pages","ClientDashboard","pages",["project"=>$resultat]); 
           



}
public function setting(){
    
      $arr=$this->user->select("users",$_SESSION["user_id"]);
    // var_dump($arr);
    $this->renderView("component","SettingClient","pages",["userInfo"=>$arr]);
}
public function update() {
    $User = new Utilisateur;
        $User->BuilderUser(
        $_POST["firstname"], 
        $_POST["lastname"], 
        $_POST["email"], 
        $_POST["phone"]
    );
    $updateData = [
            'firstname' => $User->getFirstname(),
            'lastname'  => $User->getLastname(),
            'email'     => $User->getEmail(),
            'phone'     => $User->getPhone()
    
    ];
    // var_dump(  $updateData);
   $User->update("users", $_SESSION["user_id"], $updateData);
   $arr=$this->user->select("users",$_SESSION["user_id"]);
//    var_dump($arr);

    $this->renderView("component","SettingClient","pages",["userInfo"=>$arr]);

}

}

?>