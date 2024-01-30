<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<style>
	#search{margin:0px 10px 0px 10px;
	padding: 0px 0px 0px 680px;}
	input[type="search"]:hover{
		border-radius: 50px;
		background-size: 20px;
		width: 263px;
		border-color: aqua;
		height: 30px;
	}
	input[type="search"]{
		border-radius: 50px;
		width: 30px;
		height: 30px;;
		background-color: white;
		
	}
	a[id="2"]:hover{
		background-color: white;
		background-image: url("p3.png");  
		background-size: 80px 39px;
		/* background-repeat: no-repeat; */
	}
	a[id="3"]:hover{
		background-color: white;
		background-image: url("p2.jpg");  
		background-size: cover;
		background-repeat: no-repeat;
	}
	a[id="1"]:hover{
		background-color: white;
		background-image: url("p4.jpg");  
		background-size: 80px 58px;
		background-repeat: no-repeat;
	}
	a[id="4"]:hover{
		background-color: white;
		background-image: url("p5.webp");  
		background-size: 93px 42px;
		background-repeat: no-repeat;
	}
	</style>
<link rel="stylesheet" href="home.css">
<body>
	<header>
		<nav>
			<ul>
				<li><a id="1" href="#">Home</a></li>
				<li><a id="2" href="#">About</a></li>
				<li><a id="3" href="#">Services</a></li>
				<li><a id="4" href="#">Contact</a></li>
				<li id="search">Search:<input type="search"></li>
			</ul>
		</nav>
	</header>
	<main>
		<img src="p4.jpg" height="300px">
		<h1>Welcome to Homepage</h1>
        <p>My Name is Mahesh Pandhare</p>
		<a href="#">Learn More</a>
	</main>
	<div class="box">
		Mahesh
	</div>
	<footer>
		<p>&copy; 2023 My Creative Homepage. All rights reserved.</p>
	</footer>
</body>
</html>
