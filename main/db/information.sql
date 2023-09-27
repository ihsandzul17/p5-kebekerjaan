-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2023 at 09:14 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekp5`
--

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `urgensiKegiatan` varchar(15) NOT NULL,
  `ketKegiatan` varchar(30) NOT NULL,
  `penanggungJawab` varchar(30) NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `deskripsiKegiatan` varchar(300) NOT NULL,
  `waktuAwal` time NOT NULL,
  `waktuAkhir` time NOT NULL,
  `img` varchar(64) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `urgensiKegiatan`, `ketKegiatan`, `penanggungJawab`, `tempat`, `deskripsiKegiatan`, `waktuAwal`, `waktuAkhir`, `img`, `tanggal`) VALUES
(1, 'Biasa', 'Maulid Nabi', 'Ardan', 'Lapangan', 'Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test', '21:37:00', '12:11:00', 'uploads/presentasi.png', '2023-09-10'),
(2, 'Penting', 'Test', 'Test', 'Test', 'Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test', '03:01:00', '13:31:00', 'uploads/presentasi.png', '2023-09-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=359;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
