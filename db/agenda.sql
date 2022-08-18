-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2022 at 06:46 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agenda`
--

-- --------------------------------------------------------

--
-- Table structure for table `bulanan`
--

CREATE TABLE `bulanan` (
  `id` int(11) NOT NULL,
  `tgl` varchar(100) NOT NULL,
  `doc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bulanan`
--

INSERT INTO `bulanan` (`id`, `tgl`, `doc`) VALUES
(2, '2022-08-17', 'a243d7ff1d0f64c3fc83b6b3559132df-cd6744481cec993ced0d28b638f91dc2-Tutorial Project-Living Room-20220817-222537.jpg'),
(3, '2022-08-17', 'a8dadf6202fd23aea4a280a61c9a5997-cd6744481cec993ced0d28b638f91dc2-Tutorial Project-Living Room-20220817-222537.jpg'),
(4, '2022-08-19', '1428f49cb9da281ea7053fc9df3c1025-kisspng-nasa-insignia-logo-nasa-graphics-standards-manual-nasa-logo-5b4cd722d9c453.371506551531762466892.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `tgl` varchar(255) NOT NULL,
  `kegiatan` varchar(255) NOT NULL,
  `org` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `tgl`, `kegiatan`, `org`) VALUES
(1, '2022-08-17', 'test2', 'test2');

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan`
--

CREATE TABLE `kunjungan` (
  `id` int(11) NOT NULL,
  `tgl` varchar(255) NOT NULL,
  `kegiatan` varchar(1000) NOT NULL,
  `doc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kunjungan`
--

INSERT INTO `kunjungan` (`id`, `tgl`, `kegiatan`, `doc`) VALUES
(4, '2022-07-22', 'test', '127efeb882390c8249ba9bcc0dd639d5-49203721_2279257925697199_6594173249301512192_n.jpg'),
(5, '2022-08-10', 'test', '996369016bab930e8634bdd6f168bfa3-cdpred_004-1024x760.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lapangan`
--

CREATE TABLE `lapangan` (
  `id` int(11) NOT NULL,
  `tgl` varchar(255) NOT NULL,
  `kegiatan` varchar(1000) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `doc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lapangan`
--

INSERT INTO `lapangan` (`id`, `tgl`, `kegiatan`, `jenis`, `doc`) VALUES
(4, '2022-08-09', 'test', '', '75d6cfe59606eb38dee0592ec4ed7e44-download (2).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rapat`
--

CREATE TABLE `rapat` (
  `id` int(11) NOT NULL,
  `tgl` varchar(255) NOT NULL,
  `kegiatan` varchar(1000) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `doc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rapat`
--

INSERT INTO `rapat` (`id`, `tgl`, `kegiatan`, `jenis`, `doc`) VALUES
(5, '2022-08-11', 'sads', '', '8f51024f56b42faccdc8aba8201489d8-images.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `triwulan`
--

CREATE TABLE `triwulan` (
  `id` int(11) NOT NULL,
  `tgl` varchar(255) NOT NULL,
  `doc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `triwulan`
--

INSERT INTO `triwulan` (`id`, `tgl`, `doc`) VALUES
(2, '2022-08-17', '674ae4d0299e42a57218f17caf41660c-cd6744481cec993ced0d28b638f91dc2-Tutorial Project-Living Room-20220817-222537.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'team', 'f894427cc1c571f79da49605ef8b112f', 'team');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bulanan`
--
ALTER TABLE `bulanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lapangan`
--
ALTER TABLE `lapangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rapat`
--
ALTER TABLE `rapat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `triwulan`
--
ALTER TABLE `triwulan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bulanan`
--
ALTER TABLE `bulanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kunjungan`
--
ALTER TABLE `kunjungan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lapangan`
--
ALTER TABLE `lapangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rapat`
--
ALTER TABLE `rapat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `triwulan`
--
ALTER TABLE `triwulan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
