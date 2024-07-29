<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Physical Education Department</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        
        .container {
            width: 80%;
            background-color:rgba(0.3, 0.4, 0, 0.1);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px 0;
            text-align: center;
        }
        
        h2 {
            color: #007BFF;
            margin-bottom: 20px;
        }
        
        .upload-form input[type=file],
        .upload-form input[type=submit] {
            display: block;
            margin: 10px auto;
            padding: 10px;
            font-size: 16px;
            border: none;
            background-color: #007BFF;
            color: #fff;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        
        .upload-form input[type=submit]:hover {
            background-color: #0056b3;
        }
        
        .news-container {
            background-color: #333;
            color: #fff;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .news-container::before {
            content: 'Latest Indian Sports News';
            position: absolute;
            top: -20px;
            left: 20px;
            background-color: #f57c00;
            color: #fff;
            padding: 5px 10px;
            border-radius: 10px;
            font-weight: bold;
        }
        
        marquee {
            font-size: 25px;
            font-weight: 300;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        .news-container {
            animation: fadeIn 1s ease-in-out;
        }
        
        @media (max-width: 768px) {
            .container {
                width: 90%;
            }
            
            marquee {
                font-size: 16px;
            }
            
            .news-container::before {
                font-size: 14px;
                top: -10px;
                left: 15px;
                padding: 4px 8px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Upload Circular</h2>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $target_dir = __DIR__ . "/uploads/";  // Absolute path to the uploads directory

            // Ensure the uploads directory exists
            if (!is_dir($target_dir)) {
                if (!mkdir($target_dir, 0755, true)) {
                    die("Failed to create directories...");
                }
            }

            $target_file = $target_dir . preg_replace('/[^a-zA-Z0-9-_\.]/', '', basename($_FILES["fileToUpload"]["name"]));
            $uploadOk = 1;

            // Check if file is an actual file or a fake file
            if (isset($_POST["submit"])) {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    $upload_message = "The file ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    $upload_message = "Sorry, there was an error uploading your file.";
                    $uploadOk = 0;
                }
            }

            // Provide a link to display.php to view all uploaded files
            if ($uploadOk == 1) {
                $upload_message .= "<h2>File Uploaded Successfully!</h2>";
                $upload_message .= "<p><a href='upload_delete.php' target='_blank'>Click here to view all circulars</a></p>";
            }
        }

        if (isset($upload_message)) {
            echo "<p>{$upload_message}</p>";
        }
        ?>
        <form action="upload.php" method="post" enctype="multipart/form-data" class="upload-form">
            <label for="fileToUpload">Select file to upload:</label><br>
            <input type="file" name="fileToUpload" id="fileToUpload"><br>
            <input type="submit" value="Upload File" name="submit">
        </form>
    </div>

    <div class="news-container">
        <marquee id="news-marquee" behavior="scroll" direction="left">
            Loading Indian sports news...
        </marquee>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const newsMarquee = document.getElementById("news-marquee");

            // Function to fetch Indian sports news
            async function fetchIndianSportsNews() {
                const apiKey = '8619ccd30b964d67a63efb38f6cefb92'; // Replace with your API key
                const url = `https://newsapi.org/v2/everything?q=India+sports&apiKey=${apiKey}`;

                try {
                    const response = await fetch(url);
                    const data = await response.json();
                    displayNews(data.articles);
                } catch (error) {
                    console.error("Error fetching Indian sports news:", error);
                    newsMarquee.textContent = "Failed to load Indian sports news.";
                }
            }

            // Function to display news in the marquee
            function displayNews(articles) {
                if (articles.length === 0) {
                    newsMarquee.textContent = "No Indian sports news available at the moment.";
                    return;
                }

                let newsItems = articles.map(article => article.title);
                newsMarquee.textContent = newsItems.join(" • ");
            }

            // Fetch Indian sports news on page load
            fetchIndianSportsNews();
        });
    </script>
</body>
</html>
