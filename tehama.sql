-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2023 at 07:17 AM
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
-- Database: `tehama`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `catid` varchar(200) NOT NULL,
  `category` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `catid`, `category`, `slug`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'e3c091901e1a549a9c7e099a93e06c8c', 'Development', 'development', 1, '2023-01-04 11:11:44', NULL),
(2, '3ffb41c3f487844db59a6466b6f3761e', 'IT & Software', 'it-and-software', 1, '2023-01-04 11:12:26', NULL),
(3, '154679effcbf78c450fa5e11f9080930', 'Office Productivity', 'office-productivity', 1, '2023-01-04 11:21:14', NULL),
(4, '5bdb8924fc6de64cd68b2f50c1c863da', 'Finance & Accountancy', 'finance-and-accountancy', 1, '2023-01-04 11:22:32', NULL),
(5, 'f2547f0896225d0210b8f04ad06a5a35', 'Design', 'design', 1, '2023-01-04 11:23:08', NULL),
(6, '59176c2765660c078955ee43040b6447', 'Bussiness', 'bussiness', 1, '2023-01-04 11:25:33', NULL),
(7, 'ceb51ea2b25dbd3257786840cecf330e', 'Personal Development', 'personal-development', 1, '2023-01-04 11:25:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(200) DEFAULT NULL,
  `os` varchar(200) NOT NULL,
  `last_activity` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `userid`, `ip_address`, `user_agent`, `os`, `last_activity`) VALUES
(1, 'c8c225b7231bf142b1a78fcbf9a88ef8', '196.45.145.30', 'Firefox', 'Windows 10', '2023-01-03 05:36:19'),
(2, 'c8c225b7231bf142b1a78fcbf9a88ef8', '196.45.145.30', 'Firefox', 'Windows 10', '2023-01-03 05:40:57'),
(3, '6a4df63095876b4f23bc90542bfaa44b', '155.12.94.66', 'Chrome', 'Windows 10', '2023-01-03 06:38:24'),
(4, '6a4df63095876b4f23bc90542bfaa44b', '155.12.94.66', 'Chrome', 'Windows 10', '2023-01-03 06:38:37'),
(5, '6a4df63095876b4f23bc90542bfaa44b', '155.12.94.66', 'Chrome', 'Windows 10', '2023-01-03 06:38:52'),
(6, '6a4df63095876b4f23bc90542bfaa44b', '155.12.94.66', 'Chrome', 'Windows 10', '2023-01-03 06:39:10'),
(7, '6a4df63095876b4f23bc90542bfaa44b', '155.12.94.66', 'Chrome', 'Windows 10', '2023-01-03 06:39:22'),
(8, '6a4df63095876b4f23bc90542bfaa44b', '155.12.94.66', 'Chrome', 'Windows 10', '2023-01-03 06:40:06'),
(9, '6a4df63095876b4f23bc90542bfaa44b', '155.12.94.66', 'Chrome', 'Windows 10', '2023-01-03 06:40:20'),
(10, 'c8c225b7231bf142b1a78fcbf9a88ef8', '196.45.145.30', 'Firefox', 'Windows 10', '2023-01-03 06:41:20'),
(11, '6a4df63095876b4f23bc90542bfaa44b', '155.12.94.66', 'Chrome', 'Windows 10', '2023-01-03 06:42:04'),
(12, '6a4df63095876b4f23bc90542bfaa44b', '155.12.94.66', 'Chrome', 'Windows 10', '2023-01-03 06:44:43'),
(13, '6a4df63095876b4f23bc90542bfaa44b', '155.12.94.66', 'Chrome', 'Windows 10', '2023-01-03 06:45:37'),
(14, '6b6762d5a72aed232bb1d54734afc646', '155.12.94.66', 'Chrome', 'Windows 10', '2023-01-03 06:47:55'),
(15, 'c8c225b7231bf142b1a78fcbf9a88ef8', '196.45.145.30', 'Firefox', 'Windows 10', '2023-01-03 07:06:03'),
(16, 'c8c225b7231bf142b1a78fcbf9a88ef8', '196.45.145.30', 'Firefox', 'Windows 10', '2023-01-04 01:10:34'),
(17, 'c8c225b7231bf142b1a78fcbf9a88ef8', '196.45.145.30', 'Chrome', 'Android', '2023-01-04 01:59:01'),
(18, 'a7cfb35c40eceb8998d6264f480f9ab0', '127.0.0.1', 'Firefox', 'Windows 10', '2023-01-04 09:17:33'),
(19, 'a7cfb35c40eceb8998d6264f480f9ab0', '127.0.0.1', 'Firefox', 'Windows 10', '2023-01-04 09:53:31'),
(20, 'a7cfb35c40eceb8998d6264f480f9ab0', '127.0.0.1', 'Firefox', 'Windows 10', '2023-01-06 06:57:02'),
(21, 'a7cfb35c40eceb8998d6264f480f9ab0', '127.0.0.1', 'Firefox', 'Windows 10', '2023-01-07 07:09:00'),
(22, 'a7cfb35c40eceb8998d6264f480f9ab0', '127.0.0.1', 'Firefox', 'Windows 10', '2023-01-08 09:13:57'),
(23, 'a7cfb35c40eceb8998d6264f480f9ab0', '127.0.0.1', 'Firefox', 'Windows 10', '2023-01-08 09:56:00'),
(24, 'a7cfb35c40eceb8998d6264f480f9ab0', '127.0.0.1', 'Firefox', 'Windows 10', '2023-01-08 11:09:21'),
(25, 'a7cfb35c40eceb8998d6264f480f9ab0', '127.0.0.1', 'Firefox', 'Windows 10', '2023-01-08 11:18:28'),
(26, 'a7cfb35c40eceb8998d6264f480f9ab0', '127.0.0.1', 'Firefox', 'Windows 10', '2023-01-08 12:00:29'),
(27, 'a7cfb35c40eceb8998d6264f480f9ab0', '127.0.0.1', 'Firefox', 'Windows 10', '2023-01-08 12:22:51'),
(28, 'a7cfb35c40eceb8998d6264f480f9ab0', '127.0.0.1', 'Firefox', 'Windows 10', '2023-01-08 12:38:52'),
(29, 'a7cfb35c40eceb8998d6264f480f9ab0', '127.0.0.1', 'Firefox', 'Windows 10', '2023-01-08 13:07:59'),
(30, 'a7cfb35c40eceb8998d6264f480f9ab0', '127.0.0.1', 'Firefox', 'Windows 10', '2023-01-08 13:09:12'),
(31, 'a7cfb35c40eceb8998d6264f480f9ab0', '127.0.0.1', 'Firefox', 'Windows 10', '2023-01-08 13:59:28'),
(32, 'a7cfb35c40eceb8998d6264f480f9ab0', '127.0.0.1', 'Firefox', 'Windows 10', '2023-01-08 14:12:24'),
(33, 'a7cfb35c40eceb8998d6264f480f9ab0', '127.0.0.1', 'Firefox', 'Windows 10', '2023-01-08 15:39:28'),
(34, 'a7cfb35c40eceb8998d6264f480f9ab0', '127.0.0.1', 'Firefox', 'Windows 10', '2023-01-08 19:00:51'),
(35, 'a7cfb35c40eceb8998d6264f480f9ab0', '127.0.0.1', 'Firefox', 'Windows 10', '2023-01-08 19:04:03'),
(36, 'a7cfb35c40eceb8998d6264f480f9ab0', '127.0.0.1', 'Firefox', 'Windows 10', '2023-01-08 20:25:41'),
(37, 'a7cfb35c40eceb8998d6264f480f9ab0', '127.0.0.1', 'Firefox', 'Windows 10', '2023-01-09 07:59:52'),
(38, 'a7cfb35c40eceb8998d6264f480f9ab0', '127.0.0.1', 'Firefox', 'Windows 10', '2023-01-09 09:46:57'),
(39, 'a7cfb35c40eceb8998d6264f480f9ab0', '127.0.0.1', 'Firefox', 'Windows 10', '2023-01-11 11:16:46'),
(40, 'a7cfb35c40eceb8998d6264f480f9ab0', '127.0.0.1', 'Firefox', 'Windows 10', '2023-01-12 08:53:11'),
(41, 'a7cfb35c40eceb8998d6264f480f9ab0', '127.0.0.1', 'Firefox', 'Windows 10', '2023-01-12 13:46:25'),
(42, 'a7cfb35c40eceb8998d6264f480f9ab0', '127.0.0.1', 'Firefox', 'Windows 10', '2023-01-13 15:13:37'),
(43, 'a7cfb35c40eceb8998d6264f480f9ab0', '127.0.0.1', 'Firefox', 'Windows 10', '2023-01-13 19:06:19'),
(44, 'a7cfb35c40eceb8998d6264f480f9ab0', '127.0.0.1', 'Firefox', 'Windows 10', '2023-01-14 07:51:23'),
(45, 'a7cfb35c40eceb8998d6264f480f9ab0', '127.0.0.1', 'Firefox', 'Windows 10', '2023-01-14 08:14:18'),
(46, 'a7cfb35c40eceb8998d6264f480f9ab0', '127.0.0.1', 'Firefox', 'Windows 10', '2023-01-14 14:13:41'),
(47, 'a7cfb35c40eceb8998d6264f480f9ab0', '127.0.0.1', 'Firefox', 'Windows 10', '2023-01-14 16:49:05'),
(48, 'a7cfb35c40eceb8998d6264f480f9ab0', '127.0.0.1', 'Firefox', 'Windows 10', '2023-01-14 17:55:44'),
(49, 'a7cfb35c40eceb8998d6264f480f9ab0', '127.0.0.1', 'Firefox', 'Windows 10', '2023-01-14 19:53:21'),
(50, 'a7cfb35c40eceb8998d6264f480f9ab0', '127.0.0.1', 'Firefox', 'Windows 10', '2023-01-14 20:28:16'),
(51, 'a7cfb35c40eceb8998d6264f480f9ab0', '127.0.0.1', 'Firefox', 'Windows 10', '2023-01-14 20:44:34'),
(52, 'a7cfb35c40eceb8998d6264f480f9ab0', '127.0.0.1', 'Firefox', 'Windows 10', '2023-01-14 20:49:40'),
(53, 'a7cfb35c40eceb8998d6264f480f9ab0', '127.0.0.1', 'Firefox', 'Windows 10', '2023-01-14 21:04:38'),
(54, 'a7cfb35c40eceb8998d6264f480f9ab0', '127.0.0.1', 'Firefox', 'Windows 10', '2023-01-16 08:05:18');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `courseid` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(200) DEFAULT NULL,
  `short_description` varchar(1024) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `catid` varchar(200) NOT NULL,
  `subcatid` varchar(200) DEFAULT NULL,
  `lang_id` varchar(200) DEFAULT NULL,
  `instructor_id` varchar(200) DEFAULT NULL,
  `currency_id` varchar(200) DEFAULT NULL,
  `requirements` longtext DEFAULT NULL,
  `outcomes` longtext DEFAULT '[]',
  `image` varchar(255) DEFAULT NULL,
  `promo_video` varchar(1024) DEFAULT NULL,
  `promo_link` varchar(255) DEFAULT NULL,
  `tags` text DEFAULT NULL,
  `published` tinyint(1) DEFAULT 0,
  `price` varchar(255) DEFAULT NULL,
  `discounted_price` varchar(200) DEFAULT NULL,
  `discount_percent` varchar(200) DEFAULT NULL,
  `meta_keywords` varchar(1024) DEFAULT NULL,
  `meta_description` varchar(1024) DEFAULT NULL,
  `is_free` tinyint(1) DEFAULT 1,
  `level` varchar(20) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `courseid`, `title`, `slug`, `short_description`, `description`, `catid`, `subcatid`, `lang_id`, `instructor_id`, `currency_id`, `requirements`, `outcomes`, `image`, `promo_video`, `promo_link`, `tags`, `published`, `price`, `discounted_price`, `discount_percent`, `meta_keywords`, `meta_description`, `is_free`, `level`, `created_at`, `updated_at`) VALUES
(1, '0e71ea956ecf4ff8714ed62d17414786', 'Html & Css For Beginner', 'html-and-css-for-beginner', '', '', 'e3c091901e1a549a9c7e099a93e06c8c', '5cdf4f253a4673a76f0e014bdd1ffe0a', '22', 'a7cfb35c40eceb8998d6264f480f9ab0', '477d37e71fbe3e3d984550ef1c4d4e23', '[\"first requirement\"]', '[\"first outcomes\"]', './assets/uploads/courses/thumbnails/1673718338e56c66eba1bfa52934b9a709e7088d73.gif', './assets/uploads/courses/promo_video/1673718338a96c433f-cfa4-4688-a08e-5206b2a0cb52-mp4_720p.mp4', 'http://localhost/TEHAMAWEB/admin/courses/edit/0e71ea956ecf4ff8714ed62d17414786', NULL, 1, '20000', '500', '97.5', 'Html,Css,Beginner', '<p>gjgjgjhgjh</p>', 1, 'beginner', '2023-01-08 10:00:18', '2023-01-14 18:49:12'),
(2, '0d3e9eec741d0e04e6a6887d3bd05647', 'Microsoft Oracle', 'microsoft-oracle', NULL, NULL, '154679effcbf78c450fa5e11f9080930', '5cdf4f253a4673a76f0e014bdd1ffe0a', '21', 'a7cfb35c40eceb8998d6264f480f9ab0', '477d37e71fbe3e3d984550ef1c5d4e32', '', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, 'Beginner', '2023-01-08 10:15:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` int(11) NOT NULL,
  `currency_id` varchar(200) DEFAULT NULL,
  `currency` varchar(30) NOT NULL,
  `symbol` varchar(5) NOT NULL,
  `disabled` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `currency_id`, `currency`, `symbol`, `disabled`) VALUES
(1, '477d37e71fbe3e3d984550ef1c5d4e32', 'US Dollar', '$', 0),
(2, '477d37e71fbe3e3d984550ef1c4d4e23', 'Tanzania', 'Tsh', 0);

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `lang_id` int(11) NOT NULL,
  `symbol` varchar(10) NOT NULL,
  `language` varchar(40) NOT NULL,
  `disabled` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`lang_id`, `symbol`, `language`, `disabled`) VALUES
(1, 'af_ZA', 'Afrikaans', 1),
(2, 'sq_AL', 'Shqip', 1),
(3, 'ar_AR', 'العربية', 1),
(4, 'hy_AM', 'Հայերեն', 1),
(5, 'ay_BO', 'Aymar aru', 1),
(6, 'az_AZ', 'Azərbaycan dili', 1),
(7, 'eu_ES', 'Euskara', 1),
(8, 'bn_IN', 'Bangla', 1),
(9, 'bs_BA', 'Bosanski', 1),
(10, 'bg_BG', 'Български', 1),
(11, 'my_MM', 'မြန်မာဘာသာ', 1),
(12, 'ca_ES', 'Català', 1),
(13, 'ck_US', 'Cherokee', 1),
(14, 'hr_HR', 'Hrvatski', 1),
(15, 'cs_CZ', 'Čeština', 1),
(16, 'da_DK', 'Dansk', 1),
(17, 'nl_NL', 'Nederlands', 1),
(18, 'nl_BE', 'Nederlands (België)', 1),
(19, 'en_IN', 'English (India)', 1),
(20, 'en_GB', 'English (UK)', 1),
(21, 'en_US', 'English (US)', 1),
(22, 'et_EE', 'Eesti', 1),
(23, 'fo_FO', 'Føroyskt', 1),
(24, 'tl_PH', 'Filipino', 1),
(25, 'fi_FI', 'Suomi', 1),
(26, 'fr_CA', 'Français (Canada)', 1),
(27, 'fr_FR', 'Français (France)', 1),
(28, 'fy_NL', 'Frysk', 1),
(29, 'gl_ES', 'Galego', 1),
(30, 'ka_GE', 'ქართული', 1),
(31, 'de_DE', 'Deutsch', 1),
(32, 'el_GR', 'Ελληνικά', 1),
(33, 'gn_PY', 'Avañe\'ẽ', 1),
(34, 'gu_IN', 'ગુજરાતી', 1),
(35, 'ht_HT', 'Ayisyen', 1),
(36, 'he_IL', '‏עברית‏', 1),
(37, 'hi_IN', 'हिन्दी', 1),
(38, 'hu_HU', 'Magyar', 1),
(39, 'is_IS', 'Íslenska', 1),
(40, 'id_ID', 'Bahasa Indonesia', 1),
(41, 'ga_IE', 'Gaeilge', 1),
(42, 'it_IT', 'Italiano', 1),
(43, 'ja_JP', '日本語', 1),
(44, 'jv_ID', 'Basa Jawa', 1),
(45, 'kn_IN', 'Kannaḍa', 1),
(46, 'kk_KZ', 'Қазақша', 1),
(47, 'km_KH', 'Khmer', 1),
(48, 'ko_KR', '한국어', 1),
(49, 'ku_TR', 'Kurdî', 1),
(50, 'lv_LV', 'Latviešu', 1),
(51, 'li_NL', 'Lèmbörgs', 1),
(52, 'lt_LT', 'Lietuvių', 1),
(53, 'mk_MK', 'Македонски', 1),
(54, 'mg_MG', 'Malagasy', 1),
(55, 'ms_MY', 'Bahasa Melayu', 1),
(56, 'ml_IN', 'Malayāḷam', 1),
(57, 'mt_MT', 'Malti', 1),
(58, 'mr_IN', 'मराठी', 1),
(59, 'mn_MN', 'Монгол', 1),
(60, 'ne_NP', 'नेपाली', 1),
(61, 'se_NO', 'Davvisámegiella', 1),
(62, 'nb_NO', 'Norsk (bokmål)', 1),
(63, 'nn_NO', 'Norsk (nynorsk)', 1),
(64, 'ps_AF', 'پښتو', 1),
(65, 'fa_IR', 'فارسی', 1),
(66, 'pl_PL', 'Polski', 1),
(67, 'pt_BR', 'Português (Brasil)', 1),
(68, 'pt_PT', 'Português (Portugal)', 1),
(69, 'pa_IN', 'ਪੰਜਾਬੀ', 1),
(70, 'qu_PE', 'Qhichwa', 1),
(71, 'ro_RO', 'Română', 1),
(72, 'rm_CH', 'Rumantsch', 1),
(73, 'ru_RU', 'Русский', 1),
(74, 'sa_IN', 'संस्कृतम्', 1),
(75, 'sr_RS', 'Српски', 1),
(76, 'zh_CN', '中文(简体)', 1),
(77, 'sk_SK', 'Slovenčina', 1),
(78, 'sl_SI', 'Slovenščina', 1),
(79, 'so_SO', 'Soomaaliga', 1),
(80, 'es_LA', 'Español', 1),
(81, 'es_CL', 'Español (Chile)', 1),
(82, 'es_CO', 'Español (Colombia)', 1),
(83, 'es_MX', 'Español (México)', 1),
(84, 'es_ES', 'Español (España)', 1),
(85, 'es_VE', 'Español (Venezuela)', 1),
(86, 'sw_KE', 'Kiswahili', 1),
(87, 'sv_SE', 'Svenska', 1),
(88, 'sy_SY', 'Leššānā Suryāyā', 1),
(89, 'tg_TJ', 'тоҷикӣ, تاجیکی‎, tojikī', 1),
(90, 'ta_IN', 'தமிழ்', 1),
(91, 'tt_RU', 'татарча / Tatarça / تاتارچا', 1),
(92, 'te_IN', 'Telugu', 1),
(93, 'th_TH', 'ภาษาไทย', 1),
(94, 'zh_HK', '中文(香港)', 1),
(95, 'zh_TW', '中文 (繁體)', 1),
(96, 'tr_TR', 'Türkçe', 1),
(97, 'uk_UA', 'Українська', 1),
(98, 'ur_PK', 'اردو', 1),
(99, 'uz_UZ', 'O\'zbek', 1),
(100, 'vi_VN', 'Tiếng Việt', 1),
(101, 'cy_GB', 'Cymraeg', 1),
(102, 'xh_ZA', 'isiXhosa', 1),
(103, 'yi_DE', 'ייִדיש', 1),
(104, 'zu_ZA', 'isiZulu', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `id` int(11) UNSIGNED NOT NULL,
  `lesson_id` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `courseid` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `section_id` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_file` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_url` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `lesson_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attachment` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attachment_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `articles` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`id`, `lesson_id`, `title`, `duration`, `courseid`, `section_id`, `video_type`, `video_file`, `video_url`, `created_at`, `updated_at`, `lesson_type`, `attachment`, `attachment_type`, `articles`, `order`) VALUES
(1, '8c462ad435bea0a9f75fafc612c75fb7', 'Angular Components', '', '0e71ea956ecf4ff8714ed62d17414786', '52d1c4578033857c90c41cb37243aceb', 'html5', './assets/uploads/courses/lessons/1673709730a96c433f-cfa4-4688-a08e-5206b2a0cb52-mp4_720p.mp4', '', '2023-01-14 16:22:10', '2023-01-14 17:05:58', 'video-file', './assets/uploads/courses/attachements/1673712357Cover-Letter-for-Fresher.pdf', 'pdf', '', 0),
(2, '7ff64e699f1e0292e818d521acaf932f', 'Angular Components', '', '0e71ea956ecf4ff8714ed62d17414786', '52d1c4578033857c90c41cb37243aceb', 'html5', './assets/uploads/courses/lessons/1673947959a96c433f-cfa4-4688-a08e-5206b2a0cb52-mp4_720p.mp4', '', '2023-01-17 10:32:39', NULL, 'video-file', NULL, NULL, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `section_id` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `courseid` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `section_id`, `title`, `courseid`, `order`) VALUES
(1, '52d1c4578033857c90c41cb37243aceb', 'Course Overview', '0e71ea956ecf4ff8714ed62d17414786', 0),
(5, '48151758023ee9c699fdf0e386ca5dcd', 'Angular Components', '0e71ea956ecf4ff8714ed62d17414786', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(11) NOT NULL,
  `subcatid` varchar(200) NOT NULL,
  `parentid` varchar(200) NOT NULL,
  `subcategory` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `subcatid`, `parentid`, `subcategory`, `slug`, `is_active`, `created_at`, `updated_at`) VALUES
(1, '5cdf4f253a4673a76f0e014bdd1ffe0a', 'e3c091901e1a549a9c7e099a93e06c8c', 'Web development', 'web-development', 1, '2023-01-04 13:32:37', NULL),
(2, 'd483c8574ee578ba763ecbea17bf75a6', '3ffb41c3f487844db59a6466b6f3761e', 'Network & security', 'network-and-security', 1, '2023-01-04 13:38:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `role` varchar(20) NOT NULL,
  `avatar` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `code` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userid`, `firstname`, `lastname`, `email`, `password`, `phone`, `role`, `avatar`, `created_at`, `updated_at`, `code`, `active`) VALUES
(1, 'a7cfb35c40eceb8998d6264f480f9ab0', 'Admin', 'Admin', 'lerasto40@gmail.com', '$2y$10$xxkWGyiOxlKTeAU31.fCsuFr2HJuLYrsYCZx6GPfikfstmSNKQXLm', '0788022340', 'admin', NULL, '2023-01-04 09:15:35', '0000-00-00 00:00:00', 'Ct5LyP9h72bO', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `disabled` (`disabled`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`lang_id`),
  ADD KEY `disabled` (`disabled`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `lang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
