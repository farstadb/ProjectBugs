<!DOCTYPE html>
<html lang="en">
<title>Performance Test </title>
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
  <a class="w3-bar-item w3-button w3-hover-black" href="#Info">What is Performance Test</a>

  <br></br>
  <a class="w3-bar-item w3-button w3-hover-black" href="http://localhost:8080/projectbugs/functions/neoload.php">NeoLoad</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="http://localhost:8080/projectbugs/functions/jmeter.php">JMeter</a>
  <br></br><a class="w3-bar-item w3-button w3-hover-black" href="http://localhost:8080/projectbugs/index.php"target="_blank">Go to test site</a>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main" style="margin-left:250px">

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <br></br>
      <h1 class="w3-text-teal"id ="Headline">Performance Test</h1>
      <p>
      </p>
    </div>

    <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h2 class="w3-text-teal"id ="Info">Introduction</h2>
      <p>Performance testing is a non-functional testing technique, which is performed to determine the speed, responsiveness and stability of a computer, network, software program or device under various workload. Performance testing measures the quality attributes of the system, such as scalability, reliability and resource usage.
        <br></br>
      Performance testing can involve quantitative tests done in a lab, or it can occur in the production environment in limited scenarios. Typical parameters include processing speed, data transfer rate, network bandwidth and throughput, workload efficiency and reliability. For example, an organization can measure the response time of a program when a user requests an action or the number of millions of instructions per second (MIPS) at which a mainframe functions.
      <br></br>
      There are two main performance testing methods which often performed, stress testing and load testing. Other performance testing method are Spike Testing and Soak Testing.
          <br><ul>
            <li>Stress testing - it is performed to find the upper limit capacity of the system and to determine how the system performs if the current load goes well above the expected maximum.</li>
            <li>Load testing - It is the simplest form of testing conducted to understand the behaviour of the system under a specific load. Load testing will result in measuring important business critical transactions and load on the database, application server, etc., are also monitored.</li>
          </br></ul>
      Performance testing attributes:<ul>
      <li>Speed</li>
      <li>Scalability</li>
      <li>Stability</li>
      <li>Reliability</li><br>
      </ul>
      

      Performance testing metrics:<br>
      A number of performance metrics, also known as key performance indicators (KPIs) can help an organization evaluate current performance compared to baselines.<br><br>
      Performance metrics commonly include:<br><ul>
      <li>Throughput - how many units of information a system processes over a specified time.</li>
      <li>Memory - the working storage space available to a processor or workload.</li>
      <li>Response time, or latency - the amount of time that elapses between a user-entered request and the start of a system's response to that request.</li>
      <li>Bandwidth - the volume of data per second that can move between workloads, usually across a network.</li>
      <li>CPU interrupts per second - the number of hardware interrupts a process receives per second.</li>
      </ul>

    </div>

  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h2 class="w3-text-teal" id ="What">Why use performance testing?</h2>
      An organization can use performance testing as a diagnostic aid to locate computing or communications bottlenecks within a system. Bottlenecks are a single point or component within a system's overall function that hold back overall performance. For example, even the fastest computer will function poorly on today's web if the bandwidth is less than 1 megabit per second (Mbps). Slow data transfer rates might be inherent in hardware, but can also result from software-related problems, such as too many applications running at the same time or a corrupted file in a web browser.<br><br>
      Performance testing can help identify the nature or location of a software-related performance problem by highlighting where an application might fail or lag.      Performance testing can also verify that a system meets the specifications claimed by its manufacturer or vendor. The process can be used to compare two or more devices or programs.<br><br>
      Performance testing tools:<br>
      <ul>
        <li><a href ="http://jmeter.apache.org" target="_blank"> JMeter </a> </li>
        <li><a href ="https://www.neotys.com/" target="_blank"> NeoLoad </a> </li>
        <li><a href ="https://www.microfocus.com/en-us/products/loadrunner-load-testing/overview" target="_blank"> Load Runner </a> </li>
        <li><a href ="https://www.radview.com/" target="_blank"> Web Load </a> </li>
      </ul>
      </p><br>
          <p><a href="#top">Go back to the top</a></p>
    </div>
 


<!-- END MAIN -->
</div>

</body>
</html>
