<?php
include '../functions/connect.php';
include '../functions/functions.php';
if($_GET){
    if(isset($_GET['submit'])){
        newUser();
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
  <link rel="stylesheet" type="text/css" href="../css/style.css">
<title>Opprette ny bruker</title>
</head>
<body>

<div id="logo">
      <a href = "../index.php" id = "logo">
      <img src = "../images/ProjectBugs_Logo.png">
      </a>
</div>

<div id="regBox">
  <form action="user.php" method="post">
    <div id="regInputBox">
        <input type="text" name="Fornavn" id="Fornavn" placeholder="Fornavn">
    </div>
    <div id="regInputBox">
        <input type="text" name="Etternavn" id="Etternavn" placeholder="Etternavn">
    </div>
    <div id="regInputBox">
        <input type="text" name="Mailadresse" id="Mailadresse" placeholder="Mail-adresse">
    </div>
    <div id="regInputBox">
        <input type="password" name="Passord" id="Passord" placeholder="Passord">
    </div>
        <input type="submit" value="Submit">
</div>

  </form>

</div>
</body>
</html>
