<?php
namespace app\controllers;

use app\Controllers\MainController;

    use  app\models\Crud;
    use  app\models\Project;


    class ProjectController extends MainController{
        private Project $project;
        public function __construct()
        {
           $this->project = new Project();
        }

        public function index(){
            $this->renderView("pages","ClientDashboard","jbdjsdjsbc",[]);
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