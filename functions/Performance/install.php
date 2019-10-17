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
<div class="g-grid">                        

        <div class="g-block size-100">
             <div class="g-content">
 <div class="platform-content row-fluid"><div class="span12"><div class="item-page" itemscope="" itemtype="https://schema.org/Article">
	<meta itemprop="inLanguage" content="en-GB">
		
			<div class="page-header">
					<h1 itemprop="headline">How to Download &amp; Install Apache JMeter in easy steps</h1>
									</div>
					
				<dl class="article-info muted">

		
			<dt class="article-info-term">Details</dt>

			
			
			
			
			
		
					
										<dd class="modified">
				<span class="icon-calendar" aria-hidden="true"></span>
				<time datetime="2019-04-29T21:30:01+05:30" itemprop="dateModified">
					Last Updated: 29 April 2019				</time>
			</dd>			
						</dl>
	
	
				
						<div itemprop="articleBody">
		<div><!-- Async AdSlot 3 for Ad unit 'guru99.com_300x250' ### Size: [[300,250],[336,280]] -->
<!-- Adslot's refresh function: googletag.pubads().refresh([gptadslots[2]]) -->
<div id="div-gpt-ad-9092914-3" style="float:left;padding-right:6px;" data-google-query-id="CIuu8YfP4-ICFSRlFQgdmkIKFw">
  
<div id="google_ads_iframe_/24132379/guru99.com_300x250_0__container__" style="border: 0pt none; display: inline-block; width: 300px; height: 250px;"><iframe style="border: 0px none; vertical-align: bottom;" src="https://tpc.googlesyndication.com/safeframe/1-0-33/html/container.html" id="google_ads_iframe_/24132379/guru99.com_300x250_0" title="3rd party ad content" name="" scrolling="no" marginwidth="0" marginheight="0" data-is-safeframe="true" data-google-container-id="1" data-load-complete="true" width="300" height="250" frameborder="0"></iframe></div></div>
<!-- End AdSlot 3 --></div><h2>Operating system Support for JMeter</h2>
<p>JMeter is a <strong>pure Java</strong> application and should run correctly on any system that has a compatible<a href="/java-tutorial.html"> Java </a>implementation.
</p><p>Here is the list of an operating system compatible with JMeter
</p><ul>
<li>Linux</li>
<li>Windows</li>
<li>Mac OS</li>
<li>Ubuntu</li>
</ul>
<p>In this tutorial, you will learn -
</p><ul>
<li><a href="#1">Steps to Install JMeter</a></li>
<li><a href="#2">Start JMeter in GUI Mode</a></li>
<li><a href="#3">How to run JMeter in Non-GUI mode</a></li>
<ul>
<li><a href="#4">Start JMeter in Server Mode</a></li>
<li><a href="#5">Start JMeter in command line mode</a></li>
</ul>
<li><a href="#6">Additional Packages</a></li>
<li><a href="#7">Use JMeter in Linux</a></li>
</ul>
<h2><a id="1"></a> Steps to Install JMeter</h2>
<h3>Step 1) Install Java</h3>
<p>Because JMeter is pure Java desktop application, it requires a fully compliant JVM 6 or higher. You can download and install the latest version of Java SE Development Kit. <a href="http://www.oracle.com/technetwork/java/javase/downloads/index.html"> Download Java Platform (JDK)</a>
</p><p align="center"><a href="/images/JavaDownload.png" class="jh-image-popup-colorbox cboxElement"><img title="How to install Jmeter in easy steps" src="/images/JavaDownload.png" alt="How to install Jmeter in easy steps"></a>

</p><p>After installation is finished, you can use the following procedure to check whether Java JDK is installed successfully in your system
</p><ul>
<li>In Window/Linux, go to <strong>Terminal</strong></li>
<li>Enter command <strong>java -version</strong></li>
</ul>
<p>If the Java runtime environment is installed successfully, you will see the output as the figure below
</p><p align="center"><a href="/images/Administrator.png" class="jh-image-popup-colorbox cboxElement"><img title="How to install Jmeter in easy steps" src="/images/Administrator.png" alt="How to install Jmeter in easy steps"></a>
</p><p>If nothing displays, please re-install Java SE runtime environment
</p><p>Please see the link for details instructions <a href="https://www.guru99.com/install-java.html">https://www.guru99.com/install-java.html</a>


</p><h3>Step 2) Download Jmeter</h3>
<p>As of this writing, the latest version of JMeter is <strong>Apache JMeter 4.2</strong>. You can download it <a href="http://jmeter.apache.org/download_jmeter.cgi">here</a> But this tutorial demos installation of version 2.9, the install process remains the same.
</p><p>Choose the Binaries file (either zip or tgz) to download as shown in the figure below
</p><p align="center"><a href="/images/ApacheJmeter.png" class="jh-image-popup-colorbox cboxElement"><img title="How to install Jmeter in easy steps" src="/images/ApacheJmeter.png" alt="How to install Jmeter in easy steps"></a>
</p><h3>Step 3) Installation</h3>
<p>Installation of JMeter is extremely easy and simple. You simply unzip the zip/tar file into the directory where you want JMeter to be installed. There is no tedious installation screen to deal with! Simply unzip and you are done!
</p><p>Once the unzipping is done installation directory structure should look like as figure below</p><div><!-- Async AdSlot 1 for Ad unit 'guru99.com_728x90' ### Size: [[728,90],[468,60],[300,250]] -->
<!-- Adslot's refresh function: googletag.pubads().refresh([gptadslots[0]]) -->
<div id="div-gpt-ad-9092914-1" data-google-query-id="CPO7hIjP4-ICFSpbFQgdcccKQg">
  
<div id="google_ads_iframe_/24132379/guru99.com_728x90_0__container__" style="border: 0pt none; display: inline-block; width: 970px; height: 250px;"><iframe style="border: 0px none; vertical-align: bottom;" src="https://tpc.googlesyndication.com/safeframe/1-0-33/html/container.html" id="google_ads_iframe_/24132379/guru99.com_728x90_0" title="3rd party ad content" name="" scrolling="no" marginwidth="0" marginheight="0" data-is-safeframe="true" sandbox="allow-forms allow-pointer-lock allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" data-google-container-id="2" data-load-complete="true" width="970" height="250" frameborder="0"></iframe></div></div>
<!-- End AdSlot 1 --></div>
<p align="center"><a href="/images/ApacheJmeter2_9.png" class="jh-image-popup-colorbox cboxElement"><img title="How to install Jmeter in easy steps" src="/images/ApacheJmeter2_9.png" alt="How to install Jmeter in easy steps"></a>
</p><p>Given below is the description of the JMeter directories and its importance JMeter directory contains many files and directory
</p><ul>
<li>/<strong>bin</strong>: Contains JMeter script file for starting JMeter</li>
<li>/<strong>docs</strong>: JMeter documentation files</li>
<li><strong>/extras</strong>: ant related extra files</li>
<li>/<strong>lib</strong>/: Contains the required Java library for JMeter</li>
<li><strong>/lib/ext</strong>: contains the core jar files for JMeter and the protocols</li>
<li><strong>/lib/junit</strong>:<a href="/junit-tutorial.html"> Junit </a>library used for JMeter</li>
<li>/<strong>printable_docs</strong>:</li>
</ul>
<h3>Step 4) Launch JMeter</h3>
<p>You can start JMeter in 3 modes
</p><ul>
<li>GUI Mode</li>
<li>Server Mode</li>
<li>Command Line Mode</li>
</ul>
<h2><a id="2"></a> Start JMeter in GUI Mode</h2>
<p>If you are using Window, just run the file <strong>/bin/jmeter.bat</strong> to start JMeter in GUI mode as shown below
</p><p style="text-align: center;">&nbsp;<a href="/images/startjmeter.gif" class="jh-image-popup-colorbox cboxElement"><img title="How to install Jmeter in easy steps" src="/images/startjmeter.gif" alt="How to install Jmeter in easy steps"></a>
</p><p>The following figure annotates the various components in the JMeter GUI
</p><p align="center"><a href="/images/ApacheJmeterSnap.png" class="jh-image-popup-colorbox cboxElement"><img title="How to install Jmeter in easy steps" src="/images/ApacheJmeterSnap.png" alt="How to install Jmeter in easy steps"></a>
</p><h2><a id="3"></a>How to run JMeter in Non-GUI Mode</h2>
<h3><a id="4"></a> Start JMeter in Server Mode</h3>
<p>Server mode is used for <strong>distributed</strong> testing. This<a href="/software-testing.html"> Testing </a>works as <strong>a client-server</strong> model. In this model, JMeter runs on a server computer in <strong>server </strong>mode. On a client computer, JMeter runs in <strong>GUI</strong> mode.
</p><p>To start the server mode, you run the bat file bin\<strong>jmeter-server.bat </strong>as below figure
</p><p align="center"><a href="/images/ApacheJmeterServer.png" class="jh-image-popup-colorbox cboxElement"><img title="How to install Jmeter in easy steps" src="/images/ApacheJmeterServer.png" alt="How to install Jmeter in easy steps"></a>
</p><h3><a id="5"></a> Start JMeter in command line mode</h3>
<p>JMeter in GUI mode consumes much computer memory. For saving the resource, you may choose to run JMeter without the GUI. To do so, use the following command options</p><div><!-- Async AdSlot 2 for Ad unit 'guru99.com_728x90' ### Size: [[728,90],[468,60],[300,250]] -->
<!-- Adslot's refresh function: googletag.pubads().refresh([gptadslots[1]]) -->
<div id="div-gpt-ad-9092914-2" data-google-query-id="CP2JlIjP4-ICFUVjFQgdEDcDwQ">
  
<div id="google_ads_iframe_/24132379/guru99.com_728x90_1__container__" style="border: 0pt none; display: inline-block; width: 970px; height: 90px;"><iframe style="border: 0px none; vertical-align: bottom;" src="https://tpc.googlesyndication.com/safeframe/1-0-33/html/container.html" id="google_ads_iframe_/24132379/guru99.com_728x90_1" title="3rd party ad content" name="" scrolling="no" marginwidth="0" marginheight="0" data-is-safeframe="true" sandbox="allow-forms allow-pointer-lock allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" data-google-container-id="3" data-load-complete="true" width="970" height="90" frameborder="0"></iframe></div></div>
<!-- End AdSlot 2 --></div>
<p style="text-align: center;"><a href="/images/ApacheJmeterCommandLine.png" class="jh-image-popup-colorbox cboxElement"><img title="How to install Jmeter in easy steps" src="/images/ApacheJmeterCommandLine.png" alt="How to install Jmeter in easy steps"></a>
</p><p>This is a command line example
</p><pre>$jmeter -n -t testPlan.jmx - l log.jtl -H 127.0.0.1 -P 8000</pre>
<p style="text-align: center;"><a href="/images/jmetercommandline_2_2.gif" class="jh-image-popup-colorbox cboxElement"><img title="How to install Jmeter in easy steps" src="/images/jmetercommandline_2_2.gif" alt="How to install Jmeter in easy steps"></a>
</p><h2><a id="6"></a> Additional Packages</h2>
<p>Based on your requirement, you will need one or more optional packages listed below.
</p><ul>
<li><strong><em>Java Compiler</em></strong></li>
</ul>
<p>Java Compiler allows developers to build JMeter source code and other JMeter plugins
</p><ul>
<li><strong><em>SAX XML parser</em></strong></li>
</ul>
<p><a href="http://www.saxproject.org/">SAX</a> is the Simple API for XML, originally a Java-only API. You can use SAX XML parser as an alternative to XML parser in JMeter
</p><ul>
<li><strong><em>Email Support</em></strong></li>
</ul>
<p>JMeter has extensive Email capabilities. It can send email based on test results and has a POP3(S)/IMAP(S) sampler. It also has an SMTP sampler.
</p><ul>
<li><strong><em>JDBC driver</em></strong></li>
</ul>
<p>If you want to test database server, you have to install JDBC driver
</p><h2><a id="7"></a> Use JMeter in Linux</h2>
<ul>
<li>Using JMeter in<a href="/unix-linux-tutorial.html"> Linux </a>is the same as in Window; you simply run the following <a href="/introduction-to-shell-scripting.html">shell script</a>.</li>
<li>Run the script file <strong>jmeter</strong> (This file has no extension)- run JMeter (in GUI mode by default).</li>
<li>Run the script file <strong>jmeter-server</strong> - start JMeter in server mode (calls JMeter script with appropriate parameters)</li>
<li><strong>jmeter.sh</strong> - very basic JMeter script with no JVM options specified.</li>
<li><strong>mirror-server.sh</strong> - runs the JMeter Mirror Server in non-GUI mode</li>
<li><strong>shutdown.sh</strong> - Run the Shutdown client to stop a non-GUI instance gracefully</li>
<li><strong>stoptest.sh</strong> - Run the Shutdown client to stop a non-GUI instance abruptly</li>
</ul> 
<!-- sh404sef_tag_description T3BlcmF0aW5nIHN5c3RlbSBTdXBwb3J0IGZvciBKTWV0ZXIgSk1ldGVyIGlzIGEgcHVyZSBKYXZhIGFwcGxpY2F0aW9uIGFuZCBzaG91bGQgcnVuIGNvcnJlY3RseSBvbiBhbnkgc3lzdGVtIHRoYXQgaGFzIGEgY29tcGF0aWJsZSBKYXZhIGltcGxlbWVudGF0aW9uLiBIZXJlIGlzIHRoZSBsaXN0IG9mIGFuIG9wZXJhdGluZyBzeXN0ZW0gY29tcGF0aWJsZSB3aXRoIEpNZXRlciBMaW51eCBXaW5kb3dzIE1hYyBPUyBVYnVudHUgSW4gdGhpcy4uLg== /sh404sef_tag_description -->
<p id="slidetag">&nbsp;</p><script> jQuery( document ).ready(function() { jQuery(".jh-image-popup-colorbox").colorbox(); });</script>	</div>

	
	<ul class="pager pagenav">
	<li class="previous">
		<a class="hasTooltip" title="" aria-label="Previous article: What is JMeter? Introduction &amp; Uses" href="/introduction-to-jmeter.html" rel="prev" data-original-title="What is JMeter? Introduction &amp; Uses">
			<span class="icon-chevron-left" aria-hidden="true"></span> <span aria-hidden="true">Prev</span>		</a>
	</li>
<span><a href="javascript:void( window.open( 'https://form.jotform.me/72391811797466', 'blank', 'scrollbars=yes, toolbar=no, width=700, height=700' ) )" onclick="ga('send', 'event', 'ReportBug', 'ReportBug', 'ReportBug');" style="padding:0px;background:#FFF;color:#04b8e6;font-size:15px;" rel="nofollow"><strong>Report a Bug</strong></a></span>			
	<li class="next">
		<a class="hasTooltip" title="" aria-label="Next article: JMeter Elements: Thread Group, Samplers, Listeners, Configuration" href="/jmeter-element-reference.html" rel="next" data-original-title="JMeter Elements: Thread Group, Samplers, Listeners, Configuration">
			<span aria-hidden="true">Next</span> <span class="icon-chevron-right" aria-hidden="true"></span>		</a>
	</li>
</ul>
									</div></div></div>
    
            
    </div>
        </div>
            </div>