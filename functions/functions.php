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

        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following

            while($results = mysqli_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop

                echo '<div id="searchResultsContainer">
                			<div id="ImageContainer">
                				<img src="../images/image-placeholder.png">
                			</div>
                				<div id="textContainer"><h3>'.$results["bugname"].'</h3>'.$results["bugDescription"].'
                			</div>
                			<div id="antallInStock"><p>Antall tilgjenglig</p>'.$results["InStock"].'
                			</div>
                		</div>';
                // posts results gotten from database(bugname and bugdescription) you can also show id ($results["id"])
            }

        }
        else{ // if there is no matching rows do following
            echo "No results";
        }

    }
    else{ // if query length is less than minimum
        echo "No results";
    } // test
}
?>
