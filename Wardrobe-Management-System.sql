-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 26, 2025 at 12:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Wardrobe-Management-System`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `full_name`, `created_at`, `updated_at`) VALUES
(1, 'Brioni', '2025-02-25 15:08:56', '2025-02-26 04:52:43'),
(2, 'Hugo', '2025-02-26 04:52:53', '2025-02-26 04:52:53'),
(3, 'Tom Ford', '2025-02-26 04:53:04', '2025-02-26 04:53:04'),
(4, 'Brook Brothers', '2025-02-26 04:53:14', '2025-02-26 04:53:14'),
(5, 'Armani', '2025-02-26 04:53:26', '2025-02-26 04:53:26'),
(6, 'Burberry', '2025-02-26 04:53:38', '2025-02-26 04:53:38'),
(7, 'Ralph Lauren', '2025-02-26 04:54:07', '2025-02-26 04:54:07');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `full_name`, `created_at`, `updated_at`) VALUES
(1, 'Informal', '2025-02-25 13:22:30', '2025-02-26 05:03:45'),
(2, 'Black Lounge', '2025-02-26 05:02:35', '2025-02-26 05:04:16'),
(3, 'Buckskins', '2025-02-26 05:02:42', '2025-02-26 05:04:42'),
(4, 'Demob', '2025-02-26 05:04:56', '2025-02-26 05:04:56'),
(5, 'Drape', '2025-02-26 05:05:10', '2025-02-26 05:05:10'),
(6, 'Ethiopian', '2025-02-26 05:05:28', '2025-02-26 05:05:28'),
(7, 'Kariba', '2025-02-26 05:05:39', '2025-02-26 05:05:39');

-- --------------------------------------------------------

--
-- Table structure for table `conditions`
--

CREATE TABLE `conditions` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `conditions`
--

INSERT INTO `conditions` (`id`, `full_name`, `created_at`, `updated_at`) VALUES
(1, 'New', '2025-02-25 15:09:46', '2025-02-25 15:09:46'),
(2, 'Used', '2025-02-26 05:01:00', '2025-02-26 05:01:00'),
(3, 'Damaged', '2025-02-26 05:01:07', '2025-02-26 05:01:07');

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `monday` varchar(255) NOT NULL,
  `tuesday` varchar(255) NOT NULL,
  `wednesday` varchar(255) NOT NULL,
  `thursday` varchar(255) NOT NULL,
  `friday` varchar(255) NOT NULL,
  `saturday` varchar(255) NOT NULL,
  `sunday` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` int(11) NOT NULL,
  `clothing_item_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `clothing_item_id`, `created_at`, `updated_at`) VALUES
(2, 20, '2025-02-26 07:29:24', '2025-02-26 07:29:24'),
(3, 27, '2025-02-26 07:29:29', '2025-02-26 07:29:29');

-- --------------------------------------------------------

--
-- Table structure for table `histories`
--

CREATE TABLE `histories` (
  `id` int(11) NOT NULL,
  `clothing_item_id` int(11) DEFAULT NULL,
  `notes` varchar(600) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `histories`
--

INSERT INTO `histories` (`id`, `clothing_item_id`, `notes`, `created_at`, `updated_at`) VALUES
(3, 20, 'Was Ironed over the weekend', '2025-02-26 07:30:05', '2025-02-26 07:30:05'),
(4, 27, 'Was repaired over the left shoulder', '2025-02-26 07:30:42', '2025-02-26 07:30:42');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `cloth_name` varchar(100) DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `size` varchar(100) DEFAULT NULL,
  `day` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `brand_id` int(11) DEFAULT NULL,
  `condition_id` int(11) DEFAULT NULL,
  `material_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `user_id`, `category_id`, `cloth_name`, `color`, `size`, `day`, `image`, `created_at`, `updated_at`, `brand_id`, `condition_id`, `material_id`) VALUES
(20, 1, 2, 'Black Suit', 'Black', '10', 'Monday', 'images/m0AOulfHUFdUakDRyFjNhnczBpS3ymFfAuasRdy4.jpg', '2025-02-26 07:02:52', '2025-02-26 08:01:01', 1, 1, 1),
(23, 1, 3, 'Green Suit', 'Green', '10', 'Tuesday', 'images/8sNhx9pL7cGyltWRfPxB8uvUf7rchUfnQZ9pDkDp.jpg', '2025-02-26 07:16:58', '2025-02-26 07:31:24', 2, 1, 2),
(24, 1, 4, 'Red Suit', 'Red', '10', 'Wednesday', 'images/kHUp6w9bTX6HAKSVTY8g7kkhmkIajwcAUN7mWp0y.jpg', '2025-02-26 07:17:38', '2025-02-26 08:14:20', 3, 1, 3),
(25, 1, 5, 'Indigo Suit', 'Indigo', '10', 'Thursday', 'images/nPYNxchVNgGWgRw3iLkm9kb0MY6cSyoCf6Eq7m9j.jpg', '2025-02-26 07:19:11', '2025-02-26 07:31:40', 5, NULL, 4),
(26, 1, 6, 'Blue Suit', 'Blue', '10', 'Friday', 'images/gOqo3N0di1vLaheGcL8uo9lDOPCCI9CGqNaXYXub.jpg', '2025-02-26 07:19:54', '2025-02-26 07:31:52', 6, 1, 6),
(27, 1, 1, 'White Tuxedo', 'White', '11', 'Saturday', 'images/nDIdulW5CPtGkvYCzaa7th4BQbvfRSQfhYv0u5cO.jpg', '2025-02-26 07:21:41', '2025-02-26 07:32:01', 7, 2, 7),
(28, 1, 7, 'Grey Tuxedo', 'Grey', '11', 'Sunday', 'images/fJHXRlxoNnuxvIxOhF9sIMegOSghwUO9GOBbXQGj.jpg', '2025-02-26 07:22:28', '2025-02-26 07:32:18', 7, 2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `laundries`
--

CREATE TABLE `laundries` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `clothing_item_id` int(11) DEFAULT NULL,
  `washed_at` datetime DEFAULT current_timestamp(),
  `detergent_used` varchar(100) DEFAULT NULL,
  `notes` varchar(600) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laundries`
--

INSERT INTO `laundries` (`id`, `user_id`, `clothing_item_id`, `washed_at`, `detergent_used`, `notes`, `created_at`, `updated_at`) VALUES
(5, 1, 20, '2025-02-26 13:34:45', 'Omo', 'Neatly done', '2025-02-26 07:34:45', '2025-02-26 07:34:45'),
(6, 1, 23, '2025-02-26 13:35:17', 'Omo', 'Was ironed as expected', '2025-02-26 07:35:17', '2025-02-26 07:35:17'),
(7, 1, 24, '2025-02-26 13:36:02', 'Geisha', 'Was not folded properly', '2025-02-26 07:36:02', '2025-02-26 07:36:02');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `category` enum('Add','Update','Delete','Wear','Wash') NOT NULL,
  `action` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `table_name` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `user_id`, `item_id`, `category`, `action`, `description`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 1, 20, 'Update', 'Updated item', 'Item updated: Suit', 'items', '2025-02-26 08:00:08', '2025-02-26 08:00:08'),
(2, 1, 20, 'Update', 'Updated item', 'Item updated: Black Suit', 'items', '2025-02-26 08:01:01', '2025-02-26 08:01:01'),
(3, 1, 24, 'Update', 'Updated item', 'Item updated: Suit', 'items', '2025-02-26 08:13:47', '2025-02-26 08:13:47'),
(4, 1, 24, 'Update', 'Updated item', 'Item updated: Red Suit', 'items', '2025-02-26 08:14:20', '2025-02-26 08:14:20');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `full_name`, `created_at`, `updated_at`) VALUES
(1, 'Silk', '2025-02-25 15:09:27', '2025-02-26 04:55:07'),
(2, 'Wool', '2025-02-26 04:55:14', '2025-02-26 04:55:14'),
(3, 'Cotton', '2025-02-26 04:55:22', '2025-02-26 04:55:22'),
(4, 'Linen', '2025-02-26 04:55:36', '2025-02-26 04:55:36'),
(5, 'Velvet', '2025-02-26 04:55:45', '2025-02-26 04:55:45'),
(6, 'Velour', '2025-02-26 04:56:00', '2025-02-26 04:56:00'),
(7, 'Corduroy', '2025-02-26 04:56:18', '2025-02-26 04:56:18');

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
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(3, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `occassions`
--

CREATE TABLE `occassions` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `occassions`
--

INSERT INTO `occassions` (`id`, `full_name`, `created_at`, `updated_at`) VALUES
(1, 'Casual', '2025-02-26 05:07:34', '2025-02-26 05:07:34'),
(2, 'Business', '2025-02-26 05:07:44', '2025-02-26 05:07:44'),
(3, 'Party', '2025-02-26 05:07:51', '2025-02-26 05:07:51'),
(4, 'Weddings', '2025-02-26 05:07:58', '2025-02-26 05:07:58');

-- --------------------------------------------------------

--
-- Table structure for table `outfits`
--

CREATE TABLE `outfits` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `outfits`
--

INSERT INTO `outfits` (`id`, `user_id`, `full_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Casual', '2025-02-26 05:12:03', '2025-02-26 05:12:03'),
(2, 1, 'Work', '2025-02-26 05:43:13', '2025-02-26 05:43:13');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'createrole-list', 'web', '2024-11-08 23:31:32', '2024-11-08 23:31:32'),
(2, 'viewrole-create', 'web', '2024-11-08 23:31:32', '2024-11-08 23:31:32'),
(3, 'updaterole-edit', 'web', '2024-11-08 23:31:32', '2024-11-08 23:31:32'),
(4, 'deleterole-delete', 'web', '2024-11-08 23:31:32', '2024-11-08 23:31:32'),
(5, 'createcategory-list', 'web', '2024-11-08 23:31:32', '2024-11-08 23:31:32'),
(6, 'viewcategory-create', 'web', '2024-11-08 23:31:32', '2024-11-08 23:31:32'),
(7, 'updatecategory-edit', 'web', '2024-11-08 23:31:32', '2024-11-08 23:31:32'),
(8, 'deletecategory-delete', 'web', '2024-11-08 23:31:32', '2024-11-08 23:31:32'),
(9, 'createpermission-list', 'web', '2024-11-08 23:31:32', '2024-11-08 23:31:32'),
(10, 'viewpermission-create', 'web', '2024-11-08 23:31:32', '2024-11-08 23:31:32'),
(11, 'updatepermission-edit', 'web', '2024-11-08 23:31:32', '2024-11-08 23:31:32'),
(12, 'deletepermission-delete', 'web', '2024-11-08 23:31:32', '2024-11-08 23:31:32'),
(13, 'casecategory-list', 'web', '2024-11-08 23:31:32', '2024-11-08 23:31:32'),
(14, 'casecategory-create', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(15, 'casecategory-edit', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(16, 'casecategory-delete', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(17, 'casefile-list', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(18, 'casefile-create', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(19, 'casefile-edit', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(20, 'casefile-delete', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(21, 'casefolder-list', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(22, 'casefolder-create', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(23, 'casefolder-edit', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(24, 'casefolder-delete', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(25, 'document-list', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(26, 'document-create', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(27, 'document-edit', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(28, 'document-delete', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(29, 'documentpagecount-list', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(30, 'documentpagecount-create', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(31, 'documentpagecount-edit', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(32, 'documentpagecount-delete', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(33, 'documenttype-list', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(34, 'documenttype-create', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(35, 'documenttype-edit', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(36, 'documenttype-delete', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(37, 'field-list', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(38, 'field-create', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(39, 'field-edit', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(40, 'field-delete', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(41, 'fieldcategory-list', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(42, 'fieldcategory-create', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(43, 'fieldcategory-edit', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(44, 'fieldcategory-delete', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(45, 'fileretention-list', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(46, 'fileretention-create', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(47, 'fileretention-edit', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(48, 'fileretention-delete', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(49, 'fileretentiondate-list', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(50, 'fieldcategorydate-create', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(51, 'fileretentiondate-edit', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(52, 'fileretentiondate-delete', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(53, 'form-list', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(54, 'form-create', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(55, 'form-edit', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(56, 'form-delete', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(57, 'log-list', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(58, 'log-create', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(59, 'log-edit', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(60, 'log-delete', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(61, 'metadatadefinition-list', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(62, 'metadatadefinition-create', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(63, 'metadatadefinition-edit', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(64, 'metadatadefinition-delete', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(65, 'metadatavalue-list', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(66, 'metadatavalue-create', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(67, 'metadatavalue-edit', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(68, 'metadatavalue-delete', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(69, 'permission-list', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(70, 'permission-create', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(71, 'permission-edit', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(72, 'permission-delete', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(73, 'role-list', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(74, 'role-create', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(75, 'role-edit', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(76, 'role-delete', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(77, 'user-list', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(78, 'user-create', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(79, 'user-edit', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(80, 'user-delete', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(81, 'workflow-list', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(82, 'workflow-create', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(83, 'workflow-edit', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(84, 'workflow-delete', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(85, 'workflowrule-list', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(86, 'workflowrule-create', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(87, 'workflowrule-edit', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(88, 'workflowrule-delete', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(89, 'workflowstep-list', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(90, 'workflowstep-create', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(91, 'workflowstep-edit', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(92, 'workflowstep-delete', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(93, 'documentrequirement-list', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(94, 'documentrequirement-create', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(95, 'documentrequirement-edit', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(96, 'documentrequirement-delete', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(97, 'documentsignature-list', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(98, 'documentsignature-create', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(99, 'documentsignature-edit', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(100, 'documentsignature-delete', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(101, 'duplicatedocument-list', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(102, 'duplicatedocument-create', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(103, 'duplicatedocument-edit', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(104, 'duplicatedocument-delete', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(105, 'file-list', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(106, 'file-create', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(107, 'file-edit', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(108, 'file-delete', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(109, 'filestore-list', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(110, 'filestore-create', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(111, 'filestore-edit', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(112, 'filestore-delete', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(113, 'license-list', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(114, 'license-create', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(115, 'license-edit', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(116, 'license-delete', 'web', '2024-11-08 23:31:38', '2024-11-08 23:31:38'),
(117, 'licensesession-list', 'web', '2024-11-08 23:31:38', '2024-11-08 23:31:38'),
(118, 'licensesession-create', 'web', '2024-11-08 23:31:38', '2024-11-08 23:31:38'),
(119, 'licensesession-edit', 'web', '2024-11-08 23:31:38', '2024-11-08 23:31:38'),
(120, 'licensesession-delete', 'web', '2024-11-08 23:31:38', '2024-11-08 23:31:38'),
(121, 'mfacode-list', 'web', '2024-11-08 23:31:38', '2024-11-08 23:31:38'),
(122, 'mfacode-create', 'web', '2024-11-08 23:31:38', '2024-11-08 23:31:38'),
(123, 'mfacode-edit', 'web', '2024-11-08 23:31:38', '2024-11-08 23:31:38'),
(124, 'mfacode-delete', 'web', '2024-11-08 23:31:38', '2024-11-08 23:31:38'),
(125, 'smsconfiguration-list', 'web', '2024-11-08 23:31:38', '2024-11-08 23:31:38'),
(126, 'smsconfiguration-create', 'web', '2024-11-08 23:31:38', '2024-11-08 23:31:38'),
(127, 'smsconfiguration-edit', 'web', '2024-11-08 23:31:38', '2024-11-08 23:31:38'),
(128, 'smsconfiguration-delete', 'web', '2024-11-08 23:31:38', '2024-11-08 23:31:38'),
(129, 'smtpconfiguration-list', 'web', '2024-11-08 23:31:38', '2024-11-08 23:31:38'),
(130, 'smtpconfiguration-create', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(131, 'smtpconfiguration-edit', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(132, 'smtpconfiguration-delete', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(133, 'userkey-list', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(134, 'userkey-create', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(135, 'userkey-edit', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(136, 'userkey-delete', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(137, 'workflowdocument-list', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(138, 'workflowdocument-create', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(139, 'workflowdocument-edit', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(140, 'workflowdocument-delete', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(141, 'workflowinstance-list', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(142, 'workflowinstance-create', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(143, 'workflowinstance-edit', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(144, 'workflowinstance-delete', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(145, 'workflowstepaction-list', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(146, 'workflowstepaction-create', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(147, 'workflowstepaction-edit', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(148, 'workflowstepaction-delete', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(149, 'workflowstepcomment-list', 'web', '2024-11-08 23:31:40', '2024-11-08 23:31:40'),
(150, 'workflowstepcomment-create', 'web', '2024-11-08 23:31:40', '2024-11-08 23:31:40'),
(151, 'workflowstepcomment-edit', 'web', '2024-11-08 23:31:40', '2024-11-08 23:31:40'),
(152, 'workflowstepcomment-delete', 'web', '2024-11-08 23:31:40', '2024-11-08 23:31:40'),
(153, 'workflowsteprequirement-list', 'web', '2024-11-08 23:31:40', '2024-11-08 23:31:40'),
(154, 'workflowsteprequirement-create', 'web', '2024-11-08 23:31:40', '2024-11-08 23:31:40'),
(155, 'workflowsteprequirement-edit', 'web', '2024-11-08 23:31:40', '2024-11-08 23:31:40'),
(156, 'workflowsteprequirement-delete', 'web', '2024-11-08 23:31:40', '2024-11-08 23:31:40');

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
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `clothing_item_id` int(11) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `purchased_at` varchar(100) DEFAULT NULL,
  `store` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `user_id`, `clothing_item_id`, `price`, `purchased_at`, `store`, `created_at`, `updated_at`) VALUES
(3, 1, 26, '3,500', 'Neklesha', 'Nairobi', '2025-02-26 07:37:07', '2025-02-26 07:37:07'),
(4, 1, 23, '4,500', 'Think Twice', 'Thika', '2025-02-26 07:37:36', '2025-02-26 07:37:36'),
(5, 1, 25, '5,000', 'Think Twice', 'Umoja', '2025-02-26 07:38:00', '2025-02-26 07:38:00'),
(7, 1, 28, '4,000', 'Gikomba Ndogo', 'Pipeline', '2025-02-26 07:38:54', '2025-02-26 07:38:54'),
(8, 1, 27, '5,000', 'Gikomba Ndogo', 'Pipeline', '2025-02-26 07:39:21', '2025-02-26 07:39:21'),
(9, 1, 20, '3,200', 'Think Twice', 'Nairobi', '2025-02-26 07:41:07', '2025-02-26 07:41:07'),
(10, 1, 24, '7,000', 'Gikomba', 'Nairobi', '2025-02-26 07:41:41', '2025-02-26 07:41:41');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'super admin', 'web', '2024-11-12 02:05:03', '2025-02-26 07:33:45'),
(3, 'admin', 'web', '2024-11-12 02:05:20', '2024-11-12 02:05:20');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(2, 3),
(3, 1),
(3, 3),
(4, 1),
(4, 3),
(5, 1),
(6, 1),
(6, 3),
(7, 1),
(7, 3),
(8, 1),
(8, 3),
(9, 1),
(10, 1),
(10, 3),
(11, 1),
(11, 3),
(12, 1),
(13, 1),
(13, 3),
(14, 1),
(14, 3),
(15, 1),
(16, 1),
(16, 3),
(17, 1),
(17, 3),
(18, 1),
(18, 3),
(19, 1),
(19, 3),
(20, 1),
(20, 3),
(21, 1),
(22, 1),
(22, 3),
(23, 1),
(23, 3),
(24, 1),
(24, 3),
(25, 1),
(25, 3),
(26, 1),
(26, 3),
(27, 1),
(28, 1),
(28, 3),
(29, 1),
(29, 3),
(30, 1),
(30, 3),
(31, 1),
(31, 3),
(32, 1),
(32, 3),
(33, 1),
(33, 3),
(34, 1),
(34, 3),
(35, 1),
(35, 3),
(36, 1),
(36, 3),
(37, 1),
(37, 3),
(38, 1),
(38, 3),
(39, 1),
(39, 3),
(40, 1),
(40, 3),
(41, 1),
(41, 3),
(42, 1),
(42, 3),
(43, 1),
(43, 3),
(44, 1),
(44, 3),
(45, 1),
(45, 3),
(46, 1),
(46, 3),
(47, 1),
(47, 3),
(48, 1),
(48, 3),
(49, 1),
(49, 3),
(50, 1),
(50, 3),
(51, 1),
(51, 3),
(52, 1),
(52, 3),
(53, 1),
(53, 3),
(54, 1),
(54, 3),
(55, 1),
(55, 3),
(56, 1),
(56, 3),
(57, 1),
(57, 3),
(58, 1),
(58, 3),
(59, 1),
(59, 3),
(60, 1),
(60, 3),
(61, 1),
(61, 3),
(62, 1),
(62, 3),
(63, 1),
(63, 3),
(64, 1),
(64, 3),
(65, 1),
(65, 3),
(66, 1),
(66, 3),
(67, 1),
(67, 3),
(68, 1),
(68, 3),
(69, 1),
(69, 3),
(70, 1),
(70, 3),
(71, 1),
(71, 3),
(72, 1),
(72, 3),
(73, 1),
(73, 3),
(74, 1),
(74, 3),
(75, 1),
(75, 3),
(76, 1),
(76, 3),
(77, 1),
(77, 3),
(78, 1),
(78, 3),
(79, 1),
(79, 3),
(80, 1),
(80, 3),
(81, 1),
(81, 3),
(82, 1),
(82, 3),
(83, 1),
(83, 3),
(84, 1),
(84, 3),
(85, 1),
(85, 3),
(86, 1),
(86, 3),
(87, 1),
(87, 3),
(88, 1),
(88, 3),
(89, 1),
(89, 3),
(90, 1),
(90, 3),
(91, 1),
(91, 3),
(92, 1),
(92, 3),
(93, 1),
(93, 3),
(94, 1),
(94, 3),
(95, 1),
(95, 3),
(96, 1),
(96, 3),
(97, 1),
(97, 3),
(98, 1),
(98, 3),
(99, 1),
(99, 3),
(100, 1),
(100, 3),
(101, 1),
(101, 3),
(102, 1),
(102, 3),
(103, 1),
(103, 3),
(104, 1),
(104, 3),
(105, 1),
(105, 3),
(106, 1),
(106, 3),
(107, 1),
(107, 3),
(108, 1),
(108, 3),
(109, 1),
(109, 3),
(110, 1),
(110, 3),
(111, 1),
(111, 3),
(112, 1),
(112, 3),
(113, 1),
(113, 3),
(114, 1),
(114, 3),
(115, 1),
(115, 3),
(116, 1),
(116, 3),
(117, 1),
(117, 3),
(118, 1),
(118, 3),
(119, 1),
(119, 3),
(120, 1),
(120, 3),
(121, 1),
(121, 3),
(122, 1),
(122, 3),
(123, 1),
(123, 3),
(124, 1),
(124, 3),
(125, 1),
(125, 3),
(126, 1),
(126, 3),
(127, 1),
(127, 3),
(128, 1),
(128, 3),
(129, 1),
(129, 3),
(130, 1),
(130, 3),
(131, 1),
(131, 3),
(132, 1),
(132, 3),
(133, 1),
(133, 3),
(134, 1),
(134, 3),
(135, 1),
(135, 3),
(136, 1),
(136, 3),
(137, 1),
(137, 3),
(138, 1),
(138, 3),
(139, 1),
(139, 3),
(140, 1),
(140, 3),
(141, 1),
(141, 3),
(142, 1),
(142, 3),
(143, 1),
(143, 3),
(144, 1),
(144, 3),
(145, 1),
(145, 3),
(146, 1),
(146, 3),
(147, 1),
(147, 3),
(148, 1),
(148, 3),
(149, 1),
(149, 3),
(150, 1),
(150, 3),
(151, 1),
(151, 3),
(152, 1),
(152, 3),
(153, 1),
(153, 3),
(154, 1),
(154, 3),
(155, 1),
(155, 3),
(156, 1),
(156, 3);

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `full_name`, `created_at`, `updated_at`) VALUES
(1, '10', '2025-02-25 15:09:06', '2025-02-25 15:09:06');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `user_id`, `full_name`, `created_at`, `updated_at`) VALUES
(2, 1, 'Formal', '2025-02-26 05:32:35', '2025-02-26 05:32:35'),
(3, 1, 'Winter', '2025-02-26 05:42:52', '2025-02-26 05:42:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$Jt/kGan52zDizK3R9xt49OMXJhgpi6Tj9bLmaH5GWZvc.hnR9sgH.', NULL, '2025-02-24 10:46:03', '2025-02-26 07:33:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conditions`
--
ALTER TABLE `conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_favorites_items` (`clothing_item_id`);

--
-- Indexes for table `histories`
--
ALTER TABLE `histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_histories_items` (`clothing_item_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_items_users` (`user_id`),
  ADD KEY `fk_items_categories` (`category_id`);

--
-- Indexes for table `laundries`
--
ALTER TABLE `laundries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_laundries_users` (`user_id`),
  ADD KEY `fk_laundries_items` (`clothing_item_id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_logs_users` (`user_id`),
  ADD KEY `fk_logs_items` (`item_id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `occassions`
--
ALTER TABLE `occassions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outfits`
--
ALTER TABLE `outfits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_outfits_users` (`user_id`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_purchases_users` (`user_id`),
  ADD KEY `fk_purchases_items` (`clothing_item_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tags_users` (`user_id`);

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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `conditions`
--
ALTER TABLE `conditions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `histories`
--
ALTER TABLE `histories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `laundries`
--
ALTER TABLE `laundries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `occassions`
--
ALTER TABLE `occassions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `outfits`
--
ALTER TABLE `outfits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `fk_favorites_items` FOREIGN KEY (`clothing_item_id`) REFERENCES `items` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `histories`
--
ALTER TABLE `histories`
  ADD CONSTRAINT `fk_histories_items` FOREIGN KEY (`clothing_item_id`) REFERENCES `items` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `fk_items_categories` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_items_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `laundries`
--
ALTER TABLE `laundries`
  ADD CONSTRAINT `fk_laundries_items` FOREIGN KEY (`clothing_item_id`) REFERENCES `items` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_laundries_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `fk_logs_items` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_logs_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `outfits`
--
ALTER TABLE `outfits`
  ADD CONSTRAINT `fk_outfits_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `purchases`
--
ALTER TABLE `purchases`
  ADD CONSTRAINT `fk_purchases_items` FOREIGN KEY (`clothing_item_id`) REFERENCES `items` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_purchases_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tags`
--
ALTER TABLE `tags`
  ADD CONSTRAINT `fk_tags_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
