<!DOCTYPE html>
<html>
<head>
	<title>Students Login</title>
</head>
<style>
	#prev{margin: 0vh 145vh; font-size: 3vh;}
	li a{text-decoration: none; color: white;}
	body {
    font-family:Verdana, Geneva, Tahoma, sans-serif;
    background-color: white;
  }
  
  .header {
    background-color: rgb(88, 30, 30);
    color: white;
    padding: 30px;
    text-align: center;
    border-radius: 10px;
    margin: 0vh 2vh 0vh 2vh;
  }

  
  .main {
      margin: 2vh 3vh 2vh 3vh;
      padding: 60px;
    background-color: rgb(255, 255, 255);
    border-radius: 20px;
    height: 50vh;
    box-shadow: black;
}

 
    
    form {
        display: flex;
        flex-direction:column;
        align-items: center;
  }
  

  
  input[type="text"],
  input[type="password"] {
      padding: 10px;
      margin: 10px;
      border-radius: 5px;
      border-color: aqua;
      width: 300px;
      background-image: url('m4.jpeg');
      transition: background-image 0.1s ease-in;
  }
  
  input[type="submit"] {
    padding: 10px;
    margin-top: 20px;
    background-color: rgb(75, 75, 254);
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.1s ease-in-out;
  }
  
  input[type="submit"]:hover {
      background-color: orangered;
    width: 100px;
}
div[class="main"]:hover{
    background-color: red;
	background-image: url('logb2.jpg');
    background-size:cover;
    background-repeat: no-repeat;
}
input[type="text"]:hover {
    background-image: url('m3.jpeg');
   border-color: yellow;  
   transition-duration: 0.10ms;
}
input[type="password"]:hover {
    background-image: url("m3.jpeg");
    border-color: yellow;  
    transition-duration: 0.10ms;
}
.box{
    background-image: url('9.jpg');
    width: 60px;
    height: 60px;
    border-radius: 40px;
    margin: 0px auto;
}

nav{
    background-color: black;
    color: white;
    margin: 0vh 0vh 2vh 0vh;
    height: 3vh;
    padding: 2vh;
    flex-direction:row;    
}
nav ul{display: flex; flex-direction: row;}
*{margin: 0; padding: 0;}
li{
    list-style: none;
    margin: 0vh 15vh 0vh 0vh; 
}
footer{
    margin-top: 2vh;
    background-color: black;
    height: 9vh;
    color: white;
    display: flex;
    flex-direction: row;
    padding: 3vh 0vh 0vh 5vh;
}   
body{
    background-color: rgb(225, 225, 225);
}


</style>

<body>

	<nav>
		<ul>
			<li>Home</li>
			<li>ContactNo.</li>
			<li id="prev"><a href="c.html">Prev</a></li>
		</ul>
	</nav>
	<div class="header">
		<h1>Students Login</h1>
	</div>
	<header>
	<div class="main">
		<div class="box">
			<img class="box" src="logb.jpg" height="30px" width="30px"> 
		</div>
		<h2 align="center">Welcome, Students</h2>
		<form method="post" action="datastudent.php">
			Username:<input type="text" name="username">
			Password:<input type="password" name="password">
			<input type="submit" name="login" value="Login">
			<p>Don't have an account? <a href="call.html">Sign up</a></p>
		</form>
	</div>
	</header>
</body>
<footer>
	<li>Email Id:<p>mpandhare526@gmail.com</p></li>
	<li>Contact no:<p>9028901783</p></li>
	<li>Website:<p>www.nppu.ac.in</p></li>
</footer>
</html>
