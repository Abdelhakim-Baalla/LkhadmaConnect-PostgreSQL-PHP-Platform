<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>

  <title>Sign Up Form</title>
</head>

<body class="font-sans bg-gray-100">

  <section class="signup-area overflow-hidden bg-cover bg-center bg-no-repeat py-20" style="background-image: url('https://img.freepik.com/free-photo/dreamy-cute-smart-college-girl-female-student-hipster-red-beanie-yellow-hoodie-looking-thoughtful_1258-116823.jpg?t=st=1737039661~exp=1737043261~hmac=a039a93c9d30c18ded847e92ec0a2b092db2be21eb5e49ffff67c069bccb15f3&w=1380');">
    <div class="container mx-auto px-6 lg:px-8">
      <div class="flex flex-col lg:flex-row items-center justify-center space-y-8 lg:space-y-0 lg:space-x-8">

        <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
          <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Create an Account</h2>

          <?php if (isset($_SESSION['error'])): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4" role="alert">
              <span class="block sm:inline"><?php echo $_SESSION['error']; ?></span>
              <?php unset($_SESSION['error']); ?>
            </div>
          <?php endif; ?>

          <form action="/AuthController" method="POST">
            
            <div class="form-element mb-4">
              <label for="role" class="block text-gray-700 mb-2">Role</label>
              <select name="role" required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">Select Role</option>
                <option value="TEACHER">Teacher</option>
                <option value="STUDENT">Student</option>
              </select>
            </div>

            <div class="form-element mb-4">
              <label for="firstname" class="block text-gray-700 mb-2">First Name</label>
              <input type="text" name="firstname" required placeholder="John" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <div class="form-element mb-4">
              <label for="lastname" class="block text-gray-700 mb-2">Last Name</label>
              <input type="text" name="lastname" required placeholder="Doe" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
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
              <label for="password" class="block text-gray-700 mb-2">Password</label>
              <input type="password" name="password" required placeholder="Enter your password" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <div class="form-element mb-4">
              <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Sign Up</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </section>

</body>

</html>
