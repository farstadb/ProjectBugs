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
  <a class="w3-bar-item w3-button w3-hover-black" href="#Prerequisite">Sogeti Neoload Testing Services</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#Quickstart">Quick Start</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#Recording">Recording the Test Scenario</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#Running">Running the Test</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#TestResults">Test Results</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#Communication">Communication methodology</a>
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
      <h4 class="w3-text-teal"id ="Prerequisite">Sogeti Neoload Testing Services</h4>
      <p><li>Sogeti has a 1000 vuser license. This means we can test the application upto 1000 concurrent users.
<li>If you wish to avail our service, you can provide the basic details of you application and application url.
<li>They conduct and free 100 user test for one hour and provide you the report.
<li>If you are satisfies and wish to avail our service we provide a time and money estimation.
<li>For further details please contact our sales team at sales@sogeti.com.</li>

      </p>
      <h4 class="w3-text-teal"id ="Quickstart">Quick Start ………</h4>
        <p>
          Our Test will undergo following phases:
      
        <br><br>Step 1: Recording the Test Scenario.
         <br>Step 2: Running the test. 
        <br>Step 3: Test Results.
      </p>
      <h4 class="w3-text-teal"id ="Recording">Recording the Test Scenario</h4>
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
 


<h3 class="w3-text-teal"id ="Running">Running the Test</h3>
<h5>1. The Scenarios tab</h5>


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



             
      <h3 class="w3-text-teal"id ="TestResults">Test Results</h3>
      <h4>1. The Test Summary tab</h4>
      <li>
        The test summary provides general statistics for the test, including total test duration, throughput, total number of hits, number of errors and average response time, together with important information such as slowest pages, pages with the highest error rates etc.</li>
        <br><img src="../images/performance/neo12.jpg" height="40%" width="40%">
<h4>2. The Values tab</h4>
      <li>This tab allows you to</li>
      <ol>
  <li>Quickly plot all the graph curves for a web page, HTTP request, a monitor or an indicator.
<li>Sort the request and web page statistics.
<li>Use "Filters" to filter the displayed results by load generator, population or virtual user.
<li>Use the "Type" drop-down list to switch between Web Pages, HTTP Requests, Performance counters and Indicators.</li>
</ol>
<br><img src="../images/performance/neo13.jpg" height="40%" width="40%">
<h4>3. The Graphs tab</h4>

<li>The "Graphs" tab can be used to plot a graph curve for any statistic in any request. Simply select
<li>the required statistic among average response time, hits/sec., error rate etc., then drag and drop a Web
<li>Page, a HTTP request or a Performance counter into the graph pane to the right.
<li>You may also plot a curve for a previous test by selecting that test in the Results drop-down list
<li>or compare two tests by selecting "Compare..." .
</li>
<br><img src="../images/performance/neo14.jpg" height="40%" width="40%">

<h4>4. The Errors tab</h4>
<li>This tab displays detailed information on request errors encountered during the test. It itemizes
<li>the requests sent to the server, the server's response and the results of the assertions checking its
v<li>alidity. To help pinpoint the source of the error, you may access the request that precedes the request
<li>containing the error from this tab.
</li>

<br><img src="../images/performance/neo15.jpg" height="40%" width="40%">

        
      <h3 class="w3-text-teal"id ="Communication">Communication methodology</h3>
      <p>
       <li>Neoload uses agent less communication between client and server.
<li>It is based on the Push technology.
<li>Push technology is a type of communication where information is "pushed" by the server to the browser, contrary to the normal "pull" principle whereby the browser initiates the request for information. 
<li>There are several Push methods: polling, long polling or streaming.
</li>
          
      </p>
    

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
