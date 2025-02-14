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

    <!-- Main Content -->
    <div class="ml-64 flex-1 p-8">
      <div class="space-y-6">
        <div class="bg-white p-6 rounded-xl shadow-sm">

        <section class="teachers">
          <h1 class="text-3xl font-bold text-gray-800 mb-6">Create Tag</h1>

          <form action="/Tag/save" method="post" class="flex items-center space-x-4">
            <input type="text" name="name" placeholder="Create Tag ..." required maxlength="100" class="px-4 py-2 w-80 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" />
            <button type="submit" class="bg-green-500 text-white hover:bg-green-600 font-semibold py-2 px-6 rounded-lg transition duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-green-400">
              Create
            </button>
          </form>

          <div class="box-container mt-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            <?php foreach ($Alltags as $tags): ?>
              <div class="box bg-white shadow-lg rounded-lg p-6 flex flex-col space-y-4">
                <h3 class="text-xl font-semibold text-gray-800"><?= htmlspecialchars($tags->getName()); ?></h3>
                <div class="flex space-x-4">
                  <button id="openModal" class="bg-yellow-500 text-white hover:bg-yellow-600 font-semibold py-2 px-4 rounded-lg transition duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-yellow-400">
                    Edit
                  </button>
                  <form action="/Tag/deletetag" method="post" class="flex">
                    <button type="submit" value="<?php echo $tags->getId(); ?>" name="deleted_tag" class="bg-red-500 text-white hover:bg-red-600 font-semibold py-2 px-4 rounded-lg transition duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-red-400">
                      Delete
                    </button>
                  </form>
                </div>
              </div>
              <div id="jobModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center">
            <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
              <h2 class="text-xl font-bold mb-4">Publish Your Category</h2>
              <form id="jobForm" action="Tag/edit" method="post">
                <label class="block mb-2">Name</label>
                <input type="text" value="<?php echo $tags->getName(); ?>" name="name" class="w-full border p-2 rounded mb-4 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                <input type="hidden" value="<?php echo $tags->getId(); ?>" name="id" class="w-full border p-2 rounded mb-4 focus:outline-none focus:ring-2 focus:ring-blue-500" required>

                <div class="flex justify-end space-x-2">
                  <button type="button"  class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600">Cancel</button>
                  <input type="submit" name="idqq" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600" value="Publish" >
                </div>
              </form>
            </div>
          </div>

            <?php endforeach; ?>
          </div>

          
        </section>
      </div>
    </div>
  </div>
</body>

<script>
  const modal = document.getElementById("jobModal");
  const openModal = document.getElementById("openModal");
  const closeModal = document.getElementById("closeModal");

  openModal.addEventListener("click", () => {
    modal.classList.remove("hidden");
  });

  closeModal.addEventListener("click", () => {
    modal.classList.add("hidden");
  });
</script>
</html>