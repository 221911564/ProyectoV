-- MariaDB dump 10.17  Distrib 10.4.11-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: disatoys
-- ------------------------------------------------------
-- Server version	10.4.11-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2020_11_25_225753_create_productos',1),(2,'2020_11_25_225826_create_usuarios',1),(3,'2020_11_25_225846_create_tipos',1),(4,'2020_12_10_053300_create_ventas_table',2),(5,'2020_12_10_054239_create_ventas_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productos` (
  `id_producto` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `clave` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` double(10,2) NOT NULL,
  `tamaño` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'AKA71654','Oso Niniu',200.00,1,'oso.jpg',NULL,'2020-12-10 17:12:13'),(2,'QIU1521','Oso Panda',599.99,2,'panda.jpg',NULL,NULL),(4,'AJA7162','Little Pig',379.99,3,'20201126_044828_20201125_041414_pig.webp','2020-11-26 10:48:28','2020-11-26 10:48:28'),(5,'LPAO625','Peluche Winnie Pooh',180.00,3,'20201126_163425_20201124_224501_20201124_005900_winnie.jpg','2020-11-26 22:34:25','2020-11-26 22:34:25'),(6,'PIPA712','Dino peluche',40.00,3,'20201212_035837_dino.webp','2020-12-12 09:58:37','2020-12-12 09:58:37'),(7,'PAQ812','Oso cariñoso',120.00,2,'20201212_035958_as.jpg','2020-12-12 09:59:58','2020-12-12 10:00:29'),(8,'MAL160','Pulpeluche',80.00,3,'20201212_040129_cd.jpg','2020-12-12 10:01:29','2020-12-12 10:01:29'),(9,'PUG092','Perrito pug',140.00,2,'20201212_040227_la.jpg','2020-12-12 10:02:27','2020-12-12 10:02:27'),(10,'FEL816','Oso de felpa',135.50,2,'20201212_040303_oj.jpg','2020-12-12 10:03:03','2020-12-12 10:03:03'),(11,'FLF1872','FORLOVE',164.59,3,'20201212_040347_qa.jpg','2020-12-12 10:03:47','2020-12-12 10:03:47'),(12,'DIN912','Dino REX',172.65,2,'20201212_040655_lapq.jpg','2020-12-12 10:06:55','2020-12-12 10:06:55');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipos`
--

DROP TABLE IF EXISTS `tipos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipos` (
  `id_tipo` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipos`
--

LOCK TABLES `tipos` WRITE;
/*!40000 ALTER TABLE `tipos` DISABLE KEYS */;
INSERT INTO `tipos` VALUES (1,'Administrador',NULL,NULL),(2,'Empleado',NULL,NULL);
/*!40000 ALTER TABLE `tipos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id_usuario` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `app` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apm` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fn` date NOT NULL,
  `genero` int(11) NOT NULL,
  `celular` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contrasena` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_tipo` int(11) NOT NULL,
  `activo` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Erik Sahian','Salazar','Fernández','1998-07-05',1,'722378787','eriksalazar3@gmail.com','123456','img_001.png',1,1,NULL,'2020-12-11 07:42:03'),(2,'Lizbeth Jael','Arista','Vivas','1998-08-18',2,'7224565951','al221910440@gmail.com','123456','liz.jpg',1,1,NULL,NULL),(3,'Brandon','Flores','García','1999-12-31',1,'7226375936','al221710972@gmail.com','123456','brandon.jpg',1,1,NULL,NULL),(6,'Juan Antonio','Camilo','Hernandez','1994-10-20',1,'7309163030','juan@hotmail.com','123456','20201126_164709_20201006211802-chrome.png',2,0,'2020-11-26 22:47:09','2020-12-10 11:11:55'),(7,'Alondra','Hernández','Villavicencia','2005-06-17',2,'7319461920','alondra@gmail.com','123456','20201210_074747_20201006212808-chrome.png',2,1,'2020-12-10 13:47:47','2020-12-10 13:47:47'),(8,'Mahetsi','Lejarazo','Vega','1998-09-09',2,'7226497896','mahetsi_vega@gmail.com','123456','20201212_012855_20201006211913-chrome.png',1,1,'2020-12-12 07:28:55','2020-12-12 07:28:55');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ventas`
--

DROP TABLE IF EXISTS `ventas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ventas` (
  `id_venta` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_venta`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ventas`
--

LOCK TABLES `ventas` WRITE;
/*!40000 ALTER TABLE `ventas` DISABLE KEYS */;
INSERT INTO `ventas` VALUES (1,6,5,'2020-12-10',2,'2020-12-10 07:08:16',NULL),(2,6,1,'2020-12-11',2,'2020-12-10 07:08:28',NULL),(3,6,2,'2020-12-10',10,'2020-12-10 13:22:04','2020-12-10 13:22:04'),(4,7,1,'2020-12-10',3,'2020-12-10 07:56:44',NULL),(5,7,2,'2020-12-11',1,'2020-12-10 07:56:48',NULL),(6,7,2,'2020-12-10',2,'2020-12-10 15:14:01','2020-12-10 15:14:01'),(7,1,2,'2020-12-10',2,'2020-12-10 16:25:59','2020-12-10 16:25:59'),(8,1,4,'2020-12-10',1,'2020-12-10 16:29:41','2020-12-10 16:29:41'),(9,1,5,'2020-12-10',2,'2020-12-10 16:52:39','2020-12-10 16:52:39'),(10,6,2,'2020-12-10',2,'2020-12-10 23:20:17','2020-12-10 23:20:17'),(11,1,1,'2020-12-11',1,'2020-12-11 07:53:07','2020-12-11 07:53:07');
/*!40000 ALTER TABLE `ventas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-12  0:02:20
