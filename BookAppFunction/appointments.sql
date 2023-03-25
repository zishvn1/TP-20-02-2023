-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2023 at 12:49 AM
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
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(6) UNSIGNED NOT NULL,
  `email` varchar(50) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `booking_number` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `email`, `first_name`, `last_name`, `date`, `time`, `booking_number`) VALUES
(2, 'zishanashfaq@gmail.com', 'Zishan', 'Ashfaq', '2023-04-25', '17:00:00', 'AA8UB9E4'),
(3, 'zishanashfaq@gmail.com', 'Zishan', 'Ashfaq', '2025-10-23', '17:00:00', 'AA5HAD8T'),
(4, 'zishanashfaq@gmail.com', 'Zishan', 'Ashfaq', '2008-05-05', '17:00:00', 'AABNFJY4'),
(5, 'zishanashfaq@gmail.com', 'Zishan', 'Ashfaq', '1995-06-04', '18:00:00', 'AA0G527U'),
(6, 'zishanashfaq@gmail.com', 'Zishan', 'Ashfaq', '2001-02-25', '20:20:00', 'AACGT32Y'),
(7, 'zishanashfaq@gmail.com', 'Zishan', 'Ashfaq', '2001-02-25', '20:20:00', 'AAT36J4O'),
(8, 'zishanashfaq@gmail.com', 'Zishan', 'Ashfaq', '2023-12-20', '18:00:00', 'AADXBC5N'),
(9, 'zishanashfaq@gmail.com', 'Zishan', 'Ashfaq', '2023-12-20', '18:00:00', 'AA5CFIGB'),
(10, 'zishanashfaq@icloud.com', 'Zishan', 'Ashfaq', '2025-02-20', '18:00:00', 'AAZXK7YH'),
(11, 'zishanashfaq@icloud.com', 'Zishan', 'Ashfaq', '2025-02-20', '18:00:00', 'AAKHSC1D'),
(12, 'zishanashfaq@gmail.com', 'Zishan', 'Ashfaq', '2025-10-20', '18:00:00', 'AA9Y24BT'),
(13, 'zishanashfaq@gmail.com', 'Zishan', 'Ashfaq', '2002-12-20', '10:50:00', 'AA814BF9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `booking_number` (`booking_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
