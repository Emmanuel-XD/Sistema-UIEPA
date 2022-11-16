-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2022 at 03:42 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uiepa`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `fecha`) VALUES
(1, 'ENFERMERIA', '2022-11-11 18:08:33'),
(2, 'GASTRONOMIA', '2022-11-11 18:09:20'),
(3, 'AGROINDUSTRIAL', '2022-11-11 18:10:57'),
(4, 'BIOTECNOLOGIA', '2022-11-11 18:11:13'),
(5, 'VETERINARIA', '2022-11-11 18:11:25');

-- --------------------------------------------------------

--
-- Table structure for table `insumo`
--

CREATE TABLE `insumo` (
  `id` int(11) NOT NULL,
  `fecha_entrada` date NOT NULL,
  `cantidad` int(50) NOT NULL,
  `unidad` varchar(150) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `fecha_caducidad` date NOT NULL,
  `marca` varchar(150) NOT NULL,
  `existencia` varchar(150) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `entregado` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `insumo`
--

INSERT INTO `insumo` (`id`, `fecha_entrada`, `cantidad`, `unidad`, `nombre`, `fecha_caducidad`, `marca`, `existencia`, `categoria`, `entregado`) VALUES
(1, '2022-11-11', 100, 'PZA', 'usuario', '2022-11-26', 'Prueba', '10', 'GASTRONOMIA', 0),
(3, '2022-11-17', 100, 'PZAss', 'Isnumo', '2022-11-24', 'Prueba', '10', 'VETERINARIA', 0),
(4, '2022-11-15', 200, 'PZA', 'Material', '2022-12-01', 'FERMONT', '10', 'VETERINARIA', 0),
(8, '2022-11-13', 1, 'Litros', 'test', '2022-12-07', 'a2', '10', 'ENFERMERIA', 1);

-- --------------------------------------------------------

--
-- Table structure for table `permisos`
--

CREATE TABLE `permisos` (
  `id` int(11) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permisos`
--

INSERT INTO `permisos` (`id`, `rol`) VALUES
(1, 'Administrator'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
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
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `username`, `password`, `fecha`, `rol_id`) VALUES
(17, 'prueba', '32fe', '$2y$05$zPPpyccxeYxQVj4fqgSE0OvfIYhD1ndon.P3vdmBxJmQfCZ7mJ1fe', '2022-11-16 02:35:37', 1),
(24, 'Fernando', 'fer231', '$2y$05$Y5HdWNQxjz5Bg3lbSOblku7fAV7PxJ7TUore9jXz7fUM5tgv2bXKq', '2022-11-16 02:23:53', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insumo`
--
ALTER TABLE `insumo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `permisos` (`rol_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `insumo`
--
ALTER TABLE `insumo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `permisos` FOREIGN KEY (`rol_id`) REFERENCES `permisos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
