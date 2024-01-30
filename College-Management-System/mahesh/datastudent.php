<?php
$username = $_POST['username'];
$password = $_POST['password'];
$conn = mysqli_connect("localhost", "root", "", "mini-project");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM student WHERE susername = '$username' AND spassword = '$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "Username exists";
} else {
    echo "Username does not exist";
}

mysqli_close($conn);
?>