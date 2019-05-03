<!--            THE MAIN FILE THAT RUNS THE WHOLE SOLUTION          -->
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <title>Test Arena</title> <!-- Tittel of the TAB  -->
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" /> <!-- Uses scandinavian characters -->
    <link rel="stylesheet" type="text/css" href="css/style.css"/> <!-- Inlcuding the styling CSS file -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>
    	
<style>
	#header
	{
		height: 100px;
		width: 100%;
		background-color:white;
		position:relative;
	}
	body
	{
		margin:0px;
		font-family: sans-serif;
		font-size: 100%;
		line-height: 1.4;
	}

	body
	{
		background-image: url("Images/sogeti2.jpg");
		background-repeat: no-repeat;
		background-size:130%;
	}
	#imageContainer
	{
		height:100%;
		width:200px;
		position:absolute;
		top:0px;
		left:0px;
		right:50px;

	}
	#imageContainer img
	{
		width:100%;
		height: 100%;
	}
	.navbar
	{
		overflow: hidden;
		background-color: transparent;
		float: left;
		margin-left: 420px;
		display: inline-block;
	}
	.navbar a 
	{
		float: left;
		font-size: 16px;
		color: blue;
		text-align: left;
		padding: 14px 16px;
		text-decoration: none;
	}

	.dropdown 
	{
		float:left;
		overflow: hidden;
	}

	.dropbtn 
	{
		font-size: 16px;
		border: none;
		outline: none;
		color: blue;
		padding: 16px;
		background-color: inherit;
		font-family: green;
		margin:30px;
	}

	.dropdown .dropbtn
	{
		border: none;
		margin-bottom: 0;
	}

	.navbar a:hover, .dropdown:hover .dropbtn 
	{
		background-color: grey;
	}
	.dropdown-content 
	{
		display: none;
		position: absolute;
		background-color: inherit;
		min-width: 160px;
		padding: 16px;
		z-index:1;
		font-family: green;
		overflow: auto;
		align-self: center;
	}
	.dropdown-content a 
	{
		float:none;
		color: black;
		padding: 12px 16px;
		text-decoration: none;
		display: block;
		text-align: center;
	}
	.dropdown-content a:hover 
	{
		background-color: white;
	}
	.dropdown:hover .dropdown-content
	{
		display:block;
	}
</style>
<body>
	<div id="header">
		<div id= "imageContainer">
			<img src="Images/logo.jpg">
		</div>
			<div class="navbar">
			<div class="dropdown">
					<button class = "dropbtn">Introduction
						<i class="fa fa-caret-down"></i>
					</button>
			<div class="dropdown-content">
				<a href = "Test arena/TestArena.html"> Welcome </a>
				<a href = "Test arena/TestArena.html"> Test Arena </a>			<a href = "Test arena/TestArena.html"> News </a>
			</div>
		</div>
				<a href = "http://localhost:8080/projectbugs/functions/testManagement.php" class="dropbtn" class="dropdown">Test Management</a>
			</div>
			<div class="dropdown">
					<button class = "dropbtn">Performance
						<i class="fa fa-caret-down"></i>
					</button>
			<div class="dropdown-content">
				<a href = "Test arena/TestArena.html"> Tools </a>
				<a href = "Test arena/TestArena.html"> Testing </a>				<a href = "Test arena/TestArena.html"> Method </a>
			</div>
			</div>
			<div class="dropdown">
					<button class = "dropbtn">Cyber Security
						<i class="fa fa-caret-down"></i>
					</button>
						<div class="dropdown-content">
						<a href = "Test arena/TestArena.html"> Method </a>
						<a href = "Test arena/TestArena.html"> Bla bla bla </a>	<a href = "Test arena/TestArena.html"> Link1 </a>
						</div>
			</div>
			<div class="dropdown">
					<button class = "dropbtn">Certification
						<i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown-content">
						<a href = "Test arena/TestArena.html"> About us </a>
						<a href = "Test arena/TestArena.html"> Bla bla bla </a>	<a href = "Test arena/TestArena.html"> Nyhet </a>
					</div>
			</div>
		</div>
	<h1> Welcome to Training Arena!</h1>
	<p> Find bugs, learn test automation and more </p> <br></br>
	<a href = "http://localhost:8080/projectbugs/index.php" target="_blank" style="color:black"> <h3>Go to the test site!</h3> </a>
</body>
</html>
