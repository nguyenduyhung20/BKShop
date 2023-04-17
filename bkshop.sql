CREATE DATABASE bkshop;
USE bkshop;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `users`(
     `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
     `username` VARCHAR(50) NOT NULL UNIQUE,
     `first_name` VARCHAR(50) DEFAULT NULL,
     `last_name` VARCHAR(50) DEFAULT NULL,
     `password` VARCHAR(50) NOT NULL,
     `email` VARCHAR(50) UNIQUE NOT NULL,
     `phone` VARCHAR(20) DEFAULT NULL,
     `address` VARCHAR(100) DEFAULT NULL,
     `role` ENUM('USER', 'ADMIN') NOT NULL DEFAULT 'USER',
     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
     updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
     CONSTRAINT check_role CHECK (role IN ('USER', 'ADMIN'))
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE product(
     `id_product` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
     `type_product` ENUM('PC','LAP','LINHKIEN','MAN','PHIM','AUDIO','CHUOT','MANG','PHUKIEN') NOT NULL,
     `name_product` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
     `image_product` Text DEFAULT NULL,
     `price_product` int(30) UNSIGNED NOT NULL,
     `description_product` longtext CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `order` (
  `id_order` int(11) NOT NULL PRIMARY KEY ,
  `id_user` int(11) NOT NULL,
  `username` VARCHAR(50) NOT NULL,
  `phone` VARCHAR(20) NOT NULL,
  `user_address` VARCHAR(100) NOT NULL,
  `id_product` int(11) NOT NULL,
  `name_product` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(99) UNSIGNED NOT NULL,
  `bill` int(50) UNSIGNED NOT NULL,
  `order_time` text NOT NULL,
  `order_state` VARCHAR(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`id`, `username`, `first_name`, `last_name`, `email`, `password`, `phone`, `address`, `role`, `created_at`, `updated_at`) VALUES
(2, 'john_doe2', 'John old', 'Doe', 'john_doe@example.com', 'password123', '+1234567890', '123 Main St, Anytown Myx tho', 'USER', '2023-04-09 09:40:44', '2023-04-15 08:56:19'),
(3, 'dhung1', 'Hung', 'Duy', 'duyhunqwea2@gmail.com', '$2y$10$txr0X.HMa3VB19CmDd5nvOMmeFw6YD43A.R0BScZBvrd/5vUcGVeG', '0852260051', 'KTX khu A ĐHQG, Linh Trung, Thủ Đức', 'USER', '2023-04-09 13:24:49', '2023-04-09 13:24:49'),
(4, 'dhung2', 'Hung', 'Duy Hung', 'hung.nguy432@hcmut.edu.vn', '$2y$10$FU2o/o6yWpPuIVZPj/6t1uDbCNqd1rNpSbSmaC4Kf/YVELo5q/WFS', '085226022', 'KTX khu A ĐHQG, Linh Trung, Thủ Đức', 'USER', '2023-04-09 13:27:12', '2023-04-09 13:27:12'),
(7, 'admin', 'ad', 'min', 'admin@admin.com', '$2y$10$wGON8Gke64nL5jt.WtfRse3FRY/srBgW.z9OTFh3OzJ2.zkzi.grO', '0000000000', 'No where', 'ADMIN', '2023-04-15 07:19:46', '2023-04-15 07:19:57'),
(11, 'abC', 'pham', 'duy Hung', 'example@gmail.com', '$2y$10$FU2o/o6yWpPuIVZPj/6t1uDbCNqd1rNpSbSmaC4Kf/YVELo5q/WFS', '0999999999', 'Tân Sơn, phường 20, Gò Vấp', 'USER', '2023-04-16 13:30:19', '2023-04-17 13:57:52');


INSERT INTO `product`(`id_product`,`type_product`, `name_product`, `image_product`, `price_product`, `description_product`) VALUES
(2,'PC','PC GAMING i5','pc-gaming-i5.jpg',25000000,'PC Gaming i5 với bộ xử lý ...'),
(7,'PC','PC GAMING i9','pc-gaming-i9.jpg',33000000,'PC Gaming i9 với bộ xử lý Intel Core ...'),
(3,'LAP','LAPTOP ACER NITRO 5 EAGLE','laptop-acer-nitro-5.jpg',19990000,'Laptop ACER NITRO 5 EAGLE mạnh mẽ ...'),
(6,'LINHKIEN','GIGABYTE GeForce RTX 4080 EAGLE OC 16G','gigabyte-geforce-rtx-4080-eagle-oc-16g.jpg',37990000,'Hiệu năng vượt trội. Sở hữu 9728 nhân CUDA ...'),
(17,'BANPHIM','Bàn phím cơ AKKO PC98B Plus AIR','ban-phim-co-akko-pc98b-plus-air.jpg',2590000,'AKKO PC98B Plus AIR dòng bàn phím cơ ...');

INSERT INTO `order`(`id_order`, `id_user`, `username`, `phone`, `user_address`, `id_product`, `name_product`, `amount`, `bill`, `order_time`, `order_state`) VALUES
('11','2','dhung1','0852260051', 'KTX khu A ĐHQG, Linh Trung, Thủ Đức', '3','LAPTOP ACER NITRO 5 EAGLE',2,39980000,'2023-04-16 10:37 PM','Chờ xác nhận'),
('2','4','dhung2','085226022', 'KTX khu A ĐHQG, Linh Trung, Thủ Đức', '7','PC GAMING i9',1,33000000,'2023-04-16 10:39 PM','Đang chờ vận chuyển')