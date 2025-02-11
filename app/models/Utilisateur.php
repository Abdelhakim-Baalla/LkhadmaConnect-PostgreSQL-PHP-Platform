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
    private float $rating;
    private $projects;
    private Role $role;
    private $photo;

    private $phone;
    private $role_id;

    private $competence = [];

    public function __construct()
    {
        $this->role = new Role;
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
            if(count($arguments) == 4){
                $this->firstname = $arguments[0];
                $this->lastname = $arguments[1];
                $this->email = $arguments[2];
                $this->phone = $arguments[3];
            }
            if(count($arguments) == 7){
                $this->id = $arguments[0];
                $this->firstname = $arguments[1];
                $this->lastname = $arguments[2];
                $this->email = $arguments[3];
                $this->password = $arguments[4];
                $this->photo = $arguments[5];
                $this->role = $arguments[6];
                $this->phone = $arguments[7];
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
    public function getRoleId()
    {
        return $this->role_id;
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
    public function setPhone($phone)
    {

        $this->phone = $phone;
    }
    public function getPhone()
    {
        return $this->phone;
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

    public function login() {
      $query ="
               SELECT *FROM users where email =?"; 
				
               
            $stmt = Database::getInstance()->getConnection()->prepare($query);
           echo $this->email;
            $stmt->execute([$this->email]);
            $user = $stmt->fetchObject(Utilisateur::class); 
          var_dump( $user);
        return $user;
        }
}
