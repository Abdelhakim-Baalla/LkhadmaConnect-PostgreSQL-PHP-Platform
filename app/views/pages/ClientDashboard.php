<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
  LkhadmaConnect
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link rel="shortcut icon" href="https://img.icons8.com/?size=100&id=FUZiNN6aw2Rb&format=png&color=000000" type="image/x-icon">
 </head>
 <body class="bg-white text-black font-sans">
  <header class="flex justify-between items-center p-4 border-b">
   <div class="flex items-center space-x-4">
  <a href="/Client/setting">  <img alt="LkhadmaConnect logo" class="h-10 w-10"  src="https://img.icons8.com/?size=100&id=FUZiNN6aw2Rb&format=png&color=000000 " />
  </a>
    <nav class="hidden md:flex space-x-4">
     <a class="text-gray-700 hover:text-black" href="#">
      Hire talent
     </a>
     <a class="text-gray-700 hover:text-black" href="#">
      Manage work
     </a>
     <a class="text-gray-700 hover:text-black" href="#">
      Reports
     </a>
     <a class="text-gray-700 hover:text-black" href="#">
      Messages
     </a>
    </nav>
   </div>
   <div class="flex items-center space-x-4">
    <div class="relative">
     <input class="border rounded-full py-2 px-4 pl-10" placeholder="Search" type="text"/>
     <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500">
     </i>
    </div>
    <div class="relative">
     <button class="flex items-center space-x-2">
      <span>
       Talent
      </span>
      <i class="fas fa-caret-down">
      </i>
     </button>
    </div>
    <i class="fas fa-question-circle text-gray-700">
    </i>
    <i class="fas fa-bell text-gray-700 relative">
     <span class="absolute top-0 right-0 bg-red-500 text-white rounded-full text-xs w-4 h-4 flex items-center justify-center">
      1
     </span>
    </i>
<a href="/Client/setting">
    <img src="<?php echo $_SESSION['photo']; ?>" title="<?php echo $_SESSION['first_name'] . ' ' . $_SESSION['last_name']; ?>" class="h-10 w-10 rounded-full" alt="<?php echo $_SESSION['last_name']; ?>" srcset="">
  
    </a>
</div>
  </header>
  <main class="p-8">
   <h1 class="text-2xl font-semibold mb-4">
    Bonjour, <?php echo $_SESSION['first_name'] . ' ' . $_SESSION['last_name']; ?>
   </h1>
   
   <section class="mb-8">
            <button id="openModal" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">+ Publier une offre</button>
        </section>
   <section>
    <h2 class="text-xl font-semibold mb-4">
     Overview
    </h2>
    <div class="border rounded-lg p-8">
     
    <section id="projects" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <?php 
          require_once PROJECTU ."\\views\\component\\projectInfo.php";
           ?>
        </section>
    </div>
   </section>
  </main>
   <div id="jobModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center">
        <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
            <h2 class="text-xl font-bold mb-4">Publier une offre</h2>
            <form id="jobForm" action="project/addprojects" method="post">
                <label class="block mb-2">Titre</label>
                <input type="text" name="titre" class="w-full border p-2 rounded mb-4" required>
                
                <label class="block mb-2">Description</label>
                <textarea name="description" class="w-full border p-2 rounded mb-4" required></textarea>
                
                <label class="block mb-2">Budget</label>
                <input type="number" name="budget" class="w-full border p-2 rounded mb-4" required>
                
                <label class="block mb-2">Durée</label>
                <input type="text" name="duration" class="w-full border p-2 rounded mb-4" required>
                
                <label class="block mb-2">Photo</label>
                <input type="text" name="photo" class="w-full border p-2 rounded mb-4" required>
                
                <div class="flex justify-end space-x-2">
                    <button type="button" id="closeModal" class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600">Annuler</button>
                    <button type="submit" name="submit" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600">Publier</button>
                </div>
            </form>
        </div>
    </div>
 </body>


 <script>
        const modal = document.getElementById("jobModal");
        const openModal = document.getElementById("openModal");
        const closeModal = document.getElementById("closeModal");
        const projectsContainer = document.getElementById("projects");
        
        openModal.addEventListener("click", () => {
            modal.classList.remove("hidden");
        });
        
        closeModal.addEventListener("click", () => {
            modal.classList.add("hidden");
        });
        
        
    </script>
</html>
