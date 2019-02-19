/*
SQLyog Community v11.52 (64 bit)
MySQL - 10.1.28-MariaDB : Database - srb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`srb` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `srb`;

/*Table structure for table `ecom_admin` */

DROP TABLE IF EXISTS `ecom_admin`;

CREATE TABLE `ecom_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` bigint(11) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `org_password` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `ecom_admin` */

insert  into `ecom_admin`(`id`,`name`,`email`,`phone`,`address`,`password`,`org_password`,`image`,`role`,`created_on`,`created_by`,`updated_on`,`updated_by`,`status`) values (1,'Administrator','admin@admin.com',9676270951,'hyderabad','e10adc3949ba59abbe56e057f20f883e','123456','b511eb0ada770cc40cc85ecf8003852c.jpg','Superadmin',NULL,NULL,NULL,NULL,'1'),(9,'RanaPrathap Reddy','Sales@sales.com',9678451230,'testing','e10adc3949ba59abbe56e057f20f883e','123456','1714daec5e5a5e278c0009801e9a2f23.jpg','Sales','2019-02-19 08:20:44',1,'2019-02-19 10:40:27',1,'0'),(10,'RanaPrathap Reddy','sales@sales2.com',9676270951,'testing','e10adc3949ba59abbe56e057f20f883e','123456','4bc59384ff63296b28acd8489af23aae.jpg','Sales','2019-02-19 08:21:27',1,'2019-02-19 10:40:40',1,'1'),(11,'RanaPrathap Reddy','order@order.com',9676270951,'testing','e10adc3949ba59abbe56e057f20f883e','123456','8a06f3ec5f316804aca6c180037cf3a8.jpg','Order','2019-02-19 08:46:38',1,'2019-02-19 10:40:43',1,'1');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
