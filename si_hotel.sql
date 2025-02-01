-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Feb 2025 pada 13.20
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_hotel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kamar` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'menunggu',
  `tanggal_masuk` varchar(255) DEFAULT NULL,
  `tanggal_keluar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bookings`
--

INSERT INTO `bookings` (`id`, `id_kamar`, `nama`, `email`, `phone`, `status`, `tanggal_masuk`, `tanggal_keluar`, `created_at`, `updated_at`) VALUES
(1, '1', 'user', 'user@gmail.com', '0892374843', 'Diterima', '2025-01-26', '2025-01-27', '2025-01-26 02:29:28', '2025-01-26 02:30:37'),
(2, '2', 'user', 'user@gmail.com', '0892374843', 'menunggu', '2025-01-28', '2025-01-29', '2025-01-26 02:29:52', '2025-01-26 02:29:52'),
(3, '3', 'user', 'user@gmail.com', '0892374843', 'Ditolak', '2025-01-30', '2025-01-31', '2025-01-26 02:30:12', '2025-01-26 02:30:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `massage` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `massage`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user@gmail.com', '0897267346', 'hello', '2025-01-26 00:57:59', '2025-01-26 00:57:59'),
(2, 'admin', 'admin@gmail.com', '0892374843', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur euismod ipsum sit amet aliquet interdum. Curabitur ultrices nisl enim, sit amet tempus elit maximus placerat. Pellentesque eu mi quis nunc bibendum tincidunt ac vel turpis. Donec semper efficitur interdum. Praesent vel nibh varius, vehicula elit ac, semper ex. Mauris nec urna lacus.', '2025-01-26 01:04:48', '2025-01-26 01:04:48'),
(3, 'oriza dio aria', 'aink.strez44@yahoo.com', '0892367456', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur euismod ipsum sit amet aliquet interdum. Curabitur ultrices nisl enim, sit amet tempus elit maximus placerat. Pellentesque eu mi quis nunc bibendum tincidunt ac vel turpis. Donec semper efficitur interdum. Praesent vel nibh varius, vehicula elit ac, semper ex. Mauris nec urna lacus.', '2025-01-26 01:07:17', '2025-01-26 01:07:17'),
(4, 'user', 'werg@gm.k', '0897267346', '<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">', '2025-01-26 01:35:41', '2025-01-26 01:35:41'),
(5, 'user', 'user@gmail.com', '0897267346', 'iam venom', '2025-01-26 01:41:27', '2025-01-26 01:41:27'),
(6, 'user', 'user@gmail.com', '0892374843', 'Massage ajg', '2025-01-26 03:14:53', '2025-01-26 03:14:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `galleries`
--

INSERT INTO `galleries` (`id`, `gambar`, `created_at`, `updated_at`) VALUES
(1, '1737883903.png', '2025-01-26 02:31:43', '2025-01-26 02:31:43'),
(2, '1737883910.jpg', '2025-01-26 02:31:50', '2025-01-26 02:31:50'),
(3, '1737883918.jpg', '2025-01-26 02:31:58', '2025-01-26 02:31:58'),
(4, '1737883929.jpg', '2025-01-26 02:32:09', '2025-01-26 02:32:09'),
(5, '1737883940.jpg', '2025-01-26 02:32:20', '2025-01-26 02:32:20'),
(6, '1737883948.jpg', '2025-01-26 02:32:28', '2025-01-26 02:32:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2025_01_13_102614_create_sessions_table', 1),
(7, '2025_01_18_064339_create_rooms_table', 1),
(8, '2025_01_23_123918_create_bookings_table', 1),
(9, '2025_01_25_075150_add_status_field_to_bookings', 1),
(10, '2025_01_26_054932_create_galleries_table', 1),
(11, '2025_01_26_074048_create_contacts_table', 1),
(12, '2025_01_31_081951_create_notifications_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kamar` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `deskripsi` longtext DEFAULT NULL,
  `harga` varchar(255) DEFAULT NULL,
  `type_kamar` varchar(255) DEFAULT NULL,
  `wifi` varchar(255) NOT NULL DEFAULT 'ya',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `rooms`
--

INSERT INTO `rooms` (`id`, `nama_kamar`, `gambar`, `deskripsi`, `harga`, `type_kamar`, `wifi`, `created_at`, `updated_at`) VALUES
(1, 'Kamar Rendah', '1737881060.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur euismod ipsum sit amet aliquet interdum. Curabitur ultrices nisl enim, sit amet tempus elit maximus placerat. Pellentesque eu mi quis nunc bibendum tincidunt ac vel turpis. Donec semper efficitur interdum. Praesent vel nibh varius, vehicula elit ac, semper ex. Mauris nec urna lacus.', '200000', 'rendah', 'yes', '2025-01-26 01:44:20', '2025-01-26 01:44:20'),
(2, 'Kamar Sedang', '1737881078.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur euismod ipsum sit amet aliquet interdum. Curabitur ultrices nisl enim, sit amet tempus elit maximus placerat. Pellentesque eu mi quis nunc bibendum tincidunt ac vel turpis. Donec semper efficitur interdum. Praesent vel nibh varius, vehicula elit ac, semper ex. Mauris nec urna lacus.', '500000', 'sedang', 'yes', '2025-01-26 01:44:38', '2025-01-26 01:44:38'),
(3, 'Kamar Tinggi', '1737881091.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur euismod ipsum sit amet aliquet interdum. Curabitur ultrices nisl enim, sit amet tempus elit maximus placerat. Pellentesque eu mi quis nunc bibendum tincidunt ac vel turpis. Donec semper efficitur interdum. Praesent vel nibh varius, vehicula elit ac, semper ex. Mauris nec urna lacus.', '1000000', 'tinggi', 'yes', '2025-01-26 01:44:51', '2025-01-26 01:44:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
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
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('wpVqYOR3CfOirIW3wWJBtiknOXFTCaEzTKIryeef', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVmFHYjNmWHo2Z3dVWll4VzRwUEF3Z1BjR3NBckQ2SXV6cmpWa0xySCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9raXJpbV9lbWFpbC8yIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1738324325);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `usertype` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `phone`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `usertype`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '0892374843', '$2y$12$c8PhHokGpEI7YN9/jKzd9uSh/HQ56eAeOzkrRvYK6gNpxL115Uv0i', NULL, NULL, NULL, 'admin', NULL, NULL, NULL, '2025-01-26 01:42:49', '2025-01-26 01:42:49'),
(2, 'user', 'user@gmail.com', NULL, '0892374843', '$2y$12$aGAqFSxZ52ub80AV3cg4V.aSyUT/cRDhgoKNaEelLvzYBv5KM7qYi', NULL, NULL, NULL, 'user', NULL, NULL, NULL, '2025-01-26 01:43:24', '2025-01-26 01:43:24');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
