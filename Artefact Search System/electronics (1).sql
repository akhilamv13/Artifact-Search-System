-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2022 at 12:07 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electronics`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prodid` int(6) UNSIGNED NOT NULL,
  `prodtype` varchar(30) NOT NULL,
  `prodimg` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prodid`, `prodtype`, `prodimg`) VALUES
(1, 'Laptops', 'laptop.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `productdet`
--

CREATE TABLE `productdet` (
  `sellerid` int(4) NOT NULL,
  `pid` int(4) NOT NULL,
  `prodtype` varchar(30) NOT NULL,
  `prodtitle` varchar(30) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `proddesc` varchar(1000) NOT NULL,
  `prodkeyword` varchar(1000) NOT NULL,
  `color` varchar(100) DEFAULT NULL,
  `price` varchar(10) NOT NULL,
  `img1` varchar(30) NOT NULL,
  `img2` varchar(30) DEFAULT NULL,
  `img3` varchar(30) DEFAULT NULL,
  `stockstatus` varchar(30) NOT NULL,
  `availableat` varchar(50) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productdet`
--

INSERT INTO `productdet` (`sellerid`, `pid`, `prodtype`, `prodtitle`, `brand`, `proddesc`, `prodkeyword`, `color`, `price`, `img1`, `img2`, `img3`, `stockstatus`, `availableat`, `status`) VALUES
(7, 1, 'Laptops', 'Lenovo Ideapad 3 AMD Ryzen 5 5', 'Lenovo', 'Processor: 5th Gen AMD Ryzen 5 5500U | Speed: 2.1 ', 'Model Name: IdeaPad\r\nScreen Size : 15.6 Inches\r\nHa', 'Arctic Gre', '48018', 'img4.jpg', '', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prodid`);

--
-- Indexes for table `productdet`
--
ALTER TABLE `productdet`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prodid` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `productdet`
--
ALTER TABLE `productdet`
  MODIFY `pid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
