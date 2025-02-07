<?php

namespace app\Controllers;

use app\models\User;
class AuthController{



    public function index(){

      echo 'this is the Auth';
  }

  public function handleLogin() {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = new User;
    if ($user->login($username, $password)) {
        session_start();
        $_SESSION['user'] = $user->getFirstName();
        header('Location: /Dash');
    } else {
        echo "Invalid credentials.";
    }
}
}








?>