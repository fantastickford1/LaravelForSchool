# ************************************************************
# Sequel Pro SQL dump
# Versión 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.17)
# Base de datos: APAC
# Tiempo de Generación: 2017-04-06 07:04:10 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Volcado de tabla Alumno
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Alumno`;

CREATE TABLE `Alumno` (
  `idAlumno` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(35) NOT NULL DEFAULT '',
  `Apellido` varchar(35) NOT NULL DEFAULT '',
  `idPTC` int(11) NOT NULL,
  `idCuatri` int(11) NOT NULL,
  PRIMARY KEY (`idAlumno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Volcado de tabla Asesoria
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Asesoria`;

CREATE TABLE `Asesoria` (
  `idAsesoria` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `idPTC` int(11) NOT NULL,
  `Asesoria` varchar(35) NOT NULL DEFAULT '',
  PRIMARY KEY (`idAsesoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Volcado de tabla CuatriX
# ------------------------------------------------------------

DROP TABLE IF EXISTS `CuatriX`;

CREATE TABLE `CuatriX` (
  `idCuatri` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Materia` varchar(35) NOT NULL DEFAULT '',
  PRIMARY KEY (`idCuatri`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Volcado de tabla Evidencias
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Evidencias`;

CREATE TABLE `Evidencias` (
  `idEvidencias` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Evidencia` varchar(35) NOT NULL DEFAULT '',
  `idPTC` varchar(35) NOT NULL DEFAULT '',
  PRIMARY KEY (`idEvidencias`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Volcado de tabla PTC
# ------------------------------------------------------------

DROP TABLE IF EXISTS `PTC`;

CREATE TABLE `PTC` (
  `idPTC` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(35) DEFAULT NULL,
  `Apellido` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`idPTC`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
