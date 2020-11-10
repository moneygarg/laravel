-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2020 at 08:40 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `visiondiary`
--

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `id` int(10) UNSIGNED NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_environment_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_project_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_users` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`id`, `link`, `username`, `password`, `user_type`, `description`, `id_environment_type`, `id_project_type`, `id_users`, `active`, `created_at`, `updated_at`) VALUES
(1, 'https://visionevents.visiontravel.ca/admin', 'akumar@visionvoyages.ca', 'eyJpdiI6ImtCaDJWR01LWSs3bFVVajhxbWQ4Mnc9PSIsInZhbHVlIjoieDdnTmFsWTZEQkVwQmI3dkNjcFlRdz09IiwibWFjIjoiODNmNGY4N2EyNmVkN2FlOWFiYzQzZGY2ZmM2Nzk0N2MyZjIwM2E5YjBkMDlhODg1YTRiNWRjZTQxZGNiN2UyNSJ9', NULL, 'Vevents Prod Credentials', 'PROD', '3', 3, 1, NULL, NULL),
(2, 'https://visionevents.dev.visiontravel.ca/admin/signin', 'admin@visionvoyages.ca', 'eyJpdiI6IlAzZHVVeWxHbml5WU4wdERDMm5ZZXc9PSIsInZhbHVlIjoiVFVLa3BTZVdZSTNER0hSXC9HQVpCeFRvSXRuV3hqMExMTzBJYXZuUkphcFk9IiwibWFjIjoiZTUwNWE2NWI5Y2U2ZjE5YTlmYjM1OWFiY2RkZTYyMjYxYmE3NTk3Zjc3NTYzYmNiYjI3N2ZmODdiYzVlM2NkNyJ9', NULL, 'vevents dev credentials', 'DEV', '3', 3, 1, NULL, NULL),
(3, 'https://visionevents.dev.visiontravel.ca/admin/signin', 'akumar@visionvoyages.ca', 'eyJpdiI6IkgzUm4zaG9yenpJK013UUJ5S0FUUEE9PSIsInZhbHVlIjoiUnpxSEE0d0lmeVRPT1hcLzN6c2g0RXNzUmxWOEt0NWV1M05FaWtVSzNEN0U9IiwibWFjIjoiMGJmNWU0MTVkNzQ3MzNhMGQ2NzljY2Q5ODU5ZDI3Y2U2NGE0YjE0YWU0NDc5MWU5ZjA3NmRiZGQ2ZWQ0YTE3YyJ9', NULL, 'vevents developer cred.', 'DEV', '3', 3, 1, NULL, NULL),
(4, 'https://visionintel.ca/home/signin', 'rgupta@dt.ca', 'eyJpdiI6IklYYndUTHR0bTNvQmdOblBwc0hnQkE9PSIsInZhbHVlIjoialwvMGE3MzZ4cHNsXC84NmhNQ1BYblhiaGo1emlNZXVNTCtlNFhXNkVhNnFzPSIsIm1hYyI6ImRlZDMzN2E2YWY2Y2JjYjA0NmRhODUxMjNmNWRkN2Y5ZjIyZjU5N2VlNGYzZGE3MGU3YzJiMTczNzdiN2Q5NDMifQ==', NULL, 'rgupta@dt.ca/Vision123...', 'PROD', '4', 3, 1, NULL, NULL),
(5, 'https://visionintel.ca/home/signin', 'mthakur@dt.ca', 'eyJpdiI6InlUVEUycCszWVNYTEJHNzg1OHVyYWc9PSIsInZhbHVlIjoiU2hGbGt5OXVUQUR5eGUxQm1RMU55NnBoZkZSVzNTNDczeXg1XC9SQTVLR3M9IiwibWFjIjoiYTAxMjk2MWYwMjE3MWE5MmQxNjMxZGYzN2U0MjQwMjBmOGE3NzYwZmM0ZjBiMDljNDg2MWQ2NTE2MDcyNDIxZiJ9', NULL, 'mthakur@dt.ca/Vision123.', 'PROD', '4', 3, 1, NULL, NULL),
(6, 'https://mail.zoho.com/zm/', 'radha@navixel.com', 'eyJpdiI6ImNtV0hzYmxSMWdhRmRkTElvR0F1Vmc9PSIsInZhbHVlIjoiZlNmc0JXdVJXdTVEQmQxcG9MNlYzbGRXRUJCRzRybFY4a21sQWtSQ2FWbz0iLCJtYWMiOiJkOTNkNTBmYzQwNGI0ODlkODM2NGE1Mzk2N2U4NGFmMTk2MjFlOWVjMjU5NmFmZTVlYzQ5YzIyNDNiOTQ0NjhjIn0=', NULL, 'navixel office credetials', 'PROD', '1', 2, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `event` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `public` int(11) NOT NULL,
  `feature` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event`, `description`, `public`, `feature`, `id_users`, `active`, `created_at`, `updated_at`) VALUES
(1, 'diwali', 'New ytest', 1, 1, 5, 1, '2020-09-15 02:16:09', '2020-10-21 23:49:44'),
(2, 'Vision', 'All vision Family', 1, 3, 5, 1, '2020-09-15 07:06:37', '2020-09-15 07:06:37'),
(3, 'Locations', 'New ytest', 1, 1, 5, 0, '2020-09-15 07:07:29', '2020-10-16 01:34:28'),
(4, 'officeHub', 'Zxcv essdgdfv', 1, 3, 5, 1, '2020-10-15 03:55:44', '2020-10-16 01:32:17'),
(5, 'newtest', NULL, 1, 3, 5, 1, '2020-10-19 00:57:43', '2020-10-19 00:57:43'),
(6, 'TESTESTS', NULL, 1, 3, 5, 1, '2020-10-19 00:59:07', '2020-10-19 00:59:07');

-- --------------------------------------------------------

--
-- Table structure for table `events_images`
--

CREATE TABLE `events_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `public` int(11) NOT NULL,
  `feature` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `events_id` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events_images`
--

INSERT INTO `events_images` (`id`, `title`, `image`, `description`, `public`, `feature`, `id_users`, `events_id`, `active`, `created_at`, `updated_at`) VALUES
(2, 'test1', 'S1tFqCsFmx4G.jpeg', '', 1, 0, 5, 1, 1, '2020-09-15 07:02:57', '2020-09-15 07:02:57'),
(3, 'Xf79Huc5CDXN.jpeg', 'Xf79Huc5CDXN.jpeg', '', 1, 0, 5, 1, 1, '2020-09-15 07:05:50', '2020-09-15 07:05:50'),
(4, '37sNKvfLIuf1.jpeg', '37sNKvfLIuf1.jpeg', '', 1, 0, 5, 1, 1, '2020-09-15 07:05:50', '2020-09-15 07:05:50'),
(5, 'ksvPo1rsZQ6r.jpeg', 'ksvPo1rsZQ6r.jpeg', '', 1, 0, 5, 1, 1, '2020-09-15 07:05:51', '2020-09-15 07:05:51'),
(6, '8QhPzr2NlIur.JPG', '8QhPzr2NlIur.JPG', '', 1, 0, 5, 1, 1, '2020-09-15 07:05:51', '2020-09-15 07:05:51'),
(7, 'LlAxT69yFObL.jpeg', 'LlAxT69yFObL.jpeg', '', 1, 0, 5, 1, 1, '2020-09-15 07:05:52', '2020-09-15 07:05:52'),
(8, 'M44Q6g6LwZBL.jpeg', 'M44Q6g6LwZBL.jpeg', '', 1, 0, 5, 1, 1, '2020-09-15 07:05:52', '2020-09-15 07:05:52'),
(9, 'NzcaiN7koJBU.jpeg', 'NzcaiN7koJBU.jpeg', '', 1, 0, 5, 1, 1, '2020-09-15 07:05:52', '2020-09-15 07:05:52'),
(10, 'lxXrF4I02hmQ.jpeg', 'lxXrF4I02hmQ.jpeg', '', 1, 0, 5, 1, 1, '2020-09-15 07:05:52', '2020-09-15 07:05:52'),
(11, 'Qr3i6FXQevdZ.jpeg', 'Qr3i6FXQevdZ.jpeg', '', 1, 0, 5, 1, 1, '2020-09-15 07:05:53', '2020-09-15 07:05:53'),
(12, 'QB0uWYCrJmsX.jpeg', 'QB0uWYCrJmsX.jpeg', '', 1, 0, 5, 1, 1, '2020-09-15 07:05:53', '2020-09-15 07:05:53'),
(13, 'dODn3TF8URrA.jpeg', 'dODn3TF8URrA.jpeg', '', 1, 0, 5, 1, 1, '2020-09-15 07:05:54', '2020-09-15 07:05:54'),
(14, '0LbQKVlqVcD9.jpeg', '0LbQKVlqVcD9.jpeg', '', 1, 0, 5, 1, 1, '2020-09-15 07:05:54', '2020-09-15 07:05:54'),
(15, 'jPZZNBqyMF6P.jpeg', 'jPZZNBqyMF6P.jpeg', '', 1, 0, 5, 1, 1, '2020-09-15 07:05:54', '2020-09-15 07:05:54'),
(17, 'evXBftEO5bQE.JPG', 'evXBftEO5bQE.JPG', '', 1, 0, 5, 2, 1, '2020-09-15 07:06:49', '2020-09-15 07:06:49'),
(18, '8rWNhDTDh0MJ.jpeg', '8rWNhDTDh0MJ.jpeg', '', 1, 0, 5, 2, 1, '2020-09-15 07:06:49', '2020-09-15 07:06:49'),
(20, '7XRmQixZ4D4Y.JPG', '7XRmQixZ4D4Y.JPG', '', 1, 0, 5, 2, 1, '2020-09-15 07:06:50', '2020-09-15 07:06:50'),
(21, 'JRXW1VTTsU53.JPG', 'JRXW1VTTsU53.JPG', '', 1, 0, 5, 2, 1, '2020-09-15 07:06:50', '2020-09-15 07:06:50'),
(22, '7kjFB7s0ui63.jpeg', '7kjFB7s0ui63.jpeg', '', 1, 0, 5, 2, 1, '2020-09-15 07:06:51', '2020-09-15 07:06:51'),
(23, 'kPuiGKp03sEz.jpg', 'kPuiGKp03sEz.jpg', '', 1, 0, 5, 2, 1, '2020-09-15 07:06:51', '2020-09-15 07:06:51'),
(24, 'T4iD8fY85YI9.jpg', 'T4iD8fY85YI9.jpg', '', 1, 0, 5, 2, 1, '2020-09-15 07:06:51', '2020-09-15 07:06:51'),
(25, 'BByAGnGV18o0.JPG', 'BByAGnGV18o0.JPG', '', 1, 0, 5, 2, 1, '2020-09-15 07:06:51', '2020-09-15 07:06:51'),
(26, 'dcq8Vx7tircm.jpg', 'dcq8Vx7tircm.jpg', '', 1, 0, 5, 3, 1, '2020-09-15 07:07:39', '2020-09-15 07:07:39'),
(27, 'zmyFURb1nbab.jpg', 'zmyFURb1nbab.jpg', '', 1, 0, 5, 3, 1, '2020-09-15 07:07:39', '2020-09-15 07:07:39'),
(28, 'r5n8ahIQ4yvh.jpg', 'r5n8ahIQ4yvh.jpg', '', 1, 0, 5, 3, 1, '2020-09-15 07:07:40', '2020-09-15 07:07:40'),
(29, '4v9LnUfCLNUC.jpg', '4v9LnUfCLNUC.jpg', '', 1, 0, 5, 3, 1, '2020-09-15 07:07:40', '2020-09-15 07:07:40'),
(30, 'hOycqBT1AMjE.png', 'hOycqBT1AMjE.png', '', 1, 0, 5, 3, 1, '2020-09-15 07:07:41', '2020-09-15 07:07:41'),
(31, 'uVJ4hSo2yIiW.png', 'uVJ4hSo2yIiW.png', '', 1, 0, 5, 3, 1, '2020-09-15 07:07:41', '2020-09-15 07:07:41'),
(32, 'TqdxNogbknCN.jpg', 'TqdxNogbknCN.jpg', '', 1, 0, 5, 3, 1, '2020-09-15 07:07:42', '2020-09-15 07:07:42'),
(37, 'XK2RSU2WMfQ5.jpeg', 'XK2RSU2WMfQ5.jpeg', '', 0, 0, 5, 4, 1, '2020-10-15 03:56:01', '2020-10-15 03:56:01'),
(38, 'z8PRHskZ844M.jpeg', 'z8PRHskZ844M.jpeg', '', 0, 0, 5, 4, 1, '2020-10-15 03:56:01', '2020-10-15 03:56:01'),
(39, 'siSdnnP8evjA.jpeg', 'siSdnnP8evjA.jpeg', '', 0, 0, 5, 4, 1, '2020-10-15 03:56:02', '2020-10-15 03:56:02');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_09_20_115343_create_project_type_table', 1),
(4, '2018_09_21_043337_create_events_table', 1),
(5, '2018_09_21_044119_create_events_images_table', 1),
(6, '2018_09_21_115514_create_credentials_table', 1),
(7, '2018_09_21_120007_create_redmines_table', 1),
(8, '2018_12_27_051554_create_officetrack_table', 1),
(9, '2020_10_19_103528_create_organization_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `officetrack`
--

CREATE TABLE `officetrack` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `extralogin` date NOT NULL,
  `extralogout` date NOT NULL,
  `lunchbreak` date NOT NULL,
  `leavetype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `project_types`
--

CREATE TABLE `project_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_types`
--

INSERT INTO `project_types` (`id`, `title`, `short_tag`, `type`, `category`, `description`, `active`, `created_at`, `updated_at`) VALUES
(1, 'office', 'office_personnel', 'personnel', '', 'test', 1, '2020-09-15 01:58:28', '2020-09-15 01:58:28'),
(2, 'socialMedia', 'socialMedia', 'personnel', '', 'ghf', 1, '2020-09-15 01:59:30', '2020-09-15 01:59:30'),
(3, 'VEvents', 'vevents', 'vision', '', 'test', 1, '2020-09-15 01:59:59', '2020-09-15 01:59:59'),
(4, 'VisionIntel', 'visionintel', 'vision', '', 'sda', 1, '2020-09-15 02:00:17', '2020-09-15 02:00:17'),
(5, 'VisionLinks', 'visionlinks', 'vision', '', 'ds', 1, '2020-09-15 02:00:57', '2020-09-15 02:02:20'),
(6, 'navixelProject', 'navixelproject', 'other', '', 'sd', 1, '2020-09-15 02:01:24', '2020-09-15 02:01:24');

-- --------------------------------------------------------

--
-- Table structure for table `redmines`
--

CREATE TABLE `redmines` (
  `id` int(10) UNSIGNED NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redmine_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timespent` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assigned_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assigned_to` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `due_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_users` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) CHARACTER SET utf8 DEFAULT NULL,
  `Description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `type`, `email`, `password`, `image`, `Description`, `remember_token`, `created_at`, `updated_at`, `active`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '$2y$10$VJvDoqsj2xI9u/AkMUjqJOeqDKUdsQiyhzITYgKJ.x0.oKJ9pcUNG', '1600153645.JPG', NULL, 'QPrDJnFu56Ye4ukgCOnGcIszOjYitAYxwsJvAuMYbPRjOXvyeJNLsr5oH5Kq', '2020-09-15 01:26:27', '2020-09-15 01:37:25', 1),
(2, 'Radhika Jindal', 'user', 'radhika@gmail.com', '$2y$10$CO0crxHQN9V0Db44ysJiXuHCeZKjrSJU13yvAmpBwo62HDxDPEXce', '1600153673.JPG', 'smart personality..believe in smartwork rather than hardwork', 'QSy926d6Pspl08D3PD3FjKyGBghIhQt9nxAPMBE2FvDa005qFX7MbCVsw7Sn', '2020-09-15 01:27:38', '2020-09-15 01:45:05', 1),
(3, 'developer', 'developer', 'developer@gmail.com', '$2y$10$Ip1M/y7pF33UZWrjwwHvPunA9qtIQiA6HXcruYaPNjBC7Tn/PwYQS', NULL, NULL, 'KWezGTv1ZK2BOqQWsTmXqo4JUagE1pCaTjVx7EOKRojf4sEUunwvi6uPJKwm', '2020-09-15 01:47:18', '2020-09-15 01:47:18', 1),
(4, 'Mukul Jindal', 'user', 'mukul@gmail.com', '$2y$10$Sf66yYLY1BK0D06NdGXKbuTS9VY5oYvz7EPLmyYV4Q2q1B3sXKldO', '1600154552.JPG', NULL, 'GK52ZHLCyIZRCwuro719Xwq6FN55j448dKBY2GlLsB23G0VISdTQ3GAIOXjl', '2020-09-15 01:48:48', '2020-09-15 01:52:32', 1),
(5, 'kamlesh Jindal', 'user', 'kamleshjindal67@gmail.com', '$2y$10$m3i6C98U6YMvKDTmHtgof.o5j7o5Pstsc6wD.6B7Fhgfgkk4K2muq', '1600154466.JPG', NULL, 'CnV9g5zeAzJi525gOhuoLeckEDhnW1xY0FpK67ATQXZHT77n9iveNX8pEG8S', '2020-09-15 01:49:52', '2020-09-15 01:51:06', 1),
(6, 'Ruby', 'user', 'ruby@gmail.com', '$2y$10$m3i6C98U6YMvKDTmHtgof.o5j7o5Pstsc6wD.6B7Fhgfgkk4K2muq', '1600154624.JPG', NULL, '4dDRjbZJ60PfZqk5D73jVMmK7utUROFtMjC2rsvqrLsNuTP6YL10IoqIsUwP', '2020-09-15 01:49:52', '2020-09-15 01:53:44', 1),
(7, 'navi', 'user', 'navi@gmail.com', '$2y$10$m3i6C98U6YMvKDTmHtgof.o5j7o5Pstsc6wD.6B7Fhgfgkk4K2muq', '1600154714.JPG', NULL, 'kolQ9zxVWjlSkf0a62A7XXt2NJwgo5mSOo0lpBYvgnvyh7z5ukKZt17TnYdI', '2020-09-15 01:49:52', '2020-09-15 01:55:14', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events_images`
--
ALTER TABLE `events_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `officetrack`
--
ALTER TABLE `officetrack`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `project_types`
--
ALTER TABLE `project_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `redmines`
--
ALTER TABLE `redmines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `credentials`
--
ALTER TABLE `credentials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `events_images`
--
ALTER TABLE `events_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `officetrack`
--
ALTER TABLE `officetrack`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_types`
--
ALTER TABLE `project_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `redmines`
--
ALTER TABLE `redmines`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
