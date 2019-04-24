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
    public class Funksjoner
    {
        public static void Søk(string søkeord)
        {
            Variabler.nettleser.FindElement(By.Name("query")).SendKeys(søkeord);
            Variabler.nettleser.FindElement(By.Name("query")).SendKeys(Keys.Enter);
        }
        public static void OpprettBruker(string fornavn, string etternavn, string mail, string passord)
        {
            Variabler.nettleser.FindElement(By.Id("Fornavn")).SendKeys(fornavn);
            Variabler.nettleser.FindElement(By.Id("Etternavn")).SendKeys(etternavn);
            Variabler.nettleser.FindElement(By.Id("Mailadresse")).SendKeys(mail);
            Variabler.nettleser.FindElement(By.Id("Passord")).SendKeys(passord);
            Variabler.nettleser.FindElement(By.XPath("//div[5]/input")).Click();
        }
        public static void Avslutt()
        {
            Variabler.nettleser.Close();
        }
    }
}