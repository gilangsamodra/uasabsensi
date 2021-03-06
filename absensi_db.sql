CREATE DATABASE  IF NOT EXISTS `absensi_db` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci */;
USE `absensi_db`;
-- MySQL dump 10.13  Distrib 5.5.16, for Win32 (x86)
--
-- Host: localhost    Database: absensi_db
-- ------------------------------------------------------
-- Server version	5.0.45-community-nt

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Not dumping tablespaces as no INFORMATION_SCHEMA.FILES table on this server
--

--
-- Table structure for table `jurnal`
--

DROP TABLE IF EXISTS `jurnal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jurnal` (
  `kd_jurnal` int(11) NOT NULL auto_increment,
  `kd_kelas` int(11) NOT NULL,
  `kd_mk` int(11) NOT NULL,
  `tgl_jurnal` varchar(20) collate latin1_general_ci NOT NULL,
  `materi` varchar(20) collate latin1_general_ci NOT NULL,
  `ver_dosen` varchar(20) collate latin1_general_ci NOT NULL,
  `pk` varchar(20) collate latin1_general_ci NOT NULL,
  `selesai_jurnal` varchar(20) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`kd_jurnal`),
  KEY `kd_kelas` (`kd_kelas`),
  KEY `kd_mk` (`kd_mk`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jurnal`
--

LOCK TABLES `jurnal` WRITE;
/*!40000 ALTER TABLE `jurnal` DISABLE KEYS */;
INSERT INTO `jurnal` VALUES (1,1,1,'15/06/2015','PHP','yes','yes','yes'),(2,1,2,'15/06/2015','SDLC','','',''),(3,1,3,'15/06/2015','router','','',''),(4,1,4,'15/06/2015','cdm','','',''),(5,1,5,'15/06/2015','listening','','','');
/*!40000 ALTER TABLE `jurnal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(3) NOT NULL auto_increment,
  `nama` varchar(255) collate latin1_general_ci NOT NULL,
  `email` varchar(255) collate latin1_general_ci NOT NULL,
  `kelamin` varchar(8) collate latin1_general_ci NOT NULL,
  `user` varchar(25) collate latin1_general_ci NOT NULL,
  `password` varchar(255) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'Agus Sumarna','sumarna@yahoo.com','pria','agus','fdf169558242ee051cca1479770ebac3'),(2,'Siera Nevada','siera@yahoo.com','Wanita','siera','47c0abc24dd9c450577173afdd173d64'),(3,'gilang','gilangyahoo.com','pria','gilang','c37fddfb7b3f538674c6e9a77e7bf486'),(4,'arik','rik@yahoo.com','wanita','arik','b772852a7859d9e776b7f4254fe97d7e'),(5,'cindy','cindy@yahoo.com','wanita','cindy','cc4b2066cfef89f2475de1d4da4b29c7'),(6,'heri','heri@yahoo.com','pria','heri','6812af90c6a1bbec134e323d7e70587b'),(7,'arif','arif@yahoo.com','pria','arif','0ff6c3ace16359e41e37d40b8301d67f');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dosen`
--

DROP TABLE IF EXISTS `dosen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dosen` (
  `kd_dosen` int(5) NOT NULL auto_increment,
  `nama_dosen` varchar(20) collate latin1_general_ci NOT NULL,
  `alamat` varchar(30) collate latin1_general_ci NOT NULL,
  `telp_dosen` varchar(15) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`kd_dosen`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dosen`
--

LOCK TABLES `dosen` WRITE;
/*!40000 ALTER TABLE `dosen` DISABLE KEYS */;
INSERT INTO `dosen` VALUES (1,'Andi','Ketintang','081234343234'),(2,'Dwi F.','Jambangan','085666666666'),(3,'Agus','Pagesangan','081232141244'),(4,'IGL','Gunung Sari','083325454543'),(5,'Eva','Jagir','085677777777'),(6,'Na\'im R.','Keputih','081233333333');
/*!40000 ALTER TABLE `dosen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `absensi`
--

DROP TABLE IF EXISTS `absensi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `absensi` (
  `kd_absensi` int(3) NOT NULL auto_increment,
  `kd_siswa` int(3) NOT NULL,
  `kd_kelas` int(3) NOT NULL,
  `keterangan` enum('h','s','i','a') NOT NULL,
  `tanggal` varchar(12) NOT NULL,
  `selesai` varchar(3) NOT NULL,
  `kd_mk` int(11) NOT NULL,
  PRIMARY KEY  (`kd_absensi`),
  KEY `kd_mk` (`kd_mk`)
) ENGINE=MyISAM AUTO_INCREMENT=173 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `absensi`
--

LOCK TABLES `absensi` WRITE;
/*!40000 ALTER TABLE `absensi` DISABLE KEYS */;
INSERT INTO `absensi` VALUES (168,6,0,'h','15/06/2015','yes',0),(167,3,0,'h','15/06/2015','yes',0),(166,1,0,'h','15/06/2015','yes',0),(165,2,1,'h','','yes',1),(164,1,1,'h','','yes',1),(169,4,0,'h','15/06/2015','yes',0),(170,5,0,'h','15/06/2015','yes',0),(171,0,0,'h','16/06/2015','yes',0),(172,1,0,'h','17/06/2015','yes',0);
/*!40000 ALTER TABLE `absensi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kelas`
--

DROP TABLE IF EXISTS `kelas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kelas` (
  `kd_kelas` int(3) NOT NULL auto_increment,
  `nama_kelas` varchar(10) NOT NULL,
  PRIMARY KEY  (`kd_kelas`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kelas`
--

LOCK TABLES `kelas` WRITE;
/*!40000 ALTER TABLE `kelas` DISABLE KEYS */;
INSERT INTO `kelas` VALUES (1,'MIA13'),(2,'MIB13');
/*!40000 ALTER TABLE `kelas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `matakuliah`
--

DROP TABLE IF EXISTS `matakuliah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `matakuliah` (
  `kd_mk` int(11) NOT NULL auto_increment,
  `nm_mk` varchar(20) collate latin1_general_ci NOT NULL,
  `kd_kelas` int(11) NOT NULL,
  `kd_dosen` int(11) NOT NULL,
  PRIMARY KEY  (`kd_mk`),
  KEY `kd_kelas` (`kd_kelas`),
  KEY `kd_dosen` (`kd_dosen`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matakuliah`
--

LOCK TABLES `matakuliah` WRITE;
/*!40000 ALTER TABLE `matakuliah` DISABLE KEYS */;
INSERT INTO `matakuliah` VALUES (1,'Interpro',1,1),(2,'RPL',1,2),(3,'Jarkom',1,3),(4,'Simbada',1,4),(5,'Bhs Inggris',1,5),(6,'Pemvis',1,6);
/*!40000 ALTER TABLE `matakuliah` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materi`
--

DROP TABLE IF EXISTS `materi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `materi` (
  `kd_materi` int(11) NOT NULL auto_increment,
  `materi` varchar(40) collate latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `kd_mk` int(11) NOT NULL,
  PRIMARY KEY  (`kd_materi`),
  KEY `kd_mk` (`kd_mk`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materi`
--

LOCK TABLES `materi` WRITE;
/*!40000 ALTER TABLE `materi` DISABLE KEYS */;
INSERT INTO `materi` VALUES (1,'php','2015-06-01',1),(2,'SDLC','2015-06-02',2),(3,'router','2015-06-03',3),(4,'cdm','2015-06-04',4),(5,'listening','2015-06-05',5);
/*!40000 ALTER TABLE `materi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `siswa`
--

DROP TABLE IF EXISTS `siswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `siswa` (
  `kd_siswa` int(3) NOT NULL auto_increment,
  `nama` varchar(20) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `kd_mk` int(11) NOT NULL,
  PRIMARY KEY  (`kd_siswa`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `siswa`
--

LOCK TABLES `siswa` WRITE;
/*!40000 ALTER TABLE `siswa` DISABLE KEYS */;
INSERT INTO `siswa` VALUES (1,'Maratul Farikhah','08121740700','Pasuruan',1),(2,'Gilang Samodra','085230553103','Surabaya',2),(3,'Cindy Santika P','089618238483','Sidoarjo',3),(4,'Arif Yono S','082132047481','Jombang',4),(5,'Agus Heri P','081330901123','Jombang',4),(6,'Agus Sumarna','088863562352','Depok',3);
/*!40000 ALTER TABLE `siswa` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-06-17 12:09:26
