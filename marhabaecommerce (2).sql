-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2024 at 03:31 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marhabaecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `inventorie_id` varchar(255) NOT NULL,
  `color_id` varchar(255) DEFAULT NULL,
  `size_id` varchar(255) DEFAULT NULL,
  `price` varchar(255) NOT NULL,
  `sell_price` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) NOT NULL,
  `weight` varchar(225) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `inventorie_id`, `color_id`, `size_id`, `price`, `sell_price`, `quantity`, `weight`, `image`, `created_at`, `updated_at`) VALUES
(6, '5', NULL, NULL, '1400', '1280', '500', '1Kg', 'fyVfr693310.jpg', '2024-04-30 02:09:56', '2024-04-30 02:09:56'),
(7, '5', NULL, NULL, '2600', '2450', '496', '2Kg', 'DpFud243718.jpg', '2024-04-30 02:09:56', '2024-05-06 04:20:59'),
(8, '5', NULL, NULL, '3800', '3450', '496', '3Kg', 'JtvD4826861.jpg', '2024-04-30 02:09:56', '2024-05-05 06:53:39'),
(9, '5', NULL, NULL, '6500', '5250', '500', '5Kg', 'J0iGO533115.jpg', '2024-04-30 02:09:56', '2024-04-30 02:09:56'),
(11, '7', NULL, NULL, '1300', '1100', '500', '1Kg', 'Sa3pM241461.jpg', '2024-04-30 03:18:29', '2024-04-30 03:18:29'),
(12, '7', NULL, NULL, '2300', '2050', '499', '2Kg', 'gYCMw291742.jpg', '2024-04-30 03:18:29', '2024-05-06 04:22:04'),
(13, '7', NULL, NULL, '3150', '2900', '496', '3Kg', 'TVrRJ303366.jpg', '2024-04-30 03:18:29', '2024-05-06 04:18:38'),
(14, '7', NULL, NULL, '5000', '4700', '500', '5Kg', 'dF4Cs206245.jpg', '2024-04-30 03:18:29', '2024-04-30 03:18:29'),
(21, '11', '1', '1', '150', '100', '200', NULL, 'VWuaJ521262.jpg', '2024-05-01 11:23:51', '2024-05-01 11:23:51'),
(22, '11', '1', '2', '200', '80', '200', NULL, 'UOOKa451607.jpg', '2024-05-01 11:23:51', '2024-05-01 11:23:51'),
(23, '11', '1', '3', '150', '100', '200', NULL, 'bUAAB325763.jpg', '2024-05-01 11:23:51', '2024-05-01 11:23:51'),
(24, '11', '2', '2', '200', '120', '200', NULL, '7c6sA959144.jpg', '2024-05-01 11:23:51', '2024-05-01 11:23:51'),
(25, '11', '2', '3', '300', '200', '200', NULL, 'VW9lk422710.jpg', '2024-05-01 11:23:51', '2024-05-01 11:23:51');

-- --------------------------------------------------------

--
-- Table structure for table `attribute_controllers`
--

CREATE TABLE `attribute_controllers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `inventorie_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `sell_price` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` longtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'VHRjd548829.png', 'https://www.youtube.com/watch?v=AdJ1RGTijaY&ab_channel=DaniloMarzoratiOsteopataD.O.', 1, '2024-04-23 23:53:38', '2024-04-29 22:32:02'),
(3, 'AqOdQ664763.png', 'https://www.youtube.com', 1, '2024-04-24 00:19:47', '2024-04-29 22:31:41');

-- --------------------------------------------------------

--
-- Table structure for table `billingdetails`
--

CREATE TABLE `billingdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `note` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `billingdetails`
--

INSERT INTO `billingdetails` (`id`, `order_id`, `name`, `mobile`, `address`, `district`, `note`, `created_at`, `updated_at`) VALUES
(3, 'sjp8I-19638154', 'tushar', '01561459531', 'Shankorpur, Ishaq Sarak, Jashore Town', 'dhaka', 'ddddd', '2024-05-05 06:48:24', NULL),
(4, 'gKf5E-44507807', 'tushar', '01561459531', 'Shankorpur, Ishaq Sarak, Jashore Town', 'outditedhaka', 'ddddd', '2024-05-05 06:53:39', NULL),
(5, 'uQeE7-61120428', 'tushar', '01561459531', 'Shankorpur, Ishaq Sarak, Jashore Town', 'dhaka', NULL, '2024-05-06 04:18:38', NULL),
(6, '3D4fm-23638603', 'tushar ali', '01561459531', 'Shankorpur, Ishaq Sarak, Jashore Town', 'dhaka', NULL, '2024-05-06 04:20:59', NULL),
(7, '5UaF8-22322316', 'tushar khondoker', '01876674794', 'Shankorpur, Ishaq Sarak, Jashore Town', 'outditedhaka', NULL, '2024-05-06 04:22:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dress', 1, '2024-04-24 01:19:55', '2024-04-29 22:44:29'),
(3, 'Food', 1, '2024-04-24 07:05:59', '2024-04-29 22:44:42');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(1, 'Black', '#000000', '2024-04-28 05:02:35', '2024-04-28 05:02:35'),
(2, 'Red', '#FF0000', '2024-04-28 06:02:37', '2024-04-28 06:02:37');

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
-- Table structure for table `inventories`
--

CREATE TABLE `inventories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventories`
--

INSERT INTO `inventories` (`id`, `brand`, `slug`, `sku`, `title`, `status`, `created_at`, `updated_at`) VALUES
(5, NULL, 'PyA1Y870473', 'premium-000001', 'Premium 1kg to 5kg', 1, '2024-04-30 02:09:56', '2024-04-30 02:09:56'),
(7, NULL, 'jm8xj691732', 'sukkari-000002', 'sukkari 1kg to 5kg', 1, '2024-04-30 03:18:29', '2024-04-30 03:18:29'),
(11, 'zara', 'twuHQ803812', 'shirt-000001', 'shirt', 1, '2024-05-01 11:23:51', '2024-05-01 11:23:51');

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
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(11, '2024_04_23_115400_create_settings_table', 2),
(13, '2024_04_24_051327_create_banners_table', 3),
(14, '2024_04_24_071147_create_categories_table', 4),
(15, '2024_04_24_072851_create_subcategories_table', 5),
(28, '2024_04_28_091015_create_attribute_controllers_table', 6),
(44, '2024_04_24_121704_create_products_table', 7),
(45, '2024_04_25_070038_create_inventories_table', 7),
(46, '2024_04_25_082618_create_colors_table', 7),
(47, '2024_04_25_082625_create_sizes_table', 7),
(48, '2024_04_28_091534_create_attributes_table', 7),
(49, '2024_05_05_122021_create_billingdetails_table', 8),
(50, '2024_05_05_122046_create_orders_table', 8),
(51, '2024_05_05_122112_create_order_products_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `delivery_charge` varchar(255) NOT NULL,
  `sub_total` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `delivery_charge`, `sub_total`, `total`, `created_at`, `updated_at`) VALUES
(3, 'sjp8I-19638154', '65', '4900', '4965', '2024-05-05 06:48:24', NULL),
(4, 'gKf5E-44507807', '120', '6900', '7020', '2024-05-05 06:53:39', NULL),
(5, 'uQeE7-61120428', '65', '14050', '14115', '2024-05-06 04:18:38', NULL),
(6, '3D4fm-23638603', '65', '2450', '2515', '2024-05-06 04:20:59', NULL),
(7, '5UaF8-22322316', '120', '2050', '2170', '2024-05-06 04:22:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `attribute_id` varchar(255) NOT NULL,
  `inventory_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`id`, `order_id`, `product_id`, `quantity`, `attribute_id`, `inventory_id`, `created_at`, `updated_at`) VALUES
(1, 'sjp8I-19638154', '12', '2', '7', '5', '2024-05-05 06:48:24', '2024-05-05 06:48:24'),
(2, 'gKf5E-44507807', '12', '4', '8', '5', '2024-05-05 06:53:39', '2024-05-05 06:53:39'),
(3, 'uQeE7-61120428', '14', '4', '13', '7', '2024-05-06 04:18:38', '2024-05-06 04:18:38'),
(4, 'uQeE7-61120428', '12', '1', '7', '5', '2024-05-06 04:18:38', '2024-05-06 04:18:38'),
(5, '3D4fm-23638603', '12', '1', '7', '5', '2024-05-06 04:20:59', '2024-05-06 04:20:59'),
(6, '5UaF8-22322316', '14', '1', '12', '7', '2024-05-06 04:22:04', '2024-05-06 04:22:04');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `inventorie_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `subcategory_id` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `color_id` varchar(255) DEFAULT NULL,
  `size_id` varchar(255) DEFAULT NULL,
  `weight` varchar(225) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `price` varchar(225) DEFAULT NULL,
  `sell_price` varchar(225) DEFAULT NULL,
  `sku` varchar(255) DEFAULT NULL,
  `description` longtext NOT NULL,
  `tag` varchar(255) NOT NULL,
  `slug` varchar(225) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `inventorie_id`, `name`, `category_id`, `subcategory_id`, `image`, `color_id`, `size_id`, `weight`, `brand`, `quantity`, `price`, `sell_price`, `sku`, `description`, `tag`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(12, 5, 'Premium Mabroom Moriom', '3', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'গ্রাহক চাহিদার শীর্ষে থাকা”মদীনার বিখ্যাত রসালো ঝড়ঝড়ে “মাবরুম মরিয়ম”\r\nআমাদের কাছে পাচ্ছেন বিশেষ ছাড়ে😍\r\nঅন্যান্য বছর থেকে এই বছর খেজুরের দাম লাগামহীন। গতবছর যে দামে আমরা খেজুর সেল করেছি। এইবছর সেই দামে খেজুর কিনতে হিমশিম খাচ্ছি। তবুও যতটুকু সম্ভব চেষ্টা করি আপনাদের কে রিজেনেবল প্রাইজে ভালো কিছু প্রোভাইট করার।\r\nআজকে আপনাদের জন্য নিয়ে এসেছি রিজেনেবল প্রাইজে মাবরুম খেজুর।\r\nসৌদি আরব থেকে আমদানিকৃত এই সিজনের মাবরুম খেজুর।\r\nদেখতে যেমন আকর্ষণীয়,তেমনি সুস্বাদু।\r\nখেজুরের মধ্যে সবচেয়ে আকর্ষণীয় খেজুর হচ্ছে মাবরুম খেজুর। যা বাংলাদেশে কামরাঙ্গা মরিয়ম নামে প্রসিদ্ধ। দেখলেই যেন স্বাদ নিতে ইচ্ছে করে।\r\nখেজুরগুলো অনেক রসালো ও চাবানোর সময় অনেকটা চুইংগামের মত হয়ে যায়।\r\nএই খেজুর পৃথিবীর প্রাচীন খেজুর গুলোর একটি,\r\nঅনেক মিষ্টি ও রসালো,টশটশে পাকা।\r\nমরিয়ম মাবরুম খেজুর প্রাকৃতিকভাবে ফাইবার সমৃদ্ধ,\r\nঅ‍্যালার্জি দূর করে,\r\nরক্তশূন‍্যতা দূর করে,\r\nহাড় শক্ত করে,\r\nএছাড়াও আরো অনেক উপকার রয়েছে।', 'Premium, Mabroom, Moriom', 'Do1iVIO6m8Y9brOuZinkvqCwpTOj3UoM7zbXCJpJNDh4HllO3J', 1, '2024-04-30 03:04:37', '2024-04-30 03:04:37'),
(14, 7, 'Premium sukkari rutab', '3', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '🔸সুক্কারি খেজুর\r\nখেতে অনেকটা ক্যান্ডির মত। শতভাগ ক্যামিকাল মুক্ত ও তরতাজা ফ্রেশ\r\n🔸সুক্কারি খেজুর কেন খাবেন?\r\nপ্রতিদিন সকালে ৩/৪ পিছ সুক্কারী খেজুর খান\r\nইনশাআল্লাহ যতধরনের দুর্বলতা, মাথা ব্যাথা,\r\nজয়েন্ট ব্যাথা রক্ত শূন্যতা, এলার্জি সহ আরও হাজার রকমের রোগ দূর হয়ে যাবে ইনশাআল্লাহ 🥰\r\n▪️ ঢাকা সহ সারাদেশে হোম ডেলিভারির সুবিধা।\r\n▪️অন্যান্য বছর থেকে এই বছর খেজুরের দাম লাগামহীন। গতবছর যে দামে আমরা খেজুর সেল করেছি। এইবছর সেই দামে খেজুর কিনতে হিমশিম খাচ্ছি। তবুও যতটুকু সম্ভব চেষ্টা করি আপনাদের কে রিজেনেবল প্রাইজে ভালো কিছু প্রোভাইট করার।\r\nসুক্কারি খেজুর প্রাকৃতিকভাবে ফাইবার সমৃদ্ধ\r\nহাড় শক্ত করে,\r\nএছাড়াও আরো অনেক উপকার রয়েছে।', 'Premium, sukkari, rutab', 'QN2wXUfKOaL0I3EKL2QKlacq7unpRyqZEypt7ju205o1WCM3Ge', 1, '2024-04-30 03:31:51', '2024-04-30 03:31:51'),
(15, NULL, '5 Littar এর জমজমের পানির ইন্টেক বোতল', '3', '2', 'SadU3652489.jpg', NULL, NULL, NULL, NULL, '500', '8500', '4100', 'of-000001', 'আসসালামু আলাইকুম\r\nপ্রিয় গ্রাহক 🥰\r\n\r\nআমাদের কাছে সৌদি থেকে ইমপ্রোট করা\r\n5 Littar এর জমজমের পানির ইন্টেক বোতল\r\nসীমিত পরিমান\r\nস্টকে আনা হয়েছে\r\nশেষ হওয়ার আগেই অর্ডার করুন\r\n\r\nসারাদেশে হোম ডেলিভারি দেওয়া হবে\r\nঅর্ডার করার ৪৮ থেকে ৭২ ঘন্টার মধ্যে পেয়ে যাবেন ইনশাআল্লাহ 🖤', 'food, organic food,', '5-littar-এর-জমজমের-পানির-ইন্টেক-বোতল', 1, '2024-04-30 03:34:57', '2024-04-30 03:34:57');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `white_logo` varchar(255) DEFAULT NULL,
  `black_logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `number_one` varchar(255) NOT NULL,
  `number_two` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `footer` varchar(255) NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_tag` varchar(255) DEFAULT NULL,
  `meta_description` longtext DEFAULT NULL,
  `about` longtext NOT NULL,
  `fb_pixel` longtext DEFAULT NULL,
  `google_tag` longtext DEFAULT NULL,
  `google_map` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `email`, `address`, `white_logo`, `black_logo`, `favicon`, `number_one`, `number_two`, `title`, `footer`, `meta_title`, `meta_tag`, `meta_description`, `about`, `fb_pixel`, `google_tag`, `google_map`, `created_at`, `updated_at`) VALUES
(1, 'Marhaba Shop BD', 'info@marhabashopbd.com', 'mohammadpur, dhaka, bangladesh', 'EfDqz852947.jpg', 'cUwRA605017.jpg', '5c8nK894087.jpg', '01604702956', NULL, 'Marhaba Shop BD', 'Copyright © 2024 | marhaba shop', 'Marhaba Shop BD', NULL, NULL, 'Maecenas mi justo, interdum at consectetur vel, tristique et arcu. Ut quis eros blandit, ultrices diam in, elementum ex. Suspendisse quis faucibus urna. Suspendisse pellentesque.', NULL, NULL, NULL, NULL, '2024-04-29 22:27:06');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'S', '2024-04-28 05:02:44', '2024-04-28 05:02:44'),
(2, 'M', '2024-04-28 06:03:22', '2024-04-28 06:03:22'),
(3, 'L', '2024-04-28 06:03:28', '2024-04-28 06:03:28');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`, `category_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dates', 3, 1, '2024-04-24 01:42:47', '2024-04-29 22:45:10'),
(2, 'Organic Food', 3, 1, '2024-04-24 01:50:15', '2024-04-29 22:44:56');

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
  `image` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `image`, `number`, `address`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hamim', 'hamim@gmail.com', NULL, '$2y$12$UvUI4qtwQGFCQwVFkvIdpekoUzcJSz0L7ahk9MPo6nw/HVe7HPv6q', 'JRKWh517035.jpg', '01713002232', 'Shankorpur, Ishaq Sarak, Jashore Town', NULL, '1', '4UqqhB8AZylbBrQVzafLMdKFlj1VX8sp4IZXgZFLdjZGUmMi1UoP1KcggdZb', '2024-04-22 09:33:15', '2024-04-23 22:48:47'),
(22, 'tushar alli', 'nugortech@gmail.com', NULL, '$2y$12$gLRR3ZlxCUXJXs.cnLK8a.sW.6Lagkfhj.Y0Ik8DB9IsLxe12pZHS', 'Jbo79451457.png', '01713002232', 'Jashore Town', NULL, '1', NULL, '2024-04-23 00:31:00', '2024-04-23 05:43:53'),
(26, 'tushar', 'admin@gmail.com', NULL, '$2y$12$G4c2bQu2scjH2CmAV.ySgeAFJoqI2AYAIhfAoB3y3kMCH3wD9gQTW', 'veCkr757935.jpg', NULL, NULL, NULL, '1', NULL, '2024-04-23 23:52:00', '2024-04-23 23:52:00'),
(27, 'tushar', 'srmoni3652@gmail.com', NULL, '$2y$12$D/1dz.pjX4Qs0yQBMJTheOC3DopvFv7cNinlVqdVcMyPjsggi.Aiy', NULL, NULL, NULL, NULL, '1', NULL, '2024-04-23 23:52:19', '2024-04-23 23:52:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attribute_controllers`
--
ALTER TABLE `attribute_controllers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billingdetails`
--
ALTER TABLE `billingdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `inventories`
--
ALTER TABLE `inventories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
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
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `attribute_controllers`
--
ALTER TABLE `attribute_controllers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `billingdetails`
--
ALTER TABLE `billingdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventories`
--
ALTER TABLE `inventories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
