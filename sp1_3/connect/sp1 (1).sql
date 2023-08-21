-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2017 at 04:28 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sp1`
--

-- --------------------------------------------------------

--
-- Table structure for table `buylist`
--

CREATE TABLE `buylist` (
  `id` int(24) NOT NULL,
  `user_id` int(24) NOT NULL,
  `pro_name` varchar(24) NOT NULL,
  `product_id` int(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buylist`
--

INSERT INTO `buylist` (`id`, `user_id`, `pro_name`, `product_id`) VALUES
(25, 5, 'TSHIRT', 18),
(27, 6, 'POLOSHIRT', 16),
(28, 5, 'TSHIRT', 18);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(6) UNSIGNED NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `signup_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `signup_date`) VALUES
(1, 'MEN', '2017-03-18 12:18:24'),
(2, 'WOMEN', '2017-03-18 12:31:13'),
(3, 'OLDCHILD', '2017-03-19 15:33:36'),
(4, 'OLDMAN', '2017-03-19 13:16:55'),
(13, 'TEST1', '2017-03-19 13:06:14');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(6) UNSIGNED NOT NULL,
  `userid` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `phonenumber` int(24) NOT NULL,
  `email` varchar(24) NOT NULL,
  `days` int(24) NOT NULL,
  `productid` int(6) NOT NULL,
  `quantity` int(20) NOT NULL,
  `productname` varchar(24) NOT NULL,
  `accountspay` int(24) NOT NULL,
  `accountrec` int(100) NOT NULL,
  `emp` varchar(24) NOT NULL,
  `signup_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `userid`, `location`, `phonenumber`, `email`, `days`, `productid`, `quantity`, `productname`, `accountspay`, `accountrec`, `emp`, `signup_date`) VALUES
(7, '5', 'fefef', 2147483647, 'frefefeer', 1, 7, 0, 'tshirt', 0, 1140, '', '2017-02-28 06:23:20'),
(8, '9', 'fsfsf', 1913997631, 'drkjitu24@gmail.com', 1, 7, 0, 'tshirt', 0, 1140, '', '2017-03-01 11:01:11'),
(9, '5', 'rerer', 0, 'jitu@gmail.com', 1, 12, 0, 'dggd', 0, 284444, '', '2017-03-01 11:01:26'),
(66, '5', 'yyfff', 1913997631, 'drkjitu24@gmail.com', 1, 17, 1, 'BALL', 0, 2500, 'hridoy@gmail.com', '2017-03-23 07:02:05'),
(67, '5', 'yyfff', 1913997631, 'drkjitu24@gmail.com', 1, 18, 1, 'TSHIRT', 0, 40909091, 'hridoy@gmail.com', '2017-03-23 07:01:52'),
(68, '5', 'yyfff', 1913997631, 'drkjitu24@gmail.com', 1, 19, 1, 'JEANS', 1500, 0, '', '2017-03-21 21:13:53'),
(69, '5', 'hjj', 1913997631, 'drkjitu24@gmail.com', 1, 17, 1, 'BALL', 0, 2500, 'hridoy@gmail.com', '2017-03-25 10:37:37'),
(70, '5', 'aghdadha', 1680889924, 'drkjitu24@gmail.com', 1, 18, 4, 'TSHIRT', 40909091, 0, '', '2017-03-25 10:17:53'),
(72, '5', '33131', 1913997631, 'drkjitu24@gmail.com', 1, 20, 3, 'GAUN', 386363, 0, '', '2017-03-25 10:19:32'),
(73, '5', '33131', 1913997631, 'drkjitu24@gmail.com', 1, 17, 6, 'BALL', 2500, 0, '', '2017-03-25 10:19:32'),
(74, '5', 'hyhy', 1913997631, 'g@gmail.com', 1, 19, 1, 'JEANS', 1500, 0, '', '2017-03-25 10:41:02'),
(75, '5', '2adad', 1913997631, 'drkjitu24@gmail.com', 1, 16, 5, 'POLOSHIRT', 232323, 0, '', '2017-03-25 10:59:25'),
(76, '6', 'dvdvd', 1913997631, 'drkjitu24@gmail.com', 1, 16, 2, 'POLOSHIRT', 232323, 0, '', '2017-03-25 11:04:55');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `buying_price` int(24) NOT NULL,
  `supplier_id` int(24) NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `uniqueP` varchar(5) DEFAULT NULL,
  `signup_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `quantity`, `price`, `buying_price`, `supplier_id`, `category_id`, `image`, `discount`, `uniqueP`, `signup_date`) VALUES
(16, 'POLOSHIRT', 10, 232323, 5336666, 3, 1, 'images/product/586a04dda86a3.png', 232323, '1', '2017-03-25 11:04:55'),
(17, 'BALL', 18, 2500, 2000, 3, 1, 'images/product/5868a11f72ec6.jpg', 2500, '1', '2017-03-25 10:19:32'),
(18, 'TSHIRT', 46, 45454545, 22323, 2, 1, 'images/product/586b4e4ed19fb.jpg', 40909091, '1', '2017-03-25 10:17:53'),
(19, 'JEANS', 66, 1500, 600, 3, 1, 'images/product/586b4f36dca8e.jpg', 1500, '0', '2017-03-25 10:41:58'),
(20, 'GAUN', 32, 454545, 2323, 2, 2, 'images/product/586b50b287f31.jpg', 386363, '1', '2017-03-25 10:19:32'),
(21, 'TOPS', 20, 454545, 2323, 2, 2, 'images/product/58b047717cab2.jpg', 386363, '1', '2017-03-21 21:05:20');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(20) NOT NULL,
  `name` varchar(24) NOT NULL,
  `contact` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `name`, `contact`) VALUES
(2, 'KELVIN CLEIN', '131313'),
(3, 'SFSF', '98989800');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT '0',
  `signup_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `password`, `birthday`, `gender`, `phone`, `role`, `signup_date`) VALUES
(1, 'jitu', 'ghosh', 'drkjitu24@gmail.com', '123456789j', '1960-01-01', '1', '01913997631', 1, '2017-02-03 21:03:57'),
(2, 'raju', 'das', 'drk@gmail.com', '123456789r', '0000-00-00', '1', '01913997632', 2, '2017-02-03 22:02:23'),
(3, 'hridoy', 'das', 'hridoy@gmail.com', '123456789h', '0000-00-00', '2', '01913997633', 2, '2017-02-03 22:03:39'),
(5, 'anu', 'das', 'anu@gmail.com', '123456789a', '1960-01-01', '1', '01913997635', 0, '2017-02-04 01:28:43'),
(6, 'debu', 'das', 'debu@gmail.com', '123456789d', '1960-01-01', '1', '01913997621', 0, '2017-02-04 02:47:20'),
(7, 'erer', 'rerer', 'hridoy98@gmail.com', '12345678dx', '0000-00-00', '1', '01913997652', 2, '2017-02-28 07:00:53'),
(9, 'sakhwat', 'hossain', 'sakhawat@gmail.com', '123456789s', '1960-01-01', '1', '01913997664', 0, '2017-03-01 10:09:08'),
(10, 'tgtg', 'rfrfrfrf', 'hridoysw@gmail.com', '123456789r', '0000-00-00', '1', '12345969650', 2, '2017-03-18 12:57:21'),
(11, 'jiut', 'wdswd', 'anu2@gmail.com', '123456789k', '1960-01-01', '1', '01913997669', 0, '2017-03-26 06:18:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buylist`
--
ALTER TABLE `buylist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buylist`
--
ALTER TABLE `buylist`
  MODIFY `id` int(24) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
