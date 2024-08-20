-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2024 at 01:54 AM
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
-- Database: `kine_moe_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `action` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `user_id`, `action`, `created_at`, `updated_at`) VALUES
(3, 31, 'Created Discussion', '2024-06-23 07:30:19', '2024-06-23 07:30:19'),
(4, 31, 'Created Discussion', '2024-06-23 07:30:33', '2024-06-23 07:30:33'),
(5, 60, 'Created Discussion', '2024-06-23 07:32:29', '2024-06-23 07:32:29'),
(6, 60, 'Created Discussion', '2024-06-23 07:34:18', '2024-06-23 07:34:18'),
(7, 60, 'Commented on Consequatur et iure.Discussin', '2024-06-23 07:41:56', '2024-06-23 07:41:56'),
(8, 60, 'Commented on Consequatur et iure. discussion.', '2024-06-23 07:45:36', '2024-06-23 07:45:36'),
(9, 60, 'Commented on Consequatur et iure. discussion.', '2024-06-23 07:45:38', '2024-06-23 07:45:38'),
(10, 60, 'Commented on Consequatur et iure. discussion.', '2024-06-23 07:46:07', '2024-06-23 07:46:07'),
(11, 60, 'Commented on Consequatur et iure. discussion.', '2024-06-23 07:47:16', '2024-06-23 07:47:16'),
(12, 60, 'Commented on Consequatur et iure. discussion.', '2024-06-23 07:47:26', '2024-06-23 07:47:26'),
(13, 60, 'Deleted comment on Consequatur et iure. discussion.', '2024-06-23 07:47:27', '2024-06-23 07:47:27'),
(14, 31, 'Commented on Consequatur et iure. discussion.', '2024-06-23 07:48:54', '2024-06-23 07:48:54'),
(15, 31, 'Deleted comment on Consequatur et iure. discussion.', '2024-06-23 07:48:55', '2024-06-23 07:48:55'),
(16, 31, 'Commented on Consequatur et iure. discussion.', '2024-06-23 07:49:12', '2024-06-23 07:49:12'),
(17, 31, 'Commented on Consequatur et iure. discussion.', '2024-06-23 07:49:14', '2024-06-23 07:49:14'),
(18, 31, 'Commented on Consequatur et iure. discussion.', '2024-06-23 07:49:15', '2024-06-23 07:49:15'),
(19, 31, 'Deleted comment on Consequatur et iure. discussion.', '2024-06-23 07:49:16', '2024-06-23 07:49:16'),
(20, 31, 'Deleted comment on Consequatur et iure. discussion.', '2024-06-23 07:49:23', '2024-06-23 07:49:23'),
(21, 31, 'Commented on Consequatur et iure. discussion.', '2024-06-23 07:49:28', '2024-06-23 07:49:28'),
(22, 31, 'Commented on Consequatur et iure. discussion.', '2024-06-23 07:49:30', '2024-06-23 07:49:30'),
(23, 31, 'Commented on Consequatur et iure. discussion.', '2024-06-23 07:49:32', '2024-06-23 07:49:32'),
(24, 31, 'Deleted comment on Consequatur et iure. discussion.', '2024-06-23 07:49:35', '2024-06-23 07:49:35'),
(25, 31, 'Deleted comment on Consequatur et iure. discussion.', '2024-06-23 07:49:42', '2024-06-23 07:49:42'),
(26, 31, 'Deleted comment on Consequatur et iure. discussion.', '2024-06-23 07:49:46', '2024-06-23 07:49:46'),
(27, 31, 'Updated his Profile Infos.', '2024-06-23 07:51:32', '2024-06-23 07:51:32'),
(28, 49, 'User has been Suspended.', '2024-06-23 07:53:22', '2024-06-23 07:53:22'),
(29, 31, 'User suspension has been lifted.', '2024-06-23 07:53:56', '2024-06-23 07:53:56'),
(30, 31, 'User has logged in.', '2024-06-23 08:02:34', '2024-06-23 08:02:34'),
(31, 60, 'User has logged in.', '2024-06-23 08:02:52', '2024-06-23 08:02:52'),
(32, 60, 'Commented on Consequatur et iure. discussion.', '2024-06-23 08:16:09', '2024-06-23 08:16:09'),
(33, 60, 'Commented on Consequatur et iure. discussion.', '2024-06-23 08:42:00', '2024-06-23 08:42:00'),
(34, 60, 'Deleted comment on Consequatur et iure. discussion.', '2024-06-23 08:59:52', '2024-06-23 08:59:52'),
(35, 60, 'Commented on Consequatur et iure. discussion.', '2024-06-23 08:59:56', '2024-06-23 08:59:56'),
(36, 60, 'Reported commen asdasdasd', '2024-06-23 09:34:37', '2024-06-23 09:34:37'),
(37, 60, 'Commented on Consequatur et iure. discussion.', '2024-06-23 09:34:59', '2024-06-23 09:34:59'),
(38, 60, 'Reported commen New Comment', '2024-06-23 09:35:03', '2024-06-23 09:35:03'),
(39, 60, 'Reported commen \"asdasdasd\"', '2024-06-23 09:36:04', '2024-06-23 09:36:04'),
(40, 60, 'Deleted comment on Consequatur et iure. discussion.', '2024-06-23 09:36:45', '2024-06-23 09:36:45'),
(41, 60, 'Commented on Consequatur et iure. discussion.', '2024-06-23 09:36:53', '2024-06-23 09:36:53'),
(42, 60, 'Commented on Consequatur et iure. discussion.', '2024-06-23 09:36:54', '2024-06-23 09:36:54'),
(43, 60, 'Commented on Consequatur et iure. discussion.', '2024-06-23 09:36:56', '2024-06-23 09:36:56'),
(44, 60, 'Deleted comment on Consequatur et iure. discussion.', '2024-06-23 09:36:56', '2024-06-23 09:36:56'),
(45, 60, 'Deleted comment on Consequatur et iure. discussion.', '2024-06-23 09:37:00', '2024-06-23 09:37:00'),
(46, 60, 'Commented on Consequatur et iure. discussion.', '2024-06-23 09:38:06', '2024-06-23 09:38:06'),
(47, 60, 'Commented on Consequatur et iure. discussion.', '2024-06-23 09:38:08', '2024-06-23 09:38:08'),
(48, 60, 'Deleted comment on Consequatur et iure. discussion.', '2024-06-23 09:38:09', '2024-06-23 09:38:09'),
(49, 60, 'Commented on Consequatur et iure. discussion.', '2024-06-23 09:38:11', '2024-06-23 09:38:11'),
(50, 60, 'Deleted comment on Consequatur et iure. discussion.', '2024-06-23 09:38:11', '2024-06-23 09:38:11'),
(51, 60, 'Commented on Consequatur et iure. discussion.', '2024-06-23 09:39:53', '2024-06-23 09:39:53'),
(52, 60, 'Reported commen \"asdasdas\"', '2024-06-23 09:39:55', '2024-06-23 09:39:55'),
(53, 60, 'Deleted comment on Consequatur et iure. discussion.', '2024-06-23 09:40:10', '2024-06-23 09:40:10'),
(54, 60, 'Commented on Consequatur et iure. discussion.', '2024-06-23 09:43:13', '2024-06-23 09:43:13'),
(55, 60, 'Reported commen \"asdasdsa\"', '2024-06-23 09:43:17', '2024-06-23 09:43:17'),
(56, 60, 'Commented on Consequatur et iure. discussion.', '2024-06-23 09:52:22', '2024-06-23 09:52:22'),
(57, 60, 'Reported commen \"Majkata shajkata\"', '2024-06-23 09:52:24', '2024-06-23 09:52:24'),
(58, 60, 'Deleted comment with id: 31', '2024-06-23 10:05:41', '2024-06-23 10:05:41'),
(59, 60, 'Commented on Consequatur et iure. discussion.', '2024-06-23 10:08:04', '2024-06-23 10:08:04'),
(60, 60, 'Reported commen \"Majkata\"', '2024-06-23 10:08:06', '2024-06-23 10:08:06'),
(61, 60, 'User has been Suspended.', '2024-06-23 10:08:12', '2024-06-23 10:08:12'),
(63, 60, 'Commented on Consequatur et iure. discussion.', '2024-06-23 10:14:11', '2024-06-23 10:14:11'),
(64, 60, 'Reported commen \"asdasdassad\"', '2024-06-23 10:14:13', '2024-06-23 10:14:13'),
(65, 60, 'Reported commen \"asdasdassad\"', '2024-06-23 10:14:13', '2024-06-23 10:14:13'),
(66, 60, 'Reported commen \"asdasdassad\"', '2024-06-23 10:14:13', '2024-06-23 10:14:13'),
(67, 60, 'Reported commen \"asdasdassad\"', '2024-06-23 10:14:31', '2024-06-23 10:14:31'),
(68, 60, 'Deleted comment with id Consequatur et iure. discussion.', '2024-06-23 10:17:21', '2024-06-23 10:17:21'),
(69, 60, 'Deleted comment with id Consequatur et iure. discussion.', '2024-06-23 10:17:27', '2024-06-23 10:17:27'),
(70, 60, 'Commented on Consequatur et iure. discussion.', '2024-06-23 10:18:01', '2024-06-23 10:18:01'),
(71, 60, 'Reported commen \"asdasdasd\"', '2024-06-23 10:18:06', '2024-06-23 10:18:06'),
(72, 60, 'Deleted comment with id Consequatur et iure. discussion.', '2024-06-23 10:18:11', '2024-06-23 10:18:11'),
(73, 31, 'User has logged in.', '2024-06-23 13:56:19', '2024-06-23 13:56:19'),
(74, 31, 'Commented on Consequatur et iure. discussion.', '2024-06-23 14:35:13', '2024-06-23 14:35:13'),
(75, 31, 'Reported commen \"Pickata majata\"', '2024-06-23 14:35:15', '2024-06-23 14:35:15'),
(76, 31, 'User has been Suspended.', '2024-06-23 14:35:27', '2024-06-23 14:35:27'),
(77, 31, 'User has logged in.', '2024-06-23 19:31:05', '2024-06-23 19:31:05'),
(78, 31, 'User has logged in.', '2024-06-24 14:10:09', '2024-06-24 14:10:09'),
(79, 31, 'User has logged in.', '2024-06-24 18:16:56', '2024-06-24 18:16:56'),
(80, 31, 'Deleted comment with id Consequatur et iure. discussion.', '2024-06-24 18:17:03', '2024-06-24 18:17:03'),
(81, 31, 'User suspension has been lifted.', '2024-06-24 18:17:20', '2024-06-24 18:17:20'),
(82, 36, 'User suspension has been lifted.', '2024-06-24 18:44:35', '2024-06-24 18:44:35'),
(83, 33, 'User has been Suspended.', '2024-06-24 18:44:39', '2024-06-24 18:44:39'),
(84, 33, 'User has been Suspended.', '2024-06-24 18:44:45', '2024-06-24 18:44:45'),
(85, 57, 'User has been Suspended.', '2024-06-24 18:44:53', '2024-06-24 18:44:53'),
(87, 53, 'User has been Suspended.', '2024-06-24 18:45:13', '2024-06-24 18:45:13'),
(88, 53, 'User has been Suspended.', '2024-06-24 18:45:20', '2024-06-24 18:45:20'),
(89, 54, 'User has been Suspended.', '2024-06-24 18:45:24', '2024-06-24 18:45:24'),
(91, 33, 'User suspension has been lifted.', '2024-06-24 18:45:29', '2024-06-24 18:45:29'),
(94, 31, 'User has been Suspended.', '2024-06-24 18:47:30', '2024-06-24 18:47:30'),
(95, 31, 'Commented on Consequatur et iure. discussion.', '2024-06-24 19:13:54', '2024-06-24 19:13:54'),
(96, 31, 'Reported commen \"My first Comment\"', '2024-06-24 19:13:56', '2024-06-24 19:13:56'),
(97, 31, 'Deleted comment with id Consequatur et iure. discussion.', '2024-06-24 19:14:07', '2024-06-24 19:14:07'),
(98, 31, 'Updated his Profile Infos.', '2024-06-24 19:17:52', '2024-06-24 19:17:52'),
(99, 31, 'Updated his Profile Infos.', '2024-06-24 19:17:57', '2024-06-24 19:17:57'),
(100, 31, 'Updated his Profile Infos.', '2024-06-24 19:19:48', '2024-06-24 19:19:48'),
(101, 31, 'Updated his Profile Infos.', '2024-06-24 19:19:59', '2024-06-24 19:19:59'),
(102, 31, 'Updated his Profile Infos.', '2024-06-24 19:20:01', '2024-06-24 19:20:01'),
(103, 31, 'Updated his Profile Infos.', '2024-06-24 19:20:03', '2024-06-24 19:20:03'),
(104, 31, 'Updated his Profile Infos.', '2024-06-24 19:20:09', '2024-06-24 19:20:09'),
(105, 31, 'Updated his Profile Infos.', '2024-06-24 19:20:12', '2024-06-24 19:20:12'),
(106, 31, 'Updated his Profile Infos.', '2024-06-24 19:20:16', '2024-06-24 19:20:16'),
(107, 31, 'Updated his Profile Infos.', '2024-06-24 19:20:19', '2024-06-24 19:20:19'),
(108, 31, 'Updated his Profile Infos.', '2024-06-24 19:20:35', '2024-06-24 19:20:35'),
(109, 31, 'Updated his Profile Infos.', '2024-06-24 19:20:38', '2024-06-24 19:20:38'),
(110, 31, 'Updated his Profile Infos.', '2024-06-24 19:20:53', '2024-06-24 19:20:53'),
(111, 31, 'Updated his Profile Infos.', '2024-06-24 19:21:03', '2024-06-24 19:21:03');

-- --------------------------------------------------------

--
-- Table structure for table `badges`
--

CREATE TABLE `badges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `badges`
--

INSERT INTO `badges` (`id`, `title`) VALUES
(1, 'Verified'),
(2, 'Badge 1'),
(3, 'Badge 2'),
(4, 'Badge 3');

-- --------------------------------------------------------

--
-- Table structure for table `badges_users`
--

CREATE TABLE `badges_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `badge_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `badges_users`
--

INSERT INTO `badges_users` (`id`, `user_id`, `badge_id`, `created_at`, `updated_at`) VALUES
(51, 33, 1, '2024-06-22 14:45:41', '2024-06-22 14:45:41'),
(52, 33, 2, '2024-06-22 14:45:42', '2024-06-22 14:45:42'),
(53, 33, 3, '2024-06-22 14:45:43', '2024-06-22 14:45:43'),
(54, 33, 4, '2024-06-22 14:45:44', '2024-06-22 14:45:44'),
(55, 35, 1, '2024-06-22 14:45:54', '2024-06-22 14:45:54'),
(56, 35, 2, '2024-06-22 14:45:55', '2024-06-22 14:45:55'),
(57, 35, 3, '2024-06-22 14:45:56', '2024-06-22 14:45:56'),
(76, 34, 1, '2024-06-22 15:07:21', '2024-06-22 15:07:21');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`) VALUES
(1, 'Drama'),
(2, 'Horror'),
(3, 'Comedy'),
(4, 'Action'),
(5, 'Romance'),
(6, 'Thriller'),
(7, 'Science Fiction'),
(8, 'Adventure'),
(9, 'Fantasy'),
(10, 'Mystery'),
(11, 'Crime'),
(12, 'Animation'),
(13, 'Family'),
(14, 'Documentary'),
(15, 'Biography'),
(16, 'History'),
(17, 'War'),
(18, 'Music'),
(19, 'Sport'),
(20, 'Western');

-- --------------------------------------------------------

--
-- Table structure for table `category_content`
--

CREATE TABLE `category_content` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `content_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_content`
--

INSERT INTO `category_content` (`id`, `category_id`, `content_id`) VALUES
(777, 5, 197),
(778, 11, 197),
(779, 4, 197),
(780, 16, 197),
(781, 20, 198),
(782, 1, 198),
(783, 5, 199),
(784, 2, 199),
(785, 1, 199),
(786, 11, 199),
(787, 7, 200),
(788, 18, 200),
(789, 17, 200),
(790, 5, 201),
(791, 19, 201),
(792, 8, 201),
(793, 17, 201),
(794, 15, 202),
(795, 19, 202),
(796, 13, 202),
(797, 9, 202),
(798, 12, 203),
(799, 20, 203),
(800, 4, 203),
(801, 15, 203),
(802, 9, 204),
(803, 5, 204),
(804, 10, 204),
(805, 3, 205),
(806, 12, 205),
(807, 6, 205),
(808, 18, 205),
(809, 6, 206),
(810, 10, 206),
(811, 3, 206),
(812, 4, 206),
(813, 13, 207),
(814, 19, 207),
(815, 20, 207),
(816, 4, 207),
(817, 20, 208),
(818, 16, 208),
(819, 4, 209),
(820, 17, 209),
(821, 8, 209),
(822, 11, 209),
(823, 10, 210),
(824, 4, 210),
(825, 11, 210),
(826, 3, 210),
(827, 15, 211),
(828, 6, 211),
(829, 12, 211),
(830, 1, 212),
(831, 18, 212),
(832, 13, 212),
(841, 3, 213),
(842, 1, 213),
(843, 15, 213),
(844, 4, 214),
(845, 1, 214),
(846, 10, 215),
(847, 1, 215),
(848, 3, 216),
(849, 14, 216),
(850, 6, 217),
(851, 13, 217),
(852, 5, 217),
(853, 20, 217),
(854, 16, 218),
(855, 1, 218),
(856, 3, 218),
(857, 13, 218),
(858, 9, 219),
(859, 3, 219),
(860, 1, 219),
(865, 16, 221),
(866, 13, 221),
(867, 3, 221),
(868, 17, 221),
(869, 3, 222),
(870, 1, 222),
(871, 6, 222),
(872, 13, 222),
(873, 11, 223),
(874, 6, 223),
(875, 3, 223),
(876, 8, 224),
(877, 2, 224),
(878, 10, 224),
(879, 3, 225),
(880, 9, 225),
(881, 7, 226),
(882, 19, 226),
(883, 1, 226),
(884, 2, 227),
(885, 16, 227),
(886, 11, 227),
(887, 6, 228),
(888, 5, 228),
(891, 12, 230),
(892, 11, 230),
(893, 13, 230),
(894, 15, 230),
(895, 4, 231),
(896, 11, 231),
(897, 10, 231),
(898, 20, 232),
(899, 16, 232),
(900, 6, 232),
(901, 19, 233),
(902, 20, 233),
(903, 16, 234),
(904, 2, 234),
(905, 18, 235),
(906, 1, 235),
(907, 9, 236),
(908, 2, 236),
(909, 4, 236),
(910, 5, 237),
(911, 9, 237),
(912, 18, 237),
(913, 17, 238),
(914, 16, 238),
(915, 1, 238),
(916, 15, 239),
(917, 9, 239),
(918, 8, 239),
(919, 17, 240),
(920, 16, 240),
(921, 15, 240),
(922, 11, 240),
(923, 10, 241),
(924, 13, 241),
(925, 9, 241),
(926, 6, 242),
(927, 17, 242),
(928, 10, 243),
(929, 16, 243),
(930, 2, 244),
(931, 11, 244),
(932, 7, 244),
(933, 6, 245),
(934, 19, 245),
(935, 16, 246),
(936, 13, 246),
(937, 8, 246),
(938, 5, 247),
(939, 15, 247),
(940, 9, 248),
(941, 3, 248),
(942, 14, 248),
(943, 5, 249),
(944, 9, 249),
(945, 2, 249),
(946, 16, 250),
(947, 17, 250),
(948, 13, 250),
(949, 13, 251),
(950, 5, 251),
(951, 18, 251),
(952, 9, 252),
(953, 6, 252),
(954, 19, 252),
(955, 3, 252),
(975, 1, 266),
(976, 2, 266),
(977, 1, 267),
(978, 2, 267),
(979, 5, 196),
(980, 14, 196),
(981, 1, 268),
(982, 2, 268),
(983, 1, 269),
(984, 2, 269),
(989, 1, 272),
(990, 1, 273),
(991, 2, 273),
(992, 1, 274),
(993, 1, 275),
(994, 2, 275),
(995, 1, 276),
(996, 2, 276),
(997, 1, 277),
(998, 2, 277),
(999, 1, 279);

-- --------------------------------------------------------

--
-- Table structure for table `category_user`
--

CREATE TABLE `category_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_user`
--

INSERT INTO `category_user` (`id`, `category_id`, `user_id`) VALUES
(60, 18, 33),
(61, 5, 33),
(67, 5, 36),
(68, 18, 36),
(69, 1, 36),
(84, 7, 43),
(85, 18, 43),
(87, 1, 45),
(88, 15, 45),
(89, 8, 45),
(95, 11, 34),
(96, 16, 34),
(97, 18, 34),
(98, 2, 47),
(99, 3, 47),
(100, 3, 48),
(113, 7, 49),
(115, 13, 51),
(116, 10, 51),
(117, 5, 52),
(118, 14, 52),
(119, 15, 52),
(120, 7, 53),
(121, 9, 53),
(122, 16, 53),
(123, 16, 54),
(124, 8, 55),
(125, 3, 56),
(126, 1, 56),
(127, 20, 57),
(128, 7, 57),
(129, 4, 57),
(130, 12, 58),
(131, 6, 58),
(132, 18, 58),
(134, 9, 35),
(135, 16, 35),
(150, 2, 60),
(151, 3, 60),
(177, 20, 44),
(194, 4, 31),
(195, 5, 31),
(196, 6, 31),
(197, 7, 31);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `content_id` bigint(20) UNSIGNED NOT NULL,
  `discussion_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment_reports`
--

CREATE TABLE `comment_reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(255) NOT NULL,
  `report_owner` bigint(20) UNSIGNED NOT NULL,
  `comment_owner` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `content_link` text NOT NULL,
  `release_date` date NOT NULL,
  `content_type` bigint(20) UNSIGNED NOT NULL,
  `photo_url` text DEFAULT NULL,
  `released` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `title`, `description`, `content_link`, `release_date`, `content_type`, `photo_url`, `released`) VALUES
(196, 'Ghostbusterss', 'Suddenly she came upon a low curtain she had plenty of time as she did not quite know what they\'re about!\' \'Read them,\' said the March Hare went on. \'I do,\' Alice hastily replied; \'only one doesn\'t like changing so often, of course you know what a long way back, and barking hoarsely all the players, except the King, rubbing his hands; \'so now let the jury--\' \'If any one of the Lobster Quadrille, that she looked down into its face was quite a new idea to Alice, and she had never had to ask them what the flame of a book,\' thought Alice to herself, \'to be going messages for a minute, while Alice thought over all the unjust things--\' when his eye chanced to fall a long tail, certainly,\' said Alice, always ready to make out who I WAS when I learn music.\' \'Ah! that accounts for it,\' said Alice desperately: \'he\'s perfectly idiotic!\' And she began again. \'I wonder if I chose,\' the Duchess sang the.', 'http://example.com/sample-movie', '2024-06-19', 1, 'https://picsum.photos/200/300?random=1', 0),
(197, 'The Neon Demon', 'I\'m sure _I_ shan\'t be able! I shall have some fun now!\' thought Alice. \'I\'ve read that in about half no time! Take your choice!\' The Duchess took no notice of her voice, and see after some executions I have dropped them, I wonder?\' As she said to the Queen, who was trembling down to her ear, and whispered \'She\'s under sentence of execution.\' \'What for?\' said Alice. \'Come on, then,\' said Alice, \'a great girl like you,\' (she might well say that \"I see what was on the shingle--will you come to the Gryphon. \'I\'ve forgotten the little magic bottle had now had its full effect, and she jumped up on to her in an undertone to the jury, and the other end of the birds hurried off to trouble myself about you: you must manage the best thing to eat or drink something or.', 'http://example.com/sample-movie', '2024-06-19', 1, 'https://picsum.photos/200/300?random=2', 0),
(198, 'A Clockwork Orange', 'At last the Caterpillar called after her. \'I\'ve something important to say!\' This sounded promising, certainly: Alice turned and came back again. \'Keep your temper,\' said the Footman. \'That\'s the most confusing thing I ask! It\'s always six o\'clock now.\' A bright idea came into her eyes; and once she remembered that she was peering.', 'http://example.com/sample-movie', '2024-06-19', 1, 'https://picsum.photos/200/300?random=3', 0),
(199, 'Braveheart', 'Queen, but she remembered the number of executions the Queen said to herself, for this time the Queen was to eat her up in her life before, and he wasn\'t going to dive in among the bright eager eyes were getting so thin--and the twinkling of the creature, but on second thoughts she decided to remain where she was, and waited. When the sands are all dry, he is gay as a last resource, she put it. She felt that she began again: \'Ou est ma chatte?\' which was a good deal to ME,\' said Alice to herself. Imagine her surprise, when the Rabbit hastily interrupted. \'There\'s a great deal too far off to trouble myself about you: you must manage the best thing to nurse--and she\'s such a thing. After a minute or two to think to herself, \'the way all the time they.', 'http://example.com/sample-movie', '2024-06-19', 1, 'https://picsum.photos/200/300?random=4', 0),
(200, 'Inception', 'His voice has a timid and tremulous sound.] \'That\'s different from what I get\" is the same thing a bit!\' said the King, with an important air, \'are you all ready? This is the same thing as \"I get what I like\"!\' \'You might just as she was about a foot high: then she had forgotten the words.\' So they sat down, and nobody spoke for some minutes. The Caterpillar and Alice was not an encouraging opening for a minute or two she stood watching them, and all her wonderful Adventures, till she too began dreaming after a minute or two, looking for them, and was immediately suppressed by the hand, it hurried off, without waiting for the first minute or two she stood still where she was, and waited. When the pie was all finished, the Owl, as a lark, And will talk in.', 'http://example.com/sample-movie', '2024-06-19', 1, 'https://picsum.photos/200/300?random=5', 0),
(201, 'Blade Runner', 'The Frog-Footman repeated, in the lock, and to hear the words:-- \'I speak severely to my jaw, Has lasted the rest waited in silence. At last the Mouse, frowning, but very glad to get her head in the distance, sitting sad and lonely on a bough of a muchness\"--did you ever see such a thing as a partner!\' cried the Gryphon. Alice did not seem to dry me at home! Why, I do it again and again.\' \'You.', 'http://example.com/sample-movie', '2024-06-19', 1, 'https://picsum.photos/200/300?random=6', 0),
(202, 'Black Swan', 'Why, there\'s hardly room to grow to my jaw, Has lasted the rest were quite silent, and looked at the end of your flamingo. Shall I try the effect: the next moment she felt very glad she had read about them in books, and she jumped up and to hear her try and say \"How doth the little door was shut again, and Alice heard the Rabbit came near her, she began, rather timidly, as she.', 'http://example.com/sample-movie', '2024-06-19', 1, 'https://picsum.photos/200/300?random=7', 0),
(203, 'A Beautiful Mind', 'I\'ve seen that done,\' thought Alice. \'I\'m glad I\'ve seen that done,\' thought Alice. \'I\'m glad I\'ve seen that done,\' thought Alice. \'I\'ve so often read in the same thing, you know.\' \'And what an ignorant little girl or a watch to take the place where it had lost something; and she.', 'http://example.com/sample-movie', '2024-06-19', 1, 'https://picsum.photos/200/300?random=8', 0),
(204, 'The Dark Knight', 'Wonderland of long ago: and how she would get up and picking the daisies, when suddenly a footman because he taught us,\' said the youth, \'and your jaws are too weak For anything tougher than suet; Yet you finished the guinea-pigs!\' thought Alice. \'I\'ve so often read in the other: he came trotting along in a low, timid voice, \'If you can\'t be civil, you\'d better ask HER about it.\' (The jury all wrote down all three dates on their backs was the first minute or two. \'They couldn\'t have done that?\' she thought. \'I must be Mabel after all, and I don\'t like them raw.\' \'Well, be off, and she felt sure it would be so easily offended, you know!\' The Mouse only shook its head impatiently, and walked a little sharp bark just over her head on her face brightened up at the righthand bit again, and said, \'It WAS a narrow escape!\' said Alice, seriously, \'I\'ll have nothing more to do it.\' (And.', 'http://example.com/sample-movie', '2024-06-19', 1, 'https://picsum.photos/200/300?random=9', 0),
(205, 'The Shining', 'The master was an old woman--but then--always to have lessons to learn! No, I\'ve made up my mind about it; and while she was coming back to the beginning of the lefthand bit of the words all coming different, and then at the moment, \'My dear! I shall fall right THROUGH the earth! How funny it\'ll seem, sending presents to one\'s own feet! And how odd the directions will look! ALICE\'S RIGHT FOOT, ESQ. HEARTHRUG, NEAR THE FENDER, (WITH ALICE\'S LOVE). Oh dear, what nonsense I\'m talking!\' Just then she walked off, leaving Alice alone with the edge with each hand. \'And now which is which?\' she said aloud. \'I shall do nothing of tumbling down stairs! How brave they\'ll all think me at all.\' \'In that case,\' said the Hatter, \'I cut some more bread-and-butter--\' \'But what happens when one eats cake, but Alice had begun to dream that she hardly knew what she was small.', 'http://example.com/sample-movie', '2024-06-19', 1, 'https://picsum.photos/200/300?random=10', 0),
(206, 'Eternal Sunshine of the Spotless Mind', 'Bill! the master says you\'re to go from here?\' \'That depends a good opportunity for making her escape; so she went back for a rabbit! I suppose Dinah\'ll be sending me on messages next!\' And she began fancying the sort of idea that they couldn\'t see it?\' So she stood still where she was, and waited. When the sands are all dry, he is gay as a partner!\' cried the Mock Turtle, and said to herself, \'Now, what am I to get in?\' \'There might be hungry, in which the March Hare. \'Exactly so,\' said Alice. \'I\'m glad they\'ve begun asking riddles.--I believe I can guess that,\' she added in an offended tone. And she began looking at the Footman\'s head: it just grazed his nose, and broke off a head unless there was a real nose; also its eyes by this time). \'Don\'t grunt,\'.', 'http://example.com/sample-movie', '2024-06-19', 1, 'https://picsum.photos/200/300?random=11', 0),
(207, 'Braveheart', 'Bill!\' then the other, looking uneasily at the top of her little sister\'s dream. The long grass rustled at her feet as the March Hare said in a court of justice before, but she stopped hastily, for the moment he was gone, and, by the end of the house before she found herself at last she stretched her arms folded, frowning like a steam-engine when she.', 'http://example.com/sample-movie', '2024-06-19', 1, 'https://picsum.photos/200/300?random=12', 0),
(208, 'Ran', 'Then came a little ledge of rock, and, as a partner!\' cried the Gryphon, and the party sat silent for a long time together.\' \'Which is just the case with MINE,\' said the Pigeon; \'but if they do, why then they\'re a kind of sob, \'I\'ve tried every way, and nothing seems to grin, How neatly spread his claws, And welcome little fishes in With gently smiling jaws!\' \'I\'m sure those are not attending!\' said the Caterpillar seemed to be in a rather offended tone, \'was, that the poor little feet, I wonder what you\'re talking about,\' said Alice. \'That\'s very curious.\' \'It\'s all about as she could get to the game, the Queen in front of the window, she suddenly spread out her hand, watching the setting sun, and thinking of little animals and birds waiting outside. The poor little thing howled so, that Alice said.', 'http://example.com/sample-movie', '2024-06-19', 1, 'https://picsum.photos/200/300?random=13', 0),
(209, 'A Clockwork Orange', 'Ah, THAT\'S the great wonder is, that I\'m perfectly sure I don\'t remember where.\' \'Well, it must be Mabel after all, and I could let you out, you know.\' \'Who is this?\' She said this she looked back once or twice she had got its head impatiently, and walked off; the Dormouse fell asleep instantly, and neither of the bread-and-butter. Just at this corner--No, tie \'em together first--they don\'t reach half high enough yet--Oh! they\'ll do next! As for pulling me out of the moment he was in March.\' As she said to the shore, and then at the Mouse\'s tail; \'but why do you know about it, you know.\' \'And what an ignorant little girl or a watch to take out of the guinea-pigs cheered, and was surprised to find that the way down one side and then sat upon it.) \'I\'m glad they\'ve begun asking riddles.--I.', 'http://example.com/sample-movie', '2024-06-19', 1, 'https://picsum.photos/200/300?random=14', 0),
(210, 'American History X', 'March Hare. \'It was much pleasanter at home,\' thought poor Alice, that she hardly knew what she was coming to, but it did not quite sure whether it was quite pale (with passion, Alice thought), and it was empty: she did not at all know whether it would be like, but it said in a mournful tone, \'he won\'t do a thing before, and behind them a new kind of rule, \'and vinegar that makes the matter worse. You MUST have meant some mischief, or else you\'d have signed your name like an honest man.\' There was a dead silence. \'It\'s a friend of mine--a Cheshire Cat,\' said Alice: \'three inches is such a thing before, but she could have been ill.\'.', 'http://example.com/sample-movie', '2024-06-19', 1, 'https://picsum.photos/200/300?random=15', 0),
(211, 'Lawrence of Arabie', 'Alice. \'You must be,\' said the Queen, \'and he shall tell you what year it is?\' \'Of course they were\', said the Dodo suddenly called out in a hot tureen! Who for such dainties would not open any of them. However, on the song, \'I\'d have said to herself what such an extraordinary ways of living would be the best cat in the middle, wondering how she would get up and said, without even looking round. \'I\'ll fetch the executioner ran wildly up and ran till she had found her head in the distance would take the hint; but the three gardeners who were all crowded round her, about the reason of that?\' \'In my youth,\' Father William replied to his son, \'I feared it might belong to one of the mushroom, and raised herself to about two feet high, and her eyes immediately met those of a tree. \'Did you speak?\' \'Not I!\' he replied. \'We quarrelled last March--just before HE went mad, you.', 'http://example.com/sample-movie', '2024-06-19', 1, 'https://picsum.photos/200/300?random=16', 0),
(212, 'The Wolf of Wall Street', 'Edwin and Morcar, the earls of Mercia and Northumbria, declared for him: and even Stigand, the patriotic archbishop of Canterbury, found it made Alice quite jumped; but she knew the right height to be.\' \'It is wrong from beginning to feel very uneasy: to be seen--everything seemed to her full size by this very sudden change, but very.', 'http://example.com/sample-movie', '2024-06-19', 1, 'https://picsum.photos/200/300?random=17', 0),
(213, 'Euphoria', 'VERY remarkable in that; nor did Alice think it so VERY much out of sight, he said to Alice, she went slowly after it: \'I never heard before, \'Sure then I\'m here! Digging for apples, indeed!\' said the Duchess; \'and most of \'em do.\' \'I don\'t even know what they\'re like.\' \'I believe so,\' Alice replied in an offended tone, \'Hm! No accounting for tastes! Sing her \"Turtle Soup,\" will you, won\'t you join the dance?\"\' \'Thank you, it\'s a set of verses.\' \'Are they in the beautiful garden, among the party. Some of the what?\' said the.', 'http://example.com/sample-movie', '2024-06-28', 2, 'https://picsum.photos/200/300?random=18', 0),
(214, 'X-Files', 'Alice, \'and if it makes me grow large again, for this time she saw in my time, but never ONE with such a fall as this, I shall have some fun now!\' thought Alice. \'I\'ve read that in some book, but I grow up, I\'ll write one--but I\'m grown up now,\' she added in a day is very confusing.\' \'It isn\'t,\' said the Cat. \'I said pig,\' replied Alice; \'and I wish I had to ask the question?\' said the March Hare and his friends shared their never-ending meal, and the poor little Lizard, Bill, was in the pool as it was a dispute going on between the.', 'http://example.com/sample-movie', '2024-07-12', 2, 'https://picsum.photos/200/300?random=19', 0),
(215, 'Oz', 'The Cat\'s head with great emphasis, looking hard at Alice for protection. \'You shan\'t be beheaded!\' said Alice, who felt very lonely and low-spirited. In a little of it?\' said the Duchess. \'I make you grow shorter.\' \'One side will make you a couple?\' \'You are old,\' said the Cat. \'I\'d nearly forgotten that I\'ve got to go down the chimney!\' \'Oh! So Bill\'s got to the Classics master, though. He was looking up into the earth. Let me see: that would be like, but it was good manners for her to carry it further. So she stood looking at Alice for some time in.', 'http://example.com/sample-movie', '2024-07-16', 2, 'https://picsum.photos/200/300?random=20', 0),
(216, 'It\'s Always Sunny in Philadelphia', 'Hatter. \'I told you that.\' \'If I\'d been the whiting,\' said Alice, very earnestly. \'I\'ve had nothing yet,\' Alice replied in an impatient tone: \'explanations take such a curious feeling!\' said Alice; \'I might as well she might, what a delightful thing a bit!\' said the King, rubbing his hands.', 'http://example.com/sample-movie', '2024-07-21', 2, 'https://picsum.photos/200/300?random=21', 0),
(217, 'Louie', 'THEN--she found herself safe in a confused way, \'Prizes! Prizes!\' Alice had no reason to be sure, she had quite a long breath, and said \'That\'s very curious.\' \'It\'s all his fancy, that: they never executes nobody, you know. Come on!\' \'Everybody says \"come on!\" here,\' thought Alice, \'to speak to this mouse? Everything is so out-of-the-way down here, and I\'m I, and--oh dear, how puzzling it all came different!\' Alice replied thoughtfully. \'They have their tails fast in their proper places--ALL,\' he repeated with great curiosity, and this was his first speech. \'You should learn not to her, though, as they would die. \'The trial cannot proceed,\' said the Cat. \'Do you know the meaning of half those long words, and, what\'s more, I don\'t remember where.\' \'Well, it must be kind to them,\' thought Alice, and sighing. \'It IS a long hookah, and taking.', 'http://example.com/sample-movie', '2024-07-21', 2, 'https://picsum.photos/200/300?random=22', 0),
(218, 'Sneaky Pete', 'Father William replied to his son, \'I feared it might be some sense in your knocking,\' the Footman went on saying to her great disappointment it was too dark to see it trot away quietly into the sea, some children digging in the middle. Alice kept her waiting!\' Alice felt a violent blow underneath her chin: it had been. But her sister sat still just as she could for sneezing. There was nothing else to do, so Alice soon came to ME, and told me he was speaking, and this time the Mouse was bristling all over, and both creatures hid their faces in their proper places--ALL,\' he repeated with great curiosity, and this time she had been running half an hour or so there were TWO little shrieks, and more faintly came, carried on the English coast you find a thing,\' said the King, who had followed him into the sky. Twinkle, twinkle--\"\' Here the other end of.', 'http://example.com/sample-movie', '2024-07-04', 2, 'https://picsum.photos/200/300?random=23', 0),
(219, 'Chernobyl', 'THAT. Then again--\"BEFORE SHE HAD THIS FIT--\" you never had fits, my dear, and that makes people hot-tempered,\' she went out, but it just missed her. Alice caught the flamingo and brought it back, the fight was over, and both creatures hid their faces in their mouths--and they\'re all over crumbs.\' \'You\'re wrong about the whiting!\' \'Oh, as to bring tears into her face, with such sudden violence that Alice had got its head to feel very uneasy: to be two people. \'But it\'s no use in talking to him,\' the Mock Turtle: \'why, if a fish came to the shore. CHAPTER III. A Caucus-Race and a sad tale!\' said the King, and he went on talking: \'Dear, dear! How queer everything is to-day! And yesterday things went on muttering over the wig, (look at the cook, to see it quite plainly through the neighbouring pool--she could hear the Rabbit angrily. \'Here! Come and help me out of the cakes, and was a long silence after this, and Alice.', 'http://example.com/sample-movie', '2024-07-06', 2, 'https://picsum.photos/200/300?random=24', 0),
(221, 'The Gifted', 'And here poor Alice began telling them her adventures from the time he was gone, and, by the end of the Mock Turtle yet?\' \'No,\' said Alice. \'Off with her friend. When she got used to it as well look and see after some executions I have dropped them, I wonder?\' As she said to the beginning again?\' Alice ventured to say. \'What is his sorrow?\' she asked the Gryphon, \'she wants for to know when the race was over. However, when they met in the air: it puzzled her too much, so she sat still just as the whole she thought there was not a regular rule: you invented it just at first, the two sides of the.', 'http://example.com/sample-movie', '2024-06-23', 2, 'https://picsum.photos/200/300?random=26', 0),
(222, 'The Affair', 'Mock Turtle a little bit of the Queen say only yesterday you deserved to be beheaded!\' said Alice, a little bottle that stood near. The three soldiers wandered about for it, while the rest of it altogether; but after a pause: \'the reason is, that there\'s any one left alive!\' She was close behind it when she found she could not possibly reach it: she could not even get her head pressing against the door, staring stupidly up into the air. Even the Duchess said in a deep, hollow tone: \'sit down, both of you, and listen to her, though, as they used to do:-- \'How doth the little--\"\' and she had someone to listen to me! I\'LL soon make you grow taller, and the three gardeners, oblong and flat, with their hands and feet, to make SOME change in my own tears! That.', 'http://example.com/sample-movie', '2024-07-22', 2, 'https://picsum.photos/200/300?random=27', 0),
(223, 'Brooklyn Nine-Nine', 'And so it was labelled \'ORANGE MARMALADE\', but to get through was more than Alice could speak again. In a little ledge of rock, and, as the doubled-up soldiers were always getting up and down, and the sounds will take care of the e--e--evening, Beautiful, beautiful Soup!\' CHAPTER XI. Who Stole the Tarts? The King and the pattern on their faces, so that altogether, for the first question, you know.\' \'And what are they.', 'http://example.com/sample-movie', '2024-07-11', 2, 'https://picsum.photos/200/300?random=28', 0),
(224, 'Rick and Morty', 'She hastily put down yet, before the officer could get to twenty at that rate! However, the Multiplication Table doesn\'t signify: let\'s try the thing at all. However, \'jury-men\' would have appeared to them she heard the Rabbit actually TOOK A WATCH OUT OF ITS WAISTCOAT-POCKET, and looked at it, and found quite a long sleep you\'ve had!\' \'Oh, I\'ve had such a rule at processions; \'and besides, what would happen next. The first question of course you don\'t!\' the Hatter and the other side will make you dry.', 'http://example.com/sample-movie', '2024-06-26', 2, 'https://picsum.photos/200/300?random=29', 1),
(225, 'Futurama', 'King said, for about the same thing, you know.\' \'I don\'t even know what they\'re about!\' \'Read them,\' said the Hatter, \'I cut some more tea,\' the Hatter hurriedly left the court, by the Hatter, \'you wouldn\'t talk about wasting IT. It\'s HIM.\' \'I don\'t know much,\' said Alice, \'because I\'m not looking for it, you may stand down,\' continued the Hatter, \'you wouldn\'t talk about trouble!\' said the Cat remarked. \'Don\'t be impertinent,\' said the King, with an M--\' \'Why with an air of great relief. \'Call the first day,\' said the Cat. \'I said pig,\' replied Alice; \'and I wish I hadn\'t quite finished my tea when I sleep\" is the use of a candle is blown out.', 'http://example.com/sample-movie', '2024-07-14', 2, 'https://picsum.photos/200/300?random=30', 0),
(226, 'Arrested Development', 'Alice desperately: \'he\'s perfectly idiotic!\' And she began nursing her child again, singing a sort of people live about here?\' \'In THAT direction,\' the Cat said, waving its tail when it\'s pleased. Now I growl when I\'m angry. Therefore I\'m mad.\' \'I call it.', 'http://example.com/sample-movie', '2024-07-22', 2, 'https://picsum.photos/200/300?random=31', 0),
(227, 'Californication', 'The Hatter opened his eyes were getting so used to say to itself, \'Oh dear! Oh dear! I\'d nearly forgotten to ask.\' \'It turned into a chrysalis--you will some day, you know--and then after that into a conversation. Alice replied, rather shyly, \'I--I hardly know, sir, just at present--at least I mean what I say--that\'s the same size for ten minutes together!\' \'Can\'t remember WHAT things?\' said the Queen. \'Their heads are gone, if it please your Majesty!\' the Duchess and the Mock Turtle: \'crumbs would all wash off in the face. \'I\'ll put a white one in by mistake; and if it makes me grow smaller, I suppose.\' So she stood still where she was.', 'http://example.com/sample-movie', '2024-07-11', 2, 'https://picsum.photos/200/300?random=32', 0),
(228, 'How I Met Your Mother', 'I say,\' the Mock Turtle. \'Certainly not!\' said Alice in a louder tone. \'ARE you to get into that lovely garden. I think you\'d take a fancy to cats if you only walk long enough.\' Alice felt a little snappishly. \'You\'re enough to drive one crazy!\' The Footman seemed to her head, she tried the roots of trees, and I\'ve tried hedges,\' the Pigeon in a pleased tone. \'Pray don\'t trouble yourself to say to itself, \'Oh dear! Oh dear! I\'d nearly forgotten to ask.\' \'It turned into a chrysalis--you will some day, you know--and then.', 'http://example.com/sample-movie', '2024-07-04', 2, 'https://picsum.photos/200/300?random=33', 0),
(230, 'Vinyl', 'Alice could only hear whispers now and then the Mock Turtle, and to wonder what was the King; \'and don\'t be particular--Here, Bill! catch hold of its mouth, and addressed her in such long curly brown hair! And it\'ll fetch things when you have just been reading about; and when she was now more than nine feet high, and her face brightened up again.) \'Please your Majesty,\' he began, \'for bringing these in: but I THINK I can.', 'http://example.com/sample-movie', '2024-07-13', 2, 'https://picsum.photos/200/300?random=35', 0),
(231, 'Smallville', 'That your eye was as much as serpents do, you know.\' \'And what are YOUR shoes done with?\' said the Gryphon, and the whole head appeared, and then nodded. \'It\'s no business there, at any rate,\' said Alice: \'three inches is such a capital one for catching mice--oh, I beg your pardon!\' she exclaimed in a low, trembling voice. \'There\'s more evidence to come yet, please your Majesty,\' the Hatter said, turning to the part about her any more HERE.\' \'But then,\' thought she, \'what would become of it; and the pattern on their slates, and she thought at first was in livery: otherwise, judging by his garden.\"\' Alice did not like to see that queer little toss of her voice, and see that she had found the fan and the shrill voice of the Mock Turtle angrily: \'really you are painting those roses?\' Five and Seven said nothing, but looked at Alice, and she soon made out.', 'http://example.com/sample-movie', '2024-07-02', 2, 'https://picsum.photos/200/300?random=36', 0),
(232, 'Brooklyn Nine-Nine', 'Ma!\' said the Caterpillar contemptuously. \'Who are YOU?\' said the Mock Turtle repeated thoughtfully. \'I should like it put the Dormouse denied nothing, being fast asleep. \'After that,\' continued the Gryphon. \'The reason is,\' said the Caterpillar. Alice said to herself, and once she remembered how small she was nine feet high, and was going to be, from one end to the King, \'that saves a world of trouble, you know, this sort in her hands, wondering if anything would EVER happen in a sorrowful tone, \'I\'m afraid I am, sir,\' said Alice; \'I.', 'http://example.com/sample-movie', '2024-06-28', 2, 'https://picsum.photos/200/300?random=37', 0),
(233, 'Atque aliquam.', 'Imagine her surprise, when the White Rabbit cried out, \'Silence in the same words as before, \'and things are worse than ever,\' thought the poor little thing was snorting like a telescope.\' And so it was talking in his sleep, \'that \"I like what I see\"!\' \'You might just as I\'d taken the highest tree in front of them, and then she had peeped into the teapot. \'At any rate he might answer questions.--How am I to do?\' said Alice. \'It must have been that,\' said the Cat, \'a dog\'s not mad. You grant that?\' \'I suppose so,\' said the March Hare. Visit either you like: they\'re both mad.\' \'But I don\'t think,\' Alice went on eagerly. \'That\'s enough about lessons,\' the Gryphon went on. \'I do,\' Alice said to live. \'I\'ve seen a good deal frightened by this time, and was going on between the executioner, the King, the Queen, \'and he shall tell you my adventures--beginning from this side of the room. The cook threw a frying-pan after her as hard as he spoke, and the happy summer.', 'http://example.com/sample-movie', '2024-07-10', 3, 'https://picsum.photos/200/300?random=38', 0),
(234, 'Nesciunt voluptatum.', 'Mock Turtle repeated thoughtfully. \'I should like to show you! A little bright-eyed terrier, you know, and he went on talking: \'Dear, dear! How queer everything is to-day! And yesterday things went on again:-- \'You may go,\' said the Dormouse, who seemed to quiver all over with fright. \'Oh, I BEG your pardon!\' said the Mock Turtle, \'they--you\'ve seen them, of course?\' \'Yes,\' said Alice desperately: \'he\'s perfectly idiotic!\' And she thought to herself, \'it would be grand.', 'http://example.com/sample-movie', '2024-07-03', 3, 'https://picsum.photos/200/300?random=39', 0),
(235, 'Eveniet molestias.', 'Queen furiously, throwing an inkstand at the bottom of the trial.\' \'Stupid things!\' Alice thought this a very humble tone, going down on one of the wood--(she considered him to you, Though they were all turning into little cakes as they were all crowded together at one corner of it: for she felt very curious to see what I eat\" is the same thing,\' said the Cat, and vanished again. Alice waited till the puppy\'s bark sounded quite faint in the prisoner\'s handwriting?\' asked another of the baby, the shriek of the ground--and I should think very likely it can talk: at any rate,\' said Alice: \'she\'s so extremely--\' Just then she remembered trying to box her own.', 'http://example.com/sample-movie', '2024-07-02', 3, 'https://picsum.photos/200/300?random=40', 0),
(236, 'Placeat molestiae.', 'SOMETHING interesting is sure to happen,\' she said to herself, \'it would be quite as safe to stay with it as you say things are \"much of a large pigeon had flown into her face, and large eyes like a snout than a rat-hole: she knelt down and looked at the great concert given by the officers of the jurymen. \'No, they\'re not,\' said Alice sharply, for she felt unhappy. \'It was a little bottle that stood near the right size again; and the White Rabbit returning, splendidly dressed, with a bound into the jury-box, or they would call after her: the last concert!\' on which the March Hare, \'that \"I breathe when I learn music.\' \'Ah! that accounts for it,\' said the Rabbit came up to the door, she ran with all her knowledge of history, Alice had never been so much frightened that she could not think.', 'http://example.com/sample-movie', '2024-07-01', 3, 'https://picsum.photos/200/300?random=41', 0),
(237, 'Sint cum.', 'The twelve jurors were writing down \'stupid things!\' on their backs was the first sentence in her hands, wondering if anything would EVER happen in a tone of great relief. \'Call the next witness would be grand, certainly,\' said Alice, surprised at this, that she had never been so much contradicted in her pocket, and was going on, as she could, and waited till the eyes appeared, and then hurried on, Alice started to her ear, and whispered \'She\'s under sentence of execution.\' \'What for?\' said the Gryphon. Alice did not dare to laugh; and, as the large birds complained that they must be off, and found in it a little different. But if I\'m Mabel, I\'ll stay down here till I\'m somebody else\"--but, oh dear!\' cried Alice, quite forgetting in the middle of one! There ought to tell him. \'A nice.', 'http://example.com/sample-movie', '2024-07-02', 3, 'https://picsum.photos/200/300?random=42', 0),
(238, 'Saepe et.', 'Caterpillar seemed to be two people. \'But it\'s no use speaking to a mouse: she had not noticed before, and he went on just as she went on to her usual height. It was all finished, the Owl, as a last resource, she put one arm out of his shrill little voice, the name \'W. RABBIT\' engraved upon it. She felt very lonely and low-spirited. In a little queer, won\'t you?\' \'Not a bit,\' she thought it must be getting home; the night-air doesn\'t suit my throat!\' and a crash of broken glass, from which she had a bone in his note-book, cackled out \'Silence!\' and read.', 'http://example.com/sample-movie', '2024-07-14', 3, 'https://picsum.photos/200/300?random=43', 0),
(239, 'Et cumque suscipit.', 'Lobster; I heard him declare, \"You have baked me too brown, I must have been was not a VERY turn-up nose, much more like a wild beast, screamed \'Off with her head on her face brightened up at the stick, running a very fine day!\' said a timid and tremulous sound.] \'That\'s different from what I eat\" is the same side of the e--e--evening, Beautiful, beautiful Soup! \'Beautiful Soup! Who cares for fish, Game, or any other dish? Who would not join the dance? Will you, won\'t you, won\'t you, will you join the dance? Will you, won\'t you, will you, won\'t you, will you, old fellow?\' The Mock Turtle replied; \'and then the puppy began a series of short charges at the sides of the bottle was a long way back, and see after some executions I have to turn into a small passage, not much larger than a pig, my dear,\' said Alice, very much confused, \'I don\'t believe it,\' said Alice. \'Why, SHE,\' said the Hatter; \'so I should frighten them out again. The.', 'http://example.com/sample-movie', '2024-07-11', 3, 'https://picsum.photos/200/300?random=44', 0),
(240, 'Nemo dolores.', 'Alice. One of the court and got behind Alice as she could, and waited till she was up to her great delight it fitted! Alice opened the door that led into the wood. \'It\'s the Cheshire Cat: now I shall fall right THROUGH the earth! How funny it\'ll seem, sending presents to one\'s own feet! And how odd the directions will look! ALICE\'S RIGHT FOOT, ESQ. HEARTHRUG, NEAR THE FENDER, (WITH ALICE\'S LOVE). Oh dear, what nonsense I\'m talking!\' Just then she had been all the rest, Between yourself and me.\' \'That\'s the first verse,\' said the Lory. Alice replied in an offended tone. And the moral of that is--\"Birds of a bottle. They all made a memorandum of the party sat silent and looked along the course, here and there she saw them, they were nice grand words to say.) Presently she began thinking over all the same, shedding gallons of tears, \'I do wish they COULD! I\'m sure she\'s the best way to change the subject. \'Ten hours the first figure!\' said the King.', 'http://example.com/sample-movie', '2024-07-04', 3, 'https://picsum.photos/200/300?random=45', 0),
(241, 'Non rerum.', 'Duchess; \'I never said I didn\'t!\' interrupted Alice. \'You did,\' said the voice. \'Fetch me my gloves this moment!\' Then came a little bird as soon as there was enough of it had made. \'He took me for asking! No, it\'ll never do to hold it. As soon as she remembered how small she was going a journey, I should think it so yet,\' said Alice; \'you needn\'t be so kind,\' Alice replied, rather shyly, \'I--I hardly know, sir, just at first, perhaps,\' said the Dormouse: \'not in that poky little house, on the spot.\' This did not seem to dry me at all.\' \'In that case,\' said the King. \'Shan\'t,\' said the Mock Turtle replied, counting off the subjects on his flappers, \'--Mystery, ancient and modern, with Seaography: then Drawling--the Drawling-master was an old Turtle--we used to it as you might do something better with the time,\' she said, without even waiting to put down yet, before the trial\'s over!\'.', 'http://example.com/sample-movie', '2024-07-02', 3, 'https://picsum.photos/200/300?random=46', 0),
(242, 'Pariatur sapiente et.', 'Alice; \'only, as it\'s asleep, I suppose it were nine o\'clock in the house, and have next to no toys to play croquet with the Queen, the royal children, and everybody laughed, \'Let the jury wrote it down \'important,\' and some \'unimportant.\' Alice could hear him sighing as if he had to do THAT in a great letter, nearly as she swam nearer to make out which were the cook, and a great crash, as if he wasn\'t going to give the prizes?\' quite a large mushroom growing near her, she began, in a melancholy way, being quite unable to move. She soon got it out to sea as you might knock, and I shall have some fun now!\' thought Alice. \'I\'m a--I\'m a--\' \'Well! WHAT are you?\' And then a great hurry.', 'http://example.com/sample-movie', '2024-07-14', 3, 'https://picsum.photos/200/300?random=47', 0),
(243, 'Omnis ex.', 'Alice could think of nothing else to do, so Alice went timidly up to the jury. They were indeed a queer-looking party that assembled on the ground near the centre of the deepest contempt. \'I\'ve seen hatters before,\' she said this, she came up to the Queen. \'Never!\' said the Mock Turtle went on. \'We had the best plan.\' It sounded an.', 'http://example.com/sample-movie', '2024-07-19', 3, 'https://picsum.photos/200/300?random=48', 0),
(244, 'Quis accusamus maiores.', 'Duchess, \'as pigs have to ask any more HERE.\' \'But then,\' thought Alice, as she could, and soon found out that one of the wood--(she considered him to be lost: away went Alice like the largest telescope that ever was! Good-bye, feet!\' (for when she was holding, and she sat down and began bowing to the Gryphon. \'Of course,\' the Mock Turtle. \'And how many hours a day did you manage to do next, when suddenly a White Rabbit read out, at the moment, \'My dear! I shall have some fun now!\' thought Alice. \'I don\'t see how the Dodo suddenly called out in a moment. \'Let\'s go on with the glass table as before, \'and things are \"much of a water-well,\' said the.', 'http://example.com/sample-movie', '2024-07-04', 3, 'https://picsum.photos/200/300?random=49', 0),
(245, 'Incidunt et.', 'Alice. \'I\'ve read that in the grass, merely remarking that a moment\'s delay would cost them their lives. All the time at the top of his teacup and bread-and-butter, and went on: \'--that begins with an anxious look at a reasonable pace,\' said the Duchess, who seemed to be Number One,\' said Alice. \'Why not?\' said the Duchess, the Duchess! Oh! won\'t she be savage if I\'ve kept her waiting!\' Alice felt a little pattering of feet in a ring, and begged the Mouse was speaking, so that altogether, for the Dormouse,\' thought Alice; but she got up and rubbed its eyes: then it watched the White Rabbit put on her lap as if it began ordering people about like mad things all this grand procession, came THE KING AND QUEEN OF HEARTS. Alice was a little snappishly. \'You\'re enough to try the thing Mock Turtle sighed deeply, and began, in a sorrowful tone; \'at least there\'s no use.', 'http://example.com/sample-movie', '2024-07-07', 3, 'https://picsum.photos/200/300?random=50', 0),
(246, 'Rerum quam praesentium.', 'By this time with one of the tale was something like this:-- \'Fury said to herself \'That\'s quite enough--I hope I shan\'t grow any more--As it is, I can\'t get out of a well--\' \'What did they live at the moment, \'My dear! I shall have some fun now!\' thought Alice. \'I\'m glad they don\'t give birthday presents like that!\' By this time with one foot. \'Get up!\' said the Footman, and began staring at the bottom of a tree in the.', 'http://example.com/sample-movie', '2024-06-27', 3, 'https://picsum.photos/200/300?random=51', 0),
(247, 'Recusandae ullam.', 'It means much the most important piece of bread-and-butter in the middle of one! There ought to have lessons to learn! No, I\'ve made up my mind about it; if I\'m Mabel, I\'ll stay down here! It\'ll be no doubt that it signifies much,\' she said to herself, \'I wonder what they said. The executioner\'s argument was, that if something wasn\'t done about it in a pleased tone. \'Pray don\'t trouble yourself to say \'creatures,\' you see, so many tea-things are put out here?\' she asked. \'Yes, that\'s it,\' said the Mock Turtle, \'Drive on, old fellow! Don\'t be all day to such stuff? Be off, or I\'ll kick you down stairs!\' \'That is not said right,\' said the Duchess; \'and.', 'http://example.com/sample-movie', '2024-07-11', 3, 'https://picsum.photos/200/300?random=52', 0),
(248, 'Rerum omnis vel.', 'Alice an excellent plan, no doubt, and very angrily. \'A knot!\' said Alice, \'it\'s very interesting. I never knew whether it was over at last, and they all looked puzzled.) \'He must have been changed in the last words out loud, and the roof was thatched with fur. It was opened by another footman in livery came running out of the suppressed guinea-pigs, filled the air, mixed up with the end of the baby?\' said the Rabbit\'s voice along--\'Catch him, you by the carrier,\' she thought; \'and how funny it\'ll seem to see what the name of nearly everything there. \'That\'s the first to break the silence. \'What day of the month, and doesn\'t tell what o\'clock it is!\' \'Why should it?\' muttered the Hatter. Alice felt dreadfully puzzled. The Hatter\'s remark seemed to quiver all over with fright. \'Oh, I know!\' exclaimed Alice, who always took a minute or two, they began running when they saw Alice coming.', 'http://example.com/sample-movie', '2024-07-07', 3, 'https://picsum.photos/200/300?random=53', 0),
(249, 'Nam voluptas ut.', 'Alice did not like to try the whole party at once and put it right; \'not that it might be hungry, in which the cook had disappeared. \'Never mind!\' said the Duck. \'Found IT,\' the Mouse had changed his mind, and was in such a pleasant temper, and thought to herself, as she could do, lying down with wonder at the March.', 'http://example.com/sample-movie', '2024-07-07', 3, 'https://picsum.photos/200/300?random=54', 0),
(250, 'Et quod facere.', 'Dormouse,\' the Queen ordering off her unfortunate guests to execution--once more the pig-baby was sneezing on the look-out for serpents night and day! Why, I wouldn\'t say anything about it, even if I might venture to ask them what the name again!\' \'I won\'t have any pepper in my time, but never ONE with such a thing as \"I eat what I get\" is the capital of Paris, and Paris is the same when I sleep\" is the driest thing I ever.', 'http://example.com/sample-movie', '2024-06-25', 3, 'https://picsum.photos/200/300?random=55', 1),
(251, 'Doloribus in.', 'Alice, as she could. \'The game\'s going on between the executioner, the King, the Queen, \'Really, my dear, YOU must cross-examine THIS witness.\' \'Well, if I might venture to say \"HOW DOTH THE LITTLE BUSY BEE,\" but it was out of a water-well,\' said the Hatter. This piece of it in time,\' said the Footman, and began singing in its hurry to change the subject of conversation. While she was about a foot high: then she.', 'http://example.com/sample-movie', '2024-07-10', 3, 'https://picsum.photos/200/300?random=56', 0),
(252, 'Odit ducimus rerum.', 'Alice an excellent opportunity for showing off her knowledge, as there was nothing on it except a little glass box that was said, and went by without noticing her. Then followed the Knave was standing before them, in chains, with a soldier on each side to guard.', 'http://example.com/sample-movie', '2024-07-09', 3, 'https://picsum.photos/200/300?random=57', 0),
(266, 'Test Movie 1', 'asdasd', 'https://translate.google.com/?sl=mk&tl=en&op=translate', '2024-06-25', 2, 'https://picsum.photos/200/300?random=58', 1),
(267, 'teasdasd', 'asdasdas', 'https://chatgpt.com/c/761496c2-af9b-4703-9083-a98a5d26f6e1', '2024-06-21', 1, 'https://picsum.photos/200/300?random=59', 0),
(268, 'Relase TEST', 'asdasds', 'https://translate.google.com/?sl=mk&tl=en&op=translate', '2024-06-25', 2, NULL, 1),
(269, 'sadadasda', 'asdasdasd', 'https://translate.google.com/?sl=mk&tl=en&op=translate', '2024-06-25', 2, NULL, 1),
(272, 'Realse Series', 'asdasdasdasd', 'https://translate.google.com/?sl=mk&tl=en&op=translate', '2024-06-26', 2, NULL, 1),
(273, 'asdasdasdasdadasdasd', 'asdasd', 'https://translate.google.com/?sl=mk&tl=en&op=translate', '2024-06-26', 2, NULL, 1),
(274, 'asdasdddd', 'asdasda', 'https://translate.google.com/?sl=mk&tl=en&op=translate', '2024-06-25', 2, 'https://picsum.photos/200/300?random=59', 1),
(275, 'Realse Movie', 'asda', 'https://chatgpt.com/c/761496c2-af9b-4703-9083-a98a5d26f6e1', '2024-06-26', 1, NULL, 0),
(276, 'Realse Movie', 'asda', 'https://chatgpt.com/c/761496c2-af9b-4703-9083-a98a5d26f6e1', '2024-06-26', 1, NULL, 0),
(277, 'asdasdas', 'asdasd', 'https://chatgpt.com/c/761496c2-af9b-4703-9083-a98a5d26f6e1', '2024-06-26', 1, NULL, 0),
(278, 'test', 'asdad', 'https://github.com/mberecall/Multi-Step-Form-Using-Laravel-Livewire', '2024-06-26', 3, '3', 0),
(279, 'test', 'asdad', 'https://github.com/mberecall/Multi-Step-Form-Using-Laravel-Livewire', '2024-06-26', 3, '3', 0);

-- --------------------------------------------------------

--
-- Table structure for table `content_types`
--

CREATE TABLE `content_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `content_types`
--

INSERT INTO `content_types` (`id`, `title`) VALUES
(1, 'Movie'),
(2, 'Series'),
(3, 'Podcast');

-- --------------------------------------------------------

--
-- Table structure for table `content_workers_professions`
--

CREATE TABLE `content_workers_professions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content_id` bigint(20) UNSIGNED NOT NULL,
  `worker_id` bigint(20) UNSIGNED NOT NULL,
  `profession_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `content_workers_professions`
--

INSERT INTO `content_workers_professions` (`id`, `content_id`, `worker_id`, `profession_id`) VALUES
(2241, 197, 45, 21),
(2242, 197, 52, 21),
(2243, 197, 2, 22),
(2244, 197, 1, 22),
(2245, 197, 3, 22),
(2246, 197, 54, 23),
(2247, 197, 51, 24),
(2248, 197, 5, 25),
(2249, 197, 42, 26),
(2250, 197, 66, 27),
(2251, 197, 61, 27),
(2252, 197, 59, 27),
(2253, 198, 45, 21),
(2254, 198, 52, 21),
(2255, 198, 1, 22),
(2256, 198, 4, 22),
(2257, 198, 3, 22),
(2258, 198, 2, 22),
(2259, 198, 49, 23),
(2260, 198, 59, 24),
(2261, 198, 60, 25),
(2262, 198, 4, 26),
(2263, 198, 56, 27),
(2264, 198, 5, 27),
(2265, 199, 43, 21),
(2266, 199, 66, 21),
(2267, 199, 1, 22),
(2268, 199, 2, 22),
(2269, 199, 64, 23),
(2270, 199, 43, 24),
(2271, 199, 4, 25),
(2272, 199, 42, 26),
(2273, 199, 59, 27),
(2274, 199, 5, 27),
(2275, 200, 45, 21),
(2276, 200, 52, 21),
(2277, 200, 4, 22),
(2278, 200, 3, 22),
(2279, 200, 1, 22),
(2280, 200, 41, 23),
(2281, 200, 63, 24),
(2282, 200, 63, 25),
(2283, 200, 4, 26),
(2284, 200, 66, 27),
(2285, 200, 48, 27),
(2286, 200, 5, 27),
(2287, 201, 66, 21),
(2288, 201, 43, 21),
(2289, 201, 2, 22),
(2290, 201, 1, 22),
(2291, 201, 3, 22),
(2292, 201, 54, 23),
(2293, 201, 63, 24),
(2294, 201, 60, 25),
(2295, 201, 42, 26),
(2296, 201, 59, 27),
(2297, 201, 61, 27),
(2298, 201, 56, 27),
(2299, 202, 45, 21),
(2300, 202, 43, 21),
(2301, 202, 1, 22),
(2302, 202, 4, 22),
(2303, 202, 49, 23),
(2304, 202, 51, 24),
(2305, 202, 61, 25),
(2306, 202, 4, 26),
(2307, 202, 5, 27),
(2308, 202, 66, 27),
(2309, 202, 59, 27),
(2310, 203, 55, 21),
(2311, 203, 66, 21),
(2312, 203, 1, 22),
(2313, 203, 4, 22),
(2314, 203, 2, 23),
(2315, 203, 45, 24),
(2316, 203, 61, 25),
(2317, 203, 4, 26),
(2318, 203, 64, 27),
(2319, 203, 5, 27),
(2320, 203, 59, 27),
(2321, 203, 48, 27),
(2322, 204, 43, 21),
(2323, 204, 52, 21),
(2324, 204, 3, 22),
(2325, 204, 4, 22),
(2326, 204, 1, 22),
(2327, 204, 5, 23),
(2328, 204, 56, 24),
(2329, 204, 5, 25),
(2330, 204, 4, 26),
(2331, 204, 59, 27),
(2332, 204, 56, 27),
(2333, 204, 48, 27),
(2334, 204, 64, 27),
(2335, 205, 52, 21),
(2336, 205, 43, 21),
(2337, 205, 3, 22),
(2338, 205, 4, 22),
(2339, 205, 1, 22),
(2340, 205, 58, 23),
(2341, 205, 63, 24),
(2342, 205, 5, 25),
(2343, 205, 42, 26),
(2344, 205, 59, 27),
(2345, 205, 64, 27),
(2346, 205, 61, 27),
(2347, 206, 45, 21),
(2348, 206, 43, 21),
(2349, 206, 2, 22),
(2350, 206, 1, 22),
(2351, 206, 3, 22),
(2352, 206, 4, 22),
(2353, 206, 41, 23),
(2354, 206, 60, 24),
(2355, 206, 53, 25),
(2356, 206, 42, 26),
(2357, 206, 61, 27),
(2358, 206, 56, 27),
(2359, 206, 5, 27),
(2360, 206, 48, 27),
(2361, 207, 55, 21),
(2362, 207, 45, 21),
(2363, 207, 3, 22),
(2364, 207, 1, 22),
(2365, 207, 2, 22),
(2366, 207, 4, 22),
(2367, 207, 41, 23),
(2368, 207, 4, 24),
(2369, 207, 63, 25),
(2370, 207, 42, 26),
(2371, 207, 48, 27),
(2372, 207, 61, 27),
(2373, 208, 43, 21),
(2374, 208, 45, 21),
(2375, 208, 1, 22),
(2376, 208, 2, 22),
(2377, 208, 2, 23),
(2378, 208, 56, 24),
(2379, 208, 62, 25),
(2380, 208, 42, 26),
(2381, 208, 5, 27),
(2382, 208, 56, 27),
(2383, 209, 52, 21),
(2384, 209, 45, 21),
(2385, 209, 1, 22),
(2386, 209, 3, 22),
(2387, 209, 64, 23),
(2388, 209, 4, 24),
(2389, 209, 4, 25),
(2390, 209, 42, 26),
(2391, 209, 5, 27),
(2392, 209, 64, 27),
(2393, 210, 45, 21),
(2394, 210, 52, 21),
(2395, 210, 3, 22),
(2396, 210, 4, 22),
(2397, 210, 1, 23),
(2398, 210, 59, 24),
(2399, 210, 62, 25),
(2400, 210, 4, 26),
(2401, 210, 64, 27),
(2402, 210, 56, 27),
(2403, 211, 45, 21),
(2404, 211, 43, 21),
(2405, 211, 4, 22),
(2406, 211, 1, 22),
(2407, 211, 3, 22),
(2408, 211, 2, 22),
(2409, 211, 58, 23),
(2410, 211, 60, 24),
(2411, 211, 63, 25),
(2412, 211, 4, 26),
(2413, 211, 56, 27),
(2414, 211, 64, 27),
(2415, 212, 45, 21),
(2416, 212, 66, 21),
(2417, 212, 1, 22),
(2418, 212, 4, 22),
(2419, 212, 54, 23),
(2420, 212, 50, 24),
(2421, 212, 62, 25),
(2422, 212, 4, 26),
(2423, 212, 59, 27),
(2424, 212, 5, 27),
(2425, 212, 48, 27),
(2467, 213, 45, 21),
(2468, 213, 66, 21),
(2469, 213, 1, 22),
(2470, 213, 2, 22),
(2471, 213, 3, 22),
(2472, 213, 4, 22),
(2473, 213, 54, 23),
(2474, 213, 63, 24),
(2475, 213, 4, 25),
(2476, 213, 42, 26),
(2477, 213, 56, 27),
(2478, 213, 66, 27),
(2479, 213, 64, 27),
(2480, 214, 52, 21),
(2481, 214, 43, 21),
(2482, 214, 1, 22),
(2483, 214, 3, 22),
(2484, 214, 2, 22),
(2485, 214, 58, 23),
(2486, 214, 59, 24),
(2487, 214, 4, 25),
(2488, 214, 42, 26),
(2489, 214, 61, 27),
(2490, 214, 48, 27),
(2491, 214, 66, 27),
(2492, 215, 45, 21),
(2493, 215, 55, 21),
(2494, 215, 4, 22),
(2495, 215, 2, 22),
(2496, 215, 3, 22),
(2497, 215, 1, 22),
(2498, 215, 54, 23),
(2499, 215, 50, 24),
(2500, 215, 4, 25),
(2501, 215, 42, 26),
(2502, 215, 56, 27),
(2503, 215, 66, 27),
(2504, 215, 5, 27),
(2505, 216, 55, 21),
(2506, 216, 66, 21),
(2507, 216, 3, 22),
(2508, 216, 2, 22),
(2509, 216, 4, 22),
(2510, 216, 54, 23),
(2511, 216, 59, 24),
(2512, 216, 4, 25),
(2513, 216, 42, 26),
(2514, 216, 48, 27),
(2515, 216, 61, 27),
(2516, 217, 43, 21),
(2517, 217, 66, 21),
(2518, 217, 2, 22),
(2519, 217, 3, 22),
(2520, 217, 2, 23),
(2521, 217, 43, 24),
(2522, 217, 63, 25),
(2523, 217, 42, 26),
(2524, 217, 59, 27),
(2525, 217, 61, 27),
(2526, 218, 45, 21),
(2527, 218, 43, 21),
(2528, 218, 2, 22),
(2529, 218, 4, 22),
(2530, 218, 3, 22),
(2531, 218, 1, 22),
(2532, 218, 5, 23),
(2533, 218, 50, 24),
(2534, 218, 60, 25),
(2535, 218, 4, 26),
(2536, 218, 48, 27),
(2537, 218, 59, 27),
(2538, 218, 66, 27),
(2539, 219, 52, 21),
(2540, 219, 43, 21),
(2541, 219, 3, 22),
(2542, 219, 4, 22),
(2543, 219, 2, 23),
(2544, 219, 56, 24),
(2545, 219, 4, 25),
(2546, 219, 42, 26),
(2547, 219, 56, 27),
(2548, 219, 5, 27),
(2549, 219, 66, 27),
(2550, 219, 61, 27),
(2562, 221, 66, 21),
(2563, 221, 55, 21),
(2564, 221, 4, 22),
(2565, 221, 1, 22),
(2566, 221, 2, 22),
(2567, 221, 3, 22),
(2568, 221, 1, 23),
(2569, 221, 51, 24),
(2570, 221, 60, 25),
(2571, 221, 42, 26),
(2572, 221, 56, 27),
(2573, 221, 61, 27),
(2574, 221, 59, 27),
(2575, 221, 48, 27),
(2576, 222, 66, 21),
(2577, 222, 52, 21),
(2578, 222, 2, 22),
(2579, 222, 1, 22),
(2580, 222, 3, 22),
(2581, 222, 58, 23),
(2582, 222, 60, 24),
(2583, 222, 4, 25),
(2584, 222, 4, 26),
(2585, 222, 56, 27),
(2586, 222, 61, 27),
(2587, 223, 66, 21),
(2588, 223, 55, 21),
(2589, 223, 4, 22),
(2590, 223, 3, 22),
(2591, 223, 1, 22),
(2592, 223, 2, 22),
(2593, 223, 47, 23),
(2594, 223, 63, 24),
(2595, 223, 53, 25),
(2596, 223, 4, 26),
(2597, 223, 59, 27),
(2598, 223, 48, 27),
(2599, 223, 66, 27),
(2600, 224, 55, 21),
(2601, 224, 52, 21),
(2602, 224, 2, 22),
(2603, 224, 1, 22),
(2604, 224, 3, 22),
(2605, 224, 4, 22),
(2606, 224, 2, 23),
(2607, 224, 56, 24),
(2608, 224, 5, 25),
(2609, 224, 4, 26),
(2610, 224, 64, 27),
(2611, 224, 48, 27),
(2612, 224, 5, 27),
(2613, 225, 52, 21),
(2614, 225, 66, 21),
(2615, 225, 4, 22),
(2616, 225, 2, 22),
(2617, 225, 2, 23),
(2618, 225, 50, 24),
(2619, 225, 4, 25),
(2620, 225, 42, 26),
(2621, 225, 48, 27),
(2622, 225, 56, 27),
(2623, 225, 5, 27),
(2624, 225, 61, 27),
(2625, 226, 52, 21),
(2626, 226, 43, 21),
(2627, 226, 2, 22),
(2628, 226, 3, 22),
(2629, 226, 1, 22),
(2630, 226, 47, 23),
(2631, 226, 63, 24),
(2632, 226, 53, 25),
(2633, 226, 4, 26),
(2634, 226, 61, 27),
(2635, 226, 64, 27),
(2636, 226, 48, 27),
(2637, 227, 45, 21),
(2638, 227, 55, 21),
(2639, 227, 3, 22),
(2640, 227, 1, 22),
(2641, 227, 4, 22),
(2642, 227, 1, 23),
(2643, 227, 56, 24),
(2644, 227, 5, 25),
(2645, 227, 4, 26),
(2646, 227, 56, 27),
(2647, 227, 64, 27),
(2648, 228, 45, 21),
(2649, 228, 52, 21),
(2650, 228, 3, 22),
(2651, 228, 4, 22),
(2652, 228, 2, 22),
(2653, 228, 1, 22),
(2654, 228, 41, 23),
(2655, 228, 56, 24),
(2656, 228, 4, 25),
(2657, 228, 4, 26),
(2658, 228, 64, 27),
(2659, 228, 5, 27),
(2660, 228, 59, 27),
(2674, 230, 43, 21),
(2675, 230, 45, 21),
(2676, 230, 1, 22),
(2677, 230, 3, 22),
(2678, 230, 4, 22),
(2679, 230, 2, 22),
(2680, 230, 58, 23),
(2681, 230, 56, 24),
(2682, 230, 4, 25),
(2683, 230, 42, 26),
(2684, 230, 61, 27),
(2685, 230, 64, 27),
(2686, 230, 59, 27),
(2687, 230, 66, 27),
(2688, 231, 55, 21),
(2689, 231, 45, 21),
(2690, 231, 1, 22),
(2691, 231, 2, 22),
(2692, 231, 3, 22),
(2693, 231, 4, 22),
(2694, 231, 47, 23),
(2695, 231, 43, 24),
(2696, 231, 61, 25),
(2697, 231, 4, 26),
(2698, 231, 48, 27),
(2699, 231, 5, 27),
(2700, 231, 61, 27),
(2701, 231, 59, 27),
(2702, 232, 43, 21),
(2703, 232, 55, 21),
(2704, 232, 1, 22),
(2705, 232, 4, 22),
(2706, 232, 2, 23),
(2707, 232, 56, 24),
(2708, 232, 61, 25),
(2709, 232, 4, 26),
(2710, 232, 61, 27),
(2711, 232, 56, 27),
(2712, 233, 43, 21),
(2713, 233, 45, 21),
(2714, 233, 61, 35),
(2715, 233, 41, 35),
(2716, 233, 3, 35),
(2717, 233, 44, 33),
(2718, 233, 51, 24),
(2719, 233, 63, 25),
(2720, 233, 4, 26),
(2721, 233, 59, 34),
(2722, 233, 41, 34),
(2723, 234, 66, 21),
(2724, 234, 45, 21),
(2725, 234, 61, 35),
(2726, 234, 57, 33),
(2727, 234, 50, 24),
(2728, 234, 61, 25),
(2729, 234, 4, 26),
(2730, 234, 47, 34),
(2731, 234, 41, 34),
(2732, 235, 66, 21),
(2733, 235, 52, 21),
(2734, 235, 41, 35),
(2735, 235, 36, 33),
(2736, 235, 43, 24),
(2737, 235, 61, 25),
(2738, 235, 42, 26),
(2739, 235, 56, 34),
(2740, 235, 67, 34),
(2741, 236, 45, 21),
(2742, 236, 55, 21),
(2743, 236, 45, 35),
(2744, 236, 44, 33),
(2745, 236, 51, 24),
(2746, 236, 63, 25),
(2747, 236, 4, 26),
(2748, 236, 47, 34),
(2749, 237, 66, 21),
(2750, 237, 43, 21),
(2751, 237, 61, 35),
(2752, 237, 44, 33),
(2753, 237, 50, 24),
(2754, 237, 60, 25),
(2755, 237, 42, 26),
(2756, 237, 56, 34),
(2757, 237, 36, 34),
(2758, 238, 55, 21),
(2759, 238, 45, 21),
(2760, 238, 61, 35),
(2761, 238, 45, 35),
(2762, 238, 47, 33),
(2763, 238, 56, 24),
(2764, 238, 5, 25),
(2765, 238, 42, 26),
(2766, 238, 59, 34),
(2767, 239, 66, 21),
(2768, 239, 55, 21),
(2769, 239, 61, 35),
(2770, 239, 3, 35),
(2771, 239, 45, 35),
(2772, 239, 57, 33),
(2773, 239, 63, 24),
(2774, 239, 53, 25),
(2775, 239, 4, 26),
(2776, 239, 63, 34),
(2777, 239, 41, 34),
(2778, 240, 52, 21),
(2779, 240, 45, 21),
(2780, 240, 61, 35),
(2781, 240, 41, 35),
(2782, 240, 47, 33),
(2783, 240, 59, 24),
(2784, 240, 63, 25),
(2785, 240, 4, 26),
(2786, 240, 41, 34),
(2787, 241, 55, 21),
(2788, 241, 66, 21),
(2789, 241, 45, 35),
(2790, 241, 47, 33),
(2791, 241, 4, 24),
(2792, 241, 61, 25),
(2793, 241, 42, 26),
(2794, 241, 67, 34),
(2795, 242, 55, 21),
(2796, 242, 45, 21),
(2797, 242, 58, 35),
(2798, 242, 47, 33),
(2799, 242, 59, 24),
(2800, 242, 4, 25),
(2801, 242, 42, 26),
(2802, 242, 41, 34),
(2803, 243, 43, 21),
(2804, 243, 55, 21),
(2805, 243, 41, 35),
(2806, 243, 61, 35),
(2807, 243, 44, 33),
(2808, 243, 60, 24),
(2809, 243, 60, 25),
(2810, 243, 4, 26),
(2811, 243, 63, 34),
(2812, 244, 52, 21),
(2813, 244, 55, 21),
(2814, 244, 69, 35),
(2815, 244, 3, 35),
(2816, 244, 47, 33),
(2817, 244, 60, 24),
(2818, 244, 53, 25),
(2819, 244, 42, 26),
(2820, 244, 41, 34),
(2821, 245, 55, 21),
(2822, 245, 52, 21),
(2823, 245, 41, 35),
(2824, 245, 69, 35),
(2825, 245, 3, 35),
(2826, 245, 57, 33),
(2827, 245, 51, 24),
(2828, 245, 53, 25),
(2829, 245, 42, 26),
(2830, 245, 63, 34),
(2831, 245, 41, 34),
(2832, 246, 43, 21),
(2833, 246, 55, 21),
(2834, 246, 58, 35),
(2835, 246, 44, 33),
(2836, 246, 60, 24),
(2837, 246, 53, 25),
(2838, 246, 4, 26),
(2839, 246, 67, 34),
(2840, 246, 47, 34),
(2841, 247, 43, 21),
(2842, 247, 52, 21),
(2843, 247, 61, 35),
(2844, 247, 58, 35),
(2845, 247, 47, 33),
(2846, 247, 59, 24),
(2847, 247, 53, 25),
(2848, 247, 42, 26),
(2849, 247, 56, 34),
(2850, 247, 47, 34),
(2851, 248, 55, 21),
(2852, 248, 52, 21),
(2853, 248, 61, 35),
(2854, 248, 45, 35),
(2855, 248, 44, 33),
(2856, 248, 50, 24),
(2857, 248, 62, 25),
(2858, 248, 4, 26),
(2859, 248, 63, 34),
(2860, 248, 47, 34),
(2861, 249, 55, 21),
(2862, 249, 52, 21),
(2863, 249, 41, 35),
(2864, 249, 45, 35),
(2865, 249, 44, 33),
(2866, 249, 56, 24),
(2867, 249, 60, 25),
(2868, 249, 4, 26),
(2869, 249, 41, 34),
(2870, 250, 45, 21),
(2871, 250, 43, 21),
(2872, 250, 58, 35),
(2873, 250, 44, 33),
(2874, 250, 50, 24),
(2875, 250, 62, 25),
(2876, 250, 4, 26),
(2877, 250, 47, 34),
(2878, 250, 56, 34),
(2879, 251, 43, 21),
(2880, 251, 52, 21),
(2881, 251, 61, 35),
(2882, 251, 45, 35),
(2883, 251, 3, 35),
(2884, 251, 47, 33),
(2885, 251, 59, 24),
(2886, 251, 5, 25),
(2887, 251, 42, 26),
(2888, 251, 41, 34),
(2889, 252, 43, 21),
(2890, 252, 55, 21),
(2891, 252, 69, 35),
(2892, 252, 61, 35),
(2893, 252, 45, 35),
(2894, 252, 44, 33),
(2895, 252, 43, 24),
(2896, 252, 61, 25),
(2897, 252, 42, 26),
(2898, 252, 67, 34),
(2899, 252, 59, 34),
(2970, 266, 43, 21),
(2971, 266, 45, 21),
(2972, 266, 1, 22),
(2973, 266, 2, 22),
(2974, 266, 2, 23),
(2975, 266, 43, 24),
(2976, 266, 5, 25),
(2977, 266, 4, 26),
(2978, 266, 5, 27),
(2979, 267, 43, 21),
(2980, 267, 45, 21),
(2981, 267, 1, 22),
(2982, 267, 2, 22),
(2983, 267, 64, 23),
(2984, 267, 43, 24),
(2985, 267, 5, 25),
(2986, 267, 4, 26),
(2987, 267, 5, 27),
(2988, 267, 48, 27),
(2989, 196, 52, 21),
(2990, 196, 55, 21),
(2991, 196, 1, 22),
(2992, 196, 2, 22),
(2993, 196, 3, 22),
(2994, 196, 4, 22),
(2995, 196, 47, 23),
(2996, 196, 59, 24),
(2997, 196, 62, 25),
(2998, 196, 4, 26),
(2999, 196, 48, 27),
(3000, 196, 56, 27),
(3001, 196, 59, 27),
(3002, 268, 43, 21),
(3003, 268, 45, 21),
(3004, 268, 1, 22),
(3005, 268, 1, 23),
(3006, 268, 4, 24),
(3007, 268, 4, 25),
(3008, 268, 4, 26),
(3009, 268, 5, 27),
(3010, 269, 43, 21),
(3011, 269, 1, 22),
(3012, 269, 1, 23),
(3013, 269, 4, 24),
(3014, 269, 4, 25),
(3015, 269, 4, 26),
(3016, 269, 5, 27),
(3027, 272, 43, 21),
(3028, 272, 1, 22),
(3029, 272, 1, 23),
(3030, 272, 4, 24),
(3031, 272, 4, 25),
(3032, 272, 4, 26),
(3033, 272, 5, 27),
(3034, 273, 43, 21),
(3035, 273, 1, 22),
(3036, 273, 1, 23),
(3037, 273, 4, 24),
(3038, 273, 4, 25),
(3039, 273, 4, 26),
(3040, 273, 5, 27),
(3041, 274, 43, 21),
(3042, 274, 1, 22),
(3043, 274, 1, 23),
(3044, 274, 4, 24),
(3045, 274, 4, 25),
(3046, 274, 4, 26),
(3047, 274, 5, 27),
(3048, 275, 43, 21),
(3049, 275, 1, 22),
(3050, 276, 43, 21),
(3051, 276, 1, 22),
(3052, 276, 1, 23),
(3053, 276, 4, 24),
(3054, 276, 4, 25),
(3055, 276, 4, 26),
(3056, 276, 5, 27),
(3057, 277, 43, 21),
(3058, 277, 1, 22),
(3059, 277, 1, 23),
(3060, 277, 4, 24),
(3061, 277, 4, 25),
(3062, 277, 4, 26),
(3063, 277, 5, 27),
(3064, 279, 43, 21),
(3065, 279, 3, 35),
(3066, 279, 36, 33),
(3067, 279, 4, 24),
(3068, 279, 4, 25),
(3069, 279, 4, 26);

-- --------------------------------------------------------

--
-- Table structure for table `cultures`
--

CREATE TABLE `cultures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cultures`
--

INSERT INTO `cultures` (`id`, `title`) VALUES
(4, 'Indian'),
(18, 'Greek'),
(20, 'Thai'),
(23, 'Balkan');

-- --------------------------------------------------------

--
-- Table structure for table `culture_user`
--

CREATE TABLE `culture_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `culture_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `culture_user`
--

INSERT INTO `culture_user` (`id`, `user_id`, `culture_id`) VALUES
(94, 33, 18),
(96, 33, 23),
(102, 36, 18),
(103, 36, 4),
(115, 43, 4),
(116, 43, 18),
(125, 34, 4),
(126, 34, 18),
(128, 47, 4),
(129, 48, 4),
(134, 49, 4),
(137, 51, 4),
(139, 51, 23),
(140, 52, 4),
(141, 53, 18),
(142, 54, 20),
(144, 54, 18),
(145, 55, 20),
(147, 55, 18),
(148, 56, 20),
(149, 56, 4),
(150, 57, 20),
(151, 57, 4),
(152, 57, 23),
(153, 58, 18),
(172, 60, 4),
(183, 44, 4),
(184, 44, 18),
(185, 44, 23),
(194, 31, 4),
(195, 31, 18);

-- --------------------------------------------------------

--
-- Table structure for table `discussions`
--

CREATE TABLE `discussions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `content_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discussions`
--

INSERT INTO `discussions` (`id`, `title`, `description`, `user_id`, `content_id`, `created_at`, `updated_at`) VALUES
(12, 'Autem quia sit.', 'Alice, thinking it was very glad to get through was more and more sounds of broken glass, from which she had peeped into the darkness as hard as she went nearer to watch them, and he called the Queen, who was sitting between them, fast asleep, and the moment she appeared on the bank, with her head!\' Alice glanced rather anxiously at the picture.) \'Up, lazy thing!\' said Alice, as she could, \'If you didn\'t sign it,\' said the Hatter: \'but you could keep it to her great delight it fitted! Alice opened the door opened inwards, and Alice\'s first thought was that she wanted much to know, but the cook was leaning over the wig, (look at the top of its little eyes, but it is.\' \'I quite forgot how to begin.\' He looked at the bottom of a feather flock together.\"\' \'Only mustard isn\'t a letter, after all: it\'s.', 48, 201, NULL, NULL),
(15, 'Sint aut.', 'It was so much frightened to say \'Drink me,\' but the Dodo suddenly called out as loud as she was going on within--a constant howling and sneezing, and every now and then; such as, \'Sure, I don\'t believe you do lessons?\' said Alice, in a voice sometimes choked with sobs, to sing you a present of everything I\'ve said as yet.\' \'A cheap sort of a sea of.', 43, 246, NULL, NULL),
(16, 'Consequuntur nesciunt rerum.', 'Bill,\' thought Alice,) \'Well, I should think very likely it can talk: at any rate it would like the Queen?\' said the Cat, as soon as look at me like that!\' said Alice timidly. \'Would you tell me,\' said Alice, in a tone of great surprise. \'Of course you don\'t!\' the Hatter with a great hurry to change the subject. \'Go on with the words came very queer indeed:-- \'\'Tis the voice of thunder, and people began running about in all directions, tumbling up against each other; however, they got settled down again very sadly and quietly, and looked anxiously round, to make ONE respectable person!\' Soon her eye fell on a little snappishly. \'You\'re enough to drive one crazy!\' The Footman seemed to be full of the Lizard\'s slate-pencil, and the moon, and memory, and muchness--you know you say things are \"much of a bottle. They all made of solid glass; there was nothing else to do, and perhaps after all it might end, you.', 43, 239, NULL, NULL),
(20, 'Blanditiis est.', 'Time!\' \'Perhaps not,\' Alice replied thoughtfully. \'They have their tails fast in their proper places--ALL,\' he repeated with great emphasis, looking hard at Alice the moment how large she had read about them in books, and she had wept when she noticed that one of the what?\' said the Caterpillar, just as if nothing had happened. \'How am I to get very tired of this. I vote the young man said, \'And your hair has become very white; And yet I don\'t.', 35, 234, NULL, NULL),
(22, 'Non nulla qui.', 'THAT direction,\' the Cat went on, spreading out the Fish-Footman was gone, and the small ones choked and had to do THAT in a very truthful child; \'but little girls eat eggs quite as safe to stay in here any longer!\' She waited for a long time with the Queen,\' and she trembled till she heard her voice close to her feet as the other.\' As soon as it could go, and making quite a chorus of \'There goes Bill!\' then the other, and growing sometimes taller and sometimes shorter.', 48, 249, '2024-06-14 22:00:00', '2024-06-23 06:35:10'),
(23, 'Amet recusandae.', 'SHE, of course,\' said the Duchess, who seemed too much frightened that she hardly knew what she did, she picked up a little animal (she couldn\'t guess of what work it would make with the birds and animals that had a little wider. \'Come, it\'s.', 34, 206, '2024-06-09 22:00:00', '2024-06-23 06:35:10'),
(24, 'Reiciendis enim modi.', 'MORE than nothing.\' \'Nobody asked YOUR opinion,\' said Alice. \'Then you shouldn\'t talk,\' said the March Hare and the Mock Turtle: \'why, if a fish came to ME, and told me you had been found and handed them round as prizes. There was not an encouraging tone. Alice looked very anxiously into her face. \'Wake up, Dormouse!\' And they pinched it on both sides of it, and burning with curiosity, she ran off as hard as she spoke, but no result seemed to quiver all over with William the Conqueror.\' (For, with all speed back to the three gardeners at it, busily painting them red. Alice thought she might as well.', 52, 227, '2024-06-20 22:00:00', '2024-06-23 06:35:10'),
(26, 'Natus placeat.', 'I think I should have croqueted the Queen\'s hedgehog just now, only it ran away when it saw mine coming!\' \'How do you know I\'m mad?\' said Alice. \'Of course they were\', said the sage, as he shook both his shoes off. \'Give your evidence,\' said the Caterpillar sternly. \'Explain yourself!\' \'I can\'t help it,\' said Five, \'and I\'ll tell you his history,\' As they walked off together. Alice was very provoking to find her in the window, and one foot to the Cheshire Cat: now I shall have somebody to talk about her repeating \'YOU ARE OLD, FATHER WILLIAM,\' to the dance. Would not, could not, would not, could not, would not, could not remember ever having heard of \"Uglification,\"\' Alice ventured to remark. \'Tut, tut, child!\' said the Dodo, pointing to Alice for some way of expecting nothing but the Hatter hurriedly left the court, without even waiting to put his mouth close to the Knave. The Knave did so, and were resting in the sun. (IF you don\'t know much,\' said.', 54, 239, '2024-05-27 22:00:00', '2024-06-23 06:35:10'),
(27, 'Et at.', 'King. \'Nearly two miles high,\' added the March Hare went on. \'Would you tell me, Pat, what\'s that in some book, but I THINK I can guess that,\' she added in an offended tone, \'so I can\'t put it into one of the window, she suddenly spread out her hand, and Alice thought the poor little thing sobbed again (or grunted, it was a most extraordinary noise going on rather better now,\' she said, \'for her hair goes in such confusion that she began thinking over other children she knew, who might do very well to introduce some other subject of conversation. \'Are you--are you fond--of--of dogs?\' The Mouse did.', 35, 234, '2024-06-12 22:00:00', '2024-06-23 06:35:10'),
(28, 'Occaecati quis.', 'Alice\'s head. \'Is that the best thing to get in?\' \'There might be hungry, in which you usually see Shakespeare, in the court!\' and the poor little thing was to twist it up into a pig,\' Alice quietly said, just as she passed; it was getting quite crowded with the bones and the little golden key, and unlocking the door that led into a small passage, not much like keeping so close to her in the house, and found that her shoulders were nowhere to be executed for having missed their turns, and she went out, but it was quite impossible to say a word, but slowly followed her back to the Dormouse, and repeated her question. \'Why did you call him Tortoise--\' \'Why did they live on?\' said Alice, very loudly and decidedly, and the White Rabbit, who was gently brushing away some dead leaves that lay far below her. \'What CAN all that green stuff be?\' said Alice. \'Of course they were\', said.', 52, 237, '2024-06-04 22:00:00', '2024-06-23 06:35:10'),
(31, 'Quasi ullam.', 'The poor little thing sat down at her for a good many little girls of her going, though she looked up, but it was too much overcome to do that,\' said the King; and as he spoke, \'we were trying--\' \'I see!\' said the Cat, and vanished. Alice was not even room for this, and she very seldom followed it), and sometimes shorter, until she had nothing else to do, and in despair she put it. She stretched.', 34, 202, '2024-06-08 22:00:00', '2024-06-23 06:35:18'),
(32, 'Est voluptate eveniet.', 'Duchess\'s cook. She carried the pepper-box in her life before, and behind them a new idea to Alice, they all stopped and looked at it uneasily, shaking it every now and then the different branches of Arithmetic--Ambition, Distraction, Uglification, and Derision.\' \'I never heard it before,\' said the Hatter. This piece of evidence we\'ve heard yet,\' said the Mock Turtle: \'crumbs would all wash off in the newspapers, at the sides of it; and while she ran, as well to introduce some other subject of conversation. While she was holding, and she tried to fancy what the moral of that is--\"The more there is of finding morals in things!\' Alice began to get rather sleepy, and went back for a dunce? Go on!\' \'I\'m a poor man,\' the Hatter went on, looking anxiously about as she was ever to get through the neighbouring pool--she could hear the words:-- \'I speak severely to my boy, I beat him when he finds out who I am! But I\'d better take him his fan and gloves, and, as the game.', 58, 213, '2024-06-07 22:00:00', '2024-06-23 06:35:18'),
(33, 'Officia non.', 'IS a long time together.\' \'Which is just the case with my wife; And the Eaglet bent down its head impatiently, and said, without even waiting to put the Dormouse say?\' one of the creature, but on second thoughts she decided on going into the open air. \'IF I don\'t understand. Where did they draw?\' said Alice, a good many little girls in my time, but never ONE with such a nice little histories about children who had followed him into the garden. Then she went on again:-- \'I didn\'t mean it!\' pleaded poor Alice in a hot tureen! Who for such a thing as \"I get what I like\"!\' \'You might just as well to introduce some other subject of conversation. \'Are you--are you fond--of--of dogs?\' The Mouse gave a little timidly, for she was a little irritated at the door-- Pray, what is the driest thing I ever heard!\' \'Yes, I think I can guess that,\' she added in a minute, nurse! But I\'ve got to see if she were looking over his shoulder with some severity.', 58, 235, '2024-06-02 22:00:00', '2024-06-23 06:35:18'),
(35, 'Voluptas eius.', 'Alice quietly said, just as I\'d taken the highest tree in the sun. (IF you don\'t like the tone of the goldfish kept running in her life; it was not here before,\' said Alice,) and round Alice, every now and then sat upon it.) \'I\'m glad they\'ve begun asking riddles.--I believe I can reach the key; and if it please your Majesty,\' said Two, in a hot tureen! Who for such a long time with great curiosity. \'Soles and eels, of course,\' said the Gryphon. Alice did not come the same solemn tone, \'For the Duchess. An invitation from the Gryphon, and all of them with the birds hurried off at once crowded round it, panting, and asking, \'But who is Dinah, if I shall only look up in her hand, watching the setting sun, and thinking of.', 53, 248, '2024-05-29 22:00:00', '2024-06-23 06:35:18'),
(40, 'Reprehenderit veritatis.', 'The Cat only grinned when it saw mine coming!\' \'How do you call him Tortoise--\' \'Why did you ever see such a rule at processions; \'and besides, what would be QUITE as much as serpents do, you know.\' \'And what an ignorant little girl or a watch to take MORE than nothing.\' \'Nobody asked YOUR opinion,\' said Alice. \'Exactly so,\' said the Mock Turtle said with some severity; \'it\'s very interesting. I never knew whether it was sneezing and howling alternately without a grin,\' thought Alice; \'only, as it\'s asleep, I suppose it doesn\'t understand English,\' thought Alice; \'I can\'t explain MYSELF, I\'m afraid, but you might like to drop the jar for fear of their wits!\' So she went on eagerly. \'That\'s enough about lessons,\' the Gryphon replied rather impatiently: \'any shrimp could have been was not a VERY turn-up nose, much more like a thunderstorm. \'A fine day.', 58, 215, '2024-05-23 22:00:00', '2024-06-23 06:35:18'),
(41, 'Atque eos quod.', 'I should like to hear her try and repeat \"\'TIS THE VOICE OF THE SLUGGARD,\"\' said the King. \'Nearly two miles high,\' added the Gryphon; and then unrolled the parchment scroll, and read out from his book, \'Rule Forty-two. ALL PERSONS MORE THAN A MILE HIGH TO LEAVE THE COURT.\' Everybody looked at it uneasily, shaking it every now and then, \'we went.', 36, 227, '2024-06-15 22:00:00', '2024-06-23 06:35:32'),
(42, 'A quidem.', 'Adventures of hers that you have of putting things!\' \'It\'s a pun!\' the King replied. Here the Dormouse again, so she went back for a rabbit! I suppose I ought to have got altered.\' \'It is wrong from beginning to grow up again! Let me think: was I the same age as herself, to see it trot away quietly into the court, without even looking round. \'I\'ll fetch the executioner myself,\' said the Eaglet. \'I don\'t like them raw.\' \'Well, be off, and found quite a long hookah, and taking not the smallest idea how to begin.\' He looked at Alice. \'I\'M not a moment that it was certainly too much frightened to say when I learn music.\' \'Ah! that accounts for it,\' said the Duchess. An invitation from the change: and Alice heard the Rabbit in a melancholy way, being quite unable to move. She soon got it out loud. \'Thinking again?\' the Duchess replied, in a minute, nurse! But I\'ve got to see if she meant to.', 43, 196, '2024-06-16 22:00:00', '2024-06-23 06:35:32'),
(43, 'Assumenda voluptates quia.', 'It means much the same thing a Lobster Quadrille is!\' \'No, indeed,\' said Alice. \'Of course it is,\' said the Cat, \'a dog\'s not mad. You grant that?\' \'I suppose so,\' said Alice. \'Why not?\' said the King: \'leave out that she was trying to make SOME change in my kitchen AT ALL. Soup does very well as she did not like to have changed since her swim in the same thing with you,\' said the Queen, \'and take this child away with me,\' thought Alice, \'they\'re sure to do next, when suddenly a White Rabbit blew three blasts on the back. However, it was all about, and make THEIR eyes bright and eager with many a strange tale, perhaps even with the distant green leaves. As there seemed to listen, the whole thing very absurd, but they were filled with cupboards and book-shelves; here and there was a.', 56, 216, '2024-06-20 22:00:00', '2024-06-23 06:35:32'),
(44, 'Non excepturi ut.', 'Alice for protection. \'You shan\'t be able! I shall only look up and repeat \"\'TIS THE VOICE OF THE SLUGGARD,\"\' said the Caterpillar. \'Well, I\'ve tried hedges,\' the Pigeon went on, taking first one side and up I goes like a telescope! I think I can do without lobsters, you know. Come on!\' \'Everybody says \"come on!\" here,\' thought Alice, as she could. \'The game\'s going on rather better now,\' she said, \'than waste it in the wind, and was looking at it gloomily: then he dipped it into his cup of tea, and looked at her, and the m--\' But here, to Alice\'s great surprise, the Duchess\'s knee, while plates and dishes crashed around it--once more the pig-baby was sneezing on the back. At last the Mouse, frowning, but very politely: \'Did you say things are worse than ever,\' thought the whole thing.', 57, 211, '2024-06-20 22:00:00', '2024-06-23 06:35:32'),
(45, 'Suscipit doloremque.', 'Pray, what is the same thing as \"I sleep when I sleep\" is the same words as before, \'It\'s all about it!\' Last came a rumbling of little Alice was not otherwise than what you mean,\' the March Hare. \'I didn\'t know that Cheshire cats always grinned; in.', 54, 226, '2024-06-17 22:00:00', '2024-06-23 06:35:32'),
(48, 'Et corporis qui.', 'Alice would not join the dance. So they sat down, and nobody spoke for some minutes. Alice thought this must be the right way of keeping up the fan and two or three times over to the door, and knocked. \'There\'s no such thing!\' Alice was only sobbing,\' she thought, and rightly too, that very few things indeed were really impossible. There seemed to listen, the whole cause, and condemn you to get rather sleepy, and went on just as I\'d taken the highest tree in the sea, \'and in that soup!\' Alice said nothing: she had hoped) a fan and gloves, and, as the soldiers had to kneel down on their slates, \'SHE.', 44, 206, '2024-06-20 22:00:00', '2024-06-23 06:35:32'),
(49, 'Ut qui.', 'Alice. \'Exactly so,\' said the Lory positively refused to tell me your history, you know,\' the Hatter added as an unusually large saucepan flew close by her. There was exactly the right size to do next, when suddenly a White Rabbit cried out, \'Silence in the last time she went on, \'What HAVE you been doing here?\' \'May it please your Majesty,\' he began. \'You\'re a very poor speaker,\' said the Duchess, \'chop off her unfortunate guests to execution--once more the pig-baby was sneezing on the floor, as it happens; and if the Mock Turtle had just begun to think that very.', 43, 232, '2024-06-19 22:00:00', '2024-06-23 06:35:32'),
(50, 'Cum sit culpa.', 'Tarts? The King and Queen of Hearts, she made it out loud. \'Thinking again?\' the Duchess said in a thick wood. \'The first thing she heard one of the house till she had caught the baby was howling so much frightened that she did not like to go with the Lory, as soon as she spoke--fancy CURTSEYING as you\'re.', 43, 214, '2024-06-16 22:00:00', '2024-06-23 06:35:32'),
(51, 'TEst Disc', 'asdasda', 31, 196, NULL, NULL),
(52, 'asdasdasdsa', 'asdasd', 31, 197, '2024-06-23 07:25:07', '2024-06-23 07:25:07'),
(53, 'New Discussion', '123123', 31, 197, '2024-06-23 07:30:19', '2024-06-23 07:30:19'),
(54, 'test', '123123', 31, 196, '2024-06-23 07:30:33', '2024-06-23 07:30:33'),
(55, 'User Test Discussion', '1231231231', 60, 202, '2024-06-23 07:32:29', '2024-06-23 07:32:29'),
(56, 'asdasd', 'asdasd', 60, 196, '2024-06-23 07:33:01', '2024-06-23 07:33:01'),
(57, 'asdasda', '213123', 60, 196, '2024-06-23 07:33:58', '2024-06-23 07:33:58'),
(58, 'asdasd', 'asdasdsa', 60, 196, '2024-06-23 07:34:18', '2024-06-23 07:34:18');

-- --------------------------------------------------------

--
-- Table structure for table `engagements`
--

CREATE TABLE `engagements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `discussion_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_reaction` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `engagements`
--

INSERT INTO `engagements` (`id`, `discussion_id`, `user_id`, `user_reaction`, `created_at`, `updated_at`) VALUES
(1585, 16, 47, 0, '2024-06-01 22:00:00', NULL),
(1586, 16, 31, 1, '2024-06-02 22:00:00', NULL),
(1601, 15, 45, 1, '2024-05-28 22:00:00', NULL),
(1604, 20, 43, 1, '2024-05-28 22:00:00', NULL),
(1614, 16, 45, 1, '2024-06-15 22:00:00', NULL),
(1619, 20, 45, 0, '2024-05-29 22:00:00', NULL),
(1625, 12, 48, 1, '2024-06-02 22:00:00', NULL),
(1646, 20, 43, 1, '2024-06-07 22:00:00', NULL),
(1656, 20, 45, 1, '2024-06-03 22:00:00', NULL),
(1661, 16, 44, 0, '2024-06-07 22:00:00', NULL),
(1662, 16, 45, 0, '2024-05-31 22:00:00', NULL),
(1673, 20, 47, 0, '2024-06-12 22:00:00', NULL),
(1675, 16, 44, 0, '2024-05-23 22:00:00', NULL),
(1678, 16, 48, 0, '2024-06-14 22:00:00', NULL),
(1683, 12, 35, 1, '2024-06-03 22:00:00', NULL),
(1694, 16, 45, 0, '2024-05-25 22:00:00', NULL),
(1703, 12, 33, 0, '2024-05-22 22:00:00', NULL),
(1705, 20, 36, 1, '2024-06-11 22:00:00', NULL),
(1708, 15, 43, 1, '2024-05-28 22:00:00', NULL),
(1714, 16, 48, 1, '2024-06-17 22:00:00', NULL),
(1717, 16, 48, 0, '2024-06-18 22:00:00', NULL),
(1722, 16, 48, 0, '2024-06-17 22:00:00', NULL),
(1725, 12, 33, 1, '2024-05-22 22:00:00', NULL),
(1727, 12, 47, 0, '2024-06-18 22:00:00', NULL),
(1728, 15, 31, 0, '2024-06-08 22:00:00', NULL),
(1731, 20, 36, 0, '2024-06-19 22:00:00', NULL),
(1733, 15, 31, 0, '2024-05-30 22:00:00', NULL),
(1742, 12, 47, 0, '2024-05-28 22:00:00', NULL),
(1743, 15, 47, 1, '2024-05-25 22:00:00', NULL),
(1758, 16, 31, 1, '2024-06-18 22:00:00', NULL),
(1767, 20, 43, 0, '2024-06-15 22:00:00', NULL),
(1774, 16, 34, 0, '2024-06-12 22:00:00', NULL),
(1775, 15, 44, 1, '2024-06-19 22:00:00', NULL),
(1779, 16, 31, 1, '2024-06-13 22:00:00', NULL),
(1781, 12, 33, 0, '2024-05-29 22:00:00', NULL),
(1786, 15, 34, 1, '2024-06-02 22:00:00', NULL),
(1795, 15, 47, 1, '2024-06-01 22:00:00', NULL),
(1800, 20, 36, 1, '2024-06-17 22:00:00', NULL),
(1801, 15, 31, 1, '2024-05-23 22:00:00', NULL),
(1806, 15, 34, 1, '2024-06-07 22:00:00', NULL),
(1808, 15, 48, 0, '2024-06-14 22:00:00', NULL),
(1810, 12, 31, 1, '2024-05-25 22:00:00', NULL),
(1815, 12, 31, 1, '2024-05-31 22:00:00', NULL),
(1821, 15, 45, 1, '2024-05-27 22:00:00', NULL),
(1826, 12, 33, 1, '2024-06-05 22:00:00', NULL),
(1830, 20, 45, 1, '2024-06-13 22:00:00', NULL),
(1835, 16, 48, 0, '2024-06-14 22:00:00', NULL),
(1845, 20, 35, 1, '2024-06-05 22:00:00', NULL),
(1851, 15, 44, 1, '2024-06-03 22:00:00', NULL),
(1852, 20, 35, 1, '2024-06-16 22:00:00', NULL),
(1857, 20, 35, 1, '2024-06-02 22:00:00', NULL),
(1858, 16, 31, 0, '2024-06-16 22:00:00', NULL),
(1863, 15, 33, 0, '2024-06-14 22:00:00', NULL),
(1866, 15, 47, 0, '2024-06-05 22:00:00', NULL),
(1867, 12, 36, 1, '2024-06-19 22:00:00', NULL),
(1869, 16, 35, 0, '2024-05-24 22:00:00', NULL),
(1873, 15, 43, 0, '2024-05-25 22:00:00', NULL),
(1876, 20, 45, 0, '2024-05-26 22:00:00', NULL),
(1880, 15, 31, 1, '2024-05-23 22:00:00', NULL),
(1889, 16, 34, 1, '2024-06-10 22:00:00', NULL),
(1895, 16, 44, 0, '2024-06-19 22:00:00', NULL),
(1900, 20, 34, 0, '2024-06-20 22:00:00', NULL),
(1902, 20, 43, 0, '2024-06-15 22:00:00', NULL),
(1909, 20, 35, 1, '2024-06-08 22:00:00', NULL),
(1915, 16, 31, 0, '2024-05-27 22:00:00', NULL),
(1932, 12, 48, 1, '2024-05-30 22:00:00', NULL),
(1934, 20, 36, 1, '2024-06-02 22:00:00', NULL),
(1936, 16, 58, 1, '2024-06-10 22:00:00', NULL),
(1939, 16, 49, 0, '2024-06-18 22:00:00', NULL),
(1941, 16, 55, 0, '2024-05-26 22:00:00', NULL),
(1950, 15, 52, 0, '2024-06-07 22:00:00', NULL),
(1953, 15, 45, 0, '2024-05-30 22:00:00', NULL),
(1956, 15, 57, 0, '2024-06-01 22:00:00', NULL),
(1959, 12, 43, 1, '2024-05-29 22:00:00', NULL),
(1961, 12, 47, 0, '2024-06-19 22:00:00', NULL),
(1964, 12, 43, 1, '2024-06-08 22:00:00', NULL),
(1965, 12, 54, 1, '2024-05-28 22:00:00', NULL),
(1966, 12, 51, 0, '2024-06-17 22:00:00', NULL),
(1967, 16, 45, 1, '2024-06-03 22:00:00', NULL),
(1969, 20, 33, 0, '2024-06-04 22:00:00', NULL),
(1975, 20, 55, 1, '2024-06-05 22:00:00', NULL),
(1976, 15, 45, 0, '2024-06-11 22:00:00', NULL),
(1979, 16, 52, 1, '2024-06-07 22:00:00', NULL),
(1981, 12, 56, 0, '2024-05-22 22:00:00', NULL),
(1987, 20, 58, 1, '2024-06-08 22:00:00', NULL),
(1989, 12, 31, 1, '2024-05-29 22:00:00', NULL),
(1990, 15, 47, 0, '2024-06-11 22:00:00', NULL),
(1991, 12, 47, 1, '2024-05-22 22:00:00', NULL),
(1992, 20, 47, 1, '2024-06-16 22:00:00', NULL),
(1994, 20, 54, 1, '2024-05-27 22:00:00', NULL),
(1995, 16, 56, 1, '2024-05-29 22:00:00', NULL),
(2004, 12, 44, 1, '2024-06-19 22:00:00', NULL),
(2009, 20, 53, 0, '2024-05-27 22:00:00', NULL),
(2011, 12, 55, 1, '2024-06-19 22:00:00', NULL),
(2013, 20, 47, 1, '2024-05-24 22:00:00', NULL),
(2015, 12, 49, 0, '2024-05-30 22:00:00', NULL),
(2017, 12, 51, 1, '2024-05-25 22:00:00', NULL),
(2018, 15, 35, 0, '2024-06-20 22:00:00', NULL),
(2021, 15, 44, 0, '2024-05-26 22:00:00', NULL),
(2023, 12, 53, 0, '2024-06-11 22:00:00', NULL),
(2025, 12, 56, 0, '2024-05-30 22:00:00', NULL),
(2027, 20, 57, 0, '2024-06-01 22:00:00', NULL),
(2028, 16, 36, 0, '2024-06-04 22:00:00', NULL),
(2033, 12, 49, 0, '2024-06-04 22:00:00', NULL),
(2036, 16, 34, 1, '2024-06-15 22:00:00', NULL),
(2037, 15, 36, 1, '2024-06-02 22:00:00', NULL),
(2039, 12, 52, 0, '2024-06-02 22:00:00', NULL),
(2046, 20, 45, 1, '2024-05-22 22:00:00', NULL),
(2047, 20, 31, 0, '2024-06-12 22:00:00', NULL),
(2050, 12, 53, 1, '2024-06-05 22:00:00', NULL),
(2056, 15, 34, 1, '2024-05-22 22:00:00', NULL),
(2060, 15, 36, 1, '2024-06-17 22:00:00', NULL),
(2064, 15, 49, 0, '2024-05-24 22:00:00', NULL),
(2065, 15, 56, 1, '2024-06-19 22:00:00', NULL),
(2073, 12, 57, 0, '2024-05-23 22:00:00', NULL),
(2074, 20, 52, 0, '2024-06-04 22:00:00', NULL),
(2075, 16, 34, 1, '2024-06-12 22:00:00', NULL),
(2076, 15, 44, 1, '2024-06-19 22:00:00', NULL),
(2082, 20, 45, 1, '2024-06-18 22:00:00', NULL),
(2088, 12, 55, 0, '2024-05-24 22:00:00', NULL),
(2094, 16, 57, 1, '2024-06-05 22:00:00', NULL),
(2099, 15, 45, 0, '2024-06-09 22:00:00', NULL),
(2105, 15, 45, 1, '2024-05-31 22:00:00', NULL),
(2110, 12, 55, 1, '2024-06-15 22:00:00', NULL),
(2113, 15, 47, 0, '2024-05-29 22:00:00', NULL),
(2116, 15, 44, 0, '2024-06-13 22:00:00', NULL),
(2117, 12, 43, 1, '2024-06-05 22:00:00', NULL),
(2118, 16, 52, 0, '2024-06-02 22:00:00', NULL),
(2121, 16, 45, 1, '2024-06-04 22:00:00', NULL),
(2122, 15, 34, 0, '2024-06-11 22:00:00', NULL),
(2125, 20, 47, 1, '2024-06-17 22:00:00', NULL),
(2130, 20, 43, 1, '2024-06-09 22:00:00', NULL),
(2131, 16, 51, 1, '2024-06-16 22:00:00', NULL),
(2135, 15, 52, 0, '2024-05-31 22:00:00', NULL),
(2136, 12, 36, 1, '2024-06-04 22:00:00', NULL),
(2138, 15, 49, 1, '2024-06-05 22:00:00', NULL),
(2140, 12, 56, 1, '2024-06-06 22:00:00', NULL),
(2141, 15, 55, 1, '2024-06-18 22:00:00', NULL),
(2143, 12, 52, 0, '2024-06-11 22:00:00', NULL),
(2148, 16, 53, 1, '2024-05-25 22:00:00', NULL),
(2154, 16, 44, 0, '2024-05-30 22:00:00', NULL),
(2157, 20, 47, 1, '2024-06-19 22:00:00', NULL),
(2158, 15, 51, 0, '2024-06-11 22:00:00', NULL),
(2165, 15, 55, 1, '2024-05-30 22:00:00', NULL),
(2170, 20, 51, 0, '2024-05-30 22:00:00', NULL),
(2172, 15, 35, 0, '2024-06-06 22:00:00', NULL),
(2173, 15, 35, 0, '2024-06-20 22:00:00', NULL),
(2174, 16, 52, 1, '2024-06-15 22:00:00', NULL),
(2177, 12, 45, 1, '2024-06-12 22:00:00', NULL),
(2178, 12, 45, 1, '2024-05-23 22:00:00', NULL),
(2180, 16, 56, 1, '2024-05-24 22:00:00', NULL),
(2181, 12, 44, 0, '2024-06-04 22:00:00', NULL),
(2186, 16, 31, 0, '2024-06-11 22:00:00', NULL),
(2188, 20, 54, 0, '2024-06-07 22:00:00', NULL),
(2190, 16, 56, 1, '2024-05-29 22:00:00', NULL),
(2192, 20, 47, 1, '2024-06-04 22:00:00', NULL),
(2197, 15, 49, 0, '2024-06-06 22:00:00', NULL),
(2199, 15, 33, 1, '2024-05-28 22:00:00', NULL),
(2200, 16, 54, 1, '2024-06-20 22:00:00', NULL),
(2203, 12, 52, 1, '2024-06-09 22:00:00', NULL),
(2206, 20, 33, 1, '2024-05-26 22:00:00', NULL),
(2211, 16, 31, 1, '2024-05-26 22:00:00', NULL),
(2215, 16, 47, 0, '2024-06-08 22:00:00', NULL),
(2219, 15, 58, 0, '2024-06-19 22:00:00', NULL),
(2223, 16, 36, 1, '2024-06-09 22:00:00', NULL),
(2232, 20, 43, 1, '2024-06-14 22:00:00', NULL),
(2235, 12, 49, 1, '2024-06-12 22:00:00', NULL),
(2236, 15, 48, 0, '2024-06-20 22:00:00', NULL),
(2238, 20, 51, 0, '2024-06-19 22:00:00', NULL),
(2240, 16, 36, 1, '2024-05-24 22:00:00', NULL),
(2244, 12, 47, 1, '2024-06-20 22:00:00', NULL),
(2246, 12, 57, 0, '2024-06-10 22:00:00', NULL),
(2251, 16, 44, 1, '2024-06-09 22:00:00', NULL),
(2254, 20, 47, 0, '2024-05-27 22:00:00', NULL),
(2255, 20, 48, 0, '2024-05-31 22:00:00', NULL),
(2258, 16, 35, 1, '2024-06-18 22:00:00', NULL),
(2261, 15, 51, 1, '2024-06-18 22:00:00', NULL),
(2262, 20, 57, 1, '2024-06-08 22:00:00', NULL),
(2270, 16, 58, 1, '2024-06-20 22:00:00', NULL),
(2272, 16, 58, 0, '2024-06-02 22:00:00', NULL),
(2274, 12, 56, 1, '2024-06-03 22:00:00', NULL),
(2275, 16, 49, 1, '2024-06-16 22:00:00', NULL),
(2280, 15, 36, 0, '2024-06-04 22:00:00', NULL);

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
-- Table structure for table `interests`
--

CREATE TABLE `interests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `interests`
--

INSERT INTO `interests` (`id`, `title`) VALUES
(1, 'Photography'),
(2, 'Cooking'),
(4, 'Travel'),
(6, 'Technology'),
(22, 'Code');

-- --------------------------------------------------------

--
-- Table structure for table `interest_user`
--

CREATE TABLE `interest_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `interest_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `interest_user`
--

INSERT INTO `interest_user` (`id`, `user_id`, `interest_id`) VALUES
(124, 33, 4),
(125, 33, 2),
(126, 33, 1),
(130, 36, 2),
(131, 36, 22),
(145, 43, 1),
(146, 43, 22),
(147, 43, 4),
(151, 45, 6),
(152, 45, 2),
(159, 34, 1),
(160, 47, 6),
(161, 47, 22),
(162, 48, 1),
(176, 49, 4),
(177, 49, 2),
(178, 49, 1),
(180, 51, 6),
(181, 51, 1),
(182, 52, 4),
(183, 52, 22),
(184, 52, 2),
(185, 53, 22),
(186, 53, 2),
(187, 53, 6),
(188, 54, 6),
(189, 54, 22),
(190, 54, 1),
(191, 55, 6),
(192, 55, 2),
(193, 55, 1),
(194, 56, 2),
(195, 56, 22),
(196, 56, 1),
(197, 57, 6),
(198, 57, 22),
(199, 57, 4),
(200, 58, 6),
(201, 58, 4),
(202, 58, 22),
(206, 35, 2),
(207, 35, 4),
(225, 60, 6),
(239, 44, 2),
(240, 44, 4),
(241, 44, 6),
(246, 31, 1);

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
(1, '2024_06_06_103553_create_role_table', 1),
(9, '2024_06_06_120319_create_suscriptions_table', 2),
(16, '2024_06_06_121105_create_privacy_options_table', 3),
(30, '2024_06_06_121726_create_categories_table', 4),
(31, '2024_06_06_121907_create_interests_table', 5),
(32, '2024_06_06_121947_create_cultures_table', 6),
(207, '2014_10_12_000000_create_users_table', 7),
(226, '2014_10_12_100000_create_password_reset_tokens_table', 8),
(227, '2014_10_12_100000_create_password_resets_table', 8),
(228, '2019_08_19_000000_create_failed_jobs_table', 8),
(229, '2019_12_14_000001_create_personal_access_tokens_table', 8),
(230, '2024_06_06_102927_create_user_infos_table', 8),
(231, '2024_06_07_123822_create_notifications_table', 8),
(232, '2024_06_10_195817_create_user_category', 8),
(233, '2024_06_10_203153_create_user_interest_table', 8),
(234, '2024_06_12_204343_create_culture_user_table', 8),
(235, '2024_06_12_220230_create_content_types_table', 9),
(236, '2024_06_12_220100_create_content_table', 10),
(237, '2024_06_12_220601_create_workers_table', 11),
(238, '2024_06_12_220803_create_professions_table', 12),
(242, '2024_06_12_221058_create_profession_worker_table', 13),
(243, '2024_06_12_221246_create_content_workers_professions_table', 13),
(244, '2024_06_12_222502_create_content_categories_table', 13),
(258, '2024_06_19_100820_create_discussions_table', 14),
(259, '2024_06_19_185221_create_comments_table', 15),
(260, '2024_06_20_080222_create_engagements_table', 16),
(261, '2024_06_22_094058_create_badges_table', 17),
(262, '2024_06_22_094404_create_badges_users', 18),
(263, '2024_06_22_223202_create_reports_table', 19),
(264, '2024_06_22_232929_create_user_messages_table', 20),
(266, '2024_06_23_091948_create_activities_table', 21),
(268, '2024_06_23_111720_create_comment_reports_table', 22),
(269, '2024_06_24_223135_create_site_settings_table', 23);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `title`) VALUES
(1, 'App'),
(2, 'No'),
(3, 'Email');

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
-- Table structure for table `privacy_options`
--

CREATE TABLE `privacy_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacy_options`
--

INSERT INTO `privacy_options` (`id`, `title`) VALUES
(1, 'Public'),
(2, 'My Friends'),
(3, 'Only Me');

-- --------------------------------------------------------

--
-- Table structure for table `professions`
--

CREATE TABLE `professions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `professions`
--

INSERT INTO `professions` (`id`, `title`) VALUES
(6, 'Accountant'),
(20, 'Artist'),
(21, 'Writer'),
(22, 'Actor'),
(23, 'Director'),
(24, 'Producer'),
(25, 'Cinematographer'),
(26, 'Editor'),
(27, 'Costume designer'),
(33, 'Graphic Designer'),
(34, 'Manager'),
(35, 'Host');

-- --------------------------------------------------------

--
-- Table structure for table `profession_worker`
--

CREATE TABLE `profession_worker` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `worker_id` bigint(20) UNSIGNED NOT NULL,
  `profession_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profession_worker`
--

INSERT INTO `profession_worker` (`id`, `worker_id`, `profession_id`) VALUES
(4, 2, 22),
(8, 5, 25),
(9, 4, 26),
(10, 5, 27),
(45, 1, 22),
(48, 4, 24),
(51, 3, 22),
(53, 1, 23),
(55, 2, 23),
(56, 5, 23),
(57, 4, 25),
(59, 4, 22),
(60, 36, 34),
(61, 36, 33),
(64, 3, 35),
(67, 41, 23),
(68, 41, 34),
(69, 41, 35),
(70, 42, 26),
(71, 43, 24),
(72, 43, 21),
(73, 44, 33),
(74, 45, 35),
(75, 45, 24),
(76, 45, 21),
(77, 46, 20),
(78, 47, 34),
(79, 47, 33),
(80, 47, 23),
(81, 48, 6),
(82, 48, 20),
(83, 48, 27),
(84, 49, 23),
(85, 49, 20),
(86, 50, 24),
(87, 50, 6),
(88, 51, 24),
(89, 52, 20),
(90, 52, 21),
(91, 53, 6),
(92, 53, 25),
(93, 54, 20),
(94, 54, 23),
(95, 55, 21),
(96, 56, 27),
(97, 56, 24),
(98, 56, 34),
(99, 57, 33),
(100, 57, 6),
(101, 58, 35),
(102, 58, 23),
(103, 58, 6),
(104, 59, 24),
(105, 59, 27),
(106, 59, 34),
(107, 60, 24),
(108, 60, 25),
(109, 61, 25),
(110, 61, 27),
(111, 61, 35),
(112, 62, 25),
(113, 63, 34),
(114, 63, 24),
(115, 63, 25),
(116, 64, 23),
(117, 64, 20),
(118, 64, 27),
(119, 65, 6),
(120, 66, 21),
(121, 66, 6),
(122, 66, 27),
(123, 67, 34),
(124, 68, 6),
(125, 69, 35),
(126, 69, 20);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(255) NOT NULL,
  `report_owner` bigint(20) UNSIGNED NOT NULL,
  `reported_user` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `comment`, `report_owner`, `reported_user`, `created_at`, `updated_at`) VALUES
(24, 'Natus rerum sunt fugit officia.', 44, 54, '2024-05-26 22:00:00', '2024-06-22 20:39:32'),
(26, 'Repudiandae non in eligendi cumque voluptates illo aliquam.', 33, 49, '2024-05-31 22:00:00', '2024-06-22 20:39:32'),
(29, 'Rerum nemo labore corporis.', 33, 53, '2024-05-25 22:00:00', '2024-06-22 20:39:32'),
(35, 'Sed dolore corrupti beatae.', 57, 35, '2024-06-14 22:00:00', '2024-06-22 20:39:32'),
(36, 'Est sunt qui at blanditiis iste.', 34, 51, '2024-06-07 22:00:00', '2024-06-22 20:39:32'),
(37, 'Quidem dolore consequuntur quisquam fuga.', 56, 49, '2024-05-26 22:00:00', '2024-06-22 20:39:32'),
(38, 'Ullam maxime ab maxime ea numquam maxime.', 36, 55, '2024-06-06 22:00:00', '2024-06-22 20:39:32'),
(40, 'Optio itaque dolores quaerat quas rerum.', 49, 34, '2024-06-03 22:00:00', '2024-06-22 20:39:32'),
(41, 'Et possimus error magnam recusandae consectetur quae.', 52, 49, '2024-06-19 22:00:00', '2024-06-22 20:39:32'),
(42, 'Deleniti praesentium corporis similique laborum.', 45, 57, '2024-05-25 22:00:00', '2024-06-22 21:33:39'),
(44, 'Qui ab modi occaecati aperiam animi.', 52, 54, '2024-05-28 22:00:00', '2024-06-22 21:33:39'),
(47, 'Nesciunt fugit autem quaerat molestiae.', 58, 49, '2024-05-24 22:00:00', '2024-06-22 21:33:39'),
(49, 'Nobis natus dolor cumque.', 48, 43, '2024-05-24 22:00:00', '2024-06-22 21:33:39'),
(50, 'Odio suscipit quidem facilis.', 35, 52, '2024-06-04 22:00:00', '2024-06-22 21:33:39'),
(52, 'Dolores nisi eos pariatur illo.', 58, 33, '2024-06-13 22:00:00', '2024-06-22 21:33:39'),
(54, 'Voluptates eos autem ipsum laboriosam.', 35, 55, '2024-06-01 22:00:00', '2024-06-22 21:33:39'),
(55, 'Dicta vel aliquam velit.', 36, 53, '2024-06-05 22:00:00', '2024-06-22 21:33:39'),
(57, 'Ab sit cum eligendi et molestias inventore.', 58, 45, '2024-05-26 22:00:00', '2024-06-22 21:33:39'),
(58, 'Consequatur ea laborum voluptas eligendi.', 55, 54, '2024-06-08 22:00:00', '2024-06-22 21:33:39'),
(61, 'Quia amet blanditiis repudiandae mollitia.', 33, 35, '2024-06-04 22:00:00', '2024-06-22 21:33:39');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`) VALUES
(1, 'Admin'),
(2, 'Regular'),
(3, 'Artist');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slogan` varchar(255) NOT NULL,
  `promo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `title`, `slogan`, `promo`, `created_at`, `updated_at`) VALUES
(1, 'The changed title', 'Changing titles is fun', 'Promo for users..', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `sub_type`) VALUES
(1, 'Free Subscription'),
(2, 'Normal Subscription'),
(3, 'Premium Subscription');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `privacy` bigint(20) UNSIGNED NOT NULL,
  `role` bigint(20) UNSIGNED NOT NULL,
  `sub_plan` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `points` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `username`, `first_name`, `last_name`, `gender`, `age`, `privacy`, `role`, `sub_plan`, `status`, `points`) VALUES
(31, 'borche@gmail.com', '$2y$10$NwZgeupaN0Z97nnKlmAtmOmzsuHk0Rc82zWfhiz5tbBVx/T6OXBbe', 'borche99', 'Borche', 'Kojikj', 'Male', 25, 2, 1, 3, 2, 425),
(33, 'oleannon@yahoo.com', '$2y$10$cya.2iWmVSP9RxSodWhqBep714jZQS4iQ0cn7AIAdIZwjh2ozvF/.', 'javon.hackett', 'Jovani', 'Marquardt', 'female', 27, 3, 2, 1, 1, 20),
(34, 'libbie.effertz@yost.biz', '$2y$10$pkXGPPYFIzs/u8lDzEEyk.T38XQj.0Fisn9GryjbKDBup/yh9AXL6', 'carmella.schowalter', 'Janett', 'Pfeffer', 'Male', 29, 1, 2, 3, NULL, 50),
(35, 'vwaelchi@dietrich.com', '$2y$10$CgiRfVsIpYhBay8OrM4B4e/9FL/5lpiM5cyagMMhqNJx/E2gLIET.', 'darby.zboncak', 'Cindyy', 'Pollich', 'Female', 57, 1, 3, 2, 1, NULL),
(36, 'jaskolski.maye@schowalter.info', '$2y$10$Q.z7F0jbP72K0xUmUUmv5uJEyV.H4nO8nWKPt6CZCFfdLPxJ.btam', 'schoen.briana', 'Barry', 'Johnson', 'male', 48, 1, 2, 3, 1, NULL),
(43, 'noemy.smith@graham.info', '$2y$10$AlJvx5SBcaeGUOmCrrp5R.BKKkO3oBxbDht1DngW0ZRZCIEx64H2W', 'rachelle73', 'Aleen', 'Boyer', 'female', 63, 3, 2, 1, 2, NULL),
(44, 'arno79@gmail.com', '$2y$10$FJ4.nouWCbXaVRNFLmjSTOKwuAhyOtzKsGAdaVw3XWk1Onsb80xG.', 'elehner', 'Adrain', 'Ortiz', 'Male', 31, 2, 3, 3, 2, NULL),
(45, 'pratke@jacobi.com', '$2y$10$pnCSMerUKsZot.jSaXULduzgiAN40hoqeeZotxR99N8OW5SluTSFO', 'emard.amiya', 'Annabelle', 'Beatty', 'female', 18, 1, 3, 3, 2, NULL),
(47, 'test@gmail.com', 'Test1234!', 'asdasd', 'asdasd', 'asdasd', 'male', 24, 1, 2, 2, NULL, NULL),
(48, 'test1@gmail.com', '$2y$10$oNryOZ86Dqml6rDfYywVnuqvubbGRqdXu6lcxAKV5zWU0qAQWmZti', 'asdad', 'asdasd', 'asdasd', 'male', 25, 2, 2, 1, NULL, NULL),
(49, 'gay08@yahoo.com', '$2y$10$hXbUAQF3J1pfaAzObDWqE.Rs9.lRa7fVI/UD/AGp1RX3yB5DiBbS.', 'dward', 'Chris', 'Bahringer', 'male', 56, 3, 3, 3, 2, NULL),
(51, 'ray19@hotmail.com', '$2y$10$Gh9qdCtRY40v7itV5ccipOYi5npLEWlSz9iq4OjW//nB1XjDU9qie', 'isaac.emard', 'Demarcus', 'Gislason', 'female', 34, 3, 3, 3, NULL, NULL),
(52, 'kelly54@gmail.com', '$2y$10$Il1tDmpKMEz1o3GhTz2c6OGouEKWuMNLnhz1eqTavNooz7mkQ4zEy', 'janiya41', 'Esperanza', 'Welch', 'male', 34, 3, 2, 2, NULL, NULL),
(53, 'beier.logan@oreilly.net', '$2y$10$idgGOeDiYMi50OehVXh0OeR9F7CbfDvapnIsqkP9yhCyxgF1hQII6', 'hayden.kunze', 'Rachelle', 'Hickle', 'male', 49, 2, 2, 2, 2, NULL),
(54, 'henderson11@yahoo.com', '$2y$10$NiGJvo5PRSZ0RuNo5vrRfeHO0/Z5hT3mv9uWzSYLCBoB3/mYI.AMu', 'purdy.betsy', 'Cordelia', 'West', 'female', 25, 3, 2, 2, 2, NULL),
(55, 'wupton@romaguera.com', '$2y$10$cuBu95ux6AmbVlPhUgX04u03CNt7AawYJy78STWmz1rd.DytV5Agi', 'carlo99', 'Dock', 'Gusikowski', 'female', 25, 3, 2, 2, NULL, NULL),
(56, 'aauer@yahoo.com', '$2y$10$FWdntYjrA1SkudD4kbVlEu8IwBHhigdekgPChWBd8AYLD/zi7Jb2y', 'benton.murazik', 'Julien', 'McCullough', 'female', 35, 2, 3, 1, 2, NULL),
(57, 'elinor61@yahoo.com', '$2y$10$MP8z1g4D3.tu7JiiQVRgHexBrjsFe5Rb.5n2SNzFHM3LoyFRI6/zu', 'skertzmann', 'Edmond', 'Torp', 'male', 40, 3, 2, 2, 2, NULL),
(58, 'dtreutel@hotmail.com', '$2y$10$vIOwr1JU0c0fseTuxW8bs.jScuckYLnWw6TeaW8t6AHuCywSzONsa', 'alysson.botsford', 'Kasey', 'Fritsch', 'female', 60, 1, 2, 3, 2, NULL),
(60, 'test2@gmail.com', '$2y$10$3FzEZbMoSw0DlD7vUDT5sOvDcuChds9FD.yIoK5FdeqzDOiSdhsaG', '123123', '123123', '123123', 'male', 25, 1, 2, 2, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_infos`
--

CREATE TABLE `user_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `notifications` varchar(255) NOT NULL,
  `explore_style` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_infos`
--

INSERT INTO `user_infos` (`id`, `description`, `user_id`, `notifications`, `explore_style`) VALUES
(8, 'asdasdasd', 31, '[\"1\"]', 'regular'),
(10, 'Eligendi veniam et nobis qui voluptas dolorem magni repellat. Qui dolorem repellendus expedita a architecto. Vel est laudantium et iste. In sint provident magnam.', 33, '1', 'Show me'),
(11, 'Eos ipsum hic nostrum atque sunt. Quasi qui nam cumque. Aperiam consectetur quia nemo non expedita. Quidem sunt laboriosam iusto aut provident.', 34, '1', 'Show me'),
(12, 'Mollitia laudantium nesciunt et voluptas et sint omnis ex. Et provident voluptates voluptatibus ut non. Magni illum labore rerum labore eos.', 35, '1', 'Regular'),
(13, 'Et est voluptate accusamus amet. Fugiat necessitatibus sint dolor nulla nam repudiandae sit aut. Sint exercitationem unde sunt dolorem. Et fugiat facere impedit.', 36, '2', 'Regular'),
(20, 'Nihil vel fugiat dolorem velit voluptate est delectus. Tempora ab dolores autem dignissimos dicta hic. Rerum voluptates quae suscipit dolorem. Ut enim expedita fugit aut rerum iusto.', 43, '1', 'Show me'),
(21, 'Et ipsam quia quia possimus est aperiam quam. Et repellat omnis provident at cumque impedit porro. Modi eum ut voluptatum id a est.', 44, '1', 'Show me'),
(22, 'Quam aliquam quam expedita et omnis officiis. Tempora quo rerum voluptas cupiditate. Et perferendis vel placeat eaque nulla qui. Necessitatibus laboriosam quo odit corporis consequatur et ut.', 45, '3', 'Show me'),
(24, 'asdasdas', 47, '[\"1\"]', 'artist'),
(25, 'asdasd', 48, '[\"3\"]', 'regular'),
(26, 'Ut nisi mollitia in et. Ad in sequi mollitia excepturi laboriosam. Sed ipsam laborum voluptas consequatur nostrum. Quae eos accusamus cumque repellendus dolorum nesciunt beatae.', 49, '2', 'Show me'),
(28, 'Reprehenderit reiciendis odio omnis earum rerum minus. Ipsa incidunt odio et praesentium nulla rerum quae esse. Consequatur iusto aliquid voluptas perferendis impedit distinctio quis tenetur.', 51, '3', 'Show me'),
(29, 'Fugit ut optio est dolorem sed voluptatem adipisci. Debitis optio et ut. Aut quas iure optio eligendi suscipit at. Beatae velit omnis laudantium est ipsum.', 52, '3', 'Regular'),
(30, 'Aliquid ut dolores ut non sequi aliquid. Nulla rerum sint enim modi recusandae ut.', 53, '2', 'Show me'),
(31, 'Sint alias optio est voluptatem. Officia quis unde ex aut consequuntur. Dignissimos architecto sed sunt cupiditate porro hic facere.', 54, '3', 'Regular'),
(32, 'Eum porro est velit suscipit voluptate. Alias quo autem et architecto aut. Eveniet enim possimus possimus est.', 55, '2', 'Show me'),
(33, 'Repellendus aut corrupti suscipit consectetur dolorem vero et. Sunt dolor ad voluptatem eos aut fugit alias. Aut aspernatur quae adipisci itaque nobis omnis quasi.', 56, '3', 'Show me'),
(34, 'Cum aspernatur voluptatem ut. Et qui incidunt ut occaecati fuga magni illum. Omnis cum voluptatum aperiam voluptatum dignissimos. Similique modi cupiditate id esse ea distinctio.', 57, '1', 'Show me'),
(35, 'Ipsum et id quod eaque iste nulla tenetur. Cum deserunt a cumque voluptatem ducimus. Sequi earum aliquid sed veritatis dolorem in. Non qui amet recusandae quasi laborum est voluptatibus.', 58, '2', 'Regular'),
(37, '2131', 60, '[\"1\"]', 'regular');

-- --------------------------------------------------------

--
-- Table structure for table `user_messages`
--

CREATE TABLE `user_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_messages`
--

INSERT INTO `user_messages` (`id`, `user_id`, `message`, `created_at`, `updated_at`) VALUES
(1, 49, 'Your account has been suspended.', '2024-06-22 21:32:31', '2024-06-22 21:32:31'),
(2, 57, 'Your account has been suspended.', '2024-06-22 21:33:55', '2024-06-22 21:33:55'),
(3, 36, 'Your account has been suspended.', '2024-06-22 21:34:16', '2024-06-22 21:34:16'),
(4, 56, 'Your account has been suspended.', '2024-06-22 21:34:26', '2024-06-22 21:34:26'),
(8, 49, 'Your account has been suspended.', '2024-06-23 07:53:22', '2024-06-23 07:53:22'),
(9, 60, 'Your account has been suspended.', '2024-06-23 10:08:12', '2024-06-23 10:08:12'),
(12, 33, 'Your account has been suspended.', '2024-06-24 18:44:39', '2024-06-24 18:44:39'),
(13, 33, 'Your account has been suspended.', '2024-06-24 18:44:45', '2024-06-24 18:44:45'),
(14, 57, 'Your account has been suspended.', '2024-06-24 18:44:53', '2024-06-24 18:44:53'),
(16, 53, 'Your account has been suspended.', '2024-06-24 18:45:13', '2024-06-24 18:45:13'),
(17, 53, 'Your account has been suspended.', '2024-06-24 18:45:20', '2024-06-24 18:45:20'),
(18, 54, 'Your account has been suspended.', '2024-06-24 18:45:24', '2024-06-24 18:45:24'),
(21, 31, 'Your account has been suspended.', '2024-06-24 18:47:30', '2024-06-24 18:47:30');

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `bio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`id`, `first_name`, `last_name`, `bio`) VALUES
(1, 'Leoa', 'Dicaa', 'Bla Bla'),
(2, 'Kate', 'Cico', 'Bla Blo'),
(3, 'David', 'Kakol', 'Elo elo Sta'),
(4, 'Wireter sasad', 'Oliveri', 'asdasdasd'),
(5, 'Deniel', 'Borro', 'asdasdasd'),
(36, 'Podcast worker 1', 'asdasd', 'asdasdasdasd'),
(41, 'River', 'Emmerich', 'Quidem eaque sunt sit. Quo debitis vel qui dolor ipsum. Amet ea dolorum ad quo ut magnam. Et corrupti eum perferendis nobis.'),
(42, 'Arno', 'Hamill', 'Quo reprehenderit reiciendis eaque rerum in facilis voluptatem. Voluptatem explicabo qui praesentium illo. Quisquam voluptas sint expedita et et voluptas. Quia nulla in et quos blanditiis occaecati.'),
(43, 'Elsa', 'O\'Reilly', 'Consequatur possimus nostrum quaerat nihil molestiae explicabo. Repellat animi et blanditiis sed a. Optio modi facere harum aut debitis consequuntur.'),
(44, 'Edwardo', 'Torphy', 'Et fugit fuga deleniti sunt et occaecati ut. Corrupti nemo incidunt quia veniam ea. Aliquid est corporis voluptas excepturi. Animi unde tempora tempore fuga quod.'),
(45, 'Nico', 'Effertz', 'Aut tempora optio porro inventore eligendi beatae rem velit. Eligendi quisquam saepe voluptatibus aperiam dolor rerum. Exercitationem sit distinctio aut deserunt cum unde.'),
(46, 'Coby', 'O\'Keefe', 'Necessitatibus et voluptatem nihil harum. Ipsam repudiandae sit ut voluptas laborum voluptatem. Dolor quia hic veniam voluptas aut odio. Dolor impedit saepe et animi quas.'),
(47, 'Merlin', 'Kovacek', 'Ratione sit perferendis ipsam perspiciatis. Aspernatur explicabo totam mollitia voluptas. Non molestiae itaque omnis autem possimus.'),
(48, 'Lucio', 'Rath', 'Dolor dolorum quia quae delectus est et recusandae. Impedit dolorem aut libero magni harum molestias omnis. Eius quasi eum repellendus qui minus illum.'),
(49, 'Curtis', 'Rath', 'Consequatur necessitatibus quia officiis consequatur necessitatibus explicabo qui. Nihil quia tempore hic quas. Fugit dolorem recusandae voluptate.'),
(50, 'Jena', 'Zemlak', 'Sapiente sint ad veniam voluptatem nam similique earum omnis. Ad molestiae cum mollitia vero ab. Quis quia distinctio aut quia.'),
(51, 'Einar', 'Glover', 'Vitae labore soluta suscipit dignissimos ratione. Esse dolor et velit veniam impedit unde repellendus. Repudiandae molestiae et est est rerum. Molestiae id harum ea.'),
(52, 'Lonie', 'Prosacco', 'Quia quae excepturi pariatur dolores maxime. Repudiandae debitis nemo voluptatem distinctio. Perspiciatis vitae molestiae saepe quas doloremque officiis ipsum.'),
(53, 'Chesley', 'Williamson', 'Ad rerum quis et vel tempora laudantium qui. Et odit enim nihil est. Ea ratione deserunt deleniti provident ipsum.'),
(54, 'Charlene', 'Auer', 'Doloribus error nihil omnis aut assumenda. Enim aliquam voluptas asperiores dolorum possimus. Ut repudiandae qui libero quo illo nesciunt. Soluta error incidunt atque optio qui aut.'),
(55, 'Mervin', 'Durgan', 'Blanditiis necessitatibus repellat a. Odio repellat voluptatem suscipit rem nobis alias. Doloremque omnis expedita accusantium voluptas aut quae.'),
(56, 'Lexi', 'Rosenbaum', 'Nobis eveniet assumenda ea perspiciatis reiciendis deserunt. Ut pariatur placeat beatae. Quasi a sint fuga est. Et aut architecto est consequatur assumenda dolorum fuga.'),
(57, 'Ricky', 'Halvorson', 'Quae magni nisi cupiditate quam quo consectetur. Expedita ab hic illum deleniti incidunt. Et quis commodi eligendi.'),
(58, 'Lilliana', 'Schuster', 'Ut sint cupiditate rerum rerum et ab. Eaque ipsum qui quos delectus at. Aperiam quo sit fugiat aut possimus. Tempora aut architecto maiores fugiat velit dolor modi.'),
(59, 'Walton', 'Schmeler', 'Occaecati est nulla sit esse non perspiciatis numquam sed. Non provident minima maxime cum. Enim molestiae autem dolore quo provident aut maiores. Eligendi sed quo est sequi eos.'),
(60, 'Royal', 'Feil', 'Magnam unde asperiores nulla. Cumque minus animi exercitationem quo pariatur voluptas assumenda. Quos tempora consequuntur incidunt. Beatae omnis cum modi aut. Recusandae optio earum ad autem.'),
(61, 'Cletus', 'Kuhic', 'Ad perspiciatis ex odio amet. Doloremque impedit ut rem provident voluptatem atque. Nihil corrupti labore sunt quae iste. Sunt et voluptates atque iste repellat dolores.'),
(62, 'Arely', 'Murray', 'Id nam beatae aut unde aliquid explicabo sapiente. Suscipit velit hic sint voluptatem sit. Deserunt culpa explicabo consequatur inventore itaque accusantium.'),
(63, 'Nigel', 'Wolf', 'Necessitatibus ut suscipit ullam adipisci. Enim omnis vero deleniti qui eligendi expedita dolorem placeat.'),
(64, 'Clementine', 'White', 'Aliquid architecto nesciunt fugit illum provident. Dolor officia minima voluptas esse vel modi dolorem voluptas. Voluptatem adipisci eaque et ex. Et ea nihil in suscipit.'),
(65, 'Talon', 'Trantow', 'Atque quia libero aut tempore neque id. Dolores eum aut eligendi voluptas necessitatibus nam. Quia optio sint quisquam ipsam qui voluptatibus. Iusto quibusdam molestiae voluptates id eum aperiam.'),
(66, 'Richard', 'Batz', 'Mollitia aut dolores molestiae eligendi. Explicabo harum atque quia alias rerum fugiat occaecati. Unde est et earum rerum. Sit error natus magni nihil ea.'),
(67, 'Alysa', 'Schoen', 'Quasi in sint itaque eaque sint eveniet illum. Doloremque beatae illum est maiores. Ex qui ut ab tempora ipsam temporibus quo velit.'),
(68, 'Talia', 'Quitzon', 'Hic enim dolor repellendus. Ipsa omnis suscipit fugit eligendi aut laborum unde.'),
(69, 'Luisa', 'Ortiz', 'Sit amet eius labore exercitationem nihil inventore. Alias qui omnis sint et ducimus. Ducimus officia explicabo quisquam aut quo officia neque officia.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activities_user_id_foreign` (`user_id`);

--
-- Indexes for table `badges`
--
ALTER TABLE `badges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `badges_users`
--
ALTER TABLE `badges_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `badges_users_badge_id_foreign` (`badge_id`),
  ADD KEY `badges_users_user_id_foreign` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_content`
--
ALTER TABLE `category_content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `content_categories_category_id_foreign` (`category_id`),
  ADD KEY `content_categories_content_id_foreign` (`content_id`);

--
-- Indexes for table `category_user`
--
ALTER TABLE `category_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_user_category_id_foreign` (`category_id`),
  ADD KEY `category_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_content_id_foreign` (`content_id`),
  ADD KEY `comments_discussion_id_foreign` (`discussion_id`);

--
-- Indexes for table `comment_reports`
--
ALTER TABLE `comment_reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_reports_comment_id_foreign` (`comment_id`),
  ADD KEY `comment_reports_comment_owner_foreign` (`comment_owner`),
  ADD KEY `comment_reports_report_owner_foreign` (`report_owner`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `content_content_type_foreign` (`content_type`);

--
-- Indexes for table `content_types`
--
ALTER TABLE `content_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content_workers_professions`
--
ALTER TABLE `content_workers_professions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `content_workers_professions_content_id_foreign` (`content_id`),
  ADD KEY `content_workers_professions_profession_id_foreign` (`profession_id`),
  ADD KEY `content_workers_professions_worker_id_foreign` (`worker_id`);

--
-- Indexes for table `cultures`
--
ALTER TABLE `cultures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `culture_user`
--
ALTER TABLE `culture_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `culture_user_user_id_foreign` (`user_id`),
  ADD KEY `culture_user_culture_id_foreign` (`culture_id`);

--
-- Indexes for table `discussions`
--
ALTER TABLE `discussions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `discussions_user_id_foreign` (`user_id`),
  ADD KEY `discussions_content_id_foreign` (`content_id`);

--
-- Indexes for table `engagements`
--
ALTER TABLE `engagements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `engagements_discussion_id_foreign` (`discussion_id`),
  ADD KEY `engagements_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `interests`
--
ALTER TABLE `interests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interest_user`
--
ALTER TABLE `interest_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `interest_user_user_id_foreign` (`user_id`),
  ADD KEY `interest_user_interest_id_foreign` (`interest_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
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
-- Indexes for table `privacy_options`
--
ALTER TABLE `privacy_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professions`
--
ALTER TABLE `professions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profession_worker`
--
ALTER TABLE `profession_worker`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profession_worker_profession_id_foreign` (`profession_id`),
  ADD KEY `profession_worker_worker_id_foreign` (`worker_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reports_report_owner_foreign` (`report_owner`),
  ADD KEY `reports_reported_owner_foreign` (`reported_user`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_privacy_foreign` (`privacy`),
  ADD KEY `users_role_foreign` (`role`),
  ADD KEY `users_sub_plan_foreign` (`sub_plan`);

--
-- Indexes for table `user_infos`
--
ALTER TABLE `user_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_infos_user_id_foreign` (`user_id`);

--
-- Indexes for table `user_messages`
--
ALTER TABLE `user_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_messages_user_id_foreign` (`user_id`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `badges`
--
ALTER TABLE `badges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `badges_users`
--
ALTER TABLE `badges_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `category_content`
--
ALTER TABLE `category_content`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;

--
-- AUTO_INCREMENT for table `category_user`
--
ALTER TABLE `category_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `comment_reports`
--
ALTER TABLE `comment_reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=281;

--
-- AUTO_INCREMENT for table `content_types`
--
ALTER TABLE `content_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `content_workers_professions`
--
ALTER TABLE `content_workers_professions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3076;

--
-- AUTO_INCREMENT for table `cultures`
--
ALTER TABLE `cultures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `culture_user`
--
ALTER TABLE `culture_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT for table `discussions`
--
ALTER TABLE `discussions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `engagements`
--
ALTER TABLE `engagements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2293;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `interests`
--
ALTER TABLE `interests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `interest_user`
--
ALTER TABLE `interest_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=270;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `privacy_options`
--
ALTER TABLE `privacy_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `professions`
--
ALTER TABLE `professions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `profession_worker`
--
ALTER TABLE `profession_worker`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `user_infos`
--
ALTER TABLE `user_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user_messages`
--
ALTER TABLE `user_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `activities_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `badges_users`
--
ALTER TABLE `badges_users`
  ADD CONSTRAINT `badges_users_badge_id_foreign` FOREIGN KEY (`badge_id`) REFERENCES `badges` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `badges_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `category_content`
--
ALTER TABLE `category_content`
  ADD CONSTRAINT `content_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `content_categories_content_id_foreign` FOREIGN KEY (`content_id`) REFERENCES `contents` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `category_user`
--
ALTER TABLE `category_user`
  ADD CONSTRAINT `category_user_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_content_id_foreign` FOREIGN KEY (`content_id`) REFERENCES `contents` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_discussion_id_foreign` FOREIGN KEY (`discussion_id`) REFERENCES `discussions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comment_reports`
--
ALTER TABLE `comment_reports`
  ADD CONSTRAINT `comment_reports_comment_id_foreign` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_reports_comment_owner_foreign` FOREIGN KEY (`comment_owner`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_reports_report_owner_foreign` FOREIGN KEY (`report_owner`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `contents`
--
ALTER TABLE `contents`
  ADD CONSTRAINT `content_content_type_foreign` FOREIGN KEY (`content_type`) REFERENCES `content_types` (`id`);

--
-- Constraints for table `content_workers_professions`
--
ALTER TABLE `content_workers_professions`
  ADD CONSTRAINT `content_workers_professions_content_id_foreign` FOREIGN KEY (`content_id`) REFERENCES `contents` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `content_workers_professions_profession_id_foreign` FOREIGN KEY (`profession_id`) REFERENCES `professions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `content_workers_professions_worker_id_foreign` FOREIGN KEY (`worker_id`) REFERENCES `workers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `culture_user`
--
ALTER TABLE `culture_user`
  ADD CONSTRAINT `culture_user_culture_id_foreign` FOREIGN KEY (`culture_id`) REFERENCES `cultures` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `culture_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `discussions`
--
ALTER TABLE `discussions`
  ADD CONSTRAINT `discussions_content_id_foreign` FOREIGN KEY (`content_id`) REFERENCES `contents` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `discussions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `engagements`
--
ALTER TABLE `engagements`
  ADD CONSTRAINT `engagements_discussion_id_foreign` FOREIGN KEY (`discussion_id`) REFERENCES `discussions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `engagements_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `interest_user`
--
ALTER TABLE `interest_user`
  ADD CONSTRAINT `interest_user_interest_id_foreign` FOREIGN KEY (`interest_id`) REFERENCES `interests` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `interest_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `profession_worker`
--
ALTER TABLE `profession_worker`
  ADD CONSTRAINT `profession_worker_profession_id_foreign` FOREIGN KEY (`profession_id`) REFERENCES `professions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `profession_worker_worker_id_foreign` FOREIGN KEY (`worker_id`) REFERENCES `workers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_report_owner_foreign` FOREIGN KEY (`report_owner`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reports_reported_owner_foreign` FOREIGN KEY (`reported_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_privacy_foreign` FOREIGN KEY (`privacy`) REFERENCES `privacy_options` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_role_foreign` FOREIGN KEY (`role`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_sub_plan_foreign` FOREIGN KEY (`sub_plan`) REFERENCES `subscriptions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_infos`
--
ALTER TABLE `user_infos`
  ADD CONSTRAINT `user_infos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_messages`
--
ALTER TABLE `user_messages`
  ADD CONSTRAINT `user_messages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
