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
  <a class="w3-bar-item w3-button w3-hover-black" href="http://localhost:8080/projectbugs/functions/Performance.php">Back to Performance</a>

  <br><a class="w3-bar-item w3-button w3-hover-black" href="#Intro">JMeter Introduction & Uses</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="http://localhost:8080/projectbugs/functions/Performance/guide-to-install-jmeter.php">Download & Install Apache JMeter</a>

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
 
    
      <div class="page-header">
          <h1 itemprop="headline">
        JMeter GUI: Test Plan &amp; Workbench     </h1>
                  </div>
          
        
            <div itemprop="articleBody">
    <div>
    <!-- Async AdSlot 3 for Ad unit 'guru99.com_300x250' ### Size: [[300,250],[336,280]] -->
<!-- Adslot's refresh function: googletag.pubads().refresh([gptadslots[2]]) -->
<div id="div-gpt-ad-9092914-3" style="float:left;padding-right:6px;" data-google-query-id="CNaZv7mR5OICFRni1Qod1FwPLA">
  
<!-- End AdSlot 3 --></div><p>As soon as you launch JMeter, you will see 2 elements
</p><ol>
<li id="TestPlan">Test Plan</li>
<li>Workbench</li>
</ol>
<h3 style="text-align: center;"><a href="http://localhost:8080/projectbugs/images/performance/ApacheJNeter.png" class="jh-image-popup-colorbox cboxElement"><img class="cke-resize" title="Hands on with JMeter GUI" src="http://localhost:8080/projectbugs/images/performance/ApacheJNeter.png" alt="Hands on with JMeter GUI"></a></h3>


<script type="text/javascript">
    function showme(id, linkid) {
        var divid = document.getElementById(id);
        var toggleLink = document.getElementById(linkid);
        if (divid.style.display == 'block') {
            toggleLink.innerHTML = 'show';
            divid.style.display = 'none';
        }
        else {
            toggleLink.innerHTML = 'hide';
            divid.style.display = 'block';
        }
    }
</script>
<style>
.toc_container{
  background: #ffffff;
    border: 1px solid #aaa;
    padding: 10px;
    margin-bottom: 1em;
    width: auto;
    display: table;
    font-size:90%;
  }
</style>


<div class="toc_container">
  <center><span><strong>What You Will Learn:</strong> <span class="toc_toggle">[<a id="toggler" onclick="showme('widget', this.id);" style="cursor: pointer;">hide</a>]</span></span></center>
<div id="widget" style="display:block;">

<ul>
<li><a href="#1" onclick="ga('send', 'event', 'table_of_content', 'JMeter GUI', '1');">What is a Test Plan?</a></li>
<li><a href="#2" onclick="ga('send', 'event', 'table_of_content', 'JMeter GUI', '2');">What is WorkBench?</a></li>
<li><a href="#3" onclick="ga('send', 'event', 'table_of_content', 'JMeter GUI', '3');">How to add Elements?</a></li>
<li><a href="#4" onclick="ga('send', 'event', 'table_of_content', 'JMeter GUI', '4');">Loading and Saving Elements</a></li>
<li><a href="#5" onclick="ga('send', 'event', 'table_of_content', 'JMeter GUI', '5');">How to Create JMX file</a></li>
<li><a href="#6" onclick="ga('send', 'event', 'table_of_content', 'JMeter GUI', '6');">How to Run JMX file</a></li>
<li><a href="#7" onclick="ga('send', 'event', 'table_of_content', 'JMeter GUI', '7');">How to Configure Elements</a></li>
<li><a href="#8" onclick="ga('send', 'event', 'table_of_content', 'JMeter GUI', '8');">How to Save a Test Plan</a></li>
<li><a href="#9" onclick="ga('send', 'event', 'table_of_content', 'JMeter GUI', '9');">Create a Combo Test Plan</a></li>
<li><a href="#10" onclick="ga('send', 'event', 'table_of_content', 'JMeter GUI', '10');">How to Run Test Plan</a></li>
</ul>
  </div></div>
  
<h2><a id="1"></a> What is a Test Plan?</h2>
<p>Test Plan is where you add elements required for your JMeter Test.
</p><p>It stores all the elements (like ThreadGroup, Timers etc) and their corresponding settings required to run your desired Tests.
</p><p>The following figure shows an example of Test Plan
</p><h3 style="text-align: center;"><a href="http://localhost:8080/projectbugs/images/performance/TestPlanJmeter.png" class="jh-image-popup-colorbox cboxElement"><img title="Hands on with JMeter GUI" src="http://localhost:8080/projectbugs/images/performance/TestPlanJmeter.png" alt="Hands on with JMeter GUI"></a></h3>
<h2><a id="2"></a> What is WorkBench?</h2>
<p>The WorkBench simply provides a place to store test elements <strong>temporarily</strong>. WorkBench has no relation with Test Plan. JMeter will <strong>not save</strong> the contents of the WorkBench. It only saves the contents of the<a href="/what-everybody-ought-to-know-about-test-planing.html"> Test Plan </a>branch
</p><p style="text-align: center;"><a href="http://localhost:8080/projectbugs/images/performance/WorkBenchJMeter.png" class="jh-image-popup-colorbox cboxElement"><img title="Hands on with JMeter GUI" src="http://localhost:8080/projectbugs/images/performance/WorkBenchJMeter.png" alt="Hands on with JMeter GUI"></a>
</p><p>"WorkBench" will be used in our tutorial HTTP Proxy Server Recording Test
</p><p>For now, ignore it.
</p><h2><a id="3"></a> How to add Elements?</h2>
<p>Adding Elements is the <strong>essential</strong> step to build a Test Plan because without adding elements, JMeter <strong>cannot</strong> execute your Test Plan
</p><p>A Test Plan includes many Elements such as Listener, Controller, and Timer
</p><p>You can add an element to test plan by right-clicking on a <strong>Test Plan</strong> and choose new elements from "<strong>Add</strong>" list.
</p><p>Suppose, you want to add 2 elements to Test Plan <strong>BeanShell Assertion</strong> and <strong>Java Request Default</strong>
</p><ul>
<li>&nbsp;Right click&nbsp;<strong>Test Plan&nbsp;<em><strong>-&gt;</strong></em>&nbsp;Add&nbsp;<em><strong>-&gt;&nbsp;</strong></em>Assertion<em><strong>-&gt;</strong></em>&nbsp;Bean Shell Assertion</strong></li>
<li>&nbsp;Right click&nbsp;<strong>Test Plan&nbsp;<em><strong>-&gt;</strong></em>&nbsp;Add&nbsp;<em><strong>-&gt;&nbsp;</strong></em>Config Element&nbsp;<em><strong>-&gt;</strong></em>&nbsp;Java Request Default</strong></li>
</ul>
<p align="center"><a href="http://localhost:8080/projectbugs/images/performance/RemoveElement.gif" class="jh-image-popup-colorbox cboxElement"><img title="Hands on with JMeter GUI" src="http://localhost:8080/projectbugs/images/performance/RemoveElement.gif" alt="Hands on with JMeter GUI"></a>
</p><p>You can also&nbsp;<strong>remove</strong>&nbsp;an unused element
</p><p>Let's say, you want to remove element "<strong>HTTP Request Defaults</strong>", select "HTTP Request Default" -&gt; Right click-&gt; choose&nbsp;<strong>Remove</strong>&nbsp;from the context menu -&gt; Click&nbsp;<strong>Yes&nbsp;</strong>to confirm delete this element on message box
</p><h2><a id="4"></a> Loading and Saving Elements</h2>
<h2><a id="5"></a> How to Create JMX file</h2>
<p>Suppose you have already added an element name "BeanShell&nbsp;<strong>Assertion</strong>".&nbsp; Now you want to save it.
</p><p>Right-click BeanShell Assertion -&gt; select <strong>Save Selection As</strong>
</p><p style="text-align: center;"><a href="http://localhost:8080/projectbugs/images/performance/SaveElements.png" class="jh-image-popup-colorbox cboxElement"><img title="Hands on with JMeter GUI" src="http://localhost:8080/projectbugs/images/performance/SaveElements.png" alt="Hands on with JMeter GUI"></a>
</p><p>A dialog box display, click S<strong>ave</strong> button to save your elements under default name <strong>BeanShell Assertion.jmx</strong>. You can choose other names if you want
</p><p style="text-align: center;"><a href="http://localhost:8080/projectbugs/images/performance/BeanShell.png" class="jh-image-popup-colorbox cboxElement"><img title="Hands on with JMeter GUI" src="http://localhost:8080/projectbugs/images/performance/BeanShell.png" alt="Hands on with JMeter GUI"></a></p><div>
<p>JMeter Test Elements and Test plan are stored in <strong>*.JMX</strong> format. <strong>JMX</strong> is standing for <strong>Java Management Extensions.</strong>
</p><h2><a id="6"></a> How to Run JMX file</h2>
<p>Loading exist element helps you save your time required to create &amp; configure new elements
</p><p>Let's say, &nbsp;that you have an existing element in Test Plan: <strong><em>Java Request Default</em></strong>
</p><p>Right-click&nbsp;<strong>Java Request Defaults</strong>-&gt; select&nbsp;<strong>Merge</strong>
</p><p style="text-align: center;"><a href="http://localhost:8080/projectbugs/images/performance/4_3MergeTestPlan.gif" class="jh-image-popup-colorbox cboxElement"><img title="Hands on with JMeter GUI" src="http://localhost:8080/projectbugs/images/performance/4_3MergeTestPlan.gif" alt="Hands on with JMeter GUI"></a>
</p><p>Choose the <strong>Elements</strong> (<strong>BeanShell Assertion.jmx.</strong>) file in the directory. This element will be added to your current test plan.
</p><p style="text-align: center;"><a href="http://localhost:8080/projectbugs/images/performance/JavaRequestDefault.png" class="jh-image-popup-colorbox cboxElement"><img title="Hands on with JMeter GUI" src="http://localhost:8080/projectbugs/images/performance/JavaRequestDefault.png" alt="Hands on with JMeter GUI"></a>
</p><h2><a id="7"></a> How to Configure Elements</h2>
<p>In order to configure any Element
</p><ol>
<li>Select the element in the Tree on Left Pane</li>
<li>Enter configuration settings on the Right Pane</li>
</ol>
<p style="text-align: center;"><a href="http://localhost:8080/projectbugs/images/performance/jmeterConfigElement.png" class="jh-image-popup-colorbox cboxElement"><img title="Hands on with JMeter GUI" src="http://localhost:8080/projectbugs/images/performance/jmeterConfigElement.png" alt="Hands on with JMeter GUI"></a>
</p><h2><a id="8"></a> How to Save a Test Plan</h2>
<p>Before running a test, you should save your Test Plan first. Saving your Test Plan helps you avoid unexpected error when running the test plan. Steps to saving Test plan -
</p><ol>
<li><strong><em>File -&gt; Save Test Plan as-&gt; a Dialog box display</em></strong></li>
<li><em>Enter a filename of Test Plan <strong>-&gt;</strong>click&nbsp;<strong>Save</strong></em></li>
</ol>
<p style="text-align: center;"><a href="http://localhost:8080/projectbugs/images/performance/SaveTestPlan.gif" class="jh-image-popup-colorbox cboxElement"><img title="Hands on with JMeter GUI" src="http://localhost:8080/projectbugs/images/performance/SaveTestPlan.gif" alt="Hands on with JMeter GUI"></a>
</p><p>Note: Saving a Test Plan is <strong>different</strong> from saving elements.
</p><table class="table table-striped" cellspacing="0" cellpadding="0" border="1" align="center">
<tbody>
<tr>
<th width="50%">
<h3 align="center"><strong>Saving a Test Plan</strong></h3>
</th>
<th>
<h3 align="center"><strong>Saving an Element</strong></h3>
</th>
</tr>
<tr>
<td>
<p>Test Plan consists of one or many elements
</p></td>
<td>
<p>Element is a basic component of JMeter
</p></td>
</tr>
<tr>
<td>
<p>When you save your Test Plan, all those elements in the plan are saved
</p></td>
<td>
<p>When you save your elements, only one element is saved.
</p></td>
</tr>
</tbody>
</table>
<h2><a id="9"></a> Create a Combo Test Plan</h2>
<p>You can <strong>merge</strong> one or many Test Plans to create a <strong>combo</strong> Test Plan as shown in below figure
</p><p style="text-align: center;"><a href="http://localhost:8080/projectbugs/images/performance/ComboTestPlan.png" class="jh-image-popup-colorbox cboxElement"><img title="Hands on with JMeter GUI" src="http://localhost:8080/projectbugs/images/performance/ComboTestPlan.png" alt="Hands on with JMeter GUI"></a>
</p><p>Suppose you already have an existing Test Plan name <strong><em><a href="https://drive.google.com/uc?export=download&amp;id=0B_vqvT0ovzHca3g5WDJucmZmNFE">Test_Fragment.jmx</a></em></strong> on your computer (This article includes this file). You can merge this test plan to current Test Plan on JMeter to create a new Test Plan.
</p><p style="text-align: center;"><a href="http://localhost:8080/projectbugs/images/performance/4MergeTestPlan.gif" class="jh-image-popup-colorbox cboxElement"><img title="Hands on with JMeter GUI" src="http://localhost:8080/projectbugs/images/performance/4MergeTestPlan.gif" alt="Hands on with JMeter GUI"></a>
</p><p>Now all the test elements in file <strong><em>Test_Fragment.jmx </em></strong>are added to your current test plan as shown in the figure below
</p><p style="text-align: center;"><a href="http://localhost:8080/projectbugs/images/performance/TestElement.png" class="jh-image-popup-colorbox cboxElement"><img title="Hands on with JMeter GUI" src="http://localhost:8080/projectbugs/images/performance/TestElement.png" alt="Hands on with JMeter GUI"></a>
</p><h2><a id="10"></a> How to Run Test Plan</h2>
<p>To run your single or multiple test plans, choose <strong>Start</strong> (Control + R) from the <strong>Run</strong> menu item.
</p><p style="text-align: center;"><a href="http://localhost:8080/projectbugs/images/performance/RunTestPlan.png" class="jh-image-popup-colorbox cboxElement"><img title="Hands on with JMeter GUI" src="http://localhost:8080/projectbugs/images/performance/RunTestPlan.png" alt="Hands on with JMeter GUI"></a>
</p><p>When JMeter is running, it shows a small green box at the right-hand end of the menu bar.
</p><p style="text-align: center;"><a href="http://localhost:8080/projectbugs/images/performance/GreenBox.png" class="jh-image-popup-colorbox cboxElement"><img title="Hands on with JMeter GUI" src="http://localhost:8080/projectbugs/images/performance/GreenBox.png" alt="Hands on with JMeter GUI"></a>
</p><p>The numbers to the left of the green box are the number of <strong>active threads</strong> / <strong>total number</strong> of threads.
</p><p>To Stop the Test, press <strong>Stop</strong> button or use short key Ctrl + '.'
</p><p style="text-align: center;"><a href="http://localhost:8080/projectbugs/images/performance/StopButton.png" class="jh-image-popup-colorbox cboxElement"><img title="Hands on with JMeter GUI" src="http://localhost:8080/projectbugs/images/performance/StopButton.png" alt="Hands on with JMeter GUI"></a></p>
<h2>Test Report</h2>
<p>When test execution is done, you can get the test report. The test report includes the error log file, which is saved in jmeter.log, and the test results summary. Here is a sample log file of JMeter
</p><blockquote>
<ul>
<li>2013/08/18 08:41:12 INFO&nbsp; - jmeter.JMeter: Copyright (c) 1998-2013 The Apache Software Foundation</li>
<li>2013/08/18 08:41:12 INFO&nbsp; - jmeter.JMeter: Version 2.9 r1437961</li>
<li>2013/08/18 08:41:12 INFO&nbsp; - jmeter.JMeter: java.version=1.7.0_25</li>
<li>2013/08/18 08:41:12 INFO&nbsp; - jmeter.JMeter: java.vm.name=Java HotSpot(TM) Client VM</li>
<li>2013/08/18 08:41:12 INFO&nbsp; - jmeter.JMeter: os.name=Windows 7</li>
<li>2013/08/18 08:41:12 INFO&nbsp; - jmeter.JMeter: os.arch=x86</li>
<li>2013/08/18 08:41:12 INFO&nbsp; - jmeter.JMeter: os.version=6.1</li>
<li>2013/08/18 08:41:12 INFO&nbsp; - jmeter.JMeter: file.encoding=Cp1252</li>
<li>2013/08/18 08:41:12 INFO&nbsp; - jmeter.JMeter: Default Locale=English (United States)</li>
<li>2013/08/18 08:41:12 INFO&nbsp; - jmeter.JMeter: JMeter&nbsp; Locale=English (United States)</li>
<li>2013/08/18 08:41:12 INFO&nbsp; - jmeter.JMeter: JMeterHome=C:\Nguyen\Source_code\apache-jmeter-2.9</li>
<li>2013/08/18 08:41:12 INFO&nbsp; - jmeter.JMeter: user.dir&nbsp; =c:\Nguyen\Source_code\apache-jmeter-2.9\bin</li>
<li>2013/08/18 08:41:12 INFO&nbsp; - jmeter.JMeter: PWD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; =C:\Nguyen\Source_code\apache-jmeter-2.9\bin</li>
</ul>
</blockquote> 
<!-- sh404sef_tag_description QXMgc29vbiBhcyB5b3UgbGF1bmNoIEpNZXRlciwgeW91IHdpbGwgc2VlIDIgZWxlbWVudHMgVGVzdCBQbGFuIFdvcmtiZW5jaCAudG9jX2NvbnRhaW5lcnsgYmFja2dyb3VuZDogI2ZmZmZmZjsgYm9yZGVyOiAxcHggc29saWQgI2FhYTsgcGFkZGluZzogMTBweDsgbWFyZ2luLWJvdHRvbTogMWVtOyB3aWR0aDogYXV0bzsgZGlzcGxheTogdGFibGU7IGZvbnQtc2l6ZTo5MCU7IH0gV2hhdCBZb3UgV2lsbCBMZWFybjogW2hpZGVdIFdoYXQgaS4uLg== /sh404sef_tag_description -->
<p id="slidetag">&nbsp;</p><script> jQuery( document ).ready(function() { jQuery(".jh-image-popup-colorbox").colorbox(); });</script> </div>

  
  <ul class="pager pagenav">
  <li class="previous">
    <a class="hasTooltip" title="" aria-label="Previous article: JMeter Elements: Thread Group, Samplers, Listeners, Configuration" href="/jmeter-element-reference.html" rel="prev" data-original-title="JMeter Elements: Thread Group, Samplers, Listeners, Configuration">
      <span class="icon-chevron-left" aria-hidden="true"></span> <span aria-hidden="true">Prev</span>   </a>
  </li>

  <li class="next">
    <a class="hasTooltip" title="" aria-label="Next article: How to Use JMeter for Performance &amp; Load Testing" href="/jmeter-performance-testing.html" rel="next" data-original-title="How to Use JMeter for Performance &amp; Load Testing">
      <span aria-hidden="true">Next</span> <span class="icon-chevron-right" aria-hidden="true"></span>    </a>
  </li>
</ul>
                 </div>
                 </body>
</html>