<!--            THE MAIN FILE THAT RUNS THE WHOLE SOLUTION          -->
<!DOCTYPE html>
<html>
<head>
    <title>How Many Bugs Can you find?</title> <!-- Tittel of the TAB  -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <!-- Uses scandinavian characters -->
    <link rel="stylesheet" type="text/css" href="css/style.css"/> <!-- Inlcuding the styling CSS file -->
</head>
<body>
		<div id ="boks"> <!-- Container for all the elements on the landing page -->
    		<form action="dbconnections/search.php" method="GET"> <!-- GET the search.php in the input field -->
        		<input type="text" name="query" placeholder="Search for bugs.." /> <!-- sending text input to the variable query -->
    		</form>
    		<div id ="LogoBoks"> <!-- LOGO box container for the landing page-->
                <img src = "images/ProjectBugs_Logo.png"> <!-- Gets the logo images from the images folder -->
            </div>
    		<a href="functions/searchall.php" class = "showAll"> Show all </a> <!-- the button for "ShowAll" and links it to searchall.php-->
            <a href="functions/nyBrukerForm.php" class ="oppretteBrukerKnapp">Opprette ny bruker</a>
    	</div>
    	
</body>
</html>
