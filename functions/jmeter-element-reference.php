<!DOCTYPE html>
<html lang="en">
<title>JMeter Elements</title>
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
  <a class="w3-bar-item w3-button w3-hover-black" href="http://localhost:8080/projectbugs/functions/Performance.php">Back to Performance</a>

  <br><a class="w3-bar-item w3-button w3-hover-black" href="#Intro">JMeter Introduction & Uses</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="http://localhost:8080/projectbugs/functions/guide-to-install-jmeter.php">Download & Install Apache JMeter</a>

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
<div class="g-grid">                        
<br><br><br><br><br><br><br>
        <div class="g-block size-100">
             <div class="g-content">
 <div class="platform-content row-fluid"><div class="span12">
 	<div class="item-page" itemscope="" itemtype="https://schema.org/Article">
	<meta itemprop="inLanguage" content="en-GB">
		
<div class="item-page" itemscope="" itemtype="https://schema.org/Article">
	<meta itemprop="inLanguage" content="en-GB">
	
		
			<div class="page-header">
					<h1 itemprop="headline">
				JMeter Elements: Thread Group, Samplers, Listeners, Configuration			</h1>
									</div>
					
				<dl class="article-info muted">

		
			<dt class="article-info-term">
									Details							</dt>

			
			
			
			
			
		
					
										<dd class="modified">
				<span class="icon-calendar" aria-hidden="true"></span>
				<time datetime="2019-06-10T21:30:01+05:30" itemprop="dateModified">
					Last Updated: 10 June 2019				</time>
			</dd>			
						</dl>
	
	
				
						<div itemprop="articleBody">
		<div><!-- Async AdSlot 3 for Ad unit 'guru99.com_300x250' ### Size: [[300,250],[336,280]] -->
<!-- Adslot's refresh function: googletag.pubads().refresh([gptadslots[2]]) -->
<!-- End AdSlot 3 --></div><h2>What is Element in JMeter?</h2>
<p>The different components of JMeter are called Elements. Each Element is designed for a specific purpose.
</p><p>The figure below gives some common elements in JMeter.
</p><p align="center"><a href="http://localhost:8080/projectbugs/images/performance/Jmeter.png" class="jh-image-popup-colorbox cboxElement"><img title="Complete Element reference for Jmeter" src="http://localhost:8080/projectbugs/images/performance/Jmeter.png" alt="Complete Element reference for Jmeter"></a>
</p><p>Studying all the components in one go is an invitation to confusion and boredome. Here, we will discuss the must-know components before you can start<a href="/software-testing.html"> Testing </a>in JMeter.
</p><p>Remaining components will be discussed as when they are used in the succeeding tutorials. The elements discussed in this tutorial are
</p><ul>
<li><a href="#ThreadGroup"> Thread Group</a></li>
<li><a href="#Samplers">Samplers</a></li>
<li><a href="#Listeners">Listeners</a></li>
<li><a href="#Configuration"> Configuration</a></li>
</ul>
<h2 id="ThreadGroup">Thread Group</h2>
<p>Thread Groups is a collection of Threads. Each thread represents one user using the application under test. Basically, each Thread simulates one real user request to the server.
</p><p>The controls for a thread group allow you to Set the number of threads for each group.
</p><p>For example, if you set the number of threads as 100; JMeter will create and simulate 100 user requests to the server under test
</p><p align="center"><a href="http://localhost:8080/projectbugs/images/performance/ThreadGroup.png" class="jh-image-popup-colorbox cboxElement"><img title="Complete Element reference for Jmeter" src="http://localhost:8080/projectbugs/images/performance/ThreadGroup.png" alt="Complete Element reference for Jmeter"></a>
</p><p>&nbsp;
</p><h2 id="Samplers">Samplers</h2>
<p>As we know already that JMeter supports testing HTTP, FTP, JDBC and many other protocols.
</p><p>We already know that Thread Groups simulate user request to the server
</p><p>But how does a Thread Group know which type of requests (HTTP, FTP etc.) it needs to make?
</p><p>The answer is Samplers
</p><p>The user request could be FTP Request, HTTP Request, JDBC Request...Etc.
</p><p align="center"><a href="http://localhost:8080/projectbugs/images/performance/Samplers.png" class="jh-image-popup-colorbox cboxElement"><img title="Complete Element reference for Jmeter" src="http://localhost:8080/projectbugs/images/performance/Samplers.png" alt="Complete Element reference for Jmeter"></a>
</p><h2>FTP request:</h2>
<p>Let imagine you want to performance test an FTP server. You can use an FTP request sampler in JMeter to do this task. This controller lets you send an FTP "download file" or "upload file" request to an FTP server.
</p><p align="center"><a href="http://localhost:8080/projectbugs/images/performance/JmeterFTPServer.png" class="jh-image-popup-colorbox cboxElement"><img title="Complete Element reference for Jmeter" src="http://localhost:8080/projectbugs/images/performance/JmeterFTPServer.png" alt="Complete Element reference for Jmeter"></a>
</p><p>For example, if you want to download a file "Test.txt" from an FTP server under test, you need to configure some parameters in JMeter as the figure below
</p><p align="center"><a href="http://localhost:8080/projectbugs/images/performance/FTPRequest.png" class="jh-image-popup-colorbox cboxElement"><img title="Complete Element reference for Jmeter" src="http://localhost:8080/projectbugs/images/performance/FTPRequest.png" alt="Complete Element reference for Jmeter"></a></p><div>
<p>JMeter will send FTP command to FTP server <a href="ftp://ftp.example.com/">ftp.example.com</a>, and then download a file Test.txt from that server.
</p><h2>HTTP request:</h2>
<p>This sampler lets you send an HTTP/HTTPS request to a web server.
</p><p>Consider the example below. JMeter sends an HTTP request to Google website and retrieve HTML files or image from this website.
</p><p align="center"><a href="http://localhost:8080/projectbugs/images/performance/HTTPRequest.png" class="jh-image-popup-colorbox cboxElement"><img title="Complete Element reference for Jmeter" src="http://localhost:8080/projectbugs/images/performance/HTTPRequest.png" alt="Complete Element reference for Jmeter"></a>
</p><p>In the tutorial <a href="/jmeter-performance-testing.html">JMeter Performance Testing</a>, we will explain more about this HTTP request.
</p><h2>JDBC request:</h2>
<p>This sampler lets you execute Database <a href="/performance-testing.html">Performance Testing</a>. It sends a JDBC Request (an SQL query) to a database.
</p><p align="center"><a href="http://localhost:8080/projectbugs/images/performance/JDBCRequest.png" class="jh-image-popup-colorbox cboxElement"><img title="Complete Element reference for Jmeter" src="http://localhost:8080/projectbugs/images/performance/JDBCRequest.png" alt="Complete Element reference for Jmeter"></a>
</p><p>For example, a database server has a field test_result stored in a table name test_tbl. You want to query this data from the database server; you can configure JMeter to send a<a href="/sql.html"> SQL </a>query to this server to retrieve data.
</p><p align="center"><a href="http://localhost:8080/projectbugs/images/performance/JDBCRequestFormat.png" class="jh-image-popup-colorbox cboxElement"><img title="Complete Element reference for Jmeter" src="http://localhost:8080/projectbugs/images/performance/JDBCRequestFormat.png" alt="Complete Element reference for Jmeter"></a>
</p><h2>BSF Sampler:</h2>
<p>This sampler allows you to write a sampler using a <a href="http://en.wikipedia.org/wiki/Bean_Scripting_Framework">BSF</a> scripting language.
</p><p>Here is an example of BSF&nbsp; Sampler in JMeter
</p><p align="center"><a href="http://localhost:8080/projectbugs/images/performance/BFSSampler.png" class="jh-image-popup-colorbox cboxElement"><img title="Complete Element reference for Jmeter" src="http://localhost:8080/projectbugs/images/performance/BFSSampler.png" alt="Complete Element reference for Jmeter"></a>
</p><h2>Access Log Sampler:</h2>
<p>This sampler allows you to read access logs and generate HTTP requests. The log could be image, Html, CSS...
</p><p align="center"><a href="http://localhost:8080/projectbugs/images/performance/AccessLogSampler.png" class="jh-image-popup-colorbox cboxElement"><img title="Complete Element reference for Jmeter" src="http://localhost:8080/projectbugs/images/performance/AccessLogSampler.png" alt="Complete Element reference for Jmeter"></a>
</p><h2>SMTP Sampler:</h2>
<p>If you want to test a mail server, you can use SMTP sampler. This sampler is used to send email messages using the SMTP protocol.
</p><p align="center"><a href="http://localhost:8080/projectbugs/images/performance/SMTPSampler.png" class="jh-image-popup-colorbox cboxElement"><img title="Complete Element reference for Jmeter" src="http://localhost:8080/projectbugs/images/performance/SMTPSampler.png" alt="Complete Element reference for Jmeter"></a>
</p><h2 id="Listeners">Listeners</h2>
<p>Listeners: shows the results of the test execution. They can show results in a different format such as a tree, table, graph or log file
</p><p align="center"><a href="http://localhost:8080/projectbugs/images/performance/Listners.png" class="jh-image-popup-colorbox cboxElement"><img title="Complete Element reference for Jmeter" src="http://localhost:8080/projectbugs/images/performance/Listners.png" alt="Complete Element reference for Jmeter"></a>
</p><p>Graph result listeners display the server response times on a Graph</p><div>

<p align="center"><a href="http://localhost:8080/projectbugs/images/performance/Graph.png" class="jh-image-popup-colorbox cboxElement"><img title="Complete Element reference for Jmeter" src="http://localhost:8080/projectbugs/images/performance/Graph.png" alt="Complete Element reference for Jmeter"></a>
</p><p>View Result Tree show results of the user request in basic HTML format
</p><p align="center"><a href="http://localhost:8080/projectbugs/images/performance/Tree.png" class="jh-image-popup-colorbox cboxElement"><img title="Complete Element reference for Jmeter" src="http://localhost:8080/projectbugs/images/performance/Tree.png" alt="Complete Element reference for Jmeter"></a>
</p><p>Table Result show summary of a test result in table format
</p><p align="center"><a href="http://localhost:8080/projectbugs/images/performance/ViewTable.png" class="jh-image-popup-colorbox cboxElement"><img title="Complete Element reference for Jmeter" src="http://localhost:8080/projectbugs/images/performance/ViewTable.png" alt="Complete Element reference for Jmeter"></a>
</p><p>Log show summary of a test results in the text file
</p><p align="center"><a href="http://localhost:8080/projectbugs/images/performance/LogSummary.png" class="jh-image-popup-colorbox cboxElement"><img title="Complete Element reference for Jmeter" src="http://localhost:8080/projectbugs/images/performance/LogSummary.png" alt="Complete Element reference for Jmeter"></a>
</p><p>&nbsp;
</p><h2 id="Configuration">Configuration Elements</h2>
<p>set up defaults and variables for later use by samplers.
</p><p>The figure below shows some commonly used configuration elements in JMeter
</p><p align="center"><a href="http://localhost:8080/projectbugs/images/performance/ConfigurationElements.png" class="jh-image-popup-colorbox cboxElement"><img title="Complete Element reference for Jmeter" src="http://localhost:8080/projectbugs/images/performance/ConfigurationElements.png" alt="Complete Element reference for Jmeter"></a>
</p><h2>CSV Data Set Config:</h2>
<p>Suppose you want to test a website for 100 users signing-in with different credentials. You do not need to record the script 100 times! You can parameterization the script to enter different login credentials. This login information (e.g. Username, password) could be stored in a text file. JMeter has an element that allows you to read different parameters from that text file. It is "CSV Data Set Config", which is used to read lines from a file, and split them into variables.
</p><p align="center"><a href="http://localhost:8080/projectbugs/images/performance/TestPlan.png" class="jh-image-popup-colorbox cboxElement"><img title="Complete Element reference for Jmeter" src="http://localhost:8080/projectbugs/images/performance/TestPlan.png" alt="Complete Element reference for Jmeter"></a>
</p><p>This is an example of CSV Data. It's a text file which contains user and password to login your target website
</p><p align="center"><a href="http://localhost:8080/projectbugs/images/performance/CSVData(2).png" class="jh-image-popup-colorbox cboxElement"><img title="Complete Element reference for Jmeter" src="http://localhost:8080/projectbugs/images/performance/CSVData(2).png" alt="Complete Element reference for Jmeter"></a>
</p><h2>HTTP Cookie Manager</h2>
<p>Let's understand this with an example -
</p><p>You used your browser (Firefox, IE...Etc) to browse <a href="http://www.google.com/">www.google.com</a>
</p><p>You log in with your user and password.
</p><p>Your username and password will be stored in your computer as cookies.</p>

<p>Next time, when you visit <a href="http://www.google.com/">www.google.com</a>, you don't need to do log in again because your browser will use your cookies as user data to log in.
</p><p>HTTP Cookie Manager also has the same feature as a web browser. If you have an HTTP Request and the response contains a cookie, the Cookie Manager automatically stores that cookie and will use it for all future requests to that particular website.
</p><h3>HTTP request default</h3>
<p>This element lets you set default values that your HTTP Request controllers use.
</p><p>For example,
</p><p>You are sending 100 HTTP requests to the server google.com
</p><p>You would have to manually enter server name = google.com for all these 100 requests
</p><p>Instead, you could add a single HTTP request defaults with the "Server Name or IP" field = google.com
</p><p>No need to type 100 times!
</p><p align="center"><a href="http://localhost:8080/projectbugs/images/performance/HTTPRequestDetail.png" class="jh-image-popup-colorbox cboxElement"><img title="Complete Element reference for Jmeter" src="http://localhost:8080/projectbugs/images/performance/HTTPRequestDetail.png" alt="Complete Element reference for Jmeter" width="700"></a>
</p><p>This element will be explained in detail in tutorial <a href="/jmeter-performance-testing.html">JMeter Performance Testing</a>
</p><h3>Login Config Element</h3>
<p>The Login Config Element lets you add or override username and password settings in samplers.
</p><p>For example, you want to simulate one user login to website <a href="http://www.facebook.com/">www.facebook.com</a> with user and password. You can use the Login Config Element to add this user and password setting in a user request
</p><p align="center"><a href="http://localhost:8080/projectbugs/images/performance/LoginConfigElement.png" class="jh-image-popup-colorbox cboxElement"><img title="Complete Element reference for Jmeter" src="http://localhost:8080/projectbugs/images/performance/LoginConfigElement.png" alt="Complete Element reference for Jmeter"></a>
</p><p>The Login Config Element vs. the CSV data Config
</p><table class="table table-striped" cellspacing="0" cellpadding="0" border="1" align="center">
<tbody>
<tr>
<th width="50%">
<p align="center">Login Config Element
</p></th>
<th>
<p align="center">CSV Data Config
</p></th>
</tr>
<tr>
<td>
<p>Used to simulate one user login
</p></td>
<td>
<p>Used to simulate multiple user login
</p></td>
</tr>
<tr>
<td>
<p>Suitable for login parameter only (user and password)
</p></td>
<td>
<p>Suitable for large numbers of parameters
</p></td>
</tr>
</tbody>
</table>
<p>&nbsp; 
</p><p id="slidetag">&nbsp;</p><script> jQuery( document ).ready(function() { jQuery(".jh-image-popup-colorbox").colorbox(); });</script>	</div>

	
	<ul class="pager pagenav">
	<li class="previous">
		<a class="hasTooltip" title="" aria-label="Previous article: How to Download &amp; Install Apache JMeter in easy steps" href="http://localhost:8080/projectbugs/functions/guide-to-install-jmeter.php" rel="prev" data-original-title="How to Download &amp; Install Apache JMeter in easy steps">
			<span class="icon-chevron-left" aria-hidden="true"></span> <span aria-hidden="true">Prev</span>		</a>
	</li>
	
	<li class="next">
		<a class="hasTooltip" title="" aria-label="Next article: JMeter GUI: Test Plan &amp; Workbench" href="http://localhost:8080/projectbugs/functions/hands-on-with-jmeter-gui.html" rel="next" data-original-title="JMeter GUI: Test Plan &amp; Workbench">
			<span aria-hidden="true">Next</span> <span class="icon-chevron-right" aria-hidden="true"></span>		</a>
	</li>
</ul>
									</div>
										</div></div></div>
    
            
    </div>
        </div>
            </div>