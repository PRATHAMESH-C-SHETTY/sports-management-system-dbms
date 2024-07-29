<?php
session_start();
require_once('db_connection.php');

function insertUser($email, $password, $conn, $table) {
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    $sql = "INSERT INTO $table (email, password) VALUES (?, ?)";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ss", $email, $hashedPassword);
        if ($stmt->execute()) {
            echo "New user created successfully in $table.<br>";
        } else {
            echo "Error: " . $stmt->error . "<br>";
        }
        $stmt->close();
    } else {
        echo "Error: " . $conn->error . "<br>";
    }
}

function insertAchievement($title, $date, $description, $conn) {
    $sql = "INSERT INTO achievements (title, date, description) VALUES (?, ?, ?)";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("sss", $title, $date, $description);
        if ($stmt->execute()) {
            echo "New achievement created successfully.<br>";
        } else {
            echo "Error: " . $stmt->error . "<br>";
        }
        $stmt->close();
    } else {
        echo "Error: " . $conn->error . "<br>";
    }
}

function insertSportsEvent($name, $type, $date, $location, $conn) {
    $sql = "INSERT INTO sports_events (event_name, indoor_outdoor, event_date, event_location) VALUES (?, ?, ?, ?)";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ssss", $name, $type, $date, $location);
        if ($stmt->execute()) {
            echo "New sports event created successfully.<br>";
        } else {
            echo "Error: " . $stmt->error . "<br>";
        }
        $stmt->close();
    } else {
        echo "Error: " . $conn->error . "<br>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["admin_email"])) {
        insertUser($_POST["admin_email"], $_POST["admin_password"], $conn, 'admin_users');
    } elseif (isset($_POST["athlete_email"])) {
        insertUser($_POST["athlete_email"], $_POST["athlete_password"], $conn, 'athletes');
    } elseif (isset($_POST["coach_email"])) {
        insertUser($_POST["coach_email"], $_POST["coach_password"], $conn, 'coaches');
    } elseif (isset($_POST["director_email"])) {
        insertUser($_POST["director_email"], $_POST["director_password"], $conn, 'directors');
    } elseif (isset($_POST["achievement_title"])) {
        insertAchievement($_POST["achievement_title"], $_POST["achievement_date"], $_POST["achievement_description"], $conn);
    } elseif (isset($_POST["event_name"])) {
        insertSportsEvent($_POST["event_name"], $_POST["indoor_outdoor"], $_POST["event_date"], $_POST["event_location"], $conn);
    } elseif (isset($_POST["login_email"])) {
        loginUser($_POST["login_email"], $_POST["login_password"], $conn);
    }
}

function loginUser($email, $password, $conn) {
    $tables = ['admin_users', 'athletes', 'coaches', 'directors'];
    foreach ($tables as $table) {
        $sql = "SELECT * FROM $table WHERE email = ?";
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($row = $result->fetch_assoc()) {
                if (password_verify($password, $row['password'])) {
                    $_SESSION['logged_in'] = true;
                    $_SESSION['user_type'] = $table;
                    echo "Login successful as " . ucfirst(rtrim($table, 's')) . ".<br>";
                    $stmt->close();
                    return;
                } else {
                    echo "Invalid password.<br>";
                }
            }
            $stmt->close();
        } else {
            echo "Error: " . $conn->error . "<br>";
        }
    }
    echo "User not found.<br>";
}

$conn->close();
?>
