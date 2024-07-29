<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achievements</title>
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
        }
        .achievement:last-child {
            border-bottom: none;
        }
        .achievement-title {
            font-size: 1.2em;
            font-weight: bold;
        }
        .achievement-date, .achievement-description {
            font-size: 1em;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Achievements</h2>
        <div id="achievementsList"></div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var achievementsList = document.getElementById('achievementsList');
            var achievements = JSON.parse(localStorage.getItem('achievements')) || [];

            achievements.forEach(function(achievement) {
                var achievementElement = document.createElement('div');
                achievementElement.className = 'achievement';

                var achievementTitle = document.createElement('div');
                achievementTitle.className = 'achievement-title';
                achievementTitle.textContent = achievement.title;

                var achievementDate = document.createElement('div');
                achievementDate.className = 'achievement-date';
                achievementDate.textContent = 'Date: ' + achievement.date;

                var achievementDescription = document.createElement('div');
                achievementDescription.className = 'achievement-description';
                achievementDescription.textContent = 'Description: ' + achievement.description;

                achievementElement.appendChild(achievementTitle);
                achievementElement.appendChild(achievementDate);
                achievementElement.appendChild(achievementDescription);

                achievementsList.appendChild(achievementElement);
            });
        });
    </script>
</body>
</html>
