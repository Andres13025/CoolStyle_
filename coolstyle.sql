-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-11-2021 a las 19:48:46
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `coolstyle`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `codigo_c` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL
); 
--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`codigo_c`, `nombre`, `usuario`, `pass`, `direccion`, `telefono`) VALUES
(1, 'carlos andres valero', 'carlosandresvalerovelasco@gmail.com', '$2y$10$1QfMvTJLlOQH.0zOgyUvkemcrmB2zJp/bQgJF5nTEJ/s6yj4XejoG', '', ''),
(9, 'jhon', 'carlosandresvalerovelasco@gmail.com', '$2y$10$QkDQJqOtMwxpZp2Phg0Miep8zNoUf5NBmUnQVZHZog0Vwj7PAmra2', '', ''),
(10, 'julian', 'julian@gmail.com', '$2y$10$UwVrUnqsSHTHZ6zcz5zAheQnI9haZx6v1DAa/fchb56eBSYhcDw/y', '', ''),
(11, 'ingrid natalia valero', 'ingrid@gmail.com', '$2y$10$0JGPJTRZBzqIljpsoqQCz.L6PMMfNmm62Qqwu/TAHLqnushHp1NQe', '', ''),
(12, 'julian torres', 'juliantorres@gmail.com', '$2y$10$O79Tgkl0tcJWdHPhlXzeeu61DrJNZ5gLQLV9b8.rDbG.MHdFF8SYe', '', ''),
(13, 'carlos andres valero', 'cavvid@hotmail.com', '$2y$10$TzthaupoxwRa0bw46U3peuc1m8CVntsXS62tayjLCR0X5GGYy3Gwq', '', ''),
(14, 'jonathan pascagaza', 'jonathan@gmail.com', '$2y$10$qi40W1mKZv4oRCDFppdzsekvZn7BVkiUhz71RGZRjq9QW2OXG5g7C', '', ''),
(15, 'parce', 'parce@gmail.com', '$2y$10$p1ZctY5Q5aE2JNzPqnsJrO7J/nJkRLDo0dYq8kBatDb8L0Blen1Nq', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envio`
--

CREATE TABLE `envio` (
  `codigo_e` int(11) NOT NULL,
  `fecha_e` date NOT NULL,
  `metodo_e` varchar(100) NOT NULL,
  `codigo_p3` int(11) NOT NULL
) ;

--
-- Volcado de datos para la tabla `envio`
--

INSERT INTO `envio` (`codigo_e`, `fecha_e`, `metodo_e`, `codigo_p3`) VALUES
(7, '2020-11-19', 'servientrega', 2),
(20, '2021-03-12', 'servientrega', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `codigo_p` int(11) NOT NULL,
  `calle` varchar(100) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `fecha_p` date NOT NULL,
  `marca` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `carrito` varchar(100) NOT NULL
) ;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`codigo_p`, `calle`, `ciudad`, `fecha_p`, `marca`, `color`, `carrito`) VALUES
(3, 'calle 100 cr 45-23', 'BOGOTA', '2020-11-18', 'adidas', 'blanco', 'SI'),
(11, 'calle 100', 'bogota', '2021-01-23', 'puma', 'rojo', 'SI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `codigo_pr` int(11) NOT NULL,
  `nombre_producto` varchar(100) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` bigint(20) NOT NULL,
  `talla` varchar(10) NOT NULL
) ;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`codigo_pr`, `nombre_producto`, `cantidad`, `precio`, `talla`) VALUES
(15, 'zapatos', 12, 100000, '40'),
(16, 'chaqueta', 15, 120000, 'S'),
(18, 'bufanda', 15, 15000, 'M'),
(19, 'tennis adidas blancos', 100, 150000, '40'),
(20, 'zapatos', 12, 120000, '36'),
(39, 'Botas negras', 30, 235000, '30'),
(40, 'Zapatos Nike Blancos', 20, 80000, '36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `codigo_a` int(11) NOT NULL,
  `nombre_proveedor` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `correo` varchar(100) NOT NULL
) ;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`codigo_a`, `nombre_proveedor`, `direccion`, `telefono`, `correo`) VALUES
(1, 'NIKE', 'CALLE 100', '3128121982', 'nike@gmail.com'),
(13, 'NIKE', 'CALLE 200', '3112725290', 'NIKE@NIKE.COM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reclamos`
--

CREATE TABLE `reclamos` (
  `codigo_r` int(11) NOT NULL,
  `observaciones` varchar(200) NOT NULL,
  `codigo_e1` int(11) NOT NULL
) ;

--
-- Volcado de datos para la tabla `reclamos`
--

INSERT INTO `reclamos` (`codigo_r`, `observaciones`, `codigo_e1`) VALUES
(1, 'tenis demasiado pequenos las medidas no concuerdan', 1),
(9, 'prueba de queja', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_union1`
--

CREATE TABLE `tabla_union1` (
  `codigo_c1` int(11) NOT NULL,
  `codigo_p1` int(11) NOT NULL
) ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_union2`
--

CREATE TABLE `tabla_union2` (
  `codigo_p2` int(11) NOT NULL,
  `codigo_pr1` int(11) NOT NULL
) ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_union3`
--

CREATE TABLE `tabla_union3` (
  `codigo_pr2` int(11) NOT NULL,
  `codigo_a1` int(11) NOT NULL
) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`codigo_c`);

--
-- Indices de la tabla `envio`
--
ALTER TABLE `envio`
  ADD PRIMARY KEY (`codigo_e`),
  ADD KEY `codigo_p3` (`codigo_p3`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`codigo_p`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`codigo_pr`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`codigo_a`);

--
-- Indices de la tabla `reclamos`
--
ALTER TABLE `reclamos`
  ADD PRIMARY KEY (`codigo_r`),
  ADD KEY `codigo_e1` (`codigo_e1`);

--
-- Indices de la tabla `tabla_union1`
--
ALTER TABLE `tabla_union1`
  ADD KEY `codigo_p1` (`codigo_p1`),
  ADD KEY `codigo_c1` (`codigo_c1`);

--
-- Indices de la tabla `tabla_union2`
--
ALTER TABLE `tabla_union2`
  ADD KEY `codigo_p2` (`codigo_p2`),
  ADD KEY `codigo_pr1` (`codigo_pr1`);

--
-- Indices de la tabla `tabla_union3`
--
ALTER TABLE `tabla_union3`
  ADD KEY `codigo_pr2` (`codigo_pr2`),
  ADD KEY `codigo_a1` (`codigo_a1`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `codigo_c` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `envio`
--
ALTER TABLE `envio`
  MODIFY `codigo_e` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `codigo_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `codigo_pr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `codigo_a` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `reclamos`
--
ALTER TABLE `reclamos`
  MODIFY `codigo_r` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

