<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Athlete Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            background-image: url("https://www.myfreetextures.com/wp-content/uploads/2014/11/flowing-blue-abstract-texture.jpg");
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }
        .login-container h2 {
            margin-bottom: 20px;
            color: #007BFF;
        }
        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }
        .form-group label {
            font-weight: bold;
        }
        .form-group input[type="text"], 
        .form-group input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }
        .form-group button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        .form-group button:hover {
            background-color: #0056b3;
        }
        .error-message {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Athlete Login</h2>
        <?php
        if (isset($_GET['error']) && $_GET['error'] === 'invalid') {
            echo '<div class="error-message">Invalid credentials. Please try again.</div>';
        }
        ?>
        <form action="athlete_login_handler.php" method="post">
            <div class="form-group">
                <label for="athlete_email">Username (USN):</label>
                <input type="text" id="athlete_email" name="athlete_email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="athlete_password">Password:</label>
                <input type="password" id="athlete_password" name="athlete_password" class="form-control" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
