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
            $this->renderView("pages","ClientDashboard","titre",[]);
        }
        

        public function editstatus(){
            $project = new Project;
            $id = $_POST["id"];
            $status= $_POST["status"];
            echo $id;
            echo $status;
           
            $project->setId($id);
            $project->setStatus($status);
            $project->updatestatus();
            

            header('location: /Admin/Project');          

        }

        public  function findprojects(){
            $projects = $this->project->selectAll('Projets');
            foreach ($projects as $tyys){
                echo "<div class='bg-white p-4 rounded shadow'>
                <img src= '{$tyys->photo}' alt='photo of {$tyys->titre} project'>
                <h3 class='text-lg font-bold'>$tyys->titre</h3>
                <p>$tyys->description</p>
                <p class='text-sm text-gray-600'>Budget: $tyys->budget</p>
                <p class='text-sm text-gray-600'>Durée: $tyys->duration</p>
                <div class='flex justify-end space-x-2 mt-2'>
                    <button class='bg-yellow-500 text-white px-3 py-1 rounded-md hover:bg-yellow-600'>Modifier</button>
                    <form action ='/Project/deleteprojects' method='post'>
                         <button type='submit' name='supprimmer' value=".$tyys->id." class='bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600'>Supprimer</button>
                    </form>
                    
                </div>
           </div>";
        //    if(isset($_POST['supprimmer'])){
        //     $this->project->delete('Projets', $tyys->id);
            
        //    }
            }
        }
public function  fetchAllProject(){

  $resultat =  $this->project->fetchAllProject();
//   var_dump(  $resultat);
  $this->renderView("component","projectInfo","pages",["project"=>$resultat]);

    
}
        public  function addprojects(){
            $titre = $_POST['titre'];
            $description = $_POST['description'];
            $budget = $_POST['budget'];
            $duration = $_POST['duration'];
            $photo = $_POST['photo'];

            $data = ['titre' => "$titre", 'description' => "$description", 'budget' => $budget, 'duration' => $duration, 'photo' => "$photo"];
            $this->project->insert('Projets', $data);  
            header('location: ../Client');          
        }

    
        public  function deleteprojects(){
        //    die();
          $this->project->delete('Projets',$_POST["supprimmer"]);
              
          header('location: ../Client');          

                     
        }
        public function  Project(){

            $resultat =  $this->project->Projects();
          //   var_dump(  $resultat);
            $this->renderView("component","projectInfoAdmin","pages",["project"=>$resultat]);
          
              
          }
          public function  Projects(){

            $resultat =  $this->project->fetchAllProject();
          //   var_dump(  $resultat);
            $this->renderView("component","DashProject","pages",["project"=>$resultat]);
          
              
          }
    }
?>