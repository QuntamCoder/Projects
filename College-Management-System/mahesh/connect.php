<?php
$servername="localhost";
$username="root";
$password="";
// $password="";
$connection=mysqli_connect($servername, $username, $password);
if($connection){
echo"<br>Connection Successful";
$sql='CREATE DATABASE sample9';
$result=mysqli_query($connection, $sql);}
else{
    echo"<br>Connection was not successful";    
}
if($result)
{
    echo"<br>database created successfully";
}else{
    echo"<br>Database was not created Successfully";
}
?>

