-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2021 at 01:29 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posyandulansia`
--

-- --------------------------------------------------------

--
-- Table structure for table `catatankeluhan`
--

CREATE TABLE `catatankeluhan` (
  `id` int(20) UNSIGNED NOT NULL,
  `id_catatankesehatan` int(20) UNSIGNED NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `keluhan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tindak_lanjut` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catatankeluhan`
--

INSERT INTO `catatankeluhan` (`id`, `id_catatankesehatan`, `created_at`, `updated_at`, `keluhan`, `tindak_lanjut`) VALUES
(1, 2, '2021-05-20', NULL, 'Pusing', 'Banyak istirahat'),
(2, 3, '2021-05-20', NULL, 'Tangan pegal-pegal', 'Perbanyak makan kacang-kacangan'),
(3, 1, '2019-07-10', NULL, 'Pusing dan tengkuk kaku', 'Istirahat yang cukup'),
(4, 4, '2021-05-19', NULL, 'Pundak kaku', 'Kurangin makanan berlemak'),
(6, 14, '2019-07-10', NULL, 'Kelelahan', 'Makan yang teratur');

-- --------------------------------------------------------

--
-- Table structure for table `catatankesehatan`
--

CREATE TABLE `catatankesehatan` (
  `id` int(20) UNSIGNED NOT NULL,
  `id_pasien` int(20) UNSIGNED NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `bb_pasien` char(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tb_pasien` char(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imt_pasien` char(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tensi_darah` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kolesterol` char(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gula_darah` char(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asam_urat` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catatankesehatan`
--

INSERT INTO `catatankesehatan` (`id`, `id_pasien`, `created_at`, `updated_at`, `bb_pasien`, `tb_pasien`, `imt_pasien`, `tensi_darah`, `kolesterol`, `gula_darah`, `asam_urat`) VALUES
(1, 1, '2019-07-10', NULL, '56', '161', '29', '90/60', '108', '100', '56'),
(2, 4, '2021-05-20', NULL, '65', '160', '28', '100/60', '112', '100', '56'),
(3, 5, '2021-05-20', NULL, '58', '155', '27', '120/70', '162', '83', '5,2'),
(4, 6, '2021-05-20', NULL, '70', '168', '28', '130/80', '177', '151', '6,6'),
(14, 3, '2019-05-10', NULL, '55', '155', '28', '90/60', '90', '83', '5,6');

-- --------------------------------------------------------

--
-- Table structure for table `data_pasien`
--

CREATE TABLE `data_pasien` (
  `id` int(20) UNSIGNED NOT NULL,
  `nama_pasien` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `no_ktp` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `gol_darah` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `riwayat_penyakit` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_pasien`
--

INSERT INTO `data_pasien` (`id`, `nama_pasien`, `created_at`, `updated_at`, `no_ktp`, `alamat`, `jenis_kelamin`, `tgl_lahir`, `gol_darah`, `riwayat_penyakit`) VALUES
(1, 'Hj. Kustini', NULL, NULL, '317508509898', 'RT 11/06 Pondok Bambu', 'P', '1956-11-24', 'O', 'Hipertensi'),
(3, 'Siti Masriah', NULL, NULL, '1000191973634', 'RT 02/06 Pondok Bambu', 'P', '1970-05-18', 'AB', 'Kolesterol'),
(4, 'Ningrum', NULL, NULL, '543215689075', 'Cawang', 'P', '1971-08-19', 'AB', 'Vertigo'),
(5, 'Siti Zaifinur', NULL, NULL, '98765432106', 'Duren III', 'P', '1960-01-05', 'A', 'Diabetes'),
(6, 'Kusnadi', NULL, NULL, '321456780076', 'Pondok Bambu', 'L', '1955-05-18', 'O', 'Asam Urat');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_04_09_123420_create_data_pasien_table', 2),
(4, '2021_04_09_125121_create_data_pasien_table', 3),
(5, '2021_04_09_125348_create_data_pasien_table', 4),
(7, '2021_04_09_131634_create_data_pasien_table', 5),
(8, '2021_04_09_131721_add_usia_pasien_to_data_pasien_table', 6),
(9, '2021_04_23_124202_create_data_pasien_table', 7),
(10, '2021_04_23_124816_add_jenis_kelamin_to_data_pasien_table', 8),
(11, '2021_04_30_140027_create_catatankesehatan_table', 9),
(12, '2021_04_30_140439_add_bb_pasien_to_catatankesehatan_table', 10),
(13, '2021_04_30_141355_create_catatankeluhan_table', 11),
(14, '2021_04_30_141605_add_keluhan_to_catatankeluhan_table', 12),
(15, '2021_05_01_020934_create_data_pasien_table', 13),
(16, '2021_05_01_021113_add_no_ktp_to_data_pasien_table', 14),
(17, '2014_10_12_100000_create_password_resets_table', 15),
(18, '2021_05_10_071036_add_column_to_users_table', 15);

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
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'lansia');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'kader', 'admin', 'admin@gmail.com', NULL, '$2y$10$opETOiqbjlc7djrU/ehfCeiWk99w2EqmMjzKGE4xRxHX2oBq47Xei', 'BW4WEbIUTdokB7tNUDEnyvWpom1ur6E2RnN8Mxc2ceXUsqO4NXPT3B4bsl5S', '2021-04-10 02:49:12', '2021-04-10 02:49:12'),
(7, 'Test name', 'lansia', 'test@mail.com', NULL, '$2y$10$RI42m2RfUXuNbNkY4fr4C.5al5f.zCNcW1EMpU5BFwWEk33gWSBoC', NULL, '2021-05-18 08:06:05', '2021-05-18 08:06:05'),
(20, 'Khairunnisa', 'lansia', 'nisa@gmail.com', NULL, '$2y$10$4Imqo9p1H6XiSF6BuP1guebxmsWioJmmGSi6/hGG1or8gMesdaKFG', NULL, '2021-05-18 21:39:59', '2021-05-18 21:39:59'),
(21, 'Bagus', 'lansia', 'bagus@gmail.com', NULL, '$2y$10$CZtKwxSPQn0cKJ8M1cLZtOtQLXQ3R3M6Od7osAh4yjXOUaFYHScdq', NULL, '2021-05-20 01:42:28', '2021-05-20 01:42:28'),
(23, 'Bagus', 'lansia', 'bg@gmail.com', NULL, '$2y$10$MawoXg3iXszm5mYtOuekYuXkfAf91.sSUJYxvmlQsHOX7dXclur.2', NULL, '2021-05-20 01:48:29', '2021-05-20 01:48:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catatankeluhan`
--
ALTER TABLE `catatankeluhan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_catatankesehatan` (`id_catatankesehatan`);

--
-- Indexes for table `catatankesehatan`
--
ALTER TABLE `catatankesehatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pasien_FK` (`id_pasien`);

--
-- Indexes for table `data_pasien`
--
ALTER TABLE `data_pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `role`
--
ALTER TABLE `role`
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
-- AUTO_INCREMENT for table `catatankeluhan`
--
ALTER TABLE `catatankeluhan`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `catatankesehatan`
--
ALTER TABLE `catatankesehatan`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `data_pasien`
--
ALTER TABLE `data_pasien`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `catatankeluhan`
--
ALTER TABLE `catatankeluhan`
  ADD CONSTRAINT `id_catatankesehatan` FOREIGN KEY (`id_catatankesehatan`) REFERENCES `catatankesehatan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `catatankesehatan`
--
ALTER TABLE `catatankesehatan`
  ADD CONSTRAINT `id_pasien_FK` FOREIGN KEY (`id_pasien`) REFERENCES `data_pasien` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
