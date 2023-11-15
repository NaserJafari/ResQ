-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 15, 2023 at 08:40 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resq`
--

-- --------------------------------------------------------

--
-- Table structure for table `geenverbindinglocatie`
--

CREATE TABLE `geenverbindinglocatie` (
  `geenverbindinglocatieid` int NOT NULL,
  `locatie` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `geenverbindinglocatie`
--

INSERT INTO `geenverbindinglocatie` (`geenverbindinglocatieid`, `locatie`, `foto`) VALUES
(1, 'nieuwestraat 1024, 6905659090ihjfv, Nijmegen', 'Schermafbeelding 2023-06-14 214525.png'),
(2, 'huiguig', '2022-02-23 (1).png');

-- --------------------------------------------------------

--
-- Table structure for table `situatie`
--

CREATE TABLE `situatie` (
  `situatieid` int NOT NULL,
  `situatie_beschrijving` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `situatie`
--

INSERT INTO `situatie` (`situatieid`, `situatie_beschrijving`) VALUES
(1, 'heeft zijn hoofd gestoten tegen een trap'),
(2, 'hond bijt kat'),
(3, 'uihhuihui');

-- --------------------------------------------------------

--
-- Table structure for table `welverbindinglocatie`
--

CREATE TABLE `welverbindinglocatie` (
  `welverbindinglocatieid` int NOT NULL,
  `locatie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `welverbindinglocatie`
--

INSERT INTO `welverbindinglocatie` (`welverbindinglocatieid`, `locatie`) VALUES
(1, 'hout');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `geenverbindinglocatie`
--
ALTER TABLE `geenverbindinglocatie`
  ADD PRIMARY KEY (`geenverbindinglocatieid`);

--
-- Indexes for table `situatie`
--
ALTER TABLE `situatie`
  ADD PRIMARY KEY (`situatieid`);

--
-- Indexes for table `welverbindinglocatie`
--
ALTER TABLE `welverbindinglocatie`
  ADD PRIMARY KEY (`welverbindinglocatieid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `geenverbindinglocatie`
--
ALTER TABLE `geenverbindinglocatie`
  MODIFY `geenverbindinglocatieid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `situatie`
--
ALTER TABLE `situatie`
  MODIFY `situatieid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `welverbindinglocatie`
--
ALTER TABLE `welverbindinglocatie`
  MODIFY `welverbindinglocatieid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
