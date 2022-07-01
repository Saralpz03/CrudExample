-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-05-2020 a las 20:11:58
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
-- Base de datos: `discoteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disco`
--

CREATE TABLE `disco` (
  `id` int(11) NOT NULL,
  `titulo` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `anio` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `autor` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `portada` varchar(300) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'generica.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `disco`
--

INSERT INTO `disco` (`id`, `titulo`, `anio`, `autor`, `portada`) VALUES
(1, 'Blonde on Blonde', '1996', 'Bob Dylan', 'blonde.jpg'),
(2, 'Nevermind', '1991', 'Nirvana', 'nevermind.jpg'),
(3, 'The Doors', '1967', 'The Doors', 'doors.jpg'),
(4, 'Back in Black', '1980', 'ACDC', 'acdc.jpg'),
(12, 'Thriller ', '1982', 'Michael Jackson', 'thriller.jpg'),
(15, 'The bodyguard', '1992', 'W. Houston', 'bodyguard.jpg'),
(16, 'Their Greatest Hits', '1976', 'The Eagles', 'eagles.jpg'),
(17, 'Rumours ', '1977', 'Fletwood Mac', 'barbas.jpg'),
(18, 'Saturday Night Fever', '1977', ' Bee Gees y varios artistas', 'sabado.jpg'),
(19, 'El fantasma de la ópera', '2004', 'Andrew Lloyd Webber', 'fantasma.jpg'),
(20, 'Come on over', '1997', 'Shania Twain', 'come.jpg'),
(21, 'Led Zeppelin IV', '1971', 'Led Zeppelin', 'LedZeppelin.jpg'),
(22, 'The Dark Side Of The Moon', '1973', 'Pink Floid', 'moon.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `disco`
--
ALTER TABLE `disco`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `disco`
--
ALTER TABLE `disco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
