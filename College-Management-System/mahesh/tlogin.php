<html><head>
    <title>teacher</title>
    <style>
body
{
    margin: 0;
    padding: 0;
    background-color:wheat;
    font-family: 'Arial';
  
}
form{
        width: 382px;
        /* overflow: hidden; */
        margin: 15vh 0vh 0vh 70vh;
        padding: 10vh;
        background: #25373f;
        border-radius: 15px ;
}
h2{
    text-align: center;
    color: white;
    padding: 20px;
}
label{
    color: black;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: 560;
    font-size: 20px;
    float: left;
    padding-left: 2.7vw;
}
#Uname{
    width: 300px;
    height: 30px;
    border: none;
    border-radius: 3px;
    padding-left: 8px;
    border-radius: 1vh;
}
#Pass{
    width: 300px;
    height: 30px;
    border: none;
    border-radius: 3px;
    padding-left: 8px;
    border-radius: 1vh;

}
#log{
    width: 300px;
    height: 30px;
    border: none;
    border-radius: 17px;
    padding-left: 7px;
    color: blue;
    font-size: 17px;
    font-weight: 700;
}
span{
    color: white;
}
h1{
  color: black;
}
a{
  color: azure;
}
a:hover{
  color: orange;
}
#log:hover{
color: white;
background-color: blue;
cursor:progress;
}
details{
  cursor: pointer;
}


details{margin-left: 155vh; background-color: black; padding-left: 2vh; }
li{list-style: none; margin-right: 2vw; color: white; font-size: 2.3vh;}
nav{display: flex; flex-direction: row; background-color: black; height: 4vh; padding: 1vh 0vh 0vh 5vh;}
    </style>
    </head>
    <body>
    <nav>
      <li>Mahesh</li>
      <li>Pandhare</li>
      <li><details><li><a href="call.html">Sign up</a></li>
        <li><a href="call.html">Login</a></li>
        <li><a href="call.html">Contact</a></li></details></li>
    </nav>
    <form method="post" action="tlogindata.php" align="center">
		<h1>Welcome</h1>
    <h2>Login</h2>	
    <label>Username:</label><input type="text" name="username" id="Uname"><br>
			<label>Password:</label><br><input type="password" name="password" id="Pass"><br>
			<br><input type="submit" name="login" value="Login" id="log">
			<p>Don't have an account? <a href="call.html">Sign up</a></p>
		</form>
    </body>
</html>