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
            $khara = $this->project->selectAll('Projets');
            var_dump($khara);
        }

        public  function addprojects(){
            // $data = ['titre' => 'hazdhyhy'];
            // $this->project->insert('Projets', $data);
        }
        
    }
?>