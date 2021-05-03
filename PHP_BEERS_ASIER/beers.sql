-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-05-2021 a las 11:17:54
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `beers`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beer`
--

CREATE TABLE `beer` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `picture` varchar(500) DEFAULT 'img/nofoto.png',
  `breweryid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `beer`
--

INSERT INTO `beer` (`id`, `name`, `picture`, `breweryid`) VALUES
(8, 'Heineken', 'img/beers.png', 1),
(11, 'Heineken', 'img/nofoto.png', 1),
(13, 'dgg', 'img/papelera.png', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `brewery`
--

CREATE TABLE `brewery` (
  `id` int(11) NOT NULL,
  `nameb` varchar(255) NOT NULL,
  `countryId` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `brewery`
--

INSERT INTO `brewery` (`id`, `nameb`, `countryId`) VALUES
(1, 'Amsterdam', 'Holanda'),
(2, 'Madrid', 'Espainia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `username` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `rol` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(2000) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(2000) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`username`, `password`, `rol`, `imagen`, `email`) VALUES
('admin', '$2y$10$IXL.ajOvkWFLdPMK8TQSLuan26vs0kFVMqzCjlIUzAk6vEFW2SWIy', 'admin', 'img/SeÃ±orX.jpg', 'admin@admin.es'),
('raul', '$2y$10$OSPWP6LKAHWkl1Xa1flawurDwQOdcCVsU55XWreEf9WfsfRKai1zS', 'usuario', 'img/EMAIL.jpg', 'raul@raul.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `beer`
--
ALTER TABLE `beer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `breweryid` (`breweryid`);

--
-- Indices de la tabla `brewery`
--
ALTER TABLE `brewery`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `beer`
--
ALTER TABLE `beer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `beer`
--
ALTER TABLE `beer`
  ADD CONSTRAINT `beer_ibfk_1` FOREIGN KEY (`breweryid`) REFERENCES `brewery` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
