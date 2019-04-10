<?php
echo '<div id="logo">
    <a href = "../index.php" id = "logo">
    <img src = "../images/ProjectBugs_Logo.png">
    </a>
    </div>';


include '../functions/connect.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Opprette ny bruker</title>
</head>
<body>
<form action="user.php" method="post">
    <p>
        <label for="Fornavn">Fornavn:</label>
        <input type="text" name="Fornavn" id="Fornavn">
    </p>
    <p>
        <label for="Etternavn">Etternavn:</label>
        <input type="text" name="Etternavn" id="Etternavn">
    </p>
    <p>
        <label for="Mailadresse">Epost addresse:</label>
        <input type="text" name="Mailadresse" id="Mailadresse">
    </p>
    <p>
        <label for="Passord">Passord:</label>
        <input type="text" name="Passord" id="Passord">
    </p>
    <input type="submit" value="Submit">
</form>
</body>
</html>

    