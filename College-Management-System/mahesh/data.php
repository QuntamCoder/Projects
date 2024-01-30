<html>
    <head>
        <title>project data</title>
    </head>
    <body>
        <form action="#" action="database.php" method="post" align="center">
            Enter Name which you want to assign to Database:<br><input type="text" size="44" name="database">
            Enter Table Name:<br><input type="text" size="20" name="table">
            Enter Table Name:<br><input type="text" size="20" name="table1">
            <br><br><input type="submit" name="submit">
        </form>
    </body>
</html>

<?php
    $b=$_POST['database'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $connection = mysqli_connect($servername, $username, $password);
    $sql = "CREATE DATABASE $b";
    mysqli_query($connection, $sql);
    if (!$connection) {
        echo "\nError: Unable to connect to mysql<br>";
        die("Sorry we failed to connect:" . mysqli_connect_error());
    } else {
        echo "\nConnection Successful";
    }
    $t=$_POST['table'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database_name=$b;
    $connection = mysqli_connect($servername, $username, $password, $database_name);
    $sql="CREATE TABLE `$b`.`$t` (`rollno` INT(10) NOT NULL , `name` VARCHAR(15) NOT NULL , `dept` VARCHAR(10) NOT NULL )";
    $result=mysqli_query($connection, $sql);
    mysqli_query($connection, $sql1);
    if($result){
        echo"\nThe Table Created Successfully";
    }else{
        echo"\nThe table was not created".mysqli_error($connection);
    }
    mysqli_query($connection, $sql);
    if (!$connection) {
        echo "\nError: Unable to connect to mysql<br>";
        die("Sorry we failed to connect:" . mysqli_connect_error());
    } else {
        echo "\nConnection Successful";
    }
    
    $t1=$_POST['table1'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database_name=$b;
    $connection = mysqli_connect($servername, $username, $password, $database_name);
    $sql1="CREATE TABLE `$b`.`$t1` (`rolo` INT(10) NOT NULL , `name1` VARCHAR(15) NOT NULL , `dept` VARCHAR(10) NOT NULL )";
    // $result=mysqli_query($connection, $sql);

?>