-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 14, 2022 at 06:22 AM
-- Server version: 10.2.43-MariaDB-log-cll-lve
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasrumah`
--

-- --------------------------------------------------------

--
-- Table structure for table `debet`
--

CREATE TABLE `debet` (
  `id_debet` int(1) UNSIGNED NOT NULL,
  `item` varchar(100) NOT NULL,
  `qty` tinyint(3) UNSIGNED NOT NULL,
  `sat` varchar(10) NOT NULL,
  `nominal` int(2) UNSIGNED ZEROFILL NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `kredit`
--

CREATE TABLE `kredit` (
  `id_kredit` int(1) UNSIGNED NOT NULL,
  `item` varchar(100) NOT NULL,
  `qty` tinyint(3) UNSIGNED NOT NULL,
  `sat` varchar(10) NOT NULL,
  `nominal` int(2) UNSIGNED ZEROFILL NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `trans`
--

CREATE TABLE `trans` (
  `id` int(1) UNSIGNED NOT NULL,
  `item` varchar(100) NOT NULL,
  `qty` decimal(3,1) UNSIGNED NOT NULL,
  `sat` varchar(10) NOT NULL,
  `nominal` varchar(10) NOT NULL,
  `jenis` enum('debet','kredit') NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `debet`
--
ALTER TABLE `debet`
  ADD PRIMARY KEY (`id_debet`);

--
-- Indexes for table `kredit`
--
ALTER TABLE `kredit`
  ADD PRIMARY KEY (`id_kredit`);

--
-- Indexes for table `trans`
--
ALTER TABLE `trans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `debet`
--
ALTER TABLE `debet`
  MODIFY `id_debet` int(1) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kredit`
--
ALTER TABLE `kredit`
  MODIFY `id_kredit` int(1) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trans`
--
ALTER TABLE `trans`
  MODIFY `id` int(1) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
