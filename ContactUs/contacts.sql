-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2023 at 10:08 PM
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
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `email`, `first_name`, `last_name`, `message`) VALUES
(1, 'zishanashfaq1@icloud.com', 'Zishan', 'Ashfaq', 'im testing this'),
(2, 'zishanashfaq1@icloud.com', 'Zishan', 'Ashfaq', 'im testing this'),
(3, 'zishanashfaq1@icloud.com', 'Zishan', 'Ashfaq', 'im testing this'),
(4, 'zishanashfaq@gmail.com', 'Zishan', 'Ashfaq', 'test 4'),
(5, 'zishanashfaq@gmail.com', 'Zishan', 'Ashfaq', 'test 5'),
(6, 'zishanashfaq@gmail.com', 'Zishan', 'Ashfaq', 'test 5'),
(7, 'zishanashfaq@gmail.com', 'Zishan', 'Ashfaq', 'test 5'),
(8, 'zishanashfaq@gmail.com', 'Zishan', 'Ashfaq', 'test 5'),
(9, 'zishanashfaq@gmail.com', 'Zishan', 'Ashfaq', 'test 6 '),
(10, 'zishanashfaq@gmail.com', 'Zishan', 'Ashfaq', 'test 6 '),
(11, 'zishanashfaq@gmail.com', 'Zishan', 'Ashfaq', 'test 7'),
(12, 'zishanashfaq@gmail.com', 'Zishan', 'Ashfaq', 'test 7'),
(13, 'zishanashfaq@gmail.com', 'Zishan', 'Ashfaq', 'test 8 '),
(14, 'zishanashfaq@gmail.com', 'Zishan', 'Ashfaq', 'test 8 '),
(15, 'zishanashfaq@gmail.com', 'Zishan', 'Ashfaq', 'test 8 '),
(16, 'zishanashfaq@gmail.com', 'Zishan', 'Ashfaq', 'test idk'),
(17, 'zishanashfaq@gmail.com', 'Zishan', 'Ashfaq', 'test idk'),
(18, 'zishanashfaq@gmail.com', 'Zishan', 'Ashfaq', 'test idk'),
(19, 'zishanashfaq@gmail.com', 'Zishan', 'Ashfaq', 'test ive lost count'),
(20, 'zishanashfaq@gmail.com', 'Zishan', 'Ashfaq', 'this should work'),
(21, 'zishanashfaq@gmail.com', 'Zishan', 'Ashfaq', 'IT WORKSSSSSS'),
(22, 'zishanashfaq@gmail.com', 'Zishan', 'Ashfaq', 'IT WORKSSSSSS'),
(23, 'zishanashfaq@gmail.com', 'Zishan', 'Ashfaq', 'tryna fix the message'),
(24, 'zishanashfaq@gmail.com', 'Zishan', 'Ashfaq', 'tryna fix the message'),
(25, 'zishanashfaq@gmail.com', 'Zishan', 'Ashfaq', 'i think i fixed it'),
(26, 'zishanashfaq@gmail.com', 'Zishan', 'Ashfaq', 'i think i fixed it'),
(27, 'zishanashfaq@gmail.com', 'Zishan', 'Ashfaq', 'i think i fixed it'),
(28, 'zishanashfaq@gmail.com', 'Zishan', 'Ashfaq', 'yh idk how to fix it i hate html lol'),
(29, 'zishanashfaq@gmail.com', 'Zishan', 'Ashfaq', 'yh idk how to fix it i hate html lol'),
(30, 'zishanashfaq@gmail.com', 'Zishan', 'Ashfaq', 'the last test before i push');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
