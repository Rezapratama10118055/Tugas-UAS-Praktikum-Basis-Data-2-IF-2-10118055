-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 18, 2020 at 02:49 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `univesitas`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

DROP TABLE IF EXISTS `dosen`;
CREATE TABLE IF NOT EXISTS `dosen` (
  `iddosen` int NOT NULL AUTO_INCREMENT,
  `dosen_matkul` varchar(30) NOT NULL,
  `nip` int NOT NULL,
  `nama_dosen` varchar(25) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` char(1) DEFAULT NULL,
  `alamat` text,
  PRIMARY KEY (`iddosen`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`iddosen`, `dosen_matkul`, `nip`, `nama_dosen`, `tanggal_lahir`, `jenis_kelamin`, `alamat`) VALUES
(1, 'Metabolisme & Energi', 143432321, 'revan gazalah', '1989-09-19', 'L', 'jln.padat karya'),
(2, 'Teknik pemuliaan tanaman', 111932321, 'yonna zaidah', '1987-07-12', 'P', 'jln.subroto'),
(5, 'kalkulus 2', 2131244, 'dede idera', '1980-06-30', NULL, 'jln.patimurah km.35');

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

DROP TABLE IF EXISTS `fakultas`;
CREATE TABLE IF NOT EXISTS `fakultas` (
  `id_fakultas` int NOT NULL,
  `nama_fakultas` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_fakultas`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id_fakultas`, `nama_fakultas`) VALUES
(1000, 'Fakultas Pertanian'),
(1001, 'Fakultas ekonomi'),
(1002, 'Fakultas hukum'),
(1003, 'Fakultas matematika'),
(1004, 'Fakultas kedokteran');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

DROP TABLE IF EXISTS `jurusan`;
CREATE TABLE IF NOT EXISTS `jurusan` (
  `jurusan_id` varchar(20) NOT NULL,
  `jurusan_name` varchar(20) DEFAULT NULL,
  `id_fakultas` int DEFAULT NULL,
  PRIMARY KEY (`jurusan_id`),
  KEY `id_fakultas` (`id_fakultas`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`jurusan_id`, `jurusan_name`, `id_fakultas`) VALUES
('01a', 'jurusan pertanian', 1000),
('01b', 'jurusan ekonomi', 1001),
('01c', 'jurusan hukum', 1002),
('01d', 'jurusan matematika', 1003),
('01e', 'jurusan kedokteran', 1004);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

DROP TABLE IF EXISTS `kelas`;
CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` varchar(20) NOT NULL,
  `penanggung_jawab` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `penanggung_jawab`) VALUES
('R001', 'komang abdull'),
('R002', 'rudin bahaq');

-- --------------------------------------------------------

--
-- Table structure for table `krs`
--

DROP TABLE IF EXISTS `krs`;
CREATE TABLE IF NOT EXISTS `krs` (
  `kode_matakuliah` char(8) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `sks` smallint DEFAULT NULL,
  `id_kelas` varchar(20) DEFAULT NULL,
  `waktu` time DEFAULT NULL,
  `kode_krs` varchar(10) NOT NULL,
  PRIMARY KEY (`kode_krs`),
  KEY `krs` (`kode_matakuliah`),
  KEY `id_kelas` (`id_kelas`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `krs`
--

INSERT INTO `krs` (`kode_matakuliah`, `tanggal`, `sks`, `id_kelas`, `waktu`, `kode_krs`) VALUES
('ME021', '2020-05-12', 4, 'R002', '16:00:00', 'BDFW32'),
('GS011', '2020-05-12', 4, 'R001', '12:00:00', 'QWAS11');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

DROP TABLE IF EXISTS `mahasiswa`;
CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nim` int NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `alamat` varchar(30) DEFAULT NULL,
  `dosen_matkul` varchar(30) NOT NULL,
  `nilai` int NOT NULL,
  `jurusan_id` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jurusan_id` (`jurusan_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `dosen_matkul`, `nilai`, `jurusan_id`) VALUES
(1, 1013232, 'lisa maoli', '2001-07-06', 'P', 'jln.merak', 'kalkulus 2', 80, '01a'),
(3, 1019999, 'ferdian plaka', '1999-01-19', 'P', 'jln.borneo', 'matematika dasar', 80, '01c'),
(11, 10118040, 'debisu', '2000-12-22', 'L', 'jln.asam lubang', 'Metabolisme & Energi', 95, ''),
(6, 1801910, 'anggi anggraini', '2000-04-22', 'P', 'jln.patimurah km.35', 'kalkulus', 50, ''),
(7, 1213134, 'ertertr', '2000-06-12', 'L', 'jln.patimurah km.35', 'algoritma', 30, ''),
(8, 10118090, 'muklis', '2000-09-03', 'L', 'jln.simpang amau', 'sistem informasi', 70, ''),
(9, 3213211, 'desi', '2002-01-13', 'P', 'jln.paktahau 2', 'struktur data', 20, '');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

DROP TABLE IF EXISTS `matakuliah`;
CREATE TABLE IF NOT EXISTS `matakuliah` (
  `idmatkul` int NOT NULL AUTO_INCREMENT,
  `kode_matakuliah` char(8) NOT NULL,
  `sks` smallint DEFAULT NULL,
  `semester` smallint DEFAULT NULL,
  `dosen_matkul` varchar(30) NOT NULL,
  `id_kelas` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idmatkul`),
  KEY `dosen_matkul` (`dosen_matkul`),
  KEY `matakuliah` (`id_kelas`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`idmatkul`, `kode_matakuliah`, `sks`, `semester`, `dosen_matkul`, `id_kelas`) VALUES
(1, 'GS011', 4, 4, 'Teknik pemuliaan tanaman', 'R001'),
(2, 'ME021', 4, 6, 'Metabolisme & Energi', 'R002'),
(5, 'G105', 3, 5, 'kalkulus', 'R003');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

DROP TABLE IF EXISTS `t_user`;
CREATE TABLE IF NOT EXISTS `t_user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `level` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'reza', 'jelihin21', '12345', 'admin'),
(3, 'dosen', 'dosen', '22222', 'pegawai');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
