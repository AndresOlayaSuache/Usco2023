-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-11-2023 a las 04:02:28
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombres` varchar(40) DEFAULT NULL,
  `apellidos` varchar(40) DEFAULT NULL,
  `usuario` varchar(25) DEFAULT NULL,
  `clave` varchar(255) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `token_expira` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `apellidos`, `usuario`, `clave`, `correo`, `token`, `token_expira`) VALUES
(1, 'Andres', 'Olaya', 'Andres1', '$2y$10$YPL1UpR4p9Qd32ePzA2Rbu8wTom46UOBZtL.5bIT0PdypVh5HKKBW', 'andres@gmail.com', NULL, NULL),
(2, 'Nicolas', 'Echeverry', 'Nicolas1', '$2y$10$s8FxBzwwBem6fgJTQ6C9auLM4lahcpCwPBh1HRu7nZCGZ/1QhnhMC', 'nicolas@gmail.com', NULL, NULL),
(3, 'Miguel', 'Puentes', 'MiguelP', '$2y$10$M7XmMaBli6zeHylb2ydVnew.gZ2CSIkpvgDNkutkoQoU4IElC1jNy', 'miguel@gmail.com', NULL, NULL),
(4, 'Matias', 'Tello', 'Matias T', '$2y$10$0TTw3fbRPoIq7RWJI..B/ORHU/lIXAvpaWQo5k8NNZwNpzI4ouhda', 'matias@gmail.com', NULL, NULL),
(7, 'Andres Felipe', 'Olaya Suache', 'Andres Olaya', '$2y$10$ylFGC4ptcZyygsSyHNjiVuXcIwzGQ95cgooKvrt5A1031lrXD8Ew6', 'hola@gmail.com', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
