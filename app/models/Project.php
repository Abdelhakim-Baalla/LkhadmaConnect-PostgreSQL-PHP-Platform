<?php

namespace app\models;
use app\models\Avi;
use app\models\Utilisateur;
use app\models\Categorie;
use app\models\Crud;
use app\models\Offre;

class Project extends Crud
{
    private $id;
    private $title;
    private $description;
    private $photo;
    private $duree;
    private $budget;
    private $status;
    private Utilisateur $Freelencer;
    private  Categorie $categorie;
    private Utilisateur $Client;
    private Avi $Avis;
    private Offre $Offer;

    public function __construct()
    {
        // $this->id = $id;
        // $this->title = $title;
        // $this->description = $description;
        // $this->photo = $photo;
        // $this->duree = $duree;
        // $this->budget = $budget;
        // $this->status = $status;
        // $this->Freelencer = $Freelencer;
        // $this->categorie = $categorie;
        // $this->Client = $Client;
        // $this->Avis = $Avis;
        // $this->Offer = $Offer;
    }

        if($name == "BuilderUser"){
            if(count($arguments) == 2){
                $this->title = $arguments[0];
                $this->description = $arguments[1];
            } 
        }
        }
    }

    public function getId()
    {
        return $this->id;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getPhoto()
    {
        return $this->photo;
    }
    public function getDuree()
    {
        return $this->duree;
    }
    public function getBudget()
    {
        return $this->budget;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function getFreelencer()
    {
        return $this->Freelencer;
    }
    public function getCategorie()
    {
        return $this->categorie;
    }
    public function getClient()
    {
        return $this->Client;
    }
    public function getAvis()
    {
        return $this->Avis;
    }
    public function getOffer()
    {
        return $this->Offer;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }
    public function setDuree($duree)
    {
        $this->duree = $duree;
    }
    public function setBudget($budget)
    {
        $this->budget = $budget;
    }
    public function setStatus($status)
    {
        $this->status = $status;
    }
    public function setFreelencer($Freelencer)
    {
        $this->Freelencer = $Freelencer;
    }
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }
    public function setClient($Client)
    {
        $this->Client = $Client;
    }
    public function setAvis($Avis)
    {
        $this->Avis = $Avis;
    }
    public function setOffer($Offer)
    {
        $this->Offer = $Offer;
    }
}
