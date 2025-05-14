-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2024 at 07:49 AM
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
-- Database: `eco`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerid` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerid`, `username`, `firstname`, `lastname`, `email`, `contact`, `address`, `password`) VALUES
(10001, 'Vibhu', 'Vibhusha', 'Gangulel', 'test@gmail.com', '0701234567', 'Galle', '123'),
(10002, 'Dasantha', 'Dasantha', 'Ayya', 'dasa@gmail.com', '0771234567', 'Piliyandala', '1234'),
(10003, 'Test', 'Testing', 'Update', 'try@gmail.com', '0123456789', 'Testing Address', '1234'),
(10004, 'Testing', '', '', 'T@gmail.com', '', '', '123');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `itemid` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemid`, `name`, `price`, `amount`) VALUES
(20001, 'Men Shirt 1', 25.00, 10),
(20002, 'Men Shirt 2', 35.00, 10),
(20003, 'Men Shirt 3', 55.00, 10),
(20004, 'Women Dress 1', 25.00, 10),
(20005, 'Women Dress 2', 45.00, 10),
(20006, 'Women Dress 3', 55.00, 10),
(20007, 'Accessory 1', 15.00, 10),
(20008, 'Accessory 2', 20.00, 10),
(20009, 'Accessory 3', 25.00, 10);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(5) NOT NULL,
  `customerid` int(5) NOT NULL,
  `itemid` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `amount` int(10) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `size` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `customerid`, `itemid`, `name`, `amount`, `price`, `size`) VALUES
(1, 10001, 20001, 'Test', 2, 0.00, 'S'),
(2, 10001, 20002, 'Test2', 2, 70.00, 'M'),
(3, 10001, 20002, 'Test2', 2, 70.00, 'M'),
(4, 10001, 20003, 'Test3', 1, 55.00, 'L'),
(5, 10001, 20007, 'Test4', 1, 15.00, 'M'),
(6, 10001, 20005, 'Test5', 2, 90.00, 'S'),
(7, 10001, 20002, 'Test5', 3, 105.00, 'M'),
(8, 10001, 20007, 'Final Test', 3, 45.00, 'M'),
(9, 10002, 20003, 'Dasa', 3, 165.00, 'M'),
(10, 10002, 20007, 'Dasa', 2, 30.00, 'M');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`itemid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`),
  ADD KEY `customerid` (`customerid`),
  ADD KEY `itemid` (`itemid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10005;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `itemid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20010;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customerid`) REFERENCES `customer` (`customerid`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`itemid`) REFERENCES `items` (`itemid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
