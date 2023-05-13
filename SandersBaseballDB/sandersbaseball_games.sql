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
-- Table structure for table `games`
--

DROP TABLE IF EXISTS `games`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `games` (
  `game_id` int NOT NULL,
  `datetime` datetime DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL,
  `home_team_score` int NOT NULL,
  `away_team_score` int NOT NULL,
  `home_team_name` varchar(45) DEFAULT NULL,
  `away_team_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`game_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `games`
--

LOCK TABLES `games` WRITE;
/*!40000 ALTER TABLE `games` DISABLE KEYS */;
INSERT INTO `games` VALUES (1,'2023-04-10 14:00:00','Great American Ballpark',5,3,'Guardians','Bulldogs'),(2,'2023-04-11 19:00:00','Florence Yall\'s Ballpark',2,1,'Tsunamis','Mudcats'),(3,'2023-04-12 15:00:00','Paycor Stadium',4,2,'Bulldogs','Tsunamis'),(4,'2023-04-13 20:00:00','Nippert Field',3,1,'Mudcats','Guardians'),(5,'2023-04-14 16:00:00','Great American Ballpark',2,0,'Bulldogs','Mudcats'),(6,'2023-04-15 18:00:00','Florence Yall\'s Ballpark',1,0,'Guardians','Tsunamis'),(7,'2023-04-16 14:00:00','Paycor Stadium',6,4,'Tsunamis','Bulldogs'),(8,'2023-04-17 19:00:00','Nippert Field',3,2,'Mudcats','Bulldogs'),(9,'2023-04-18 16:00:00','Great American Ballpark',4,3,'Tsunamis','Guardians'),(10,'2023-04-19 18:00:00','Florence Yall\'s Ballpark',1,0,'Mudcats','Tsunamis'),(11,'2023-04-20 15:00:00','Paycor Stadium',2,1,'Bulldogs','Guardians'),(12,'2023-04-21 20:00:00','Nippert Field',5,4,'Tsunamis','Mudcats'),(13,'2023-04-22 14:00:00','Great American Ballpark',3,2,'Mudcats','Guardians'),(14,'2023-04-23 19:00:00','Florence Yall\'s Ballpark',4,1,'Guardians','Bulldogs'),(15,'2023-04-24 16:00:00','Paycor Stadium',2,0,'Tsunamis','Mudcats'),(16,'2023-04-25 18:00:00','Nippert Field',1,0,'Bulldogs','Mudcats'),(17,'2023-04-26 15:00:00','Great American Ballpark',6,2,'Guardians','Tsunamis'),(18,'2023-04-27 20:00:00','Florence Yall\'s Ballpark',3,1,'Mudcats','Bulldogs'),(19,'2023-04-28 14:00:00','Paycor Stadium',2,1,'Tsunamis','Guardians'),(20,'2023-04-29 19:00:00','Nippert Field',1,0,'Mudcats','Tsunamis'),(21,'2023-05-18 14:30:00','Paycor Stadium',6,3,'Tsunamis','Bulldogs'),(22,'2023-05-19 16:00:00','Nippert Field',1,4,'Mudcats','Guardians'),(23,'2023-05-20 18:00:00','Great American Ballpark',2,8,'Bulldogs','Tsunamis'),(24,'2023-05-21 12:00:00','Florence Yall\'s Ballpark',5,2,'Guardians','Mudcats'),(25,'2023-05-22 13:30:00','Paycor Stadium',7,4,'Tsunamis','Mudcats'),(26,'2023-05-23 15:00:00','Nippert Field',3,6,'Bulldogs','Guardians'),(27,'2023-05-24 17:00:00','Great American Ballpark',1,0,'Mudcats','Tsunamis'),(28,'2023-05-25 12:30:00','Florence Yall\'s Ballpark',2,1,'Guardians','Bulldogs'),(29,'2023-05-26 14:30:00','Paycor Stadium',5,6,'Mudcats','Tsunamis'),(30,'2023-05-27 16:00:00','Nippert Field',3,2,'Bulldogs','Mudcats'),(31,'2023-05-28 18:00:00','Great American Ballpark',4,5,'Guardians','Tsunamis'),(32,'2023-05-29 12:00:00','Florence Yall\'s Ballpark',2,1,'Mudcats','Bulldogs'),(33,'2023-05-30 13:30:00','Paycor Stadium',3,7,'Tsunamis','Guardians'),(34,'2023-05-31 15:00:00','Nippert Field',1,3,'Bulldogs','Tsunamis'),(35,'2023-06-01 17:00:00','Great American Ballpark',0,2,'Mudcats','Guardians'),(36,'2023-06-02 12:30:00','Florence Yall\'s Ballpark',5,4,'Guardians','Tsunamis'),(37,'2023-06-03 14:30:00','Paycor Stadium',2,1,'Bulldogs','Mudcats'),(38,'2023-05-11 19:00:00','Great American Ballpark',5,3,'Bulldogs','Guardians'),(39,'2023-05-11 20:00:00','Florence Yall\'s Ballpark',2,1,'Tsunamis','Mudcats'),(40,'2023-05-12 18:00:00','Paycor Stadium',0,4,'Guardians','Bulldogs'),(41,'2023-05-12 19:00:00','Nippert Field',1,3,'Mudcats','Tsunamis'),(42,'2023-05-13 17:00:00','Great American Ballpark',4,0,'Bulldogs','Tsunamis'),(43,'2023-05-13 18:00:00','Florence Yall\'s Ballpark',2,4,'Mudcats','Guardians'),(44,'2023-05-14 19:00:00','Paycor Stadium',3,5,'Guardians','Tsunamis'),(45,'2023-05-14 20:00:00','Nippert Field',1,0,'Bulldogs','Mudcats'),(46,'2023-05-15 18:00:00','Great American Ballpark',2,1,'Mudcats','Bulldogs'),(47,'2023-05-15 19:00:00','Florence Yall\'s Ballpark',1,4,'Tsunamis','Guardians'),(48,'2023-05-16 17:00:00','Paycor Stadium',3,2,'Bulldogs','Mudcats'),(49,'2023-05-16 18:00:00','Nippert Field',0,1,'Guardians','Tsunamis'),(50,'2023-05-17 19:00:00','Great American Ballpark',4,3,'Tsunamis','Bulldogs'),(51,'2023-05-17 20:00:00','Florence Yall\'s Ballpark',2,1,'Mudcats','Guardians'),(52,'2023-05-18 18:00:00','Paycor Stadium',0,5,'Bulldogs','Guardians'),(53,'2023-05-18 19:00:00','Nippert Field',3,1,'Tsunamis','Mudcats'),(54,'2023-05-19 17:00:00','Great American Ballpark',2,4,'Guardians','Tsunamis'),(55,'2023-05-19 18:00:00','Florence Yall\'s Ballpark',1,3,'Mudcats','Bulldogs'),(56,'2023-05-20 19:00:00','Paycor Stadium',3,2,'Tsunamis','Guardians'),(57,'2023-05-20 20:00:00','Nippert Field',0,1,'Bulldogs','Mudcats'),(58,'2023-06-05 19:00:00','Nippert Field',4,2,'Guardians','Mudcats'),(59,'2023-06-06 16:00:00','Great American Ballpark',3,5,'Bulldogs','Guardians'),(60,'2023-06-07 18:00:00','Florence Yall\'s Ballpark',2,3,'Tsunamis','Bulldogs'),(61,'2023-06-08 17:00:00','Paycor Stadium',1,6,'Mudcats','Tsunamis'),(62,'2023-06-09 19:00:00','Nippert Field',2,4,'Guardians','Bulldogs'),(63,'2023-06-10 16:00:00','Great American Ballpark',1,5,'Tsunamis','Mudcats'),(64,'2023-06-11 18:00:00','Florence Yall\'s Ballpark',3,2,'Bulldogs','Tsunamis'),(65,'2023-06-12 17:00:00','Paycor Stadium',5,1,'Mudcats','Guardians'),(66,'2023-06-13 19:00:00','Nippert Field',4,3,'Guardians','Tsunamis'),(67,'2023-06-14 16:00:00','Great American Ballpark',2,6,'Bulldogs','Mudcats'),(68,'2023-06-15 18:00:00','Florence Yall\'s Ballpark',5,1,'Tsunamis','Guardians'),(69,'2023-06-16 17:00:00','Paycor Stadium',3,2,'Mudcats','Bulldogs'),(70,'2023-06-17 19:00:00','Nippert Field',1,4,'Guardians','Mudcats'),(71,'2023-06-18 16:00:00','Great American Ballpark',2,5,'Bulldogs','Tsunamis'),(72,'2023-06-19 18:00:00','Florence Yall\'s Ballpark',3,1,'Tsunamis','Mudcats'),(73,'2023-06-20 17:00:00','Paycor Stadium',4,2,'Mudcats','Guardians'),(74,'2023-06-21 19:00:00','Nippert Field',5,3,'Guardians','Bulldogs'),(75,'2023-06-22 16:00:00','Great American Ballpark',1,6,'Tsunamis','Bulldogs'),(76,'2023-06-23 18:00:00','Florence Yall\'s Ballpark',2,3,'Mudcats','Tsunamis'),(77,'2023-06-24 17:00:00','Paycor Stadium',6,1,'Guardians','Tsunamis'),(78,'2023-06-10 20:00:00','Great American Ballpark',5,1,'Tsunamis','Guardians'),(79,'2023-06-11 14:00:00','Paycor Stadium',3,2,'Bulldogs','Mudcats'),(80,'2023-06-12 17:00:00','Nippert Field',2,0,'Mudcats','Guardians'),(81,'2023-06-13 19:00:00','Florence Yall\'s Ballpark',6,4,'Guardians','Bulldogs'),(82,'2023-06-14 15:00:00','Great American Ballpark',4,3,'Tsunamis','Mudcats'),(83,'2023-06-15 18:00:00','Paycor Stadium',1,0,'Bulldogs','Guardians'),(84,'2023-06-16 20:00:00','Nippert Field',2,2,'Mudcats','Tsunamis'),(85,'2023-06-17 17:00:00','Florence Yall\'s Ballpark',1,3,'Guardians','Tsunamis'),(86,'2023-06-18 16:00:00','Great American Ballpark',5,2,'Bulldogs','Guardians'),(87,'2023-06-19 14:00:00','Paycor Stadium',3,1,'Tsunamis','Mudcats'),(88,'2023-06-20 18:00:00','Nippert Field',2,2,'Mudcats','Bulldogs'),(89,'2023-06-21 19:00:00','Florence Yall\'s Ballpark',4,6,'Guardians','Mudcats'),(90,'2023-06-22 15:00:00','Great American Ballpark',2,1,'Mudcats','Tsunamis'),(91,'2023-06-23 20:00:00','Paycor Stadium',0,2,'Bulldogs','Guardians'),(92,'2023-06-24 17:00:00','Nippert Field',3,1,'Tsunamis','Bulldogs'),(93,'2023-06-25 18:00:00','Florence Yall\'s Ballpark',1,2,'Guardians','Bulldogs'),(94,'2023-06-26 16:00:00','Great American Ballpark',6,3,'Tsunamis','Bulldogs'),(95,'2023-06-27 19:00:00','Paycor Stadium',2,0,'Mudcats','Guardians'),(96,'2023-06-28 20:00:00','Nippert Field',4,4,'Guardians','Mudcats'),(97,'2023-06-29 14:00:00','Florence Yall\'s Ballpark',3,3,'Bulldogs','Tsunamis'),(98,'2023-08-22 19:00:00','Florence Yall\'s Ballpark',5,1,'Mudcats','Bulldogs'),(99,'2023-08-23 18:00:00','Paycor Stadium',2,2,'Tsunamis','Guardians'),(100,'2023-08-24 17:00:00','Great American Ballpark',3,4,'Bulldogs','Mudcats');
/*!40000 ALTER TABLE `games` ENABLE KEYS */;
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
