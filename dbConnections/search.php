<!-- This code makes the search result page and connects all elements in the search results page -->
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
	<!-- Includes the search functions -->
  <?php
  include '../functions/functions.php';
    searchQuery();
  ?>
</body>
</html>
