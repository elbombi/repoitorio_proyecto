-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2022 a las 22:25:14
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `Id_admi` int(11) NOT NULL,
  `nom_admi` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `Id_cli` int(11) NOT NULL,
  `nom_cli` varchar(20) DEFAULT NULL,
  `ape_cli` varchar(20) DEFAULT NULL,
  `tel_cli` int(11) DEFAULT NULL,
  `email_cli` varchar(30) DEFAULT NULL,
  `dire_cli` varchar(20) DEFAULT NULL,
  `Id_pqr` int(11) DEFAULT NULL,
  `Id_admi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `Id_com` int(11) NOT NULL,
  `nom_com` varchar(20) DEFAULT NULL,
  `fech_com` varchar(30) DEFAULT NULL,
  `formapago_com` varchar(30) DEFAULT NULL,
  `Id_pro` int(11) DEFAULT NULL,
  `Id_cli` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pqrs`
--

CREATE TABLE `pqrs` (
  `Id_pqr` int(11) NOT NULL,
  `remitente_pqr` varchar(30) DEFAULT NULL,
  `fech_pqr` varchar(30) DEFAULT NULL,
  `Id_admi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Id_pro` int(11) NOT NULL,
  `nom_pro` varchar(20) DEFAULT NULL,
  `tipo_pro` varchar(20) DEFAULT NULL,
  `pre_pro` int(11) DEFAULT NULL,
  `Id_admi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`Id_admi`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`Id_cli`),
  ADD KEY `usa` (`Id_pqr`),
  ADD KEY `ve1` (`Id_admi`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`Id_com`),
  ADD KEY `compra1` (`Id_cli`),
  ADD KEY `compra2` (`Id_pro`);

--
-- Indices de la tabla `pqrs`
--
ALTER TABLE `pqrs`
  ADD PRIMARY KEY (`Id_pqr`),
  ADD KEY `ve2` (`Id_admi`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Id_pro`),
  ADD KEY `ve4` (`Id_admi`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `compra` FOREIGN KEY (`Id_pqr`) REFERENCES `pqrs` (`Id_pqr`),
  ADD CONSTRAINT `usa` FOREIGN KEY (`Id_pqr`) REFERENCES `pqrs` (`Id_pqr`),
  ADD CONSTRAINT `ve` FOREIGN KEY (`Id_admi`) REFERENCES `administrador` (`Id_admi`);

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra1` FOREIGN KEY (`Id_cli`) REFERENCES `clientes` (`Id_cli`),
  ADD CONSTRAINT `compra2` FOREIGN KEY (`Id_pro`) REFERENCES `productos` (`Id_pro`);

--
-- Filtros para la tabla `pqrs`
--
ALTER TABLE `pqrs`
  ADD CONSTRAINT `ve2` FOREIGN KEY (`Id_admi`) REFERENCES `administrador` (`Id_admi`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `ve4` FOREIGN KEY (`Id_admi`) REFERENCES `administrador` (`Id_admi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
