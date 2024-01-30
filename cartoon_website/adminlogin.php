<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="oshimataru";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assuming you have received username and password from the form
$user_input_username = $_POST["username"];
$user_input_password = $_POST["password"];

// SQL query to retrieve user data by username
$sql = "SELECT * FROM admin WHERE username = '$user_input_username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User found, verify password
    $row = $result->fetch_assoc();
    if ($user_input_password === $row["password"]) {
        // Login successful, redirect to admin.php
        header("Location: admin.html");
        exit();
    } else {
        echo "Invalid password";
    }
} else {
    echo "User not found";
}

// Close the database connection
$conn->close();
?>
