
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
     <a class="text-gray-700 hover:text-black" href="Auth/logout">
      logout
     </a>
    </nav>
   </div>
   <div class="flex items-center space-x-4">
    <div class="relative">
      <form action="/Project/search" method="post">
     <input class="border rounded-full py-2 px-4 pl-10" placeholder="Search" type="text"/>
     <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500">
     </form>  </i>
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
    <img src="<?php echo $_SESSION['photo']; ?>" title="<?php echo $_SESSION['first_name'] . ' ' . $_SESSION['last_name']; ?>" class="h-12" alt="<?php echo $_SESSION['last_name']; ?>" srcset="">
  
    </a>
</div>
  </header>