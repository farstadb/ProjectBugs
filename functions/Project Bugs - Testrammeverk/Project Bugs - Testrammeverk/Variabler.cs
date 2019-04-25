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
    class Variabler
    {
        public static string URL = "http://localhost:8080/ProjectBugs/index.php";
        public static string nyURL;
        public static IWebDriver nettleser;

        public static string[] søkeord = new string[] {"Maur", "Flue", "Edderkopp", "Sommerfugl", "Gresshoppe", "Marihøne", "Øyenstikker", "Bie", "Mygg",
        "Flått", "Sølvkre", "Bille"};

    }
}
