<?php
$servername = "localhost";
$username = "root";
$password="";
$database = "sample8";
$connection = mysqli_connect($servername, $username, $password, $database);
if ($connection) {
    echo "<br>Connection was successfully";
} else {
    echo "<br>Connection was not Successfully";
}

// $sql = "CREATE TABLE 'sam'('id' INT(5) NOT NULL, 'name' VARCHAR2(15) NOT NULL, 'dept' VARCHAR2(10) NOT NULL, PRIMARY KEY('id'))";
$sql="CREATE TABLE `student11` (`rollno` INT(10) NOT NULL , `name` VARCHAR(15) NOT NULL , `dept` VARCHAR(10) NOT NULL )";
$result = mysqli_query($connection, $sql);
// $sql="CREATE TABLE `student4` (`rollno` INT(10) NOT NULL , `name` VARCHAR(15) NOT NULL , `dept` VARCHAR(10) NOT NULL )";
// $result = mysqli_query($connection, $sql);
if ($result){
    echo "<br>Table Created successfully";
} else {
    echo "<br>Table was not created successfully";
}
?>