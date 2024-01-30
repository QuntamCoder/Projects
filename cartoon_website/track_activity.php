<?php
$servername = "localhost";
$username1 = "root";
$password = "";
$dbname = "oshimataru";
$isUserLoggedIn = isset($_SESSION['username']);

// Create connection
$conn = new mysqli($servername, $username1, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assuming the user is already logged in, you might get the username from a session variable
// $username = $_SESSION['username']; // Adjust this based on your session handling
// $username1=$_SESSION['username'] = $email;
// Track user activity when accessing this page
$activity_time = time();
$activity_page = "index.html"; // Change this to the actual page where the activity occurred

$activity_sql = "INSERT INTO activity (username, time_spent, visited_page)
                 VALUES ('$isUserLoggedIn', '$activity_time', '$activity_page')";

$conn->query($activity_sql);

// Close the database connection
$conn->close();
?>
