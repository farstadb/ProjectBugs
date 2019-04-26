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
        public static void VerifiserSøk(string søkeord)
        {
            String resultatTekst = Variabler.nettleser.FindElement(By.XPath("//h3")).Text;
            Assert.IsTrue(resultatTekst == søkeord, "Feil: Finner ikke " + søkeord + ".");
        }
        public static void OpprettBruker(string fornavn, string etternavn, string mail, string passord, bool riktig)
        {
            Variabler.nettleser.FindElement(By.Id("Fornavn")).SendKeys(fornavn);
            Variabler.nettleser.FindElement(By.Id("Etternavn")).SendKeys(etternavn);
            Variabler.nettleser.FindElement(By.Id("Mailadresse")).SendKeys(mail);
            Variabler.nettleser.FindElement(By.Id("Passord")).SendKeys(passord);
            Variabler.nettleser.FindElement(By.XPath("//div[5]/input")).Click();
            Variabler.nyURL = Variabler.nettleser.Url;
            Assert.IsTrue(Variabler.nyURL == "http://localhost:8080/ProjectBugs/functions/user.php", "Feil: Kommer ikke til riktig side");
            String tekst = Variabler.nettleser.FindElement(By.XPath("//div[@id='logoBoks']/div[2]")).Text;

            if (riktig == true)
            {
                Assert.IsTrue(tekst == "Records added successfully.", "Feil: 'Records added succesfully' tilbakemelding kommer ikke opp.");
            }
            else
            {
                Assert.IsTrue(tekst == "Noe var feil med input - prøv igjen", "Feil: 'Feil' tilbakemelding kommer ikke opp.");
            }
        }

        public static void Avslutt()
        {
            Variabler.nettleser.Close();
        }
    }
}