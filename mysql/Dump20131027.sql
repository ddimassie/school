CREATE DATABASE  IF NOT EXISTS `civ03i_ass2` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `civ03i_ass2`;
-- MySQL dump 10.13  Distrib 5.6.11, for Win32 (x86)
--
-- Host: localhost    Database: civ03i_ass2
-- ------------------------------------------------------
-- Server version	5.1.66-community

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `PRODUCT_ID` int(11) NOT NULL,
  `PROD_NAME_` varchar(25) NOT NULL,
  `TYPE` varchar(12) NOT NULL,
  `PRICE` decimal(12,2) NOT NULL,
  `SUPPLIER_ID` int(11) NOT NULL,
  PRIMARY KEY (`PRODUCT_ID`),
  KEY `SUPPLIER_ID_idx` (`SUPPLIER_ID`),
  CONSTRAINT `supplier_id` FOREIGN KEY (`SUPPLIER_ID`) REFERENCES `products` (`SUPPLIER_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1001,'Macbook pro','Technology',1200.00,2001),(1002,'Ipad','Technology',750.00,2001),(1003,'Sneakers','Shoes',120.25,2002),(1004,'Hoodie','Garment',49.50,2002),(1005,'Polo shirt','Garment',40.25,2002),(1006,'Jeans','Garment',60.00,2003),(1007,'Samsung Galaxy SII','Technology',875.50,2004),(1008,'Samsung Galaxy SIII','Technology',1050.00,2004);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `suppliers`
--

DROP TABLE IF EXISTS `suppliers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `suppliers` (
  `SUPPLIER_ID` int(11) NOT NULL,
  `SUPPLIER` varchar(12) NOT NULL,
  `ADDRESS` varchar(45) NOT NULL,
  `CONTACT_PERSON` varchar(25) NOT NULL,
  `EMAIL` text,
  PRIMARY KEY (`SUPPLIER_ID`),
  CONSTRAINT `suppliers_ibfk_1` FOREIGN KEY (`SUPPLIER_ID`) REFERENCES `products` (`SUPPLIER_ID`),
  CONSTRAINT `suppliers_ibfk_2` FOREIGN KEY (`SUPPLIER_ID`) REFERENCES `products` (`SUPPLIER_ID`),
  CONSTRAINT `suppliers_ibfk_3` FOREIGN KEY (`SUPPLIER_ID`) REFERENCES `products` (`SUPPLIER_ID`),
  CONSTRAINT `suppliers_ibfk_4` FOREIGN KEY (`SUPPLIER_ID`) REFERENCES `products` (`SUPPLIER_ID`),
  CONSTRAINT `suppliers_ibfk_5` FOREIGN KEY (`SUPPLIER_ID`) REFERENCES `products` (`SUPPLIER_ID`),
  CONSTRAINT `suppliers_ibfk_6` FOREIGN KEY (`SUPPLIER_ID`) REFERENCES `products` (`SUPPLIER_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `suppliers`
--

LOCK TABLES `suppliers` WRITE;
/*!40000 ALTER TABLE `suppliers` DISABLE KEYS */;
INSERT INTO `suppliers` VALUES (2001,'Apple','31 George St., NSW','Steve','steve.jobs@gmail.com'),(2002,'Nike','18 King St., NSW','Michael','michael.j@yahoo.com.au'),(2003,'Ralf Lauren','72 Elizabeth Ave, Victoria','Ralf','ralf_lauren@yahoo.com'),(2004,'Samsung','22 Henry Parry Drive, Melbourne','Sarrah','sarrah16@yahoo.com');
/*!40000 ALTER TABLE `suppliers` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-10-27 15:11:31
