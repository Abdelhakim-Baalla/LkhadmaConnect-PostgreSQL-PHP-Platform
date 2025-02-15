<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Inscrire-LkhadmaConnect</title>
  <link rel="shortcut icon" href="https://img.icons8.com/?size=100&id=FUZiNN6aw2Rb&format=png&color=000000" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
</head>

<body class="font-sans bg-gray-100">
<header class=" w-full ">
        <div class="container mx-auto px-2 py-2 flex justify-between items-center">
            <div class="flex items-center">
                <span class="text-2xl font-bold text-black ml-2">Lkadma<span class="text-black">Connect</span></span>
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
  <section class="signup-area overflow-hidden bg-cover bg-center bg-no-repeat py-5" style="background-image: url('https://www.pexels.com/fr-fr/photo/imac-argente-sur-table-marron-a-l-interieur-de-la-chambre-58709/');">
    <div class="container mx-auto px-6 lg:px-8">
      <div class="flex flex-col lg:flex-row items-center justify-center space-y-8 lg:space-y-0 lg:space-x-8">

        <div class="w-full max-w-xl bg-white p-5 rounded-lg shadow-lg">
          <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Crée un compte</h2>

          <?php if (isset($_SESSION['error'])): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4" role="alert">
              <span class="block sm:inline"><?php echo $_SESSION['error']; ?></span>
              <?php unset($_SESSION['error']); ?>
            </div>
          <?php endif; ?>

          <form action="/Auth/register" method="POST">
            
            <div class="form-element mb-4">
              <label for="role" class="block text-gray-700 mb-2">Role</label>
              <select name="role" required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">Selecter votre role</option>
                <option value="Client">Client</option>
                <option value="Freelancer">Freelancer</option>
              </select>
            </div>

            <div class="form-element mb-4">
              <label for="firstname" class="block text-gray-700 mb-2">Prenom</label>
              <input type="text" name="firstname" required placeholder="Prenoml" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <div class="form-element mb-4">
              <label for="lastname" class="block text-gray-700 mb-2">Nom</label>
              <input type="text" name="lastname" required placeholder="Nom" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <div class="form-element mb-4">
              <label for="email" class="block text-gray-700 mb-2">Email</label>
              <input type="email" name="email" required placeholder="email@example.com" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <div class="form-element mb-4">
              <label for="phone" class="block text-gray-700 mb-2">Phone</label>
              <input type="tel" name="phone" required placeholder="+1234567890" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

           
            <div class="form-element mb-4">
              <label for="password" class="block text-gray-700 mb-2">Mot de pass</label>
              <input type="password" name="password" required placeholder="Entrer Votre mot de pass" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <div class="form-element mb-4">
              <input type="submit" class="w-full bg-blue-600 text-white py-3 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500" value="Sign Up">
            </div>
          </form>
        </div>

      </div>
    </div>
  </section>

</body>

</html>
