<?php


    namespace app\Controllers;
    use  app\models\Crud;
    use  app\models\Project;

    class ProjectController{

        private Project $project;
        public function __construct()
        {
           $this->project = new Project();
        }

        public function index(){

        }

        public  function findprojects(){
         
            $vat =  $this->project->selectAll('Projets');
                       
            var_dump($vat);
            
        }
        
      }
?>