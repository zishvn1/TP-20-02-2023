-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 03, 2023 at 12:53 PM
-- Server version: 8.0.32-0ubuntu0.20.04.2
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u_210194658_Product`
--

-- --------------------------------------------------------

--
-- Table structure for table `Audi`
--

CREATE TABLE `Audi` (
  `Id` int NOT NULL,
  `Make` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Model` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Price` int NOT NULL,
  `Year` int NOT NULL,
  `Fuel Type` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Color` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Break Horsepower` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Drive Type` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Quantity` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Mileage` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Condition of Car` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `BMW`
--

CREATE TABLE `BMW` (
  `Id` int NOT NULL,
  `Make` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Model` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Price` int NOT NULL,
  `Year` int NOT NULL,
  `Fuel Type` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Color` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Break Horsepower` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Drive Type` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Quantity` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Mileage` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Condition of Car` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Mercedes`
--

CREATE TABLE `Mercedes` (
  `Id` int NOT NULL,
  `Make` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Model` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Price` int NOT NULL,
  `Year` int NOT NULL,
  `Fuel Type` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Color` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Break Horsepower` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Drive Type` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Quantity` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Mileage` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Condition of Car` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Toyota`
--

CREATE TABLE `Toyota` (
  `Id` int NOT NULL,
  `Make` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Model` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Price` int NOT NULL,
  `Year` int NOT NULL,
  `Fuel Type` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Color` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Break Horsepower` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Drive Type` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Quantity` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Mileage` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Condition of Car` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Volkswagen`
--

CREATE TABLE `Volkswagen` (
  `Id` int NOT NULL,
  `Make` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Model` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Price` int NOT NULL,
  `Year` int NOT NULL,
  `Fuel Type` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Color` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Break Horsepower` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Drive Type` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Quantity` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Mileage` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Condition of Car` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Audi`
--
ALTER TABLE `Audi`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `BMW`
--
ALTER TABLE `BMW`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Mercedes`
--
ALTER TABLE `Mercedes`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Toyota`
--
ALTER TABLE `Toyota`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Volkswagen`
--
ALTER TABLE `Volkswagen`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Audi`
--
ALTER TABLE `Audi`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `BMW`
--
ALTER TABLE `BMW`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Mercedes`
--
ALTER TABLE `Mercedes`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Toyota`
--
ALTER TABLE `Toyota`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Volkswagen`
--
ALTER TABLE `Volkswagen`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `BMW`
--
ALTER TABLE `BMW`
  ADD CONSTRAINT `BMW_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `u_210194658_Inventory`.`Products` (`Vehicle Id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
