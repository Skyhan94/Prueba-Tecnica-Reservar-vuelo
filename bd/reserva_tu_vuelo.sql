-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-01-2024 a las 21:35:05
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
-- Base de datos: `reserva_tu_vuelo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pasajero`
--

CREATE TABLE `pasajero` (
  `tipoIdentificacion` varchar(50) NOT NULL,
  `identificacion` int(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contraseña` varchar(50) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `codigo_Postal` int(50) NOT NULL,
  `telefono` int(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pasajero`
--

INSERT INTO `pasajero` (`tipoIdentificacion`, `identificacion`, `usuario`, `contraseña`, `nombre`, `pais`, `ciudad`, `direccion`, `codigo_Postal`, `telefono`, `email`) VALUES
('Cedula de ciudadania', 1110553938, 'caosis', '12345', 'Cristian Johan Varon Varon', 'Colombia', 'Bogota', 'Calle 70 a bis #111 c 89', 1234, 2147483647, 'cjvv_5730@hotmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pasajero`
--
ALTER TABLE `pasajero`
  ADD PRIMARY KEY (`identificacion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
