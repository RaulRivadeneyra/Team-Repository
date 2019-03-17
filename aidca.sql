-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-03-2019 a las 02:27:34
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
-- Base de datos: `aidca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(100) NOT NULL,
  `Usuario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Password` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Direccion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `CP` int(5) NOT NULL,
  `Nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `Usuario`, `Password`, `Email`, `Direccion`, `CP`, `Nombre`) VALUES
(3, 'Usuario1', 'pass1', 'usuario1@gmail.com', 'direccion 1', 12345, 'Centro de pruebas1'),
(4, 'Usuario2', 'pass2', 'usuario2@gmail.com', 'direccion 2', 23456, 'Centro de pruebas2'),
(5, 'Carlos', 'pass', 'carlos@gmail.com', 'direccion prueba', 34567, 'Centro de pruebas correo'),
(6, 'usuario4', 'pass4', 'usuario4@gmail.com', 'direccion 4', 45678, 'Centro usuario 3'),
(7, 'usuario5', 'pass5', 'usuario5@gmail.com', 'direccion 5', 56789, 'Centro usuario 5'),
(8, 'usuario6', 'pass6', 'usuario6@gmail.com', 'direccion 6', 56789, 'Centro usuario 6');

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
