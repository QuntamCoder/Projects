<?php
$username = $_POST['username'];
$password = $_POST['password'];
$conn = mysqli_connect("localhost", "root", "", "mini-project");

$sql = "SELECT * FROM teacher WHERE tusername = '$username' AND tpassword = '$password'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    echo "Username exists";

} else {
    echo "Username does not exist";
}
?>
