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
   <!-- <?php var_dump($userInfo); ?> -->

   <div class="border-t border-gray-200 pt-6">
    <h2 class="text-xl font-semibold mb-4">
     Account
    </h2>
    <div class="flex items-center mb-6">
     <img alt="Profile picture of a person" class="rounded-full mr-6" height="100" src="<?php echo $userInfo->getPhoto(); ?>" width="100"/>
     <div>
      <p class="text-gray-600">
       Please read our
       <a class="text-green-600" href="#">
        policy on name changes
       </a>
      </p>
     </div>
    </div>
    <form action="/Client/update" method="post">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
     <div>
      <label class="block text-gray-700" for="first-name">
       First Name
      </label>
      <input  name="firstname" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm" id="first-name" type="text" value="<?php echo "".$userInfo->getFirstname().""; ?>"/>
     </div>
     <div>
      <label class="block text-gray-700" for="last-name">
       Last Name
      </label>
      <input name="lastname" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm" id="last-name" type="text" value="<?php echo $userInfo->getLastname(); ?>"/>
     </div>
     <div>
      <label class="block text-gray-700" for="last-name">
Phone      
</label>
      <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm" id="last-name" type="text"  name="phone"  value="<?php echo $userInfo->getPhone(); ?>"/>
     </div>
    </div>
    <div class="mb-6">
     <label class="block text-gray-700" for="email">
      Email
     </label>
     <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm" id="email"  name="email"  type="email" value="<?php echo $userInfo->getEmail(); ?>"/>
    </div>
    <div class="flex space-x-4">
     <input type="submit" value="Submit" class="bg-green-600 text-white cursur py-2 px-4 rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
      

     <!-- <button class="text-gray-700 py-2 px-4 rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
      Cancel
     </button> -->
     </form>
    </div>
   </div>
  </div>
 </body>
</html>
