-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-09-2017 a las 16:14:06
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `test_web2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `ID_EQUIPO` int(11) NOT NULL,
  `NOMBRE` varchar(100) NOT NULL,
  `Direccion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`ID_EQUIPO`, `NOMBRE`, `Direccion`) VALUES
(1, 'FERRO', ''),
(2, 'SANTAMARINA', ''),
(3, 'SAN MARTIN (t)', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugador`
--

CREATE TABLE `jugador` (
  `ID_JUGADOR` int(11) NOT NULL,
  `ID_EQUIPO` int(11) NOT NULL,
  `APELLIDO` varchar(100) DEFAULT NULL,
  `NOMBRE` varchar(100) DEFAULT NULL,
  `GOLES` int(1) NOT NULL,
  `DNI` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Volcado de datos para la tabla `jugador`
--

INSERT INTO `jugador` (`ID_JUGADOR`, `ID_EQUIPO`, `APELLIDO`, `NOMBRE`, `GOLES`, `DNI`) VALUES
(1, 1, 'REQUENA', 'L.', 0, 340003322),
(2, 1, 'GRANA', 'H.', 5, 0),
(3, 1, 'SAINZ', 'O.', 0, 0),
(4, 1, 'BAY', 'J.', 0, 0),
(5, 1, 'CANTO', 'G.', 0, 0),
(6, 1, 'MORALES', 'D.', 9, 0),
(7, 1, 'BORREGO', 'E.', 0, 0),
(8, 1, 'CASTILLEJOS', 'G.', 0, 0),
(9, 1, 'LOPEZ MACRI', 'N.', 0, 0),
(10, 2, 'MUNOZ', 'M.', 0, 0),
(11, 2, 'DOBLER', 'M.', 12, 0),
(12, 2, 'PAPALEO', 'J.', 0, 0),
(13, 2, 'BRAMBATTI', 'F.', 0, 0),
(14, 2, 'GARCIA', 'A.', 0, 0),
(15, 2, 'GOGNA', 'M.', 0, 0),
(16, 2, 'GONZALEZ BORD?N', 'A.', 0, 0),
(17, 2, 'MUNOZ', 'L.', 0, 0),
(18, 2, 'ACOSTA', 'I.', 3, 0),
(19, 3, 'BARRIONUEVO', 'E.', 0, 0),
(20, 3, 'CASTRO', 'N.', 0, 0),
(21, 3, 'CHAVEZ', 'J.', 0, 0),
(22, 3, 'GONZALEZ', 'F.', 0, 0),
(23, 3, 'CALLEJO', 'F.', 0, 0),
(24, 3, 'MICHEL', 'M.', 9, 0),
(25, 3, 'PRUDENCIO', '?.', 0, 0),
(26, 3, 'PUGH', 'L.', 25, 0),
(27, 3, 'RIVERO', 'H.', 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`ID_EQUIPO`);

--
-- Indices de la tabla `jugador`
--
ALTER TABLE `jugador`
  ADD PRIMARY KEY (`ID_JUGADOR`),
  ADD KEY `ID_EQUIPO` (`ID_EQUIPO`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `jugador`
--
ALTER TABLE `jugador`
  ADD CONSTRAINT `jugador_ibfk_1` FOREIGN KEY (`ID_EQUIPO`) REFERENCES `equipo` (`ID_EQUIPO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
