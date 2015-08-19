CREATE DATABASE  IF NOT EXISTS `hehe1001_salty` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `hehe1001_salty`;
-- MySQL dump 10.13  Distrib 5.6.25, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: hehe1001_salty
-- ------------------------------------------------------
-- Server version	5.6.25-0ubuntu0.15.04.1

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
-- Table structure for table `salty_uri`
--

DROP TABLE IF EXISTS `salty_uri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `salty_uri` (
  `uri-key` varchar(44) NOT NULL DEFAULT '',
  `encounted` int(12) DEFAULT '0',
  `protocol` enum('https://','http://','httpx://') DEFAULT 'http://',
  `domain` varchar(255) DEFAULT '',
  `base` varchar(128) DEFAULT '',
  `strata` varchar(30) DEFAULT '',
  `fallout` varchar(3) DEFAULT '',
  `path` varchar(255) DEFAULT '/',
  `retrieves` int(8) DEFAULT '0',
  `salts` int(8) DEFAULT '0',
  PRIMARY KEY (`uri-key`),
  KEY `SEARCH` (`encounted`,`protocol`,`domain`(19),`base`(10),`strata`(5),`fallout`,`path`(11))
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salty_uri`
--

LOCK TABLES `salty_uri` WRITE;
/*!40000 ALTER TABLE `salty_uri` DISABLE KEYS */;
/*!40000 ALTER TABLE `salty_uri` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-08-19 22:37:16
