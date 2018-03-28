-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2018 at 06:20 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prowebku`
--

-- --------------------------------------------------------

--
-- Table structure for table `aktivasi`
--

CREATE TABLE `aktivasi` (
  `no` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telpon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aktivasi`
--

INSERT INTO `aktivasi` (`no`, `nama`, `email`, `telpon`) VALUES
(1, 'Andi Andika', 'andi@student.uty.ac.id', '085685886869'),
(2, 'Ria Ricis', 'ria@student.uty.ac.id', '08578768888'),
(3, 'Raka Ramadhan', 'raka@@student.uty.ac.id', '084758684588'),
(4, 'Yulia Anita', 'yulia@student.uty.ac.id', '08685868897');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `fullname` varchar(170) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telp` varchar(50) DEFAULT NULL,
  `blokir` enum('N','Y') DEFAULT 'Y',
  `logintime` datetime DEFAULT NULL,
  `akses` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `fullname`, `password`, `email`, `telp`, `blokir`, `logintime`, `akses`) VALUES
(1, 'admin', 'Administrator', '*4ACFE3202A5FF5CF467898FC58AAB1D615029441', 'admin@gmail.com', '082300007535', 'Y', NULL, 1),
(2, 'algzl', 'AL Ghozaly', '*D642B7E2870293931B7FA3D719D2A7B03F6F876A', 'algzl@student.uty.ac.id', '085649221727', 'Y', NULL, 0),
(3, 'ucew', 'UCrew UTY', '*80DB0EE08B3402AAB2A8C3785A830CBFFA97670F', 'ucrew-uty@student.uty.ac.id', '0857834623', 'Y', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aktivasi`
--
ALTER TABLE `aktivasi`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aktivasi`
--
ALTER TABLE `aktivasi`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
