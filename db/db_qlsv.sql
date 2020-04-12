-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:33067
-- Generation Time: Apr 12, 2020 at 03:10 AM
-- Server version: 5.6.41-84.1-log
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bt_sv`
--

-- --------------------------------------------------------

--
-- Table structure for table `ketqua`
--

CREATE TABLE `ketqua` (
  `MaSV` int(10) NOT NULL,
  `DiemSo` int(2) NOT NULL,
  `MaMonHoc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `khoa`
--

CREATE TABLE `khoa` (
  `MaKhoa` int(11) NOT NULL,
  `TenKhoa` varchar(50) NOT NULL,
  `Nganh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khoa`
--

INSERT INTO `khoa` (`MaKhoa`, `TenKhoa`, `Nganh`) VALUES
(1, 'Khoa 1 ', 'Nganh 1'),
(2, 'Khoa 2', 'Nganh 2'),
(3, 'Khoa 3', 'Nganh 1'),
(4, 'Khoa 4', 'Nganh 2');

-- --------------------------------------------------------

--
-- Table structure for table `lop`
--

CREATE TABLE `lop` (
  `MaLop` varchar(10) NOT NULL,
  `TenLop` varchar(50) NOT NULL,
  `MaKhoa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE `monhoc` (
  `MaMonHoc` varchar(50) NOT NULL,
  `TenMonHoc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `MaSV` int(10) NOT NULL,
  `TenSV` varchar(50) NOT NULL,
  `NgaySinh` date NOT NULL,
  `GioiTinh` tinyint(1) NOT NULL,
  `DiaChi` varchar(50) NOT NULL,
  `DienThoai` int(11) NOT NULL,
  `MaLop` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ketqua`
--
ALTER TABLE `ketqua`
  ADD PRIMARY KEY (`MaSV`),
  ADD KEY `MaMonHoc` (`MaMonHoc`);

--
-- Indexes for table `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`MaKhoa`),
  ADD KEY `MaKhoa` (`MaKhoa`);

--
-- Indexes for table `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`MaLop`),
  ADD KEY `MaKhoa` (`MaKhoa`);

--
-- Indexes for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`MaMonHoc`),
  ADD KEY `MaMonHoc` (`MaMonHoc`);

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`MaSV`),
  ADD KEY `MaLop` (`MaLop`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `khoa`
--
ALTER TABLE `khoa`
  MODIFY `MaKhoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ketqua`
--
ALTER TABLE `ketqua`
  ADD CONSTRAINT `ketqua_ibfk_1` FOREIGN KEY (`MaSV`) REFERENCES `sinhvien` (`MaSV`);

--
-- Constraints for table `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `lop_ibfk_1` FOREIGN KEY (`MaKhoa`) REFERENCES `khoa` (`MaKhoa`);

--
-- Constraints for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `sinhvien_ibfk_1` FOREIGN KEY (`MaLop`) REFERENCES `lop` (`MaLop`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
