-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2020 at 12:34 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ghi_company`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `introduction` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `technical_work` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vision` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `description`, `introduction`, `technical_work`, `mission`, `vision`, `created_at`, `updated_at`) VALUES
(1, '<span style=\"background-color: rgb(255, 255, 0);\"><b>႕Update </b></span>Simption Tech is a leading solution provider for web applications. The Company has been promoted customized solutions.Simption Tech is a leading solution provider for web applications. The Company has been promoted customized solutions.', '<span style=\"font-weight: bolder;\">႕Update&nbsp;&nbsp;</span>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.', '<span style=\"font-weight: bolder;\">႕Update&nbsp;&nbsp;</span>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.', '<span style=\"font-weight: bolder;\">႕Update&nbsp;&nbsp;</span>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.', '<span style=\"font-weight: bolder;\">႕Update&nbsp;&nbsp;</span>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.', NULL, '2019-10-08 23:41:16');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `photo`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, '5d9b68d5d56aa_img-1.jpg', 'Mr John Doe', '<p>Dolor facilis veritatis doloremque dicta eos Voluptate earum nulla ad et esse Saepe asperiores nisi facere ipsam corporis. Dolorem praesentium tenetur tempore dolorem illum autem? Veritatis fuga quasi sunt tenetur. Expedita id eaque incidunt beatae nesciunt! In similique exercitationem tempore excepturi placeat Nostrum ducimus dicta temporibus quas!</p>', '2019-10-07 10:03:25', '2019-10-07 10:21:46'),
(2, '5d9b6d5304a71_about-img.jpg', 'test', '<p>Dolor facilis veritatis doloremque dicta eos Voluptate earum nulla ad et esse Saepe asperiores nisi facere ipsam corporis. Dolorem praesentium tenetur tempore dolorem illum autem? Veritatis fuga quasi sunt tenetur. Expedita id eaque incidunt beatae nesciunt! In similique exercitationem tempore excepturi placeat Nostrum ducimus dicta temporibus quas!<br></p>', '2019-10-07 10:22:35', '2019-10-07 10:22:35');

-- --------------------------------------------------------

--
-- Table structure for table `marktings`
--

CREATE TABLE `marktings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marktings`
--

INSERT INTO `marktings` (`id`, `title`, `icon_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Educational Website', 'fa fa-book', '<p>In Educational websites we make school and colleges modules. These modules includes, Admission modules, Fees management, Library management, HR (payroll), Attendance, Exam, Online test.</p><p>For Examples:- Shaurya School of study, Gurukul School of study Etc.</p>', '2019-10-09 21:14:07', '2019-10-10 01:30:59'),
(3, 'Matrimonial website', 'fa fa-heart', '<p>Matrimonial website help to search life partner easily with respect to time and money.In this website only you have find bride and groom according you that you want and think.It helps to choose bride &amp; groom with matching personality by easy way &amp; also it save time.</p><p>For Examples:-Agarwal Shadi Etc.<br></p>', '2019-10-10 01:15:21', '2019-10-10 01:30:44'),
(4, 'Web Hosting', 'fa fa-code', '<p>Web hosting facility provided by us. if you want to host your website on server and manage, SIMPTION will be a best place for you.<br></p>', '2019-10-10 01:15:54', '2019-10-10 01:15:54'),
(5, 'Domain Name', 'fa fa-smile-o', '<p>Domain name registration and domain related work done by us. We Transfer the domain name from one server to different server and provide with the server configaration<br></p>', '2019-10-10 01:16:28', '2019-10-10 01:16:28'),
(6, 'Personal Portfolio', 'fa fa-user', '<p>In Personal portfolio websites we make websites for personal use purpose in which we arrange portfolio as we need like Photography website.</p><p><span style=\"font-size: 1rem;\">Kunal Kankar Etc.</span></p>', '2019-10-10 01:16:57', '2019-10-10 01:28:41'),
(7, 'Training & Workshop', 'fa fa-book', '<p>We are provided Training &amp; Workshop in colleges and distribute some idea and knowledge about our experience.<br></p>', '2019-10-10 01:17:29', '2019-10-10 01:17:29'),
(8, 'Project List', 'fa fa-heart', '<p>We are best in everyfield like School Management Software, Gst Software and also in Robotics.We are best in Robotics.<br></p>', '2019-10-10 01:18:06', '2019-10-10 01:18:06'),
(9, 'Online Service', 'fa fa-code', '<p>In Personal portfolio websites we make websites for personal use purpose in which we arrange portfolio as we need like Photography website.</p><p>Kunal Kankar Etc.<br></p>', '2019-10-10 01:18:34', '2019-10-10 01:30:15');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `photo`, `name`, `position`, `link`, `created_at`, `updated_at`) VALUES
(2, '5d8c5a9e88d3d_teacher_2.jpg', 'Michelle Williams', 'Art & Design', 'https://www.facebook.com', '2019-09-25 23:33:06', '2019-09-25 23:58:46'),
(3, '5d8c5a4f676e8_teacher_1.jpg', 'Jonathan Smith', 'Marketing', 'https://www.facebook.com', '2019-09-25 23:33:26', '2019-09-25 23:57:27'),
(4, '5d8c5ac9baf43_teacher_3.jpg', 'Jack Gallagan', 'Android Developer', 'https://www.facebook.com', '2019-09-25 23:59:29', '2019-09-25 23:59:29'),
(5, '5d8c5af34cc3a_teacher_4.jpg', 'Christinne Smith', 'PHP developer', 'https://www.facebook.com', '2019-09-26 00:00:11', '2019-09-26 00:00:11'),
(6, '5d8c5b145c7b2_teacher_5.jpg', 'Michelle Williams', 'Web designer', 'https://www.facebook.com', '2019-09-26 00:00:44', '2019-09-26 00:00:44'),
(7, '5d8c5b3c6e9fa_teacher_6.jpg', 'Jack Gallagan', 'Lecturer', 'https://www.facebook.com', '2019-09-26 00:01:24', '2019-09-26 00:01:24');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_09_26_031247_create_projects_table', 2),
(4, '2019_09_26_050932_create_members_table', 3),
(5, '2019_10_06_141210_create_partnercompanies_table', 4),
(6, '2019_10_07_140410_create_feedback_table', 5),
(7, '2019_10_08_090136_create_abouts_table', 6),
(8, '2019_10_09_091050_create_trainings_table', 7),
(9, '2019_10_09_152000_create_marktings_table', 8),
(10, '2019_10_10_083326_create_web_designs_table', 9),
(11, '2019_10_11_033752_create_websites_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `partnercompanies`
--

CREATE TABLE `partnercompanies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partnercompanies`
--

INSERT INTO `partnercompanies` (`id`, `photo`, `link`, `created_at`, `updated_at`) VALUES
(1, '5d9a15e1d1343_client_logo-2.png', 'https://www.facebook.com/test', '2019-10-06 08:16:14', '2019-10-06 09:57:13'),
(3, '5d9a16f8d6784_client_logo-3.png', 'https://www.facebook.com/', '2019-10-06 10:01:52', '2019-10-06 10:01:52');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `photo`, `title`, `link`, `description`, `created_at`, `updated_at`) VALUES
(3, '5d8c5e10b5852_elearn.jpg', 'Ecommerce', 'https://www.facebook.com', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aliquam reiciendis beatae saepe perspiciatis provident iusto aperiam, consectetur iste, maiores tempore atque. Quis minima, quasi error molestias facere quaerat perspiciatis!<br></p>', '2019-09-26 00:13:28', '2019-09-26 00:14:56'),
(4, '5d8c5e92ba4d3_elearn.jpg', 'Point of Sales', 'https://www.facebook.com', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aliquam reiciendis beatae saepe perspiciatis provident iusto aperiam, consectetur iste, maiores tempore atque. Quis minima, quasi error molestias facere quaerat perspiciatis!<br></p>', '2019-09-26 00:15:38', '2019-09-26 00:15:38'),
(5, '5d8c5f169fc1d_elearn.jpg', 'Invertory Management', 'https://www.facebook.com', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aliquam reiciendis beatae saepe perspiciatis provident iusto aperiam, consectetur iste, maiores tempore atque. Quis minima, quasi error molestias facere quaerat perspiciatis!<br></p>', '2019-09-26 00:17:50', '2019-09-26 00:17:50'),
(6, '5d8c5f3c789c9_elearn.jpg', 'Hotel Management', 'https://www.facebook.com', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aliquam reiciendis beatae saepe perspiciatis provident iusto aperiam, consectetur iste, maiores tempore atque. Quis minima, quasi error molestias facere quaerat perspiciatis!<br></p>', '2019-09-26 00:18:28', '2019-09-26 00:18:28');

-- --------------------------------------------------------

--
-- Table structure for table `trainings`
--

CREATE TABLE `trainings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainings`
--

INSERT INTO `trainings` (`id`, `title`, `icon_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Web Design', 'fa fa-gears', '<p><span style=\"color: rgb(72, 72, 72); font-family: &quot;Open Sans&quot;, sans-serif;\">E-Commerce enabled website provides the most cost-effective way of promoting your business online. By developing your own E Commerce enabled website; you can reach out to your prospective customers worldwide and offer them your products and services directly through Internet.</span><br></p>', '2019-10-09 02:51:09', '2019-10-10 00:49:43'),
(3, 'Web Development', 'fa fa-book', '<p>In Educational websites we make school and colleges modules. These modules includes, Admission modules, Fees management, Library management, HR (payroll), Attendance, Exam, Online test.</p><p>For Examples:- Shaurya School of study, Gurukul School of study Etc.<br></p>', '2019-10-10 00:50:28', '2019-10-10 01:31:51'),
(4, 'IOT', 'fa fa-heart', '<p>Matrimonial website help to search life partner easily with respect to time and money.In this website only you have find bride and groom according you that you want and think.It helps to choose bride &amp; groom with matching personality by easy way &amp; also it save time.</p><p>For Examples:-Agarwal Shadi Etc.<br></p>', '2019-10-10 00:54:02', '2019-10-10 01:32:10'),
(5, 'Web Hosting', 'fa fa-code', '<p>Web hosting facility provided by us. if you want to host your website on server and manage, SIMPTION will be a best place for you.<br></p>', '2019-10-10 00:57:30', '2019-10-10 00:57:30'),
(6, 'Domain Name', 'fa fa-smile-o', '<p>Domain name registration and domain related work done by us. We Transfer the domain name from one server to different server and provide with the server configaration<br></p>', '2019-10-10 01:00:09', '2019-10-10 01:00:09'),
(7, 'Personal Portfolio', 'fa fa-user', '<p>In Personal portfolio websites we make websites for personal use purpose in which we arrange portfolio as we need like Photography website.</p><p>Kunal Kankar Etc.<br></p>', '2019-10-10 01:00:53', '2019-10-10 01:32:28'),
(8, 'Training & Workshop', 'fa fa-book', '<p>We are provided Training &amp; Workshop in colleges and distribute some idea and knowledge about our experience.<br></p>', '2019-10-10 01:01:31', '2019-10-10 01:01:31'),
(9, 'Project List', 'fa fa-heart', '<p>We are best in everyfield like School Management Software, Gst Software and also in Robotics.We are best in Robotics.<br></p>', '2019-10-10 01:02:04', '2019-10-10 01:02:04'),
(10, 'Online Service', 'fa fa-code', '<p>In Personal portfolio websites we make websites for personal use purpose in which we arrange portfolio as we need like Photography website.</p><p>Kunal Kankar Etc.<br></p>', '2019-10-10 01:02:38', '2019-10-10 01:32:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$A.k27/Q6B9aZDwDI/LaRzuseIWcyO9ulhwOMeEaETXp4z3tGATtD.', NULL, '2019-09-25 06:54:35', '2019-09-25 06:54:35');

-- --------------------------------------------------------

--
-- Table structure for table `websites`
--

CREATE TABLE `websites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `websites`
--

INSERT INTO `websites` (`id`, `title`, `icon_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'E-Commerce Website', 'fa fa-mobile', '<p>E-Commerce enabled website provides the most cost-effective way of promoting your business online. By developing your own E Commerce enabled website; you can reach out to your prospective customers worldwide and offer them your products and services directly through Internet.</p>', '2019-10-10 21:18:59', '2019-10-10 22:58:16'),
(2, 'Educational Website', 'fa fa-book', '<p>In Educational websites we make school and colleges modules. These modules includes, Admission modules, Fees management, Library management, HR (payroll), Attendance, Exam, Online test.&lt;br&gt;For Examples:- Shaurya School of study, Gurukul School of study Etc.<br></p>', '2019-10-11 00:38:12', '2019-10-11 00:38:12'),
(3, 'Matrimonial website', 'fa fa-heart', '<p>Matrimonial website help to search life partner easily with respect to time and money.In this website only you have find bride and groom according you that you want and think.It helps to choose bride &amp; groom with matching personality by easy way &amp; also it save time.</p><p>For Examples:-Agarwal Shadi Etc.<br></p>', '2019-10-11 00:39:01', '2019-10-11 00:39:01'),
(4, 'Web Hosting', 'fa fa-code', '<p>Web hosting facility provided by us. if you want to host your website on server and manage, SIMPTION will be a best place for you.<br></p>', '2019-10-11 00:39:35', '2019-10-11 00:39:35'),
(5, 'Domain Name', 'fa fa-smile-o', '<p>Domain name registration and domain related work done by us. We Transfer the domain name from one server to different server and provide with the server configaration<br></p>', '2019-10-11 00:40:06', '2019-10-11 00:40:06'),
(6, 'Personal Portfolio', 'fa fa-user', '<p>In Personal portfolio websites we make websites for personal use purpose in which we arrange portfolio as we need like Photography website.</p><p>Kunal Kankar Etc.<br></p>', '2019-10-11 00:40:40', '2019-10-11 00:40:40'),
(7, 'Training & Workshop', 'fa fa-book', '<p>We are provided Training &amp; Workshop in colleges and distribute some idea and knowledge about our experience.<br></p>', '2019-10-11 00:41:17', '2019-10-11 00:41:17'),
(8, 'Project List', 'fa fa-heart', '<p>We are best in everyfield like School Management Software, Gst Software and also in Robotics.We are best in Robotics.<br></p>', '2019-10-11 00:41:48', '2019-10-11 00:41:48'),
(9, 'Online Service', 'fa fa-code', '<p>In Personal portfolio websites we make websites for personal use purpose in which we arrange portfolio as we need like Photography website.</p><p>Kunal Kankar Etc.<br></p>', '2019-10-11 00:42:23', '2019-10-11 00:42:23');

-- --------------------------------------------------------

--
-- Table structure for table `web_designs`
--

CREATE TABLE `web_designs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `web_designs`
--

INSERT INTO `web_designs` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'WEBSITE DESIGNING', 'We take all the above elements and place a site you love. All of our sites are designed to look great, but more importantly, the current search engine protocols are designed to be fast loaded and created. After your site is built, it is important to pay attention to the next challenge, which is looking for new site visitors and business opportunities. From a simple database website development to complex web-based solutions; We intend to provide a stop solution for all your web related requirements. Our current areas of development include:', NULL, '2019-10-10 11:04:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marktings`
--
ALTER TABLE `marktings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partnercompanies`
--
ALTER TABLE `partnercompanies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainings`
--
ALTER TABLE `trainings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `websites`
--
ALTER TABLE `websites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_designs`
--
ALTER TABLE `web_designs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `marktings`
--
ALTER TABLE `marktings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `partnercompanies`
--
ALTER TABLE `partnercompanies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `websites`
--
ALTER TABLE `websites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `web_designs`
--
ALTER TABLE `web_designs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
