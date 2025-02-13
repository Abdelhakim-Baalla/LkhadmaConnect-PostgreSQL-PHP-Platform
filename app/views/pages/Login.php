<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="https://img.icons8.com/?size=100&id=FUZiNN6aw2Rb&format=png&color=000000" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
    <title>Connection-LkhadmaConnect</title>
</head>
<body class="font-[Outfit]">
    <header class=" absolute z-50 w-full ">
        <div class="container mx-auto px-2 py-2 flex justify-between items-center">
            <div class="flex items-center">
                <span class="text-2xl font-bold text-white ml-2">Lkadma<span class="text-white">Connect</span></span>
            </div>
            <nav class="hidden md:flex space-x-6">
                <a href="#" class="text-black font-semibold">ACCUEIL</a>
                <a href="#" class="text-black">À PROPOS</a>
                <a href="/client" class="text-black">OFFRES</a>
                <a href="#" class="text-black">CALENDRIER</a>
                <a href="#" class="text-black">CONTACT</a>
            </nav>
           <div>
            <a href="/Auth" class="bg-blue-500 text-white px-4 py-2 text-sm rounded-md shadow hover:bg-blue-600">Connectez</a>
            <a href="/Auth/signupviews" class="bg-blue-500 text-white px-4 text-sm py-2 rounded-md shadow hover:bg-blue-600">Inscrire</a>
           </div>
            
        </div>
    </header>
<section class="signup-area h-screen overflow-hidden bg-gray-100 py-12 bg-cover flex content-center items-center bg-center bg-no-repeat" style="background-image: url('https://royalrecruiter.com/wp-content/uploads/2020/10/BLOG-upwork-desktop.png');">
  <div class="container mx-auto px-4">
    <div class="flex flex-col lg:flex-row items-center justify-center">
      <!-- Left Column: Signup Form -->
      <div class="lg:w-5/12 w-full order-2 lg:order-1 p-6 bg-white shadow-lg rounded-lg bg-opacity-80">
        <h2 class="text-2xl font-bold mb-2">Connectez</h2>
        <p class="text-sm text-gray-600 mb-4">Vous n'avez pas un compte? <a href="/Auth/signupviews" class="text-blue-600 hover:underline">Inscrire ici</a></p>

<form action="/auth/login" method="POST" class="w-full">

    
    <div class="form-element mb-4">
        <label for="email" class="block text-gray-700 mb-2">Email</label>
        <input type="email" name="email" required placeholder="email@example.com" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
    </div>

    <div class="form-element mb-4">
        <label for="password" class="block text-gray-700 mb-2">Mot de pass</label>
        <input type="password" name="password" required placeholder="Entrer Votre mot de pass" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
    </div>

    <div class="form-element mb-4">
        <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-md hover:bg-blue-700">Sign In</button>
    </div>
</form>
      </div>

      
    </div>
  </div>
</section>


</body>
</html>