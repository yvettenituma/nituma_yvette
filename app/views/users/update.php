<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-purple-50 flex items-center justify-center min-h-screen">

  <div class="w-full max-w-md bg-white shadow-lg rounded-lg p-8">
    <!-- Header -->
    <h1 class="text-2xl font-bold text-center text-purple-700 mb-6">Update Record</h1>

    <!-- Update Form -->
    <form action="<?=site_url('users/update/'.segment(4));?>" method="POST" class="space-y-4">

      <!-- Username -->
      <div>
        <label for="username" class="block text-gray-700 font-medium">Username</label>
        <input type="text" id="username" name="username" value="<?= html_escape($user['Username']); ?>" required
          class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:outline-none">
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block text-gray-700 font-medium">Email</label>
        <input type="email" id="email" name="email" value="<?= html_escape($user['Email']); ?>" required
          class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:outline-none">
      </div>

      <!-- Submit Button -->
      <button type="submit"
        class="w-full bg-purple-700 text-white py-2 rounded-lg hover:bg-purple-800 transition duration-200">
        Update
      </button>
    </form>
  </div>

</body>
</html>
