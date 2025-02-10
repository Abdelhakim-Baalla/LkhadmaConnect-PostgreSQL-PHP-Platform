<html>
 <head>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
 </head>
 <body class="bg-gray-100">
    <?php require_once __DIR__.'/NavBar.php'; ?>
  <div class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded-md mt-10">
   <h1 class="text-2xl font-bold mb-2">
    My Info
   </h1>
   <p class="text-gray-600 mb-6">
    This is a client account
   </p>
   <div class="border-t border-gray-200 pt-6">
    <h2 class="text-xl font-semibold mb-4">
     Account
    </h2>
    <div class="flex items-center mb-6">
     <img alt="Profile picture of a person" class="w-24 h-24 rounded-full mr-6" height="100" src="https://storage.googleapis.com/a1aa/image/mgnId4prbevEXhzypaySWyH6VbZnQ6XUdNEDI_efhBM.jpg" width="100"/>
     <div>
      <p class="text-gray-600">
       Please read our
       <a class="text-green-600" href="#">
        policy on name changes
       </a>
      </p>
     </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
     <div>
      <label class="block text-gray-700" for="first-name">
       First Name
      </label>
      <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm" id="first-name" type="text" value="Abdelhakim"/>
     </div>
     <div>
      <label class="block text-gray-700" for="last-name">
       Last Name
      </label>
      <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm" id="last-name" type="text" value="Baalla"/>
     </div>
    </div>
    <div class="mb-6">
     <label class="block text-gray-700" for="email">
      Email
     </label>
     <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm" id="email" type="email" value="abdelhakimbaalla50@gmail.com"/>
    </div>
    <div class="flex space-x-4">
     <button class="bg-green-600 text-white py-2 px-4 rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
      Save
     </button>
     <button class="text-gray-700 py-2 px-4 rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
      Cancel
     </button>
    </div>
   </div>
  </div>
 </body>
</html>
