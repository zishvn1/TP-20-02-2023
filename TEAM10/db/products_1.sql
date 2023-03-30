--

-- Table structure for table `audi`

--

CREATE TABLE
    `audi` (
        `id_toyota` int(11) NOT NULL AUTO_INCREMENT,
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
        `images` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        `images2` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        `images3` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        `images4` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        `images5` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        `images6` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        PRIMARY KEY(id)
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_520_ci;

CREATE TABLE
    `java_toyota` (
        `id_toyota` int(11) NOT NULL AUTO_INCREMENT,
        `make` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        `model` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        `price` varchar(255) NOT NULL,
        `year` varchar(255) NOT NULL,
        `fueltype` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        `color` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        `breakhorsepower` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        `drivetype` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        `quantity` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        `mileage` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        PRIMARY KEY(id_toyota)
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--

-- Table structure for table `bmw`

--

CREATE TABLE
    `java_bmw` (
        `id_bmw` int(11) NOT NULL AUTO_INCREMENT,
        `make` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        `model` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        `price` varchar(255) NOT NULL,
        `year` varchar(255) NOT NULL,
        `fueltype` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        `color` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        `breakhorsepower` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        `drivetype` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        `quantity` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        `mileage` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        PRIMARY KEY(id)
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--

-- Table structure for table `mercedes`

--

CREATE TABLE
    `java_mercedes` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `make` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        `model` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        `price` varchar(255) NOT NULL,
        `year` varchar(255) NOT NULL,
        `fueltype` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        `color` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        `breakhorsepower` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        `drivetype` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        `quantity` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        `mileage` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        PRIMARY KEY(id)
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--

-- Table structure for table `toyota`

--

CREATE TABLE
    `toyota` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `make` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        `model` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        `price` varchar(255) NOT NULL,
        `year` varchar(255) NOT NULL,
        `fueltype` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        `color` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        `breakhorsepower` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        `drivetype` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        `quantity` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        `mileage` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        PRIMARY KEY(id)
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--

-- Table structure for table `volkswagen`

--

CREATE TABLE
    `volkswagen` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `make` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        `model` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        `price` varchar(255) NOT NULL,
        `year` varchar(255) NOT NULL,
        `fueltype` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        `color` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        `breakhorsepower` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        `drivetype` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        `quantity` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        `mileage` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
        PRIMARY KEY(id)
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_520_ci;