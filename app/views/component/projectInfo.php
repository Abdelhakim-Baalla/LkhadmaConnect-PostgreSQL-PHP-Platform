<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="bg-gray-50 p-8 flex content-center">

    <div class="max-w-4xl mx-auto">
        <?php foreach ($project as $tyys) { ?>

        <div class="bg-white p-6 rounded-lg shadow-lg mb-6 transition-transform hover:scale-105">
            <div class="flex items-center space-x-4">
                <img src="<?php echo $tyys->getPhoto(); ?>" alt="photo of <?php echo $tyys->getTitre(); ?> project" class="w-24 h-24 object-cover rounded-md">
                <div>
                    <h3 class="text-xl font-semibold text-gray-800"><?php echo $tyys->getTitre(); ?></h3>
                    <p class="text-gray-600 mt-1"><?php echo $tyys->getDescription(); ?></p>
                </div>
            </div>
            
            <div class="mt-4 text-gray-600 space-y-2">
                <p class="text-sm">Budget: <?php echo $tyys->getBudget(); ?></p>
                <p class="text-sm">Durée: <?php echo $tyys->getDuration(); ?></p>
            </div>

            <div class="flex justify-end space-x-4 mt-4">
                <button class="bg-yellow-500 text-white px-4 py-2 rounded-md transition-colors hover:bg-yellow-600 focus:outline-none">Modifier</button>
                <form action="/Project/deleteprojects" method="post">
                    <button type="submit" name="supprimmer" value="<?php echo $tyys->getId(); ?>" class="bg-red-500 text-white px-4 py-2 rounded-md transition-colors hover:bg-red-600 focus:outline-none">Supprimer</button>
                </form>
            </div>
        </div>

        <?php } ?>
    </div>

</body>
</html>
