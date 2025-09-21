<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Students Info</title>
  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-purple-50 flex justify-center items-center min-h-screen">

  <div class="w-full max-w-5xl bg-white shadow-lg rounded-lg p-6">
    <h1 class="text-3xl font-bold text-center text-purple-700 mb-6">Students Info</h1>

    <!-- Search Form -->
    <form action="<?=site_url('users');?>" method="get" class="flex justify-end mb-4 gap-2">
      <?php
      $q = '';
      if(isset($_GET['q'])) {
        $q = $_GET['q'];
      }
      ?>
      <input type="text" name="q" placeholder="Search"
             value="<?=html_escape($q);?>"
             class="border border-gray-300 rounded-lg px-3 py-2 w-64 focus:outline-none focus:ring-2 focus:ring-purple-500">
      <button type="submit"
              class="bg-purple-700 text-white px-4 py-2 rounded-lg hover:bg-purple-800 transition">
        Search
      </button>
    </form>

    <!-- Table -->
    <div class="overflow-x-auto">
      <table class="w-full border-collapse border border-gray-300 shadow-sm rounded-lg">
        <thead class="bg-purple-700 text-white">
          <tr>
            <th class="border border-purple-600 px-4 py-2 text-left">ID</th>
            <th class="border border-purple-600 px-4 py-2 text-left">Name</th>
            <th class="border border-purple-600 px-4 py-2 text-left">Email</th>
            <th class="border border-purple-600 px-4 py-2 text-left">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach (html_escape($user) as $users): ?>
          <tr class="hover:bg-purple-50">
            <td class="border border-gray-300 px-4 py-2 text-gray-800"><?=$users['ID']; ?></td>
            <td class="border border-gray-300 px-4 py-2 text-gray-800"><?=$users['Username']; ?></td>
            <td class="border border-gray-300 px-4 py-2 text-gray-800"><?=$users['Email']; ?></td>
            <td class="border border-gray-300 px-4 py-2 text-gray-800">
              <a href="<?=site_url('/users/update/'.$users['ID']);?>" class="text-blue-600 hover:underline">Update</a> | 
              <a href="<?=site_url('/users/delete/'.$users['ID']);?>" class="text-red-600 hover:underline">Delete</a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <!-- Pagination Links -->
    <div class="mt-6 flex justify-center">
      <div class="pagination flex flex-wrap gap-2">
        <?= $page; ?>
      </div>
    </div>

    <!-- Create Button -->
    <div class="mt-4 flex justify-end">
      <a href="<?=site_url('users/Create');?>"
         class="bg-purple-700 text-white px-4 py-2 rounded-lg hover:bg-purple-800 transition">
        + Create New User
      </a>
    </div>
  </div>

</body>
</html>
