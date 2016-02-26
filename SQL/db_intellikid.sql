CREATE DATABASE  IF NOT EXISTS `db_intellikid` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_intellikid`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: localhost    Database: db_intellikid
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.9-MariaDB

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (100,'mffazeelmohamed2@gmail.com');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `age_group`
--

DROP TABLE IF EXISTS `age_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `age_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `agefrom` int(11) DEFAULT NULL,
  `ageto` int(11) DEFAULT NULL,
  `desc` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `age_group`
--

LOCK TABLES `age_group` WRITE;
/*!40000 ALTER TABLE `age_group` DISABLE KEYS */;
INSERT INTO `age_group` VALUES (1,1,3,'piliminary level'),(2,3,5,'trying to explore the surrounding'),(3,5,7,'imitating the things'),(4,7,10,'trying new things');
/*!40000 ALTER TABLE `age_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `answer`
--

DROP TABLE IF EXISTS `answer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `questionid` int(11) DEFAULT NULL,
  `answer` varchar(150) DEFAULT NULL,
  `iscorrect` varchar(1) NOT NULL DEFAULT '0',
  `desc` varchar(250) DEFAULT NULL,
  `active` varchar(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fk_questionAnswer_idx` (`questionid`),
  CONSTRAINT `fk_questionAnswer` FOREIGN KEY (`questionid`) REFERENCES `question` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answer`
--

LOCK TABLES `answer` WRITE;
/*!40000 ALTER TABLE `answer` DISABLE KEYS */;
INSERT INTO `answer` VALUES (1,2,'dfgouh','0','','1'),(2,2,'oore8u','0','','1'),(3,2,'otujoye8u','0','','1'),(4,2,'oeirute','0','','1'),(5,3,'kuwhriuwe','0','','1'),(6,3,'owueowu','0','','1'),(7,3,'woueowue','0','','1'),(8,3,'owueroweur','0','','1'),(9,4,'kewhrkewh','1','','1'),(10,4,'wkuehwuh','1','','1'),(11,4,'wurewou','1','','1'),(12,4,'oweurwrewr','1','','1'),(13,6,'ewr','0','','1'),(14,6,'wew','0','','1'),(15,6,'ertre','0','','1'),(16,6,'grtg','0','','1'),(17,7,'uerh','0','','1'),(18,7,'iwuer','0','','1'),(19,7,'wiuer','0','','1'),(20,7,'iuwer','0','','1'),(21,8,'we','0','','1'),(22,8,'we','0','','1'),(23,8,'wd','0','','1'),(24,8,'wed','0','','1'),(25,9,'dsf','0','','1'),(26,9,'asad','0','','1'),(27,9,'asd','0','','1'),(28,9,'as','0','','1'),(29,10,'sdf','0','','1'),(30,10,'sfds','0','','1'),(31,10,'fsd','0','','1'),(32,10,'fsf','0','','1'),(33,11,'sad','0','','1'),(34,11,'das','0','','1'),(35,11,'das','0','','1'),(36,11,'asd','0','','1'),(37,12,'ad','0','','1'),(38,12,'das','0','','1'),(39,12,'das','0','','1'),(40,12,'dasd','0','','1');
/*!40000 ALTER TABLE `answer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `audio`
--

DROP TABLE IF EXISTS `audio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `audio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contentid` int(11) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `path` varchar(300) DEFAULT NULL,
  `img_path` varchar(300) DEFAULT NULL,
  `format` varchar(20) DEFAULT NULL,
  `subjectid` int(11) DEFAULT NULL,
  `agegroupid` int(11) DEFAULT NULL,
  `length` varchar(45) DEFAULT NULL,
  `size` varchar(45) DEFAULT NULL,
  `likes` int(11) DEFAULT NULL,
  `totalviews` int(11) DEFAULT NULL,
  `active` varchar(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fk_content_idx` (`contentid`),
  KEY `fk_subject_idx` (`subjectid`),
  KEY `fk_ageGroup_idx` (`agegroupid`),
  CONSTRAINT `fk_ageGroupAudio` FOREIGN KEY (`agegroupid`) REFERENCES `age_group` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_contentAudio` FOREIGN KEY (`contentid`) REFERENCES `content` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_subjectAudio` FOREIGN KEY (`subjectid`) REFERENCES `subject` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audio`
--

LOCK TABLES `audio` WRITE;
/*!40000 ALTER TABLE `audio` DISABLE KEYS */;
INSERT INTO `audio` VALUES (1,72,'Take Me Home','C:\\xampp\\htdocs\\IntelliKid\\public\\assets\\uploads\\audio\\Take_Me_Home.mp3','C:\\xampp\\htdocs\\IntelliKid\\public\\assets\\uploads\\audio\\img\\21642.jpg','mp3',3,4,'15:03','2546.25',1,1,'1'),(2,74,'Easy learning English','C:\\xampp\\htdocs\\IntelliKid\\public\\assets\\uploads\\audio\\04-jay_sean-do_you_remember_(feat_sean_paul_and_lil_jon).mp3','C:\\xampp\\htdocs\\IntelliKid\\public\\assets\\uploads\\audio\\img\\21509.jpg','mp3',2,4,'15:03','2546.25',1,1,'1'),(3,90,'Track 2','C:\\xampp\\htdocs\\IntelliKid\\public\\assets\\uploads\\audio\\Take_Me_Home.mp3','C:\\xampp\\htdocs\\IntelliKid\\public\\assets\\uploads\\audio\\img\\10733.jpg','mp3',1,1,'15:03','2546.25',1,1,'1');
/*!40000 ALTER TABLE `audio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `child`
--

DROP TABLE IF EXISTS `child`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `child` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  PRIMARY KEY (`id`,`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `child`
--

LOCK TABLES `child` WRITE;
/*!40000 ALTER TABLE `child` DISABLE KEYS */;
INSERT INTO `child` VALUES (103,101),(104,102);
/*!40000 ALTER TABLE `child` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `content`
--

DROP TABLE IF EXISTS `content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contenttypeid` int(11) DEFAULT NULL,
  `creator` int(11) DEFAULT NULL,
  `datetime` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_contentType_idx` (`contenttypeid`),
  CONSTRAINT `fk_contentType` FOREIGN KEY (`contenttypeid`) REFERENCES `content_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `content`
--

LOCK TABLES `content` WRITE;
/*!40000 ALTER TABLE `content` DISABLE KEYS */;
INSERT INTO `content` VALUES (1,1,100,'2016-01-23 12:35:22'),(2,1,NULL,'0000-00-00 00:00:00'),(3,1,NULL,'0000-00-00 00:00:00'),(4,1,NULL,'0000-00-00 00:00:00'),(5,1,NULL,'0000-00-00 00:00:00'),(6,1,100,'0000-00-00 00:00:00'),(7,1,100,'2016-01-26 13:11:26'),(8,1,100,'2016-01-26 13:12:53'),(9,1,100,'2016-01-26 13:16:39'),(10,1,100,'2016-01-26 13:44:50'),(11,1,100,'2016-01-26 13:45:19'),(12,1,100,'2016-01-27 13:16:45'),(13,1,100,'2016-01-27 13:31:01'),(14,1,100,'2016-01-27 13:36:28'),(15,1,100,'2016-01-27 13:37:12'),(16,1,100,'2016-01-27 13:41:58'),(17,1,100,'2016-01-27 13:43:38'),(18,1,100,'2016-01-27 13:44:26'),(19,1,100,'2016-01-27 13:45:39'),(20,1,100,'2016-01-27 13:46:38'),(21,1,100,'2016-01-27 13:47:28'),(22,1,100,'2016-01-27 13:50:22'),(23,1,100,'2016-01-27 15:45:55'),(24,1,100,'2016-01-27 15:47:15'),(25,2,100,'2016-01-28 16:43:54'),(26,2,100,'2016-01-30 15:18:40'),(27,2,100,'2016-01-30 15:19:15'),(28,1,100,'2016-01-30 15:30:15'),(29,1,100,'2016-01-30 15:31:01'),(30,2,100,'2016-01-30 15:32:57'),(31,2,100,'2016-01-30 15:50:28'),(32,2,100,'2016-01-30 16:03:02'),(33,2,100,'2016-01-30 16:37:38'),(34,2,100,'2016-01-30 16:38:28'),(35,2,100,'2016-01-30 16:38:37'),(36,2,100,'2016-01-30 16:39:39'),(37,2,100,'2016-01-30 16:39:58'),(38,2,100,'2016-01-30 16:46:05'),(39,2,100,'2016-01-30 16:46:42'),(40,2,100,'2016-01-30 16:47:04'),(41,2,100,'2016-01-30 16:47:22'),(42,2,100,'2016-01-30 16:53:20'),(43,2,100,'2016-01-30 17:10:35'),(44,2,100,'2016-01-30 17:15:48'),(45,2,100,'2016-01-30 17:16:44'),(46,2,100,'2016-01-30 17:18:07'),(47,2,100,'2016-01-30 17:18:56'),(48,2,100,'2016-01-30 17:54:56'),(49,3,100,'2016-02-03 14:43:09'),(50,3,100,'2016-02-03 15:20:02'),(51,3,100,'2016-02-03 15:22:12'),(52,3,100,'2016-02-03 15:22:36'),(53,3,100,'2016-02-03 21:12:41'),(54,3,100,'2016-02-03 21:15:45'),(55,3,100,'2016-02-03 21:57:32'),(56,3,100,'2016-02-03 21:58:59'),(57,3,100,'2016-02-03 22:00:32'),(58,3,100,'2016-02-03 22:21:47'),(59,3,100,'2016-02-03 23:27:16'),(60,1,100,'2016-02-04 00:55:05'),(61,2,100,'2016-02-04 00:59:21'),(62,3,100,'2016-02-04 01:01:11'),(63,1,100,'2016-02-04 01:02:37'),(64,2,100,'2016-02-04 01:03:27'),(65,1,100,'2016-02-04 08:56:12'),(66,1,100,'2016-02-04 08:58:48'),(67,1,100,'2016-02-04 09:16:55'),(68,1,100,'2016-02-04 09:39:22'),(69,2,100,'2016-02-04 10:05:57'),(70,2,100,'2016-02-04 10:09:26'),(71,2,100,'2016-02-04 11:01:13'),(72,2,100,'2016-02-04 11:13:15'),(73,3,100,'2016-02-04 15:51:26'),(74,2,100,'2016-02-04 15:55:46'),(75,4,100,'2016-02-13 03:54:02'),(76,4,100,'2016-02-13 04:12:29'),(77,4,100,'2016-02-13 04:22:42'),(78,4,100,'2016-02-13 04:25:01'),(79,4,100,'2016-02-13 04:46:59'),(80,4,100,'2016-02-13 04:54:26'),(81,4,100,'2016-02-13 06:26:34'),(82,4,100,'2016-02-13 11:03:35'),(83,4,100,'2016-02-13 17:43:12'),(84,4,100,'2016-02-13 17:47:38'),(85,4,100,'2016-02-13 17:59:34'),(86,4,100,'2016-02-13 18:04:01'),(87,1,100,'2016-02-22 01:17:16'),(88,1,100,'2016-02-22 02:10:32'),(89,1,100,'2016-02-22 02:11:39'),(90,2,100,'2016-02-22 08:44:16');
/*!40000 ALTER TABLE `content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `content_type`
--

DROP TABLE IF EXISTS `content_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `content_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `content_type`
--

LOCK TABLES `content_type` WRITE;
/*!40000 ALTER TABLE `content_type` DISABLE KEYS */;
INSERT INTO `content_type` VALUES (1,'video'),(2,'audio'),(3,'story'),(4,'question');
/*!40000 ALTER TABLE `content_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `loggedinTime` time NOT NULL,
  `loggedoutTime` time NOT NULL,
  `inTime` time NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_userLogin_idx` (`userid`),
  CONSTRAINT `fk_userLogin` FOREIGN KEY (`userid`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (1,100,'07:30:00','09:30:00','02:00:00','2016-01-01'),(2,100,'16:30:00','21:50:00','05:20:00','2016-01-01');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parent`
--

DROP TABLE IF EXISTS `parent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parent`
--

LOCK TABLES `parent` WRITE;
/*!40000 ALTER TABLE `parent` DISABLE KEYS */;
INSERT INTO `parent` VALUES (102,'ernest102@gmail.com'),(101,'robinwebb101@gmail.com');
/*!40000 ALTER TABLE `parent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contentid` int(11) DEFAULT NULL,
  `question` varchar(150) DEFAULT NULL,
  `subjectid` int(11) DEFAULT NULL,
  `agegroupid` int(11) DEFAULT NULL,
  `likes` int(11) DEFAULT NULL,
  `totalviews` int(11) DEFAULT NULL,
  `active` varchar(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fk_subjectQuestion_idx` (`subjectid`),
  KEY `fk_contentQuestion_idx` (`contentid`),
  KEY `fk_ageGroupQuestion_idx` (`agegroupid`),
  CONSTRAINT `fk_ageGroupQuestion` FOREIGN KEY (`agegroupid`) REFERENCES `age_group` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_contentQuestion` FOREIGN KEY (`contentid`) REFERENCES `content` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_subjectQuestion` FOREIGN KEY (`subjectid`) REFERENCES `subject` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question`
--

LOCK TABLES `question` WRITE;
/*!40000 ALTER TABLE `question` DISABLE KEYS */;
INSERT INTO `question` VALUES (1,75,'jwygey',1,1,0,0,'1'),(2,76,'skuhfdsudh',1,1,0,0,'1'),(3,77,'wehrouw',1,1,0,0,'1'),(4,78,'sdkfskj',1,1,0,0,'1'),(5,79,'q1',1,1,0,0,'1'),(6,80,'q1',1,1,0,0,'1'),(7,81,'q1',1,1,0,0,'1'),(8,82,'q1',1,1,0,0,'1'),(9,83,'q1',1,1,0,0,'1'),(10,84,'q1',1,1,0,0,'1'),(11,85,'q2',1,1,0,0,'1'),(12,86,'q3',1,1,0,0,'1');
/*!40000 ALTER TABLE `question` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `question_image`
--

DROP TABLE IF EXISTS `question_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `questionid` int(11) DEFAULT NULL,
  `path` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question_image`
--

LOCK TABLES `question_image` WRITE;
/*!40000 ALTER TABLE `question_image` DISABLE KEYS */;
INSERT INTO `question_image` VALUES (1,1,'C:\\xampp\\htdocs\\IntelliKid\\public\\assets\\uploads\\question\\img\\d79d00553cf2dcea9d0c53dabcb01994.jpg'),(2,2,'C:\\xampp\\htdocs\\IntelliKid\\public\\assets\\uploads\\question\\img\\db766726da8d5ab7f98906db4a97bffe.jpg'),(3,3,'C:\\xampp\\htdocs\\IntelliKid\\public\\assets\\uploads\\question\\img\\5acb874b7bf6c614c2384637fc5cd8b0.jpg'),(4,4,'C:\\xampp\\htdocs\\IntelliKid\\public\\assets\\uploads\\question\\img\\a8f25f9dcaba70aab475fd0956a0342e.jpg'),(5,4,'C:\\xampp\\htdocs\\IntelliKid\\public\\assets\\uploads\\question\\img\\9df641f636eccfeb58228b1715e0712d.jpg'),(6,4,'C:\\xampp\\htdocs\\IntelliKid\\public\\assets\\uploads\\question\\img\\46781a6add9bafe5f9729706a9334e7a.jpg'),(7,11,'C:\\xampp\\htdocs\\IntelliKid\\public\\assets\\uploads\\question\\img\\dd7e1748c0c51df0daf31a8e1b530eb6.jpg'),(8,12,'C:\\xampp\\htdocs\\IntelliKid\\public\\assets\\uploads\\question\\img\\a8446ac76bb46a6ca369e52491f2bb2b.jpg');
/*!40000 ALTER TABLE `question_image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `story`
--

DROP TABLE IF EXISTS `story`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `story` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contentid` int(11) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `path` varchar(300) DEFAULT NULL,
  `subjectid` int(11) DEFAULT NULL,
  `agegroupid` int(11) DEFAULT NULL,
  `likes` int(11) DEFAULT NULL,
  `totalviews` int(11) DEFAULT NULL,
  `active` varchar(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fk_contentidStory_idx` (`contentid`),
  KEY `fk_subjectStory_idx` (`subjectid`),
  KEY `fk_ageGroupStory_idx` (`agegroupid`),
  CONSTRAINT `fk_ageGroupStory` FOREIGN KEY (`agegroupid`) REFERENCES `age_group` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_contentidStory` FOREIGN KEY (`contentid`) REFERENCES `content` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_subjectStory` FOREIGN KEY (`subjectid`) REFERENCES `subject` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `story`
--

LOCK TABLES `story` WRITE;
/*!40000 ALTER TABLE `story` DISABLE KEYS */;
INSERT INTO `story` VALUES (1,59,'Fairy Tale','C:\\xampp\\htdocs\\IntelliKid\\public\\assets\\uploads\\stry\\Fairy Tale.txt',3,3,0,0,'1'),(2,62,'Fairy Tale part 2','C:\\xampp\\htdocs\\IntelliKid\\public\\assets\\uploads\\stry\\Fairy Tale part 2.txt',1,1,0,0,'1'),(3,73,'Bed time story','C:\\xampp\\htdocs\\IntelliKid\\public\\assets\\uploads\\stry\\Bed time story.txt',3,1,0,0,'1');
/*!40000 ALTER TABLE `story` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `story_image`
--

DROP TABLE IF EXISTS `story_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `story_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `storyid` int(11) NOT NULL,
  `path` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_storyID_idx` (`storyid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `story_image`
--

LOCK TABLES `story_image` WRITE;
/*!40000 ALTER TABLE `story_image` DISABLE KEYS */;
INSERT INTO `story_image` VALUES (1,1,'C:\\xampp\\htdocs\\IntelliKid\\public\\assets\\uploads\\stry\\Img\\Fairy Taleebde728bcfff80ab9a371a186e94a346.jpg'),(2,1,'C:\\xampp\\htdocs\\IntelliKid\\public\\assets\\uploads\\stry\\Img\\Fairy Taled8e2abea00795c2c54d50e7d633861d1.jpg'),(3,1,'C:\\xampp\\htdocs\\IntelliKid\\public\\assets\\uploads\\stry\\Img\\Fairy Tale4af7703e18f5ff6a5fb5f747368d8765.jpg'),(4,2,'C:\\xampp\\htdocs\\IntelliKid\\public\\assets\\uploads\\stry\\Img\\Fairy Tale part 2a4d923c7c2b94e5ae6da712b66385322.jpg'),(5,3,'C:\\xampp\\htdocs\\IntelliKid\\public\\assets\\uploads\\stry\\Img\\Bed time story2b6fc8e793e8c5e98e382917eaa3b81d.jpg');
/*!40000 ALTER TABLE `story_image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) DEFAULT NULL,
  `desc` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subject`
--

LOCK TABLES `subject` WRITE;
/*!40000 ALTER TABLE `subject` DISABLE KEYS */;
INSERT INTO `subject` VALUES (1,'Science','More enthusiastic experimental stuff. Kids will love this'),(2,'Mathematics','Path to train children\'s brain to improve the decision making phase'),(3,'History','Learning about history will help to understand the present and prepare for the future'),(4,'Computer','Computer tutorials');
/*!40000 ALTER TABLE `subject` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `Age` int(11) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (100,'admin','Fazeel','Mohamed','1992-02-24',24,'admin'),(101,'robinWebb','Webb','robin','1990-01-12',26,'parent'),(102,'Ernest','Ernest','Turner','1987-09-17',29,'parent'),(103,'Scott','Scott','Kelley','2009-05-21',7,'child'),(104,'Lawrence','Lawrence','Jason','2007-04-12',9,'child');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_account`
--

DROP TABLE IF EXISTS `user_account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `acc_created` datetime NOT NULL,
  `acc_updated` datetime DEFAULT NULL,
  `acc_freezed` datetime DEFAULT NULL,
  `acc_removed` datetime DEFAULT NULL,
  `LastLogged` datetime NOT NULL,
  `confirmationCode` varchar(250) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_account`
--

LOCK TABLES `user_account` WRITE;
/*!40000 ALTER TABLE `user_account` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `video`
--

DROP TABLE IF EXISTS `video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contentid` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `path` varchar(500) DEFAULT NULL,
  `img_path` varchar(500) DEFAULT NULL,
  `format` varchar(20) DEFAULT NULL,
  `subjectid` int(11) NOT NULL,
  `agegroupid` int(11) DEFAULT NULL,
  `length` varchar(45) DEFAULT NULL,
  `size` varchar(45) DEFAULT NULL,
  `likes` int(11) DEFAULT NULL,
  `totalviews` int(11) DEFAULT NULL,
  `active` varchar(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_subjectType_idx` (`subjectid`),
  KEY `fk_ageGroup_idx` (`agegroupid`),
  KEY `fk_content_idx` (`contentid`),
  CONSTRAINT `fk_ageGroup` FOREIGN KEY (`agegroupid`) REFERENCES `age_group` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_content` FOREIGN KEY (`contentid`) REFERENCES `content` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_subjectType` FOREIGN KEY (`subjectid`) REFERENCES `subject` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `video`
--

LOCK TABLES `video` WRITE;
/*!40000 ALTER TABLE `video` DISABLE KEYS */;
INSERT INTO `video` VALUES (1,67,'Independence of Sri Lanka','C:\\xampp\\htdocs\\IntelliKid\\public\\assets\\uploads\\video\\123.mp4','C:\\xampp\\htdocs\\IntelliKid\\public\\assets\\uploads\\video\\img\\23915.jpg','mp4',3,3,'15:03','2546.25',1,1,'1'),(2,68,'Nature','C:\\xampp\\htdocs\\IntelliKid\\public\\assets\\uploads\\video\\123.mp4','C:\\xampp\\htdocs\\IntelliKid\\public\\assets\\uploads\\video\\img\\23960.jpg','mp4',1,1,'15:03','2546.25',1,1,'1'),(3,87,'zzxczc','C:\\xampp\\htdocs\\IntelliKid\\public\\assets\\uploads\\video\\123.mp4','C:\\xampp\\htdocs\\IntelliKid\\public\\assets\\uploads\\video\\img\\10733.jpg','mp4',1,1,'15:03','2546.25',1,1,'1'),(4,88,'43543535','C:\\xampp\\htdocs\\IntelliKid\\public\\assets\\uploads\\video\\123.mp4','C:\\xampp\\htdocs\\IntelliKid\\public\\assets\\uploads\\video\\img\\2727.jpg','mp4',2,1,'15:03','2546.25',1,1,'1'),(5,89,'hjhjgj','C:\\xampp\\htdocs\\IntelliKid\\public\\assets\\uploads\\video\\123.mp4','C:\\xampp\\htdocs\\IntelliKid\\public\\assets\\uploads\\video\\img\\21642.jpg','mp4',1,1,'15:03','2546.25',1,1,'1');
/*!40000 ALTER TABLE `video` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'db_intellikid'
--

--
-- Dumping routines for database 'db_intellikid'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-02-22 21:53:28
