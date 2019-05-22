<!DOCTYPE html>
<html lang="en">
<title>NeoLoad</title>
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

  <a class="w3-bar-item w3-button w3-hover-black" href="http://localhost:8080/projectbugs/functions/performance.php">Back to Performance Test</a>

  <br><a class="w3-bar-item w3-button w3-hover-black" href="#Intro">Introduction</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#IDE">Basic Neolaod Load Testing Terminologies</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#Webdriver">Neoload testing process</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#Prerequisite">Softsmith Neoload Testing Services</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#Visual">Visual Studio and C#</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#Driver">Drivers</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#InstallWeb">Installing WebDriver</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#RunningTest">Running your first automated selenium test</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#Assignment">Assignment</a>


  <br></br><a class="w3-bar-item w3-button w3-hover-black" href="http://localhost:8080/projectbugs/index.php"target="_blank">Go to test site</a><br><br>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<div class="w3-main" style="margin-left:250px">

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <br></br>
      <h1 class="w3-text-teal"id ="Headline">NeoLoad</h1>
      <p>
      </p>
    </div>

    <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h2 class="w3-text-teal"id ="Intro">Introduction</h2>
      <p>Neoload is a low-priced high-efficiency load and stress testing tool that is used to measure the performance of web and mobile applications.
        <br><br>Neoload simulates traffic through virtual users to determine the application performance under load and analyze the transaction response times and pinpoint the number of the simultaneous users which the internet, intranet or the mobile application can handle.</p>
    </div>

  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h4 class="w3-text-teal" id ="IDE">Basic Neolaod Load Testing Terminologies</h4>Basic Neolaod Load Testing Terminologies
      <p><li>Vuser Script : </li>The script which mimics a single user activity on the application. This is done by capturing the Http traffic between browser and server.
<li>Container : </li>A group of Http requests that represents a single user action.
<li>Population : </li>This defines the number of users.
<li>Scenario: </li>This shows the number of users, run pattern and various other run time settings to mimic the real world load test.
<a href = "https://www.neotys.com/"target="_blank">here.</a> </br>
      </p>
    </div>

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h4 class="w3-text-teal"id ="Webdriver">Neoload testing process</h4>
      <p><li>Create a script that mimics a single user activity on the applications.</li>
<li>Enhance the script by using pass by values, variables and assertions.</li>
<li>Validate the vuser script.</li>
<li>Set the population and define a scenario.</li>
<li>Create monitors to monitor the server parameters.</li>
<li>Run the load test</li>
<li>Analyze the results.</li>


      </p>
      <h4 class="w3-text-teal"id ="Prerequisite">Softsmith Neoload Testing Services</h4>
      <p><li>Softsmith has a 1000 vuser license. This means we can test the application upto 1000 concurrent users.
<li>If you wish to avail our service, you can provide the basic details of you application and application url.
<li>They conduct and free 100 user test for one hour and provide you the report.
<li>If you are satisfies and wish to avail our service we provide a time and money estimation.
<li>For further details please contact our sales team at sales@softsmith.com.</li>

      </p>
      <h4 class="w3-text-teal"id ="Visual">Quick Start ………</h4>
        <p>
          Our Test will undergo following phases:
      
        <br><br>Step 1: Recording the Test Scenario.
         <br>Step 2: Running the test. 
        <br>Step 3: Test Results.
      </p>
      <h4 class="w3-text-teal"id ="Driver">Recording the Test Scenario</h4>
      <p>1. Starting the recording:
         Click on the "Start recording" button on the controller to start recording the scenario.
         <br><img src="../images/performance/neo1.jpg" height="40%" width="40%">
         <br><br>2. Browser settings:


<li>NeoLoad will capture pages and record them into a virtual user profile. Choose the name of the profile to record, then select "Adobe RTMP" if your application is using the RTMP protocol. 
<li>By default, NeoLoad records only HTTP traffic.
<li>Next, specify which web browser is to be used for the recording and whether the browser's cache and cookies should be cleared before recording.</li>
<br><img src="../images/performance/neo2.jpg" height="40%" width="40%">

<br><br>3. Entering the URL to be recorded:
<li>The browser displays the NeoLoad recording page, indicating that the browser settings are correct.
<li>The browser is now ready to record the scenario. Enter the URL of the site to be tested and browse as normal.</li>
         <br><img src="../images/performance/neo3.jpg" height="40%" width="40%">

         <br><br>4. Grouping recorded pages by business transaction:
<li>At any time during the recording, you may create named containers in which to group the visited pages. 
<li>These containers represent the business transactions within your scenario.</li>
<br><img src="../images/performance/neo4.jpg" height="40%" width="40%">

<br><br>5. Stopping the recording:
<li>Close the browser to stop recording. You may also click on the controller's "Stop recording“ button.</li>
      <br><img src="../images/performance/neo5.jpg" height="40%" width="40%">

<br><br>6. Creating your first virtual user:
<li>Once the recording is finished, a pop-up wizard is displayed.
<li>Follow the steps through the wizard.
.</li>
      <br><img src="../images/performance/neo6.jpg" height="40%" width="40%">
<br>
<br><li>On the "Virtual Users" tab, you may configure the think time for the user. 
<li>The think time is a simulation of the time spent by the user on the previous page before accessing the current page.
<li>This delay may be for each page individually, for all pages globally or variable within a given range.

</li>
      <br><img src="../images/performance/neo6b.jpg" height="40%" width="40%">

<br><br>7. Checking the validity of the virtual user:

<li>Complex scenarios may require advanced settings. A failure to implement these settings will result in errors and an unexpected behavior for the virtual user. 
<li>For example, the virtual user will not create entries in the database.
<li>Check the validity of the virtual user via the "Run / Start checking" menu item.
</li>
<br><img src="../images/performance/neo7.jpg" height="40%" width="40%">

<li>The "Check Virtual User" dialog displays the HTTP request and the HTTP response of  each NeoLoad request.</li>
<br><img src="../images/performance/neo7b.jpg" height="40%" width="40%">

<br><br><li>NeoLoad automatically flags in error any responses whose HTTP response code is an error code,
<li>for example "500 Internal Error". Nevertheless, many applications return error messages within a valid "200 OK" response. In these cases, NeoLoad does not automatically detect the error.
<li>If the virtual user does not behave as expected, check the responses to see if they contain an error message or an unexpected content.
<li>Failure to handle a dynamic parameter will cause an error. Generally, it means that you may need to extract and inject some data. </li>

<br><br>8. Creating a population:

<li>Click on the "Populations" tab. A pop-up wizard prompts you to create a population for the test.
<li>A population is a group of virtual users. In this example, the population only contains the previously recorded virtual user.</li>
<br><img src="../images/performance/neo8.jpg" height="40%" width="40%">
       
<h3 class="w3-text-teal"id ="Prerequisite">Running the Test</h3>
<h5 class="w3-text-teal"id ="Prerequisite">1. The Scenarios tab</h5>


      <p><li>Click on the "Runtime" button, then on the "Scenarios" tab.</p>
<li>Configure the settings such as test duration, load policy (constant, ramp-up, peaks, custom) and the number of virtual users.
</li>
<br><img src="../images/performance/neo9.jpg" height="40%" width="40%">
<br><br>
<li>Run the test by clicking on "Run" top menu, and then click on the "Start playing" button.</li>
<br><img src="../images/performance/neo10.jpg" height="40%" width="40%">
<br>

<h5 class="w3-text-teal"id ="Prerequisite">2. The Runtime Overview tab</h5>

<li>This panel monitors the test sequence. It provides immediate statistics such as hits/sec., average response time and errors.
<li>The test may be stopped at any time by clicking on the "Stop" button.</li>
<br><img src="../images/performance/neo11.jpg" height="40%" width="40%">



       <br><br>Step 1: Download the <a href = "https://www.seleniumhq.org/download/"target="_blank">Internet Explorer</a>, <a href = "https://github.com/mozilla/geckodriver/releases"target="_blank">Firefox</a> and <a href = "http://chromedriver.chromium.org/downloads"target="_blank">Chrome</a> drivers.
       
       <br><br>Step 2: Unzip the downloaded files.
       
       <br><br>Step 3: Move IEDriverServer.exe, geckodriver.exe and chromedriver.exe to C:\Windows
       
       <br><br>Step 4: Open the Start menu, search for"env" and select "Edit the system environment variables".
       
       <br><br>Step 5: Click "Environment Variables".
       <br><img src="../images/selenium4.png" height="80%" width="80%">
       
       <br><br>Step 6: Select "Path" under System variables and click "Edit...".
       
       <br><br>Step 7: Click "New" and add "C:\Windows".
       <br><img src="../images/selenium5.png" height="80%" width="80%">
      
       <br><br>Step 8: The Drivers and all the prerequisites are now installed!</p>
      
      <h3 class="w3-text-teal"id ="InstallWeb">Installing WebDriver</h3>
      <p>
        The development environment and the drivers are now installed. Next step is to set up Selenium. It can be done from Visual Studio.

        <br><br>PS! The screenshots are from a dark theme, standard theme may have othe background color than black.

        <br><br>Step 1: Create a new project
        
        <br><br>1. Start visual studio
        <br>2. Select File -> New -> Project...
        <br><img src="../images/selenium6.png" height="80%" width="80%">
        <br>3. Select «Class Library (.Net Framework)» -> OK
        <br><img src="../images/selenium7.png" height="80%" width="80%">
        <br>4. You have now created a new project, called ClassLibrary1
        <br><img src="../images/selenium8.png" height="50%" width="50%">

        <br><br>Step 2: Add Selenium Webdriver and NUnit with NuGet Manager
        <br>PS! This need to be done for every new project

        <br><br>1. Select Tools -> NuGet Package Manager à Manage Nuget Packages for Solution…
        <br><img src="../images/selenium9.png" height="80%" width="80%">
        <br>2. Click Browse, search for «NUnit», and install 
        <br><img src="../images/selenium10.png" height="80%" width="80%">
        <br>3. Search for «NUnitTest», and install «NUnit3TestAdapter»
        <br>4. Search for «Selenium» and install «Selenium.Webdriver»
        <br>5. Add following libraries in the code
        <br><img src="../images/selenium11.png" height="50%" width="50%">

        <br><br>Step 3: Go to Test Explorer window

        <br><br>1. Test Explorer window is used to run the tests
        <br>2. Navigate to: Test -> Windows -> Test Exporer or use shortcut: Ctrl+E, T
        <br>3. You will see a Text Explorer window on left side:
        <br><img src="../images/selenium12.png" height="30%" width="30%">
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
            <font color="red"><br>driver.FindElement(By.Name("q")).SendKeys("Ant");
            <br>driver.FindElement(By.Name("q")).SendKeys(Keys.Enter);</font>
            <br>}
                    </th> 
        <tr>
           </table>

           <br><br>Now, the test will navigate to Google, write the search word (maur) and search for it. You can also add test criteria.

           <br><br>To test if the logo on the site is there, you can try the following code:

                   <table style="width:100%">
          <tr>
            <th>
            [Test]
            <br>public void test()
            <br>{
            <br>driver.Url = "http://www.google.no/";
            <br>driver.FindElement(By.Name("q")).SendKeys("Ant");
            <br>driver.FindElement(By.Name("q")).SendKeys(Keys.Enter);
             <font color="red"><br>bool logo = driver.FindElement(By.XPath("//img")).Displayed;
            <br>Assert.IsTrue(logo);</font>
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
      <p>

        Write two selenium tests.<br><br>

        The first test performs the following tasks:<br><br>
        · Navigates to the <a href = "http://localhost:8080/projectbugs/index.php">Project Bugs Webpage.</a><br>
        · Searches for the following bugs in subsequent order: Maur, Bille, Flue.<br>
        · Verifies that the bugs that were searched for appears as a result.<br><br>
        <img src="../images/Selenium15.png" height="80%" width="80%"><br><br>

        The second test performs the following tasks:<br><br>
        · Navigates to the <a href = "http://localhost:8080/projectbugs/index.php">Project Bugs Webpage</a>, before pressing the "Opprett bruker" button, which navigates the test to the <a href = "http://localhost:8080/projectbugs/functions/nyBrukerForm.php">user registration page.</a> <br>
        · Fills in the Fornavn, Etternavn, Mail-adresse and Passord fields.<br>
        <img src="../images/Selenium13.png" height="40%" width="40%"><br>
        · Presses the submit button.<br>
        · Verifies that the "Records added successfully" text appears afterwards.<br>
        <img src="../images/Selenium14.png" height="40%" width="40%"><br><br>

        Run the two tests.<br><br>

        Once these two tests are completed and run, you have succesfully completed the assignment. 

      </p><br>
          <p><a href="#top">Go back to the top</a></p>
    </div>
    <!-- END MAIN -->
</div>

</body>
</html>
