<?php
// require('datastudent.php');
$username = $_POST['tusername'];
$password = $_POST['tpassword'];
$name=$_POST['tname'];
$srno=$_POST['srnum'];
$subject=$_POST['subject'];
$conn = mysqli_connect("localhost", "root", "", "mini-project");

if(strlen($password)<=5){
    echo"Too small password Try Again";
    }else{
    echo"Done";
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO `teacher`(`srno`, `tname`, `subject`, `tusername`, `tpassword`) VALUES ('$srno','$name','$subject','$username','$password')";
$result = mysqli_query($conn, $sql);
if(isset($result)){
    echo"\nSuccessful";
}else{
    echo"\nThere is Error";
}
    }
?>