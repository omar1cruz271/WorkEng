-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2019 a las 15:10:38
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_postal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adminreporte`
--

CREATE TABLE `adminreporte` (
  `idReporte` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL,
  `nombre` varchar(16) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `nombre`, `rating`) VALUES
(1, 'Cumpleaños', 0),
(2, 'Amistad', 0),
(3, 'Amor', 0),
(4, 'Saludos', 0),
(5, 'Invitación', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postal`
--

CREATE TABLE `postal` (
  `idPostal` int(11) NOT NULL,
  `nombre` varchar(16) NOT NULL,
  `rating` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `ruta` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `postal`
--

INSERT INTO `postal` (`idPostal`, `nombre`, `rating`, `idCategoria`, `ruta`) VALUES
(1, 'mercado1', 0, 1, 'assets/img/Empresas/mercado/image1.jpg'),
(2, 'mercado2', 0, 1, 'assets/img/Empresas/mercado/image2.jpg'),
(3, 'mercado3', 0, 1, 'assets/img/Empresas/mercado/image3.jpg'),
(4, 'mercado4', 0, 1, 'assets/img/Empresas/mercado/image4.jpg'),
(5, 'mercado5', 0, 1, 'assets/img/Empresas/mercado/image5.jpg'),
(6, 'factureras1', 0, 1, 'assets/img/Empresas/factureras/em/image1.jpg'),
(7, 'factureras2', 0, 2, 'assets/img/Empresas/factureras/em/image2.jpg'),
(8, 'factureras3', 0, 2, 'assets/img/Empresas/factureras/em/image3.jpg\r\n'),
(9, 'factureras4', 0, 2, 'assets/img/Empresas/factureras/em/image4.jpg'),
(10, 'factureras5', 0, 2, 'assets/img/Empresas/factureras/em/image5.jpg'),
(11, 'servicios1', 0, 2, 'assets/img/Empresas/servicios/image1.jpg'),
(12, 'servicios2', 0, 2, 'assets/img/Empresas/servicios/image2.jpg'),
(13, 'servicios3', 0, 3, 'assets/img/Empresas/servicios/image3.jpg'),
(14, 'servicios4', 0, 3, 'assets/img/Empresas/servicios/image4.jpg'),
(15, 'servicios5', 0, 3, 'assets/img/Empresas/servicios/image5.jpg'),
(16, 'tecnologia1', 0, 3, 'assets/img/Empresas/tecnologia/image1.jpg'),
(17, 'tecnologia2', 0, 3, 'assets/img/Empresas/tecnologia/image2.jpg'),
(18, 'tecnologia3', 0, 3, 'assets/img/Empresas/tecnologia/image3.jpg'),
(19, 'tecnologia4', 0, 4, 'assets/img/Empresas/tecnologia/image4.jpg'),
(20, 'tecnologia5', 0, 4, 'assets/img/Empresas/tecnologia/image5.jpg'),
(21, 'tecnologia6', 0, 4, 'assets/img/Empresas/tecnologia/image6.jpg'),
(26, 'invitacion2', 0, 5, 'assets/img/postales/invitacion/image2.png\r'),
(27, 'invitacion3', 0, 5, 'assets/img/postales/invitacion/image3.png\r'),
(28, 'invitacion4', 0, 5, 'assets/img/postales/invitacion/image4.png\r'),
(29, 'invitacion5', 0, 5, 'assets/img/postales/invitacion/image5.png\r'),
(30, 'invitacion6', 0, 5, 'assets/img/postales/invitacion/image6.png\r');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte`
--

CREATE TABLE `reporte` (
  `idReporte` int(11) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `contrasena` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `celular` varchar(10) NOT NULL,
  `genero` char(1) NOT NULL,
  `fechaNac` date NOT NULL,
  `privilegio` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombre`, `contrasena`, `email`, `celular`, `genero`, `fechaNac`, `privilegio`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'RRekon@hotmail.com', '5579101570', 'm', '1998-04-24', 1),
(2, 'Rodrigo García Real', '21232f297a57a5a743894a0e4a801fc3', 'rodrigoreal9@gmail.com', '5529857787', 'm', '1998-08-22', 1),
(3, 'Adrián García Real', '21232f297a57a5a743894a0e4a801fc3', 'an.real@gmail.com', '5529857787', 'm', '2019-11-19', 0),
(4, 'Karina González Pérez', '21232f297a57a5a743894a0e4a801fc3', 'karinagp@hotmail.com', '5529857787', 'f', '1999-11-14', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariopostal`
--

CREATE TABLE `usuariopostal` (
  `email` varchar(32) NOT NULL,
  `idPostal` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `emailDestinatario` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuariopostal`
--

INSERT INTO `usuariopostal` (`email`, `idPostal`, `fecha`, `emailDestinatario`) VALUES
('an.real@gmail.com', 3, '2019-01-26 00:00:00', 'rodrigoreal9@gmail.com'),
('RRekon@hotmail.com', 17, '2019-02-13 08:00:00', 'an.real@gmail.com'),
('rodrigoreal9@gmail.com', 7, '2019-07-27 19:00:00', 'an.real@gmail.com'),
('an.real@gmail.com', 17, '2019-11-26 00:00:00', 'karinagp@hotmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adminreporte`
--
ALTER TABLE `adminreporte`
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idReporte` (`idReporte`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `postal`
--
ALTER TABLE `postal`
  ADD PRIMARY KEY (`idPostal`),
  ADD KEY `postal_ibfk_1` (`idCategoria`);

--
-- Indices de la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD PRIMARY KEY (`idReporte`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `usuariopostal`
--
ALTER TABLE `usuariopostal`
  ADD KEY `email` (`email`),
  ADD KEY `idPostal` (`idPostal`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `postal`
--
ALTER TABLE `postal`
  MODIFY `idPostal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `reporte`
--
ALTER TABLE `reporte`
  MODIFY `idReporte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `adminreporte`
--
ALTER TABLE `adminreporte`
  ADD CONSTRAINT `adminreporte_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE CASCADE,
  ADD CONSTRAINT `adminreporte_ibfk_2` FOREIGN KEY (`idReporte`) REFERENCES `reporte` (`idReporte`) ON DELETE CASCADE;

--
-- Filtros para la tabla `postal`
--
ALTER TABLE `postal`
  ADD CONSTRAINT `postal_ibfk_1` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuariopostal`
--
ALTER TABLE `usuariopostal`
  ADD CONSTRAINT `usuariopostal_ibfk_1` FOREIGN KEY (`email`) REFERENCES `usuario` (`email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuariopostal_ibfk_2` FOREIGN KEY (`idPostal`) REFERENCES `postal` (`idPostal`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
