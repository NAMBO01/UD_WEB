-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 12, 2023 at 05:26 AM
-- Server version: 8.0.31
-- PHP Version: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bs_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `bs_ct_don_hang`
--

DROP TABLE IF EXISTS `bs_ct_don_hang`;
CREATE TABLE IF NOT EXISTS `bs_ct_don_hang` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `ID_don_hang` int DEFAULT NULL,
  `don_gia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thanh_tien` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `so_luong` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_sp` int DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `id_sp` (`id_sp`),
  KEY `Fkey_id_don_hang` (`ID_don_hang`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bs_ct_don_hang`
--

INSERT INTO `bs_ct_don_hang` (`ID`, `ID_don_hang`, `don_gia`, `thanh_tien`, `so_luong`, `id_sp`) VALUES
(1, 1, NULL, NULL, NULL, NULL),
(2, 2, NULL, NULL, NULL, NULL),
(3, 2, NULL, NULL, NULL, NULL),
(4, 3, NULL, NULL, NULL, NULL),
(5, 4, NULL, NULL, NULL, NULL),
(6, 4, NULL, NULL, NULL, NULL),
(7, 4, NULL, NULL, NULL, NULL),
(8, 5, NULL, NULL, NULL, NULL),
(9, 5, NULL, NULL, NULL, NULL),
(10, 5, NULL, NULL, NULL, NULL),
(11, 5, NULL, NULL, NULL, NULL),
(12, 5, NULL, NULL, NULL, NULL),
(14, 6, NULL, NULL, NULL, NULL),
(15, 6, NULL, NULL, NULL, NULL),
(16, 7, NULL, NULL, NULL, NULL),
(17, 7, NULL, NULL, NULL, NULL),
(18, 7, NULL, NULL, NULL, NULL),
(31, 8, NULL, NULL, NULL, NULL),
(32, 8, NULL, NULL, NULL, NULL),
(33, 8, NULL, NULL, NULL, NULL),
(34, 9, NULL, NULL, NULL, NULL),
(35, 9, NULL, NULL, NULL, NULL),
(36, 9, NULL, NULL, NULL, NULL),
(37, 10, NULL, NULL, NULL, NULL),
(38, 11, NULL, NULL, NULL, NULL),
(39, 12, NULL, NULL, NULL, NULL),
(40, 13, NULL, NULL, NULL, NULL),
(41, 13, NULL, NULL, NULL, NULL),
(42, 13, NULL, NULL, NULL, NULL),
(43, 14, '6500000', '13000000', '2', 15),
(44, 14, '4400000', '8800000', '2', 14),
(45, 15, '6500000', '13000000', '2', 15),
(46, 15, '4400000', '8800000', '2', 14),
(47, 19, '850000', '1700000', '2', 42),
(48, 19, '790000', '1580000', '2', 43),
(49, 20, '850000', '850000', '1', 42),
(50, 20, '790000', '790000', '1', 43),
(51, 21, '850000', '850000', '1', 42),
(52, 21, '790000', '790000', '1', 43),
(53, 21, '850000', '850000', '1', 41),
(54, 22, '890000', '890000', '1', 87),
(56, 27, '890000', '10680000', '12', 87),
(57, 28, '790000', '790000', '1', 43),
(58, 28, '790000', '790000', '1', 44),
(59, 28, '850000', '850000', '1', 41);

-- --------------------------------------------------------

--
-- Table structure for table `bs_don_hang`
--

DROP TABLE IF EXISTS `bs_don_hang`;
CREATE TABLE IF NOT EXISTS `bs_don_hang` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `ma_don_hang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tong_tien` int DEFAULT NULL,
  `ngay_dat` datetime DEFAULT NULL,
  `id_nguoi_dung` int DEFAULT NULL,
  `ho_ten_nguoi_nhan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_nguoi_nhan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dia_chi_nguoi_nhan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdt_nguoi_nhan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trang_thai` tinyint DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `Fkey_user_order` (`id_nguoi_dung`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bs_don_hang`
--

INSERT INTO `bs_don_hang` (`ID`, `ma_don_hang`, `tong_tien`, `ngay_dat`, `id_nguoi_dung`, `ho_ten_nguoi_nhan`, `email_nguoi_nhan`, `dia_chi_nguoi_nhan`, `sdt_nguoi_nhan`, `trang_thai`) VALUES
(1, 'S240220161', 92000, '2016-02-24 00:00:00', NULL, 'Phạm Hải Nam', 'hainam011201@gmail.com', 'Q Tân Bình, TP HCM', '0392345678', 0),
(2, 'S240220162', 85000, '2016-02-24 14:20:10', NULL, 'Nguyễn Thy Mỹ Linh', 'linhnguyenthymy136@gmail.com', NULL, '0980808080', 3),
(3, 'S240220163', 720000, '2016-02-24 13:57:59', NULL, 'Lê Văn Việt', 'lvviet@gmail.com', NULL, '0908236548', 1),
(4, 'S250220164', 658000, '2016-02-25 02:04:35', NULL, 'Huỳnh Bảo', 'huynhbao@gmail.com', NULL, '0908848484', 2),
(5, 'S250220165', 838000, '2016-02-25 14:10:40', NULL, 'Võ Thị Mỹ Dung', 'vothimydung@gmail.com', NULL, '0908084865', 1),
(6, 'S250220166', 95000, '2016-03-08 07:24:48', NULL, 'Hùng Nguyễn', 'botautomail@gmail.com', '357 LHP P2 Q10', '0909090909', 0),
(7, 'S250220167', 410000, '2016-03-09 10:43:23', NULL, 'Hùng Nguyễn Xuân', 'nxhung118@gmail.com', '357 LHP P2 Q10', '09090909', 2),
(8, 'S250220168', 1329000, '2016-03-15 09:35:43', NULL, 'Hùng Nguyễn', 'hungnguyenxuan118@gmail.com', 'asd asdas asd asdas das', '0909090909', 2),
(9, 'S250220169', 1329000, '2016-03-15 09:38:52', NULL, 'Nguyễn Thy Mỹ Linh', 'ntmlinh@gmail.com', '357 LHP P2 Q10', '0912345678', 2),
(11, 'S250220171', 462000, '2016-03-15 09:42:32', NULL, 'Hùng Nguyễn', 'hungnguyenxuan118@gmail.com', 'asd asdas asd asdas das', '0909090909', 2),
(12, 'S250220172', 560000, '2016-03-15 09:44:53', NULL, 'Hùng Nguyễn', 'hungnguyenxuan118@gmail.com', 'asd asdas asd asdas das', '0909090909', 2),
(13, 'S250220174', 560000, '2016-03-15 10:00:16', NULL, 'Hùng Nguyễn', 'hungnguyenxuan118@gmail.com', 'asd asdas asd asdas das', '0909090909', 2),
(14, 'S250220175', 1229000, '2016-03-15 10:17:05', NULL, 'Hùng Nguyễn', 'hungnguyenxuan118@gmail.com', 'asd asdas asd asdas das', '0909090909', 2),
(15, 'S250220176', 208000, '2016-03-15 10:35:50', NULL, 'Hùng Nguyễn Xuân', 'nxhung118@gmail.com', '357 LHP P2 Q10', '09090909', 2),
(16, 'S250220177', 21800000, '2022-09-23 06:07:29', NULL, 'Minh Phuc', 'tung35099@gmail.com', 'phphphph', '0898139808', 2),
(17, 'S250220178', 21800000, '2022-09-23 06:20:23', NULL, 'Minh Phuc', 'tung35099@gmail.com', 'phphphph', '0898139808', 2),
(18, NULL, 11370000, '2022-11-12 00:04:14', NULL, 'Phạm Nguyễn Minh Phúc', 'phngminhphuc0932@gmail.com', '61 Hoài Thanh p14 q8', '0898139808', 2),
(19, NULL, 3280000, '2022-11-12 04:25:02', NULL, 'Minh Phuc', 'phngminhphuc0932@gmail.com', '61 tphcm', '0898139808', 2),
(20, NULL, 1640000, '2022-11-12 04:50:05', NULL, 'Phuc Pham', 'phngminhphuc0932@gmail.com', '61 TP', '0898139808', 2),
(21, NULL, 2490000, '2022-11-12 06:27:33', NULL, 'Minh Phuc', 'phngminhphuc0932@gmail.com', '61 hoaiaiaiai', '0898', 2),
(22, NULL, 890000, '2022-11-12 06:51:24', NULL, 'Minh Phuc', 'tung35099@gmail.com', '61 Hoài Thanh p14 q8', '0898139808', 2),
(27, '468125638', 10680000, '2023-03-09 15:07:50', 15, 'Hải Nam', 'hainam011201@gmail.com', '113 rạch bùng binh', '0379206934', 3),
(28, '580805120', 2430000, '2023-03-09 17:03:23', 15, 'Hải Nam', 'hainam011201@gmail.com', '113 rạch bùng binh', '0379206934', 3);

-- --------------------------------------------------------

--
-- Table structure for table `bs_hinh_san_pham`
--

DROP TABLE IF EXISTS `bs_hinh_san_pham`;
CREATE TABLE IF NOT EXISTS `bs_hinh_san_pham` (
  `id_hinh` int NOT NULL,
  `id_sp` int NOT NULL,
  `ten_hinh` varchar(255) NOT NULL,
  PRIMARY KEY (`id_hinh`),
  KEY `id_sp` (`id_sp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bs_hinh_san_pham`
--

INSERT INTO `bs_hinh_san_pham` (`id_hinh`, `id_sp`, `ten_hinh`) VALUES
(1, 19, 'NIKE AIR MAX IMPACT 3 2.png'),
(2, 19, 'NIKE AIR MAX IMPACT 3 3.png'),
(3, 19, 'NIKE AIR MAX IMPACT 3 4.png'),
(22, 20, 'NIKE FREAK 4 UNBELIEVABLE 2.png'),
(23, 20, 'NIKE FREAK 4 UNBELIEVABLE 3.png'),
(24, 20, 'NIKE FREAK 4 UNBELIEVABLE 4.png'),
(25, 21, 'NIKE KD 15 PRODUCER PACK 2.png'),
(26, 21, 'NIKE KD 15 PRODUCER PACK 3.png'),
(27, 22, 'NIKE KD TREY 5 XIII 2.png'),
(28, 22, 'NIKE KD TREY 5 XIII 3.png'),
(29, 21, 'NIKE KD TREY 5 XIII 4.png'),
(30, 23, 'NIKE KOBE 6 PROTRO ALL-STAR 2.png'),
(31, 23, 'NIKE KOBE 6 PROTRO ALL-STAR 3.png'),
(32, 23, 'NIKE KOBE 6 PROTRO ALL-STAR 4.png'),
(33, 24, 'NIKE KYRIE 8 AK SIREN RED 2.png'),
(34, 24, 'NIKE KYRIE 8 AK SIREN RED 3.png'),
(35, 24, 'NIKE KYRIE 8 AK SIREN RED 4.png'),
(36, 25, 'NIKE KYRIE LOW 5 CHAMPIONS 2.png'),
(37, 25, 'NIKE KYRIE LOW 5 CHAMPIONS 3.png'),
(38, 25, 'NIKE KYRIE LOW 5 CHAMPIONS 4.png'),
(75, 26, 'QXL HOODIE HOME 2.png'),
(76, 30, 'ÁO KHOÁC NIKE BIG SWOOSH 2.png'),
(77, 33, 'QUAN SHORT CHAMPION 2.png'),
(78, 34, 'QUAN NIKE SPORTWEAR WOVEN FLOW 2.png'),
(79, 35, 'QUAN JORDAN FLIGHT 2.png'),
(80, 36, 'QUAN DAU CHAMPION 2.png'),
(81, 37, 'LAKERS KOBE BRYANT SHORT 2.png'),
(82, 38, 'LAKERS ICON EDITION SHORT 2.png'),
(83, 39, 'ALL STAR NBA SHORT 2.png'),
(84, 42, 'ÁO THUN JORDAN PSG LOGO 2.png'),
(85, 43, 'ÁO THUN NIKE FARROW & BALL 2.png'),
(86, 44, 'ÁO THUN NIKE ICON 2.png'),
(87, 45, 'ÁO THUN NIKE JUST DO IT - GRAPHIC 2.png'),
(88, 86, 'ÁO THUN DERRICK CLUB 2.png'),
(89, 86, 'ÁO THUN DERRICK CLUB 3.png'),
(90, 86, 'ÁO THUN DERRICK CLUB 4.png'),
(91, 88, 'NIKE WMNS ZOOM WINFLO 8 2.png'),
(92, 89, 'NIKE AIR ZOOM PEGASUS 38 2.png'),
(93, 90, 'ADIDAS YEEZY BOOST 350 V2 BONE 2.png'),
(94, 90, 'ADIDAS YEEZY BOOST 350 V2 BONE 3.png'),
(95, 90, 'ADIDAS YEEZY BOOST 350 V2 BONE 4.png'),
(96, 91, 'ADIDAS SUPERSTAR ARIZONA 2.png'),
(97, 91, 'ADIDAS SUPERSTAR ARIZONA 3.png'),
(98, 91, 'ADIDAS SUPERSTAR ARIZONA 4.png'),
(99, 92, 'ADIDAS STAN SMITH GREEN 2.png'),
(100, 92, 'ADIDAS STAN SMITH GREEN 3.png'),
(101, 92, 'ADIDAS STAN SMITH GREEN 4.png'),
(102, 93, 'ADIDAS STAN SMITH DIAMOND 2.png'),
(103, 93, 'ADIDAS STAN SMITH DIAMOND 3.png'),
(104, 93, 'ADIDAS STAN SMITH DIAMOND 4.png'),
(105, 96, 'ADIDAS CONTINENTAL VULC J 2.png'),
(106, 96, 'ADIDAS CONTINENTAL VULC J 3.png'),
(107, 96, 'ADIDAS CONTINENTAL VULC J 4.png'),
(108, 97, 'ADIDAS ADIFOM Q OFF-WHITE 2.png'),
(109, 97, 'ADIDAS ADIFOM Q OFF-WHITE 3.png'),
(110, 97, 'ADIDAS ADIFOM Q OFF-WHITE 4.png');

-- --------------------------------------------------------

--
-- Table structure for table `bs_loai_san_pham`
--

DROP TABLE IF EXISTS `bs_loai_san_pham`;
CREATE TABLE IF NOT EXISTS `bs_loai_san_pham` (
  `ID_loai_sp` int NOT NULL,
  `ten_loai_sp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sap_xep` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_loai_cha` int DEFAULT NULL,
  `trang_thai` int NOT NULL,
  PRIMARY KEY (`ID_loai_sp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bs_loai_san_pham`
--

INSERT INTO `bs_loai_san_pham` (`ID_loai_sp`, `ten_loai_sp`, `sap_xep`, `id_loai_cha`, `trang_thai`) VALUES
(20, 'Giày', NULL, 0, 1),
(21, 'Trang phục', NULL, 0, 1),
(22, 'Phụ kiện', NULL, 0, 1),
(23, 'Thương hiệu', NULL, 0, 1),
(24, 'Bóng rổ', NULL, 20, 1),
(25, 'Chạy bộ', NULL, 20, 1),
(26, 'Sneakers', NULL, 20, 1),
(27, 'Áo thun', NULL, 21, 1),
(28, 'Quần', NULL, 21, 1),
(29, 'Áo khoác', NULL, 21, 1),
(30, 'Vớ', NULL, 22, 1),
(31, 'Banh', NULL, 22, 1),
(32, 'Balo', NULL, 22, 1),
(33, 'Nike', NULL, 23, 1),
(34, 'Adidas', NULL, 23, 1),
(35, 'Peak sports', NULL, 23, 1),
(36, 'Shoes Care', NULL, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `bs_loai_thanh_vien`
--

DROP TABLE IF EXISTS `bs_loai_thanh_vien`;
CREATE TABLE IF NOT EXISTS `bs_loai_thanh_vien` (
  `ID` int NOT NULL,
  `ten_loai_user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bs_loai_thanh_vien`
--

INSERT INTO `bs_loai_thanh_vien` (`ID`, `ten_loai_user`) VALUES
(1, 'thành viên'),
(2, 'VIP cấp bạc'),
(3, 'VIP cấp vàng'),
(4, 'VIP cấp kim cương'),
(5, 'Quản trị bán hàng'),
(6, 'Quản trị nội dung'),
(7, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `bs_loai_tin_tuc`
--

DROP TABLE IF EXISTS `bs_loai_tin_tuc`;
CREATE TABLE IF NOT EXISTS `bs_loai_tin_tuc` (
  `ID` int NOT NULL,
  `ten_loai_tin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bs_loai_tin_tuc`
--

INSERT INTO `bs_loai_tin_tuc` (`ID`, `ten_loai_tin`, `alias`) VALUES
(1, 'giảm giá', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bs_nha_san_xuat`
--

DROP TABLE IF EXISTS `bs_nha_san_xuat`;
CREATE TABLE IF NOT EXISTS `bs_nha_san_xuat` (
  `ID` int NOT NULL,
  `ten_nha_san_xuat` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `sdt` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `bs_nha_san_xuat`
--

INSERT INTO `bs_nha_san_xuat` (`ID`, `ten_nha_san_xuat`, `dia_chi`, `email`, `sdt`) VALUES
(1, 'Nike', 'Hà nội', 'nike@gmail.com', '0145678945'),
(2, 'Peak', 'Đà nẵng', 'peak@gmail.com', '0876589354'),
(3, 'Adidas', 'Hà nam', 'adidas@gmail.com', '0876453355'),
(4, 'Sicula', 'Huế', 'sicula@gmail.com', '7645883457');

-- --------------------------------------------------------

--
-- Table structure for table `bs_notice`
--

DROP TABLE IF EXISTS `bs_notice`;
CREATE TABLE IF NOT EXISTS `bs_notice` (
  `id` int NOT NULL,
  `email` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `id_don_hang` int DEFAULT NULL,
  `trang_thai_moi` int DEFAULT NULL,
  `trang_thai_cu` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_trang_thai` (`id_don_hang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `bs_notice`
--

INSERT INTO `bs_notice` (`id`, `email`, `id_don_hang`, `trang_thai_moi`, `trang_thai_cu`) VALUES
(1, 'hainam011201@gmail.com', 1, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bs_san_pham`
--

DROP TABLE IF EXISTS `bs_san_pham`;
CREATE TABLE IF NOT EXISTS `bs_san_pham` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `id_loai_sp` int NOT NULL,
  `ten_san_pham` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `gioi_thieu` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `don_gia` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `gia_giam` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `sku` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `noi_bat` tinyint DEFAULT NULL,
  `trang_thai` tinyint DEFAULT NULL,
  `id_nha_san_xuat` int DEFAULT NULL,
  `hinh` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `ngay_san_xuat` date DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `Fkey_id_nha_san_xuat` (`id_nha_san_xuat`),
  KEY `id_loai_sp` (`id_loai_sp`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `bs_san_pham`
--

INSERT INTO `bs_san_pham` (`ID`, `id_loai_sp`, `ten_san_pham`, `gioi_thieu`, `don_gia`, `gia_giam`, `sku`, `noi_bat`, `trang_thai`, `id_nha_san_xuat`, `hinh`, `ngay_san_xuat`) VALUES
(19, 24, 'NIKE AIR MAX IMPACT 3', 'NIKE AIR MAX IMPACT 3 \r\nCode: DC3725-101\r\nPhối màu: White/Doll/Black.\r\nCông nghệ: Đệm Air Max ở gót, còn lại là đệm Phylon.\r\nFit: True to size hoặc lên 0.5 size.\r\nĐề xuất: Indoor / Outdoor.\r\nVị trí: SF, PF, C.', '2850000', '2750000', 'DC3725-101', 1, 1, 1, 'NIKE AIR MAX IMPACT 3 1.png', NULL),
(20, 24, 'NIKE FREAK 4 UNBELIEVABLE', 'NIKE FREAK 4 \"UNBELIEVABLE\"\r\nCode: DO9680-400\r\nPhối màu: Dark Marina Blue/Barely Volt-Pink Gaze.\r\nCông nghệ: 2 miếng Zoom Air được sử dụng ở bàn chân trước, còn lại được bọc bằng đệm Phylon.\r\nFit: True to size hoặc lên 0.5 size.\r\nĐề xuất: Indoor / Outdoor (Mặt sân đẹp).\r\nVị trí: Đa vị trí.', '3490000', '3349000', 'DO9680-400', 1, 1, 1, 'NIKE FREAK 4 UNBELIEVABLE 1.png', NULL),
(21, 24, 'NIKE KD 15 PRODUCER PACK', 'NIKE KD 15 \"PRODUCER PACK\"\r\nCode: DO9827-900\r\nPhối màu: Multi-Color/Multi-Color.\r\nCông nghệ: Full-length Air Zoom Strobel.\r\nFit: True to size hoặc lên 0.5 size.\r\nĐề xuất: Indoor / Outdoor (mặt sân không quá xấu).\r\nVị trí: PG, SG, SF.', '3990000', '2980000', 'DO9827-900', 1, 1, 1, 'NIKE KD 15 PRODUCER PACK 1.png', NULL),
(22, 24, 'NIKE KD TREY 5 XIII', 'NIKE KD TREY 5 XIII\r\nCode: CK2090-003\r\nPhối màu: Black/White/Sea Blue.\r\nCông nghệ: Đệm Renew.\r\nFit: True to size hoặc lên 0.5 size.\r\nĐề xuất: Indoor / Outdoor.\r\nVị trí: PG, SG, SF.\r\n', '2050000', '1990000', 'CK2090-003', 1, 1, 1, 'NIKE KD TREY 5 XIII 1.png', NULL),
(23, 24, 'NIKE KOBE 6 PROTRO ALL-STAR', 'NIKE KOBE 6 PROTRO \"ALL-STAR\" - COND: 9.8\r\nCode: DH9888-600\r\nPhối màu: Challenge Red/Black/White.\r\nCông nghệ: Đệm Air Zoom Turbo được đặt ở bàn chân trước, còn lai được bọc bằng đệm Phylon.\r\nFit: True to size hoặc lên 0.5 size.\r\nĐề xuất: Indoor.\r\nVị trí: PG, SG.\r\nGiày kí gửi; Cond: 9.8 (Full box).', '7000000', '6500000', 'DH9888-600', 1, 1, 1, 'NIKE KOBE 6 PROTRO ALL-STAR 1.png', NULL),
(24, 24, 'NIKE KYRIE 8 AK  SIREN RED', 'NIKE KYRIE 8 \"AK - SIREN RED\"\r\nCode: DM0856-600\r\nPhối màu: Siren Red/Light Blue/White.\r\nCông nghệ: Đệm Zoom Strobel ở bàn chân trước và túi Zoom ở phần gót.\r\nFit: True to size hoặc lên 0.5 size.\r\nĐề xuất: Indoor / Outdoor (mặt sân không quá xấu).\r\nVị trí: PG, SG, SF.', '3790000', '2350000', 'DM0856-600', 1, 1, 1, 'NIKE KYRIE 8 AK SIREN RED 1.png', NULL),
(25, 24, 'NIKE KYRIE LOW 5 CHAMPIONS', 'NIKE KYRIE LOW 5 \"CHAMPIONS\"\r\nCode: DJ6014-101\r\nPhối màu: White/Metallic Gold/Black.\r\nCông nghệ: Đệm Zoom Air được sử dụng ở phần bàn chân trước, còn lại được bọc bằng đệm Phylon.\r\nFit: True to size hoặc lên 0.5 size.\r\nĐề xuất: Indoor / Outdoor (Mặt sân không quá xấu).\r\nVị trí: PG, SG, SF.', '2700000', '2350000', 'DJ6014-101', 1, 1, 1, 'NIKE KYRIE LOW 5 CHAMPIONS 1.png', NULL),
(26, 29, 'QXL HOODIE \"HOME\"\r\nForm: Oversize', 'Form: Oversize', '420000', '150000', 'qxlhoodie', 0, 1, 4, 'QXL HOODIE HOME 1.png\r\n', NULL),
(27, 29, 'JORDAN JUMPMAN AIR FULL-ZIP', 'JORDAN JUMPMAN AIR FULL-ZIP\r\n\r\nMàu: Red.\r\nCode: AR2248-687.', '990000', '790000', 'AR2248-687', 0, 1, 4, 'JORDAN JUMPMAN AIR FULL-ZIP 1.png', NULL),
(28, 29, 'ÁO KHOÁC NIKE THERMA PULLOVER', 'ÁO KHOÁC NIKE THERMA PULLOVER\r\n\r\nCode: BV2740-681\r\nPhối màu: Red / Orange Camo.\r\nChất liệu: Thun, vải nỉ.\r\nChính hãng.', '950000', '760000', 'BV2740-681', 0, 1, 4, 'ÁO KHOÁC NIKE THERMA PULLOVER 1', NULL),
(29, 29, 'ÁO KHOÁC NIKE NSW TRACK SUIT BASIC', 'ÁO KHOÁC NIKE NSW TRACK SUIT BASIC\r\nCode: 861780-010\r\nPhối màu: Black.\r\nChất liệu: Nỉ thun.\r\nChính hãng.', '790000', '150000', '861780-010', 0, 1, 4, 'ÁO KHOÁC NIKE NSW TRACK SUIT BASIC 1.png', NULL),
(30, 29, 'ÁO KHOÁC NIKE BIG SWOOSH', 'ÁO KHOÁC NIKE \"BIG SWOOSH\"\r\nChất liệu: Vải dù (2 lớp).', '500000', '350000', 'nikebigswoosh', 0, 1, 4, 'ÁO KHOÁC NIKE BIG SWOOSH 1.png', NULL),
(31, 29, 'ADIDAS TECH CREWNECK SWEATSHIRT', 'ADIDAS TECH CREWNECK SWEATSHIRT\r\nCode: ED6121\r\nPhối màu: Black/White.', '800000', '650000', 'ED6121', 0, 1, 4, 'ADIDAS TECH CREWNECK SWEATSHIRT 1.png', NULL),
(32, 20, 'ADIDAS CAMO LINEAR HOODIE', NULL, '900000', '650000', 'EI9728', 0, 1, 3, NULL, NULL),
(33, 28, 'QUẦN SHORT CHAMPION', 'QUẦN SHORT CHAMPION \r\nPhối màu: Đỏ/Xanh.\r\nChính hãng.', '400000', '350000', 'quanchampion', 0, 1, 1, 'QUẦN SHORT CHAMPION 1.png', NULL),
(34, 28, 'QUẦN NIKE SPORTWEAR WOVEN FLOW', 'QUẦN NIKE SPORTWEAR WOVEN FLOW\r\nCode: DR5678-010 / DR5678-403 / DR5678-700 / DR5678-657\r\nPhối màu: Black / Blue / Yellow / Red.\r\nChính hãng.\r\nForm Âu.', '550000', '500000', 'DR5678-010 / DR5678-403 / DR5678-700 / DR5678-657', 0, 1, 1, 'QUẦN NIKE SPORTWEAR WOVEN FLOW 1.png', NULL),
(35, 28, 'QUẦN JORDAN FLIGHT', 'QUẦN JORDAN FLIGHT\r\nPhối màu: Black.', '350000', '300000', 'quanjordan', 0, 1, 1, 'QUẦN JORDAN FLIGHT 1.png', NULL),
(36, 28, 'QUẦN ĐẤU CHAMPION', 'QUẦN ĐẤU CHAMPION\r\nPhối màu: Xanh/Trắng.\r\nChính hãng.', '400000', '350000', 'quandauchampion', 0, 1, 1, 'QUẦN ĐẤU CHAMPION 1.png', NULL),
(37, 28, 'LAKERS KOBE BRYANT SHORT', 'LAKERS KOBE BRYANT SHORT\r\nPhối màu: Yellow/Purple.\r\nMặc chơi thể thao hoặc mặc hàng ngày.\r\nForm Âu.', '350000', '300000', 'lakersshort', 0, 1, 1, 'LAKERS KOBE BRYANT SHORT 1.png', NULL),
(38, 28, 'LAKERS ICON EDITION SHORT', 'LAKERS ICON EDITION SHORT\r\nPhối màu: Gold/White.\r\nMặc chơi thẻ thao hoặc mặc hàng ngày.\r\nForm Âu', '350000', '300000', 'quandaunba', 0, 1, 1, 'LAKERS ICON EDITION SHORT 1.png', NULL),
(39, 28, 'ALL STAR NBA SHORT', 'ALL STAR NBA SHORT\r\nPhối màu: Multi Color.\r\nQuần nằm trong đồng phục thi đấu cho sự kiện NBA All Star.\r\nMặc chơi thể thao hoặc mặc hàng ngày.', '350000', '300000', 'allstarshort', 0, 1, 1, 'ALL STAR NBA SHORT 1.png', NULL),
(41, 27, 'ÁO THUN NIKE FC', 'ÁO THUN NIKE FC\r\nCode: DH7445-010\r\nPhối màu: Black.\r\nChính hãng.', '850000', '750000', 'DH7445-010', 0, 1, 3, 'ÁO THUN NIKE FC 1.png', NULL),
(42, 20, 'ÁO THUN JORDAN PSG LOGO', NULL, '950000', '750000', 'DJ0402-100', 0, 1, 1, NULL, NULL),
(43, 27, 'ÁO THUN NIKE FARROW & BALL', 'ÁO THUN NIKE FARROW & BALL\r\nCode: DR1280-010 / DR1280-063\r\nPhối màu: Grey / Black.\r\nChính hãng.\r\n', '790000', '690000', 'DR1280-010 / DR1280-063', 0, 1, 3, 'ÁO THUN NIKE FARROW & BALL 1.png', NULL),
(44, 27, 'ÁO THUN NIKE ICON', NULL, '790000', '690000', 'BV0629-382', 0, 1, 1, 'ÁO THUN NIKE ICON 1.png', NULL),
(45, 27, 'ÁO THUN NIKE JUST DO IT - GRAPHIC', 'ÁO THUN NIKE \"JUST DO IT\" - GRAPHIC\r\nCode: DR1222-800\r\nPhối màu: Multi Color/Multi Color.\r\nChính hãng.\r\n', '850000', '550000', 'DR1222-800', 0, 1, 3, 'ÁO THUN NIKE JUST DO IT - GRAPHIC 1.png', NULL),
(86, 27, 'ÁO THUN DERRICK CLUB', 'ÁO THUN DERRICK CLUB', '480000', '218000', 'aothun', 0, 1, 3, 'ÁO THUN DERRICK CLUB 1.png', NULL),
(87, 27, 'SWEATER NIKE JUST DO IT', 'SWEATER NIKE \"JUST DO IT\"\r\nCode: DO2904-010\r\nPhối màu: Black/Multi Color.\r\nChất áo không quá dày nên có thể mặc hàng ngày.\r\nLưu ý: Áo sẽ đổ lông nhẹ thời gian đầu, nên giặt riêng cho đến khi hết tình trạng trên; không nên giặt mặt trái.\r\nChính hãng.', '890000', '790000', 'DO2904-010', 0, 1, 3, 'SWEATER NIKE JUST DO IT.png', NULL),
(88, 25, 'NIKE WMNS ZOOM WINFLO 8', 'NIKE WMNS ZOOM WINFLO 8\r\nCode: CW3421-100\r\nPhối màu: White/Bright Crimson/Total Orange/Black.\r\nCông nghệ: Zoom Air kết hợp cùng đệm Phylon.\r\nFit: True to size.\r\nĐề xuất: Mang chạy bộ hoặc đi hàng ngày.\r\n', '1850000', '1650000', 'CW3421-100', 0, 1, 2, 'NIKE WMNS ZOOM WINFLO 8 1.png', NULL),
(89, 25, 'NIKE AIR ZOOM PEGASUS 38', 'NIKE AIR ZOOM PEGASUS 38\r\nCode: CZ1815-002\r\nPhối màu: Black/Anthracite/Volt/White.\r\nCông nghệ: Air Zoom kết hợp cùng đệm Phylon.\r\nFit: True to size.\r\nĐề xuất: Mang chạy bộ hoặc đi lại hàng ngày.', '2450000', '1350000', 'CZ1815-002', 0, 1, 2, 'NIKE AIR ZOOM PEGASUS 38 1.png', NULL),
(90, 26, 'ADIDAS YEEZY BOOST 350 V2 BONE', 'ADIDAS YEEZY BOOST 350 V2 \"BONE\"\r\nCode: HQ6316\r\nPhối màu: Bone/Bone-Bone.\r\nCông nghệ: Đệm Boost.\r\nFit: True to size.\r\nĐề xuất: Mang hàng ngày, sưu tầm.', '7200000', '5200000', 'HQ6316', 0, 1, 4, 'ADIDAS YEEZY BOOST 350 V2 BONE 1.png', NULL),
(91, 26, 'ADIDAS SUPERSTAR ARIZONA', 'ADIDAS SUPERSTAR ARIZONA\r\nCode: GZ2871\r\nPhối màu: Chalk White / Chalk White / Chalk White.\r\nFit: True to size hoặc lên từ 0.5-1 size.\r\nĐề xuất: Sử dụng đi lại hằng ngày, đi chơi.', '2200000', '1780000', 'GZ2871', 0, 1, 4, 'ADIDAS SUPERSTAR ARIZONA 1.png', NULL),
(92, 26, 'ADIDAS STAN SMITH GREEN', 'ADIDAS STAN SMITH \"GREEN\"\r\nCode: M20324.\r\nPhối màu: Cloud White/Core White/Green.\r\nFit: True to size hoặc lên từ 0.5 - 1 size.\r\nĐề xuất: Sử dụng đi lại hằng ngày, đi chơi.\r\n', '1800000', '1350000', 'M20324', 0, 1, 4, 'ADIDAS STAN SMITH GREEN 1.png', NULL),
(93, 26, 'ADIDAS STAN SMITH DIAMOND', 'ADIDAS STAN SMITH \"DIAMOND\"\r\nCode: EE8483.\r\nPhối màu: Cloud White/Cloud White/Core Black.\r\nFit: True to size hoặc lên 0.5 - 1 size.\r\nĐề xuất: Sử dụng đi lại hằng ngày, đi chơi.\r\n', '1800000', '1350000', 'EE8483', 0, 1, 4, 'ADIDAS STAN SMITH DIAMOND 1.png', NULL),
(96, 20, 'ADIDAS CONTINENTAL VULC J', NULL, '1900000', '1650000', 'EF9074', 0, 0, 3, NULL, NULL),
(97, 20, 'ADIDAS ADIFOM Q OFF-WHITE', NULL, '00000', '3500000', '3', 0, 1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bs_search_null`
--

DROP TABLE IF EXISTS `bs_search_null`;
CREATE TABLE IF NOT EXISTS `bs_search_null` (
  `search` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bs_thanh_vien`
--

DROP TABLE IF EXISTS `bs_thanh_vien`;
CREATE TABLE IF NOT EXISTS `bs_thanh_vien` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `ho` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tai_khoan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_khau` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diem_tich_luy` int DEFAULT NULL,
  `ngay_dang_ky` date DEFAULT NULL,
  `active_code` int DEFAULT NULL,
  `thoi_gian_dang_nhap` datetime DEFAULT NULL,
  `dien_thoai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_phan_quyen` int DEFAULT NULL,
  `id_loai_user` int DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bs_thanh_vien`
--

INSERT INTO `bs_thanh_vien` (`ID`, `ho`, `ten`, `tai_khoan`, `mat_khau`, `email`, `diem_tich_luy`, `ngay_dang_ky`, `active_code`, `thoi_gian_dang_nhap`, `dien_thoai`, `id_phan_quyen`, `id_loai_user`) VALUES
(3, 'Nguyễn', 'Linh', 'linhnguyen', '670b14728ad9902aecba32e22fa4f6bd', 'linhnguyen@gmail.com', 50000, NULL, NULL, '2022-10-11 17:10:04', NULL, NULL, 1),
(4, 'Nguyễn', 'Hà', 'hanguyen', '670b14728ad9902aecba32e22fa4f6bd', 'hanguyen@gmail.com', 50000, NULL, NULL, '2022-10-11 17:10:04', NULL, NULL, 1),
(6, 'Phạm', 'Minh Phúc', 'minhphuc', '670b14728ad9902aecba32e22fa4f6bd', 'phucpham0000@gmail.com', 5000, NULL, NULL, NULL, '0988793979', NULL, 1),
(7, 'Vương Đỗ', 'Anh Thy', 'anthea', 'd41d8cd98f00b204e9800998ecf8427e', 'anthea03102000@gmail.com', 200000, '2016-03-09', NULL, NULL, '0907056235', NULL, 1),
(8, NULL, 'MinhPhuc', 'MinhPhuc haha', '25f9e794323b453885f5181f1b624d0b', 'phngminhphuc0932@gmail.com', NULL, '2022-11-12', NULL, NULL, NULL, NULL, NULL),
(9, NULL, 'PhucPham', 'MinhPhuc', '1596073950be69668bcec71cb60ce990', 'phngminhphuc0932@gmail.com', NULL, '2022-11-12', NULL, NULL, NULL, NULL, NULL),
(10, NULL, 'Minh Phuc', 'MinhPhuc', 'fa86ee7e44999b9739477acf6b56b284', 'phngminhphuc0932@gmail.com', NULL, '2022-11-12', NULL, NULL, NULL, NULL, NULL),
(11, NULL, 'Minh Phuc', 'MinhPhuc', '25d55ad283aa400af464c76d713c07ad', 'phngminhphuc0932@gmail.com', NULL, '2022-11-12', NULL, NULL, NULL, NULL, NULL),
(12, NULL, 'Minh Phuc', 'minhphuc', '25d55ad283aa400af464c76d713c07ad', 'phngminhphuc0932@gmail.com', NULL, '2022-11-12', NULL, NULL, NULL, NULL, NULL),
(13, NULL, 'Minh Phuc', 'Minhphuc', '25f9e794323b453885f5181f1b624d0b', 'phng@gmail.com', NULL, '2022-11-12', NULL, NULL, NULL, NULL, NULL),
(14, NULL, 'Minh Phuc', 'MinhPhuc', '25f9e794323b453885f5181f1b624d0b', 'phng@gmail.com', NULL, '2022-11-12', NULL, NULL, NULL, NULL, NULL),
(15, 'Phạm', 'Hải Nam', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'hainam011201@gmail.com', NULL, NULL, NULL, NULL, '0379206934', NULL, 7),
(17, NULL, 'Pham Hai Nam', 'hainam0112', '25d55ad283aa400af464c76d713c07ad', 'hainam0000@gmail.com', NULL, '2023-03-04', NULL, NULL, NULL, NULL, NULL),
(18, NULL, 'Nam bo', 'hainam0112', 'b762c3d282988c9cddfe36811f8b3450', 'hainam00000@gmail.com', NULL, '2023-03-07', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bs_tin_tuc`
--

DROP TABLE IF EXISTS `bs_tin_tuc`;
CREATE TABLE IF NOT EXISTS `bs_tin_tuc` (
  `ID` int NOT NULL,
  `tieu_de` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tom_tat` text COLLATE utf8mb4_unicode_ci,
  `chi_tiet` text COLLATE utf8mb4_unicode_ci,
  `id_loai_tin_tuc` int DEFAULT NULL,
  `hinh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngay_dang` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `Fkey_id_loai_tt` (`id_loai_tin_tuc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bs_tin_tuc`
--

INSERT INTO `bs_tin_tuc` (`ID`, `tieu_de`, `tom_tat`, `chi_tiet`, `id_loai_tin_tuc`, `hinh`, `ngay_dang`) VALUES
(2, 'sản phẩm giảm ', 'Most of my friends like to stay inside to play video games, read books or watch TV, but I have a good hobby of going outside and playing sports.', 'Most of my friends like to stay inside to play video games, read books or watch TV, but I have a good hobby of going outside and playing sports. I play many different sports in my free time; some of them are soccer, swimming, volleyball and basketball. Sometimes I also ride the bikes or do board skating with my cousin in the park. In my opinion, doing sport is one of the rare hobbies that actually have good impacts on me. I am taller than most of my classmates thanks to swimming and basketball lessons that I take during summer time. My muscles are even stronger than my older brother, and I can last longer than most other people in any sport competition. Sports bring me a lot of benefits, and they are also fun things to do at the same time. I love the feeling of the cool water run through my face when I am swimming, and it seems like I am flying whenever I take a dive underwater. When I play soccer, it is very exciting for me or my teammates to score a goal even though we do not take part in any tournament. Both of my physical and mental health become better after I play sports, so it can be considered as the best things to do in my free time. Sports are like a part of my life besides other activities, and I will continue to play sports till I am too weak for them.', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bs_ton_kho`
--

DROP TABLE IF EXISTS `bs_ton_kho`;
CREATE TABLE IF NOT EXISTS `bs_ton_kho` (
  `ID` int NOT NULL,
  `id_sp` int NOT NULL,
  `size` int NOT NULL,
  `so_luong` int NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `id_sp` (`id_sp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bs_ton_kho`
--

INSERT INTO `bs_ton_kho` (`ID`, `id_sp`, `size`, `so_luong`) VALUES
(1, 19, 43, 12),
(2, 19, 42, 14),
(3, 19, 44, 2),
(4, 91, 44, 100);

-- --------------------------------------------------------

--
-- Table structure for table `bs_trang_thai`
--

DROP TABLE IF EXISTS `bs_trang_thai`;
CREATE TABLE IF NOT EXISTS `bs_trang_thai` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_don_hang` int DEFAULT NULL,
  `trang_thai_moi` int DEFAULT NULL,
  `trang_thai_cu` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `bs_trang_thai`
--

INSERT INTO `bs_trang_thai` (`id`, `id_don_hang`, `trang_thai_moi`, `trang_thai_cu`) VALUES
(2, 2, 3, NULL),
(3, 3, 3, NULL),
(4, 4, 2, NULL),
(5, 5, 2, 4),
(6, 6, 1, 1),
(7, 7, 2, 4),
(8, 8, 1, 1),
(9, 9, 4, 3),
(10, 11, 1, 4),
(11, 12, 2, 4),
(12, 13, 1, 3),
(13, 14, 1, 3),
(14, 15, 2, 4),
(15, 16, 2, 4),
(16, 17, 2, 4),
(17, 27, 3, NULL),
(18, 28, 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `loai_trang_thai`
--

DROP TABLE IF EXISTS `loai_trang_thai`;
CREATE TABLE IF NOT EXISTS `loai_trang_thai` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ten_trang_thai` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `loai_trang_thai`
--

INSERT INTO `loai_trang_thai` (`id`, `ten_trang_thai`) VALUES
(1, 'Đã hủy'),
(2, 'Giao thành công'),
(3, 'Đang chờ duyệt'),
(4, 'Đã duyệt');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
