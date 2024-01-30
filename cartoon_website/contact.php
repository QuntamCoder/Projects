<?php
// Database connection details
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

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // SQL query to insert data into the table
    $sql = "INSERT INTO contactus (name, email, message) VALUES ('$name', '$email', '$message')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Data stored successfully!";
        header("Location: index.php");

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
