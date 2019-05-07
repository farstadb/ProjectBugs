<!DOCTYPE html>
<html lang="en">
<title>Selenium</title>
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
  top: 120px;
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
  <a class="w3-bar-item w3-button w3-hover-black" href="http://localhost:8080/projectbugs/functions/automation.php">Back to Test Automation</a>

  <br></br>
  <a class="w3-bar-item w3-button w3-hover-black" href="http://localhost:8080/projectbugs/functions/seleniumSetup.php">[Setting up Selenium]</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="http://localhost:8080/projectbugs/functions/seleniumScript.php">[Writing Selenium Scripts]</a>
  <br></br><a class="w3-bar-item w3-button w3-hover-black" href="http://localhost:8080/projectbugs/index.php"target="_blank">Go to test site</a>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<div class="w3-main" style="margin-left:250px">

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <br></br>
      <h1 class="w3-text-teal"id ="Headline">Selenium</h1>
      <p>
      </p>
    </div>

    <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h2 class="w3-text-teal"id ="Info">Introduction</h2>
      <p>Selenium is a tool that automates browsers, that is primarily used for testing web applications, with support for several different browsers like Internet Explorer, Chrome and Firefox. Selenium comes in two parts, Selenium IDE and Selenium Webdriver, which can be used separately, or together.

        <br><br>In this tutorial you will learn how to set up Selenium IDE and Webdriver, and how to write and run a Selenium Webdriver test using C#.</p>
    </div>

  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h2 class="w3-text-teal" id ="What">Selenium IDE</h2>
      <p>Selenium IDE is a browser extension for Chrome and Firefox that allows you to easily record and playback browser sessions. Its primary use is in creating quick bug reproduction scripts, and in aiding exploratory testing.
        <br><br>You can install Selenium IDE <a href = "https://www.seleniumhq.org/selenium-ide/"target="_blank">here.</a> </br>
      </p>
    </div>

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h2 class="w3-text-teal"id ="Populate">Selenium Webdriver</h2>
      <p>Selenium Webdriver is a web automation framework that allows you to write test scripts in different programming languages, like C#, Java and Python. Through the use of the Webdriver you are able to create automated test suites that can be used for regression testing.

      </p>
      <h3 class="w3-text-teal"id ="Populate">Prerequisites</h3>
      <p>Before you can start using Selenium Webdriver with C#, you need to set up:
        <br>1. Microsoft Visual Studio and C# (Development environment for which is used to develop computer programs, as well as websites, web apps, web services and mobile apps)
        <br>2. Drivers<br>
      </p>
      <h4 class="w3-text-teal"id ="Populate">Visual Studio and C#</h3>
        <p>This chapter will guide you to how to setup visual Studio and C#.</p>
        <p>Step 1: Download <a href = "https://dotnet.microsoft.com/download"target="_blank">.Net Core SDK</a></p>
        <p>Step 2: Install .Net Core SDK</p>
        <p>Step 3: Download <a href = "https://visualstudio.microsoft.com/"target="_blank">Visual Studio IDE</a></p>
        <p>Step 4: Visual Studio IDE<br>1. Select .Net desktop development.<br>2. Click install.<br>3. After the installation is complete, start the program and log in with your job email.<br>4. Congratulations! The installation is now completed!</p>
      <h4 class="w3-text-teal"id ="Populate">Drivers</h4>
      <p>To use automated tests in Selenium with Internet Explorer, Firefox or Chrome, you need to install three drivers; Internet Explorer Driver Server, Geckodriver and Chromedriver respectively.</p>
       <p>Step 1: Download the <a href = "https://www.seleniumhq.org/download/"target="_blank">Internet Explorer</a>, <a href = "https://github.com/mozilla/geckodriver/releases"target="_blank">Firefox</a> and <a href = "http://chromedriver.chromium.org/downloads"target="_blank">Chrome</a> drivers.</p>
       <p>Step 2: Unzip the downloaded files.</p>
       <p>Step 3: Move IEDriverServer.exe, geckodriver.exe and chromedriver.exe to C:\Windows</p>
       <p>Step 4: Open the Start menu, search for"env" and select "Edit the system environment variables".</p>
       <p>Step 5: Click "Environment Variables".</p>
       <p>Step 6: Select "Path" under System variables and click "Edit...".</p>
       <p>Step 7: Click "New" and add "C:\Windows".</p>
       <p>Step 8: The Drivers and all the prerequisites are now installed!</p>
      <h3 class="w3-text-teal"id ="Populate">Installing Webdriver</h3>
      <h3 class="w3-text-teal"id ="Populate">Running your first automated selenium test</h3>
    </div>

      <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h2 class="w3-text-teal"id ="Populate">Assignment</h2>
      <p>How to .</p>
    </div>
    <!-- END MAIN -->
</div>

</body>
</html>
