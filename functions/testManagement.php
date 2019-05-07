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
  <a class="w3-bar-item w3-button w3-hover-black" href="#What">Generating Test Data</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#Importing">Importing Test Data</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#Assignment1">Assignment 1</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#Assignment1">Assignment 2</a>
  <br></br>
  <a class="w3-bar-item w3-button w3-hover-black" href="http://localhost:8080/projectbugs/functions/generatingLink.php">[Generation-Document]</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="http://localhost:8080/projectbugs/functions/populatingLink.php">[Population-Document]</a>
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

      When working with large amounts of test data it is useful to have a way to manage this data through the use of tools.</p>
    </div>

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h2 class="w3-text-teal"id ="Generating">Generating Test Data</h2>
      <p>There are several ways to generate test data. One can do it manually or generate data with the use of Data Generation tools. With Data Generation tools you can quickly create sets of test data for use in your project. <br /><br />

        Here we are using "Mockaroo" tool for just an example purpose.
        Mockaroo lets you generate up to 1,000 rows of realistic test data in CSV, JSON, SQL, and Excel formats.
        <a href = "http://mockaroo.com/" target="_blank" >URL: https://mockaroo.com/ (Does not need installation).</a>

        Screenshot from the site. It shows some default fields. 
        We need to modify the fields according to the “Project Bugs”.<br /><br />

        <img src= "../images/datagen1.png" width="600" height="300"><br /><br />

        By clicking here, you can modify the fields.<br /><br />

        <img src= "../images/datagen2.png" width="600" height="350"><br /><br />


        For Project Bugs (Test site) we are using following fields: <br /><br />

        <img src= "../images/datagen3.png" width="800" height="300"><br /><br />

        Scroll down to #Rows and Format, we need 1000 rows and in Excel-format.
        Press Download Data. <br /><br />

        <img src= "../images/datagen4.png" width="800" height="400"><br /><br />

        Save your file! Voilà – you are finished! 

      </p>
    </div>

    <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h2 class="w3-text-teal"id ="Importing">Importing Test Data</h2>
      <p>It has been developed a custom program to import test data to Project Bugs site; ExportTestData.exe

        Per now we are importing data for following function:<br /><br />

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
        The user database has now been updated with the imported Test Data. <br /><br />
    </p>
    </div>

    <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h2 class="w3-text-teal"id ="Assignment1">Assignment 1: Generate Test Data</h2>
      <p>Generate Test Data by using the following website.</p>
    </div>

    <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h3 class="w3-text-teal">How to do it yourself</h3>
      <p>....</p>
    </div>

    <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h2 class="w3-text-teal"id ="Assignment2">Assignment 2: Import Test Data</h2>
      <p>Import the test data generated in Assignment 1 to the Project bugs website.</p>
    </div>

    <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h3 class="w3-text-teal">How to do it yourself</h3>
      <p>......</p>
      <p><a href="#top">Top</a></p>
    </div>


<!-- END MAIN -->
</div>

</body>
</html>
