-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2019 at 11:23 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_mahasiswa`
--

CREATE TABLE `data_mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(12) NOT NULL,
  `nama_mahasiswa` varchar(25) NOT NULL,
  `alamat_mahasiswa` text NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `tanggal_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_mahasiswa`
--

INSERT INTO `data_mahasiswa` (`id`, `nim`, `nama_mahasiswa`, `alamat_mahasiswa`, `jenis_kelamin`, `no_hp`, `tanggal_input`) VALUES
(16, '1612400563', 'Samsul Ma''arif', 'nalumsari', 'Perempuan', '08975938047', '2019-11-10'),
(18, '1612400563', 'Samsul ', 'nalumsari', 'Perempuan', '081234641151', '2019-06-10');

--
-- Triggers `data_mahasiswa`
--
DELIMITER $$
CREATE TRIGGER `triger_logs_update_no_hp` BEFORE UPDATE ON `data_mahasiswa` FOR EACH ROW INSERT INTO logs
set nim = old.nim,
nama_mahasiswa = old.nama_mahasiswa,
no_hp_lama = old.no_hp,
no_hp_baru = new.no_hp,
tanggal_input = now()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `nim` varchar(12) NOT NULL,
  `nama_mahasiswa` varchar(25) NOT NULL,
  `no_hp_lama` varchar(13) NOT NULL,
  `no_hp_baru` varchar(12) NOT NULL,
  `tanggal_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `nim`, `nama_mahasiswa`, `no_hp_lama`, `no_hp_baru`, `tanggal_input`) VALUES
(6, '1612400563', 'Samsul Ma''arif', '08975938040', '08975938046', '2019-11-10'),
(7, '1612400563', 'Samsul ', '08989839', '081234641152', '2019-11-10'),
(8, '1612400563', 'Samsul ', '081234641152', '081234641151', '2019-11-10'),
(9, '1612400563', 'Samsul Ma''arif', '08975938046', '08975938047', '2019-11-10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `user` varchar(25) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user`, `pass`, `nama`, `alamat`, `pekerjaan`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'xxxx', 'cccc', '1111111111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
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
-- AUTO_INCREMENT for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
