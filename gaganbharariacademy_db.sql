-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2026 at 08:57 AM
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
-- Database: `gaganbharariacademy_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer_keys`
--

CREATE TABLE `answer_keys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answer_keys`
--

INSERT INTO `answer_keys` (`id`, `title`, `file_path`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Forest Guard Bharti ', 'answer_keys/01JSCC0KZ2GN11JJ385FYD97K2.pdf', 1, '2025-04-21 08:58:40', '2025-04-21 08:58:40'),
(2, 'MPSC Foundation Course ', 'answer_keys/01JSCCF4ZY7BHMMWNK75FG9MJ6.pdf', 1, '2025-04-21 09:06:36', '2025-04-21 09:06:55'),
(3, 'police bharati ', 'answer_keys/01JSCCV0964W6RCKKA0CJ9EKAS.pdf', 1, '2025-04-21 09:13:05', '2025-04-21 09:13:05'),
(4, 'Army Bharti ', 'answer_keys/01JSCD04G33A8Z19THGP5SHWDV.pdf', 1, '2025-04-21 09:15:53', '2025-04-21 09:15:53'),
(5, 'Forest Guard Bharti', 'answer_keys/01JW6BX1QKQ0PFDW1N7XYF000E.pdf', 0, '2025-05-26 07:48:22', '2025-05-26 07:48:49');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `author` varchar(255) NOT NULL DEFAULT 'Admin',
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `image`, `author`, `published_at`, `created_at`, `updated_at`) VALUES
(1, '5 Proven Tips to Crack Police Bharti Written Exam', 'Starting your MPSC preparation early gives you a head-start. At Gagan Bharari Academy, our foundation course is tailored for students who’ve just completed 12th. We focus on building a strong base in History, Geography, Current Affairs, and Logical Reasoning—ensuring students are MPSC-ready by the time they graduate.', 'blog-images/01JRZR9KHK1MBCGTM5V67MK9SE.jpg', 'Admin', '2025-04-11 16:35:51', '2025-04-12 11:05:58', '2025-04-16 11:23:10'),
(2, 'Why MPSC Foundation Course After 12th is a Smart Move', 'Starting your MPSC preparation early gives you a head-start. At Gagan Bharari Academy, our foundation course is tailored for students who’ve just completed 12th. We focus on building a strong base in History, Geography, Current Affairs, and Logical Reasoning—ensuring students are MPSC-ready by the time they graduate.', 'blog-images/01JRZRD6KW9GP5D4YY6RSP0KKW.jpg', 'Admin', '2025-04-12 17:39:22', '2025-04-12 12:09:30', '2025-04-16 11:25:08'),
(3, 'How to Prepare for Army Bharti: Physical + Written Strategy', 'Army recruitment isn’t just about physical strength—it requires a strategic blend of fitness, mental alertness, and exam knowledge. Join Gagan Bharari Academy\'s Army Bharti batch and get guided training in running, push-ups, beam, and subject-wise test preparation with weekly evaluations.', 'blog-images/01JRNSP3QD648RPQD156TZ7RV0.jpg', 'Admin', '2025-04-12 20:04:51', '2025-04-12 14:35:04', '2025-04-16 11:26:22'),
(5, 'Student Success Story: From Rural Maharashtra to Government Job', 'Meet Ramesh, a student from a small village in Rajgurunagar, who cracked the Talathi Bharti exam with Gagan Bharari Academy\'s support. His journey proves that with discipline, quality coaching, and the right mindset, anyone can succeed. Read how our personalized mentoring helped him stay focused.', 'blog-images/01JRPR9JD0X5MABBFHS5YBBJAV.avif', 'Admin', '2025-04-13 04:59:54', '2025-04-12 23:29:59', '2025-04-16 11:27:16');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel_cache_356a192b7913b04c54574d18c28d46e6395428ab', 'i:1;', 1750351094),
('laravel_cache_356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1750351094;', 1750351094),
('laravel_cache_livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1780123000),
('laravel_cache_livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1780123000;', 1780123000);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Sachin Darkunde', 'sachindarkunde258@gmail.com', 'about job', 'Testing', '2025-04-18 11:32:50', '2025-04-18 11:32:50'),
(2, 'Sachin Darkunde', 'sachindarkunde258@gmail.com', 'about job', 'Testing', '2025-04-18 11:32:51', '2025-04-18 11:32:51'),
(3, 'Sachin Darkunde', 'sachindarkunde258@gmail.com', 'about job', 'sdsadasd', '2025-04-18 11:35:34', '2025-04-18 11:35:34'),
(4, 'Sachin Darkunde', 'sachindarkunde258@gmail.com', 'about job', 'Testing', '2025-04-18 11:37:46', '2025-04-18 11:37:46'),
(5, 'vaibhav diwate', 'vaibhav@gmail.com', 'about job vancany', 'testing', '2025-04-18 11:38:59', '2025-04-18 11:38:59'),
(6, 'Sachin Darkunde', 'sachindarkunde258@gmail.com', 'about job', 'testing', '2025-04-18 11:43:04', '2025-04-18 11:43:04'),
(7, 'Sachin Darkunde', 'sachindarkunde258@gmail.com', 'about job', 'Testing', '2025-04-18 12:50:05', '2025-04-18 12:50:05'),
(8, 'Sachin Darkunde', 'sachindarkunde258@gmail.com', 'about job vancany', 'testing 22222', '2025-04-21 11:01:55', '2025-04-21 11:01:55'),
(9, 'Sachin Darkunde', 'sachindarkunde258@gmail.com', 'about job', 'dsadsa', '2025-04-22 12:09:24', '2025-04-22 12:09:24'),
(10, 'Sachin Darkunde', 'sachindarkunde258@gmail.com', 'about job', 'dsadfda', '2025-04-24 10:47:20', '2025-04-24 10:47:20'),
(11, 'Sachin Darkunde', 'sachindarkunde258@gmail.com', 'about job', 'fafdsfds', '2025-04-24 10:48:22', '2025-04-24 10:48:22'),
(12, 'Sachin Darkunde', 'sachindarkunde258@gmail.com', 'about job', 'dfd', '2025-04-24 10:48:54', '2025-04-24 10:48:54'),
(13, 'Sachin Darkunde', 'sachindarkunde258@gmail.com', 'about job vancany', 'Testing', '2025-04-28 12:43:41', '2025-04-28 12:43:41'),
(14, 'Sachin Darkunde', 'sachindarkunde258@gmail.com', 'about job vancany', 'test', '2025-06-12 11:40:23', '2025-06-12 11:40:23'),
(15, 'Sachin Darkunde', 'sachindarkunde258@gmail.com', 'about job', 'sdfdsfds', '2025-06-19 10:52:54', '2025-06-19 10:52:54');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `service`, `message`, `mobile`, `email`, `created_at`, `updated_at`) VALUES
(1, 'MPSC Foundation Course', 'Hi, I am interested in MPSC Foundation Course and need more information about it. Please contact me.', '7887685967', 'sachindarkunde@gmail.com', '2025-04-16 23:32:46', '2025-04-16 23:32:46'),
(2, 'police bharati', 'Hi, I am interested in police bharati and need more information about it. Please contact me.', '07887685967', 'sachindarkunde258@gmail.com', '2025-04-16 23:33:05', '2025-04-16 23:33:05'),
(3, 'Forest Guard Bharti', 'Hi, I am interested in Forest Guard Bharti and need more information about it. Please contact me.', '11111111111111', 'sachindarkunde258@gmail.com', '2025-04-16 23:34:55', '2025-04-16 23:34:55'),
(4, 'MPSC Foundation Course', 'Hi, I am interested in MPSC Foundation Course and need more information about it. Please contact me.', '7887685967', 'sachindarkunde258@gmail.com', '2025-04-17 03:20:25', '2025-04-17 03:20:25'),
(5, 'MPSC Foundation Course', 'Hi, I am interested in MPSC Foundation Course and need more information about it. Please contact me.', '7887685967', 'sachindarkunde258@gmail.com', '2025-04-17 03:20:27', '2025-04-17 03:20:27'),
(6, 'police bharati', 'Hi, I am interested in police bharati and need more information about it. Please contact me.', '07887685967', 'sachindarkunde258@gmail.com', '2025-04-18 09:04:21', '2025-04-18 09:04:21'),
(7, 'Army Bharti', 'Hi, I am interested in Army Bharti and need more information about it. Please contact me.', '7887685967', 'sachindarkunde258@gmail.com', '2025-04-18 09:08:58', '2025-04-18 09:08:58'),
(8, 'MPSC Foundation Course', 'Hi, I am interested in MPSC Foundation Course and need more information about it. Please contact me.', '7887685967', 'sachindarkunde258@gmail.com', '2025-04-18 09:09:29', '2025-04-18 09:09:29'),
(9, 'Talathi Bharti', 'Hi, I am interested in Talathi Bharti and need more information about it. Please contact me.', '7887685967', 'sachindarkunde258@gmail.com', '2025-04-18 09:11:25', '2025-04-18 09:11:25'),
(10, 'MPSC Foundation Course', 'Hi, I am interested in MPSC Foundation Course and need more information about it. Please contact me.', '7887685967', 'sachindarkunde258@gmail.com', '2025-04-19 12:41:33', '2025-04-19 12:41:33'),
(11, 'police bharati', 'Hi, I am interested in police bharati and need more information about it. Please contact me.', '7887685967', 'sachindarkunde258@gmail.com', '2025-04-24 10:38:49', '2025-04-24 10:38:49'),
(12, 'MPSC Foundation Course', 'Hi, I am interested in MPSC Foundation Course and need more information about it. Please contact me.', '7887685967', 'sachindarkunde258@gmail.com', '2025-04-24 10:43:57', '2025-04-24 10:43:57'),
(13, 'MPSC Foundation Course', 'Hi, I am interested in MPSC Foundation Course and need more information about it. Please contact me.', '7887685967', 'sachindarkunde258@gmail.com', '2025-04-24 10:44:37', '2025-04-24 10:44:37'),
(14, 'Forest Guard Bharti', 'Hi, I am interested in Forest Guard Bharti and need more information about it. Please contact me.', '7887685967', 'sachindarkunde258@gmail.com', '2025-04-24 13:01:42', '2025-04-24 13:01:42'),
(15, 'Talathi Bharti', 'Hi, I am interested in Talathi Bharti and need more information about it. Please contact me.', '7887685967', 'sachindarkunde258@gmail.com', '2025-04-24 13:02:15', '2025-04-24 13:02:15'),
(16, 'Forest Guard Bharti', 'Hi, I am interested in Forest Guard Bharti and need more information about it. Please contact me.', '7887685967', 'sachindarkunde258@gmail.com', '2025-04-24 13:15:07', '2025-04-24 13:15:07'),
(17, 'police bharati', 'Hi, I am interested in police bharati and need more information about it. Please contact me.', '7887685967', 'sachindarkunde258@gmail.com', '2025-04-27 10:10:53', '2025-04-27 10:10:53'),
(18, 'MPSC Foundation Course', 'Hi, I am interested in MPSC Foundation Course and need more information about it. Please contact me.', '7887685967', 'sachindarkunde258@gmail.com', '2025-04-27 10:18:56', '2025-04-27 10:18:56'),
(19, 'Forest Guard Bharti', 'Hi, I am interested in Forest Guard Bharti and need more information about it. Please contact me.', '07887685967', 'sachindarkunde258@gmail.com', '2025-04-27 12:04:43', '2025-04-27 12:04:43'),
(20, 'Talathi Bharti', 'Hi, I am interested in Talathi Bharti and need more information about it. Please contact me.', '7887685967', 'sachindarkunde258@gmail.com', '2025-04-27 12:12:13', '2025-04-27 12:12:13'),
(21, 'MPSC Foundation Course', 'Hi, I am interested in MPSC Foundation Course and need more information about it. Please contact me.', '7887685967', 'sachindarkunde258@gmail.com', '2025-04-28 12:40:52', '2025-04-28 12:40:52'),
(22, 'MPSC Foundation Course', 'Hi, I am interested in MPSC Foundation Course and need more information about it. Please contact me.', '7887685967', 'sachindarkunde258@gmail.com', '2025-05-07 00:51:24', '2025-05-07 00:51:24'),
(23, 'MPSC Foundation Course', 'Hi, I am interested in MPSC Foundation Course and need more information about it. Please contact me.', '7887685967', 'sachindarkunde258@gmail.com', '2025-06-04 04:16:50', '2025-06-04 04:16:50'),
(24, 'Forest Guard Bharti', 'Hi, I am interested in Forest Guard Bharti and need more information about it. Please contact me.', '7887685967', 'sachindarkunde258@gmail.com', '2025-06-12 11:35:38', '2025-06-12 11:35:38'),
(25, 'Forest Guard Bharti', 'Hi, I am interested in Forest Guard Bharti and need more information about it. Please contact me.', '7887685967', 'sachindarkunde258@gmail.com', '2025-06-14 02:26:01', '2025-06-14 02:26:01'),
(26, 'Forest Guard Bharti', 'Hi, I am interested in Forest Guard Bharti and need more information about it. Please contact me.', '7887685967', 'sachindarkunde258@gmail.com', '2025-06-19 10:51:41', '2025-06-19 10:51:41'),
(27, 'MPSC Foundation Course', 'Hi, I am interested in MPSC Foundation Course and need more information about it. Please contact me.', '7887685967', 'sachindarkunde258@gmail.com', '2025-07-25 03:23:37', '2025-07-25 03:23:37');

-- --------------------------------------------------------

--
-- Table structure for table `enrollments`
--

CREATE TABLE `enrollments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enrollments`
--

INSERT INTO `enrollments` (`id`, `message`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'I want to enroll in the \'MAHARASHTRA POLICE \' batch.', '+917887685967', 'sachindarkunde258@gmail.com', '2025-04-17 10:31:14', '2025-04-17 10:31:14'),
(2, 'I want to enroll in the \'MAHARASHTRA POLICE \' batch.', '+917887685967', 'sachindarkunde258@gmail.com', '2025-04-17 10:36:37', '2025-04-17 10:36:37'),
(3, 'I want to enroll in the \'MAHARASHTRA POLICE \' batch.', '+917887685967', 'sachindarkunde258@gmail.com', '2025-04-17 10:36:39', '2025-04-17 10:36:39'),
(4, 'I want to enroll in the \'MAHARASHTRA POLICE \' batch.', '+917887685967', 'sachindarkunde258@gmail.com', '2025-04-17 10:36:41', '2025-04-17 10:36:41'),
(5, 'I want to enroll in the \'MAHARASHTRA POLICE \' batch.', '+917887685967', 'sachindarkunde258@gmail.com', '2025-04-17 10:36:44', '2025-04-17 10:36:44'),
(6, 'I want to enroll in the \'MAHARASHTRA POLICE \' batch.', '+917887685967', 'sachindarkunde258@gmail.com', '2025-04-17 10:36:45', '2025-04-17 10:36:45'),
(7, 'I want to enroll in the \'MAHARASHTRA POLICE \' batch.', '7261936060', 'sachindarkunde258@gmail.com', '2025-04-17 10:39:12', '2025-04-17 10:39:12'),
(8, 'I want to enroll in the \'NCC candidates\' batch.', '7261936060', 'sachindarkunde258@gmail.com', '2025-04-17 10:39:31', '2025-04-17 10:39:31'),
(9, 'I want to enroll in the \'NCC candidates\' batch.', '7261936060', 'sachindarkunde258@gmail.com', '2025-04-17 10:40:59', '2025-04-17 10:40:59'),
(10, 'I want to enroll in the \'MPSC Course\' batch.', '+917887685967', 'sachindarkunde258@gmail.com', '2025-04-17 10:44:57', '2025-04-17 10:44:57'),
(12, 'I want to enroll in the \'NCC candidates\' batch.', '7261936060', 'sachindarkunde258@gmail.com', '2025-04-17 11:02:37', '2025-04-17 11:02:37'),
(13, 'I want to enroll in the \'NCC candidates\' batch.', '+917887685967', 'sachindarkunde258@gmail.com', '2025-04-17 12:25:14', '2025-04-17 12:25:14'),
(14, 'I want to enroll in the \'MAHARASHTRA POLICE \' batch.', '+917887685967', 'sachindarkunde258@gmail.com', '2025-04-17 12:30:30', '2025-04-17 12:30:30'),
(15, 'I want to enroll in the \'MAHARASHTRA POLICE \' batch.', '+917887685967', 'sachindarkunde258@gmail.com', '2025-04-17 12:44:58', '2025-04-17 12:44:58'),
(16, 'I want to enroll in the \'MAHARASHTRA POLICE \' batch.', '12334566777', 'sachindarkunde258@gmail.com', '2025-04-17 23:27:02', '2025-04-17 23:27:02'),
(17, 'I want to enroll in the \'Forest Bharati \' batch.', '+917887685967', 'sachindarkunde258@gmail.com', '2025-04-18 07:03:16', '2025-04-18 07:03:16'),
(18, 'I want to enroll in the \'MAHARASHTRA POLICE \' batch.', '+917887685967', 'sachindarkunde258@gmail.com', '2025-04-18 12:43:51', '2025-04-18 12:43:51'),
(19, 'I want to enroll in the \'MAHARASHTRA POLICE \' batch.', '+917887685967', 'sachindarkunde258@gmail.com', '2025-04-19 12:41:11', '2025-04-19 12:41:11'),
(20, 'I want to enroll in the \'MAHARASHTRA POLICE \' batch.', '+917887685967', 'sachindarkunde258@gmail.com', '2025-04-24 10:45:50', '2025-04-24 10:45:50'),
(21, 'I want to enroll in the \'MAHARASHTRA POLICE \' batch.', '+917887685967', 'sachindarkunde258@gmail.com', '2025-04-24 13:02:54', '2025-04-24 13:02:54'),
(22, 'I want to enroll in the \'NCC candidates\' batch.', '7261936060', 'sachindarkunde258@gmail.com', '2025-04-24 13:03:29', '2025-04-24 13:03:29'),
(23, 'I want to enroll in the \'NCC candidates\' batch.', '+917887685967', 'sachindarkunde258@gmail.com', '2025-04-27 10:19:16', '2025-04-27 10:19:16'),
(24, 'I want to enroll in the \'NCC candidates\' batch.', '+917887685967', 'pradip258@gmail.com', '2025-04-27 11:49:49', '2025-04-27 11:49:49'),
(25, 'I want to enroll in the \'MAHARASHTRA POLICE \' batch.', '+917887685967', 'sachindarkunde258@gmail.com', '2025-04-28 12:42:18', '2025-04-28 12:42:18'),
(26, 'I want to enroll in the \'NCC candidates\' batch.', '+917887685967', 'sachindarkunde258@gmail.com', '2025-04-29 10:04:59', '2025-04-29 10:04:59'),
(27, 'I want to enroll in the \'MAHARASHTRA POLICE \' batch.', '+917887685967', 'sachindarkunde258@gmail.com', '2025-05-26 07:45:17', '2025-05-26 07:45:17');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `faculty_name` varchar(255) NOT NULL,
  `faculty_image` varchar(255) DEFAULT NULL,
  `faculty_experience` varchar(255) DEFAULT NULL,
  `faculty_description` text DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `faculty_name`, `faculty_image`, `faculty_experience`, `faculty_description`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'sachin Darkunde ', 'faculties/01JRZKF8X0JZ004ENBA5BKP68R.jpeg', '5 yrs of  Experience ', 'The Faculty Job Description Template is a comprehensive document that outlines the responsibilities and requirements of a faculty position in academic institutions. It serves as a guide for hiring managers or department heads to ensure that the job opening is clearly defined and attracts qualified candidates.', 1, '2025-04-14 12:17:44', '2025-04-16 11:17:04'),
(2, 'Vaibhav Diwate', 'faculties/01JRZKH5GPT92K5KYD4A2B95SC.jpeg', '10 yrs of experince', 'The Faculty Job Description Template is a comprehensive document that outlines the responsibilities and requirements of a faculty position in academic institutions. It serves as a guide for hiring managers or department heads to ensure that the job opening is clearly defined and attracts qualified candidates.', 1, '2025-04-15 12:31:57', '2025-04-16 11:16:29'),
(3, 'Vijay Gore', 'faculties/01JRZKN90T1TKCKK2W9JGAPXDG.jpg', '2 yrs of experince', 'A convincing testimonial can act as the final push a prospect needs to convert into a paying customer. Include testimonials that highlight specific benefits of your product or service. This way, potential customers can see the value and be more inclined to take action.', 1, '2025-04-16 10:01:02', '2025-04-16 10:02:09');

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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'gallery/01JRX6N7G67HGCFJFK1NZ320BP.png', 1, '2025-04-15 11:36:28', '2025-04-16 10:37:59'),
(2, 'gallery/01JS1BZPBF6B1WWF7KEMFW3JXW.png', 1, '2025-04-16 10:39:07', '2025-04-17 02:26:31'),
(3, 'gallery/01JRZNYPQ9HRQY41HNF9TYTKHY.jpg', 1, '2025-04-16 10:42:15', '2025-04-16 10:42:15');

-- --------------------------------------------------------

--
-- Table structure for table `hero_sections`
--

CREATE TABLE `hero_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) NOT NULL,
  `subheading` varchar(255) NOT NULL,
  `button_text` varchar(255) NOT NULL,
  `button_url` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hero_sections`
--

INSERT INTO `hero_sections` (`id`, `heading`, `subheading`, `button_text`, `button_url`, `image`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Your Gateway to Government Jobs – Top Coaching for Police, Army, Talathi & MPSC Exams in Rajgurunagar', 'Get expert training for competitive exams including Police Bharti, Army recruitment, Forest Guard, Talathi Bharti, and MPSC Foundation – all under one roof.', 'Explore Courses', 'https://yourwebsite.com/courses', 'hero/01JS52MPCZBR921P630RZY2797.jpg', 0, '2025-04-14 11:59:24', '2025-04-28 12:48:38'),
(2, 'Your Gateway to Government Jobs – Top Coaching for Police, Army, Talathi & MPSC Exams in Rajgurunagar ', 'Get expert training for competitive exams including Police Bharti, Army recruitment, Forest Guard, Talathi Bharti, and MPSC Foundation – all under one roof. ', 'Explore Courses ', 'https://www.google.com', 'hero/01JRX7KAQS03YR7W7DH6MV0ASN.png', 1, '2025-04-15 11:52:54', '2025-04-28 12:48:42');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_04_12_161929_create_blogs_table', 2),
(5, '2025_04_13_045036_create_services_table', 3),
(6, '2025_04_14_163913_create_upcoming_batches_table', 4),
(7, '2025_04_14_172249_create_hero_sections_table', 5),
(8, '2025_04_14_173756_create_faculties_table', 6),
(9, '2025_04_14_175101_create_testimonials_table', 7),
(10, '2025_04_14_180031_create_topper_students_table', 8),
(11, '2025_04_15_164808_create_galleries_table', 9),
(12, '2025_04_16_173349_create_newsletters_table', 10),
(13, '2025_04_16_182414_create_contacts_table', 11),
(14, '2025_04_17_045525_create_enquiries_table', 12),
(15, '2025_04_17_155623_create_enrollments_table', 13),
(16, '2025_04_21_141707_create_answer_keys_table', 14),
(17, '2025_04_22_174217_create_visitors_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'sachindarkunde258@gmail.com', '2025-04-16 12:09:31', '2025-04-16 12:09:31'),
(2, 'sachindarkunde6060@gmail.com', '2025-04-18 11:12:30', '2025-04-18 11:12:30'),
(3, 'sachin@6060', '2025-04-18 11:12:47', '2025-04-18 11:12:47'),
(4, 'sachindarkunde123@gmail.com', '2025-04-18 11:14:02', '2025-04-18 11:14:02'),
(5, 'sachiin123@gmail.com', '2025-04-18 11:15:11', '2025-04-18 11:15:11'),
(6, 'sachindarkunde2321@gmail.com', '2025-04-18 11:15:41', '2025-04-18 11:15:41'),
(7, 'sachindarkunde258@gmail.comm', '2025-04-18 11:16:01', '2025-04-18 11:16:01'),
(8, 'sachindarkunde1111@gmail.com', '2025-04-18 12:37:59', '2025-04-18 12:37:59'),
(9, 'sachindarkunde28@gmail.com', '2025-04-18 13:09:03', '2025-04-18 13:09:03'),
(10, 'sachindarkund@gmail.com', '2025-04-19 08:22:25', '2025-04-19 08:22:25'),
(11, 'sachindarkundee@gmail.com', '2025-04-22 12:09:44', '2025-04-22 12:09:44'),
(12, 'sachindarkunde2778@gmail.com', '2025-04-24 09:36:52', '2025-04-24 09:36:52'),
(13, 'sachindarkunde26668@gmail.com', '2025-04-24 10:41:55', '2025-04-24 10:41:55'),
(14, 'sachindarkunde2555558@gmail.com', '2025-04-24 10:42:09', '2025-04-24 10:42:09'),
(15, 'sachindarkunde2bbb58@gmail.com', '2025-04-24 13:04:47', '2025-04-24 13:04:47'),
(16, 'sachindarkunde111258@gmail.com', '2025-04-27 10:18:33', '2025-04-27 10:18:33'),
(17, 'sachindarkunde25778@gmail.com', '2025-04-28 12:41:32', '2025-04-28 12:41:32'),
(18, 'sachindarkunde114441258@gmail.com', '2025-04-29 10:18:06', '2025-04-29 10:18:06'),
(19, 'sachindarkunde2444458@gmail.com', '2025-05-26 07:46:19', '2025-05-26 07:46:19'),
(20, 'sachin@gmail.com', '2025-06-04 04:17:19', '2025-06-04 04:17:19'),
(21, 'sachindarkunde200058@gmail.com', '2025-06-12 11:41:21', '2025-06-12 11:41:21'),
(22, 'sachin12darkunde258@gmail.com', '2025-06-19 10:53:13', '2025-06-19 10:53:13'),
(23, 'sachin22darkunde258@gmail.com', '2025-07-25 02:45:41', '2025-07-25 02:45:41');

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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'police bharati', 'There is no alternative to this administrative system... The Union will go, you will not have a united India if you do not have good All-India Service which has the independence to speak out its mind, which has sense of security that you will standby your work... If you do not adopt this course, then do not follow the present Constitution. Substitute something else... these people are the instrument. Remove them and I see nothing, but a picture of chaos all over the country.', 'courses/01JRZQ2DYDJVC7JAZ6MFS5ZZ9D.jpg', NULL, '2025-04-13 00:19:10', '2025-04-16 11:01:46'),
(2, 'Army Bharti', 'The primary mission of the Indian Army is to ensure national security and national unity, to defend the nation from external aggression and internal threats, and to maintain peace and security within its borders. It conducts humanitarian rescue operations during natural calamities and other disturbances, such as Operation Surya Hope, and can also be requisitioned by the government to cope with internal threats. It is a major component of national power, alongside the', 'courses/01JRZQ5HEX18YE96T8DEY6RMYB.webp', NULL, '2025-04-13 08:00:28', '2025-04-16 11:03:28'),
(3, 'Talathi Bharti', 'The primary mission of the Indian Army is to ensure national security and national unity, to defend the nation from external aggression and internal threats, and to maintain peace and security within its borders. It conducts humanitarian rescue operations during natural calamities and other disturbances, such as Operation Surya Hope, and can also be requisitioned by the government to cope with internal threats. It is a major component of national power, alongside the', 'courses/01JRZQ9BY0Z9F1WE8DCP20S1V1.jpg', NULL, '2025-04-13 08:01:37', '2025-04-16 11:05:33'),
(4, 'Forest Guard Bharti', 'van vibhag or forest department released a vacancy for the post of forest guard, forester and wildlife guard exam 2025 for given state under different zonal area eligible candidate can apply application form online via given website of forest department. before applying online candidate check all term and condition of exam and check eligibility criteria. there will be no such action taken by board after cancellation of form.', 'courses/01JRZQMXEPV0ZN3TDPRQDMAVTR.webp', NULL, '2025-04-13 08:02:48', '2025-04-16 11:11:52'),
(5, 'MPSC Foundation Course', 'Maharashtra Public Service Commission (MPSC) is a Constitutional Body established Under Article 315 of Constitution of India which provides a smooth and efficient functioning of the Government of Maharashtra by providing suitable candidates for various Government posts and advise them on various service matters like formulation of Recruitment Rules, advise on promotions, transfers and disciplinary actions etc.', 'courses/01JRZQFQVABHW3DV3B27WE1JXS.webp', NULL, '2025-04-13 08:04:14', '2025-04-16 11:09:02');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('rQB4rx9RCoN4SOWH4VW5FoarcUpKMScXTuY05AAq', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiNzVQMkN0bFhRSTZwVnlBWHQyQkZSUnc1RDlyR2x1TDR0bUhod3NUbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9hbnN3ZXIta2V5cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkOUJUbzh2Lm91dk8vS1hERUJYUmp3T3A3Nm54U1YzRzZNTUV2THRoQ2hxWFFkL2piZWFKT20iO30=', 1780123192);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `testimonial` text NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `designation`, `photo`, `testimonial`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Sachin Darkunde ', 'php web developer', 'testimonials/01JRZHNP7N6FY0CQA8G95CDHEK.jpeg', 'They act as social proof, showing that other people have had positive experiences with your offerings. When you feature testimonials from respected or well-known clients, it can significantly boost your credibility. Trust is fundamental in any business re', 1, '2025-04-14 12:25:20', '2025-04-16 09:27:26'),
(2, 'vaibhav diwate ', 'AWS Engineer', 'testimonials/01JRZHS4D5G9SCBN1STNXAXRNQ.jpeg', 'A convincing testimonial can act as the final push a prospect needs to convert into a paying customer. Include testimonials that highlight specific benefits of your product or service. This way, potential customers can see the value and be more inclined t', 1, '2025-04-16 09:29:19', '2025-04-16 09:29:34'),
(3, 'Vijay Gore', 'Front End Developer', 'testimonials/01JRZHW4434FEG2ZT5JNTHKYAW.jpg', 'A convincing testimonial can act as the final push a prospect needs to convert into a paying customer. Include testimonials that highlight specific benefits of your product or service. This way, potential customers can see the value and be more inclined t', 1, '2025-04-16 09:30:57', '2025-04-16 09:30:57'),
(4, 'Sachin Darkunde', NULL, NULL, 'dsd', 1, '2025-04-21 11:21:05', '2025-04-21 11:21:05');

-- --------------------------------------------------------

--
-- Table structure for table `topper_students`
--

CREATE TABLE `topper_students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `testimonial` text NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topper_students`
--

INSERT INTO `topper_students` (`id`, `name`, `course_name`, `photo`, `testimonial`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Sachin Darkunde ', 'police bharati', 'topper-students/01JRTQJ4099YTKVBRVVBKRVQYC.png', 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem ', 1, '2025-04-14 12:34:08', '2025-04-14 12:35:20'),
(2, 'Ajinkya Dhawale ', 'MPSC', 'topper-students/01JS1E4F43TH8BSWYMS2NEWM4H.jpg', 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem ', 1, '2025-04-17 03:04:05', '2025-04-17 03:04:05'),
(3, 'Chaitanya jagtap', 'Army bhararti', 'topper-students/01JS1E78FDAAHB3D1GBYNTDH23.png', 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lor', 1, '2025-04-17 03:05:36', '2025-04-17 03:05:36');

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_batches`
--

CREATE TABLE `upcoming_batches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `batch_name` varchar(255) NOT NULL,
  `batch_duration` varchar(255) NOT NULL,
  `batch_launch_date` date NOT NULL,
  `batch_timing` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `upcoming_batches`
--

INSERT INTO `upcoming_batches` (`id`, `batch_name`, `batch_duration`, `batch_launch_date`, `batch_timing`, `created_at`, `updated_at`) VALUES
(1, 'MAHARASHTRA POLICE ', '5 days', '2025-04-15', '7:00 AM to 5:AM', '2025-04-14 11:20:47', '2025-04-14 11:20:47'),
(3, 'NCC candidates', '5 days', '2025-04-15', '7:00 AM to 5:AM', '2025-04-16 23:56:47', '2025-04-16 23:57:08'),
(4, 'MPSC Course', '5 months', '2025-04-18', '7:00 AM to 5:00:AM', '2025-04-17 00:49:20', '2025-04-17 00:49:20'),
(5, 'Test upcomming batch', '4 months', '2025-04-18', 'Morning and afternoon 5 pm', '2025-04-17 23:24:21', '2025-04-17 23:24:21'),
(6, 'Forest Bharati ', '3.5 months', '2025-04-18', '7:00 AM to 5:00:AM ', '2025-04-18 07:00:55', '2025-04-18 07:00:55'),
(7, 'Test Upcoming Batch 2', '10 months', '2025-04-18', '7:00 AM to 5:00:AM  ', '2025-04-18 07:02:01', '2025-04-18 07:02:01');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Gagan Bharari Academy', 'gaganbharariacademy@gmail.com', NULL, '$2y$12$9BTo8v.ouvO/KXDEBXRjwOp76nxSV3G6MMEvLthChqXQd/jbeaJOm', 'pmAutDeSUkHCKbd4EUKEQ8c3gIQHzZvHdXcy9BkuQiCkCgGZ4FHDYHBe0Pf4', '2025-04-12 10:41:43', '2025-04-12 10:41:43');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `ip_address`, `user_agent`, `created_at`, `updated_at`) VALUES
(1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', '2025-04-22 12:19:12', '2025-04-22 12:19:12'),
(2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', '2025-04-24 09:29:15', '2025-04-24 09:29:15'),
(3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', '2025-04-27 09:59:27', '2025-04-27 09:59:27'),
(4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', '2025-04-28 12:38:40', '2025-04-28 12:38:40'),
(5, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', '2025-04-29 10:03:33', '2025-04-29 10:03:33'),
(6, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', '2025-05-07 00:21:54', '2025-05-07 00:21:54'),
(7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', '2025-05-16 09:17:14', '2025-05-16 09:17:14'),
(8, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', '2025-05-26 07:44:16', '2025-05-26 07:44:16'),
(9, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', '2025-06-04 04:15:53', '2025-06-04 04:15:53'),
(10, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', '2025-06-12 04:28:34', '2025-06-12 04:28:34'),
(11, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', '2025-06-14 02:06:32', '2025-06-14 02:06:32'),
(12, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', '2025-06-19 10:50:40', '2025-06-19 10:50:40'),
(13, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', '2025-07-25 02:38:25', '2025-07-25 02:38:25'),
(14, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Safari/537.36', '2026-05-30 01:02:24', '2026-05-30 01:02:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer_keys`
--
ALTER TABLE `answer_keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hero_sections`
--
ALTER TABLE `hero_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `newsletters_email_unique` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topper_students`
--
ALTER TABLE `topper_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upcoming_batches`
--
ALTER TABLE `upcoming_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer_keys`
--
ALTER TABLE `answer_keys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `enrollments`
--
ALTER TABLE `enrollments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hero_sections`
--
ALTER TABLE `hero_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `topper_students`
--
ALTER TABLE `topper_students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `upcoming_batches`
--
ALTER TABLE `upcoming_batches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
