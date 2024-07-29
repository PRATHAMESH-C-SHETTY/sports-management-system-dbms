<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Circulars</title>
</head>
<body>
    <h2>Uploaded Circulars</h2>
    <ul>
        <?php
        $directory = __DIR__ . "/uploads/";

        // Ensure the directory exists
        if (is_dir($directory)) {
            // Open the directory
            if ($dh = opendir($directory)) {
                // Loop through the files
                while (($file = readdir($dh)) !== false) {
                    // Exclude the current and parent directory entries
                    if ($file != "." && $file != "..") {
                        // Create a link to the file
                        echo "<li><a href='uploads/" . htmlspecialchars($file) . "' target='_blank'>" . htmlspecialchars($file) . "</a></li>";
                    }
                }
                // Close the directory
                closedir($dh);
            }
        } else {
            echo "<p>No circulars uploaded yet.</p>";
        }
        ?>
    </ul>
</body>
</html>
