/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.28-MariaDB : Database - db_utech
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_utech` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `db_utech`;

/*Table structure for table `tb_admin` */

DROP TABLE IF EXISTS `tb_admin`;

CREATE TABLE `tb_admin` (
  `id_admin` char(6) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tb_admin` */

insert  into `tb_admin`(`id_admin`,`nama_admin`,`password`) values 
('200411','Omang','pyunzz'),
('210305','Vito','boysplanet'),
('220805','Hani','pudan08');

/*Table structure for table `tb_barang` */

DROP TABLE IF EXISTS `tb_barang`;

CREATE TABLE `tb_barang` (
  `id_barang` char(10) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jenis_barang` enum('iPhone','Samsung','Oppo') NOT NULL,
  `kategori_barang` enum('iOS','Android') NOT NULL,
  `tahun_rilis` year(4) NOT NULL,
  `harga_satuan` int(10) NOT NULL,
  `stok_barang` int(5) NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tb_barang` */

insert  into `tb_barang`(`id_barang`,`nama_barang`,`jenis_barang`,`kategori_barang`,`tahun_rilis`,`harga_satuan`,`stok_barang`) values 
('1112223334','iPhone XR','iPhone','iOS',2018,5000000,150),
('23','iPhone XS','iPhone','iOS',2019,4000000,300);

/*Table structure for table `tb_customer` */

DROP TABLE IF EXISTS `tb_customer`;

CREATE TABLE `tb_customer` (
  `id_customer` char(10) NOT NULL,
  `nama_customer` varchar(100) NOT NULL,
  `telp_customer` varchar(15) NOT NULL,
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tb_customer` */

/*Table structure for table `tb_detail_transaksi` */

DROP TABLE IF EXISTS `tb_detail_transaksi`;

CREATE TABLE `tb_detail_transaksi` (
  `id_detail_transaksi` char(5) NOT NULL,
  `id_transaksi` char(5) NOT NULL,
  `id_barang` char(10) NOT NULL,
  `jumlah_barang` int(5) NOT NULL,
  `subtotal` int(10) NOT NULL,
  PRIMARY KEY (`id_detail_transaksi`),
  KEY `id_transaksi` (`id_transaksi`),
  KEY `id_barang` (`id_barang`),
  CONSTRAINT `tb_detail_transaksi_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `tb_transaksi` (`id_transaksi`),
  CONSTRAINT `tb_detail_transaksi_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tb_detail_transaksi` */

/*Table structure for table `tb_pegawai` */

DROP TABLE IF EXISTS `tb_pegawai`;

CREATE TABLE `tb_pegawai` (
  `id_pegawai` char(10) NOT NULL,
  `nama_pegawai` varchar(100) NOT NULL,
  `alamat_pegawai` varchar(255) NOT NULL,
  `telp_pegawai` varchar(15) NOT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tb_pegawai` */

insert  into `tb_pegawai`(`id_pegawai`,`nama_pegawai`,`alamat_pegawai`,`telp_pegawai`) values 
('2305551012','Novi','Bali','0812666666666'),
('2305551037','Tugus','Bali','0812444444444'),
('2305551064','Hani','Medan','0812777777777'),
('2305551088','Karin','Poso','0812222222222'),
('2305551094','Jea','Yogyakarta','0812888888888'),
('2305551096','Alexa','Bandung','0812555555555'),
('2305551108','Dea','Bali','0812333333333'),
('2305551130','Vito','Jakarta','0812999999999');

/*Table structure for table `tb_transaksi` */

DROP TABLE IF EXISTS `tb_transaksi`;

CREATE TABLE `tb_transaksi` (
  `id_transaksi` char(5) NOT NULL,
  `id_customer` char(10) NOT NULL,
  `id_pegawai` char(10) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `total` int(10) NOT NULL,
  PRIMARY KEY (`id_transaksi`),
  KEY `id_pegawai` (`id_pegawai`),
  KEY `id_customer` (`id_customer`),
  CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `tb_pegawai` (`id_pegawai`),
  CONSTRAINT `tb_transaksi_ibfk_2` FOREIGN KEY (`id_customer`) REFERENCES `tb_customer` (`id_customer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tb_transaksi` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
