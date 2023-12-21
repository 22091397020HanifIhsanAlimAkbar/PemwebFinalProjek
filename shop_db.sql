-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2023 at 05:08 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `quantity` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `image`, `quantity`) VALUES
(9, 'BLACK LEATHER JACKET', '125', 'black-leather-jacket.jpg', 1),
(10, 'STYLISH PINK TROUSERS', '85', 'pink-trousers.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `number` varchar(13) NOT NULL,
  `email` varchar(250) NOT NULL,
  `method` varchar(250) NOT NULL,
  `flat` varchar(250) NOT NULL,
  `street` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `country` varchar(250) NOT NULL,
  `pin_code` varchar(15) NOT NULL,
  `total_products` varchar(250) NOT NULL,
  `total_price` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `number`, `email`, `method`, `flat`, `street`, `city`, `state`, `country`, `pin_code`, `total_products`, `total_price`) VALUES
(1, 'Anisa', '0882003365621', 'ihdaanisaulfa@gmail.com', 'credit cart', 'Babadan asri blok f11', 'Wadung asri', 'Sidoarjo', 'Indonesia', 'Indonesia', '626544', 'Baju (2) , BLACK PANTS (1) , STYLISH PINK TROUSERS (1) ', '190'),
(2, 'anisa', '08534578568', 'ihdaanisaulfa@gmail.com', 'cash on delivery', 'Babadan asri blok f11', 'Wadung asri', 'Sidoarjo', 'Indonesia', 'Indonesia', '626544', 'STYLISH PINK TROUSERS (1) , REGULAR WHITE T-SHIRT (1) ', '115'),
(3, 'hanif', '081235686787', 'ihdaanisaulfa@gmail.com', 'cash on delivery', 'ketintang', 'ptt 2', 'surabaya', 'indonesia', 'indonesia', '2467', 'BLACK LEATHER JACKET (1) , STYLISH PINK TROUSERS (1) ', '210');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` int(250) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(1, 'BLACK LEATHER JACKET', 125, 'black-leather-jacket.jpg'),
(2, 'SPORTY SMARTWATCH', 100, 'sporty-smartwatch.jpg'),
(3, 'STYLISH PINK TROUSERS', 85, 'pink-trousers.jpg'),
(4, 'BLACK PANTS', 85, 'product-12.jpg'),
(5, 'REGULAR WHITE T-SHIRT', 30, 'white-tshirt.jpg'),
(6, 'DARK BLACK PANTS', 45, 'buy-3.jpg'),
(7, 'DARK BLUE SHIRT', 30, 'product-4.jpg'),
(8, 'BASIC KNITTED TOP', 45, 'knitted-top.jpg'),
(9, 'BLACK SHOES', 75, 'buy-2.jpg'),
(10, 'RED PRINTED T-SHIRT', 45, 'buy-1.jpg'),
(11, 'BEIGE SHORT SKRIT', 45, 'short-skirt.jpg'),
(12, 'BOMBER JACKET', 45, 'bomber-jaket.jpg'),
(13, 'COMFY GRAY PANTS', 40, 'comfy-gray-pants.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
