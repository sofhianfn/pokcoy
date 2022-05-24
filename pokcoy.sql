-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 10:01 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pokcoy`
--

-- --------------------------------------------------------

--
-- Table structure for table `pertumbuhan`
--

CREATE TABLE `pertumbuhan` (
  `id` int(200) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `jam` time NOT NULL DEFAULT current_timestamp(),
  `klorofil` varchar(10) NOT NULL,
  `kadar_air` varchar(10) NOT NULL,
  `luas` varchar(10) NOT NULL,
  `pixel_daun` varchar(10) NOT NULL,
  `pixel_total` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pertumbuhan`
--

INSERT INTO `pertumbuhan` (`id`, `tanggal`, `jam`, `klorofil`, `kadar_air`, `luas`, `pixel_daun`, `pixel_total`) VALUES
(1, '2022-05-24', '14:24:16', '', '', '39.89', '437685', '740720'),
(2, '2022-05-24', '14:47:13', '', '', '39.89', '437685', '740720'),
(3, '2022-05-24', '14:50:20', '', '', '39.89', '437685', '740720');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pertumbuhan`
--
ALTER TABLE `pertumbuhan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pertumbuhan`
--
ALTER TABLE `pertumbuhan`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
