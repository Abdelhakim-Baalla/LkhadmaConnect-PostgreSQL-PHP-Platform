<?php

namespace app\controllers;

use app\models\Role;
use app\Core\utils\Regex;
use app\models\Utilisateur;
use app\Core\config\Database;

class AuthController{

    private Utilisateur $user ;
    private Role $role;

 private Regex   $regex ;
    public function __construct()
    {
        $this->role = new Role;

        $this->regex = new Regex;
        $this->user = new Utilisateur;

    }

    public function signupviews(){

        require_once dirname(__DIR__, 1) . '\\views\\pages\\SignUp.php';

    }
    public function index(){

        // if ($this->isLogin()) {
        //     header('Location: /dashboard');
        //     exit();
        // }
         require_once dirname(__DIR__, 1) . '\\views\\pages\\Login.php';
    }
     public function login() {
        // die("srsdfghjk");
        $email = $this->regex->ValidationEmail($_POST["email"]);
        // var_dump(  $email);
        $password = $_POST["password"];
        
        // var_dump(   $email);
        $Utilisateur = new Utilisateur();
        $Utilisateur->BuilderUser($email, $password);
        
                $user = $Utilisateur->login();
            //    var_dump(   $password);
            // var_dump(   $user->getPassword());
        if ($password==$user->getPassword()) {
            // echo "kjbdv";
            session_start();
            $_SESSION['user_id'] = $user->getId();
            $_SESSION['user_email'] = $user->getEmail();
            $_SESSION['last_name'] = $user->getLastname();
            $_SESSION['first_name'] = $user->getFirstname();
          $ObjectRole=  $this->role->findbyid($user->getRoleId(),"roles");
               $_SESSION['user_role'] = $ObjectRole->getName();
            
            $_SESSION['user_id'] = $ObjectRole->getId();

            switch ($ObjectRole->getName()) {
                case 'Freelancer':
                   header('Location: /Auth/signupviews');
                   break;
                case 'Client':
                    header('Location: /Auth/signupviews');
                    break;
                case 'Admin':
                    header('Location: /Auth/signupviews');
                    break;
                default:
                   header('Location: /W9');
             }
             exit();
          
        }
                return false;
    }
    

public function logout(){

    session_start();
    session_destroy();

    header('Location: /login');
    exit;
}
public function isLogin(){

    session_start();

    return isset($_SESSION["user_id"]);

}
public function getUser() {
    if(!$this->isLogin()){
        return false;
    }
    $user = new \app\models\Utilisateur();
    $user->findbyid($_SESSION["user_id"],"users");
    return $user;
    
}
public function hasRole($role) {
    if (empty($this->isLogin()) || $_SESSION['user_role'] !== $role) {
        
        return false;
    }

    return true;
}
}








?>