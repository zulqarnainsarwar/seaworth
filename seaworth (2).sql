-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2020 at 04:20 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seaworth`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `img`, `description`) VALUES
(18, 0, 'Leather Products', 'Leather.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.'),
(19, 0, 'Tactical Products', 'Tactical.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.'),
(20, 0, 'MotorBike Products', 'Bike .png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.'),
(21, 0, 'Sports Product', 'Sports-products.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.'),
(24, 21, 'Basketball Uniform', '', ''),
(25, 21, 'Baseball Uniform', '', ''),
(26, 21, 'Soccer Uniform', '', ''),
(27, 21, 'Tennis Uniform', '', ''),
(28, 21, 'Amercian Ball Uniform', '', ''),
(29, 21, 'Sublimated Hoodies', '', ''),
(30, 21, 'Sublimated Tees', '', ''),
(31, 21, 'Polo Shirt', '', ''),
(32, 19, 'Tactical Caps', '', ''),
(33, 19, 'Tactical Gloves', '', ''),
(34, 19, 'Tactical Pants', '', ''),
(35, 19, 'Tactical Uniform', '', ''),
(36, 19, 'Tactical Knee Elbow', '', ''),
(37, 19, 'Tactical Rescue Gloves', '', ''),
(38, 20, 'Racing Gloves', '', ''),
(39, 20, 'Motorbike Leather Suite', '', ''),
(40, 20, 'Safety Jacket\'s', '', ''),
(41, 20, 'Textile Jacket\'s', '', ''),
(42, 20, 'Textile Pants', '', ''),
(43, 18, 'Leather Jacket\'s', '', ''),
(44, 18, 'Wallet', '', ''),
(45, 18, 'Belts', '', ''),
(46, 18, 'Bags', '', ''),
(47, 21, 'Custom Apparel shirts', '', ''),
(48, 47, 'Custom Apparel Shorts', '', ''),
(49, 47, 'Sports Brac', '', ''),
(50, 47, 'Compression Pant\'s', '', ''),
(51, 47, 'American Football Glove\'s', '', ''),
(53, 47, 'Shorts', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(5) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `product_name` varchar(1000) NOT NULL,
  `product_image` varchar(5000) NOT NULL,
  `product_description` text NOT NULL,
  `cat_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_id`, `product_name`, `product_image`, `product_description`, `cat_id`) VALUES
(48, 'SW-1000', 'Leather Product', 'Leather.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 18),
(49, 'SW-1001', 'Tactial Product', 'Tactical.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 19),
(51, 'sw-1002', 'MototBike Product', 'Bike.png', 'MotorBike Product', 20),
(53, 'sw-1020', 'Leather-Wallet', 'Leather.png', 'Leather Wallet Is here', 44),
(54, 'sw-10034', 'Tactical Pants', 'img-gridbikeleather6.jpg', 'Tactical Pants is display here', 34),
(56, 'sw-10030', 'Sports Product ', 'Sports-products.png', 'Sports Products display here', 21),
(57, 'PS-2030', 'Polo Shirt', 'SW-274.jpg', 'Polo Shirt', 31),
(58, 'ST-2020', 'Sublimated Tees', 'SW-002.jpg', 'Sublimated Tees', 30),
(59, 'TC-3010', 'Tactical Caps', 'SW-013.jpg', 'Tactical Caps ', 32),
(60, 'RG-4010', 'Racing Gloves', 'Gloves.jpg', 'Racing Gloves', 38),
(61, 'TP-3020', 'Textile Pants', 'SW-027.jpg', 'Textile Pants ', 42);

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `email`, `password`) VALUES
(13, 'hafiz', 'hafiz@yahoo.com', '1122');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
