<?php

namespace app\models;

use PDO;
use app\Core\config\Database;

    class Tag {
        private $id;
        private $name;

        public function __construct() {
        
        }
        public function __call($name, $arguments) {
    
            if($name == "Tagbuilder"){
                if(count($arguments) == 2){
                    $this->id = $arguments[0];
                    $this->name = $arguments[1];
                }
                if($name == "Tagbuilder"){
                    if($arguments == 1){
                        $this->name = $arguments[0];
                    }  
            
            }
        
        }
    }
        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getName() {
            return $this->name;
        }

        public function setName($name) {
            $this->name = $name;
        }
        public function selectAll()
        {
            $sql = "SELECT * FROM tags";
            $stmt = Database::getInstance()->getConnection()->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_CLASS,Tag::class);
        }
        public function update(){
           echo  $this->id;
            $sql = "UPDATE tags SET name = '{$this->name}' WHERE id = {$this->id}"; 
            $stmt = Database::getInstance()->getConnection()->prepare($sql);
            $stmt->execute();
            return $stmt->rowCount();
        }
        

        public function delete()
        {                 $sql = "DELETE FROM tags WHERE id = ?";
            $stmt = Database::getInstance()->getConnection()->prepare($sql);
           echo $this->id;
           
            $stmt->execute([$this->id]);
    
            return $stmt->rowCount();
        }
        public function save(){
            $sql = "INSERT INTO tags (name) VALUES (?)";
                        $stmt = Database::getInstance()->getConnection()->prepare($sql);
                       $stmt->execute([$this->name]);
            return Database::getInstance()->getConnection()->lastInsertId();
        }
    }
