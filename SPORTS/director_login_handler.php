<?php
session_start();

// Include database connection
require_once('db_connection.php');

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize and validate input
    $director_email = filter_var($_POST['director_email'], FILTER_SANITIZE_EMAIL);
    $director_password = $_POST['director_password'];

    // Query the database for the director user
    $stmt = $conn->prepare("SELECT id, director_password FROM directors WHERE director_email = ?");
    $stmt->bind_param("s", $director_email);
    $stmt->execute();
    $stmt->bind_result($user_id, $hashed_password);
    $stmt->fetch();

    // Verify the password
    if ($hashed_password !== null && password_verify($director_password, $hashed_password)) {
        // Password is correct, set session variables
        $_SESSION['director_id'] = $user_id;
        $_SESSION['director_email'] = $director_email;
        $_SESSION['director_logged_in'] = true;

        // Redirect to director dashboard or any other authenticated page
        header("Location: director_dashboard.php");
        exit();
    } else {
        // Invalid email or password, redirect back to login with error
        header("Location: director_login.php?error=invalid");
        exit();
    }
} 

// Close the database connection
?>
