<!DOCTYPE html>
<html>
<head>
	<title>Beautiful Input Fields</title>
	<style>
		form {
			background-color: #f7f7f7;
			height: 30vh;
			width: 40vw;
			margin: 10vh auto;
			padding: 20vh 0 10vh;
			box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
			border-radius: 10px;
		}
		input[type="text"], input[type="password"], input[type="number"] {
			background-image: linear-gradient(to bottom, #f7f7f7, #e5e5e5);
			border: 2px dotted #ccc;
			border-radius: 10px;
			font-family: "Helvetica Neue", sans-serif;
			padding: 10px;
			width: 100%;
			box-sizing: border-box;
			transition: all 0.2s;
		}
		input[type="text"]:hover, input[type="password"]:hover,input[type="number"]:hover {
			border-color: aqua;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			border-radius: 5px;
			color: white;
			cursor: pointer;
			padding: 10px;
			transition: all 0.2s;
		}
		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
		input[type="submit"]:active {
			background-color: #1e441e;
		}
	</style>
</head>
<body>
	<form action="dataregister.php" method="post" align="center">
		<label for="username">Username:</label>
		<input type="text" name="user" id="username">
		<label for="password">Password:</label>
		<input type="password" name="pass" id="password">
        Project Name<input type="text" name="pjt" id="project">
        Roll No<input type="number" name="roll" id="roll">
        Name<input type="text" name="name" id="name">
		<input type="submit" value="Submit">
	</form>
</body>
</html>
