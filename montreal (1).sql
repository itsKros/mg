-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 20, 2019 at 01:23 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `montreal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'default.png',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `email_verified_at`, `avatar`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'ssquaresdev@gmail.com', NULL, 'default.png', '$2y$10$49XMfUtn8wqnZmIta67L4uDeJhbmNhbQelDKg5Sb0h0M6Fsl.RZHq', NULL, '2019-04-26 05:50:52', '2019-04-26 05:50:52');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
CREATE TABLE IF NOT EXISTS `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `model_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `package` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `model_name`, `user_id`, `client_name`, `client_email`, `client_phone`, `package`, `date`, `time`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Alok', 10, 'Emily', 'ashotosh@ssquares.co.in', '8839188982', 'One Hour', '05/24/2019', '03:00', '2753  Olen Thomas Drive', '2019-05-03 06:56:00', '2019-05-03 06:56:00'),
(2, 'Alok', 10, 'Erica', 'erica@albright.com', '897525666952', 'Eight Hours', '06/21/2019', '17:00', '65 Main St. Avenue c, Nashville', '2019-05-03 06:57:59', '2019-05-03 06:57:59'),
(3, 'Alok', 10, 'Rachel', 'rachel@green.com', '789456123', 'Twentyfour Hours', '05/22/2019', '04:00', '2654  Main St. Marin Drive', '2019-05-03 06:59:29', '2019-05-03 06:59:29'),
(4, 'Kros', 3, 'Monica', 'monica@gellar.com', '8839188982', 'Eight Hours', '06/21/2019', '19:00', '2753  Olen Thomas Drive', '2019-05-03 07:01:45', '2019-05-03 07:01:45'),
(5, 'Kros', 3, 'Amy', 'amyjones@gmail.com', '789456123', 'Weekend', '05/16/2019', '17:00', '2753  Olen Thomas Drive', '2019-05-03 07:02:28', '2019-05-03 07:02:28'),
(6, 'Kros', 3, 'Brenda', 'brenda@mail.com', '8839188982', 'Week', '05/05/2019', '19:00', '2753  Olen Thomas Drive', '2019-05-03 07:03:03', '2019-05-03 07:03:03'),
(7, 'Kros', 3, 'Monica Gellar', 'monica@friends.com', '9876654321', 'Eight Hours', '05/22/2019', '07:00', '2753  Olen Thomas Drive', '2019-05-20 00:59:10', '2019-05-20 00:59:10'),
(8, 'Alok', 10, 'Janice', 'janice@ohmygod.com', '8839188982', 'Weekend', '06/01/2019', '01:00', '2753  Olen Thomas Drive', '2019-05-20 06:40:37', '2019-05-20 06:40:37'),
(9, 'Alok', 10, 'Sam', 'sam@mail.com', '123456789', 'Week', '06/13/2019', '03:00', '2753  Olen Thomas Drive', '2019-05-20 07:25:11', '2019-05-20 07:25:11');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `galleryitem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `user_id`, `galleryitem`, `created_at`, `updated_at`) VALUES
(18, 3, 'Kros_g_1556111839.jpg', '2019-04-24 07:47:19', '2019-04-24 07:47:19'),
(20, 10, 'Alok_g_1556134991.jpg', '2019-04-25 00:43:11', '2019-04-25 00:43:11'),
(21, 10, 'Alok_g_1556135002.jpg', '2019-04-25 00:43:22', '2019-04-25 00:43:22'),
(22, 10, 'Alok_g_1556135025.jpg', '2019-04-25 00:43:45', '2019-04-25 00:43:45'),
(23, 10, 'Alok_g_1556135042.jpg', '2019-04-25 00:44:02', '2019-04-25 00:44:02'),
(28, 3, 'Kros_g_1558160496.jpg', '2019-05-18 00:51:39', '2019-05-18 00:51:39'),
(25, 3, 'Kros_g_1556135493.jpg', '2019-04-25 00:51:33', '2019-04-25 00:51:33'),
(27, 3, 'Kros_g_1556796109.jpg', '2019-05-02 05:51:50', '2019-05-02 05:51:50');

-- --------------------------------------------------------

--
-- Table structure for table `homeinfo`
--

DROP TABLE IF EXISTS `homeinfo`;
CREATE TABLE IF NOT EXISTS `homeinfo` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `welcometitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `welcomecontent` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ete_first_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ete_first_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ete_second_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ete_second_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homeinfo`
--

INSERT INTO `homeinfo` (`id`, `welcometitle`, `welcomecontent`, `ete_first_title`, `ete_first_content`, `ete_second_title`, `ete_second_content`, `created_at`, `updated_at`) VALUES
(1, 'Welcome To Montreal Gentlemen', '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis repudiandae ipsam, vitae obcaecati alias fugiat similique ut magni in qui ratione, cupiditate impedit, inventore repellat iure earum optio? Obcaecati hic dolor iste molestias, recusandae non dolorum in voluptatem eveniet aliquid vero beatae vel officiis ducimus cumque doloribus voluptatibus corporis aliquam natus consequatur modi! Aperiam voluptatibus fuga hic error quaerat quisquam.</p>', 'How Our Encounters Works', '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis repudiandae ipsam, vitae obcaecati alias fugiat similique ut magni in qui ratione, cupiditate impedit, inventore repellat iure earum optio?</p><p>Eveniet aliquid vero beatae vel officiis ducimus cumque doloribus voluptatibus corporis aliquam natus consequatur modi! Aperiam voluptatibus fuga hic error quaerat quisquam.</p><p>Recusandae non dolorum in voluptatem eveniet aliquid vero beatae vel officiis ducimus cumque doloribus voluptatibus corporis aliquam natus consequatur</p>', 'Services', '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis repudiandae ipsam, vitae obcaecati alias fugiat similique ut magni in qui ratione, cupiditate impedit, inventore repellat iure earum optio?</p><p>Eveniet aliquid vero beatae vel officiis ducimus cumque doloribus voluptatibus corporis aliquam natus consequatur modi! Aperiam voluptatibus fuga hic error quaerat quisquam.</p><p>Recusandae non dolorum in voluptatem eveniet aliquid vero beatae vel officiis ducimus cumque doloribus voluptatibus corporis aliquam natus consequatur</p>', '2019-04-12 02:30:00', '2019-04-26 07:01:27');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_04_12_024720_homeinfo', 2),
(4, '2019_04_19_123726_addmodeldetails', 3),
(5, '2019_04_20_053938_modelsinfo', 4),
(6, '2019_04_24_095953_create_gallery', 4),
(7, '2019_04_26_103338_create_admin_table', 5),
(8, '2019_04_27_080101_create_packages_table', 6),
(9, '2019_04_29_074109_create_packages_table', 7),
(10, '2019_05_02_055012_create_bookings_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

DROP TABLE IF EXISTS `packages`;
CREATE TABLE IF NOT EXISTS `packages` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `onehour` int(11) DEFAULT '0',
  `fourhour` int(11) DEFAULT '0',
  `eighthour` int(11) DEFAULT '0',
  `twentyfourhour` int(11) DEFAULT '0',
  `weekend` int(11) DEFAULT '0',
  `week` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `onehour`, `fourhour`, `eighthour`, `twentyfourhour`, `weekend`, `week`, `created_at`, `updated_at`) VALUES
(1, 40, 123, 240, 720, 1440, 3000, '2019-04-29 02:15:04', '2019-05-03 00:45:38');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `modeldetail` longtext COLLATE utf8mb4_unicode_ci,
  `height` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` decimal(8,2) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `hair_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eye_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `avatar` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT 'default.jpg',
  `featuredimage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'default-featured.jpg',
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `modeldetail`, `height`, `weight`, `age`, `hair_color`, `eye_color`, `status`, `avatar`, `featuredimage`, `address`, `phone`) VALUES
(3, 'Kros', 'roshan@ssquares.co.in', NULL, '$2y$10$KlTcU7Ya3Z3xeL5zjVcQ5.2w/U4DfRyHdLdCpedxQFX5Tp4OQu1kK', 'COuuiKyqxPLnBB7SYbA7L19OQzSwYbriKd1QqQGYRamSaknEGziyIlbZlwaU', '2019-04-23 23:38:14', '2019-05-20 00:59:34', '<p>Lorem Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ate.</p><p>Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante.</p><p>Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante.</p>', '6\'0', '170.00', 32, 'Blonde', 'Hazel', 1, 'Kros_1556111661.jpg', 'Kros_1558160514_featured.jpg', '', ''),
(10, 'Alok', 'alok@ssquares.co.in', NULL, '$2y$10$i40PweF6rRSQxVcSuP2R9u4JqEr3r5DGvV5VnvW8jRzcQAg.Grsa.', 'k6NPUVr54HAj3lZEhHpMMOCVOhNUmzewX07sAe9ZLVbN8VsCNF9lJ1fVpROS', '2019-04-25 00:29:17', '2019-05-20 05:49:04', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet est placerat in egestas erat imperdiet sed. Id vosdsdlutpat lacus laoreet non. Nibh tortor id aliquet lectus. Ac tortor vitae purus faucibus ornare suspendisse sed nisi lacus. Fringilla phasellus faucibus scelerisque eleifend donec pretium.</p><p>Nullam eget felis eget nunc lobortis mattis aliquam faucibus. Adipiscing tristique risus nec feugiat in fermentum. Arcu vitae elementum curabitur vitae nunc sed velit dignissim sodales. Odio tempor orci dapibus ultrices in. Massa eget egestas purus viverra accumsan. Odio tempor orci dapibus ultrices in iaculis nunc sed augue.</p>', '6\'6', '180.00', 37, 'Red', 'blue', 1, 'Alok_1556134953.jpg', 'Alok_1556134980_featured.jpg', NULL, NULL),
(12, 'Chandan', 'chandan@ssquares.co.in', NULL, '$2y$10$HPt4p8xeCPz0awvGSSpNnedqACvfg8f6fJesqdk5bY06ohDLz9x0K', NULL, '2019-05-18 03:50:37', '2019-05-18 03:50:37', NULL, NULL, NULL, NULL, NULL, NULL, 0, 'default.jpg', 'default-featured.jpg', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
