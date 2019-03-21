<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "Bugs";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Search results</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <style type="text/css">
    	body {
    		background-color: black;
    	}
    	
    	#bugs_container {
  			font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  			border-collapse: collapse;
  			width: 100%;
		}

		#bugs_container td, #bugs_container th {
  			border: 1px solid #ddd;
  			padding: 8px;
		}

		#bugs_container tr:nth-child(even){background-color: #f2f2f2;}
		#bugs_container tr:nth-child(3){background-color: rgb(350,350,350);}

		#bugs_container tr:hover {background-color: #ddd;}

		#bugs_container th {
  			padding-top: 12px;
  			padding-bottom: 12px;
  			text-align: left;
  			background-color: #4CAF50;
  			color: white;
		}
		

    	

    	/* SEARCH RESULT CONTAINER */
    	#searchResultsContainer {
    		height: 150px;
    		width: 100%;
    		background-color: white;
    		position: relative;
    		border: 1px solid #ddd;
    	}

    	#ImageContainer {
    		height: 100px;
    		width: 100px;
    		position: absolute;
    		background-color: red;
    		margin-left: auto;
    		margin-right: auto;
    		display: block;
    		top: 50%;
    		left: 5%;
    		transform: translate(-50%, -50%);
    	}
    	img {
    		width: 100%; /* or any custom size */
    		height: 100%; 
    		object-fit: contain;

		}
		#textContainer {
			position: relative;
			left: 10%;
		}
		#antallInStock {
			position: relative;
			left: 80%;
			top: -80px;
		}
    </style>
</head>
<body>
<?php
    $query = $_GET['query']; 
    // gets value sent over search form
     
    $min_length = 1;
    // you can set minimum length of the query if you want
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        // $query = mysql_real_escape_string($query);
        // makes sure nobody uses SQL injection
         
        $raw_results = mysqli_query(openCon(), "SELECT * FROM bugs
            WHERE bugname LIKE '%".$query."%' "); //or die(mysql_error());
             
        // * means that it selects all fields
        // bugs is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `bugname`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysqli_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
                echo '<div id = "searchResultsContainer">
                			<div id ="ImageContainer"> 
                				<img src="../images/image-placeholder.png">
                			</div>
                				<div id="textContainer"><h3>'.$results['bugname'].'</h3>'.$results['bugDescription'].'
                			</div>
                			<div id ="antallInStock"><p>Antall tilgjenglig</p>'.$results['InStock'].'
                			</div>
                		</div>';                		;
                // posts results gotten from database(bugname and bugdescription) you can also show id ($results['id'])
            }
             
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }
         
    }
    else{ // if query length is less than minimum
        echo "No results";
    } // test
?>
</body>
</html>
