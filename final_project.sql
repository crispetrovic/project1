-- MySQL dump 10.13  Distrib 5.5.46, for debian-linux-gnu (x86_64)
--
-- Host: 0.0.0.0    Database: final_project
-- ------------------------------------------------------
-- Server version	5.5.46-0ubuntu0.14.04.2

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
-- Table structure for table `coping_plan`
--

DROP TABLE IF EXISTS `coping_plan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `coping_plan` (
  `user_id` int(20) NOT NULL,
  `feeling` varchar(255) NOT NULL,
  `plan` varchar(255) NOT NULL,
  `transaction_id` int(40) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coping_plan`
--

LOCK TABLES `coping_plan` WRITE;
/*!40000 ALTER TABLE `coping_plan` DISABLE KEYS */;
INSERT INTO `coping_plan` VALUES (5,'apathetic','do a merry dance',3),(5,'worried','sing a song.',4),(33,'angry','listen to meditative music and breathe deeply',5),(33,'inspired','further develop my cs50 project',6);
/*!40000 ALTER TABLE `coping_plan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feelings`
--

DROP TABLE IF EXISTS `feelings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feelings` (
  `id` mediumint(16) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) NOT NULL,
  `feeling` char(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id2` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feelings`
--

LOCK TABLES `feelings` WRITE;
/*!40000 ALTER TABLE `feelings` DISABLE KEYS */;
INSERT INTO `feelings` VALUES (1,'','lonely'),(2,'','bored'),(3,'','nervous'),(4,'','apathetic'),(5,'','angry'),(6,'','sad'),(7,'','depressed'),(8,'','worried'),(9,'','restricted'),(10,'','jealous'),(11,'','unloved'),(12,'','excited'),(13,'','hopeful'),(14,'','grateful'),(15,'','loved'),(16,'','motivated'),(17,'','inspired'),(18,'','happy'),(19,'','peaceful'),(20,'','tired'),(21,'','other');
/*!40000 ALTER TABLE `feelings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `history` (
  `user_id` int(20) NOT NULL,
  `datetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `feeling` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `event` varchar(455) NOT NULL,
  `tool` varchar(255) NOT NULL,
  `transaction_id` int(60) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB AUTO_INCREMENT=125 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `history`
--

LOCK TABLES `history` WRITE;
/*!40000 ALTER TABLE `history` DISABLE KEYS */;
INSERT INTO `history` VALUES (35,'2016-08-04 01:23:52','sad','home','tired','just log this entry, please',91),(33,'2016-08-14 16:19:39','nervous','academic event','Anxious about giving my presentation','just log this entry, please',92),(33,'2016-08-14 18:44:07','grateful','home','getting things accomplished - feels good :)','just log this entry, please',93),(33,'2016-08-14 19:07:42','angry','social event','facebook drama','create a coping plan',94),(33,'2016-08-14 19:28:15','lonely','other','no one wants to hangout with me','create a positive affirmation',95),(33,'2016-08-14 19:55:14','tired','home','working too much','analyze this feeling further',96),(33,'2016-08-14 19:56:32','restricted','other','got passed up for an awesome job opportunity','create a positive affirmation',97),(33,'2016-08-14 19:57:15','inspired','home','cs50 project completion','create a coping plan',98),(33,'2016-09-12 14:09:28','hopeful','work event','interview','just log this entry, please',99),(35,'2016-09-19 15:23:16','peaceful','work','working on the timezone issue','just log this entry, please',100),(35,'2016-09-20 17:17:46','apathetic','work','just solved parsing error in one of the php files','just log this entry, please',101),(35,'2016-09-20 17:20:07','motivated','other','still working on this project','just log this entry, please',102),(35,'2016-09-20 17:20:58','apathetic','other','same stuff','just log this entry, please',103),(35,'2016-09-20 18:02:57','motivated','work','help from Slack channel user','just log this entry, please',105),(35,'2016-09-20 18:04:21','hopeful','other','keep trying to resolve issue','just log this entry, please',106),(35,'2016-09-20 18:08:23','apathetic','work','still working on it','just log this entry, please',107),(35,'2016-09-20 18:19:32','other','work','ongoing issue with project functionality','just log this entry, please',108),(35,'2016-09-21 14:58:20','motivated','work','CoderGirl Wednesday','just log this entry, please',109),(35,'2016-09-21 15:36:36','restricted','other','trying to resolve issue in project','just log this entry, please',110),(35,'2016-09-21 15:59:47','restricted','other','trying to figure out the date time issue','just log this entry, please',111),(35,'2016-09-21 16:03:19','other','work','re-try','just log this entry, please',112),(35,'2016-09-21 16:09:29','other','other','getting a little frustrated','just log this entry, please',113),(35,'2016-09-21 16:16:17','inspired','work','working on project dev','just log this entry, please',114),(35,'2016-09-21 16:19:16','worried','other','project issues','just log this entry, please',115),(35,'2016-09-21 16:25:02','apathetic','other','trouble shooting','just log this entry, please',116),(35,'2016-09-21 16:25:54','other','other','trying again','just log this entry, please',117),(35,'2016-09-21 16:32:56','other','other','attempting again','just log this entry, please',118),(35,'2016-09-21 17:05:13','other','other','trying once again','just log this entry, please',119),(35,'2016-09-21 17:44:24','other','traveling (other)','more testing','just log this entry, please',120),(35,'2016-09-22 00:02:53','lonely','work','testing','just log this entry, please',124);
/*!40000 ALTER TABLE `history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `locations` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locations`
--

LOCK TABLES `locations` WRITE;
/*!40000 ALTER TABLE `locations` DISABLE KEYS */;
INSERT INTO `locations` VALUES (1,'','home'),(2,'','work'),(3,'','class'),(4,'','gym/health center'),(5,'','relative\'s place'),(6,'','friend\'s place'),(7,'','social event'),(8,'','academic event'),(9,'','religious event'),(10,'','spiritual event'),(11,'','work event'),(12,'','outside'),(13,'','store'),(14,'','doctor\'s office'),(15,'','therapist/counselor\'s office'),(16,'','salon/masseuse\'s office'),(17,'','traveling (work)'),(18,'','traveling (leisure)'),(19,'','traveling (other)'),(20,'','vacation'),(21,'','other');
/*!40000 ALTER TABLE `locations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_aff`
--

DROP TABLE IF EXISTS `personal_aff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_aff` (
  `user_id` int(20) NOT NULL,
  `affirmation` varchar(455) NOT NULL,
  `transaction_id` int(40) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_aff`
--

LOCK TABLES `personal_aff` WRITE;
/*!40000 ALTER TABLE `personal_aff` DISABLE KEYS */;
INSERT INTO `personal_aff` VALUES (5,'some awesome sauce.',1),(33,'dedicating my alone time to improving my coding skills',2),(33,'actively creating opportunities for self growth',3);
/*!40000 ALTER TABLE `personal_aff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resources`
--

DROP TABLE IF EXISTS `resources`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resources` (
  `id` mediumint(16) NOT NULL AUTO_INCREMENT,
  `resource` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resources`
--

LOCK TABLES `resources` WRITE;
/*!40000 ALTER TABLE `resources` DISABLE KEYS */;
INSERT INTO `resources` VALUES (1,'my coping plans'),(2,'my positive affirmations'),(3,'my feeling analyses');
/*!40000 ALTER TABLE `resources` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `root_cause`
--

DROP TABLE IF EXISTS `root_cause`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `root_cause` (
  `user_id` int(20) NOT NULL,
  `feeling` varchar(255) NOT NULL,
  `why1` varchar(255) NOT NULL,
  `why2` varchar(255) NOT NULL,
  `why3` varchar(255) NOT NULL,
  `why4` varchar(255) NOT NULL,
  `why5` varchar(255) NOT NULL,
  `transaction_id` int(40) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `root_cause`
--

LOCK TABLES `root_cause` WRITE;
/*!40000 ALTER TABLE `root_cause` DISABLE KEYS */;
INSERT INTO `root_cause` VALUES (5,'angry','breath of doom','fatal error','it sucks','meeeehhh','cuz',2),(33,'tired','I slept in too long','poor sleep quality','sore muscles','from intense workout yesterday','I didn\'t stretch after',3);
/*!40000 ALTER TABLE `root_cause` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `timezones`
--

DROP TABLE IF EXISTS `timezones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `timezones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(44) DEFAULT NULL,
  `timezone` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=141 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `timezones`
--

LOCK TABLES `timezones` WRITE;
/*!40000 ALTER TABLE `timezones` DISABLE KEYS */;
INSERT INTO `timezones` VALUES (1,'(GMT-11:00) Midway Island ','Pacific/Midway'),(2,'(GMT-11:00) Samoa ','Pacific/Samoa'),(3,'(GMT-10:00) Hawaii ','Pacific/Honolulu'),(4,'(GMT-09:00) Alaska ','America/Anchorage'),(5,'(GMT-08:00) Pacific Time (US &amp; Canada) ','America/Los_Angeles'),(6,'(GMT-08:00) Tijuana ','America/Tijuana'),(7,'(GMT-07:00) Chihuahua ','America/Chihuahua'),(8,'(GMT-07:00) La Paz ','America/Chihuahua'),(9,'(GMT-07:00) Mazatlan ','America/Mazatlan'),(10,'(GMT-07:00) Mountain Time (US &amp; Canada) ','America/Denver'),(11,'(GMT-06:00) Central America ','America/Managua'),(12,'(GMT-06:00) Central Time (US &amp; Canada) ','America/Chicago'),(13,'(GMT-06:00) Guadalajara ','America/Mexico_City'),(14,'(GMT-06:00) Mexico City ','America/Mexico_City'),(15,'(GMT-06:00) Monterrey ','America/Monterrey'),(16,'(GMT-05:00) Bogota ','America/Bogota'),(17,'(GMT-05:00) Eastern Time (US &amp; Canada) ','America/New_York'),(18,'(GMT-05:00) Lima ','America/Lima'),(19,'(GMT-05:00) Quito ','America/Bogota'),(20,'(GMT-04:00) Atlantic Time (Canada) ','Canada/Atlantic'),(21,'(GMT-04:30) Caracas ','America/Caracas'),(22,'(GMT-04:00) La Paz ','America/La_Paz'),(23,'(GMT-04:00) Santiago ','America/Santiago'),(24,'(GMT-03:30) Newfoundland ','America/St_Johns'),(25,'(GMT-03:00) Brasilia ','America/Sao_Paulo'),(26,'(GMT-03:00) Buenos Aires ','America/Argentina/Buenos_Aires'),(27,'(GMT-03:00) Georgetown ','America/Argentina/Buenos_Aires'),(28,'(GMT-03:00) Greenland ','America/Godthab'),(29,'(GMT-02:00) Mid-Atlantic ','America/Noronha'),(30,'(GMT-01:00) Azores ','Atlantic/Azores'),(31,'(GMT-01:00) Cape Verde Is. ','Atlantic/Cape_Verde'),(32,'(GMT+00:00) Casablanca ','Africa/Casablanca'),(33,'(GMT+00:00) Edinburgh ','Europe/London'),(34,'(GMT+00:00) Dublin ','Europe/Dublin'),(35,'(GMT+00:00) Lisbon ','Europe/Lisbon'),(36,'(GMT+00:00) London ','Europe/London'),(37,'(GMT+00:00) Monrovia ','Africa/Monrovia'),(38,'(GMT+00:00) UTC ','UTC'),(39,'(GMT+01:00) Amsterdam ','Europe/Amsterdam'),(40,'(GMT+01:00) Belgrade ','Europe/Belgrade'),(41,'(GMT+01:00) Berlin ','Europe/Berlin'),(42,'(GMT+01:00) Bern ','Europe/Berlin'),(43,'(GMT+01:00) Bratislava ','Europe/Bratislava'),(44,'(GMT+01:00) Brussels ','Europe/Brussels'),(45,'(GMT+01:00) Budapest ','Europe/Budapest'),(46,'(GMT+01:00) Copenhagen ','Europe/Copenhagen'),(47,'(GMT+01:00) Ljubljana ','Europe/Ljubljana'),(48,'(GMT+01:00) Madrid ','Europe/Madrid'),(49,'(GMT+01:00) Paris ','Europe/Paris'),(50,'(GMT+01:00) Prague ','Europe/Prague'),(51,'(GMT+01:00) Rome ','Europe/Rome'),(52,'(GMT+01:00) Sarajevo ','Europe/Sarajevo'),(53,'(GMT+01:00) Skopje ','Europe/Skopje'),(54,'(GMT+01:00) Stockholm ','Europe/Stockholm'),(55,'(GMT+01:00) Vienna ','Europe/Vienna'),(56,'(GMT+01:00) Warsaw ','Europe/Warsaw'),(57,'(GMT+01:00) West Central Africa ','Africa/Lagos'),(58,'(GMT+01:00) Zagreb ','Europe/Zagreb'),(59,'(GMT+02:00) Athens ','Europe/Athens'),(60,'(GMT+02:00) Bucharest ','Europe/Bucharest'),(61,'(GMT+02:00) Cairo ','Africa/Cairo'),(62,'(GMT+02:00) Harare ','Africa/Harare'),(63,'(GMT+02:00) Helsinki ','Europe/Helsinki'),(64,'(GMT+02:00) Istanbul ','Europe/Istanbul'),(65,'(GMT+02:00) Jerusalem ','Asia/Jerusalem'),(66,'(GMT+02:00) Kyiv ','Europe/Helsinki'),(67,'(GMT+02:00) Pretoria ','Africa/Johannesburg'),(68,'(GMT+02:00) Riga ','Europe/Riga'),(69,'(GMT+02:00) Sofia ','Europe/Sofia'),(70,'(GMT+02:00) Tallinn ','Europe/Tallinn'),(71,'(GMT+02:00) Vilnius ','Europe/Vilnius'),(72,'(GMT+03:00) Baghdad ','Asia/Baghdad'),(73,'(GMT+03:00) Kuwait ','Asia/Kuwait'),(74,'(GMT+03:00) Minsk ','Europe/Minsk'),(75,'(GMT+03:00) Nairobi ','Africa/Nairobi'),(76,'(GMT+03:00) Riyadh ','Asia/Riyadh'),(77,'(GMT+03:00) Volgograd ','Europe/Volgograd'),(78,'(GMT+03:30) Tehran ','Asia/Tehran'),(79,'(GMT+04:00) Abu Dhabi ','Asia/Muscat'),(80,'(GMT+04:00) Baku ','Asia/Baku'),(81,'(GMT+04:00) Moscow ','Europe/Moscow'),(82,'(GMT+04:00) Muscat ','Asia/Muscat'),(83,'(GMT+04:00) St. Petersburg ','Europe/Moscow'),(84,'(GMT+04:00) Tbilisi ','Asia/Tbilisi'),(85,'(GMT+04:00) Yerevan ','Asia/Yerevan'),(86,'(GMT+04:30) Kabul ','Asia/Kabul'),(87,'(GMT+05:00) Islamabad ','Asia/Karachi'),(88,'(GMT+05:00) Karachi ','Asia/Karachi'),(89,'(GMT+05:00) Tashkent ','Asia/Tashkent'),(90,'(GMT+05:30) Chennai ','Asia/Calcutta'),(91,'(GMT+05:30) Kolkata ','Asia/Kolkata'),(92,'(GMT+05:30) Mumbai ','Asia/Calcutta'),(93,'(GMT+05:30) New Delhi ','Asia/Calcutta'),(94,'(GMT+05:30) Sri Jayawardenepura ','Asia/Calcutta'),(95,'(GMT+05:45) Kathmandu ','Asia/Katmandu'),(96,'(GMT+06:00) Almaty ','Asia/Almaty'),(97,'(GMT+06:00) Astana ','Asia/Dhaka'),(98,'(GMT+06:00) Dhaka ','Asia/Dhaka'),(99,'(GMT+06:00) Ekaterinburg ','Asia/Yekaterinburg'),(100,'(GMT+06:30) Rangoon ','Asia/Rangoon'),(101,'(GMT+07:00) Bangkok ','Asia/Bangkok'),(102,'(GMT+07:00) Hanoi ','Asia/Bangkok'),(103,'(GMT+07:00) Jakarta ','Asia/Jakarta'),(104,'(GMT+07:00) Novosibirsk ','Asia/Novosibirsk'),(105,'(GMT+08:00) Beijing ','Asia/Hong_Kong'),(106,'(GMT+08:00) Chongqing ','Asia/Chongqing'),(107,'(GMT+08:00) Hong Kong ','Asia/Hong_Kong'),(108,'(GMT+08:00) Krasnoyarsk ','Asia/Krasnoyarsk'),(109,'(GMT+08:00) Kuala Lumpur ','Asia/Kuala_Lumpur'),(110,'(GMT+08:00) Perth ','Australia/Perth'),(111,'(GMT+08:00) Singapore ','Asia/Singapore'),(112,'(GMT+08:00) Taipei ','Asia/Taipei'),(113,'(GMT+08:00) Ulaan Bataar ','Asia/Ulan_Bator'),(114,'(GMT+08:00) Urumqi ','Asia/Urumqi'),(115,'(GMT+09:00) Irkutsk ','Asia/Irkutsk'),(116,'(GMT+09:00) Osaka ','Asia/Tokyo'),(117,'(GMT+09:00) Sapporo ','Asia/Tokyo'),(118,'(GMT+09:00) Seoul ','Asia/Seoul'),(119,'(GMT+09:00) Tokyo ','Asia/Tokyo'),(120,'(GMT+09:30) Adelaide ','Australia/Adelaide'),(121,'(GMT+09:30) Darwin ','Australia/Darwin'),(122,'(GMT+10:00) Brisbane ','Australia/Brisbane'),(123,'(GMT+10:00) Canberra ','Australia/Canberra'),(124,'(GMT+10:00) Guam ','Pacific/Guam'),(125,'(GMT+10:00) Hobart ','Australia/Hobart'),(126,'(GMT+10:00) Melbourne ','Australia/Melbourne'),(127,'(GMT+10:00) Port Moresby ','Pacific/Port_Moresby'),(128,'(GMT+10:00) Sydney ','Australia/Sydney'),(129,'(GMT+10:00) Yakutsk ','Asia/Yakutsk'),(130,'(GMT+11:00) Vladivostok ','Asia/Vladivostok'),(131,'(GMT+12:00) Auckland ','Pacific/Auckland'),(132,'(GMT+12:00) Fiji ','Pacific/Fiji'),(133,'(GMT+12:00) International Date Line West ','Pacific/Kwajalein'),(134,'(GMT+12:00) Kamchatka ','Asia/Kamchatka'),(135,'(GMT+12:00) Magadan ','Asia/Magadan'),(136,'(GMT+12:00) Marshall Is. ','Pacific/Fiji'),(137,'(GMT+12:00) New Caledonia ','Asia/Magadan'),(138,'(GMT+12:00) Solomon Is. ','Asia/Magadan'),(139,'(GMT+12:00) Wellington ','Pacific/Auckland'),(140,'(GMT+13:00) Nuku\\alofa ','Pacific/Tongatapu');
/*!40000 ALTER TABLE `timezones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tools`
--

DROP TABLE IF EXISTS `tools`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tools` (
  `id` mediumint(16) NOT NULL AUTO_INCREMENT,
  `transaction_id` varchar(255) NOT NULL,
  `tool` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tools`
--

LOCK TABLES `tools` WRITE;
/*!40000 ALTER TABLE `tools` DISABLE KEYS */;
INSERT INTO `tools` VALUES (1,'','create a coping plan'),(2,'','create a positive affirmation'),(3,'','analyze this feeling further'),(4,'','just log this entry, please');
/*!40000 ALTER TABLE `tools` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `timezone` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `hash` varchar(355) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (5,'crissapetrovic@gmail.com','cpetrovic','Crissa','Petrovic',NULL,'$2y$10$PD6jppzr2jt8sV87WDNZauA2MhyoGaztVSX0ywq38H0X5.rX8JtZS'),(33,'test@gmail.com','user','first','last',NULL,'$1$ZDkuQL/n$ekQzbf/1It5VgXwZJ6twW1'),(35,'crissa@money.com','crissa1111','cris','petro','America/Chicago','$1$Z9AT7ce4$NRq1Gpjf1Thv4ea38ltwZ1');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-09-26 21:50:35
