<?php
$servername="localhost";
$username="root";
$password="";
$connection=mysqli_connect($servername, $username, $password);
if($connection){
    echo"<br>Connection Successful";
}else{
    echo"<br>Error Occured";
}
$sql_query="CREATE DATABASE project";
mysqli_query($connection, $sql_query);

?>


<html>
    <body>
        For create Table click Here:
        <button><a href="sample1.php">Create Table</a></button>
    </body>
</html>