-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2020 at 01:18 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nim` char(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `tempat` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `fakultas` enum('Fakultas Ilmu Budaya','Fakultas Kedokteran','Fakultas Hukum','Fakultas Teknik','Fakultas Pertanian','Fakultas Ekonomi dan Bisnis','Fakultas Peternakan','Fakultas MIPA','Fakultas Kedokteran Hewan','Fakultas Teknologi Pertanian','Fakultas Ilmu Sosial dan Ilmu Politik','Fakultas Kelautan dan Perikanan','Fakultas Pariwisata') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `email`, `jk`, `tempat`, `tgl_lahir`, `alamat`, `fakultas`) VALUES
(15, 'Bayu', '1708561051', 'bayu@gmail.com', 'Laki-laki', 'Tabanan', '2020-05-04', 'Tabanan', 'Fakultas Teknik'),
(18, 'Bagus', '1708561047', 'bagus@gmail.com', 'Laki-laki', 'Gianyar', '2020-05-15', 'Batubulan', 'Fakultas Peternakan'),
(19, 'Ayu Sherly', '1708561053', 'sherly@gmail.com', 'Perempuan', 'Karangasem', '2020-05-14', 'Jimbaran', 'Fakultas Ekonomi dan Bisnis'),
(20, 'Adi Saputro', '1708561054', 'adi@gmail.com', 'Laki-laki', 'Magetan', '2020-05-27', 'Denpasar', 'Fakultas Teknik'),
(21, 'Semara Wijaya', '1708561048', 'dede@gmail.com', 'Laki-laki', 'Denpasar', '2020-06-03', 'Denpasar', 'Fakultas Kedokteran Hewan'),
(22, 'Rinaldi', '1708561049', 'owen@gmail.com', 'Laki-laki', 'Jakarta', '2020-05-19', 'Jimbaran', 'Fakultas Kedokteran');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
