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
    class Search
    {
        [SetUp]
        public void Initialiser()
        {
            Start.Chrome();
        }
        [Test]
        public void TC3()
        {
            Navigering.LastHovedside();
            Funksjoner.Søk("Gresshoppe");
            Funksjoner.VerifiserSøk("Gresshoppe");
        }
        [Test]
        public void TC4()
        {
            Navigering.LastHovedside();
            Funksjoner.Søk("Sommerfugl");
            Funksjoner.VerifiserSøk("Sommerfugl");
        }
        [Test]
        public void TC5()
        {
            Navigering.LastHovedside();
            Funksjoner.Søk("Marihøne");
            Funksjoner.VerifiserSøk("Marihøne");
        }
        [Test]
        public void TC6()
        {
            Navigering.LastHovedside();
            Funksjoner.Søk("Øyenstikker");
            Funksjoner.VerifiserSøk("Øyenstikker");
        }
        [Test]
        public void TC7()
        {
            Navigering.LastHovedside();
            Funksjoner.Søk("Bie");
            Funksjoner.VerifiserSøk("Bie");
        }
        [Test]
        public void TC8()
        {
            Navigering.LastHovedside();
            Funksjoner.Søk("Flått");
            Funksjoner.VerifiserSøk("Flått");
        }
        [Test]
        public void TC9()
        {
            Navigering.LastHovedside();
            Funksjoner.Søk("Sølvkre");
            Funksjoner.VerifiserSøk("Sølvkre");
        }
        [Test]
        public void TC10()
        {
            Navigering.LastHovedside();
            Funksjoner.Søk("Bille");
            Funksjoner.VerifiserSøk("Bille");
        }
        [Test]
        public void TC11()
        {
            Navigering.LastHovedside();
            Funksjoner.Søk("Mygg");
            Funksjoner.VerifiserSøk("Mygg");
        }
        [TearDown]
        public void Avslutt()
        {
            Funksjoner.Avslutt();
        }
    }
}
