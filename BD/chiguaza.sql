-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-09-2023 a las 00:16:52
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `chiguaza`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos`
--

CREATE TABLE `archivos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nombre` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `carpeta_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `archivos`
--

INSERT INTO `archivos` (`id`, `created_at`, `updated_at`, `nombre`, `url`, `carpeta_id`) VALUES
(6, '2023-08-18 23:27:05', '2023-08-18 23:27:05', 'MODELO DE OFICIO DIRIGIDO VOCAL DE ACCION SOCIAL DEL GADPCH', 'public/archivos/6.pdf', 18),
(7, '2023-08-18 23:29:09', '2023-08-18 23:29:09', 'MODELO DE OFICIO DIRIGIDO VOCAL DE PRODUCCION DEL GADPCH', 'public/archivos/7.pdf', 17),
(8, '2023-08-18 23:31:37', '2023-08-18 23:31:37', 'MODELO DE OFICIO DIRIGIDO VOCAL DE DEPORTE DEL GADPCH', 'public/archivos/8.pdf', 16),
(9, '2023-08-18 23:33:43', '2023-08-18 23:33:43', 'MODELO DE OFICIO DIRIGIDO AL VOCAL PLANIFICACION DEL GADPCH', 'public/archivos/9.pdf', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autoridads`
--

CREATE TABLE `autoridads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `foto2` varchar(255) DEFAULT NULL,
  `url_video` varchar(255) DEFAULT NULL,
  `nombres_completos` varchar(255) DEFAULT NULL,
  `rol` varchar(255) DEFAULT NULL,
  `frase` varchar(255) DEFAULT NULL,
  `logro_1` varchar(255) DEFAULT NULL,
  `logro_2` varchar(255) DEFAULT NULL,
  `logro_3` varchar(255) DEFAULT NULL,
  `logro_4` varchar(255) DEFAULT NULL,
  `anio_experiencia` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `autoridads`
--

INSERT INTO `autoridads` (`id`, `created_at`, `updated_at`, `foto`, `foto2`, `url_video`, `nombres_completos`, `rol`, `frase`, `logro_1`, `logro_2`, `logro_3`, `logro_4`, `anio_experiencia`) VALUES
(1, '2023-08-10 22:36:57', '2023-08-18 22:22:22', 'public/autoridad/foto/1.png', 'public/autoridad/foto2/1.png', 'https://www.youtube.com/watch?v=HrbWav2vEKI', 'Sr.Julian Tii', 'Presidente del Gad Parroquial Chiguaza', 'Cuando los tiempos se ponen difíciles, no nos damos por vencido nos levantamos.', 'Obrero del Gad Chiguaza período 2019-2013', NULL, 'Agricultor', NULL, '4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carpetas`
--

CREATE TABLE `carpetas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nombre` varchar(255) NOT NULL,
  `vista` enum('SI','NO') NOT NULL DEFAULT 'SI',
  `carpeta_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carpetas`
--

INSERT INTO `carpetas` (`id`, `created_at`, `updated_at`, `nombre`, `vista`, `carpeta_id`) VALUES
(1, '2023-08-10 22:29:46', '2023-08-10 22:29:46', 'TRAMITES', 'SI', NULL),
(2, '2023-08-10 22:29:46', '2023-08-10 22:29:46', 'TRANPARENCIA', 'SI', NULL),
(3, '2023-08-10 22:29:46', '2023-08-10 22:29:46', 'RENDICIÓN DE CUENTAS', 'SI', NULL),
(6, '2023-08-10 23:20:52', '2023-08-10 23:20:52', '2023', 'SI', 2),
(7, '2023-08-10 23:21:08', '2023-08-10 23:21:08', 'ENERO', 'SI', 6),
(8, '2023-08-10 23:21:19', '2023-08-10 23:21:19', '2023', 'SI', 3),
(9, '2023-08-10 23:21:28', '2023-08-10 23:21:28', 'ENERO', 'SI', 8),
(11, '2023-08-10 23:24:13', '2023-08-10 23:24:13', 'FEBRERO', 'SI', 6),
(13, '2023-08-10 23:24:36', '2023-08-10 23:24:36', 'FEBRERO', 'SI', 8),
(14, '2023-08-11 19:34:06', '2023-08-11 19:34:06', 'PLANIFICACIÓN Y OBRAS PUBLICAS', 'SI', 1),
(16, '2023-08-11 19:34:30', '2023-08-11 19:34:30', 'DEPORTE Y CULTURA', 'SI', 1),
(17, '2023-08-11 19:35:25', '2023-08-11 19:35:25', 'PRODUCCIÓN Y CULTURA', 'SI', 1),
(18, '2023-08-18 22:45:58', '2023-08-18 22:45:58', 'ACCIÓN SOCIAL', 'SI', 1),
(20, '2023-08-18 23:16:28', '2023-08-18 23:16:28', 'OFICIO PARA PRESIDENTE GADCH', 'SI', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `created_at`, `updated_at`, `email`, `telefono`, `direccion`, `facebook`, `twitter`, `instagram`, `youtube`, `logo`, `descripcion`) VALUES
(1, '2023-08-11 21:33:56', '2023-08-17 22:20:34', 'gadparroquialchiguaza@gmail.com', '073048345-0981331552', 'Chiguaza -Huamboya - Morona Santiago', 'https://www.facebook.com/gadchiguaza.oficial', 'https://www.facebook.com/gadchiguaza.oficial', 'https://www.facebook.com/gadchiguaza.oficial', 'https://www.facebook.com/gadchiguaza.oficial', 'public/logo/logo.png', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_03_153349_create_sliders_table', 1),
(6, '2023_08_03_212802_create_autoridads_table', 1),
(7, '2023_08_09_170834_create_carpetas_table', 1),
(8, '2023_08_09_181414_create_archivos_table', 1),
(9, '2023_08_10_171017_create_noticias_table', 1),
(10, '2023_08_10_181321_create_queja_sugerencias_table', 1),
(11, '2023_08_11_140326_create_empresas_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `titulo` varchar(255) NOT NULL,
  `detalle` text NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `vista` enum('SI','NO') NOT NULL DEFAULT 'NO',
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `created_at`, `updated_at`, `titulo`, `detalle`, `foto`, `vista`, `user_id`) VALUES
(2, '2023-08-18 18:37:05', '2023-08-18 18:37:20', '𝐏𝐑𝐄𝐒𝐈𝐃𝐄𝐍𝐓𝐄 𝐃𝐄𝐋 𝐆𝐀𝐃 𝐏𝐀𝐑𝐑𝐎𝐐𝐔𝐈𝐀𝐋 𝐃𝐄 𝐂𝐇𝐈𝐆𝐔𝐀𝐙𝐀 𝐏𝐀𝐑𝐓𝐈𝐂𝐈𝐏𝐀 𝐄𝐍 𝐋𝐀 𝐒𝐄𝐒𝐈𝐎𝐍 𝐒𝐎𝐋𝐄𝐌𝐍𝐄 𝐏𝐎𝐑 𝐄𝐋 𝐀𝐍𝐈𝐕𝐄𝐑𝐒𝐀𝐑𝐈𝐎 𝐃𝐄 𝐅𝐔𝐍𝐃𝐀𝐂𝐈𝐎𝐍 𝐃𝐄 𝐋𝐀 𝐂𝐎𝐌𝐔𝐍𝐈𝐃𝐀𝐃 𝐒𝐇𝐔𝐀𝐑 𝐂𝐇𝐈𝐖𝐈𝐀𝐒 𝐒𝐀𝐍 𝐏𝐄𝐃𝐑𝐎.', '<p>El Presidente del Gad Parroquial de Chiguaza Juli&aacute;n Tii particip&oacute; el pasado s&aacute;bado 01 de julio del 2023 en la sesi&oacute;n solemne por el aniversario de creaci&oacute;n de la Comunidad Shuar Chiwias San Pedro, evento que cont&oacute; con la presencia de autoridades, cantonales y locales.</p>', 'public/noticias/2.jpg', 'SI', 3),
(3, '2023-08-18 18:39:57', '2023-08-18 18:40:10', '𝐄𝐋 𝐆𝐀𝐃 𝐏𝐀𝐑𝐑𝐎𝐐𝐔𝐈𝐀𝐋 𝐃𝐄 𝐂𝐇𝐈𝐆𝐔𝐀𝐙𝐀 𝐑𝐄𝐀𝐋𝐈𝐙𝐀 𝐄𝐋 𝐌𝐀𝐍𝐓𝐄𝐍𝐈𝐌𝐈𝐄𝐍𝐓𝐎 𝐃𝐄 𝐋𝐀 𝐕Í𝐀 𝐃𝐄𝐒𝐃𝐄 𝐋𝐀 𝐓𝐑𝐎𝐍𝐂𝐀𝐋 𝐀𝐌𝐀𝐙Ó𝐍𝐈𝐂𝐀 𝐇𝐀𝐒𝐓𝐀 𝐋𝐀 𝐂𝐎𝐌𝐔𝐍𝐈𝐃𝐀𝐃 𝐔𝐖𝐈', '<p>El Presidente del Gad Parroquial de Chiguaza Juli&aacute;n Tii junto a su equipo de trabajo realizan el mantenimiento vial desde la troncal amaz&oacute;nica hasta la comunidad uwi en los tramos cr&iacute;ticos.</p>\r\n\r\n<p>Continuamos construyendo una nueva historia para nuestra gente.</p>\r\n\r\n<p>&iexcl;𝑵𝒖𝒆𝒔𝒕𝒓𝒐 𝒄𝒐𝒎𝒑𝒓𝒐𝒎𝒊𝒔𝒐 𝒆𝒔 𝒄𝒐𝒏 𝒏𝒖𝒆𝒔𝒕𝒓𝒂 𝒈𝒆𝒏𝒕𝒆!</p>\r\n\r\n<p><a href=\"https://www.facebook.com/hashtag/julian_tii?__eep__=6&amp;__cft__[0]=AZXVAEDCwB4EzqxjNcYniRfOwqTdJDTtsbMhNrYT4yrkNzKR34e6-SlexhH6-qlmGmHkarYdmVSyS3-Vmf5mPf6RLyiLUZdGwAb4rxRnOBRJs-Ftj7bfw9ZXa6ooJeeLR4K8Lk5jYu2NBZ6b2_vCXlCjtAxi8ZsXOBMhwKnkS8F5wK_bvh2YyBX_sh5h_Gb2wtU&amp;__tn__=*NK-R\">#Julian_Tii</a></p>\r\n\r\n<p><a href=\"https://www.facebook.com/hashtag/presidente?__eep__=6&amp;__cft__[0]=AZXVAEDCwB4EzqxjNcYniRfOwqTdJDTtsbMhNrYT4yrkNzKR34e6-SlexhH6-qlmGmHkarYdmVSyS3-Vmf5mPf6RLyiLUZdGwAb4rxRnOBRJs-Ftj7bfw9ZXa6ooJeeLR4K8Lk5jYu2NBZ6b2_vCXlCjtAxi8ZsXOBMhwKnkS8F5wK_bvh2YyBX_sh5h_Gb2wtU&amp;__tn__=*NK-R\">#Presidente</a></p>\r\n\r\n<p><a href=\"https://www.facebook.com/hashtag/administracion_2023_2027?__eep__=6&amp;__cft__[0]=AZXVAEDCwB4EzqxjNcYniRfOwqTdJDTtsbMhNrYT4yrkNzKR34e6-SlexhH6-qlmGmHkarYdmVSyS3-Vmf5mPf6RLyiLUZdGwAb4rxRnOBRJs-Ftj7bfw9ZXa6ooJeeLR4K8Lk5jYu2NBZ6b2_vCXlCjtAxi8ZsXOBMhwKnkS8F5wK_bvh2YyBX_sh5h_Gb2wtU&amp;__tn__=*NK-R\">#Administracion_2023_2027</a></p>', 'public/noticias/3.jpg', 'SI', 3),
(4, '2023-08-18 18:45:08', '2023-08-18 18:45:18', '𝐄𝐋 𝐆𝐀𝐃 𝐏𝐀𝐑𝐑𝐎𝐐𝐔𝐈𝐀𝐋 𝐄𝐋𝐈𝐆𝐈Ó 𝐀𝐋 𝐏𝐑𝐄𝐒𝐈𝐃𝐄𝐍𝐓𝐄 𝐘 𝐕𝐎𝐂𝐀𝐋𝐄𝐒 𝐃𝐄𝐋 𝐂𝐎𝐍𝐂𝐄𝐉𝐎 𝐃𝐄 𝐏𝐀𝐑𝐓𝐈𝐂𝐈𝐏𝐀𝐂𝐈Ó𝐍 𝐂𝐈𝐔𝐃𝐀𝐃𝐀𝐍𝐀 𝐘 𝐂𝐎𝐍𝐓𝐑𝐎𝐋 𝐒𝐎𝐂𝐈𝐀𝐋', '<p>Mediante convocatoria abierta a los s&iacute;ndicos de las diferentes comunidades el Presidente del Gad Parroquial de Chiguaza, Juli&aacute;n Tii y sus vocales realizaron la elecci&oacute;n del nuevo Consejo de Participaci&oacute;n Ciudadana y Control Social de acuerdo al Art. 302 del COOTAD, referido a la Participaci&oacute;n ciudadana se&ntilde;ala que: &ldquo;𝘓𝘢 𝘤𝘪𝘶𝘥𝘢𝘥𝘢𝘯&iacute;𝘢, 𝘦𝘯 𝘧𝘰𝘳𝘮𝘢 𝘪𝘯𝘥𝘪𝘷𝘪𝘥𝘶𝘢𝘭 𝘺 𝘤𝘰𝘭𝘦𝘤𝘵𝘪𝘷𝘢, 𝘱𝘰𝘥𝘳&aacute;𝘯 𝘱𝘢𝘳𝘵𝘪𝘤𝘪𝘱𝘢𝘳 𝘥𝘦 𝘮𝘢𝘯𝘦𝘳𝘢 𝘱𝘳𝘰𝘵𝘢𝘨&oacute;𝘯𝘪𝘤𝘢 𝘦𝘯 𝘭𝘢 𝘵𝘰𝘮𝘢 𝘥𝘦 𝘥𝘦𝘤𝘪𝘴𝘪𝘰𝘯𝘦𝘴, 𝘭𝘢 𝘱𝘭𝘢𝘯𝘪𝘧𝘪𝘤𝘢𝘤𝘪&oacute;𝘯 𝘺 𝘨𝘦𝘴𝘵𝘪&oacute;𝘯 𝘥𝘦 𝘭𝘰𝘴 𝘢𝘴𝘶𝘯𝘵𝘰𝘴 𝘱&uacute;𝘣𝘭𝘪𝘤𝘰𝘴 𝘺 𝘦𝘯 𝘦𝘭 𝘤𝘰𝘯𝘵𝘳𝘰𝘭 𝘴𝘰𝘤𝘪𝘢𝘭 𝘥𝘦 𝘭𝘢𝘴 𝘪𝘯𝘴𝘵𝘪𝘵𝘶𝘤𝘪𝘰𝘯𝘦𝘴 𝘥𝘦 𝘭𝘰𝘴 𝘨𝘰𝘣𝘪𝘦𝘳𝘯𝘰𝘴 𝘢𝘶𝘵&oacute;𝘯𝘰𝘮𝘰𝘴 𝘥𝘦𝘴𝘤𝘦𝘯𝘵𝘳𝘢𝘭𝘪𝘻𝘢𝘥𝘰𝘴 𝘺 𝘥𝘦 𝘴𝘶𝘴 𝘳𝘦𝘱𝘳𝘦𝘴𝘦𝘯𝘵𝘢𝘯𝘵𝘦𝘴, 𝘦𝘯 𝘶𝘯 𝘱𝘳𝘰𝘤𝘦𝘴𝘰 𝘱𝘦𝘳𝘮𝘢𝘯𝘦𝘯𝘵𝘦 𝘥𝘦 𝘤𝘰𝘯𝘴𝘵𝘳𝘶𝘤𝘤𝘪&oacute;𝘯 𝘥𝘦𝘭 𝘱𝘰𝘥𝘦𝘳 𝘤𝘪𝘶𝘥𝘢𝘥𝘢𝘯𝘰&rdquo; y el Art. 66. De la Ley Org&aacute;nica de Participaci&oacute;n Ciudadana se&ntilde;ala que: los consejos locales de planificaci&oacute;n &ldquo;𝘚𝘰𝘯 𝘦𝘭 𝘦𝘴𝘱𝘢𝘤𝘪𝘰 𝘦𝘯𝘤𝘢𝘳𝘨𝘢𝘥𝘰 𝘥𝘦 𝘭𝘢 𝘧𝘰𝘳𝘮𝘶𝘭𝘢𝘤𝘪&oacute;𝘯 𝘥𝘦 𝘭𝘰𝘴 𝘱𝘭𝘢𝘯𝘦𝘴 𝘥𝘦 𝘥𝘦𝘴𝘢𝘳𝘳𝘰𝘭𝘭𝘰, 𝘢𝘴&iacute; 𝘤𝘰𝘮𝘰 𝘥𝘦 𝘭𝘢𝘴 𝘱𝘰𝘭&iacute;𝘵𝘪𝘤𝘢𝘴 𝘭𝘰𝘤𝘢𝘭𝘦𝘴 𝘺 𝘴𝘦𝘤𝘵𝘰𝘳𝘪𝘢𝘭𝘦𝘴 𝘲𝘶𝘦 𝘴𝘦 𝘦𝘭𝘢𝘣𝘰𝘳𝘢𝘳&aacute;𝘯 𝘢 𝘱𝘢𝘳𝘵𝘪𝘳 𝘥𝘦 𝘭𝘢𝘴 𝘱𝘳𝘪𝘰𝘳𝘪𝘥𝘢𝘥𝘦𝘴, 𝘰𝘣𝘫𝘦𝘵𝘪𝘷𝘰𝘴 𝘦𝘴𝘵𝘳𝘢𝘵&eacute;𝘨𝘪𝘤𝘰𝘴 𝘥𝘦𝘭 𝘵𝘦𝘳𝘳𝘪𝘵𝘰𝘳𝘪𝘰, 𝘦𝘫𝘦𝘴 𝘺 𝘭&iacute;𝘯𝘦𝘢𝘴 𝘥𝘦 𝘢𝘤𝘤𝘪&oacute;𝘯, 𝘥𝘦𝘧𝘪𝘯𝘪𝘥𝘰𝘴 𝘦𝘯 𝘭𝘢𝘴 𝘪𝘯𝘴𝘵𝘢𝘯𝘤𝘪𝘢𝘴 𝘥𝘦 𝘱𝘢𝘳𝘵𝘪𝘤𝘪𝘱𝘢𝘤𝘪&oacute;𝘯; 𝘦𝘴𝒕𝘢𝘳&aacute;𝘯 𝘢𝒓𝘵𝘪𝘤𝘶𝘭𝒂𝘥𝘰𝘴 𝘢𝘭 𝘚𝘪𝘴𝘵𝘦𝘮𝘢 𝘕𝘢𝘤𝘪𝘰𝘯𝘢𝘭 𝘥𝘦 𝘗𝘭𝘢𝘯𝘪𝘧𝘪𝘤𝘢𝘤𝘪&oacute;𝘯. 𝘌𝘴𝘵𝘰𝘴 𝘤𝘰𝘯𝘴𝘦𝘫𝘰𝘴 𝘦𝘴𝘵𝘢𝘳&aacute;𝘯 𝘪𝘯𝘵𝘦𝘨𝘳𝘢𝘥𝘰𝘴 𝘱𝘰𝘳, 𝘢𝘭 𝘮𝘦𝘯𝘰𝘴 𝘶𝘯 𝘵𝘳𝘦𝘪𝘯𝘵𝘢 𝘱𝘰𝘳 𝘤𝘪𝘦𝘯𝘵𝘰 (30%) 𝘥𝘦 𝘳𝘦𝘱𝘳𝘦𝘴𝘦𝘯𝘵𝘢𝘯𝘵𝘦𝘴 𝘥𝘦 𝘭𝘢 𝘤𝘪𝘶𝘥𝘢𝘥𝘢𝘯&iacute;𝘢. 𝘚𝘦𝘳&aacute;𝘯 𝘥𝘦𝘴𝘪𝘨𝘯𝘢𝘥𝘰𝘴 𝘱𝘰𝘳 𝘭𝘢𝘴 𝘪𝘯𝘴𝘵𝘢𝘯𝘤𝘪𝘢𝘴 𝘭𝘰𝘤𝘢𝘭𝘦𝘴 𝘥𝘦 𝘱𝘢𝘳𝘵𝘪𝘤𝘪𝘱𝘢𝘤𝘪&oacute;𝘯 𝘥𝘦𝘭 𝘯𝘪𝘷𝘦𝘭 𝘥𝘦 𝘨𝘰𝘣𝘪𝘦𝘳𝘯𝘰 𝘤𝘰𝘳𝘳𝘦𝘴𝘱𝘰𝘯𝘥𝘪𝘦𝘯𝘵𝘦&hellip;&rdquo;. Con estos antecedentes que regulan su funcionalidad fue electo el Ing. Paul Alexander Taisha como el nuevo presidente del Consejo de Participaci&oacute;n Ciudadana y Control Social del Gad Parroquial de Chiguaza. Continuamos construyendo una nueva historia para nuestra gente. &iexcl;𝑵𝒖𝒆𝒔𝒕𝒓𝒐 𝒄𝒐𝒎𝒑𝒓𝒐𝒎𝒊𝒔𝒐 𝒆𝒔 𝒄𝒐𝒏 𝒏𝒖𝒆𝒔𝒕𝒓𝒂 𝒈𝒆𝒏𝒕𝒆! #Julian_Tii #Presidente #Administracion_2023_2027</p>', 'public/noticias/4.jpg', 'SI', 3),
(5, '2023-08-18 18:46:57', '2023-08-18 18:47:15', '𝐆𝐀𝐃 𝐏𝐀𝐑𝐑𝐎𝐐𝐔𝐈𝐀𝐋 𝐃𝐄 𝐂𝐇𝐈𝐆𝐔𝐀𝐙𝐀 𝐃𝐈𝐎 𝐈𝐍𝐈𝐂𝐈𝐎 𝐀 𝐋𝐀𝐒 𝐂𝐎𝐋𝐎𝐍𝐈𝐀𝐒 𝐕𝐀𝐂𝐀𝐂𝐈𝐎𝐍𝐀𝐋𝐄𝐒 𝐂𝐇𝐈𝐆𝐔𝐀𝐙𝐀 𝟐𝟎𝟐𝟑', '<p>Hoy 10 de julio, a trav&eacute;s de la comisi&oacute;n de Cultura y Deportes del Gobierno Parroquial de Chiguaza dirigido por el Vocal Tlgo. Antonio Ankuash, inauguramos las 𝐂𝐨𝐥𝐨𝐧𝐢𝐚𝐬 𝐕𝐚𝐜𝐚𝐜𝐢𝐨𝐧𝐚𝐥𝐞𝐬 𝐂𝐡𝐢𝐠𝐮𝐚𝐳𝐚 𝟐𝟎𝟐𝟑, evento del que fueron part&iacute;cipes como anfitriones nuestros ni&ntilde;os y ni&ntilde;as de la comunidad Shuar de San Jos&eacute; <img alt=\"👧🏻\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t48/1/16/1f467_1f3fb.png\" style=\"height:16px; width:16px\" /><img alt=\"👦🏻\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t87/1/16/1f466_1f3fb.png\" style=\"height:16px; width:16px\" />.</p>\r\n\r\n<p>La colonias Vacaciones en la comunidad Shuar de San Jose ser&aacute;n desde el 10 al 14 de Julio del 2023 de lunes a viernes, en horario de 08h00 a 12h00, los ni&ntilde;os entre la edad de 03 y 12 a&ntilde;os, podr&aacute;n disfrutar de actividades recreativas <img alt=\"👩🏻‍🎨\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/td3/1/16/1f469_1f3fb_200d_1f3a8.png\" style=\"height:16px; width:16px\" />, divertidas <img alt=\"🤹🏻‍♂️\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/te2/1/16/1f939_1f3fb_200d_2642.png\" style=\"height:16px; width:16px\" /> y llenas de aprendizajes <img alt=\"🤗\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tb7/1/16/1f917.png\" style=\"height:16px; width:16px\" /> en compa&ntilde;&iacute;a de sus instructores.</p>\r\n\r\n<p>&iexcl;𝑵𝒖𝒆𝒔𝒕𝒓𝒐 𝒄𝒐𝒎𝒑𝒓𝒐𝒎𝒊𝒔𝒐 𝒆𝒔 𝒄𝒐𝒏 𝒏𝒖𝒆𝒔𝒕𝒓𝒂 𝒈𝒆𝒏𝒕𝒆!</p>\r\n\r\n<p><a href=\"https://www.facebook.com/hashtag/julian_tii?__eep__=6&amp;__cft__[0]=AZVGXXd8K8pHWwl3Z0T0bgBJfK_1YddwNompeiIc5YuJI-F7ZSpRHi5Gik5SOSs_XMFL61CYMpsc8fKHSr_Azijo31I9giS5Rz7pHk6HvwvEqxKMYsdRvoJAk_H_LrXhcqbTEJbgK0S_7FeZmT7hdtrHF4_25-f-FHUI_S43hS4zJ6Bx0emFzUvB4vaTBF9WfyA&amp;__tn__=*NK-R\">#Julian_Tii</a></p>\r\n\r\n<p><a href=\"https://www.facebook.com/hashtag/presidente?__eep__=6&amp;__cft__[0]=AZVGXXd8K8pHWwl3Z0T0bgBJfK_1YddwNompeiIc5YuJI-F7ZSpRHi5Gik5SOSs_XMFL61CYMpsc8fKHSr_Azijo31I9giS5Rz7pHk6HvwvEqxKMYsdRvoJAk_H_LrXhcqbTEJbgK0S_7FeZmT7hdtrHF4_25-f-FHUI_S43hS4zJ6Bx0emFzUvB4vaTBF9WfyA&amp;__tn__=*NK-R\">#Presidente</a></p>\r\n\r\n<p><a href=\"https://www.facebook.com/hashtag/administracion_2023_2027?__eep__=6&amp;__cft__[0]=AZVGXXd8K8pHWwl3Z0T0bgBJfK_1YddwNompeiIc5YuJI-F7ZSpRHi5Gik5SOSs_XMFL61CYMpsc8fKHSr_Azijo31I9giS5Rz7pHk6HvwvEqxKMYsdRvoJAk_H_LrXhcqbTEJbgK0S_7FeZmT7hdtrHF4_25-f-FHUI_S43hS4zJ6Bx0emFzUvB4vaTBF9WfyA&amp;__tn__=*NK-R\">#Administracion_2023_2027</a></p>', 'public/noticias/5.jpg', 'SI', 3),
(6, '2023-08-18 18:50:52', '2023-08-18 18:51:33', '𝐄𝐋 𝐆𝐀𝐃 𝐏𝐀𝐑𝐑𝐎𝐐𝐔𝐈𝐀𝐋 𝐃𝐄 𝐂𝐇𝐈𝐆𝐔𝐀𝐙𝐀 𝐑𝐄𝐀𝐋𝐈𝐙Ó 𝐋𝐀 𝐈𝐍𝐒𝐏𝐄𝐂𝐂𝐈Ó𝐍 𝐃𝐄𝐋 𝐒𝐄𝐍𝐃𝐄𝐑𝐎 𝐄𝐂𝐎𝐋Ó𝐆𝐈𝐂𝐎 𝐓𝐒𝐄𝐍𝐓𝐒𝐀𝐊-𝐒𝐀𝐍 𝐉𝐔𝐀𝐍 𝐁𝐎𝐒𝐂𝐎', '<p>El Presidente del Gad Parroquial de Chiguaza Juli&aacute;n Tii junto a su equipo de trabajo realiz&oacute; la inspecci&oacute;n del sendero ecol&oacute;gico Tsentsak &ndash; San Juan Bosco para el mantenimiento de este importante tramo que beneficia a los agricultores de esta zona.</p>\r\n\r\n<p>Continuamos construyendo una nueva historia para nuestra gente.</p>\r\n\r\n<p>&iexcl;𝑵𝒖𝒆𝒔𝒕𝒓𝒐 𝒄𝒐𝒎𝒑𝒓𝒐𝒎𝒊𝒔𝒐 𝒆𝒔 𝒄𝒐𝒏 𝒏𝒖𝒆𝒔𝒕𝒓𝒂 𝒈𝒆𝒏𝒕𝒆!</p>\r\n\r\n<p><a href=\"https://www.facebook.com/hashtag/julian_tii?__eep__=6&amp;__cft__[0]=AZXFd13SA2Ue2eARXQWa_PrVbDaiIs96v94Bdo8gzEnzzzmn6djMDbVB8aG3toVmjCdhghB_qFmbXyumdqD2aC4PyZq2H93E4lwWpi8lBfClzPeBvnjoeNXZAiNJZG2jrf8QyQQCoF5x9CwhtJ6GoopP41VvJHUZqukBve9p3OABGgbau-IHJOroCcibQHJhKNY&amp;__tn__=*NK-R\">#Julian_Tii</a></p>\r\n\r\n<p><a href=\"https://www.facebook.com/hashtag/presidente?__eep__=6&amp;__cft__[0]=AZXFd13SA2Ue2eARXQWa_PrVbDaiIs96v94Bdo8gzEnzzzmn6djMDbVB8aG3toVmjCdhghB_qFmbXyumdqD2aC4PyZq2H93E4lwWpi8lBfClzPeBvnjoeNXZAiNJZG2jrf8QyQQCoF5x9CwhtJ6GoopP41VvJHUZqukBve9p3OABGgbau-IHJOroCcibQHJhKNY&amp;__tn__=*NK-R\">#Presidente</a></p>\r\n\r\n<p><a href=\"https://www.facebook.com/hashtag/administracion_2023_2027?__eep__=6&amp;__cft__[0]=AZXFd13SA2Ue2eARXQWa_PrVbDaiIs96v94Bdo8gzEnzzzmn6djMDbVB8aG3toVmjCdhghB_qFmbXyumdqD2aC4PyZq2H93E4lwWpi8lBfClzPeBvnjoeNXZAiNJZG2jrf8QyQQCoF5x9CwhtJ6GoopP41VvJHUZqukBve9p3OABGgbau-IHJOroCcibQHJhKNY&amp;__tn__=*NK-R\">#Administracion_2023_2027</a></p>', 'public/noticias/6.jpg', 'SI', 3),
(7, '2023-08-18 18:54:31', '2023-08-18 18:54:42', '𝐆𝐀𝐃 𝐏𝐀𝐑𝐑𝐎𝐐𝐔𝐈𝐀𝐋 𝐃𝐄 𝐂𝐇𝐈𝐆𝐔𝐀𝐙𝐀 𝐂𝐋𝐀𝐔𝐒𝐔𝐑Ó 𝐋𝐀𝐒 𝐂𝐎𝐋𝐎𝐍𝐈𝐀𝐒 𝐕𝐀𝐂𝐀𝐂𝐈𝐎𝐍𝐀𝐋𝐄𝐒 𝐂𝐇𝐈𝐆𝐔𝐀𝐙𝐀 𝟐𝟎𝟐𝟑 𝐄𝐍 𝐋𝐀 𝐂𝐎𝐌𝐔𝐍𝐈𝐃𝐀𝐃 𝐒𝐀𝐍 𝐉𝐎𝐒É', '<p>El viernes 14 de julio del 2023, en el coliseo de la comunidad San Jos&eacute; con gran &eacute;xito el Gad Parroquial de Chiguaza clausur&oacute; las colonias vacacionales Chiguaza 2023. Un d&iacute;a lleno de colorido, magia y mucho talento se evidenci&oacute; en cada uno de los talleres presentados por los ni&ntilde;os y ni&ntilde;as que fueron part&iacute;cipes de esta bonita actividad.</p>\r\n\r\n<p>De su parte padres de familia y autoridades dieron realce al exitoso programa de integraci&oacute;n cultural presidido por el Sr. Julian Tii Presidente del Gad Parroquial de Chiguaza, Tlgo. Antonio Ankuash y Lic. Pedro Wuambasho</p>\r\n\r\n<p>En su intervenci&oacute;n el Presidente expres&oacute; que el objetivo es generar aprendizaje a trav&eacute;s del arte y el juego ocupando el tiempo libre de nuestros ni&ntilde;os, ni&ntilde;as y adolescentes de manera adecuada.</p>\r\n\r\n<p>&iexcl;𝑵𝒖𝒆𝒔𝒕𝒓𝒐 𝒄𝒐𝒎𝒑𝒓𝒐𝒎𝒊𝒔𝒐 𝒆𝒔 𝒄𝒐𝒏 𝒏𝒖𝒆𝒔𝒕𝒓𝒂 𝒈𝒆𝒏𝒕𝒆!</p>\r\n\r\n<p><a href=\"https://www.facebook.com/hashtag/julian_tii?__eep__=6&amp;__cft__[0]=AZXTDKhu1UGlP7xuFAkfFYvimdVwLVikIQfJDLVj_HAcxpWabmry3WIZDqXxaJdGEXPXpiRMF-X8-WO13dXEtIb_H2Z670Yr9R-VXv9RrFEO_wX6SbeGe0conpltmLXC7BCYuXw9PvSxZ88G8qX2RqS86tT2tKaRobJdOmxsQFspLWXnk8goTCswtCEuujneJpw&amp;__tn__=*NK-R\">#Julian_Tii</a></p>\r\n\r\n<p><a href=\"https://www.facebook.com/hashtag/presidente?__eep__=6&amp;__cft__[0]=AZXTDKhu1UGlP7xuFAkfFYvimdVwLVikIQfJDLVj_HAcxpWabmry3WIZDqXxaJdGEXPXpiRMF-X8-WO13dXEtIb_H2Z670Yr9R-VXv9RrFEO_wX6SbeGe0conpltmLXC7BCYuXw9PvSxZ88G8qX2RqS86tT2tKaRobJdOmxsQFspLWXnk8goTCswtCEuujneJpw&amp;__tn__=*NK-R\">#Presidente</a></p>\r\n\r\n<p><a href=\"https://www.facebook.com/hashtag/administracion_2023_2027?__eep__=6&amp;__cft__[0]=AZXTDKhu1UGlP7xuFAkfFYvimdVwLVikIQfJDLVj_HAcxpWabmry3WIZDqXxaJdGEXPXpiRMF-X8-WO13dXEtIb_H2Z670Yr9R-VXv9RrFEO_wX6SbeGe0conpltmLXC7BCYuXw9PvSxZ88G8qX2RqS86tT2tKaRobJdOmxsQFspLWXnk8goTCswtCEuujneJpw&amp;__tn__=*NK-R\">#Administracion_2023_2027</a></p>', 'public/noticias/7.jpg', 'SI', 3),
(8, '2023-08-18 18:55:50', '2023-08-18 18:56:02', '𝐀𝐕𝐀𝐍𝐂𝐄 𝐃𝐄 𝐋𝐀 𝐎𝐁𝐑𝐀 𝐂𝐎𝐍𝐒𝐓𝐑𝐔𝐂𝐂𝐈Ó𝐍  𝐃𝐄 𝐋𝐀 𝐏𝐑𝐈𝐌𝐄𝐑𝐀 𝐅𝐀𝐒𝐄 𝐃𝐄𝐋 𝐂𝐎𝐌𝐏𝐋𝐄𝐉𝐎 𝐑𝐄𝐂𝐑𝐄𝐀𝐓𝐈𝐕𝐎 𝐄𝐍 𝐋𝐀 𝐂𝐀𝐁𝐄𝐂𝐄𝐑𝐀 𝐏𝐀𝐑𝐑𝐎𝐐𝐔𝐈𝐀𝐋 𝐃𝐄 𝐂𝐇𝐈𝐆𝐔𝐀𝐙𝐀', '<p>ng. Bol&iacute;var Villavicencio, T&eacute;cnico del Gad Parroquial de Chiguaza, constat&oacute; el avance de la obra del Complejo Recreativo de la cabecera parroquial de Chiguaza, la misma que tiene ya el 80% de avance.</p>\r\n\r\n<p>Continuamos construyendo una nueva historia para nuestra gente.</p>\r\n\r\n<p>&iexcl;𝑵𝒖𝒆𝒔𝒕𝒓𝒐 𝒄𝒐𝒎𝒑𝒓𝒐𝒎𝒊𝒔𝒐 𝒆𝒔 𝒄𝒐𝒏 𝒏𝒖𝒆𝒔𝒕𝒓𝒂 𝒈𝒆𝒏𝒕𝒆!</p>\r\n\r\n<p><a href=\"https://www.facebook.com/hashtag/julian_tii?__eep__=6&amp;__cft__[0]=AZVk7Uv5cFPHYi8QTNckIetFpW4ENqv3CASPRU1PCgFb8_8ejRQi8yVkrZHyKTwnOvCY7YGbv2X2OgH5bmUFX7E4sRomT8Un-Ag-6Ma_oNqPrulBxt5Alqpxl627ZfvA9CKe37FppJUsuKtSO462UO8R3H0YtdpLYA_r1TCSwYH9GpnwRDHVD39mGPpCy0Zclak&amp;__tn__=*NK-R\">#Julian_Tii</a></p>\r\n\r\n<p><a href=\"https://www.facebook.com/hashtag/presidente?__eep__=6&amp;__cft__[0]=AZVk7Uv5cFPHYi8QTNckIetFpW4ENqv3CASPRU1PCgFb8_8ejRQi8yVkrZHyKTwnOvCY7YGbv2X2OgH5bmUFX7E4sRomT8Un-Ag-6Ma_oNqPrulBxt5Alqpxl627ZfvA9CKe37FppJUsuKtSO462UO8R3H0YtdpLYA_r1TCSwYH9GpnwRDHVD39mGPpCy0Zclak&amp;__tn__=*NK-R\">#Presidente</a></p>\r\n\r\n<p><a href=\"https://www.facebook.com/hashtag/administracion_2023_2027?__eep__=6&amp;__cft__[0]=AZVk7Uv5cFPHYi8QTNckIetFpW4ENqv3CASPRU1PCgFb8_8ejRQi8yVkrZHyKTwnOvCY7YGbv2X2OgH5bmUFX7E4sRomT8Un-Ag-6Ma_oNqPrulBxt5Alqpxl627ZfvA9CKe37FppJUsuKtSO462UO8R3H0YtdpLYA_r1TCSwYH9GpnwRDHVD39mGPpCy0Zclak&amp;__tn__=*NK-R\">#Administracion_2023_2027</a></p>', 'public/noticias/8.jpg', 'SI', 3),
(9, '2023-08-18 18:58:44', '2023-08-18 19:00:34', '𝐆𝐀𝐃 𝐏𝐀𝐑𝐑𝐎𝐐𝐔𝐈𝐀𝐋 𝐃𝐄 𝐂𝐇𝐈𝐆𝐔𝐀𝐙𝐀 𝐈𝐍𝐀𝐔𝐆𝐔𝐑Ó 𝐋𝐀 𝐏𝐑𝐈𝐌𝐄𝐑𝐀 𝐄𝐓𝐀𝐏𝐀 𝐃𝐄𝐋 𝐂𝐎𝐌𝐏𝐋𝐄𝐉𝐎 𝐑𝐄𝐂𝐑𝐄𝐀𝐓𝐈𝐕𝐎 𝐃𝐄 𝐋𝐀 𝐂𝐀𝐁𝐄𝐂𝐄𝐑𝐀 𝐏𝐀𝐑𝐑𝐎𝐐𝐔𝐈𝐀𝐋', '<p>El jueves 10 de agosto del 2023 se realiz&oacute; la inauguraci&oacute;n de la Primera Etapa del Complejo Recreativo de la cabecera parroquial de Chiguaza, el Presidente Juli&aacute;n Tii agradeci&oacute; a todos los presentes por dar realce al evento de inauguraci&oacute;n.</p>\r\n\r\n<p>El cumplimiento de este sue&ntilde;o tan anhelado, es el resultado de la lucha constante y hoy es una realidad.</p>\r\n\r\n<p>La parroquia Chiguaza es &uacute;nica parroquia del cant&oacute;n Huamboya, hoy se ha cristalizado una obra emblem&aacute;tica, que, con amor, voluntad los pueblos se pueden desarrollar.</p>\r\n\r\n<p>Continuamos construyendo una nueva historia para nuestra gente.</p>\r\n\r\n<p>&iexcl;𝑵𝒖𝒆𝒔𝒕𝒓𝒐 𝒄𝒐𝒎𝒑𝒓𝒐𝒎𝒊𝒔𝒐 𝒆𝒔 𝒄𝒐𝒏 𝒏𝒖𝒆𝒔𝒕𝒓𝒂 𝒈𝒆𝒏𝒕𝒆!</p>\r\n\r\n<p><a href=\"https://www.facebook.com/hashtag/julian_tii?__eep__=6&amp;__cft__[0]=AZVcaF94of707kEjfi6QECQQvZyAnqLUeQPeVItPjGyHyjPSc-M8jNmalS7VQ_J757w_LufrUWe_mso_1N2yWtK7bji9Z_x_vTR5IpnevwIUeycGKuJfgIHJ5tpfmh-VLc8jw_MrAdspMXURVJ2oeFqzEpvBYHum6p1CAbM1hbfzF98nmt-aUor1-mg2tyWNemo&amp;__tn__=*NK-R\">#Julian_Tii</a></p>\r\n\r\n<p><a href=\"https://www.facebook.com/hashtag/presidente?__eep__=6&amp;__cft__[0]=AZVcaF94of707kEjfi6QECQQvZyAnqLUeQPeVItPjGyHyjPSc-M8jNmalS7VQ_J757w_LufrUWe_mso_1N2yWtK7bji9Z_x_vTR5IpnevwIUeycGKuJfgIHJ5tpfmh-VLc8jw_MrAdspMXURVJ2oeFqzEpvBYHum6p1CAbM1hbfzF98nmt-aUor1-mg2tyWNemo&amp;__tn__=*NK-R\">#Presidente</a></p>\r\n\r\n<p><a href=\"https://www.facebook.com/hashtag/administracion_2023_2027?__eep__=6&amp;__cft__[0]=AZVcaF94of707kEjfi6QECQQvZyAnqLUeQPeVItPjGyHyjPSc-M8jNmalS7VQ_J757w_LufrUWe_mso_1N2yWtK7bji9Z_x_vTR5IpnevwIUeycGKuJfgIHJ5tpfmh-VLc8jw_MrAdspMXURVJ2oeFqzEpvBYHum6p1CAbM1hbfzF98nmt-aUor1-mg2tyWNemo&amp;__tn__=*NK-R\">#Administracion_2023_2027</a></p>', 'public/noticias/9.jpg', 'SI', 3),
(10, '2023-08-18 19:00:15', '2023-08-18 19:00:42', '𝐆𝐀𝐃 𝐏𝐀𝐑𝐑𝐎𝐐𝐔𝐈𝐀𝐋 𝐃𝐄 𝐂𝐇𝐈𝐆𝐔𝐀𝐙𝐀 𝐂𝐋𝐀𝐔𝐒𝐔𝐑Ó 𝐄𝐋 𝐂𝐔𝐑𝐒𝐎 𝐃𝐄 𝐅𝐎𝐑𝐌𝐀𝐂𝐈Ó𝐍 𝐃𝐄 Á𝐑𝐁𝐈𝐓𝐑𝐎𝐒 𝐃𝐄 𝐅Ú𝐓𝐁𝐎𝐋', '<p>El Gad Parroquial de Chiguaza, presidido por el Se&ntilde;or Juli&aacute;n Tii, presidente, clausur&oacute; este fin de semana el primer curso de formaci&oacute;n de &aacute;rbitros de f&uacute;tbol y entreg&oacute; simb&oacute;licamente los uniformes y certificados para que inicien sus labores en las canchas, adem&aacute;s le acompa&ntilde;aron los se&ntilde;ores vocales y su equipo t&eacute;cnico, tambi&eacute;n asistieron las comunidades invitadas de Uwi San Miguel y 25 de diciembre.</p>\r\n\r\n<p>Participaron en el curso 26 personas provenientes de las diferentes comunidades, todos interesados en colaborar con el arbitraje de alta calidad y de acuerdo con las exigencias de FIFA, el curso estuvo bajo la direcci&oacute;n de los Instructores Profesionales Beker Edu, Edison Quitiar, quienes compartieron sus conocimientos en las &aacute;reas Planificaci&oacute;n Deportiva, Escuelas Deportivas y Recreativas, Dirigencia Deportiva y Entrenamiento Arbitral, los mencionados profesores en las clases pr&aacute;cticas y demostrativas guiaron a los jueces para mejorar sus capacidades y toma de decisiones dentro de los terreno de juego.</p>\r\n\r\n<p>El presidente del Gad Parroquial en su intervenci&oacute;n manifest&oacute; &ldquo;A nombre del Gad parroquial, les deseo muchos &eacute;xitos en esta dificil&iacute;sima profesi&oacute;n. Todos sabemos que es dif&iacute;cil pero seguro ustedes est&aacute;n aqu&iacute; porque quieren a su profesi&oacute;n aprovecho para agradecer para que puedan aportar un granito de arena para el crecimiento de su vida profesional y el deporte de la parroquia, les deseo que hayan sacado frutos en estos d&iacute;as y espero verlos pronto dirigiendo a nivel parroquial y cantonal finaliz&oacute;&rdquo;.</p>\r\n\r\n<p>Continuamos construyendo una nueva historia para nuestra gente.</p>\r\n\r\n<p>&iexcl;𝑵𝒖𝒆𝒔𝒕𝒓𝒐 𝒄𝒐𝒎𝒑𝒓𝒐𝒎𝒊𝒔𝒐 𝒆𝒔 𝒄𝒐𝒏 𝒏𝒖𝒆𝒔𝒕𝒓𝒂 𝒈𝒆𝒏𝒕𝒆!</p>\r\n\r\n<p><a href=\"https://www.facebook.com/hashtag/julian_tii?__eep__=6&amp;__cft__[0]=AZWzJUNOxGvXlWU9XXs3cg6xGrD2FI9EHQVqgxf32pKoPcNcwLGBTkCiSMGlnUxqhbDyZAbGEOKx4swsWi3Fj05uEsrZvojf_dHRUKdChiiQk--AN3HpD6CvPIgGaPrXU02g4-_Fo5H2PewTAPWmggFYhxgYO-RFehQnzV6dhDDlPW-TqaVOPyVJ1Lxx5qQ5l_o&amp;__tn__=*NK-R\">#Julian_Tii</a></p>\r\n\r\n<p><a href=\"https://www.facebook.com/hashtag/presidente?__eep__=6&amp;__cft__[0]=AZWzJUNOxGvXlWU9XXs3cg6xGrD2FI9EHQVqgxf32pKoPcNcwLGBTkCiSMGlnUxqhbDyZAbGEOKx4swsWi3Fj05uEsrZvojf_dHRUKdChiiQk--AN3HpD6CvPIgGaPrXU02g4-_Fo5H2PewTAPWmggFYhxgYO-RFehQnzV6dhDDlPW-TqaVOPyVJ1Lxx5qQ5l_o&amp;__tn__=*NK-R\">#Presidente</a></p>\r\n\r\n<p><a href=\"https://www.facebook.com/hashtag/administracion_2023_2027?__eep__=6&amp;__cft__[0]=AZWzJUNOxGvXlWU9XXs3cg6xGrD2FI9EHQVqgxf32pKoPcNcwLGBTkCiSMGlnUxqhbDyZAbGEOKx4swsWi3Fj05uEsrZvojf_dHRUKdChiiQk--AN3HpD6CvPIgGaPrXU02g4-_Fo5H2PewTAPWmggFYhxgYO-RFehQnzV6dhDDlPW-TqaVOPyVJ1Lxx5qQ5l_o&amp;__tn__=*NK-R\">#Administracion_2023_2027</a></p>', 'public/noticias/10.jpg', 'SI', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('taishaalex123@gmail.com', '$2y$10$ECRCK3fCLzWZVesGkn6SuukNGSoOeObXGzrTTp6nbnnTqfR.NvRTu', '2023-08-18 00:07:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `queja_sugerencias`
--

CREATE TABLE `queja_sugerencias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `cedula` varchar(255) NOT NULL,
  `apellidosnombres` varchar(255) NOT NULL,
  `telefonocelular` varchar(255) NOT NULL,
  `quejasugerencia` varchar(255) NOT NULL,
  `dependencia` varchar(255) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `queja_sugerencias`
--

INSERT INTO `queja_sugerencias` (`id`, `created_at`, `updated_at`, `email`, `cedula`, `apellidosnombres`, `telefonocelular`, `quejasugerencia`, `dependencia`, `descripcion`) VALUES
(1, '2023-08-10 22:40:19', '2023-08-10 22:40:19', 'david.criollo14@gmail.com', '0105546972001', 'paul taisah', '1234567892', 'Sugerencia', 'alaclade', '<p>alcade jaja</p>'),
(2, '2023-08-10 22:59:11', '2023-08-10 22:59:11', 'taishaalex123@gmail.com', '140089290', 'PAUL ALEXANDER TAISHA UNKUCH', '0995216816', 'Sugerencia', 'PRESIDENTE', '<p>BUENAS TARDES SE&Ntilde;OR PRESIDENTE LE COMUNICO QUE LA OBLIGACION DE SUS PERSONAS ES CON LA FINALIDAD DE QUE SE PROCEDA A REALIZAR LAS COSAS ARCORDE AL COOTAD</p>'),
(3, '2023-08-11 00:49:57', '2023-08-11 00:49:57', 'sandert7a@gmail.com', '140089290', 'PAUL ALEXANDER TAISHA UNKUCH', '0995216816', 'Queja', 'PRESIDENTE', '<p>BUENAS TARDSER PRESIDENTE ESTASO ES ALGO QUE NO ME GUSTA&nbsp;</p>'),
(4, '2023-08-16 22:10:38', '2023-08-16 22:10:38', 'taishaalex123@gmail.com', '1400892905', 'PAUL ALEXANDER TAISHA UNKUCH', '0995216816', 'Queja', 'PRESIDENTE', '<p>hkhjkh</p>'),
(5, '2023-08-24 18:49:11', '2023-08-24 18:49:11', 'taishaalex123@gmail.com', '1400892905', 'PAUL ALEXANDER TAISHA UNKUCH', '0995216816', 'Sugerencia', 'PRESIDENTE', '<p>Buenas tardes presidente la finalidad es dar a conocer las sugerencia de atencion de los funcionarios.</p>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `titulo_1` varchar(255) DEFAULT NULL,
  `titulo_2` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `url_explorar_mas` text DEFAULT NULL,
  `fondo` varchar(255) DEFAULT NULL,
  `vista` enum('SI','NO') NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sliders`
--

INSERT INTO `sliders` (`id`, `created_at`, `updated_at`, `titulo_1`, `titulo_2`, `descripcion`, `url_explorar_mas`, `fondo`, `vista`) VALUES
(5, '2023-08-11 19:08:30', '2023-08-11 19:08:34', '\"POSESIÓN DE LAS NUEVAS AUTORIDADES DEL GAD PARROQUIAL CHIGUAZA\"', 'Período 2023-2027', NULL, 'https://www.facebook.com/photo.php?fbid=626944516119019&set=pb.100064104272772.-2207520000.&type=3', 'public/slider/5.jpg', 'SI'),
(11, '2023-08-18 22:09:14', '2023-08-18 22:09:23', '\"𝐆𝐀𝐃 𝐏𝐀𝐑𝐑𝐎𝐐𝐔𝐈𝐀𝐋 𝐃𝐄 𝐂𝐇𝐈𝐆𝐔𝐀𝐙𝐀 𝐈𝐍𝐀𝐆𝐔𝐑Ó 𝐋𝐀 𝐏𝐑𝐈𝐌𝐄𝐑𝐀 𝐄𝐓𝐀𝐏𝐀 𝐃𝐄𝐋 𝐂𝐎𝐌𝐏𝐋𝐄𝐉𝐎\"', 'Período 2023-2027', NULL, 'https://www.facebook.com/photo/?fbid=975513427046695&set=pcb.975515183713186', 'public/slider/11.jpg', 'SI'),
(15, '2023-08-18 22:16:20', '2023-08-18 22:16:41', '\"PRESIDENTE 𝐂𝐋𝐀𝐔𝐒𝐔𝐑Ó 𝐄𝐋 𝐂𝐔𝐑𝐒𝐎 𝐃𝐄 𝐅𝐎𝐑𝐌𝐀𝐂𝐈Ó𝐍 𝐃𝐄 Á𝐑𝐁𝐈𝐓𝐑𝐎𝐒\"', 'Período 2023-2027', NULL, 'https://www.facebook.com/photo/?fbid=976055330325838&set=pcb.976058103658894', 'public/slider/15.jpg', 'SI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'vilmer', 'david.criollo14@gmail.com', NULL, '$2y$10$j6AHxSrnvncNz8uhtGdaOuyRorEG83aJ7CHE1nawU9PdtSpr7sOeK', NULL, '2023-08-10 22:35:38', '2023-08-10 22:35:38'),
(2, 'PAUL TAISHA', 'taishaalex123@gmail.com', NULL, '$2y$10$8MoxpMddsZJHtkEmj7eA.uO9locoJmWmArsBe7rwNImpJEGnYmesy', NULL, '2023-08-16 16:00:01', '2023-08-16 16:00:01'),
(3, 'GAD PARROQUIAL CHIGUAZA', 'gadparroquialchiguaza@gmail.com', NULL, '$2y$10$eueTMRUgJC19dM9j/COXueqr1zaXMCQUNULNsTP7zzxep.YP3QGka', NULL, '2023-08-18 00:06:40', '2023-08-18 00:06:40');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `archivos`
--
ALTER TABLE `archivos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `archivos_carpeta_id_foreign` (`carpeta_id`);

--
-- Indices de la tabla `autoridads`
--
ALTER TABLE `autoridads`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carpetas`
--
ALTER TABLE `carpetas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carpetas_carpeta_id_foreign` (`carpeta_id`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `noticias_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `queja_sugerencias`
--
ALTER TABLE `queja_sugerencias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `archivos`
--
ALTER TABLE `archivos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `autoridads`
--
ALTER TABLE `autoridads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `carpetas`
--
ALTER TABLE `carpetas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `queja_sugerencias`
--
ALTER TABLE `queja_sugerencias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `archivos`
--
ALTER TABLE `archivos`
  ADD CONSTRAINT `archivos_carpeta_id_foreign` FOREIGN KEY (`carpeta_id`) REFERENCES `carpetas` (`id`);

--
-- Filtros para la tabla `carpetas`
--
ALTER TABLE `carpetas`
  ADD CONSTRAINT `carpetas_carpeta_id_foreign` FOREIGN KEY (`carpeta_id`) REFERENCES `carpetas` (`id`);

--
-- Filtros para la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `noticias_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
