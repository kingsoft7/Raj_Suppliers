/*
SQLyog Community Edition- MySQL GUI v8.02 
MySQL - 5.5.5-10.1.13-MariaDB : Database - test
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `customer` */

CREATE TABLE `customer` (
  `cusId` int(11) NOT NULL AUTO_INCREMENT,
  `cusAddress` varchar(40) DEFAULT NULL,
  `cusMName` varchar(15) DEFAULT NULL,
  `cusMPhoneNo` varchar(10) DEFAULT NULL,
  `cusName` varchar(30) DEFAULT NULL,
  `cusPanNo` varchar(15) DEFAULT NULL,
  `cusPhoneNo` varchar(12) DEFAULT NULL,
  `cusBalance` float DEFAULT NULL,
  PRIMARY KEY (`cusId`),
  UNIQUE KEY `cusName` (`cusName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `item` */

CREATE TABLE `item` (
  `item_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `item_name` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `purchase` */

CREATE TABLE `purchase` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `totalItem` int(11) DEFAULT NULL,
  `totalAmount` float DEFAULT NULL,
  `orderDate` date DEFAULT NULL,
  `supId` int(11) DEFAULT NULL,
  `billNo` int(11) DEFAULT NULL,
  `totalQuntity` int(11) DEFAULT NULL,
  `pName` varchar(20) DEFAULT NULL,
  `pTax` float DEFAULT NULL,
  `sName` varchar(20) DEFAULT NULL,
  `sTax` float DEFAULT NULL,
  `billAmt` float DEFAULT NULL,
  `pTaxAmt` float DEFAULT NULL,
  `sTaxAmt` float DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `purchasedetails` */

CREATE TABLE `purchasedetails` (
  `subItem_id` int(11) DEFAULT NULL,
  `item_price` float DEFAULT NULL,
  `item_quntity` float DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `quotations` */

CREATE TABLE `quotations` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `totalItem` int(11) DEFAULT NULL,
  `totalAmount` float DEFAULT NULL,
  `orderDate` date DEFAULT NULL,
  `cusId` int(11) DEFAULT NULL,
  `totalQuntity` int(11) DEFAULT NULL,
  `pName` varchar(20) DEFAULT NULL,
  `pTax` float DEFAULT NULL,
  `sName` varchar(20) DEFAULT NULL,
  `sTax` float DEFAULT NULL,
  `sTaxAmt` float DEFAULT NULL,
  `pTaxAmt` float DEFAULT NULL,
  `billAmt` float DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `quotationsdetails` */

CREATE TABLE `quotationsdetails` (
  `subItem_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `item_quntity` int(11) DEFAULT NULL,
  `item_price` float DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`subItem_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `sales` */

CREATE TABLE `sales` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `totalItem` int(11) DEFAULT NULL,
  `totalAmount` float DEFAULT NULL,
  `orderDate` date DEFAULT NULL,
  `cusId` int(11) DEFAULT NULL,
  `totalQuntity` int(11) DEFAULT NULL,
  `pName` varchar(20) DEFAULT NULL,
  `pTax` float DEFAULT NULL,
  `sName` varchar(20) DEFAULT NULL,
  `sTax` float DEFAULT NULL,
  `sTaxAmt` float DEFAULT NULL,
  `pTaxAmt` float DEFAULT NULL,
  `billAmt` float DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `salesdetails` */

CREATE TABLE `salesdetails` (
  `subItem_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `item_quntity` int(11) DEFAULT NULL,
  `item_price` float DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`subItem_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `student` */

CREATE TABLE `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `emai_id` varchar(50) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `subitem` */

CREATE TABLE `subitem` (
  `subItem_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `subItem_type` varchar(15) DEFAULT NULL,
  `subItem_value` varchar(35) DEFAULT NULL,
  `subItem_mrp` float DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  PRIMARY KEY (`subItem_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `suppliers` */

CREATE TABLE `suppliers` (
  `supId` int(11) NOT NULL AUTO_INCREMENT,
  `supAddress` varchar(40) DEFAULT NULL,
  `supMName` varchar(15) DEFAULT NULL,
  `supMPhoneNo` varchar(10) DEFAULT NULL,
  `supName` varchar(30) DEFAULT NULL,
  `supPanNo` varchar(15) DEFAULT NULL,
  `supPhoneNo` varchar(12) DEFAULT NULL,
  `supBalance` float DEFAULT NULL,
  PRIMARY KEY (`supId`),
  UNIQUE KEY `supName` (`supName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `tax` */

CREATE TABLE `tax` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pName` varchar(25) DEFAULT NULL,
  `pTax` float DEFAULT NULL,
  `sName` varchar(25) DEFAULT NULL,
  `sTax` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `temporder` */

CREATE TABLE `temporder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subItem_id` int(11) DEFAULT NULL,
  `item_price` float DEFAULT NULL,
  `item_quntity` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `tempquotations` */

CREATE TABLE `tempquotations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subItem_id` int(11) DEFAULT NULL,
  `item_quntity` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `tempsales` */

CREATE TABLE `tempsales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subItem_id` int(11) DEFAULT NULL,
  `item_quntity` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `user` */

CREATE TABLE `user` (
  `userId` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userName` varchar(20) NOT NULL,
  `userPassword` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`userId`,`userName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;