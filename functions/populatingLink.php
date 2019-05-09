<!DOCTYPE html>
<html lang="en">
<title>Test Management</title>
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
  <a class="w3-bar-item w3-button w3-hover-black" href="http://localhost:8080/projectbugs/functions/testManagement.php">Back to Test Data Management</a>

  <br></br>
  <a class="w3-bar-item w3-button w3-hover-black" href="http://localhost:8080/projectbugs/functions/generatingLink.php">Test-Generation</a><br>
  <a class="w3-bar-item w3-button w3-hover-black" href="http://localhost:8080/projectbugs/functions/populatingLink.php">Test-Population</a>
  <a class="w3-bar-item w3-button w3-hover-black" span style="margin-left:2em" href="#top">Introduction</a>
  <a class="w3-bar-item w3-button w3-hover-black" span style="margin-left:2em" href="#Info">What is population</a>
  <a class="w3-bar-item w3-button w3-hover-black" span style="margin-left:2em" href="#What">How to do it</a>
  <a class="w3-bar-item w3-button w3-hover-black" span style="margin-left:2em" href="#Assignment2">Assignment 2</a>
  <br><a class="w3-bar-item w3-button w3-hover-black" href="http://localhost:8080/projectbugs/index.php"target="_blank">Go to test site</a>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<div class="w3-main" style="margin-left:250px">

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <br></br>
      <h1 class="w3-text-teal"id ="Headline">Population</h1>
      <p>
      </p>
    </div>

    <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h2 class="w3-text-teal"id ="Info">Introduction</h2>
      <p>Welcome to Test Data Population. Here you will learn how to populate data, and how to set up a tool that can be used for this purpose, with an assignment to mass populate a database with said tool. 
    </div>

  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h2 class="w3-text-teal" id ="What">What is population</h2>
      <p>When applying Test Data Population, you find a tool that allows you to populate a high number of users, in a short period of time. This will lead to higher quality of testing, and is easier to use, than to type in a high number of users manually.</p>
    </div>

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h2 class="w3-text-teal"id ="Populate">How to do it</h2>
      <p>In this tutorial, you will learn how to develop your own Test Generation Tool, for use on the Project Bugs site.</p>

        <h3 class="w3-text-teal"id ="Populate">Prerequisites</h3>
        <p>
          Before starting creating the Test Generation tool, the following steps must have been completed:<br><br>
          · Apache and MySQL server must be started<br /><br />
          · Chrome must be installed · Follow the steps in: How to start with Project Bugs<br /><br />
          · The <a href = "seleniumSetup.php"target="_blank">Selenium tutorial</a> must have been done.<br /><br />
          · The <a href = "generatingLink.php"target="_blank">test data generation tutorial</a> must have been done.<br /><br />
        </p>
        
        <h3 class="w3-text-teal"id ="Populate">Creating the tool</h3>
         <p>
        <br>To create the tool, follow these steps:<br /><br />

        Step 1: Generate an excel file with test data from Mockaroo. Have the file include one set of test data, namely animals, and call it AnimalData.<br><br>

        Step 2: Start Visual Studio and create a new project. Make the project a console app, and call it PopulationTool.<br>
        <img src="../images/Population1.png" alt="Population_Image_1"height="60%" width="60%"><br><br>

        Step 3: Put the excel file into the debug folder of your project.<br><br>

        Step 4: Install the necessary Selenium NuGet packages in addition to Microsoft.Office.Interop.Excel<br><br>

        Step 5: Add the following libraries to the code.<br>
        <img src="../images/Population2.png" alt="Population_Image_2"><br><br>

        Step 6: Add the following code under the Main method:<br><br>

        <table style="width:100%">
          <tr>
            <th>
        static void Main(string[] args)<br>
        {<br>
          <font color="red">IWebDriver driver;<br>
          string relativePath = System.IO.Path.GetDirectoryName(System.Reflection.Assembly.GetExecutingAssembly().Location);<br></font>
        }
          </th> 
        <tr>
        </table>
        <br><br>
        'relativePath' finds the location of your project, which will be referenced later in the program.<br><br>

        Now, add the following code beneath the two lines you just wrote like so:<br><br>

                <table style="width:100%">
          <tr>
            <th>
        static void Main(string[] args)<br>
        {<br>
          IWebDriver driver;<br>
          string relativePath = System.IO.Path.GetDirectoryName(System.Reflection.Assembly.GetExecutingAssembly().Location);<br>
          <font color="red">Excel.Application xlApp = new Excel.Application();<br>
          Excel.Workbook xlWorkbook = xlApp.Workbooks.Open(System.IO.Path.Combine(relativePath, "TestData.xlsx"));<br>
          Excel._Worksheet xlWorksheet = xlWorkbook.Sheets[1];<br>
          Excel.Range xlRange = xlWorksheet.UsedRange;<br></font>
        }
          </th> 
        <tr>
        </table>
        <br><br>

        The program now finds the excel file you put into the debug folder and opens it, allowing the program to access the information stored within. With that out of the way, you can add the following lines:
                <table style="width:100%">
          <tr>
            <th>
        static void Main(string[] args)<br>
        {<br>
          IWebDriver driver;<br>
          string relativePath = System.IO.Path.GetDirectoryName(System.Reflection.Assembly.GetExecutingAssembly().Location);<br><br>
          Excel.Application xlApp = new Excel.Application();<br>
          Excel.Workbook xlWorkbook = xlApp.Workbooks.Open(System.IO.Path.Combine(relativePath, "TestData.xlsx"));<br>
          Excel._Worksheet xlWorksheet = xlWorkbook.Sheets[1];<br>
          Excel.Range xlRange = xlWorksheet.UsedRange;<br><br>
          <font color="red">int rowCount = xlRange.Rows.Count;<br>
          int colCount = xlRange.Columns.Count;<br>
          string[] animal = new string[rowCount + 1];<br></font>
        }
          </th> 
        <tr>
        </table>
        <br><br>
        The program now knows how many rows and columns there are in the excel file, and has initialized a string array that we can store the information from the excel file in. <br><br>

        With that out of the way, we can finally begin to store the information from the excel file into the array, by using a for loop.<br>
                        <table style="width:100%">
          <tr>
            <th>
        static void Main(string[] args)<br>
        {<br>
          IWebDriver driver;<br>
          string relativePath = System.IO.Path.GetDirectoryName(System.Reflection.Assembly.GetExecutingAssembly().Location);<br><br>
          Excel.Application xlApp = new Excel.Application();<br>
          Excel.Workbook xlWorkbook = xlApp.Workbooks.Open(System.IO.Path.Combine(relativePath, "TestData.xlsx"));<br>
          Excel._Worksheet xlWorksheet = xlWorkbook.Sheets[1];<br>
          Excel.Range xlRange = xlWorksheet.UsedRange;<br><br>
          int rowCount = xlRange.Rows.Count;<br>
          int colCount = xlRange.Columns.Count;<br>
          string[] animal = new string[rowCount + 1];<br><br>
          <font color="red">for (int i = 1; i <= colCount; i++)<br>
          {<br>
            for (int j = 1; j <= rowCount; j++)<br>
            {<br>
              if (i == 1)<br>
              {<br>
                animal[j] = xlRange.Cells[j, i].Value2.ToString();<br>
                Console.WriteLine(animal[j]);<br>
              }<br>
            }<br>
          }<br></font>
        }
          </th> 
        <tr>
        </table>
        <br><br>

        The for loop runs for as long as there are rows and columns that haven't been processed, storing the information from the first column into the animal array. Now that the information is stored, we can use it against the Project Bugs site. To use the information against the site, add the last bit of code here:

        <table style="width:100%">
          <tr>
            <th>
        static void Main(string[] args)<br>
        {<br>
          IWebDriver driver;<br>
          string relativePath = System.IO.Path.GetDirectoryName(System.Reflection.Assembly.GetExecutingAssembly().Location);<br><br>
          Excel.Application xlApp = new Excel.Application();<br>
          Excel.Workbook xlWorkbook = xlApp.Workbooks.Open(System.IO.Path.Combine(relativePath, "TestData.xlsx"));<br>
          Excel._Worksheet xlWorksheet = xlWorkbook.Sheets[1];<br>
          Excel.Range xlRange = xlWorksheet.UsedRange;<br><br>
          int rowCount = xlRange.Rows.Count;<br>
          int colCount = xlRange.Columns.Count;<br>
          string[] animal = new string[rowCount + 1];<br><br>
          for (int i = 1; i <= colCount; i++)<br>
          {<br>
            for (int j = 1; j <= rowCount; j++)<br>
            {<br>
              if (i == 1)<br>
              {<br>
                animal[j] = xlRange.Cells[j, i].Value2.ToString();<br>
                Console.WriteLine(animal[j]);<br>
              }<br>
            }<br>
          }<br><br>

          <font color="red">xlWorkbook.Close(0);<br>
          xlApp.Quit();<br><br>

          driver = new ChromeDriver();<br>
          driver.Manage().Window.Maximize();<br><br>

          for (int i = 1; i <= rowCount; i++)<br>
          {<br>
            if (i != 1)<br>
            {<br>
              driver.Navigate().GoToUrl("http://localhost:8080/ProjectBugs/index.php");;<br>
              driver.FindElement(By.Name("query")).SendKeys(animal[i]);<br>
              driver.FindElement(By.Name("query")).SendKeys(Keys.Enter);<br>
            }<br>
          }<br><br>
          driver.Close();<br></font>
        }
          </th> 
        <tr>
        </table>
        <br><br>
        The application now opens Chrome, navigates to the Project Bugs site, and searches for every animal in the search bar. When it has searched for every animal, the Chrome window closes. <br><br>

        Step 7: Build the solution, and run the application.<br><br>
        <img src="../images/Population3.png" alt="Population_Image_3"><br><br>

        Now you have an application that takes the information from an excel sheet, stores it in an array, and searches the Project Bugs site using said array. However, the application is still not complete, which takes us to the assignment...
      </p>
    <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h2 class="w3-text-teal"id ="Assignment2">Assignment 2: Populate the Users database</h2>
      <p>
        Now that you have a working application that can extract information from an excel sheet and use the information on the Project Bugs site, it is time to use the application to mass populate the Users database.<br><br>

        The assignment is as follows:<br><br>

        Rework the application, so that instead of extracting information about animal names, it extracts the information from the test data generated in Assignment 1, and uses it against the user registration page <a href = "http://localhost:8080/projectbugs/functions/nyBrukerForm.php"target="_blank">here</a>, to mass populate it.<br><br>

        All of the functions are already in place, but need to be reworked for their new purpose. Once this is completed, the application will enter the test data into the register page, with the site then storing the information in the users database. Thus you will have a fully functioning data population tool that can both extract information from excel files and use it to mass populate the Project Bugs database!
      </p>
      <br>
          <p><a href="#top">Go back to the top</a></p>
    </div>

    <!-- END MAIN -->
</div>

</body>
</html>
