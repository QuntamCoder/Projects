
// $servername = "localhost";
// $username = "root";
// $password = " ";
// $dbname = "oshimataru";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// // Assuming you already have a database connection ($conn)
//     $first_name = $_POST['first_name'];
//     $last_name = $_POST['last_name'];
//     $phone_number = $_POST['phone_number'];
//     $email = $_POST['email'];
//     $username = $_POST['username'];
//     $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

//     // SQL query to insert user data
//     $sql = "INSERT INTO users (first_name, last_name, phone_number, email, username, password)
//             VALUES ('$first_name', '$last_name', '$phone_number', '$email', '$username', '$password')";

//     // Execute the query
//     if ($conn->query($sql) === TRUE) {
//         echo "Signup successful";
//         header("Location: login.html");
//         exit(); // Add exit() after header to stop further script execution
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }


// // Close the database connection
// $conn->close();
// 
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

// Handle form submission
if (isset($_POST["signup"])) {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $phone_number = $_POST["phone_number"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // SQL query to insert user data
    $sql = "INSERT INTO users (first_name, last_name, phone_number, email, username, password)
            VALUES ('$first_name', '$last_name', '$phone_number', '$email', '$username', '$password')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Signup successful";
        header("Location: login.html");
        // Redirect to a success page or perform additional actions if needed
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
