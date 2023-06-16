-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 16, 2023 at 04:52 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokosepatu_db`
--

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2023_06_13_002232_create_sepatus_table', 5);

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
-- Table structure for table `sepatus`
--

CREATE TABLE `sepatus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` text NOT NULL,
  `harga` text NOT NULL,
  `ukuran` text NOT NULL,
  `stock` int(11) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `photo` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sepatus`
--

INSERT INTO `sepatus` (`id`, `nama`, `harga`, `ukuran`, `stock`, `deskripsi`, `photo`, `created_at`, `updated_at`) VALUES
(3, 'Vans', '400000', 'Medium', 0, '<p style=\"text-align: justify;\">Vans dikenal dengan sepatu olahraga yang bergaya kasual dan skateboarding. Sepatu Vans memiliki desain yang simpel dan klasik, sering kali dengan sol karet tebal dan motif ikonik seperti kotak-kotak. Merek ini populer di kalangan pecinta olahraga skateboard dan fashion streetwear.</p>', '64883b517780b.jpeg', '2023-06-12 22:24:15', '2023-06-16 07:50:08'),
(4, 'Puma', '1200000', 'Besar', 6, '<p style=\"text-align: justify;\">Puma menawarkan sepatu olahraga dengan desain yang stylish dan sporty. Merek ini dikenal dengan perpaduan yang sempurna antara gaya dan kinerja. Sepatu Puma dirancang untuk berbagai olahraga, mulai dari sepak bola, lari, hingga golf. Dengan bahan berkualitas tinggi dan desain yang menarik, sepatu Puma memberikan kenyamanan dan performa yang optimal.</p>', '6487ffd194a84.jpg', '2023-06-12 22:34:09', '2023-06-13 04:29:02'),
(5, 'Reebok', '1500000', 'Besar', 0, '<p style=\"text-align: justify;\">Reebok dikenal karena desain sepatu olahraganya yang trendy dan fungsional. Merek ini menawarkan berbagai model sepatu yang sesuai untuk berbagai jenis olahraga, termasuk lari, angkat berat, dan fitness. Reebok juga dikenal dengan teknologi inovatif seperti sistem penyerapan kejutan dan dukungan yang optimal untuk kaki.</p>', '648801ed53734.jpeg', '2023-06-12 22:43:09', '2023-06-16 07:50:18'),
(6, 'Adidas', '3000000', 'Medium', 2, '<p style=\"text-align: justify;\">Adidas adalah merek terkenal dalam dunia olahraga. Mereka menawarkan sepatu dengan desain yang stylish dan inovatif, serta teknologi yang mendukung performa olahraga. Sepatu Adidas dirancang untuk berbagai jenis olahraga, termasuk lari, sepak bola, tenis, dan fitness. Dengan kualitas yang terjamin, sepatu Adidas memberikan kenyamanan dan daya tahan yang optimal.</p>\r\n<p>&nbsp;</p>', '64884c35b5f73.jpg', '2023-06-13 04:00:06', '2023-06-13 04:28:11'),
(8, 'Nike', '3000000', 'Kecil', 15, '<p style=\"text-align: justify;\">Sepatu olahraga Nike telah menjadi ikon dalam industri olahraga. Dikenal dengan desain yang inovatif dan teknologi terkini, Nike menawarkan sepatu yang nyaman dan berperforma tinggi. Dengan berbagai jenis sepatu untuk berbagai olahraga, seperti lari, basket, dan sepak bola, Nike menjadi pilihan utama bagi atlet dan penggemar olahraga di seluruh dunia.</p>\r\n<p>&nbsp;</p>', '64884c8c810b7.jpeg', '2023-06-13 04:01:32', '2023-06-13 07:28:32'),
(10, 'Li-Ning', '600000', 'Besar', 2, '<p style=\"text-align: justify;\">Li-Ning adalah merek sepatu olahraga ternama yang berasal dari China. Merek ini terkenal dengan inovasi teknologi dan desain yang futuristik. Sepatu Li-Ning menawarkan kenyamanan dan dukungan yang tinggi, terutama untuk olahraga seperti bulu tangkis, basket, dan lari. Li-Ning juga bekerja sama dengan atlet terkenal untuk mengembangkan sepatu yang sesuai dengan kebutuhan mereka, sehingga sepatu ini diakui oleh komunitas olahraga internasional.</p>', '64886f682c909.jpeg', '2023-06-13 06:30:16', '2023-06-13 07:15:47'),
(11, 'Skecher', '400000', 'Kecil', 8, '<p style=\"text-align: justify;\">Skechers dikenal dengan desain sepatu olahraga yang trendi dan nyaman. Merek ini menawarkan berbagai pilihan model sepatu yang cocok untuk berjalan, lari, dan olahraga sehari-hari. Skechers menggunakan teknologi inovatif seperti Air Cooled Memory Foam untuk memberikan kenyamanan ekstra dan penyerapan kejutan yang baik. Dengan desain yang modis dan kualitas yang baik, sepatu Skechers cocok untuk gaya hidup aktif dan santai.</p>', '64886f97cf720.png', '2023-06-13 06:31:04', '2023-06-13 06:31:04'),
(12, 'Ardiles', '3000000', 'Besar', 12, '<p style=\"text-align: justify;\">Sepatu olahraga Ardiles menawarkan kombinasi sempurna antara gaya dan kenyamanan. Dikenal dengan desain yang modern dan warna-warna cerah, Ardiles cocok untuk berbagai jenis aktivitas fisik. Sepatu Ardiles dirancang dengan bahan berkualitas tinggi dan teknologi canggih untuk memberikan performa yang optimal dan melindungi kaki dari cedera. Dengan harga yang terjangkau, Ardiles menjadi pilihan populer bagi mereka yang mencari sepatu olahraga yang stylish dan terjangkau.</p>', '64886fc8332b2.jpg', '2023-06-13 06:31:52', '2023-06-13 06:31:52'),
(13, 'On Running', '1400000', 'Sangat Besar', 20, '<p style=\"text-align: justify;\">On Running adalah merek sepatu olahraga yang spesialis dalam lari. Merek ini dikenal dengan teknologi canggih yang dirancang untuk meningkatkan performa lari dan kenyamanan. Sepatu On Running menggunakan teknologi unik seperti CloudTec, yang memberikan kombinasi luar biasa antara ringan, responsif, dan penyerapan kejutan yang baik. Merek ini juga fokus pada desain yang stylish dan inovatif, menjadikan sepatu On Running pilihan yang populer di kalangan pelari profesional maupun amatir.</p>', '64886ff6b75d0.jpeg', '2023-06-13 06:32:38', '2023-06-16 05:46:14'),
(14, 'New Balance', '900000', 'Besar', 8, '<p style=\"text-align: justify;\">New Balance adalah merek sepatu olahraga yang terkenal dengan kualitas dan kenyamanannya. Sepatu New Balance menawarkan berbagai model dan ukuran untuk berbagai jenis olahraga, termasuk lari, berjalan, dan latihan. Merek ini dikenal dengan teknologi inovatif seperti Fresh Foam dan REVlite, yang memberikan kenyamanan, penyerapan kejutan, dan dukungan yang optimal. Dengan reputasi yang kuat dan fokus pada kualitas, New Balance telah menjadi merek terpercaya bagi banyak atlet dan pecinta olahraga di seluruh dunia.</p>', '6488701d143b9.jpeg', '2023-06-13 06:33:17', '2023-06-13 07:13:01'),
(15, 'Nike Air Jordan 1', '4000000', 'Kecil', 12, '<p>Air Jordan is a line of basketball shoes produced by Nike, Inc. Related apparel and accessories are marketed under Jordan Brand.&nbsp; The first Air Jordan shoe was produced for basketball player Michael Jordan during his time with the Chicago Bulls in late 1984 and released to the public on April 1, 1985.[2][3] The shoes were designed for Nike by Peter Moore, Tinker Hatfield, and Bruce Kilgore.[4][5]&nbsp; The Jordan Logo, known as the \"Jumpman\", originated from a photograph by Jacobus Rentmeester, taken before Jordan played for Team USA in the 1984 Summer Olympics.</p>', '648c70738f9d3.jpeg', '2023-06-16 07:22:57', '2023-06-16 07:23:47'),
(16, 'Under Armour Mens Surge 3 Trainers Blue', '2000000', 'Besar', 11, '<p><span style=\"color: #333333; font-family: \'Noto Sans\', \'Noto Sans Thai\', sans-serif; font-size: 13px;\">Sepatu olahraga Under Armour diciptakan dengan</span><em style=\"margin: 0px; padding: 0px; font-size: 13px; color: #333333; box-sizing: border-box; font-family: \'Noto Sans\', \'Noto Sans Thai\', sans-serif;\">&nbsp;cushion</em><span style=\"color: #333333; font-family: \'Noto Sans\', \'Noto Sans Thai\', sans-serif; font-size: 13px;\">&nbsp;ringan yang sangat fleksibel dan dapat menyangga kaki dengan baik dan dapat menyerap tekanan. Selain itu, ada juga teknologi</span><em style=\"margin: 0px; padding: 0px; font-size: 13px; color: #333333; box-sizing: border-box; font-family: \'Noto Sans\', \'Noto Sans Thai\', sans-serif;\">&nbsp;Clutchfit</em><span style=\"color: #333333; font-family: \'Noto Sans\', \'Noto Sans Thai\', sans-serif; font-size: 13px;\">&nbsp;yang membuat sepatu olahraga Under Armour menyesuaikan diri dengan gerakan tubuh Anda, baik ketika bergerak maupun beristirahat</span></p>', '648c73e50b992.jpg', '2023-06-16 07:38:29', '2023-06-16 07:38:29'),
(17, 'Nike Tiempo Legend 7 Elite 10R Limited Edition', '999999999', 'Besar', 5, '<div class=\"u-mrgn-bottom--6 u-txt--base\" style=\"box-sizing: border-box; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; line-height: 1.4 !important; margin-bottom: 36px !important;\">\r\n<h3 class=\"c-information__subtitle\" style=\"box-sizing: border-box; margin: 0px 0px 12px; padding: 0px; font-size: 16px; line-height: 1.2;\">Spesifikasi</h3>\r\n<div class=\"c-collapsible\" style=\"box-sizing: border-box;\">\r\n<div class=\"c-collapsible__detail\" style=\"box-sizing: border-box; margin-bottom: 15px; overflow: hidden; word-break: break-word; max-height: 100%;\">\r\n<table class=\"c-information__table\" style=\"border-collapse: collapse; border-spacing: 0px;\"><colgroup style=\"box-sizing: border-box;\"><col style=\"box-sizing: border-box;\" /><col style=\"box-sizing: border-box; width: 12px;\" /></colgroup>\r\n<tbody style=\"box-sizing: border-box;\">\r\n<tr style=\"box-sizing: border-box; vertical-align: top;\">\r\n<th class=\"u-align-left u-txt--normal\" style=\"box-sizing: border-box; text-align: left !important; font-weight: 400 !important;\">Kategori</th>\r\n<td style=\"box-sizing: border-box;\">:</td>\r\n<td style=\"box-sizing: border-box;\"><a style=\"box-sizing: border-box; color: #d71149; text-decoration-line: none; cursor: pointer; line-height: inherit; transition: color 0.3s ease-out 0s;\" href=\"https://www.bukalapak.com/c/olahraga/sepakbola-futsal/sepatu-futsal\" target=\"_blank\" rel=\"noopener noreferer nofollow\">Sepatu Futsal</a></td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; vertical-align: top;\">\r\n<th class=\"u-align-left u-txt--normal\" style=\"box-sizing: border-box; text-align: left !important; font-weight: 400 !important;\">Berat</th>\r\n<td style=\"box-sizing: border-box;\">:</td>\r\n<td style=\"box-sizing: border-box;\">1 kilogram</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; vertical-align: top;\">\r\n<th class=\"u-align-left u-txt--normal\" style=\"box-sizing: border-box; text-align: left !important; font-weight: 400 !important;\">Asal Barang</th>\r\n<td style=\"box-sizing: border-box;\">:</td>\r\n<td style=\"box-sizing: border-box;\">Lokal</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; vertical-align: top;\">\r\n<th class=\"u-align-left u-txt--normal\" style=\"box-sizing: border-box; text-align: left !important; font-weight: 400 !important;\">Brand</th>\r\n<td style=\"box-sizing: border-box;\">:</td>\r\n<td style=\"box-sizing: border-box;\"><a style=\"box-sizing: border-box; color: #d71149; text-decoration-line: none; cursor: pointer; line-height: inherit; transition: color 0.3s ease-out 0s;\" href=\"https://www.bukalapak.com/brand/nike\" target=\"_blank\" rel=\"noopener noreferer nofollow\">Nike</a></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"c-information__description u-txt--base\" style=\"box-sizing: border-box; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; line-height: 1.4 !important;\">\r\n<h3 class=\"c-information__subtitle\" style=\"box-sizing: border-box; margin: 0px 0px 12px; padding: 0px; font-size: 16px; line-height: 1.2;\">Deskripsi</h3>\r\n<div class=\"c-collapsible\" style=\"box-sizing: border-box;\">\r\n<div class=\"c-collapsible__detail\" style=\"box-sizing: border-box; margin-bottom: 15px; overflow: hidden; word-break: break-word; max-height: 100%;\">\r\n<div class=\"c-information__description-txt\" style=\"box-sizing: border-box;\">Nike Tiempo Legend 7 Elite 10R IC Limited Edition Size 43<br style=\"box-sizing: border-box;\" />Hanya ada 1000 pasang di dunia.<br style=\"box-sizing: border-box;\" />Memiliki nomor 0009 | 1000<br style=\"box-sizing: border-box;\" />Original BNIB.<br style=\"box-sizing: border-box;\" />Kelengkapan : lengkap dengan gymsack.<br style=\"box-sizing: border-box;\" />Size 43</div>\r\n</div>\r\n</div>\r\n</div>', '648c74ac8e1c7.jpg', '2023-06-16 07:41:48', '2023-06-16 07:41:48'),
(18, 'Converse Star Player 76 Premium Canvass', '3000000', 'Besar', 0, '<p class=\"card-text\" style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: system-ui, -apple-system, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', \'Liberation Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 16px;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: system-ui, -apple-system, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', \'Liberation Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 16px; text-align: justify;\">Converse dikenal karena sepatu klasiknya, terutama model Chuck Taylor All-Star yang ikonik. Sepatu Converse menawarkan gaya yang klasik dan sederhana, cocok untuk berbagai kegiatan sehari-hari. Terbuat dari bahan berkualitas tinggi, sepatu Converse memberikan kenyamanan dan tahan lama.</p>', '648c76041601e.jpg', '2023-06-16 07:47:32', '2023-06-16 07:47:57');

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
(2, 'Pilar Filino Hadi', 'filinohadi@gmail.com', NULL, '$2y$10$vvljVcKtGDIPfhUp4f4rEOuGp7Ll5sWFyvoT/2IGcx5gTRdAIHuSu', NULL, '2023-04-17 18:22:18', '2023-04-17 18:22:18'),
(11, 'Kobo Kanaeru', 'kobo@gmail.com', NULL, '$2y$10$ONBoJAwg5wwrdtYENW0w4uvjkST4f27NxhQ.mvOTxUycfthLCjnJ6', NULL, '2023-06-16 05:53:57', '2023-06-16 05:53:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sepatus`
--
ALTER TABLE `sepatus`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sepatus`
--
ALTER TABLE `sepatus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
