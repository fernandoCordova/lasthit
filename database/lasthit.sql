-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-06-2022 a las 05:02:31
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lasthit`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `idestado` int(11) NOT NULL,
  `estado` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`idestado`, `estado`) VALUES
(1, 'Habilitado'),
(2, 'Dehabilitado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region`
--

CREATE TABLE `region` (
  `idRegion` int(11) NOT NULL,
  `plataforma` varchar(4) NOT NULL,
  `host` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `region`
--

INSERT INTO `region` (`idRegion`, `plataforma`, `host`) VALUES
(1, 'BR1', 'br1.api.riotgames.com'),
(2, 'EUN1', 'eun1.api.riotgames.com'),
(3, 'EUW1', 'euw1.api.riotgames.com'),
(4, 'JP1', 'jp1.api.riotgames.com'),
(5, 'KR', 'kr.api.riotgames.com'),
(6, 'LA1', 'la1.api.riotgames.com'),
(7, 'LA2', 'la2.api.riotgames.com'),
(8, 'NA1', 'na1.api.riotgames.com'),
(9, 'OC1', 'oc1.api.riotgames.com'),
(10, 'TR1', 'tr1.api.riotgames.com'),
(11, 'RU', 'ru.api.riotgames.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE `tipousuario` (
  `idtipoUsuario` int(11) NOT NULL,
  `tipo` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`idtipoUsuario`, `tipo`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `correo` text NOT NULL,
  `clave` varchar(12) NOT NULL,
  `nombreInvocador` varchar(12) NOT NULL,
  `create_usuario` datetime DEFAULT NULL,
  `update_usuario` datetime DEFAULT NULL,
  `delete_usuario` datetime DEFAULT NULL,
  `tipoUsuario_idtipoUsuario` int(11) NOT NULL,
  `estado_idestado` int(11) NOT NULL,
  `Region_idRegion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `correo`, `clave`, `nombreInvocador`, `create_usuario`, `update_usuario`, `delete_usuario`, `tipoUsuario_idtipoUsuario`, `estado_idestado`, `Region_idRegion`) VALUES
(23, 'administrador@gmail.com', '1234567', 'drakma', '2022-06-07 02:18:24', '2022-06-07 14:18:31', NULL, 1, 1, 7),
(24, 'correonuevo@gmail.com', 'asd123', '222222222222', '2022-06-07 14:41:52', '2022-06-07 17:21:22', NULL, 2, 1, 7);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idestado`);

--
-- Indices de la tabla `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`idRegion`);

--
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`idtipoUsuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `fk_usuario_estado1` (`estado_idestado`),
  ADD KEY `fk_usuario_tipoUsuario` (`tipoUsuario_idtipoUsuario`),
  ADD KEY `fk_usuario_Region1` (`Region_idRegion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `idestado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `region`
--
ALTER TABLE `region`
  MODIFY `idRegion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `idtipoUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_Region1` FOREIGN KEY (`Region_idRegion`) REFERENCES `region` (`idRegion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_estado1` FOREIGN KEY (`estado_idestado`) REFERENCES `estado` (`idestado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_tipoUsuario` FOREIGN KEY (`tipoUsuario_idtipoUsuario`) REFERENCES `tipousuario` (`idtipoUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
