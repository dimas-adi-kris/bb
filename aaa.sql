-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2020 at 08:03 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aaa`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminhima`
--

CREATE TABLE `adminhima` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `namadepan` text NOT NULL,
  `namabelakang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminhima`
--

INSERT INTO `adminhima` (`id`, `username`, `password`, `namadepan`, `namabelakang`) VALUES
(1, 'admin', '5d41402abc4b2a76b9719d911017c592', 'admindepan', 'adminbelakang'),
(2, 'admin2', '5d41402abc4b2a76b9719d911017c592', 'admin2head', 'admin2tail');

-- --------------------------------------------------------

--
-- Table structure for table `atabled`
--

CREATE TABLE `atabled` (
  `id` int(64) UNSIGNED NOT NULL,
  `judul` text DEFAULT NULL,
  `isi` text CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atabled`
--

INSERT INTO `atabled` (`id`, `judul`, `isi`) VALUES
(1, 'apa saja', 'asldkjalsdkjalsjalskjd'),
(2, 'apa saja', 'asldkjalsdkjalsjalskjd');

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `id` int(11) NOT NULL,
  `dinas_id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `angkatan` varchar(128) NOT NULL,
  `nim` varchar(128) NOT NULL,
  `jabatan_id` int(11) NOT NULL,
  `kepengurusan` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_dinas`
--

CREATE TABLE `tb_dinas` (
  `id` int(11) NOT NULL,
  `logo` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `background` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id` int(11) NOT NULL,
  `jabatan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id`, `jabatan`) VALUES
(1, 'Kepala Dinas'),
(2, 'Wakil Ketua Dinas'),
(3, 'Staff Ahli'),
(4, 'Ketua Divisi'),
(5, 'Anggota');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminhima`
--
ALTER TABLE `adminhima`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `atabled`
--
ALTER TABLE `atabled`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jabatan_id` (`jabatan_id`),
  ADD KEY `dinas_id` (`dinas_id`);

--
-- Indexes for table `tb_dinas`
--
ALTER TABLE `tb_dinas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminhima`
--
ALTER TABLE `adminhima`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `atabled`
--
ALTER TABLE `atabled`
  MODIFY `id` int(64) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_dinas`
--
ALTER TABLE `tb_dinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD CONSTRAINT `tb_anggota_ibfk_1` FOREIGN KEY (`jabatan_id`) REFERENCES `tb_jabatan` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_anggota_ibfk_2` FOREIGN KEY (`dinas_id`) REFERENCES `tb_dinas` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
