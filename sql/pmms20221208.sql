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
INSERT INTO `tbadmins` VALUES (1,'admintest','$2y$10$u.GCGej5L/I.Ci0mxqv.3OHwH29h9j.oA3nYAeIICxedXLtA4ScBe');
/*!40000 ALTER TABLE `tbadmins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbbarangay`
--

DROP TABLE IF EXISTS `tbbarangay`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbbarangay` (
  `clBrID` int NOT NULL AUTO_INCREMENT,
  `clBrName` varchar(45) NOT NULL,
  `clUrID` int NOT NULL,
  PRIMARY KEY (`clBrID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbbarangay`
--

LOCK TABLES `tbbarangay` WRITE;
/*!40000 ALTER TABLE `tbbarangay` DISABLE KEYS */;
INSERT INTO `tbbarangay` VALUES (1,'Test Barangay1',3);
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
  `clUrDateCreated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `clUrDateModified` datetime NOT NULL,
  `clUrStatus` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`clUrID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbusers`
--

LOCK TABLES `tbusers` WRITE;
/*!40000 ALTER TABLE `tbusers` DISABLE KEYS */;
INSERT INTO `tbusers` VALUES (1,'cmtest','$2y$10$GFBagt7SYi6DcSLnOMgPc.SogwyuPtqZcW5GqCPoOdu5/YeYZ6LSm','Cm Test','0991231234','cmtest@cm.com',1,'CM','2022-11-13 01:13:12','0000-00-00 00:00:00',1),(2,'mstest','$2y$10$apMocOMv0g88fCqgsSz4cuN4hjPtTRf/Kde.NO.za7FE/Xj9k4LO6','Ms Test','0991232123','mstest@ms.com',2,'MS','2022-11-13 03:52:45','0000-00-00 00:00:00',1),(3,'bctest','$2y$10$c54YaZAQUFdoygcCluFRuuEFY1sq73L/qUh/g/YkcJ3tGVHAxty7u','Bc Test','0991231531','bctest@bc.com',3,'BC','2022-11-13 03:54:10','0000-00-00 00:00:00',1),(4,'bctest2','$2y$10$5Y.o2E0DurupMY2c0Az8g.Dt6cenzgvxeYIMKsu7O0tHlZbIamyDO','bc test II','0991231231','bctestII@test.com',3,'BC','2022-11-17 11:27:25','0000-00-00 00:00:00',1),(5,'bctest3','$2y$10$8vGyGhWERlTg3yQ2y5OUJO0PNAgPJXEAIwl.1GztAPvjGaNpVNPsa','bc test III','0991231232','bctestIII@test.com',3,'BC','2022-11-17 11:28:00','0000-00-00 00:00:00',1),(6,'mstest2','$2y$10$ajqMc0HMYsB/1L2VzRebKuJtjxU2Qt6ibOZoy9I2iEOANaS8GCcgS','Ms Test II','0991231232','mstestII@ms.com',2,'MS','2022-11-17 23:37:09','0000-00-00 00:00:00',1),(7,'mstest3','$2y$10$OE3j8dpf0J4jnW6qs/uUzeCdwBMCey5x8UboXqCRhwbxQ7gfrRq6G','Ms Test III','0991231232','mstestIII@ms.com',2,'MS','2022-11-17 23:37:50','0000-00-00 00:00:00',1),(8,'cmtest2','$2y$10$ayCaNLNioaj6lYiVBSkGeOiCTz0t50GCjfTQTa0ump16LGzToEX7O','Cm Test II','09124125321','cmtestII@cm.com',1,'CM','2022-11-17 23:40:02','0000-00-00 00:00:00',1),(9,'mstest4','$2y$10$bx9xTtb01KB0gAoH9MeURO0bn3/BgIofW1QyOOilgbX4J0YCSgbY2','Ms Test IV','0991241251','mstestIV@test.com',2,'MS','2022-11-25 04:36:19','2022-11-25 04:36:19',1),(10,'mstest5','$2y$10$MTF/e18GC0RJlgTyYHKgSOd1wk6JtTjnViM10JxSjM0MCN5bDHZYG','Ms Test V','0995234124','mstestv@test.com',2,'MS','2022-11-25 05:09:45','2022-11-25 05:09:45',1),(11,'bctest4','$2y$10$4/x6a2qizasu2l.ibDfOt.u9rS1eS0hZXKXNFXyrwLo0agGGaIXh6','Bc Test Iv','09912312324','bctestIV@test.com',3,'BC','2022-11-25 05:13:32','2022-11-25 05:13:32',1),(12,'bctest5','$2y$10$PuYFFRQxru7IDQg0K8A0K.46q5l.eM6OGvyVJCMjJJxYg5AuF0Kje','bc test V','0991231232','bctestV@test.com',3,'BC','2022-12-07 13:07:28','2022-12-07 13:07:28',1),(13,'bctest6','$2y$10$Y6WXRVt55Xs1fKXHWeJcmOW0EugYvRCUgzAF1cr3t0x5hEK8R8kr2','bc test V','0991231232','bctestV@test.com',3,'BC','2022-12-07 13:07:49','2022-12-07 13:07:49',1),(14,'testtest','$2y$10$yBd1PV6SAV5VM/1WF33FBePlMyAlHWH5K8IZXpmQ21qylMupFR4J2','testtest','0991231241','testtest@test.com',3,'BC','2022-12-07 13:10:50','2022-12-07 13:10:50',1);
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

-- Dump completed on 2022-12-08 12:02:28
