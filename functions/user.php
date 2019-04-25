<?php
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
      echo '<div id="logoBoks">
                    <a href = "../index.php" id = "logoBoks">
                    <div align = "center"/>
                    <img src = "../images/ProjectBugs_Logo.png">
                    </a>
                    </div>
                    <br></br><br></br><br></br>
                    <div style="text-indent: 670px">
                    Records added successfully. </div>';
  }
  else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  }
}
else {
  echo '<div id="logoBoks">
                    <a href = "../index.php" id = "logoBoks">
                    <div align = "center"/>
                    <img src = "../images/ProjectBugs_Logo.png">
                    </a>
                    </div>
                    <br></br><br></br><br></br>
                    <div style="text-indent: 650px">
                    Noe var feil med input - prøv igjen </div>';
}

// Close connection
mysqli_close($link);

?>
