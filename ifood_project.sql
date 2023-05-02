-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-05-2023 a las 08:22:07
-- Versión del servidor: 10.4.24-MariaDB-log
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ifood_project`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `car`
--

CREATE TABLE `car` (
  `id_car` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `recipes` int(50) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `car`
--

INSERT INTO `car` (`id_car`, `id_user`, `recipes`, `total`) VALUES
(1, 2, 2, 500),
(2, 2, 2, 240),
(3, 2, 2, 500),
(4, 2, 2, 360),
(5, 2, 3, 395),
(6, 2, 1, 100),
(7, 2, 2, 400);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chefs`
--

CREATE TABLE `chefs` (
  `id_chef` int(255) NOT NULL,
  `chef_name` varchar(30) NOT NULL,
  `chef_lastName` varchar(50) NOT NULL,
  `chef_rfc` varchar(13) NOT NULL,
  `chef_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `chefs`
--

INSERT INTO `chefs` (`id_chef`, `chef_name`, `chef_lastName`, `chef_rfc`, `chef_address`) VALUES
(1, 'ceti', 'Salazar', '131231a', 'asdasdasdasdas '),
(2, 'David', 'Salazar', '131231a', 'asdasdasdasdas '),
(3, 'Samuel', 'Perez', 'RTTUYUY', 'Campo Deportivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recipes`
--

CREATE TABLE `recipes` (
  `id_recipe` int(255) NOT NULL,
  `name` varchar(40) NOT NULL,
  `cost` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_chef` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `recipes`
--

INSERT INTO `recipes` (`id_recipe`, `name`, `cost`, `description`, `image`, `id_chef`) VALUES
(11, 'Carpaccio de Salmón', '250', 'Carpaccio de salmón con limón ', '../Images/carpaccio.jpg', 1),
(14, 'Risotto con champiñones', '200', 'adas', '../Images/risotto.jpg', 1),
(15, 'Spaghetti', '120', 'asdasdas', '../Images/spaghetti.jpg', 1),
(16, 'Ossobuco con verduras', '185', 'asdasdas', '../Images/ossobuco.jpg', 1),
(17, 'Ensalada Capprese', '140', '', 'https://tipsparatuviaje.com/wp-content/uploads/2020/03/ensalada-capresse-1024x683.jpg', 1),
(18, 'Grissinis', '100', 'asdasdas', 'https://tipsparatuviaje.com/wp-content/uploads/2020/03/grissinis-comida-1024x683.jpg', 1),
(19, 'Faina con carne', '205', 'asdasdas', 'https://tipsparatuviaje.com/wp-content/uploads/2020/03/faina-con-carne-y-berenjena-1024x683.jpg', 1),
(20, 'Ragú de ternera', '255', 'jiooijoi', '../Images/ragu-ternera.jpg', 1),
(21, 'Caponata', '195', 'hhñkhlhlkjhjlhlk', '../Images/caponata.jpg', 2),
(22, 'Risotto alla milanese', '167', 'hhñkhlhlkjhjlhlk', '../Images/risotto-alla-milanese.jpg', 1),
(23, 'Spaghetti a la carbonara', '150', 'gdfgdf', '../Images/espagueti-carbonara.jpg', 1),
(24, 'Albóndigas', '165', 'hjjjjjjjjj', 'https://tipsparatuviaje.com/wp-content/uploads/2020/03/albondigas-comida-1024x683.jpg', 1),
(25, 'Ragú de verduras guisadas', '120', 'aasdas', '../Images/ragu-verduras-guisado.jpg', 1),
(26, 'Arancini de arroz', '110', 'hhñkhlhlkjhjlhlk', '../Images/arancini.jpg', 1),
(27, 'Baghette relleno de ragú', '135', 'asdasdas', '../Images/baguette-relleno-ragu.jpg', 1),
(28, 'Ragú de zanahoria', '150', 'Ragú de zanahora, coliflor, para y algunas otras verduras', '../Images/ragu-zanahora-papa-coliflor.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `correo`, `pass`) VALUES
(1, 'Eduardo Robles', 'lozanoeduardo8777@gmail.com', '12345'),
(2, 'David', 'lozanoemmanuel877@gmail.com', '12345'),
(3, 'A', 'asda@gmail.com', '12345');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id_car`);

--
-- Indices de la tabla `chefs`
--
ALTER TABLE `chefs`
  ADD PRIMARY KEY (`id_chef`);

--
-- Indices de la tabla `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id_recipe`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `car`
--
ALTER TABLE `car`
  MODIFY `id_car` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `chefs`
--
ALTER TABLE `chefs`
  MODIFY `id_chef` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id_recipe` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
