<?php

namespace app\controllers;

use Exception;
use app\models\Role;
use app\Core\utils\Regex;
use app\models\Utilisateur;
use app\Core\config\Database;
use app\Core\utils\Utils;

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
        Utils::rander("pages","SignUp");
    }


    public function index(){
        Utils::rander("pages","Login");

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
            $_SESSION['photo'] = $user->getPhoto();

            $_SESSION['first_name'] = $user->getFirstname();
          $ObjectRole=  $this->role->findbyid($user->getRoleId(),"roles");
               $_SESSION['user_role'] = $ObjectRole->getName();
            
            $_SESSION['user_id'] = $ObjectRole->getId();

            switch ($ObjectRole->getName()) {
                case 'Freelancer':
                   header('Location: /Freelencer');
                   break;
                case 'Client':
                    header('Location: /Client');
                    break;
                case 'Admin':
                    header('Location: /Admin');
                    break;
                default:
                   header('Location: /');
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

public function register()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $phone = $_POST['phone'];
        $rolename = $_POST['role'];
        
    
        $role = new Role();
        $role->BuilderRoleWithName($rolename);
// var_dump($role);
        try {
         
            $user = new Utilisateur(
                
            );
            $user->BuilderUser(
                $firstname,
                $lastname,
                $email,
                $password,
                'https://th.bing.com/th/id/OIP.qajuNYox10xSQV4SvryD1AHaHa?w=183&h=183&c=7&r=0&o=5&dpr=1.1&pid=1.7',
                $role,
                $phone
            );

       
            $createdUser = $this->user->insert("users", $user);
            if ($createdUser) {
                $_SESSION['success'] = "Account created successfully!";
            }
        } catch (Exception $e) {
   
            $_SESSION['error'] = $e->getMessage();
            header('Location: /signup');
            exit();
        }
    }
}

}








?>