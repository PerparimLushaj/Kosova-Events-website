-- MySQL dump 10.13  Distrib 5.6.24, for Win64 (x86_64)
--
-- Host: localhost    Database: phpdatabase
-- ------------------------------------------------------
-- Server version	5.6.27-log

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
-- Table structure for table `administrimi`
--

DROP TABLE IF EXISTS `administrimi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administrimi` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `AdminUsername` varchar(30) NOT NULL,
  `AdminPass` varchar(30) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `AdminUsername` (`AdminUsername`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administrimi`
--

LOCK TABLES `administrimi` WRITE;
/*!40000 ALTER TABLE `administrimi` DISABLE KEYS */;
INSERT INTO `administrimi` VALUES (1,'Admin','admin');
/*!40000 ALTER TABLE `administrimi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `anetaret`
--

DROP TABLE IF EXISTS `anetaret`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `anetaret` (
  `IdMember` int(11) NOT NULL AUTO_INCREMENT,
  `Emri` varchar(40) NOT NULL,
  `Mbiemri` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `perdoruesi` varchar(40) NOT NULL,
  `fjalekalimi` varchar(40) NOT NULL,
  `konfirmofjalekalimin` varchar(40) NOT NULL,
  PRIMARY KEY (`IdMember`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anetaret`
--

LOCK TABLES `anetaret` WRITE;
/*!40000 ALTER TABLE `anetaret` DISABLE KEYS */;
INSERT INTO `anetaret` VALUES (4,'test','test','test','test','test','test');
/*!40000 ALTER TABLE `anetaret` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ngjarjet`
--

DROP TABLE IF EXISTS `ngjarjet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ngjarjet` (
  `emringjarjes` varchar(50) DEFAULT '',
  `pershkrimingjarjes` varchar(5000) DEFAULT NULL,
  `dataNgjarjes` date DEFAULT NULL,
  `IdNgjarje` int(11) NOT NULL AUTO_INCREMENT,
  `ngjarjetcol` varchar(45) DEFAULT NULL,
  `dataRegjistrimit` datetime NOT NULL,
  `Qyteti` varchar(30) NOT NULL,
  `Vendi` varchar(30) NOT NULL,
  PRIMARY KEY (`IdNgjarje`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ngjarjet`
--

LOCK TABLES `ngjarjet` WRITE;
/*!40000 ALTER TABLE `ngjarjet` DISABLE KEYS */;
INSERT INTO `ngjarjet` VALUES ('Captain America','Lufta Civile lloji i filmit Aksion','2016-05-04',40,NULL,'2016-05-11 19:56:11','Prishtine','KINO ABC'),('The Jungle Book','Lloji filmit Animation','2016-05-18',41,NULL,'2016-05-11 19:56:57','Prishtine','KINO ABC'),('X Men','Lloji filmit Fantasy','2016-05-13',42,NULL,'2016-05-11 19:57:40','Prishtine','Sheshi Nena Tereze'),('Neighbors 2','Lloji filmit Aksion','2016-05-13',43,NULL,'2016-05-11 19:58:13','Prizren','Sheshi Skenderbeu'),('Angry Birds','Lloji filmit Animation','2016-05-12',44,NULL,'2016-05-11 19:58:32','Prishtine','KINO ABC'),('Shok','Lloji filmit Aksion','2016-05-13',45,NULL,'2016-05-11 19:58:49','Gjakove','Sheshi Zahir Pajaziti'),('Edie The Eagle','Lloji filmit Komedi','2016-05-20',46,NULL,'2016-05-11 19:59:39','Gjakove','Sheshi Nena Tereze'),('Allegiant','Lloji filmit Fantasy','2016-05-18',47,NULL,'2016-05-11 19:59:59','Prishtine','KINO ABC'),('Divergent','Lloji filmit Aksion','2016-05-12',48,NULL,'2016-05-11 20:00:27','Prizren','Sheshi Shadervan');
/*!40000 ALTER TABLE `ngjarjet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `porosit`
--

DROP TABLE IF EXISTS `porosit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `porosit` (
  `IdPorosis` int(11) NOT NULL AUTO_INCREMENT,
  `Emri` varchar(20) NOT NULL,
  `Mbiemri` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `NrIdentifikues` int(11) NOT NULL,
  `Qyteti` varchar(20) NOT NULL,
  `Gjinia` varchar(20) NOT NULL,
  `NrBiletave` int(11) NOT NULL,
  PRIMARY KEY (`IdPorosis`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `porosit`
--

LOCK TABLES `porosit` WRITE;
/*!40000 ALTER TABLE `porosit` DISABLE KEYS */;
INSERT INTO `porosit` VALUES (1,'q','q','q',1,'q','q',1),(2,'q','q','q',1,'q','q',1);
/*!40000 ALTER TABLE `porosit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'phpdatabase'
--

--
-- Dumping routines for database 'phpdatabase'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-11 20:13:41
