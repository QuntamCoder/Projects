<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<style>
		body {
			background-color: darkslategray;
			font-family: Arial, sans-serif;
		}
		
		.login-container {
			background-color: whitesmoke;
			border-radius: 10px;
			margin: 100px auto;
			max-width: 500px;
			padding: 50px;
			text-align: center;
		}
		
		h1 {
			color: #555;
			margin-bottom: 30px;
		}
		
		label {
			display: block;
			font-size: 16px;
			margin-bottom: 10px;
			text-align: left;
		}
		
		input[type="text"]{
			border: none;
			border-radius: 5px;
			display: flex;
			font-size: 16px;
			margin-bottom: 20px;
			padding: 10px;
			width: 100%;
		}
input[type="password"] {
	border: none;
	border-radius: 5px;
	display: flex;
	font-size: 16px;
	margin-bottom: 20px;
	padding: 10px;
	width: 100%;
}

button[type="submit"] {
	background-color: orange;
	border: none;
	border-radius: 5px;
	color: #fff;
	cursor: pointer;
	font-size: 16px;
	margin-top: 20px;
	padding: 10px;
	transition: background-color 0.001s ease-out;
	width: 100%;
}

button[type="submit"]:hover {
	background-color: #16a085;
	
}

p {
	font-size: 14px;
	margin-top: 20px;
}

 a {
	color: blue;
	text-decoration: none;
	transition: color 0.2s ease;
	text-decoration: none;
}

a:hover {
	color: white;
	text-decoration: none;
}   
h1:hover{
	color: red;
}
nav{display: inline; }
nav li{list-style: none; color:white; margin-left: 180vh; font-size: larger;}
nav li b a{color: white; text-decoration: none;}
</style>
</head>
<body>

	<nav><li><b><a href="studentloginform.php">Student Login</a></b></li></nav>
	<div class="login-container">
		<h2>Login</h2>
        <h1>Welcome Back!</h1>
		<form action="dataadmin.php" method="post">
			<label>Username:*</label>
            <br><input type="text" name="username" placeholder="Enter Username" spellcheck="true"><br>
			<!-- <input type="text" id="email" name="email" required> -->
			<label>Password:*</label>
			<!-- <input type="password" id="password" name="password" required> -->
            <br><input type="password" name="password" placeholder="Enter Password"><br>
			<!-- <label>Re-Enter Password:*</label>
            <br><input type="password" name="repassword" placeholder="Re-Enter Password"><br> -->
			<button type="submit" name="submit">Login</button>
			
			<p>Don't have an account? <a href="call.html">Sign up</a></p>
		</form>
	</div>
</body>
</html>


