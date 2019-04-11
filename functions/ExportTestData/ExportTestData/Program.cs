using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using OpenQA.Selenium;
using OpenQA.Selenium.Chrome;
using OpenQA.Selenium.Support.UI;
using NUnit.Framework;
using Microsoft.Office.Interop.Excel;
using Excel = Microsoft.Office.Interop.Excel;

namespace ExportTestData
{
    class Program
    {
        static void Main(string[] args)
        {
            IWebDriver driver;
            string relativePath = System.IO.Path.GetDirectoryName(System.Reflection.Assembly.GetExecutingAssembly().Location);

            Excel.Application xlApp = new Excel.Application();
            Excel.Workbook xlWorkbook = xlApp.Workbooks.Open(System.IO.Path.Combine(relativePath, "TestDataUsers.xlsx"));
            Excel._Worksheet xlWorksheet = xlWorkbook.Sheets[1];
            Excel.Range xlRange = xlWorksheet.UsedRange;

            int rowCount = xlRange.Rows.Count;
            int colCount = xlRange.Columns.Count;
            string[] firstName = new string[rowCount+1];
            string[] lastName = new string[rowCount+1];
            string[] mail = new string[rowCount+1];
            string[] password = new string[rowCount+1];

            for (int i = 1; i <= colCount; i++)
            {
                for (int j = 1; j <= rowCount; j++)
                {
                    if (i == 1)
                    {
                        firstName[j] = xlRange.Cells[j, i].Value2.ToString();
                        Console.WriteLine(firstName[j]);
                    }
                    if (i == 2)
                    {
                        lastName[j] = xlRange.Cells[j, i].Value2.ToString();
                        Console.WriteLine(lastName[j]);
                    }
                    if (i == 3)
                    {
                        mail[j] = xlRange.Cells[j, i].Value2.ToString();
                        Console.WriteLine(mail[j]);
                    }
                    if (i == 4)
                    {
                        password[j] = xlRange.Cells[j, i].Value2.ToString();
                        Console.WriteLine(password[j]);
                    }
                }
            }

            xlWorkbook.Close(0);
            xlApp.Quit();

            driver = new ChromeDriver();
            driver.Manage().Window.Maximize();

            for (int i = 1; i <= rowCount; i++)
            {
                if(i != 1)
                {
                    driver.Navigate().GoToUrl("http://localhost:8080/ProjectBugs/functions/nyBrukerForm.php");
                    driver.FindElement(By.Id("Fornavn")).SendKeys(firstName[i]);
                    driver.FindElement(By.Id("Etternavn")).SendKeys(lastName[i]);
                    driver.FindElement(By.Id("Mailadresse")).SendKeys(mail[i]);
                    driver.FindElement(By.Id("Passord")).SendKeys(password[i]);
                    driver.FindElement(By.CssSelector("input:nth-child(5)")).Click();
                }
            }

            driver.Close();
        }
    }
}
