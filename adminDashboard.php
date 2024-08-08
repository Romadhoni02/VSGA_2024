<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    header("Location: loginForm.html");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-image: url('background.jpg');
            background-size: cover;
            background-position: center;
        }
        .dashboard-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            text-align: center;
            width: 90%;
            max-width: 600px;
        }
        .dashboard-container h1 {
            margin-bottom: 20px;
        }
        .dashboard-container img {
            width: 100px;
            height: auto;
            margin-bottom: 20px;
        }
        .dashboard-container a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        .dashboard-container a:hover {
            background-color: #45a049;
        }
        footer {
            position: absolute;
            bottom: 10px;
            text-align: center;
            width: 100%;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <img src="https://th.bing.com/th/id/R.6ea9b1ab7c505bcb445f37adedcc603d?rik=AfFOmAB7v37Brg&riu=http%3a%2f%2fspi.polinema.ac.id%2fspi%2fassets%2fdist%2fimg%2ffooter.png&ehk=FTso5yV0brtuH3zqVpGns82BfElZS%2fpVryVCibIUvC0%3d&risl=&pid=ImgRaw&r=0" alt="Logo">
        <h1>Welcome, Admin</h1>
        <p>Manage your site settings and user accounts.</p>
        <a href="sessionLogout.php">Logout</a>
    </div>
    <footer>&copy; <?php echo date("Y"); ?> Admin Dashboard. All rights reserved.</footer>
</body>
</html>
