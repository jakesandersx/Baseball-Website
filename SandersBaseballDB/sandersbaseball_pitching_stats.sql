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
-- Table structure for table `pitching_stats`
--

DROP TABLE IF EXISTS `pitching_stats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pitching_stats` (
  `player_id` int NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `IP` decimal(4,1) DEFAULT NULL,
  `ERA` decimal(3,2) DEFAULT NULL,
  `wins` int DEFAULT NULL,
  `losses` int DEFAULT NULL,
  `appearances` int DEFAULT NULL,
  `hits` int DEFAULT NULL,
  `runs` int DEFAULT NULL,
  `walks` int DEFAULT NULL,
  `strikeouts` int DEFAULT NULL,
  `team_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`player_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pitching_stats`
--

LOCK TABLES `pitching_stats` WRITE;
/*!40000 ALTER TABLE `pitching_stats` DISABLE KEYS */;
INSERT INTO `pitching_stats` VALUES (1,'John Smith',43.1,3.21,5,2,10,35,16,12,44,'Guardians'),(4,'Daniel Brown',45.1,2.22,1,2,7,40,12,10,40,'Guardians'),(5,'Megan Garcia',51.0,3.53,3,2,9,45,23,18,55,'Guardians'),(6,'David Davis',58.2,4.23,4,4,12,60,30,25,65,'Guardians'),(11,'Justin Turner',48.1,2.87,2,1,8,35,18,12,50,'Bulldogs'),(14,'Chris Taylor',63.0,4.05,4,3,11,55,25,20,70,'Bulldogs'),(19,'Luke Raley',55.2,3.21,3,2,10,50,20,15,60,'Bulldogs'),(20,'Billy McKinney',30.0,3.00,2,1,6,24,10,7,32,'Bulldogs'),(23,'Madison Howard',23.1,5.79,1,3,5,25,17,6,25,'Tsunamis'),(24,'Lucas Gonzalez',32.0,3.94,2,2,6,29,14,8,33,'Tsunamis'),(26,'Nicholas Taylor',41.2,3.89,2,3,9,34,20,11,46,'Tsunamis'),(27,'Avery Nelson',26.1,2.73,3,0,7,21,8,5,30,'Tsunamis'),(32,'Leah Park',27.2,3.58,1,2,5,23,12,8,26,'Mudcats'),(34,'Mia Rodriguez',38.0,4.79,4,4,9,42,20,13,40,'Mudcats'),(36,'Oliver Lopez',29.0,2.48,2,1,6,23,8,7,32,'Mudcats'),(40,'Sofia Santos',34.2,4.12,3,3,8,28,15,9,37,'Mudcats');
/*!40000 ALTER TABLE `pitching_stats` ENABLE KEYS */;
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
