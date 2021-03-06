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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `bencana` */

LOCK TABLES `bencana` WRITE;

insert  into `bencana`(`id`,`nama`,`lokasi`,`deskripsi`,`id_user`,`tanggal_berakhir`,`url_img`,`soft_delete`,`balita`,`a_perempuan`,`a_laki`,`d_perempuan`,`d_laki`,`l_perempuan`,`l_laki`,`jarak`,`jenis_bencana`,`lokasi_titik`) values (1,'Kabut Asap Kalimantan TImur','Temindung, Samarinda','Titik Kumpul Pasokan suplai bantuan Gedung kecamatan Merbabu, Balikpapan Kalimantan Timur',1,'2015-12-29','assets/img/Kabut-Asap-1.jpg',0,'35','99','22','69','83','32','82',32,NULL,'Kecamatan Bangkal'),(2,'Sinabung Medan','Sinabung, Medan','Pos Pengungsian PMI kaki gunung Sinabung, Medan',2,'2015-11-29','assets/img/Sinabung Medan.jpg',1,'48','81','82','57','5','81','65',21,NULL,'Kecamatan Podosugih'),(3,'Kabut Asap Kalimantan TImur','Berau, Teluk Bayur','Titik kumpul gedung sekolah SMA 2 N Kudus, Jawa Tengah',1,NULL,'assets/img/Kabut Asap Kalimantan Timur.jpg',0,'95','32','7','82','59','78','82',12,NULL,'Kecamatan Angkring'),(5,'Gempa Aceh Darussalam','Aceh','Gempa di Aceh ini juga mempunyai kedalam dengan titik 48 kilometer (KM) dan berada pada koordinat 1.97 derajat Lintang selatan, 138.38 bujur Timur dan dengan jarak lokasi sekitar 42 km (kilometer).',3,NULL,'assets/img/Gempa Aceh Darussalam.jpg',1,'78','32','15','65','45','8','9',23,NULL,'Kecamatan Rambar'),(9,'Banjir Bandang Irian','Papua','Gempa dengan skala 4.6 Ricther',2,'2015-10-29','assets/img/Banjir Bandang Irian.jpg',1,'56','39','85','97','52','11','12',45,NULL,'Kecamatan Bekantan'),(10,'Tanah Longsor Banjarnegara','Jawa Tengah','Seperti diberitakan sebelumnya, puluhan rumah yang dihuni 300 jiwa di Dusun Jemblung RT 05 RW 01, Desa Sampang, Kecamatan Karangkobar, tertimbun tanah longsor yang terjadi pada Jumat, 12 Desember 2014, pukul 17.30 WIB. Berdasarkan data sementara Posko Induk Badan Penanggulangan Bencana Daerah (BPBD) Banjarnegara, jumlah korban tewas yang telah ditemukan sebanyak 12 orang dan ada 15 orang luka-luka',3,'2015-10-22','assets/img/Tanah Longsor Banjarnegara.jpg',1,'54','87','35','110','45','65','25',5,NULL,'Kecamatan Langgar');

UNLOCK TABLES;

/*Table structure for table `kebutuhan` */

CREATE TABLE `kebutuhan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(111) NOT NULL,
  `jumlah` varchar(33) DEFAULT NULL,
  `id_bencana` int(11) DEFAULT NULL,
  `terpenuhi` int(11) DEFAULT '0',
  `satuan` varchar(22) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `kebutuhan` */

LOCK TABLES `kebutuhan` WRITE;

insert  into `kebutuhan`(`id`,`nama`,`jumlah`,`id_bencana`,`terpenuhi`,`satuan`) values (1,'Pakaian Anak','400',9,0,NULL),(2,'Paramedis','5',9,0,NULL),(3,'Pakaian Dewasa','100',10,0,NULL),(4,'Paramedis','5',10,0,NULL),(5,'Mie Instan','500',10,0,NULL),(6,'Mie Instan','773',1,400,NULL),(7,'Pakaian Dewasa','410',1,30,NULL),(8,'Pakaian Dewasa','441',2,0,NULL),(9,'Pakaian Anak','741',2,0,NULL),(10,'Paramedis','20',3,0,NULL),(11,'Pakaian Anak','120',3,0,NULL),(12,'Obat-obatan','500',3,0,NULL),(13,'Obat-obatan','600',5,0,NULL),(14,'Paramedis','30',5,0,NULL),(15,'Pakaian Anak','40',5,0,NULL),(16,'Mie Instan','1000',5,0,NULL),(17,'Obat-Obatan','10',1,12,NULL),(19,'Masker','10',1,10,NULL);

UNLOCK TABLES;

/*Table structure for table `organisasi` */

CREATE TABLE `organisasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(111) DEFAULT NULL,
  `lokasi` varchar(111) DEFAULT NULL,
  `telpon` varchar(111) DEFAULT NULL,
  `url_img` varchar(222) DEFAULT NULL,
  `Kota` varchar(111) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `organisasi` */

LOCK TABLES `organisasi` WRITE;

insert  into `organisasi`(`id`,`nama`,`lokasi`,`telpon`,`url_img`,`Kota`) values (1,'PMI','Kalimantan Tengah','025487564321','assets/logo/PMI.jpg','Palangkaraya'),(2,'Dompet Dhuafa','Kalimantan Timur','031456852963','assets/logo/dompet_dhuafa.jpg','Samarinda');

UNLOCK TABLES;

/*Table structure for table `organisasi_bencana` */

CREATE TABLE `organisasi_bencana` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_bencana` int(11) DEFAULT NULL,
  `id_organisasi` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `organisasi_bencana` */

LOCK TABLES `organisasi_bencana` WRITE;

insert  into `organisasi_bencana`(`id`,`id_bencana`,`id_organisasi`) values (1,1,1),(2,3,2);

UNLOCK TABLES;

/*Table structure for table `sumbang` */

CREATE TABLE `sumbang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kebutuhan` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `bukti` varchar(111) DEFAULT NULL,
  `status` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `sumbang` */

LOCK TABLES `sumbang` WRITE;

insert  into `sumbang`(`id`,`id_kebutuhan`,`jumlah`,`bukti`,`status`) values (1,8,500,NULL,'0'),(2,1,500,NULL,'0');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

LOCK TABLES `user` WRITE;

insert  into `user`(`id`,`nama`,`email`,`password`,`alamat`,`role`,`status`,`url_img`) values (1,'wahyu','wahyu@xxx.xx','202cb962ac59075b964b07152d234b70','Jl.Keadilan Dunia','user',NULL,'assets/user/wahyu.jpg'),(2,'hanif','hanif@okay.com','202cb962ac59075b964b07152d234b70','Jl.Kebajikan Dunia no.123','user',NULL,'assets/user/hanif.jpg'),(3,'hamdi','hamdi@best.oke','202cb962ac59075b964b07152d234b70','Jl.Pemuda Ganteng Sekali no.456','user',NULL,'assets/user/hamdi.jpg');

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
