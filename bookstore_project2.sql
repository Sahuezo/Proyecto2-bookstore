-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-10-2022 a las 23:39:50
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bookstore_project2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `titular` varchar(100) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `publisher` text NOT NULL,
  `edicion` varchar(45) NOT NULL,
  `tipo_present` varchar(45) NOT NULL,
  `idioma` tinytext NOT NULL,
  `dimensiones` varchar(45) NOT NULL,
  `cant_pags` varchar(45) NOT NULL,
  `precio` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `books`
--

INSERT INTO `books` (`id`, `titular`, `autor`, `publisher`, `edicion`, `tipo_present`, `idioma`, `dimensiones`, `cant_pags`, `precio`) VALUES
(5, 'Kokoro', 'Igort', 'Salamandra', 'Comic 2022', 'Tapa dura', 'Castellano', '40cm', '80', '400'),
(148, 'Cuentos de hadas', 'Stephen King', 'Palaza &janes', '2019', 'Tapa dura', 'Castellano', '235x160mm', '856', '32'),
(149, 'El Silmarillion', 'J.r.r Tolkien', 'Minotauro', '2015', 'Tapa Blanda', 'Castellano', '230x150cm', '552', '25'),
(151, 'Dioses de Jade y Sombra', 'Silvia Moreno', 'Minotauro', '2022', 'Tapa Blanda', 'Inglés', '201x140mm', '384', '30'),
(152, 'Las Bestias Olvidades DE Eld', 'PAtricia A Mcill', 'Duermevela Ediciones', '2021', 'Tapa dura', 'Castellano', '210x140mm', '276', '19'),
(153, 'Wolfwalkers', 'Sam Sattin', 'Duermevela Ediciones', '2021', 'Tapa dura', 'Castellano', '210x140 mm.', '276', '35'),
(154, 'Locke & Key - Golden Age', 'Joe Hill', 'Panini Espana', '2018', 'Tapa blanda', 'Inglés', '275x180 mm.', '96', '45'),
(155, 'Locke & Key - Al infierno', 'Joe Hill', 'Panini Espana', '2020', 'Tapa blanda', 'inglés', '275x180 mm.', '456', '19'),
(156, 'Maximum Berserk Vol.1', 'Kentaro Miura', 'Panini Espana', '2021', 'Tapa blanda', 'Castellano', '275x180 mm.', '574', '19'),
(157, 'Maximum Berserk Vol.2', 'Kentaro Miura', 'Panini Espana', '2021', 'Tapa blanda', 'Castellano', '275x180 mm.', '428', '19'),
(158, 'Maximum Berserk Vol.3', 'Kentaro Miura', 'Panini Espana', '2021', 'Tapa blanda', 'Castellano', '275x180 mm.', '128', '15'),
(159, 'Infiltrado', 'K.J. Parker', 'Red Key Books', '2021', 'Tapa dura', 'Castellano', '275x180 mm.', '208', '8'),
(160, 'Las Olas del tiempo perdido', 'Sandra Bareda', 'Editorial Planeta', '2019', 'Tapa Dura', 'Castellano', '235 x 160 mm.', '856', '32'),
(162, 'El Infiltrado', 'K.j Parker', 'Minotauro', '2022', 'eBook', 'Ingles', '40cm', '80', '60'),
(163, ' los huerfanos', 'Cristina Baker Kleene', 'Ediciones C', '2016', 'Pasta Dura', 'Español', '60cm', '357', '11'),
(166, 'El Silmarillio', 'J.R.R Tolkien', 'Minotauro', '2018', 'tapa blanda', 'Ingles', '25X30cm', '547', '30'),
(174, 'Princesa mononoke', 'IgorStravinski', 'Monumento', '2022', 'tapa blanda', 'Español', '10x50', '200', '30'),
(175, 'Telefono negro', 'Stiphen King', 'Guiones', '2021', 'eBook', 'Español', '30X40cm', '50', '10'),
(176, 'Telefono negro', 'Anonimo', 'Pelicula', '2021', 'Audio Visual', 'Inglés ', '30X40cm', '50', '10'),
(177, 'Telefono negro', 'Pedrito', 'Pelicula', '2022', 'Audio Visual', 'Español', '30X40cm', '50', '10');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
