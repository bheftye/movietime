-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: May 02, 2015 at 07:39 AM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `movietime`
--

-- --------------------------------------------------------

--
-- Table structure for table `peliculas`
--

CREATE TABLE `peliculas` (
`id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_unicode_ci NOT NULL,
  `director` text COLLATE utf8_unicode_ci NOT NULL,
  `duracion` text COLLATE utf8_unicode_ci NOT NULL,
  `reparto` text COLLATE utf8_unicode_ci NOT NULL,
  `pais` text COLLATE utf8_unicode_ci NOT NULL,
  `anio` text COLLATE utf8_unicode_ci NOT NULL,
  `sinopsis` longtext COLLATE utf8_unicode_ci NOT NULL,
  `clasificacion` text COLLATE utf8_unicode_ci NOT NULL,
  `img` text COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `peliculas`
--

INSERT INTO `peliculas` (`id`, `nombre`, `director`, `duracion`, `reparto`, `pais`, `anio`, `sinopsis`, `clasificacion`, `img`, `descripcion`) VALUES
(1, 'Brent', 'brent', '120', 'brent', 'Mexico', '1999', 'esta buena                                                                    ', 'AA', '0554460664eafb.jpg', 'Esta buena'),
(2, 'Brent', 'brent', '120', 'brent', 'Mexico', '1999', 'esta buena                                                                    ', 'AA', '05544608b57ee9.jpg', 'Esta buena');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peliculas`
--
ALTER TABLE `peliculas`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peliculas`
--
ALTER TABLE `peliculas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;