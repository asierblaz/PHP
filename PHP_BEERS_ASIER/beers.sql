-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-04-2021 a las 10:34:15
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.3.27

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
  `picture` varchar(500) DEFAULT NULL,
  `breweryid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `beer`
--

INSERT INTO `beer` (`id`, `name`, `picture`, `breweryid`) VALUES
(1, 'Estrella Galicia', 'img/estrella.png', 1),
(2, 'Amstel', 'img/nofoto.png', 2),
(4, 'Steinburg', 'img/bote-de-camuflaje---lata-de-ocultaci_n-imitaci_n-cerveza-_steinburg_.png', 3),
(5, 'Mahoo', 'img/1956003194[1].jpg', 1);

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
(1, 'Amsterdam', '22'),
(2, 'Madrid', '33'),
(3, 'Polonia', '122');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `username` varchar(200) COLLATE utf32_spanish_ci NOT NULL,
  `password` varchar(2000) COLLATE utf32_spanish_ci NOT NULL,
  `rol` varchar(2000) COLLATE utf32_spanish_ci NOT NULL,
  `imagen` varchar(2000) COLLATE utf32_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`username`, `password`, `rol`, `imagen`) VALUES
('asier', 'asier', 'user', 'img/fotoperfil.png'),
('admin', 'admin', 'admin', 'img/admin.jpg');

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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `beer`
--
ALTER TABLE `beer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
