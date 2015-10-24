/*
SQLyog Ultimate v8.6 Beta2
MySQL - 5.6.14 : Database - monitoring_bencana
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`monitoring_bencana` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `monitoring_bencana`;

/*Table structure for table `pasokan` */

CREATE TABLE `pasokan` (
  `id_kecamatan` int(11) DEFAULT NULL,
  `jenis_kebutuhan` varchar(111) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `pasokan` */

LOCK TABLES `pasokan` WRITE;

insert  into `pasokan`(`id_kecamatan`,`jenis_kebutuhan`,`jumlah`,`tgl_input`,`id`) values (1,'masker',500,'2015-10-24 11:39:43',1),(1,'makanan balita',500,'2015-10-24 11:40:45',2),(1,'obat',1000,'2015-10-24 11:41:01',3),(1,'tabung oksigen',50,'2015-10-24 11:41:21',4),(2,'masker',100,'2015-10-24 11:41:45',5),(2,'makanan balita',250,'2015-10-24 11:43:03',6),(2,'obat',420,'2015-10-24 11:43:10',7),(3,'tabung oksigen',741,'2015-10-24 11:43:41',8),(3,'masker',1000,'2015-10-24 11:43:50',9);

UNLOCK TABLES;

/*Table structure for table `permintaan` */

CREATE TABLE `permintaan` (
  `id_kecamatan` int(11) DEFAULT NULL,
  `jenis_kebutuhan` varchar(111) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_input` timestamp NULL DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `status` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `permintaan` */

LOCK TABLES `permintaan` WRITE;

insert  into `permintaan`(`id_kecamatan`,`jenis_kebutuhan`,`jumlah`,`id`,`tgl_input`,`id_user`,`status`) values (1,'masker',550,2,NULL,1,'request'),(1,'makanan balita',100,3,NULL,1,'request'),(1,'obat',1100,4,NULL,1,'request'),(1,'tabung oksigen',50,5,NULL,1,'request'),(1,'air minum',200,6,NULL,1,'request'),(2,'masker',500,7,NULL,1,'request'),(2,'makanan balita',400,8,NULL,1,'request'),(3,'tabung oksigen',1000,9,NULL,1,'request');

UNLOCK TABLES;

/*Table structure for table `user` */

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(111) DEFAULT NULL,
  `username` varchar(111) DEFAULT NULL,
  `password` varchar(111) DEFAULT NULL,
  `role` varchar(22) DEFAULT NULL,
  `email` varchar(111) DEFAULT NULL,
  `tlp` varchar(33) DEFAULT NULL,
  `id_wilayah` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

LOCK TABLES `user` WRITE;

insert  into `user`(`id`,`nama`,`username`,`password`,`role`,`email`,`tlp`,`id_wilayah`) values (1,'wahyu','123','202cb962ac59075b964b07152d234b70','pelapor','wahyu@pelapor.com',NULL,1);

UNLOCK TABLES;

/*Table structure for table `wilayah` */

CREATE TABLE `wilayah` (
  `nama` varchar(111) DEFAULT NULL,
  `koordinat_1` varchar(111) DEFAULT NULL,
  `koordinat_2` varchar(111) DEFAULT NULL,
  `cp` varchar(111) DEFAULT NULL,
  `pic` varchar(111) DEFAULT NULL,
  `tlp` varchar(111) DEFAULT NULL,
  `propinsi` varchar(111) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `wilayah` */

LOCK TABLES `wilayah` WRITE;

insert  into `wilayah`(`nama`,`koordinat_1`,`koordinat_2`,`cp`,`pic`,`tlp`,`propinsi`,`id`) values ('kecamatan 1','45.12','12.41','021457412540','hamdi',NULL,'Kalimanatan Timur',1),('kecamatan 2','74.12','124.12','01251241574','kukuh',NULL,'Kalimantan Timur',2),('kecamatan 3','12.147','74.12','02147521441','hanip',NULL,'Kalimantan Timur',3);

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
