-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-04-2026 a las 17:49:37
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pasteleria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion`
--

CREATE TABLE `informacion` (
  `nombre` varchar(100) NOT NULL COMMENT 'nombre del cliente',
  `telefono` varchar(10) NOT NULL COMMENT 'telefono del cliente',
  `mensaje` varchar(200) NOT NULL COMMENT 'mensaje del cliente para el pastel\r\n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `informacion`
--

INSERT INTO `informacion` (`nombre`, `telefono`, `mensaje`) VALUES
('dxxd', 'xzzxz', 'xzxxxxxx'),
('dxxd', 'xzzxz', 'xzxxxxxx'),
('nombre', '222222', 'yo we'),
('nombre', '222222', 'yo we'),
('nombre', '222222', 'yo we'),
('nombre', '222222', 'anticristo2009'),
('nombre', '2281196948', 'quiero un pastel aca bien chido con fresas');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
