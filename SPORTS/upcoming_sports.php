<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upcoming Sports Events</title>
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
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #007BFF;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Upcoming Sports Events</h2>
        <form>
            <div class="form-group">
                <label for="eventName">Event Name:</label>
                <select id="eventName" class="form-control" required>
                    <option value="">Select event name</option>
                    <option value="Football">Football</option>
                    <option value="Basketball">Basketball</option>
                    <option value="Tennis">Tennis</option>
                    <option value="Swimming">Swimming</option>
                    <option value="Running">Running</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
            <div class="form-group">
                <label>Event Type:</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="eventType" id="indoorType" value="Indoor" required>
                    <label class="form-check-label" for="indoorType">Indoor</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="eventType" id="outdoorType" value="Outdoor" required>
                    <label class="form-check-label" for="outdoorType">Outdoor</label>
                </div>
            </div>
            <div class="form-group">
                <label for="eventDate">Event Date:</label>
                <input type="date" id="eventDate" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="eventLocation">Event Location:</label>
                <input type="text" id="eventLocation" class="form-control" placeholder="Enter event location" required>
            </div>
            <button type="button" onclick="saveEvent()" class="btn btn-primary btn-block">Save Event</button>
        </form>
    </div>

    <script>
        function saveEvent() {
            // Retrieve values from form inputs
            var eventName = document.getElementById('eventName').value;
            var eventDate = document.getElementById('eventDate').value;
            var eventLocation = document.getElementById('eventLocation').value;
            var eventType = document.querySelector('input[name="eventType"]:checked');

            // Check if all fields are filled
            if (!eventType || eventName === "" || eventDate === "" || eventLocation === "") {
                alert("Please fill out all fields");
                return;
            }

            // Create object to store event details
            var event = {
                name: eventName,
                type: eventType.value,
                date: eventDate,
                location: eventLocation
            };

            // Store event object in localStorage
            var events = JSON.parse(localStorage.getItem('events')) || [];
            events.push(event);
            localStorage.setItem('events', JSON.stringify(events));

            // Reset form after saving
            document.getElementById('eventName').value = '';
            document.getElementById('eventDate').value = '';
            document.getElementById('eventLocation').value = '';
            document.getElementById('indoorType').checked = false;
            document.getElementById('outdoorType').checked = false;

            // Redirect to display page after saving
            window.location.href = 'upcommingsports_delete.php';
        }
    </script>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
