-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 24-05-2018 a las 22:30:33
-- Versión del servidor: 5.7.22-0ubuntu18.04.1
-- Versión de PHP: 7.1.17-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Minimercado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `Codigo_Cliente` bigint(10) NOT NULL,
  `Primer_Nombre` varchar(15) NOT NULL,
  `Segundo_Nombre` varchar(15) DEFAULT NULL,
  `Primer_Apellido` varchar(15) NOT NULL,
  `Segundo_Apellido` varchar(15) DEFAULT NULL,
  `Direccion` varchar(20) NOT NULL,
  `Telefono` bigint(9) NOT NULL,
  `Codigo_Producto` bigint(10) NOT NULL,
  `Codigo_Empleado` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`Codigo_Cliente`, `Primer_Nombre`, `Segundo_Nombre`, `Primer_Apellido`, `Segundo_Apellido`, `Direccion`, `Telefono`, `Codigo_Producto`, `Codigo_Empleado`) VALUES
(1000000000, 'Juan', 'Pablo', 'Ospina', 'Perez', 'B/Alamos', 123456789, 1025147236, 1524541251),
(1088652189, 'German', 'Andres', 'Lopez', 'Rivera', 'B/Cuba', 3144568796, 12345, 1088654789),
(1088963254, 'Juan', 'Pedro', 'Lopez', 'Pumarejo', 'B/Alamos', 3124567896, 12435, 1088251478);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `Codigo_Empleado` bigint(10) NOT NULL,
  `Primer_Nombre` varchar(15) NOT NULL,
  `Segundo_Nombre` varchar(15) DEFAULT NULL,
  `Primer_Apellido` varchar(15) NOT NULL,
  `Segundo_Apellido` varchar(15) DEFAULT NULL,
  `Cedula_Empleado` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`Codigo_Empleado`, `Primer_Nombre`, `Segundo_Nombre`, `Primer_Apellido`, `Segundo_Apellido`, `Cedula_Empleado`) VALUES
(1025142365, 'Pedro', 'Pablo', 'Leon', 'Jaramillo', 1032632653),
(1088472104, 'Javier', 'Jose', 'Perilla', 'Rosero', 1088214563),
(1088652103, 'Jose', 'Pedro', 'Lopez', 'Meneses', 1078145210);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Factura_Venta`
--

CREATE TABLE `Factura_Venta` (
  `Codigo_Factura` bigint(10) NOT NULL,
  `Codigo_Producto` bigint(10) NOT NULL,
  `Codigo_Usuario` bigint(10) NOT NULL,
  `Codigo_Proveedor` bigint(10) NOT NULL,
  `Nombre_Producto` text NOT NULL,
  `Cantidad` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Factura_Venta`
--

INSERT INTO `Factura_Venta` (`Codigo_Factura`, `Codigo_Producto`, `Codigo_Usuario`, `Codigo_Proveedor`, `Nombre_Producto`, `Cantidad`) VALUES
(1, 665121, 1044362154, 1022541214, 'Cereales', 10),
(2, 9655151, 1047362154, 1047125456, 'Arroz', 5),
(544184, 4854, 1044251454, 995215121, 'Leche', 4),
(65498484, 65269596, 1099632145, 1058415451, 'Kumis', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `Codigo` int(11) NOT NULL,
  `Nombre` varchar(15) NOT NULL,
  `Marca` varchar(15) DEFAULT NULL,
  `Fecha_Elaboracion` date NOT NULL,
  `Fecha_Vencimiento` date NOT NULL,
  `Lugar_Origen` varchar(15) DEFAULT NULL,
  `Precio` float NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Categoria` text NOT NULL,
  `Codigo_Proveedor` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`Codigo`, `Nombre`, `Marca`, `Fecha_Elaboracion`, `Fecha_Vencimiento`, `Lugar_Origen`, `Precio`, `Cantidad`, `Categoria`, `Codigo_Proveedor`) VALUES
(1, 'Kumis', 'Alpina', '2018-05-03', '2018-05-26', 'Cali', 10000, 50, 'LACTEOS', 1088652147),
(2, 'Yogurt', 'Colacteos', '2018-04-30', '2018-06-03', 'Pasto', 1500000, 200, 'LACTEOS', 1088652147),
(3, 'Manzana', 'Chilena', '2018-05-02', '2019-06-03', 'Chile', 200000, 100, 'FRUTAS Y VERDURAS', 14587),
(4, 'Arroz', 'Diana', '2018-05-01', '2019-05-26', 'Huila', 100000, 500, 'ABARROTES', 123654),
(5, 'Cereal', 'Kellogs', '2018-04-30', '2019-06-01', 'Cali', 100000, 20, 'OTRO', 1055231445);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `Codigo_Proveedor` bigint(10) NOT NULL,
  `Primer_Nombre` varchar(15) NOT NULL,
  `Segundo_Nombre` varchar(15) DEFAULT NULL,
  `Primer_Apellido` varchar(15) NOT NULL,
  `Segundo_Apellido` varchar(15) DEFAULT NULL,
  `Direccion` text NOT NULL,
  `Telefono` bigint(10) DEFAULT NULL,
  `Codigo_Producto` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`Codigo_Proveedor`, `Primer_Nombre`, `Segundo_Nombre`, `Primer_Apellido`, `Segundo_Apellido`, `Direccion`, `Telefono`, `Codigo_Producto`) VALUES
(1025369478, 'Andres', 'Camilo', 'Gordon', 'Gonzales', 'B/Cuba', 3102541025, 12345),
(1088652310, 'Juan', 'Pedro', 'Galarza', 'Perez', 'Carrera 16 No 24_12', 315466397, 1088251477),
(1088654789, 'Juan', 'Jose', 'Lopez', 'Rivera', 'B/Palermo', 3154211023, 11450);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Codigo` bigint(10) NOT NULL,
  `Nombres` text NOT NULL,
  `Apellidos` text NOT NULL,
  `Tipo_Usuario` text NOT NULL,
  `Nombre_Usuario` varchar(15) NOT NULL,
  `Contrasenia` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Codigo`, `Nombres`, `Apellidos`, `Tipo_Usuario`, `Nombre_Usuario`, `Contrasenia`) VALUES
(1087451263, 'Camilo', 'Villota', 'EMPLEADO', 'Usuario', 'Villota1@'),
(1088652134, 'Andres', 'Charfuelan', 'ADMINISTRADOR', 'Admin', '94@Andres');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Codigo_Cliente`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`Codigo_Empleado`);

--
-- Indices de la tabla `Factura_Venta`
--
ALTER TABLE `Factura_Venta`
  ADD PRIMARY KEY (`Codigo_Factura`),
  ADD UNIQUE KEY `Codigo_Producto` (`Codigo_Producto`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`Codigo`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`Codigo_Proveedor`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `Codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
