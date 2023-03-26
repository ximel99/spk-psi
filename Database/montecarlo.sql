-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Jun 2019 pada 15.19
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `montecarlo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int(11) NOT NULL,
  `username` varchar(7) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE IF NOT EXISTS `hasil` (
  `id` int(11) NOT NULL,
  `idproduk` int(11) NOT NULL,
  `idadmin` int(11) NOT NULL,
  `bulan` int(11) NOT NULL,
  `hasilprediksi` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`id`, `idproduk`, `idadmin`, `bulan`, `hasilprediksi`) VALUES
(49, 1, 1, 1, 100),
(50, 1, 1, 2, 30),
(51, 1, 1, 3, 50),
(52, 1, 1, 4, 100),
(53, 1, 1, 5, 50),
(54, 1, 1, 6, 50),
(55, 1, 1, 7, 100),
(56, 1, 1, 8, 100),
(57, 1, 1, 9, 100),
(58, 1, 1, 10, 30),
(59, 1, 1, 11, 30),
(60, 1, 1, 12, 50),
(61, 2, 1, 1, 250),
(62, 2, 1, 2, 200),
(63, 2, 1, 3, 300),
(64, 2, 1, 4, 250),
(65, 2, 1, 5, 300),
(66, 2, 1, 6, 250),
(67, 2, 1, 7, 150),
(68, 2, 1, 8, 250),
(69, 2, 1, 9, 250),
(70, 2, 1, 10, 150),
(71, 2, 1, 11, 250),
(72, 2, 1, 12, 200),
(73, 3, 1, 1, 10),
(74, 3, 1, 2, 20),
(75, 3, 1, 3, 7),
(76, 3, 1, 4, 20),
(77, 3, 1, 5, 15),
(78, 3, 1, 6, 10),
(79, 3, 1, 7, 15),
(80, 3, 1, 8, 20),
(81, 3, 1, 9, 10),
(82, 3, 1, 10, 20),
(83, 3, 1, 11, 20),
(84, 3, 1, 12, 13),
(85, 4, 1, 1, 80),
(86, 4, 1, 2, 90),
(87, 4, 1, 3, 100),
(88, 4, 1, 4, 80),
(89, 4, 1, 5, 100),
(90, 4, 1, 6, 100),
(91, 4, 1, 7, 75),
(92, 4, 1, 8, 80),
(93, 4, 1, 9, 110),
(94, 4, 1, 10, 90),
(95, 4, 1, 11, 90),
(96, 4, 1, 12, 105);

-- --------------------------------------------------------

--
-- Struktur dari tabel `intervalinterval`
--

CREATE TABLE IF NOT EXISTS `intervalinterval` (
  `idinterval` int(11) NOT NULL,
  `idproduk` int(11) NOT NULL,
  `permintaan` int(11) NOT NULL,
  `frekuensi` int(11) NOT NULL,
  `distribusikemungkinan` double NOT NULL,
  `distribusikumulatif` double NOT NULL,
  `jarakinterval` varchar(30) NOT NULL,
  `idadmin` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `intervalinterval`
--

INSERT INTO `intervalinterval` (`idinterval`, `idproduk`, `permintaan`, `frekuensi`, `distribusikemungkinan`, `distribusikumulatif`, `jarakinterval`, `idadmin`) VALUES
(25, 2, 1, 250, 0.1, 0.1, '0 - 0.100 ', 1),
(26, 2, 2, 200, 0.08, 0.18, '0.1 - 0.180 ', 1),
(27, 2, 3, 150, 0.06, 0.24, '0.18 - 0.240 ', 1),
(28, 2, 4, 200, 0.08, 0.32, '0.24 - 0.320 ', 1),
(29, 2, 5, 200, 0.08, 0.4, '0.32 - 0.400 ', 1),
(30, 2, 6, 250, 0.1, 0.5, '0.4 - 0.500 ', 1),
(31, 2, 7, 150, 0.06, 0.56, '0.5 - 0.560 ', 1),
(32, 2, 8, 200, 0.08, 0.64, '0.56 - 0.640 ', 1),
(33, 2, 9, 150, 0.06, 0.7, '0.64 - 0.700 ', 1),
(34, 2, 10, 250, 0.1, 0.8, '0.7 - 0.800 ', 1),
(35, 2, 11, 300, 0.12, 0.92, '0.8 - 0.920 ', 1),
(36, 2, 12, 200, 0.08, 1, '0.92 - 1.000 ', 1),
(37, 4, 1, 100, 0.088, 0.088, '0 - 0.088 ', 1),
(38, 4, 2, 80, 0.07, 0.158, '0.088 - 0.158 ', 1),
(39, 4, 3, 75, 0.066, 0.224, '0.158 - 0.224 ', 1),
(40, 4, 4, 110, 0.097, 0.321, '0.224 - 0.321 ', 1),
(41, 4, 5, 105, 0.093, 0.414, '0.321 - 0.414 ', 1),
(42, 4, 6, 80, 0.07, 0.484, '0.414 - 0.484 ', 1),
(43, 4, 7, 90, 0.079, 0.563, '0.484 - 0.563 ', 1),
(44, 4, 8, 90, 0.079, 0.642, '0.563 - 0.642 ', 1),
(45, 4, 9, 110, 0.097, 0.739, '0.642 - 0.739 ', 1),
(46, 4, 10, 95, 0.084, 0.823, '0.739 - 0.823 ', 1),
(47, 4, 11, 100, 0.088, 0.911, '0.823 - 0.911 ', 1),
(48, 4, 12, 100, 0.088, 0.999, '0.911 - 0.999 ', 1),
(61, 1, 1, 50, 0.071, 0.071, '0 - 0.071 ', 1),
(62, 1, 2, 100, 0.143, 0.214, '0.071 - 0.214 ', 1),
(63, 1, 3, 50, 0.071, 0.285, '0.214 - 0.285 ', 1),
(64, 1, 4, 50, 0.071, 0.356, '0.285 - 0.356 ', 1),
(65, 1, 5, 100, 0.143, 0.499, '0.356 - 0.499 ', 1),
(66, 1, 6, 30, 0.043, 0.542, '0.499 - 0.542 ', 1),
(67, 1, 7, 50, 0.071, 0.613, '0.542 - 0.613 ', 1),
(68, 1, 8, 30, 0.043, 0.656, '0.613 - 0.656 ', 1),
(69, 1, 9, 100, 0.143, 0.799, '0.656 - 0.799 ', 1),
(70, 1, 10, 50, 0.071, 0.87, '0.799 - 0.870 ', 1),
(71, 1, 11, 50, 0.071, 0.941, '0.87 - 0.941 ', 1),
(72, 1, 12, 40, 0.057, 0.998, '0.941 - 0.998 ', 1),
(73, 3, 1, 8, 0.057, 0.057, '0 - 0.057 ', 1),
(74, 3, 2, 10, 0.071, 0.128, '0.057 - 0.128 ', 1),
(75, 3, 3, 15, 0.107, 0.235, '0.128 - 0.235 ', 1),
(76, 3, 4, 10, 0.071, 0.306, '0.235 - 0.306 ', 1),
(77, 3, 5, 13, 0.093, 0.399, '0.306 - 0.399 ', 1),
(78, 3, 6, 20, 0.143, 0.542, '0.399 - 0.542 ', 1),
(79, 3, 7, 20, 0.143, 0.685, '0.542 - 0.685 ', 1),
(80, 3, 8, 10, 0.071, 0.756, '0.685 - 0.756 ', 1),
(81, 3, 9, 7, 0.05, 0.806, '0.756 - 0.806 ', 1),
(82, 3, 10, 5, 0.036, 0.842, '0.806 - 0.842 ', 1),
(83, 3, 11, 7, 0.05, 0.892, '0.842 - 0.892 ', 1),
(84, 3, 12, 15, 0.107, 0.999, '0.892 - 0.999 ', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilairandom`
--

CREATE TABLE IF NOT EXISTS `nilairandom` (
  `id` int(11) NOT NULL,
  `angkarandom` double NOT NULL,
  `idadmin` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=145 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilairandom`
--

INSERT INTO `nilairandom` (`id`, `angkarandom`, `idadmin`) VALUES
(133, 0.09375, 1),
(134, 0.6328125, 1),
(135, 0.875, 1),
(136, 0.4765625, 1),
(137, 0.90625, 1),
(138, 0.0703125, 1),
(139, 0.1875, 1),
(140, 0.4140625, 1),
(141, 0.71875, 1),
(142, 0.5078125, 1),
(143, 0.5, 1),
(144, 0.3515625, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `permintaan`
--

CREATE TABLE IF NOT EXISTS `permintaan` (
  `idpermintaan` int(11) NOT NULL,
  `idadmin` int(11) NOT NULL,
  `idproduk` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `bulan` int(11) NOT NULL,
  `jumlahpermintaan` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `permintaan`
--

INSERT INTO `permintaan` (`idpermintaan`, `idadmin`, `idproduk`, `tahun`, `bulan`, `jumlahpermintaan`) VALUES
(25, 1, 2, 2018, 1, 250),
(26, 1, 2, 2018, 2, 200),
(27, 1, 2, 2018, 3, 150),
(28, 1, 2, 2018, 4, 200),
(29, 1, 2, 2018, 5, 200),
(30, 1, 2, 2018, 6, 250),
(31, 1, 2, 2018, 7, 150),
(32, 1, 2, 2018, 8, 200),
(33, 1, 2, 2018, 9, 150),
(34, 1, 2, 2018, 10, 250),
(35, 1, 2, 2018, 11, 300),
(36, 1, 2, 2018, 12, 200),
(37, 1, 4, 2018, 1, 100),
(38, 1, 4, 2018, 2, 80),
(39, 1, 4, 2018, 3, 75),
(40, 1, 4, 2018, 4, 110),
(41, 1, 4, 2018, 5, 105),
(42, 1, 4, 2018, 6, 80),
(43, 1, 4, 2018, 7, 90),
(44, 1, 4, 2018, 8, 90),
(45, 1, 4, 2018, 9, 110),
(46, 1, 4, 2018, 10, 95),
(47, 1, 4, 2018, 11, 100),
(48, 1, 4, 2018, 12, 100),
(61, 1, 1, 2018, 1, 50),
(62, 1, 1, 2018, 2, 100),
(63, 1, 1, 2018, 3, 50),
(64, 1, 1, 2018, 4, 50),
(65, 1, 1, 2018, 5, 100),
(66, 1, 1, 2018, 6, 30),
(67, 1, 1, 2018, 7, 50),
(68, 1, 1, 2018, 8, 30),
(69, 1, 1, 2018, 9, 100),
(70, 1, 1, 2018, 10, 50),
(71, 1, 1, 2018, 11, 50),
(72, 1, 1, 2018, 12, 40),
(73, 1, 3, 2018, 1, 8),
(74, 1, 3, 2018, 2, 10),
(75, 1, 3, 2018, 3, 15),
(76, 1, 3, 2018, 4, 10),
(77, 1, 3, 2018, 5, 13),
(78, 1, 3, 2018, 6, 20),
(79, 1, 3, 2018, 7, 20),
(80, 1, 3, 2018, 8, 10),
(81, 1, 3, 2018, 9, 7),
(82, 1, 3, 2018, 10, 5),
(83, 1, 3, 2018, 11, 7),
(84, 1, 3, 2018, 12, 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `idproduk` int(11) NOT NULL,
  `idadmin` int(11) NOT NULL,
  `namaproduk` varchar(20) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `satuan` varchar(8) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`idproduk`, `idadmin`, `namaproduk`, `harga_jual`, `satuan`) VALUES
(1, 1, 'Air Mineral Aqua', 31000, 'Kardus'),
(2, 1, 'Beras Anak Daro', 135000, 'Karung'),
(3, 1, 'Tepung Terigu', 175000, 'Sak'),
(4, 1, 'Gas LPG 12 Kg', 155000, 'Tabung');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `intervalinterval`
--
ALTER TABLE `intervalinterval`
  ADD PRIMARY KEY (`idinterval`);

--
-- Indexes for table `nilairandom`
--
ALTER TABLE `nilairandom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permintaan`
--
ALTER TABLE `permintaan`
  ADD PRIMARY KEY (`idpermintaan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idproduk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT for table `intervalinterval`
--
ALTER TABLE `intervalinterval`
  MODIFY `idinterval` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `nilairandom`
--
ALTER TABLE `nilairandom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=145;
--
-- AUTO_INCREMENT for table `permintaan`
--
ALTER TABLE `permintaan`
  MODIFY `idpermintaan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `idproduk` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
