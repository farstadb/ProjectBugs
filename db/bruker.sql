-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10. Apr, 2019 12:49 PM
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
-- Tabellstruktur for tabell `bruker`
--

CREATE TABLE `bruker` (
  `id` int(1) NOT NULL,
  `Fornavn` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `Etternavn` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `Mailadresse` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `Passord` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `Adresse` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `Postnummer` int(4) NOT NULL,
  `Poststed` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `Land` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `Kortnummer` int(16) NOT NULL,
  `Utløpsdato` int(4) NOT NULL,
  `CVC` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `bruker`
--

INSERT INTO `bruker` (`id`, `Fornavn`, `Etternavn`, `Mailadresse`, `Passord`, `Adresse`, `Postnummer`, `Poststed`, `Land`, `Kortnummer`, `Utløpsdato`, `CVC`) VALUES
(1, 'Hei', 'hei', 'hei..d.d', 'hah', '', 0, '', '', 0, 0, 0),
(7, 'hei', 'hei', 'hei', 'hei', '', 0, '', '', 0, 0, 0),
(8, 'hei', 'hei', 'hei', 'hei', '', 0, '', '', 0, 0, 0),
(9, 'hei', 'hei', 'hei', 'hei', '', 0, '', '', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bruker`
--
ALTER TABLE `bruker`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bruker`
--
ALTER TABLE `bruker`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
