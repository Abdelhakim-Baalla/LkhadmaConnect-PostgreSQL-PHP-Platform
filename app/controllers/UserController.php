<?php 
namespace app\Controllers;

use app\Controllers\MainController;
use app\models\User;

class UserController extends MainController {




    public function index():void{
        $resultat = array( "key1" => "value1", "key2" => "value2", "key3" => "value3" );

        $this->renderView("views","users","liste des users",$resultat);
    }
  function add(): void
    {     $_POST["firstName"] = "aamir";
        $_POST["lastName"] = "dodo";
        $_POST["email"] = "amir.ssd@example.com";
        $_POST["password"] = "aamirelamiri";
        $createdAt = date('Y-m-d H:i:s');
         

        $user=new User($_POST["firstName"],$_POST["lastName"],$_POST["email"],$_POST["password"],$createdAt);
        $user->add();
        $users=new User;
        $users=$users->showAllUsers();
        $this->renderView("views","home","liste des users",$user);
    }
    public  function edit($id){
        echo $id;
        // return "jdfs";
        
    }
    public function showAllUsers(): array{
        $users=new User;
        $Users=$users->showAllUsers();    
  
var_dump($Users);     

return $Users;
  
}

}   























?>