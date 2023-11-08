-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2023 at 07:56 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `product_id`, `user_id`, `comment`, `created_at`, `updated_at`) VALUES
(7, 7, 7, 'Ami kaka chan', '2023-11-08 12:38:25', '2023-11-08 12:38:25');

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
(4, '1', 'adspic1698639734_fitted.jpg', '2023-10-29 22:22:14', '2023-10-29 22:22:14'),
(5, '2', 'adspic1698682415_fitted (2).jpg', '2023-10-30 10:13:35', '2023-10-30 10:13:35'),
(6, '2', 'adspic1698682415_fitted (1).jpg', '2023-10-30 10:13:35', '2023-10-30 10:13:35'),
(7, '2', 'adspic1698682415_fitted.jpg', '2023-10-30 10:13:35', '2023-10-30 10:13:35'),
(8, '3', 'adspic1698743586_Screenshot 2023-10-18 214627.png', '2023-10-31 03:13:06', '2023-10-31 03:13:06'),
(9, '3', 'adspic1698743586_Screenshot 2023-10-19 202850.png', '2023-10-31 03:13:06', '2023-10-31 03:13:06'),
(10, '3', 'adspic1698743586_Screenshot 2023-10-19 202924.png', '2023-10-31 03:13:06', '2023-10-31 03:13:06'),
(11, '3', 'adspic1698743586_Screenshot 2023-10-19 202933.png', '2023-10-31 03:13:06', '2023-10-31 03:13:06'),
(12, '4', 'adspic1698745390_favicon (1).ico', '2023-10-31 03:43:10', '2023-10-31 03:43:10'),
(13, '5', 'adspic1698745752_pxfuel (1).jpg', '2023-10-31 03:49:12', '2023-10-31 03:49:12'),
(14, '6', 'adspic1698745991_fitted (3).jpg', '2023-10-31 03:53:11', '2023-10-31 03:53:11'),
(15, '6', 'adspic1698745991_fitted (2).jpg', '2023-10-31 03:53:11', '2023-10-31 03:53:11'),
(16, '7', 'adspic1698747779_fitted (6).jpg', '2023-10-31 04:22:59', '2023-10-31 04:22:59'),
(17, '7', 'adspic1698747779_fitted (5).jpg', '2023-10-31 04:22:59', '2023-10-31 04:22:59'),
(18, '7', 'adspic1698747779_fitted (4).jpg', '2023-10-31 04:22:59', '2023-10-31 04:22:59'),
(19, '8', 'adspic1698749831_fitted (2).jpg', '2023-10-31 04:57:11', '2023-10-31 04:57:11');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `like_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`like_id`, `product_id`, `user_id`, `created_at`, `updated_at`) VALUES
(27, 7, 8, '2023-11-08 11:34:43', '2023-11-08 11:34:43'),
(29, 7, 7, '2023-11-08 12:07:35', '2023-11-08 12:07:35');

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
-- Table structure for table `memberships`
--

CREATE TABLE `memberships` (
  `mem_id` bigint(20) UNSIGNED NOT NULL,
  `mem_name` varchar(255) NOT NULL,
  `mem_email` varchar(255) NOT NULL,
  `mem_number` varchar(255) NOT NULL,
  `paymentMethod` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `memberships`
--

INSERT INTO `memberships` (`mem_id`, `mem_name`, `mem_email`, `mem_number`, `paymentMethod`, `user_id`, `created_at`, `updated_at`, `user_name`) VALUES
(24, 'Rakib Ahsan', 'cloudysky121@gmail.com', '01775566772', 'Credit card', 7, '2023-11-08 10:06:44', '2023-11-08 10:06:44', 'rakib');

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
(8, '2023_10_29_171340_create_images_table', 4),
(9, '2023_10_31_104618_create_statuses_table', 5),
(11, '2023_11_01_101218_create_memberships_table', 6),
(12, '2023_11_08_162943_create_likes_table', 7),
(13, '2023_11_08_173226_create_comments_table', 8);

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
  `user_name` varchar(55) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `mainphoto` varchar(55) DEFAULT NULL,
  `ads_status` int(11) NOT NULL DEFAULT 3
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `postads`
--

INSERT INTO `postads` (`ads_id`, `ads_loc`, `ads_cata`, `condtions`, `title`, `authenticity`, `brand`, `model`, `desc`, `price`, `nego`, `pos_number`, `user_name`, `created_at`, `updated_at`, `mainphoto`, `ads_status`) VALUES
(4, 8, 16, 'used', 'user_name', 'orginal', 'Other brand', 'Cng Exchange Lpg conversion', 'user_name', 5, 'off', '0144', 'rakib', '2023-10-31 03:43:10', '2023-10-31 03:43:10', '1698745390.jpg', 3),
(5, 8, 16, 'used', 'pial@gmail.com', 'orginal', 'Other brand', 'Cng Exchange Lpg conversion', 'pial@gmail.com', 14000, 'off', '7887', 'pial', '2023-10-31 03:49:12', '2023-10-31 03:49:12', '1698745752.jpg', 3),
(6, 6, 15, 'used', 'Samsung Galaxy A11 (Used)', 'orginal', 'Samsung', 'Galaxy A11', 'Features\r\n4G, 4 GB RAM\r\n\r\nDescription\r\nSAMSUNG galaxy A11 .\r\n\r\n4000mh battery. \r\n\r\nbox charge nai shudu phone asy\r\n\r\nDisplay ty iktu prblm but all okay \r\n\r\n4/32 gb \r\n\r\nlocation Savar', 5000, 'on', '01305406643', 'pial', '2023-10-31 03:53:11', '2023-11-08 11:33:15', '1698745991.jpg', 3),
(7, 6, 14, 'used', 'Smart Watch', 'orginal', 'Other brand', 'k25', 'ইন্ডিয়া থেকে আনা হয়েছে দুর্গাপূজার আগের দিন। \r\n\r\nএখনো ব্যবহার করা হয়নি \r\n\r\nসম্পূর্ণ নতুন স্মার্ট ওয়াচ। \r\n\r\nস্মার্ট ঘড়ি র সাথে যা যা ছিল তাই পাবেন। \r\n\r\nআমার একটা আছে এজন্য লাগবে না তাই বিক্রি করে দিচ্ছি। \r\n\r\nঅযথা কেউ উল্টাপাল্টা দাম বলে লজ্জিত হবেন  না।  সত্যিই নেয়ার ইচ্ছা থাকলে সরাসরি ফোন দিবেন।', 3200, 'off', '01775566884', 'rakib', '2023-10-31 04:22:59', '2023-10-31 04:22:59', '1698747779.jpg', 4),
(8, 5, 13, 'used', 'rakib t', 'orginal', 'text', 'text', 'text', 5, 'off', '01557', 'rakib', '2023-10-31 04:57:11', '2023-10-31 09:25:20', '1698749831.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `status_id` bigint(20) UNSIGNED NOT NULL,
  `status_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`status_id`, `status_name`) VALUES
(1, 'Available'),
(2, 'Sold Out'),
(3, 'Pending '),
(4, 'Active');

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
  `username` varchar(50) DEFAULT NULL,
  `membership` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `number`, `user_img`, `location`, `username`, `membership`) VALUES
(7, 'Rakib Ahsan', 'cloudysky121@gmail.com', NULL, '$2y$10$EfL4pxLGa6ndSgw9.Z.ZtuXPOajlJdXgwxylKgs9DV2h2LIHURKqO', NULL, '2023-10-29 23:43:37', '2023-11-07 10:06:46', '01775566772', '1698644617.webp', 1, 'rakib', 1),
(8, 'Pial Rahman', 'pial@gmail.com', NULL, '$2y$10$i65Wr2DTmO7DuBXpIxZkZ..X6FdgR6T5IdalieDBG9VqdwcW/VJEm', NULL, '2023-10-30 10:11:24', '2023-11-01 11:58:42', '01785248796', '1698682284.webp', 2, 'pial', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`cata_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

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
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`like_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`loc_id`);

--
-- Indexes for table `memberships`
--
ALTER TABLE `memberships`
  ADD PRIMARY KEY (`mem_id`);

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
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`status_id`);

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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `img_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `like_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `loc_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `memberships`
--
ALTER TABLE `memberships`
  MODIFY `mem_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `postads`
--
ALTER TABLE `postads`
  MODIFY `ads_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `status_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
