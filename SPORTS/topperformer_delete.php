<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Performers Display</title>
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
        .performer {
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
        .performer img {
            max-width: 100px;
            height: auto;
            display: block;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Top Performers</h2>
        <div id="performersList"></div>
    </div>

    <!-- Bootstrap JS and dependencies (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            displayPerformers();
        });

        function displayPerformers() {
            var performers = JSON.parse(localStorage.getItem('topPerformers')) || [];
            var performersList = document.getElementById('performersList');

            performersList.innerHTML = '';

            performers.forEach(function (performer, index) {
                var performerDiv = document.createElement('div');
                performerDiv.classList.add('performer');

                performerDiv.innerHTML = `
                    <img src="${performer.image}" alt="Performer Image">
                    <h4>${performer.title}</h4>
                    <p><strong>Description:</strong> ${performer.description}</p>
                    <button class="delete-btn" onclick="deletePerformer(${index})">Delete</button>
                `;

                performersList.appendChild(performerDiv);
            });
        }

        function deletePerformer(index) {
            var performers = JSON.parse(localStorage.getItem('topPerformers')) || [];
            performers.splice(index, 1);
            localStorage.setItem('topPerformers', JSON.stringify(performers));
            displayPerformers();
        }
    </script>
</body>
</html>
