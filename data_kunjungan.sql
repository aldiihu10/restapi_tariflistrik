/*
SQLyog Community v12.4.0 (64 bit)
MySQL - 10.1.28-MariaDB : Database - data_kunjungan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`data_kunjungan` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `data_kunjungan`;

/*Table structure for table `kegiatan` */

DROP TABLE IF EXISTS `kegiatan`;

CREATE TABLE `kegiatan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `destinasi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `acara` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `penyelenggara` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `p_lokal` int(11) DEFAULT NULL,
  `p_mancanegara` int(11) DEFAULT NULL,
  `total_pengunjung` int(11) DEFAULT NULL,
  `parkiran` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pengunjung` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lokasi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keterangan` text COLLATE utf8_unicode_ci,
  `foto_k` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_k` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `kegiatan` */

insert  into `kegiatan`(`id`,`destinasi`,`acara`,`penyelenggara`,`tanggal`,`p_lokal`,`p_mancanegara`,`total_pengunjung`,`parkiran`,`pengunjung`,`lokasi`,`keterangan`,`foto_k`,`video_k`,`created_at`,`updated_at`) values 
(1,'Balai Kota','Kirab Merah Putih','pemkot','2019-08-14',5000,2,5002,NULL,'on','on','adaadaada1','ti.png',NULL,'2019-08-15 11:47:13','2019-09-10 23:52:24'),
(2,'Selomangkleng','seminar','pemkot','2019-08-20',50,0,50,'on','on','on','ganti','aldi.png',NULL,'2019-08-20 07:12:27','2019-09-09 04:40:27'),
(3,'Lap. Bawang','Pencak Dor','disbudparpora','2019-09-04',355,0,355,'on',NULL,NULL,'malam','abdullah_abe_39172236_318954818852172_2091478034669371392_n.jpg',NULL,'2019-09-04 14:15:15','2019-09-05 09:16:44'),
(4,'Stadion','HUT RI','pemkot','2019-09-04',200,5,205,NULL,'on',NULL,'jj',NULL,NULL,'2019-09-04 14:24:23','2019-09-04 14:24:23'),
(5,'GOR','Opening HUR Kediri','disbudparpora','2019-09-04',400,0,400,NULL,NULL,'on','hh',NULL,NULL,'2019-09-04 14:27:23','2019-09-04 14:27:23'),
(6,'Kediri Town Squre','Pameran Keris','disbudparpora','2019-09-04',250,0,250,'on','on','on','f',NULL,NULL,'2019-09-04 14:28:37','2019-09-04 14:28:37'),
(7,'Taman Brantas','Labuh Bumi','disbudparpora','2019-09-04',1000,0,1000,NULL,'on','on','k','jpg',NULL,'2019-09-04 14:36:23','2019-09-04 14:36:23'),
(9,'Taman Sekartaji','Kediri Fashion Week','pemkot','2019-09-04',250,7,257,NULL,NULL,NULL,'v','jpg',NULL,'2019-09-04 14:42:12','2019-09-04 14:42:12'),
(10,'Bukit Klotok','Pengibaran Merah Putih','disbudparpora','2019-09-04',50,0,50,NULL,NULL,NULL,NULL,'38010jpg',NULL,'2019-09-04 14:44:27','2019-09-04 14:44:27'),
(11,'balai kota','Coin Emas','pemkot','2019-09-07',80,2,82,'on',NULL,NULL,'qweqwe',NULL,NULL,'2019-09-07 03:32:33','2019-09-07 03:32:33'),
(12,'Tirtayasa Park','Manusuk Sima','disbudparpora','2019-09-07',200,0,200,'on',NULL,NULL,'fghjkl',NULL,NULL,'2019-09-07 03:34:49','2019-09-07 03:34:49'),
(13,'TMP','Nite Carnival','disbudparpora','2018-09-07',2000,0,2000,NULL,NULL,NULL,NULL,NULL,NULL,'2019-09-07 03:39:49','2019-10-04 12:21:38'),
(14,'GOR','Pameran UMKM','disbudparpora','2019-09-30',400,2,402,'on',NULL,'on','pameran usaha masyarakat kota kediri','Lilliputs-Series-i-personaggi-giganti-di-Hakan-Keles-Collater.al-6-1080x1080.jpg',NULL,'2019-09-30 07:11:14','2019-10-10 01:47:58');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_12_140750_create_pemuda_olahraga',1),
(4,'2019_08_13_043343_create_kegiatan',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `pemuda_olahraga` */

DROP TABLE IF EXISTS `pemuda_olahraga`;

CREATE TABLE `pemuda_olahraga` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `jenis_lomba` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `emas` int(11) DEFAULT NULL,
  `perak` int(11) DEFAULT NULL,
  `perunggu` int(11) DEFAULT NULL,
  `piagam` int(11) DEFAULT NULL,
  `jumlah_prestasi` int(11) DEFAULT NULL,
  `ft_kegiatan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `pemuda_olahraga` */

insert  into `pemuda_olahraga`(`id`,`tanggal`,`jenis_lomba`,`emas`,`perak`,`perunggu`,`piagam`,`jumlah_prestasi`,`ft_kegiatan`,`created_at`,`updated_at`) values 
(2,'2019-09-09','Karya Ilmiah',1,0,3,1,5,'41774663_2144082872579070_3207372145181065216_n.jpg','2019-09-09 11:26:00','2019-09-10 23:56:10'),
(3,'2019-09-09','Pemuda Pelopor',3,0,0,2,5,'1568029651_abdullah_abe_41284427_304860776959002_2637183854126340466_n.jpg','2019-09-09 11:47:31','2019-09-09 11:47:31'),
(4,'2019-09-11','Pendidikan',0,2,0,0,2,NULL,'2019-09-11 01:05:20','2019-09-15 14:07:27'),
(5,'2019-10-02','Kepemudaan',2,1,0,3,6,NULL,'2019-10-02 07:51:05','2019-10-02 07:51:32'),
(6,'2019-10-02','Olimpiade',0,0,3,0,3,NULL,'2019-10-02 08:03:09','2019-10-02 08:03:09'),
(7,'2019-10-02','Pemuda Pelopor',1,0,3,0,4,NULL,'2019-10-02 08:06:27','2019-10-02 08:06:27'),
(8,'2019-10-02','Olimpiade',0,2,0,0,2,NULL,'2019-10-02 08:16:18','2019-10-02 08:16:18'),
(9,'2019-10-03','Kepemudaan',1,1,2,4,8,NULL,'2019-10-03 01:51:51','2019-10-03 01:51:51'),
(10,'2019-10-03','Pendidikan',2,1,0,2,5,'IMG_20190802_095957.jpg','2019-10-03 01:52:20','2019-10-10 02:54:03'),
(12,'2019-10-04','Olahraga',2,0,0,1,3,'1_emE3Gyr3cgNQkSEOmNizAg.jpeg','2019-10-04 03:38:13','2019-10-10 01:47:13');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`images`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(2,'aldi','aldi@gmail.com','Logo Pemkot Kediri Hitam Putih.png','$2y$10$WqejtrQG6MSXUXQRDUvG/uKax7JQDE53cDTpepRQrj4A0325IZu4W','edrRFfTntGd798WHWLpPeFkVLULA0GFekDc23YfO8nq3lBIKuCsstJAIbG76','2019-08-13 07:49:43','2019-09-16 00:17:56'),
(3,'tegarb','tegar@gmail.com','simons_cat_cartoon_texture_cat_94395_1400x1050.jpg','$2y$10$DRBqYhGz3MUBvU9xl0Nng.RJiDq2Dg6RuVq.5didxqD7HM4JMPVti','j15mistccmb5EflGV7hIe5ePKtIS4ztZKhkaRcrM1Zdqee5IlEAOEAebyklL','2019-08-19 07:26:25','2019-08-22 05:08:07'),
(4,'Admin','admin123@gmail.com',NULL,'$2y$10$BtNXLMFkMdOYPoxUH.SNHeCQCKTH8mbRakFqBvLqJselXFzeQ/bMK','pnCddrWnnBU1PhrbDWHLO1otblbuHurh2bRR8mfJjK7K2sSat6kW4S9XaUbC','2019-09-11 23:44:30','2019-09-11 23:44:30'),
(5,'coba','coba@gmail.com',NULL,'$2y$10$UJAgGT/fSyiZ9bDaDZdcQ.SDxDUDIu6twrHSdW33Wr7f5xEmlgHjq',NULL,'2019-09-11 23:46:11','2019-09-11 23:46:11'),
(6,'lala','lala@gmail.com',NULL,'$2y$10$wabuPdfs6NqbcrRiNq8DpeH5GDADI/cHvuiwdsd8ZpLH4.Owj33ty',NULL,'2019-09-12 00:04:42','2019-09-12 00:04:42');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
