-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2022 at 08:54 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keto`
--

-- --------------------------------------------------------

--
-- Table structure for table `dietcharts`
--

CREATE TABLE `dietcharts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dietcombination_id` bigint(20) UNSIGNED NOT NULL,
  `diet` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`diet`)),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dietcharts`
--

INSERT INTO `dietcharts` (`id`, `dietcombination_id`, `diet`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 5, '\"[{\\\"day\\\":\\\"Day 1\\\",\\\"chart\\\":\\\"Day 1\\\\r\\\\nDay 1\\\\r\\\\nDay 1\\\\r\\\\nDay 1\\\\r\\\\nDay 1\\\\r\\\\nDay 1\\\"},{\\\"day\\\":\\\"Day 2\\\",\\\"chart\\\":\\\"Day 2\\\\r\\\\nDay 2\\\\r\\\\nDay 2\\\\r\\\\nDay 2\\\\r\\\\nDay 2\\\"}]\"', NULL, '2022-09-04 01:57:29', '2022-09-04 01:57:29'),
(2, 7, '\"[{\\\"day\\\":\\\"Day 1\\\",\\\"chart\\\":\\\"t1\\\\r\\\\nt1\\\\r\\\\nt1\\\\r\\\\nt1\\\\r\\\\nt1\\\\r\\\\nt1\\\\r\\\\nt1\\\\r\\\\nt1\\\\r\\\\nt1\\\\r\\\\nt1\\\\r\\\\nt1\\\\r\\\\nt1\\\\r\\\\nt1\\\"}]\"', NULL, '2022-09-04 01:58:21', '2022-09-04 01:58:21');

-- --------------------------------------------------------

--
-- Table structure for table `dietcombinations`
--

CREATE TABLE `dietcombinations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `goal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `goal_weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dietcombinations`
--

INSERT INTO `dietcombinations` (`id`, `goal`, `gender`, `weight`, `goal_weight`, `height`, `age`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(5, 'Loss Weight', 'Male', '66', '60', '5.7', '25', '0', NULL, '2022-09-04 01:55:36', '2022-09-04 01:55:36'),
(6, 'Loss Weight', 'Male', '66', '60', '5.7', '25', '0', NULL, '2022-09-04 01:55:36', '2022-09-04 01:55:36'),
(7, 'Maintain Weight', 'Female', '50', '50', '5.2', '25', '0', NULL, '2022-09-04 01:56:26', '2022-09-04 01:56:26');

-- --------------------------------------------------------

--
-- Table structure for table `dietcombination_user`
--

CREATE TABLE `dietcombination_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `dietcombination_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_08_24_024532_create_diet_combinations_table', 1),
(10, '2022_09_02_103434_create_dietcombination_user_table', 2),
(11, '2022_09_03_050541_create_dietcharts_table', 2);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$hs9Ycx33kNvVDYMmU13UC.tZXEJV01A.qa1Y5S8onh5pR0vyO2zL2', 1, NULL, NULL, '2022-09-02 11:58:00', '2022-09-02 11:58:00'),
(2, 'User', 'user@gmail.com', NULL, '$2y$10$LFGgzpgZSy74P.KK7L5tFu0FSu7K4KR0kTtGEnkZueU3UISE37ZQ.', 0, NULL, NULL, '2022-09-02 11:58:00', '2022-09-02 11:58:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dietcharts`
--
ALTER TABLE `dietcharts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dietcharts_dietcombination_id_foreign` (`dietcombination_id`);

--
-- Indexes for table `dietcombinations`
--
ALTER TABLE `dietcombinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dietcombination_user`
--
ALTER TABLE `dietcombination_user`
  ADD KEY `dietcombination_user_user_id_foreign` (`user_id`),
  ADD KEY `dietcombination_user_dietcombination_id_foreign` (`dietcombination_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `dietcharts`
--
ALTER TABLE `dietcharts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dietcombinations`
--
ALTER TABLE `dietcombinations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dietcharts`
--
ALTER TABLE `dietcharts`
  ADD CONSTRAINT `dietcharts_dietcombination_id_foreign` FOREIGN KEY (`dietcombination_id`) REFERENCES `dietcombinations` (`id`);

--
-- Constraints for table `dietcombination_user`
--
ALTER TABLE `dietcombination_user`
  ADD CONSTRAINT `dietcombination_user_dietcombination_id_foreign` FOREIGN KEY (`dietcombination_id`) REFERENCES `dietcombinations` (`id`),
  ADD CONSTRAINT `dietcombination_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
