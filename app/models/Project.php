<?php

namespace app\models;
use PDO;
use app\models\Avi;
use app\models\Crud;
use app\models\Offre;
use app\models\Categorie;
use app\models\Utilisateur;
use app\Core\config\Database;
use AllowDynamicProperties;
use app\Core\utils\Utils;
#[AllowDynamicProperties]

class Project extends Crud
{
    private $id;
    private $titre;
    private $description;
    private $photo;
    private $duration;
    private $budget;
    private $status;
    private Utilisateur $Freelencer;
    private  Categorie $categorie;
    private Utilisateur $Client;
    private Avi $Avis;
    private Offre $Offer;
    private $category_id;

    public function __construct()
    {
        // $this->id = $id;
        // $this->title = $title;
        // $this->description = $description;
        // $this->photo = $photo;
        // $this->duration = $duration;
        // $this->budget = $budget;
        // $this->status = $status;
        // $this->Freelencer = $Freelencer;
        // $this->categorie = $categorie;
        // $this->Client = $Client;
        // $this->Avis = $Avis;
        // $this->Offer = $Offer;
    }
    public function __call($name, $arguments) {
    
        if($name == "BuilderUser"){
            if(count($arguments) == 2){
                $this->titre = $arguments[0];
                $this->description = $arguments[1];
            } 
        }
        }
    
    public function getId()
    {
        return $this->id;
    }
    public function getTitre()
    {
        return $this->titre;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getCategorieId()
    {
        return $this->category_id;
    }
    public function getPhoto()
    {
        return $this->photo;
    }
    public function getDuration()
    {
        return $this->duration;
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
    public function setTitre($title)
    {
        $this->titre = $title;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }
    public function setDuration($duration)
    {
        $this->duration = $duration;
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
    public function setCategorie(Categorie $categorie)
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


    public function search( string $search ):array
    {
        $sql = "SELECT * FROM projets where titre LIKE '%$search%' OR description LIKE '%$search%'; ";
        $stmt = Database::getInstance()->getConnection()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    public function fetchAllProject(){

        $sql = "SELECT * FROM projets";
        $stmt = Database::getInstance()->getConnection()->prepare($sql);
        $stmt->execute();
        
     $resultat =$stmt->fetchAll(PDO::FETCH_CLASS,Project::class);
             return $resultat;
    }
}
