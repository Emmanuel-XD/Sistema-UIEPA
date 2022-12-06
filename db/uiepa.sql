-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2022 a las 16:25:08
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `uiepa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `fecha`) VALUES
(1, 'ENFERMERIA', '2022-11-11 18:08:33'),
(2, 'GASTRONOMIA', '2022-11-11 18:09:20'),
(3, 'AGROINDUSTRIAL', '2022-11-11 18:10:57'),
(4, 'BIOTECNOLOGIA', '2022-11-11 18:11:13'),
(5, 'VETERINARIA', '2022-11-11 18:11:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `insumo`
--

CREATE TABLE `insumo` (
  `id` int(11) NOT NULL,
  `fecha_entrada` date NOT NULL,
  `cantidad` int(50) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `unidad` varchar(150) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `fecha_caducidad` date NOT NULL,
  `marca` varchar(150) NOT NULL,
  `existencia` varchar(150) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `entregado` int(10) NOT NULL,
  `recibido` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `insumo`
--

INSERT INTO `insumo` (`id`, `fecha_entrada`, `cantidad`, `tipo`, `unidad`, `nombre`, `fecha_caducidad`, `marca`, `existencia`, `categoria`, `entregado`, `recibido`) VALUES
(4, '2022-11-15', 10, 'Consumibles medicos', 'Litros', 'Material', '2022-12-01', 'FERMONT', '8', 'VETERINARIA', 2, 200),
(8, '2022-11-13', 10, 'Farmacos', 'Litros', 'test', '2022-12-07', 'a2', '6', 'VETERINARIA', 2, 0),
(12, '2022-11-16', 15, 'Insumos', 'Piezas', 'fff', '2022-11-10', 'Prueba', '0', 'GASTRONOMIA', 15, 5),
(15, '2022-11-10', 30, 'Farmacos', 'Piezas', 'jhfhgj', '2022-11-10', 'FERMONT', '5', 'AGROINDUSTRIAL', 5, 100),
(16, '2022-11-24', 20, 'Consumibles laboratorio', 'Piezas', 'gfhjfjg', '2022-11-09', 'Prueba', '5', 'BIOTECNOLOGIA', 5, 50),
(21, '2022-11-10', 20, 'Farmacos', 'Mililitros', 'estrest', '2022-11-04', 'Prueba', '5', 'VETERINARIA', 5, 0),
(22, '2022-12-08', 10, 'Consumibles medicos', 'Mililitros', 'fbcfg', '2022-12-13', '20', '5', 'VETERINARIA', 5, 0),
(26, '2022-12-01', 25, 'Insumos', 'Metros', 'Alumno', '2022-12-20', 'dfgfdh', '5', 'ENFERMERIA', 15, 5),
(30, '2022-12-06', 20, 'Reactivos', 'Litros', 'user', '2022-12-15', 'Prueba', '5', 'ENFERMERIA', 5, 0),
(31, '2022-12-21', 10, 'Consumibles laboratorio', 'Paquetes', 'vdfvbgfdx', '2022-12-14', 'FERMONT', '5', 'ENFERMERIA', 5, 200);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id` int(11) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id`, `rol`) VALUES
(1, 'Administrator'),
(2, 'User');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `rol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `username`, `password`, `fecha`, `rol_id`) VALUES
(26, 'Emanuel', 'Emanuel', '$2y$05$HS5IA8LOcQDTnlgvb7ojGeMBlAb7NGtW33MNXjL2llPoacPBIIMEW', '2022-11-16 06:11:26', 1),
(30, 'usuario', 'usuario', '$2y$05$Rz5brhBVP7YlFs5x5klgTOYLYqHOyH6rqfMZasG6sKAI5giTT4TXe', '2022-12-02 06:04:15', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `insumo`
--
ALTER TABLE `insumo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `permisos` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `insumo`
--
ALTER TABLE `insumo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `permisos` FOREIGN KEY (`rol_id`) REFERENCES `permisos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
