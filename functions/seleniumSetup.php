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
table, th, td {
  border: 1px solid black;
  text-align: left;
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

  <br><a class="w3-bar-item w3-button w3-hover-black" href="#Intro">Introduction</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#IDE">Selenium IDE</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#Webdriver">Selenium WebDriver</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#Prerequisite">Prerequisites</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#Visual">Visual Studio and C#</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#Driver">Drivers</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#InstallWeb">Installing WebDriver</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#RunningTest">Running your first automated selenium test</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#Assignment">Assignment</a>


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
      <h2 class="w3-text-teal"id ="Intro">Introduction</h2>
      <p>Selenium is a tool that automates browsers, that is primarily used for testing web applications, with support for several different browsers like Internet Explorer, Chrome and Firefox. Selenium comes in two parts, Selenium IDE and Selenium Webdriver, which can be used separately, or together.

        <br><br>In this tutorial you will learn how to set up Selenium IDE and Webdriver, and how to write and run a Selenium Webdriver test using C#.</p>
    </div>

  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h2 class="w3-text-teal" id ="IDE">Selenium IDE</h2>
      <p>Selenium IDE is a browser extension for Chrome and Firefox that allows you to easily record and playback browser sessions. Its primary use is in creating quick bug reproduction scripts, and in aiding exploratory testing.
        <br><br>You can install Selenium IDE <a href = "https://www.seleniumhq.org/selenium-ide/"target="_blank">here.</a> </br>
      </p>
    </div>

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h2 class="w3-text-teal"id ="Webdriver">Selenium Webdriver</h2>
      <p>Selenium Webdriver is a web automation framework that allows you to write test scripts in different programming languages, like C#, Java and Python. Through the use of the Webdriver you are able to create automated test suites that can be used for regression testing.

      </p>
      <h3 class="w3-text-teal"id ="Prerequisite">Prerequisites</h3>
      <p>Before you can start using Selenium Webdriver with C#, you need to set up:
        <br>· Microsoft Visual Studio and C# (Development environment for which is used to develop computer programs, as well as websites, web apps, web services and mobile apps)
        
        <br>· Drivers<br>
      </p>
      <h4 class="w3-text-teal"id ="Visual">Visual Studio and C#</h4>
        <p>
          This chapter will guide you to how to setup visual Studio and C#.
        
        <br><br>Step 1: Download and install <a href = "https://dotnet.microsoft.com/download"target="_blank">.Net Core SDK</a>
       
        <br><br>Step 2: Download and install <a href = "https://visualstudio.microsoft.com/"target="_blank">Visual Studio IDE</a>
        
        <br><br>Step 3: During the installation, select .Net desktop development.

        <br><br>Step 4: After the installation is complete, start the program and log in with your job email.

        <br><br>Step 5: Congratulations! The installation is now completed!   
      </p>
      <h4 class="w3-text-teal"id ="Driver">Drivers</h4>
      <p>To use automated tests in Selenium with Internet Explorer, Firefox or Chrome, you need to install three drivers; Internet Explorer Driver Server, Geckodriver and Chromedriver respectively.
      
       <br><br>Step 1: Download the <a href = "https://www.seleniumhq.org/download/"target="_blank">Internet Explorer</a>, <a href = "https://github.com/mozilla/geckodriver/releases"target="_blank">Firefox</a> and <a href = "http://chromedriver.chromium.org/downloads"target="_blank">Chrome</a> drivers.
       
       <br><br>Step 2: Unzip the downloaded files.
       
       <br><br>Step 3: Move IEDriverServer.exe, geckodriver.exe and chromedriver.exe to C:\Windows
       
       <br><br>Step 4: Open the Start menu, search for"env" and select "Edit the system environment variables".
       
       <br><br>Step 5: Click "Environment Variables".
       
       <br><br>Step 6: Select "Path" under System variables and click "Edit...".
       
       <br><br>Step 7: Click "New" and add "C:\Windows".
      
       <br><br>Step 8: The Drivers and all the prerequisites are now installed!</p>
      
      <h3 class="w3-text-teal"id ="InstallWeb">Installing WebDriver</h3>
      <p>
        The development environment and the drivers are now installed. Next step is to set up Selenium. It can be done from Visual Studio.

        <br><br>PS! The screenshots are from a dark theme, standard theme may have othe background color than black.

        <br><br>Step 1: Create a new project
        
        <br><br>1. Start visual studio
        <br>2. Select File -> New -> Project...
        <br>3. Select «Class Library (.Net Framework)» -> OK
        <br>4. You have now created a new project, called ClassLibrary1

        <br><br>Step 2: Add Selenium Webdriver and NUnit with NuGet Manager
        <br>PS! This need to be done for every new project

        <br><br>1. Select Tools -> NuGet Package Manager à Manage Nuget Packages for Solution…
        <br>2. Click Browse, search for «NUnit», and install «NUnit»
        <br>3. Search for «NUnitTest», and install «NUnit3TestAdapter»
        <br>4. Search for «Selenium» and install «Selenium.Webdriver»
        <br>5. Add following libraries in the code

        <br><br>Step 3: Go to Test Explorer window

        <br><br>1. Test Explorer window is used to run the tests
        <br>2. Navigate to: Test -> Windows -> Test Exporer or use shortcut: Ctrl+E, T
        <br>3. You will see a Text Explorer window on left side:
        <br>4. You can run the test scripts from this window now

         <br><br>Step 4: Selenium is now ready and you can write your automated tests!
      </p>
      <h3 class="w3-text-teal"id ="RunningTest">Running your first automated selenium test</h3>
      <p>
        As the software and the drivers are installed, and the test window is opened, now you can start writing your tests.

        <br><br>Here is a simple example. Write the following code:
        <table style="width:100%">
          <tr>
            <th>
        class Program
        <br>{
        <br>IWebDriver driver;
        <br><br>[SetUp]
        <br>public void startBrowser()
        <br>{
        <br>driver = new ChromeDriver();
        <br>}
        <br><br>[Test]
        <br>public void test()
        <br>{
        <br>driver.Url = "http://www.google.no/";
        <br>}
        <br><br>[TearDown]
        <br>public void closeBrowser()
        <br>{
        <br>driver.Close();
        <br>}
        <br>} 
        <br>} 
        </th> 
        <tr>
           </table>
        <br><br>After this you will see that your test is shown in the Test Explorer window. Run the test, and following should happen:
        <br><br>- Chrome window opens, navigates to Google and it closes.

        <table style="width:100%">
          <tr>
           <th>[SetUp]</th>
           <th>Setup and starting the test</th> 
          </tr>
          <tr>
            <th>[Test]</th>
            <th>Implements the test. All the test should be written here.</th> 
          </tr>
          <tr>
            <th>[TearDown]</th>
            <th>Closing the test</th> 
            </tr>
            </table>

            <br><br>To search a specific word, try to add the following code:
       
        <table style="width:100%">
          <tr>
            <th>
            [Test]
            <br>public void test()
            <br>{
            <br>driver.Url = "http://www.google.no/";
            <br>driver.FindElement(By.Name("q")).SendKeys("Ant");
            <br>driver.FindElement(By.Name("q")).SendKeys(Keys.Enter);
            <br>}
                    </th> 
        <tr>
           </table>

           <br><br>Now, the test will navigate to Google, write the search word (maur) and search for it. You can also add test criteria.

           <br><br>To test if the logo on the site is there, you can try following code:

                   <table style="width:100%">
          <tr>
            <th>
            [Test]
            <br>public void test()
            <br>{
            <br>driver.Url = "http://www.google.no/";
            <br>driver.FindElement(By.Name("q")).SendKeys("Ant");
            <br>driver.FindElement(By.Name("q")).SendKeys(Keys.Enter);
            <br>bool logo = driver.FindElement(By.XPath("//img")).Displayed;
            <br>Assert.IsTrue(logo);
            <br>}
                    </th> 
        <tr>
           </table>

           <br><br>This test will check if the logo exists on the website. It will fail if the logo is not there. Assert is used to check whether a test is true or not. It will stop testing if the criteria are not met.

                   <table style="width:100%">
          <tr>
           <th>FindElement(By. )</th>
           <th>Finds elements with different keywords as «Name», «ClassName» and «XPath»</th> 
          </tr>
          <tr>
            <th>Assert.IsTrue</th>
            <th>Verifies if something is true, and fails the test if not.</th> 
          </tr>
            </table>

            <br><br>To learn more about how to write tests in Selenium, check the following webpages:
            <br><br><a href = "https://www.toolsqa.com/selenium-webdriver/c-sharp/how-to-write-selenium-test-using-nunit-framework/"target="_blank">ToolsQA</a> and <a href = "https://www.guru99.com/selenium-csharp-tutorial.html"target="_blank">guru99</a>
          
      </p>
    </div>

      <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h2 class="w3-text-teal"id ="Assignment">Assignment</h2>
      <p>How to .</p>
    </div>
    <!-- END MAIN -->
</div>

</body>
</html>
