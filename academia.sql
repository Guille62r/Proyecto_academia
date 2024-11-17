-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.32-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para academia
CREATE DATABASE IF NOT EXISTS `academia` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `academia`;

-- Volcando estructura para tabla academia.inscripciones
CREATE TABLE IF NOT EXISTS `inscripciones` (
  `nombre` varchar(30) DEFAULT NULL,
  `seguimiento` varchar(30) DEFAULT NULL,
  `dni` varchar(9) DEFAULT NULL,
  `direccion` varchar(30) DEFAULT NULL,
  `telefono` int(9) DEFAULT NULL,
  `curso` varchar(30) DEFAULT NULL,
  `horario` varchar(30) DEFAULT NULL,
  `modalidad` varchar(30) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla academia.mensaje
CREATE TABLE IF NOT EXISTS `mensaje` (
  `fecha` date DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `asunto` varchar(40) DEFAULT NULL,
  `mensaje` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla academia.mensaje2
CREATE TABLE IF NOT EXISTS `mensaje2` (
  `fecha` date DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `asunto` varchar(40) DEFAULT NULL,
  `mensaje` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla academia.notas
CREATE TABLE IF NOT EXISTS `notas` (
  `nombre` varchar(30) DEFAULT NULL,
  `identificacion` int(15) DEFAULT NULL,
  `calificacion` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla academia.profesores
CREATE TABLE IF NOT EXISTS `profesores` (
  `nombre` varchar(30) DEFAULT NULL,
  `curso` varchar(30) DEFAULT NULL,
  `horario` varchar(15) DEFAULT NULL,
  `telefono` int(9) DEFAULT NULL,
  `observacion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla academia.ventas
CREATE TABLE IF NOT EXISTS `ventas` (
  `fecha` date DEFAULT NULL,
  `cliente` varchar(30) DEFAULT NULL,
  `curso` varchar(30) DEFAULT NULL,
  `abono` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- La exportación de datos fue deseleccionada.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
