-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 26, 2018 lúc 08:44 CH
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shortlink`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `origin_link`
--

CREATE TABLE `origin_link` (
  `id` int(11) NOT NULL,
  `name_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `linkdownload` text COLLATE utf8_unicode_ci NOT NULL,
  `hash` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `origin_link`
--

INSERT INTO `origin_link` (`id`, `name_link`, `linkdownload`, `hash`, `user_id`) VALUES
(1, 'Lập trình back-end cơ bản với nodejs & mongodb, mongooose, postgresql', 'https://drive.google.com/open?id=1sNRdPTUeqzzEfqXxwLWFd3kfWfw2qU4_', 'EqQ0vV6SsZsC', 1),
(2, 'Há»c láº­p trÃ¬nh PHP/MySql Back-end theo mÃ´ hÃ¬nh MVC', 'https://drive.google.com/drive/u/3/folders/0B7MInocg71qdV0JRZG9XOGh1RE0', 'dBWqWX0d55a0', 1),
(3, 'Láº­p trÃ¬nh Web tá»‘c Ä‘á»™ cao, thá»i gian thá»±c vá»›i NodeJS', 'https://drive.google.com/drive/folders/12bwwtn-8_O0XRgtij07mO0hu4o3ZZubR?usp=sharing', 'ZHxmMwit0XXZ', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `name_service` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name_url_api` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `service`
--

INSERT INTO `service` (`id`, `name_service`, `name_url_api`) VALUES
(1, 'tocdo.in', 'http://tocdo.in/st?'),
(2, '123link', 'http://123link.co/st?'),
(3, 'megaurl', 'https://megaurl.in/st?');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `token_api`
--

CREATE TABLE `token_api` (
  `id` int(11) NOT NULL,
  `tocdo_api` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `123link_api` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `megaurl_api` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `token_api`
--

INSERT INTO `token_api` (`id`, `tocdo_api`, `123link_api`, `megaurl_api`, `user_id`) VALUES
(1, 'a2ab1f37ccbf4dcc37b892e9b27e14c4b61ed338', '816bbd822874ddea74a9bcb9b415484529375c0f', '412d32eceae8f9be3ca21f12be762de80af27a2f', 1),
(2, 'tocdoinapi1', '123linkapi1', 'megaurlapi1', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `service_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `service_id`) VALUES
(1, 'nhockool1002', '6ac66b5cb3d198e4587a747c13ac3c9d', 'nhut.nguyenminh.it@gmail.com', 1),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 3);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `origin_link`
--
ALTER TABLE `origin_link`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `token_api`
--
ALTER TABLE `token_api`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_id` (`service_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `origin_link`
--
ALTER TABLE `origin_link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `token_api`
--
ALTER TABLE `token_api`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `origin_link`
--
ALTER TABLE `origin_link`
  ADD CONSTRAINT `origin_link_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `token_api`
--
ALTER TABLE `token_api`
  ADD CONSTRAINT `token_api_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `service` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
