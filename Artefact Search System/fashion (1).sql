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
-- Database: `fashion`
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
(1, 'Kurtha', 'kurtha.jpg');

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
(7, 1, 'Kurtha', 'Women Embroidered Viscose', 'VF Rajasthan ', 'Kurtis is one of the most popular ethnic wear among women. They are stylish, comfortable, and versatile clothing options. Depending on the style and type you want, you can explore a wide variety available online and choose as per your preferences. You can opt for these clothing options for different occasions and dress elegantly. There are simple style options that are appropriate for casual wear and detailed options for special events. You can choose colours such as white, pink, blue, red, green, maroon, multicolour, silver, orange, purple, and more. A wide choice of colours, patterns, and designs are available online in these Indian wear. You can pair them with different types of bottom wear such as churidars, leggings, palazzos, or even with jeans. You can choose from styles such as printed, striped, embroidered, embellished, mirror work, asymmetric, kalamkari work, and more. Explore the latest Kurti collection online from the comfort of your home. You can prefer fabrics like pure c', 'Ideal For : Women\r\nLength Type : Calf Length\r\nBrand Color : BLACK\r\nOccasion : Formal\r\nPattern : Printed\r\nType : Frontslit\r\nFabric : Viscose Rayon\r\nNeck : Round Neck\r\nSleeve : 3/4 Sleeve\r\nNumber of Con', 'Black , Blue', '560', 'kurtha.jpg', 'kurtha1.jpg', 'kurtha2.jpeg', 'instock', 'Flipkart Amazon Direct order through contact', 0),
(7, 2, 'Kurtha', 'Women Embroidered Viscose', 'VF Rajasthan', 'Double your fashion flair as you wear this beautif', 'Ideal For : Women\r\nLength Type : Calf Length\r\nBran', 'Black', '530', 'kurtha2.jpeg', 'kurtha1.jpg', '', 'instock', 'Flipkart , Amazon , Myntra , Delivery through dire', 0),
(7, 4, 'Kurtha', 'kurtha', 'W', 'nyc', 'super', 'Black', '250', 'product-1.jpg', '', '', 'outstock', 'flipkart', 0),
(7, 5, 'Kurtha', 'ty67ur8', '7ut6', 'nyc', 'super', 'Black', '250', 'product-1.jpg', '', '', 'outstock', 'flipkart', 1);

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
  MODIFY `prodid` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `productdet`
--
ALTER TABLE `productdet`
  MODIFY `pid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
