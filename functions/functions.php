<?php

function searchQuery() {
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


        echo '<div id="logo">
                    <a href = "../index.php" id = "logo">
                    <img src = "../images/ProjectBugs_Logo.png">
                    </a>
                    </div>

                    <div id = "searchfield">
                        <form action="search.php" method="GET">
                        <input type="text" name="query" placeholder="Search for bugs.." />
                        </form>
                    </div>';

        /* Here the logo is printed out and the search field, so that when the user press the button show all
        the logo and search bar is appearing in the top. This is so that the user can search again and
        go back to the homepage*/


        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following

            while($results = mysqli_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop

            if($results['InStock'] > 0){
              $IsInStock = "Varen er tilgjengelig!";
              echo '<div id="tilgjengeligKnapp"></div>';

            }
            else{
              $IsInStock = "Må bestilles!";
              echo '<div id="utilgjengeligKnapp"></div>';
            }
            // IsInStock shows a title if the item is in stock, or if it is out of stock and unavailiable to buy

                echo '<div id="searchResultsContainer">
                			<div id="ImageContainer">
                				<img src="'.$results["BugImages"].'">
                			</div>
                				<div id="textContainer"><h3>'.$results["bugname"].'</h3>'.$results["bugDescription"].'
                			</div>
                			<div id="antallInStock"><p>',$IsInStock,'</p>'.$results["InStock"].' stk på lager
                			</div>
                            <div id="prisContainer"><p>'.$results["Pris"].',- kr</p>
                            </div>
                            <div id ="prisTekst"><p>Pris: </p>
                            </div>
                		</div>';
                // posts results gotten from database(bugname and bugdescription) you can also show id ($results["id"])
            }

        }
        else{ // if there is no matching rows do following
            echo ' <br></br><br></br><br></br>
            <div style="text-indent: 500px"> Desverre ingen resultater..</div> ';
            
        }

    }
    else{  // if query length is less than minimum
        echo '<div id="logo">
                    <a href = "../index.php" id = "logo">
                    <img src = "../images/ProjectBugs_Logo.png">
                    </a>
                    </div>

                    <div id = "searchfield">
                        <form action="search.php" method="GET">
                        <input type="text" name="query" placeholder="Search for bugs.." />
                        </form>
                    </div>
                    <br></br><br></br><br></br>
                    <div style="text-indent: 400px"> Du må skrive noe i søkefeltet for å få resultat.</div> ';
            
    } // shows up when the user press enter whitout any input. The logo and search bar appears at the top.
}

function newUser(){
  /* Attempt MySQL server connection. Assuming you are running MySQL
  server with default setting (user 'root' with no password) */
  $link = mysqli_connect("localhost", "root", "", "Bugs");
  // Escape user inputs for security
  $Fornavn = mysqli_real_escape_string($link, $_REQUEST['Fornavn']);
  $Etternavn = mysqli_real_escape_string($link, $_REQUEST['Etternavn']);
  $Mailadresse = mysqli_real_escape_string($link, $_REQUEST['Mailadresse']);
  $Passord = mysqli_real_escape_string($link, $_REQUEST['Passord']);
  // Attempt insert query execution


  if(($Fornavn&&$Etternavn&&$Mailadresse &&$Passord)  != null){
  	$sql = "INSERT INTO bruker (Fornavn, Etternavn, Mailadresse, Passord) VALUES ('$Fornavn', '$Etternavn', '$Mailadresse', '$Passord')";
  	if(mysqli_query($link, $sql)){
      	echo "Records added successfully.";
  	}
  	else{
      	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  	}
  }
  else {
  	echo "Feil";
  }

  // Close connection
  mysqli_close($link);
}
?>
