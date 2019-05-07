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
		height: 120px;
		width: 100%;
		background-color:white;
		position:relative;
	}
	body
	{
		margin:0px;
		font-family: Ubuntu, Verdana, Avenir, Helvetica, Arial, sans-serif;
		font-size: 100%;
		line-height:1.4;
		padding-bottom:0;
	}

	body
	{
		background-image: url("Images/sogeti2.jpg");
		background-repeat: no-repeat;
		background-size:130%;
	}
	#imageContainer
	{
		height:90px;
		width:240px;
		position:absolute;
		padding:20px;
		left:60px;
		right:0px;
		bottom: 0px;
		max-width: 304px;
		flex-grow: 1;
		line-height: 90px;

	}
	#imageContainer img
	{
		width:60%;
		height: 90px;
	}
	.navbar
	{
		overflow: hidden;
		background-color: rgb(255,255,255);
		float: left;
		margin-left: 400px;
		display: inline-block;
	}
	.navbar a 
	{
		float: left;
		font-size: 16px;
		color: rgb(0, 112, 173);
		text-align: center;
		text-decoration: none;
		box-shadow: rgba(100,100,100,0.49);
	}

	.dropdown 
	{
		float:left;
		overflow: hidden;
		display: inline-block;
	}

	.dropbtn 
	{
		font-size: 16px;
		border: none;
		outline: none;
		color: rgb(0,112,173);
		padding: 16px;
		background-color: inherit;
		font-family: Ubuntu, Verdana, Avenir, Helvetica, Arial, sans-serif;
		font-weight: 500;
		text-decoration-style: solid;
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
		z-index:9998;
		font-family: Ubuntu, Verdana, Avenir, Helvetica, Arial, sans-serif;
		overflow: auto;
		align-self: center;
	}
	.dropdown-content a 
	{
		float:none;
		color: rgb(0,112,173);
		padding: 12px 14px;
		text-decoration: none;
		display: inline-block;
		text-align: center;
	}
	.dropdown-content a:hover 
	{
		background-color: grey;
	}
	.dropdown:hover .dropdown-content
	{
		display:inline-block;
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
				<a href = "http://localhost:8080/projectbugs/functions/automation.php" class="dropbtn" class="dropdown">Automation</a>
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
