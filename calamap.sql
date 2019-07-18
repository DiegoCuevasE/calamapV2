-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 17, 2019 at 03:39 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `calamap`
--

-- --------------------------------------------------------

--
-- Table structure for table `idiomas`
--

CREATE TABLE `idiomas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_idioma` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `idiomas`
--

INSERT INTO `idiomas` (`id`, `nombre_idioma`, `created_at`, `updated_at`) VALUES
(1, 'Español', NULL, NULL),
(2, 'Ingles', NULL, NULL),
(3, 'Aleman', NULL, NULL),
(4, 'Frances', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `idioma_mype`
--

CREATE TABLE `idioma_mype` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mype_id` bigint(20) UNSIGNED NOT NULL,
  `idioma_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `idioma_mype`
--

INSERT INTO `idioma_mype` (`id`, `mype_id`, `idioma_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 4, NULL, NULL),
(4, 11, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `imagenmypes`
--

CREATE TABLE `imagenmypes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mype_id` bigint(20) UNSIGNED NOT NULL,
  `enlace_imagen_mype` varchar(254) COLLATE utf8_general_ci NOT NULL,
  `tipo_imagen_mype` varchar(15) COLLATE utf8_general_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `imagenmypes`
--

INSERT INTO `imagenmypes` (`id`, `mype_id`, `enlace_imagen_mype`, `tipo_imagen_mype`, `thumbnail`, `created_at`, `updated_at`) VALUES
(1, 1, 'images/originals/29241563345080.jpg', 'logo', 'images/thumbnails/29241563345080.jpg', '2019-07-17 10:31:20', '2019-07-17 10:31:20'),
(2, 1, 'images/originals/28901563345080.jpeg', 'galeria', 'images/thumbnails/28901563345080.jpeg', '2019-07-17 10:31:20', '2019-07-17 10:31:20'),
(3, 1, 'images/originals/25931563345080.jpg', 'galeria', 'images/thumbnails/25931563345080.jpg', '2019-07-17 10:31:20', '2019-07-17 10:31:20'),
(4, 1, 'images/originals/48921563345080.jpg', 'galeria', 'images/thumbnails/48921563345080.jpg', '2019-07-17 10:31:20', '2019-07-17 10:31:20'),
(5, 1, 'images/originals/24751563345080.jpg', 'galeria', 'images/thumbnails/24751563345080.jpg', '2019-07-17 10:31:20', '2019-07-17 10:31:20'),
(14, 4, 'images/originals/30221563353554.jpeg', 'logo', 'images/thumbnails/30221563353554.jpeg', '2019-07-17 12:52:34', '2019-07-17 12:52:34'),
(15, 4, 'images/originals/42111563353554.jpg', 'galeria', 'images/thumbnails/42111563353554.jpg', '2019-07-17 12:52:34', '2019-07-17 12:52:34'),
(16, 4, 'images/originals/63151563353554.jpg', 'galeria', 'images/thumbnails/63151563353554.jpg', '2019-07-17 12:52:34', '2019-07-17 12:52:34'),
(17, 4, 'images/originals/63781563353554.jpg', 'galeria', 'images/thumbnails/63781563353554.jpg', '2019-07-17 12:52:34', '2019-07-17 12:52:34'),
(18, 6, 'images/originals/40141563373346.png', 'logo', 'images/thumbnails/40141563373346.png', '2019-07-17 18:22:26', '2019-07-17 18:22:26'),
(19, 6, 'images/originals/79991563373347.jpg', 'galeria', 'images/thumbnails/79991563373347.jpg', '2019-07-17 18:22:27', '2019-07-17 18:22:27'),
(20, 6, 'images/originals/70631563373347.jpg', 'galeria', 'images/thumbnails/70631563373347.jpg', '2019-07-17 18:22:27', '2019-07-17 18:22:27');

-- --------------------------------------------------------

--
-- Table structure for table `imagen_sitio_turisticos`
--

CREATE TABLE `imagen_sitio_turisticos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sitio_turistico_id` bigint(20) UNSIGNED NOT NULL,
  `enlace_imagen_turistico` varchar(254) COLLATE utf8_general_ci NOT NULL,
  `tipo_imagen_turistico` varchar(15) COLLATE utf8_general_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `imagen_sitio_turisticos`
--

INSERT INTO `imagen_sitio_turisticos` (`id`, `sitio_turistico_id`, `enlace_imagen_turistico`, `tipo_imagen_turistico`, `thumbnail`, `created_at`, `updated_at`) VALUES
(33, 18, 'images/originals/51021563359707.jpg', 'logo', 'images/thumbnails/51021563359707.jpg', '2019-07-17 14:35:07', '2019-07-17 14:35:07'),
(34, 18, 'images/originals/13421563359707.jpg', 'galeria', 'images/thumbnails/13421563359707.jpg', '2019-07-17 14:35:07', '2019-07-17 14:35:07'),
(35, 18, 'images/originals/53101563359707.jpg', 'galeria', 'images/thumbnails/53101563359707.jpg', '2019-07-17 14:35:07', '2019-07-17 14:35:07'),
(36, 18, 'images/originals/82721563359707.jpg', 'galeria', 'images/thumbnails/82721563359707.jpg', '2019-07-17 14:35:07', '2019-07-17 14:35:07'),
(37, 20, 'images/originals/27891563362508.jpg', 'logo', 'images/thumbnails/27891563362508.jpg', '2019-07-17 15:21:48', '2019-07-17 15:21:48'),
(38, 20, 'images/originals/18141563362508.jpg', 'galeria', 'images/thumbnails/18141563362508.jpg', '2019-07-17 15:21:48', '2019-07-17 15:21:48'),
(39, 20, 'images/originals/69701563362508.jpg', 'galeria', 'images/thumbnails/69701563362508.jpg', '2019-07-17 15:21:48', '2019-07-17 15:21:48'),
(40, 20, 'images/originals/18071563362509.jpg', 'galeria', 'images/thumbnails/18071563362509.jpg', '2019-07-17 15:21:49', '2019-07-17 15:21:49');

-- --------------------------------------------------------

--
-- Table structure for table `locomocions`
--

CREATE TABLE `locomocions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `linea_locomocion` varchar(2) COLLATE utf8_general_ci NOT NULL,
  `recorrido_locomocion` varchar(1) COLLATE utf8_general_ci NOT NULL,
  `tipo_locomocion` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locomocion_mype`
--

CREATE TABLE `locomocion_mype` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `locomocion_id` bigint(20) UNSIGNED NOT NULL,
  `mype_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locomocion_sitio_turistico`
--

CREATE TABLE `locomocion_sitio_turistico` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `locomocion_id` bigint(20) UNSIGNED NOT NULL,
  `turistico_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_06_05_181135_create_users_table', 1),
(2, '2019_07_17_055645_create_mypes_table', 1),
(3, '2019_07_17_055656_create_imagenmypes_table', 1),
(4, '2019_07_17_055928_create_sitio_turisticos_table', 1),
(5, '2019_07_17_060011_create_servicios_table', 1),
(6, '2019_07_17_060121_create_imagen_sitio_turisticos_table', 1),
(7, '2019_07_17_060730_create_locomocions_table', 1),
(8, '2019_07_17_061141_create_servicio_mype_table', 1),
(9, '2019_07_17_061351_create_locomocion_sitio_turistico_table', 1),
(10, '2019_07_17_061515_create_sitio_turistico_servicio_table', 1),
(11, '2019_07_17_061601_create_locomocion_mype_table', 1),
(12, '2019_07_17_061706_create_idiomas_table', 1),
(13, '2019_07_17_061742_create_idioma_mype_table', 1),
(14, '2019_07_17_061924_create_visitas_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mypes`
--

CREATE TABLE `mypes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nombre_fantasia_mype` varchar(20) COLLATE utf8_general_ci DEFAULT NULL,
  `razon_social_mype` varchar(100) COLLATE utf8_general_ci DEFAULT NULL,
  `rubro_mype` varchar(50) COLLATE utf8_general_ci DEFAULT NULL,
  `direccion_mype` varchar(50) COLLATE utf8_general_ci DEFAULT NULL,
  `descripcion_mype` varchar(254) COLLATE utf8_general_ci DEFAULT NULL,
  `horario_mype` varchar(254) COLLATE utf8_general_ci DEFAULT NULL,
  `estado_mype` tinyint(1) DEFAULT NULL,
  `telefono_mype` varchar(15) COLLATE utf8_general_ci DEFAULT NULL,
  `celular_mype` varchar(15) COLLATE utf8_general_ci DEFAULT NULL,
  `correo_mype` varchar(50) COLLATE utf8_general_ci DEFAULT NULL,
  `facebook_mype` varchar(50) COLLATE utf8_general_ci DEFAULT NULL,
  `instagram_mype` varchar(50) COLLATE utf8_general_ci DEFAULT NULL,
  `pagina_mype` varchar(50) COLLATE utf8_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `mypes`
--

INSERT INTO `mypes` (`id`, `user_id`, `nombre_fantasia_mype`, `razon_social_mype`, `rubro_mype`, `direccion_mype`, `descripcion_mype`, `horario_mype`, `estado_mype`, `telefono_mype`, `celular_mype`, `correo_mype`, `facebook_mype`, `instagram_mype`, `pagina_mype`, `created_at`, `updated_at`) VALUES
(1, 1, 'Hotel MDS', 'HOTELES MDS SA', 'Hotelería', 'Balmaceda 2354', 'hotels  jdsja mnfsdmfbsjhgj w', 'Lunes a Sabado de 00:00 hrs a 09:30 hrs', 1, '93857721', '45848367', 'hotel.mds@gmail.com', 'facebook.com/mds', 'instagram.com/mds', 'www.mds.cl', '2019-07-17 10:31:20', '2019-07-17 10:31:20'),
(4, 2, 'Hotel XL', NULL, 'Hotelería', NULL, NULL, 'Lunes a Lunes de 00:00 hrs a 00:00 hrs', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-17 12:52:34', '2019-07-17 12:52:34'),
(5, 2, 'Hotel ASD', 'ASD', 'Hotelería', NULL, NULL, 'Lunes a Lunes de 00:00 hrs a 00:00 hrs', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-17 18:15:43', '2019-07-17 18:15:43'),
(6, 2, 'Hotel del desierto', 'Hotel Desierto', 'Hotelería', 'asdsad', 'sdfmdsndsmnsd,msdncs', 'Lunes a Viernes de 02:00 hrs a 13:30 hrs', 1, 'sdfdfssdf', 'sdfdfs', 'dsffdssfd', 'sdfdsfdfssdf', 'dsfdsfsdf', 'sddfsddf', '2019-07-17 18:22:26', '2019-07-17 18:22:26'),
(11, 2, NULL, 'asdsddffttfff', 'Gastronomía', NULL, NULL, 'Lunes a Lunes de 00:00 hrs a 00:00 hrs', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-17 18:39:50', '2019-07-17 18:39:50');

-- --------------------------------------------------------

--
-- Table structure for table `servicios`
--

CREATE TABLE `servicios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_servicio` varchar(20) COLLATE utf8_general_ci NOT NULL,
  `tipo_servicio` varchar(20) COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `servicios`
--

INSERT INTO `servicios` (`id`, `nombre_servicio`, `tipo_servicio`, `created_at`, `updated_at`) VALUES
(1, 'Wifi', 'Hotelería', NULL, NULL),
(2, 'Piscina', 'Hotelería', NULL, NULL),
(3, 'Baño privado', 'Hotelería', NULL, NULL),
(4, 'Tienda fisica', 'Bazares', NULL, NULL),
(5, 'Orfebreria', 'Artesanía', NULL, NULL),
(6, 'Desayuno', 'Gastronomía', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `servicio_mype`
--

CREATE TABLE `servicio_mype` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `servicio_id` bigint(20) UNSIGNED NOT NULL,
  `mype_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `servicio_mype`
--

INSERT INTO `servicio_mype` (`id`, `servicio_id`, `mype_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, NULL, NULL),
(2, 1, 1, NULL, NULL),
(3, 2, 5, NULL, NULL),
(4, 3, 5, NULL, NULL),
(5, 1, 6, NULL, NULL),
(6, 6, 11, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sitio_turisticos`
--

CREATE TABLE `sitio_turisticos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `tipo_turistico` varchar(50) COLLATE utf8_general_ci NOT NULL,
  `nombre_turistico` varchar(50) COLLATE utf8_general_ci NOT NULL,
  `horario_turistico` varchar(254) COLLATE utf8_general_ci NOT NULL,
  `direccion_turistico` varchar(254) COLLATE utf8_general_ci NOT NULL,
  `descripcion_turistico` varchar(254) COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `sitio_turisticos`
--

INSERT INTO `sitio_turisticos` (`id`, `user_id`, `tipo_turistico`, `nombre_turistico`, `horario_turistico`, `direccion_turistico`, `descripcion_turistico`, `created_at`, `updated_at`) VALUES
(18, 2, 'Liberada', 'Parque el Loa', 'Lunes a Viernes de 06:00 hrs a 09:30 hrs', 'Caspana 2356', 'paruqhe jdsfhjsddjshjfs', '2019-07-17 14:35:07', '2019-07-17 14:35:07'),
(20, 2, 'Liberada', 'Parque Eolico', 'Lunes a Domingo de 00:00 hrs a 23:30 hrs', 'Afueras de Calama', 'Parquek kjdkjskhcjskjd', '2019-07-17 15:21:48', '2019-07-17 15:21:48');

-- --------------------------------------------------------

--
-- Table structure for table `sitio_turistico_servicio`
--

CREATE TABLE `sitio_turistico_servicio` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `turistico_id` bigint(20) UNSIGNED NOT NULL,
  `servicio_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(50) COLLATE utf8_general_ci NOT NULL,
  `apellido_usuario` varchar(50) COLLATE utf8_general_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `telefono_usuario` varchar(15) COLLATE utf8_general_ci DEFAULT NULL,
  `celular_usuario` varchar(15) COLLATE utf8_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `fechaNac` date DEFAULT NULL,
  `nacionalidad_usuario` varchar(255) COLLATE utf8_general_ci DEFAULT NULL,
  `genero` tinyint(1) DEFAULT NULL,
  `tipo_usuario` varchar(50) COLLATE utf8_general_ci NOT NULL,
  `estado_usuario` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nombre`, `apellido_usuario`, `password`, `telefono_usuario`, `celular_usuario`, `email`, `fechaNac`, `nacionalidad_usuario`, `genero`, `tipo_usuario`, `estado_usuario`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'diego', NULL, '$2y$10$PYu9MTxCk28eTI2IN8HzpeTyoBE0lBSq2dL4Dz8L9.nwZj3A2zpJu', NULL, NULL, 'diego.dpce@gmail.com', '1994-09-29', NULL, 0, '1', NULL, NULL, '2019-07-17 10:29:43', '2019-07-17 10:29:43'),
(2, 'Patricio', NULL, '$2y$10$NCcauyXrAMMnt5JnvZ.9O.KcYzcjB2HxS5aNNPr7Cc1xaeAVkqCVq', NULL, NULL, 'pato.dpce@gmail.com', NULL, NULL, 0, '1', NULL, NULL, '2019-07-17 12:46:16', '2019-07-17 12:46:16'),
(3, 'Diego', NULL, '$2y$10$2RYOWNJ.V4ymE0P.7nVhheQDy2VgrptL4wzLCkARdlczVITCq4ZuW', NULL, NULL, 'diego.dpcas@gmail.com', NULL, NULL, NULL, '1', NULL, NULL, '2019-07-17 19:04:34', '2019-07-17 19:04:34');

-- --------------------------------------------------------

--
-- Table structure for table `visitas`
--

CREATE TABLE `visitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `mype_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `visitas`
--

INSERT INTO `visitas` (`id`, `user_id`, `mype_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2019-07-17 10:31:49', '2019-07-17 10:31:49'),
(2, 1, 1, '2019-07-17 10:31:49', '2019-07-17 10:31:49'),
(5, 2, 1, '2019-07-17 13:02:20', '2019-07-17 13:02:20'),
(6, 2, 1, '2019-07-17 13:02:22', '2019-07-17 13:02:22'),
(7, 2, 1, '2019-07-17 13:02:23', '2019-07-17 13:02:23'),
(8, 2, 1, '2019-07-17 13:02:23', '2019-07-17 13:02:23'),
(9, 2, 1, '2019-07-17 13:02:44', '2019-07-17 13:02:44'),
(10, 2, 1, '2019-07-17 13:02:45', '2019-07-17 13:02:45'),
(11, 2, 1, '2019-07-17 13:05:58', '2019-07-17 13:05:58'),
(12, 2, 1, '2019-07-17 13:05:59', '2019-07-17 13:05:59'),
(13, 2, 1, '2019-07-17 13:06:09', '2019-07-17 13:06:09'),
(14, 2, 1, '2019-07-17 13:06:10', '2019-07-17 13:06:10'),
(15, 2, 1, '2019-07-17 13:06:10', '2019-07-17 13:06:10'),
(16, 2, 1, '2019-07-17 13:06:11', '2019-07-17 13:06:11'),
(17, 2, 1, '2019-07-17 13:06:28', '2019-07-17 13:06:28'),
(18, 2, 1, '2019-07-17 13:06:30', '2019-07-17 13:06:30'),
(19, 2, 1, '2019-07-17 13:06:55', '2019-07-17 13:06:55'),
(20, 2, 1, '2019-07-17 13:07:15', '2019-07-17 13:07:15'),
(21, 2, 1, '2019-07-17 13:07:36', '2019-07-17 13:07:36'),
(22, 2, 1, '2019-07-17 13:07:44', '2019-07-17 13:07:44'),
(23, 2, 1, '2019-07-17 13:07:45', '2019-07-17 13:07:45'),
(24, 2, 1, '2019-07-17 13:07:46', '2019-07-17 13:07:46'),
(25, 2, 1, '2019-07-17 13:07:47', '2019-07-17 13:07:47'),
(26, 2, 1, '2019-07-17 13:08:37', '2019-07-17 13:08:37'),
(27, 2, 1, '2019-07-17 13:10:36', '2019-07-17 13:10:36'),
(28, 2, 1, '2019-07-17 13:11:22', '2019-07-17 13:11:22'),
(29, 2, 1, '2019-07-17 13:11:38', '2019-07-17 13:11:38'),
(30, 2, 1, '2019-07-17 13:12:23', '2019-07-17 13:12:23'),
(31, 2, 1, '2019-07-17 13:12:38', '2019-07-17 13:12:38'),
(32, 2, 1, '2019-07-17 13:12:53', '2019-07-17 13:12:53'),
(33, 2, 1, '2019-07-17 13:12:58', '2019-07-17 13:12:58'),
(34, 2, 4, '2019-07-17 13:13:29', '2019-07-17 13:13:29'),
(35, 2, 1, '2019-07-17 13:13:34', '2019-07-17 13:13:34'),
(36, 2, 1, '2019-07-17 13:13:35', '2019-07-17 13:13:35'),
(37, 2, 4, '2019-07-17 13:13:36', '2019-07-17 13:13:36'),
(38, 2, 4, '2019-07-17 13:13:36', '2019-07-17 13:13:36'),
(39, 2, 4, '2019-07-17 13:13:38', '2019-07-17 13:13:38'),
(40, 2, 4, '2019-07-17 13:13:39', '2019-07-17 13:13:39'),
(41, 2, 1, '2019-07-17 13:13:59', '2019-07-17 13:13:59'),
(42, 2, 1, '2019-07-17 13:17:43', '2019-07-17 13:17:43'),
(43, 2, 1, '2019-07-17 13:17:45', '2019-07-17 13:17:45'),
(44, 2, 1, '2019-07-17 13:17:46', '2019-07-17 13:17:46'),
(45, 2, 4, '2019-07-17 13:17:46', '2019-07-17 13:17:46'),
(46, 2, 4, '2019-07-17 13:17:47', '2019-07-17 13:17:47'),
(47, 2, 1, '2019-07-17 13:17:48', '2019-07-17 13:17:48'),
(48, 2, 1, '2019-07-17 13:17:49', '2019-07-17 13:17:49'),
(49, 2, 4, '2019-07-17 13:17:51', '2019-07-17 13:17:51'),
(50, 2, 4, '2019-07-17 13:17:54', '2019-07-17 13:17:54'),
(51, 2, 1, '2019-07-17 13:18:41', '2019-07-17 13:18:41'),
(52, 2, 1, '2019-07-17 15:35:24', '2019-07-17 15:35:24'),
(53, 2, 1, '2019-07-17 15:35:26', '2019-07-17 15:35:26'),
(54, 2, 4, '2019-07-17 15:35:27', '2019-07-17 15:35:27'),
(55, 2, 4, '2019-07-17 15:35:29', '2019-07-17 15:35:29'),
(56, 2, 5, '2019-07-17 18:22:41', '2019-07-17 18:22:41'),
(57, 2, 6, '2019-07-17 18:22:47', '2019-07-17 18:22:47'),
(58, 2, 11, '2019-07-17 18:39:58', '2019-07-17 18:39:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `idiomas`
--
ALTER TABLE `idiomas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `idioma_mype`
--
ALTER TABLE `idioma_mype`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idioma_mype_mype_id_foreign` (`mype_id`),
  ADD KEY `idioma_mype_idioma_id_foreign` (`idioma_id`);

--
-- Indexes for table `imagenmypes`
--
ALTER TABLE `imagenmypes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `imagenmypes_mype_id_foreign` (`mype_id`);

--
-- Indexes for table `imagen_sitio_turisticos`
--
ALTER TABLE `imagen_sitio_turisticos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `imagen_sitio_turisticos_sitioturistico_id_foreign` (`sitio_turistico_id`);

--
-- Indexes for table `locomocions`
--
ALTER TABLE `locomocions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locomocion_mype`
--
ALTER TABLE `locomocion_mype`
  ADD PRIMARY KEY (`id`),
  ADD KEY `locomocion_mype_locomocion_id_foreign` (`locomocion_id`),
  ADD KEY `locomocion_mype_mype_id_foreign` (`mype_id`);

--
-- Indexes for table `locomocion_sitio_turistico`
--
ALTER TABLE `locomocion_sitio_turistico`
  ADD PRIMARY KEY (`id`),
  ADD KEY `locomocion_sitio_turistico_locomocion_id_foreign` (`locomocion_id`),
  ADD KEY `locomocion_sitio_turistico_turistico_id_foreign` (`turistico_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mypes`
--
ALTER TABLE `mypes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mypes_razon_social_mype_unique` (`razon_social_mype`),
  ADD KEY `mypes_user_id_foreign` (`user_id`);

--
-- Indexes for table `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicio_mype`
--
ALTER TABLE `servicio_mype`
  ADD PRIMARY KEY (`id`),
  ADD KEY `servicio_mype_servicio_id_foreign` (`servicio_id`),
  ADD KEY `servicio_mype_mype_id_foreign` (`mype_id`);

--
-- Indexes for table `sitio_turisticos`
--
ALTER TABLE `sitio_turisticos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sitio_turisticos_nombre_turistico_unique` (`nombre_turistico`),
  ADD KEY `sitio_turisticos_user_id_foreign` (`user_id`);

--
-- Indexes for table `sitio_turistico_servicio`
--
ALTER TABLE `sitio_turistico_servicio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sitio_turistico_servicio_turistico_id_foreign` (`turistico_id`),
  ADD KEY `sitio_turistico_servicio_servicio_id_foreign` (`servicio_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visitas`
--
ALTER TABLE `visitas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `visitas_user_id_foreign` (`user_id`),
  ADD KEY `visitas_mype_id_foreign` (`mype_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `idiomas`
--
ALTER TABLE `idiomas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `idioma_mype`
--
ALTER TABLE `idioma_mype`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `imagenmypes`
--
ALTER TABLE `imagenmypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `imagen_sitio_turisticos`
--
ALTER TABLE `imagen_sitio_turisticos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `locomocions`
--
ALTER TABLE `locomocions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locomocion_mype`
--
ALTER TABLE `locomocion_mype`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locomocion_sitio_turistico`
--
ALTER TABLE `locomocion_sitio_turistico`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `mypes`
--
ALTER TABLE `mypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `servicio_mype`
--
ALTER TABLE `servicio_mype`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sitio_turisticos`
--
ALTER TABLE `sitio_turisticos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `sitio_turistico_servicio`
--
ALTER TABLE `sitio_turistico_servicio`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `visitas`
--
ALTER TABLE `visitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `idioma_mype`
--
ALTER TABLE `idioma_mype`
  ADD CONSTRAINT `idioma_mype_idioma_id_foreign` FOREIGN KEY (`idioma_id`) REFERENCES `idiomas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idioma_mype_mype_id_foreign` FOREIGN KEY (`mype_id`) REFERENCES `mypes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `imagenmypes`
--
ALTER TABLE `imagenmypes`
  ADD CONSTRAINT `imagenmypes_mype_id_foreign` FOREIGN KEY (`mype_id`) REFERENCES `mypes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `imagen_sitio_turisticos`
--
ALTER TABLE `imagen_sitio_turisticos`
  ADD CONSTRAINT `imagen_sitio_turisticos_sitioturistico_id_foreign` FOREIGN KEY (`sitio_turistico_id`) REFERENCES `sitio_turisticos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `locomocion_mype`
--
ALTER TABLE `locomocion_mype`
  ADD CONSTRAINT `locomocion_mype_locomocion_id_foreign` FOREIGN KEY (`locomocion_id`) REFERENCES `locomocions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `locomocion_mype_mype_id_foreign` FOREIGN KEY (`mype_id`) REFERENCES `mypes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `locomocion_sitio_turistico`
--
ALTER TABLE `locomocion_sitio_turistico`
  ADD CONSTRAINT `locomocion_sitio_turistico_locomocion_id_foreign` FOREIGN KEY (`locomocion_id`) REFERENCES `locomocions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `locomocion_sitio_turistico_turistico_id_foreign` FOREIGN KEY (`turistico_id`) REFERENCES `sitio_turisticos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mypes`
--
ALTER TABLE `mypes`
  ADD CONSTRAINT `mypes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `servicio_mype`
--
ALTER TABLE `servicio_mype`
  ADD CONSTRAINT `servicio_mype_mype_id_foreign` FOREIGN KEY (`mype_id`) REFERENCES `mypes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `servicio_mype_servicio_id_foreign` FOREIGN KEY (`servicio_id`) REFERENCES `servicios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sitio_turisticos`
--
ALTER TABLE `sitio_turisticos`
  ADD CONSTRAINT `sitio_turisticos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sitio_turistico_servicio`
--
ALTER TABLE `sitio_turistico_servicio`
  ADD CONSTRAINT `sitio_turistico_servicio_servicio_id_foreign` FOREIGN KEY (`servicio_id`) REFERENCES `servicios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sitio_turistico_servicio_turistico_id_foreign` FOREIGN KEY (`turistico_id`) REFERENCES `sitio_turisticos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `visitas`
--
ALTER TABLE `visitas`
  ADD CONSTRAINT `visitas_mype_id_foreign` FOREIGN KEY (`mype_id`) REFERENCES `mypes` (`id`),
  ADD CONSTRAINT `visitas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
