-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 13, 2023 at 04:09 PM
-- Server version: 8.0.30
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `envirogroup`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint NOT NULL,
  `image` text,
  `top_title_ar` varchar(225) DEFAULT NULL,
  `top_title_en` varchar(225) DEFAULT NULL,
  `top_desc_ar` text,
  `top_desc_en` text,
  `happy_clients` bigint DEFAULT NULL,
  `title_ar` varchar(225) DEFAULT NULL,
  `title_en` varchar(225) DEFAULT NULL,
  `desc_ar` text,
  `desc_en` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `image`, `top_title_ar`, `top_title_en`, `top_desc_ar`, `top_desc_en`, `happy_clients`, `title_ar`, `title_en`, `desc_ar`, `desc_en`, `created_at`, `updated_at`) VALUES
(1, 'assets/uploads/admins/images/3061681284038.jpg', 'Exercitationem non c', 'Dolores exercitation', 'دعم الاقتصاد الدائري من خلال تطبيق حلول بيئية متكاملة لتحقيق مبادئ صفر نفايات وتحقيق أفضل استخدام للموارد مع الوفاء بمسؤوليتنا تجاه أصحاب المصلحة من خلال تحقيق وضع مربح للجانبين على جميع المستويات (العملاء وشركاء الأعمال والموظفون والبيئة الطبيعية).', 'Supporting the circular economy by applying integrated environmental solutions to achieve zero waste principals and making the best utilization of resources while fulfilling our responsibility towards our stakeholders by achieving win-win situation at all levels(customers, business partners, employees and natural environment).', 33, 'Praesentium elit eu', 'Sunt nemo aliquip c', 'قيادة صناعة النفايات المتكاملة في مصر من خلال التعاون مع القطاعات المختلفة نحو بيئة نظيفة واستكمال عملية إعادة التدوير.', 'To lead the integrated waste industry in Egypt through cooperation with the different sectors toward a clean environment and completing the recycled process.', '2023-04-27 12:43:30', '2023-04-12 08:06:29');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint NOT NULL,
  `name` varchar(225) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `image` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `image`, `created_at`, `updated_at`) VALUES
(1, 'abdullah1', 'admin@admin.com', '$2y$10$w5ueA20djL3w7Wx6.pvHGu9T0G4fql6vD6Oq/cwxSa5pEEREcIxRu', 'assets/uploads/admins/48331680089224.webp', '2023-03-18 09:57:49', '2023-04-11 20:10:18');

-- --------------------------------------------------------

--
-- Table structure for table `bg_images`
--

CREATE TABLE `bg_images` (
  `id` bigint NOT NULL,
  `about_img` text,
  `service_img` text,
  `product_img` text,
  `career_img` text,
  `news_img` text,
  `contact_img` text,
  `faqs_img` text,
  `qoute_img` text,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `bg_images`
--

INSERT INTO `bg_images` (`id`, `about_img`, `service_img`, `product_img`, `career_img`, `news_img`, `contact_img`, `faqs_img`, `qoute_img`, `created_at`, `updated_at`) VALUES
(27, 'assets/uploads/admins/background/48151681033385.jpg', 'assets/uploads/admins/background/57661681033385.jpg', 'assets/uploads/admins/background/55071681033385.jpg', 'assets/uploads/admins/background/18521681033385.jpg', 'assets/uploads/admins/background/96151681033385.jpg', 'assets/uploads/admins/background/17921681033385.jpg', 'assets/uploads/admins/background/22561681033385.jpg', 'assets/uploads/admins/background/3081681033385.jpg', '2023-04-09 07:46:20', '2023-04-09 09:43:05');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` bigint NOT NULL,
  `file` text,
  `name` varchar(225) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `phone` varchar(225) DEFAULT NULL,
  `salary` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `file`, `name`, `email`, `phone`, `salary`, `created_at`, `updated_at`) VALUES
(32, NULL, 'err', 'dsds@maq.com', '23423', 13212, '2023-04-13 09:34:29', '2023-04-13 09:34:29'),
(33, NULL, 'err', 'dsds@maq.com', '23423', 13212, '2023-04-13 09:34:30', '2023-04-13 09:34:30'),
(34, NULL, 'err', 'dsds@maq.com', '23423', 13212, '2023-04-13 09:34:31', '2023-04-13 09:34:31'),
(35, NULL, 'err', 'dsds@maq.com', '23423', 13212, '2023-04-13 09:34:41', '2023-04-13 09:34:41'),
(36, NULL, 'err', 'dsds@maq.com', '23423', 13212, '2023-04-13 09:34:52', '2023-04-13 09:34:52'),
(37, NULL, 'ss', 'abdalluhmahmoud55@gmail.com', '2342', 223, '2023-04-13 10:07:26', '2023-04-13 10:07:26'),
(38, NULL, NULL, NULL, NULL, NULL, '2023-04-13 10:11:35', '2023-04-13 10:11:35'),
(39, 'assets/front/images//54161681380827.php', NULL, NULL, NULL, NULL, '2023-04-13 10:13:47', '2023-04-13 10:13:47'),
(40, 'assets/front/images//38061681380911.jpg', NULL, NULL, NULL, NULL, '2023-04-13 10:15:11', '2023-04-13 10:15:11'),
(41, 'assets/front/images//53231681380973.php', NULL, NULL, NULL, NULL, '2023-04-13 10:16:13', '2023-04-13 10:16:13'),
(42, 'assets/front/images//41071681380976.php', NULL, NULL, NULL, NULL, '2023-04-13 10:16:16', '2023-04-13 10:16:16'),
(43, 'assets/front/images//41621681380978.php', NULL, NULL, NULL, NULL, '2023-04-13 10:16:18', '2023-04-13 10:16:18'),
(44, 'assets/front/images//32981681381265.php', NULL, NULL, NULL, NULL, '2023-04-13 10:21:05', '2023-04-13 10:21:05'),
(45, 'assets/front/images//28031681381269.php', NULL, NULL, NULL, NULL, '2023-04-13 10:21:09', '2023-04-13 10:21:09'),
(46, 'assets/front/images//54721681381386.php', NULL, NULL, NULL, NULL, '2023-04-13 10:23:06', '2023-04-13 10:23:06'),
(47, 'assets/front/images//60771681381388.php', NULL, NULL, NULL, NULL, '2023-04-13 10:23:08', '2023-04-13 10:23:08'),
(48, 'assets/front/images//93021681381391.php', NULL, NULL, NULL, NULL, '2023-04-13 10:23:11', '2023-04-13 10:23:11'),
(49, 'assets/front/images//22781681381538.php', '4e234', 'abdalluhmahmoud55@gmail.com', '124568765', 234, '2023-04-13 10:25:38', '2023-04-13 10:25:38'),
(50, 'assets/front/images//50141681381650.php', '4e234', 'abdalluhmahmoud55@gmail.com', '12345678910', 234, '2023-04-13 10:27:30', '2023-04-13 10:27:30'),
(51, 'assets/front/images//16271681381674.php', '4e234', 'abdalluhmahmoud55@gmail.com', '12345678910', 234, '2023-04-13 10:27:54', '2023-04-13 10:27:54'),
(52, 'assets/front/images//57651681381681.php', '4e234', 'abdalluhmahmoud55@gmail.com', '12345678910', 234, '2023-04-13 10:28:01', '2023-04-13 10:28:01'),
(53, 'assets/front/images//71511681381682.php', '4e234', 'abdalluhmahmoud55@gmail.com', '12345678910', 234, '2023-04-13 10:28:02', '2023-04-13 10:28:02'),
(54, 'assets/front/images//49341681381699.php', '4e234', 'abdalluhmahmoud55@gmail.com', '12345678910', 234, '2023-04-13 10:28:19', '2023-04-13 10:28:19'),
(55, 'assets/front/images//74541681381857.php', '4e234', 'abdalluhmahmoud55@gmail.com', '12345678910', 234, '2023-04-13 10:30:57', '2023-04-13 10:30:57'),
(56, 'assets/front/images//4311681381924.jpg', 'Cheyenne David', 'kydit@mailinator.com', '+1 (107) 327-6276', 82, '2023-04-13 10:32:04', '2023-04-13 10:32:04'),
(57, 'assets/front/images//71501681382017.php', 'Raya Durham', 'fozyjig@mailinator.com', '+1 (948) 838-8153', 73, '2023-04-13 10:33:37', '2023-04-13 10:33:37'),
(58, 'assets/front/images//54391681382046.pdf', 'Graiden Walker', 'zoqubo@mailinator.com', '+1 (575) 674-1726', 73, '2023-04-13 10:34:06', '2023-04-13 10:34:06');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint NOT NULL,
  `title_ar` varchar(225) DEFAULT NULL,
  `title_en` varchar(225) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title_ar`, `title_en`, `created_at`, `updated_at`) VALUES
(2, 'Laborum Vero reicie', 'Maxime cupidatat vol', '2023-04-04 10:26:21', '2023-04-04 10:26:21'),
(3, 'Impedit nesciunt e', 'Officia quaerat Nam', '2023-04-05 10:04:07', '2023-04-05 10:04:07'),
(4, 'Consequatur ut Nam v', 'Velit a id numquam', '2023-04-05 10:04:13', '2023-04-05 10:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint NOT NULL,
  `comment` text,
  `users_id` bigint NOT NULL,
  `posts_id` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint NOT NULL,
  `name` varchar(225) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `phone` varchar(225) DEFAULT NULL,
  `subject` varchar(225) DEFAULT NULL,
  `message` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(2, 'Lois Underwood', 'homogumi@mailinator.com', '+1 (636) 665-9194', 'Vel perspiciatis mo', 'Reiciendis dolorum v', '2023-04-11 19:06:51', '2023-04-11 19:06:51'),
(3, 'Rhona Alvarez', 'vinypivot@mailinator.com', '+1 (184) 777-1544', 'Accusamus dolor alia', 'Voluptatem praesenti', '2023-04-11 19:09:55', '2023-04-11 19:09:55');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint NOT NULL,
  `question` varchar(225) DEFAULT NULL,
  `answer` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(3, 'Deserunt quia iure a', 'Aute ea tempore non', '2023-04-11 20:02:40', '2023-04-11 20:02:40'),
(4, 'Ea Nam ea nemo provi', 'Quas laudantium ull', '2023-04-11 20:02:44', '2023-04-11 20:02:44'),
(5, 'Laborum Eum molesti', 'Commodi illum nobis', '2023-04-11 20:02:49', '2023-04-11 20:02:49'),
(6, 'Ea dolor eiusmod sun', 'Nam alias alias saep', '2023-04-11 20:02:56', '2023-04-11 20:02:56'),
(7, 'Consequatur Sunt q', 'Doloribus amet numq', '2023-04-11 20:03:00', '2023-04-11 20:03:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` bigint NOT NULL,
  `email` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint NOT NULL,
  `title_ar` varchar(225) DEFAULT NULL,
  `title_en` varchar(225) DEFAULT NULL,
  `desc_ar` text,
  `desc_en` text,
  `image` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title_ar`, `title_en`, `desc_ar`, `desc_en`, `image`, `created_at`, `updated_at`) VALUES
(4, 'Ipsum porro labore', 'Obcaecati placeat e', 'Nisi sunt cupidatat', 'Officiis nihil aliqu', 'wallpaperflare.com_wallpaper.jpg', '2023-04-04 12:30:27', '2023-04-04 12:30:45'),
(6, 'Debitis qui sit mol', 'Non laborum Possimu', 'Eligendi consectetur', 'Earum rerum ea Nam u', 'slide-3.jpg', '2023-04-13 07:40:24', '2023-04-13 07:40:24'),
(7, 'Laboris nostrum illo', 'Impedit voluptas la', 'Fugiat sint pariatu', 'Pariatur Provident', 'slide-2.jpg', '2023-04-13 07:40:31', '2023-04-13 07:40:31'),
(8, 'Anim nihil et quis e', 'Dolores esse in illo', 'Culpa porro voluptat', 'Et sint dolor ipsum', 'slide-2.jpg', '2023-04-13 07:40:38', '2023-04-13 07:40:38');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint NOT NULL,
  `title_ar` varchar(225) DEFAULT NULL,
  `title_en` varchar(225) DEFAULT NULL,
  `sub_title_ar` text,
  `sub_title_en` text,
  `desc_ar` text,
  `desc_en` text,
  `images` text,
  `details` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sub_categories_id` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title_ar`, `title_en`, `sub_title_ar`, `sub_title_en`, `desc_ar`, `desc_en`, `images`, `details`, `created_at`, `updated_at`, `sub_categories_id`) VALUES
(18, 'Eum ut eius est omn', 'Aute quo consectetur', 'Sunt ratione eius p', 'Sint sint maxime et', 'Maiores tempore et', 'Aliquam animi vel q', '[\"assets\\/uploads\\/products\\/40391681388022.jpg\"]', '[{\"key\":\"Est tenetur molesti\",\"value\":\"Ut ipsum eligendi do\"}]', '2023-04-13 12:13:42', '2023-04-13 12:13:42', 4);

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE `quote` (
  `id` bigint NOT NULL,
  `first_name` varchar(225) DEFAULT NULL,
  `last_name` varchar(225) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `phone` varchar(225) DEFAULT NULL,
  `company` varchar(225) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `quote`
--

INSERT INTO `quote` (`id`, `first_name`, `last_name`, `email`, `phone`, `company`, `created_at`, `updated_at`) VALUES
(1, 'Rajah', 'Bean', 'zygexyny@mailinator.com', '+1 (447) 332-6738', 'Martinez and Stein Trading', '2023-04-11 19:49:55', '2023-04-11 19:49:55'),
(2, 'Phoebe', 'Dillard', 'vopef@mailinator.com', '98', 'May Sutton Plc', '2023-04-12 08:44:55', '2023-04-12 08:44:55'),
(3, 'ee', 'ee', 'ee', '2313', 'ee', '2023-04-13 10:24:23', '2023-04-13 10:24:23'),
(6, 'Kelly', 'Dalton', 'wygypyzeto@mailinator.com', '12345678900', 'Clarke and Hill Associates', '2023-04-13 11:13:15', '2023-04-13 11:13:15');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint NOT NULL,
  `images` text,
  `image_logo` text,
  `title_ar` varchar(225) DEFAULT NULL,
  `title_en` varchar(225) DEFAULT NULL,
  `desc_ar` text,
  `desc_en` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `images`, `image_logo`, `title_ar`, `title_en`, `desc_ar`, `desc_en`, `created_at`, `updated_at`) VALUES
(3, '[\"assets\\/uploads\\/services\\/53681681046838.jpg\"]', 'assets/uploads/services/63301681046435.png', 'إدارة المخلفات', 'waste management', 'النوع الأكثر تكلفة من خدمات إعادة التدوير المتاحة للإرسال.', 'The most expensive type of recycling service available for mailing.', '2023-04-08 03:42:09', '2023-04-12 07:26:58'),
(4, '[\"assets\\/uploads\\/services\\/10961681046827.jpg\"]', 'assets/uploads/services/37361681046428.png', 'إعادة تدوير البلاستيك', 'Plastic Recycling', 'النوع الأكثر تكلفة من خدمات إعادة التدوير المتاحة للإرسال.', 'The most expensive type of recycling service available for mailing.', '2023-04-08 03:43:28', '2023-04-12 07:28:04'),
(6, '[\"assets\\/uploads\\/services\\/25121681046782.jpg\"]', 'assets/uploads/services/78811681046415.png', 'إعادة تدوير الألمنيوم', 'Aluminium Recycling', 'النوع الأكثر تكلفة من خدمات إعادة التدوير المتاحة للإرسال.', 'The most expensive type of recycling service available for mailing.', '2023-04-08 03:46:31', '2023-04-12 07:27:57'),
(7, '[\"assets\\/uploads\\/services\\/15221681046766.jpg\"]', 'assets/uploads/services/6591681046402.png', 'إعادة تدوير الإلكترونيات', 'Electronics Recycling', 'النوع الأكثر تكلفة من خدمات إعادة التدوير المتاحة للإرسال.', 'The most expensive type of recycling service available for mailing.', '2023-04-08 03:47:29', '2023-04-12 07:27:53'),
(8, '[\"assets\\/uploads\\/services\\/41311681046735.jpg\"]', 'assets/uploads/services/21781681046394.png', 'إعادة تدوير المعادن', 'Metal Recycling', 'النوع الأكثر تكلفة من خدمات إعادة التدوير المتاحة للإرسال.', 'The most expensive type of recycling service available for mailing.', '2023-04-08 03:48:15', '2023-04-12 07:27:44'),
(9, '[\"assets\\/uploads\\/services\\/81851681340910.jpg\",\"assets\\/uploads\\/services\\/1451681340910.jpg\"]', 'assets/uploads/services/46981681046215.png', 'إعادة تدوير الزجاج', 'Glass Recycling', 'النوع الأكثر تكلفة من خدمات إعادة التدوير المتاحة للإرسال.', 'The most expensive type of recycling service available for mailing.', '2023-04-08 04:02:38', '2023-04-12 23:08:30');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint NOT NULL,
  `title_ar` varchar(225) DEFAULT NULL,
  `title_en` varchar(225) DEFAULT NULL,
  `desc_ar` text,
  `desc_en` text,
  `logo` varchar(225) DEFAULT NULL,
  `location_url` text,
  `address_ar` text,
  `address_en` text,
  `open` text,
  `phone` varchar(255) NOT NULL,
  `email` varchar(500) DEFAULT NULL,
  `facebook` text,
  `youtube` text,
  `twitter` text,
  `instagram` text,
  `linkedin` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title_ar`, `title_en`, `desc_ar`, `desc_en`, `logo`, `location_url`, `address_ar`, `address_en`, `open`, `phone`, `email`, `facebook`, `youtube`, `twitter`, `instagram`, `linkedin`, `created_at`, `updated_at`) VALUES
(1, 'Dolores incidunt ex', 'Amet nulla dolor se', 'Molestias doloremque', 'Molestias doloremque', 'assets/uploads/admins/images/96641680771410.png', 'Dolores incidunt ex', 'مصر', 'Egypt', '08.00 AM-09.00 PM', '01087269541', 'info@enviro.com', 'Fugit quis error ex', 'Nostrum duis dolore', 'Dolor repudiandae ex', 'Hic iste aut elit c', 'Natus dolore modi in', '2023-04-14 12:06:07', '2023-04-12 09:02:38');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint NOT NULL,
  `image` text,
  `title_ar` varchar(225) DEFAULT NULL,
  `title_en` varchar(225) DEFAULT NULL,
  `sub_title_ar` varchar(225) DEFAULT NULL,
  `sub_title_en` varchar(225) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `title_ar`, `title_en`, `sub_title_ar`, `sub_title_en`, `created_at`, `updated_at`) VALUES
(2, 'slide-2.jpg', 'بيئة أفضل مستقبل أفضل', 'Better Environment Better Future', 'مرحبًا بكم في Enviro Group', 'Welcome to Enviro Group', '2023-04-07 22:21:05', '2023-04-13 07:11:29'),
(5, 'slide-1.jpg', 'نحن نقدم خدمة إعادة التدوير', 'We Provide Recycling Service', 'إعادة استخدام | إعادة التدوير | اعادة تعبئه', 'Reuse | Recycle | Refield', '2023-04-07 22:23:15', '2023-04-13 07:11:23');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint NOT NULL,
  `title_ar` varchar(225) DEFAULT NULL,
  `title_en` varchar(225) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `title_ar`, `title_en`, `created_at`, `updated_at`, `category_id`) VALUES
(3, 'Amet culpa sequi d', 'Ab perspiciatis pro', '2023-04-05 10:06:33', '2023-04-05 10:06:33', 2),
(4, 'Maxime culpa qui ni', 'Illum aut eu consec', '2023-04-05 10:06:40', '2023-04-05 10:06:40', 3),
(5, 'Animi eos ipsum fa', 'Voluptatem et illo r', '2023-04-05 10:06:46', '2023-04-05 10:06:46', 4),
(7, 'Voluptates elit quo', 'Ducimus et neque pr', '2023-04-12 11:07:47', '2023-04-12 11:07:47', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint NOT NULL,
  `name` varchar(225) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `phone` varchar(225) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `image` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bg_images`
--
ALTER TABLE `bg_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comments_users1_idx` (`users_id`),
  ADD KEY `fk_comments_posts1_idx` (`posts_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_products_sub_categories1_idx` (`sub_categories_id`);

--
-- Indexes for table `quote`
--
ALTER TABLE `quote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sub_categories_categories1_idx` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bg_images`
--
ALTER TABLE `bg_images`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `quote`
--
ALTER TABLE `quote`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_comments_posts1` FOREIGN KEY (`posts_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `fk_comments_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_products_sub_categories1` FOREIGN KEY (`sub_categories_id`) REFERENCES `sub_categories` (`id`);

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `fk_sub_categories_categories1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
