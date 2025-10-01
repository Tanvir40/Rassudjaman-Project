-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2025 at 10:44 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rased`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `about`, `created_at`, `updated_at`) VALUES
(1, 'Nature has always been unpredictable. Unexpected events may arrive and cause a huge damage at any time. With the valuable support from the government and our respected donors we are always ready to respond to any kind of emergency voluntary.', '2025-10-01 20:33:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `achievement`
--

CREATE TABLE `achievement` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `keyacievement` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_bn` varchar(255) NOT NULL,
  `brief_en` varchar(255) NOT NULL,
  `brief_bn` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `achievement`
--

INSERT INTO `achievement` (`id`, `keyacievement`, `title_en`, `title_bn`, `brief_en`, `brief_bn`, `created_at`, `updated_at`) VALUES
(1, '', 'Achivement', 'Achivement', 'Achivement', 'Achivement', '2025-10-01 20:34:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `article` varchar(255) NOT NULL,
  `pdf` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `article`, `pdf`, `created_at`, `updated_at`) VALUES
(1, 'Achivement', 'pdf.pdf', '2025-10-01 20:34:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bannername` varchar(255) NOT NULL,
  `bannerimage` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 2,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `bannername`, `bannerimage`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Banner One', '1.jpg', 1, '2025-10-01 14:36:57', '2025-10-01 14:37:00');

-- --------------------------------------------------------

--
-- Table structure for table `better_livings`
--

CREATE TABLE `better_livings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `better_livings`
--

INSERT INTO `better_livings` (`id`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'image.jpg', '2025-10-01 20:37:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `booklists`
--

CREATE TABLE `booklists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `book_image` varchar(255) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `booklists`
--

INSERT INTO `booklists` (`id`, `title`, `book_image`, `book_name`, `created_at`, `updated_at`) VALUES
(1, 'book', 'book.jpg', 'Test Book', '2025-10-01 20:37:17', NULL),
(2, 'Title', 'boo.jpg', 'Test Book', '2025-10-01 20:37:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `charities`
--

CREATE TABLE `charities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `desp` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `charities`
--

INSERT INTO `charities` (`id`, `photo`, `title`, `link`, `desp`, `created_at`, `updated_at`) VALUES
(1, 'image.jpg', 'Title', '/', 'Nature has always been unpredictable. Unexpected events may arrive and cause a huge damage at any time. With the valuable support from the government and our respected donors we are always ready to respond to any kind of emergency voluntary.', '2025-10-01 20:37:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `telephone`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Contect', '01821732936', 'tonmoy199844@gmail.com', 'Nature has always been unpredictable. Unexpected events may arrive and cause a huge damage at any time. With the valuable support from the government and our respected donors we are always ready to respond to any kind of emergency voluntary.', '2025-10-01 20:38:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `covidmanagements`
--

CREATE TABLE `covidmanagements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `covidmanagements`
--

INSERT INTO `covidmanagements` (`id`, `link`, `created_at`, `updated_at`) VALUES
(1, '/', '2025-10-01 20:38:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `covids`
--

CREATE TABLE `covids` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `covids`
--

INSERT INTO `covids` (`id`, `text`, `created_at`, `updated_at`) VALUES
(1, 'Nature has always been unpredictable. Unexpected events may arrive and cause a huge damage at any time. With the valuable support from the government and our respected donors we are always ready to respond to any kind of emergency voluntary.', '2025-10-01 20:38:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer_forms`
--

CREATE TABLE `customer_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c_o_p_d_s`
--

CREATE TABLE `c_o_p_d_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `c_o_p_d_s`
--

INSERT INTO `c_o_p_d_s` (`id`, `text`, `created_at`, `updated_at`) VALUES
(1, 'Nature has always been unpredictable. Unexpected events may arrive and cause a huge damage at any time. With the valuable support from the government and our respected donors we are always ready to respond to any kind of emergency voluntary.', '2025-10-01 20:39:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `freemaskdistributions`
--

CREATE TABLE `freemaskdistributions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `freemaskdistributions`
--

INSERT INTO `freemaskdistributions` (`id`, `title`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Test', 'image.jpg', '2025-10-01 20:39:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lecture`
--

CREATE TABLE `lecture` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lecture_title` varchar(255) NOT NULL,
  `lecture_first_part` varchar(255) NOT NULL,
  `lecture_details_part` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lecture`
--

INSERT INTO `lecture` (`id`, `lecture_title`, `lecture_first_part`, `lecture_details_part`, `created_at`, `updated_at`) VALUES
(1, 'Lecture', 'Lecture', 'Lecture', '2025-10-01 20:39:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `massage_profs`
--

CREATE TABLE `massage_profs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `massage` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `massage_profs`
--

INSERT INTO `massage_profs` (`id`, `massage`, `created_at`, `updated_at`) VALUES
(1, 'Nature has always been unpredictable. Unexpected events may arrive and cause a huge damage at any time. With the valuable support from the government and our respected donors we are always ready to respond to any kind of emergency voluntary.', '2025-10-01 20:39:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_06_09_083607_create_tasks_table', 1),
(5, '2021_06_16_034138_create_quotes_table', 1),
(6, '2021_06_16_094828_create_contactus_table', 1),
(7, '2021_06_22_061018_lecture_tbl', 1),
(8, '2021_06_23_101648_create_achievement_table', 1),
(9, '2022_09_13_173727_create_banners_table', 1),
(10, '2022_09_13_173752_create_massage_profs_table', 1),
(11, '2022_09_13_173949_create_abouts_table', 1),
(12, '2022_09_13_174003_create_profiles_table', 1),
(13, '2022_09_13_174115_create_new_quotes_table', 1),
(14, '2022_09_13_193429_create_customer_forms_table', 1),
(15, '2022_09_13_203718_create_news_table', 1),
(16, '2022_09_13_212420_create_ongoing_research_table', 1),
(17, '2022_09_13_212437_create_booklists_table', 1),
(18, '2022_09_13_212456_create_articles_table', 1),
(19, '2022_09_14_085032_create_charities_table', 1),
(20, '2022_09_14_085101_create_better_livings_table', 1),
(21, '2022_09_14_101554_create_c_o_p_d_s_table', 1),
(22, '2022_09_14_101716_create_covids_table', 1),
(23, '2022_09_14_101801_create_prs_table', 1),
(24, '2022_09_14_101820_create_pa_prps_table', 1),
(25, '2022_09_14_101900_create_ozone_therapies_table', 1),
(26, '2022_09_15_115541_create_scientificseminaratfenis_table', 1),
(27, '2022_09_15_115600_create_pureweeks_table', 1),
(28, '2022_09_15_115616_create_freemaskdistributions_table', 1),
(29, '2022_09_15_115647_create_photogellaries_table', 1),
(30, '2022_09_15_140248_create_pureweekvideos_table', 1),
(31, '2022_09_15_140312_create_takecares_table', 1),
(32, '2022_09_15_140330_create_covidmanagements_table', 1),
(33, '2022_09_15_140402_create_ramadanlifestyles_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image_link` varchar(255) NOT NULL,
  `news_desp` longtext NOT NULL,
  `news_link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `image_link`, `news_desp`, `news_link`, `created_at`, `updated_at`) VALUES
(1, 'title', 'image.jpg', 'Nature has always been unpredictable. Unexpected events may arrive and cause a huge damage at any time. With the valuable support from the government and our respected donors we are always ready to respond to any kind of emergency voluntary.', '/', '2025-10-01 20:40:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `new_quotes`
--

CREATE TABLE `new_quotes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quotes_one` varchar(255) NOT NULL,
  `quotes_two` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `new_quotes`
--

INSERT INTO `new_quotes` (`id`, `quotes_one`, `quotes_two`, `created_at`, `updated_at`) VALUES
(1, 'Quotes', 'Quotes', '2025-10-01 20:41:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ongoing_research`
--

CREATE TABLE `ongoing_research` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `research_title` varchar(255) NOT NULL,
  `research_desp` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ongoing_research`
--

INSERT INTO `ongoing_research` (`id`, `research_title`, `research_desp`, `created_at`, `updated_at`) VALUES
(1, 'Research', 'Nature has always been unpredictable. Unexpected events may arrive and cause a huge damage at any time. With the valuable support from the government and our respected donors we are always ready to respond to any kind of emergency voluntary.', '2025-10-01 20:41:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ozone_therapies`
--

CREATE TABLE `ozone_therapies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ozone_therapies`
--

INSERT INTO `ozone_therapies` (`id`, `text`, `created_at`, `updated_at`) VALUES
(1, 'Nature has always been unpredictable. Unexpected events may arrive and cause a huge damage at any time. With the valuable support from the government and our respected donors we are always ready to respond to any kind of emergency voluntary.', '2025-10-01 20:41:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pa_prps`
--

CREATE TABLE `pa_prps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pa_prps`
--

INSERT INTO `pa_prps` (`id`, `text`, `created_at`, `updated_at`) VALUES
(1, 'Nature has always been unpredictable. Unexpected events may arrive and cause a huge damage at any time. With the valuable support from the government and our respected donors we are always ready to respond to any kind of emergency voluntary.', '2025-10-01 20:41:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `photogellaries`
--

CREATE TABLE `photogellaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `photogellaries`
--

INSERT INTO `photogellaries` (`id`, `title`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Photo gallery', 'image.jpg', '2025-10-01 20:42:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `massage` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `massage`, `created_at`, `updated_at`) VALUES
(1, 'Nature has always been unpredictable. Unexpected events may arrive and cause a huge damage at any time. With the valuable support from the government and our respected donors we are always ready to respond to any kind of emergency voluntary.', '2025-10-01 20:42:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prs`
--

CREATE TABLE `prs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` longtext NOT NULL,
  `text2` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `prs`
--

INSERT INTO `prs` (`id`, `text`, `text2`, `created_at`, `updated_at`) VALUES
(1, 'Nature has always been unpredictable. Unexpected events may arrive and cause a huge damage at any time. With the valuable support from the government and our respected donors we are always ready to respond to any kind of emergency voluntary.', 'Nature has always been unpredictable. Unexpected events may arrive and cause a huge damage at any time. With the valuable support from the government and our respected donors we are always ready to respond to any kind of emergency voluntary.', '2025-10-01 20:42:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pureweeks`
--

CREATE TABLE `pureweeks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pureweeks`
--

INSERT INTO `pureweeks` (`id`, `title`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Pure', 'image.jpg', '2025-10-01 20:42:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pureweekvideos`
--

CREATE TABLE `pureweekvideos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pureweekvideos`
--

INSERT INTO `pureweekvideos` (`id`, `link`, `created_at`, `updated_at`) VALUES
(1, '/', '2025-10-01 20:42:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quotes_bn` varchar(255) NOT NULL,
  `quotes_en` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `quotes_bn`, `quotes_en`, `created_at`, `updated_at`) VALUES
(1, 'Quotes', 'Quotes', '2025-10-01 20:43:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ramadanlifestyles`
--

CREATE TABLE `ramadanlifestyles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ramadanlifestyles`
--

INSERT INTO `ramadanlifestyles` (`id`, `link`, `created_at`, `updated_at`) VALUES
(1, '/', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `scientificseminaratfenis`
--

CREATE TABLE `scientificseminaratfenis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `scientificseminaratfenis`
--

INSERT INTO `scientificseminaratfenis` (`id`, `title`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'scientificseminaratfenis', 'image.jpg', '2025-10-01 20:43:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `takecares`
--

CREATE TABLE `takecares` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `takecares`
--

INSERT INTO `takecares` (`id`, `link`, `created_at`, `updated_at`) VALUES
(1, '/', '2025-10-01 20:43:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `task_name`, `email`, `address`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'tasks', 'tonmoy199844@gmail.com', 'Dhaka 1216', 'image.jpg', '2025-10-01 20:43:46', NULL);

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'tanvir', 'admin@gmail.com', '2025-09-30 11:24:09', '$2y$12$hVOGjSu4kqZt7Dx7F//ZiuK.5/QmOQlnT9j4R5P0CVan6TLBiAzum', NULL, '2025-09-30 11:24:09', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `achievement`
--
ALTER TABLE `achievement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `better_livings`
--
ALTER TABLE `better_livings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booklists`
--
ALTER TABLE `booklists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `charities`
--
ALTER TABLE `charities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `covidmanagements`
--
ALTER TABLE `covidmanagements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `covids`
--
ALTER TABLE `covids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_forms`
--
ALTER TABLE `customer_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_o_p_d_s`
--
ALTER TABLE `c_o_p_d_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freemaskdistributions`
--
ALTER TABLE `freemaskdistributions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecture`
--
ALTER TABLE `lecture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `massage_profs`
--
ALTER TABLE `massage_profs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_quotes`
--
ALTER TABLE `new_quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ongoing_research`
--
ALTER TABLE `ongoing_research`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ozone_therapies`
--
ALTER TABLE `ozone_therapies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pa_prps`
--
ALTER TABLE `pa_prps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photogellaries`
--
ALTER TABLE `photogellaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prs`
--
ALTER TABLE `prs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pureweeks`
--
ALTER TABLE `pureweeks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pureweekvideos`
--
ALTER TABLE `pureweekvideos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ramadanlifestyles`
--
ALTER TABLE `ramadanlifestyles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scientificseminaratfenis`
--
ALTER TABLE `scientificseminaratfenis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `takecares`
--
ALTER TABLE `takecares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `achievement`
--
ALTER TABLE `achievement`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `better_livings`
--
ALTER TABLE `better_livings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booklists`
--
ALTER TABLE `booklists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `charities`
--
ALTER TABLE `charities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `covidmanagements`
--
ALTER TABLE `covidmanagements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `covids`
--
ALTER TABLE `covids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_forms`
--
ALTER TABLE `customer_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c_o_p_d_s`
--
ALTER TABLE `c_o_p_d_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `freemaskdistributions`
--
ALTER TABLE `freemaskdistributions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lecture`
--
ALTER TABLE `lecture`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `massage_profs`
--
ALTER TABLE `massage_profs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `new_quotes`
--
ALTER TABLE `new_quotes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ongoing_research`
--
ALTER TABLE `ongoing_research`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ozone_therapies`
--
ALTER TABLE `ozone_therapies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pa_prps`
--
ALTER TABLE `pa_prps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `photogellaries`
--
ALTER TABLE `photogellaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prs`
--
ALTER TABLE `prs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pureweeks`
--
ALTER TABLE `pureweeks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pureweekvideos`
--
ALTER TABLE `pureweekvideos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ramadanlifestyles`
--
ALTER TABLE `ramadanlifestyles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `scientificseminaratfenis`
--
ALTER TABLE `scientificseminaratfenis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `takecares`
--
ALTER TABLE `takecares`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
