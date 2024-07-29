

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Performers</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #007BFF;
            margin-bottom: 20px;
        }
        .achievement {
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
            display: flex;
            align-items: center;
        }
        .achievement:last-child {
            border-bottom: none;
        }
        .achievement-title {
            font-size: 1.2em;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .achievement-description {
            font-size: 1em;
            color: #555;
        }
        .preview-image {
            max-width: 100px;
            height: auto;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin-right: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Top Performers</h2>
        <div id="topPerformersList"></div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var topPerformersList = document.getElementById('topPerformersList');
            var topPerformers = JSON.parse(localStorage.getItem('topPerformers')) || [];

            console.log('Top Performers Data:', topPerformers); // Debugging line

            if (topPerformers.length === 0) {
                var noDataMessage = document.createElement('div');
                noDataMessage.textContent = 'No top performers found.';
                topPerformersList.appendChild(noDataMessage);
            } else {
                topPerformers.forEach(function(topPerformer) {
                    var topPerformerElement = document.createElement('div');
                    topPerformerElement.className = 'achievement row';

                    var topPerformerImageCol = document.createElement('div');
                    topPerformerImageCol.className = 'col-md-3';
                    var topPerformerDetailsCol = document.createElement('div');
                    topPerformerDetailsCol.className = 'col-md-9';

                    var topPerformerTitle = document.createElement('div');
                    topPerformerTitle.className = 'achievement-title';
                    topPerformerTitle.textContent = topPerformer.title;

                    var topPerformerDescription = document.createElement('div');
                    topPerformerDescription.className = 'achievement-description';
                    topPerformerDescription.textContent = 'Description: ' + topPerformer.description;

                    var topPerformerImage = document.createElement('img');
                    topPerformerImage.className = 'preview-image';
                    topPerformerImage.src = topPerformer.image;
                    topPerformerImage.alt = 'Preview';

                    topPerformerImageCol.appendChild(topPerformerImage);
                    topPerformerDetailsCol.appendChild(topPerformerTitle);
                    topPerformerDetailsCol.appendChild(topPerformerDescription);

                    topPerformerElement.appendChild(topPerformerImageCol);
                    topPerformerElement.appendChild(topPerformerDetailsCol);

                    topPerformersList.appendChild(topPerformerElement);
                });
            }
        });
    </script>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr
