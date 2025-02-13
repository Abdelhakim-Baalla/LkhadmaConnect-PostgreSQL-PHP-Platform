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
          require_once PROJECTU ."\\views\\component\\SideBarAdmine.php";
           ?>

    <!-- Main Content -->
    <div class="ml-64 flex-1 p-8">
 
      <div class="space-y-6">
        <div class="bg-white p-6 rounded-xl shadow-sm">

        <section class="teachers">
    <h1 class="heading">Create Tag</h1>

    <form action="/Tag/save" method="post" class="search-tutor">
        <input type="text" name="name" placeholder="Create Tag ..." required maxlength="100">
        <button type="submit" class="fa-regular fa-square-plus" name="name">Create </button>
    </form>

    <div class="box-container">
        <?php
        foreach ($Alltags as $tags):
        ?>
            <div class="box">
                <div class="tutor">
                    <div class="info" style="margin-left: 20px;">
                        <h3><?= htmlspecialchars($tags->getName()); ?></h3>
                    </div>
                </div>
                <form action="/Tag/deletetag" method="post" class="search-tutor">
        <button  type="submit" value="<?php echo $tags->getId(); ?> name="deleted_tag" maxlength="100">Supprimer</button>
    </form>          
  </div>
        <?php 
        endforeach;
        ?>
    </div>
</section>

<!-- <script>
    function confirmDelete(categoryId) {
        if (confirm("Are you sure you want to delete this category?")) {
            window.location.href = '/category/deletCategory?id=' + categoryId;
        }
    }
</script> -->

<style>
    /* Add some basic styles for buttons and layout */
    .teachers {
        text-align: center;
        padding: 20px;
        background-color: #f8f9fa;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .heading {
        font-size: 2rem;
        color: #333;
        margin-bottom: 20px;
    }

    .search-tutor input {
        padding: 10px;
        font-size: 16px;
        border-radius: 5px;
        border: 1px solid #ddd;
        margin-right: 10px;
        width: 300px;
    }

    .search-tutor button {
        padding: 10px 15px;
        background-color: #28a745;
        border: none;
        color: white;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
    }

    .box-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
    }

    .box {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        width: 200px;
        text-align: center;
    }

    .inline-btn {
        text-decoration: none;
        padding: 10px;
        border-radius: 5px;
        color: white;
        background-color: orangered;
        font-size: 14px;
    }

    /* Add a hover effect for the delete button */
    .inline-btn:hover {
        background-color: #e64a19;
        transition: 0.3s;
    }

    /* Special styling for delete button */
    .bg-delete {
        background-color: orangered;
    }

</style>

    </div>
      </div>
    </div>
  </div>
</body>
</html>