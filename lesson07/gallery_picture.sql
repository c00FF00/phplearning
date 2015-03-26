CREATE DATABASE  IF NOT EXISTS `gallery` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `gallery`;
-- MySQL dump 10.13  Distrib 5.5.41, for debian-linux-gnu (x86_64)
--
-- Host: 10.0.3.120    Database: gallery
-- ------------------------------------------------------
-- Server version	5.5.41-0ubuntu0.14.04.1

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
-- Table structure for table `picture`
--

DROP TABLE IF EXISTS `picture`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `picture` (
  `pname` text NOT NULL,
  `dateforplace` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nameofpicture` varchar(255) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `sizepix` varchar(20) DEFAULT NULL,
  `pathofimage` varchar(255) DEFAULT NULL,
  `comment` text,
  UNIQUE KEY `nameofpicture` (`nameofpicture`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `picture`
--

LOCK TABLES `picture` WRITE;
/*!40000 ALTER TABLE `picture` DISABLE KEYS */;
INSERT INTO `picture` VALUES ('Ð¤Ð°Ð¹Ð»','2015-03-26 15:54:38','Water_web_by_Tom_Kijas.jpg',1729036,NULL,'/img/','ÐžÐ¿Ð¸ÑÐ°Ð½Ð¸Ðµ ÐºÐ°Ñ€Ñ‚Ð¸Ð½ÐºÐ¸. Ð“Ð´Ðµ ÑÐ´ÐµÐ»Ð°Ð½Ð°. ÐšÐµÐ¼ ÑÐ´ÐµÐ»Ð°Ð½Ð°. '),('','2015-03-26 20:07:27','Foggy_Forest_by_Jake_Stewart.jpg',188319,NULL,'/img/',''),('TTTTT','2015-03-26 20:18:20','Ibanez_Infinity_by_Jaco_Kok.jpg',164188,NULL,'/img/','ÐœÐµÐ³Ð° Ð¾Ð¿Ð¸ÑÐ°Ð½Ð¸Ðµ');
/*!40000 ALTER TABLE `picture` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-03-26 23:26:10
