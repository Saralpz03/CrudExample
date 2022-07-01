-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-05-2020 a las 20:12:10
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_usuario`
--

CREATE TABLE `t_usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_alta` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `t_usuario`
--

INSERT INTO `t_usuario` (`id`, `usuario`, `password`, `fecha_alta`) VALUES
(1, 'sara', '1234', '2020-05-12 17:17:40'),
(2, 'sara2', '3456', '2020-05-12 17:19:04'),
(4, 'sara3', '9376', '2020-05-12 17:40:14'),
(5, 'sara8', '624332f', '2020-05-12 17:44:22'),
(8, 'sara', '1234', '2020-05-12 18:53:17'),
(9, 'd', '1234', '2020-05-18 18:37:50'),
(10, 'gabriel', '9090', '2020-05-18 22:53:59'),
(11, 'juan', '2222', '2020-05-18 23:02:00'),
(12, 'silvia', '123456', '2020-05-19 18:08:26');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_usuario`
--
ALTER TABLE `t_usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_usuario`
--
ALTER TABLE `t_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
