<?php
session_start();
require_once('db_connection.php');

// Check if already logged in
$error_message = '';
if (isset($_GET['error']) && $_GET['error'] === 'invalid') {
    $error_message = 'Invalid credentials. Please try again.';
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $admin_email = $_POST['admin_email'];
    $admin_password = $_POST['admin_password'];

    // Query the database for the admin user
    $stmt = $conn->prepare("SELECT admin_password FROM admin_users WHERE admin_email = ?");
    if ($stmt) {
        $stmt->bind_param("s", $admin_email);
        $stmt->execute();
        $stmt->bind_result($hashed_password);
        $stmt->fetch();
        $stmt->close();

        // Debugging: Output fetched hashed password
        echo "Fetched hashed password: " . $hashed_password . "<br>";

        // Verify the password
        if ($hashed_password && password_verify($admin_password, $hashed_password)) {
            // Set session variable to indicate the admin is logged in
            $_SESSION['admin_logged_in'] = true;
            // Redirect to admin dashboard
            header("Location: admin_dashboard.php");
            exit();
        } else {
            // Debugging: Output invalid login message
            echo "Password verification failed.<br>";
            // Redirect back to the login page with an error message
            $error_message = 'Invalid credentials. Please try again.';
        }
    } else {
        // Debugging: Output statement preparation error
        echo "Failed to prepare the statement.<br>";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 350px;
        }
        .login-container h1 {
            margin-bottom: 20px;
            color: #007BFF;
        }
        .login-container input {
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ced4da;
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
        <h1>Admin Login</h1>
        <?php if (!empty($error_message)): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $error_message; ?>
            </div>
        <?php endif; ?>
        <form id="admin-login-form" action="admin_login.php" method="POST">
            <div class="form-group">
                <input type="email" class="form-control" name="admin_email" placeholder="Admin Email" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="admin_password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
