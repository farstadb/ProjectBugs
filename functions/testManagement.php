<!DOCTYPE html>
<html lang="en">
<title>Test Data Management</title>
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
  top:120px;
  bottom: 0;
  height: inherit;
  position: fixed;
}
</style>

<!--the code for test data management-->
<body>

<div class ="container">
  <header>
    <div id ="header">
    </div>
  </header>
<!-- Sidebar -->
<nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
    <i class="fa fa-remove"></i>
  </a>
  <h4 class="w3-bar-item"><b>Menu</b></h4>
  <a class="w3-bar-item w3-button w3-hover-black" href="#top">Introduction</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#Info">What is Test Data Management</a>

  <br></br>
  <a class="w3-bar-item w3-button w3-hover-black" href="http://localhost:8080/projectbugs/functions/generatingLink.php">Test-Generation</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="http://localhost:8080/projectbugs/functions/populatingLink.php">Test-Population</a>
  <br></br><a class="w3-bar-item w3-button w3-hover-black" href="http://localhost:8080/projectbugs/index.php"target="_blank">Go to test site</a>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main" style="margin-left:250px">

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <br></br>
      <h1 class="w3-text-teal"id ="Headline">Test Data Management</h1>
      <p>
      </p>
    </div>

    <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h2 class="w3-text-teal"id ="Info">Introduction</h2>
      <p>In this section, you will learn about the test data management which is a very important part in software testing. You will learn about: What is test data management, how to generate test data , how to  use/import test data.

      </p>
    </div>

  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h2 class="w3-text-teal" id ="What">What is Test Data</h2>
      <p>Test Data is data that is going to be used for the purpose of testing. When sets of usernames and passwords to test a login function for example, then those usernames and passwords are considered test data. <br></br>

      When working with large amounts of test data it is useful to have a way to manage this data through the use of tools.

      <br> Fill in that you can use both generating and populating.. blablabla
      </p><br>
          <p><a href="#top">Go back to the top</a></p>
    </div>
 


<!-- END MAIN -->
</div>

</body>
</html>
