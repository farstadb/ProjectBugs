<!DOCTYPE html>
<html>
<head>
    <title>How Many Bugs Can you find?</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <style type="text/css">
    	body {
    		font-family: Helvetica;
    	}
    	#myVideo {
  			position: absolute;
  			right: 0;
  			bottom: 0;
  			min-width: 100%; 
  			min-height: 100%;
		}
		#boks {
			height: 50px;
			width: 550px;
			/*background-color: rgb(150,150,150);*/
			position: absolute;
			text-align:  center;
			top: 450px;
			left: 590px;
		}
		input[type=text], select {
  			width: 100%;
  			padding: 12px 20px;
  			margin: 8px 0;
  			display: inline-block;
  			border: 1px solid #ccc;
  			border-radius: 4px;
  			box-sizing: border-box;
		

    </style>
</head>
<body>
<video autoplay muted loop id="myVideo">
  <source src="video/HowManyBugs2.mp4" type="video/mp4">
</video>
		<div id ="boks">
    		<form action="dbconnections/search.php" method="GET">
        		<input type="text" name="query" placeholder="Search for bugs.." />        		
    		</form>
    	</div>
    		
</body>
</html>