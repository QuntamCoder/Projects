<?php
$a=$_POST['username'];
$b=$_POST['password'];
if($a=="maheshpandhare01"&&$b="mahesh@123"){
    echo"<br>Logged in Successfully";
}else{
    echo"<br>Invalid Username or Password";
}
// *************************************Re-Enter****************************************************
// if($_POST['password']!=$_POST['repassword']){
//     echo"<br>Enter Password as it is in Re-Password";
// }
// *********************************************************************************************

?>