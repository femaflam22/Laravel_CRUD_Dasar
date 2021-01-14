-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jan 2021 pada 04.31
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `receptionistdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `guests`
--

CREATE TABLE `guests` (
  `no` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `nama_lengkap` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keperluan` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_bersangkutan` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `guests`
--

INSERT INTO `guests` (`no`, `tanggal`, `nama_lengkap`, `keperluan`, `nama_bersangkutan`, `telp`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2020-12-05', 'Muhammad Gaza', 'Rapat direksi', 'Fema Flamelina Putri', '085886652692', '2020-12-05 09:05:26', NULL, NULL),
(2, '2020-12-06', 'Artasya Legina', 'Wawancara kerja', 'Amelia', '085765428974', '2020-12-06 05:17:31', NULL, NULL),
(3, '2020-12-06', 'Neliyana Ulfiah', 'Janji Temu', 'Ronald', '081678986537', '2020-12-06 00:06:35', '2020-12-08 03:29:48', '2020-12-08 03:29:48'),
(5, '2020-12-06', 'Nia Yuliyanti', 'Rapat project', 'Bara Damar', '085787091256', '2020-12-06 00:26:58', '2020-12-08 03:02:51', NULL),
(7, '2020-12-07', 'Nalisa Vianti', 'Rapat direksi', 'Fema Flamelina Putri', '082178653972', '2020-12-06 00:31:38', '2020-12-08 03:00:18', NULL),
(8, '2020-12-07', 'Salsabila', 'Wawancara Kerja', 'Amelia', '085678965412', '2020-12-07 02:46:53', '2020-12-07 02:46:53', NULL),
(10, '2021-01-07', 'Ndevina Sholihah', 'Wawancara Kerja', 'Amelia', '081256873529', '2021-01-07 03:05:08', '2021-01-07 03:05:08', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1),
(7, '2020_12_05_084521_create_guests_table', 1),
(8, '2020_12_08_101911_add_soft_delete_to_guests', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'femaflam', 'femaflam22@gmail.com', NULL, '$2y$10$Ll7ppfeqWmReXOG6g6IijuHDW.EdC7zOrmKaI7jMjaC0.8qiHar3q', 'KC9zYrIx8xfFfl4MOBbUboAfN6MU33Q8n99SIZBOc5YGduVc5Dt4y2sQAtKShFKyt5eTa0CTsGgoyCI1pYNiomop1JYplS1YPy7G', '2021-01-07 02:27:55', '2021-01-07 02:27:55'),
(3, 'femasAdmin', 'femascompanyadmin@gmail.com', NULL, '$2y$10$okUwkQTzmfsJWVhTUKSnueBJ3Q0z7.5CmdLym25Dcyoo3ptKEZbgO', 'G9xUkjTTYrQ9Me0LC5A40hi0782aiXVovp0JP2NwrQibRy3USYOkcfclsvX9o1vATsqs4YQjm25QEzOMJpa1Nzrb5HUMFTXWexNV', '2021-01-07 03:33:02', '2021-01-07 03:33:02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `guests`
--
ALTER TABLE `guests`
  MODIFY `no` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
