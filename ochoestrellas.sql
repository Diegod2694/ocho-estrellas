-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2018 a las 22:42:07
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ochoestrellas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitaciones`
--

CREATE TABLE `habitaciones` (
  `IdHabitacion` int(11) NOT NULL,
  `NumeroHabitacion` varchar(10) DEFAULT NULL,
  `Disponibilidad` tinyint(1) NOT NULL,
  `Categoria` varchar(40) NOT NULL,
  `Piso` int(11) DEFAULT NULL,
  `TipoHabitacion` int(11) NOT NULL,
  `Hotel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `habitaciones`
--

INSERT INTO `habitaciones` (`IdHabitacion`, `NumeroHabitacion`, `Disponibilidad`, `Categoria`, `Piso`, `TipoHabitacion`, `Hotel`) VALUES
(1, '1', 1, 'Individual', NULL, 1, 1),
(2, '2', 1, 'Individual', NULL, 1, 1),
(3, '3', 1, 'Individual', NULL, 1, 1),
(4, '4', 1, 'Individual', NULL, 1, 1),
(5, '5', 1, 'Individual', NULL, 1, 1),
(6, '6', 1, 'Doble', NULL, 2, 1),
(7, '7', 1, 'Doble', NULL, 2, 1),
(8, '8', 1, 'Doble', NULL, 2, 1),
(9, '9', 1, 'Doble', NULL, 2, 1),
(10, '10', 1, 'Doble', NULL, 2, 1),
(11, '11', 1, 'Suite', NULL, 3, 1),
(12, '12', 1, 'Suite', NULL, 3, 1),
(13, '13', 1, 'Suite', NULL, 3, 1),
(14, '14', 1, 'Suite', NULL, 3, 1),
(15, '15', 1, 'Suite', NULL, 3, 1),
(16, '16', 1, 'Suite Presidencial', NULL, 4, 1),
(17, '17', 1, 'Suite Presidencial', NULL, 4, 1),
(18, '18', 1, 'Suite Presidencial', NULL, 4, 1),
(19, '19', 1, 'Suite Presidencial', NULL, 4, 1),
(20, '20', 1, 'Suite Presidencial', NULL, 4, 1),
(64, '01', 1, 'Individual', NULL, 1, 2),
(84, '02', 1, 'Individual', NULL, 1, 2),
(120, '03', 1, 'Individual', NULL, 1, 2),
(121, '04', 1, 'Individual', NULL, 1, 2),
(122, '05', 1, 'Individual', NULL, 1, 2),
(123, '06', 1, 'Doble', NULL, 2, 2),
(124, '07', 1, 'Doble', NULL, 2, 2),
(125, '08', 1, 'Doble', NULL, 2, 2),
(126, '09', 1, 'Doble', NULL, 2, 2),
(131, '10', 1, 'Doble', NULL, 2, 2),
(132, '11', 1, 'Suite', NULL, 3, 2),
(133, '12', 1, 'Suite', NULL, 3, 2),
(134, '13', 1, 'Suite', NULL, 3, 2),
(135, '14', 1, 'Suite', NULL, 3, 2),
(136, '15', 1, 'Suite', NULL, 3, 2),
(137, '16', 1, 'Suite Presidencial', NULL, 4, 2),
(138, '17', 1, 'Suite Presidencial', NULL, 4, 2),
(139, '18', 1, 'Suite Presidencial', NULL, 4, 2),
(140, '19', 1, 'Suite Presidencial', NULL, 4, 2),
(141, '20', 1, 'Suite Presidencial', NULL, 4, 2),
(142, '01', 1, 'Individual', NULL, 1, 3),
(143, '02', 1, 'Individual', NULL, 1, 3),
(144, '03', 1, 'Individual', NULL, 1, 3),
(145, '04', 1, 'Individual', NULL, 1, 3),
(146, '05', 1, 'Individual', NULL, 1, 3),
(147, '06', 1, 'Doble', NULL, 2, 3),
(148, '07', 1, 'Doble', NULL, 2, 3),
(149, '08', 1, 'Doble', NULL, 2, 3),
(150, '09', 1, 'Doble', NULL, 2, 3),
(151, '10', 1, 'Doble', NULL, 2, 3),
(152, '11', 1, 'Suite', NULL, 3, 3),
(153, '12', 1, 'Suite', NULL, 3, 3),
(154, '13', 1, 'Suite', NULL, 3, 3),
(155, '14', 1, 'Suite', NULL, 3, 3),
(156, '15', 1, 'Suite', NULL, 3, 3),
(157, '16', 1, 'Suite Presidencial', NULL, 4, 3),
(158, '17', 1, 'Suite Presidencial', NULL, 4, 3),
(159, '18', 1, 'Suite Presidencial', NULL, 4, 3),
(160, '19', 1, 'Suite Presidencial', NULL, 4, 3),
(161, '20', 1, 'Suite Presidencial', NULL, 4, 3),
(162, '01', 1, 'Individual', NULL, 1, 4),
(163, '02', 1, 'Individual', NULL, 1, 4),
(164, '03', 1, 'Individual', NULL, 1, 4),
(165, '04', 1, 'Individual', NULL, 1, 4),
(166, '05', 1, 'Individual', NULL, 1, 4),
(167, '06', 1, 'Doble', NULL, 2, 4),
(168, '07', 1, 'Doble', NULL, 2, 4),
(169, '08', 1, 'Doble', NULL, 2, 4),
(170, '09', 1, 'Doble', NULL, 2, 4),
(171, '10', 1, 'Doble', NULL, 2, 4),
(172, '11', 1, 'Suite', NULL, 3, 4),
(173, '12', 1, 'Suite', NULL, 3, 4),
(174, '13', 1, 'Suite', NULL, 3, 4),
(175, '14', 1, 'Suite', NULL, 3, 4),
(176, '15', 1, 'Suite', NULL, 3, 4),
(177, '16', 1, 'Suite Presidencial', NULL, 4, 4),
(178, '17', 1, 'Suite Presidencial', NULL, 4, 4),
(179, '18', 1, 'Suite Presidencial', NULL, 4, 4),
(180, '19', 1, 'Suite Presidencial', NULL, 4, 4),
(181, '20', 1, 'Suite Presidencial', NULL, 4, 4),
(182, '01', 1, 'Individual', NULL, 1, 5),
(183, '02', 1, 'Individual', NULL, 1, 5),
(184, '03', 1, 'Individual', NULL, 1, 5),
(185, '04', 1, 'Individual', NULL, 1, 5),
(186, '05', 1, 'Individual', NULL, 1, 5),
(187, '06', 1, 'Doble', NULL, 2, 5),
(188, '07', 1, 'Doble', NULL, 2, 5),
(189, '08', 1, 'Doble', NULL, 2, 5),
(190, '09', 1, 'Doble', NULL, 2, 5),
(191, '10', 1, 'Doble', NULL, 2, 5),
(192, '11', 1, 'Suite', NULL, 3, 5),
(193, '12', 1, 'Suite', NULL, 3, 5),
(194, '13', 1, 'Suite', NULL, 3, 5),
(195, '14', 1, 'Suite', NULL, 3, 5),
(196, '15', 1, 'Suite', NULL, 3, 5),
(197, '16', 1, 'Suite Presidencial', NULL, 4, 5),
(198, '17', 1, 'Suite Presidencial', NULL, 4, 5),
(199, '18', 1, 'Suite Presidencial', NULL, 4, 5),
(200, '19', 1, 'Suite Presidencial', NULL, 4, 5),
(201, '20', 1, 'Suite Presidencial', NULL, 4, 5),
(202, '01', 1, 'Individual', NULL, 1, 6),
(203, '02', 1, 'Individual', NULL, 1, 6),
(204, '03', 1, 'Individual', NULL, 1, 6),
(205, '04', 1, 'Individual', NULL, 1, 6),
(206, '05', 1, 'Individual', NULL, 1, 6),
(207, '06', 1, 'Doble', NULL, 2, 6),
(208, '07', 1, 'Doble', NULL, 2, 6),
(209, '08', 1, 'Doble', NULL, 2, 6),
(210, '09', 1, 'Doble', NULL, 2, 6),
(211, '10', 1, 'Doble', NULL, 2, 6),
(212, '11', 1, 'Suite', NULL, 3, 6),
(213, '12', 1, 'Suite', NULL, 3, 6),
(214, '13', 1, 'Suite', NULL, 3, 6),
(215, '14', 1, 'Suite', NULL, 3, 6),
(216, '15', 1, 'Suite', NULL, 3, 6),
(217, '16', 1, 'Suite Presidencial', NULL, 4, 6),
(218, '17', 1, 'Suite Presidencial', NULL, 4, 6),
(219, '18', 1, 'Suite Presidencial', NULL, 4, 6),
(220, '19', 1, 'Suite Presidencial', NULL, 4, 6),
(221, '20', 1, 'Suite Presidencial', NULL, 4, 6),
(222, '01', 1, 'Individual', NULL, 1, 7),
(223, '02', 1, 'Individual', NULL, 1, 7),
(224, '03', 1, 'Individual', NULL, 1, 7),
(225, '04', 1, 'Individual', NULL, 1, 7),
(226, '05', 1, 'Individual', NULL, 1, 7),
(227, '06', 1, 'Doble', NULL, 2, 7),
(228, '07', 1, 'Doble', NULL, 2, 7),
(229, '08', 1, 'Doble', NULL, 2, 7),
(230, '09', 1, 'Doble', NULL, 2, 7),
(231, '10', 1, 'Doble', NULL, 2, 7),
(232, '11', 1, 'Suite', NULL, 3, 7),
(233, '12', 1, 'Suite', NULL, 3, 7),
(234, '13', 1, 'Suite', NULL, 3, 7),
(235, '14', 1, 'Suite', NULL, 3, 7),
(236, '15', 1, 'Suite', NULL, 3, 7),
(237, '16', 1, 'Suite Presidencial', NULL, 4, 7),
(238, '17', 1, 'Suite Presidencial', NULL, 4, 7),
(239, '18', 1, 'Suite Presidencial', NULL, 4, 7),
(240, '19', 1, 'Suite Presidencial', NULL, 4, 7),
(241, '20', 1, 'Suite Presidencial', NULL, 4, 7),
(242, '01', 1, 'Individual', NULL, 1, 8),
(243, '02', 1, 'Individual', NULL, 1, 8),
(244, '03', 1, 'Individual', NULL, 1, 8),
(245, '04', 1, 'Individual', NULL, 1, 8),
(246, '05', 1, 'Individual', NULL, 1, 8),
(247, '06', 1, 'Doble', NULL, 2, 8),
(248, '07', 1, 'Doble', NULL, 2, 8),
(249, '08', 1, 'Doble', NULL, 2, 8),
(250, '09', 1, 'Doble', NULL, 2, 8),
(251, '10', 1, 'Doble', NULL, 2, 8),
(252, '11', 1, 'Suite', NULL, 3, 8),
(253, '12', 1, 'Suite', NULL, 3, 8),
(254, '13', 1, 'Suite', NULL, 3, 8),
(255, '14', 1, 'Suite', NULL, 3, 8),
(256, '15', 1, 'Suite', NULL, 3, 8),
(257, '16', 1, 'Suite Presidencial', NULL, 4, 8),
(258, '17', 1, 'Suite Presidencial', NULL, 4, 8),
(259, '18', 1, 'Suite Presidencial', NULL, 4, 8),
(260, '19', 1, 'Suite Presidencial', NULL, 4, 8),
(261, '20', 1, 'Suite Presidencial', NULL, 4, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hoteles`
--

CREATE TABLE `hoteles` (
  `IdHotel` int(11) NOT NULL,
  `NombreHotel` varchar(40) NOT NULL,
  `DireccionHotel` varchar(50) NOT NULL,
  `Estrellas` int(11) NOT NULL,
  `Ciudad` varchar(50) NOT NULL,
  `RIF` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `hoteles`
--

INSERT INTO `hoteles` (`IdHotel`, `NombreHotel`, `DireccionHotel`, `Estrellas`, `Ciudad`, `RIF`) VALUES
(1, 'Estrella 1', 'Margarita, Nueva Esparta', 5, 'Margarita', 'J-30254023'),
(2, 'Estrella 2', 'Coro, Falcón', 4, 'Coro', 'J-30268975'),
(3, 'Estrella 3', 'Maracaibo, Zulia', 3, 'Maracaibo', 'J-30279863'),
(4, 'Estrella 4', 'Mérida, Mérida', 5, 'Mérida', 'J-30216548'),
(5, 'Estrella 5', 'San Cristobal, Táchira', 5, 'San Cristobal', 'J-30226598'),
(6, 'Estrella 6', 'Caracas, Distrito Capital', 5, 'Caracas', 'J-30236548'),
(7, 'Estrella 7', 'Cumaná, Sucre', 4, 'Sucre', 'J-30259879'),
(8, 'Estrella 8', 'Palm Beach, Aruba', 5, 'Palm Beach', 'J-40659874');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id_Permiso` tinyint(1) NOT NULL,
  `desc_Permiso` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id_Permiso`, `desc_Permiso`) VALUES
(0, 'Cliente'),
(1, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrohabitacion`
--

CREATE TABLE `registrohabitacion` (
  `IdRegHab` int(11) NOT NULL,
  `Habitacion` int(11) NOT NULL,
  `Reserva` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `IdReserva` int(11) NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaFin` date NOT NULL,
  `FechaReserva` date NOT NULL,
  `PrecioReserva` double NOT NULL,
  `Usuario` int(11) NOT NULL,
  `EstadoReserva` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipohabitaciones`
--

CREATE TABLE `tipohabitaciones` (
  `IdTipoHab` int(11) NOT NULL,
  `DescripcionTipoHab` varchar(100) NOT NULL,
  `PrecioTipoHab` double NOT NULL,
  `NombreTipoHab` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipohabitaciones`
--

INSERT INTO `tipohabitaciones` (`IdTipoHab`, `DescripcionTipoHab`, `PrecioTipoHab`, `NombreTipoHab`) VALUES
(1, 'Posee una cama individual', 60, 'Simple'),
(2, 'Posee cama para dos personas', 80, 'Doble'),
(3, 'Lujosa habitación con 3 recámaras y dos baños', 120, 'Suite'),
(4, 'Lujosa habitación con 3 recámaras, 2 baños, terraza, jacuzzi y piscina', 160, 'Suite presidencial');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `IdUsuario` int(11) NOT NULL,
  `NombreUsuario` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ApellidoUsuario` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `CedulaUsuario` varchar(11) NOT NULL,
  `Pass` varchar(30) NOT NULL,
  `User` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Telefono` varchar(15) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Permisos` tinyint(1) NOT NULL,
  `activo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`IdUsuario`, `NombreUsuario`, `ApellidoUsuario`, `CedulaUsuario`, `Pass`, `User`, `Email`, `Telefono`, `Direccion`, `Permisos`, `activo`) VALUES
(1, '', '', '0', '8estrellas', 'Admin8e', '', '0', '', 1, 1),
(2, 'Jesus Enrique', 'Soto', 'V-25778993', '25778993', 'itsyasus', 'jesusenriquesotoa@gmail.com', '+5804246587954', 'Valle frio', 0, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  ADD PRIMARY KEY (`IdHabitacion`),
  ADD KEY `Hotel` (`Hotel`),
  ADD KEY `TipoHabitacion` (`TipoHabitacion`),
  ADD KEY `IdHabitacion` (`IdHabitacion`),
  ADD KEY `IdHabitacion_2` (`IdHabitacion`),
  ADD KEY `IdHabitacion_3` (`IdHabitacion`);

--
-- Indices de la tabla `hoteles`
--
ALTER TABLE `hoteles`
  ADD PRIMARY KEY (`IdHotel`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id_Permiso`);

--
-- Indices de la tabla `registrohabitacion`
--
ALTER TABLE `registrohabitacion`
  ADD PRIMARY KEY (`IdRegHab`),
  ADD KEY `Habitacion` (`Habitacion`,`Reserva`),
  ADD KEY `Reserva` (`Reserva`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`IdReserva`),
  ADD KEY `Usuario` (`Usuario`);

--
-- Indices de la tabla `tipohabitaciones`
--
ALTER TABLE `tipohabitaciones`
  ADD PRIMARY KEY (`IdTipoHab`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`IdUsuario`),
  ADD UNIQUE KEY `CedulaUsuario` (`CedulaUsuario`),
  ADD UNIQUE KEY `User` (`User`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Telefono` (`Telefono`),
  ADD KEY `Permisos` (`Permisos`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  MODIFY `IdHabitacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=262;

--
-- AUTO_INCREMENT de la tabla `hoteles`
--
ALTER TABLE `hoteles`
  MODIFY `IdHotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `registrohabitacion`
--
ALTER TABLE `registrohabitacion`
  MODIFY `IdRegHab` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `IdReserva` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipohabitaciones`
--
ALTER TABLE `tipohabitaciones`
  MODIFY `IdTipoHab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  ADD CONSTRAINT `habitaciones_ibfk_1` FOREIGN KEY (`Hotel`) REFERENCES `hoteles` (`IdHotel`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `habitaciones_ibfk_2` FOREIGN KEY (`TipoHabitacion`) REFERENCES `tipohabitaciones` (`IdTipoHab`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD CONSTRAINT `permisos_ibfk_1` FOREIGN KEY (`id_Permiso`) REFERENCES `usuarios` (`Permisos`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `registrohabitacion`
--
ALTER TABLE `registrohabitacion`
  ADD CONSTRAINT `registrohabitacion_ibfk_1` FOREIGN KEY (`Reserva`) REFERENCES `reservas` (`IdReserva`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `registrohabitacion_ibfk_2` FOREIGN KEY (`Habitacion`) REFERENCES `habitaciones` (`IdHabitacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`Usuario`) REFERENCES `usuarios` (`IdUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
