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
-- Table structure for table `hitting_stats`
--

DROP TABLE IF EXISTS `hitting_stats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hitting_stats` (
  `player_id` int NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `bat_avg` decimal(3,3) DEFAULT NULL,
  `at_bats` int DEFAULT NULL,
  `runs` int DEFAULT NULL,
  `hits` int DEFAULT NULL,
  `doubles` int DEFAULT NULL,
  `triples` int DEFAULT NULL,
  `home_runs` int DEFAULT NULL,
  `rbis` int DEFAULT NULL,
  `stolen_bases` int DEFAULT NULL,
  `walks` int DEFAULT NULL,
  `strikeouts` int DEFAULT NULL,
  `team_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`player_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hitting_stats`
--

LOCK TABLES `hitting_stats` WRITE;
/*!40000 ALTER TABLE `hitting_stats` DISABLE KEYS */;
INSERT INTO `hitting_stats` VALUES (1,'John Smith',0.324,136,22,44,10,2,4,24,8,14,24,'Guardians'),(2,'Michael Johnson',0.291,157,21,46,8,0,3,18,9,17,31,'Guardians'),(3,'Emily Williams',0.253,116,15,29,7,1,2,10,5,14,22,'Guardians'),(4,'Daniel Brown',0.335,165,28,55,14,1,5,32,6,18,20,'Guardians'),(5,'Megan Garcia',0.211,98,9,22,4,0,1,8,2,8,19,'Guardians'),(6,'David Davis',0.277,124,18,34,5,0,3,17,5,10,20,'Guardians'),(7,'Sarah Rodriguez',0.294,154,23,45,8,0,4,21,7,14,23,'Guardians'),(8,'James Miller',0.225,115,8,26,4,1,1,9,2,6,21,'Guardians'),(9,'Emma Wilson',0.327,142,21,46,10,0,3,19,6,13,25,'Guardians'),(10,'Andrew Taylor',0.267,136,17,36,7,1,1,14,3,17,29,'Guardians'),(11,'Justin Turner',0.283,95,16,27,4,0,2,13,1,8,21,'Bulldogs'),(12,'Max Muncy',0.324,108,21,35,7,1,1,12,6,7,14,'Bulldogs'),(13,'Cody Bellinger',0.215,72,9,15,3,0,1,4,2,4,24,'Bulldogs'),(14,'Chris Taylor',0.267,89,12,24,6,0,0,10,3,5,17,'Bulldogs'),(15,'Zach McKinstry',0.301,115,19,35,8,1,0,14,5,8,18,'Bulldogs'),(16,'Austin Barnes',0.242,93,8,23,5,0,1,8,2,7,19,'Bulldogs'),(17,'Will Smith',0.273,84,11,23,3,1,0,9,4,4,13,'Bulldogs'),(18,'Matt Beaty',0.329,99,17,33,6,0,2,11,3,6,16,'Bulldogs'),(19,'Luke Raley',0.297,81,12,24,4,0,0,5,1,6,12,'Bulldogs'),(20,'Billy McKinney',0.250,76,7,19,3,0,1,6,0,4,11,'Bulldogs'),(21,'Nathan Garcia',0.267,150,22,40,6,1,2,20,6,15,30,'Tsunamis'),(22,'Isaac Baker',0.344,90,16,31,4,1,1,12,4,10,18,'Tsunamis'),(23,'Madison Howard',0.183,98,12,18,3,0,1,5,2,12,28,'Tsunamis'),(24,'Lucas Gonzalez',0.319,130,25,42,8,2,3,16,8,10,20,'Tsunamis'),(25,'Makayla Perez',0.239,180,20,43,7,1,1,15,5,20,35,'Tsunamis'),(26,'Nicholas Taylor',0.289,110,18,31,5,1,2,12,3,10,25,'Tsunamis'),(27,'Avery Nelson',0.275,160,22,44,7,2,1,18,7,12,22,'Tsunamis'),(28,'Emily Carter',0.311,120,20,37,6,0,3,14,5,10,24,'Tsunamis'),(29,'Giovanni Lee',0.226,200,22,45,8,1,2,18,6,15,40,'Tsunamis'),(30,'Rachel Lewis',0.283,140,20,39,7,2,1,15,4,10,26,'Tsunamis'),(31,'Jason Garcia',0.286,140,18,40,6,1,4,24,6,20,35,'Mudcats'),(32,'Leah Park',0.275,130,17,36,4,2,3,18,4,15,28,'Mudcats'),(33,'Luis Torres',0.321,135,22,43,7,3,2,22,8,12,31,'Mudcats'),(34,'Mia Rodriguez',0.270,145,15,39,8,1,1,17,5,19,40,'Mudcats'),(35,'Nate Trujillo',0.299,150,20,45,9,2,3,22,7,18,37,'Mudcats'),(36,'Oliver Lopez',0.310,140,23,44,10,1,4,26,4,14,33,'Mudcats'),(37,'Paige Hernandez',0.250,135,14,34,7,1,1,16,2,11,29,'Mudcats'),(38,'Quinn Gutierrez',0.287,130,18,37,5,2,2,21,3,13,32,'Mudcats'),(39,'Ramon Reyes',0.303,145,19,44,6,3,2,20,5,16,36,'Mudcats'),(40,'Sofia Santos',0.266,140,14,37,5,1,1,15,2,17,39,'Mudcats');
/*!40000 ALTER TABLE `hitting_stats` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-10 14:07:51
