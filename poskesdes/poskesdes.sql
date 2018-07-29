-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2017 at 09:42 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `poskesdes`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL,
  `username_admin` varchar(50) DEFAULT NULL,
  `password_admin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username_admin`, `password_admin`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
`id_pasien` int(11) NOT NULL,
  `nama_pasien` varchar(50) DEFAULT NULL,
  `nomorkk_pasien` varchar(50) DEFAULT NULL,
  `alamat_pasien` varchar(50) DEFAULT NULL,
  `umur_pasien` varchar(20) DEFAULT NULL,
  `jk_pasien` varchar(15) DEFAULT NULL,
  `nomorhp_pasien` varchar(20) DEFAULT NULL,
  `keluhan_pasien` varchar(20) DEFAULT NULL,
  `penyakit_pasien` varchar(30) DEFAULT NULL,
  `sebab_pasien` varchar(20) DEFAULT NULL,
  `tindakan_pasien` varchar(30) DEFAULT NULL,
  `namarumahsakit_pasien` varchar(40) DEFAULT NULL,
  `namaobat_pasien` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `nomorkk_pasien`, `alamat_pasien`, `umur_pasien`, `jk_pasien`, `nomorhp_pasien`, `keluhan_pasien`, `penyakit_pasien`, `sebab_pasien`, `tindakan_pasien`, `namarumahsakit_pasien`, `namaobat_pasien`) VALUES
(1, 'andi', '351214563782124', 'olean utara', '20 tahun', 'pria', '083212345678', 'sakit punggung', 'sakit tulang', 'beban berat', 'rumah_sakit', 'rs_umum', 'obat penenang'),
(2, 'budi', '123432456372', 'olean utara', '35 tahun', 'pria', '08234567623', 'sakit perut dan mual', 'diare', 'makan pedas dan asam', 'rumah_sakit', 'rs_elizabeth', 'obat sakit perut'),
(3, 'ani', '34556142', 'olean', '31 tahun', 'wanita', '098787412', 'sakit badan', 'insomnia', 'kecapean', 'rumah_sakit', 'rs_umum', NULL),
(4, 'andi RS', '2324213465', 'SUMBERSARI', '17 tahun', 'pria', '098725347715', 'panas dingin, menggi', 'demam tinggi', 'cuaca', 'suntik', 'rs_umum', 'konidin'),
(5, 'fian', '12314343141', 'jln veteran', '15 tahun', 'pria', '0987564263826245', 'sakit sebelah leher,', 'gejala stroke', 'makan makanan berlem', NULL, '', 'obat dosis tinggi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(11) NOT NULL,
  `username_user` varchar(50) DEFAULT NULL,
  `password_user` varchar(50) DEFAULT NULL,
  `id_level_user` enum('0','1') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username_user`, `password_user`, `id_level_user`) VALUES
(1, 'kader', 'kader', '0'),
(2, 'bidan', 'bidan', '1'),
(3, 'ani', 'ani', '0'),
(4, 'rian', 'rian', '0'),
(5, 'gio', 'gio', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
 ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
