<?php
namespace app\controllers;

use app\Controllers\MainController;

    use  app\models\Crud;
    use  app\models\Project;


    class ProjectController extends MainController{
        private Project $project;
        private $id_supprimer;
        public function __construct()
        {
           $this->project = new Project();
        }

        public function index(){
            $this->renderView("pages","ClientDashboard","jbdjsdjsbc",[]);
        }
        

        

        public  function findprojects(){
            $tys = $this->project->selectAll('Projets');
            foreach ($tys as $tyys){
                echo "<div class='bg-white p-4 rounded shadow'>
                <h3 class='text-lg font-bold'>$tyys->titre</h3>
                <p>$tyys->description</p>
                <p class='text-sm text-gray-600'>Budget: $tyys->budget</p>
                <p class='text-sm text-gray-600'>Durée: $tyys->duration</p>
                <div class='flex justify-end space-x-2 mt-2'>
                    <button class='bg-yellow-500 text-white px-3 py-1 rounded-md hover:bg-yellow-600'>Modifier</button>
                    <form method='post'>
                         <input type='submit' name='supprimmer' value='Supprimmer' class='bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600'>
                    </form>
                    
                </div>
           </div>";
        //    if(isset($_POST['supprimmer'])){
        //     $this->project->delete('Projets', $tyys->id);
            
        //    }
            }
        }

        public  function addprojects(){
            $titre = $_POST['titre'];
            $description = $_POST['description'];
            $budget = $_POST['budget'];
            $duration = $_POST['duration'];
            $photo = $_POST['photo'];

            $data = ['titre' => "$titre", 'description' => "$description", 'budget' => $budget, 'duration' => $duration, 'photo' => "$photo"];
            $this->project->insert('Projets', $data);  
            header('location: ../project');          
        }

    
        public  function deleteprojects(){
            
          $this->project->delete('Projets', 1);
              
                     
        }
    }
?>