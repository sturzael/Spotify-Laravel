-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 03, 2017 at 10:55 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homestead`
--

-- --------------------------------------------------------

--
-- Table structure for table `basics`
--

CREATE TABLE `basics` (
  `id` int(10) UNSIGNED NOT NULL,
  `site_header` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_para_one_header` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_para_one_sub_header_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_para_one_sub_header_2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_para_one_sub_header_3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_para_one_text_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_para_one_text_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_para_one_text_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_para_two_header` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_para_two_sub_header_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_para_two_sub_header_2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_para_two_sub_header_3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_para_two_text_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_para_two_text_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_para_two_text_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_small_text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_big_text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `basics`
--

INSERT INTO `basics` (`id`, `site_header`, `site_para_one_header`, `site_para_one_sub_header_1`, `site_para_one_sub_header_2`, `site_para_one_sub_header_3`, `site_para_one_text_1`, `site_para_one_text_2`, `site_para_one_text_3`, `site_para_two_header`, `site_para_two_sub_header_1`, `site_para_two_sub_header_2`, `site_para_two_sub_header_3`, `site_para_two_text_1`, `site_para_two_text_2`, `site_para_two_text_3`, `footer_small_text`, `footer_big_text`, `created_at`, `updated_at`) VALUES
(1, 'Listen Every', 'Whats on Spotify', 'Music', 'Playlists', 'New Releases', 'There are millions of songs on Spotif Play your favorites discover new tracks and build the perfect collection', 'Yoll find readymade playlists to match your mood put together by music fans and experts', 'Hear this weeks latest singles and albums and check out whas hot in the Top 50', 'Its easy', 'Search', 'Browse', 'Discover', 'Know what you want to listen to Just search and hit play', 'Check out the latest char brand new releases and great playlists for right now', 'Enjoy new music every Monday with your own personal playlist Or sit back and enjoy Radio', 'Spotify is available on PlayStationMusic', '2 months of Spotify Premium for just 245', '2017-12-02 16:35:13', '2017-12-02 20:01:50'),
(2, 'Our Plans', 'Why go premium?', 'Music', 'Playlists', '\r\nNew Releases', 'There are millions of songs on Spotify. Play your favorites, discover new tracks, and build the perfect collection.', 'You’ll find readymade playlists to match your mood, put together by music fans and experts.', '\r\nHear this week’s latest singles and albums, and check out what’s hot in the Top 50.', '', '', '', '', '', '', '', 'A cool deal text', 'Bigger cool deal right here', '2017-12-02 11:00:00', '2017-12-02 11:00:00');

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
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2017_12_03_022055_create_basics_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$iJi0I9pMGbnNHMaabVOmHOEIyK36EbVHEbChX7tIGetMoTqiOIbN.', NULL, '2017-12-02 16:31:34', '2017-12-02 16:31:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basics`
--
ALTER TABLE `basics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- AUTO_INCREMENT for table `basics`
--
ALTER TABLE `basics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
