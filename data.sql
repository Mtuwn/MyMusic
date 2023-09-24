-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 23, 2023 lúc 06:13 PM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `data`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dang_ky`
--

CREATE TABLE `dang_ky` (
  `Ma` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Gender` tinyint(1) NOT NULL,
  `Address` text NOT NULL,
  `sdt` varchar(15) DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dang_ky`
--

INSERT INTO `dang_ky` (`Ma`, `Name`, `Email`, `Password`, `Gender`, `Address`, `sdt`, `user`) VALUES
(1, 'Tran Minh Tuan', 'Trantuan16042003@gmail.com', '16040312b', 0, 'Thanh hóa', '0392958942', 'Trantuan16042003@gmail.com'),
(2, 'Tran Minh Tuan', 'Trantuan16042003@gmail.com', '16040312b', 0, 'Nhập địa chỉ ...', '0392958942', 'Trantuan16042003@gmail.com'),
(3, '', '', '', 0, '', '', ''),
(4, 'Tran Minh Tuan', 'Abc@gmail.co', '16040312b', 0, 'Thanh Hoa', '0392958944', 'Abc@gmail.com'),
(5, 'Tran Minh Tuan', 'Abc@gmail.co', '16040312b', 0, 'Thanh Hoa', '0392958944', 'Ndcds23'),
(6, 'Tran Minh Tuan', 'Qaz@gmail.com', '16040312b', 0, 'Nhập địa chỉ ...', '0395642316', 'Tuan123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mymusic`
--

CREATE TABLE `mymusic` (
  `Ma` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `Music` varchar(100) NOT NULL,
  `Casi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `mymusic`
--

INSERT INTO `mymusic` (`Ma`, `Name`, `Photo`, `Music`, `Casi`) VALUES
(1, 'Hãy trao cho anh', '1695048665.jpg', '1695048665.mp3', 'Sơn Tùng'),
(2, 'Suýt nữa thì', '1695048696.jpg', '1695048696.mp3', 'Andiez'),
(3, '3107', '1695048726.jpg', '1695048726.mp3', 'W/n, DuongG, Nâu'),
(4, 'ngày mai người ta lấy chồng', '1695048742.jpg', '1695048742.mp3', 'Thành Đạt'),
(5, 'Thu cuối ', '1695048969.jpg', '1695048969.TYanbiHangBingBoong-2427878', 'Yanbi, Mr.T, Hằng BingBoong'),
(6, 'Lạ lùng', '1695048993.jpg', '1695048993.mp3', 'Vũ'),
(7, 'Bức thư tình đầu tiên', '1695049119.jpg', '1695049119.mp3', 'Tấn MInh'),
(8, 'Mùa đi ngang phố', '1695049254.jpg', '1695049254.mp3', 'Bùi Anh Tuấn'),
(9, 'Một lần giang dở', '1695049503.jpg', '1695049503.mp3', 'H2K'),
(10, 'Tháng mấy em nhớ anh', '1695049628.jpg', '1695049628.mp3', 'Hà Anh Tuấn'),
(11, 'Yếu đuối', '1695049652.jpg', '1695049652.mp3', 'Hoàng Dũng'),
(12, 'Làm vợ anh nhé', '1695263643.jpg', '1695263643.mp3', 'Chi Dân'),
(13, '', '1695469700.', '1695469700.', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dang_ky`
--
ALTER TABLE `dang_ky`
  ADD PRIMARY KEY (`Ma`);

--
-- Chỉ mục cho bảng `mymusic`
--
ALTER TABLE `mymusic`
  ADD PRIMARY KEY (`Ma`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dang_ky`
--
ALTER TABLE `dang_ky`
  MODIFY `Ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `mymusic`
--
ALTER TABLE `mymusic`
  MODIFY `Ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
