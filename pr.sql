-- MySQL dump 10.16  Distrib 10.1.40-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: proyecto
-- ------------------------------------------------------
-- Server version	10.1.40-MariaDB-0ubuntu0.18.04.1

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
-- Table structure for table `employes`
--

DROP TABLE IF EXISTS `employes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) DEFAULT NULL,
  `apellidop` varchar(80) DEFAULT NULL,
  `apellidom` varchar(80) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employes`
--

LOCK TABLES `employes` WRITE;
/*!40000 ALTER TABLE `employes` DISABLE KEYS */;
INSERT INTO `employes` VALUES (1,'Carlos Santiago','Sanchez','Zavala',1),(2,'Enrique Miguel','Cerrito','Urias',1),(3,'Brandon','Arias','Zamudio',1),(4,'Cristal','Germain','Ramirez',1),(5,'Carlos Eduardo','Sanchez','Flores',1),(6,'Luis Carlos','Picos','Espinoza',1),(7,'Marco','Camacho','Duran',1),(8,'Erik Abraham','Godoy','Rojas',1);
/*!40000 ALTER TABLE `employes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modulos`
--

DROP TABLE IF EXISTS `modulos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `ruta` varchar(80) DEFAULT NULL,
  `secure_id` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modulos`
--

LOCK TABLES `modulos` WRITE;
/*!40000 ALTER TABLE `modulos` DISABLE KEYS */;
INSERT INTO `modulos` VALUES (1,'Productos','fa fa-archive','index.php/Admin/Productos',2019117345,1),(2,'Usuarios','fa fa-user','index.php/Admin/Usuarios',2019966999,1),(3,'Modulos','fa fa-window-restore','index.php/Admin/Modulos',2019782345,1),(4,'Empleados','fa fa-users','index.php/Admin/Empleados',2019911099,1);
/*!40000 ALTER TABLE `modulos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipomodulo`
--

DROP TABLE IF EXISTS `tipomodulo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipomodulo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipousuario` int(11) DEFAULT NULL,
  `modulo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipomodulo`
--

LOCK TABLES `tipomodulo` WRITE;
/*!40000 ALTER TABLE `tipomodulo` DISABLE KEYS */;
INSERT INTO `tipomodulo` VALUES (1,1,1),(2,1,2),(3,1,3),(4,2,1),(5,1,4);
/*!40000 ALTER TABLE `tipomodulo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipousuario`
--

DROP TABLE IF EXISTS `tipousuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipousuario` (
  `int` int(11) NOT NULL AUTO_INCREMENT,
  `tpnombre` varchar(80) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`int`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipousuario`
--

LOCK TABLES `tipousuario` WRITE;
/*!40000 ALTER TABLE `tipousuario` DISABLE KEYS */;
INSERT INTO `tipousuario` VALUES (1,'Administrador',1),(2,'Pasante',1);
/*!40000 ALTER TABLE `tipousuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) DEFAULT NULL,
  `pass` varchar(32) DEFAULT NULL,
  `idemploy` int(11) DEFAULT NULL,
  `img` varchar(150) DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  `secure_id` int(15) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'CarlosSant47','08b4f2af050d3c9490767627d9e557e1',1,'carlos.png',1,2019995845,1),(2,'kroz','362ef7a44a4420bac0e695f2eb1918a7',2,'kroz.png',2,2019503199,1),(3,'brandonariaz98','a2bb3e72d8e80ddb471110b029fcab1d',3,'brandon.png',1,2019328045,1),(4,'kata','e206a54e97690cce50cc872dd70ee896',4,'cr.jpg',2,2019930999,1),(5,'lecharlie99','a2bb3e72d8e80ddb471110b029fcab1d',5,'64223699_2290517277693542_2931970544284729344_n.jpg',1,2019870545,1),(6,'luisk','a2bb3e72d8e80ddb471110b029fcab1d',6,'lk.jpg',2,2019559999,1),(7,'marco','a2bb3e72d8e80ddb471110b029fcab1d',7,'95334.jpg',2,2019988145,1),(8,'TaqoO','a2bb3e72d8e80ddb471110b029fcab1d',8,'95213.jpg',2,2019460999,1),(9,'nico','a2bb3e72d8e80ddb471110b029fcab1d',9,'nico.jpg',2,2019140045,1);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-10-11 21:24:57
