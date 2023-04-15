CREATE DATABASE bkshop ;
USE bkshop ;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `comment_product` (
  `id_comment` int(10) NOT NULL AUTO_INCREMENT,
  `id_product` int(10) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `comment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id_comment`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `list_product` (
  `id_list` int(10) NOT NULL AUTO_INCREMENT,
  `name_list` varchar(255) NOT NULL,
  PRIMARY KEY (`id_list`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `product` (
  `id_product` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_list` int(11) UNSIGNED NOT NULL,
  `name_product` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image_product` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price_product` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description_product` longtext CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `special` int(1) NOT NULL,
  PRIMARY KEY (`id_product`),
  KEY `id_list` (`id_list`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    first_name VARCHAR(50) DEFAULT NULL,
    last_name VARCHAR(50) DEFAULT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(100) NOT NULL,
    phone VARCHAR(20) DEFAULT NULL,
    address VARCHAR(100) DEFAULT NULL,
    role ENUM('USER', 'ADMIN') NOT NULL DEFAULT 'USER',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT check_role CHECK (role IN ('USER', 'ADMIN'))
);



INSERT INTO `list_product` (`id_list`, `name_list`) VALUES
(1, 'iPhone'),
(2, 'Samsung'),
(3, 'Nokia');



INSERT INTO `product` (`id_product`, `id_list`, `name_product`, `image_product`, `price_product`, `description_product`, `special`) VALUES
(2, 1, 'iPhone 4 16GB Quốc Tế Trắng', 'iPhone-4-16G-Quoc-Te-Trang.jpg', '8000000', 'Tất cả các sản phẩm điện thoại của BKShop', 0),
(3, 1, 'iPhone 5 16GB Quốc Tế Đen', 'iPhone-5-16GB-Quoc-Te-Den.jpg', '8000000', 'Tất cả các sản phẩm điện thoại của BKShop', 0),
(4, 1, 'iPhone 5S 32GB Quốc Tế Màu Trắng', 'iPhone-5S-32GB-Quoc-Te-Mau-Trang.jpg', '8000000', 'Tất cả các sản phẩm điện thoại của BKShop', 1),
(5, 2, 'Samsung Galaxy S2', 'samsung-galaxy-s2.jpg', '5800000', 'Tất cả các sản phẩm điện thoại của BKShop', 0),
(6, 2, 'Samsung Galaxy S3', 'samsung-galaxy-s3.jpg', '5800000', 'Tất cả các sản phẩm điện thoại của BKShop', 0),
(7, 2, 'Samsung Galaxy S4', 'samsung-galaxy-s4-galaxy.jpg', '5800000', 'Tất cả các sản phẩm điện thoại của BKShop', 1),
(8, 3, 'Nokia 8800 Sirocco Gold', 'Nokia-8800-Sirocco-Gold.jpg', '3200000', 'Tất cả các sản phẩm điện thoại của BKShop', 1),
(10, 1, 'iPhone 3GS 32GB Màu Đen', 'IPhone-3GS-32G-Mau-Den.jpg', '8000000', 'Tất cả các sản phẩm điện tử của BKShop', 1),
(11, 1, 'iPhone 3GS 32GB Màu Đen', 'IPhone-3GS-32G-Mau-Den.jpg', '8000000', 'Tất cả các sản phẩm điện tử của BKShop', 1);


INSERT INTO `users` (`id`, `username`, `first_name`, `last_name`, `email`, `password`, `phone`, `address`, `role`, `created_at`, `updated_at`) VALUES
(0, 'DAC NGUYEN', 'DAC', 'NGUYEN', 'dat@dat', '$2y$10$JYhpybrbii0yqD2CN1bk5O1vU8mWKk1okz4IWz3QteR8qMyRM.9Ye', '123', '123 dat', 'ADMIN', '2023-04-14 07:39:26', '2023-04-14 07:46:59'),
(1, 'dat nguyen van', 'dat', 'nguyen van', 'dat@datnguyen', '$2y$10$vIjfR/LHE/vbhWbpsK74eeetRD4ZmQGb7mT4duH4R/C4Iwa4.78nu', '123456', '1234 dat', 'USER', '2023-04-14 07:47:52', '2023-04-14 07:47:52');

INSERT INTO `users` (`id`, `username`, `first_name`, `last_name`, `email`, `password`, `phone`, `address`, `role`, `created_at`, `updated_at`) VALUES
(2, 'john_doe2', 'John old', 'Doe', 'john_doe@example.com', 'password123', '+1234567890', '123 Main St, Anytown Myx tho', 'USER', '2023-04-09 09:40:44', '2023-04-15 08:56:19'),
(3, 'dhung1', 'Hung', 'Duy', 'duyhunqwea2@gmail.com', '$2y$10$txr0X.HMa3VB19CmDd5nvOMmeFw6YD43A.R0BScZBvrd/5vUcGVeG', '0852260051', 'KTX khu A ĐHQG, Linh Trung, Thủ Đức', 'USER', '2023-04-09 13:24:49', '2023-04-09 13:24:49'),
(4, 'dhung2', 'Hung', 'Duy Hung', 'hung.nguy432@hcmut.edu.vn', '$2y$10$FU2o/o6yWpPuIVZPj/6t1uDbCNqd1rNpSbSmaC4Kf/YVELo5q/WFS', '085226022', 'KTX khu A ĐHQG, Linh Trung, Thủ Đức', 'USER', '2023-04-09 13:27:12', '2023-04-09 13:27:12'),
(7, 'admin', 'ad', 'min', 'admin@admin.com', '$2y$10$wGON8Gke64nL5jt.WtfRse3FRY/srBgW.z9OTFh3OzJ2.zkzi.grO', '0000000000', 'No where', 'ADMIN', '2023-04-15 07:19:46', '2023-04-15 07:19:57');
