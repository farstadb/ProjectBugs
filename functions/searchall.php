<!-- This code makes the search result page when the user press show all -->
<!DOCTYPE html>
<html>
<?php
include '../functions/connect.php';
?> <!--includes the connecth.php file, so that the result page is connected to the database-->

<head>
  <title>Search results</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<!-- Including the function that shows all the products in the database -->
  <?php
  include '../functions/showall.php';
    searchAll();
  ?>
</body>
</html>
