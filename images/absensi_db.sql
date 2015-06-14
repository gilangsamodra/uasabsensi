-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 23, 2010 at 02:02 
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `absensi_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE IF NOT EXISTS `absensi` (
  `kd_absensi` int(3) NOT NULL AUTO_INCREMENT,
  `kd_siswa` int(3) NOT NULL,
  `kd_kelas` int(3) NOT NULL,
  `keterangan` enum('h','s','i','a') NOT NULL,
  `tanggal` varchar(12) NOT NULL,
  `selesai` varchar(3) NOT NULL,
  PRIMARY KEY (`kd_absensi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=162 ;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`kd_absensi`, `kd_siswa`, `kd_kelas`, `keterangan`, `tanggal`, `selesai`) VALUES
(161, 18, 7, 's', '21/11/2010', 'yes'),
(160, 19, 7, 'h', '21/11/2010', 'yes'),
(159, 18, 7, 'h', '20/11/2010', 'yes'),
(158, 19, 7, 'h', '20/11/2010', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `kelamin` varchar(8) COLLATE latin1_general_ci NOT NULL,
  `user` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(255) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `kelamin`, `user`, `password`) VALUES
(1, 'Agus Sumarna', 'sumarna@yahoo.com', 'pria', 'agus', 'fdf169558242ee051cca1479770ebac3'),
(2, 'Siera Nevada', 'siera@yahoo.com', 'Wanita', 'siera', '47c0abc24dd9c450577173afdd173d64');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `kd_kelas` int(3) NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(10) NOT NULL,
  PRIMARY KEY (`kd_kelas`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kd_kelas`, `nama_kelas`) VALUES
(9, '3 IPS 1'),
(8, '3 IPA 2'),
(7, '3 IPA 1');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `kd_siswa` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) NOT NULL,
  `tgl_lahir` varchar(8) NOT NULL,
  `alamat` text NOT NULL,
  `kd_kelas` int(3) NOT NULL,
  PRIMARY KEY (`kd_siswa`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`kd_siswa`, `nama`, `tgl_lahir`, `alamat`, `kd_kelas`) VALUES
(23, 'Heti Purnamawati', '09/11/20', 'Poponcol', 9),
(22, 'Agung Pramono', '06/11/20', 'Johar', 9),
(21, 'Asep Ruspayadi', '05/11/20', 'Karawang', 8),
(20, 'Dedi Ruspayadi', '02/11/20', 'Serang', 8),
(19, 'Pathona Detri Yhana', '02/11/20', 'Depok', 7),
(18, 'Agus Sumarna', '01/11/20', 'Depok', 7);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
