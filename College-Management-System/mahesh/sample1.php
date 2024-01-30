<?php
$servername="localhost";
$username="root";
$password="";
$database_name="project";
$connection=mysqli_connect($servername, $username, $password, $database_name);
$sql_query="CREATE TABLE `project`.`student` (`rollno` INT(10) NOT NULL , `name` VARCHAR(15) NOT NULL , `department` VARCHAR(10) NOT NULL)";
$result=mysqli_query($connection, $sql_query);
if(!$result){
    echo"<br>Table No.1 Created"; 
}else{
    echo"<brError occured while creating table";
}

?>

<html>
    <body>
        For Create one More table click here:
        <button><a href="sample1.php">Create Table</a></button>

        For Insert Data in Table Click Here:
        <button><a href="sample2.php">Insert Data</a></button>
    </body>
</html>