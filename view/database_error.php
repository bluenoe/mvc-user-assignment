<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Database Error</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f9f9f9; }
        .box {
            width: 400px;
            margin: 100px auto;
            padding: 20px;
            border: 2px solid #e74c3c;
            background: #fff3f3;
            text-align: center;
        }
        h2 { color: #e74c3c; }
    </style>
</head>
<body>
    <div class="box">
        <h2>Database Error</h2>
        <p>There was a problem connecting to the database.</p>
        <p><strong>Error message:</strong></p>
        <p><?= htmlspecialchars($error_message ?? 'Unknown error'); ?></p>
    </div>
</body>
</html>
