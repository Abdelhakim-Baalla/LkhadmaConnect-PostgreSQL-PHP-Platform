<?php

namespace app\models;

use app\models\Avi;
use app\models\Crud;
use app\models\Role;
use app\Core\config\Database;

class Utilisateur extends Crud
{
    private $id;
    private $firstname;
    private $lastname;
    private $email;
    private $password;
    private Avi $rating;
    private $projects;
    private Role $role;
    private $photo;
    private $competence = [];

    public function __construct()
    {
  
    }
    public function __call($name, $arguments) {
        if($name == "BuilderUser"){
            if(count($arguments) == 1){
                $this->id = $arguments[0];
        }
        if($name == "BuilderUser"){
            if(count($arguments) == 2){
                $this->email = $arguments[0];
                $this->password = $arguments[1];
            } 
            if(count($arguments) == 3){
                $this->id = $arguments[0];
                $this->firstname = $arguments[1];
                $this->lastname = $arguments[2];
            }
            if(count($arguments) == 7){
                $this->id = $arguments[0];
                $this->firstname = $arguments[1];
                $this->lastname = $arguments[2];
                $this->email = $arguments[3];
                $this->password = $arguments[4];
                $this->photo = $arguments[5];
                $this->role = $arguments[6];
            }
            
            if(count($arguments) == 8){

                //To do 
                // ajouter les 8 argument 
                  // private $id;
    // private $firstname;
    // private $lastname;
    // private $email;
    // private $password;
    // private Avi $rating;
    // private $projects;
    // private Role $role;
    // private $photo;
    // private $competence = [];

            }
        }
    }
}
    public function getId()
    {
        return $this->id;
    }
    public function getFirstname()
    {
        return $this->firstname;
    }
    public function getLastname()
    {
        return $this->lastname;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getRating()
    {
        return $this->rating;
    }
    public function getProjects()
    {
        return $this->projects;
    }
    public function getRole()
    {
        return $this->role;
    }
    public function getPhoto()
    {
        return $this->photo;
    }
    public function getCompetence()
    {
        return $this->competence;
    }

    public function setId($id)
    {

        $this->id = $id;
    }
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function setRating($rating)
    {
        $this->rating = $rating;
    }
    public function setProjects($projects)
    {
        $this->projects = $projects;
    }
    public function setRole(Role $role)
    {
        $this->role = $role;
    }
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }
    public function setCompetence($competence)
    {
        $this->competence = $competence;
    }

    public function login(): Utilisateur {
      $query ="
                SELECT users.*, roles.name as role_name FROM users 
                INNER JOIN roles ON users.role_id = roles.id 
                WHERE email = ?";
            $stmt = Database::getInstance()->getConnection()->prepare($query);
            $stmt->execute([$this->email]);
            $user = $stmt->fetch(\PDO::FETCH_OBJ); 
        // var_dump( $user);
        return $user;
        }
}
