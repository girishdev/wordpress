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
-- Table structure for table `wp_postmeta`
--

DROP TABLE IF EXISTS `wp_postmeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_postmeta` (
  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci,
  PRIMARY KEY (`meta_id`),
  KEY `post_id` (`post_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_postmeta`
--

LOCK TABLES `wp_postmeta` WRITE;
/*!40000 ALTER TABLE `wp_postmeta` DISABLE KEYS */;
INSERT INTO `wp_postmeta` VALUES (1,2,'_wp_page_template','default'),(2,4,'_form','<label> Your Name (required)\n    [text* your-name] </label>\n\n<label> Your Email (required)\n    [email* your-email] </label>\n\n<label> Subject\n    [text your-subject] </label>\n\n<label> Your Message\n    [textarea your-message] </label>\n\n[submit \"Send\"]'),(3,4,'_mail','a:8:{s:7:\"subject\";s:26:\"WordPress \"[your-subject]\"\";s:6:\"sender\";s:40:\"[your-name] <girishkumar.aorg@gmail.com>\";s:4:\"body\";s:174:\"From: [your-name] <[your-email]>\nSubject: [your-subject]\n\nMessage Body:\n[your-message]\n\n-- \nThis e-mail was sent from a contact form on WordPress (http://localhost/wordpress)\";s:9:\"recipient\";s:26:\"girishkumar.aorg@gmail.com\";s:18:\"additional_headers\";s:22:\"Reply-To: [your-email]\";s:11:\"attachments\";s:0:\"\";s:8:\"use_html\";i:0;s:13:\"exclude_blank\";i:0;}'),(4,4,'_mail_2','a:9:{s:6:\"active\";b:0;s:7:\"subject\";s:26:\"WordPress \"[your-subject]\"\";s:6:\"sender\";s:38:\"WordPress <girishkumar.aorg@gmail.com>\";s:4:\"body\";s:116:\"Message Body:\n[your-message]\n\n-- \nThis e-mail was sent from a contact form on WordPress (http://localhost/wordpress)\";s:9:\"recipient\";s:12:\"[your-email]\";s:18:\"additional_headers\";s:36:\"Reply-To: girishkumar.aorg@gmail.com\";s:11:\"attachments\";s:0:\"\";s:8:\"use_html\";i:0;s:13:\"exclude_blank\";i:0;}'),(5,4,'_messages','a:8:{s:12:\"mail_sent_ok\";s:45:\"Thank you for your message. It has been sent.\";s:12:\"mail_sent_ng\";s:71:\"There was an error trying to send your message. Please try again later.\";s:16:\"validation_error\";s:61:\"One or more fields have an error. Please check and try again.\";s:4:\"spam\";s:71:\"There was an error trying to send your message. Please try again later.\";s:12:\"accept_terms\";s:69:\"You must accept the terms and conditions before sending your message.\";s:16:\"invalid_required\";s:22:\"The field is required.\";s:16:\"invalid_too_long\";s:22:\"The field is too long.\";s:17:\"invalid_too_short\";s:23:\"The field is too short.\";}'),(6,4,'_additional_settings',NULL),(7,4,'_locale','en_US'),(8,5,'_edit_last','1'),(9,5,'_edit_lock','1507550213:1'),(12,7,'_edit_last','1'),(13,7,'_edit_lock','1507550292:1'),(14,9,'_edit_last','1'),(15,9,'_edit_lock','1507550711:1'),(16,11,'_edit_last','1'),(17,11,'_edit_lock','1507650437:1'),(18,13,'_edit_last','1'),(19,13,'_edit_lock','1507550798:1'),(20,15,'_edit_last','1'),(21,15,'_edit_lock','1507650039:1'),(22,17,'_edit_last','1'),(23,17,'_edit_lock','1507650047:1'),(24,19,'_menu_item_type','post_type'),(25,19,'_menu_item_menu_item_parent','0'),(26,19,'_menu_item_object_id','13'),(27,19,'_menu_item_object','page'),(28,19,'_menu_item_target',''),(29,19,'_menu_item_classes','a:1:{i:0;s:0:\"\";}'),(30,19,'_menu_item_xfn',''),(31,19,'_menu_item_url',''),(33,20,'_menu_item_type','post_type'),(34,20,'_menu_item_menu_item_parent','0'),(35,20,'_menu_item_object_id','9'),(36,20,'_menu_item_object','page'),(37,20,'_menu_item_target',''),(38,20,'_menu_item_classes','a:1:{i:0;s:0:\"\";}'),(39,20,'_menu_item_xfn',''),(40,20,'_menu_item_url',''),(42,21,'_menu_item_type','post_type'),(43,21,'_menu_item_menu_item_parent','0'),(44,21,'_menu_item_object_id','7'),(45,21,'_menu_item_object','page'),(46,21,'_menu_item_target',''),(47,21,'_menu_item_classes','a:1:{i:0;s:0:\"\";}'),(48,21,'_menu_item_xfn',''),(49,21,'_menu_item_url',''),(51,22,'_menu_item_type','post_type'),(52,22,'_menu_item_menu_item_parent','0'),(53,22,'_menu_item_object_id','17'),(54,22,'_menu_item_object','page'),(55,22,'_menu_item_target',''),(56,22,'_menu_item_classes','a:1:{i:0;s:0:\"\";}'),(57,22,'_menu_item_xfn',''),(58,22,'_menu_item_url',''),(60,23,'_menu_item_type','post_type'),(61,23,'_menu_item_menu_item_parent','0'),(62,23,'_menu_item_object_id','15'),(63,23,'_menu_item_object','page'),(64,23,'_menu_item_target',''),(65,23,'_menu_item_classes','a:1:{i:0;s:0:\"\";}'),(66,23,'_menu_item_xfn',''),(67,23,'_menu_item_url',''),(69,24,'_menu_item_type','post_type'),(70,24,'_menu_item_menu_item_parent','0'),(71,24,'_menu_item_object_id','11'),(72,24,'_menu_item_object','page'),(73,24,'_menu_item_target',''),(74,24,'_menu_item_classes','a:1:{i:0;s:0:\"\";}'),(75,24,'_menu_item_xfn',''),(76,24,'_menu_item_url',''),(78,25,'_wp_trash_meta_status','publish'),(79,25,'_wp_trash_meta_time','1507552007'),(80,26,'_wp_trash_meta_status','publish'),(81,26,'_wp_trash_meta_time','1507552016'),(82,15,'_wp_page_template','special-template.php'),(83,17,'_wp_page_template','special-template.php'),(84,11,'_wp_page_template','special-template.php'),(85,27,'_edit_last','1'),(86,27,'_edit_lock','1507650473:1'),(87,27,'_wp_page_template','default'),(88,29,'_edit_last','1'),(89,29,'_edit_lock','1507650498:1'),(90,29,'_wp_page_template','default'),(91,31,'_edit_last','1'),(92,31,'_edit_lock','1507654382:1'),(93,31,'_wp_page_template','default');
/*!40000 ALTER TABLE `wp_postmeta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-10-11 11:21:31
