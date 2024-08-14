-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-08-2024 a las 13:39:17
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `petfiledb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `especie` varchar(255) NOT NULL,
  `raza` varchar(255) NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `peso` decimal(5,2) NOT NULL,
  `cc` varchar(255) NOT NULL,
  `edad` int(11) NOT NULL,
  `color` varchar(255) NOT NULL,
  `tipo_alimentacion` varchar(255) NOT NULL,
  `motivo_consulta` text NOT NULL,
  `fc` varchar(50) NOT NULL,
  `fr` varchar(50) NOT NULL,
  `linfonodos` varchar(255) NOT NULL,
  `mucosas` varchar(255) NOT NULL,
  `dh` varchar(50) NOT NULL,
  `pulso` varchar(50) NOT NULL,
  `tllc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id`, `nombre`, `especie`, `raza`, `sexo`, `peso`, `cc`, `edad`, `color`, `tipo_alimentacion`, `motivo_consulta`, `fc`, `fr`, `linfonodos`, `mucosas`, `dh`, `pulso`, `tllc`) VALUES
(1, '1', '1', '1', '1', 11.00, '1', 11, '111', '1', '1', '1', '1', '11', '1', '1', '1', '1'),
(2, 'b', 'a', '1', '2', 3.00, '4', 5, '6', '7', '8', '9', '10', '11', '12', '13', '14', '15');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
