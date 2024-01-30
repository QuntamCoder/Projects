<?php
// require('datastudent.php');
$username = $_POST['user'];
$password = $_POST['pass'];
$name=$_POST['name'];
$roll=$_POST['roll'];
$prname=$_POST['pjt'];
$conn = mysqli_connect("localhost", "root", "", "mini-project");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO `student`(`roll`, `sname`, `projectname`, `susername`, `spassword`) VALUES ('$roll','$name','$prname','$username','$password')";
$result = mysqli_query($conn, $sql);
if(isset($result)){
    echo"\nSuccessful";
}else{
    echo"\nThere is Error";
}
// if (mysqli_num_rows($result) > 0) {
//     echo "Username exists";
// } else {
//     echo "Username does not exist";
// }

mysqli_close($conn);
?>