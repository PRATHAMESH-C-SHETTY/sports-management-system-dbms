<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Achievements</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
        }
        .container {
            max-width: 600px;
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
    </style>
</head>
<body>
    <div class="container">
        <h2>Enter Achievements</h2>
        <form>
            <div class="form-group">
                <label for="achievementTitle">Achievement Title:</label>
                <input type="text" id="achievementTitle" class="form-control" placeholder="Enter achievement title" required>
            </div>
            <div class="form-group">
                <label for="achievementDate">Achievement Date:</label>
                <input type="date" id="achievementDate" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="achievementDescription">Description:</label>
                <textarea id="achievementDescription" class="form-control" placeholder="Enter achievement description" rows="4" required></textarea>
            </div>
            <button type="button" onclick="saveAchievement()" class="btn btn-primary">Save Achievement</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function saveAchievement() {
            // Retrieve values from form inputs
            var achievementTitle = document.getElementById('achievementTitle').value;
            var achievementDate = document.getElementById('achievementDate').value;
            var achievementDescription = document.getElementById('achievementDescription').value;

            // Create object to store achievement details
            var achievement = {
                title: achievementTitle,
                date: achievementDate,
                description: achievementDescription
            };

            // Store achievement object in localStorage
            var achievements = JSON.parse(localStorage.getItem('achievements')) || [];
            achievements.push(achievement);
            localStorage.setItem('achievements', JSON.stringify(achievements));

            // Reset form after saving
            document.getElementById('achievementTitle').value = '';
            document.getElementById('achievementDate').value = '';
            document.getElementById('achievementDescription').value = '';

            // Redirect to display page after saving
            window.location.href = 'achivements_delete.php';
        }
    </script>
</body>
</html>
