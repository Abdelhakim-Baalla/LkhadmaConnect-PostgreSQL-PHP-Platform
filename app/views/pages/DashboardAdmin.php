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

        <?php 
          require_once PROJECTU ."\\views\\component\\usersStatus.php";
           ?>
    </div>
      </div>
    </div>
  </div>
</body>
</html>