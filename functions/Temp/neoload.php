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
      <h1 class="w3-text-teal"id ="Headline">Performance Test</h1>
      <p>
      </p>
    </div>

    <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h2 class="w3-text-teal"id ="Info">Introduction</h2>
      <p>We take care of ourselves with our Performance Testing service the performance of your future system. Our experienced
test professionals map the performance requirements and risks together with you. These serve as the basis for the
correct performance test, show which load we have to simulate and how to set up the test environment.<br><br>
After scripting the required use cases in the test tool we perform the test. Sogeti assesses the test results
and explains the findings, potential performance bottlenecks and recommendations in the final report. Because we
use a standard approach based on TMap NEXT®, you are sure of an efficient running of it trajectory.<br><br>
<h3>First step:</h3> We prepare a performance test plan for a fixed price that provides insight into the exact demand, the
infrastructure, framework conditions, lead time and costs of step two.
<h3>Second step:</h3>The actual implementation of the testing and reporting on the results.
If you choose to potentially reduce your configuration, we will perform the tests several times.
We take the performance test tool with us during the test period. You only pay for use (pay-peruse). Compared to purchasing a commercial license you only pay 10 to 20%. By deploying This service keeps you the costs of running a performance test manageable.
   
    </div>

  <div class="w3-row">
    <div class="w3-twothird w3-container"><br><br>
      <h2 class="w3-text-teal" id ="What">What is Performance Test</h2>
      Performance Testing is defined as a type of software testing to ensure software applications will perform well under their expected workload. 

Features and Functionality supported by a software system is not the only concern.<br><br> A software application's performance like its 
(<em>response time, reliability, resource usage and scalability do matter.</em>)
 The goal of Performance Testing is not to find bugs but to eliminate performance bottlenecks. <br><br>The focus of Performance Testing is checking a software program's: </p>
<ul>
  <li>Speed - Determines whether the application responds quickly</li>
  <li>Scalability - Determines maximum user load the software application can handle.</li>
  <li>Stability - Determines if the application is stable under varying loads</li>
</ul>
      </p><br>
          <p><a href="#top">Go back to the top</a></p>
    </div>
 


<!-- END MAIN -->
</div>

</body>
</html>
