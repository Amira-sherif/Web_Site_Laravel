-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2021 at 11:34 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `image`) VALUES
(1, 'Amira', '123456', 'team1.jpg'),
(3, 'Sherif', '123456', 'team2.jpg'),
(5, 'youssef', '123456', 'team3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name_cat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name_cat`) VALUES
(1, 'Bread'),
(2, 'Dessert'),
(3, 'Fast_Food'),
(4, 'BreakFast');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name_product` varchar(100) NOT NULL,
  `image_product` varchar(100) NOT NULL,
  `description_product` text NOT NULL,
  `price_product` varchar(30) NOT NULL,
  `comment_product` text NOT NULL,
  `discount_product` varchar(30) NOT NULL,
  `rate_product` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `c_date` date NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name_product`, `image_product`, `description_product`, `price_product`, `comment_product`, `discount_product`, `rate_product`, `cat_id`, `c_date`, `stock`) VALUES
(2, 'Belgian Waffle', '4.jpg', 'Vanilla flavored batter with malted flour 7.50', '7.50', '', '20%', 80, 2, '2021-09-01', 9),
(3, 'pizza', '5.jpg', 'Margrit_pizza', '7.50', '', '20%', 0, 3, '2021-09-04', 9),
(4, 'Bread Basket', '9.jpg', 'Assortment of fresh baked fruit breads and muffins ', '5.50', '', '20%', 0, 1, '2021-09-04', 20),
(6, 'Blueberry Pancakes', '7.jpg', 'With syrup, butter and lots of berries 8.50', '8.50', '', '20%', 0, 2, '2021-09-04', 9),
(7, 'Honey Almond Granola with Fruits', '6.jpg', 'Natural cereal of honey toasted oats, raisins, almonds and dates 7.00', '7.00', '', '20%', 0, 2, '2021-09-04', 20),
(8, 'Scrambled eggs', '8.jpg', 'Scrambled eggs, roasted red pepper and garlic, with green onions 7.50', '7.50', '', '20%', 0, 4, '2021-09-04', 6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` enum('0','1') NOT NULL,
  `u_date` date NOT NULL,
  `password` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `address`, `gender`, `u_date`, `password`, `email`, `phone`) VALUES
(4, 'youssef', 'Sherif Kamel', 'Giza', '', '2021-09-04', '123456', 'joe1234@gmail.com', '01245678959'),
(5, 'Mohammed', 'Sherif Kamel', 'Giza', '', '2021-09-04', '555', 'moe123@gmail.com', '01245678959'),
(6, 'Amira', 'Sherif Kamel', 'Giza', '1', '2021-09-04', '123456', 'am123@gmail.com', '01245678955');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
