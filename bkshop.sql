-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2023 at 04:30 AM
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

--
-- Dumping data for table `comment_product`
--

INSERT INTO `comment_product` (`id_comment`, `id_product`, `username`, `phone`, `comment`, `time`) VALUES
(1, 2, 'datnguyen', '0818093520', 'Cool!', '2023-04-26 09:26:54');

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
(1, 'HP'),
(2, 'Apple');

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
(1, 1, 'HP AIO 22 dd2002d i5 1235U 21.5 inch (6K7G1PA)', 'hp1.jpg', '20410000', '							                							                							                Nếu bạn đang cần một trợ thủ đắc lực sở hữu đầy đủ mọi ưu điểm từ cấu hình mạnh mẽ đến màn hình lớn, ngoại hình đẹp mắt, máy tính để bàn HP AIO 22 dd2002d i5 (6K7G1PA) sẽ là sản phẩm All-in-one mà bạn không nên bỏ lỡ, cực kỳ phù hợp cho mọi đối tượng là sinh viên, dân văn phòng hay thậm chí là người dùng sáng tạo.\r\n\r\nMang trên mình bộ vi xử lý Intel Core i5 1235U mạnh mẽ kết hợp với card Intel UHD Graphics giúp bạn vận hành tốt mọi tác vụ học tập - văn phòng từ cơ bản đến nâng cao hay chỉnh sửa hình ảnh, giải trí với các tựa game nhẹ nhàng. Nếu muốn xử lý khối lượng công việc nhiều hơn, bạn hoàn toàn có thể lắp thêm thanh RAM khác và kích hoạt Dual-Channel để nâng cấp lên card Iris Xe.\r\n\r\nBộ nhớ RAM 8 GB cho phép người dùng xử lý công việc trên nhiều cửa sổ ứng dụng cùng lúc nhưng vẫn đảm bảo trơn tru, hạn chế tình trạng giật lag. Ổ cứng 512 GB SSD mang đến không gian lưu trữ ổn định khi tải các tệp tài liệu, học tập cần thiết đồng thời gia tăng tốc độ khởi động máy chỉ trong vài giây.\r\n\r\nLàm việc tốt hơn trên kích thước màn hình 21.5 inch cho phép bạn quan sát bao quát nội dung được hiển thị trên máy, độ sáng 250 nits cùng độ phân giải Full HD (1920 x 1080) cung cấp chất lượng khung ảnh sắc nét ở nhiều điều kiện ánh sáng khác nhau với gam màu sắc chuẩn xác trên từng chi tiết. Thời gian làm việc trên máy lâu dài nhưng vẫn bảo vệ tốt cho thị lực của người dùng nhờ màn hình Anti Glare, giảm thiểu độ chói sáng ở những nơi ánh sáng cao.\r\n\r\nCông nghệ High Definition (HD) Audio cho chất âm to rõ, chân thực trên từng thước phim hay bản nhạc.\r\n\r\nMáy tính để bàn học tập được bao bọc bởi chiếc áo màu trắng tinh khôi, toát lên vẻ đẹp tinh tế và sang trọng khi đặt ở mọi vị trí khác nhau, cân nặng 5.7 kg dễ dàng bưng bê và lắp đặt cố định ở không gian văn phòng, bàn lễ tân nhà hàng, khách sạn,...\r\n\r\nTính năng mở khóa bằng khuôn mặt tích hợp với Camera IR hồng ngoại hiện đại được trang bị trên chiếc máy tính để bàn này giúp bạn mở khóa nhanh chóng và an toàn hơn rất nhiều so với các kiểu bảo mật truyền thống dù ở những nơi có điều kiện ánh sáng thấp.\r\n\r\nMặt sau máy tính để bàn HP được trang bị đa dạng các cổng kết nối như USB 2.0, Jack 3.5 mm, LAN (RJ45), HDMI và USB 3.2 cho khả năng kết xuất và truyền tải dữ liệu đến các thiết bị ngoại vi nhanh chóng, dễ dàng hơn.', 1),
(2, 2, 'iMac 24 inch 2021 4.5K M1/256GB/8GB/8-core GPU (MGPK3SA/A)', 'imac1.jpg', '27990000', 'Tất cả các sản phẩm điện tử của BKShop', 0);

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
(2, 'john_doe2', 'John old', 'Doe', 'john_doe@example.com', 'password123', '+1234567890', '123 Main St, Anytown Myx tho', 'USER', '2023-04-09 02:40:44', '2023-04-15 01:56:19'),
(3, 'dhung1', 'Hung', 'Duy', 'duyhunqwea2@gmail.com', '$2y$10$txr0X.HMa3VB19CmDd5nvOMmeFw6YD43A.R0BScZBvrd/5vUcGVeG', '0852260051', 'KTX khu A ĐHQG, Linh Trung, Thủ Đức', 'USER', '2023-04-09 06:24:49', '2023-04-09 06:24:49'),
(4, 'dhung2', 'Hung', 'Duy Hung', 'hung.nguy432@hcmut.edu.vn', '$2y$10$FU2o/o6yWpPuIVZPj/6t1uDbCNqd1rNpSbSmaC4Kf/YVELo5q/WFS', '085226022', 'KTX khu A ĐHQG, Linh Trung, Thủ Đức', 'USER', '2023-04-09 06:27:12', '2023-04-09 06:27:12'),
(7, 'admin', 'ad', 'min', 'admin@admin.com', '$2y$10$wGON8Gke64nL5jt.WtfRse3FRY/srBgW.z9OTFh3OzJ2.zkzi.grO', '0000000000', 'No where', 'ADMIN', '2023-04-15 00:19:46', '2023-04-15 00:19:57'),
(8, 'datnguyenvan', 'DAT', 'NGUYEN', 'dat.nguyen2011@hcmut.edu.vn', '$2y$10$7oEezmujnG/9sT70.WnpDuIDWrqGBaOzezZ6w4yAOA4ISnMvr8SaW', '0818093520', 'Quốc lộ 1K, Dĩ An, BÌnh Dương', 'ADMIN', '2023-04-26 00:07:06', '2023-04-26 00:15:03');

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
  MODIFY `id_comment` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `list_product`
--
ALTER TABLE `list_product`
  MODIFY `id_list` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
