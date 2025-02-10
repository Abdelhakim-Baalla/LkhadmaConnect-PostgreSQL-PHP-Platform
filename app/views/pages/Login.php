<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>
<body>
<section class="signup-area h-screen overflow-hidden bg-gray-100 py-12 bg-cover flex content-center items-center bg-center bg-no-repeat" style="background-image: url('https://royalrecruiter.com/wp-content/uploads/2020/10/BLOG-upwork-desktop.png');">
  <div class="container mx-auto px-4">
    <div class="flex flex-col lg:flex-row items-center justify-center">
      <!-- Left Column: Signup Form -->
      <div class="lg:w-5/12 w-full order-2 lg:order-1 p-6 bg-white shadow-lg rounded-lg bg-opacity-80">
        <h2 class="text-2xl font-bold mb-2">Sign Up</h2>
        <p class="text-sm text-gray-600 mb-4">Already have an account? <a href="/Auth/signupviews" class="text-blue-600 hover:underline">Sign In</a></p>

<form action="/auth/login" method="POST" class="w-full">

    
    <div class="form-element mb-4">
        <label for="email" class="block text-gray-700 mb-2">Email</label>
        <input type="email" name="email" required placeholder="email@example.com" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
    </div>

    <div class="form-element mb-4">
        <label for="password" class="block text-gray-700 mb-2">Password</label>
        <input type="password" name="password" required placeholder="Enter your password" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
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