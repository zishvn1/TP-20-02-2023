CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY(id)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY(id)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

-- --------------------------------------------------------
--
-- Table structure for table `basket`
--
CREATE TABLE `basket` (
  `id` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY(id)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_520_ci;

-- --------------------------------------------------------
--
-- Table structure for table `customers`
--
CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  PRIMARY KEY(id)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

-- --------------------------------------------------------
--
-- Table structure for table `enquiries`
--
CREATE TABLE `enquiries` (
  `id` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Phone` int(11) NOT NULL,
  `Category` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Message` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY(id)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_520_ci;

-- --------------------------------------------------------
--
-- Table structure for table `orders`
--
CREATE TABLE `orders` (
  `orderid` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `postcode` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `payment` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `car` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY(id)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_520_ci;

-- --------------------------------------------------------
--
-- Table structure for table `reviews`
--
CREATE TABLE `reviews` (
  `Review Id` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Customer Id` int(11) NOT NULL,
  `Product Id` int(11) NOT NULL,
  `Car Sold` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Review` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Star Count` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Id` int(11) NOT NULL,
  `Vehicle Id` int(11) NOT NULL,
  `Product descr` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Admin Id` int(11) NOT NULL,
  `Order Id` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- Constraints for table `basket`
--
ALTER TABLE `basket`
  ADD CONSTRAINT `basket_ibfk_1` FOREIGN KEY (`Customer Id`) REFERENCES `customers` (`Id`),
  ADD CONSTRAINT `basket_ibfk_2` FOREIGN KEY (`Product Id`) REFERENCES `products` (`Id`);

--
-- Constraints for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD CONSTRAINT `enquiries_ibfk_1` FOREIGN KEY (`Customer Id`) REFERENCES `customers` (`Id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`Customer Id`) REFERENCES `customers` (`Id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`Customer Id`) REFERENCES `customers` (`Id`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`Product Id`) REFERENCES `products` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
