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