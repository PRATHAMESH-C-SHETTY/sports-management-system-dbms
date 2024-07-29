<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register for Event</title>
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
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #007BFF;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Register for Event</h2>
        <form method="post" action="submit_registration.php">
            <div class="form-group">
                <label for="eventName">Event Name:</label>
                <input type="text" class="form-control" id="eventName" name="eventName" required readonly value="<?php echo htmlspecialchars($_GET['event']); ?>">
            </div>
            <div class="form-group">
                <label for="eventDate">Event Date:</label>
                <input type="text" class="form-control" id="eventDate" name="eventDate" required readonly value="<?php echo htmlspecialchars($_GET['date']); ?>">
            </div>
            <div class="form-group">
                <label for="eventLocation">Event Location:</label>
                <input type="text" class="form-control" id="eventLocation" name="eventLocation" required readonly value="<?php echo htmlspecialchars($_GET['location']); ?>">
            </div>
            <div class="form-group">
                <label for="userName">Your Name:</label>
                <input type="text" class="form-control" id="userName" name="userName" required>
            </div>
            <div class="form-group">
                <label for="userEmail">Your Email:</label>
                <input type="email" class="form-control" id="userEmail" name="userEmail" required>
            </div>
            <div class="form-group">
                <label for="userPhone">Your Phone:</label>
                <input type="text" class="form-control" id="userPhone" name="userPhone" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
