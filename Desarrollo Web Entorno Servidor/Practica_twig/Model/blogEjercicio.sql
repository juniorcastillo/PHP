-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-01-2017 a las 09:58:15
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `blogejercicio`
--
CREATE DATABASE IF NOT EXISTS `blogejercicio` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `blogejercicio`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE IF NOT EXISTS `articulos` (
`id` int(11) NOT NULL,
  `titulo` varchar(100) COLLATE utf8_bin NOT NULL,
  `articulo` text COLLATE utf8_bin NOT NULL,
  `autor` varchar(50) COLLATE utf8_bin NOT NULL,
  `fecha` datetime NOT NULL,
  `categoria` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `editado` tinyint(1) DEFAULT '0',
  `fechaEdicion` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `titulo`, `articulo`, `autor`, `fecha`, `categoria`, `editado`, `fechaEdicion`) VALUES
(1, 'Prueba', '¡esto!', 'fdad', '2017-01-16 09:04:00', 'afsd', 0, NULL),
(2, 'Prueba', 'no', 'yosds', '2017-01-16 09:04:00', 'Pasfd', 0, NULL),
(3, 'Prueba 2', 'Es', 'sdf no', '2017-01-16 09:04:00', 'Prdf', 0, NULL),
(4, 'Prueba', 'Asi', 'ysdf no', '2017-01-16 09:04:00', 'randf', 1, '2017-01-16 09:04:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
