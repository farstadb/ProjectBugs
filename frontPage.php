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
		height: 130px;
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
		position: relative;
	}

	body
	{
		background-image: url("Images/sogeti2.jpg");
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center;
		background-attachment: fixed;
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
		align-items: stretch;
		display: flex;
		justify-content: space-between;
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
		font-weight: 700;
		text-decoration-style: solid;
		border:none;
		margin-top: 20px;
		margin-right: 20px;
	}

	.dropdown .dropbtn
	{
		margin-bottom: 0px;
		border: none;
	}

	.navbar a:hover, .dropdown:hover .dropbtn 
	{
		background-color: rgb(228,228,228);
	}
	.dropdown-content 
	{
		display: none;
		position: absolute;
		background-color: rgb(228,228,228);
		min-width: 160px;
		z-index:1;
		font-family: Ubuntu, Verdana, Avenir, Helvetica, Arial, sans-serif;
		border: none;
		padding: 12px 16px;
		font-size: 16px;
		outline: none;
		margin left: none;
		box-shadow: 0px 8px 16px 0px;
		overflow: auto;
	}
	.dropdown-content a 
	{
		float:none;
		color: rgb(0,112,173);
		padding:12px 16px;
		text-decoration: none;
		display:block;
		text-align: left;
		border:0;
	}
	.dropdown-content a:hover 
	{
		background-color: grey;
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
		</div>
				<div class="dropdown">
			<button class = "dropbtn"><a href = "http://localhost:8080/projectbugs/functions/testManagement.php">Test Data Management</a>
			<i class="fa fa-caret-down"></i>
		</button>
						<div class="dropdown-content">
						<a href = "http://localhost:8080/projectbugs/functions/testManagement.php" class="dropbtn"> About Test data Management </a>
						<a href = "http://localhost:8080/projectbugs/functions/generatingLink.php"> Test-Generation </a>
						<a href = "http://localhost:8080/projectbugs/functions/populatingLink.php"> Test-Population </a>
					</div>	
				</div>

				<div class="dropdown">
			<button class = "dropbtn"><a href = "http://localhost:8080/projectbugs/functions/automation.php">Automation</a>
			<i class="fa fa-caret-down"></i>
		</button>
						<div class="dropdown-content">
						<a href = "http://localhost:8080/projectbugs/functions/automation.php" class="dropbtn"> About Automation </a>
						<a href = "http://localhost:8080/projectbugs/functions/seleniumSetup.php"> Selenium </a>
						<a href = "http://localhost:8080/projectbugs/functions/notFinished.php"target="_blank"> UiPath </a>
						<!-- UiPath popup, new tab (using target="_blank") -->
						<a href = "http://localhost:8080/projectbugs/functions/notFinished.php"target="_blank"> TestComplete </a>
						<!-- TestComplete popup, new tab (using target="_blank") -->
					</div>
			</div>
			<div class="dropdown">
					<button class = "dropbtn"><a href = "http://localhost:8080/projectbugs/functions/notFinished.php"target="_blank">Cyber Security</a>
						<i class="fa fa-caret-down"></i>
					</button>
						<div class="dropdown-content">
						<a href = "http://localhost:8080/projectbugs/functions/notFinished.php"target="_blank"> Method </a>
						<a href = "http://localhost:8080/projectbugs/functions/notFinished.php"target="_blank"> Cyber Security </a>
						</div>
			</div>
			<div class="dropdown">
					<button class = "dropbtn"><a href = "http://localhost:8080/projectbugs/functions/performance.php">Performance</a>
						<i class="fa fa-caret-down"></i>
					</button>
						<div class="dropdown-content">
						<a href = "http://localhost:8080/projectbugs/functions/performance.php"> About Performance testing </a>
						<a href = "http://localhost:8080/projectbugs/functions/neoload.php"> NeoLoad </a>
						<a href = "http://localhost:8080/projectbugs/functions/jmeter.php"> JMeter </a>					
						</div>
			</div>
			<div class="dropdown">
					<button class = "dropbtn"><a href = "http://localhost:8080/projectbugs/functions/notFinished.php"target="_blank">Certification</a>
						<i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown-content">
						<a href = "http://localhost:8080/projectbugs/functions/notFinished.php"target="_blank"> About us </a>
					</div>
			</div>
		</div>
	</div>

	<h1> <ul> Welcome to Training Arena!</h1>
	<ul> Find bugs, learn test automation, testing tools and more.
	<p> Contact your manager to get information about which documents to read </p>
	<p>in order to start the learning process.  </li></p>
<!--Should we remove this??
	<a href = "http://localhost:8080/projectbugs/index.php" target="_blank" style="color:black"> <h3>Go to the test site!</h3> </a>-->
</body>
</html>
