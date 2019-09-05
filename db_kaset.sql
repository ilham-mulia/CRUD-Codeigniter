-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2017 at 09:45 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_kaset`
--

-- --------------------------------------------------------

--
-- Table structure for table `kaset`
--

CREATE TABLE IF NOT EXISTS `kaset` (
  `kode` int(100) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `letak` varchar(200) NOT NULL,
  `genre` varchar(200) NOT NULL,
  `kondisi` varchar(200) NOT NULL,
  `tahun` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kaset`
--

INSERT INTO `kaset` (`kode`, `judul`, `letak`, `genre`, `kondisi`, `tahun`) VALUES
(1992, 'Dokumentasi Kepala Sekolah smkn 2 Payakumbuh', 'Lemari ', 'Dokumenter', 'Baik', '2017-09-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kaset`
--
ALTER TABLE `kaset`
 ADD PRIMARY KEY (`kode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
