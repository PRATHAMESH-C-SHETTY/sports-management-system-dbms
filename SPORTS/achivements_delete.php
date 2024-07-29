<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achievements Display</title>
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
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #007BFF;
            margin-bottom: 30px;
        }
        .achievement {
            margin-bottom: 20px;
            padding: 20px;
            border: 1px solid #007BFF;
            border-radius: 5px;
        }
        .delete-btn {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Achievements</h2>
        <div id="achievementsList"></div>
    </div>

    <!-- Bootstrap JS and dependencies (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            displayAchievements();
        });

        function displayAchievements() {
            var achievements = JSON.parse(localStorage.getItem('achievements')) || [];
            var achievementsList = document.getElementById('achievementsList');

            achievementsList.innerHTML = '';

            achievements.forEach(function (achievement, index) {
                var achievementDiv = document.createElement('div');
                achievementDiv.classList.add('achievement');

                achievementDiv.innerHTML = `
                    <h4>${achievement.title}</h4>
                    <p><strong>Date:</strong> ${achievement.date}</p>
                    <p>${achievement.description}</p>
                    <button class="delete-btn" onclick="deleteAchievement(${index})">Delete</button>
                `;

                achievementsList.appendChild(achievementDiv);
            });
        }

        function deleteAchievement(index) {
            var achievements = JSON.parse(localStorage.getItem('achievements')) || [];
            achievements.splice(index, 1);
            localStorage.setItem('achievements', JSON.stringify(achievements));
            displayAchievements();
        }
    </script>
</body>
</html>
