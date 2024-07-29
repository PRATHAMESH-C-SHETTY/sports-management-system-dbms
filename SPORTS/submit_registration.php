<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $eventName = $_POST['eventName'];
    $eventDate = $_POST['eventDate'];
    $eventLocation = $_POST['eventLocation'];
    $userName = $_POST['userName'];
    $userEmail = $_POST['userEmail'];
    $userPhone = $_POST['userPhone'];

    $sql = "INSERT INTO event_registrations (event_name, event_date, event_location, user_name, user_email, user_phone) VALUES (?, ?, ?, ?, ?, ?)";
    
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ssssss", $eventName, $eventDate, $eventLocation, $userName, $userEmail, $userPhone);
        if ($stmt->execute()) {
            echo "Registration successful!";
        } else {
            echo "Error during statement execution: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error during statement preparation: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request method.";
}
?>
