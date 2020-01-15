-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2020 at 11:54 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prediksi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_datatran`
--

CREATE TABLE `tb_datatran` (
  `id_data` int(11) NOT NULL,
  `hari` varchar(15) NOT NULL,
  `tanggl` date NOT NULL,
  `jumlah` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_datatran`
--

INSERT INTO `tb_datatran` (`id_data`, `hari`, `tanggl`, `jumlah`) VALUES
(1, 'senin', '2019-09-15', 178484),
(2, 'selasa', '2019-09-16', 177368),
(3, 'rabu', '2019-09-17', 174512),
(4, 'kamis', '2019-09-18', 174274),
(5, 'jumat', '2019-09-19', 151072),
(6, 'sabtu', '2019-09-20', 174321);

-- --------------------------------------------------------

--
-- Table structure for table `tb_history`
--

CREATE TABLE `tb_history` (
  `id_history` int(11) NOT NULL,
  `hari` varchar(15) NOT NULL,
  `jumlah_prediksi` int(11) NOT NULL,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_history`
--

INSERT INTO `tb_history` (`id_history`, `hari`, `jumlah_prediksi`, `waktu`) VALUES
(1, 'rabu', 267168, '2020-01-13');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `authKey` varchar(30) NOT NULL,
  `accessToken` varchar(30) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `authKey`, `accessToken`, `role`) VALUES
(1, 'admin', 'admin', 'admin-12345', '@Dm!N', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_datatran`
--
ALTER TABLE `tb_datatran`
  ADD PRIMARY KEY (`id_data`);

--
-- Indexes for table `tb_history`
--
ALTER TABLE `tb_history`
  ADD PRIMARY KEY (`id_history`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_datatran`
--
ALTER TABLE `tb_datatran`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_history`
--
ALTER TABLE `tb_history`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
