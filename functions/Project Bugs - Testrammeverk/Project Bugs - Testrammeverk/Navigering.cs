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

namespace Project_Bugs___Testrammeverk
{
    class Navigering
    {
        public static void LastHovedside()
        {
            Variabler.nettleser.Url = Variabler.URL;
        }

        public static void LogoTrykk()
        {
            Variabler.nettleser.FindElement(By.XPath("//img")).Click();
        }

        public static void VisAlt()
        {
            Variabler.nettleser.FindElement(By.CssSelector(".showAll")).Click();
        }

        public static void GåTilOpprettBruker()
        {
            Variabler.nettleser.FindElement(By.CssSelector(".oppretteBrukerKnapp")).Click();
        }
    }
}
