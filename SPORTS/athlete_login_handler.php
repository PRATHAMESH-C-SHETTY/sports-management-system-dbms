<?php
session_start();
require_once('db_connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $athlete_email = $_POST['athlete_email'];
    $athlete_password = $_POST['athlete_password'];

    // Query the database for the athlete user
    $stmt = $conn->prepare("SELECT id, athlete_password FROM athletes WHERE athlete_email = ?");
    $stmt->bind_param("s", $athlete_email);
    $stmt->execute();
    $stmt->bind_result($user_id, $hashed_password);
    $stmt->fetch();
    $stmt->close();

    // Verify the password
    if ($hashed_password && password_verify($athlete_password, $hashed_password)) {
        // Set session variables
        $_SESSION['athlete_id'] = $user_id;
        $_SESSION['athlete_email'] = $athlete_email;
        $_SESSION['athlete_logged_in'] = true;

        // Redirect to athlete dashboard or any other authenticated page
        header("Location: athlete_dashboard.php");
        exit();
    } else {
        // Redirect back to the login page with an error message
        header("Location: athlete_login.php?error=invalid");
        exit();
    }
}

$conn->close();
?>
<?php
echo password_hash('12345', PASSWORD_BCRYPT);
?>

