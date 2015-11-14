-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2015 at 07:31 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tanggap_bencana`
--

-- --------------------------------------------------------

--
-- Table structure for table `bencana`
--

CREATE TABLE IF NOT EXISTS `bencana` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(111) NOT NULL,
  `lokasi` varchar(111) DEFAULT NULL,
  `deskripsi` varchar(1555) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal_berakhir` date DEFAULT NULL,
  `url_img` varchar(222) DEFAULT NULL,
  `soft_delete` int(11) NOT NULL DEFAULT '0',
  `balita` varchar(111) DEFAULT NULL,
  `a_perempuan` varchar(111) DEFAULT NULL,
  `a_laki` varchar(111) DEFAULT NULL,
  `d_perempuan` varchar(111) DEFAULT NULL,
  `d_laki` varchar(111) DEFAULT NULL,
  `l_perempuan` varchar(111) DEFAULT NULL,
  `l_laki` varchar(111) DEFAULT NULL,
  `jarak` int(11) DEFAULT NULL,
  `jenis_bencana` varchar(111) DEFAULT NULL,
  `lokasi_titik` varchar(111) DEFAULT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `bencana`
--

INSERT INTO `bencana` (`id`, `nama`, `lokasi`, `deskripsi`, `id_user`, `tanggal_berakhir`, `url_img`, `soft_delete`, `balita`, `a_perempuan`, `a_laki`, `d_perempuan`, `d_laki`, `l_perempuan`, `l_laki`, `jarak`, `jenis_bencana`, `lokasi_titik`, `lat`, `lng`) VALUES
(22, 'Kabut Asap ', 'Kalimantan Timur', 'Posko terletsk di berau dibalai desa', 1, '2015-11-14', './assets/img/gambar1.jpg', 0, '30', '78', '133', '102', '77', '54', '65', 10, NULL, 'Berau', 1.913331041645406, 117.32319545156247),
(23, 'Kabut Asap', 'Riau', 'Kabut asap sudah berlangsung dari 14 september 2015. Letak posko terletak di gelanggang remaja', 1, '2015-11-14', './assets/img/poko-darurat-asap1.jpg', 0, '67', '32', '44', '22', '32', '43', '12', 20, NULL, 'Pekanbaru', 0.5224695499584096, 101.45696220468744),
(24, 'Gempa bumi', 'Bantul', 'Gempa bumi bersekala 5.1 scala richter mengguncang bantul pada hari senin 10 november 2015', 1, '2015-11-14', './assets/img/1425394428_11.jpg', 0, '7', '65', '34', '63', '34', '53', '43', 40, NULL, 'Masjid Al Aman', -7.8748176, 110.3255365),
(25, 'Banjir ', 'Jakarta', 'Banjir yang terjadi karena hujan yang mengguyur jakarta pada tanggal 11 september 2015 - 13 september 2015 mengakibatkan banjir parah', 1, '2015-11-14', './assets/img/banjir bekasi 2014 2.JPG', 0, '55', '42', '34', '52', '42', '22', '52', 6, NULL, 'Masjid Agung Kampung Melayu', -6.23254, 106.86493);

-- --------------------------------------------------------

--
-- Table structure for table `kebutuhan`
--

CREATE TABLE IF NOT EXISTS `kebutuhan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(111) NOT NULL,
  `jumlah` varchar(33) DEFAULT NULL,
  `id_bencana` int(11) DEFAULT NULL,
  `terpenuhi` int(11) DEFAULT '0',
  `satuan` varchar(22) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `kebutuhan`
--

INSERT INTO `kebutuhan` (`id`, `nama`, `jumlah`, `id_bencana`, `terpenuhi`, `satuan`) VALUES
(1, 'Pakaian Anak', '400', 9, 0, NULL),
(2, 'Paramedis', '5', 9, 0, NULL),
(3, 'Pakaian Dewasa', '100', 10, 0, NULL),
(4, 'Paramedis', '5', 10, 0, NULL),
(5, 'Mie Instan', '500', 10, 0, NULL),
(6, 'Mie Instan', '773', 1, 400, NULL),
(7, 'Pakaian Dewasa', '410', 1, 30, NULL),
(8, 'Pakaian Dewasa', '441', 2, 0, NULL),
(9, 'Pakaian Anak', '741', 2, 0, NULL),
(10, 'Paramedis', '20', 3, 20, NULL),
(11, 'Pakaian Anak', '120', 3, 25, NULL),
(12, 'Obat-obatan', '500', 3, 0, NULL),
(13, 'Obat-obatan', '600', 5, 0, NULL),
(14, 'Paramedis', '30', 5, 0, NULL),
(15, 'Pakaian Anak', '40', 5, 0, NULL),
(16, 'Mie Instan', '1000', 5, 0, NULL),
(17, 'Obat-Obatan', '10', 1, 12, NULL),
(19, 'Masker', '10', 1, 10, NULL),
(20, 'Pakaian Dewasa', '100', 11, 0, NULL),
(21, 'Obat-Obatan', '21', 20, 0, NULL),
(22, 'Paramedis', '3', 21, 0, NULL),
(23, 'Obat-Obatan', '300', 21, 0, NULL),
(24, 'Masker', '900', 22, 0, NULL),
(25, 'Dokter', '10', 22, 0, NULL),
(26, 'Pakaian Dewasa', '80', 22, 0, NULL),
(27, 'Masker', '500', 23, 0, NULL),
(28, 'Makanan Instan', '500', 23, 0, NULL),
(29, 'Paramedis', '30', 23, 0, NULL),
(30, 'Dokter', '5', 23, 0, NULL),
(31, 'Pakaian Anak', '46', 24, 0, NULL),
(32, 'Mie Instan', '78', 24, 0, NULL),
(33, 'Paramedis', '10', 24, 0, NULL),
(34, 'Obat-Obatan', '55', 25, 0, NULL),
(35, 'Makanan Instan', '67', 25, 0, NULL),
(36, 'Dokter', '7', 25, 0, NULL),
(37, 'Pakaian Anak', '78', 25, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE IF NOT EXISTS `layanan` (
  `nama_layanan` varchar(55) NOT NULL,
  `id_bencana` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`nama_layanan`, `id_bencana`, `id`) VALUES
('Dapur Umum', 1, 1),
('Peristirahatan', 1, 2),
('Dapur Umum', 1, 3),
('Dapur Umum', 21, 4),
('Kesehatan', 21, 5),
('Dapur Umum', 22, 6),
('Peristirahatan', 22, 7),
('Kesehatan', 23, 8),
('Dapur Umum', 23, 9),
('Peristirahatan', 23, 10),
('Kesehatan', 24, 11),
('Dapur Umum', 24, 12),
('Peristirahatan', 24, 13),
('Kesehatan', 25, 14),
('Dapur Umum', 25, 15),
('Peristirahatan', 25, 16);

-- --------------------------------------------------------

--
-- Table structure for table `organisasi`
--

CREATE TABLE IF NOT EXISTS `organisasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(111) DEFAULT NULL,
  `lokasi` varchar(111) DEFAULT NULL,
  `telpon` varchar(111) DEFAULT NULL,
  `url_img` varchar(222) DEFAULT NULL,
  `Kota` varchar(111) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `organisasi`
--

INSERT INTO `organisasi` (`id`, `nama`, `lokasi`, `telpon`, `url_img`, `Kota`) VALUES
(1, 'PMI', 'Kalimantan Tengah', '025487564321', 'assets/logo/PMI.jpg', 'Palangkaraya'),
(2, 'Dompet Dhuafa', 'Kalimantan Timur', '031456852963', 'assets/logo/dompet_dhuafa.jpg', 'Samarinda');

-- --------------------------------------------------------

--
-- Table structure for table `organisasi_bencana`
--

CREATE TABLE IF NOT EXISTS `organisasi_bencana` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_bencana` int(11) DEFAULT NULL,
  `id_organisasi` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `organisasi_bencana`
--

INSERT INTO `organisasi_bencana` (`id`, `id_bencana`, `id_organisasi`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `sumbang`
--

CREATE TABLE IF NOT EXISTS `sumbang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kebutuhan` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `bukti` varchar(111) DEFAULT NULL,
  `status` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sumbang`
--

INSERT INTO `sumbang` (`id`, `id_kebutuhan`, `jumlah`, `bukti`, `status`) VALUES
(1, 8, 500, NULL, '0'),
(2, 1, 500, NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(111) DEFAULT NULL,
  `email` varchar(111) DEFAULT NULL,
  `password` varchar(111) DEFAULT NULL,
  `alamat` varchar(111) DEFAULT NULL,
  `role` varchar(22) DEFAULT NULL,
  `status` varchar(22) DEFAULT NULL,
  `url_img` varchar(111) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `alamat`, `role`, `status`, `url_img`) VALUES
(1, 'wahyu', 'wahyu@xxx.xx', '202cb962ac59075b964b07152d234b70', 'Jl.Keadilan Dunia', 'user', NULL, 'assets/user/wahyu.jpg'),
(2, 'hanif', 'hanif@okay.com', '202cb962ac59075b964b07152d234b70', 'Jl.Kebajikan Dunia no.123', 'user', NULL, 'assets/user/hanif.jpg'),
(3, 'hamdi', 'hamdi@best.oke', '202cb962ac59075b964b07152d234b70', 'Jl.Pemuda Ganteng Sekali no.456', 'user', NULL, 'assets/user/hamdi.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
