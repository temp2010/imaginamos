-- phpMyAdmin SQL Dump
-- version 4.4.13.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 29-11-2015 a las 10:33:01
-- Versión del servidor: 5.6.27-0ubuntu1
-- Versión de PHP: 5.6.11-1ubuntu3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `imaginamos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Configuracion`
--

CREATE TABLE IF NOT EXISTS `Configuracion` (
  `id` int(11) NOT NULL COMMENT 'identificador',
  `nombre` varchar(32) NOT NULL COMMENT 'nombre',
  `parametro` varchar(128) NOT NULL COMMENT 'parametro'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='Parametros del sistema';

--
-- Volcado de datos para la tabla `Configuracion`
--

INSERT INTO `Configuracion` (`id`, `nombre`, `parametro`) VALUES
(1, 'logo', 'banner.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Contactenos`
--

CREATE TABLE IF NOT EXISTS `Contactenos` (
  `id` int(11) NOT NULL COMMENT 'identificador',
  `nombre` varchar(128) NOT NULL COMMENT 'nombre',
  `correo` varchar(128) NOT NULL COMMENT 'correo',
  `mensaje` text NOT NULL COMMENT 'mensaje'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COMMENT='Contactenos del sistema';

--
-- Volcado de datos para la tabla `Contactenos`
--

INSERT INTO `Contactenos` (`id`, `nombre`, `correo`, `mensaje`) VALUES
(1, 'a', 'a@a.com', '123'),
(2, 'aaa', 'temp2010@msn.com', 'aa'),
(3, 'aa', 'temp2010@msn.com', 'mensaje '),
(4, 'pepe', 'temp2010g@gmail.com', 'mensaje 1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Productos`
--

CREATE TABLE IF NOT EXISTS `Productos` (
  `id` int(11) NOT NULL COMMENT 'identificador',
  `nombre` varchar(128) NOT NULL COMMENT 'nombre',
  `imagen` varchar(128) NOT NULL COMMENT 'imagen'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='Productos del sistema';

--
-- Volcado de datos para la tabla `Productos`
--

INSERT INTO `Productos` (`id`, `nombre`, `imagen`) VALUES
(1, 'uno', 'p565a79533326f1.80237970.png'),
(2, 'dos', 'd565a775240b843.89251690.jpg'),
(3, 'galletas 33', 'p565b19f733d748.97293210.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE IF NOT EXISTS `Usuarios` (
  `id` int(11) NOT NULL COMMENT 'identificador',
  `nombre` varchar(128) NOT NULL COMMENT 'nombre',
  `usuario` varchar(128) NOT NULL COMMENT 'usuario (correo)',
  `contrasena` varchar(32) NOT NULL COMMENT 'Contraseña',
  `imagen` varchar(128) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1 COMMENT='Usuarios del sistema';

--
-- Volcado de datos para la tabla `Usuarios`
--

INSERT INTO `Usuarios` (`id`, `nombre`, `usuario`, `contrasena`, `imagen`) VALUES
(1, 'root', 'root@aracniastudios.com', '202cb962ac59075b964b07152d234b70', 'p565a7a3fd8ec34.05310113.jpg'),
(5, 'a', 'a@peajetron.com', '202cb962ac59075b964b07152d234b70', NULL),
(6, 'a', 'temp2010@msn.com', '202cb962ac59075b964b07152d234b70', 'u565a7ab057f367.99769239.jpg'),
(7, 'pru', 'b@a.com', '202cb962ac59075b964b07152d234b70', 'icono-mujer.png'),
(8, 'c', 'c@a.com', '202cb962ac59075b964b07152d234b70', 'icono-mujer.png'),
(9, 'd', 'd@a.com', '123', 'icono-mujer.png'),
(10, 'e', 'e@a.com', '202cb962ac59075b964b07152d234b70', 'perfil.png'),
(11, 'f', 'f@a.com', '250cf8b51c773f3f8dc8b4be867a9a02', 'perfil.png'),
(12, 'g', 'g@a.com', '123', 'icono-mujer.png'),
(14, 'p', 'p@a.com', '202cb962ac59075b964b07152d234b70', 'u565a7985e710b3.26058005.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Configuracion`
--
ALTER TABLE `Configuracion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Contactenos`
--
ALTER TABLE `Contactenos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Productos`
--
ALTER TABLE `Productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Configuracion`
--
ALTER TABLE `Configuracion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identificador',AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `Contactenos`
--
ALTER TABLE `Contactenos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identificador',AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `Productos`
--
ALTER TABLE `Productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identificador',AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identificador',AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
