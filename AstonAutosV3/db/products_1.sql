--
-- Table structure for table `audi`
--
CREATE TABLE `audi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `make` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `price` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `fueltype` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `breakhorsepower` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `drivetype` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `mileage` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `conditionofcar` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY(id)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_520_ci;

-- --------------------------------------------------------
--
-- Table structure for table `bmw`
--
CREATE TABLE `bmw` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `make` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `price` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `fueltype` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `breakhorsepower` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `drivetype` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `mileage` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `conditionofcar` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY(id)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_520_ci;

-- --------------------------------------------------------
--
-- Table structure for table `mercedes`
--
CREATE TABLE `mercedes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `make` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `price` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `fueltype` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `breakhorsepower` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `drivetype` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `mileage` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `conditionofcar` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY(id)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_520_ci;

-- --------------------------------------------------------
--
-- Table structure for table `toyota`
--
CREATE TABLE `toyota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `make` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `price` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `fueltype` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `breakhorsepower` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `drivetype` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `mileage` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `conditionofcar` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY(id)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_520_ci;

-- --------------------------------------------------------
--
-- Table structure for table `volkswagen`
--
CREATE TABLE `volkswagen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `make` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `price` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `fueltype` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `breakhorsepower` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `drivetype` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `mileage` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `conditionofcar` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY(id)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_520_ci;

