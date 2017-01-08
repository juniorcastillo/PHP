-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-12-2016 a las 00:41:10
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `id` int(11) NOT NULL,
  `titulo` varchar(60) COLLATE utf8_bin NOT NULL,
  `fecha` datetime NOT NULL,
  `contenido` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`id`, `titulo`, `fecha`, `contenido`) VALUES
(2, 'Historia de PHP', '2016-12-29 10:11:12', 'PHP (siglas que originalmente significaban Personal Home Page) fue primero escrito por Rasmus Lerdorf como un simple conjunto de scripts de Perl para guiar a los usuarios en sus páginas. Luego para satisfacer inquietudes del mismo tipo por parte de otra gente lo reescribe, pero esta vez como un lenguaje de script agregándole entre otras características soporte para formularios. Al ver como la popularidad del lenguaje aumenta, un grupo de desarrolladores crea para él un API, convirtiéndose así en el PHP3. Fue en ese momento cuando el parser de scripts PHP es completamente reescrito (el Zend Engine) dando vida al PHP4 mucho mas rápido, tal y como lo conocemos en la actualidad.  '),
(4, 'Usa las funciones _once() con precaución', '2016-12-28 00:09:09', 'A la hora de llamar a otros ficheros, librerías o clases podemos optar por la función include() o la función require(). La primera da un warning de no encontrar el fichero y sigue la ejecución. La segunda da un error fatal y para la ejecución. Bien, hasta aquí todo claro, PHP 101 de manual.\r\n\r\nSin embargo también tenemos la opción de utilizar las funciones include _ once() y require _ once(), que tienen la misma funcionalidad pero evitan que los ficheros, clases o librerías cargados puedan cargarse de nuevo causando duplicidades y estados no deseados en el código. Esto está genial a priori pero lo consiguen a costa de una disminución de rendimiento bastante notoria. Por lo tanto casi mejor ocuparte tu mismo, siempre que puedas, de evitar estas duplicidades revisando bien el código y todas las llamadas en el mismo.      '),
(5, 'Jubila el driver mysql', '2016-12-28 00:14:13', 'No estamos en 2005 ni seguimos usando PHP4 (o por lo menos eso espero) por lo que ya nos podemos deshacer del driver mysql para conectar con, mira tu por donde, MySQL. \r\n\r\nPodemos apostar por el driver mysqli (sobretodo en su forma orientada a objetos) o, mejor aún, caer en los fornidos brazos de PDO. PDO, acrónimo de PHP Data Object, es una extensión de PHP que proporciona una capa de abstracción para la conexión con distintos gestores de bases de datos (porque en PHP también puedes trabajar contra otras bases de datos que no sean MySQL aunque a veces no lo parezca)         '),
(6, 'Usa un Switch en vez de encadenar Ifs', '2016-12-29 00:31:54', 'Seguimos nuestra lucha contra usar las construcciones If para todo. Switch es ligeramente más rápido que If pero dejando de lado el tema rendimiento, resulta horrible ver esa cantidad obscena de if-elseif-else encadenados que hacen ilegibles algunos códigos. Usa Switch, que para eso PHP es un lenguaje moderno y trae esta construcción.\r\n\r\nY ya que estamos, un truco para los Switch: pon antes los casos que consideres que van a ser más usados, el rendimiento será todavía mejor.             ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
