-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2023 at 09:48 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars1`
--

CREATE TABLE `cars1` (
  `cars_id` int(20) NOT NULL,
  `make` varchar(120) NOT NULL,
  `model` varchar(100) NOT NULL,
  `year` int(20) NOT NULL,
  `price` int(20) NOT NULL,
  `mileage` int(20) NOT NULL,
  `drivetype` varchar(50) NOT NULL,
  `fueltype` varchar(20) NOT NULL,
  `color` varchar(255) NOT NULL,
  `conditionofcar` varchar(255) NOT NULL,
  `car_status` enum('0','1') NOT NULL COMMENT '0-active,1-inactive'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cars1`
--

INSERT INTO `cars1` (`cars_id`, `make`, `model`, `year`, `price`, `mileage`, `drivetype`, `fueltype`, `color`, `conditionofcar`, `car_status`) VALUES
(1, 'Audi', 'A3', 2016, 16000, 54000, 'Automatic', 'Petrol', 'Black', 'Used', '0'),
(2, 'Audi', 'A1', 2018, 12000, 36000, 'Manual', 'Petrol', 'White', 'Used', '0'),
(3, 'BMW', '3 Series', 2016, 19000, 26000, 'Automatic', 'Petrol', 'Red', 'Used', '0'),
(4, 'BMW', '4 Series', 2018, 29000, 36000, 'Automatic', 'Diesel', 'Grey', 'Used', '0'),
(5, 'Volkswagen', 'Golf', 2014, 13000, 55000, 'Manual', 'Petrol', 'Black', 'Used', '0'),
(6, 'Volkswagen', 'Passat', 2013, 21000, 12000, 'Automatic', 'Diesel', 'Green', 'Used', '0'),
(7, 'Mercedes', 'A Class', 2015, 19000, 22000, 'Automatic', 'Petrol', 'Blue', 'Used', '0'),
(8, 'Toyota', 'Yaris', 2022, 23000, 200, 'Manual', 'Petrol', 'Grey', 'New', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars1`
--
ALTER TABLE `cars1`
  ADD PRIMARY KEY (`cars_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars1`
--
ALTER TABLE `cars1`
  MODIFY `cars_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
