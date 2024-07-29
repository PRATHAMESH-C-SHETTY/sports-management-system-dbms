<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Department Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffcc00;
            
            display: flex;
            flex-direction: column;
            justify-content: center;background-image: url("https://www.myfreetextures.com/wp-content/uploads/2014/11/flowing-blue-abstract-texture.jpg");
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-size: cover;
            background-position: center;
        }
        .navbar {
            width: 100%;
            background-color: #007BFF;
            overflow: hidden;
            position: fixed;
            top: 0;
            z-index: 1000;
        }
        .navbar a {
            float: left;
            display: block;
            color: #fff;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        .navbar a:hover {
            background-color: #0056b3;
            color: white;
        }
        .head-container {
            text-align: center;
            margin-top: 50px;
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 8px 15px rgba(0,0,0,0.1);
        }
        .head-container h1 {
            font-size: 32px;
            color: #007BFF;
            margin: 0;
            color: #fff;
        }
        .head-container h2 {
            font-size: 24px;
            color: #007BFF;
            margin: 0;
            padding: 20px;
        }
        .login-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 50px;
            border-radius: 8px;
            box-shadow: 0px 8px 15px rgba(0,0,0,0.1);
            text-align: center;
            max-width: 500px;
            width: 90%;
            transition: all 0.3s ease;
            margin-top: 30px; /* Added margin for spacing */
        }
        .login-container:hover {
            transform: translateY(-5px);
            box-shadow: 0px 15px 20px rgba(0,0,0,0.2);
        }
        .login-container span {
            font-size: 28px;
            color: #007BFF;
            margin-bottom: 30px;
        }
        .login-container button {
            font-size: 18px;
            padding: 12px 24px;
            margin-bottom: 15px;
            border-radius: 5px;
            width: 100%;
            transition: all 0.3s ease;
            background-color: #007BFF;
            border: none;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            z-index: 1;
            color: #fff;
        }
        .highlight {
            color: blue;
        }
        .highlight2 {
            color: red;
        }
        .login-container button::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 300%;
            height: 300%;
            background-color: rgba(255, 255, 255, 0.2);
            transition: all 0.5s ease;
            z-index: -1;
        }
        .login-container button:hover::before {
            width: 100%;
            height: 100%;
        }
        .login-container button:hover {
            background-color: #0056b3;
        }
        .login-container button:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.3);
        }
        .form-control {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        .form-control:focus {
            border-color: #007BFF;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.3);
        }
        .alert {
            padding: 10px;
            background-color: red;
            color: white;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .role-buttons {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .role-buttons button {
            font-size: 18px;
            padding: 15px 20px;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s;
        }
        .role-buttons button:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
        }
        </style>
</head>
<body>
<div class="head-container">
        <h1><span class="highlight"><b>PES</b> </span><span class="highlight2"><b>INSTITUTE OF TECHNOLOGY AND MANAGEMENT</b></span></h1>      
        <h2><b>Department Of Physical Education</b></h2>
    </div>
    <div class="login-container">
        <h1>Login</h1>
        <button class="btn btn-primary btn-lg" onclick="location.href='admin_login.php'"><b>Admin Login</b></button>
        <button class="btn btn-primary btn-lg" onclick="location.href='director_login.php'"><b>Director Login</b></button>
        <button class="btn btn-primary btn-lg" onclick="location.href='coach_login.php'"><b>Coach Login</b></button>
        <button class="btn btn-primary btn-lg" onclick="location.href='athlete_login.php'"><b>Athlete Login</b></button>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
