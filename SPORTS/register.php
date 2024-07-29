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
        .event {
            padding: 10px 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            cursor: pointer;
        }
        .event:hover {
            background-color: #f1f1f1;
        }
        .event-name {
            font-size: 1.2em;
            font-weight: bold;
        }
        .event-date, .event-location {
            font-size: 1em;
            color: #555;
        }
        .event-date {
            margin-top: 5px;
        }
        .event-location {
            margin-top: 5px;
        }
        .register-btn {
            margin-top: 10px;
        }
        hr {
            width: 100%;
            border-top: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Upcoming Sports Events</h2>
        <div id="eventsList"></div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var eventsList = document.getElementById('eventsList');
            var events = JSON.parse(localStorage.getItem('events')) || [];

            if (events.length === 0) {
                var noEvents = document.createElement('div');
                noEvents.className = 'alert alert-info';
                noEvents.textContent = 'No upcoming events.';
                eventsList.appendChild(noEvents);
            } else {
                events.forEach(function(event, index) {
                    var eventElement = createEventElement(event);
                    eventsList.appendChild(eventElement);

                    if (index < events.length - 1) {
                        var hr = document.createElement('hr');
                        eventsList.appendChild(hr);
                    }
                });
            }
        });

        function createEventElement(event) {
            var eventElement = document.createElement('div');
            eventElement.className = 'event row';

            var eventDetailsCol = document.createElement('div');
            eventDetailsCol.className = 'col-md-12';

            var eventName = document.createElement('div');
            eventName.className = 'event-name';
            eventName.textContent = event.name;

            var eventDate = document.createElement('div');
            eventDate.className = 'event-date';
            eventDate.textContent = 'Date: ' + event.date;

            var eventLocation = document.createElement('div');
            eventLocation.className = 'event-location';
            eventLocation.textContent = 'Location: ' + event.location;

            var registerBtn = document.createElement('button');
            registerBtn.className = 'btn btn-primary register-btn';
            registerBtn.textContent = 'Register';
            registerBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                window.location.href = 'register2.php?event=' + encodeURIComponent(event.name) + '&date=' + encodeURIComponent(event.date) + '&location=' + encodeURIComponent(event.location);
            });

            eventDetailsCol.appendChild(eventName);
            eventDetailsCol.appendChild(eventDate);
            eventDetailsCol.appendChild(eventLocation);
            eventDetailsCol.appendChild(registerBtn);

            eventElement.appendChild(eventDetailsCol);

            return eventElement;
        }
    </script>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
