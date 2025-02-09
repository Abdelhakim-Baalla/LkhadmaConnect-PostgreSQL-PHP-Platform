<?php

namespace app\Controllers;

use app\models\Utilisateur;
use app\Core\config\Database;

class AuthController{



    public function index(){

      echo 'this is the Auth';
  }

  public function login(string $email, string $password): bool {
// var_dump($email);
// var_dump($password);

$query ="
        SELECT users.*, roles.name as role_name FROM users 
        INNER JOIN roles ON users.role_id = roles.id 
        WHERE email = ?";
    $stmt = Database::getInstance()->getConnection()->prepare($query);
    $stmt->execute([$email]);
    $user = $stmt->fetch(\PDO::FETCH_OBJ);
// die( $user);
    if ($user && password_verify($password, $user->password)) {
        session_start();
        $_SESSION['user_id'] = $user->id;

        $_SESSION['user_email'] = $user->email;

        $_SESSION['user_role'] = $user->role_name;

   $_SESSION['last_name'] = $user->last_name ;

        $_SESSION['first_name'] = $user->first_name ;
        
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
}








?>