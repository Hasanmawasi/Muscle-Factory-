-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2024 at 09:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test2`
--

-- --------------------------------------------------------

--
-- Table structure for table `bmi`
--

CREATE TABLE `bmi` (
  `name` varchar(80) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `age` int(11) NOT NULL,
  `weight` float NOT NULL,
  `height` int(11) NOT NULL,
  `bmiR` float NOT NULL,
  `category` varchar(20) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bmi`
--

INSERT INTO `bmi` (`name`, `gender`, `age`, `weight`, `height`, `bmiR`, `category`, `userid`) VALUES
('hasan', 'male', 12, 313, 121, 213.78, 'Obese', 0),
('hasna', 'male', 12, 12, 1212, 0.08, 'Underweight', 6),
('jhad', 'male', 23, 78, 180, 24.07, 'Normal weight', 6),
('mahdi', 'male', 21, 95, 187, 27.17, 'Overweight', 6),
('hasan', 'male', 14, 76, 179, 23.72, 'Normal weight', 6);

-- --------------------------------------------------------

--
-- Table structure for table `cardregister`
--

CREATE TABLE `cardregister` (
  `cardid` int(11) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cardregister`
--

INSERT INTO `cardregister` (`cardid`, `userid`) VALUES
(3, 6),
(3, 6),
(2, 6),
(3, 6),
(3, 6),
(3, 6),
(3, 6),
(3, 6),
(2, 6),
(3, 6),
(2, 6),
(2, 6),
(2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `classID` int(11) NOT NULL,
  `classImage` varchar(100) NOT NULL,
  `classDesc` text NOT NULL,
  `className` varchar(50) NOT NULL,
  `classCat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`classID`, `classImage`, `classDesc`, `className`, `classCat`) VALUES
(1, 'photos/class1.jpg', 'Improve your strength and muscle tone with our strength training class.', 'Strength Training Class', 1),
(2, 'photos/class2.jpg', 'Find balance, flexibility, and inner peace with our yoga class. Suitable for all fitness levels, this class focuses  ', 'Yoga Class', 2),
(3, 'photos/class2.jpg', 'Get your heart pumping and calories burning with our cardio kickboxing class. ', 'Cardio Kickboxing Class', 3),
(4, 'photos/class1.jpg', 'it is a selfe defience sport', 'karatieh', 4),
(8, 'photos/classes-img/885screenshot 2024-01-08 091739.png', 'mohmad ', 'hasan', 0);

-- --------------------------------------------------------

--
-- Table structure for table `coaches`
--

CREATE TABLE `coaches` (
  `coachName` varchar(80) NOT NULL,
  `coachImage` varchar(100) NOT NULL,
  `coachDesc` text NOT NULL,
  `coachId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coaches`
--

INSERT INTO `coaches` (`coachName`, `coachImage`, `coachDesc`, `coachId`) VALUES
('hasan', 'photos/coaches/253logo.png', 'mohmad coach kamn', 1),
('hasan', 'photos/coaches/510dfd.jpg', 'hasan is stronger than mohamad', 2),
('hasan', 'photos/coaches/471dfd.jpg', 'hasan is stronger than mohamad', 3);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `contactus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `contactus`) VALUES
('xzcv', ' zxvc', 'zxcv'),
('Hasan Hasan', ' hhhh@gmail.com', 'hello webiste'),
('hleo', ' asdf', 'asdf'),
('hleo', ' asdf', 'asdf'),
('hleo', ' asdf', 'asdf'),
('rrfdfrd', ' ali@gmail.com', 'gcvcvc'),
('', ' ', '');

-- --------------------------------------------------------

--
-- Table structure for table `pcard`
--

CREATE TABLE `pcard` (
  `CardID` int(11) NOT NULL,
  `month` varchar(20) NOT NULL,
  `price` varchar(10) NOT NULL,
  `descr` varchar(100) NOT NULL,
  `list1` varchar(70) NOT NULL,
  `list2` varchar(70) NOT NULL,
  `list3` varchar(70) NOT NULL,
  `btn` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pcard`
--

INSERT INTO `pcard` (`CardID`, `month`, `price`, `descr`, `list1`, `list2`, `list3`, `btn`) VALUES
(2, '1 month', '12$', 'web advanced', ';alf alkdjf dhhb', ';alf alkdjf dhhb', ';alf alkdjf dhhb', 'get start '),
(3, '1 month', '18$', 'mathhh', ';alf alkdjf dhhb', ';alf alkdjf dhhb', ';alf alkdjf dhhb', 'get start ');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `company` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image_url`, `company`) VALUES
(1, 'Product 1', 'Description for product 1', 29.99, 'photos/shop-img/product1.jpg', 'company1'),
(2, 'Product 2', 'Description for product 2', 19.99, 'photos/shop-img/product3.jpg', 'company1'),
(3, 'Product 3', 'Description for product 3', 39.99, 'photos/shop-img/eq1.jpg', 'company3'),
(4, 'Product 1', 'Description for product 1', 29.99, 'photos/shop-img/product2.jpg', 'company1'),
(5, 'Product 2', 'Description for product 2', 19.99, 'photos/shop-img/product5.jpg', 'company1'),
(6, 'Product 3', 'Description for product 3', 39.99, 'photos/shop-img/eq2.jpg', 'company3'),
(11, 'protien', 'it is a new protien', 18.00, 'photos/shop-img/product10.jpg', 'company1'),
(12, 'hasan', 'its new protien', 32.00, 'photos/shop-img/eq3.jpg', 'company3'),
(13, 'weigh protien', 'it is a new protien', 23.00, 'photos/shop-img/eq4.jpg', 'company3'),
(15, 'protien', 'it is a new protien', 123.00, 'photos/shop-img/34dflevel0.jpg', 'company1'),
(16, 'NiKE', 'Tishert', 13.00, 'photos/shop-img/900pngegg.png', 'company2'),
(17, 'T-shirt', 'NIKE T-Shirt', 20.00, 'photos/shop-img/829900pngegg.png', 'company2'),
(18, 'T-shirt', 'NIKE T-Shirt', 20.00, 'photos/shop-img/883900pngegg.png', 'company2'),
(19, 'dumbles', 'dumbles', 30.00, 'photos/shop-img/117eq5.jpg', 'company3'),
(20, 'gloves', 'gloves', 15.00, 'photos/shop-img/609eq6.jpg', 'company3'),
(21, 'fd', 'dwd', 12.00, 'photos/shop-img/7475 things you need to build a home gym for less than $100.jpg', 'company3'),
(22, 'fd', 'dwd', 12.00, 'photos/shop-img/3045 things you need to build a home gym for less than $100.jpg', 'company3');

-- --------------------------------------------------------

--
-- Table structure for table `shopbag`
--

CREATE TABLE `shopbag` (
  `productId` int(11) NOT NULL,
  `useremail` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shopbag`
--

INSERT INTO `shopbag` (`productId`, `useremail`) VALUES
(1, 'hasan@gmail.com'),
(1, 'hasan@gmail.com'),
(1, 'hhh@gmail.com'),
(1, 'ali@gmail.com'),
(2, 'ali@gmail.com'),
(12, 'ali@gmail.com'),
(12, 'ali@gmail.com'),
(1, 'hasan@gmail.com'),
(12, 'hasan@gmail.com'),
(3, 'hasan@gmail.com'),
(5, ''),
(1, 'hasan@gmail.com'),
(3, 'hasan@gmail.com'),
(2, 'hasan@gmail.com'),
(4, 'hasan@gmail.com'),
(4, 'hasan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `ID` int(11) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`ID`, `email`, `password`, `username`, `role`) VALUES
(6, 'hasan@gmail.com', '907e2c99b185a8b774ec2c06ecd035cc', 'hasan', 2),
(7, 'mmm@gmail.com', '77997c1619eebd9995b0b59365a9774e', 'mohamad', 1),
(8, 'ali@gmail.com', '3cd92dd29a718c1c90153a2d97edc41f', 'ali', 2),
(9, 'mohamad@gmail.com', '4f545f2282118853d84003632a0617d7', 'mohamad', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bmi`
--
ALTER TABLE `bmi`
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `cardregister`
--
ALTER TABLE `cardregister`
  ADD KEY `cardid` (`cardid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`classID`,`className`);

--
-- Indexes for table `coaches`
--
ALTER TABLE `coaches`
  ADD PRIMARY KEY (`coachId`);

--
-- Indexes for table `pcard`
--
ALTER TABLE `pcard`
  ADD PRIMARY KEY (`CardID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopbag`
--
ALTER TABLE `shopbag`
  ADD KEY `productId` (`productId`),
  ADD KEY `useremail` (`useremail`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`ID`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `classID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `coaches`
--
ALTER TABLE `coaches`
  MODIFY `coachId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pcard`
--
ALTER TABLE `pcard`
  MODIFY `CardID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cardregister`
--
ALTER TABLE `cardregister`
  ADD CONSTRAINT `cardregister_ibfk_2` FOREIGN KEY (`cardid`) REFERENCES `pcard` (`CardID`),
  ADD CONSTRAINT `cardregister_ibfk_3` FOREIGN KEY (`userid`) REFERENCES `signup` (`ID`);

--
-- Constraints for table `shopbag`
--
ALTER TABLE `shopbag`
  ADD CONSTRAINT `shopbag_ibfk_1` FOREIGN KEY (`productId`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
