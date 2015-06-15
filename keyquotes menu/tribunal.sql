-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-05-2015 a las 23:15:54
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tribunal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `candidato`
--

CREATE TABLE IF NOT EXISTS `candidato` (
`id` int(11) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `apellido` varchar(40) DEFAULT NULL,
  `dui` varchar(40) DEFAULT NULL,
  `independientes` varchar(40) DEFAULT NULL,
  `coalision` varchar(40) DEFAULT NULL,
  `con` varchar(40) DEFAULT NULL,
  `partidario` varchar(40) DEFAULT NULL,
  `cargo` varchar(40) DEFAULT NULL,
  `departamento` varchar(40) DEFAULT NULL,
  `municipio` varchar(40) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `candidato`
--

INSERT INTO `candidato` (`id`, `nombre`, `apellido`, `dui`, `independientes`, `coalision`, `con`, `partidario`, `cargo`, `departamento`, `municipio`) VALUES
(1, 'Luis', 'Orellana Peñate', '0125986-9', 'I', 'ARENA', 'ARENA', 'GANA', 'PRESIDENTE', 'ALCALDE', 'DIPUTADO'),
(2, 'Maria Guadalupe', 'Lopez', '0125986-9', 'I', 'ARENA', 'GANA', 'FMLN', 'ALCALDE', 'DIPUTADO', 'DIPUTADO'),
(3, 'FMLN', 'Zavala Mendoza', '0125986-9', '', 'ARENA', 'ARENA', 'ARENA', 'DIPUTADO', 'DIPUTADO', 'ALCALDE'),
(4, 'Rigo Joshep', 'Lopez', '0125986-9', 'I', 'GANA', 'FMLN', 'FMLN', 'DIPUTADO', 'ALCALDE', 'DIPUTADO'),
(5, 'Maria Guadalupe', 'Lopez', '0125986-9', '', 'ARENA', 'FMLN', 'GANA', 'DIPUTADO', 'ALCALDE', 'DIPUTADO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `candidato`
--
ALTER TABLE `candidato`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `candidato`
--
ALTER TABLE `candidato`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
