using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using OpenQA.Selenium;
using OpenQA.Selenium.Chrome;
using OpenQA.Selenium.Firefox;
using OpenQA.Selenium.IE;
using OpenQA.Selenium.Support.UI;
using NUnit.Framework;
using OpenQA.Selenium.Remote;    

namespace Project_Bugs___Testrammeverk
{
    class Start
    {
        public static void Chrome()
        {
            Variabler.nettleser = new ChromeDriver();
            Vindustørrelse();
        }
        public static void Firefox()
        {
            Variabler.nettleser = new FirefoxDriver();
            Vindustørrelse();
        }
        public static void IE()
        {
            Variabler.nettleser = new InternetExplorerDriver();
            Vindustørrelse();
        }

        public static void Vindustørrelse()
        {
            Variabler.nettleser.Manage().Window.Maximize();
        }
    }
}
