-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2024 a las 02:00:06
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `domingosavio`
--
CREATE DATABASE IF NOT EXISTS `domingosavio` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `domingosavio`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admisiones`
--

CREATE TABLE `admisiones` (
  `id_admision` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `edad` varchar(2) NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `nacionalidad` varchar(100) NOT NULL,
  `tel_contacto` varchar(8) NOT NULL,
  `correo` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `admisiones`
--

INSERT INTO `admisiones` (`id_admision`, `nombre`, `edad`, `sexo`, `nacionalidad`, `tel_contacto`, `correo`) VALUES
(5, 'yohalmo cruz perez', '18', 'Masculino', 'Salvadoreña', '78869898', 'yohalmodaniel16@gmail.com'),
(6, 'yohalmo cruz perez', '18', 'Masculino', 'Salvadoreña', '78869898', 'yohalmodaniel16@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `id_mensaje` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `correo` varchar(256) NOT NULL,
  `numero` varchar(8) NOT NULL,
  `mensaje` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`id_mensaje`, `nombre`, `correo`, `numero`, `mensaje`) VALUES
(1, 'santiago', 'seliasalvarado06@gmail.com', '64208727', 'hola'),
(4, 'yohalmo cruz perez', 'yohalmodaniel16@gmail.com', '78869898', 'Hola solo para hacer una consulta sobre las admisiones'),
(5, 'yohalmo cruz perez', 'yohalmodaniel16@gmail.com', '78869898', 'hola, esto es un prueba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
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
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`id`, `titulo`, `contenido`, `imagen`, `creado_en`, `Tipo_Publicaciones`, `activo`) VALUES
(9, 'Para todas las edades.', 'Tanto para niños y niñas.', '../uploads/../uploads/../uploads/../uploads/avisos_2.jpg', '2024-11-29 17:48:35', 0, 1),
(10, ' Via Crusis Viviente ', 'Una forma de evangelizar', 'Viacrusi.jpg', '2024-11-29 18:00:35', 1, 1),
(11, 'Intramuros ', 'Escuela Domingo Savio es un derroche de alegría', 'noticia-intramuros-1.jpg', '2024-11-29 18:01:25', 1, 1),
(12, 'Entrenos de futbol', 'Se parte del equipo del futbol!!', 'equipo de futbol.jpg', '2024-11-29 18:04:00', 1, 1),
(13, 'Cuaresma', 'Nos comprometemos a vivir este tiempo con un espíritu de penitencia, oración y caridad. Buscamos crecer en nuestra fe y acercarnos más a Dios y a nuestros hermanos y hermanas.', 'cuaresma.jpg', '2024-11-29 18:08:27', 1, 1),
(14, 'Celebracion a Don Bosco', 'Con mucha alegría y fervor se llevó a cabo la gran fiesta salesiana.', 'Fiesta de don bosco.jpg', '2024-11-29 18:10:32', 1, 1),
(16, '¡Orgullo Institucional!', 'Nos complace anunciar la destacada participación de nuestro talentoso estudiante de 9°A, Pablo Ernesto Espinoza Rivera, en el desarrollo de la undécima edición del prestigioso torneo internacional: ¡MIAMI CUP 2024! ', 'futbol fesa.jpg', '2024-11-29 18:13:43', 2, 1),
(17, 'La fumigación se llevó a cabo siguiendo todos los protocolos de seguridad establecidos', 'prueba 1', '../uploads/fumigacion.jpg', '2024-11-29 18:14:40', 2, 1),
(18, 'Amelia Victoria Machuca demostró su habilidad y destreza, obteniendo el 2° lugar en formas y el 1° lugar en combate.', '¡Felicitaciones a nuestras talentosas estudiantes Alina Rebecca del 5°A y Amelia Victoria del 3°B por su destacada participación en la competencia de Taekwondo, Golden Warrior USA, en Nueva York, el pasado 17 de marzo!', 'judo 12 lugar.jpg', '2024-11-29 18:15:47', 2, 1),
(19, '1', '1', '1.jpg', '2024-11-29 18:18:48', 3, 1),
(20, '2', '2', '2.jpg', '2024-11-29 18:19:11', 3, 1),
(21, '3', '3', '3.jpg', '2024-11-29 18:19:18', 3, 1),
(22, '4', '4', '4.jpg', '2024-11-29 18:19:25', 3, 1),
(23, '5', '5', '5.jpg', '2024-11-29 18:19:33', 3, 1),
(24, '6', '6', '6.jpg', '2024-11-29 18:19:40', 3, 1),
(26, 'niños y niñas', 'Admisiones 2025', '1732926845_Avisos_1.jpg', '2024-11-30 00:08:06', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes`
--

CREATE TABLE `redes` (
  `id_red` int(11) NOT NULL,
  `nombre` varchar(256) NOT NULL,
  `URL` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `textos`
--

CREATE TABLE `textos` (
  `id_textos` int(11) NOT NULL,
  `id_publicacion` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `subtitulo` varchar(255) DEFAULT NULL,
  `contenido` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `textos`
--

INSERT INTO `textos` (`id_textos`, `id_publicacion`, `titulo`, `subtitulo`, `contenido`) VALUES
(9, 9, 'Título de texto para publicación 9', 'Subtítulo para publicación 9', 'Contenido del texto relacionado con la publicación 9.'),
(10, 10, 'Título de texto para publicación 10', 'Subtítulo para publicación 10', 'Contenido del texto relacionado con la publicación 10.'),
(11, 11, 'Título de texto para publicación 11', 'Subtítulo para publicación 11', 'Contenido del texto relacionado con la publicación 11.'),
(12, 12, 'El sistema preventivo de Don Bosco', 'Educación con valores', 'El sistema educativo de Don Bosco se basa en principios como la razón, la religión y el amor. Cada día, formamos jóvenes con un enfoque preventivo para prevenir problemas, enseñar virtudes y ofrecer un ambiente de respeto y solidaridad.'),
(13, 13, 'Admisiones abiertas', 'Inscríbete hoy mismo', 'Las inscripciones para el próximo ciclo académico están abiertas. No pierdas la oportunidad de ser parte de una institución educativa comprometida con tu formación.'),
(14, 14, 'Construyendo el futuro', 'Estrategias para el crecimiento institucional', 'Nuestra institución está en constante evolución, adaptándose a los cambios y buscando siempre la mejora continua en la educación.'),
(16, 16, 'Trabajo en equipo', 'La importancia de la colaboración', 'El trabajo en equipo es fundamental para lograr objetivos comunes. En nuestra institución promovemos la cooperación entre estudiantes y docentes.'),
(17, 17, 'El aprendizaje interactivo', 'Educación que involucra a los estudiantes', 'El aprendizaje interactivo es clave para involucrar a los estudiantes en su propio proceso educativo. Con el uso de nuevas tecnologías, fomentamos la participación activa en clase.'),
(18, 18, 'Liderazgo juvenil', 'Formando a los futuros líderes', 'El liderazgo juvenil es una herramienta crucial para el desarrollo de los jóvenes. En nuestras actividades, promovemos la toma de decisiones, la responsabilidad y el compromiso social.'),
(19, 19, 'Valores en la educación', 'La base de nuestro sistema educativo', 'La enseñanza de valores como la honestidad, el respeto y la responsabilidad es fundamental en nuestra labor educativa. Formar buenos ciudadanos es uno de nuestros principales objetivos.'),
(20, 20, 'Innovación educativa', 'Adaptándose a los nuevos tiempos', 'El sistema educativo debe evolucionar con el tiempo. La innovación es esencial para que nuestros estudiantes se mantengan preparados para los desafíos del futuro.'),
(21, 21, 'Inclusión y diversidad', 'Educando para la equidad', 'La inclusión es una parte esencial de nuestra filosofía educativa. Trabajamos para que todos los estudiantes, independientemente de su origen, puedan acceder a las mismas oportunidades de aprendizaje.'),
(22, 22, 'Educación digital', 'El futuro de la enseñanza', 'La tecnología ha transformado la educación, y en nuestra institución, estamos adoptando herramientas digitales para mejorar el proceso de aprendizaje y hacerla más accesible para todos.'),
(23, 23, 'Prevención de problemas', 'Evitar situaciones conflictivas', 'Nuestro enfoque preventivo es clave para abordar posibles problemas antes de que ocurran. Fomentamos la comunicación abierta y la resolución pacífica de conflictos.'),
(24, 24, 'Desarrollo personal', 'Potenciando habilidades', 'Nos enfocamos en el desarrollo integral de cada estudiante, ayudándolos a descubrir y fortalecer sus habilidades personales y profesionales.'),
(26, 26, 'Educación integral', 'Desarrollo de competencias y valores', 'La educación integral busca un equilibrio entre el desarrollo académico y personal. Nos aseguramos de que nuestros estudiantes crezcan como individuos completos, con competencias y valores sólidos.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
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
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `name`, `lastname`, `username`, `pass`, `email`, `user_type`) VALUES
(1, 'Santiago', 'Elias 2', 'eliasadmin', '$2y$10$gTG0p5ny0yE4.pumZK0zi.lowqdv216fg0oWLsaLL2Q6sflwVWHf6', 'seliasalvarado06@gmail.com', 0),
(2, 'yohalmo', 'cruz perez', 'yohacrz', '$2y$10$KihUe67lxSubu5gPFdVVouWzCqV7hkfvFywzT53A9oGBQLcQdujJO', 'yohalmodaniel16@gmail.com', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admisiones`
--
ALTER TABLE `admisiones`
  ADD PRIMARY KEY (`id_admision`);

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`id_mensaje`);

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `redes`
--
ALTER TABLE `redes`
  ADD PRIMARY KEY (`id_red`);

--
-- Indices de la tabla `textos`
--
ALTER TABLE `textos`
  ADD PRIMARY KEY (`id_textos`),
  ADD KEY `id_publicacion` (`id_publicacion`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admisiones`
--
ALTER TABLE `admisiones`
  MODIFY `id_admision` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `id_mensaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `redes`
--
ALTER TABLE `redes`
  MODIFY `id_red` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `textos`
--
ALTER TABLE `textos`
  MODIFY `id_textos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `textos`
--
ALTER TABLE `textos`
  ADD CONSTRAINT `textos_ibfk_1` FOREIGN KEY (`id_publicacion`) REFERENCES `publicaciones` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
