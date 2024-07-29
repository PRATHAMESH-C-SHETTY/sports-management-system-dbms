<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - P.E.S. Institute of Technology and Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
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
            animation: slideIn 0.5s ease-out;
        }

        .header h1 {
            margin: 0;
            font-size: 2.5em;
        }

        .dept {
            font-size: 1.8rem;
        }

        .header p {
            margin: 5px 0 0;
            font-size: 1.2em;
            animation: fadeIn 0.5s ease-in;
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
            animation: fadeIn 0.5s ease-in;
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
            animation: fadeIn 0.5s ease-in;
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
                transform:none;
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
    <div class="navbar">
        <a href="#home">Home</a>
        <a href="upload.php">Circular</a>
        <a href="upcomming_sportsdisplay.php">Upcoming Events</a>
        <a href="achivements_display.php">Achievements</a>
        <a href="topperformers_display.php">Top Performers</a>
    </div>
    <div class="header">
        <div class="head-container">
            <h1><span class="highlight"><b>PES</b> </span><span class="highlight2"><b>INSTITUTE OF TECHNOLOGY AND
                        MANAGEMENT</b></span></h1>
            <h2 class="dept"><b>Department Of Physical Education</b></h2>
        </div>
    </div>
    <div class="content">
        <div class="section">
            <h2>About the Physical Education Department</h2>
            <p>
                The Physical Education Department at P.E.S. Institute of Technology and Management focuses on the
                physical development and well-being of students. We offer a variety of sports and fitness programs
                designed to help students stay active and healthy. Our facilities include modern gyms, sports fields,
                and courts for various sports. Our experienced staff members are dedicated to providing students with
                the best physical education and training to help them achieve their fitness goals and excel in sports.
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
</body>

</html>