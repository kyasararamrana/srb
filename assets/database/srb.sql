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

/*Table structure for table `ecom_bag` */

DROP TABLE IF EXISTS `ecom_bag`;

CREATE TABLE `ecom_bag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `material_type` varchar(200) DEFAULT NULL,
  `quality` varchar(200) DEFAULT NULL,
  `bag_type` int(11) DEFAULT NULL,
  `bag_layout` int(11) DEFAULT NULL,
  `bag_size` int(11) DEFAULT NULL,
  `bag_color` varchar(200) DEFAULT NULL,
  `bag_gsm` int(11) DEFAULT NULL,
  `handle_type` varchar(200) DEFAULT NULL,
  `handle_material_type` varchar(200) DEFAULT NULL,
  `handle_size` varchar(200) DEFAULT NULL,
  `handle_color` varchar(200) DEFAULT NULL,
  `handle_gsm` varchar(200) DEFAULT NULL,
  `sidepatty_type` varchar(200) DEFAULT NULL,
  `sidepatty_size` varchar(200) DEFAULT NULL,
  `sidepatty_color` varchar(200) DEFAULT NULL,
  `sidepatty_gsm` varchar(200) DEFAULT NULL,
  `sidepatty_print` varchar(200) DEFAULT NULL,
  `sidepatty_print_color` varchar(200) DEFAULT NULL,
  `zip_type` varchar(200) DEFAULT NULL,
  `zip_color` varchar(200) DEFAULT NULL,
  `zip_size` varchar(200) DEFAULT NULL,
  `zip_quality` varchar(200) DEFAULT NULL,
  `stitching_type` varchar(200) DEFAULT NULL,
  `stitching_thread_color` varchar(200) DEFAULT NULL,
  `stitching_design` varchar(200) DEFAULT NULL,
  `printing_method` int(11) DEFAULT NULL,
  `printing_color_type` int(11) DEFAULT NULL,
  `printing_style` int(11) DEFAULT NULL,
  `suggested_printing_color` int(11) DEFAULT NULL,
  `printing_language` int(11) DEFAULT NULL,
  `other_charge` varchar(200) DEFAULT NULL,
  `print_cost` varchar(200) DEFAULT NULL,
  `block_charge` varchar(200) DEFAULT NULL,
  `cost_per_kg` varchar(200) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `ecom_bag` */

insert  into `ecom_bag`(`id`,`material_type`,`quality`,`bag_type`,`bag_layout`,`bag_size`,`bag_color`,`bag_gsm`,`handle_type`,`handle_material_type`,`handle_size`,`handle_color`,`handle_gsm`,`sidepatty_type`,`sidepatty_size`,`sidepatty_color`,`sidepatty_gsm`,`sidepatty_print`,`sidepatty_print_color`,`zip_type`,`zip_color`,`zip_size`,`zip_quality`,`stitching_type`,`stitching_thread_color`,`stitching_design`,`printing_method`,`printing_color_type`,`printing_style`,`suggested_printing_color`,`printing_language`,`other_charge`,`print_cost`,`block_charge`,`cost_per_kg`,`created_on`,`created_by`,`updated_on`,`updated_by`,`status`) values (1,'test','test',2,1,3,'red',2,'test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test',1,2,2,1,1,'test','test','test','test','2019-02-21 14:00:11',1,NULL,NULL,1),(2,'Material Type','Quality',2,1,3,'red',2,'','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test',1,1,1,2,1,'test','test','test','test','2019-02-21 14:02:14',1,NULL,NULL,1);

/*Table structure for table `ecom_baggsm` */

DROP TABLE IF EXISTS `ecom_baggsm`;

CREATE TABLE `ecom_baggsm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bag_type` int(11) DEFAULT NULL,
  `bag_layout` int(11) DEFAULT NULL,
  `bag_size` int(11) DEFAULT NULL,
  `bag_gsm` varchar(200) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `ecom_baggsm` */

insert  into `ecom_baggsm`(`id`,`bag_type`,`bag_layout`,`bag_size`,`bag_gsm`,`created_on`,`created_by`,`updated_on`,`updated_by`,`status`) values (1,2,9,8,'50','2019-02-20 13:59:22',1,NULL,NULL,1),(2,2,1,3,'50','2019-02-20 14:00:09',1,NULL,NULL,1),(3,2,2,8,'50','2019-02-20 14:02:53',1,NULL,NULL,1),(4,2,1,2,'50','2019-02-20 14:03:45',1,NULL,NULL,1),(5,2,1,2,'60','2019-02-20 14:03:45',1,NULL,NULL,1),(6,2,1,2,'70','2019-02-20 14:03:45',1,NULL,NULL,1);

/*Table structure for table `ecom_baglayout` */

DROP TABLE IF EXISTS `ecom_baglayout`;

CREATE TABLE `ecom_baglayout` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bag_type` varchar(200) DEFAULT NULL,
  `bag_layout` varchar(200) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `ecom_baglayout` */

insert  into `ecom_baglayout`(`id`,`bag_type`,`bag_layout`,`created_on`,`created_by`,`updated_on`,`updated_by`,`status`) values (1,'2','Horizontal','2019-02-20 06:37:53',1,NULL,NULL,1),(2,'2','Verical','2019-02-20 06:37:53',1,NULL,NULL,1),(5,'1','Verical','2019-02-20 06:38:31',1,NULL,NULL,1),(6,'1','Horizontal','2019-02-20 06:38:31',1,NULL,NULL,1),(9,'2','Horizontal','2019-02-20 10:06:57',1,NULL,NULL,1);

/*Table structure for table `ecom_bagsize` */

DROP TABLE IF EXISTS `ecom_bagsize`;

CREATE TABLE `ecom_bagsize` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bag_layout` int(11) DEFAULT NULL,
  `bag_size` varchar(200) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `ecom_bagsize` */

insert  into `ecom_bagsize`(`id`,`bag_layout`,`bag_size`,`created_on`,`created_by`,`updated_on`,`updated_by`,`status`) values (1,1,'14*10','2019-02-20 09:42:51',1,NULL,NULL,1),(2,1,'12*14','2019-02-20 09:42:51',1,NULL,NULL,1),(3,1,'10*14','2019-02-20 09:42:51',1,NULL,NULL,1),(4,2,'14*10','2019-02-20 10:01:39',1,NULL,NULL,1),(5,2,'12*14','2019-02-20 10:01:39',1,NULL,NULL,1),(6,2,'10*14','2019-02-20 10:01:39',1,NULL,NULL,1),(7,2,'14*10','2019-02-20 10:17:13',1,NULL,NULL,1),(8,9,'14*10','2019-02-20 13:28:24',1,NULL,NULL,1);

/*Table structure for table `ecom_bagtype` */

DROP TABLE IF EXISTS `ecom_bagtype`;

CREATE TABLE `ecom_bagtype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bag_type` varchar(200) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `ecom_bagtype` */

insert  into `ecom_bagtype`(`id`,`bag_type`,`created_on`,`created_by`,`updated_on`,`updated_by`,`status`) values (1,'Dcut','2019-02-20 05:50:34',1,NULL,NULL,1),(2,'Handle bag','2019-02-20 05:50:34',1,NULL,NULL,1);

/*Table structure for table `ecom_banner` */

DROP TABLE IF EXISTS `ecom_banner`;

CREATE TABLE `ecom_banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `tag_line` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `ecom_banner` */

insert  into `ecom_banner`(`id`,`name`,`tag_line`,`image`,`created_on`,`created_by`,`updated_on`,`updated_by`,`status`) values (1,'Some dummy testing text','Discount <span>50%</span>','188eb4b4550079b9dec048f76c8f421d.jpg','2019-01-19 17:00:27',1,'2019-01-19 17:02:14',1,'1');

/*Table structure for table `ecom_billing` */

DROP TABLE IF EXISTS `ecom_billing`;

CREATE TABLE `ecom_billing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `address` text,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `zip_code` varchar(100) DEFAULT NULL,
  `mobile_number` bigint(12) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

/*Data for the table `ecom_billing` */

insert  into `ecom_billing`(`id`,`user_id`,`first_name`,`last_name`,`email`,`address`,`city`,`state`,`zip_code`,`mobile_number`,`created_on`,`created_by`,`updated_on`,`updated_by`) values (1,1,'Rana Prathap','Reddy','kyasaramrana@gmail.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-21 09:59:40',1,NULL,NULL),(2,1,'Rana Prathap','Reddy','rana@prachtech.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-21 10:00:22',1,NULL,NULL),(3,1,'Rana Prathap','Reddy','rana@prachtech.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-21 10:00:37',1,NULL,NULL),(4,1,'Rana Prathap','Reddy','rana@prachtech.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-21 10:04:12',1,NULL,NULL),(5,1,'Rana Prathap','Reddy','kyasaramrana@gmail.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-21 10:05:06',1,NULL,NULL),(6,1,'Rana Prathap','Reddy','kyasaramrana@gmail.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-21 10:05:20',1,NULL,NULL),(7,1,'Rana Prathap','Reddy','rana@prachtech.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-24 06:11:59',1,NULL,NULL),(8,1,'Rana Prathap','Reddy','rana@prachtech.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-24 06:14:38',1,NULL,NULL),(9,1,'Rana Prathap','Reddy','rana@prachtech.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-24 06:18:24',1,NULL,NULL),(10,1,'Rana Prathap','Reddy','rana@prachtech.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-24 06:18:34',1,NULL,NULL),(11,1,'RanaPrathap ','Reddy','kyasaramrana@gmail.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-24 06:20:48',1,NULL,NULL),(12,1,'RanaPrathap ','Reddy','kyasaramrana@gmail.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-24 06:21:43',1,NULL,NULL),(13,1,'RanaPrathap ','Reddy','kyasaramrana@gmail.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-24 06:21:50',1,NULL,NULL),(14,1,'RanaPrathap ','Reddy','kyasaramrana@gmail.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-24 06:22:25',1,NULL,NULL),(15,1,'RanaPrathap ','Reddy','kyasaramrana@gmail.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-24 06:37:54',1,NULL,NULL),(16,1,'RanaPrathap ','Reddy','kyasaramrana@gmail.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-24 06:38:25',1,NULL,NULL),(17,1,'RanaPrathap','Reddy','kyasaramrana@gmail.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-24 07:07:31',1,NULL,NULL),(18,1,'RanaPrathap','Reddy','kyasaramrana@gmail.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-24 07:07:54',1,NULL,NULL),(19,1,'RanaPrathap','Reddy','kyasaramrana@gmail.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-24 07:09:03',1,NULL,NULL),(20,1,'RanaPrathap','Reddy','kyasaramrana@gmail.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-24 07:09:14',1,NULL,NULL),(21,1,'RanaPrathap','Reddy','kyasaramrana@gmail.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-24 07:10:40',1,NULL,NULL),(22,1,'RanaPrathap','Reddy','kyasaramrana@gmail.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-24 07:11:26',1,NULL,NULL),(23,1,'RanaPrathap','Reddy','kyasaramrana@gmail.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-24 07:12:47',1,NULL,NULL),(24,1,'RanaPrathap','Reddy','kyasaramrana@gmail.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-24 07:13:51',1,NULL,NULL),(25,1,'RanaPrathap','Reddy','kyasaramrana@gmail.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-24 07:15:07',1,NULL,NULL),(26,1,'RanaPrathap','Reddy','kyasaramrana@gmail.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-24 07:16:20',1,NULL,NULL),(27,1,'RanaPrathap','Reddy','kyasaramrana@gmail.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-24 07:36:04',1,NULL,NULL),(28,1,'RanaPrathap','Reddy','kyasaramrana@gmail.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-24 07:41:09',1,NULL,NULL),(29,1,'RanaPrathap','Reddy','kyasaramrana@gmail.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-24 07:42:41',1,NULL,NULL),(30,1,'RanaPrathap','Reddy','kyasaramrana@gmail.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-24 07:42:52',1,NULL,NULL),(31,1,'RanaPrathap','Reddy','kyasaramrana@gmail.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-24 07:43:33',1,NULL,NULL),(32,1,'RanaPrathap','Reddy','kyasaramrana@gmail.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-24 07:44:06',1,NULL,NULL),(33,1,'RanaPrathap','Reddy','kyasaramrana@gmail.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-24 07:45:17',1,NULL,NULL),(34,1,'RanaPrathap','Reddy','kyasaramrana@gmail.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-24 07:45:52',1,NULL,NULL),(35,1,'RanaPrathap','Reddy','kyasaramrana@gmail.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-24 07:47:24',1,NULL,NULL),(36,1,'Rana','Reddy','kyasaramrana@gmail.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-24 09:30:08',1,NULL,NULL),(37,1,'RanaPrathap','Reddy','kyasaramrana@gmail.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-24 09:30:55',1,NULL,NULL),(38,1,'RanaPrathap','Reddy','kyasaramrana@gmail.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-24 09:40:21',1,NULL,NULL),(39,1,'RanaPrathap','Reddy','kyasaramrana@gmail.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-24 09:49:15',1,NULL,NULL),(40,1,'RanaPrathap','Reddy','kyasaramrana@gmail.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-24 09:49:48',1,NULL,NULL),(41,2,'RanaPrathap','Reddy','kyasaramrana@gmail.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-24 09:54:28',2,NULL,NULL),(42,3,'RanaPrathap','Reddy','kyasaramrana@gmail.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-24 09:57:51',3,NULL,NULL),(43,1,'RanaPrathap','Reddy','kyasaramrana@gmail.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-24 14:45:23',1,NULL,NULL),(44,1,'RanaPrathap','Reddy','kyasaramrana@gmail.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-28 08:39:26',1,NULL,NULL),(45,1,'RanaPrathap','Reddy','kyasaramrana@gmail.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-28 08:45:57',1,NULL,NULL),(46,2,'RanaPrathap','Reddy','kyasaramrana@gmail.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-28 08:50:12',2,NULL,NULL),(47,2,'RanaPrathap','Reddy','kyasaramrana@gmail.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-28 08:59:41',24,NULL,NULL),(48,2,'RanaPrathap','Reddy','kyasaramrana@gmail.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-28 08:59:46',24,NULL,NULL),(49,1,'RanaPrathap','Reddy','kyasaramrana@gmail.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-28 09:00:36',1,NULL,NULL),(50,1,'RanaPrathap','Reddy','kyasaramrana@gmail.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-29 06:04:59',1,NULL,NULL),(51,1,'RanaPrathap','Reddy','kyasaramrana@gmail.com','testing','Hyderabad','Telangana','500055',9676270951,'2019-01-29 10:33:13',1,NULL,NULL);

/*Table structure for table `ecom_cart` */

DROP TABLE IF EXISTS `ecom_cart`;

CREATE TABLE `ecom_cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_name` varchar(200) DEFAULT NULL,
  `product_image` varchar(200) DEFAULT NULL,
  `product_size` varchar(100) DEFAULT NULL,
  `product_color` varchar(100) DEFAULT NULL,
  `product_gsm` varchar(100) DEFAULT NULL,
  `product_quality` varchar(100) DEFAULT NULL,
  `product_quantity` int(11) DEFAULT NULL,
  `actual_price` decimal(13,2) DEFAULT NULL,
  `discount_percentage` int(11) DEFAULT NULL,
  `net_price` decimal(13,2) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `ecom_cart` */

insert  into `ecom_cart`(`id`,`user_id`,`product_id`,`product_name`,`product_image`,`product_size`,`product_color`,`product_gsm`,`product_quality`,`product_quantity`,`actual_price`,`discount_percentage`,`net_price`,`created_by`,`created_on`) values (17,2,1,'product1','893360082e15ea9c779af7fa12493b1e.jpg',NULL,NULL,NULL,NULL,1,'450.00',10,'405.00',2,'2019-01-28 08:51:43'),(18,2,2,'product2','ce00473891dfe826849e0b5f11bd8793.jpg',NULL,NULL,NULL,NULL,1,'4000.00',10,'3600.00',2,'2019-01-28 08:51:47'),(19,24,2,'product2','ce00473891dfe826849e0b5f11bd8793.jpg','12x12','Red','Test@123','Grade 1',1,'4000.00',10,'3600.00',24,'2019-01-28 08:59:59'),(20,1,1,'product1','893360082e15ea9c779af7fa12493b1e.jpg','12x12','Red','Test@123','Grade 1',1,'450.00',10,'405.00',1,'2019-02-01 07:09:03'),(21,1,4,'product4','30f5be83b309ae8804e696f6d43ac228.jpg','120x120','White','Test@123','Grade 1',1,'6000.00',0,'6000.00',1,'2019-02-01 09:55:46');

/*Table structure for table `ecom_category` */

DROP TABLE IF EXISTS `ecom_category`;

CREATE TABLE `ecom_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `ecom_category` */

insert  into `ecom_category`(`id`,`name`,`status`,`created_by`,`created_on`,`updated_by`,`updated_on`) values (1,'U cut bags','1',1,'2019-01-19 16:54:49',NULL,NULL),(2,'Test cut bag','1',1,'2019-01-19 16:55:11',NULL,NULL);

/*Table structure for table `ecom_color` */

DROP TABLE IF EXISTS `ecom_color`;

CREATE TABLE `ecom_color` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `ecom_color` */

insert  into `ecom_color`(`id`,`name`,`status`,`created_on`,`created_by`,`updated_on`,`updated_by`) values (1,'Red','1','2019-01-19 16:53:14',1,NULL,NULL),(2,'White','1','2019-01-19 16:53:22',1,NULL,NULL);

/*Table structure for table `ecom_gsm` */

DROP TABLE IF EXISTS `ecom_gsm`;

CREATE TABLE `ecom_gsm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `ecom_gsm` */

insert  into `ecom_gsm`(`id`,`name`,`status`,`created_on`,`created_by`,`updated_on`,`updated_by`) values (1,'Test@123','1','2019-01-19 16:53:40',1,'2019-01-21 09:50:12',1),(2,'Test895','1','2019-01-19 16:53:58',1,'2019-01-21 09:50:16',1);

/*Table structure for table `ecom_logo` */

DROP TABLE IF EXISTS `ecom_logo`;

CREATE TABLE `ecom_logo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(100) DEFAULT NULL,
  `favicon` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `keywords` text,
  `description` text,
  `created_on` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `ecom_logo` */

insert  into `ecom_logo`(`id`,`logo`,`favicon`,`title`,`keywords`,`description`,`created_on`,`created_by`,`updated_on`,`updated_by`,`status`) values (1,'2dbb6982c31ec99424ff6e93ab230e9f.png','0bd33f59f0aac119527032c5dcdb3923.png','srirajabags','Srirajabags','Some dummy testing text','2019-01-19 18:46:09',1,'2019-02-04 06:24:57',1,'1');

/*Table structure for table `ecom_order` */

DROP TABLE IF EXISTS `ecom_order`;

CREATE TABLE `ecom_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `billing_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `ecom_order` */

insert  into `ecom_order`(`id`,`user_id`,`billing_id`) values (1,1,51);

/*Table structure for table `ecom_order_items` */

DROP TABLE IF EXISTS `ecom_order_items`;

CREATE TABLE `ecom_order_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `order_number` varchar(200) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_name` varchar(200) DEFAULT NULL,
  `product_image` varchar(200) DEFAULT NULL,
  `product_size` varchar(100) DEFAULT NULL,
  `product_color` varchar(100) DEFAULT NULL,
  `product_gsm` varchar(100) DEFAULT NULL,
  `product_quality` varchar(100) DEFAULT NULL,
  `product_quantity` int(11) DEFAULT NULL,
  `actual_price` decimal(13,2) DEFAULT NULL,
  `discount_percentage` int(11) DEFAULT NULL,
  `net_price` decimal(13,2) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `ecom_order_items` */

insert  into `ecom_order_items`(`id`,`user_id`,`order_number`,`order_id`,`product_id`,`product_name`,`product_image`,`product_size`,`product_color`,`product_gsm`,`product_quality`,`product_quantity`,`actual_price`,`discount_percentage`,`net_price`,`created_on`,`created_by`,`status`) values (1,1,'SRB0201901291',1,2,'product2','ce00473891dfe826849e0b5f11bd8793.jpg','12x12','Red','Test@123','Grade 1',1,'4000.00',10,'3600.00','2019-01-29 10:33:13',1,'Confirm');

/*Table structure for table `ecom_printingcolortype` */

DROP TABLE IF EXISTS `ecom_printingcolortype`;

CREATE TABLE `ecom_printingcolortype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `printing_color_type` varchar(200) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `ecom_printingcolortype` */

insert  into `ecom_printingcolortype`(`id`,`printing_color_type`,`created_on`,`created_by`,`updated_on`,`updated_by`,`status`) values (1,'Printing color type 1','2019-02-21 07:21:26',1,NULL,NULL,1),(2,'Printing color type 2','2019-02-21 07:21:26',1,NULL,NULL,1),(3,'Printing color type 3','2019-02-21 10:00:00',1,NULL,NULL,1),(4,'Printing color type 4','2019-02-21 10:00:50',1,NULL,NULL,1);

/*Table structure for table `ecom_printinglanguage` */

DROP TABLE IF EXISTS `ecom_printinglanguage`;

CREATE TABLE `ecom_printinglanguage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `printing_language` varchar(200) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `ecom_printinglanguage` */

insert  into `ecom_printinglanguage`(`id`,`printing_language`,`created_on`,`created_by`,`updated_on`,`updated_by`,`status`) values (1,'Printing language 1','2019-02-21 08:48:42',1,NULL,NULL,1),(2,'Printing language 2','2019-02-21 08:48:42',1,NULL,NULL,1);

/*Table structure for table `ecom_printingmethod` */

DROP TABLE IF EXISTS `ecom_printingmethod`;

CREATE TABLE `ecom_printingmethod` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `printing_method` varchar(200) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `ecom_printingmethod` */

insert  into `ecom_printingmethod`(`id`,`printing_method`,`created_on`,`created_by`,`updated_on`,`updated_by`,`status`) values (1,'Printing method 1','2019-02-21 09:57:20',1,NULL,NULL,1),(2,'Printing method 2','2019-02-21 09:57:20',1,NULL,NULL,1),(3,'Printing method 3','2019-02-21 09:58:17',1,NULL,NULL,1);

/*Table structure for table `ecom_printingstyle` */

DROP TABLE IF EXISTS `ecom_printingstyle`;

CREATE TABLE `ecom_printingstyle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `printing_style` varchar(200) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `ecom_printingstyle` */

insert  into `ecom_printingstyle`(`id`,`printing_style`,`created_on`,`created_by`,`updated_on`,`updated_by`,`status`) values (1,'Printing style 1','2019-02-21 07:47:48',1,NULL,NULL,1),(2,'Printing style 2','2019-02-21 07:47:48',1,NULL,NULL,1),(3,'Printing style 3','2019-02-21 07:47:48',1,NULL,NULL,1),(4,'Printing style 3','2019-02-21 10:03:08',1,NULL,NULL,1);

/*Table structure for table `ecom_product` */

DROP TABLE IF EXISTS `ecom_product`;

CREATE TABLE `ecom_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `thumbnail1` varchar(100) DEFAULT NULL,
  `thumbnail2` varchar(100) DEFAULT NULL,
  `thumbnail3` varchar(100) DEFAULT NULL,
  `description` text,
  `actual_price` decimal(13,2) DEFAULT NULL,
  `discount_percentage` int(11) DEFAULT NULL,
  `net_price` decimal(13,2) DEFAULT NULL,
  `size` varchar(200) DEFAULT NULL,
  `color` varchar(200) DEFAULT NULL,
  `gsm` varchar(200) DEFAULT NULL,
  `quality` varchar(200) DEFAULT NULL,
  `featured` varchar(11) DEFAULT NULL,
  `deals` varchar(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `ecom_product` */

insert  into `ecom_product`(`id`,`category`,`name`,`image`,`thumbnail1`,`thumbnail2`,`thumbnail3`,`description`,`actual_price`,`discount_percentage`,`net_price`,`size`,`color`,`gsm`,`quality`,`featured`,`deals`,`created_by`,`created_on`,`updated_by`,`updated_on`,`status`) values (1,1,'product1','893360082e15ea9c779af7fa12493b1e.jpg','0da11895cbb4915472a690e4606ba384.jpg','7745f8df08c2a098b5e669c5ebc7d379.jpg','1cef130160874652d00a0e9c8ad14474.jpg','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','450.00',10,'405.00','1,2','1,2','1,2','1,2','1',NULL,1,'2019-01-19 16:59:02',1,'2019-01-22 07:04:06','1'),(2,1,'product2','ce00473891dfe826849e0b5f11bd8793.jpg','c11444d0ae2a5e5c50bb5981fc6bbe7e.jpg','a495f9e2ff8204edb3a1cc849b5c0b84.jpg','3a1f487ef92705f53d2f1167ff305596.jpg','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','4000.00',10,'3600.00','1','1','1','1','1',NULL,1,'2019-01-19 17:06:23',1,'2019-01-19 17:35:33','1'),(3,1,'product3','a57c98b9add5cc2900e5b28f9da74d6d.jpg','e5c3a3b0e17a712b732fc93f245e3216.jpg','523c77ae8e2ef7dbd92fd839fac7421c.jpg','6754f11967a33f0cc2f09bf972cb7512.jpg','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','5000.00',60,'2000.00','1','1','1','1','0',NULL,1,'2019-01-19 17:08:55',1,'2019-01-19 17:35:38','1'),(4,1,'product4','30f5be83b309ae8804e696f6d43ac228.jpg','23d2ced73efb34b44cef88f52ed266ef.jpg','dcac2be3c7f7bb56afde457d3e7d710a.jpg','d7e7f1072d2c776dd669ece10900442e.jpg','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','6000.00',0,'6000.00','2','2','1','1','1',NULL,1,'2019-01-19 17:09:57',1,'2019-01-19 17:35:29','1'),(5,1,'product5','b197d91cd9f31ca8c1d873f495a33e9f.png','42b0854422dee0694443e973f64ebdb7.png','6f2b851856f9ddcf782308a8412f00ad.jpg','b3e95caa748a7122fbb4eac37b845861.jpg','','5000.00',0,'5000.00','1,2','1,2','1,2','1,2','1','1',1,'2019-01-19 18:59:29',1,'2019-01-22 14:25:07','1'),(6,1,'product6','c3f48c7e30c1fa93a539d06b3156109a.jpg','a9213b06f7529bd057b238dc1af53d9a.png','f368e9c4464731ba746f2b6813783522.jpg','e199fc56358436c2ddd3aee3c10a7d21.jpg','','500.00',10,'450.00','1,2','1,2','1,2','1,2','1',NULL,1,'2019-01-22 08:28:15',1,'2019-01-22 08:32:16','1'),(7,1,'Product7','2d0c1e5938842748f8e0331c3bd47420.png','026ef5cd8cc6f791e1516778b50540d4.jpg','c565b8237dc7357f02a275fbd178072b.jpg','1da11d767d37b382e03104fa03c7d935.jpg','','5000.00',0,'5000.00','1,2','1,2','1,2','1,2','1','1',1,'2019-01-22 08:31:52',1,'2019-01-29 05:53:10','1'),(8,1,'product8','cae4fd79f2f1c2c8120bc0632e6822f2.jpg','','','','','50.25',2,'49.25','1,2','1,2','1,2','1,2','1','1',1,'2019-01-22 14:39:11',1,'2019-01-29 09:05:23','1'),(9,2,'product9','1a99b1fab9b06bb2e35877467c45a5db.png','688684d12b8bc354891fa29c69f46452.png','0795d01fa4682116a502071c177c215b.png','ec316b9cdb048c00c29a47ade32359e8.png','','500.00',0,'500.00','1','2','2','2','1','1',1,'2019-01-29 14:46:25',NULL,NULL,'1');

/*Table structure for table `ecom_quality` */

DROP TABLE IF EXISTS `ecom_quality`;

CREATE TABLE `ecom_quality` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `ecom_quality` */

insert  into `ecom_quality`(`id`,`name`,`status`,`created_on`,`created_by`,`updated_on`,`updated_by`) values (1,'Grade 1','1','2019-01-19 16:54:14',1,NULL,NULL),(2,'Grade 2','1','2019-01-19 16:54:27',1,NULL,NULL);

/*Table structure for table `ecom_request` */

DROP TABLE IF EXISTS `ecom_request`;

CREATE TABLE `ecom_request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `mobile` bigint(12) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `message` text,
  `created_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `ecom_request` */

insert  into `ecom_request`(`id`,`name`,`mobile`,`email`,`message`,`created_on`) values (1,'Rana Prathap Reddy',9676270951,'kyasaramrana@gmail.com','testing','2019-01-22 12:24:07'),(2,'Rana Prathap Reddy',9676270951,'kyasaramrana@gmail.com','Testing......','2019-01-22 13:18:13');

/*Table structure for table `ecom_size` */

DROP TABLE IF EXISTS `ecom_size`;

CREATE TABLE `ecom_size` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `ecom_size` */

insert  into `ecom_size`(`id`,`name`,`status`,`created_on`,`created_by`,`updated_on`,`updated_by`) values (1,'12x12','1','2019-01-19 16:52:41',1,'2019-01-21 09:50:03',1),(2,'120x120','1','2019-01-19 16:52:52',1,'2019-01-21 09:50:00',1),(3,'lll','1','2019-01-29 06:06:37',1,NULL,NULL);

/*Table structure for table `ecom_slider` */

DROP TABLE IF EXISTS `ecom_slider`;

CREATE TABLE `ecom_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `heading` varchar(100) DEFAULT NULL,
  `content` text,
  `image` varchar(100) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `ecom_slider` */

insert  into `ecom_slider`(`id`,`heading`,`content`,`image`,`created_on`,`created_by`,`updated_on`,`updated_by`,`status`) values (1,'Some dummy testing text','Some dummy testing content','2fc45b26bb81c806b540f96565ce3b8c.png','2019-01-19 17:03:15',1,NULL,NULL,'1'),(2,'Some dummy testing text2','Some dummy testing text','e242c85d3bdafe7a1ccef8dcd6a6f91e.png','2019-01-19 17:04:06',1,NULL,NULL,'1'),(3,'Some dummy testing text3','Some dummy testing text','81fca30b5d5b207e872ae5b12cd5fdac.png','2019-01-19 17:04:36',1,NULL,NULL,'1');

/*Table structure for table `ecom_suggestedprintingcolor` */

DROP TABLE IF EXISTS `ecom_suggestedprintingcolor`;

CREATE TABLE `ecom_suggestedprintingcolor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `suggested_printing_color` varchar(200) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `ecom_suggestedprintingcolor` */

insert  into `ecom_suggestedprintingcolor`(`id`,`suggested_printing_color`,`created_on`,`created_by`,`updated_on`,`updated_by`,`status`) values (1,'Suggested printing color 1','2019-02-21 08:10:20',1,NULL,NULL,1),(2,'suggested printing color 2','2019-02-21 08:10:20',1,NULL,NULL,1),(3,'Suggested printing color 3','2019-02-21 10:05:08',1,NULL,NULL,1);

/*Table structure for table `ecom_users` */

DROP TABLE IF EXISTS `ecom_users`;

CREATE TABLE `ecom_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` bigint(12) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `ecom_users` */

insert  into `ecom_users`(`id`,`firstname`,`lastname`,`gender`,`email`,`mobile`,`password`,`created_on`,`updated_on`,`updated_by`,`status`) values (1,'Rana Prathap','Reddy','Male','rana@prachatech.com',9676270951,'e10adc3949ba59abbe56e057f20f883e','2019-01-19 16:51:12',NULL,NULL,'1'),(2,'Rana Prathap','Reddy',NULL,'kyasaramrana@gmail.com',919676270951,'e10adc3949ba59abbe56e057f20f883e','2019-01-19 17:11:34',NULL,NULL,'1'),(3,'RanaPrathap','Reddy',NULL,'kyasaramrana@yahoo.in',9676270951,'e10adc3949ba59abbe56e057f20f883e','2019-01-24 09:55:10',NULL,NULL,'1');

/*Table structure for table `ecom_wishlist` */

DROP TABLE IF EXISTS `ecom_wishlist`;

CREATE TABLE `ecom_wishlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_name` varchar(200) DEFAULT NULL,
  `product_image` varchar(200) DEFAULT NULL,
  `product_color` varchar(100) DEFAULT NULL,
  `product_size` varchar(100) DEFAULT NULL,
  `product_gsm` varchar(100) DEFAULT NULL,
  `product_quality` varchar(100) DEFAULT NULL,
  `product_quantity` int(11) DEFAULT NULL,
  `actual_price` decimal(13,2) DEFAULT NULL,
  `net_price` decimal(13,2) DEFAULT NULL,
  `discount_percentage` int(11) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `ecom_wishlist` */

insert  into `ecom_wishlist`(`id`,`user_id`,`product_id`,`product_name`,`product_image`,`product_color`,`product_size`,`product_gsm`,`product_quality`,`product_quantity`,`actual_price`,`net_price`,`discount_percentage`,`created_on`,`created_by`) values (15,3,1,'product1','893360082e15ea9c779af7fa12493b1e.jpg',NULL,NULL,NULL,NULL,1,'450.00','405.00',10,'2019-01-24 09:58:13',3);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
