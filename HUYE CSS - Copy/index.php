<?php
session_start();
include("connection.php");
include("functions.php");
$user_data = check_login($con); // Corrected function call
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        .body {
            background-color: rgb(15, 228, 37);
        }

        .menu {
            background-color: rgb(35, 230, 5);
            padding: 20px 60px;
        }

        .menu a {
            color: rgb(248, 240, 240);
            text-decoration: none;
            border-top-left-radius: 20px;
            border-bottom-right-radius: 20px;
            padding: 10px 20px 10px;
            font-size: 40px;
        }

        .menu a:hover {
            background-color: rgb(16, 16, 23);
            color: rgb(11, 231, 22);
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            text-decoration: none;
            min-width: 120px;
            background-color: #1cf50c;
        }

        .dropdown-content a {
            padding: 12px 10px 12px;
            display: block;
            text-decoration: none;
            color: black;
            font-size: 20px;
        }

        .dropdown-content a:hover {
            background-color: rgb(63, 241, 9);
            color: rgb(12, 253, 36);
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .footer {
            width: 100%;
            height: px;
            margin-top: 20px;
            background-color: rgb(37, 237, 19);
            border: 1px solid rgb(15, 240, 30);
        }
    </style>
</head>

<body>
    <div class="menu">

        <a href="homepage.html" target="main-frame">home</a>
        <a href="mr.html" target="main-frame">about us</a>
        <a href="doctor.html" target="main-frame">our products</a>
        <a href="hag.html" target="main-frame">contacts as</a>
        <div class="dropdown">
            <div class="dropdown-content">
                <a href="daily.html" target="main-frame">daily</a>
                <a href="weekly.html" target="main-frame">weekly</a>
            </div>
        </div>

    </div>
    <iframe frameborder="0" width="100%" height="500" name="main-frame"></iframe>
    <div class="footer">
        <center>
            </b>
            </fieldset>
        </center>
    </div>
    <br>
    <marquee alternative="right" bgcolor="lightblue">
    </marquee>
    <h1>
        <marquee style="color: white;">TOPIC: WELCOME TO VIRTUAL ASSISTANCE SERVICES</marquee>

    </h1>
    <ul>
        <li>A virtual assistant is a self-employed worker who specializes in offering administrative services to clients from a remote location, usually a home office.</li>
        <li>Typical tasks a virtual assistant might perform include scheduling appointments, making phone calls, making travel arrangements, and managing email accounts.</li>
        <li>A virtual executive assistant can help organize your calendar and let you take control of your time. This way, you can focus on high-value tasks such as project management, client management meetings, drawing up strategies for company growth.</li>
        <li>A virtual or executive assistant will need to have a good understanding of software programs like Microsoft 365, Access, Excel, and PowerPoint. In addition to this, knowledge of the internet and being able to conduct online research is also very
            important.
        </li>
    </ul>
    <h2>Our services are offered to all people across the whole country</h2>
    <img src="download (5).jpg" alt="Image 1">
    <img src="IMG_20240302_141947.jpg" alt="Image 2">
    <img src="images (2).jpg" alt="Image 3">
</body>

</html>