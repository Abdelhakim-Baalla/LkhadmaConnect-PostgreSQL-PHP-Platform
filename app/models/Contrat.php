<?php
namespace app\models;
use app\models\Utilisateur;
    class Contract {
        private $id;
        private $content;
        private Utilisateur $freelancer;
        private Utilisateur $client;
        private $duration;

        public function __construct($id, $content, $freelancer, $client, $duration) {
            $this->id = $id;
            $this->content = $content;
            $this->freelancer = $freelancer;
            $this->client = $client;
            $this->duration = $duration;
        }

        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getContent() {
            return $this->content;
        }

        public function setContent($content) {
            $this->content = $content;
        }

        public function getFreelancer() {
            return $this->freelancer;
        }

        public function setFreelancer($freelancer) {
            $this->freelancer = $freelancer;
        }

        public function getClient() {
            return $this->client;
        }

        public function setClient($client) {
            $this->client = $client;
        }

        public function getDuration() {
            return $this->duration;
        }

        public function setDuration($duration) {
            $this->duration = $duration;
        }
    }

 ?>