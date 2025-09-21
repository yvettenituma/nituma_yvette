<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Students Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #7e5bef, #a855f7);
            min-height: 100vh;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #fff;
            margin-bottom: 20px; 
            font-size: 32px;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .search-form {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 12px;              
            margin-bottom: 30px;  
            margin-right: 30px;
            float: right;  
        }

        .search-form input {
            width: 350px;           
            padding: 10px 12px;     
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 15px;
        }

        .search-form button {
            padding: 10px 18px;
            font-size: 15px;
            font-weight: 600;
            border-radius: 6px;
            background-color: #7e5bef;
            border: none;
        }
        .search-form button:hover {
            background-color: #6d28d9;
        }

        table {
            width: 90%;
            margin: 0 auto 25px;
            border-collapse: collapse;
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
        }

        th, td {
            padding: 14px 16px;
            text-align: left;
        }

        th {
            background: #7e5bef;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            font-size: 14px;
        }

        td {
            font-size: 15px;
            color: #000000ff;
            border-bottom: 1px solid #eee;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:hover {
            background-color: #faf5ff;
            transition: background-color 0.3s ease;
        }

        a {
            margin: 0 6px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            padding: 6px 10px;
            border-radius: 6px;
            transition: all 0.3s ease;
        }

        a[href*="update"] {
            color: #fff;
            background: #6d28d9;
        }

        a[href*="update"]:hover {
            background: #5b21b6;
        }

        a[href*="delete"] {
            color: #fff;
            background: #623b70ff;
        }

        a[href*="delete"]:hover {
            background: #1e171fff;
        }

        .button-container {
            width: 100%;
            text-align: center;
            margin-top: 15px;
        }

        .btn-create {
            display: inline-block;
            padding: 12px 22px;
            background: linear-gradient(to right, #7e5bef, #a855f7);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 15px;
            transition: all 0.3s ease;
        }

        .btn-create:hover {
            background: linear-gradient(to right, #6d28d9, #9333ea);
            transform: translateY(-2px);
        }

        /* Pagination style */
        .pagination a {
            padding: 8px 14px;
            border-radius: 6px;
            background: #fff;
            border: 1px solid #ccc;
            text-decoration: none;
            color: #7e5bef;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .pagination a:hover {
            background: #7e5bef;
            color: #fff;
            border-color: #7e5bef;
        }

        .pagination strong {
            padding: 8px 14px;
            border-radius: 6px;
            background: #7e5bef;
            color: #fff;
            font-weight: 600;
        }

        @media (max-width: 768px) {
            table {
                width: 100%;
                font-size: 14px;
            }

            th, td {
                padding: 10px;
            }

            .btn-create {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <h1>Students Info</h1>
    <form action="<?=site_url('users');?>" method="get" class="col-sm-4 float-end d-flex search-form">
		<?php
		$q = '';
		if(isset($_GET['q'])) {
			$q = $_GET['q'];
		}
		?>
        <input class="form-control me-2" name="q" type="text" placeholder="Search" value="<?=html_escape($q);?>">
        <button type="submit" class="btn btn-primary">Search</button>	
	</form>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php foreach (html_escape($user) as $users): ?>
        <tr>
            <td><?=$users['ID']; ?></td>
            <td><?=$users['Username']; ?></td>
            <td><?=$users['Email']; ?></td>
            <td>
                <a href="<?=site_url('/users/update/'.$users['ID']);?>">Update</a>
                <a href="<?=site_url('/users/delete/'.$users['ID']);?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <!-- Pagination Links -->
    <div class="mt-6 d-flex justify-content-center">
        <div class="pagination d-flex flex-wrap gap-2">
            <?= $page; ?>
        </div>
    </div>

    <div class="button-container">
        <a href="<?=site_url('users/Create'); ?>" class="btn-create">+ Create New User</a>
    </div>
</body>
</html>
