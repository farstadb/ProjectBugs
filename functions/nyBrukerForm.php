<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Opprette ny bruker</title>
</head>
<body>
<form action="oppretteNyBruker.php" method="post">
    <p>
        <label for="firstName">Fornavn:</label>
        <input type="text" name="first_name" id="firstName">
    </p>
    <p>
        <label for="lastName">Etternavn:</label>
        <input type="text" name="last_name" id="lastName">
    </p>
    <p>
        <label for="emailAddress">Epost addresse:</label>
        <input type="text" name="email" id="emailAddress">
    </p>
    <input type="submit" value="Submit">
</form>
</body>
</html>