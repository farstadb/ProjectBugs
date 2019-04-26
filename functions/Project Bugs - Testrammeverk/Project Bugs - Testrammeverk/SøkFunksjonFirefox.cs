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
    class SøkFunksjonFirefox
    {
        [SetUp]
        public void Initialiser()
        {
            Start.Firefox();
        }
        [Test]
        public void TC3()
        {
            Navigering.LastHovedside();
            Funksjoner.Søk("Gresshoppe");
            System.Threading.Thread.Sleep(1000);
            Funksjoner.VerifiserSøk("Gresshoppe");

        }
        [Test]
        public void TC4()
        {
            Navigering.LastHovedside();
            Funksjoner.Søk("Sommerfugl");
            System.Threading.Thread.Sleep(1000);
            Funksjoner.VerifiserSøk("Sommerfugl");
        }
        [Test]
        public void TC5()
        {
            Navigering.LastHovedside();
            Funksjoner.Søk("Marihøne");
            System.Threading.Thread.Sleep(1000);
            Funksjoner.VerifiserSøk("Marihøne");
        }
        [Test]
        public void TC6()
        {
            Navigering.LastHovedside();
            Funksjoner.Søk("Øyenstikker");
            System.Threading.Thread.Sleep(1000);
            Funksjoner.VerifiserSøk("Øyenstikker");
        }
        [Test]
        public void TC7()
        {
            Navigering.LastHovedside();
            Funksjoner.Søk("Bie");
            System.Threading.Thread.Sleep(1000);
            Funksjoner.VerifiserSøk("Bie");
        }
        [Test]
        public void TC8()
        {
            Navigering.LastHovedside();
            Funksjoner.Søk("Flått");
            System.Threading.Thread.Sleep(1000);
            Funksjoner.VerifiserSøk("Flått");
        }
        [Test]
        public void TC9()
        {
            Navigering.LastHovedside();
            Funksjoner.Søk("Sølvkre");
            System.Threading.Thread.Sleep(1000);
            Funksjoner.VerifiserSøk("Sølvkre");
        }
        [Test]
        public void TC10()
        {
            Navigering.LastHovedside();
            Funksjoner.Søk("Bille");
            System.Threading.Thread.Sleep(1000);
            Funksjoner.VerifiserSøk("Bille");
        }
        [Test]
        public void TC11()
        {
            Navigering.LastHovedside();
            Funksjoner.Søk("Mygg");
            System.Threading.Thread.Sleep(1000);
            Funksjoner.VerifiserSøk("Mygg");
        }
        [TearDown]
        public void Avslutt()
        {
            Funksjoner.Avslutt();
        }
    }
}
