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
    class TC17_21
    {
        [SetUp]
        public void Initialiser()
        {
            Start.Chrome();
        }
        [Test]
        public void TC17()
        {
            Navigering.LastHovedside();
            Funksjoner.Søk("1234");
            string ingenResultat = Variabler.nettleser.FindElement(By.XPath("//div[3]")).Text;
            Assert.IsTrue(ingenResultat == "Desverre ingen resultater..");
        }
        [Test]
        public void TC18()
        {
            Navigering.LastHovedside();
            Funksjoner.Søk("katt");
            string ingenResultat = Variabler.nettleser.FindElement(By.XPath("//div[3]")).Text;
            Assert.IsTrue(ingenResultat == "Desverre ingen resultater..");
        }
        [Test]
        public void TC19()
        {
            Navigering.LastHovedside();
            Funksjoner.Søk("maur2");
            string ingenResultat = Variabler.nettleser.FindElement(By.XPath("//div[3]")).Text;
            Assert.IsTrue(ingenResultat == "Desverre ingen resultater..");
        }
        [Test]
        public void TC20()
        {
            Navigering.LastHovedside();
            Funksjoner.Søk("mauren");
            string ingenResultat = Variabler.nettleser.FindElement(By.XPath("//div[3]")).Text;
            Assert.IsTrue(ingenResultat == "Desverre ingen resultater..");
        }
        [Test]
        public void TC21()
        {
            Navigering.LastHovedside();
            Funksjoner.Søk("møll");
            string ingenResultat = Variabler.nettleser.FindElement(By.XPath("//div[3]")).Text;
            Assert.IsTrue(ingenResultat == "Desverre ingen resultater..");
        }
        [TearDown]
        public void Avslutt()
        {
            Funksjoner.Avslutt();
        }
    }
}
