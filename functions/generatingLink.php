<!DOCTYPE html>
<html lang="en">
<title>Test Management</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--using header code that is already made from reusablecode.html-->
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
  <a class="w3-bar-item w3-button w3-hover-black" span style="margin-left:2em" href="#top">Introduction</a>
  <a class="w3-bar-item w3-button w3-hover-black" span style="margin-left:2em" href="#Info">What is generating</a>
  <a class="w3-bar-item w3-button w3-hover-black" span style="margin-left:2em" href="#What">How to do it</a>
  <a class="w3-bar-item w3-button w3-hover-black" span style="margin-left:2em" href="#Assignment1">Assignment 1</a> <br>
  <a class="w3-bar-item w3-button w3-hover-black" href="http://localhost:8080/projectbugs/functions/populatingLink.php">Test-Population</a>
  <br></br><a class="w3-bar-item w3-button w3-hover-black" href="http://localhost:8080/projectbugs/index.php"target="_blank">Go to test site</a>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<div class="w3-main" style="margin-left:250px">

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
    	<br></br>
      <h1 class="w3-text-teal"id ="Headline">Get started with Test Data Generation</h1>
      <p>
      </p>
    </div>

    <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h2 class="w3-text-teal"id ="Info">Introduction</h2>
      <p> Welcome to Test Data Generation. Here you will learn how to generate data, and how to set up a tool for this. There will also be an assignment for this. 
    </div>

  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h2 class="w3-text-teal" id ="What">What is generating</h2>
      <p>When applying Test Data Generation, you find a tool that allows you to generate a high number of users, in a short period of time. This will lead to higher quality of testing, and is easier to use, than to type in a high number of users manually.</p>
    </div>

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h2 class="w3-text-teal"id ="Generate">How to do it</h2>
      <p>One good tool to use for this is: Mockaroo
      Mockaroo lets you generate up to 1,000 rows of realistic test data in CSV, JSON, SQL, and Excel formats. 
      <a href = "http://mockaroo.com/" target="_blank" >URL: https://mockaroo.com/ (Does not need installation).</a>
      <br></br> Here are som screenshots from the site. It shows some default fields. 
      We need to modify the fields according to the "Project Bugs". 
      <br></br>
      <img src="../images/generation1.jpg">
      <br></br>For Project Bugs we are using following fields: <br></br>
      <img src ="../images/generation2.jpg">
      <br></br> Scroll down to #Rows and Format, we need 1000 rows and in Excel-format. 
      Press Download data. 
      <img src ="../images/generation3.jpg"><br></br>
      Save your file! Voilà - you are finished!
  	</p>
    </div>

    <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h2 class="w3-text-teal"id ="Assignment1">Assignment 1: Generate Test Data</h2>
      <p>Generate Test Data by using the following website.</p>
        	<p><a href="#top">Top</a></p>
    </div>
    <!-- END MAIN -->
</div>


</body>
</html>
