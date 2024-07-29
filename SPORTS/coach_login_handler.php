<?php
session_start();
require_once('db_connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $coach_email = $_POST['coach_email'];
    $coach_password = $_POST['coach_password'];

    // Query the database for the coach user
    $stmt = $conn->prepare("SELECT id, coach_password FROM coaches WHERE coach_email = ?");
    $stmt->bind_param("s", $coach_email);
    $stmt->execute();
    $stmt->bind_result($user_id, $hashed_password);
    $stmt->fetch();
    $stmt->close();

    // Verify the password
    if (password_verify($coach_password, $hashed_password)) {
        // Set session variables
        $_SESSION['coach_id'] = $user_id;
        $_SESSION['coach_email'] = $coach_email;
        $_SESSION['coach_logged_in'] = true;

        // Redirect to coach dashboard or any other authenticated page
        header("Location: coach_dashboard.php");
        exit();
    } else {
        // Redirect back to the login page with an error message
        header("Location: coach_login.php?error=invalid");
        exit();
    }
}

$conn->close();
?>
