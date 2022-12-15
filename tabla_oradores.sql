-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: sql111.epizy.com
-- Tiempo de generación: 15-12-2022 a las 18:04:24
-- Versión del servidor: 10.3.27-MariaDB
-- Versión de PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `epiz_33208411_codoacodo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_oradores`
--

CREATE TABLE `tabla_oradores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(80) COLLATE latin1_spanish_ci NOT NULL,
  `apellido` varchar(80) COLLATE latin1_spanish_ci NOT NULL,
  `tema` text COLLATE latin1_spanish_ci NOT NULL,
  `inscripcion` date NOT NULL,
  `dni` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `tabla_oradores`
--

INSERT INTO `tabla_oradores` (`id`, `nombre`, `apellido`, `tema`, `inscripcion`, `dni`) VALUES
(1, 'Maximiliano Gabriel', 'Perez', 'Computacion y redes sociales.', '2022-12-15', 123459),
(2, 'Josefina Marianela', 'Ferreyra', 'PHP, JAVASCRIPT, ETC.', '2022-12-14', 123458),
(20, 'Lucho', 'Valenzuela', 'Tablas dinamicas', '2022-12-14', 123457),
(24, 'Mauro', 'Zeta', 'Tema', '2022-12-15', 123456);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tabla_oradores`
--
ALTER TABLE `tabla_oradores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dni` (`dni`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tabla_oradores`
--
ALTER TABLE `tabla_oradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
