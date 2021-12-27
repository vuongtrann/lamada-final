-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 14, 2021 at 11:05 PM
-- Server version: 10.6.4-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dacndb`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `MSBL` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MSKH` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MSSP` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoiDung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ThoiGian` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`MSBL`, `MSKH`, `MSSP`, `NoiDung`, `ThoiGian`) VALUES
('BL01', 'KH01', 'ASUSROG15', 'Sản phẩm tốt', '2021-11-29 16:50:34'),
('BL02', 'KH02', 'MSIB15', 'Sản phẩm tuyệt vời', '2021-11-29 16:51:37'),
('BL03', 'KH03', 'MSIB15', 'Sản phẩm tuyệt vời', '2021-12-05 00:00:00'),
('BL04', 'KH05', 'MBZ590', 'Chất lượng tốt bền', '2021-12-05 00:00:00'),
('BL05', 'KH04', 'MSIB15', 'Phù hợp với túi tiền', '2021-12-05 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `MSCTDH` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MSDH` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MSSP` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoLuong` int(11) NOT NULL DEFAULT 0,
  `Gia` float NOT NULL DEFAULT 0,
  `TongTien` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`MSCTDH`, `MSDH`, `MSSP`, `SoLuong`, `Gia`, `TongTien`) VALUES
('CTDH01', 'DH01', 'EJ1046T', 1, 12690000, 12690000),
('CTDH02', 'DH02', 'HN015T', 1, 12790000, 12790000),
('CTDH03', 'DH03', 'HN015T', 4, 4000000, 4000000),
('CTDH04', 'DH04', 'H510M-A', 1, 10000000, 10000000);

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `MSDH` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MSNV` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MSKH` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgayDat` datetime NOT NULL,
  `MSTT` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgayGiao` datetime NOT NULL,
  `TongTien` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`MSDH`, `MSNV`, `MSKH`, `NgayDat`, `MSTT`, `NgayGiao`, `TongTien`) VALUES
('DH01', 'NV01', 'KH01', '2021-11-29 16:54:44', 'CXL', '2021-12-02 16:54:44', 30000000),
('DH02', 'NV02', 'KH02', '2021-12-05 00:00:00', 'DaGH', '2021-12-06 00:00:00', 1000000),
('DH03', 'NV04', 'KH05', '2021-12-04 00:00:00', 'DaGH', '2021-12-05 00:00:00', 10000000),
('DH04', 'NV01', 'KH05', '2021-12-03 00:00:00', 'DGH', '2021-12-25 00:00:00', 12690000);

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `MSGH` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MSSP` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenSP` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IMG` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gia` float NOT NULL DEFAULT 0,
  `SoLuong` int(11) NOT NULL DEFAULT 0,
  `TongTien` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `giohang`
--

INSERT INTO `giohang` (`MSGH`, `MSSP`, `TenSP`, `IMG`, `Gia`, `SoLuong`, `TongTien`) VALUES
('GH01', '73S1224GH', '73S1224GH-73S1224GH', '', 12690000, 3, 12690000),
('GH02', 'KI429T', 'KI429T - KI429T', '', 12790000, 2, 12790000),
('GH03', '502X', '502X-502X', '', 12790000, 1, 12790000),
('GH04', 'MBZ590', 'MBZ590-MBZ590', '', 36990000, 2, 36990000);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MSKH` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenKH` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SDT` int(11) NOT NULL DEFAULT 0,
  `MKhau` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MSKH`, `TenKH`, `DiaChi`, `SDT`, `MKhau`) VALUES
('KH01', 'Trần Quốc Vương', '715 Tạ Quang Bửu, Phường 4, Quận 8', 968580776, '123456'),
('KH02', 'Chiu Thuỳ Tỷ', '725 Tạ Quang Bửu, Phường 4, Quận 8', 968580776, '123456'),
('KH03', 'Nguyễn Văn A', '735 Tạ Quang Bữu, Phường 4, Quận 8', 923723293, '123456'),
('KH04', 'Trần Văn C', '200 Tùng Thiện Vương, Phường 11, Quận 8', 123456789, '123456'),
('KH05', 'Lê Thị B', '271 Tùng Thiện Vương, Phường 11, Quận 8', 23122142, '123456');

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `MSLSP` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenLoai` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`MSLSP`, `TenLoai`) VALUES
('LGM', 'Laptop gaming'),
('LVP', 'Laptop văn phòng'),
('PKGM', 'Phụ kiện gaming'),
('PKVP', 'Phụ kiện văn phòng');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MSNV` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenNV` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MKhau` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SDT` int(11) NOT NULL,
  `MSQH` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgaySinh` date NOT NULL,
  `GioiTinh` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`MSNV`, `TenNV`, `MKhau`, `SDT`, `MSQH`, `NgaySinh`, `GioiTinh`, `DiaChi`) VALUES
('NV01', 'Trần Văn A', '123456', 968580776, 'NV', '2000-11-01', 'Nam', '715 Tạ Quang Bửu Phường 4 Quận 8'),
('NV02', 'Trần Văn B', '123456', 968580776, 'QL', '2000-11-11', 'Nam', '715 Tạ Quang Bửu Phường 5 Quận 8'),
('NV03', 'Lê Thị Thuỳ Dương', '123456', 968580776, 'NV', '2000-03-30', 'Nữ', '716 Tạ Quang Bửu Phường 7 Quận 8'),
('NV04', 'Nguyễn Trần Lê', '123456', 968580776, 'AD', '1999-12-27', 'Nam', '715 Tạ Quang Bửu Phường 4 Quận 8');

-- --------------------------------------------------------

--
-- Table structure for table `nhasanxuat`
--

CREATE TABLE `nhasanxuat` (
  `MSNSX` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenNSX` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `XuatSu` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `SDT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`MSNSX`, `TenNSX`, `XuatSu`, `SDT`) VALUES
('ACER', 'Acer', 'Đài Loan', 123456789),
('ASUS', 'AsusTek Computer Inc.', 'Đài Loan', 123456789),
('DELL', 'Dell Inc.', 'Hoa Kỳ', 333567192),
('GGB', 'Gigabyte Technology', 'Đài Loan', 123456789),
('MSI', 'Micro-Star International', 'Đài Loan', 333567192);

-- --------------------------------------------------------

--
-- Table structure for table `phieunhap`
--

CREATE TABLE `phieunhap` (
  `MSPN` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MSSP` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MSNV` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gia` float NOT NULL DEFAULT 0,
  `TongTien` float NOT NULL DEFAULT 0,
  `SoLuong` int(11) NOT NULL DEFAULT 0,
  `NgayNhap` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phieunhap`
--

INSERT INTO `phieunhap` (`MSPN`, `MSSP`, `MSNV`, `Gia`, `TongTien`, `SoLuong`, `NgayNhap`) VALUES
('PN01', 'MSIB15', 'NV01', 20790000, 20790000, 1, '2021-11-29 16:55:59'),
('PN02', '73S1224GH', 'NV04', 21790000, 21790000, 2, '2021-12-04 00:00:00'),
('PN03', 'H510M H', 'NV01', 20390000, 20390000, 4, '2021-12-01 00:00:00'),
('PN04', 'M15R6 ', 'NV04', 60000000, 60000000, 6, '2021-12-04 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `phieuxuat`
--

CREATE TABLE `phieuxuat` (
  `MSPX` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MSSP` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MSNV` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoLuong` int(11) NOT NULL DEFAULT 0,
  `Gia` float NOT NULL DEFAULT 0,
  `TongTien` float NOT NULL DEFAULT 0,
  `NgayXuat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phieuxuat`
--

INSERT INTO `phieuxuat` (`MSPX`, `MSSP`, `MSNV`, `SoLuong`, `Gia`, `TongTien`, `NgayXuat`) VALUES
('PX1', 'MSIB15', 'NV01', 1, 20790000, 20790000, '2021-11-29 16:58:12'),
('PX2', '73S1224GH', 'NV04', 1, 12690000, 12690000, '2021-12-05 00:00:00'),
('PX3', 'EJ1046T', 'NV03', 3, 30000000, 30000000, '2021-12-04 00:00:00'),
('PX4', 'KM040T', 'NV03', 2, 20000000, 20000000, '2021-12-03 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `quyen`
--

CREATE TABLE `quyen` (
  `MSQH` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenQuyen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quyen`
--

INSERT INTO `quyen` (`MSQH`, `TenQuyen`) VALUES
('AD', 'Admin-Người quản trị'),
('NV', 'Nhân Viên'),
('QL', 'Quản lý');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MSSP` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenSP` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IMG` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MSNSX` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gia` float NOT NULL DEFAULT 0,
  `MSLSP` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TSSP` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MSSP`, `TenSP`, `IMG`, `MSNSX`, `Gia`, `MSLSP`, `TSSP`) VALUES
('37DV', 'Laptop Acer Aspire 3 A315 56 37DV', 'Screen Shot 2021-11-25 at 13.17.15.png', 'ACER', 11190000, 'LGM', 'Intel Core i3-1005G1 1.2GHz up to 3.4GHz 4MB'),
('502X', 'Laptop Acer Aspire 3 A315 56 502X', 'Screen Shot 2021-12-14 at 05.50.04.png', 'ACER', 12790000, 'LGM', '4GB DDR4 2666MHz Onboard (1x SO-DIMM socket, up to 12GB SDRAM)'),
('5S11130SB', 'Laptop GIGABYTE G5 KC 5S11130SB', 'Screen Shot 2021-12-14 at 05.50.04.png', 'GGB', 27990000, 'LGM', '16GB (2x8GB) DDR4-3200Mhz (2 khe ram, nâng cấp tối đa 64GB RAM)'),
('73S1224GH', 'Laptop GIGABYTE AORUS 15P YD 73S1224GH', 'Screen Shot 2021-12-14 at 05.50.04.png', 'GGB', 72490000, 'LGM', '16GB (2x8GB) DDR4-3200Mhz (2x khe ram nâng cấp tối đa 64GB RAM)'),
('73S1324GH', 'Laptop GIGABYTE AORUS 15P XD 73S1324GH', 'Screen Shot 2021-12-14 at 05.50.04.png', 'GGB', 51990000, 'LGM', '16GB (2x8GB) DDR4-3200Mhz (2x khe ram nâng cấp tối đa 64GB RAM)'),
('75YD', 'Laptop Gaming Acer Predator Helios 300 PH315 54 75YD', 'Screen Shot 2021-12-14 at 05.50.04.png', 'ACER', 39990000, 'LGM', '16GB (8x2) DDR4 3200MHz (2x SO-DIMM socket, up to 32GB SDRAM)'),
('ASUSROG15', 'Laptop Gaming Asus ROG Strix G15 G513IH HN015T', 'Screen Shot 2021-11-30 at 02.18.32.png', 'ASUS', 23290000, 'LGM', 'AMD Ryzen R7-4800H 2.9GHz up to 4.2GHz, 8 cores 16 threads\r\n8GB DDR4 3200MHz (2x SO-DIMM socket)\r\n512GB M.2 NVMe™ PCIe® 3.0 SSD\r\nNVIDIA Geforce GTX 1650 4GB GDDR6\r\n15.6 inch FHD (1920 x 1080) IPS, Non-Glare, 144Hz AdaptiveSync, Nanoedge\r\n'),
('BQ1006T', 'Laptop ASUS Vivobook X515EA BQ1006T', 'Screen Shot 2021-12-14 at 05.50.04.png', 'ASUS', 13190000, 'LVP', '4GB Onboard ,DDR4 2666MHz up to 12GB SDRAM'),
('EC227T', 'Laptop Asus VivoBook Flip TM420IA EC227T', '', 'ASUS', 19490000, 'LVP', '8GB DDR4 3200MHz On Board'),
('EJ1046T', 'Laptop ASUS X515EA EJ1046T', 'Screen Shot 2021-12-14 at 05.50.04.png', 'ASUS', 16590000, 'LVP', '4GB Onboard + 4GB SO-DIMM socket DDR4 2666MHz up to 12GB SDRAM'),
('EK675W', 'Laptop Asus X415EA EK675W', '', 'ASUS', 12690000, 'LGM', '4GB DDR4 on board, 1x DDR4 SO-DIMM slot'),
('H510M H', 'GIGABYTE H510M H (rev. 1.0)', '', 'GGB', 1990000, 'PKGM', 'LGA1200 package:\r\n1. 11th Generation Intel® Core™ i9 processors / Intel® Core™ i7 processors / Intel® Core™ i5 processors\r\n2. 10th Generation Intel® Core™ i9 processors / Intel® Core™ i7 processors / Intel® Core™ i5 processors / Intel® Core™ i3 processors/ Intel® Pentium® processors / Intel® Celeron® processors* (* Limited to processors with 4 MB Intel® Smart Cache, Intel® Celeron® G5xx5 family)\r\n3. L3 cache varies with CPU'),
('H510M-A', 'MSI H510M-A PRO', '', 'MSI', 2050000, 'PKGM', 'Supports 10th Gen Intel® Core™ Processors, 11th Gen Intel® Core™ Processors, Pentium® Gold and Celeron® Processors'),
('HN015T', 'Laptop Gaming Asus ROG Strix G15 G513IH HN015T', '', 'ASUS', 23290000, 'LGM', '8GB DDR4 3200MHz (2x SO-DIMM socket)'),
('KI429T', 'Laptop ASUS ZenBook UX425EA KI429T', '', 'ASUS', 21790000, 'LGM', '	8GB 4266MHz LPDDR4X, 	512GB PCIe® NVMe™ 3.0 x2 M.2 SSD'),
('KM040T', 'Laptop Asus Vivobook Pro M3401QA KM040T', '', 'ASUS', 22990000, 'LGM', '8GB (Onboard) DDR4 3200MHz (không nâng cấp)'),
('M15R6 ', 'Laptop Gaming Dell Alienware M15 R6 P109F001BBL', '', 'DELL', 57990000, 'LGM', '32GB (2x16GB) DDR4 3200Mhz (2 khe, max 64GB RAM)'),
('MBZ590', 'GIGABYTE Z590 GAMING X (rev. 1.0)\r\n', '', 'GGB', 5190000, 'PKGM', 'Ram hỗ trợ : 5333(O.C.) / DDR4 5133(O.C.) / DDR4 5000 (O.C.) / 4933(O.C.) / 4800(O.C.) / 4700(O.C.) / 4600(O.C.) / 4500(O.C.) / 4400(O.C.) / 4300(O.C.) / 4266(O.C.) / 4133(O) .C.) / 4000(O.C.) / 3866(O.C.) / 3800(O.C.) / 3733(O.C.) / 3666(O.C.) / 3600(O.C.) / 3466(O.C.) / 3400(O.C.) / 3333(O.C.) / 3400(O.C.) / 3333(O.C.) .C)/ 3300(O.C.) / 3200 / 3000 / 2933 / 2800 / 2666 / 2400 / 2133 MHz\r\n\r\nLưu trữ : 	\r\n1 x M.2 NVMe, 2 x M.2 SATA/NVMe, 6 x SATA 6Gb/s'),
('MSIB15', 'Laptop Gaming MSI Bravo 15 B5DD 276VN\r\n', '', 'MSI', 20790000, 'LGM', 'AMD Ryzen 5-5600H 3.30GHz upto 4.20GHz, 6 cores 12 threads\r\nDDR4 8GB (1 x 8GB) 3200MHz; 2 slots, Up to 64GB\r\n512GB NVMe PCIe Gen3x4 SSD\r\nRadeon RX5500M 4GB\r\n15.6 inch FHD (1920*1080), 60Hz 45%NTSC IPS-Level'),
('R05G', 'Laptop Gaming Acer Aspire 7 A715 42G R05G', '', 'ACER', 20390000, 'LGM', '8GB DDR4 (2x SO-DIMM socket, up to 32GB SDRAM)'),
('R9SC', 'Laptop gaming Acer Nitro 5 AN515 45 R9SC', '', 'ACER', 36990000, 'LGM', '8GB DDR4 3200MHz (2x SO-DIMM socket, up to 32GB SDRAM)'),
('SPTEST1', 'San pham test', '', 'DELL', 120000, 'LVP', 'đâsad'),
('SPTEST4', 'San pham test', 'Screen Shot 2021-12-14 at 09.53.24.png', 'ACER', 1111, 'LVP', 'sssss');

-- --------------------------------------------------------

--
-- Table structure for table `trangthai`
--

CREATE TABLE `trangthai` (
  `MSTT` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenTT` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trangthai`
--

INSERT INTO `trangthai` (`MSTT`, `TenTT`) VALUES
('CXL', 'Chờ xử lý'),
('DaGH', 'Đã Giao Hàng'),
('DGH', 'Đang Giao Hàng');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`MSBL`),
  ADD KEY `binhluan_sanpham_mssp_fk1` (`MSSP`),
  ADD KEY `binhluan_khachhang_mskh_fk2` (`MSKH`);

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`MSCTDH`),
  ADD KEY `chitietdonhang_donhang_msdh_fk1` (`MSDH`),
  ADD KEY `chithietdonhang_sanpham_mssp_fk2` (`MSSP`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`MSDH`),
  ADD KEY `donhang_khachhang_mskh_fk1` (`MSKH`),
  ADD KEY `donhang_trangthai_mstt_fk2` (`MSTT`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`MSGH`),
  ADD KEY `giohang_sanpham_fk1` (`MSSP`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MSKH`);

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`MSLSP`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MSNV`),
  ADD KEY `nhanvien_quyen_msqh_fk1` (`MSQH`);

--
-- Indexes for table `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  ADD PRIMARY KEY (`MSNSX`);

--
-- Indexes for table `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD PRIMARY KEY (`MSPN`),
  ADD KEY `phieunhap_sanpham_mssp_fk1` (`MSSP`),
  ADD KEY `phieunhap_nhanvien_nsnv_fk2` (`MSNV`);

--
-- Indexes for table `phieuxuat`
--
ALTER TABLE `phieuxuat`
  ADD PRIMARY KEY (`MSPX`),
  ADD KEY `phieuxuat_sanpham_mssp_fk1` (`MSSP`),
  ADD KEY `phieuxuat_nhanvien_msnv_fk2` (`MSNV`);

--
-- Indexes for table `quyen`
--
ALTER TABLE `quyen`
  ADD PRIMARY KEY (`MSQH`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MSSP`),
  ADD KEY `sanpham_nhasanxuat_msns_fk1x` (`MSNSX`),
  ADD KEY `sanpham_loaisanpham_mslsp_fk2` (`MSLSP`);

--
-- Indexes for table `trangthai`
--
ALTER TABLE `trangthai`
  ADD PRIMARY KEY (`MSTT`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_khachhang_mskh_fk2` FOREIGN KEY (`MSKH`) REFERENCES `khachhang` (`MSKH`) ON UPDATE CASCADE,
  ADD CONSTRAINT `binhluan_sanpham_mssp_fk1` FOREIGN KEY (`MSSP`) REFERENCES `sanpham` (`MSSP`) ON UPDATE CASCADE;

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chithietdonhang_sanpham_mssp_fk2` FOREIGN KEY (`MSSP`) REFERENCES `sanpham` (`MSSP`) ON UPDATE CASCADE,
  ADD CONSTRAINT `chitietdonhang_donhang_msdh_fk1` FOREIGN KEY (`MSDH`) REFERENCES `donhang` (`MSDH`) ON UPDATE CASCADE;

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_khachhang_mskh_fk1` FOREIGN KEY (`MSKH`) REFERENCES `khachhang` (`MSKH`) ON UPDATE CASCADE,
  ADD CONSTRAINT `donhang_trangthai_mstt_fk2` FOREIGN KEY (`MSTT`) REFERENCES `trangthai` (`MSTT`) ON UPDATE CASCADE;

--
-- Constraints for table `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_sanpham_fk1` FOREIGN KEY (`MSSP`) REFERENCES `sanpham` (`MSSP`) ON UPDATE CASCADE;

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_quyen_msqh_fk1` FOREIGN KEY (`MSQH`) REFERENCES `quyen` (`MSQH`) ON UPDATE CASCADE;

--
-- Constraints for table `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD CONSTRAINT `phieunhap_nhanvien_nsnv_fk2` FOREIGN KEY (`MSNV`) REFERENCES `nhanvien` (`MSNV`) ON UPDATE CASCADE,
  ADD CONSTRAINT `phieunhap_sanpham_mssp_fk1` FOREIGN KEY (`MSSP`) REFERENCES `sanpham` (`MSSP`) ON UPDATE CASCADE;

--
-- Constraints for table `phieuxuat`
--
ALTER TABLE `phieuxuat`
  ADD CONSTRAINT `phieuxuat_nhanvien_msnv_fk2` FOREIGN KEY (`MSNV`) REFERENCES `nhanvien` (`MSNV`) ON UPDATE CASCADE,
  ADD CONSTRAINT `phieuxuat_sanpham_mssp_fk1` FOREIGN KEY (`MSSP`) REFERENCES `sanpham` (`MSSP`) ON UPDATE CASCADE;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_loaisanpham_mslsp_fk2` FOREIGN KEY (`MSLSP`) REFERENCES `loaisanpham` (`MSLSP`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_nhasanxuat_msns_fk1x` FOREIGN KEY (`MSNSX`) REFERENCES `nhasanxuat` (`MSNSX`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
