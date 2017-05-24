-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2017 at 02:16 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmo3`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryID` int(1) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryID`, `name`) VALUES
(5, 'Accesorii'),
(4, 'Cantitati mari'),
(2, 'Cantitati medii'),
(1, 'Cantitati mici'),
(28, 'CATEGORIE TEST1');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stockID` int(2) NOT NULL,
  `name` varchar(100) NOT NULL,
  `categoryID` int(2) NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `thumbnail` varchar(100) NOT NULL,
  `bigphoto` varchar(100) DEFAULT NULL,
  `topline` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stockID`, `name`, `categoryID`, `price`, `thumbnail`, `bigphoto`, `topline`, `description`) VALUES
(3, 'vin rose sticla mica', 1, '30.00', 'vin_rose_mic.jpg', NULL, 'vin rose sticla mica', 'Vin rose imbuteliat cantitate mica 0.125l'),
(4, 'vin alb sticla mica', 1, '30.00', 'vin_alb_mic.jpg', NULL, 'vin alb sticla mica', 'Vin alb imbuteliat cantitate mica 0.125l'),
(5, 'vin rosu sticla medie', 2, '40.00', 'vin_rosu_mediu.jpg', NULL, 'vin rosu sticla medie', 'Vin rosu imbuteliat cantitate medie 0.5l'),
(6, 'vin alb sticla medie', 2, '40.00', 'vin_alb_mediu.jpg', NULL, 'vin alb sticla medie', 'Vin alb imbuteliat sticla medie -0.5L'),
(7, 'vin rose sticla medie', 2, '50.00', 'vin_rose_mediu.jpg', NULL, 'vin rose sticla medie', 'Vin rose imbuteliat cantitate mediu 0.5l'),
(8, 'test2', 28, '70.00', 'noimage.jpg', 'smockback.jpg', 'test2', 'produs modificat test2'),
(9, 'Starfish stretch crop pants', 3, '50.00', 'stretch-crop-pants-tb.jpg', 'stretch-crop-pants.jpg', 'Cool, comfortable - and slimming!', 'Soft cotton jersey with stretch for ease. Cropped style is right for warmer weather Wide elastic waistband lies flat and smooth Invisible zip pocket at the waist is just the size of a credit card They just might be the most refined knit crops you\'ve ever worn - not to mention the most comfortable! Soft, shape-keeping fabric actually makes you look slimmer. A wide, full-elastic waistband is designed to lie flat and smooth. And there\'s a zip pocket just right for carrying a credit card or ID. 89% cotton/11% spandex.'),
(10, 'Starfish Cotton Spandex Terry Pants', 3, '65.00', 'terry-pants-tb.jpg', 'terry-pants.jpg', 'You\'ll want to live in these.', 'French terry is a soft blend of cotton and rayon-modal Wide rib-knit waistband has a drawstring to adjust the fit. Front pockets are stitched down, so they lie flat. Figure-balancing straight legs Everything about them is easy. From the sink-in soft French terry fabric to the rib-knit waistband to the straight-leg silhouette. Once you put them on, you\'ll want to live in them. 57% cotton/38% rayon-modal/5% spandex. '),
(11, 'Fit 2 Linen Cotton Wide Leg Pants', 3, '70.00', 'wide-leg-pants-tb.jpg', 'wide-leg-pants.jpg', 'A nautical nod.', 'Crisp, light blend of linen and cotton Smooth-fitting contour waist Functional drawstring adjusts the fit Offset side pockets, patch pockets in back Fit 2: Sits slightly below the natural waist, wide legs have a bit of ease in the thigh We\'ll hem them for free. Everything about them is easy: from wide-leg silhouette to drawstring waist to cool blend of cotton and linen. The overall shape is comfortable and just slightly slouchy (in a most appealing way). So you can wear pants at the height of the summer - and still feel cool doing it. 53% linen/47% cotton.'),
(12, 'sticla vin alb mare', 4, '50.00', 'vin_alb_mare.jpg', NULL, 'sticla vin alb mare', 'Vin alb imbuteliat cantitate mare 0.75l'),
(13, 'sticla vin rosu mare', 4, '50.00', 'vin_rosu_mare.jpg', NULL, 'sticla vin rosu mare', 'Vin rosu imbuteliat cantitate mare 0.75l'),
(14, 'sticla vin rose mare', 4, '50.00', 'vin_rose_mare.jpg', NULL, 'sticla vin rose mare', 'Vin rose imbuteliat cantitate mare 0.75l'),
(15, 'set pahare vin rosu', 5, '180.00', 'pahar_vin_rosu.jpg', NULL, 'set pahare vin rosu', 'Set pahare pentru servirea vinului rosu corpolent'),
(16, 'set pahare vin alb', 5, '160.00', 'pahar_vin_alb.jpg', NULL, 'set pahare vin alb', 'Set pahare pentru servirea vinurilor albe, cu frucuozitate si aromate. '),
(17, 'set pahare vin rose', 5, '150.00', 'pahar_vin_rose.jpg', NULL, 'set pahare vin rose', 'Set pahare servire vinuri rose sau vinuri rosii tinere parfumate'),
(18, 'test1', 28, '555.00', 'noimage.jpg', NULL, 'topline test1', 'test1test1test1test1test1test1test1'),
(19, 'vin rosu sticla mica ', 1, '30.00', 'vin_rosu_mic.jpg', NULL, 'vin rosu sticla mica ', 'Vin rosu imbuteliat cantitate mica 0.125l'),
(20, 'tirbuson inox', 5, '250.00', 'tirbuson_inox.jpg', NULL, 'tirbuson inox', 'Tirbuson inox foarte resistent, denota eleganta si rafinament');

-- --------------------------------------------------------

--
-- Table structure for table `tabelcumparaturi`
--

CREATE TABLE `tabelcumparaturi` (
  `id` int(11) NOT NULL,
  `stockID` int(2) NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `UserclientID` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(1) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryID`),
  ADD UNIQUE KEY `categoryID_2` (`categoryID`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `categoryID` (`categoryID`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stockID`),
  ADD KEY `description` (`description`),
  ADD KEY `name` (`name`),
  ADD KEY `categoryID` (`categoryID`),
  ADD KEY `price` (`price`),
  ADD KEY `thumbnail` (`thumbnail`),
  ADD KEY `bigphoto` (`bigphoto`),
  ADD KEY `topline` (`topline`);

--
-- Indexes for table `tabelcumparaturi`
--
ALTER TABLE `tabelcumparaturi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `UserclientID` (`UserclientID`),
  ADD KEY `stockID` (`stockID`),
  ADD KEY `name` (`name`),
  ADD KEY `item_quantity` (`item_quantity`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`),
  ADD KEY `userID` (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stockID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabelcumparaturi`
--
ALTER TABLE `tabelcumparaturi`
  ADD CONSTRAINT `tabelcumparaturi_ibfk_1` FOREIGN KEY (`stockID`) REFERENCES `stock` (`stockID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
