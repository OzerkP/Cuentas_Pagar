-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2019 a las 14:25:02
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cuentas_pagar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(50) NOT NULL,
  `apellido_cliente` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre_cliente`, `apellido_cliente`) VALUES
(1, 'Ariel', 'Ortega'),
(2, 'Jeremy', 'Sanchez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cxp`
--

CREATE TABLE `cxp` (
  `id_pagar` int(11) NOT NULL,
  `id_suplidor` int(11) DEFAULT NULL,
  `id_factura` int(11) DEFAULT NULL,
  `id_pedido` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cxp`
--

INSERT INTO `cxp` (`id_pagar`, `id_suplidor`, `id_factura`, `id_pedido`) VALUES
(1, 1, 2, 2),
(2, 3, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id_factura` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `monto` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`id_factura`, `id_cliente`, `monto`) VALUES
(1, 1, 8555),
(2, 2, 80000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_proveedor`
--

CREATE TABLE `pedido_proveedor` (
  `id_pedido` int(11) NOT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `monto` double NOT NULL,
  `modo_pago` varchar(50) NOT NULL,
  `fecha_pago` varchar(50) NOT NULL,
  `fecha_recibo` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedido_proveedor`
--

INSERT INTO `pedido_proveedor` (`id_pedido`, `id_producto`, `monto`, `modo_pago`, `fecha_pago`, `fecha_recibo`, `estado`) VALUES
(1, 1, 100500, 'Tarjeta', '07/12/2019', '05/11/2019', 'vigente'),
(2, 2, 80000, 'Efectivo', '09/12/2019', '01/11/2019', 'vigente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `producto_nombre` varchar(100) NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `descripcion` longtext NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `precio` double NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `producto_nombre`, `imagen`, `descripcion`, `categoria`, `marca`, `precio`, `cantidad`) VALUES
(1, 'Lenovo G505', 'lenovo-g505.jpg', 'Estado:	\r\nUsado: Un artículo que se utilizó anteriormente El artículo puede poseer algunos signos de desgaste.\r\nEstado del artículo: Usado\r\nMarca: Lenovo	\r\nSSD Capacity: Not Applicable\r\nRAM Size: 8 GB	\r\nCapacidad de disco duro: 500 GB\r\nTipo de almacenamiento: HDD (Hard Disk Drive)	\r\nProcessor: AMD A4', 'Laptop', 'Lenovo', 108500, 10),
(2, 'Kolice Mini Compacto Refrigerador', 'mini-nevera.jpg', 'Estado:	\r\nNuevo: Un artículo totalmente nuevo, sin usar, sin abrir y sin daños, en su envase original (en los casos ... Más información\r\nEstado del artículo: Nuevo\r\nModelo:	KD46R-1	Características:	Adjustable Shelves\r\nDoor Opens:	reversilble door	Volumen:	1.7 cubic feet\r\nEnergy Star:	Not Compliant	Acabados:	Black powder coating', 'Electrodomesticos', 'Kolice', 21640, 25),
(3, '2019 V8 Reloj inteligente', 'smartwatch-v8.jpg', '\r\nEstado:	\r\nNuevo: Un artículo totalmente nuevo, sin usar, sin abrir y sin daños, en su envase original (en los casos ... Más información\r\nEstado del artículo:	Nuevo\r\nMarca:	Sin marca	UPC:	\r\nDoes not apply\r\nMPN:	\r\nDoes not apply\r\nEAN:	\r\nDoes not apply\r\nBand Material:	Silicone	Tipo:	Smart Watch\r\nCaracterísticas:	Cámara, A prueba de agua, Pantalla táctil, Bluetooth Enabled, Sim Card Support	Marke:	Markenlos\r\nCountry/Region of Manufacture:	China	Band Color:	Blue, Red, Black, White\r\n', 'Laptop', 'Sin Marca', 1800, 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suplidor`
--

CREATE TABLE `suplidor` (
  `id_suplidor` int(11) NOT NULL,
  `empresa` varchar(50) NOT NULL,
  `nombre_suplidor` varchar(50) DEFAULT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `RNC` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `suplidor`
--

INSERT INTO `suplidor` (`id_suplidor`, `empresa`, `nombre_suplidor`, `direccion`, `telefono`, `correo`, `RNC`) VALUES
(1, 'Ferreteria CXA', 'Armando', 'Santo Domingo', '809-587-987', 'armando@hotmail.com', '87987456874'),
(2, 'Farmacia Baez', 'Federico', 'Santo Domingo Este', '829-987-5548', 'fedefar@hotmail.com', '8798745687'),
(3, 'Laptops SRL', 'Fernando Jimenez', 'Santo Domingo Oeste', '809-887-8854', 'ferlaptop@hotmail.com', '87987456863');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suplidor_producto`
--

CREATE TABLE `suplidor_producto` (
  `id_producto` int(11) DEFAULT NULL,
  `id_suplidor` int(11) DEFAULT NULL,
  `precio` double NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `suplidor_producto`
--

INSERT INTO `suplidor_producto` (`id_producto`, `id_suplidor`, `precio`, `cantidad`) VALUES
(1, 3, 100500, 10),
(2, 1, 21640, 25),
(3, 3, 1000, 100);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `cxp`
--
ALTER TABLE `cxp`
  ADD PRIMARY KEY (`id_pagar`),
  ADD KEY `id_suplidor` (`id_suplidor`),
  ADD KEY `id_factura` (`id_factura`),
  ADD KEY `id_pedido` (`id_pedido`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id_factura`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `pedido_proveedor`
--
ALTER TABLE `pedido_proveedor`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `suplidor`
--
ALTER TABLE `suplidor`
  ADD PRIMARY KEY (`id_suplidor`);

--
-- Indices de la tabla `suplidor_producto`
--
ALTER TABLE `suplidor_producto`
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_suplidor` (`id_suplidor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `cxp`
--
ALTER TABLE `cxp`
  MODIFY `id_pagar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `id_factura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pedido_proveedor`
--
ALTER TABLE `pedido_proveedor`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `suplidor`
--
ALTER TABLE `suplidor`
  MODIFY `id_suplidor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cxp`
--
ALTER TABLE `cxp`
  ADD CONSTRAINT `cxp_ibfk_1` FOREIGN KEY (`id_suplidor`) REFERENCES `suplidor` (`id_suplidor`),
  ADD CONSTRAINT `cxp_ibfk_2` FOREIGN KEY (`id_factura`) REFERENCES `factura` (`id_factura`),
  ADD CONSTRAINT `cxp_ibfk_3` FOREIGN KEY (`id_pedido`) REFERENCES `pedido_proveedor` (`id_pedido`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);

--
-- Filtros para la tabla `pedido_proveedor`
--
ALTER TABLE `pedido_proveedor`
  ADD CONSTRAINT `pedido_proveedor_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`);

--
-- Filtros para la tabla `suplidor_producto`
--
ALTER TABLE `suplidor_producto`
  ADD CONSTRAINT `suplidor_producto_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`),
  ADD CONSTRAINT `suplidor_producto_ibfk_2` FOREIGN KEY (`id_suplidor`) REFERENCES `suplidor` (`id_suplidor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
