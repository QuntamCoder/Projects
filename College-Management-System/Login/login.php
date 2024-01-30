<!-- PHP Starts Here -->
<?php 
session_start();
    require_once "../connection/connection.php";
    // require_once function is used to include code in one php file to another php file
    // this function add a php file into another only once. 
    $message="Email Or Password Does Not Match";
    if(isset($_POST["btnlogin"]))
    {
        $username=$_POST["email"];
        $password=$_POST["password"];
        $query="select * from login where user_id='$username' and Password='$password'";
        $result=mysqli_query($con,$query);
        if(mysqli_num_rows($result)>0) {
            while ($row=mysqli_fetch_array($result)) {
                if ($row["Role"]=="Admin")
                {
                    $_SESSION['LoginAdmin']=$row["user_id"];
                    header('Location: ../admin/admin-index.php');
                }
               else if ($row["Role"]=="Teacher" and $row["account"]=="Activate")
                {
                    $_SESSION['LoginTeacher']=$row["user_id"];
                    header('Location: ../teacher/teacher-index.php');
                }
                else if ($row["Role"]=="Student")
                {
                    $_SESSION['LoginStudent']=$row['user_id'];
                    header('Location: ../student/student-index.php');
                }
            }
        }
        else
        { 
            header("Location: login.php");
        }
    }
    if(isset($_POST["btnlogin"]))
    {
        $username=$_POST["email"];
        $password=$_POST["password"];
        $query="select * from login where user_id='$username' and Password='$password'";
        $result=mysqli_query($con,$query);
        if(mysqli_num_rows($result)>0) {
            while ($row=mysqli_fetch_array($result)) {
               if ($row["Role"]=="Teacher")
                {
                    $_SESSION['LoginTeacher']=$row["user_id"];
                    header('Location: ../teacher/teacher-index.php');
                }
                else if ($row["Role"]=="Student" and $row["account"]=="Activate")
                {
                    $_SESSION['LoginStudent']=$row['user_id'];
                    header('Location: ../student/student-index.php');
                }
            }
        }
        else
        { 
            header("Location: login.php");
        }
    }
    
?>

<!doctype html>
<html lang="en">
	<head>
		<title>Login - DnyanGanga</title>
	</head>
	<body class="login-background" style="background-image:url('logb2.jpg')">
		<?php include('../common/common-header.php') ?>
        <div class="login-div mt-3 " style="background-color: white; ">
            <div class="logo-div text-center">
                <!-- <img src="../Images/icbs_logo.png" alt="" class="align-items-center" width="100" height="100"> -->
            </div>
            <div class="login-padding" >
                <h2 class="text-center text-black">LOGIN</h2>
                <form class="p-1" action="login.php" method="POST" style="background-color: white; ">
                    <div class="form-group">
                        <label><h6 style="color:black;">Enter Your ID/Email:</h6></label>
                        <input type="text" name="email" placeholder="Enter User ID" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label><h6 style="color:black;">Enter Password:</h6></label>
                        <input type="Password" name="password" placeholder="Enter Password" class="form-control border-bottom" required>
                        <!-- <?php echo $message; ?> -->
                    </div>
                    <div class="form-group text-center mb-3 mt-4">
                        <input type="submit" name="btnlogin" value="LOGIN" style="color:black; background-color:orange;" class="btn btn-white pl-5 pr-5 ">
                        <p>Create Account <a href="call.html">Signup</a><p>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>



