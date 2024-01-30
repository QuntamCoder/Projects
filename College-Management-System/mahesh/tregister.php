<html><head>
    <title>teacher</title>
    <style>
        
    form {
        display: flex;
        flex-direction:column;
        align-items: center;
        margin-top: 30vh;
        margin-left: 30vw;
        max-width: 40vw;
        background-color: antiquewhite;
  }
  input[type="text"],
  input[type="password"] {
      padding: 10px;
      margin: 10px;
      border-radius: 5px;
      border-color: aqua;
      width: 300px;
  }
  
  input[type="submit"] {
    padding: 10px;
    margin-top: 20px;
    background-color: rgb(75, 75, 254);
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
    </style>
    </head>
    <body>
    <form method="post" action="tregisterdatabase.php">
            Sr.No<input type="number" name="srnum">
            Name:<input type="text" spellcheck="true" name="tname"><br>
            Subject:<input type="text" spellcheck="true" name="subject"><br>
			Username:<input type="text" name="tusername"><br>
			Password:<input type="password" name="tpassword"><br>
			<input type="submit" name="login" value="Login">
			<p>Don't have an account? <a href="call.html">Sign up</a></p>
		</form>
    </body>
</html>