-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2022 a las 02:14:33
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_florecer`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `celular` int(11) NOT NULL,
  `correo` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id`, `nombres`, `apellidos`, `celular`, `correo`) VALUES
(1, 'Helio', 'Silba', 11111111, 'hpjrvs@gmail.com'),
(2, 'Helio', 'Silba', 11111111, 'hpjrs@gmail.com'),
(3, 'Nohemy', 'Correa', 1112121212, 'nohemy@hmdad.com'),
(4, 'Juan ', 'Silba', 2147483647, 'asjahsajsha@arroz.com'),
(5, 'arros', 'arrors', 212121212, 'dsdss@globo.com'),
(6, 'karla ', 'polo', 545454545, 'karla@gmail'),
(7, 'Carolina', 'cielo', 3456567, 'carolina@gmail.com'),
(8, 'Candy', 'Rubiano', 2147483647, 'c@gmail.com'),
(9, 'paola', 'cardenas', 322435, 'p@gmail.com'),
(10, 'stefa', 'romero', 35665, 'ste@gmail.com'),
(11, 'camila', 'polo', 2147483647, 'camila@gmail.com'),
(12, 'eerrerr', 'cijnhoij', 347890989, 'ee@gmail.com'),
(13, 'hola', 'holas', 310, 'y@gmail.com'),
(14, 'Helio', 'Silva', 2147483647, 'helio@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
