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
    class Testcases
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
            Funksjoner.Søk("maur");
        }
        [TearDown]
        public void Avslutt()
        {
            Funksjoner.Avslutt();
        }
    }
}
