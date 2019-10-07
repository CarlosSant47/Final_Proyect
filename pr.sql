/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.3.14-MariaDB : Database - proyecto
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`proyecto` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `proyecto`;

/*Table structure for table `employes` */

DROP TABLE IF EXISTS `employes`;

CREATE TABLE `employes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) DEFAULT NULL,
  `apellidop` varchar(80) DEFAULT NULL,
  `apellidom` varchar(80) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `employes` */

insert  into `employes`(`id`,`nombre`,`apellidop`,`apellidom`,`status`) values (1,'Carlos Santiago','Sanchez','Zavala',1),(2,'Enrique Miguel','Cerrito','Urias',1),(3,'Brandon','Arias','Zamudio',1),(4,'Cristal','Germain','Ramirez',1),(5,'Carlos Eduardo','Sanchez','Flores',1),(6,'Luis Carlos','Picos','Espinoza',1);

/*Table structure for table `modulos` */

DROP TABLE IF EXISTS `modulos`;

CREATE TABLE `modulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `ruta` varchar(80) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `modulos` */

insert  into `modulos`(`id`,`nombre`,`icon`,`ruta`,`status`) values (1,'Productos','fa fa-archive','index.php/Admin/Productos',1),(2,'Usuarios','fa fa-user','index.php/Admin/Usuarios',1),(3,'Modulos','fa fa-window-restore','index.php/Admin/Usuarios',1),(4,'Empleados','fa fa-users','index.php/Admin/Empleados',1);

/*Table structure for table `tipomodulo` */

DROP TABLE IF EXISTS `tipomodulo`;

CREATE TABLE `tipomodulo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipousuario` int(11) DEFAULT NULL,
  `modulo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tipomodulo` */

insert  into `tipomodulo`(`id`,`tipousuario`,`modulo`) values (1,1,1),(2,1,2),(3,1,3),(4,2,1),(5,1,4);

/*Table structure for table `tipousuario` */

DROP TABLE IF EXISTS `tipousuario`;

CREATE TABLE `tipousuario` (
  `int` int(11) NOT NULL AUTO_INCREMENT,
  `tpnombre` varchar(80) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  PRIMARY KEY (`int`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tipousuario` */

insert  into `tipousuario`(`int`,`tpnombre`,`status`) values (1,'Administrador',1),(2,'Pasante',1);

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) DEFAULT NULL,
  `pass` varchar(32) DEFAULT NULL,
  `idemploy` int(11) DEFAULT NULL,
  `img` varchar(150) DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `usuarios` */

insert  into `usuarios`(`id`,`user`,`pass`,`idemploy`,`img`,`tipo`,`status`) values (1,'CarlosSant47','08b4f2af050d3c9490767627d9e557e1',1,'carlos.png',1,1),(2,'kroz','362ef7a44a4420bac0e695f2eb1918a7',2,'kroz.png',2,1),(3,'brandonariaz98','a2bb3e72d8e80ddb471110b029fcab1d',3,'brandon.png',1,1),(4,'kata','e206a54e97690cce50cc872dd70ee896',4,'cr.jpg',2,1),(5,'lecharlie99','a2bb3e72d8e80ddb471110b029fcab1d',5,'64223699_2290517277693542_2931970544284729344_n.jpg',1,1),(6,'luisk','a2bb3e72d8e80ddb471110b029fcab1d',6,'lk.jpg',2,1);

/* Procedure structure for procedure `checkUserName` */

/*!50003 DROP PROCEDURE IF EXISTS  `checkUserName` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `checkUserName`(in username varchar(20))
BEGIN
	declare result int;
	Select count(*) into result from usuarios where md5(usuarios.`user`) = md5(username);
	select result as userAvaldable;
	
    END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
