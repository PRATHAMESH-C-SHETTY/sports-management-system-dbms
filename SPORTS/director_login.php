<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Director Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            background-image: url("https://www.myfreetextures.com/wp-content/uploads/2014/11/flowing-blue-abstract-texture.jpg");
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }
        .login-container h1 {
            margin-bottom: 20px;
        }
        .login-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        .login-container button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 20px;
            margin: 10px 0;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }
        .login-container button:hover {
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
        <h1>Director Login</h1>
        <form id="director-login-form" action="director_login.php" method="POST">
            <input type="email" name="director_email" placeholder="Director Email" required>
            <input type="password" name="director_password" placeholder="Password" required>
            <button type="submit">Login</button>
            <div id="error-message" class="error-message">
                <?php
                if (isset($_GET['error']) && $_GET['error'] === 'invalid') {
                    echo '<p>Invalid email or password. Please try again.</p>';
                }
                ?>
            </div>
        </form>
    </div>
</body>
</html>
