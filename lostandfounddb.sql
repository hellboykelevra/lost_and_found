-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-01-2025 a las 15:28:28
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
-- Base de datos: `lostandfounddb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lost_object`
--

CREATE TABLE `lost_object` (
  `Id` int(11) NOT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `initial_location` varchar(255) DEFAULT NULL,
  `final_location` varchar(255) DEFAULT NULL,
  `found` tinyint(1) DEFAULT NULL,
  `found_date` date DEFAULT NULL,
  `img_path` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `lost_object`
--

INSERT INTO `lost_object` (`Id`, `caption`, `initial_location`, `final_location`, `found`, `found_date`, `img_path`, `file_name`) VALUES
(1, ' Goku Rose', 'En Namek', 'En la Tierra', NULL, '1988-09-20', 'uploads/rose_goku.jpg', 'rose_goku.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `lost_object`
--
ALTER TABLE `lost_object`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `lost_object`
--
ALTER TABLE `lost_object`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
