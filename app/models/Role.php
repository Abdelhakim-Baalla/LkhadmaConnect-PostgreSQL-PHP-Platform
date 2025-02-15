<?php 
namespace app\models;

use PDO;
use app\models\Crud;
use app\Core\config\Database;

class Role extends Crud{
    private $id;
    private $role_name;
    private $role_description;

    public function __construct()
    {
        // $this->id = $id;
        // $this->role_name = $name;
        // $this->role_description = $description;
    }
    public function __call($name, $arguments) {
        // if($name == "BuilderRole"){
        //     if(count($arguments) == 1){
        //         $this->id = $arguments[0];
        // }
        if($name == "BuilderRoleWithName"){
            if(count($arguments) == 1){
                $this->role_name = $arguments[0];
        }
    
    }}

    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->role_name;
    }
    public function getDescription()
    {
        return $this->role_description;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function setName($name)
    {
        $this->role_name = $name;
    }
    public function setDescription($description)
    {
        $this->role_description = $description;
    }
    public function findbyname($role_name) {
        $stmt = Database::getInstance()->getConnection()->prepare("SELECT * FROM roles WHERE role_name = ?");
        $stmt->execute([$role_name]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this));
        return $stmt->fetch();
    }
}
