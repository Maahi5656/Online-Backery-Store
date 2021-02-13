-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2021 at 10:47 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `purobackery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `UserID` int(11) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `UserName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`UserID`, `FullName`, `Email`, `Password`, `UserName`) VALUES
(1, 'Ajwad Maahi', 'ajwadmaahi56@gmail.com', '12345', 'maahi5656');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CategoryID` int(11) NOT NULL,
  `CategoryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CategoryID`, `CategoryName`) VALUES
(2, 'Savoury Items'),
(3, 'Danish & Bread'),
(4, 'Cookies'),
(5, 'Cake'),
(6, 'Dessert & Pastry'),
(7, 'Birthday Cake'),
(12, 'Soup');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `ItemID` int(11) NOT NULL,
  `ItemName` varchar(255) NOT NULL,
  `Price` float NOT NULL,
  `CategoryName` varchar(255) NOT NULL,
  `CategoryID` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`ItemID`, `ItemName`, `Price`, `CategoryName`, `CategoryID`, `image`) VALUES
(13, 'Red Velvet Pastry', 140, 'Dessert & Pastry', NULL, 'uploads/5fbbfb9c2e4342.06278876.jpg'),
(14, 'Carrot Cake Pastry', 140, 'Dessert & Pastry', NULL, 'uploads/5fbbfd087877e5.53520047.jpg'),
(15, 'Sugar Free Bread', 100, 'Danish & Bread', NULL, 'uploads/5fbbfe94cda653.96215540.jpg'),
(16, 'Chocolate Moist Cake (1000 gram)', 1700, 'Birthday Cake', NULL, 'uploads/5fbbff45627bf6.60115966.jpg'),
(17, 'Multi-grain Loaf', 150, 'Danish & Bread', NULL, 'uploads/5fbc00786ae817.25084974.jpg'),
(18, 'Orange Yogurt Pastry', 150, 'Dessert & Pastry', NULL, 'uploads/5fbc013bca5615.79934695.jpg'),
(19, 'Red Velvet Cake (500 gram)', 850, 'Birthday Cake', NULL, 'uploads/5fbc01ad1817f3.66298135.jpg'),
(20, 'Chocolate Moist Cake (500 gram)', 850, 'Birthday Cake', NULL, 'uploads/5fbc02203da951.62249322.jpg'),
(21, 'Chocolate Bread', 120, 'Danish & Bread', NULL, 'uploads/5fbc02a8031bf3.59984208.jpg'),
(22, 'Vegetable Soup', 100, 'Soup', NULL, 'uploads/5fbc030e013222.28054558.jpg'),
(23, 'Corn Soup', 120, 'Soup', NULL, 'uploads/5fbc0328c44916.85984847.jpg'),
(24, 'Thai Soup', 130, 'Soup', NULL, 'uploads/5fbc0395301381.35594768.jpg'),
(25, 'Brookies', 90, 'Dessert & Pastry', NULL, 'uploads/5fbc04dea448b8.17363914.jpg'),
(26, 'Cream Cheese Pound Cake', 450, 'Cake', NULL, 'uploads/70688902_526706781238560_2641140583342538752_o.jpg'),
(27, 'Florentine Cookies (200 gram)', 275, 'Cookies', NULL, 'uploads/71316828_538149403427631_4958202266176716800_n.jpg'),
(28, 'Red Velvet Cookies (200 gram)', 275, 'Cookies', NULL, 'uploads/5fbc074811a4d3.84270908.jpg'),
(29, 'Panna Cotta (Glass)', 130, 'Dessert & Pastry', NULL, 'uploads/5fbc07bad73172.03965698.jpg'),
(30, 'Brioche Bread', 150, 'Danish & Bread', NULL, 'uploads/5fbc07fbac6994.05879862.jpg'),
(31, 'Cheese & Pepper Cookies (200 gram)', 300, 'Cookies', NULL, 'uploads/5fbc0869b95457.60297820.jpg'),
(32, 'Chicken Pizza Bun', 90, 'Savoury Items', NULL, 'uploads/5fbc08ab299b79.54381560.jpg'),
(33, 'Chocolate Chip Cookie (200 gram) ', 275, 'Cookies', NULL, 'uploads/5fbc08e8183bd7.67571640.jpg'),
(34, 'Cream Horn', 100, 'Danish & Bread', NULL, 'uploads/5fbc0941b524f9.85976928.jpg'),
(35, 'Pistachio Cookies (200 gram)', 300, 'Cookies', NULL, 'uploads/5fbc09ca52cb99.89609446.jpg'),
(36, 'Mixed Fruits Danish', 100, 'Danish & Bread', NULL, 'uploads/5fbc0b0b09af54.37153999.png'),
(37, 'New York Baked Cheese Cake (1000 gram)', 2100, 'Birthday Cake', NULL, 'uploads/5fbc0bb7219665.98296563.jpg'),
(38, 'Tiramisu (Glass)', 150, 'Dessert & Pastry', NULL, 'uploads/5fbc0c794b5535.36605151.jpg'),
(39, 'Flavoured Macaroons', 50, 'Cookies', NULL, 'uploads/5fbc0db6995620.81805990.jpg'),
(40, 'Chicken Delight', 90, 'Savoury Items', NULL, 'uploads/5fbc0e3fa76700.99149903.jpg'),
(41, 'Baklava', 300, 'Dessert & Pastry', NULL, 'uploads/5fbc0f38f2e5d5.44093543.jpg'),
(42, 'Banana Bread', 120, 'Danish & Bread', NULL, 'uploads/5fbc0fc051dae1.33794472.jpg'),
(43, 'Chocolate Brownies', 90, 'Dessert & Pastry', NULL, 'uploads/5fbc1039bc6252.01846942.jpg'),
(44, 'Focaccia', 150, 'Danish & Bread', NULL, 'uploads/5fbc10eea77936.42204562.jpg'),
(45, 'Chocolate Mousse Cake (1000 gram)', 1700, 'Birthday Cake', NULL, 'uploads/5fbc128710eff2.09548774.jpg'),
(46, 'Butter Croissant', 75, 'Danish & Bread', NULL, 'uploads/5fbc12eb0827a9.54489788.jpg'),
(47, 'Rye Loaf', 150, 'Danish & Bread', NULL, 'uploads/5fbc136b1c9120.07445345.jpg'),
(48, 'Vanilla Cupcake', 135, 'Cake', NULL, 'uploads/5fbc13e5612684.44870884.jpg'),
(49, 'Chocolate Mousse Cake (500 gram)', 850, 'Birthday Cake', NULL, 'uploads/5fbc1484187c88.62855948.jpg'),
(50, 'Nutella Oreo Cheese Cake (1000 gram)', 2200, 'Birthday Cake', NULL, 'uploads/5fbc14cbd51176.11738134.jpg'),
(51, 'Chicken Sausage Roll', 40, 'Savoury Items', NULL, 'uploads/5fbc15191807e6.57184656.jpg'),
(52, 'Mango Mousse (Glass)', 130, 'Dessert & Pastry', NULL, 'uploads/5fbc15ff0e67e8.86433474.jpg'),
(53, 'Potato Burger Bun', 25, 'Danish & Bread', NULL, 'uploads/5fbc16b34d7853.04642799.jpg'),
(54, 'Chicken Curry Puff', 75, 'Savoury Items', NULL, 'uploads/5fbc176795adc2.05274588.jpg'),
(55, 'French Baguette', 60, 'Danish & Bread', NULL, 'uploads/5fbc17ae86de29.12400232.jpg'),
(56, 'Mocha Pastry', 120, 'Dessert & Pastry', NULL, 'uploads/5fbc182fa888c5.46568735.jpg'),
(57, 'Cheese Buns', 25, 'Danish & Bread', NULL, 'uploads/5fbc18d94be179.93623493.jpg'),
(58, 'Chili Chicken Roll', 70, 'Savoury Items', NULL, 'uploads/5fbc195c3b0014.45190404.png'),
(59, 'Chicken Sausage Pizza', 55, 'Savoury Items', NULL, 'uploads/5fbc1a55f0eca1.61008174.jpg'),
(60, 'White Chocolate Cluster', 55, 'Dessert & Pastry', NULL, 'uploads/5fbc1b2df18f87.18330157.jpg'),
(61, 'Dark Chocolate Cluster', 55, 'Dessert & Pastry', NULL, 'uploads/5fbc1b4f93f8c9.84848669.jpg'),
(62, 'Chocolate Croissant', 75, 'Danish & Bread', NULL, 'uploads/5fbc1bd9311d48.30390366.jpg'),
(63, 'Black Forest Cake (1000 gram)', 1700, 'Birthday Cake', NULL, 'uploads/5fbc1dcecefbd2.38417002.jpg'),
(64, 'Strawberry Mousse Cake (1000 gram)', 2200, 'Birthday Cake', NULL, 'uploads/5fcdd3c3a2d9f1.66717845.jpg'),
(65, 'Milky Way Pastry', 130, 'Dessert & Pastry', NULL, 'uploads/5fcdd7c7c3cc82.96785108.jpg'),
(66, 'Strawberry Cheese Cake (1000 gram)', 2500, 'Birthday Cake', NULL, 'uploads/5fcdd96e2ce059.70192889.jpg'),
(67, 'Tiramisu Cake (1000 gram)', 2000, 'Birthday Cake', NULL, 'uploads/5fcdded9ee3745.22797102.jpg'),
(68, 'Vanilla Cake (1000 gram)', 1350, 'Birthday Cake', NULL, 'uploads/5fcddf7e3c4bb5.05694951.jpg'),
(69, 'Doughnut', 80, 'Danish & Bread', NULL, 'uploads/5fcde1453ec129.63656058.jpg'),
(70, 'Chicken Fry Roll', 70, 'Savoury Items', NULL, 'uploads/5fcde249c4c511.57110444.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`ItemID`),
  ADD KEY `CategoryID` (`CategoryID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `ItemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`CategoryID`) REFERENCES `category` (`CategoryID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
