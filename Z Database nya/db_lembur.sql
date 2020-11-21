-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2020 at 05:38 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lembur`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_karyawans`
--

CREATE TABLE `data_karyawans` (
  `nik_karyawan` bigint(255) NOT NULL,
  `golongan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_karyawan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_karyawan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telpon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kewarganegaraan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_terakhir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_perkawinan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `golongan_darah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bahasa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daerah_asal` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cabang_pt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_darurat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hubungan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_darurat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telpon_darurat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dari_tahun` date NOT NULL,
  `sampai_tahun` date NOT NULL,
  `nama_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alasan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ayah_kandung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu_kandung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_saudara_kandung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_suami_istri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_anak_kandung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_karyawans`
--

INSERT INTO `data_karyawans` (`nik_karyawan`, `golongan`, `jabatan_karyawan`, `department`, `nama_karyawan`, `no_ktp`, `alamat`, `no_telpon`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `kewarganegaraan`, `pendidikan_terakhir`, `status_perkawinan`, `golongan_darah`, `bahasa`, `suku`, `daerah_asal`, `cabang_pt`, `nama_darurat`, `hubungan`, `alamat_darurat`, `no_telpon_darurat`, `dari_tahun`, `sampai_tahun`, `nama_perusahaan`, `jabatan`, `alasan`, `nama_ayah_kandung`, `nama_ibu_kandung`, `nama_saudara_kandung`, `nama_suami_istri`, `nama_anak_kandung`, `created_at`, `updated_at`) VALUES
(1, '5', '5', '5', '123456789', '123456789', 'jakarta bogor bekasi', '123456789', 'Wanita', 'bogor', '2020-11-14', 'islam', '5', 'SD', 'Kawin', 'A', 'indonesia', 'betawi', 'jakarta', 'PT Tiga Pilar Sejahtera Food TBK', 'eza gionino', 'kakak', 'jakarta bogor bekasi', '123456789', '2020-11-01', '2020-11-30', 'pt gojek indonesia', 'web devloptment', 'pindah rumah', 'jaka prratama', 'asih ceria mandiri', 'umar m7hajirin', 'anya geraldin', 'iqbl ramadan', '2020-11-20 06:54:12', '2020-11-20 06:54:12'),
(2, '5', 'manager', 'accounting', 'andi', '123456789123', 'jl. merak perumahn puri harmoni 6, blok a3 no 5, ds.situsari, cileungsi, bogor', '123456789123', 'Wanita', 'jakarta', '2020-11-17', 'islam', 'indonesia', 'SD', 'Kawin', 'A', 'indonesia', 'betawi', 'pasar rebo, jakarta timur', 'pt taro jakarta barat', 'ahmad mulyadicsanjaya', 'kakak', 'jl. merak perumahn puri harmoni 6, blok a3 no 5, ds.situsari, cileungsi, bogor', '123456789123', '2020-11-11', '2020-11-25', 'pt gojek indonesia', 'front end web develover', 'pindah rumah, kebanjuran', 'ndan iskandar dinata', 'ipah saripah anggareni', 'rifky asmi jaya', 'anya geraldin riska', 'strefan wiliam', '2020-11-20 06:54:12', '2020-11-20 06:54:12'),
(3, '5', '5', '5', '123456789', '123456789', 'jakarta bogor bekasi', '123456789', 'Wanita', 'bogor', '2020-11-14', 'islam', '5', 'SD', 'Kawin', 'A', 'indonesia', 'betawi', 'jakarta', 'PT Tiga Pilar Sejahtera Food TBK', 'eza gionino', 'kakak', 'jakarta bogor bekasi', '123456789', '2020-11-01', '2020-11-30', 'pt gojek indonesia', 'web devloptment', 'pindah rumah', 'jaka prratama', 'asih ceria mandiri', 'umar m7hajirin', 'anya geraldin', 'iqbl ramadan', '2020-11-20 06:56:30', '2020-11-20 06:56:30'),
(4, '5', 'manager', 'accounting', 'andi', '123456789123', 'jl. merak perumahn puri harmoni 6, blok a3 no 5, ds.situsari, cileungsi, bogor', '123456789123', 'Wanita', 'jakarta', '2020-11-17', 'islam', 'indonesia', 'SD', 'Kawin', 'A', 'indonesia', 'betawi', 'pasar rebo, jakarta timur', 'pt taro jakarta barat', 'ahmad mulyadicsanjaya', 'kakak', 'jl. merak perumahn puri harmoni 6, blok a3 no 5, ds.situsari, cileungsi, bogor', '123456789123', '2020-11-11', '2020-11-25', 'pt gojek indonesia', 'front end web develover', 'pindah rumah, kebanjuran', 'ndan iskandar dinata', 'ipah saripah anggareni', 'rifky asmi jaya', 'anya geraldin riska', 'strefan wiliam', '2020-11-20 06:56:30', '2020-11-20 06:56:30'),
(5, '5', 'Manager', 'Finance Accounting', '5', '5', '5', '5', 'Wanita', '5', '2020-12-02', 'islam', '5', 'SD', 'Kawin', 'A', '5', '5', '5', 'PT Tiga Pilar Sejahtera Food TBK', '5', '5', '5', '5', '2020-11-18', '2020-11-12', '5', '5', '5', '5', '5', '5', '5', '5', '2020-11-20 07:07:53', '2020-11-20 07:07:53'),
(6, '5', 'Manager', 'Finance Accounting', '6', '6', '6', '6', 'Wanita', '6', '2020-11-19', 'islam', '6', 'SD', 'Kawin', 'A', '6', '6', '6', 'PT Tiga Pilar Sejahtera Food TBK', '6', '6', '6', '6', '2020-11-06', '2020-11-11', '6', '6', '6', '6', '6', '6', '6', '6', '2020-11-20 07:15:36', '2020-11-20 07:16:18'),
(123456789, '5', '5', '5', '123456789', '123456789', 'jakarta bogor bekasi', '123456789', 'Wanita', 'bogor', '2020-11-14', 'islam', '5', 'SD', 'Kawin', 'A', 'indonesia', 'betawi', 'jakarta', 'PT Tiga Pilar Sejahtera Food TBK', 'eza gionino', 'kakak', 'jakarta bogor bekasi', '123456789', '2020-11-01', '2020-11-30', 'pt gojek indonesia', 'web devloptment', 'pindah rumah', 'jaka prratama', 'asih ceria mandiri', 'umar m7hajirin', 'anya geraldin', 'iqbl ramadan', '2020-11-09 23:57:23', '2020-11-20 06:49:22'),
(123456789123, '5', 'manager', 'accounting', 'andi', '123456789123', 'jl. merak perumahn puri harmoni 6, blok a3 no 5, ds.situsari, cileungsi, bogor', '123456789123', 'Wanita', 'jakarta', '2020-11-17', 'islam', 'indonesia', 'SD', 'Kawin', 'A', 'indonesia', 'betawi', 'pasar rebo, jakarta timur', 'pt taro jakarta barat', 'ahmad mulyadicsanjaya', 'kakak', 'jl. merak perumahn puri harmoni 6, blok a3 no 5, ds.situsari, cileungsi, bogor', '123456789123', '2020-11-11', '2020-11-25', 'pt gojek indonesia', 'front end web develover', 'pindah rumah, kebanjuran', 'ndan iskandar dinata', 'ipah saripah anggareni', 'rifky asmi jaya', 'anya geraldin riska', 'strefan wiliam', '2020-11-06 00:45:32', '2020-11-06 02:09:28');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_11_05_065534_create_data_karyawans_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_anak_kandung`
--

CREATE TABLE `tabel_anak_kandung` (
  `id_anak` int(11) NOT NULL,
  `nik_karyawan_fk` int(20) NOT NULL,
  `nama_anak` varchar(30) NOT NULL,
  `jenis_kelamin_anak` varchar(30) NOT NULL,
  `tgl_lahir_anak` date NOT NULL,
  `pendidikan_anak` varchar(30) NOT NULL,
  `pekerjaan_anak` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_gambar`
--

CREATE TABLE `tabel_gambar` (
  `id_gambar` int(11) NOT NULL,
  `file` varchar(225) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_gambar`
--

INSERT INTO `tabel_gambar` (`id_gambar`, `file`, `keterangan`, `created_at`, `updated_at`) VALUES
(2, '1605877126106.jpg', 'iron man hulk', '2020-11-20 05:58:46', '2020-11-20 05:58:46'),
(3, '1605877161591.jpg', 'gambar 1', '2020-11-20 05:59:21', '2020-11-20 05:59:21');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_saudara_kandung`
--

CREATE TABLE `tabel_saudara_kandung` (
  `id_saudara` int(11) NOT NULL,
  `nik_karyawan_foregin` int(11) NOT NULL,
  `nama_saudara` varchar(30) NOT NULL,
  `jenis_kelamin_sk` int(11) NOT NULL,
  `tgl_lahir_sk` date NOT NULL,
  `pendidikan_sk` varchar(30) NOT NULL,
  `pekerjaan_sk` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik_user` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nik_user`, `name`, `level`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, '0', 'manin2', 'admin', 'manin2@gmail.com', NULL, '12345678', 'BNaQONJ6rD056sjS', '2020-10-28 16:13:11', '2020-10-28 16:13:11'),
(3, '0', 'adi', 'user', 'adi@gmail.com', NULL, '$2y$10$oiXRZ62aweuiLi5sWKSobue0egB9rrKpA1Nxchovjns1Xda.IUfha', NULL, '2020-11-04 19:05:41', '2020-11-04 19:05:41'),
(4, '0', 'jaka', 'admin', 'admin@gmail.com', NULL, '$2y$10$4Zqq.3OXe1NKKHo98owncuMchA.RDyKsROAY6Y6JBTRYH1SR8s/F6', NULL, '2020-11-04 19:07:06', '2020-11-04 19:07:06'),
(6, '0', 'dewi', 'admin', 'dewi@gmail.com', NULL, '$2y$10$hENzp2M9U.nYUFeb6sL7QeMP8Sv88bGKmIg3AQOvZjq.Qy3vQYpMe', NULL, '2020-11-04 19:30:26', '2020-11-04 19:30:26'),
(7, '0', 'andi', 'user', 'andi@gmail.com', NULL, '$2y$10$GAMApwgXY/C4/w5shrswDew42aVZ2LfNgjb9w8s8nyEFOCP0cG4GO', NULL, '2020-11-04 23:22:31', '2020-11-04 23:22:31'),
(8, '0', 'dika', 'user', 'dika@gmail.com', NULL, '$2y$10$GzL/PS8Jte/x9nVyy4Y3S.VV9.QeJYKQAnQXCAvG/EE.dlpRkxM2y', NULL, '2020-11-05 18:12:35', '2020-11-05 18:12:35'),
(9, '0', 'kk', 'admin', 'kk@gmail.com', '2020-11-03 02:45:40', '$2y$10$oiXRZ62aweuiLi5sWKSobue0egB9rrKpA1Nxchovjns1Xda.IUfha', NULL, NULL, NULL),
(10, '202001006523', 'mesi', 'admin', 'mesi@gmail.com', '2020-11-12 02:54:35', '$2y$10$oiXRZ62aweuiLi5sWKSobue0egB9rrKpA1Nxchovjns1Xda.IUfha', NULL, '2020-11-12 02:54:35', '2020-11-18 02:54:35'),
(11, '202001006523', 'mila', 'admin', 'mila@gmail.com', '2020-11-10 03:03:12', '$2b$10$MvbrShu0BTzV9ObdP6HVGui.EqQjHxSU81YQGxDK.Q5F.wRXHuuye', NULL, '2020-11-20 03:03:12', '2020-11-12 03:03:12'),
(12, '1', '1', 'user', '1@gmail.com', NULL, '$2y$10$5kSnK9Mq8wwHD/FZPuo/LO568oJCRjWwPfPB9jAzXwLyMc.27dRDW', NULL, '2020-11-20 05:56:19', '2020-11-20 05:56:19'),
(13, '2', '2', 'admin', '2@gmail.com', NULL, '$2y$10$LTTOeOzUUCG0dvKRcD3dUex7wzGnoPI2tgvUiWUNDf136SIlx19SO', NULL, '2020-11-20 05:58:00', '2020-11-20 05:58:00'),
(14, '3', 'eza', 'admin', 'eza@gmail.com', NULL, '$2y$10$whF/ck93aXGtOCoW6e4c1OFyu/Qv2NIEj4eo2nHEtkxPWm3hp7aKq', NULL, '2020-11-20 07:39:01', '2020-11-20 07:39:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_karyawans`
--
ALTER TABLE `data_karyawans`
  ADD PRIMARY KEY (`nik_karyawan`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tabel_anak_kandung`
--
ALTER TABLE `tabel_anak_kandung`
  ADD PRIMARY KEY (`id_anak`);

--
-- Indexes for table `tabel_gambar`
--
ALTER TABLE `tabel_gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `tabel_saudara_kandung`
--
ALTER TABLE `tabel_saudara_kandung`
  ADD PRIMARY KEY (`id_saudara`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tabel_anak_kandung`
--
ALTER TABLE `tabel_anak_kandung`
  MODIFY `id_anak` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabel_gambar`
--
ALTER TABLE `tabel_gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tabel_saudara_kandung`
--
ALTER TABLE `tabel_saudara_kandung`
  MODIFY `id_saudara` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
