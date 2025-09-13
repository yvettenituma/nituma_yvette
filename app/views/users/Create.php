<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-purple-50 flex items-center justify-center min-h-screen">

  <div class="w-full max-w-md bg-white shadow-lg rounded-lg p-8">
    <!-- Header -->
    <h1 class="text-2xl font-bold text-center text-purple-700 mb-6">Create an Account</h1>

    <!-- Sign Up Form -->
    <form action="<?=site_url('users/Create');?>" method="POST" class="space-y-4">

      <!-- Username -->
      <div>
        <label for="username" class="block text-gray-700 font-medium">Username</label>
        <input type="text" id="username" name="username" required
          class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:outline-none">
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block text-gray-700 font-medium">Email</label>
        <input type="email" id="email" name="email" required
          class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:outline-none">
      </div>

      <!-- Submit Button -->
      <button type="submit"
        class="w-full bg-purple-700 text-white py-2 rounded-lg hover:bg-purple-800 transition duration-200">
        Sign Up
      </button>
    </form>

    <!-- Login Link -->
    <p class="text-sm text-gray-600 mt-6 text-center">
      Already have an account? 
      <a href="login.php" class="text-purple-600 hover:underline">Login</a>
    </p>
  </div>

</body>
</html>
