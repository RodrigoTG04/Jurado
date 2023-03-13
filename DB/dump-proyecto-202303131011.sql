-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: proyecto
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comentarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pdf_id` int DEFAULT NULL,
  `comentarios` varchar(100) DEFAULT NULL,
  KEY `PDF_FK` (`id`),
  KEY `pdf_FK1` (`pdf_id`),
  CONSTRAINT `pdf_FK1` FOREIGN KEY (`pdf_id`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comentarios`
--

LOCK TABLES `comentarios` WRITE;
/*!40000 ALTER TABLE `comentarios` DISABLE KEYS */;
INSERT INTO `comentarios` VALUES (13,NULL,'Aquí esta mi comentario sobre el libro'),(14,NULL,'Aquí esta mi comentario sobre el libro'),(15,NULL,'Este es mi comentario sobre el libro'),(16,NULL,'Comentario sobre el libro'),(17,NULL,'Comentario'),(18,NULL,'Mi comentario'),(19,NULL,'Comentarios sobre el libro'),(20,NULL,'Comentarios'),(21,NULL,'Aquí  va mi comentario'),(22,NULL,'Aquí  va mi comentario'),(23,NULL,'Capturando mis comentarios'),(25,NULL,'Completando el campo de comentario'),(26,NULL,'Comentario'),(27,NULL,'Capturando mi comentario'),(28,NULL,'Capturando'),(29,NULL,'Captura'),(31,NULL,'Comentario'),(32,NULL,'Captura'),(33,NULL,'Comentario'),(34,NULL,NULL),(35,NULL,'Mi comentario sobre el libro'),(36,NULL,'Capturar mi comentario'),(37,NULL,'Este es mi comentario sobre el libro'),(38,NULL,'Mis comentarios sobre el libro'),(39,NULL,'Captura'),(40,NULL,'Captura'),(41,NULL,'Captura'),(42,NULL,'Mis comentarios'),(43,NULL,'Captura mis comentarios'),(44,NULL,'Capturando mi comentario'),(45,NULL,'Capturando mi comentario'),(46,NULL,'Este es mi comentario'),(47,NULL,'Guardar mi comentario'),(48,NULL,'Mis comentarios van aquí'),(49,NULL,'Este es mi comentario'),(50,NULL,'Mi comentario'),(51,NULL,'Este es mi comentario'),(52,NULL,'Comentario'),(53,NULL,'Comentario'),(54,NULL,'Estos son mis comentarios sobre el libro de desarrollo de aplicaciones web'),(55,NULL,'Este es el comentario que realice'),(56,NULL,'Este es el comentario que realice'),(57,NULL,'Este es el comentario sobre el libro'),(58,NULL,'Comentario'),(59,NULL,'Comentario'),(60,NULL,'Comentario'),(61,NULL,'Comentario'),(62,NULL,'Comentario'),(63,NULL,'fdsfdsfds'),(64,NULL,'Comentario'),(65,NULL,'Comentario'),(66,NULL,'Comentario'),(67,NULL,'Mis comentarios'),(68,NULL,'Mis comentarios'),(69,NULL,'scdsfsdgfdg');
/*!40000 ALTER TABLE `comentarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comentarios_jurado`
--

DROP TABLE IF EXISTS `comentarios_jurado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comentarios_jurado` (
  `id` int NOT NULL AUTO_INCREMENT,
  `libro_id` int DEFAULT NULL,
  `comentario` text,
  `fecha_comentario` datetime DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comentarios_jurado_FK` (`libro_id`),
  KEY `comentarios_jurado_FK_1` (`user_id`),
  CONSTRAINT `comentarios_jurado_FK` FOREIGN KEY (`libro_id`) REFERENCES `libros_participantes` (`id`),
  CONSTRAINT `comentarios_jurado_FK_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comentarios_jurado`
--

LOCK TABLES `comentarios_jurado` WRITE;
/*!40000 ALTER TABLE `comentarios_jurado` DISABLE KEYS */;
INSERT INTO `comentarios_jurado` VALUES (1,NULL,'Este es mi comentario sobre el libro de desarrollo',NULL,NULL),(2,NULL,'Este es mi comentario sobre el libro de desarrollo',NULL,NULL),(3,NULL,'Este es mi comentario sobre el libro de desarrollo',NULL,NULL),(4,NULL,'Este es mi comentario sobre el libro de desarrollo',NULL,NULL),(5,NULL,'Este es mi comentario sobre el libro de desarrollo',NULL,NULL),(6,NULL,'Este es mi comentario sobre el libro de desarrollo',NULL,NULL),(7,NULL,'Este es mi comentario sobre el libro de desarrollo',NULL,NULL),(8,NULL,'Este es mi comentario sobre el libro de desarrollo',NULL,NULL),(9,NULL,'Este es mi comentario sobre el libro de desarrollo',NULL,NULL),(10,NULL,'Comentario sobre el libro',NULL,NULL),(11,NULL,'Comentario sobre el libro',NULL,NULL),(12,NULL,'Comentario sobre el libro',NULL,NULL),(13,NULL,'Comentario sobre el libro',NULL,NULL),(14,NULL,'Comnetario',NULL,NULL),(15,NULL,'Comentario',NULL,NULL),(16,NULL,'Comentario',NULL,NULL);
/*!40000 ALTER TABLE `comentarios_jurado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `libros_participantes`
--

DROP TABLE IF EXISTS `libros_participantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `libros_participantes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `participante_id` int NOT NULL,
  `nombre_libro` text,
  `ruta_archivo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `libros_participantes_FK` (`participante_id`),
  CONSTRAINT `libros_participantes_FK` FOREIGN KEY (`participante_id`) REFERENCES `participantes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `libros_participantes`
--

LOCK TABLES `libros_participantes` WRITE;
/*!40000 ALTER TABLE `libros_participantes` DISABLE KEYS */;
INSERT INTO `libros_participantes` VALUES (1,1,'100 años de soledad','/storage/uploads/1/100.pdf'),(2,2,'El Coronel no tiene quien le escriba','/storage/uploads/2/el_coronel_no_tiene.pdf');
/*!40000 ALTER TABLE `libros_participantes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `participantes`
--

DROP TABLE IF EXISTS `participantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `participantes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `folio` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pseudonimo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `fecha_registro` date DEFAULT NULL,
  `ruta_pdf` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `participantes`
--

LOCK TABLES `participantes` WRITE;
/*!40000 ALTER TABLE `participantes` DISABLE KEYS */;
INSERT INTO `participantes` VALUES (1,'LZ-1896','Rodrigo Torres','2023-03-06',NULL),(2,'JK-1867','Juan Farias','2023-03-07',NULL),(3,'GH-6441','Axel Aguirre','2023-03-08',NULL),(4,'DF-9394','Ahuitzotl Ancelmo','2023-03-09',NULL),(5,'AS-1872','Jesús Álvarez','2023-03-10',NULL),(6,'PO-2514','Edwin Wilson','2023-03-11',NULL);
/*!40000 ALTER TABLE `participantes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `folio` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fecha_registro` date NOT NULL,
  `pseudonimo` varchar(100) NOT NULL,
  `ruta_pdf` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'proyecto'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-13 10:11:58
