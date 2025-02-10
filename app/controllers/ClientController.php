<?php
namespace app\controllers;

use app\Controllers\MainController;
use app\models\Utilisateur;

class ClientController extends MainController{

private Utilisateur $User;

public function index(){

    require_once dirname(__DIR__, 1) . '\\views\\pages\\ClientDashboard.php';

}
    
}

?>