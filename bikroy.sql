-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2023 at 07:45 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bikroy`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `cata_id` bigint(20) UNSIGNED NOT NULL,
  `cata_name` varchar(255) NOT NULL,
  `cata_icon` varchar(255) NOT NULL,
  `cata_username` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`cata_id`, `cata_name`, `cata_icon`, `cata_username`, `created_at`, `updated_at`) VALUES
(1, 'Overseas Jobs', 'fa-solid fa-briefcase', 'overseasjobs', '2023-10-29 21:46:49', '2023-10-29 21:47:38'),
(2, 'Jobs', 'fa-solid fa-magnifying-glass', 'jobs', '2023-10-29 21:48:57', '2023-10-29 21:48:57'),
(3, 'Services', 'fa-solid fa-wrench', 'services', '2023-10-29 21:50:02', '2023-10-29 21:50:02'),
(4, 'Agriculture', 'fa-brands fa-pagelines', 'agriculture', '2023-10-29 21:51:38', '2023-10-29 21:51:38'),
(5, 'Education', 'fa-solid fa-school-circle-check', 'education', '2023-10-29 21:52:47', '2023-10-29 21:52:47'),
(6, 'Essentials', 'fa-solid fa-basket-shopping', 'essentials', '2023-10-29 21:55:09', '2023-10-29 21:55:09'),
(7, 'Business & Industry', 'fa-solid fa-city', 'business', '2023-10-29 21:56:23', '2023-10-29 21:56:23'),
(8, 'Hobbies, Sports & Kids', 'fa-solid fa-basketball', 'sports', '2023-10-29 21:57:31', '2023-10-29 21:57:31'),
(9, 'Women\'s Fashion & Beauty', 'fa-solid fa-shirt', 'womanfashion', '2023-10-29 21:59:43', '2023-10-29 21:59:43'),
(10, 'Property', 'fa-solid fa-building', 'property', '2023-10-29 22:00:46', '2023-10-29 22:00:46'),
(11, 'Pets & Animals', 'fa-solid fa-paw', 'pets', '2023-10-29 22:01:28', '2023-10-29 22:01:28'),
(12, 'Home & Living', 'fa-solid fa-house-chimney-user', 'home', '2023-10-29 22:02:10', '2023-10-29 22:02:10'),
(13, 'Vehicles', 'fa-solid fa-car', 'vehicles', '2023-10-29 22:02:45', '2023-10-29 22:02:45'),
(14, 'Electronics', 'fa-solid fa-bolt-lightning', 'electronics', '2023-10-29 22:03:43', '2023-10-29 22:03:43'),
(15, 'Mobiles', 'fa-solid fa-mobile-screen', 'mobiles', '2023-10-29 22:04:27', '2023-10-29 22:04:27'),
(16, 'Men\'s Fashion & Grooming', 'fa-solid fa-person', 'menfashion', '2023-10-29 22:06:48', '2023-10-29 22:06:48');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `img_id` bigint(20) UNSIGNED NOT NULL,
  `ads_id` varchar(255) NOT NULL,
  `imagename` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`img_id`, `ads_id`, `imagename`, `created_at`, `updated_at`) VALUES
(1, '1', 'adspic1698639734_fitted (1).jpg', '2023-10-29 22:22:14', '2023-10-29 22:22:14'),
(2, '1', 'adspic1698639734_fitted (2).jpg', '2023-10-29 22:22:14', '2023-10-29 22:22:14'),
(3, '1', 'adspic1698639734_fitted (3).jpg', '2023-10-29 22:22:14', '2023-10-29 22:22:14'),
(4, '1', 'adspic1698639734_fitted.jpg', '2023-10-29 22:22:14', '2023-10-29 22:22:14');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `loc_id` bigint(20) UNSIGNED NOT NULL,
  `loc_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`loc_id`, `loc_name`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka ', NULL, NULL),
(2, 'Barisal ', NULL, NULL),
(3, 'Khulna', NULL, NULL),
(4, 'Chittagong ', NULL, NULL),
(5, 'Rangamati', NULL, NULL),
(6, 'Rangpur', NULL, NULL),
(7, 'Mymensingh', NULL, NULL),
(8, 'Sylhet', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_25_043109_create_locations_table', 2),
(6, '2023_10_26_034345_create_catagories_table', 3),
(7, '2023_10_28_041208_create_postads_table', 4),
(8, '2023_10_29_171340_create_images_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `postads`
--

CREATE TABLE `postads` (
  `ads_id` bigint(20) UNSIGNED NOT NULL,
  `ads_loc` int(11) NOT NULL,
  `ads_cata` int(11) NOT NULL,
  `condtions` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `authenticity` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `price` int(11) NOT NULL,
  `nego` varchar(255) NOT NULL DEFAULT 'off',
  `pos_number` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `postads`
--

INSERT INTO `postads` (`ads_id`, `ads_loc`, `ads_cata`, `condtions`, `title`, `authenticity`, `brand`, `model`, `desc`, `price`, `nego`, `pos_number`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 15, 'used', 'Tecno spark 10 pro', 'orginal', 'Tecno', 'Other model', 'Features\r\n4G, Dual SIM, USB Type-C Port, Fast Charging, Android, 8 GB RAM, Dual Camera, Bluetooth, Wifi, GPS, Fingerprint Sensor\r\n\r\nDescription\r\nTecho spark 10 pro\r\nRam-8 gb\r\nRom-128gb\r\nFull fresh \r\n1 month hoisa kinse cash memo aca \r\nSathe box charger ace\r\n\r\nআমি ফোনটি ৬ মাস হয়ছে ক্রয় করছি,,১৮০০০ টাকা দিয়া,,,,টাকার খুব দরকার তাই ফোনটি বিক্রি করে দেবো,,,', 15000, 'on', '01930412318', 7, '2023-10-29 22:22:14', '2023-10-29 22:22:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `number` varchar(50) NOT NULL,
  `user_img` varchar(50) DEFAULT NULL,
  `location` int(50) NOT NULL,
  `username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `number`, `user_img`, `location`, `username`) VALUES
(7, 'Rakib Ahsan', 'cloudysky121@gmail.com', NULL, '$2y$10$EfL4pxLGa6ndSgw9.Z.ZtuXPOajlJdXgwxylKgs9DV2h2LIHURKqO', NULL, '2023-10-29 23:43:37', '2023-10-29 23:43:37', '01775566772', '1698644617.webp', 1, 'rakib');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`cata_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`loc_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `postads`
--
ALTER TABLE `postads`
  ADD PRIMARY KEY (`ads_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `cata_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `img_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `loc_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `postads`
--
ALTER TABLE `postads`
  MODIFY `ads_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
