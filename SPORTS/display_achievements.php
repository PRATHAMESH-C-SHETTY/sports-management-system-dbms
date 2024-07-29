<?php
session_start();
if (!isset($_SESSION['director_logged_in']) || $_SESSION['director_logged_in'] !== true) {
    header("Location: director_login.html");
    exit();
}

// Retrieve the achievements from the session
$achievements = isset($_SESSION['achievements']) ? $_SESSION['achievements'] : [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achievements</title>
</head>
<body>
    <h1>Submitted Achievements</h1>
    <hr>
    <?php if (!empty($achievements)): ?>
        <ul>
            <?php foreach ($achievements as $achievement): ?>
                <li><strong><?php echo htmlspecialchars($achievement['athlete_name']); ?>:</strong> <?php echo htmlspecialchars($achievement['achievement']); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No achievements have been submitted yet.</p>
    <?php endif; ?>

    <br>
    <a href="achievements.php">Enter more achievements</a>
</body>
</html>
