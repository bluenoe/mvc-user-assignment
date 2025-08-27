<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>List of Users</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 30px;
            font-weight: 300;
            font-size: 2rem;
        }

        /* Form Styling */
        form {
            text-align: center;
            margin: 30px auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            max-width: 600px;
        }

        form input[type="text"] {
            padding: 12px 16px;
            border: 2px solid #e1e8ed;
            border-radius: 6px;
            font-size: 14px;
            width: 300px;
            max-width: 100%;
            margin-right: 10px;
            transition: border-color 0.3s ease;
        }

        form input[type="text"]:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
        }

        form button {
            background: linear-gradient(135deg, #3498db, #2980b9);
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        form button:hover {
            background: linear-gradient(135deg, #2980b9, #21618c);
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(52, 152, 219, 0.3);
        }

        /* Table Container for Responsiveness */
        .table-container {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            overflow: hidden;
            margin: 0 auto;
            max-width: 1000px;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        /* Table Styling */
        table {
            border-collapse: collapse;
            width: 100%;
            min-width: 600px;
            background: white;
        }

        th {
            background: linear-gradient(135deg, #34495e, #2c3e50);
            color: white;
            font-weight: 600;
            padding: 18px 16px;
            text-align: left;
            font-size: 14px;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            border: none;
        }

        td {
            padding: 16px;
            border-bottom: 1px solid #ecf0f1;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }

        /* Zebra Striping */
        tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        tr:nth-child(odd) {
            background-color: white;
        }

        /* Hover Effect */
        tbody tr:hover {
            background-color: #e3f2fd !important;
            transform: scale(1.01);
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        /* Action Links Styling */
        .action-links {
            text-align: center;
        }

        .action-links a {
            display: inline-block;
            margin: 0 4px;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 13px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .action-links a:first-child {
            background-color: #27ae60;
            color: white;
        }

        .action-links a:first-child:hover {
            background-color: #219a52;
            transform: translateY(-1px);
            box-shadow: 0 3px 8px rgba(39, 174, 96, 0.3);
        }

        .action-links a:last-child {
            background-color: #e74c3c;
            color: white;
        }

        .action-links a:last-child:hover {
            background-color: #c0392b;
            transform: translateY(-1px);
            box-shadow: 0 3px 8px rgba(231, 76, 60, 0.3);
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            body {
                padding: 10px;
            }

            h2 {
                font-size: 1.5rem;
                margin-bottom: 20px;
            }

            form {
                padding: 20px 15px;
                margin: 20px auto;
            }

            form input[type="text"] {
                width: 100%;
                margin-right: 0;
                margin-bottom: 15px;
            }

            form button {
                width: 100%;
                padding: 14px;
            }

            th, td {
                padding: 12px 8px;
                font-size: 12px;
            }

            .action-links a {
                padding: 6px 12px;
                font-size: 11px;
                margin: 2px;
            }
        }

        @media (max-width: 480px) {
            .table-container {
                margin: 0 -10px;
                border-radius: 0;
            }

            th, td {
                padding: 10px 6px;
            }

            .action-links a {
                display: block;
                margin: 2px 0;
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <h2 style="text-align:center;">LIST OF USERS</h2>

    <!-- Form search -->
    <form action="../controller/user_controller.php" method="post">
        <input type="hidden" name="action" value="search_users">
        <input type="text" name="keyword" 
               placeholder="Enter your email, first name or last name"
               value="<?= htmlspecialchars($search ?? '') ?>">
        <button type="submit">Search</button>
    </form>

    <!-- Table with modern styling -->
    <div class="table-container">
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $u): ?>
                    <tr>
                        <td><?= htmlspecialchars($u['email']) ?></td>
                        <td><?= htmlspecialchars($u['firstName']) ?></td>
                        <td><?= htmlspecialchars($u['lastName']) ?></td>
                        <td class="action-links">
                            <a href="../controller/user_controller.php?action=show_edit&email=<?= urlencode($u['email']) ?>">Edit</a>
                            <a href="../controller/user_controller.php?action=delete_user&email=<?= urlencode($u['email']) ?>"
                               onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
