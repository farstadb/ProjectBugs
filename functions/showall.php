
<?php
function searchAll() {


        $raw_results = mysqli_query(openCon(), "SELECT * FROM bugs
            WHERE bugname LIKE '%' "); //or die(mysql_error());

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
                        <form action="../dbconnections/search.php" method="GET">
                        <input type="text" name="query" placeholder="Search for bugs.." />
                        </form>
                    </div>';

        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following

            while($results = mysqli_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop

            if($results['InStock'] > 0){
              $IsInStock = "Varen er tilgjengelig!";
            }
            else{
              $IsInStock = "Utsolgt!";
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
                		</div>';
                // posts results gotten from database(bugname and bugdescription) you can also show id ($results["id"])
            }

        }
        else{ // if there is no matching rows do following
            echo "No results";
        }

    }
?>
