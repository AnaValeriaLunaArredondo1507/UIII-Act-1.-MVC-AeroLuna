-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2023 a las 21:30:42
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_AeroLuna`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Vuelos`
--

CREATE TABLE `vuelos` (
  `ID` int(10) NOT NULL,
  `num_vuelo` varchar(10) NOT NULL,
  `hora_salida` time NOT NULL,
  `fecha_salida` date NOT NULL,
  `hora_llegada` time NOT NULL,
  `cant_pasajeros` int(15) NOT NULL,
  `horas_de_vuelo` varchar(10) NOT NULL,
  `lugar_salida` varchar(100) NOT NULL,
  `destino` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Vuelos`
--

INSERT INTO `Vuelos` (`ID`, `num_vuelo`, `hora_salida`, `fecha_salida`, `hora_llegada`, `cant_pasajeros`, `horas_de_vuelo`, `lugar_salida`, `destino`) VALUES
(2, 'V1507', '20:30:00', '2023-11-22', '23:30:00', 143, '3:00', 'Ciudad Juárez', 'Cancún');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Vuelos`
--
ALTER TABLE `Vuelos`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Vuelos`
--
ALTER TABLE `Vuelos`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
