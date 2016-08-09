CREATE DATABASE  IF NOT EXISTS `vivienda` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `vivienda`;
-- MySQL dump 10.13  Distrib 5.5.31, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: vivienda
-- ------------------------------------------------------
-- Server version	5.5.31-0ubuntu0.12.10.1

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
-- Table structure for table `tipo_persona`
--

DROP TABLE IF EXISTS `tipo_persona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_persona` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_persona`
--

LOCK TABLES `tipo_persona` WRITE;
/*!40000 ALTER TABLE `tipo_persona` DISABLE KEYS */;
INSERT INTO `tipo_persona` VALUES (1,'Socio'),(2,'Adherente');
/*!40000 ALTER TABLE `tipo_persona` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `persona`
--

DROP TABLE IF EXISTS `persona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `persona` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Apellido` varchar(100) DEFAULT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Domicilio` varchar(100) DEFAULT NULL,
  `DNI` varchar(10) DEFAULT NULL,
  `Mail` varchar(45) DEFAULT NULL,
  `Telefono` varchar(50) NOT NULL,
  `TelefonoCelular` varchar(50) NOT NULL,
  `IngresosMensuales` int(11) DEFAULT NULL,
  `CantHijos` int(11) DEFAULT NULL,
  `FechaAlta` date DEFAULT NULL,
  `Borrado` varchar(45) DEFAULT NULL,
  `Nota` varchar(255) DEFAULT NULL,
  `IdSocio` int(11) DEFAULT NULL,
  `tipo_persona_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_persona_tipo_persona1_idx` (`tipo_persona_id`),
  CONSTRAINT `fk_persona_tipo_persona1` FOREIGN KEY (`tipo_persona_id`) REFERENCES `tipo_persona` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8 COMMENT='Personas Titulares al Plan de Vivienda';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persona`
--

LOCK TABLES `persona` WRITE;
/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
INSERT INTO `persona` VALUES (6,'Ramirez','Alejandra','11 de Septiembre 241','28255633','koquipizzi@gmail.com','','',6000,NULL,'2014-06-06',NULL,'',NULL,2),(7,'Castellano','Horacio','','','','','',NULL,NULL,'2014-06-06',NULL,'',3,1),(8,'Gonzalez Guerra','Oscar','','','','','154581293',NULL,NULL,'2014-06-06',NULL,'109 - A',NULL,2),(9,'Farina','Susana','','','','','',NULL,NULL,'2014-06-06',NULL,'110 - A',NULL,2),(10,'Torres','Marcelo','','','','','',NULL,NULL,'2014-06-06',NULL,'',6,1),(11,'Alia','Julio','','','','','',NULL,NULL,'2014-06-06',NULL,'',69,1),(12,'Gorozo','Marcelo','','','','','',NULL,NULL,'2014-06-06',NULL,'',81,1),(13,'Cambronera','Juan','','','','','154338478',NULL,NULL,'2014-06-06',NULL,'',84,1),(14,'Pellizari','Alberto José','','','','','',NULL,NULL,'2014-06-06',NULL,'',87,1),(15,'López','Mario','','','','','',NULL,NULL,'2014-06-06',NULL,'',105,1),(16,'Heit','Francisco','','','','','154348083',NULL,NULL,'2014-06-06',NULL,'',86,1),(17,'Alabart','Alberto','','','','','154351147',NULL,NULL,'2014-06-06',NULL,'',45,1),(18,'Peralta','Juan Miguel','','','','','',NULL,NULL,'2014-06-06',NULL,'',73,1),(19,'Martinez','José Luis','','','','','154646661',NULL,NULL,'2014-06-06',NULL,'',91,1),(20,'Calvo','José Luis','','','','4429592','',NULL,NULL,'2014-06-06',NULL,'',92,1),(21,'Cicopiedi','Alfredo','','','','','154210203',NULL,NULL,'2014-06-06',NULL,'',116,1),(22,'Roberts','Adrián','','','','','154686266',NULL,NULL,'2014-06-06',NULL,'',40,1),(23,'Ferraro','Natalio','','','','','',NULL,NULL,'2014-06-06',NULL,'',97,1),(24,'Rodriguez','Pablo Daniel','','','','','154009526',NULL,NULL,'2014-06-06',NULL,'',98,1),(25,'Gonzalez','Pedro','','','','','154509356',NULL,NULL,'2014-06-06',NULL,'',99,1),(26,'Paredes','Simón','','','','','154354993',NULL,NULL,'2014-06-06',NULL,'',104,1),(27,'Borges','Gustavo Fabián','','','','','154307991',NULL,NULL,'2014-06-06',NULL,'',102,1),(28,'Diaz','Jorge Alberto','','','','4434996','',NULL,NULL,'2014-06-06',NULL,'',101,1);
/*!40000 ALTER TABLE `persona` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-09-25 11:35:27
