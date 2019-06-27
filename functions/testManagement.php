<!DOCTYPE html>
<html lang="en">
<title>Test Data Management</title>
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

  <a class="w3-bar-item w3-button w3-hover-black" href="http://localhost:8080/projectbugs/functions/generatingLink.php">Go to Test Data Generation</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="http://localhost:8080/projectbugs/functions/populatingLink.php">Go to Test Data Population</a>
  <br></br><a class="w3-bar-item w3-button w3-hover-black" href="http://localhost:8080/projectbugs/index.php"target="_blank">Go to test site</a>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main" style="margin-left:250px">

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <br></br>
      <h1 class="w3-text-teal"id ="Headline">Test Data Management</h1>
      <p>
      </p>
    </div>

  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h3 class="w3-text-teal"id ="Info">Introduction</h3>
      <p>Test data management is the creation of non-production data sets that reliably mimic an organization’s actual data so that testers, systems- and applications developers can perform rigorous and valid systems tests. In other words, test data management provides secure, automated provisioning of non-production datasets to meet development and testing needs.
            </p>
    </div>

  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h3 class="w3-text-teal" id ="Who">Who uses test data management?</h3>
      <p>Test data management is used by organizations which dealing with many critical processing of sensitive data. It is especially important in industries such as banking and health care where a breach of sensitive customer data could be extremely damaging. However, most organizations have some data that is sensitive and needs to be masked for testing purposes.
      </p>
    </div>

      <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h3 class="w3-text-teal" id ="What">What are the benefits of test data management?</h3>
      <p>Test data management helps organizations create better quality in the software that will perform reliably on deployment. It creates overall cost-efficient software deployment process, prevents bug fixes and rollbacks. It also lowers the organization’s security risks and compliance.
      </p>
    </div>

          <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h3 class="w3-text-teal" id ="Who">What do I need to know about test data management?</h3>
      <p>The quality of test data matters. If applications are tested against generic data, many issues can appear once the application is put into production. To avoid problems, applications must be tested rigorously against data that is production-liked / as similar as possible to the actual data that will be used in production.
      </p>
    </div>

              <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h3 class="w3-text-teal" id ="Who">Why not copy production data for tests?</h3>
      <p>Due to data security and regulatory matter, production data is often not practical for use in a test system. Data that has personally identifiable information must be altered in order to protect people from having sensitive data exposed to the development and testing teams. Test data management uses data masking techniques to obfuscate personally identifiable information while still retaining the formatting and other data properties that are important for testing.
      </p><br>
          <p><a href="#top">Go back to the top</a></p>
    </div>

<!-- END MAIN -->
</div>

</body>
</html>