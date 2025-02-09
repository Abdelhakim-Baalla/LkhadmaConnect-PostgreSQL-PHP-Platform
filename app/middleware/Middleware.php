<?php

 class Middleware{

    public static function isAuth() {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header('Location: /login');
            exit();
        }
        return true;
    }

    
}














?>