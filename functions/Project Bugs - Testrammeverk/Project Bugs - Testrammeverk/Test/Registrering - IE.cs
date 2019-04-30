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
    class Registrering___IE
    {
        [SetUp]
        public void Initialiser()
        {
            Start.IE();
        }
        [Test]
        public void TC25()
        {
            Navigering.LastHovedside();
            Navigering.GåTilOpprettBruker();
        }
        [Test]
        public void TC28()
        {
            Navigering.LastHovedside();
            Navigering.GåTilOpprettBruker();
            Funksjoner.OpprettBruker("John", "Bakk", "mail@mail.no", "123", true);
        }
        [Test]
        public void TC31()
        {
            Navigering.LastHovedside();
            Navigering.GåTilOpprettBruker();
            Funksjoner.OpprettBruker("John", "Bakk", "mail@mail.no", "", false);
        }
        [Test]
        public void TC32()
        {
            Navigering.LastHovedside();
            Navigering.GåTilOpprettBruker();
            Funksjoner.OpprettBruker("John", "Bakk", "", "123", false);
        }
        [Test]
        public void TC33()
        {
            Navigering.LastHovedside();
            Navigering.GåTilOpprettBruker();
            Funksjoner.OpprettBruker("John", "", "mail@mail.no", "123", false);
        }
        [Test]
        public void TC34()
        {
            Navigering.LastHovedside();
            Navigering.GåTilOpprettBruker();
            Funksjoner.OpprettBruker("", "Bakk", "mail@mail.no", "123", false);
        }
        [TearDown]
        public void Avslutt()
        {
            Funksjoner.Avslutt();
        }
    }
}
