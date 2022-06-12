-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2022 at 04:44 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rent_a_house`
--

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `name`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Bakhshi Para', 2, '2021-11-02 15:14:02', '2021-11-02 15:14:02'),
(2, 'Rajapur', 2, '2021-11-02 15:14:12', '2021-11-02 15:14:12'),
(3, 'Calico', 2, '2021-11-02 15:14:34', '2021-11-02 15:14:34'),
(4, 'Bypass Terminal', 2, '2021-11-02 15:14:45', '2021-11-02 15:14:45'),
(5, 'Monsurabad', 2, '2021-11-02 15:14:55', '2021-11-02 15:14:55'),
(6, 'East Shalgaria', 2, '2021-11-02 15:15:09', '2021-11-02 15:15:09'),
(7, 'West Shalgaria', 2, '2021-11-02 15:16:24', '2021-11-02 15:16:24'),
(8, 'Bangla clinic', 2, '2021-11-02 15:16:34', '2021-11-02 15:16:34'),
(9, 'Mujhahid Club', 2, '2021-11-02 15:16:45', '2021-11-02 15:16:45'),
(10, 'Rupkothar Goli', 2, '2021-11-02 15:16:57', '2021-11-02 15:16:57'),
(11, 'Radhanagar', 1, '2021-11-02 15:17:49', '2021-11-02 15:17:49'),
(12, 'Mohisher Dipo', 1, '2021-11-02 15:18:02', '2021-11-02 15:18:02'),
(13, 'Meril Bypass', 1, '2021-11-02 15:18:11', '2021-11-02 15:18:11'),
(14, 'Gaspara', 1, '2021-11-02 15:18:21', '2021-11-02 15:18:21'),
(15, 'Ononto', 1, '2021-11-02 15:18:33', '2021-11-02 15:18:33'),
(16, 'Library Bazar', 1, '2021-11-02 15:18:53', '2021-11-02 15:18:53'),
(17, 'Station Road', 1, '2021-11-02 15:19:03', '2021-11-02 15:19:03'),
(18, 'Shingha Bypass', 1, '2021-11-02 15:19:20', '2021-11-02 15:19:20'),
(19, 'Hemayatpur', 1, '2021-11-02 15:19:31', '2021-11-02 15:19:31');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rent` int(11) NOT NULL,
  `leave` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `landlord_id` int(11) NOT NULL,
  `renter_id` int(11) NOT NULL,
  `booking_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'requested',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `house_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `address`, `rent`, `leave`, `landlord_id`, `renter_id`, `booking_status`, `created_at`, `updated_at`, `house_id`) VALUES
(2, 'Calico', 7000, NULL, 8, 4, 'requested', '2021-11-02 17:05:51', '2021-11-02 17:05:51', 0),
(3, 'Radhanagar , Road no-2', 8000, NULL, 15, 25, 'requested', '2022-06-12 14:28:51', '2022-06-12 14:28:51', 11),
(4, 'Ononto Bazar', 7000, NULL, 14, 25, 'requested', '2022-06-12 14:31:15', '2022-06-12 14:31:15', 10);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

CREATE TABLE `houses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_room` int(11) NOT NULL,
  `number_of_toilet` int(11) NOT NULL,
  `number_of_belcony` int(11) NOT NULL,
  `rent` int(11) NOT NULL,
  `featured_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `houses`
--

INSERT INTO `houses` (`id`, `address`, `area_id`, `user_id`, `contact`, `number_of_room`, `number_of_toilet`, `number_of_belcony`, `rent`, `featured_image`, `images`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Rup Kothar goli , Road no. 2.', 10, 5, '8801734534968', 4, 2, 2, 8500, '2021-11-02-61815dfd05165.jfif', '[\"1635868157-61815dfd17b64.jpg\",\"1635868157-61815dfd191b2.jpg\"]', '1', '2021-11-02 15:49:17', '2021-11-02 15:49:17'),
(2, 'Bakshi Para , Road no. - 3', 1, 6, '01744534968', 2, 1, 1, 5000, '2021-11-02-61815eb25526e.jpg', '[\"1635868338-61815eb273123.jpg\",\"1635868338-61815eb274516.jpg\"]', '1', '2021-11-02 15:52:18', '2021-11-02 15:52:18'),
(3, 'Rajapur', 2, 7, '01735534968', 3, 1, 2, 7100, '2021-11-02-61815f263d3aa.jpg', '[\"1635868454-61815f266f38c.jpg\",\"1635868454-61815f2670b2b.jpg\"]', '1', '2021-11-02 15:54:14', '2021-11-02 15:54:46'),
(4, 'Calico', 3, 8, '01734534968', 2, 2, 1, 7200, '2021-11-02-6181609a4c3fe.jpg', '[\"1635868826-6181609a5d0c1.jpg\",\"1635868826-6181609a5d909.jpg\"]', '0', '2021-11-02 16:00:26', '2021-11-02 17:05:51'),
(5, 'Bypass Terminal', 4, 9, '01734544968', 3, 2, 1, 7500, '2021-11-02-618161cdf3fe2.jpg', '[\"1635869134-618161ce1144e.jpg\",\"1635869134-618161ce1251e.jpg\",\"1635869134-618161ce14a50.jpg\"]', '1', '2021-11-02 16:05:34', '2021-11-02 16:05:34'),
(6, 'Monsurabad , Road no. 1', 5, 10, '01734537968', 3, 2, 1, 7700, '2021-11-02-61816329d1881.jpg', '[\"1635869481-61816329e1340.jpg\",\"1635869481-61816329e1e7a.jpg\"]', '1', '2021-11-02 16:11:21', '2021-11-02 16:11:21'),
(7, 'Purbo Shalgaria', 6, 11, '01734534068', 3, 1, 1, 6500, '2021-11-02-6181641567ece.jpg', '[\"1635869717-61816415784a2.jpg\",\"1635869717-61816415791e0.jpg\"]', '1', '2021-11-02 16:15:17', '2021-11-02 16:15:17'),
(8, 'Bangla Clinic Mor', 9, 12, '01730007968', 5, 2, 1, 6400, '2021-11-02-6181653b656a5.jpg', '[\"1635870011-6181653b80c73.jpg\",\"1635870011-6181653b81eba.jpg\",\"1635870011-6181653b82ee2.jpg\",\"1635870011-6181653b842df.jpg\"]', '1', '2021-11-02 16:20:11', '2021-11-02 16:20:11'),
(9, 'Meril Bypass, Road no-1', 13, 13, '01864534068', 3, 2, 1, 6200, '2021-11-02-6181664c90cf5.jpg', '[\"1635870284-6181664ca33b3.jpg\",\"1635870284-6181664ca45e4.jpg\"]', '1', '2021-11-02 16:24:44', '2021-11-02 16:24:44'),
(10, 'Ononto Bazar', 15, 14, '01534534968', 4, 2, 1, 7900, '2021-11-02-618166b3507eb.jpg', '[\"1635870387-618166b361fbd.jpg\",\"1635870387-618166b362aa3.jpg\",\"1635870387-618166b3637bd.jpg\"]', '0', '2021-11-02 16:26:27', '2022-06-12 14:31:15'),
(11, 'Radhanagar , Road no-2', 11, 15, '01634534968', 5, 2, 1, 8200, '2021-11-02-618167cfd9aca.jpg', '[\"1635870671-618167cfe9f0b.jpg\",\"1635870671-618167cfeaa71.jpg\",\"1635870671-618167cfeb398.jpg\",\"1635870671-618167cfebc71.jpg\"]', '0', '2021-11-02 16:31:11', '2022-06-12 14:28:51');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(25, '2014_10_12_000000_create_users_table', 1),
(26, '2014_10_12_100000_create_password_resets_table', 1),
(27, '2019_08_19_000000_create_failed_jobs_table', 1),
(28, '2019_12_12_213050_create_roles_table', 1),
(29, '2020_09_18_154055_create_areas_table', 1),
(30, '2020_09_18_165147_create_houses_table', 1),
(31, '2020_10_06_235305_create_bookings_table', 1),
(32, '2020_11_15_145325_create_reviews_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `house_id` int(11) NOT NULL,
  `opinion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', NULL, NULL),
(2, 'Landlord', 'landlord', NULL, NULL),
(3, 'Renter', 'renter', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '2',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `username`, `nid`, `contact`, `email`, `image`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'MaRuF', 'admin', '7354030509', '01521308477', 'maruf@gmail.com', '2021-11-02-61816c3240875.jpg', '$2y$10$9tKyfJ5StEpgFJ9OwbWi..8MQqGAlobcJp8h/cukIvQ2HqD7XC9FK', NULL, '2021-04-21 07:20:14', '2021-11-02 16:49:54'),
(2, 1, 'Didar', 'admin_2', '7354000509', '01678801013', 'didar@gmail.com', '2021-11-02-61816cfcc2f62.jpg', '$2y$10$NtAmqwFSLUambRmU7NvQOORsmXZd167Hg/MVb/jVVMbBBp5hS64O.', NULL, '2021-04-27 07:20:14', '2021-11-02 16:53:17'),
(3, 2, 'Mr. Landlord', 'landlord', '7354030500', '01521308478', 'landlord@gmail.com', NULL, '$2y$10$Z7W4GA18w8OwexT942ZUPO4KEY8TOdegE2k.2b9GBM1GRs7hkEpWK', NULL, '2021-04-18 07:20:14', '2021-04-18 07:20:14'),
(4, 3, 'Mr. Renter', 'renter', '7354034500', '01521308498', 'renter@gmail.com', NULL, '$2y$10$YYvyaYhkLwU2OLqLxsjzUuCtzSZrSf2nhB1zeWFjInDuP3fdFqgZe', NULL, '2021-04-18 07:20:14', '2021-04-18 07:20:14'),
(5, 2, 'SubirSaha', 'subir-saha', '1990765321987', '8801734534968', 'subirsaha@gmail.com', '2021-11-02-61815d61dee47.jpg', '$2y$10$vioDXerreBU9MLuBTrB9i.NWxQWpIzN06RJhtCA2xwWcJYWrtwBcK', NULL, '2021-11-02 15:22:23', '2021-11-02 15:46:43'),
(6, 2, 'Naeem', 'naeem', '7356712309', '01744534968', 'naeem@gmail.com', '2021-11-02-61815e461cda4.jpg', '$2y$10$AWpEATfVbIc0Q4bcIy4Gyue39qLhGNmBIszxqWqqJTLf4TGo5AAjW', NULL, '2021-11-02 15:23:48', '2021-11-02 15:50:30'),
(7, 2, 'Meghna', 'meghna', '1996765321987', '01735534968', 'meghna@gmail.com', '2021-11-02-61815fbe248ee.jpg', '$2y$10$qc4uPfY2rQCiCmMMUG/5bulmGtpCjk8GzOLxKVJdHMfnsyDsrgQoC', NULL, '2021-11-02 15:25:05', '2021-11-02 15:56:46'),
(8, 2, 'Mredul', 'mredul', '1997765321987', '01734534968', 'mredul@gmail.com', NULL, '$2y$10$fL75Sd3Rj4Qwhqu.fzCDSOmXX3mKucn9GinIeGFe3qR5MJI6COAbC', NULL, '2021-11-02 15:26:14', '2021-11-02 15:26:14'),
(9, 2, 'Bijon', 'bijon', '1998765321987', '01734544968', 'bijon@gmail.com', '2021-11-02-618162a73bac9.jpg', '$2y$10$/EF4NtdYAb6pTAMJbIIJfuOz/84Kxe3lbvgNZJLKbmzsLH1s90/fS', NULL, '2021-11-02 15:27:13', '2021-11-02 16:09:11'),
(10, 2, 'Shakil', 'shakil', '1999765321987', '01734537968', 'shakil@gmail.com', '2021-11-02-61816357898d7.jpg', '$2y$10$pARVhB/.DGfaMd8NchQ4buMDj729AX/ctKcq3drmC7TtzH8uz83wq', NULL, '2021-11-02 15:28:27', '2021-11-02 16:12:07'),
(11, 2, 'Sohan', 'sohan', '7356712379', '01734534068', 'sohan@gmail.com', '2021-11-02-6181642dd0359.jpg', '$2y$10$IkNzh1dUaL6Rqk8uRt2le.bBEdkrqEQaauDaf5p6basZOGw81n2TO', NULL, '2021-11-02 15:29:33', '2021-11-02 16:15:41'),
(12, 2, 'Nafij', 'nafij', '7346712369', '01730007968', 'nafij@gmail.com', '2021-11-02-618165cf80c09.jpg', '$2y$10$ba8zToYwgGU1WGXbmRKbd.KhMQ/V..C3zyTqCMouC0ZRARBgUEafm', NULL, '2021-11-02 15:31:51', '2021-11-02 16:22:40'),
(13, 2, 'Monir', 'monir', '7356812300', '01864534068', 'monir@gmail.com', NULL, '$2y$10$GTqfBmPMFO5C6tbjhBRk2u0XdkLnDgD6ERt4gwOFMTPpgTRIKdrqO', NULL, '2021-11-02 15:32:58', '2021-11-02 15:32:58'),
(14, 2, 'Shompa', 'shompa', '7356792309', '01534534968', 'shompa@gmail.com', '2021-11-02-6181674934507.jpg', '$2y$10$zW2paUv7iZnCo3i78oiY.OekaUI78B9OaTF033BoaC8uI03PWKHTa', NULL, '2021-11-02 15:34:35', '2021-11-02 16:28:57'),
(15, 2, 'Najmul', 'najmul', '7356713309', '01634534968', 'najmul@gmail.com', '2021-11-02-618167e8d56b9.jpg', '$2y$10$Bn9iVZ8oXmpvLiBTZJTBYuTt7/.bPN3uSV6nE2M09ndb851hlZS1e', NULL, '2021-11-02 15:35:48', '2021-11-02 16:31:36'),
(16, 3, 'Tahmid', 'tahmid', '7356723309', '01434534968', 'tahmid@gmail.com', '2021-11-02-61816bb72c86a.jpg', '$2y$10$2VerRzkLKXWSZYlPDsx6xed//FBqf7u.toYrhePLaTkRWXRh0o6GG', NULL, '2021-11-02 15:37:05', '2021-11-02 16:47:51'),
(17, 3, 'Prity', 'prity', '7356712889', '01334534968', 'prity@gmail.com', '2021-11-02-61816b8a48457.jpg', '$2y$10$PVSj4nbhSoWIP85T05WmgudBE/hVR6COaiHPMyUl2MrjpNhDxwdAG', NULL, '2021-11-02 15:38:14', '2021-11-02 16:47:06'),
(18, 3, 'Motin', 'motin', '7356992309', '01934534968', 'motin@gmail.com', '2021-11-02-61816b080e4ef.jpg', '$2y$10$90BN5RWwJTw5sy/MR8Qdx.DhdtvWjkcbD2sUh2KAVVst1he.MCzFe', NULL, '2021-11-02 15:39:47', '2021-11-02 16:44:56'),
(19, 3, 'Araf', 'araf', '1996765391987', '01734524968', 'araf@gmail.com', '2021-11-02-61816aa201efb.jpg', '$2y$10$UMzZ7VfvrXsOAD0.64cLSuQL/.JEspaihgz7vSWHgMa1Hyc7AfKRe', NULL, '2021-11-02 15:41:03', '2021-11-02 16:43:14'),
(20, 3, 'Ridoy', 'ridoy', '1996765321907', '01777534968', 'ridoy@gmail.com', '2021-11-02-61816a1421f9e.jpg', '$2y$10$6B9jq1CCUvc13xpQ.nz.GOQbje5jkbKTWQadXcR0KNZOvW/sDVss.', NULL, '2021-11-02 15:42:05', '2021-11-02 16:40:52'),
(21, 3, 'Rejaul', 'rejaul', '1996065321987', '01734536068', 'rejaul@gmail.com', '2021-11-02-618169b75f354.jpg', '$2y$10$H1jqdkAD6OMhGLHYyc3LIebaR9hEHs.8TTkQDnCLq1//xx6rCFtBe', NULL, '2021-11-02 15:43:17', '2021-11-02 16:39:19'),
(22, 3, 'Redwan', 'redwan', '1996765651987', '01734534000', 'redwan@gmail.com', '2021-11-02-61816898e38f2.jpg', '$2y$10$qJOHKNMygIrUCIoo1A3u5OLYoYCwGMBNBM4DaZNx8qrnSvB6wDmLC', NULL, '2021-11-02 15:44:08', '2021-11-02 16:34:33'),
(23, 3, 'Mou', 'mou', '7350030509', '01666621334', 'mou@gmail.com', '2021-11-02-6181691ff1885.jpg', '$2y$10$CvpcWf/pvU/Baf9fcwVdmuxRXq69pdjPSE7yyBAzHiVg02fiFB/VS', NULL, '2021-11-02 16:35:27', '2021-11-02 16:36:48'),
(24, 3, 'Munna', 'munna-at-gmailcom', '19979320008000069', '01934534000', 'munna@gmail.com', '2021-11-02-61816bfa638d9.jpg', '$2y$10$j.l7lzlonTPvTM3Wc/5e1OFfXPRRVH6kFnIcZDR8biE8FXDZWUazW', NULL, '2021-11-02 16:48:40', '2021-11-02 16:48:58'),
(25, 3, 'test', 'maruf', '32996692', '1742978449', 'test@gmail.com', NULL, '$2y$10$eQzKrBInkK28oCqGWeCS4u7DAQRHzOFrz.1orhvLU0e38CjnOWeuy', NULL, '2022-06-12 14:27:46', '2022-06-12 14:27:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_nid_unique` (`nid`),
  ADD UNIQUE KEY `users_contact_unique` (`contact`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `houses`
--
ALTER TABLE `houses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
