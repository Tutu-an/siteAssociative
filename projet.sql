-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 08, 2022 at 05:45 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fiver_monica`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `id` int(11) NOT NULL,
  `user_id` varchar(77) DEFAULT NULL,
  `order_no` varchar(77) DEFAULT NULL,
  `status` varchar(33) DEFAULT 'processing'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `id` int(11) NOT NULL,
  `order_no` varchar(255) DEFAULT NULL,
  `user_id` varchar(233) DEFAULT NULL,
  `product_id` text DEFAULT NULL,
  `product_code` varchar(77) DEFAULT NULL,
  `price` varchar(200) DEFAULT NULL,
  `currency` varchar(23) DEFAULT NULL,
  `quantity` varchar(34) DEFAULT NULL,
  `username` text DEFAULT NULL,
  `user_email` varchar(222) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'shirt size S', 'T1S', 'product-images/shirt1.jpg', 10.00),
(2, 'shirt size S', 'T2S', 'product-images/shirt2.jpg', 10.00),
(3, 'shirt size S', 'T3S', 'product-images/shirt3.jpg', 10.00),
(4, 'shirt size S', 'T4S', 'product-images/shirt4.jpg', 10.00),
(5, 'shirt size M', 'T1M', 'product-images/shirt1.jpg', 15.00),
(6, 'shirt size M', 'T2M', 'product-images/shirt2.jpg', 15.00),
(7, 'shirt size M', 'T3M', 'product-images/shirt3.jpg', 15.00),
(8, 'shirt size M', 'T4M', 'product-images/shirt4.jpg', 15.00),
(9, 'shirt size L', 'T1L', 'product-images/shirt1.jpg', 20.00),
(10, 'shirt size L', 'T2L', 'product-images/shirt2.jpg', 20.00),
(11, 'shirt size L', 'T3L', 'product-images/shirt3.jpg', 20.00),
(12, 'shirt size L', 'T4L', 'product-images/shirt4.jpg', 20.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(8, 'tamilBoy', 'tamil@gmail.com', '0139a3c5cf42394be982e766c93f5ed0'),
(10, 'pachristo', 'pachristong@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(11, 'pachristo', 'chris@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
