using OpenQA.Selenium;
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
            Variabler.nyURL = Variabler.nettleser.Url;
            Assert.IsTrue(Variabler.nyURL == Variabler.URL, "Feil: Nettadresse er feil. Skulle ha vært på startsiden.");
        }

        public static void VisAlt()
        {
            Variabler.nettleser.FindElement(By.CssSelector(".showAll")).Click();
            Variabler.nyURL = Variabler.nettleser.Url;
            Assert.IsTrue(Variabler.nyURL == "http://localhost:8080/ProjectBugs/functions/searchall.php", "Feil: Nettadresse er feil. Skulle ha vært på Show All siden.");
        }

        public static void GåTilOpprettBruker()
        {
            Variabler.nettleser.FindElement(By.CssSelector(".oppretteBrukerKnapp")).Click();
            Variabler.nyURL = Variabler.nettleser.Url;
            Assert.IsTrue(Variabler.nyURL == "http://localhost:8080/ProjectBugs/functions/nyBrukerForm.php", "Feil: Nettadresse er feil. Skulle ha vært på opprett bruker siden.");
        }
    }
}
