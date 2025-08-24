<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
    <style>
        form { width: 300px; margin: 50px auto; border: 1px solid #ccc; padding: 20px; }
        label { display: block; margin-top: 10px; }
        input { width: 100%; padding: 5px; }
        button { margin-top: 15px; padding: 8px 12px; }
    </style>
</head>
<body>
    <h2 style="text-align:center;">EDIT USER PAGE</h2>

    <form action="../controller/user_controller.php" method="post">
        <input type="hidden" name="action" value="save_user">

        <label>Email:</label>
        <input type="text" name="email" value="<?= htmlspecialchars($user['email']) ?>" readonly>

        <label>First Name:</label>
        <input type="text" name="firstName" value="<?= htmlspecialchars($user['firstName']) ?>">

        <label>Last Name:</label>
        <input type="text" name="lastName" value="<?= htmlspecialchars($user['lastName']) ?>">

        <button type="submit">Save</button>
        <a href="../controller/user_controller.php?action=list_users">Cancel</a>
    </form>
</body>
</html>
