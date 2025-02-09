<?php

namespace app\Controllers;

use app\models\Utilisateur;
use app\Core\config\Database;
use app\Core\utils\Regex;

class AuthController{

    private Utilisateur   $user ;

 private Regex   $regex ;
    public function __construct()
    {
        $this->regex = new Regex;
        $this->user = new Utilisateur;

    }


    public function index(){

        if ($this->isLogin()) {
            header('Location: /dashboard');
            exit();
        }
        require_once dirname(__DIR__, 1) . '\\views\\pages\\Login.php';
    }
    public function loginForm() {
        $email = $this->regex->ValidationEmail($_POST["email"]);
        $password = $_POST['password'];
    
        if (empty($email) || empty($password)) {
            $_SESSION['error_login'] = 'password ou email is correcr ';
            header('Location: /login');
            exit();
        }
  
        if ($this->login($email, $password)) {
            $userRole = $_SESSION['user_role']; 
    
            if ($userRole === 'admin') {
                header('Location: /dashboard/admin'); 
            } elseif ($userRole === 'client') {
                header('Location: /dashboard/client'); 
            } elseif ($userRole === 'freelancer') {
                header('Location: /dashboard/freelancer'); 
            } else {
                header('Location: /dashboard');
            }
            exit();
        }
    
        // If login fails
        $_SESSION['error'] = 'Identifiants invalides.';
        header('Location: /login');
        exit();
    }
    
    public function login() {
        // die("srsdfghjk");
        $email = $this->regex->ValidationEmail($_POST["email"]);
        $password = $_POST["password"];
        
        $Utilisateur = new Utilisateur($email, $password);
                $user = $Utilisateur->login();
    
        if ($user && password_verify($password, $user->getPassword())) {
            session_start();
            $_SESSION['user_id'] = $user->getId();
            $_SESSION['user_email'] = $user->getEmail();

            $_SESSION['user_role'] = $user->getRole()->getName();
            
            $_SESSION['user_i'] = $user->getRole()->getId();
            $_SESSION['last_name'] = $user->getLastname();
            $_SESSION['first_name'] = $user->getFirstname();
            
            return true;
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