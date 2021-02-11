-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2020 at 06:40 AM
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
-- Database: `dbpenerimaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `datasiswa`
--

CREATE TABLE `datasiswa` (
  `no_induk` int(5) NOT NULL,
  `nama_siswa` varchar(25) NOT NULL,
  `jurusan` int(5) NOT NULL,
  `agama` int(5) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datasiswa`
--

INSERT INTO `datasiswa` (`no_induk`, `nama_siswa`, `jurusan`, `agama`, `status`) VALUES
(6, 'Arsip Pidana', 2, 10, 10),
(7, 'Arsip Pidana', 2, 11, 10),
(8, 'Arsip Pidana', 1, 3, 9),
(9, 'Arsip Perdata', 1, 3, 5),
(10, 'Arsip Perdata', 2, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `no_induk` int(50) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `jurusan` varchar(10) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`no_induk`, `nama_siswa`, `tempat_lahir`, `alamat`, `jurusan`, `agama`, `jenis_kelamin`) VALUES
(2, 'Bejo', 'tanjung balai', 'stmik', 'tkj', 'islam', 'gchv'),
(12, 'ARIYANTI', 'JIKKO,', 'AIR JOMAN', '0', '32DFGFGH', 'DFGV'),
(12233, 'SS', 'S', 'S', '0', 'WE', 'EE');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '202cb962ac59075b964b07152d234b70', 'admin', 'Smk negeri 1 air joman', 1, 'smk asahan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datasiswa`
--
ALTER TABLE `datasiswa`
  ADD PRIMARY KEY (`no_induk`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`no_induk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datasiswa`
--
ALTER TABLE `datasiswa`
  MODIFY `no_induk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
