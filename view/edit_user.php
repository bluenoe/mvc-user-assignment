<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
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
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 30px;
            font-weight: 300;
            font-size: 2rem;
        }

        /* Form Container */
        .form-container {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            padding: 40px;
            margin: 0 auto;
            max-width: 500px;
            width: 100%;
        }

        form {
            width: 100%;
        }

        /* Label Styling */
        label {
            display: block;
            font-weight: 600;
            color: #2c3e50;
            margin-top: 20px;
            margin-bottom: 8px;
            font-size: 14px;
            letter-spacing: 0.5px;
        }

        label:first-of-type {
            margin-top: 0;
        }

        /* Input Field Styling */
        input[type="text"] {
            width: 100%;
            padding: 14px 16px;
            border: 2px solid #e1e8ed;
            border-radius: 8px;
            font-size: 14px;
            transition: all 0.3s ease;
            background-color: #fff;
            font-family: inherit;
        }

        input[type="text"]:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
            transform: translateY(-1px);
        }

        /* Readonly input styling */
        input[type="text"][readonly] {
            background-color: #f8f9fa;
            color: #6c757d;
            cursor: not-allowed;
            border-color: #dee2e6;
        }

        input[type="text"][readonly]:focus {
            border-color: #dee2e6;
            box-shadow: none;
            transform: none;
        }

        /* Button Container */
        .button-container {
            display: flex;
            gap: 12px;
            margin-top: 30px;
            flex-wrap: wrap;
        }

        /* Primary Button (Save) */
        button[type="submit"] {
            background: linear-gradient(135deg, #27ae60, #229954);
            color: white;
            border: none;
            padding: 14px 28px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 600;
            transition: all 0.3s ease;
            flex: 1;
            min-width: 120px;
        }

        button[type="submit"]:hover {
            background: linear-gradient(135deg, #229954, #1e7e34);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(39, 174, 96, 0.3);
        }

        button[type="submit"]:active {
            transform: translateY(0);
        }

        /* Secondary Button (Cancel) */
        .cancel-btn {
            background: linear-gradient(135deg, #6c757d, #5a6268);
            color: white;
            text-decoration: none;
            padding: 14px 28px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 600;
            transition: all 0.3s ease;
            flex: 1;
            min-width: 120px;
            text-align: center;
            display: inline-block;
        }

        .cancel-btn:hover {
            background: linear-gradient(135deg, #5a6268, #495057);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(108, 117, 125, 0.3);
            text-decoration: none;
            color: white;
        }

        .cancel-btn:active {
            transform: translateY(0);
        }

        /* Form Title */
        .form-title {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 25px;
            font-size: 1.25rem;
            font-weight: 500;
            border-bottom: 2px solid #ecf0f1;
            padding-bottom: 15px;
        }

        /* Helper Text */
        .helper-text {
            font-size: 12px;
            color: #6c757d;
            margin-top: 4px;
            font-style: italic;
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            body {
                padding: 15px;
            }

            h2 {
                font-size: 1.5rem;
                margin-bottom: 20px;
            }

            .form-container {
                padding: 30px 25px;
                margin: 0;
                border-radius: 8px;
            }

            .button-container {
                flex-direction: column;
                gap: 10px;
            }

            button[type="submit"],
            .cancel-btn {
                width: 100%;
                flex: none;
            }
        }

        @media (max-width: 480px) {
            .form-container {
                padding: 25px 20px;
                margin: 0 -5px;
            }

            input[type="text"] {
                padding: 12px 14px;
            }

            button[type="submit"],
            .cancel-btn {
                padding: 12px 20px;
            }
        }
    </style>
</head>
<body>
    <h2>EDIT USER</h2>

    <div class="form-container">
        <div class="form-title">Update User Information</div>
        
        <form action="../controller/user_controller.php" method="post">
            <input type="hidden" name="action" value="save_user">

            <label for="email">Email Address:</label>
            <input type="text" id="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" readonly>
            <div class="helper-text">Email cannot be modified as it serves as the primary key</div>

            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" value="<?= htmlspecialchars($user['firstName']) ?>" required>

            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" value="<?= htmlspecialchars($user['lastName']) ?>" required>

            <div class="button-container">
                <button type="submit">Save Changes</button>
                <a href="../controller/user_controller.php?action=list_users" class="cancel-btn">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>
