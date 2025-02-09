<?php
 namespace app\models; 
 use app\models\Utilisateur;
    class Message {
        private $id;
        private Utilisateur $receiver;
        private Utilisateur $sender;
        private $message;

        public function __construct($id, $receiver, $sender, $message) {
            $this->id = $id;
            $this->receiver = $receiver;
            $this->sender = $sender;
            $this->message = $message;
        }

        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getReceiver() {
            return $this->receiver;
        }

        public function setReceiver(Utilisateur $receiver) {
            $this->receiver = $receiver;
        }

        public function getSender() {
            return $this->sender;
        }

        public function setSender(Utilisateur  $sender) {
            $this->sender = $sender;
        }
        
        public function getMessage() {
            return $this->message;
        }

        public function setMessage($message) {
            $this->message = $message;
        }
    }
 ?>