CREATE DATABASE  IF NOT EXISTS `db_intellikid` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_intellikid`;
-- MySQL dump 10.13  Distrib 5.6.19, for osx10.7 (i386)
--
-- Host: 127.0.0.1    Database: db_intellikid
-- ------------------------------------------------------
-- Server version	5.6.26

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
  CONSTRAINT `fk_question_ans` FOREIGN KEY (`questionid`) REFERENCES `question` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answer`
--

LOCK TABLES `answer` WRITE;
/*!40000 ALTER TABLE `answer` DISABLE KEYS */;
INSERT INTO `answer` VALUES (1,1,'Maroon 5','0','','1'),(2,1,'Adam levein','1','','1'),(3,1,'Bryan Adams','0','','1'),(4,1,'Micheal Jackson','0','','1');
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audio`
--

LOCK TABLES `audio` WRITE;
/*!40000 ALTER TABLE `audio` DISABLE KEYS */;
INSERT INTO `audio` VALUES (1,96,'Cinderella Audio','\\assets\\uploads\\audio\\Take_Me_Home.mp3','\\assets\\uploads\\audio\\img\\2727.jpg','mp3',1,1,'15:03','2546.25',1,1,'1');
/*!40000 ALTER TABLE `audio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `audio_shedule`
--

DROP TABLE IF EXISTS `audio_shedule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `audio_shedule` (
  `id` int(11) NOT NULL,
  `fk_shedule_id` int(11) NOT NULL,
  `fk_audio_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `isActive` varchar(20) NOT NULL,
  `seen_date` datetime NOT NULL,
  `isLike` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audio_shedule`
--

LOCK TABLES `audio_shedule` WRITE;
/*!40000 ALTER TABLE `audio_shedule` DISABLE KEYS */;
/*!40000 ALTER TABLE `audio_shedule` ENABLE KEYS */;
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
-- Table structure for table `child_accounts`
--

DROP TABLE IF EXISTS `child_accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `child_accounts` (
  `c_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `f_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `l_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nik_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dat_of_birth` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `craeted_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `im_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bio_data` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kid_password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `child_accounts`
--

LOCK TABLES `child_accounts` WRITE;
/*!40000 ALTER TABLE `child_accounts` DISABLE KEYS */;
INSERT INTO `child_accounts` VALUES (3,'jfg ','jfngk','lol','6/3/2011','5','male','CHILD','2016-02-12 10:54:24','ACTIVE',NULL,'1','test','colombo10','uploads/lol3_kill_the_dj.jpg'),(6,'test ','test','Achala','4/3/2011','5','male','CHILD','2016-02-13 15:33:00','ACTIVE',NULL,'1','test','colombo10','uploads/Achala1b2fdc4657297442fd4a4873427b7847_large.jpeg'),(7,'etst ','test','test','2/3/2012','4','male','CHILD','2016-02-13 18:51:33','ACTIVE',NULL,'1','test','colombo10','uploads/test1320162.jpg'),(12,'jrbgh ','jrbgj','lol','3/2/2013','3','male','CHILD','2016-02-22 17:35:23','ACTIVE',NULL,'7','dfgk','12345612','uploads/lol3_kill_the_dj.jpg'),(14,'jgigsj ','jhoido','fxg','17/2/2013','3','male','CHILD','2016-02-25 05:48:19','ACTIVE',NULL,'1','sfsg','colombo10','uploads/fxgtransformer-d-games-hd-gaming-ea-sports-319878.jpg');
/*!40000 ALTER TABLE `child_accounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `collector`
--

DROP TABLE IF EXISTS `collector`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `collector` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL,
  `item_id` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `collector`
--

LOCK TABLES `collector` WRITE;
/*!40000 ALTER TABLE `collector` DISABLE KEYS */;
INSERT INTO `collector` VALUES (4,1,'3','story'),(7,2,'2','story'),(8,2,'1','video');
/*!40000 ALTER TABLE `collector` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comment12`
--

DROP TABLE IF EXISTS `comment12`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comment12` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comment12`
--

LOCK TABLES `comment12` WRITE;
/*!40000 ALTER TABLE `comment12` DISABLE KEYS */;
INSERT INTO `comment12` VALUES (1,1,'test',2,'story','2016-02-14 11:14:31'),(2,1,'this is test data ',2,'story','2016-02-14 11:21:35'),(3,1,'rabbit is stupid',3,'story','2016-02-14 11:24:47'),(4,2,'nice story',2,'story','2016-02-14 11:29:43'),(5,7,'test',2,'story','2016-02-22 23:20:23'),(6,7,'',1,'video','2016-02-22 23:29:00'),(7,7,'test',1,'video','2016-02-22 23:29:07'),(8,7,'nice song',2,'video','2016-02-23 01:49:04');
/*!40000 ALTER TABLE `comment12` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `content`
--

LOCK TABLES `content` WRITE;
/*!40000 ALTER TABLE `content` DISABLE KEYS */;
INSERT INTO `content` VALUES (1,1,100,'2016-01-23 12:35:22'),(2,1,NULL,'0000-00-00 00:00:00'),(3,1,NULL,'0000-00-00 00:00:00'),(4,1,NULL,'0000-00-00 00:00:00'),(5,1,NULL,'0000-00-00 00:00:00'),(6,1,100,'0000-00-00 00:00:00'),(7,1,100,'2016-01-26 13:11:26'),(8,1,100,'2016-01-26 13:12:53'),(9,1,100,'2016-01-26 13:16:39'),(10,1,100,'2016-01-26 13:44:50'),(11,1,100,'2016-01-26 13:45:19'),(12,1,100,'2016-01-27 13:16:45'),(13,1,100,'2016-01-27 13:31:01'),(14,1,100,'2016-01-27 13:36:28'),(15,1,100,'2016-01-27 13:37:12'),(16,1,100,'2016-01-27 13:41:58'),(17,1,100,'2016-01-27 13:43:38'),(18,1,100,'2016-01-27 13:44:26'),(19,1,100,'2016-01-27 13:45:39'),(20,1,100,'2016-01-27 13:46:38'),(21,1,100,'2016-01-27 13:47:28'),(22,1,100,'2016-01-27 13:50:22'),(23,1,100,'2016-01-27 15:45:55'),(24,1,100,'2016-01-27 15:47:15'),(25,2,100,'2016-01-28 16:43:54'),(26,2,100,'2016-01-30 15:18:40'),(27,2,100,'2016-01-30 15:19:15'),(28,1,100,'2016-01-30 15:30:15'),(29,1,100,'2016-01-30 15:31:01'),(30,2,100,'2016-01-30 15:32:57'),(31,2,100,'2016-01-30 15:50:28'),(32,2,100,'2016-01-30 16:03:02'),(33,2,100,'2016-01-30 16:37:38'),(34,2,100,'2016-01-30 16:38:28'),(35,2,100,'2016-01-30 16:38:37'),(36,2,100,'2016-01-30 16:39:39'),(37,2,100,'2016-01-30 16:39:58'),(38,2,100,'2016-01-30 16:46:05'),(39,2,100,'2016-01-30 16:46:42'),(40,2,100,'2016-01-30 16:47:04'),(41,2,100,'2016-01-30 16:47:22'),(42,2,100,'2016-01-30 16:53:20'),(43,2,100,'2016-01-30 17:10:35'),(44,2,100,'2016-01-30 17:15:48'),(45,2,100,'2016-01-30 17:16:44'),(46,2,100,'2016-01-30 17:18:07'),(47,2,100,'2016-01-30 17:18:56'),(48,2,100,'2016-01-30 17:54:56'),(49,3,100,'2016-02-03 14:43:09'),(50,3,100,'2016-02-03 15:20:02'),(51,3,100,'2016-02-03 15:22:12'),(52,3,100,'2016-02-03 15:22:36'),(53,3,100,'2016-02-03 21:12:41'),(54,3,100,'2016-02-03 21:15:45'),(55,3,100,'2016-02-03 21:57:32'),(56,3,100,'2016-02-03 21:58:59'),(57,3,100,'2016-02-03 22:00:32'),(58,3,100,'2016-02-03 22:21:47'),(59,3,100,'2016-02-03 23:27:16'),(60,1,100,'2016-02-04 00:55:05'),(61,2,100,'2016-02-04 00:59:21'),(62,3,100,'2016-02-04 01:01:11'),(63,1,100,'2016-02-04 01:02:37'),(64,2,100,'2016-02-04 01:03:27'),(65,1,100,'2016-02-04 08:56:12'),(66,1,100,'2016-02-04 08:58:48'),(67,1,100,'2016-02-04 09:16:55'),(68,1,100,'2016-02-04 09:39:22'),(69,2,100,'2016-02-04 10:05:57'),(70,2,100,'2016-02-04 10:09:26'),(71,2,100,'2016-02-04 11:01:13'),(72,2,100,'2016-02-04 11:13:15'),(73,3,100,'2016-02-04 15:51:26'),(74,2,100,'2016-02-04 15:55:46'),(75,4,100,'2016-02-13 03:54:02'),(76,4,100,'2016-02-13 04:12:29'),(77,4,100,'2016-02-13 04:22:42'),(78,4,100,'2016-02-13 04:25:01'),(79,4,100,'2016-02-13 04:46:59'),(80,4,100,'2016-02-13 04:54:26'),(81,4,100,'2016-02-13 06:26:34'),(82,4,100,'2016-02-13 11:03:35'),(83,4,100,'2016-02-13 17:43:12'),(84,4,100,'2016-02-13 17:47:38'),(85,4,100,'2016-02-13 17:59:34'),(86,4,100,'2016-02-13 18:04:01'),(87,1,100,'2016-02-22 01:17:16'),(88,1,100,'2016-02-22 02:10:32'),(89,1,100,'2016-02-22 02:11:39'),(90,3,100,'2016-02-22 02:11:39'),(91,3,100,'2016-02-22 02:11:39'),(92,3,100,'2016-02-22 02:11:39'),(93,1,100,'2016-02-26 14:53:07'),(94,1,100,'2016-02-26 14:55:23'),(95,2,100,'2016-02-26 14:56:14'),(96,2,100,'2016-02-26 14:57:50'),(97,4,100,'2016-02-26 14:58:27'),(98,4,100,'2016-02-26 15:00:31'),(99,4,100,'2016-02-26 15:03:01'),(100,4,100,'2016-02-26 15:12:57');
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
-- Table structure for table `forum`
--

DROP TABLE IF EXISTS `forum`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(1500) COLLATE utf8_unicode_ci NOT NULL,
  `postedby_id` int(11) NOT NULL,
  `posted_date` date NOT NULL,
  `posted_time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forum`
--

LOCK TABLES `forum` WRITE;
/*!40000 ALTER TABLE `forum` DISABLE KEYS */;
INSERT INTO `forum` VALUES (1,'The 1st post','This is the 1st post',103,'2016-02-24','09:00:00');
/*!40000 ALTER TABLE `forum` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forum_comment`
--

DROP TABLE IF EXISTS `forum_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forum_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `forum_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comments` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `comment_date` date NOT NULL,
  `comment_time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forum_comment`
--

LOCK TABLES `forum_comment` WRITE;
/*!40000 ALTER TABLE `forum_comment` DISABLE KEYS */;
INSERT INTO `forum_comment` VALUES (1,1,105,'This is cool post ha!!!!','','','2016-02-24','12:42:48');
/*!40000 ALTER TABLE `forum_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forum_details`
--

DROP TABLE IF EXISTS `forum_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forum_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `forum_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `islike` tinyint(4) NOT NULL DEFAULT '0',
  `isdislike` tinyint(4) NOT NULL DEFAULT '0',
  `view_status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forum_details`
--

LOCK TABLES `forum_details` WRITE;
/*!40000 ALTER TABLE `forum_details` DISABLE KEYS */;
INSERT INTO `forum_details` VALUES (33,1,105,1,0,1);
/*!40000 ALTER TABLE `forum_details` ENABLE KEYS */;
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
-- Table structure for table `parent_registration`
--

DROP TABLE IF EXISTS `parent_registration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parent_registration` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `f_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `l_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `u_password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dat_of_birth` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `craeted_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reset_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parent_registration`
--

LOCK TABLES `parent_registration` WRITE;
/*!40000 ALTER TABLE `parent_registration` DISABLE KEYS */;
INSERT INTO `parent_registration` VALUES (1,'Achala ','Dias','diaspositive@gmail.com','colombo10','02/06/1994','21','PARENT','2016-02-24 16:49:14','ACTIVE','703141832','assets/parent/profile/img/baby.png'),(2,'Nimal','Perera','thrkdias1@gmail.com','admin1234','02/08/1995','20','PARENT','2016-02-22 18:45:30','ACTIVE','234890123','assets/parent/profile/img/baby.png'),(7,'Kasun ','Silva','thrkdias@gmail.com','admin@12345','07/17/1985','30','PARENT','2016-02-22 18:45:30','ACTIVE','215067752','assets/parent/profile/img/baby.png');
/*!40000 ALTER TABLE `parent_registration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `points`
--

DROP TABLE IF EXISTS `points`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `points` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `child_id` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `points`
--

LOCK TABLES `points` WRITE;
/*!40000 ALTER TABLE `points` DISABLE KEYS */;
INSERT INTO `points` VALUES (1,103,1,'2016-01-17'),(2,103,7,'2016-01-20'),(3,103,8,'2016-01-19'),(4,103,10,'2016-01-19'),(5,103,9,'2016-01-22'),(6,103,11,'2016-01-23'),(7,104,9,'2016-01-24'),(8,104,7,'2016-02-22'),(9,104,8,'2016-01-25'),(10,104,11,'2016-02-24'),(11,103,4,'2016-01-17'),(12,103,6,'2016-01-18'),(13,103,3,'2016-01-19'),(14,103,8,'2016-01-21'),(15,103,12,'2016-02-28'),(16,103,7,'2016-02-29'),(17,103,15,'2016-02-27'),(18,103,6,'2016-02-26'),(19,103,7,'2016-02-01'),(20,103,5,'2016-02-03'),(21,106,5,'2016-01-08'),(22,106,7,'2016-01-09'),(23,106,12,'2016-01-10'),(24,106,6,'2016-01-13'),(25,106,5,'2016-01-17'),(26,106,8,'2016-01-19'),(27,106,4,'2016-01-22'),(28,106,9,'2016-01-23'),(29,106,11,'2016-02-29'),(30,106,3,'2016-02-04');
/*!40000 ALTER TABLE `points` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `points_plan`
--

DROP TABLE IF EXISTS `points_plan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `points_plan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `video` int(11) NOT NULL,
  `audio` int(11) NOT NULL,
  `story` int(11) NOT NULL,
  `quesion` int(11) NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `points_plan`
--

LOCK TABLES `points_plan` WRITE;
/*!40000 ALTER TABLE `points_plan` DISABLE KEYS */;
INSERT INTO `points_plan` VALUES (1,2,2,3,5,'default values for the content is 0');
/*!40000 ALTER TABLE `points_plan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profile_pic`
--

DROP TABLE IF EXISTS `profile_pic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profile_pic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profile_pic`
--

LOCK TABLES `profile_pic` WRITE;
/*!40000 ALTER TABLE `profile_pic` DISABLE KEYS */;
INSERT INTO `profile_pic` VALUES (1,'uploads/3_kill_the_dj.jpg'),(2,'uploads/3_kill_the_dj.jpg'),(3,'uploads/3_kill_the_dj.jpg'),(4,'uploads/1366x768-hd-wallpaper-cute-65.jpg'),(5,'uploads/05.jpg'),(6,'uploads/jfdsnbjk05.jpg'),(7,'uploads/Angle05.jpg'),(8,'uploads/Angle05.jpg'),(9,'uploads/jafn04.jpg'),(10,'uploads/dnsvajk04.jpg'),(11,'uploads/rtyuyu1b2fdc4657297442fd4a4873427b7847_large.jpeg'),(12,'uploads/Achala02.jpg'),(13,'uploads/Achala1b2fdc4657297442fd4a4873427b7847_large.jpeg'),(14,'uploads/test1320162.jpg');
/*!40000 ALTER TABLE `profile_pic` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question`
--

LOCK TABLES `question` WRITE;
/*!40000 ALTER TABLE `question` DISABLE KEYS */;
INSERT INTO `question` VALUES (1,100,'Who is in this photo?',1,1,0,0,'1');
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
  PRIMARY KEY (`id`),
  KEY `fk_question_image_question_idx` (`questionid`),
  CONSTRAINT `fk_question_image_question` FOREIGN KEY (`questionid`) REFERENCES `question` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question_image`
--

LOCK TABLES `question_image` WRITE;
/*!40000 ALTER TABLE `question_image` DISABLE KEYS */;
INSERT INTO `question_image` VALUES (1,1,'\\assets\\uploads\\question\\img\\3199e90707b77856089ba919f90223e1.jpg');
/*!40000 ALTER TABLE `question_image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quiz`
--

DROP TABLE IF EXISTS `quiz`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quiz` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `question` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `option1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `option2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `option3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `option4` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `option5` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `answer` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quiz`
--

LOCK TABLES `quiz` WRITE;
/*!40000 ALTER TABLE `quiz` DISABLE KEYS */;
INSERT INTO `quiz` VALUES (1,'Maths','What is 7+6 = ?','14','13','15','12','17',1,0),(2,'Maths','What is 8-3 = ?','7','3','4','5','6',3,0),(3,'Maths','What is 11+5 = ?','15','17','16','18','14',2,0),(4,'Maths','What is 10*5 = ?','5','10','50','60','25',2,0),(5,'Maths','What is 9/3 = ?','4','3','2','9','5',1,0);
/*!40000 ALTER TABLE `quiz` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shedule`
--

DROP TABLE IF EXISTS `shedule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sheduleCategory` varchar(20) NOT NULL,
  `fk_parent_id` int(11) NOT NULL,
  `sheduleDateTime` varchar(30) NOT NULL,
  `dueTime` varchar(30) NOT NULL,
  `fk_child_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shedule`
--

LOCK TABLES `shedule` WRITE;
/*!40000 ALTER TABLE `shedule` DISABLE KEYS */;
/*!40000 ALTER TABLE `shedule` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `story`
--

LOCK TABLES `story` WRITE;
/*!40000 ALTER TABLE `story` DISABLE KEYS */;
INSERT INTO `story` VALUES (1,99,'Nightingale','\\assets\\uploads\\stry\\Nightingale.txt',3,1,0,0,'1');
/*!40000 ALTER TABLE `story` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `story1`
--

DROP TABLE IF EXISTS `story1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `story1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_order` int(11) DEFAULT NULL,
  `st_id` int(11) DEFAULT NULL,
  `img_path` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `story1`
--

LOCK TABLES `story1` WRITE;
/*!40000 ALTER TABLE `story1` DISABLE KEYS */;
INSERT INTO `story1` VALUES (1,1,1,'assets/parent/story/crow/1.jpg','crow'),(2,2,1,'assets/parent/story/crow/2.jpg','crow'),(3,3,1,'assets/parent/story/crow/3.jpg','crow'),(4,4,1,'assets/parent/story/crow/4jpg','crow'),(5,5,1,'assets/parent/story/crow/5.jpg','crow'),(6,6,1,'assets/parent/story/crow/6.jpg','crow'),(7,7,1,'assets/parent/story/crow/7.jpg','crow'),(8,8,1,'assets/parent/story/crow/8.jpg','crow'),(9,1,2,'assets/parent/story/lion/1.jpg','lion'),(10,2,2,'assets/parent/story/lion/2.jpg','lion'),(11,3,2,'assets/parent/story/lion/3.jpg','lion'),(12,4,2,'assets/parent/story/lion/4.jpg','lion'),(13,5,2,'assets/parent/story/lion/5.jpg','lion'),(14,6,2,'assets/parent/story/lion/6.jpg','lion'),(15,7,2,'assets/parent/story/lion/7.jpg','lion'),(16,8,2,'assets/parent/story/lion/8.jpg','lion'),(17,9,2,'assets/parent/story/lion/9.jpg','lion'),(18,1,3,'assets/parent/story/rabbit/1.jpg','rabbit'),(19,2,3,'assets/parent/story/rabbit/2.jpg','rabbit'),(20,3,3,'assets/parent/story/rabbit/3.jpg','rabbit'),(21,4,3,'assets/parent/story/rabbit/4.jpg','rabbit'),(22,5,3,'assets/parent/story/rabbit/5.jpg','rabbit'),(23,6,3,'assets/parent/story/rabbit/6.jpg','rabbit'),(24,7,3,'assets/parent/story/rabbit/7.jpg','rabbit'),(25,8,3,'assets/parent/story/rabbit/8.jpg','rabbit'),(26,9,3,'assets/parent/story/rabbit/9.jpg','rabbit'),(27,10,3,'assets/parent/story/rabbit/10.jpg','rabbit'),(28,11,3,'assets/parent/story/rabbit/11.jpg','rabbit'),(29,12,3,'assets/parent/story/rabbit/12.jpg','rabbit');
/*!40000 ALTER TABLE `story1` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `story_image`
--

LOCK TABLES `story_image` WRITE;
/*!40000 ALTER TABLE `story_image` DISABLE KEYS */;
INSERT INTO `story_image` VALUES (1,1,'\\assets\\uploads\\stry\\Img\\Nightingalecaa96ef85ae27b5e77d69cc9b16d53e3.jpg'),(2,1,'\\assets\\uploads\\stry\\Img\\Nightingale5db3b9e214b57268f5d2bef7262ccf3f.jpg'),(3,1,'\\assets\\uploads\\stry\\Img\\Nightingale44b070ba15604f3e8d5bb23c8d544c4d.jpg');
/*!40000 ALTER TABLE `story_image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `story_schedule`
--

DROP TABLE IF EXISTS `story_schedule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `story_schedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_schedule_id` int(11) NOT NULL,
  `fk_story_id` int(11) NOT NULL,
  `read_status` int(11) NOT NULL,
  `read_date_time` datetime NOT NULL,
  `isLike` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `story_schedule`
--

LOCK TABLES `story_schedule` WRITE;
/*!40000 ALTER TABLE `story_schedule` DISABLE KEYS */;
/*!40000 ALTER TABLE `story_schedule` ENABLE KEYS */;
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
-- Table structure for table `todo_list`
--

DROP TABLE IF EXISTS `todo_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `todo_list` (
  `id` int(11) NOT NULL,
  `fk_child_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `content` varchar(250) NOT NULL,
  `todo_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `todo_list`
--

LOCK TABLES `todo_list` WRITE;
/*!40000 ALTER TABLE `todo_list` DISABLE KEYS */;
INSERT INTO `todo_list` VALUES (147,104,'2016-02-25 00:00:00','ew','0000-00-00'),(154,104,'2016-02-25 00:00:00','asasa','0000-00-00'),(162,104,'2016-02-25 00:00:00','ghggf','0000-00-00'),(163,104,'2016-02-25 00:00:00','Message:','0000-00-00'),(164,104,'2016-02-25 00:00:00','Message:','0000-00-00'),(165,104,'2016-02-25 00:00:00','aA','0000-00-00'),(166,104,'2016-02-25 00:00:00','FHG','0000-00-00'),(167,104,'2016-02-25 00:00:00','hhg','0000-00-00'),(168,104,'2016-02-25 00:00:00','ghgf','0000-00-00'),(169,104,'2016-02-25 00:00:00','asdfghj','0000-00-00'),(172,104,'0000-00-00 00:00:00','fdghh','0000-00-00'),(173,104,'2016-02-25 07:59:00','qwe','0000-00-00'),(174,104,'2016-02-25 08:06:00','dfds','0000-00-00'),(175,104,'2016-02-25 08:06:00','fggfd','0000-00-00'),(176,104,'2016-02-25 08:16:00','bghgf','0000-00-00'),(177,104,'2016-02-25 08:19:56','bgfhg','0000-00-00');
/*!40000 ALTER TABLE `todo_list` ENABLE KEYS */;
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
-- Table structure for table `user_registration`
--

DROP TABLE IF EXISTS `user_registration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_registration` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `f_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `l_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `u_password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dat_of_birth` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `craeted_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_registration`
--

LOCK TABLES `user_registration` WRITE;
/*!40000 ALTER TABLE `user_registration` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_registration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `video`
--

LOCK TABLES `video` WRITE;
/*!40000 ALTER TABLE `video` DISABLE KEYS */;
INSERT INTO `video` VALUES (1,94,'Spoken English','\\assets\\uploads\\video\\123.mp4','\\assets\\uploads\\video\\img\\10733.jpg','mp4',3,1,'15:03','2546.25',1,1,'1');
/*!40000 ALTER TABLE `video` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `video_shedule`
--

DROP TABLE IF EXISTS `video_shedule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `video_shedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_shedule_id` int(11) NOT NULL,
  `fk_video_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `isActive` varchar(20) NOT NULL,
  `seen_date` datetime NOT NULL,
  `isLike` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `video_shedule`
--

LOCK TABLES `video_shedule` WRITE;
/*!40000 ALTER TABLE `video_shedule` DISABLE KEYS */;
/*!40000 ALTER TABLE `video_shedule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) DEFAULT NULL,
  `img_path` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `cat` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videos`
--

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` VALUES (1,' assets/parent/videos/1.mp4',NULL,'song-EMF-cover of the artist',4),(2,'assets/parent/videos/2.mp4',NULL,'song-cover-MPF-encoding_studio',4),(3,'assets/parent/videos/3.mp4',NULL,'tute-lectuers-java practical',2),(4,'assets/parent/videos/4.mp4',NULL,'tute-Java GUI interface',NULL),(5,'assets/parent/videos/5.mp4',NULL,'english-Skills',5),(6,'assets/parent/videos/6.mp4',NULL,'water-Colors and painting arts',1);
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
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

-- Dump completed on 2016-02-27  2:19:44
