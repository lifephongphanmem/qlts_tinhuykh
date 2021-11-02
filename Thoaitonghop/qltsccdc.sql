-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2015 at 09:10 AM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qltsccdc`
--

-- --------------------------------------------------------

--
-- Table structure for table `thongtindonvi`
--

CREATE TABLE IF NOT EXISTS `thongtindonvi` (
  `madonvi` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'mã đơn vị LC0101001',
  `maqhns` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ma đơn vị quan hệ ngân sách',
  `tendv` varchar(250) COLLATE utf8_unicode_ci NOT NULL COMMENT 'tên đơn vị',
  `tendccq` varchar(250) COLLATE utf8_unicode_ci NOT NULL COMMENT 'tên đơn vị tổng hợp',
  `tencqcq` varchar(250) COLLATE utf8_unicode_ci NOT NULL COMMENT 'tên cơ quan chủ quản',
  `loaihinh` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'loại hình đơn vị',
  `nlb` varchar(150) COLLATE utf8_unicode_ci NOT NULL COMMENT 'người lập biểu',
  `ptkt` varchar(150) COLLATE utf8_unicode_ci NOT NULL COMMENT 'phụ trách kế toán',
  `ttdv` varchar(150) COLLATE utf8_unicode_ci NOT NULL COMMENT 'thủ trưởng đơn vị',
  `tendangnhap` varchar(150) COLLATE utf8_unicode_ci NOT NULL COMMENT 'tên đăng nhập',
  `matkhau` varchar(150) COLLATE utf8_unicode_ci NOT NULL COMMENT 'mật khẩu',
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL COMMENT 'địa chỉ email',
  `sodt` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'số điện thoại',
  `hotenngdung` varchar(150) COLLATE utf8_unicode_ci NOT NULL COMMENT 'họ tên người dùng',
  `diadanh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ketoantruong` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `thukho` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `thuquy` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chucdanh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `thongbaophong` text COLLATE utf8_unicode_ci NOT NULL,
  `thongbaoso` text COLLATE utf8_unicode_ci NOT NULL,
  `phanloai` varchar(250) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Phân loại đơn vị (cơ quan nhà nước, đơn vị sự nghiệp, tổ chức)'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thongtindonvi`
--

INSERT INTO `thongtindonvi` (`madonvi`, `maqhns`, `tendv`, `tendccq`, `tencqcq`, `loaihinh`, `nlb`, `ptkt`, `ttdv`, `tendangnhap`, `matkhau`, `email`, `sodt`, `hotenngdung`, `diadanh`, `ketoantruong`, `thukho`, `thuquy`, `diachi`, `chucdanh`, `thongbaophong`, `thongbaoso`, `phanloai`) VALUES
('0', '', 'Bộ Tài chính', 'Hà Nội, Việt Nam', '', 'Đơn vị tổng hợp', '', '', '', 'admin', '202cb962ac59075b964b07152d234b70', '', '', '', '', '', '', '', '', '', '', '', ''),
('00LC', '', 'Sở Tài chính tỉnh Lai Châu', '', '', 'Đơn vị tổng hợp', '', '', '', 'asotaichinhlc', '202cb962ac59075b964b07152d234b70', '', '', '', '', '', '', '', '', '', '', 'Nộp báo cáo trước tháng 7/2015', ''),
('00LC.001', '', 'Phòng Tài chính Thành Phố Lai Châu', '', '', 'Đơn vị tổng hợp', '', '', '', 'aphongtctplc', '202cb962ac59075b964b07152d234b70', '', '', '', '', '', '', '', '', '', 'Nộp báo cáo trước ngày 25/05/2016', '', ''),
('00LC.001.PTC.002', '', 'UBND Phường Quyết Thắng', '', 'Phòng Tài chính Thành Phố Lai Châu', 'Đơn vị báo cáo', '', '', '', 'phuongquyetthang', '202cb962ac59075b964b07152d234b70', '', '', '', '', '', '', '', '', '', '', '', ''),
('00LC.001.PTC.003', '', 'UBND Phường Đoàn Kết', '', 'Phòng Tài chính Thành Phố Lai Châu', 'Đơn vị báo cáo', 'Nguyễn Quang Nhật', 'Nguyễn Quang Nhật', 'Nguyễn Quang Nhật', 'phuongdoanket', '202cb962ac59075b964b07152d234b70', '', '', 'Nguyễn Quang Nhật', '', '', '', '', '', '', '', '', ''),
('00LC.002', '', 'Phòng Tài chính Huyện Tam Đường', '', '', 'Đơn vị tổng hợp', '', '', '', 'aphongtctamduong', '202cb962ac59075b964b07152d234b70', '', '', '', '', '', '', '', '', '', 'Nộp báo cáo trước ngày 25/05/2016', '', ''),
('00LC.002.PTC.002', '', 'UBND Sùng Phài', '', 'Phòng Tài chính Huyện Tam Đường', 'Đơn vị báo cáo', '', '', '', 'sungphai', '202cb962ac59075b964b07152d234b70', '', '', '', '', '', '', '', '', '', '', '', ''),
('00LC.002.PTC.003', '', 'UBND Bản Giang', '', 'Phòng Tài chính Huyện Tam Đường', 'Đơn vị báo cáo', '', '', '', 'bangiang', '202cb962ac59075b964b07152d234b70', '', '', '', '', '', '', '', '', '', '', '', ''),
('00VP', '', 'Sở Tài chính tỉnh Vĩnh Phúc', 'Thành phố Vĩnh Yên, Tỉnh Vĩnh Phúc', '', 'Đơn vị tổng hợp', '', '', '', 'vpadmin', '202cb962ac59075b964b07152d234b70', '', '', '', '', '', '', '', '', '', '', 'Nộp báo cáo trước tháng 6/2015', ''),
('00VP.000.000.001', '', 'Sở Tài chính tỉnh Vĩnh Phúc', 'Thành phố Vĩnh Yên, Tỉnh Vĩnh Phúc', '', 'Đơn vị báo cáo', '', '', '', 'stcvp', '202cb962ac59075b964b07152d234b70', '', '', '', '', '', '', '', '', '', '', '', ''),
('00VP.001', '', 'Phòng Tài chính huyện Tam Dương', 'Thị trấn Hợp Hòa, huyện Tam Dương , Tỉnh Vĩnh Phúc', '', 'Đơn vị tổng hợp', '', '', '', 'angochieu', '202cb962ac59075b964b07152d234b70', '', '', '', '', '', '', '', '', '', 'Nộp báo cáo trước ngày 25/05/2016', '', ''),
('00VP.001.PTC.001', '', 'Phòng Tài chính huyện Tam Dương', 'Thị trấn Hợp Hòa, huyện Tam Dương , Tỉnh Vĩnh Phúc', '', 'Đơn vị báo cáo', '', '', '', 'ngochieu', '202cb962ac59075b964b07152d234b70', '', '', '', '', '', '', '', '', '', '', '', ''),
('00VP.001.PTC.002', '', 'UBND xã Vân Hội', 'xã Vân Hội, huyện Tam Dương , Tỉnh Vĩnh Phúc', 'Phòng Tài chính huyện Tam Dương', 'Đơn vị báo cáo', '', '', '', 'xuantruong', '202cb962ac59075b964b07152d234b70', '', '', '', '', '', '', '', '', '', '', '', ''),
('00VP.001.PTC.003', '', 'UBND xã Hoàng Lâu', 'xã Hoàng Lâu, huyện Tam Dương , Tỉnh Vĩnh Phúc', '', 'Đơn vị báo cáo', '', '', '', 'vannguyen', '202cb962ac59075b964b07152d234b70', '', '', '', '', '', '', '', '', '', '', '', ''),
('00VP.S01', '', 'Sở giáo dục tỉnh Vĩnh Phúc', 'Thị trấn Hợp Hòa, huyện Tam Dương , Tỉnh Vĩnh Phúc', '', 'Đơn vị tổng hợp', '', '', '', 'angochieu1', '202cb962ac59075b964b07152d234b70', '', '', '', '', '', '', '', '', '', 'Nộp báo cáo trước ngày 25/05/2015', '', ''),
('msdv', '', 'pmcs', '', '', '', '', '', '', 'pmcs', '01464ab17b029407031e842c0d2308da', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `thongtindonvi`
--
ALTER TABLE `thongtindonvi`
  ADD PRIMARY KEY (`madonvi`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
