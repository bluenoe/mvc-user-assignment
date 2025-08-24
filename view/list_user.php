<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>List of Users</title>
    <style>
        table { border-collapse: collapse; width: 60%; margin: 20px auto; }
        th, td { border: 1px solid #999; padding: 8px; text-align: center; }
        th { background-color: #eee; }
        form { text-align: center; margin: 20px; }
        a { margin: 0 5px; }
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

    <!-- Bảng danh sách -->
    <table>
        <tr>
            <th>Email</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($users as $u): ?>
        <tr>
            <td><?= htmlspecialchars($u['email']) ?></td>
            <td><?= htmlspecialchars($u['firstName']) ?></td>
            <td><?= htmlspecialchars($u['lastName']) ?></td>
            <td>
                <a href="../controller/user_controller.php?action=show_edit&email=<?= urlencode($u['email']) ?>">Edit</a>
                <a href="../controller/user_controller.php?action=delete_user&email=<?= urlencode($u['email']) ?>"
                   onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
