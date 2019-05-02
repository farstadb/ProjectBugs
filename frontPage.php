<!--            THE MAIN FILE THAT RUNS THE WHOLE SOLUTION          -->
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <title>Test Arena</title> <!-- Tittel of the TAB  -->
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" /> <!-- Uses scandinavian characters -->
    <link rel="stylesheet" type="text/css" href="css/style.css"/> <!-- Inlcuding the styling CSS file -->

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
		background-image: url("Images/sogeti.jpg");
		background-repeat: no-repeat;
		background-size:100%;
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
	.contentBox
	{
		height:70px;
		width:100px;
		position:relative;
		background-color: transparent;
		float:left;
		top:0px;
		left:500px;
		margin:20px;
		text-decoration: none;
		box-sizing: border-box;
		padding:25px;
	}

	a{color:black}
	a:hover{color:green;}
	a{position: center}
	a{margin:auto}

</style>
<body>
	<div id="header">
		<div id= "imageContainer">
			<img src="Images/logo.jpg">
		</div>
			<a href = "Test arena/TestArena.html" class="contentBox"> Introduction </a>
			<a href = "http://localhost:8080/projectbugs/functions/testManagement.php" class="contentBox"> Test Management </a>
			<a href = "Test arena/TestArena.html" class="contentBox"> Cyber Security </a>
			<a href = "Test arena/TestArena.html" class="contentBox"> Performance </a>
			<a href = "Test arena/TestArena.html" class="contentBox"> Certification </a>
			<a href = "Test arena/TestArena.html" class="contentBox"> Om oss </a>
		</div>
		</div>
	</div>
	<h1> Welcome to Training Arena!</h1>
	<p> Find bugs, learn test automation and more </p> <br></br>
	<a href = "http://localhost:8080/projectbugs/index.php" target="_blank" style="color:black"> <h3>Go to the test site!</h3> </a>
</body>
</html>
