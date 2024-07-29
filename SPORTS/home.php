<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - P.E.S. Institute of Technology and Management</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .navbar {
            background-color: #007BFF;
        }

        .navbar-brand {
            color: white;
        }

        .navbar-brand img {
            width: 30px;
            height: 30px;
            margin-right: 10px;
        }

        .navbar-nav .nav-link {
            color: white;
            padding: 10px 20px;
        }

        .navbar-nav .nav-link:hover {
            background-color: #0056b3;
            border-radius: 5px;
        }

        .header {
            background-color: #ffffff;
            border-bottom: 1px solid #ddd;
            padding: 20px 0;
        }

        .header img {
            width: 150px;
            height: auto;
            margin-top: 20px;
        }

        .header h1 {
            margin-top: 20px;
            font-size: 2.5rem;
            color: #007BFF;
        }

        .header p {
            margin-bottom: 20px;
            font-size: 1.1rem;
            color: #555;
        }

        .content {
            padding: 20px 0;
        }

        .section {
            margin-bottom: 40px;
        }

        .section h2 {
            border-bottom: 2px solid #007BFF;
            padding-bottom: 10px;
            font-size: 2rem;
            color: #007BFF;
        }

        .section p {
            line-height: 1.6;
        }

        .staff-photos {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .staff-photos img {
            width: 150px;
            height: 150px;
            margin: 10px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            transition: transform 0.3s ease-in-out;
        }

        .staff-photos img:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#home">
                <img src="https://pestrust.edu.in/pesitm/assets/front_end/images/logo.png" alt="PES Logo" class="d-inline-block align-top">
                P.E.S. Institute of Technology and Management
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="upload.php">Circular</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="upcoming_sportsdisplay.php">Upcoming Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="achievements_display.html">Achievements</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="topperformers_display.php">Top Performers</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="header text-center">
        <div class="container">
            <img src="https://pestrust.edu.in/pesitm/assets/front_end/images/logo.png" alt="PES Logo">
            <h1 class="mt-3">P.E.S. Institute of Technology and Management</h1>
            <p>NH 206, Sagar Road, Shivamogga, Virupina Koppa, Karnataka 577204</p>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <div class="section">
                <h2>About the Physical Education Department</h2>
                <p>
                    The Physical Education Department at P.E.S. Institute of Technology and Management focuses on the physical development and well-being of students. We offer a variety of sports and fitness programs designed to help students stay active and healthy. Our facilities include modern gyms, sports fields, and courts for various sports. Our experienced staff members are dedicated to providing students with the best physical education and training to help them achieve their fitness goals and excel in sports.
                </p>
            </div>
            <div class="section">
                <h2>Staff Photos</h2>
                <div class="staff-photos">
                    <img src="path/to/staff1.jpg" alt="Staff 1">
                    <img src="path/to/staff2.jpg" alt="Staff 2">
                    <img src="path/to/staff3.jpg" alt="Staff 3">
                    <!-- Add more staff photos as needed -->
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
