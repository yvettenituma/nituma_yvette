<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
  <link rel="stylesheet" href="<?=base_url();?>public/style.css">
  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-purple-50 flex justify-center items-center min-h-screen">

  <div class="w-full max-w-4xl bg-white shadow-lg rounded-lg p-6">
    <h1 class="text-2xl font-bold text-center text-purple-700 mb-6">Welcome to Index View</h1>

    <div class="overflow-x-auto">
      <table class="w-full border-collapse border border-gray-300 shadow-sm rounded-lg">
        <thead class="bg-purple-700 text-white">
          <tr>
            <th class="border border-purple-600 px-4 py-2 text-left">ID</th>
            <th class="border border-purple-600 px-4 py-2 text-left">Username</th>
            <th class="border border-purple-600 px-4 py-2 text-left">Email</th>
            <th class="border border-purple-600 px-4 py-2 text-left">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach(html_escape($users) as $user): ?>
            <tr class="hover:bg-purple-50">
              <td class="border border-gray-300 px-4 py-2 text-gray-800"><?= $user['ID']; ?></td>
              <td class="border border-gray-300 px-4 py-2 text-gray-800"><?= $user['Username']; ?></td>
              <td class="border border-gray-300 px-4 py-2 text-gray-800"><?= $user['Email']; ?></td>
              <td class="border border-gray-300 px-4 py-2 text-gray-800">
                <a href="<?=site_url('users/update/'.$user['ID']);?>" class="text-purple-600 hover:underline">Update</a> | 
                <a href="<?=site_url('users/delete/'.$user['ID']);?>" class="text-red-600 hover:underline">Delete</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

      <!-- Create Record Button -->
      <div class="mt-4 flex justify-end">
        <a href="<?=site_url('users/create');?>"
           class="bg-purple-700 text-white px-4 py-2 rounded-lg hover:bg-purple-800 transition">
          Create Record
        </a>
      </div>
    </div>
  </div>

</body>
</html>
