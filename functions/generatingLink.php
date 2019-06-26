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
  <a class="w3-bar-item w3-button w3-hover-black" href="#Headline">Test-Generation</a>
  <a class="w3-bar-item w3-button w3-hover-black" span style="margin-left:2em" href="#skill">Technical skill level</a>
  <a class="w3-bar-item w3-button w3-hover-black" span style="margin-left:2em" href="#Info">What is test data generation</a>
  <a class="w3-bar-item w3-button w3-hover-black" span style="margin-left:2em" href="#Generate">How to do it yourself</a>
  <a class="w3-bar-item w3-button w3-hover-black" span style="margin-left:2em" href="#Assignment1">Exercise</a>
    <a class="w3-bar-item w3-button w3-hover-black" span style="margin-left:2em" href="#help">Help!</a> <br>
  <a class="w3-bar-item w3-button w3-hover-black" href="http://localhost:8080/projectbugs/functions/populatingLink.php">Test-Population</a>
  <br><a class="w3-bar-item w3-button w3-hover-black" href="http://localhost:8080/projectbugs/index.php"target="_blank">Go to test site</a>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<div class="w3-main" style="margin-left:250px">

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
    	<br></br>
      <h1 class="w3-text-teal"id ="Headline">Test Data Generation</h1>
      <p>
        Welcome to Test Data Generation. Here you will learn how to generate data, and how to set up a tool for this. There will also be an exercise at the end.
      </p>
    </div>

    <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h3 class="w3-text-teal"id ="skill">Technical skill level</h3>
      <p>Intermediate.<br>
      Estimated time: 30 minutes</p> 
    </div>

    <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h3 class="w3-text-teal"id ="Info">What is Test Data Generation?</h3>
      <p>
      When applying Test Data Generation, you find a tool that allows you to generate a high number of users, in a short period of time. This will lead to higher quality of testing, and is easier to use, than to type in a high number of users manually.</p>
    </div>

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h3 class="w3-text-teal"id ="Generate">How to do it yourself</h3>
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
      <h3 class="w3-text-teal"id ="Assignment1">Exercise</h3>
      <p>
        Now that you have learned how to generate test data from a website, it is time to use it to generate data. This data will later be used to populate a database in Project Bugs.  <br><br>

        The exercise is as follows:<br><br>

        Generate Test Data by using the following website: <a href = "http://mockaroo.com/" target="_blank" >https://mockaroo.com/.</a><br>
      <br>
      Try to generate Test Data which includes:
      <br> - Firstname 
      <br> - Lastname
      <br> - Email
      <br> - Gender
      <br> - Phonenumber
      <br> - Password. <br>
      <br> Generate 500 rows, and save it in Excel-format. Save the Excel document for later use in the Populate Test Data exercise.
      </p>
    </div>

        <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h3 class="w3-text-teal"id ="help">Help!</h3>
      <p>
        Contact John Robert Ursin Bakk if you require help.<br>
        tlf: 98626683<br>
        Mail: john-robert.bakk@sogeti.no
      </p><br>
          <p><a href="#top">Go back to the top</a></p>
    </div>
    <!-- END MAIN -->
</div>


</body>
</html>
