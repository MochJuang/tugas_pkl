-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2020 at 09:16 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daftar_covid`
--

-- --------------------------------------------------------

--
-- Table structure for table `antrians`
--

CREATE DATABASE juang;

CREATE TABLE `antrians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_daftar` bigint(20) UNSIGNED NOT NULL,
  `tgl_test` date NOT NULL,
  `no_antrian` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `antrians`
--

INSERT INTO `antrians` (`id`, `id_daftar`, `tgl_test`, `no_antrian`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-09-28', 1, NULL, NULL),
(2, 1, '2020-09-28', 2, NULL, NULL),
(3, 2, '2020-09-29', 1, NULL, NULL),
(4, 2, '2020-09-29', 1, NULL, NULL),
(5, 2, '2020-09-29', 1, NULL, NULL),
(6, 9, '2020-09-28', 1, NULL, NULL),
(7, 5, '2020-09-28', 3, NULL, NULL),
(8, 12, '2020-09-28', 1, NULL, NULL),
(9, 4, '2020-09-30', 1, NULL, NULL),
(10, 13, '2020-09-30', 2, NULL, NULL);

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas_masters`
--

CREATE TABLE `fasilitas_masters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fasilitas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fasilitas_masters`
--

INSERT INTO `fasilitas_masters` (`id`, `fasilitas`, `created_at`, `updated_at`) VALUES
(1, 'Rumah Sakit', NULL, NULL),
(2, 'Klinik', NULL, NULL),
(3, 'Puskesmas', NULL, NULL),
(4, 'Lab', NULL, NULL),
(5, 'Lainnya', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hasils`
--

CREATE TABLE `hasils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pendaftaran` bigint(20) UNSIGNED NOT NULL,
  `hasil` enum('positif','negatif') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hasils`
--

INSERT INTO `hasils` (`id`, `id_pendaftaran`, `hasil`, `created_at`, `updated_at`) VALUES
(1, 13, 'positif', '2020-09-29 19:01:20', '2020-09-29 19:01:20');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_tempat` bigint(20) UNSIGNED NOT NULL,
  `id_jenis` bigint(20) UNSIGNED NOT NULL,
  `harga` int(10) UNSIGNED NOT NULL,
  `limit` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_sedia` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id`, `id_tempat`, `id_jenis`, `harga`, `limit`, `created_at`, `updated_at`, `is_sedia`) VALUES
(1, 3, 1, 100000, 3, NULL, '2020-09-29 19:25:09', 1),
(2, 3, 2, 200000, 4, NULL, '2020-09-29 19:25:09', 1),
(5, 4, 1, 10000, 10, NULL, NULL, 1),
(6, 4, 2, 0, 0, NULL, NULL, 0),
(7, 5, 1, 300000, 10, NULL, NULL, 1),
(8, 5, 2, 0, 0, NULL, NULL, 0),
(9, 6, 1, 2000000, 10, NULL, '2020-09-27 22:04:43', 0),
(10, 6, 2, 200000, 10, NULL, '2020-09-27 22:04:43', 1),
(11, 7, 1, 10000, 4, NULL, NULL, 1),
(12, 7, 2, 3000000, 4, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_masters`
--

CREATE TABLE `jenis_masters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_masters`
--

INSERT INTO `jenis_masters` (`id`, `jenis`, `created_at`, `updated_at`) VALUES
(1, 'SWAB', NULL, NULL),
(2, 'RAPID', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `umur` int(11) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `nama`, `alamat`, `tgl_lahir`, `umur`, `email`, `created_at`, `updated_at`) VALUES
(1, 'mochjuang', 'dsfasdfsd', '2003-09-10', 12, 'mochjuangpp@gmail.com', NULL, NULL),
(2, 'sidiq', 'dfasdf', '2020-09-16', 12, 'sdfasdf@fasdf', NULL, NULL),
(3, 'Aji', 'cipeyeun', '2011-01-13', 18, 'aji@gmail.com', NULL, NULL),
(4, 'messa', 'aaa', '2020-09-25', 3, 'sdfasdf@fasdf', NULL, NULL),
(5, 'juang', 'fafsd', '2020-09-09', 12, 'sdf@daf', NULL, NULL),
(6, 'odin', 'dsfa', '2020-10-03', 12, 'dsfasd@dfasdf', NULL, NULL),
(7, 'odin', 'dsfa', '2020-10-03', 12, 'dsfasd@dfasdf', NULL, NULL),
(8, 'odin', 'dsfa', '2020-10-03', 12, 'dsfasd@dfasdf', NULL, NULL),
(9, 'odin', 'dsfa', '2020-10-03', 12, 'dsfasd@dfasdf', NULL, NULL),
(10, 'odin', 'dsfa', '2020-10-03', 12, 'dsfasd@dfasdf', NULL, NULL),
(11, 'odin', 'dsfa', '2020-10-03', 12, 'dsfasd@dfasdf', NULL, NULL),
(12, 'odin', 'dsfa', '2020-10-03', 12, 'dsfasd@dfasdf', NULL, NULL),
(13, 'odin', 'dsfa', '2020-10-03', 12, 'dsfasd@dfasdf', NULL, NULL),
(14, 'odin', 'dsfa', '2020-10-03', 12, 'dsfasd@dfasdf', NULL, NULL),
(15, 'odin', 'dsfa', '2020-10-03', 12, 'dsfasd@dfasdf', NULL, NULL),
(16, 'odin', 'dsfa', '2020-10-03', 12, 'dsfasd@dfasdf', NULL, NULL),
(17, 'odin', 'dsfa', '2020-10-03', 12, 'dsfasd@dfasdf', NULL, NULL),
(18, 'odin', 'dsfa', '2020-10-03', 12, 'dsfasd@dfasdf', NULL, NULL),
(19, 'odin', 'dsfa', '2020-10-03', 12, 'dsfasd@dfasdf', NULL, NULL),
(20, 'odin', 'dsfa', '2020-10-03', 12, 'dsfasd@dfasdf', NULL, NULL),
(21, 'odin', 'dsfa', '2020-10-03', 12, 'dsfasd@dfasdf', NULL, NULL),
(22, 'odin', 'dsfa', '2020-10-03', 12, 'dsfasd@dfasdf', NULL, NULL),
(23, 'odin', 'dsfa', '2020-10-03', 12, 'dsfasd@dfasdf', NULL, NULL),
(24, 'odin', 'dsfa', '2020-10-03', 12, 'dsfasd@dfasdf', NULL, NULL),
(25, 'odin', 'dsfa', '2020-10-03', 12, 'dsfasd@dfasdf', NULL, NULL),
(26, 'odin', 'dsfa', '2020-10-03', 12, 'dsfasd@dfasdf', NULL, NULL),
(27, 'odin', 'dsfa', '2020-10-03', 12, 'dsfasd@dfasdf', NULL, NULL),
(28, 'odin', 'dsfa', '2020-10-03', 12, 'dsfasd@dfasdf', NULL, NULL),
(29, 'ujang', 'dfadsfas', '2020-09-01', 23, 'sdfasdf@fasdf', NULL, NULL),
(30, 'ooooo', 'sdafs', '2020-09-30', 233, 'sdfasdf@fasdf', NULL, NULL),
(31, 'ooooo', 'sdafs', '2020-09-30', 233, 'sdfasdf@fasdf', NULL, NULL),
(32, 'ooooo', 'sdafs', '2020-09-30', 233, 'sdfasdf@fasdf', NULL, NULL),
(33, 'mochjuang', 'JL Situgunung KM 7', '2020-09-18', 17, 'mochjuangpp@gmail.com', NULL, NULL),
(34, 'bilal', 'dsajfisdfj', '2020-09-17', 23, 'bilal@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `metodes`
--

CREATE TABLE `metodes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `metode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `metodes`
--

INSERT INTO `metodes` (`id`, `metode`, `created_at`, `updated_at`) VALUES
(1, 'Transfer', NULL, NULL),
(2, 'Langsung', NULL, NULL);

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
(1, '2019_08_19_000000_create_failed_jobs_table', 1),
(2, '2020_09_11_160426_create_user', 1),
(3, '2020_09_11_171552_create_fasilitas_master', 1),
(4, '2020_09_11_171850_create_jenis_master', 1),
(5, '2020_09_11_171931_create_tempat_master', 1),
(6, '2020_09_11_172001_create_jenis', 1),
(7, '2020_09_11_172027_create_member', 1),
(8, '2020_09_11_172114_create_metode_pembayaran', 1),
(9, '2020_09_11_172206_create_pendaftaran', 1),
(10, '2020_09_11_172226_create_hasil', 1),
(11, '2020_09_11_172332_create_no_antrian', 1),
(12, '2020_09_11_180319_create_antrians', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftarans`
--

CREATE TABLE `pendaftarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_member` bigint(20) UNSIGNED NOT NULL,
  `id_tempat` bigint(20) UNSIGNED NOT NULL,
  `id_metode` bigint(20) UNSIGNED NOT NULL,
  `id_jenis` bigint(20) UNSIGNED NOT NULL,
  `is_sudah` tinyint(1) NOT NULL,
  `is_test` tinyint(1) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_bayar` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendaftarans`
--

INSERT INTO `pendaftarans` (`id`, `id_member`, `id_tempat`, `id_metode`, `id_jenis`, `is_sudah`, `is_test`, `qty`, `foto`, `total_bayar`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 1, 1, 1, 0, 12, '1600846762portfolio-details-3.jpg', 1200000, NULL, '2020-09-27 19:52:02'),
(2, 2, 3, 2, 2, 1, 0, 12, '1600911196portfolio-1.jpg', 120000000, NULL, '2020-09-27 20:00:30'),
(3, 3, 3, 1, 2, 0, 0, 3, '1601000662portfolio-4.jpg', 30000000, NULL, '2020-09-25 10:18:36'),
(4, 4, 3, 2, 2, 1, 0, 1, '1601019270portfolio-7.jpg', 10000000, NULL, '2020-09-28 20:31:15'),
(5, 5, 3, 1, 1, 1, 0, 45, '1601262437portfolio-4.jpg', 4500000, NULL, '2020-09-27 21:51:28'),
(8, 28, 5, 1, 1, 0, 0, 22, '1601263837portfolio-5.jpg', 6600000, NULL, NULL),
(9, 29, 4, 1, 1, 1, 0, 1, '1601264273portfolio-5.jpg', 10000, NULL, '2020-09-27 20:56:02'),
(10, 31, 4, 1, 1, 0, 0, 11, 'foo', 110000, NULL, NULL),
(11, 32, 4, 1, 1, 0, 0, 11, '1601265350portfolio-5.jpg', 110000, NULL, NULL),
(12, 33, 6, 1, 2, 1, 0, 5, '1601269680portfolio-5.jpg', 1000000, '2020-09-27 17:00:00', '2020-09-27 22:13:57'),
(13, 34, 3, 2, 1, 1, 1, 12, 'foo', 1200000, '2020-09-28 17:00:00', '2020-09-29 19:01:19');

-- --------------------------------------------------------

--
-- Table structure for table `tempats`
--

CREATE TABLE `tempats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_tempat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_fasilitas` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `click` bigint(20) UNSIGNED NOT NULL,
  `no_telp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_rek` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jum_negatif` int(11) NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwal_buka` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_konfirmasi` tinyint(1) NOT NULL,
  `is_block` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `longitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tempats`
--

INSERT INTO `tempats` (`id`, `nama_tempat`, `deskripsi`, `id_fasilitas`, `id_user`, `click`, `no_telp`, `no_rek`, `email`, `jum_negatif`, `alamat`, `foto`, `jadwal_buka`, `is_konfirmasi`, `is_block`, `created_at`, `updated_at`, `longitude`, `latitude`) VALUES
(3, 'Poskessmas Pesantren Al-Ittihad Cianjur', '<h2>Get dan Post Pada PHP dan HTTP</h2>\r\n<h3 id=\"#get\">1. GET pada HTTP dan $_GET pada PHP</h3>\r\n<p>Dalam bahasa inggris kita akrab dengan istilah GETting, dari istilah tersebut dapat diartikan bahwa metode GET pada HTTP ditujukan&nbsp;untuk mengambil (get) data dari server.</p>\r\n<p>Pada&nbsp;metode ini&nbsp;umumnya data berbentuk query string yang dikirim via url, data tersebut berupa pasangan <code>key=value</code> yang dipisahkan dengan tanda&nbsp;<code>&amp;</code>&nbsp;. Data tersebut digabung dengan url utama yang dipisahkan dengan tanda&nbsp;<code>?</code></p>\r\n<p>Sebelum dikirim, terlebih dahulu data diproses sehingga memenuhi standar format URL.&nbsp;URL&nbsp;hanya boleh&nbsp;memuat <strong>huruf </strong>(besar dan kecil), <strong>angka</strong>, dan beberapa karakter lain dalam ASCII Character Set seperti (&ldquo;.-_~), karakter itu akan diubah ke format tertentu&nbsp;yang diawali tanda <code>%</code>&nbsp;kemudian diikuti dengan 2 digit hexadesimal, contoh:</p>\r\n<p>Seperti halnya begitu dan abdi beres</p>\r\n<p><img src=\"../storage/1600662233portfolio-7.jpg\" alt=\"\" width=\"300\" height=\"195\" /></p>\r\n<p>&nbsp;</p>', 1, 8, 1, '0972173182', '213123231123', 'mochjuangpp@gmail.com', 123, 'ppppp', '1601347731portfolio-2.jpg', '06:30-16:00', 1, 0, NULL, '2020-09-28 20:47:03', NULL, NULL),
(4, 'Poskes', 'Poskes', 3, 10, 3, '085724876571', '00898742389', 'poskes21@gmail.com', 0, 'Jl Situgunung', '1600827050portfolio-8.jpg', '07:00-14:00', 1, 0, NULL, '2020-09-28 19:20:53', NULL, NULL),
(5, 'Rs. Herlina', '<p>Deskripsi ini untuk rumah sakit herlina</p>', 1, 11, 2, '083242344', '32094283948', 'herlina@gmail.com', 0, 'JL Pasir  gomomg', '1601001146portfolio-9.jpg', '07:00-14:00', 1, 0, NULL, '2020-09-28 22:37:27', NULL, NULL),
(6, 'RS. Bayangkara Medan', '<p>&nbsp;</p>\r\n<p><img src=\"1600661859portfolio-details-3.jpg\" alt=\"\" width=\"113\" height=\"113\" /></p>\r\n<p>Terbuka Untuk Umum <strong>Untuk Semanya</strong></p>', 1, 12, 3, '085678985462', '342335345', 'bayangkara@gmail.com', 0, 'JL. Bayangkara no 29', '1601269370portfolio-7.jpg', '20:00-00:00', 1, 0, NULL, '2020-09-28 21:24:02', NULL, NULL),
(7, 'Poskesmass Pelita Raya', 'Umum untuk semua orang di kota medan', 3, 13, 0, '08659343234', '9375983453', 'pelitaraya@gmail.com', 0, 'JL PelitaRaya no 24', '1601347038portfolio-2.jpg', '08:00-22:00', 1, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tgl_tests`
--

CREATE TABLE `tgl_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tgl_tests`
--

INSERT INTO `tgl_tests` (`id`, `tanggal`, `created_at`, `updated_at`) VALUES
(414, '2020-01-01', NULL, NULL),
(415, '2020-01-02', NULL, NULL),
(416, '2020-01-03', NULL, NULL),
(417, '2020-01-04', NULL, NULL),
(418, '2020-01-05', NULL, NULL),
(419, '2020-01-06', NULL, NULL),
(420, '2020-01-07', NULL, NULL),
(421, '2020-01-08', NULL, NULL),
(422, '2020-01-09', NULL, NULL),
(423, '2020-01-10', NULL, NULL),
(424, '2020-01-11', NULL, NULL),
(425, '2020-01-12', NULL, NULL),
(426, '2020-01-13', NULL, NULL),
(427, '2020-01-14', NULL, NULL),
(428, '2020-01-15', NULL, NULL),
(429, '2020-01-16', NULL, NULL),
(430, '2020-01-17', NULL, NULL),
(431, '2020-01-18', NULL, NULL),
(432, '2020-01-19', NULL, NULL),
(433, '2020-01-20', NULL, NULL),
(434, '2020-01-21', NULL, NULL),
(435, '2020-01-22', NULL, NULL),
(436, '2020-01-23', NULL, NULL),
(437, '2020-01-24', NULL, NULL),
(438, '2020-01-25', NULL, NULL),
(439, '2020-01-26', NULL, NULL),
(440, '2020-01-27', NULL, NULL),
(441, '2020-01-28', NULL, NULL),
(442, '2020-01-29', NULL, NULL),
(443, '2020-01-30', NULL, NULL),
(444, '2020-02-01', NULL, NULL),
(445, '2020-02-02', NULL, NULL),
(446, '2020-02-03', NULL, NULL),
(447, '2020-02-04', NULL, NULL),
(448, '2020-02-05', NULL, NULL),
(449, '2020-02-06', NULL, NULL),
(450, '2020-02-07', NULL, NULL),
(451, '2020-02-08', NULL, NULL),
(452, '2020-02-09', NULL, NULL),
(453, '2020-02-10', NULL, NULL),
(454, '2020-02-11', NULL, NULL),
(455, '2020-02-12', NULL, NULL),
(456, '2020-02-13', NULL, NULL),
(457, '2020-02-14', NULL, NULL),
(458, '2020-02-15', NULL, NULL),
(459, '2020-02-16', NULL, NULL),
(460, '2020-02-17', NULL, NULL),
(461, '2020-02-18', NULL, NULL),
(462, '2020-02-19', NULL, NULL),
(463, '2020-02-20', NULL, NULL),
(464, '2020-02-21', NULL, NULL),
(465, '2020-02-22', NULL, NULL),
(466, '2020-02-23', NULL, NULL),
(467, '2020-02-24', NULL, NULL),
(468, '2020-02-25', NULL, NULL),
(469, '2020-02-26', NULL, NULL),
(470, '2020-02-27', NULL, NULL),
(471, '2020-02-28', NULL, NULL),
(472, '2020-02-29', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posisi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `no_token`, `posisi`, `created_at`, `updated_at`) VALUES
(5, 'juang', '3a2d7564baee79182ebc7b65084aabd1', 'jA7fBRPU02', 'admin', NULL, NULL),
(6, 'mochjuang', '651a588d62ea484c86c34e2b9a795379', 'Uz0shPmbLF', 'superadmin', NULL, NULL),
(7, 'rsud', 'b3e1cf10e5bef6592f9f43067bb14a5c', 'X8juR5pvDB', 'admin', NULL, NULL),
(8, 'rs', '3a2d7564baee79182ebc7b65084aabd1', '2XVwzgJnKo', 'admin', NULL, '2020-09-29 19:24:53'),
(9, 'mochjuang', '7740c656104cfac1fea1a2b35d61c54f', 'YtaonXsdMu', 'admin', NULL, NULL),
(10, 'pp', 'c483f6ce851c9ecd9fb835ff7551737c', 'DEraNvjXsQ', 'admin', NULL, NULL),
(11, 'herlina', '202cb962ac59075b964b07152d234b70', 'r7AqWQsnS3', 'admin', NULL, NULL),
(12, 'Bayangkara', '202cb962ac59075b964b07152d234b70', 'AQXkcEdWrz', 'admin', NULL, NULL),
(13, 'uu', '6277e2a7446059985dc9bcf0a4ac1a8f', 'NRgD1fb3oY', 'admin', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antrians`
--
ALTER TABLE `antrians`
  ADD PRIMARY KEY (`id`),
  ADD KEY `antrians_id_daftar_foreign` (`id_daftar`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fasilitas_masters`
--
ALTER TABLE `fasilitas_masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasils`
--
ALTER TABLE `hasils`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hasils_id_pendaftaran_foreign` (`id_pendaftaran`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jenis_id_tempat_foreign` (`id_tempat`),
  ADD KEY `jenis_id_jenis_foreign` (`id_jenis`);

--
-- Indexes for table `jenis_masters`
--
ALTER TABLE `jenis_masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `metodes`
--
ALTER TABLE `metodes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftarans`
--
ALTER TABLE `pendaftarans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pendaftarans_id_member_foreign` (`id_member`),
  ADD KEY `pendaftarans_id_tempat_foreign` (`id_tempat`),
  ADD KEY `pendaftarans_id_metode_foreign` (`id_metode`),
  ADD KEY `pendaftarans_id_jenis_foreign` (`id_jenis`);

--
-- Indexes for table `tempats`
--
ALTER TABLE `tempats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tempats_id_fasilitas_foreign` (`id_fasilitas`),
  ADD KEY `tempats_id_user_foreign` (`id_user`);

--
-- Indexes for table `tgl_tests`
--
ALTER TABLE `tgl_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antrians`
--
ALTER TABLE `antrians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fasilitas_masters`
--
ALTER TABLE `fasilitas_masters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hasils`
--
ALTER TABLE `hasils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `jenis_masters`
--
ALTER TABLE `jenis_masters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `metodes`
--
ALTER TABLE `metodes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pendaftarans`
--
ALTER TABLE `pendaftarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tempats`
--
ALTER TABLE `tempats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tgl_tests`
--
ALTER TABLE `tgl_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=473;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `antrians`
--
ALTER TABLE `antrians`
  ADD CONSTRAINT `antrians_id_daftar_foreign` FOREIGN KEY (`id_daftar`) REFERENCES `pendaftarans` (`id`);

--
-- Constraints for table `hasils`
--
ALTER TABLE `hasils`
  ADD CONSTRAINT `hasils_id_pendaftaran_foreign` FOREIGN KEY (`id_pendaftaran`) REFERENCES `pendaftarans` (`id`);

--
-- Constraints for table `jenis`
--
ALTER TABLE `jenis`
  ADD CONSTRAINT `jenis_id_jenis_foreign` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_masters` (`id`),
  ADD CONSTRAINT `jenis_id_tempat_foreign` FOREIGN KEY (`id_tempat`) REFERENCES `tempats` (`id`);

--
-- Constraints for table `pendaftarans`
--
ALTER TABLE `pendaftarans`
  ADD CONSTRAINT `pendaftarans_id_jenis_foreign` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_masters` (`id`),
  ADD CONSTRAINT `pendaftarans_id_member_foreign` FOREIGN KEY (`id_member`) REFERENCES `members` (`id`),
  ADD CONSTRAINT `pendaftarans_id_metode_foreign` FOREIGN KEY (`id_metode`) REFERENCES `metodes` (`id`),
  ADD CONSTRAINT `pendaftarans_id_tempat_foreign` FOREIGN KEY (`id_tempat`) REFERENCES `tempats` (`id`);

--
-- Constraints for table `tempats`
--
ALTER TABLE `tempats`
  ADD CONSTRAINT `tempats_id_fasilitas_foreign` FOREIGN KEY (`id_fasilitas`) REFERENCES `fasilitas_masters` (`id`),
  ADD CONSTRAINT `tempats_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
