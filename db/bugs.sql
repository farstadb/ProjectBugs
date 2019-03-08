-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08. Mar, 2019 12:53 PM
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
  `bugname` varchar(15) NOT NULL,
  `bugDescription` varchar(50) NOT NULL,
  `InStock` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `bugs`
--

INSERT INTO `bugs` (`bugID`, `bugname`, `bugDescription`, `InStock`) VALUES
(0, 'Maur', 'Et insekt som man finner i maurtuer', 1),
(1, 'Flue', 'Du har forskjellige typer fluer', 0),
(2, 'Edderkopp', 'Edderkopper lager spindelvev', 1),
(3, 'System Bugs', 'Lager kaos i systemer', 1),
(4, 'Browser Bugs', 'Lager koas i browsere', 1),
(5, 'Syntax error Bugs', 'Syntax bugs er feil i syntaxen', 0),
(6, 'Runtime Bugs', 'Kaos', 0);

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
