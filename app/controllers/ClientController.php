<?php
namespace app\controllers;
session_start();

use app\Core\utils\Utils;
use app\models\Utilisateur;
use app\Controllers\MainController;

class ClientController extends MainController{

    private Utilisateur $user;
public function __construct(){
    $this->user = new Utilisateur;  
}

public function index(){

    Utils::rander("pages","ClientDashboard");        

}
public function setting(){
    
      $arr=$this->user->select("users",$_SESSION["user_id"]);
    // var_dump($arr);
    $this->renderView("component","SettingClient","pages",["userInfo"=>$arr]);
}
public function update() {
    // Create a new user object
    $User = new Utilisateur;
    
    // Call the BuilderUser method to set the user's properties
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

    $this->renderView("component","SettingClient","pages",["userInfo"=>$arr]);

    // var_dump($Object);
}

}

?>