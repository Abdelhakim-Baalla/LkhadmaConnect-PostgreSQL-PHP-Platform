<?php

namespace app\models;

use app\models\Avi;
use app\models\Crud;
use app\models\Role;

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
        // $this->id = $id;
        // $this->firstname = $firstname;
        // $this->lastname = $lastname;
        // $this->email = $email;
        // $this->password = $password;
        // $this->rating = $rating;
        // $this->projects = $projects;
        // $this->role = $role;
        // $this->photo = $photo;
        // $this->competence = $competence;
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
}
