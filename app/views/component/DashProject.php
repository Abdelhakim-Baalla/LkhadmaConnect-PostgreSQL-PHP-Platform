<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">
    <div class="flex min-h-screen">
        <?php
        require_once PROJECTU . "\\views\\component\\SideBarAdmine.php";
        ?>

        <div class="ml-64 flex-1 p-8 w-[1277px]">
            <table class="min-w-full table-auto border-collapse">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Project Title</th>
                        <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Description</th>
                        <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Budget</th>
                        <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Duration</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-t border-gray-200">
                        <?php foreach ($project as $tyys) { ?>
                            <td class="px-4 py-2 text-sm text-gray-800"><?php echo $tyys->getTitre(); ?></td>
                            <td class="px-4 py-2 text-sm text-gray-600"><?php echo $tyys->getDescription(); ?></td>
                            <td class="px-4 py-2 text-sm text-gray-600"><?php echo $tyys->getBudget(); ?></td>
                            <td class="px-4 py-2 text-sm text-gray-600"><?php echo $tyys->getDuration(); ?></td>
                            <td class="px-4 py-2 text-sm text-gray-600">                   
                                
                            </td>
                    </tr>

                </tbody>
            <?php } ?>
            </table>

        </div>
    </div>
    </div>
</body>


</html>