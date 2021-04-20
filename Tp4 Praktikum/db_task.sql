-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2021 at 01:05 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_to_do`
--

CREATE TABLE `tb_to_do` (
  `id` int(10) NOT NULL,
  `name_td` varchar(255) NOT NULL,
  `details_td` text NOT NULL,
  `subject_td` varchar(255) NOT NULL,
  `priority_td` varchar(255) NOT NULL,
  `deadline_td` date NOT NULL,
  `status_td` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_to_do`
--

INSERT INTO `tb_to_do` (`id`, `name_td`, `details_td`, `subject_td`, `priority_td`, `deadline_td`, `status_td`) VALUES
(1, 'Use Case', 'Bikin use case', 'RPL', 'High', '2021-04-12', 'Sudah'),
(6, 'Rangkum', 'Rangkum tentang Business Intelligence', 'Sistem Informasi', 'High', '2021-04-08', 'Belum'),
(9, 'TP4', 'Buat program MVC PHP', 'DPBO', 'High', '2021-04-23', 'Belum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_to_do`
--
ALTER TABLE `tb_to_do`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_to_do`
--
ALTER TABLE `tb_to_do`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
