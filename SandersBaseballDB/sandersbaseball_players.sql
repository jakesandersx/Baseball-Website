-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: sandersbaseball
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `players`
--

DROP TABLE IF EXISTS `players`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `players` (
  `player_id` int NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `height` int NOT NULL,
  `weight` int NOT NULL,
  `hometown` varchar(45) DEFAULT NULL,
  `position` varchar(45) DEFAULT NULL,
  `team_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`player_id`),
  KEY `player_team_id_idx` (`team_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `players`
--

LOCK TABLES `players` WRITE;
/*!40000 ALTER TABLE `players` DISABLE KEYS */;
INSERT INTO `players` VALUES (1,'John','Smith',72,190,'Chicago, IL','Pitcher','Guardians'),(2,'Michael','Johnson',68,175,'Los Angeles, CA','IF','Guardians'),(3,'Emily','Williams',65,150,'New York, NY','Catcher','Guardians'),(4,'Daniel','Brown',70,180,'Houston, TX','Pitcher','Guardians'),(5,'Megan','Garcia',69,165,'Miami, FL','Pitcher','Guardians'),(6,'David','Davis',71,195,'San Francisco, CA','Pitcher','Guardians'),(7,'Sarah','Rodriguez',67,160,'Boston, MA','Catcher','Guardians'),(8,'James','Miller',73,200,'Seattle, WA','IF','Guardians'),(9,'Emma','Wilson',66,155,'Phoenix, AZ','OF','Guardians'),(10,'Andrew','Taylor',72,190,'Philadelphia, PA','IF','Guardians'),(11,'Justin','Turner',71,219,'Long Beach, CA','Pitcher','Bulldogs'),(12,'Max','Muncy',72,215,'Dallas, TX','IF','Bulldogs'),(13,'Cody','Bellinger',76,210,'Scottsdale, AZ','IF','Bulldogs'),(14,'Chris','Taylor',73,192,'Virginia Beach, VA','Pitcher','Bulldogs'),(15,'Zach','McKinstry',71,185,'Fort Mill, SC','IF','Bulldogs'),(16,'Austin','Barnes',70,195,'Riverside, CA','Pitcher','Bulldogs'),(17,'Will','Smith',74,220,'Louisville, KY','Catcher','Bulldogs'),(18,'Matt','Beaty',74,210,'Snellville, GA','IF','Bulldogs'),(19,'Luke','Raley',75,220,'Benton, AR','Pitcher','Bulldogs'),(20,'Billy','McKinney',74,215,'Plano, TX','Pitcher','Bulldogs'),(21,'Nathan','Garcia',72,215,'Phoenix, AZ','IF','Tsunamis'),(22,'Isaac','Baker',75,225,'Houston, TX','IF','Tsunamis'),(23,'Madison','Howard',69,190,'Tampa, FL','Pitcher','Tsunamis'),(24,'Lucas','Gonzalez',70,200,'Santa Ana, CA','Pitcher','Tsunamis'),(25,'Makayla','Perez',68,185,'Brooklyn, NY','Catcher','Tsunamis'),(26,'Nicholas','Taylor',74,210,'St. Louis, MO','Pitcher','Tsunamis'),(27,'Avery','Nelson',71,205,'Birmingham, AL','Pitcher','Tsunamis'),(28,'Emily','Carter',67,175,'Pittsburgh, PA','OF','Tsunamis'),(29,'Giovanni','Lee',73,195,'Honolulu, HI','IF','Tsunamis'),(30,'Rachel','Lewis',66,170,'Portland, OR','Catcher','Tsunamis'),(31,'Jason','Garcia',70,180,'Los Angeles, CA','IF','Mudcats'),(32,'Leah','Park',68,175,'Seoul, South Korea','Pitcher','Mudcats'),(33,'Luis','Torres',72,190,'San Juan, Puerto Rico','IF','Mudcats'),(34,'Mia','Rodriguez',65,150,'Miami, FL','Pitcher','Mudcats'),(35,'Nate','Trujillo',74,215,'Albuquerque, NM','IF','Mudcats'),(36,'Oliver','Lopez',71,180,'San Diego, CA','Pitcher','Mudcats'),(37,'Paige','Hernandez',69,165,'San Antonio, TX','IF','Mudcats'),(38,'Quinn','Gutierrez',67,155,'Phoenix, AZ','Catcher','Mudcats'),(39,'Ramon','Reyes',70,181,'San Juan, Puerto Rico','IF','Mudcats'),(40,'Sofia','Santos',66,140,'Las Vegas, NV','Pitcher','Mudcats'),(41,'Jake','Sanders',72,185,'Fort Loramie, OH','Outfielder',NULL);
/*!40000 ALTER TABLE `players` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-10 14:07:52
