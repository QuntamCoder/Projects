<?php
$servername="localhost";
$username="root";
$password="";
$database_name="project";
$connection=mysqli_connect($servername, $username, $password, $database_name);
// print_r($_POST);
$roll=$_POST['num'];
$name=$_POST['nam'];
$dept=$_POST['dept'];
if($name=="sushant"){
    echo"\nShembda";
}else if($name=="sainath"){
    echo"\nKaali";
}else if($name=="yogesh"){
    echo"\nBalish";
}else{
// $sql_query="INSERT INTO `students`(`rollno`, `name`, `department`) VALUES ('1','mahesh','bca')";
$sql_query="INSERT INTO `employe`(`emp_id`, `emp_name`, `department_name`) VALUES ('$roll','$name','$dept')";
$result=mysqli_query($connection, $sql_query);
if($result){
    echo"<br>Inserted Successful";
    echo "<br>".$roll."<br>".$name."<br>".$dept;
    echo"<br><br><br>";
    echo"<br>Click here For Insert Data of one more Employee<br>";
    echo"<button><a href='form.php'>Click</a></button>";
}else{
    echo"<br>Error Occured while inserting data";
}}

?>