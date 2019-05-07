<!DOCTYPE html>
<html lang="en">
<title>Test Management</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--using header code that is already made, from reusablecode.html-->
<head>
<script src ="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<script>
  $(function(){
    $('#header').load('../reusablecode.html');
  });

</script>

<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
.w3-sidebar {
  z-index: 3;
  width: 250px;
  top: 130px;
  bottom: 0;
  height: inherit;
  position: fixed;
}
</style>
<body>

  <div class ="container">
  <header>
    <div id ="header">
    </div>
  </header>

<!-- Sidebar -->
<nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
    <i class="fa fa-remove"></i>
  </a>
  <h4 class="w3-bar-item"><b>Menu</b></h4>
  <a class="w3-bar-item w3-button w3-hover-black" href="http://localhost:8080/projectbugs/functions/testManagement.php">Back to Test Data Management</a>

  <br></br>
  <a class="w3-bar-item w3-button w3-hover-black" href="http://localhost:8080/projectbugs/functions/generatingLink.php">Test-Generation</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="http://localhost:8080/projectbugs/functions/populatingLink.php">Test-Population</a>
  <a class="w3-bar-item w3-button w3-hover-black" span style="margin-left:2em" href="#top">Introduction</a>
  <a class="w3-bar-item w3-button w3-hover-black" span style="margin-left:2em" href="#Info">What is population</a>
  <a class="w3-bar-item w3-button w3-hover-black" span style="margin-left:2em" href="#What">How to do it</a>
  <a class="w3-bar-item w3-button w3-hover-black" span style="margin-left:2em" href="#Assignment2">Assignment 2</a> <br>
  <br></br><a class="w3-bar-item w3-button w3-hover-black" href="http://localhost:8080/projectbugs/index.php"target="_blank">Go to test site</a>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<div class="w3-main" style="margin-left:250px">

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <br></br>
      <h1 class="w3-text-teal"id ="Headline">Population</h1>
      <p>
      </p>
    </div>

    <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h2 class="w3-text-teal"id ="Info">Introduction</h2>
      <p>Welcome to Test Data Population. Here you will learn how to populate data, and how to set up a tool for this. There will also be an assignment for this. 
    </div>

  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h2 class="w3-text-teal" id ="What">What is population</h2>
      <p>When applying Test Data Population, you find a tool that allows you to populate a high number of users, in a short period of time. This will lead to higher quality of testing, and is easier to use, than to type in a high number of users manually.</p>
    </div>

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h2 class="w3-text-teal"id ="Populate">How to do it</h2>
      <p>It has been developed a custom program to populate test data to Project Bugs site; ExportTestData.exe

        <br>Per now we are populating data for following function:<br /><br />

        · New user registration (First name, sir name, email, password)<br /><br />

        Check following before importing the test data:<br /><br />

        · Apache and MySQL server must be started<br /><br />

        · Chrome is installed · Follow the steps in: How to start with Project Bugs<br /><br />

        · Follow the steps in: Setup – Testautomatisering med Selenium<br /><br />

        · Fetch the latest code?<br /><br />

        To start with importing the Test Data, do the following:<br /><br />

        1. Navigate to:

        ...\xampp\htdocs\ProjectBugs\functions\ExportTestData\ExportTestData\bin\Debug<br /><br />

        <img src= "../images/dataimp1.png" width="800" height="400"><br /><br />

        2.  Save the test data file<br /><br />
        Save the data file in Excel format in same folder and rename it to: TestDataUsers.xlsx<br /><br />

         

        3.  Run the file ExportTestData.exe<br /><br />

        You will see the console showing you data which is imported.<br /><br />

        <img src= "../images/dataimp2.png" width="800" height="400"><br /><br />

        After importing the data, it will start Chrome and all data will be registered in the fields automatically by Selenium.<br /><br />

        <img src= "../images/dataimp3.png" width="500" height="400"><br /><br />

        After all the test data is registered, then it will close Chrome and you can close the console window.
        The user database has now been updated with the imported Test Data. <br /><br /></p>
    </div>

    <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h2 class="w3-text-teal"id ="Assignment2">Assignment 2: Import Test Data</h2>
      <p>Import the test data generated in Assignment 1 to the Project bugs website.</p>
      <p><a href="#top">Top</a></p>
    </div>

    <!-- END MAIN -->
</div>

</body>
</html>
