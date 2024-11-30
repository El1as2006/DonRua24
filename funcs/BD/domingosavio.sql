-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2024 at 02:04 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `domingosavio`
--
CREATE DATABASE IF NOT EXISTS `domingosavio` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `domingosavio`;

-- --------------------------------------------------------

--
-- Table structure for table `publicaciones`
--

CREATE TABLE `publicaciones` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `contenido` text NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `creado_en` timestamp NOT NULL DEFAULT current_timestamp(),
  `Tipo_Publicaciones` int(11) NOT NULL,
  `activo` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `publicaciones`
--

INSERT INTO `publicaciones` (`id`, `titulo`, `contenido`, `imagen`, `creado_en`, `Tipo_Publicaciones`, `activo`) VALUES
(9, 'Para todas las edades.', 'Tanto para niños y niñas.', '../uploads/../uploads/avisos_2.jpg', '2024-11-29 17:48:35', 0, 1),
(10, ' Via Crusis Viviente ', 'Una forma de evangelizar', 'Viacrusi.jpg', '2024-11-29 18:00:35', 1, 1),
(11, 'Intramuros ', 'Escuela Domingo Savio es un derroche de alegría', 'noticia-intramuros-1.jpg', '2024-11-29 18:01:25', 1, 1),
(12, 'Entrenos de futbol', 'Se parte del equipo del futbol!!', 'equipo de futbol.jpg', '2024-11-29 18:04:00', 1, 1),
(13, 'Cuaresma', 'Nos comprometemos a vivir este tiempo con un espíritu de penitencia, oración y caridad. Buscamos crecer en nuestra fe y acercarnos más a Dios y a nuestros hermanos y hermanas.', 'cuaresma.jpg', '2024-11-29 18:08:27', 1, 1),
(14, 'Celebracion a Don Bosco', 'Con mucha alegría y fervor se llevó a cabo la gran fiesta salesiana.', 'Fiesta de don bosco.jpg', '2024-11-29 18:10:32', 1, 1),
(16, '¡Orgullo Institucional!', 'Nos complace anunciar la destacada participación de nuestro talentoso estudiante de 9°A, Pablo Ernesto Espinoza Rivera, en el desarrollo de la undécima edición del prestigioso torneo internacional: ¡MIAMI CUP 2024! ', 'futbol fesa.jpg', '2024-11-29 18:13:43', 2, 1),
(17, 'La fumigación se llevó a cabo siguiendo todos los protocolos de seguridad establecidos', 'Nuestra prioridad es la salud y el bienestar de todos nuestros estudiantes, docentes y personal. Por eso, hemos tomado esta medida preventiva para garantizar un entorno seguro y saludable para el aprendizaje y el desarrollo de nuestros niños y jóvenes.', 'fumigacion.jpg', '2024-11-29 18:14:40', 2, 1),
(18, 'Amelia Victoria Machuca demostró su habilidad y destreza, obteniendo el 2° lugar en formas y el 1° lugar en combate.', '¡Felicitaciones a nuestras talentosas estudiantes Alina Rebecca del 5°A y Amelia Victoria del 3°B por su destacada participación en la competencia de Taekwondo, Golden Warrior USA, en Nueva York, el pasado 17 de marzo!', 'judo 12 lugar.jpg', '2024-11-29 18:15:47', 2, 1),
(19, '1', '1', '1.jpg', '2024-11-29 18:18:48', 3, 1),
(20, '2', '2', '2.jpg', '2024-11-29 18:19:11', 3, 1),
(21, '3', '3', '3.jpg', '2024-11-29 18:19:18', 3, 1),
(22, '4', '4', '4.jpg', '2024-11-29 18:19:25', 3, 1),
(23, '5', '5', '5.jpg', '2024-11-29 18:19:33', 3, 1),
(24, '6', '6', '6.jpg', '2024-11-29 18:19:40', 3, 1),
(26, 'heloou', 'sdasasa', '1732926845_Avisos_1.jpg', '2024-11-30 00:08:06', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `pass` varchar(256) NOT NULL,
  `email` varchar(200) NOT NULL,
  `user_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `name`, `lastname`, `username`, `pass`, `email`, `user_type`) VALUES
(1, 'yohalmo', 'cruz', '', '$2y$10$BdMvCfiwaRx.5uqGS1lxBeWiFYtEQUtRY.n9XuTwT8u0j1/82b4Qi', 'yohalmodaniel16@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
