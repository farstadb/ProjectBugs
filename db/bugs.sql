-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12. Apr, 2019 14:42 PM
-- Tjener-versjon: 10.1.38-MariaDB
-- PHP Version: 7.3.2

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
  `InStock` int(1) NOT NULL,
  `iStock` int(1) NOT NULL,
  `Pris` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `bugs`
--

INSERT INTO `bugs` (`bugID`, `BugImages`, `bugname`, `bugDescription`, `InStock`, `iStock`, `Pris`) VALUES
(0, '../images/bugs/maur.jpg', 'Maur', 'Et insekt som man finner i maurtuer', 10, 1, 999),
(1, '../images/bugs/flue.jpg', 'Flue', 'Du har forskjellige typer fluer', 0, 0, 190),
(2, '../images/bugs/spider.jpg', 'Edderkopp', 'Edderkopper lager spindelvev', 7, 1, 9449),
(3, '../images/bugs/sommerfugl.jpg', 'Sommerfugl', 'Sommerfugler er en orden med over 170 000 arter.', 8, 1, 1999),
(4, '../images/bugs/gresshoppe.jpg', 'Gresshoppe', 'Gresshopper er en delgruppe av rettvinger.', 7, 1, 2599),
(5, '../images/bugs/marihoene.jpg', 'MarihÃ¸ne', 'MarihÃ¸ner er en familie innen ordenen biller', 1, 0, 859),
(6, '../images/bugs/oyenstikker.jpg', 'Ã˜yenstikker', 'Ã˜yenstikkere er en delgruppe av insektene. ', 0, 0, 359),
(7, '../images/bugs/bie.jpg', 'Bie', 'broddvepser som lever av blomsterstÃ¸v og nektar. ', 0, 0, 13499),
(8, '../images/bugs/mygg.jpg', 'Mygg', 'Mygg er en gruppe av tovingene. Den andre gruppen er fluer. ', 1, 1, 49),
(9, '../images/bugs/flott.jpg', 'FlÃ¥tt', 'FlÃ¥tt,vitenskapelig navn-ixodidae,', 5, 1, 749),
(10, '../images/bugs/solvkre.jpg', 'SÃ¸lvkre', 'SÃ¸lvkre et lite, drÃ¥peformet og litt sÃ¸lvfarget insekt. ', 0, 0, 8699),
(11, '../images/bugs/bille.jpg', 'Bille', 'Biller er en gruppe av insekter med fullstendig forvandling.', 4, 0, 5);

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
