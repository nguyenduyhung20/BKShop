-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2023 at 08:57 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bkshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment_product`
--

CREATE TABLE `comment_product` (
  `id_comment` int(10) NOT NULL,
  `id_product` int(10) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `comment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `list_product`
--

CREATE TABLE `list_product` (
  `id_list` int(10) NOT NULL,
  `name_list` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `list_product`
--

INSERT INTO `list_product` (`id_list`, `name_list`) VALUES
(1, 'iPhone'),
(2, 'Samsung'),
(3, 'Nokia');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) UNSIGNED NOT NULL,
  `id_list` int(11) UNSIGNED NOT NULL,
  `name_product` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image_product` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price_product` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description_product` longtext CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `special` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `id_list`, `name_product`, `image_product`, `price_product`, `description_product`, `special`) VALUES
(2, 1, 'iPhone 4 16GB Quốc Tế Trắng', 'iPhone-4-16G-Quoc-Te-Trang.jpg', '8000000', 'Tất cả các sản phẩm điện thoại của BKShop', 0),
(3, 1, 'iPhone 5 16GB Quốc Tế Đen', 'iPhone-5-16GB-Quoc-Te-Den.jpg', '8000000', 'Tất cả các sản phẩm điện thoại của BKShop', 0),
(4, 1, 'iPhone 5S 32GB Quốc Tế Màu Trắng', 'iPhone-5S-32GB-Quoc-Te-Mau-Trang.jpg', '8000000', 'Tất cả các sản phẩm điện thoại của BKShop', 1),
(5, 2, 'Samsung Galaxy S2', 'samsung-galaxy-s2.jpg', '5800000', 'Tất cả các sản phẩm điện thoại của BKShop', 0),
(6, 2, 'Samsung Galaxy S3', 'samsung-galaxy-s3.jpg', '5800000', 'Tất cả các sản phẩm điện thoại của BKShop', 0),
(7, 2, 'Samsung Galaxy S4', 'samsung-galaxy-s4-galaxy.jpg', '5800000', 'Tất cả các sản phẩm điện thoại của BKShop', 1),
(8, 3, 'Nokia 8800 Sirocco Gold', 'Nokia-8800-Sirocco-Gold.jpg', '3200000', 'Tất cả các sản phẩm điện thoại của BKShop', 1),
(10, 1, 'iPhone 3GS 32GB Màu Đen', 'IPhone-3GS-32G-Mau-Den.jpg', '8000000', 'Tất cả các sản phẩm điện tử của BKShop', 1),
(11, 1, 'iPhone 3GS 32GB Màu Đen', 'IPhone-3GS-32G-Mau-Den.jpg', '8000000', '                                Tất cả các sản phẩm điện tử của BKShop', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `role` enum('USER','ADMIN') NOT NULL DEFAULT 'USER',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `first_name`, `last_name`, `email`, `password`, `phone`, `address`, `role`, `created_at`, `updated_at`) VALUES
(0, 'DAC NGUYEN', 'DAC', 'NGUYEN', 'dat@dat', '$2y$10$JYhpybrbii0yqD2CN1bk5O1vU8mWKk1okz4IWz3QteR8qMyRM.9Ye', '123', '123 dat', 'ADMIN', '2023-04-14 07:39:26', '2023-04-14 07:46:59'),
(1, 'dat nguyen van', 'dat', 'nguyen van', 'dat@datnguyen', '$2y$10$vIjfR/LHE/vbhWbpsK74eeetRD4ZmQGb7mT4duH4R/C4Iwa4.78nu', '123456', '1234 dat', 'USER', '2023-04-14 07:47:52', '2023-04-14 07:47:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment_product`
--
ALTER TABLE `comment_product`
  ADD PRIMARY KEY (`id_comment`);

--
-- Indexes for table `list_product`
--
ALTER TABLE `list_product`
  ADD PRIMARY KEY (`id_list`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_list` (`id_list`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment_product`
--
ALTER TABLE `comment_product`
  MODIFY `id_comment` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `list_product`
--
ALTER TABLE `list_product`
  MODIFY `id_list` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
