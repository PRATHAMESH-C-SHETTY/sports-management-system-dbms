<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View and Delete Circulars</title>
</head>
<body>
    <h2>Uploaded Circulars</h2>
    <ul>
        <?php
        $directory = __DIR__ . "/uploads/";

        // Ensure the directory exists
        if (is_dir($directory)) {
            // Check if form is submitted for deletion
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['file_name'])) {
                $file_name = $_POST['file_name'];
                $file_path = $directory . $file_name;

                // Check if the file exists before deleting
                if (file_exists($file_path)) {
                    if (unlink($file_path)) {
                        echo "<li>File '$file_name' deleted successfully.</li>";
                    } else {
                        echo "<li>Error deleting file '$file_name'.</li>";
                    }
                } else {
                    echo "<li>File '$file_name' not found.</li>";
                }
            }

            // Open the directory
            if ($dh = opendir($directory)) {
                // Loop through the files
                while (($file = readdir($dh)) !== false) {
                    // Exclude the current and parent directory entries
                    if ($file != "." && $file != "..") {
                        // Create a list item with a link to the file and delete button
                        echo "<li><a href='uploads/" . htmlspecialchars($file) . "' target='_blank'>" . htmlspecialchars($file) . "</a> 
                              <form method='POST' action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "' style='display: inline;'>
                                  <input type='hidden' name='file_name' value='" . htmlspecialchars($file) . "'>
                                  <button type='submit'>Delete</button>
                              </form>
                              </li>";
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
