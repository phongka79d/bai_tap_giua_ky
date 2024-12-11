-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 11, 2024 lúc 04:44 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlsv_phantuanphong`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_students`
--

CREATE TABLE `table_students` (
  `id` int(100) NOT NULL,
  `fullname` varchar(300) NOT NULL,
  `dob` date NOT NULL,
  `gender` int(2) NOT NULL,
  `hometown` varchar(500) NOT NULL,
  `level` int(3) NOT NULL,
  `group` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `table_students`
--

INSERT INTO `table_students` (`id`, `fullname`, `dob`, `gender`, `hometown`, `level`, `group`) VALUES
(1, 'Nguyễn Văn Dương', '2024-11-29', 0, 'Hà Nội', 4, 8),
(2, 'Phan Tuấn Phong', '2024-12-13', 0, 'Hà Nội', 4, 8),
(3, 'Nguyễn Văn Linh', '2024-12-14', 0, 'Hà Nội', 4, 8),
(4, 'Nguyễn Tiến Dũng', '2024-12-06', 0, 'Hà Nội', 4, 8),
(5, 'Hà Hải Anh', '2024-12-26', 0, 'Hà Nội', 4, 8),
(6, 'Hà Văn Đức', '2024-12-14', 0, 'Hà Nội', 4, 8),
(7, 'Khương Văn Khải', '2024-12-12', 0, 'Hà Nội', 4, 8);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `table_students`
--
ALTER TABLE `table_students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `table_students`
--
ALTER TABLE `table_students`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
