-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2026 at 12:47 PM
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
-- Database: `animasi_global`
--

-- --------------------------------------------------------

--
-- Table structure for table `animations`
--

CREATE TABLE `animations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `rating` decimal(3,1) NOT NULL,
  `box_office` decimal(10,2) DEFAULT NULL,
  `synopsis` text NOT NULL,
  `poster_url` varchar(255) DEFAULT NULL,
  `is_recommended` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `animations`
--

INSERT INTO `animations` (`id`, `country_id`, `title`, `genre`, `year`, `rating`, `box_office`, `synopsis`, `poster_url`, `is_recommended`, `created_at`, `updated_at`) VALUES
(1, 1, 'Inside Out 2', 'Komedi, Drama', '2024', 7.8, 1700.00, 'Riley memasuki masa remaja dan emosi-emosi baru bermunculan di dalam kepalanya, memicu kekacauan di Headquarters.', 'https://upload.wikimedia.org/wikipedia/en/6/6a/Inside_Out_2_poster.jpg', 1, '2026-05-16 03:25:03', '2026-05-16 03:25:03'),
(2, 1, 'Zootopia', 'Petualangan, Komedi', '2016', 8.0, 1023.00, 'Seekor kelinci muda menjadi polisi pertama di kota mamalia modern dan harus mengungkap konspirasi besar.', 'https://upload.wikimedia.org/wikipedia/en/9/96/Zootopia_%28movie_poster%29.jpg', 1, '2026-05-16 03:25:03', '2026-05-16 03:25:03'),
(3, 1, 'Moana 2', 'Petualangan, Musikal', '2024', 7.1, 1100.00, 'Moana berlayar ke lautan yang jauh bersama kru baru untuk memenuhi panggilan leluhurnya.', 'https://upload.wikimedia.org/wikipedia/en/2/22/Moana_2_poster.jpg', 0, '2026-05-16 03:25:03', '2026-05-16 03:25:03'),
(4, 2, 'Spirited Away', 'Fantasi, Petualangan', '2001', 9.3, 395.00, 'Seorang gadis kecil terperangkap di dunia roh dan harus bekerja keras untuk menyelamatkan kedua orang tuanya.', 'https://upload.wikimedia.org/wikipedia/en/d/db/Spirited_Away_Japanese_poster.png', 1, '2026-05-16 03:25:03', '2026-05-16 03:25:03'),
(5, 2, 'Your Name', 'Romance, Drama', '2016', 8.9, 380.00, 'Dua remaja dari latar belakang berbeda secara misterius bertukar tubuh dan saling jatuh cinta.', 'https://upload.wikimedia.org/wikipedia/en/0/0b/Your_Name_poster.png', 1, '2026-05-16 03:25:03', '2026-05-16 03:25:03'),
(6, 2, 'Demon Slayer: Mugen Train', 'Aksi, Fantasi', '2020', 8.2, 500.00, 'Tanjiro dan kawan-kawan bergabung dengan Flame Hashira dalam misi berbahaya di atas kereta yang dikuasai iblis.', 'https://upload.wikimedia.org/wikipedia/en/9/9b/Demon_Slayer_-Kimetsu_no_Yaiba-_The_Movie_-_Mugen_Train_poster.jpg', 1, '2026-05-16 03:25:03', '2026-05-16 03:25:03'),
(7, 3, 'Ne Zha 2', 'Aksi, Fantasi', '2025', 8.5, 1800.00, 'Ne Zha kembali menghadapi ancaman lebih besar dan berjuang melawan takdir untuk melindungi dunia.', 'https://upload.wikimedia.org/wikipedia/en/2/2e/Ne_Zha_2_poster.jpg', 1, '2026-05-16 03:25:03', '2026-05-16 03:25:03'),
(8, 3, 'Ne Zha', 'Aksi, Fantasi', '2019', 7.9, 726.00, 'Anak yang dilahirkan dari bola api iblis berjuang melawan takdirnya untuk menjadi pahlawan.', 'https://upload.wikimedia.org/wikipedia/en/5/5c/Ne_Zha_2019_poster.jpg', 1, '2026-05-16 03:25:03', '2026-05-16 03:25:03'),
(9, 3, 'Monkey King: Hero is Back', 'Petualangan, Aksi', '2015', 7.3, 154.00, 'Sun Wukong yang tersegel selama 500 tahun kembali bangkit untuk melindungi seorang bocah dari kejahatan.', 'https://upload.wikimedia.org/wikipedia/en/e/e6/Monkey_King_Hero_Is_Back.jpg', 0, '2026-05-16 03:25:03', '2026-05-16 03:25:03'),
(10, 4, 'The Triplets of Belleville', 'Komedi, Petualangan', '2003', 7.8, 14.00, 'Seorang nenek gigih mencari cucunya yang diculik mafia selama Tour de France dengan bantuan trio penyanyi tua.', 'https://upload.wikimedia.org/wikipedia/en/e/e7/Belleville_Rendez-vous.jpg', 0, '2026-05-16 03:25:03', '2026-05-16 03:25:03'),
(11, 4, 'Persepolis', 'Drama, Biografi', '2007', 8.0, 23.00, 'Kisah nyata seorang gadis Iran yang tumbuh dewasa di tengah Revolusi Islam dan mencari identitasnya di Eropa.', 'https://upload.wikimedia.org/wikipedia/en/d/db/Persepolis_poster.jpg', 1, '2026-05-16 03:25:03', '2026-05-16 03:25:03'),
(12, 4, 'Ernest & Celestine', 'Petualangan, Keluarga', '2012', 7.8, 10.00, 'Persahabatan tak terduga antara seekor beruang besar dan tikus kecil yang menantang norma masyarakat mereka.', 'https://upload.wikimedia.org/wikipedia/en/4/4e/Ernest_et_C%C3%A9lestine_poster.jpg', 1, '2026-05-16 03:25:03', '2026-05-16 03:25:03'),
(13, 5, 'Wallace & Gromit: Vengeance Most Fowl', 'Komedi, Petualangan', '2024', 7.6, 50.00, 'Wallace dan anjingnya Gromit kembali menghadapi ancaman dari musuh lama yang kini lebih berbahaya dari sebelumnya.', 'https://upload.wikimedia.org/wikipedia/en/3/3e/Wallace_%26_Gromit_Vengeance_Most_Fowl.jpg', 1, '2026-05-16 03:25:03', '2026-05-16 03:25:03'),
(14, 5, 'Shaun the Sheep Movie', 'Komedi, Keluarga', '2015', 7.5, 106.00, 'Shaun si domba bertualang ke kota besar untuk membawa pulang tuannya yang kehilangan ingatan.', 'https://upload.wikimedia.org/wikipedia/en/0/09/Shaun_the_Sheep_Movie_poster.jpg', 1, '2026-05-16 03:25:03', '2026-05-16 03:25:03'),
(15, 5, 'Chicken Run', 'Komedi, Petualangan', '2000', 7.0, 224.00, 'Sekelompok ayam yang mencoba melarikan diri dari peternakan sebelum dijadikan pai ayam oleh pemiliknya.', 'https://upload.wikimedia.org/wikipedia/en/8/87/Chicken_run.jpg', 0, '2026-05-16 03:25:03', '2026-05-16 03:25:03'),
(16, 6, 'The Breadwinner', 'Drama, Petualangan', '2017', 7.9, 5.00, 'Seorang gadis Afghanistan menyamar sebagai anak laki-laki untuk menghidupi keluarganya di bawah rezim Taliban.', 'https://upload.wikimedia.org/wikipedia/en/2/27/The_Breadwinner_poster.jpg', 1, '2026-05-16 03:25:03', '2026-05-16 03:25:03'),
(17, 6, 'Barbie Diaries', 'Komedi, Drama', '2006', 5.8, 8.00, 'Barbie menjalani kehidupan SMA penuh drama, persahabatan, dan impian menjadi bintang musik.', 'https://upload.wikimedia.org/wikipedia/en/6/67/Barbie_Diaries.jpg', 0, '2026-05-16 03:25:03', '2026-05-16 03:25:03'),
(18, 6, 'Rock Dog', 'Komedi, Musikal', '2016', 5.9, 9.00, 'Seekor anjing Tibet meninggalkan desa asalnya untuk mengejar mimpinya menjadi musisi rock terkenal.', 'https://upload.wikimedia.org/wikipedia/en/5/5f/Rock_Dog_poster.jpg', 0, '2026-05-16 03:25:03', '2026-05-16 03:25:03'),
(19, 7, 'The King of Pigs', 'Drama, Thriller', '2011', 7.4, 2.00, 'Dua pria dewasa kembali mengingat masa kelam perundungan di sekolah menengah mereka dulu.', 'https://upload.wikimedia.org/wikipedia/en/6/65/The_King_of_Pigs.jpg', 0, '2026-05-16 03:25:03', '2026-05-16 03:25:03'),
(20, 7, 'Seoul Station', 'Horror, Drama', '2016', 6.6, 3.00, 'Wabah zombie menyerang Seoul Station dan seorang gadis tunawisma berjuang bertahan hidup di tengah kekacauan.', 'https://upload.wikimedia.org/wikipedia/en/c/c3/Seoul_Station_film.jpg', 0, '2026-05-16 03:25:03', '2026-05-16 03:25:03'),
(21, 7, 'The Satellite Girl and Milk Cow', 'Romance, Fantasi', '2014', 7.0, 1.50, 'Sebuah satelit tua yang jatuh ke bumi berubah menjadi gadis dan jatuh cinta dengan seorang pria yang dikutuk jadi sapi.', 'https://upload.wikimedia.org/wikipedia/en/5/5e/The_Satellite_Girl_and_Milk_Cow.jpg', 1, '2026-05-16 03:25:03', '2026-05-16 03:25:03');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `flag_emoji` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `flag_emoji`, `created_at`, `updated_at`) VALUES
(1, 'Amerika Serikat', '🇺🇸', '2026-05-16 03:25:03', '2026-05-16 03:25:03'),
(2, 'Jepang', '🇯🇵', '2026-05-16 03:25:03', '2026-05-16 03:25:03'),
(3, 'China', '🇨🇳', '2026-05-16 03:25:03', '2026-05-16 03:25:03'),
(4, 'Prancis', '🇫🇷', '2026-05-16 03:25:03', '2026-05-16 03:25:03'),
(5, 'Inggris', '🇬🇧', '2026-05-16 03:25:03', '2026-05-16 03:25:03'),
(6, 'Kanada', '🇨🇦', '2026-05-16 03:25:03', '2026-05-16 03:25:03'),
(7, 'Korea Selatan', '🇰🇷', '2026-05-16 03:25:03', '2026-05-16 03:25:03');

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
(4, '2026_05_16_101756_create_countries_table', 1),
(5, '2026_05_16_101802_create_animations_table', 1);

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
('b7NnnnZR7Rc0aBlBvQarz7IkL93CECZuDSIYljph', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicXJrS0lDWUZPQURwVjB1dEFTVWJURXFMQ01rNUNUeTQwZW9qdmdXaCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9yZWNvbW1lbmRlZCI7czo1OiJyb3V0ZSI7Tjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1778928355);

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
-- Indexes for dumped tables
--

--
-- Indexes for table `animations`
--
ALTER TABLE `animations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `animations_country_id_foreign` (`country_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `animations`
--
ALTER TABLE `animations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `animations`
--
ALTER TABLE `animations`
  ADD CONSTRAINT `animations_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
