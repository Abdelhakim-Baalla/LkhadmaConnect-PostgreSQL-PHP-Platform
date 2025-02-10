<?php
namespace app\controllers;

use app\Core\utils\Utils;
use app\models\Utilisateur;
use app\Controllers\MainController;

class ClientController extends MainController{

private Utilisateur $User;

public function index(){

    Utils::rander("pages","ClientDashboard");        

}
public function setting(){
    $arr=[];
    $this->renderView("component","SettingClient","pages",$arr);
}
    
}

?>