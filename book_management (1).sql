-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 28, 2020 lúc 11:20 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `book_management`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `category` int(3) NOT NULL,
  `iamge` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `pages` int(11) NOT NULL,
  `author` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `publisher` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `publish_date` date NOT NULL,
  `highlights` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `books`
--

INSERT INTO `books` (`id`, `name`, `category`, `iamge`, `content`, `pages`, `author`, `publisher`, `publish_date`, `highlights`, `status`, `created`, `modified`) VALUES
(8, 'Ngôi mộ hoang', 3, 'hinh-nen-samsung-galaxy-note-8-5-duchuymobile.jpg.jpg', 'ngggggggggggggggggggggddd', 189, 'Nguyễn Ngọc Ngạn', 'Nhà xuất bản Việt Nam', '2020-02-02', 0, 0, '2020-02-28 07:59:07', '2020-02-28 07:59:07'),
(9, 'Sức khỏe gia đình', 1, 'hinh-nen-samsung-galaxy-note-8-5-duchuymobile.jpg.jpg', 'ngggggggggggggggggggggddd', 159, 'Nguyễn văn a', 'Nhà xuất bản Việt Nam', '2016-12-12', 1, 0, '2020-02-28 08:03:27', '2020-02-28 08:03:27'),
(11, 'Toán nâng cao', 2, 'chup-anh-dep-di-bien.jpg.jpg', 'Đây là site về giải bài tập sách giáo khoa các môn Toán, Lý, Hóa, Anh, Sinh, Soạn Văn từ lớp 1 đến lớp 12 có cả cơ bản và nâng cao, Xem và tải về sách giáo khoa toán, Luyện đề thi THPT Quốc gia môn Toán 2019.', 158, 'Nguyễn văn b', 'Nhà xuất bản Giáo Dục', '2011-06-05', 1, 0, '2020-02-28 08:15:54', '2020-02-28 08:15:54'),
(12, 'Hóa nâng cao', 2, '5d075091bfeba50c0d2de6af_m.jpg.jpg', 'Đây là site về giải bài tập sách giáo khoa các môn Toán, Lý, Hóa, Anh, Sinh, Soạn Văn từ lớp 1 đến lớp 12 có cả cơ bản và nâng cao, Xem và tải về sách giáo khoa toán, Luyện đề thi THPT Quốc gia môn Toán 2019.', 149, 'Nguyễn văn b', 'Nhà xuất bản Giáo Dục', '2006-06-05', 0, 0, '2020-02-28 08:16:40', '2020-02-28 08:16:40'),
(13, 'Lý nâng cao 11', 2, 'Phương-pháp-học.jpg.jpg', 'Đây là site về giải bài tập sách giáo khoa các môn Toán, Lý, Hóa, Anh, Sinh, Soạn Văn từ lớp 1 đến lớp 12 có cả cơ bản và nâng cao, Xem và tải về sách giáo khoa toán, Luyện đề thi THPT Quốc gia môn Toán 2019.', 188, 'Nguyễn văn b', 'Nhà xuất bản Giáo Dục', '2009-02-10', 1, 0, '2020-02-28 08:17:18', '2020-02-28 08:17:18'),
(14, 'Anh văn 10', 2, 'chup-anh-cuoi-mac-do-doi-05-683x1024.jpg.jpg', 'Đây là site về giải bài tập sách giáo khoa các môn Toán, Lý, Hóa, Anh, Sinh, Soạn Văn từ lớp 1 đến lớp 12 có cả cơ bản và nâng cao, Xem và tải về sách giáo khoa toán, Luyện đề thi THPT Quốc gia môn Toán 2019.', 144, 'Nguyễn văn a', 'Nhà xuất bản Giáo Dục', '2011-11-18', 1, 0, '2020-02-28 08:17:56', '2020-02-28 08:17:56'),
(15, 'Sách hay', 2, '170px-Geoffrey_Chaucer_(17th_century).jpg.jpg', 'Đây là site về giải bài tập sách giáo khoa các môn Toán, Lý, Hóa, Anh, Sinh, Soạn Văn từ lớp 1 đến lớp 12 có cả cơ bản và nâng cao, Xem và tải về sách giáo khoa toán, Luyện đề thi THPT Quốc gia môn Toán 2019.', 500, 'Nguyễn văn b', 'Nhà xuất bản Giáo Dục', '2012-12-25', 0, 0, '2020-02-28 08:18:24', '2020-02-28 08:18:24'),
(16, 'Sách tâm linh', 4, 'chup-anh-dep-di-bien.jpg.jpg', 'Đây là site về giải bài tập sách giáo khoa các môn Toán, Lý, Hóa, Anh, Sinh, Soạn Văn từ lớp 1 đến lớp 12 có cả cơ bản và nâng cao, Xem và tải về sách giáo khoa toán, Luyện đề thi THPT Quốc gia môn Toán 2019.', 469, 'Nguyễn Ngọc Ngạn', 'Nhà xuất bản Việt Nam', '2019-12-19', 0, 0, '2020-02-28 08:52:25', '2020-02-28 08:52:25'),
(17, 'Sức khỏe cộng đồng', 1, 'chup-anh-cuoi-mac-do-doi-05-683x1024.jpg.jpg', 'Đây là site về giải bài tập sách giáo khoa các môn Toán, Lý, Hóa, Anh, Sinh, Soạn Văn từ lớp 1 đến lớp 12 có cả cơ bản và nâng cao, Xem và tải về sách giáo khoa toán, Luyện đề thi THPT Quốc gia môn Toán 2019.', 315, 'Nguyễn Văn Trung', 'Nhà xuất bản Việt Nam', '2019-02-04', 0, 0, '2020-02-28 09:54:53', '2020-02-28 09:54:53'),
(18, 'Thế giới quanh ta', 1, 'Phương-pháp-học.jpg.jpg', 'Đây là site về giải bài tập sách giáo khoa các môn Toán, Lý, Hóa, Anh, Sinh, Soạn Văn từ lớp 1 đến lớp 12 có cả cơ bản và nâng cao, Xem và tải về sách giáo khoa toán, Luyện đề thi THPT Quốc gia môn Toán 2019.', 988, 'Nguyễn Văn Hùng', 'Nhà xuất bản Việt Nam', '2003-03-29', 0, 0, '2020-02-28 10:13:57', '2020-02-28 10:13:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `total_book` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `total_book`, `description`, `created`, `modified`) VALUES
(1, 'Sức khỏe', 15, 'Nói về các vấn để để bảo vệ sức khỏa cho con người.', '2020-02-28 10:22:16', '2020-02-28 04:23:10'),
(2, 'Giáo dục', 100, 'Sách về học tập', '2020-02-28 10:22:16', '2020-02-28 10:22:16'),
(3, 'Tâm linh', 46, 'Sách về các vấn để tôn giáo, tâm linh', '2020-02-28 10:25:58', '2020-02-28 10:25:58'),
(4, 'Kích thích tinh thần', 0, 'Đọc sách sẽ giúp kích thích các dây thần kinh não bộ', '2020-02-28 03:55:10', '2020-02-28 03:55:10'),
(6, 'Khoa học', 0, 'Sách nói về lĩnh vực khoa học - đời sống', '2020-02-28 10:13:11', '2020-02-28 10:13:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `content` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `start_day` datetime DEFAULT NULL,
  `end_day` datetime DEFAULT NULL,
  `status` int(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `created`, `modified`) VALUES
(1, 'admin', '2020-02-24 09:41:39', '2020-02-24 09:41:39'),
(2, 'thủ thư', '2020-02-28 08:39:10', '2020-02-28 08:39:10'),
(3, 'thường', '2020-02-28 08:39:10', '2020-02-28 08:39:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `total_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `number_borrowed_books` int(4) NOT NULL,
  `role` int(1) NOT NULL,
  `wallet` float NOT NULL,
  `status` int(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `total_name`, `phone`, `address`, `number_borrowed_books`, `role`, `wallet`, `status`, `created`, `modified`) VALUES
(2, 'huy@gmail.com', 'b59701fe1baa0a0080a512a41a314758', 'huu huy', '09684457253', 'ha noi', 0, 1, 100, 1, '2020-02-24 09:40:36', '2020-02-28 09:55:38'),
(3, 'huy1@gmail.com', '12ced8b0a9c2b605dd4369d62cc31eb4', 'Nam', '0326514725', 'Ha noi', 2, 3, 100, 1, '2020-02-24 10:25:47', '2020-02-28 09:55:21'),
(4, 'huy2@gmail.com', 'b59701fe1baa0a0080a512a41a314758', 'vsvs', '09684457258', 'ádasd', 2, 1, 100, 1, '2020-02-24 10:50:08', '2020-02-28 09:55:55'),
(5, 'huy12222@gmail.com', 'b59701fe1baa0a0080a512a41a314758', 'âsss', '0965412222222', 'hs nhh', 0, 1, 0, 0, '2020-02-26 03:05:22', '2020-02-28 09:56:12'),
(6, 'huy12222211@gmail.com', 'bd2e5a99e6a5bcb982b76e826d3be4bf', 'ffffff', '0968523149', 'Ha noi', 0, 1, 0, 0, '2020-02-26 03:18:16', '2020-02-28 09:56:33'),
(7, 'huy109@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'ghyyy', '0352661259', 'Ha noi', 0, 1, 0, 1, '2020-02-26 03:31:18', '2020-02-26 03:31:18'),
(17, 'hu3232y@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'ghyyy', '0352614785', '22222', 0, 1, 0, 0, '2020-02-26 06:23:14', '2020-02-26 06:23:14'),
(18, 'huy112211@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'fffffsss', '0968523964', 'lll', 0, 1, 0, 0, '2020-02-26 06:25:53', '2020-02-26 06:25:53'),
(19, 'huyeee2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'fff', '0963528745', 'pp', 0, 1, 0, 0, '2020-02-26 06:32:09', '2020-02-26 06:32:09'),
(20, 'ffss232@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'vfff', '0968741253', 'kk', 0, 1, 0, 1, '2020-02-26 06:32:26', '2020-02-26 06:32:26');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`category`) REFERENCES `categories` (`id`);

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
