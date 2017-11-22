-- phpMyAdmin SQL Dump
-- version 4.6.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2017 m. Bir 23 d. 06:10
-- Server version: 5.7.12
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vpb_devices`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `busenos`
--

CREATE TABLE `busenos` (
  `ID` int(11) NOT NULL,
  `busena` varchar(60) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Sukurta duomenų kopija lentelei `busenos`
--

INSERT INTO `busenos` (`ID`, `busena`) VALUES
(1, 'Eksplotuojamas'),
(2, 'Nurašytas');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `darbuotojai`
--

CREATE TABLE `darbuotojai` (
  `ID` int(11) NOT NULL,
  `darbuotojas` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Sukurta duomenų kopija lentelei `darbuotojai`
--

INSERT INTO `darbuotojai` (`ID`, `darbuotojas`) VALUES
(0, 'Nepriskirta');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `kompiuteriotipas`
--

CREATE TABLE `kompiuteriotipas` (
  `ID` int(11) NOT NULL,
  `tipas` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Sukurta duomenų kopija lentelei `kompiuteriotipas`
--

INSERT INTO `kompiuteriotipas` (`ID`, `tipas`) VALUES
(1, 'Stacionarus'),
(2, 'Nešiojamas'),
(3, 'Planšetinis');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `ms_office`
--

CREATE TABLE `ms_office` (
  `ID` int(11) NOT NULL,
  `Versija` varchar(25) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Sukurta duomenų kopija lentelei `ms_office`
--

INSERT INTO `ms_office` (`ID`, `Versija`) VALUES
(0, 'Nenaudojama'),
(1, '2000'),
(2, '2003'),
(3, '2007'),
(4, '2010'),
(5, '2013'),
(6, '2016');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `os`
--

CREATE TABLE `os` (
  `ID` int(11) NOT NULL,
  `os_versija` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Sukurta duomenų kopija lentelei `os`
--

INSERT INTO `os` (`ID`, `os_versija`) VALUES
(1, 'Windows 2000'),
(2, 'Windows XP'),
(3, 'Windows vista'),
(4, 'Windows 7'),
(5, 'Windows 8'),
(6, 'Windows 10'),
(7, 'Linux Ubuntu'),
(8, 'Android'),
(9, 'MAC X.X'),
(10, 'IOS X'),
(11, 'Nenurodytas');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `skyrius`
--

CREATE TABLE `skyrius` (
  `ID` int(11) NOT NULL,
  `skyrius` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Sukurta duomenų kopija lentelei `skyrius`
--

INSERT INTO `skyrius` (`ID`, `skyrius`) VALUES
(0, 'Nepriskirta');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `tpi`
--

CREATE TABLE `tpi` (
  `ID` int(11) NOT NULL,
  `tipas` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Sukurta duomenų kopija lentelei `tpi`
--

INSERT INTO `tpi` (`ID`, `tipas`) VALUES
(1, ''),
(2, 'Foxit reader');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `visa_info`
--

CREATE TABLE `visa_info` (
  `ID` varchar(10) COLLATE utf8_bin NOT NULL,
  `darbuotojasID` int(11) NOT NULL,
  `skyriusID` int(11) NOT NULL,
  `tipasID` int(11) NOT NULL,
  `modelis` varchar(70) COLLATE utf8_bin NOT NULL,
  `kaina` float DEFAULT NULL,
  `pirkimo_data` year(4) DEFAULT NULL,
  `isdavimo_data` year(4) DEFAULT NULL,
  `nurasymo_data` year(4) DEFAULT NULL,
  `osID` int(11) NOT NULL,
  `ms_officeID` int(11) NOT NULL,
  `komercine_programa_0ID` int(11) DEFAULT NULL,
  `komercine_programa_1ID` int(11) DEFAULT NULL,
  `komercine_programa_2ID` int(11) DEFAULT NULL,
  `komercine_programa_3ID` int(11) DEFAULT NULL,
  `busenaID` int(11) NOT NULL,
  `pastabos` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Sukurta duomenų kopija lentelei `visa_info`
--

INSERT INTO `visa_info` (`ID`, `darbuotojasID`, `skyriusID`, `tipasID`, `modelis`, `kaina`, `pirkimo_data`, `isdavimo_data`, `nurasymo_data`, `osID`, `ms_officeID`, `komercine_programa_0ID`, `komercine_programa_1ID`, `komercine_programa_2ID`, `komercine_programa_3ID`, `busenaID`, `pastabos`) VALUES
('1024', 0, 0, 1, 'Kompiuteris "PowerBook G4 12"', 1575.47, 2006, NULL, NULL, 4, 3, 1, 1, 1, 1, 1, '-'),
('1029', 0, 0, 1, 'Nešiojamas komp. Think Pad T43', 3904.51, 2006, NULL, NULL, 11, 0, 1, 1, 1, 1, 1, '-'),
('1352', 45, 7, 1, 'Magnum ', 0, 2014, 2015, NULL, 6, 4, 2, 1, 1, 1, 1, '-'),
('1427', 0, 0, 3, 'Planšet. Komp. HP Pro Tablet 610 G1 W 8.1  2013', 671.92, 2014, NULL, NULL, 5, 0, 1, 1, 1, 1, 1, '-'),
('1428', 0, 0, 3, 'Planšet. Komp. HP Pro Tablet 610 G1 W 8.1  2013', 671.92, 2014, NULL, NULL, 5, 5, 1, 1, 1, 1, 1, '-'),
('1456', 0, 0, 1, 'Nešiojamas komp Dell Lat E7250, RAM8GB pelė,krepš.', 322.41, 2015, NULL, NULL, 4, 4, 1, 1, 1, 1, 1, '-'),
('832', 0, 0, 2, 'Nešioj. Komp.IBM Think pad T40', 0, 2003, NULL, NULL, 2, 2, 1, 1, 1, 1, 1, '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `busenos`
--
ALTER TABLE `busenos`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `darbuotojai`
--
ALTER TABLE `darbuotojai`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `kompiuteriotipas`
--
ALTER TABLE `kompiuteriotipas`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ms_office`
--
ALTER TABLE `ms_office`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `os`
--
ALTER TABLE `os`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `skyrius`
--
ALTER TABLE `skyrius`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tpi`
--
ALTER TABLE `tpi`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `visa_info`
--
ALTER TABLE `visa_info`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `busenos`
--
ALTER TABLE `busenos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `darbuotojai`
--
ALTER TABLE `darbuotojai`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `kompiuteriotipas`
--
ALTER TABLE `kompiuteriotipas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ms_office`
--
ALTER TABLE `ms_office`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `os`
--
ALTER TABLE `os`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `skyrius`
--
ALTER TABLE `skyrius`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tpi`
--
ALTER TABLE `tpi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
