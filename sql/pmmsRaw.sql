-- MySQL dump 10.13  Distrib 8.0.23, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: pmms
-- ------------------------------------------------------
-- Server version	8.0.23

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tbadmins`
--

DROP TABLE IF EXISTS `tbadmins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbadmins` (
  `clAdID` int NOT NULL,
  `clAdUsername` varchar(20) NOT NULL,
  `clAdPassword` varchar(255) NOT NULL,
  PRIMARY KEY (`clAdID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbadmins`
--

LOCK TABLES `tbadmins` WRITE;
/*!40000 ALTER TABLE `tbadmins` DISABLE KEYS */;
INSERT INTO `tbadmins` VALUES (1,'admintest','admin');
/*!40000 ALTER TABLE `tbadmins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbbarangay`
--

DROP TABLE IF EXISTS `tbbarangay`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbbarangay` (
  `clBrID` int NOT NULL,
  `clBrName` varchar(45) NOT NULL,
  `clUrID` int NOT NULL,
  PRIMARY KEY (`clBrID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbbarangay`
--

LOCK TABLES `tbbarangay` WRITE;
/*!40000 ALTER TABLE `tbbarangay` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbbarangay` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbchildmalnutrition`
--

DROP TABLE IF EXISTS `tbchildmalnutrition`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbchildmalnutrition` (
  `clCmID` int NOT NULL AUTO_INCREMENT,
  `clCmMalType` enum('Wasted','Stunned','Overweight','Underweight') DEFAULT NULL,
  `clCmPercent` float DEFAULT NULL,
  `clCmYear` year DEFAULT NULL,
  `clBrID` int DEFAULT NULL,
  PRIMARY KEY (`clCmID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbchildmalnutrition`
--

LOCK TABLES `tbchildmalnutrition` WRITE;
/*!40000 ALTER TABLE `tbchildmalnutrition` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbchildmalnutrition` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbfoodthreshold`
--

DROP TABLE IF EXISTS `tbfoodthreshold`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbfoodthreshold` (
  `clFtID` int NOT NULL AUTO_INCREMENT,
  `clFtPercent` float DEFAULT NULL,
  `clFtYear` year DEFAULT NULL,
  `clBrID` int DEFAULT NULL,
  PRIMARY KEY (`clFtID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbfoodthreshold`
--

LOCK TABLES `tbfoodthreshold` WRITE;
/*!40000 ALTER TABLE `tbfoodthreshold` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbfoodthreshold` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbincomethreshold`
--

DROP TABLE IF EXISTS `tbincomethreshold`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbincomethreshold` (
  `tbItID` int NOT NULL AUTO_INCREMENT,
  `tbItPercent` float DEFAULT NULL,
  `clITYear` year DEFAULT NULL,
  `clBrID` int DEFAULT NULL,
  PRIMARY KEY (`tbItID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbincomethreshold`
--

LOCK TABLES `tbincomethreshold` WRITE;
/*!40000 ALTER TABLE `tbincomethreshold` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbincomethreshold` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbtotaldeprivation`
--

DROP TABLE IF EXISTS `tbtotaldeprivation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbtotaldeprivation` (
  `clTdID` int NOT NULL AUTO_INCREMENT,
  `clTdPercent` float DEFAULT NULL,
  `clTdYear` year DEFAULT NULL,
  `clBrID` int NOT NULL,
  `clCmID` int DEFAULT NULL,
  `clFlID` int DEFAULT NULL,
  `clItID` int DEFAULT NULL,
  `clUnID` int DEFAULT NULL,
  PRIMARY KEY (`clTdID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbtotaldeprivation`
--

LOCK TABLES `tbtotaldeprivation` WRITE;
/*!40000 ALTER TABLE `tbtotaldeprivation` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbtotaldeprivation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbunemployment`
--

DROP TABLE IF EXISTS `tbunemployment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbunemployment` (
  `clUnID` int NOT NULL AUTO_INCREMENT,
  `clUnPercent` float DEFAULT NULL,
  `clUnYear` year DEFAULT NULL,
  `clBrID` int DEFAULT NULL,
  PRIMARY KEY (`clUnID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbunemployment`
--

LOCK TABLES `tbunemployment` WRITE;
/*!40000 ALTER TABLE `tbunemployment` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbunemployment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbusers`
--

DROP TABLE IF EXISTS `tbusers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbusers` (
  `clUrID` int NOT NULL AUTO_INCREMENT,
  `clUrUsername` varchar(20) NOT NULL,
  `clUrPassword` varchar(255) NOT NULL,
  `clUrName` varchar(50) NOT NULL,
  `clUrContactNum` varchar(13) NOT NULL,
  `clUrEmail` varchar(30) NOT NULL,
  `clUrLevel` tinyint NOT NULL,
  `clUrRole` enum('CM','MS','BC') NOT NULL DEFAULT 'BC',
  `clUrDateCreated` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`clUrID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbusers`
--

LOCK TABLES `tbusers` WRITE;
/*!40000 ALTER TABLE `tbusers` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbusers` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-07 15:49:10
