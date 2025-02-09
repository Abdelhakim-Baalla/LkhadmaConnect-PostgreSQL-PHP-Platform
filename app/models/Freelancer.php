<?php  
namespace app\models;
    class Freelancer {
        private $competence;
        private $portfolio;
        private $tempsTravail;

        public function __construct($competence, $portfolio, $tempsTravail) {
            $this->competence = $competence;
            $this->portfolio = $portfolio;
            $this->tempsTravail = $tempsTravail;
        }

        public function getCompetence() {
            return $this->competence;
        }

        public function setCompetence($competence) {
            $this->competence = $competence;
        }

        public function getPortfolio() {
            return $this->portfolio;
        }

        public function setPortfolio($portfolio) {
            $this->portfolio = $portfolio;
        }

        public function getTime() {
            return $this->tempsTravail;
        }

        public function setTime($tempsTravail) {
            $this->tempsTravail = $tempsTravail;
        }
    }


 ?>