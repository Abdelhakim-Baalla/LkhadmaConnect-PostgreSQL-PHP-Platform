<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LkhadmaConnect</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-white shadow">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="#" class="font-bold text-xl">LkhadmaConnect</a>
            <nav class="flex space-x-4">
                <a href="#" class="hover:underline">Embaucher un talent</a>
                <a href="#" class="hover:underline">Gérer le travail</a>
                <a href="#" class="hover:underline">Rapports</a>
                <a href="#" class="hover:underline">Messages</a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8">
        <section class="mb-8">
            <button id="openModal" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">+ Publier une offre</button>
        </section>

      
        <section id="projects" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <?php 
            use app\Controllers\ProjectController;
            $ProjectController = new ProjectController();
            $ProjectController->findprojects();
           ?>
        </section>
    </main>

    <!-- Modal -->
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
</body>
</html>
