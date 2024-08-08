<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

if (mysqli_num_rows($result) == 1) {
    $_SESSION['username'] = $username;
    $_SESSION['role'] = $row['role'];
    if ($row['role'] == 'admin') {
        header("Location: adminDashboard.php");
    } else {
        header("Location: userDashboard.php");
    }
} else {
    echo "Username or password is incorrect";
}
?>
