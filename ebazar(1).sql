-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2018 at 03:29 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebazar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(3) NOT NULL,
  `name` varchar(150) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(150) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `name`, `mobile`, `email`, `password`, `image`) VALUES
(1, 'Rishabh', 7206444297, 'mittal.rishabh1996@gmail.com', '12345', 'IMG_20161121_111712.jpg'),
(2, 'Anil Yadav', 8700021984, 'anilyadav721@gmail.com', 'anil', 'anilowner.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(5) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name`) VALUES
(1, 'mobiles'),
(6, 'laptops');

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `page_id` int(5) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `page_image` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`page_id`, `page_name`, `page_title`, `page_image`, `description`) VALUES
(1, 'Homepage', 'Ebaazar', 'elogo.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `display`
--

CREATE TABLE `display` (
  `id` int(2) NOT NULL,
  `name` varchar(100) NOT NULL,
  `displaySize` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `display`
--

INSERT INTO `display` (`id`, `name`, `displaySize`) VALUES
(1, 'mobiles', '4.7"'),
(2, 'mobiles', '5"'),
(3, 'mobiles', '5.5"'),
(4, 'laptops', '14"'),
(5, 'laptops', '15.6"'),
(6, 'laptops', '13"');

-- --------------------------------------------------------

--
-- Table structure for table `laptops`
--

CREATE TABLE `laptops` (
  `id` int(3) NOT NULL,
  `bname` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laptops`
--

INSERT INTO `laptops` (`id`, `bname`) VALUES
(1, 'Asus'),
(2, 'Acer'),
(3, 'HP'),
(4, 'Lenovo'),
(5, 'Dell'),
(10, 'Apple');

-- --------------------------------------------------------

--
-- Table structure for table `mobiles`
--

CREATE TABLE `mobiles` (
  `id` int(3) NOT NULL,
  `bname` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobiles`
--

INSERT INTO `mobiles` (`id`, `bname`) VALUES
(1, 'Mi Ui'),
(2, 'Samsung'),
(3, 'Nokia'),
(4, 'Moto'),
(5, 'Lenovo'),
(6, 'Micromax'),
(7, 'Apple');

-- --------------------------------------------------------

--
-- Table structure for table `processor`
--

CREATE TABLE `processor` (
  `id` int(3) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `processor`
--

INSERT INTO `processor` (`id`, `name`, `type`) VALUES
(1, 'laptops', 'AMD'),
(2, 'laptops', 'intel'),
(3, 'mobiles', 'MediaTek'),
(4, 'mobiles', 'Snap Dragon');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` bigint(7) NOT NULL,
  `user_id` int(5) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `price` bigint(7) NOT NULL,
  `description` varchar(200) NOT NULL,
  `category` varchar(150) NOT NULL,
  `seller` varchar(150) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `storage` varchar(100) NOT NULL,
  `ram` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `processor` varchar(100) NOT NULL,
  `image` varchar(150) NOT NULL,
  `pincode` bigint(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `user_id`, `productName`, `price`, `description`, `category`, `seller`, `brand`, `storage`, `ram`, `size`, `processor`, `image`, `pincode`) VALUES
(7, 1, 'Google Pixel', 1500, 'Nava phone hai jaldi se kharid looo', 'mobiles', 'Individual', 'Samsung', '64GB', '4GB', '5.5', 'Snap Dragon', 'Google Pixel8abdf836b.jpeg', 136119),
(8, 101, 'Galaxy Note 4', 20000, 'Nice phone with superb touch', 'mobiles', 'Individual', 'Samsung', '32GB', '2GB', '5', 'Snap Dragon', 'Galaxy-Note-4-Verizon-38.jpg', 121004),
(10, 1, 'Iphone 8', 50000, 'Black color with classy look', 'mobiles', 'Shopkeeper', 'Apple', '64GB', '4GB', '5.5', 'Snap Dragon', 'Iphone 8.jpg', 110044),
(14, 104, 'Apple 13" Mac Pro', 40000, 'High Quality assurance', 'laptops', 'Individual', 'Apple', '500GB', '8GB', '13', 'intel', 'apple 13inch.jpg', 121004),
(15, 1, 'Hp Spectre', 140170, 'Slim and light weight', 'laptops', 'Shopkeeper', 'HP', '500GB', '8GB', '13', 'intel', 'hp-spectre.jpg', 110044),
(16, 101, 'Lenovo T560 Thinkpad', 45999, 'Black color with longer durable life', 'laptops', 'Individual', 'Lenovo', '1TB', '4GB', '15.6', 'AMD', 'lenovo thinkpad 560.jpg', 110044);

-- --------------------------------------------------------

--
-- Table structure for table `ram`
--

CREATE TABLE `ram` (
  `id` int(3) NOT NULL,
  `name` varchar(100) NOT NULL,
  `rams` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ram`
--

INSERT INTO `ram` (`id`, `name`, `rams`) VALUES
(1, 'mobiles', '2GB'),
(2, 'mobiles', '3BG'),
(3, 'mobiles', '4GB'),
(4, 'mobiles', '6GB'),
(5, 'laptops', '2GB'),
(6, 'laptops', '4GB'),
(7, 'laptops', '8GB'),
(8, 'laptops', '12GB');

-- --------------------------------------------------------

--
-- Table structure for table `storage`
--

CREATE TABLE `storage` (
  `id` int(3) NOT NULL,
  `name` varchar(100) NOT NULL,
  `capacity` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `storage`
--

INSERT INTO `storage` (`id`, `name`, `capacity`) VALUES
(11, 'mobiles', '16GB'),
(12, 'mobiles', '32GB'),
(13, 'mobiles', '64GB'),
(14, 'laptops', '500GB'),
(15, 'laptops', '1TB'),
(16, 'laptops', '2TB');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `mobile` bigint(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `address`, `password`, `mobile`) VALUES
(101, 'Rahul', 'rahul@gmail.com', 'gandhi colony Samalkha', 'rahul123', 7410852963),
(104, 'Rajat', 'rajat@gmail.com', 'new colony palwal', 'rajat', 794612000967),
(105, 'Amit', 'amit_am@gmail.com', 'chandni chowk delhi', 'amit', 8798655412),
(106, 'Anubhav', 'anubhav@gmail.com', 'barwala zirakpur', 'anubhav', 7404541565),
(107, 'Sunil', 'sunil.skj@gmail.com', 'niyana hissar', 'sunil', 9729723110),
(108, 'Samalkha', 'nk.jangra@gmail.com', 'gandhi colony samalkha', 'nitin', 9991135923),
(109, 'Anil Kumar', 'anil.ak@gmail.com', 'bhiwani', 'anil', 7404142897),
(110, 'Ajay Taneja', 'ajay.taneja@gmail.com', 'sonipat', 'ajay', 8950532005),
(111, 'Ravi', 'ravichauhan@gmail.com', 'mahendergarh', 'ravi', 9416949235),
(112, 'Gulam Mustafa', 'gulam.mustafa@gmail.com', 'bihar', 'gulam', 7984653215),
(113, 'Neeraj', 'neeraj.garg@gmail.com', 'palwal', 'neeraj', 7845210963),
(114, 'Manoj', 'manoj@gmail.com', 'Baroli palwal', 'manoj', 8926405389);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `display`
--
ALTER TABLE `display`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laptops`
--
ALTER TABLE `laptops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobiles`
--
ALTER TABLE `mobiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `processor`
--
ALTER TABLE `processor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `ram`
--
ALTER TABLE `ram`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `storage`
--
ALTER TABLE `storage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `page_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `display`
--
ALTER TABLE `display`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `laptops`
--
ALTER TABLE `laptops`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `mobiles`
--
ALTER TABLE `mobiles`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `processor`
--
ALTER TABLE `processor`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` bigint(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `ram`
--
ALTER TABLE `ram`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `storage`
--
ALTER TABLE `storage`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
