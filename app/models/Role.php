<?php 
namespace app\models;
class Role
{
    private $id;
    private $role_name;
    private $role_description;

    public function __construct($id, $name, $description)
    {
        $this->id = $id;
        $this->role_name = $name;
        $this->role_description = $description;
    }

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
}
