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
  `deskripsi` varchar(1555) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal_berakhir` date DEFAULT NULL,
  `url_img` varchar(222) DEFAULT NULL,
  `soft_delete` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `bencana` */

LOCK TABLES `bencana` WRITE;

insert  into `bencana`(`id`,`nama`,`lokasi`,`deskripsi`,`id_user`,`tanggal_berakhir`,`url_img`,`soft_delete`) values (1,'Gunung Merapi Meletus','Yogyakarta','Terjadi pada tahun 2013 yang menelan banyak korban jiwa',2,NULL,'',0),(2,'Tsunami Aceh','Aceh','Gelombang besar tsunami yang meluluh lantakkan Aceh pada Tahun 2012 karena gempa tektonik',2,NULL,NULL,0),(3,'Kabut Asap Kalimantan Timur','Kalimantan Timur','Saya berharap bahwa foto-foto ini membuat orang merasakan apa yang saya rasakan ketika memotretnya. Kehancuran, kesedihan, dan harapan. Saya harap sejumlah gambar ini bisa meningkatkan kesadaran dan mungkin bisa membuat orang tergerak - sama seperti foto-foto ini menggerakan saya - sehingga ini tak lagi terjadi',2,NULL,'assets/img/Kabut Asap Kalimantan Timur.jpg',0),(4,'Kerusuhan Aceh','Aceh','Terjadi Kerusuhan di Aceh pada tahun 22035',2,NULL,NULL,0),(5,'Gempa Aceh Darussalam','Aceh','Gempa di Aceh ini juga mempunyai kedalam dengan titik 48 kilometer (KM) dan berada pada koordinat 1.97 derajat Lintang selatan, 138.38 bujur Timur dan dengan jarak lokasi sekitar 42 km (kilometer).',2,NULL,'assets/img/Gempa Aceh Darussalam.jpg',1);

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
  `url_img` varchar(111) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

LOCK TABLES `user` WRITE;

insert  into `user`(`id`,`nama`,`email`,`password`,`alamat`,`role`,`status`,`url_img`) values (1,'wahyu','wahyu@xxx.xx','202cb962ac59075b964b07152d234b70','Jl.Keadilan Dunia','user',NULL,NULL),(2,'hanif','hanif@okay.com','202cb962ac59075b964b07152d234b70','Jl.Kebajikan Dunia no.123','user',NULL,'assets/user/hanif.jpg');

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
