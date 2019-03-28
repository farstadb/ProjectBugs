-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28. Mar, 2019 15:53 PM
-- Tjener-versjon: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bugs`
--

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `bugs`
--

CREATE TABLE `bugs` (
  `bugID` int(4) NOT NULL,
  `BugImages` varchar(500) NOT NULL,
  `bugname` varchar(15) NOT NULL,
  `bugDescription` varchar(255) NOT NULL,
  `InStock` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `bugs`
--

INSERT INTO `bugs` (`bugID`, `BugImages`, `bugname`, `bugDescription`, `InStock`) VALUES
(0, '../images/bugs/maur.jpg', 'Maur', 'Et insekt som man finner i maurtuer', 1),
(1, '../images/bugs/flue.jpg', 'Flue', 'Du har forskjellige typer fluer', 0),
(2, '../images/bugs/spider.jpg', 'Edderkopp', 'Edderkopper lager spindelvev', 1),
(3, '../images/bugs/sommerfugl.jpg', 'Sommerfugl', 'Sommerfugler er en orden med over 170 000 arter.', 1),
(4, '../images/bugs/gresshoppe.jpg', 'Gresshoppe', 'Gresshopper er en delgruppe av rettvinger.', 0),
(5, '../images/bugs/marihoene.jpg', 'Marihøne', 'Marihøner er en familie innen ordenen biller', 1),
(6, '../images/bugs/oyenstikker.jpg', 'Øyenstikker', 'Øyenstikkere er en delgruppe av insektene. ', 1),
(7, '../images/bugs/bie.jpg', 'Bie', 'broddvepser som lever av blomsterstøv og nektar. ', 0),
(8, '../images/bugs/mygg.jpg', 'Mygg', 'Mygg er én gruppe av tovingene. Den andre gruppen er fluer. ', 1),
(9, '../images/bugs/flott.jpg', 'Flått', 'Flått,vitenskapelig navn-ixodidae,', 1),
(10, '../images/bugs/solvkre.jpg', 'Sølvkre', 'Sølvkre et lite, dråpeformet og litt sølvfarget insekt. ', 1),
(11, '../images/bugs/bille.jpg', 'Bille', 'Biller er en gruppe av insekter med fullstendig forvandling.', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bugs`
--
ALTER TABLE `bugs`
  ADD PRIMARY KEY (`bugID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
