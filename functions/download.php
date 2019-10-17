<!DOCTYPE html>
<html lang="en">
<title>download</title>
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
  <a class="w3-bar-item w3-button w3-hover-black" href="http://localhost:8080/projectbugs/functions/automation.php">Back to Automation</a>

  <br><a class="w3-bar-item w3-button w3-hover-black" href="#Intro">What is JMeter? Introduction & Uses</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#Download">How to Download & Install Apache JMeter in easy steps</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#Elements">JMeter Elements:</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#GUI">JMeter GUI:</a>
<a class="w3-bar-item w3-button w3-hover-black" href="http://localhost:8080/projectbugs/functions/loadt.php"target="_blank">How to Use JMeter for Performance & Load Testing</a>
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
      <p>
      </p>
    </div>

    <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h2 class="w3-text-teal"id ="download">How to Use JMeter for Performance & Load Testing</h2>
      <p></p>
      
      Performance Testing is crucial to determine that the web application under test will satisfy high load requirements. It can be used to analyze overall server performance under heavy load.

<p style="text-align: center;"><img style="text-align: center;" title="" img src="../images/performance/PerformanceTesting.png" alt="Performance Testing using Jmeter"></a>&nbsp;
</p>

Apache JMeter testing tool offers following benefit in Performance Testing

JMeter can be used to test the performance of both static resources such as JavaScript and HTML, as well as dynamic resources, such as JSP, Servlets, and AJAX.
JMeter can discover maximum number of concurrent users that your website can handle
JMeter provides a variety of graphical analyses of performance reports.
JMeter Performance Testing includes:

<p align="center"><a href="../images/performance/JMeterPerformanceTest.png" class="jh-image-popup-colorbox cboxElement"><img title="Performance Testing using Jmeter" src="../images/performance/JMeterPerformanceTest.png" alt="Performance Testing using Jmeter"></a>
</p>

<li><strong>Load Testing: </strong></li>Modeling the expected usage by simulating multiple user access the Web services concurrently.
<li><strong>Stress Testing:</strong></li> Every web server has a maximum load capacity. When the load goes beyond the limit, the web server starts responding slowly and produce errors. The purpose of the Stress Testing is to find the maximum load the web server can handle.<br>
<br>The figure below shows how JMeter load Testing simulates the heavy load:<br>
<p align="center"><a href="../images/performance/JMeterApacheSampler.png" class="jh-image-popup-colorbox cboxElement"><img title="Performance Testing using Jmeter" src="../images/performance/JMeterApacheSampler.png" alt="Performance Testing using Jmeter"></a>
</p>
<br><br>

<h2>Create a Performance Test Plan in JMeter</h2>
<p>In this tutorial, we are doing a performance analysis of Google.com for 1000 users
</p>
<p>Before testing the performance of target web application, we should determine-
</p>
<ul>
<li><strong>Normal Load</strong>: Average number of users visit your website</li>
<li><strong>Heavy Load</strong>: The maximum number of users visit your website</li>
<li>What is your <strong>target</strong> in this test?</li>
</ul>
<p>Here is the <strong>roadmap</strong> of this practical example
</p>
<p>Here is the <strong>roadmap</strong> of this practical example
</p>
<p style="text-align: center;"><a href="../images/performance/JMeterTestPlanFlow.png" class="jh-image-popup-colorbox cboxElement"><img title="Performance Testing using Jmeter" src="../images/performance/JMeterTestPlanFlow.png" alt="Performance Testing using Jmeter"></a>
</p>

<h2>Step 1) Add Thread Group</h2>
<ol>
<li>Start <strong>JMeter</strong></li>
<li>Select <strong>Test Plan</strong> on the tree</li>
<li>Add <strong>Thread Group</strong></li>
</ol>
<p>Right click on the "Test Plan" and add a new thread group: <strong>Add&nbsp;</strong>-&gt; <strong>Threads (Users)</strong> -&gt;&nbsp;<strong>Thread Group</strong>
</p>
<p align="center"><a href="../images/performance/JMeterAddThreadGroup.png" class="jh-image-popup-colorbox cboxElement"><img title="Performance Testing using Jmeter" src="../images/performance/JMeterAddThreadGroup.png" alt="Performance Testing using Jmeter"></a>
</p>
<p>In the Thread Group control panel, enter Thread Properties as follows:
</p>
<p align="center"><a href="../images/performance/ThreadGroupJMeterPerformance.png" class="jh-image-popup-colorbox cboxElement"><img title="Performance Testing using Jmeter" src="../images/performance/ThreadGroupJMeterPerformance.png" alt="Performance Testing using Jmeter"></a>
</p>
<ul>
<li><strong>Number of Threads</strong>: 100 (Number of users connects to the target website: 100)</li>
<li><strong>Loop Count</strong>: 10 (Number of time to execute testing)</li>
<li><strong>Ramp-Up Period</strong>: 100</li>
</ul>
<p>The Thread Count and The Loop Counts are <strong>different.</strong>
</p>
<p style="text-align: center;"><a href="../images/performance/ThreadCountVSLoopCount.png" class="jh-image-popup-colorbox cboxElement"><img title="Performance Testing using Jmeter" src="../images/performance/ThreadCountVSLoopCount.png" alt="Performance Testing using Jmeter" width="700"></a>
</p>
<p>Ramp-Up Period tells JMeter how long to <strong>delay</strong> before starting the next user. For example, if we have 100 users and a 100-second Ramp-Up period, then the delay between starting users would be 1 second (100 seconds /100 users)
</p>
<h4 style="text-align: center;"><a href="../images/performance/UserDelayHTTP.png" class="jh-image-popup-colorbox cboxElement"><img title="Performance Testing using Jmeter" src="../images/performance/UserDelayHTTP.png" alt="Performance Testing using Jmeter"></a></h4>
<h2>Step 2) Adding JMeter elements</h2>
<p>Now we determine what JMeter elements in this test. The elements are
</p>
<ul>
<li>
<h3>HTTP request Default</h3>
</li>
</ul>
<p>This element can be added by right-clicking on the Thread Group and selecting: <strong>Add&nbsp;</strong>-&gt;<strong>&nbsp;</strong><strong>Config Element&nbsp;</strong>-&gt;<strong>&nbsp;</strong><strong>HTTP Request Defaults.</strong></p>
<p align="center"><a href="../images/performance/ThreadGroupAddJMeterPerformance.png" class="jh-image-popup-colorbox cboxElement"><img title="Performance Testing using Jmeter" src="../images/performance/ThreadGroupAddJMeterPerformance.png" alt="Performance Testing using Jmeter"></a>
</p>
<p>In the HTTP Request Defaults control panel, enter the Website name under test (<a href="http://www.google.com/">http://www.google.com</a>)
</p>
<p align="center"><a href="../images/performance/HTTPRequestJMeterPerformance.png" class="jh-image-popup-colorbox cboxElement"><img title="Performance Testing using Jmeter" src="../images/performance/HTTPRequestJMeterPerformance.png" alt="Performance Testing using Jmeter" width="650"></a>
</p>
<ul>
<li>
<h3>HTTP Request</h3>
</li>
</ul>
<p>Right-click on Thread Group and select: <strong>Add&nbsp;</strong>-&gt;<strong>&nbsp;</strong><strong>Sampler&nbsp;</strong>-&gt;<strong>&nbsp;</strong><strong>HTTP Request</strong>.
</p>
<p style="text-align: center;"><a href="../images/performance/AddHTTPRequestJmeterPerformance.png" class="jh-image-popup-colorbox cboxElement"><img title="Performance Testing using Jmeter" src="../images/performance/AddHTTPRequestJmeterPerformance.png" alt="Performance Testing using Jmeter"></a>
</p>
<p>In HTTP Request Control Panel, the Path field indicates which <strong>URL request</strong> you want to send to Google server.
</p>
<p align="center"><a href="../images/performance/HTTPRequestControlPanelJMeter.png" class="jh-image-popup-colorbox cboxElement"><img title="Performance Testing using Jmeter" src="../images/performance/HTTPRequestControlPanelJMeter.png" alt="Performance Testing using Jmeter"></a>
</p>
<p>For example, if you enter "<em>calendar</em>" in Path field. JMeter will create the URL request <a href="http://www.google.com/calendar">http://www.google.com/calendar</a> &nbsp;to Google server
</p>
<p align="center"><a href="../images/performance/HTTPRequestCalenderJMeter.png" class="jh-image-popup-colorbox cboxElement"><img title="Performance Testing using Jmeter" src="../images/performance/HTTPRequestCalenderJMeter.png" alt="Performance Testing using Jmeter"></a>
</p>
<p>If you keep the Path field<span style="color: #ff0000;"> blank&nbsp;</span>&nbsp;JMeter will create the URL request <a href="http://www.google.com/">http://www.google.com</a> to Google server.
</p>
<p><strong>In this test, you keep the Path field blank to make JMeter create the URL request </strong><strong><a href="http://www.google.com/">http://www.google.com</a>&nbsp;</strong><strong>to Google server.</strong>
</p>
<h2>Step 3) Adding Graph result</h2>
<p>JMeter can show the test result in Graph format.
</p>
<p>Right click Test Plan, <strong>Add&nbsp;</strong>-&gt;<strong>&nbsp;</strong><strong>Listener&nbsp;</strong>-&gt;<strong>&nbsp;</strong><strong>Graph Results</strong>
</p>
<p align="center"><a href="../images/performance/AddGrapgResultJMeter.png" class="jh-image-popup-colorbox cboxElement"><img title="Performance Testing using Jmeter" src="../images/performance/AddGrapgResultJMeter.png" alt="Performance Testing using Jmeter"></a>
</p>
<h2>Step 4) Run Test and get the test result</h2>
<p>Press <strong>the Run</strong> button (Ctrl + R) on the Toolbar to start the software testing process. You will see the test result display on Graph in the real time.
</p>
<p>The picture below presents a graph of a test plan, where we simulated 100 users who accessed on website <a href="http://www.google.com/">www.google.com</a>.
</p>
<p align="center"><a href="../images/performance/RunTestPlan.gif" class="jh-image-popup-colorbox cboxElement"><img title="Performance Testing using Jmeter" src="../images/performance/RunTestPlan.gif" alt="Performance Testing using Jmeter"></a>
</p>
<p>At the bottom of the picture, there are the following statistics, represented in colors:
</p>
<ul>
<li>Black: The total number of current samples sent.</li>
<li><span style="color: #0000ff;">Blue</span>: The current average of all samples sent.</li>
<li><span style="color: #ff0000;">Red</span>: The current standard deviation.</li>
<li><span style="color: #006400;">Green</span>: Throughput rate that represents the number of requests per minute the server handled</li>
</ul>
<p>Let analyze the performance of Google server in below figure.
</p>
<p align="center"><a href="../images/performance/GraphResultGraphJMeter.png" class="jh-image-popup-colorbox cboxElement"><img title="Performance Testing using Jmeter" src="../images/performance/GraphResultGraphJMeter.png" alt="Performance Testing using Jmeter" width="600"></a>
</p>
<p>To analyze the performance of the web server under test, you should focus on 2 parameters
</p>
<ul>
<li><span style="color: #008000;">Throughput</span></li>
<li><span style="color: #ff0000;">Deviation</span></li>
</ul>
<p>The <strong>Throughput</strong> is the most important parameter. It represents the ability of the server to handle a heavy load.&nbsp; The <strong>higher</strong> the Throughput is, the <strong>better</strong> is the server performance.
</p>
<p>In this test, the throughput of Google server is 1,491.193/minute. It means Google server can handle 1,491.193 requests per minute. This value is quite high so we can conclude that Google server has good performance
</p>
<p>The <strong>deviation</strong> is shown in red - it indicates the deviation from the average. The <strong>smaller</strong> the <strong>better</strong>.
</p>
<p>Let compare the performance of Google server to other web servers. This is the performance test result of website <a href="http://www.yahoo.com/">http://www.yahoo.com/</a> (You can choose other websites)
</p>
<p align="center"><a href="../images/performance/GraphToDisplayJMeter.png" class="jh-image-popup-colorbox cboxElement"><img title="Performance Testing using Jmeter" src="../images/performance/GraphToDisplayJMeter.png" alt="Performance Testing using Jmeter" width="600"></a>
</p>
<p>The throughput of a website under test <a href="http://www.yahoo.com/">http://www.yahoo.com</a> is 867.326/minutes. It means this server handle 867.326 requests per minute, lower than Google.
</p>
<p>The deviation is 2689, much higher than Google (577). So we can determine the performance of this website is less than a Google server.
</p>
<p><strong>NOTE:</strong> The above values depend on several factors like current server load at Google, your internet speed, your CPU power etc. Hence, it's very unlikely that you will get the same results as above. So don't panic!</p>
<h3>Troubleshooting:</h3>
<p>If you face the issue while running the above scenario ... do the following
</p>
<ol>
<li>Check whether you are connecting to the internet via a proxy. If yes, remove the proxy.</li>
<li>Open a new instance of Jmeter</li>
<li>Open the <a href="https://drive.google.com/uc?export=download&amp;id=0B_vqvT0ovzHcTjl1NGdpTUp5Y1E">PerformanceTestPlan.jmx</a> in Jmeter</li>
<li>Double Click on Thread Group -&gt; Graph Result</li>
<li>Run the Test</li>
</ol>

    <!-- END MAIN -->
</div>

</body>
</html>
