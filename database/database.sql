/*
SQLyog Ultimate v8.6 Beta2
MySQL - 5.6.14 : Database - tanggap_bencana
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`tanggap_bencana` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `tanggap_bencana`;

/*Table structure for table `bencana` */

CREATE TABLE `bencana` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(111) NOT NULL,
  `lokasi` varchar(111) DEFAULT NULL,
  `deskripsi` varchar(222) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `bencana` */

LOCK TABLES `bencana` WRITE;

UNLOCK TABLES;

/*Table structure for table `kebutuhan` */

CREATE TABLE `kebutuhan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(111) NOT NULL,
  `jumlah` varchar(33) DEFAULT NULL,
  `id_bencana` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kebutuhan` */

LOCK TABLES `kebutuhan` WRITE;

UNLOCK TABLES;

/*Table structure for table `sumbang` */

CREATE TABLE `sumbang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kebutuhan` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `bukti` varchar(111) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sumbang` */

LOCK TABLES `sumbang` WRITE;

UNLOCK TABLES;

/*Table structure for table `user` */

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(111) DEFAULT NULL,
  `email` varchar(111) DEFAULT NULL,
  `password` varchar(111) DEFAULT NULL,
  `alamat` varchar(111) DEFAULT NULL,
  `role` varchar(22) DEFAULT NULL,
  `status` varchar(22) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user` */

LOCK TABLES `user` WRITE;

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
