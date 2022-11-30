-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2021 at 01:46 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peoplework_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_money`
--

CREATE TABLE `add_money` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `buy_packages`
--

CREATE TABLE `buy_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quote` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oparetor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buy_packages`
--

INSERT INTO `buy_packages` (`id`, `user_id`, `name`, `quote`, `email`, `package`, `oparetor`, `number`, `status`, `created_at`, `updated_at`) VALUES
(1, '2', 'Khan', 'Quote:Khan12793617a3799340b5', 'admin@admin.com', 'Silver', 'Nagad', '0475454', NULL, '2021-10-27 23:39:37', '2021-10-27 23:39:37'),
(2, '2', 'Khan', 'Quote:Khan37819617a385a3b90f', 'admin@admin.com', 'Gold', 'Roket', '0424242', NULL, '2021-10-27 23:42:50', '2021-10-27 23:42:50'),
(3, '10', 'Tanjimul Islam', 'Quote:Tanjimul Islam21678617ee45016571', 'tstanjim16@gmail.com', 'Diamond', 'Bkash', '01632677577', NULL, '2021-10-31 10:45:36', '2021-10-31 10:45:36'),
(4, '11', 'Lurma', 'Quote:Lurma83149617f0321be6e7', 'asdas@fhfg.ddf', 'Play', 'Nagad', '045274242', NULL, '2021-10-31 12:57:05', '2021-10-31 12:57:05'),
(5, '14', 'Tanjim', 'Quote:Tanjim309206180d54bd6f46', 'tstanjim184@gmail.com', 'Play', 'Bkash', '01632677577', NULL, '2021-11-01 22:06:03', '2021-11-01 22:06:03'),
(6, '16', 'Tomal Sen', 'Quote:Tomal Sen235426181857a71140', 'tomalsen2000@gmail.com', 'Play', 'Bkash', '25668', NULL, '2021-11-02 12:37:46', '2021-11-02 12:37:46'),
(7, '16', 'Tomal Sen', 'Quote:Tomal Sen5166561818a1674a89', 'tomalsen2000@gmail.com', 'Gold', 'Bkash', '55555', NULL, '2021-11-02 12:57:26', '2021-11-02 12:57:26'),
(8, '1', 'Tomal Sen', 'Quote:Tomal Sen820316181901d7c0c6', 'tomalsen2000@gmail.com', 'Gold', 'Roket', '5555', 'approved', '2021-11-02 13:23:09', '2021-11-03 00:32:05'),
(9, '1', 'Tomal Sen', 'Quote:Tomal Sen83842618225d75287a', 'tomalsen2000@gmail.com', 'Silver', 'Bkash', '600', 'approved', '2021-11-03 00:01:59', '2021-11-03 00:29:10'),
(10, '16', 'Tomal Sen', 'Quote:Tomal Sen193556182301594ad8', 'tomalsen2000@gmail.com', 'Gold', 'Roket', '6045454', 'approved', '2021-11-03 00:45:41', '2021-11-03 00:46:00'),
(11, '16', 'Tomal Sen', 'Quote:Tomal Sen149096182307c813d2', 'tomalsen2000@gmail.com', 'Silver', 'Bkash', '6000', 'approved', '2021-11-03 00:47:24', '2021-11-03 00:47:40');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_11_080655_create_roles_table', 1),
(5, '2020_07_11_081109_create_role_user_table', 1),
(6, '2020_07_14_095412_create_notifications_table', 1),
(7, '2021_10_16_181850_create_wallets_table', 1),
(8, '2021_10_17_182959_create_contacts_table', 1),
(9, '2021_10_18_202407_create_packages_table', 1),
(10, '2021_10_19_130204_create_withdraw_requests_table', 1),
(11, '2021_10_20_213353_create_p_t_c_videos_table', 1),
(12, '2021_10_24_184712_create_notifies_table', 1),
(13, '2021_10_26_051104_create_buy_packages_table', 1),
(14, '2021_10_28_133416_create_shop_balances_table', 2),
(15, '2021_10_28_150103_create_transfers_table', 3),
(16, '2021_10_28_173007_create_visits_table', 4),
(17, '2021_10_28_174239_create_add_money_table', 5),
(18, '2021_10_31_102454_create_levels_table', 5),
(19, '2021_11_04_074024_create_statements_table', 5),
(20, '2021_11_04_133144_create_reffer_dasboards_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifies`
--

CREATE TABLE `notifies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Your Package Approved',
  `offer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifies`
--

INSERT INTO `notifies` (`id`, `user_id`, `email`, `message`, `offer`, `name`, `status`, `created_at`, `updated_at`) VALUES
(21, '16', 'tomalsen2000@gmail.com', 'Your Request For SilverHasbeen Approved', NULL, NULL, 'active', '2021-11-03 00:47:40', '2021-11-03 00:47:40');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `user_id`, `package_name`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 'Silver', 'active', '2021-11-03 00:29:10', '2021-11-03 00:29:10'),
(2, '1', 'Gold', 'active', '2021-11-03 00:32:05', '2021-11-03 00:32:05'),
(3, '10', 'Gold', 'active', '2021-11-03 00:46:00', '2021-11-03 00:46:00'),
(4, '16', 'Silver', 'active', '2021-11-03 00:47:40', '2021-11-03 00:47:40');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ismamtabriz26@gmail.com', '$2y$10$ql4EPK9Avja2n1DBOy.KbugIbAJq0qKzpfzBcz18iNILnLpe59T6a', '2021-10-31 15:08:43');

-- --------------------------------------------------------

--
-- Table structure for table `p_t_c_videos`
--

CREATE TABLE `p_t_c_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `p_t_c_videos`
--

INSERT INTO `p_t_c_videos` (`id`, `video`, `views`, `created_at`, `updated_at`) VALUES
(3, 'videos/DdbtjAZx8b2Xyzv1dggN4GqGdtFrKsAIvOf3YHqD.mp4', NULL, '2021-10-31 10:53:32', '2021-10-31 10:53:32');

-- --------------------------------------------------------

--
-- Table structure for table `reffer_dasboards`
--

CREATE TABLE `reffer_dasboards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reffer_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refferer_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refferer_username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reffer_dasboards`
--

INSERT INTO `reffer_dasboards` (`id`, `user_id`, `reffer_type`, `refferer_code`, `refferer_username`, `created_at`, `updated_at`) VALUES
(1, '17', 'direct', '617f45a4c0054', NULL, '2021-11-04 07:57:00', '2021-11-04 07:57:00'),
(2, '19', 'direct', '617f45a4c0054', NULL, '2021-11-04 07:58:45', '2021-11-04 07:58:45'),
(3, '20', 'direct', '617f45a4c0054', NULL, '2021-11-04 08:01:06', '2021-11-04 08:01:06'),
(4, '21', 'direct', '617f45a4c0054', NULL, '2021-11-04 08:02:37', '2021-11-04 08:02:37'),
(5, '23', 'direct', '617f45a4c0054', NULL, '2021-11-04 08:05:39', '2021-11-04 08:05:39'),
(6, '24', 'direct', '617f45a4c0054', NULL, '2021-11-04 08:07:04', '2021-11-04 08:07:04'),
(7, '25', 'direct', 'Et veritatis qui qui', NULL, '2021-11-04 08:08:41', '2021-11-04 08:08:41'),
(8, '26', 'direct', 'Id expedita nostrum', NULL, '2021-11-04 08:22:35', '2021-11-04 08:22:35'),
(9, '27', 'direct', 'Architecto est sunt', NULL, '2021-11-04 08:32:03', '2021-11-04 08:32:03'),
(10, '28', 'direct', 'Iste eos aut archite', NULL, '2021-11-04 08:34:55', '2021-11-04 08:34:55'),
(11, '29', 'direct', 'Duis deserunt dolore', NULL, '2021-11-04 08:37:56', '2021-11-04 08:37:56'),
(12, '30', 'direct', 'Odio anim provident', NULL, '2021-11-04 09:13:34', '2021-11-04 09:13:34'),
(13, '31', 'direct', 'Ullam rerum sint su', NULL, '2021-11-04 09:13:41', '2021-11-04 09:13:41'),
(14, '32', 'direct', 'Blanditiis accusamus', NULL, '2021-11-04 09:13:49', '2021-11-04 09:13:49'),
(15, '33', 'direct', 'Officiis sint esse', NULL, '2021-11-04 09:30:36', '2021-11-04 09:30:36'),
(16, '34', 'direct', 'Incidunt sint nihil', NULL, '2021-11-04 09:57:22', '2021-11-04 09:57:22');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `urole` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `urole`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', '2021-10-27 14:53:49', '2021-10-27 14:53:49'),
(2, 'admin', '2021-10-27 14:53:49', '2021-10-27 14:53:49'),
(3, 'author', '2021-10-27 14:53:49', '2021-10-27 14:53:49'),
(4, 'user', '2021-10-27 14:53:49', '2021-10-27 14:53:49');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 2, NULL, NULL),
(4, 4, 4, NULL, NULL),
(5, 4, 16, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shetabit_visits`
--

CREATE TABLE `shetabit_visits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `method` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `request` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referer` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `languages` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `useragent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `headers` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `device` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `platform` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `browser` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visitable_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visitable_id` bigint(20) UNSIGNED DEFAULT NULL,
  `visitor_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visitor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shop_balances`
--

CREATE TABLE `shop_balances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balence` decimal(10,2) DEFAULT NULL,
  `sent_to` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `statements`
--

CREATE TABLE `statements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tnx_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tnx_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `credit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `debit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remain_balance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statements`
--

INSERT INTO `statements` (`id`, `user_id`, `tnx_id`, `tnx_type`, `remarks`, `credit`, `debit`, `remain_balance`, `date`, `time`, `created_at`, `updated_at`) VALUES
(1, '16', '618395f8dbfba', 'Earning ', NULL, '2', NULL, '17', '2021-11-04', '14:12:40', '2021-11-04 02:12:40', '2021-11-04 02:12:40'),
(2, '16', '61839772ae1a5', 'Earning Credit', 'Watching vedio', '2', NULL, '19', '2021-11-04', '14:18:59', '2021-11-04 02:18:59', '2021-11-04 02:18:59'),
(3, '16', '61846ff9b84f4', 'Withdraw Request', NULL, '19.00', NULL, '0', '2021-11-05', '05:42:49', '2021-11-04 17:42:49', '2021-11-04 17:42:49'),
(4, '16', '618472510db7f', 'Earning', 'Watching vedio', '2', NULL, '2', '2021-11-05', '05:52:49', '2021-11-04 17:52:49', '2021-11-04 17:52:49');

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

CREATE TABLE `transfers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `send_to` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wallet_amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatar.png',
  `reffer_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urole` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `verified` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Not Verified',
  `package` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'New User',
  `balance` decimal(10,2) NOT NULL DEFAULT 0.00,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `avatar`, `reffer_code`, `name`, `f_name`, `l_name`, `phone`, `gender`, `urole`, `email`, `status`, `verified`, `package`, `balance`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'avatar.png', 'fgyh546', '', NULL, NULL, NULL, NULL, 'superadmin', 'superadmin@admin.com', '1', 'Not Verified', 'New User', '0.00', NULL, '$2y$10$l3/ZRpb2S1KJGxX5H8kDfuSapgfdNcVOgmwUbVPCHeDJKnGPZmwsq', NULL, '2021-10-27 14:53:49', '2021-10-27 14:53:49'),
(2, '1635704788.jpg', '46545364163121', '', 'jkjk', 'kjkjgdfg', NULL, NULL, 'admin', 'admin@admin.com', '1', 'on', 'gold', '0.00', NULL, '$2y$10$grAeZH.Sj1fuJA.OtB3/NuZMz5uW8LhTIkmCAbr1j3yFsbjZEd6Qy', 'xsKDeXIXm3jQRptzSX1ofARaBjjnbZBmonevCqYsAQ0ovSWBv9dw7E1FwT1I', '2021-10-27 14:53:50', '2021-10-31 10:26:28'),
(3, 'avatar.png', '45456464564', '', NULL, NULL, NULL, NULL, 'author', 'author@admin.com', '1', 'on', 'diamond', '0.00', NULL, '$2y$10$EqPtAPiqPNguAlxCRE0Ua.R8K/v.KU6GDME8c8SKkqwln/GAEPDky', NULL, '2021-10-27 14:53:50', '2021-10-31 10:48:14'),
(4, 'avatar.png', '547545749', '', NULL, NULL, NULL, NULL, NULL, 'user@admin.com', '1', 'on', 'play', '0.00', NULL, '$2y$10$TTUXIkw3Eyv81KJE3hbHJu131Ao9sGQNRvwb.eMOsFNCZTrPEUyve', NULL, '2021-10-27 14:53:50', '2021-10-31 12:57:31'),
(5, 'avatar.png', '617a0bc064716', '', NULL, NULL, NULL, NULL, NULL, 'nazilazannat@gmail.com', '1', 'Not Verified', 'New User', '0.00', NULL, '$2y$10$.rTSHL4N5dfWHOifjVJBd.biehUeo5qk3lg.H1sGFV6qgN7KZCO7u', NULL, '2021-10-27 20:32:46', '2021-10-27 20:32:46'),
(6, 'avatar.png', '617b358009d03', '', NULL, NULL, NULL, NULL, NULL, 'jyj@df.gjh', '1', 'Not Verified', 'New User', '0.00', NULL, '$2y$10$w/3IVdwwj.0nPJIBv9/VJ.MyvjxNvcDDaZ3Bj5fYSZeefyI4CbT0O', NULL, '2021-10-28 17:43:13', '2021-10-28 17:43:13'),
(7, 'avatar.png', '617b3635ef632', '', NULL, NULL, NULL, NULL, NULL, 'master@admin.com', '1', 'Not Verified', 'New User', '0.00', NULL, '$2y$10$7q1SlZAT8duVhUAUe5eZHeobx9sB0MKU9jP9MjVwe4Woaa8lwPezK', NULL, '2021-10-28 17:46:17', '2021-10-28 17:46:17'),
(8, 'avatar.png', '617e6db3841bf', '', NULL, NULL, NULL, NULL, NULL, 'ismamtabriz26@gmail.com', '1', 'Not Verified', 'New User', '0.00', NULL, '$2y$10$4HCH6lg4NZbJv3eqXHY7UeO19DuoB1ifaureYVnLqvraKkWA6pZHa', NULL, '2021-10-31 04:19:50', '2021-10-31 04:19:50'),
(9, 'avatar.png', '617e6e4b02eff', '', NULL, NULL, NULL, NULL, NULL, 'sdfsdf@dxfg.gfg', '1', 'Not Verified', 'New User', '0.00', NULL, '$2y$10$YzLJs7RlLLECJ8MV8BEZnOuierv6KIpOnM1yWPvc3zFFd578LKhQq', NULL, '2021-10-31 04:22:20', '2021-10-31 04:22:20'),
(10, '1635705726.jpg', '617edf074935a', '', 'Tanjim', 'Chowdhury', NULL, NULL, NULL, 'tstanjim16@gmail.com', '1', 'on', 'diamond', '0.00', NULL, '$2y$10$GB.jBHXTpPcpv6MwwuACZeMRLdtFIax3w7sZhCECkkYWQ/R54Hffi', 'TZlG9TfO4p0v4FKFqa9gmcGL35yuo9Mt3ztFefRzR11doCrTUafjABMydfgy', '2021-10-31 10:23:17', '2021-10-31 16:57:35'),
(11, '1635720432.jpg', '617f03064253b', '', 'Khan', 'Tabriz', NULL, NULL, NULL, 'asdags@fhfg.ddf', '1', 'on', 'play', '0.00', NULL, '$2y$10$gdkuBrmfjd5kfF25jX/LouV7gEXnJDzPiUJ8NoMyLtSJWmCdWbK06', NULL, '2021-10-31 12:56:50', '2021-10-31 15:03:43'),
(14, '1635730998.jpg', '617f45a4c0054', '', NULL, NULL, NULL, NULL, NULL, 'tstanjim184@gmail.com', '1', 'Not Verified', 'New User', '0.00', NULL, '$2y$10$JMb9VDa.KN7euO.w9XMgu.7v.G4FNAoEw0Qs6PYGZJXub4u1SlWYa', 'hyHxw70XNeDb7nrKMxbs5d6o2PEit3zCho8jvCty8BrWO15nd2ZBYl67M8Gf', '2021-10-31 17:41:36', '2021-10-31 17:43:19'),
(16, 'avatar.png', '6181782766783', 'tomal', NULL, NULL, NULL, NULL, NULL, 'tomalsen2000@gmail.com', '1', 'on', 'play', '2.00', NULL, '$2y$10$rj92aDKaJSzhMJqRoZ0/V.4qsnVkYxyBpMt4sMts0TLD9KFNi8bKi', NULL, '2021-11-02 11:41:22', '2021-11-04 17:52:49'),
(17, 'avatar.png', '6183e51a33153', 'Tomal Sen', NULL, NULL, '+1 (824) 877-7747', NULL, NULL, 'tomalsen200@gmail.com', '1', 'Not Verified', 'New User', '0.00', NULL, '$2y$10$lHQ172kiIAkjIY48mBMWROFsHzsvYybe8Yvz.QkM.jFSRuGtrbIua', NULL, '2021-11-04 07:57:00', '2021-11-04 07:57:00'),
(19, 'avatar.png', '6183e71137f56', 'Winifred Hickman', NULL, NULL, '+1 (741) 393-9441', NULL, NULL, 'sanojazys@mailinator.com', '1', 'Not Verified', 'New User', '0.00', NULL, '$2y$10$mTRHFdiL/zxFlgvXbK6tq.VXNKfUgCWbrmFYFD7O2mFhj.lRmsayq', NULL, '2021-11-04 07:58:45', '2021-11-04 07:58:45'),
(20, 'avatar.png', '6183e79e9bca3', 'Inga Richard', NULL, NULL, '+1 (239) 132-2243', NULL, NULL, 'piwyj@mailinator.com', '1', 'Not Verified', 'New User', '0.00', NULL, '$2y$10$NGhnyYGiPqB6qG7Nznw13.MdpC3jrvUGKJu6o7TG2.YzCRVoxzOp2', NULL, '2021-11-04 08:01:06', '2021-11-04 08:01:06'),
(21, 'avatar.png', '6183e7f280382', 'Jaquelyn Lawrence', NULL, NULL, '+1 (934) 535-4825', NULL, NULL, 'lefe@mailinator.com', '1', 'Not Verified', 'New User', '0.00', NULL, '$2y$10$sLq7mJUHnY41nWS.DcI77.qUAB6Am/7L7cp9kA9LdAoGDJAOt8332', NULL, '2021-11-04 08:02:37', '2021-11-04 08:02:37'),
(23, 'avatar.png', '6183e8afd2713', 'Damian Snow', NULL, NULL, '+1 (571) 857-4807', NULL, NULL, 'pimax@mailinator.com', '1', 'Not Verified', 'New User', '0.00', NULL, '$2y$10$6oW9I6ub/QC7fjFw8luZNuSpze3fTZoM2XX/0e5qc4ZCC4YnpeZ7W', NULL, '2021-11-04 08:05:39', '2021-11-04 08:05:39'),
(24, 'avatar.png', '6183e903eb50f', 'Josiah Mccray', NULL, NULL, '+1 (393) 465-1208', NULL, NULL, 'bupajyf@mailinator.com', '1', 'Not Verified', 'New User', '0.00', NULL, '$2y$10$uL7V4BZSosxZSbuTsVoNt.7y.hRSk1nro1R2llBy/nUk3dlZA0HV2', NULL, '2021-11-04 08:07:04', '2021-11-04 08:07:04'),
(25, 'avatar.png', '6183e96539aff', 'Desirae Dotson', NULL, NULL, '+1 (952) 228-4511', NULL, NULL, 'dodi@mailinator.com', '1', 'Not Verified', 'New User', '0.00', NULL, '$2y$10$NlfipptF8oxfsD0yVgn.mOOR/2vS8.6qGlWnf30qg8gAjohMzj0PC', NULL, '2021-11-04 08:08:41', '2021-11-04 08:08:41'),
(26, 'avatar.png', '6183ec9fd8901', 'Genevieve Melton', NULL, NULL, '+1 (967) 272-9726', NULL, NULL, 'xerono@mailinator.com', '1', 'Not Verified', 'New User', '0.00', NULL, '$2y$10$PcDmckN7HBzFKh3ApkqoUOSTma6emxyisym0DNSKLlOQv4tlXOKha', NULL, '2021-11-04 08:22:34', '2021-11-04 08:22:34'),
(27, 'avatar.png', '6183eeda7e4d0', 'Ocean Strong', NULL, NULL, '+1 (249) 863-6564', NULL, NULL, 'maci@mailinator.com', '1', 'Not Verified', 'New User', '0.00', NULL, '$2y$10$JzMYuup.hss3EmAFiF1O7uFiLwefeNlKeLNyZ3W0looqTW5xE3D06', NULL, '2021-11-04 08:32:03', '2021-11-04 08:32:03'),
(28, 'avatar.png', '6183ef8a3e1b3', 'Austin Bernard', NULL, NULL, '+1 (193) 205-3596', NULL, NULL, 'jujife@mailinator.com', '1', 'Not Verified', 'New User', '0.00', NULL, '$2y$10$bm6mlGx/5JnPhdDEqj4qpeDHV01a9fmThKYoF4jPN5F7KQ9/aoRZ6', NULL, '2021-11-04 08:34:55', '2021-11-04 08:34:55'),
(29, 'avatar.png', '6183f0407ac99', 'Hiroko West', NULL, NULL, '+1 (802) 484-2036', NULL, NULL, 'kiseto@mailinator.com', '1', 'Not Verified', 'New User', '0.00', NULL, '$2y$10$8mZqeT8wDg9Qy9Wp2B7J2OKiz8aWVKciv57Az/SeorwG4HjpBSTL.', NULL, '2021-11-04 08:37:56', '2021-11-04 08:37:56'),
(30, 'avatar.png', '6183f890baff4', 'Holmes Guerra', NULL, NULL, '+1 (634) 968-7478', NULL, NULL, 'nihod@mailinator.com', '1', 'Not Verified', 'New User', '0.00', NULL, '$2y$10$WiLgTVt1Ke8xGI0VM8xYg.AQithZL3EFcGDNcys1eiFw3aSYjb9pa', NULL, '2021-11-04 09:13:34', '2021-11-04 09:13:34'),
(31, 'avatar.png', '6183f8a23e5fb', 'Ciara Reyes', NULL, NULL, '+1 (858) 857-5457', NULL, NULL, 'gifupyq@mailinator.com', '1', 'Not Verified', 'New User', '0.00', NULL, '$2y$10$o4NF7JN1j6e8VjUhk8mOf.J7NtAwJFYkCExbG06PcbuoqyN2YWV0q', NULL, '2021-11-04 09:13:41', '2021-11-04 09:13:41'),
(32, 'avatar.png', '6183f8aadbb70', 'Shellie Baxter', NULL, NULL, '+1 (957) 613-5847', NULL, NULL, 'zuved@mailinator.com', '1', 'Not Verified', 'New User', '0.00', NULL, '$2y$10$L0dqpGCgXZgRVSjFjre7NeqfZBVjrcGaVKBXql0EirixHwBQP7M7.', NULL, '2021-11-04 09:13:49', '2021-11-04 09:13:49'),
(33, 'avatar.png', '6183fc86b4e92', 'Karen Mcfarland', NULL, NULL, '+1 (884) 844-7602', NULL, NULL, 'kyvufilyj@mailinator.com', '1', 'Not Verified', 'New User', '0.00', NULL, '$2y$10$s8ELFftkhxJskuOQfwvSvuk0n5z0jm.r9Ti297/JwvhmTIBKJAKBi', NULL, '2021-11-04 09:30:36', '2021-11-04 09:30:36'),
(34, 'avatar.png', '618402dea2ef7', 'Darrel Giles', NULL, NULL, '+1 (334) 855-8499', NULL, NULL, 'xytizo@mailinator.com', '1', 'Not Verified', 'New User', '0.00', NULL, '$2y$10$PA1L8wzn/e5b.UggKrUBeeoIYa17oMuZNy6ktiR8wyUafNatnHmK2', NULL, '2021-11-04 09:57:22', '2021-11-04 09:57:22'),
(35, 'avatar.png', '61846526a2bbd', 'Yolanda Hancock', NULL, NULL, '+1 (408) 898-1091', NULL, NULL, 'poli@mailinator.com', '1', 'Not Verified', 'New User', '0.00', NULL, '$2y$10$PEw/GdYUX/jnJ0tr1QTYQO8l8mqA.029RRkJf/bZ7uJiJJ6BKsBzy', NULL, '2021-11-04 16:57:14', '2021-11-04 16:57:14'),
(36, 'avatar.png', '6184656e5201b', 'Cullen William', NULL, NULL, '+1 (202) 978-8202', NULL, NULL, 'dipe@mailinator.com', '1', 'Not Verified', 'New User', '0.00', NULL, '$2y$10$TnXolMJTOmNiZrZX0RD6aehkjkwpsjDTkV5BzXItB6syLBb4wN9qC', NULL, '2021-11-04 16:57:54', '2021-11-04 16:57:54'),
(37, 'avatar.png', '618467db586fe', 'Carissa Clarke', NULL, NULL, NULL, NULL, NULL, 'bityvaba@mailinator.com', '1', 'Not Verified', 'New User', '0.00', NULL, '$2y$10$YJL0e1j6kNER3bKdJyhSFeM3tHMS1QzdfOt4MBYrFZW7KIGwPo1qa', NULL, '2021-11-04 17:08:15', '2021-11-04 17:08:15');

-- --------------------------------------------------------

--
-- Table structure for table `wallets`
--

CREATE TABLE `wallets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wallet_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wallet_receive` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wallet_send` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wallet_amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wallets`
--

INSERT INTO `wallets` (`id`, `user_id`, `wallet_number`, `wallet_receive`, `wallet_send`, `wallet_amount`, `created_at`, `updated_at`) VALUES
(2, '2', NULL, NULL, NULL, '11', '2021-10-28 13:03:27', '2021-10-28 13:03:27'),
(4, '2', NULL, NULL, NULL, '11', '2021-10-28 13:35:45', '2021-10-28 13:35:45'),
(5, '2', NULL, NULL, NULL, '11', '2021-10-28 13:36:23', '2021-10-28 13:36:23'),
(6, '2', NULL, NULL, NULL, '11', '2021-10-31 11:19:17', '2021-10-31 11:19:17'),
(7, '2', NULL, NULL, NULL, '11', '2021-10-31 11:19:43', '2021-10-31 11:19:43'),
(8, '10', NULL, NULL, NULL, '11', '2021-10-31 11:21:42', '2021-10-31 11:21:42'),
(9, '10', NULL, NULL, NULL, '11', '2021-10-31 16:55:03', '2021-10-31 16:55:03'),
(10, '10', NULL, NULL, NULL, '11', '2021-10-31 16:55:15', '2021-10-31 16:55:15'),
(11, '10', NULL, NULL, NULL, '11', '2021-10-31 17:37:00', '2021-10-31 17:37:00'),
(12, '10', NULL, NULL, NULL, '11', '2021-10-31 17:37:14', '2021-10-31 17:37:14'),
(13, '10', NULL, NULL, NULL, '11', '2021-10-31 17:52:00', '2021-10-31 17:52:00'),
(14, '10', NULL, NULL, NULL, '11', '2021-10-31 17:56:03', '2021-10-31 17:56:03'),
(15, '10', NULL, NULL, NULL, '11', '2021-11-01 21:56:38', '2021-11-01 21:56:38'),
(16, '16', NULL, NULL, NULL, '11', '2021-11-03 07:32:27', '2021-11-03 07:32:27'),
(17, '16', NULL, NULL, NULL, '11', '2021-11-03 07:35:25', '2021-11-03 07:35:25'),
(18, '16', NULL, NULL, NULL, '11', '2021-11-03 07:36:00', '2021-11-03 07:36:00'),
(19, '16', NULL, NULL, NULL, '2', '2021-11-03 08:15:07', '2021-11-03 08:15:07'),
(20, '16', NULL, NULL, NULL, '2', '2021-11-03 08:15:28', '2021-11-03 08:15:28');

-- --------------------------------------------------------

--
-- Table structure for table `withdraw_requests`
--

CREATE TABLE `withdraw_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `oparetor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wallet_amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `withdraw_requests`
--

INSERT INTO `withdraw_requests` (`id`, `user_id`, `name`, `email`, `mobile`, `oparetor`, `wallet_amount`, `created_at`, `updated_at`) VALUES
(1, '2', 'shamskhan', 'admin@admin.com', '01305686771', 'Nagad', '55', '2021-10-31 11:22:17', '2021-10-31 11:22:17'),
(2, '2', 'shamskhan', 'admin@admin.com', '+8801305686771', 'Nagad', '55', '2021-10-31 11:28:44', '2021-10-31 11:28:44'),
(3, '2', 'shamskhan', 'admin@admin.com', '+8801305686771', 'Bkash', '55', '2021-10-31 11:29:40', '2021-10-31 11:29:40'),
(4, '2', 'shamskhan', 'admin@admin.com', 'ghjgh', 'Bkash', '550', '2021-10-31 11:30:14', '2021-10-31 11:30:14'),
(5, '10', 'Tanjimul Islam', 'tstanjim16@gmail.com', '01791810565', 'Bkash', '55', '2021-10-31 17:38:25', '2021-10-31 17:38:25'),
(6, '2', 'shamskhan', 'admin@admin.com', '+8801305686771', 'Nagad', '55', '2021-10-31 23:28:20', '2021-10-31 23:28:20'),
(7, '10', 'Tanjimul Islam', 'tstanjim16@gmail.com', '01791810565', 'Nagad', '88', '2021-11-01 21:57:21', '2021-11-01 21:57:21'),
(8, '16', 'Tomal Sen', 'tomalsen2000@gmail.com', '01307366733', 'Nagad', '50', '2021-11-02 14:57:51', '2021-11-02 14:57:51'),
(9, '16', 'Tomal Sen', 'tomalsen2000@gmail.com', '01307366733', 'Nagad', '33', '2021-11-03 07:38:06', '2021-11-03 07:38:06'),
(10, '16', 'Tomal Sen', 'tomalsen2000@gmail.com', '01307366733', 'Bkash', '37', '2021-11-04 02:44:54', '2021-11-04 02:44:54'),
(11, '16', 'tomal', 'tomalsen2000@gmail.com', '01736744457', 'Nagad', '19.00', '2021-11-04 17:42:49', '2021-11-04 17:42:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_money`
--
ALTER TABLE `add_money`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buy_packages`
--
ALTER TABLE `buy_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `notifies`
--
ALTER TABLE `notifies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `p_t_c_videos`
--
ALTER TABLE `p_t_c_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reffer_dasboards`
--
ALTER TABLE `reffer_dasboards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shetabit_visits`
--
ALTER TABLE `shetabit_visits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shetabit_visits_visitable_type_visitable_id_index` (`visitable_type`,`visitable_id`),
  ADD KEY `shetabit_visits_visitor_type_visitor_id_index` (`visitor_type`,`visitor_id`);

--
-- Indexes for table `shop_balances`
--
ALTER TABLE `shop_balances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statements`
--
ALTER TABLE `statements`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `statements_tnx_id_unique` (`tnx_id`);

--
-- Indexes for table `transfers`
--
ALTER TABLE `transfers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_reffer_code_unique` (`reffer_code`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wallets`
--
ALTER TABLE `wallets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdraw_requests`
--
ALTER TABLE `withdraw_requests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_money`
--
ALTER TABLE `add_money`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buy_packages`
--
ALTER TABLE `buy_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `notifies`
--
ALTER TABLE `notifies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `p_t_c_videos`
--
ALTER TABLE `p_t_c_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reffer_dasboards`
--
ALTER TABLE `reffer_dasboards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shetabit_visits`
--
ALTER TABLE `shetabit_visits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shop_balances`
--
ALTER TABLE `shop_balances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `statements`
--
ALTER TABLE `statements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transfers`
--
ALTER TABLE `transfers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `wallets`
--
ALTER TABLE `wallets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `withdraw_requests`
--
ALTER TABLE `withdraw_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
