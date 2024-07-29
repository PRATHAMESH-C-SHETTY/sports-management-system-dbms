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
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .navbar {
    display: flex;
    justify-content: center;
    background-color: #007BFF;
    padding: 10px 0;
}

.navbar a {
    color: white;
    text-decoration: none;
    padding: 14px 20px;
    display: inline-block;
    margin: 0 10px;
}

.navbar a:hover {
    background-color: #0056b3;
    border-radius: 5px;
}

.header {
            background-color: #004080;
            color: white;
            text-align: center;
            padding: 20px;
            position: relative;
        }
        .header img {
            width: 100px;
            height: auto;
            position: absolute;
            top: 10px;
            left: 10px;
            animation: slideIn 1s ease-out;
        }
        .header h1 {
            margin: 0;
            font-size: 2.5em;
            animation: fadeIn 2s ease-in;
        }
        .header p {
            margin: 5px 0 0;
            font-size: 1.2em;
            animation: fadeIn 2s ease-in;
        }
        .content {
            padding: 20px;
        }
        .section {
            margin-bottom: 40px;
        }
        .section h2 {
            color: #004080;
            border-bottom: 2px solid #004080;
            padding-bottom: 10px;
            margin-bottom: 20px;
            font-size: 1.8em;
            animation: slideIn 1s ease-out;
        }
        .section p {
            line-height: 1.6;
            font-size: 1.1em;
            animation: fadeIn 1.5s ease-in;
        }
        .staff-photos {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }
        .staff-photos img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 10px;
            transition: transform 0.3s, box-shadow 0.3s;
            animation: fadeIn 1.5s ease-in;
        }
        .staff-photos img:hover {
            transform: scale(1.1);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        @keyframes slideIn {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        } 
        .highlight {
            color: blue;
        }

        .highlight2 {
            color: red;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="upload_display.php">Circulars</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="achivements.php">Achievements</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="top_performers.php">Top Performers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="upcomming_sportsdisplay.php">Upcoming Events</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="header">
        <div class="container">
        <h1><span class="highlight"><b>PES</b> </span><span class="highlight2"><b>INSTITUTE OF TECHNOLOGY AND
                        MANAGEMENT</b></span></h1>
            <h2 class="dept"><b>Department Of Physical Education</b></h2>
        </div>
    </header>

    <div class="content">
        <section class="section">
            <div class="container">
                <h2>About the Physical Education Department</h2>
                <p>
                    The Physical Education Department at P.E.S. Institute of Technology and Management focuses on the physical development and well-being of students. We offer a variety of sports and fitness programs designed to help students stay active and healthy. Our facilities include modern gyms, sports fields, and courts for various sports. Our experienced staff members are dedicated to providing students with the best physical education and training to help them achieve their fitness goals and excel in sports.
                </p>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <h2>Staff Photos</h2>
                <div class="staff-photos">
                    <img src="path/to/staff1.jpg" alt="Staff 1">
                    <img src="path/to/staff2.jpg" alt="Staff 2">
                    <img src="path/to/staff3.jpg" alt="Staff 3">
                    <!-- Add more staff photos as needed -->
                </div>
            </div>
        </section>
    </div>

    <!-- Bootstrap JS and dependencies (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
