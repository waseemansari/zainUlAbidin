-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2020 at 05:05 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `findmevenue`
--

-- --------------------------------------------------------

--
-- Table structure for table `budgets`
--

CREATE TABLE `budgets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `budget` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `estimatedCost` int(10) UNSIGNED NOT NULL,
  `actualCost` int(10) UNSIGNED NOT NULL,
  `paidCost` int(10) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `budgets`
--

INSERT INTO `budgets` (`id`, `budget`, `currency`, `user_id`, `estimatedCost`, `actualCost`, `paidCost`, `description`, `created_at`, `updated_at`) VALUES
(5, 'ceremany', '1', 16, 54, 43, 40, 'ceremany', '2020-01-09 14:52:18', '2020-01-12 03:54:32'),
(7, 'ceremany', '1', 18, 33, 22, 2, NULL, '2020-01-14 12:26:22', '2020-01-14 12:26:22'),
(8, 'ceremany', '1', 16, 4444, 22, 2, 'ssss', '2020-01-22 12:48:03', '2020-01-22 12:48:03');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'photocopy', 'ff f f f f  ff  f f f f f f f f f  f f f f', 1, NULL, NULL),
(2, 'venu', 'ccccccc', 1, NULL, NULL),
(3, 'smoking', 'sdfsf', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `sign` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `title`, `country_id`, `sign`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'fiasailabad', 1, 'fsd', NULL, 1, NULL, NULL),
(2, 'london', 2, 'ld', 'sd', 1, NULL, NULL),
(3, 'lahore', 1, 'lhr', 'vddffddf', 1, NULL, NULL),
(4, 'gojra', 1, 'gj', 'dsfsdf', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unigueName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `title`, `unigueName`, `status`, `created_at`, `updated_at`) VALUES
(1, 'pakistan', 'pk', 1, NULL, NULL),
(2, 'united kingdom', 'uk', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_vendors`
--

CREATE TABLE `enquiry_vendors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ListModel_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weddingDate` date NOT NULL,
  `guestNumber_id` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `sendQueryVia` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(54) NOT NULL,
  `status` int(54) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enquiry_vendors`
--

INSERT INTO `enquiry_vendors` (`id`, `ListModel_id`, `name`, `phone`, `email`, `weddingDate`, `guestNumber_id`, `sendQueryVia`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 14, 'muhammad waseem', '333333333333', 'waseem0320@gmail.com', '2020-01-09', '35 to 50', 1, 0, 0, '2020-01-26 01:16:52', '2020-01-26 01:16:52'),
(2, 14, 'muhammad waseem', '333333333333', 'waseem0320@gmail.com', '2020-01-09', '35 to 50', 1, 0, 0, '2020-01-26 01:17:03', '2020-01-26 01:17:03'),
(3, 16, 'ShaOn Zaman', '333333333333', 'waseem0320@gmail.com', '2020-01-08', '35 to 50', 1, 27, 2, '2020-01-27 11:41:46', '2020-01-27 13:24:50'),
(4, 16, 'muhammad waseem', '333333333333', 'waseem03201@gmail.com', '2020-01-27', '35 to 50', 1, 27, 0, '2020-01-27 13:50:21', '2020-01-27 13:50:21'),
(5, 16, 'muhammad waseem', '333333333333', 'waseem03201@gmail.com', '2020-01-27', '35 to 50', 1, 27, 0, '2020-01-27 13:50:38', '2020-01-27 13:50:38'),
(6, 16, 'muhammad waseem', '333333333333', 'waseem03201@gmail.com', '2020-01-27', '35 to 50', 1, 27, 0, '2020-01-27 13:55:11', '2020-01-27 13:55:11'),
(7, 16, 'rehan', '333333333333', 'waseem0320@gmail.com', '2020-01-08', '35 to 50', 1, 27, 0, '2020-01-27 13:56:33', '2020-01-27 13:56:33'),
(8, 16, 'rehan', '333333333333', 'vendor@gmail.com', '2020-01-22', '35 to 50', 1, 27, 0, '2020-01-27 13:57:49', '2020-01-27 13:57:49');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guest_invites`
--

CREATE TABLE `guest_invites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(54) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invite` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guest_invites`
--

INSERT INTO `guest_invites` (`id`, `name`, `email`, `phone`, `user_id`, `address`, `invite`, `created_at`, `updated_at`) VALUES
(2, 'muhammad waseem', 'waseem0320@gmail.com', '3434', 16, 'dffggffgg', 2, '2020-01-16 15:50:57', '2020-01-22 15:01:36'),
(3, 'rehan', 'waseem0320@gmail.com', '2444', 16, 'frgdf', 2, '2020-01-16 17:04:31', '2020-01-22 14:51:09'),
(4, 'muhammad waseem', 'waseem0320@gmail.com', '333333333333', 16, 'dddddddddddd', 3, '2020-01-22 13:51:21', '2020-01-22 14:54:15');

-- --------------------------------------------------------

--
-- Table structure for table `guest_numbers`
--

CREATE TABLE `guest_numbers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `image_lists`
--

CREATE TABLE `image_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ListModel_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_lists`
--

INSERT INTO `image_lists` (`id`, `image`, `ListModel_id`, `created_at`, `updated_at`) VALUES
(1, 'photocopy/qxQGgTpaZb0ARlCPotuZ9DA1uyOcWgrBKZvk9rS4.jpeg', 14, '2020-01-06 13:25:43', '2020-01-06 13:25:43'),
(2, 'photocopy/ixkuFdrd2Sx2amKFAAgLLOiyJjMUUd4e1gUjlg6S.png', 14, '2020-01-06 13:25:43', '2020-01-06 13:25:43'),
(3, 'photocopy/TTWvknpkhJWPeLjDdasRyaQ1l2ACh5FMdcrpVklY.jpeg', 14, '2020-01-06 13:25:43', '2020-01-06 13:25:43'),
(4, 'photocopy/OyZbOOyutSM0JsNVakgbzCMK8m3T0qLiyxI4lAGI.jpeg', 14, '2020-01-06 13:25:43', '2020-01-06 13:25:43'),
(5, 'photocopy/dxLvUbBTqIflm6iQosr9A7AtiTxmW3zIJkilgt43.jpeg', 15, '2020-01-07 12:49:43', '2020-01-07 12:49:43'),
(6, 'photocopy/qUWjnifsmY4JPFWUWNjoKFspLII3tEbH11oymiZi.jpeg', 15, '2020-01-07 12:49:43', '2020-01-07 12:49:43'),
(7, 'photocopy/PygqN0JLEXIS1i4R2GHQtPpShDvLPPyYLdmR8qOd.png', 15, '2020-01-07 12:49:43', '2020-01-07 12:49:43'),
(8, 'photocopy/13viW2wqfYZKhGDcuSGAkdlLHd9IP7VVhQkZBP6C.jpeg', 15, '2020-01-07 12:49:43', '2020-01-07 12:49:43'),
(9, 'photocopy/9ABp7lqYcuX4yqGfyDEaTNdyY6s5LB4vSfRkwLvN.jpeg', 16, '2020-01-26 10:45:44', '2020-01-26 10:45:44'),
(10, 'photocopy/ol31BMiA2wQsqYVo26SCiPBNf81J5380FCfEpez1.png', 16, '2020-01-26 10:45:44', '2020-01-26 10:45:44'),
(11, 'photocopy/KEsnCeFjw0eYsvS4T7yLu0ubBWsMWb363EgsaUpo.jpeg', 16, '2020-01-26 10:45:44', '2020-01-26 10:45:44'),
(12, 'photocopy/vb3I768qTXUUWyaiCyg3mA0MkGkQtrMDZgCFrvRF.png', 16, '2020-01-26 10:45:44', '2020-01-26 10:45:44');

-- --------------------------------------------------------

--
-- Table structure for table `list_models`
--

CREATE TABLE `list_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_id` int(11) NOT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `list_models`
--

INSERT INTO `list_models` (`id`, `heading`, `address`, `country`, `city`, `category`, `description`, `seat`, `price_id`, `latitude`, `longitude`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(16, 'WEDDINGS & HONEYMOONS', 'dsffdsfdsfds', '2', '2', 1, 'sfddddddddddddd', '3', 1, 'cccccccccccccc', 'ccccccccccccccccccc', 27, 1, '2020-01-26 10:45:44', '2020-01-26 10:45:44');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_17_163400_create_categories_table', 1),
(5, '2019_12_17_164840_create_countries_table', 1),
(6, '2019_12_17_164855_create_prices_table', 1),
(7, '2019_12_17_164913_create_seats_table', 1),
(8, '2019_12_17_182955_create_list_models_table', 1),
(9, '2020_01_06_170852_create_cities_table', 2),
(10, '2020_01_06_180642_create_image_lists_table', 3),
(12, '2020_01_09_182842_create_budgets_table', 5),
(13, '2020_01_14_175214_create_wish_lists_table', 6),
(14, '2020_01_16_203836_create_guest_invites_table', 7),
(15, '2020_01_21_185143_create_to_do_lists_table', 8),
(16, '2020_01_25_121930_create_enquiry_vendors_table', 9),
(17, '2020_01_25_123015_create_guest_numbers_table', 10),
(18, '2020_01_27_194225_create_ratings_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` int(11) NOT NULL,
  `sign` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `title`, `sign`, `status`, `created_at`, `updated_at`) VALUES
(1, 44, '$', 1, NULL, NULL),
(2, 90000, 'Rs', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `ListModel_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(10) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `user_id`, `ListModel_id`, `name`, `rating`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 16, 28, 'muhammad waseem', 2, 'mmmmm', 0, '2020-01-27 15:13:31', '2020-01-27 15:13:31');

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`id`, `title`, `status`, `created_at`, `updated_at`) VALUES
(2, '1-100', 1, NULL, NULL),
(3, '100-200', 1, NULL, NULL),
(4, '300-400', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `to_do_lists`
--

CREATE TABLE `to_do_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `to_do_lists`
--

INSERT INTO `to_do_lists` (`id`, `name`, `description`, `date`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'muhammad waseem nn', 'vfvv nnnnnnnnnnn', '2020-01-08', 1, 16, '2020-01-21 14:51:43', '2020-01-22 14:43:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wedding` date DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebookURl` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitterUrl` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedinUrl` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pinterestUrl` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `type`, `email_verified_at`, `password`, `images`, `website`, `wedding`, `phone`, `desc`, `facebookURl`, `twitterUrl`, `linkedinUrl`, `pinterestUrl`, `remember_token`, `created_at`, `updated_at`) VALUES
(27, 'muhammad waseem jjjj', 'waseem03201@gmail.com', '2', '2020-01-26 09:17:52', '$2y$10$d8bawj1Y1pNT7/rbvfZLt.U6T9AS9Cskhgar5cvhHma9897fCtZ6O', 'avatars/yOqvlgOW1ouSdmv69nJMbfFc7PsPy3hVpjVYezkA.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-26 09:17:35', '2020-01-27 14:04:38'),
(28, 'rehan', 'waseem0320@gmail.com', '1', '2020-01-26 09:19:12', '$2y$10$G9zeme847VHSwaAg.loPuOR7vKbeao6fqZls1vBHMCnT0AwkQIhEW', NULL, NULL, '2020-01-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-26 09:18:50', '2020-01-26 09:19:12');

-- --------------------------------------------------------

--
-- Table structure for table `wish_lists`
--

CREATE TABLE `wish_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `ListModel_id` int(10) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_id` int(11) NOT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wish_lists`
--

INSERT INTO `wish_lists` (`id`, `user_id`, `ListModel_id`, `heading`, `address`, `country`, `city`, `category`, `description`, `seat`, `price_id`, `latitude`, `longitude`, `status`, `created_at`, `updated_at`) VALUES
(5, 18, 15, 'WEDDINGS & HONEYMOONS', 'sdfsdfsdf', '1', '3', 1, 'vvvvvv', '3', 2, 'cccccccccccccc', 'ccccccccccccccccccc', 1, '2020-01-14 14:21:13', '2020-01-14 14:21:13'),
(6, 16, 14, 'WEDDINGS & HONEYMOONS nnnn', 'ccccccccccccccc', '1', '3', 1, 'nnnnnnnnnnnn', '3', 2, 'cccccccccccccc', 'ccccccccccccccccccc', 1, '2020-01-22 12:28:35', '2020-01-22 12:28:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `budgets`
--
ALTER TABLE `budgets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry_vendors`
--
ALTER TABLE `enquiry_vendors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guest_invites`
--
ALTER TABLE `guest_invites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guest_numbers`
--
ALTER TABLE `guest_numbers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_lists`
--
ALTER TABLE `image_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_models`
--
ALTER TABLE `list_models`
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
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `to_do_lists`
--
ALTER TABLE `to_do_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wish_lists`
--
ALTER TABLE `wish_lists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `budgets`
--
ALTER TABLE `budgets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enquiry_vendors`
--
ALTER TABLE `enquiry_vendors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guest_invites`
--
ALTER TABLE `guest_invites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `guest_numbers`
--
ALTER TABLE `guest_numbers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `image_lists`
--
ALTER TABLE `image_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `list_models`
--
ALTER TABLE `list_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seats`
--
ALTER TABLE `seats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `to_do_lists`
--
ALTER TABLE `to_do_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `wish_lists`
--
ALTER TABLE `wish_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
