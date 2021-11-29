-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-02-2021 a las 14:42:35
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

create database inscripcion;
use inscripcion;
-- Base de datos: `inscripcion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `codMatri_alumno` char(8) NOT NULL,
  `dni_alumno` char(8) NOT NULL,
  `contrasenia_alumno` varchar(8) NOT NULL,
  `nombres_alumno` varchar(100) NOT NULL,
  `apellidos_alumno` varchar(100) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `fechNac_alumno` varchar(15) NOT NULL,
  `direccion_alumno` varchar(100) NOT NULL,
  `telefPer_alumno` char(9) DEFAULT NULL,
  `telefCasa_alumno` char(9) DEFAULT NULL,
  `email_alumno` varchar(100) NOT NULL,
  `especialidad_alumno` varchar(50) NOT NULL,
  `ciclo_alumno` char(1) NOT NULL,
  `tipo_alumno` char(2) NOT NULL,
  `codOperBan_alumno` varchar(15) NOT NULL,
  `obser_alumno` varchar(1000) DEFAULT NULL,
  `num_alumno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`num_alumno`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `num_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
