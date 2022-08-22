-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-08-2022 a las 19:41:49
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE `tareas` (
  `id_tarea` int(11) NOT NULL,
  `decodificador` int(11) NOT NULL,
  `titulo` varchar(70) NOT NULL,
  `desc_tarea` varchar(500) NOT NULL,
  `fecha` date NOT NULL,
  `progreso` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`id_tarea`, `decodificador`, `titulo`, `desc_tarea`, `fecha`, `progreso`) VALUES
(1, 1, 'Ir a comer una hamburguesa', 'asdasdasd', '2021-11-25', 'EN CURSO'),
(4, 4, 'asdasdasd', 'asdasdasasd', '2022-04-25', 'EN CURSO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas_finalizadas`
--

CREATE TABLE `tareas_finalizadas` (
  `id_tarea` int(11) NOT NULL,
  `decodificador` int(11) NOT NULL,
  `titulo` varchar(70) NOT NULL,
  `desc_tarea` varchar(500) NOT NULL,
  `fecha` date NOT NULL,
  `progreso` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(70) NOT NULL,
  `contraseña` varchar(70) NOT NULL,
  `correo_electronico` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `contraseña`, `correo_electronico`) VALUES
(1, 'damdam', '25d55ad283aa400af464c76d713c07ad', 'dam@gmail.com'),
(2, 'damian2', '25d55ad283aa400af464c76d713c07ad', 'dam2@gmail.com'),
(3, 'damsh2', 'f127e43985c1e31d0fbcbdd479658ddf', 'damsh2@gmail.com'),
(4, 'damdamdam', '540d449b68d37e7853ed06936c50000a', 'damdamdam@gmail.com'),
(5, 'usuarionuevo', '24701f76bbcf6826e4ec83502fa8b799', 'usuarionuevo@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`id_tarea`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id_tarea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
