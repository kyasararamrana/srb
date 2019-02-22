CREATE TABLE `ecom_bagcolor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bag_color` varchar(200) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1
