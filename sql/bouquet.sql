-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jun 2021 pada 08.01
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bouquet`
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
-- Struktur dari tabel `kasir`
--

CREATE TABLE `kasir` (
  `id_transaksi` int(100) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_product` varchar(100) NOT NULL,
  `total` int(100) NOT NULL,
  `konfirmasi` int(100) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kasir`
--

INSERT INTO `kasir` (`id_transaksi`, `id_user`, `id_product`, `total`, `konfirmasi`) VALUES
(1, 1, 'sacdsc', 48524, 0),
(2, 1, 'FLW1', 1200000, 1),
(3, 2, 'DL2', 1250000, 0),
(4, 2, 'BL123', 1200000, 0);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id_product` varchar(100) NOT NULL,
  `nama_product` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `harga_product` int(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `stock` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id_product`, `nama_product`, `gambar`, `harga_product`, `deskripsi`, `kategori`, `stock`) VALUES
('BL123', 'Balloon Gift', 'BL123.jpg', 300000, 'Free Custom', 'Balon', 96),
('DL1', 'Doll Graduation', 'DL1.jpg', 340000, 'Free Custom', 'Doll', 70),
('DL2', 'Choco Graduation', 'DL2.jpg', 250000, 'Free Custom', 'Doll', 55),
('FLW1', 'Flowers bouquet', 'FLW1.jpg', 300000, 'Free Custom', 'Flower', 96),
('FLW2', 'Sunflower Bouquet', 'FLW2.jpg', 350000, 'Free Custom', 'Flower', 50),
('SN1', 'Snack Bouquet', 'SN1.jpg', 140000, 'Free Custom', 'Food', 90);

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
  `level` int(11) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Fatiya', 'aryaniadeeva@gmail.com', NULL, '$2y$10$P0JDNFDdgj6XxZ1/kwgSGesjc8m/z7cR1FfGHqNy7BWOob1hFx5CW', 0, 'RVMQu8KfFaMoqfcwxdujYWWEt2clQcD0mbkbd7OUHaXF36Y35Za7jqVFoC7b', '2021-06-09 03:44:18', '2021-06-09 03:44:18'),
(2, 'Fitri Apriyani', 'fitriapriyanitugas@gmail.com', NULL, '$2y$10$iXSLv9Ff07IJ3iB72nPGrOdo.UGql.yBM3qzwXXtjHbEah1ZEyZsy', 0, NULL, '2021-06-09 11:24:51', '2021-06-09 11:24:51');

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
-- Indeks untuk tabel `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`id_transaksi`);

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
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

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
-- AUTO_INCREMENT untuk tabel `kasir`
--
ALTER TABLE `kasir`
  MODIFY `id_transaksi` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
