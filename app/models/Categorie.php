<?php 
namespace app\models;

use PDO;
use app\Core\config\Database;
    class Categorie{
        private $id;
        private $titre;
        private $description;

        public function __construct() {
            // $this->id = $id;
            // $this->titre = $titre;
            // $this->description = $description;
        }
        public function __call($name, $arguments) {
    
            if($name == "BuilderCategorie"){
                if(count($arguments) == 3){
                    $this->id = $arguments[0];
                    $this->titre = $arguments[2];
                    $this->description = $arguments[3];
                } 
            }
            if($name == "BuilderCategorie"){
                if(count($arguments) == 1){
                    $this->id = $arguments[0];
             
                } 
            }
            }

        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getTitle() {
            return $this->titre;
        }

        public function setTitle($title) {
            $this->titre = $title;
        }

        public function getDescription() {
            return $this->description;
        }

        public function setDescription($description) {
            $this->description = $description;
        }
        public function selectAll()
        {
            $sql = "SELECT * FROM categories";
            $stmt = Database::getInstance()->getConnection()->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_CLASS,Categorie::class);
        }
        public function update(){
           echo  $this->id;
            $sql = "UPDATE categories SET titre = '{$this->titre}',description = '{$this->description}' WHERE id = {$this->id}"; 
            $stmt = Database::getInstance()->getConnection()->prepare($sql);
            $stmt->execute();
            return $stmt->rowCount();
        }
        

        public function delete()
        {                 $sql = "DELETE FROM categories WHERE id = ?";
            $stmt = Database::getInstance()->getConnection()->prepare($sql);
           echo $this->id;
           
            $stmt->execute([$this->id]);
    
            return $stmt->rowCount();
        }
        public function save(){
            $sql = "INSERT INTO categories (titre,description) VALUES (?,?)";
                        $stmt = Database::getInstance()->getConnection()->prepare($sql);
                        $stmt->execute([$this->titre, $this->description]);
                        return Database::getInstance()->getConnection()->lastInsertId();
        }
        public function findbyid($id) {
            $stmt = Database::getInstance()->getConnection()->prepare("SELECT * FROM categories WHERE id = ?");
            $stmt->execute([$id]);
            $stmt->setFetchMode(PDO::FETCH_CLASS,Categorie::class);
// Categorie::class
            // get_class($this)
            return $stmt->fetch();
        }
    }
 ?>