-- MySQL dump 10.13  Distrib 5.7.19, for Linux (x86_64)
--
-- Host: localhost    Database: wordpress
-- ------------------------------------------------------
-- Server version	5.7.19-0ubuntu0.16.04.1

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
-- Table structure for table `wp_usermeta`
--

DROP TABLE IF EXISTS `wp_usermeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_usermeta` (
  `umeta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci,
  PRIMARY KEY (`umeta_id`),
  KEY `user_id` (`user_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_usermeta`
--

LOCK TABLES `wp_usermeta` WRITE;
/*!40000 ALTER TABLE `wp_usermeta` DISABLE KEYS */;
INSERT INTO `wp_usermeta` VALUES (1,1,'nickname','Giri'),(2,1,'first_name','Girish'),(3,1,'last_name','kumar'),(4,1,'description',''),(5,1,'rich_editing','true'),(6,1,'comment_shortcuts','false'),(7,1,'admin_color','fresh'),(8,1,'use_ssl','0'),(9,1,'show_admin_bar_front','false'),(10,1,'locale',''),(11,1,'wp_capabilities','a:1:{s:13:\"administrator\";b:1;}'),(12,1,'wp_user_level','10'),(13,1,'dismissed_wp_pointers',''),(14,1,'show_welcome_panel','1'),(16,1,'wp_dashboard_quick_press_last_post_id','3'),(17,1,'community-events-location','a:1:{s:2:\"ip\";s:9:\"127.0.0.0\";}'),(18,1,'managenav-menuscolumnshidden','a:5:{i:0;s:11:\"link-target\";i:1;s:11:\"css-classes\";i:2;s:3:\"xfn\";i:3;s:11:\"description\";i:4;s:15:\"title-attribute\";}'),(19,1,'metaboxhidden_nav-menus','a:1:{i:0;s:12:\"add-post_tag\";}'),(20,1,'nav_menu_recently_edited','2'),(21,1,'session_tokens','a:2:{s:64:\"3b9338494e4206f7bba3ef33984b6de26986beb4f27c225ccafb8f7d382f1ff3\";a:4:{s:10:\"expiration\";i:1507874370;s:2:\"ip\";s:9:\"127.0.0.1\";s:2:\"ua\";s:76:\"Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:55.0) Gecko/20100101 Firefox/55.0\";s:5:\"login\";i:1507701570;}s:64:\"54feb77e8ddbded1edbba549a92984e9285e273fbec49a9bd8c1f98c19277526\";a:4:{s:10:\"expiration\";i:1507895169;s:2:\"ip\";s:9:\"127.0.0.1\";s:2:\"ua\";s:76:\"Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:55.0) Gecko/20100101 Firefox/55.0\";s:5:\"login\";i:1507722369;}}'),(22,1,'closedpostboxes_post','a:0:{}'),(23,1,'metaboxhidden_post','a:5:{i:0;s:13:\"trackbacksdiv\";i:1;s:10:\"postcustom\";i:2;s:16:\"commentstatusdiv\";i:3;s:7:\"slugdiv\";i:4;s:9:\"authordiv\";}'),(24,1,'wp_user-settings','libraryContent=browse'),(25,1,'wp_user-settings-time','1507724923');
/*!40000 ALTER TABLE `wp_usermeta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-10-12 21:10:35
