<!-- This function is used when the user press the button "show all"
And to find all of the bugs, this function calls on searchAll method-->
<?php
function searchAll() {


        $raw_results = mysqli_query(openCon(), "SELECT * FROM bugs
            WHERE bugname LIKE '%' "); //or die(mysql_error());

        // * means that it selects all fields
        // bugs is the name of our table

        // '%' is what we're looking for, % means anything
        // it will match when you press show all 

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
                // posts results gotten from database(bugname, bugdescription, instock) you can also show id ($results["id"])
                // Posted in a "table". 
            }

        }
        else{ // if there is no matching rows do following
            echo "No results";
        }

    }
?>
