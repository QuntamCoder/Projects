<?php
$servername="localhost";
$username="root";
$password="";
$database_name="project";
$connection=mysqli_connect($servername, $username, $password, $database_name);
$sql_query="CREATE TABLE `project`.`employe` (`emp_id` INT(5) NOT NULL PRIMARY KEY, `emp_name` VARCHAR(15) NOT NULL , `department_name` VARCHAR(10) NOT NULL)";
$result=mysqli_query($connection, $sql_query);
if($result){
    echo"<br>Table No.1 Created"; 
}else{
    echo"<brError occured while creating table";
}

?>

<html>
    <body>
        For Insert click Here:
        <button><a href="form.php">Insert</a></button>
    </body>
</html>