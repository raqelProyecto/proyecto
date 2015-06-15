-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2015 a las 04:10:37
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `mydb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `contrasena` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `usuario`, `contrasena`) VALUES
(1, 'Leiva96@gmail.com', 'Leiva96');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `candidato`
--

CREATE TABLE IF NOT EXISTS `candidato` (
`id` int(11) NOT NULL,
  `DUI` varchar(10) NOT NULL,
  `apellidos` varchar(200) NOT NULL,
  `nombres` varchar(200) NOT NULL,
  `dpto` varchar(80) NOT NULL,
  `municipio` varchar(100) NOT NULL,
  `partido_id` int(11) NOT NULL,
  `tipoElec_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `candidato`
--

INSERT INTO `candidato` (`id`, `DUI`, `apellidos`, `nombres`, `dpto`, `municipio`, `partido_id`, `tipoElec_id`) VALUES
(1, '12345678-0', 'Mora', 'Wilson', 'San Salvador', 'San Salvador', 2, 3),
(5, '12345678-7', 'Prueba3', 'Prueba3', 'Usulutan', 'Usulutan', 2, 1),
(6, '12345678-5', 'PerÃ©z', 'Juan', 'La Libertad', 'El puerto', 3, 1),
(7, '12345678-2', 'Martinez', 'Oscar', 'La Paz', 'San Juan Nonualco', 3, 1),
(8, '12345678-1', 'Leiva', 'Johana', 'San Salvador', 'San Salvador', 2, 1),
(9, '12222222-2', 'Carlos', 'Tobar', 'Sonsonate', 'skdsk', 1, 3),
(10, '1222222-8', 'Cortexx', 'Jonathan', 'La UniÃ³n', 'La Union', 1, 3),
(11, '05267777-1', 'Leiva Moreno', 'Raquel Nose', 'Santa Ana', 'Santa ANa', 4, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coaliciones`
--

CREATE TABLE IF NOT EXISTS `coaliciones` (
`id` int(11) NOT NULL,
  `nombre` varchar(80) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `coaliciones`
--

INSERT INTO `coaliciones` (`id`, `nombre`) VALUES
(1, 'dona doble'),
(2, 'Dona triple'),
(3, 'union'),
(4, 'Union1'),
(5, 'Union1'),
(6, 'pRUEBA FINAL'),
(7, 'PRUEBA FINAL 2'),
(8, 'El amor'),
(9, 'El amor'),
(10, 'Raquel'),
(11, 'coalcion partido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_coaliciones`
--

CREATE TABLE IF NOT EXISTS `detalles_coaliciones` (
`id` int(11) NOT NULL,
  `partido_id` int(10) NOT NULL,
  `coalicion_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalles_coaliciones`
--

INSERT INTO `detalles_coaliciones` (`id`, `partido_id`, `coalicion_id`) VALUES
(3, 2, 11),
(4, 1, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partido`
--

CREATE TABLE IF NOT EXISTS `partido` (
`id` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `src_img` varchar(250) NOT NULL,
  `DUI` varchar(10) NOT NULL,
  `represent` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `partido`
--

INSERT INTO `partido` (`id`, `nombre`, `src_img`, `DUI`, `represent`) VALUES
(1, 'PIPI', 'imga.jpg', '12345678-7', 'Leiva'),
(2, 'Dona2', 'dona.jpg', '12345678-0', 'DONA'),
(3, 'Dona1', 'dona.jpg', '12345678-1', 'dona3'),
(4, 'Democracia', 'Fotos-de-Amor-y-Lindas-3.jpg', '05261234-9', 'Walex');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoelec`
--

CREATE TABLE IF NOT EXISTS `tipoelec` (
`id` int(11) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `anio` year(4) NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipoelec`
--

INSERT INTO `tipoelec` (`id`, `tipo`, `anio`, `estado`) VALUES
(1, 'Presidente', 2024, 1),
(2, 'Alcalde', 2015, 0),
(3, 'Diputado', 2015, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `votante`
--

CREATE TABLE IF NOT EXISTS `votante` (
`id` int(11) NOT NULL,
  `DUI` varchar(10) NOT NULL,
  `nombres` varchar(90) NOT NULL,
  `apellidos` varchar(90) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `genero` enum('F','M') NOT NULL,
  `fechnac` date NOT NULL,
  `dpto` varchar(80) NOT NULL,
  `municipio` varchar(120) NOT NULL,
  `direccion` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `votante`
--

INSERT INTO `votante` (`id`, `DUI`, `nombres`, `apellidos`, `foto`, `genero`, `fechnac`, `dpto`, `municipio`, `direccion`) VALUES
(1, '11123456-1', '', '', '', 'F', '0000-00-00', 'La UniÃ³n', '', ''),
(2, '12345678-1', 'Juan JosÃ©', 'Castillo', 'programando.png', 'M', '1999-11-03', 'MorazÃ¡n', 'mora', 'por ahi'),
(3, '11223344-1', 'Wilson', 'Perez', '11021295_826469804092960_4029778351267611380_o.jpg', 'M', '1980-09-24', 'Santa Ana', 'San Ana', 'por ahi'),
(4, '12345116-5', 'Juan Chepe', 'Letona', 'error.png', 'M', '1996-06-02', 'Usulutan', 'Jiquilisco', 'por ahi en jiqui'),
(6, '14252456-6', 'Juan JosÃ©', 'PÃ©rez', '20150506102118.jpg', 'F', '1999-06-01', 'La UniÃ³n', 'union', 'hÃ­');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `voto`
--

CREATE TABLE IF NOT EXISTS `voto` (
`id` int(11) NOT NULL,
  `votante_id` int(11) NOT NULL,
  `candidato_id` int(11) NOT NULL,
  `voto_anio` year(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `voto`
--

INSERT INTO `voto` (`id`, `votante_id`, `candidato_id`, `voto_anio`) VALUES
(11, 1, 1, 0000),
(12, 1, 5, 0000),
(13, 1, 5, 0000),
(14, 1, 5, 2024),
(15, 1, 9, 2015);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `candidato`
--
ALTER TABLE `candidato`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `DUI` (`DUI`), ADD KEY `fk__partido_idx` (`partido_id`), ADD KEY `fk__tipoElec1_idx` (`tipoElec_id`);

--
-- Indices de la tabla `coaliciones`
--
ALTER TABLE `coaliciones`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalles_coaliciones`
--
ALTER TABLE `detalles_coaliciones`
 ADD PRIMARY KEY (`id`), ADD KEY `candidato_id` (`partido_id`), ADD KEY `coalicion_id` (`coalicion_id`);

--
-- Indices de la tabla `partido`
--
ALTER TABLE `partido`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `DUI` (`DUI`);

--
-- Indices de la tabla `tipoelec`
--
ALTER TABLE `tipoelec`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `votante`
--
ALTER TABLE `votante`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `DUI` (`DUI`);

--
-- Indices de la tabla `voto`
--
ALTER TABLE `voto`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_voto_votante1_idx` (`votante_id`), ADD KEY `fk_voto_hoja1_idx` (`candidato_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `candidato`
--
ALTER TABLE `candidato`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `coaliciones`
--
ALTER TABLE `coaliciones`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `detalles_coaliciones`
--
ALTER TABLE `detalles_coaliciones`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `partido`
--
ALTER TABLE `partido`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tipoelec`
--
ALTER TABLE `tipoelec`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `votante`
--
ALTER TABLE `votante`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `voto`
--
ALTER TABLE `voto`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `candidato`
--
ALTER TABLE `candidato`
ADD CONSTRAINT `candidato_ibfk_1` FOREIGN KEY (`partido_id`) REFERENCES `partido` (`id`),
ADD CONSTRAINT `fk__tipoElec1` FOREIGN KEY (`tipoElec_id`) REFERENCES `tipoelec` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalles_coaliciones`
--
ALTER TABLE `detalles_coaliciones`
ADD CONSTRAINT `detalles_coaliciones_ibfk_1` FOREIGN KEY (`coalicion_id`) REFERENCES `coaliciones` (`id`),
ADD CONSTRAINT `detalles_coaliciones_ibfk_2` FOREIGN KEY (`partido_id`) REFERENCES `partido` (`id`);

--
-- Filtros para la tabla `voto`
--
ALTER TABLE `voto`
ADD CONSTRAINT `fk_voto_votante1` FOREIGN KEY (`votante_id`) REFERENCES `votante` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `voto_ibfk_1` FOREIGN KEY (`candidato_id`) REFERENCES `candidato` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
