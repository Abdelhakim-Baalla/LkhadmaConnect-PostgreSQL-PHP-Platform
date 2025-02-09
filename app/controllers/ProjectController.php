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
         
            $vat =  $this->project->selectAll('Projets');
                       
            var_dump($vat);
            
        }
        
      }
?>