-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2018 a las 04:07:21
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `adm_proveedores`
--
CREATE DATABASE IF NOT EXISTS `adm_proveedores` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `adm_proveedores`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `cargo_id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`cargo_id`, `nombre`) VALUES
(1, 'Gerente'),
(2, 'Contador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_producto`
--

CREATE TABLE `categoria_producto` (
  `id_categoria` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria_producto`
--

INSERT INTO `categoria_producto` (`id_categoria`, `nombre`) VALUES
(1, 'Mercaderia'),
(2, 'Maquinaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedido`
--

CREATE TABLE `detalle_pedido` (
  `codigo_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_compra` float NOT NULL,
  `nro_pedido` int(10) UNSIGNED NOT NULL,
  `nro_detalle_pedido` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle_pedido`
--

INSERT INTO `detalle_pedido` (`codigo_producto`, `cantidad`, `precio_compra`, `nro_pedido`, `nro_detalle_pedido`) VALUES
(2, 10, 350, 1, 1),
(3, 1, 37000, 1, 2),
(1, 70, 2450, 2, 3),
(9, 2, 1400, 2, 4),
(8, 30, 450, 3, 5),
(7, 19, 475, 4, 6),
(4, 13, 58500, 5, 7),
(5, 12, 240, 6, 8),
(1, 2, 40, 6, 9),
(3, 1, 30000, 6, 10),
(7, 2, 40, 7, 11),
(4, 1, 3500, 7, 12),
(5, 1, 10, 7, 13),
(5, 1, 10, 7, 14),
(2, 1, 23, 8, 15),
(7, 1, 23, 8, 16),
(4, 3, 10500, 9, 17),
(5, 1, 10, 9, 18),
(2, 2, 40, 9, 19),
(7, 1, 35, 10, 20),
(4, 1, 3000, 10, 21),
(1, 1, 35, 10, 22),
(9, 1, 610, 10, 23),
(6, 1, 33, 10, 24),
(3, 1, 42000, 10, 25),
(5, 1, 23, 11, 26),
(2, 1, 23, 11, 27),
(7, 3, 69, 11, 28),
(4, 1, 3300, 11, 29),
(1, 3, 69, 11, 30),
(9, 2, 1340, 11, 31),
(4, 3, 10500, 12, 32),
(9, 3, 1500, 12, 33),
(8, 6, 54, 13, 34),
(2, 2, 46, 14, 35),
(7, 2, 46, 14, 36);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_compra`
--

CREATE TABLE `factura_compra` (
  `nro_factura` int(10) UNSIGNED NOT NULL,
  `fecha_factura` date NOT NULL,
  `forma_de_pago` varchar(50) NOT NULL,
  `importe_factura` float NOT NULL,
  `cuit` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `factura_compra`
--

INSERT INTO `factura_compra` (`nro_factura`, `fecha_factura`, `forma_de_pago`, `importe_factura`, `cuit`) VALUES
(1, '2018-09-20', 'Efectivo', 2000, '20399996660'),
(2, '2018-09-13', 'Efectivo', 3500, '20394445550'),
(3, '2018-09-28', 'Efectivo', 2500, '20392446940'),
(4, '2018-10-05', 'Efectivo', 8000, '20394445550'),
(5, '2018-11-01', 'Efectivo', 1500, '20396669990');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maquinarias`
--

CREATE TABLE `maquinarias` (
  `nro_maquinaria` int(5) UNSIGNED NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `fabricante` varchar(50) NOT NULL,
  `periodo_garantia` varchar(50) NOT NULL,
  `resumen_de_uso` varchar(200) NOT NULL,
  `estado_maq` varchar(20) NOT NULL,
  `ultimo_mant` date NOT NULL,
  `proximo_mant` date NOT NULL,
  `periodo_mant` varchar(30) NOT NULL,
  `cuit` varchar(11) NOT NULL,
  `codigo_producto` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `maquinarias`
--

INSERT INTO `maquinarias` (`nro_maquinaria`, `modelo`, `fabricante`, `periodo_garantia`, `resumen_de_uso`, `estado_maq`, `ultimo_mant`, `proximo_mant`, `periodo_mant`, `cuit`, `codigo_producto`) VALUES
(1, 'Bicicleta Runnest A1', 'Runnest', '2 años', 'La persona se coloca arrib de la bicicleta de piso marca Runnest y ajusta la cantidad de peso que desea trabajar en sus piernas, luego con el peladeo se ejercitaran las piernas', 'Activa', '2018-11-14', '2019-05-14', '6 meses', '20392446940', 4),
(2, 'Maquina Mariposa Peck Deck', 'Peck Deck', '5 años', 'La persona se sienta de espaldas a la maquina marca Peck Deck y con sus brazos extendidos y colados en la maquina apoyando los antebrazos en la seccion con almohadillas trabajara la zona de la espalda', 'Deshabilitada', '2018-11-18', '2019-02-18', '3 meses', '20399996660', 3),
(3, 'Barra Dominek 01', 'Dominek', '1 años', 'Personal capacitado debera instalar la barra Dominek para luego el usuario que la use pueda realizar dominadas y ejercicios similares con ella', 'Deshabilitada', '2018-11-21', '2019-11-21', '12 meses', '20399996660', 9),
(5, 'Maquina Mariposa Peck Deck.', 'Peck Deck', '5 años', 'La persona se sienta de espaldas a la maquina marca Peck Deck y con sus brazos extendidos y colados en la maquina apoyando los antebrazos en la seccion con almohadillas trabajara la zona de la espalda', 'Retirada', '2018-11-06', '2019-02-06', '3 meses', '20394445550', 3),
(6, 'Maquina Mariposa Peck Deck.', 'Peck Deck', '5 años', 'La persona se sienta de espaldas a la maquina marca Peck Deck y con sus brazos extendidos y colados en la maquina apoyando los antebrazos en la seccion con almohadillas trabajara la zona de la espalda', 'Activa', '2018-11-06', '2019-02-06', '3 meses', '20392446940', 3),
(7, 'Bicicleta Runnest A3', 'Runnest', '2 años', 'La persona se coloca arrib de la bicicleta de piso marca Runnest y ajusta la cantidad de peso que desea trabajar en sus piernas, luego con el peladeo se ejercitaran las piernas', 'Activa', '2018-11-06', '2019-05-06', '6 meses', '20392446940', 4),
(19, 'Barra Dominek 01', 'Dominek', '1 años', 'Personal capacitado debera instalar la barra Dominek para luego el usuario que la use pueda realizar dominadas y ejercicios similares con ella', 'Activa', '2018-11-21', '2018-11-21', '12 meses', '20399996660', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas_credito`
--

CREATE TABLE `notas_credito` (
  `nro_nota_cred` int(10) UNSIGNED NOT NULL,
  `cuit` varchar(11) NOT NULL,
  `fecha_nota_cred` date NOT NULL,
  `importe_nota_cred` float NOT NULL,
  `nro_sol_dev` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `notas_credito`
--

INSERT INTO `notas_credito` (`nro_nota_cred`, `cuit`, `fecha_nota_cred`, `importe_nota_cred`, `nro_sol_dev`) VALUES
(1, '20392446940', '2018-11-12', 100, 2),
(2, '20394445550', '2018-11-12', 200, 3),
(3, '20396669990', '2018-11-12', 500, 3),
(4, '20399996660', '2018-11-12', 500, 4),
(5, '20396669990', '2018-11-12', 3000, 5),
(9, '20392446940', '2018-11-21', 3500, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `nro_pago` int(10) UNSIGNED NOT NULL,
  `fecha_pago` date NOT NULL,
  `forma_de_pago` varchar(50) NOT NULL,
  `importe_pago` float NOT NULL,
  `cuit` varchar(11) NOT NULL,
  `nro_factura` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`nro_pago`, `fecha_pago`, `forma_de_pago`, `importe_pago`, `cuit`, `nro_factura`) VALUES
(1, '2018-09-30', 'Efectivo', 7000, '20392446940', 3),
(2, '2018-10-30', 'Efectivo', 100, '20394445550', 4),
(3, '2018-09-30', 'Efectivo', 1000, '20399996660', 1),
(4, '2018-10-30', 'Efectivo', 1000, '20394445550', 2),
(5, '2018-11-08', 'Efectivo', 1000, '20396669990', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `nro_pedido` int(5) UNSIGNED NOT NULL,
  `fecha_pedido` date NOT NULL,
  `direccion_entrega` varchar(50) NOT NULL,
  `cuit` varchar(11) NOT NULL,
  `estado_pedido` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`nro_pedido`, `fecha_pedido`, `direccion_entrega`, `cuit`, `estado_pedido`) VALUES
(1, '2018-10-18', 'Paris 532 Haedo', '20392446940', 'Concretada'),
(2, '2018-10-18', 'Paris 532 Haedo', '20392446940', 'Enviado'),
(3, '2018-08-18', 'Paris 532 Haedo', '20396669990', 'Enviado'),
(4, '2018-09-18', 'Paris 532 Haedo', '20394445550', 'Enviado'),
(5, '2018-08-18', 'Paris 532 Haedo', '20399996660', 'Enviado'),
(6, '2018-11-06', 'Paris 532 Haedo', '20392446940', 'Enviado'),
(7, '2018-11-06', 'Paris 532 Haedo', '20392446940', 'Enviado'),
(8, '2018-11-06', 'Paris 532 Haedo', '20399996660', 'Enviado'),
(9, '2018-11-07', 'Paris 532 Haedo', '20392446940', 'Enviado'),
(10, '2018-11-07', 'Paris 532 Haedo', '20394445550', 'Enviado'),
(11, '2018-11-07', 'Paris 532 Haedo', '20399996660', 'Enviado'),
(12, '2018-11-21', 'Paris 532 Haedo', '20392446940', 'Concretada'),
(13, '2018-11-21', 'Paris 532 Haedo', '20396669990', 'Enviado'),
(14, '2018-11-21', 'Paris 532 Haedo', '20399996660', 'Enviado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `codigo_producto` int(7) UNSIGNED NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion_producto` varchar(100) NOT NULL,
  `precio_venta` float NOT NULL,
  `stock` int(6) NOT NULL,
  `pto_reposicion` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`codigo_producto`, `nombre`, `descripcion_producto`, `precio_venta`, `stock`, `pto_reposicion`) VALUES
(1, 'Gaytorade Manzana', 'Bebida hidratante con sabor a manzana.', 35, 101, 25),
(2, 'Gaytorade Naranja', 'Bebida hidratante con sabor a naranja.', 35, 30, 25),
(3, 'Maquina Mariposa Peck Deck', 'Maquina Mariposa Peck Deck especial para realizar ejercicios de pecho.', 37000, 4, 2),
(4, 'Bicicleta Runnest', 'Bicicleta de piso marca Runnest ', 4500, 6, 2),
(5, 'Energizante Speed', 'Bebida energizante con Speed.', 20, 120, 130),
(6, 'Gaytorade Anana', 'Bebida hidratante con sabor a Anana.', 35, 160, 55),
(7, 'Agua Villavicencio 2L', 'Agua mineral Villavicencio.', 25, 100, 25),
(8, 'Agua Villavicencio 1L', 'Agua mineral Villavicencio.', 15, 45, 50),
(9, 'Barra Dominek', 'Barra para realizar dominadas.', 700, 7, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_prov`
--

CREATE TABLE `productos_prov` (
  `codigo_producto` int(10) UNSIGNED NOT NULL,
  `cuit` varchar(11) NOT NULL,
  `precio_producto` float UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos_prov`
--

INSERT INTO `productos_prov` (`codigo_producto`, `cuit`, `precio_producto`) VALUES
(1, '20392446940', 20),
(1, '20394445550', 35),
(1, '20396669990', 15),
(1, '20399996660', 23),
(2, '20392446940', 20),
(2, '20394445550', 5),
(2, '20396669990', 15),
(2, '20399996660', 23),
(3, '20392446940', 30000),
(3, '20394445550', 42000),
(3, '20396669990', 32000),
(3, '20399996660', 38000),
(4, '20392446940', 3500),
(4, '20394445550', 3000),
(4, '20396669990', 3200),
(4, '20399996660', 3300),
(5, '20392446940', 10),
(5, '20394445550', 29),
(5, '20396669990', 12),
(5, '20399996660', 23),
(6, '20392446940', 30),
(6, '20394445550', 33),
(6, '20396669990', 33),
(6, '20399996660', 23),
(7, '20392446940', 20),
(7, '20394445550', 35),
(7, '20396669990', 25),
(7, '20399996660', 23),
(8, '20392446940', 5),
(8, '20394445550', 39),
(8, '20396669990', 9),
(8, '20399996660', 23),
(9, '20392446940', 500),
(9, '20394445550', 610),
(9, '20396669990', 600),
(9, '20399996660', 670);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `cuit` varchar(11) NOT NULL,
  `razon_social` varchar(50) NOT NULL,
  `direccion_postal` int(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telefono` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`cuit`, `razon_social`, `direccion_postal`, `email`, `telefono`) VALUES
('20392446940', 'Martin Geka', 1712, 'martingeka@yopmail.com', 1531011879),
('20394445550', 'Pepe Prov', 1815, 'pepeprov@yopmail.com', 1544445555),
('20396669990', 'Pedro el proveedor', 1714, 'pedroelprov@yopmail.com', 1566669999),
('20399996660', 'Max Power', 2040, 'maxpower@yopmail.com', 1599996666);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud_cambio`
--

CREATE TABLE `solicitud_cambio` (
  `nro_sol_camb` int(10) UNSIGNED NOT NULL,
  `fecha_solicitud` date NOT NULL,
  `motivo` varchar(200) NOT NULL,
  `nro_maquinaria` int(10) UNSIGNED NOT NULL,
  `estado_sol` varchar(10) NOT NULL,
  `cuit` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `solicitud_cambio`
--

INSERT INTO `solicitud_cambio` (`nro_sol_camb`, `fecha_solicitud`, `motivo`, `nro_maquinaria`, `estado_sol`, `cuit`) VALUES
(1, '2018-10-30', 'Porque no anda', 8, 'Resuelta', '20392446940'),
(3, '2018-11-06', 'No anda bien.	', 13, 'Resuelta', '20394445550'),
(4, '2018-11-07', 'rojo	', 6, 'Enviada', '20392446940'),
(5, '2018-11-21', 'PRUEBA 2', 2, 'Resuelta', '20399996660'),
(6, '2018-11-21', '	asdasdsa		', 3, 'Resuelta', '20399996660');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud_devolucion`
--

CREATE TABLE `solicitud_devolucion` (
  `nro_sol_dev` int(10) UNSIGNED NOT NULL,
  `fecha_solicitud` date NOT NULL,
  `motivo` varchar(200) NOT NULL,
  `nro_maquinaria` int(10) UNSIGNED NOT NULL,
  `estado_sol` varchar(10) NOT NULL,
  `importe_dev` float UNSIGNED NOT NULL,
  `cuit` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `solicitud_devolucion`
--

INSERT INTO `solicitud_devolucion` (`nro_sol_dev`, `fecha_solicitud`, `motivo`, `nro_maquinaria`, `estado_sol`, `importe_dev`, `cuit`) VALUES
(2, '2018-10-30', '		No es del color que pedi.	', 7, 'Enviada', 500, '20392446940'),
(3, '2018-11-07', 'no sirve	', 4, 'Resuelta', 0, '20399996660'),
(4, '2018-11-21', '		no em gusta	', 4, 'Enviada', 670, '20399996660'),
(5, '2018-11-21', '		asdas	', 7, 'Resuelta', 0, '20392446940');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud_mantenimiento`
--

CREATE TABLE `solicitud_mantenimiento` (
  `nro_sol_mant` int(5) UNSIGNED NOT NULL,
  `fecha_solicitud` date NOT NULL,
  `motivo` text NOT NULL,
  `nro_maquinaria` int(5) NOT NULL,
  `cuit` varchar(11) NOT NULL,
  `estado_sol` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `solicitud_mantenimiento`
--

INSERT INTO `solicitud_mantenimiento` (`nro_sol_mant`, `fecha_solicitud`, `motivo`, `nro_maquinaria`, `cuit`, `estado_sol`) VALUES
(2, '2018-10-30', 'Mantenimiento Rutinario.			', 1, '20392446940', 'Resuelta'),
(3, '2018-10-30', '		Otro rutinario\r\n	', 2, '20399996660', 'Resuelta'),
(4, '2018-10-31', 'La fecha de mantenimiento esta cerca.		', 8, '20392446940', 'Enviada'),
(5, '2018-10-31', 'Rutina.	', 5, '20394445550', 'Enviada'),
(6, '2018-11-01', 'Motivo de prueba para el mandado.', 10, '20396669990', 'Resuelta'),
(7, '2018-11-01', '	LA PRUEBA FINAL DE LOS MAILS.		', 9, '20394445550', 'Enviada'),
(8, '2018-11-01', 'pedido de mantenimiento rutinario.	', 8, '20392446940', 'Enviada'),
(9, '2018-11-06', '		no hay	', 1, '20392446940', 'Resuelta'),
(10, '2018-11-06', '		asd	', 2, '20399996660', 'Resuelta'),
(11, '2018-11-06', '		asd	', 3, '20399996660', 'Resuelta'),
(12, '2018-11-06', '		fas	', 4, '20399996660', 'Resuelta'),
(13, '2018-11-06', '		asdas	', 5, '20394445550', 'Resuelta'),
(14, '2018-11-06', '		as	zxczx', 6, '20392446940', 'Resuelta'),
(15, '2018-11-06', '			', 7, '20392446940', 'Resuelta'),
(16, '2018-11-06', '		asdasda	', 8, '20392446940', 'Resuelta'),
(17, '2018-11-06', 'asdfaszcv	', 9, '20394445550', 'Resuelta'),
(18, '2018-11-06', '			', 13, '20392446940', 'Resuelta'),
(19, '2018-11-18', '		awedas	', 2, '20399996660', 'Resuelta'),
(20, '2018-11-21', '		RUTINA	', 3, '20399996660', 'Resuelta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud_reparacion`
--

CREATE TABLE `solicitud_reparacion` (
  `nro_sol_rep` int(10) UNSIGNED NOT NULL,
  `fecha_solicitud` date NOT NULL,
  `motivo` varchar(200) NOT NULL,
  `nro_maquinaria` int(10) UNSIGNED NOT NULL,
  `estado_sol` varchar(10) NOT NULL,
  `cuit` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `solicitud_reparacion`
--

INSERT INTO `solicitud_reparacion` (`nro_sol_rep`, `fecha_solicitud`, `motivo`, `nro_maquinaria`, `estado_sol`, `cuit`) VALUES
(1, '2018-10-30', 'Se le rompio una manija.	', 5, 'Resuelta', '20394445550'),
(2, '2018-11-07', '	se rompio		', 5, 'Resuelta', '20394445550'),
(4, '2018-11-21', '		PRUEBAA\r\n	', 1, 'Resuelta', '20392446940');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nro_usuario` int(8) UNSIGNED NOT NULL,
  `nombre_usuario` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `cargo_id` int(2) UNSIGNED NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nro_usuario`, `nombre_usuario`, `password`, `cargo_id`, `email`) VALUES
(1, 'Martin', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, 'martingainza@yopmail.com'),
(2, 'Fernando', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 1, 'fernandoliserre@yopmail.com'),
(3, 'Carlos', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', 2, 'carloscontador@yopmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`cargo_id`);

--
-- Indices de la tabla `categoria_producto`
--
ALTER TABLE `categoria_producto`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD PRIMARY KEY (`nro_detalle_pedido`);

--
-- Indices de la tabla `factura_compra`
--
ALTER TABLE `factura_compra`
  ADD PRIMARY KEY (`nro_factura`);

--
-- Indices de la tabla `maquinarias`
--
ALTER TABLE `maquinarias`
  ADD PRIMARY KEY (`nro_maquinaria`);

--
-- Indices de la tabla `notas_credito`
--
ALTER TABLE `notas_credito`
  ADD PRIMARY KEY (`nro_nota_cred`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`nro_pago`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`nro_pedido`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`codigo_producto`);

--
-- Indices de la tabla `productos_prov`
--
ALTER TABLE `productos_prov`
  ADD PRIMARY KEY (`codigo_producto`,`cuit`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`cuit`);

--
-- Indices de la tabla `solicitud_cambio`
--
ALTER TABLE `solicitud_cambio`
  ADD PRIMARY KEY (`nro_sol_camb`);

--
-- Indices de la tabla `solicitud_devolucion`
--
ALTER TABLE `solicitud_devolucion`
  ADD PRIMARY KEY (`nro_sol_dev`);

--
-- Indices de la tabla `solicitud_mantenimiento`
--
ALTER TABLE `solicitud_mantenimiento`
  ADD PRIMARY KEY (`nro_sol_mant`);

--
-- Indices de la tabla `solicitud_reparacion`
--
ALTER TABLE `solicitud_reparacion`
  ADD PRIMARY KEY (`nro_sol_rep`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`nro_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
  MODIFY `cargo_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `categoria_producto`
--
ALTER TABLE `categoria_producto`
  MODIFY `id_categoria` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  MODIFY `nro_detalle_pedido` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `factura_compra`
--
ALTER TABLE `factura_compra`
  MODIFY `nro_factura` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `maquinarias`
--
ALTER TABLE `maquinarias`
  MODIFY `nro_maquinaria` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `notas_credito`
--
ALTER TABLE `notas_credito`
  MODIFY `nro_nota_cred` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `nro_pago` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `nro_pedido` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `codigo_producto` int(7) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `solicitud_cambio`
--
ALTER TABLE `solicitud_cambio`
  MODIFY `nro_sol_camb` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `solicitud_devolucion`
--
ALTER TABLE `solicitud_devolucion`
  MODIFY `nro_sol_dev` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `solicitud_mantenimiento`
--
ALTER TABLE `solicitud_mantenimiento`
  MODIFY `nro_sol_mant` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `solicitud_reparacion`
--
ALTER TABLE `solicitud_reparacion`
  MODIFY `nro_sol_rep` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `nro_usuario` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
