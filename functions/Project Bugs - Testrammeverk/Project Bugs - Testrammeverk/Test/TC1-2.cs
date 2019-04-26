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

namespace Project_Bugs___Testrammeverk.Test
{
    class TC1_2
    {
        [SetUp]
        public void Initialiser()
        {
            Start.Chrome();
        }
        [Test]
        public void TC1()
        {
            Navigering.LastHovedside();
            var watch = System.Diagnostics.Stopwatch.StartNew();
            Funksjoner.Søk("Maur");
            watch.Stop();
            float time = watch.ElapsedMilliseconds;
            Funksjoner.VerifiserSøk("Maur");
            Assert.IsTrue(time >= 10000, "Feil: Det skal ta 10+ sekunder før søkeresultat kommer opp. Det tok " + time + " millisekunder.");
        }
        [Test]
        public void TC2()
        {
            Navigering.LastHovedside();
            var watch = System.Diagnostics.Stopwatch.StartNew();
            Funksjoner.Søk("Flue");
            watch.Stop();
            float time = watch.ElapsedMilliseconds;
            Funksjoner.VerifiserSøk("Flue");
            Assert.IsTrue(time <= 2000, "Feil: Det skal ta Under 2 sekunder før søkeresultat kommer opp. Det tok " + time + " millisekunder.");
            Variabler.nettleser.FindElement(By.XPath("//h3[contains(.,'Bille')]"));
        }
        [TearDown]
        public void Avslutt()
        {
            Funksjoner.Avslutt();
        }
    }
}
