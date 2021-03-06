<!DOCTYPE html>
<html lang="en">
<title>JMeter</title>
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

  <a class="w3-bar-item w3-button w3-hover-black" href="http://localhost:8080/projectbugs/functions/performance.php">Back to Performance</a>

  <br>
  <a class="w3-bar-item w3-button w3-hover-black" href="http://localhost:8080/projectbugs/functions/jmeter.php">Introduction</a>

  <a class="w3-bar-item w3-button w3-hover-black" href="http://localhost:8080/projectbugs/functions/guide-to-install-jmeter.php"target="_blank">Download & Install Apache JMeter</a>

   <a class="w3-bar-item w3-button w3-hover-black" href="http://localhost:8080/projectbugs/functions/jmeter-element-reference.php"target="_blank">JMeter Elements</a>
 
  <a class="w3-bar-item w3-button w3-hover-black" href="http://localhost:8080/projectbugs/functions/hands-on-with-jmeter-gui.php">JMeter GUI:</a>
<a class="w3-bar-item w3-button w3-hover-black" href="http://localhost:8080/projectbugs/functions/loadt.php"target="_blank">How to Use JMeter for Performance & Load Testing</a>
<a class="w3-bar-item w3-button w3-hover-black" href="#Timers">Jmeter Timers:</a>Download JMeter

  <a class="w3-bar-item w3-button w3-hover-black" href="http://localhost:8080/projectbugs/functions/performance.php">Back to Performance Test</a>

  <br><a class="w3-bar-item w3-button w3-hover-black" href="#Intro">What is JMeter? Introduction & Uses</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#Download">How to Download & Install Apache JMeter in easy steps</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#Elements">JMeter Elements:</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#GUI">JMeter GUI:</a>
<a class="w3-bar-item w3-button w3-hover-black" href="#Performance">How to Use JMeter for Performance & Load Testing</a>
<a class="w3-bar-item w3-button w3-hover-black" href="#Timers">Jmeter Timers:</a>

<a class="w3-bar-item w3-button w3-hover-black" href="#controllers">Controllers in JMeter:</a>
<a class="w3-bar-item w3-button w3-hover-black" href="#Processor">Processor in JMeter:</a>
  <br></br><a class="w3-bar-item w3-button w3-hover-black" href="http://localhost:8080/projectbugs/index.php"target="_blank">Go to test site</a>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<div class="w3-main" style="margin-left:250px">

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <br></br>
      <h1 class="w3-text-teal"id ="Headline">JMeter</h1>
      <p><font color="red">This page is work in progress!</font>
      </p>
    </div>

    <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h2 class="w3-text-teal"id ="Intro">Introduction</h2>
      <p></p>
        <h3>Introduction to JMeter.. </h3>
      
        The Apache JMeterTM is pure Java open source software, which was first developed by Stefano Mazzocchi of the Apache Software Foundation, designed to load test functional behavior and measure performance. You can use JMeter to analyze and measure the performance of web application or a variety of services. Performance Testing means testing a web application against heavy load, multiple and concurrent user traffic. JMeter originally is used for testing Web Application or FTP application. Nowadays, it is used for a functional test, database server test etc.
<br><br>
        <h3>How does JMeter work?</h3>
        The basic workflow of JMeter as shown in the figures below..<br><br>

JMeter simulates a group of users sending requests to a target server, and return statistics information of target server through graphical diagrams.
<br><img src="http://localhost:8080/projectbugs/images/performance/jm1.jpg" height="80%" width="80%">
<br><br>
 The completed workflow of JMeter as shown in the figure below
<br>
         <br><img src="http://localhost:8080/projectbugs/images/performance/jm2.jpg" height="80%" width="80%">

    </div>

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h2 class="w3-text-teal"id ="#Download">Download JMeter</h2>
      <p></p>
      <h3>How to Download & Install Apache JMeter in easy steps</h3>
As of this writing, the latest version of JMeter is Apache JMeter 4.2. You can download it <a href = "http://jmeter.apache.org/download_jmeter.cgi">here</a>

          </div>

            <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h2 class="w3-text-teal"id ="Elements">JMeter Elements:</h2><p></p>
      <h3>Thread Group, Samplers, Listeners, Configuration</h3>
     The different components of JMeter are called Elements. Each Element is designed for a specific purpose. The figure below gives some common elements in JMeter. 

      <br>
         <br><img src="http://localhost:8080/projectbugs/images/performance/jm3.jpg" height="80%" width="80%"><br><br>

         Studying all the components in one go is an invitation to confusion and boredome. Here, we will discuss the must-know components before you can start Testing in JMeter.

Remaining components will be discussed as when they are used in the succeeding tutorials. The elements discussed in this tutorial are
<ol>
  <li>
Thread Group
<li>Samplers
<li>Listeners
<li>Configuration</li>
</ol>
    </div>
<br>
  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h2 class="w3-text-teal"id ="GUI">JMeter GUI:</h2><p></p>
      


          <div class="page-header"><h4 itemprop="headline"> JMeter GUI: Test Plan &amp; Workbench </h4></div>
             <p>As soon as you launch JMeter, you will see 2 elements </p>
             <ol> <li id="TestPlan">Test Plan</li> 
              <li>Workbench</li> </ol>
<h3 style="text-align: center;">

  <img src="http://localhost:8080/projectbugs/images/performance/ApacheJNeter.jpg" height="20%" width="20%" class="jh-image-popup-colorbox cboxElement">
  </h3>

<h5><a id="1"></a><strong> What is a Test Plan?</strong></h5>
<li>
Test Plan is where you add elements required for your JMeter Test. 
<li>It stores all the elements (like ThreadGroup, Timers etc) and their corresponding settings required to run your desired Tests. </<li>
<p>The following figure shows an example of Test Plan </p>
<h3 style="text-align: center;"><img src="http://localhost:8080/projectbugs/images/performance/TestPlanJmeter.jpg" height="20%" width="20%" 
  class="jh-image-popup-colorbox cboxElement"/h3>



</div></div>
<h5><a id="2"></a><strong> What is WorkBench?</strong></h5>
<p>The WorkBench simply provides a place to store test elements <strong>temporarily</strong>. WorkBench has no relation with Test Plan. JMeter will <strong>not save</strong> the contents of the WorkBench. It only saves the contents of the
<a href="C:\Users\Shannon Myers\Documents\Biology-DNA\teen_time_report.pdf">Test Plan </a>branch ok</p>
 
    
    <!-- END MAIN -->
</div>

</body>
</html>
