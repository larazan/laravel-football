-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Des 2023 pada 17.58
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marketplace`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` datetime DEFAULT NULL,
  `status` int(11) NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `article_categories`
--

CREATE TABLE `article_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `category_article_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `article_images`
--

CREATE TABLE `article_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `imageable_id` bigint(20) NOT NULL,
  `imageable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `original` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `large` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medium` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `small` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `attributes`
--

CREATE TABLE `attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `validation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_required` tinyint(1) NOT NULL DEFAULT 0,
  `is_unique` tinyint(1) NOT NULL DEFAULT 0,
  `is_filterable` tinyint(1) NOT NULL DEFAULT 0,
  `is_configurable` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `attributes`
--

INSERT INTO `attributes` (`id`, `code`, `name`, `type`, `validation`, `is_required`, `is_unique`, `is_filterable`, `is_configurable`, `created_at`, `updated_at`) VALUES
(1, 'color', 'Warna', 'select', NULL, 0, 1, 1, 1, NULL, NULL),
(2, 'size', 'Ukuran', 'select', NULL, 0, 1, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `attribute_options`
--

CREATE TABLE `attribute_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `attribute_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `attribute_options`
--

INSERT INTO `attribute_options` (`id`, `attribute_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Hitam', NULL, NULL),
(2, 1, 'Putih', NULL, NULL),
(3, 2, 'Kecil', NULL, NULL),
(4, 2, 'Sedang', NULL, NULL),
(5, 2, 'Besar', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `baskets`
--

CREATE TABLE `baskets` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` decimal(15,2) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `is_checked` int(11) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `attributes` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`attributes`)),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `baskets`
--

INSERT INTO `baskets` (`id`, `session_id`, `product_id`, `price`, `user_id`, `is_checked`, `qty`, `attributes`, `deleted_at`, `created_at`, `updated_at`) VALUES
('c20ad4d76fe97759aa27a0c99bff6710', 'v8dxr58JKKPxMoAzTXpGHeDM1CAlJ4E1kmPk0QSN', 1, NULL, 2, 1, 2, '[]', '2022-06-20 07:05:25', '2022-06-09 00:08:01', '2022-06-20 07:05:25'),
('c20ad4d76fe97759aa27a0c99bff6710', 'gs196UwoZ3QykeiuPaKe59kr4gxIopQVEBRVDF5C', 1, NULL, 2, 1, 2, '[]', '2022-06-20 07:05:25', '2022-06-20 06:23:46', '2022-06-20 07:05:25'),
('928f3ba86f96f5d41a57b85661573e89', 'NgjaLl74TW7FzX4mhwqezqjz2KS3jmae096hAaty', 2, NULL, 28, 1, 20, '[]', '2022-07-08 07:41:44', '2022-07-08 07:31:04', '2022-07-08 07:41:44'),
('84224407b76e3573734a5ae262c83d8d', '977rH6zeKwbA0zzWRLaEhA4zI5bhmdWaZhCJpfsh', 3, NULL, 29, 1, 10, '[]', '2022-07-08 08:09:06', '2022-07-08 08:07:45', '2022-07-08 08:09:06'),
('727f3bae9fd538e878cda1d2d0ed0e0c', 'cMTUdeD4ofyc3oESy2UJUHxZMqrJ3rkx7NtCh8qg', 4, NULL, 30, 1, 25, '[]', '2022-07-08 08:14:40', '2022-07-08 08:13:41', '2022-07-08 08:14:40'),
('e7dd6c3d950f2c5f37d3c8286f9af01a', 'yoHopA6DRAE4B8IfxTwWq5ysWuk098yzU3ke2EOT', 4, NULL, 31, 1, 40, '[]', '2022-07-09 16:24:03', '2022-07-08 08:16:35', '2022-07-09 16:24:03'),
('a2154493a72062149f0291aac5e095ec', 'Lrt3U2lQT4pxQUDoxrxpp9U8XK0lXulB4mt25XjM', 4, NULL, 31, 1, 40, '[]', '2022-07-10 01:33:22', '2022-07-09 16:25:11', '2022-07-10 01:33:22'),
('ddb7a87679a69431b70cb1829cf9a110', 'awJwSAWDstbjAGkP2ByqSDSTM6KFriQKB3G2OdXW', 5, NULL, 31, 1, 40, '[]', '2022-07-10 01:43:07', '2022-07-10 01:33:45', '2022-07-10 01:43:07'),
('69f367086b4afd5ee8e8cdce41cedcb2', 'URQNqSq6y3lbBqoCTPCvr72z4Bl0blloqfb09RbW', 7, NULL, 32, 1, 20, '[]', '2022-07-10 01:47:05', '2022-07-10 01:45:46', '2022-07-10 01:47:05'),
('f35da066868a83f7ca32b3b8d3d5d707', 'PQ2thWnVlGHc9r5FMg0FhMYESbPi9UAxMDbmza0h', 6, NULL, 33, 1, 25, '[]', '2022-07-10 02:13:32', '2022-07-10 02:12:03', '2022-07-10 02:13:32'),
('937a69d2f89a41ed080bb96943342b6e', 'H7byYYgtVSUHoBlaVFOQaio0ZVMUm695S0mJgMGF', 8, NULL, 34, 1, 70, '[]', '2022-07-10 02:23:50', '2022-07-10 02:16:44', '2022-07-10 02:23:50'),
('6fe4d27e3d0983d668d6b378efb44767', 'rmwXzW2aKGuDY2YzgCE5dHj6C6XJiZm8n9v3uCyJ', 9, NULL, 35, 1, 80, '[]', '2022-07-10 02:27:09', '2022-07-10 02:26:02', '2022-07-10 02:27:09'),
('c053d5275d7137e58f68ca6075584c2b', 'pRV9ZsprPKT224sI50pphVA1KiMBhcxt6Qdk3ypA', 10, NULL, 36, 1, 40, '[]', '2022-07-10 02:30:39', '2022-07-10 02:29:26', '2022-07-10 02:30:39'),
('03a8fba37408d74f371fb0ba0a714160', '1vXWTxk8vkPIpwGPWp85LkXBaXJLrEJMrcBrQEsn', 11, NULL, 37, 1, 35, '[]', '2022-07-10 02:32:26', '2022-07-10 02:31:38', '2022-07-10 02:32:26'),
('13162b6af50bfbe425b5b4c1a2cd8137', 'YJJ6XlzCn4DZwaLhcRTUs6jR1N8uxBQqAUhGLCdf', 12, NULL, 38, 1, 85, '[]', '2022-07-10 02:37:02', '2022-07-10 02:36:15', '2022-07-10 02:37:02'),
('4694e2d1a139fda15a1bac9e9bd66ba0', 'odvJOratAUkHUAFqj8bLJaXS5FMJMZj6qGwM2XkC', 13, NULL, 39, 1, 90, '[]', '2022-07-10 02:38:55', '2022-07-10 02:38:07', '2022-07-10 02:38:55'),
('9144d2b5839c8c3d1ce1dc2a3454bf83', 'v2WZezlrByR68rcec20DGEnLDU6kRj0g4KjPllV5', 14, NULL, 40, 1, 90, '[]', '2022-07-10 02:40:40', '2022-07-10 02:39:54', '2022-07-10 02:40:40'),
('f9f9d2311662c2615145af9e6a89e197', 'yZHNljeUGSz1SJqh4RZT2nt2pAmQfqk1qg4t8Zdb', 15, NULL, 41, 1, 85, '[]', '2022-07-10 02:42:55', '2022-07-10 02:41:49', '2022-07-10 02:42:55'),
('0cd15127eca367fcf0a1f9bb4c869bfc', '5AeZmW6WXEJLoQnFuZYBlsXIl0pDYJbpOOlp8pwi', 16, NULL, 42, 1, 50, '[]', '2022-07-10 02:45:27', '2022-07-10 02:44:20', '2022-07-10 02:45:27'),
('5c3ce2946ac006aa4e13ebbf29478faa', 'qNagKOp2yeNdMCWDtzfE8WfgJetGFrB3X5pMzoPK', 17, NULL, 43, 1, 32, '[]', '2022-07-10 02:50:17', '2022-07-10 02:49:16', '2022-07-10 02:50:17'),
('92006c93114cdbcbe324cd441606fdb9', 'Edv9BBUmiGVGqDz9DKrHjyH3mMmVa4dOJJriUl2R', 18, NULL, 44, 1, 30, '[]', '2022-07-10 03:36:42', '2022-07-10 03:35:50', '2022-07-10 03:36:42'),
('03e47022f1b7ac909370150a2338fd19', 'emy36lA1VPop2ZxnUizTuAZsDowBuiBrnko9jMJq', 19, NULL, 45, 1, 15, '[]', '2022-07-10 03:41:46', '2022-07-10 03:40:20', '2022-07-10 03:41:46'),
('8314f071a3b99e333f5c1ef7013e8a6a', 'ebWxss8kUa1ZLEf9lp0eYHSrbCB57JqSiRJMfNlj', 20, NULL, 46, 1, 20, '[]', '2022-07-10 03:44:20', '2022-07-10 03:43:23', '2022-07-10 03:44:20'),
('2876d996730f7e19db686f7d07079c0e', 'xFIs7KnFZqvtIaOGsDh8rN4IqgpH8WfIa5K1Uovc', 21, NULL, 47, 1, 15, '[]', '2022-07-10 03:47:15', '2022-07-10 03:46:02', '2022-07-10 03:47:15'),
('a32c035549cbcb1904fb7e55d6e546db', 'RdxdR6wF6tfU04Hdmpe65ei8dbpRn6NbfGsUkafy', 22, NULL, 48, 1, 10, '[]', '2022-07-10 03:49:30', '2022-07-10 03:48:30', '2022-07-10 03:49:30'),
('a0a2660f62fc6fe7d637e43d14203219', 'ZMURxf3CNRnvdYIbVXWVYXcuUeYnBdkN67xsCZJg', 23, NULL, 49, 1, 30, '[]', '2022-07-10 03:52:36', '2022-07-10 03:51:28', '2022-07-10 03:52:36'),
('ee0a64323c38ef8c62210c21247f08ec', 'Qw3RX9YUevUAtx6kicpLlwolybUm6fB1yYfcPKdo', 24, NULL, 50, 1, 45, '[]', '2022-07-10 03:54:37', '2022-07-10 03:53:49', '2022-07-10 03:54:37'),
('d61b3429e953f438ac30f1e4d70a01b8', 'jwRkQkdntngDORzFb2RQJ6wTQ6dm7u55cru97CZo', 25, NULL, 51, 1, 65, '[]', '2022-07-10 03:56:46', '2022-07-10 03:55:55', '2022-07-10 03:56:46'),
('a13192ad957652596b96f2b7542f2489', 'NQ6ZPWj7Km9534DZzKrz3rjihDTHAgXcd2xPJae8', 26, NULL, 52, 1, 55, '[]', '2022-07-10 03:58:36', '2022-07-10 03:57:55', '2022-07-10 03:58:36'),
('8716d5a28e47b57416faf819feb44104', 'GlaD6gUjVSWPJAVCKSSpNgDNrMDAiN6dnOGwKukr', 27, NULL, 53, 1, 45, '[]', '2022-07-10 04:00:29', '2022-07-10 03:59:43', '2022-07-10 04:00:29'),
('c35af55d35fb662dd0fdbf41c6b6251e', '3il2zQ9s5IzfhK2nmHAV6HtsLdid5c12GeEDPKPP', 28, NULL, 54, 1, 55, '[]', '2022-07-10 04:02:42', '2022-07-10 04:01:43', '2022-07-10 04:02:42'),
('58d2d4b8b72e3ec3156bf67fc7a270c6', '2xRfiRbeGcMN9HZisL7NL7vNaHzmz1IkOqtYTrpR', 29, NULL, 55, 1, 55, '[]', '2022-07-10 04:05:02', '2022-07-10 04:04:15', '2022-07-10 04:05:02'),
('e02c3e0d8b70834caacff46cd66d4ffd', 'tKdsjI5mbJ4iNc4TZoW4nNWLX7h0qdzMLl5phcoR', 30, NULL, 56, 1, 65, '[]', '2022-07-10 04:07:28', '2022-07-10 04:06:24', '2022-07-10 04:07:28'),
('e2af3d3400356f11d9920ddbc8ff9c14', 'E3kAhDubIOlW2b0GXOJIwNqXBTxQHo8VusZw9myi', 31, NULL, 57, 1, 35, '[]', '2022-07-10 04:09:18', '2022-07-10 04:08:34', '2022-07-10 04:09:18'),
('5f8ed4ef2f2adb419ca2d6a53332249a', 'UXH2emeaof54sBzru8GsOWTYazbzgoOsh6rm5T4T', 32, NULL, 28, 1, 35, '[]', '2022-07-10 05:03:12', '2022-07-10 05:02:30', '2022-07-10 05:03:12'),
('bb5a15cf74eb02c072bd3bfeb537409c', 'UXH2emeaof54sBzru8GsOWTYazbzgoOsh6rm5T4T', 32, NULL, 28, 1, 35, '[]', '2022-07-10 05:25:50', '2022-07-10 05:25:07', '2022-07-10 05:25:50'),
('57e3ddcf1408398230dbe5bd7411f46d', 'rUd2uOQ4FOf8W5oMDFT1UpXBBOQt4H8beYM6fxWP', 33, NULL, 29, 1, 28, '[]', '2022-07-10 05:27:47', '2022-07-10 05:26:50', '2022-07-10 05:27:47'),
('769570cf37218af6035d884790d63fb1', '8hJfDpdUMhBTpWKqOOgolh7iN1EDJ9f1tPapFJcq', 34, NULL, 30, 1, 25, '[]', '2022-07-10 05:32:46', '2022-07-10 05:29:18', '2022-07-10 05:32:46'),
('3e691b612bd3dbf9fbee00815fe2340c', 'oQsGTjwuoiOv9UN15Zb6Jy7r6Q4uLX6fxKqbHVEq', 35, NULL, 31, 1, 20, '[]', '2022-07-10 05:34:38', '2022-07-10 05:33:43', '2022-07-10 05:34:38'),
('732f254a2b8953d9f435bc3fa68ee3b9', 'r4wKZrwpueNA6hDMhaepXBSScbv7dWgljmnQPr7e', 36, NULL, 32, 1, 25, '[]', '2022-07-10 05:37:01', '2022-07-10 05:36:15', '2022-07-10 05:37:01'),
('8aa5a15657ca40dd1be16d2fe48c8e08', 'meKcd9fs8wPs0jJC10Z5LdA1mUCIJg04JjaXVpGP', 4, NULL, 1, 1, 1, '[]', NULL, '2022-07-22 13:12:43', '2022-07-22 13:12:43'),
('ef61d126590a9d968dd2ffa7b35f8736', 'N8I5Ftlh1OXEXuLlfY67gRQdPyBDSYEXYICCowV6', 3, NULL, 1, 1, 1, '[]', NULL, '2023-11-06 13:40:47', '2023-11-06 13:40:47'),
('a8fcd4d71f27a0fec7e2af55820dd503', 'GGFxJ2H1YcqF9vtHC3sjdGMe1avwxNHYwqH8r2Nj', 3, NULL, 55, 1, 1, '[]', '2023-11-06 17:15:36', '2023-11-06 17:14:16', '2023-11-06 17:15:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `original` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_large` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `small` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `status`, `original`, `extra_large`, `small`, `created_at`, `updated_at`) VALUES
(1, 'Cargill', 'cargill', 'active', NULL, NULL, NULL, NULL, NULL),
(2, 'Tidak ada merk', 'tidak-ada-merk', 'active', '', '', '', '2022-07-06 09:54:47', '2022-07-06 09:54:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `capitals`
--

CREATE TABLE `capitals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mini` decimal(15,2) NOT NULL,
  `maxi` decimal(15,2) NOT NULL,
  `rank` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `capitals`
--

INSERT INTO `capitals` (`id`, `mini`, `maxi`, `rank`, `status`, `created_at`, `updated_at`) VALUES
(1, '100000.00', '1000000.00', 1, 'active', '2022-07-01 11:43:43', '2022-07-01 11:43:43'),
(2, '1100000.00', '2000000.00', 2, 'active', '2022-07-01 11:44:29', '2022-07-01 11:44:29'),
(3, '2100000.00', '3000000.00', 3, 'active', '2022-07-01 11:44:57', '2022-07-01 11:44:57'),
(4, '3100000.00', '4000000.00', 4, 'active', '2022-07-01 11:45:31', '2022-07-01 11:45:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart_storage`
--

CREATE TABLE `cart_storage` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cart_data` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `parent_id`, `created_at`, `updated_at`) VALUES
(2, 'Biji Sorgum Merah', 'biji-sorgum-merah', 0, '2022-07-01 09:31:15', '2022-07-01 09:31:15'),
(3, 'Tepung Sorgum Putih', 'tepung-sorgum-putih', 0, '2022-07-01 09:31:30', '2022-07-01 09:31:30'),
(4, 'Biji Sorgum Putih', 'biji-sorgum-putih', 0, '2022-07-01 09:31:44', '2022-07-01 09:31:44'),
(5, 'Tepung Sorgum', 'tepung-sorgum', 0, '2022-07-01 09:32:00', '2022-07-01 09:32:00'),
(6, 'Benih Biji Sorgum', 'benih-biji-sorgum', 0, '2022-07-01 09:32:19', '2022-07-01 09:32:19'),
(7, 'Biji Sorgum', 'biji-sorgum', 0, '2022-07-01 09:32:42', '2022-07-01 09:32:42'),
(8, 'Mie Sorgum', 'mie-sorgum', 0, '2022-07-01 09:33:06', '2022-07-01 09:33:06'),
(9, 'Kecap Sorgum', 'kecap-sorgum', 0, '2022-07-01 09:33:21', '2022-07-01 09:33:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `category_articles`
--

CREATE TABLE `category_articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `centroids`
--

CREATE TABLE `centroids` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `distancecentroid1` double(8,2) NOT NULL,
  `distancecentroid2` double(8,2) NOT NULL,
  `distancecentroid3` double(8,2) NOT NULL,
  `distancecentroid4` double(8,2) NOT NULL,
  `distancecentroid5` double(8,2) NOT NULL,
  `mindistance` double(8,2) DEFAULT NULL,
  `cluster` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `centroids`
--

INSERT INTO `centroids` (`id`, `distancecentroid1`, `distancecentroid2`, `distancecentroid3`, `distancecentroid4`, `distancecentroid5`, `mindistance`, `cluster`, `created_at`, `updated_at`) VALUES
(1, 2.91, 3.78, 1.26, 3.18, 3.08, 1.26, 3, NULL, NULL),
(2, 0.92, 2.60, 3.19, 4.01, 1.87, 0.92, 1, NULL, NULL),
(3, 0.80, 2.70, 3.25, 4.09, 1.96, 0.80, 1, NULL, NULL),
(4, 1.28, 2.92, 3.32, 4.01, 2.78, 1.28, 1, NULL, NULL),
(5, 3.10, 4.33, 1.74, 3.76, 3.79, 1.74, 3, NULL, NULL),
(6, 3.01, 3.80, 0.77, 2.88, 3.03, 0.77, 3, NULL, NULL),
(7, 2.65, 1.04, 3.97, 2.95, 2.80, 1.04, 2, NULL, NULL),
(8, 1.69, 1.79, 2.36, 2.31, 1.93, 1.69, 1, NULL, NULL),
(9, 3.17, 3.14, 1.26, 1.71, 3.08, 1.26, 3, NULL, NULL),
(10, 3.29, 3.14, 1.47, 1.71, 3.61, 1.47, 3, NULL, NULL),
(11, 2.84, 1.52, 4.02, 2.85, 3.42, 1.52, 2, NULL, NULL),
(12, 4.27, 3.19, 2.88, 1.52, 4.33, 1.52, 4, NULL, NULL),
(13, 3.32, 1.88, 3.51, 2.17, 3.60, 1.88, 2, NULL, NULL),
(14, 3.35, 2.23, 2.86, 1.31, 3.68, 1.31, 4, NULL, NULL),
(15, 2.06, 1.14, 2.68, 1.98, 2.17, 1.14, 2, NULL, NULL),
(16, 1.96, 0.65, 3.43, 2.74, 2.12, 0.65, 2, NULL, NULL),
(17, 3.41, 2.72, 1.65, 0.96, 3.19, 0.96, 4, NULL, NULL),
(18, 1.43, 2.23, 3.19, 3.59, 0.79, 0.79, 5, NULL, NULL),
(19, 3.14, 3.46, 1.08, 2.51, 2.51, 1.08, 3, NULL, NULL),
(20, 1.43, 1.28, 3.28, 3.18, 1.87, 1.28, 2, NULL, NULL),
(21, 0.92, 2.60, 3.19, 4.01, 1.87, 0.92, 1, NULL, NULL),
(22, 1.56, 2.42, 2.36, 3.05, 0.92, 0.92, 5, NULL, NULL),
(23, 3.95, 2.33, 3.36, 1.59, 3.22, 1.59, 4, NULL, NULL),
(24, 3.90, 2.96, 2.48, 0.96, 3.68, 0.96, 4, NULL, NULL),
(25, 2.76, 1.19, 3.28, 2.13, 2.78, 1.19, 2, NULL, NULL),
(26, 3.69, 2.33, 4.52, 3.59, 3.58, 2.33, 2, NULL, NULL),
(27, 2.65, 1.04, 3.97, 2.95, 2.80, 1.04, 2, NULL, NULL),
(28, 2.06, 2.86, 3.47, 3.78, 1.72, 1.72, 5, NULL, NULL),
(29, 2.46, 2.28, 3.57, 3.42, 1.81, 1.81, 5, NULL, NULL),
(30, 3.47, 3.66, 1.65, 2.78, 2.82, 1.65, 3, NULL, NULL),
(31, 1.56, 2.42, 2.36, 3.05, 0.92, 0.92, 5, NULL, NULL),
(32, 2.29, 3.00, 3.69, 4.11, 1.03, 1.03, 5, NULL, NULL),
(33, 2.42, 3.05, 2.93, 3.57, 0.97, 0.97, 5, NULL, NULL),
(34, 2.62, 3.21, 4.02, 4.49, 1.75, 1.75, 5, NULL, NULL),
(35, 3.90, 4.38, 3.36, 4.40, 2.97, 2.97, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `centros`
--

CREATE TABLE `centros` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `centro_pos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `centros`
--

INSERT INTO `centros` (`id`, `order_id`, `centro_pos`, `created_at`, `updated_at`) VALUES
(2, 7, 'C1', NULL, NULL),
(4, 1, 'C3', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` decimal(20,2) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Struktur dari tabel `favorites`
--

CREATE TABLE `favorites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ingredients`
--

CREATE TABLE `ingredients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ingredients`
--

INSERT INTO `ingredients` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sorgum Pahat', 'sorgum-pahat', 'active', '2022-06-30 08:41:13', '2022-07-01 06:13:03'),
(2, 'Sorgun Numbu', 'sorgun-numbu', 'active', '2022-07-01 06:13:22', '2022-07-01 06:13:22'),
(3, 'Sorgum Tortillero', 'sorgum-tortillero', 'active', '2022-07-01 06:13:42', '2022-07-01 06:13:42'),
(4, 'Sorgum Milion', 'sorgum-milion', 'active', '2022-07-01 06:14:02', '2022-07-01 06:14:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_activities`
--

CREATE TABLE `log_activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `log_activities`
--

INSERT INTO `log_activities` (`id`, `subject`, `url`, `method`, `ip`, `agent`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'add ingredient', 'http://localhost:8000/admin/ingredients', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 1, '2022-06-30 08:41:13', '2022-06-30 08:41:13'),
(2, 'add ingredient', 'http://localhost:8000/admin/ingredients', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1, '2022-07-01 06:13:23', '2022-07-01 06:13:23'),
(3, 'add ingredient', 'http://localhost:8000/admin/ingredients', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1, '2022-07-01 06:13:42', '2022-07-01 06:13:42'),
(4, 'add ingredient', 'http://localhost:8000/admin/ingredients', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1, '2022-07-01 06:14:03', '2022-07-01 06:14:03'),
(5, 'add brand', 'http://localhost:8000/admin/brands', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1, '2022-07-06 09:54:47', '2022-07-06 09:54:47');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_07_165721_create_shops_table', 1),
(6, '2022_03_08_102014_create_products_table', 1),
(7, '2022_03_08_102423_create_categories_table', 1),
(8, '2022_03_08_102439_create_brands_table', 1),
(9, '2022_03_08_102520_create_attributes_table', 1),
(10, '2022_03_08_102636_create_product_brands_table', 1),
(11, '2022_03_08_102726_create_product_attribute_values_table', 1),
(12, '2022_03_08_102809_create_product_inventories_table', 1),
(13, '2022_03_08_102839_create_product_categories_table', 1),
(14, '2022_03_08_102907_create_product_images_table', 1),
(15, '2022_03_08_102943_create_attribute_options_table', 1),
(16, '2022_03_08_103103_create_reviews_table', 1),
(17, '2022_03_08_103122_create_product_reviews_table', 1),
(18, '2022_03_08_103215_create_orders_table', 1),
(19, '2022_03_08_103239_create_order_items_table', 1),
(20, '2022_03_08_103257_create_shipments_table', 1),
(21, '2022_03_08_120059_create_slides_table', 1),
(22, '2022_03_08_130849_create_articles_table', 1),
(23, '2022_03_08_130958_create_category_articles_table', 1),
(24, '2022_03_08_131149_create_article_images_table', 1),
(25, '2022_03_08_131358_create_tags_table', 1),
(26, '2022_03_08_131428_create_taggables_table', 1),
(27, '2022_03_08_131629_create_article_categories_table', 1),
(28, '2022_03_08_131711_create_favorites_table', 1),
(29, '2022_03_10_142742_add_full_text_search_index_to_products_table', 1),
(30, '2022_03_24_124506_rename_column_and_add_columns_in_users_table', 1),
(31, '2022_04_04_173053_create_subscriptions_table', 1),
(32, '2022_04_07_152744_create_subscribes_table', 1),
(33, '2022_05_06_131155_create_cart_storage_table', 1),
(34, '2022_05_06_141425_create_settings_table', 1),
(35, '2022_05_06_142002_create_coupons_table', 1),
(36, '2022_05_15_055207_add_columns_in_orders_table', 1),
(37, '2022_05_15_060330_create_baskets_table', 1),
(38, '2022_05_17_172539_create_log_activities_table', 1),
(39, '2022_06_24_082011_create_payment_confirmations_table', 2),
(40, '2022_06_29_200423_create_ingredients_table', 3),
(41, '2022_06_29_200526_create_product_ingredients_table', 3),
(42, '2022_06_30_132613_create_regions_table', 4),
(43, '2022_07_01_165319_create_capitals_table', 5),
(44, '2022_07_01_183207_create_shop_capitals_table', 5),
(45, '2022_07_10_223503_create_centroids_table', 6),
(46, '2022_07_11_151057_create_product_sells_table', 6),
(47, '2022_07_25_161117_create_centros_table', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `income_rank` int(5) NOT NULL,
  `opened` int(11) NOT NULL DEFAULT 0,
  `opened_cus` int(11) NOT NULL DEFAULT 0,
  `opened_shopper` int(11) NOT NULL DEFAULT 0,
  `order_date` datetime NOT NULL,
  `payment_due` datetime NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `base_total_price` decimal(16,2) NOT NULL DEFAULT 0.00,
  `tax_amount` decimal(16,2) NOT NULL DEFAULT 0.00,
  `tax_percent` decimal(16,2) NOT NULL DEFAULT 0.00,
  `discount_amount` decimal(16,2) NOT NULL DEFAULT 0.00,
  `discount_percent` decimal(16,2) NOT NULL DEFAULT 0.00,
  `shipping_cost` decimal(16,2) NOT NULL DEFAULT 0.00,
  `grand_total` decimal(16,2) NOT NULL DEFAULT 0.00,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_address1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_address2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_city_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_province_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_postcode` int(11) DEFAULT NULL,
  `shipping_courier` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_service_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approved_by` bigint(20) UNSIGNED DEFAULT NULL,
  `approved_at` datetime DEFAULT NULL,
  `cancelled_by` bigint(20) UNSIGNED DEFAULT NULL,
  `cancelled_at` datetime DEFAULT NULL,
  `cancellation_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `code`, `status`, `customer_id`, `shop_id`, `income_rank`, `opened`, `opened_cus`, `opened_shopper`, `order_date`, `payment_due`, `payment_status`, `payment_token`, `payment_url`, `base_total_price`, `tax_amount`, `tax_percent`, `discount_amount`, `discount_percent`, `shipping_cost`, `grand_total`, `note`, `customer_first_name`, `customer_last_name`, `customer_address1`, `customer_address2`, `customer_phone`, `customer_email`, `customer_city_id`, `customer_province_id`, `customer_postcode`, `shipping_courier`, `shipping_service_name`, `approved_by`, `approved_at`, `cancelled_by`, `cancelled_at`, `cancellation_note`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 2, 'INV/20220614/VI/XIV/00001', 'created', 2, 1, 0, 1, 1, 1, '2022-06-14 10:51:21', '2022-06-21 10:51:21', 'unpaid', NULL, NULL, '0.00', '44000.00', '11.00', '0.00', '0.00', '46000.00', '90000.00', NULL, 'momon', 'jose', 'Manukan Tama Tandes Surabaya Barat', NULL, '0889999999999', 'momon@mail.com', '51', '11', 60988, 'jne', 'JNE - OKE', NULL, NULL, NULL, NULL, NULL, '2022-07-09 17:00:00', '2022-06-14 03:51:21', '2022-06-27 07:33:25'),
(4, 2, 'INV/20220620/VI/XX/00001', 'confirmed', 2, 1, 0, 1, 1, 1, '2022-06-20 14:05:25', '2022-06-27 14:05:25', 'paid', NULL, NULL, '400000.00', '44000.00', '11.00', '0.00', '0.00', '46000.00', '490000.00', NULL, 'momon', 'jose', 'Manukan Tama Tandes Surabaya Barat', NULL, '0889999999999', 'momon@mail.com', '51', '11', 60988, 'jne', 'JNE - OKE', NULL, NULL, NULL, NULL, NULL, '2022-07-10 06:02:13', '2022-06-20 07:05:25', '2022-06-27 07:33:45'),
(5, 28, 'INV/20220708/VII/VIII/00001', 'confirmed', 28, 3, 1, 0, 0, 0, '2022-07-08 14:41:43', '2022-07-15 14:41:43', 'paid', NULL, NULL, '800000.00', '88000.00', '11.00', '0.00', '0.00', '140000.00', '1028000.00', NULL, 'Jane', 'Farida', 'Gg. Salam No. 809, Payakumbuh 96147, SulBar', NULL, '024 1125 4899', 'jane_farida@mail.com', '444', '11', 60186, 'jne', 'JNE - OKE', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-08 07:41:43', '2022-07-08 07:41:43'),
(6, 29, 'INV/20220708/VII/VIII/00002', 'confirmed', 29, 4, 1, 0, 0, 0, '2022-07-08 15:09:05', '2022-07-15 15:09:05', 'paid', NULL, NULL, '700000.00', '77000.00', '11.00', '0.00', '0.00', '70000.00', '847000.00', NULL, 'Ian', 'Nababan', 'Kpg. Cihampelas No. 894, Solok 47325, KalTeng', NULL, '0742 6044 1863', 'ian_nababan@mail.com', '444', '11', 60186, 'jne', 'JNE - OKE', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-08 08:09:05', '2022-07-08 08:09:05'),
(7, 30, 'INV/20220708/VII/VIII/00003', 'confirmed', 30, 5, 1, 0, 0, 0, '2022-07-08 15:14:39', '2022-07-15 15:14:39', 'paid', NULL, NULL, '850000.00', '93500.00', '11.00', '0.00', '0.00', '175000.00', '1118500.00', NULL, 'Devi', 'Wulandari', 'Kpg. Bakau No. 179, Makassar 68954, Banten', NULL, '(+62) 712 4540 379', 'devi_wulandari@mail.com', '444', '11', 60186, 'jne', 'JNE - OKE', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-08 08:14:39', '2022-07-08 08:14:39'),
(8, 31, 'INV/20220710/VII/X/00001', 'confirmed', 31, 6, 2, 0, 0, 0, '2022-07-10 08:43:07', '2022-07-17 08:43:07', 'paid', NULL, NULL, '1360000.00', '149600.00', '11.00', '0.00', '0.00', '120000.00', '1629600.00', NULL, 'Ayu', 'Kuswandari', 'Gg. Suniaraja No. 43, Jambi 91393, JaTeng', NULL, '(+62) 23 9741 4806', 'ayu_kuswandari@mail.com', '444', '11', 60186, 'jne', 'JNE - OKE', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-10 01:43:07', '2022-07-10 01:43:07'),
(9, 32, 'INV/20220710/VII/X/00002', 'confirmed', 32, 6, 1, 0, 0, 0, '2022-07-10 08:47:05', '2022-07-17 08:47:05', 'paid', NULL, NULL, '680000.00', '74800.00', '11.00', '0.00', '0.00', '120000.00', '874800.00', NULL, 'Anom', 'Megantara', 'Manukan', NULL, '0653 8787 923', 'anom_megantara@mail.com', '444', '11', 60186, 'jne', 'JNE - OKE', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-10 01:47:05', '2022-07-10 01:47:05'),
(10, 33, 'INV/20220710/VII/X/00003', 'confirmed', 33, 7, 2, 0, 0, 0, '2022-07-10 09:13:32', '2022-07-17 09:13:32', 'paid', NULL, NULL, '1850000.00', '203500.00', '11.00', '0.00', '0.00', '150000.00', '2203500.00', NULL, 'Nadine', 'Wahyuni', 'Jln. Suryo No. 166, Bandar Lampung 93171, DKI', NULL, '0260 1373 3869', 'nadine_wahyuni@mail.com', '444', '11', 60186, 'jne', 'JNE - OKE', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-10 02:13:32', '2022-07-10 02:13:32'),
(11, 34, 'INV/20220710/VII/X/00004', 'confirmed', 34, 8, 3, 0, 0, 0, '2022-07-10 09:23:50', '2022-07-17 09:23:50', 'paid', NULL, NULL, '2380000.00', '261800.00', '11.00', '0.00', '0.00', '42000.00', '2683800.00', NULL, 'Eka', 'Aryani', 'Jln. Setia Budi No. 259, Subulussalam 78192, KepR', NULL, '(+62) 423 7301 3760', 'eka_aryani@mail.com', '444', '11', 60186, 'jne', 'JNE - OKE', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-10 02:23:50', '2022-07-10 02:23:50'),
(12, 35, 'INV/20220710/VII/X/00005', 'confirmed', 35, 9, 3, 0, 0, 0, '2022-07-10 09:27:09', '2022-07-17 09:27:09', 'paid', NULL, NULL, '2240000.00', '246400.00', '11.00', '0.00', '0.00', '56000.00', '2542400.00', NULL, 'Dodo', 'Dabukke', 'Ds. Cikapayang No. 392, Tangerang Selatan 93552, Aceh', NULL, '(+62) 423 3659 7998', 'dodo_dabukke@mail.com', '444', '11', 60186, 'jne', 'JNE - OKE', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-10 02:27:09', '2022-07-10 02:27:09'),
(13, 36, 'INV/20220710/VII/X/00006', 'confirmed', 36, 9, 3, 0, 0, 0, '2022-07-10 09:30:39', '2022-07-17 09:30:39', 'paid', NULL, NULL, '2600000.00', '286000.00', '11.00', '0.00', '0.00', '140000.00', '3026000.00', NULL, 'Clara', 'Pudjiastuti', 'Jln. Ters. Kiaracondong No. 251, Administrasi Jakarta Utara 70989, Aceh', NULL, '0211 7912 3063', 'clara_pudjiastuti@mail.com', '444', '11', 60186, 'jne', 'JNE - OKE', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-10 02:30:39', '2022-07-10 02:30:39'),
(14, 37, 'INV/20220710/VII/X/00007', 'confirmed', 37, 10, 3, 0, 0, 0, '2022-07-10 09:32:25', '2022-07-17 09:32:25', 'paid', NULL, NULL, '2590000.00', '284900.00', '11.00', '0.00', '0.00', '126000.00', '3000900.00', NULL, 'Kani', 'Wijayanti', 'Gg. Sumpah Pemuda No. 118, Sawahlunto 32059, DKI', NULL, '(+62) 305 5006 7893', 'kani_wijayanti@mail.com', '444', '11', 60186, 'jne', 'JNE - OKE', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-10 02:32:25', '2022-07-10 02:32:25'),
(15, 38, 'INV/20220710/VII/X/00008', 'confirmed', 38, 11, 4, 0, 0, 0, '2022-07-10 09:37:01', '2022-07-17 09:37:01', 'paid', NULL, NULL, '3230000.00', '355300.00', '11.00', '0.00', '0.00', '63000.00', '3648300.00', NULL, 'Samiah', 'Wahyuni', 'Gg. Salak No. 328, Tidore Kepulauan 67073, NTB', NULL, '0254 4590 5349', 'samiah_wahyuni@mail.com', '444', '11', 60186, 'jne', 'JNE - OKE', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-10 02:37:01', '2022-07-10 02:37:01'),
(16, 39, 'INV/20220710/VII/X/00009', 'confirmed', 39, 11, 4, 0, 0, 0, '2022-07-10 09:38:55', '2022-07-17 09:38:55', 'paid', NULL, NULL, '3420000.00', '376200.00', '11.00', '0.00', '0.00', '63000.00', '3859200.00', NULL, 'Eko', 'Najmudin', 'Ds. Flora No. 109, Yogyakarta 21452, SumSel', NULL, '0752 1773 219', 'eko_najmudin@mail.com', '444', '11', 60186, 'jne', 'JNE - OKE', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-10 02:38:55', '2022-07-10 02:38:55'),
(17, 40, 'INV/20220710/VII/X/00010', 'confirmed', 40, 11, 4, 0, 0, 0, '2022-07-10 09:40:39', '2022-07-17 09:40:39', 'paid', NULL, NULL, '3420000.00', '376200.00', '11.00', '0.00', '0.00', '63000.00', '3859200.00', NULL, 'Kemba', 'Nugroho', 'Dk. Tambun No. 529, Bitung 11847, NTT', NULL, '(+62) 219 1298 883', 'kemba_nugroho@mail.com', '444', '11', 60186, 'jne', 'JNE - OKE', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-10 02:40:39', '2022-07-10 02:40:39'),
(18, 41, 'INV/20220710/VII/X/00011', 'confirmed', 41, 11, 4, 0, 0, 0, '2022-07-10 09:42:55', '2022-07-17 09:42:55', 'paid', NULL, NULL, '3230000.00', '355300.00', '11.00', '0.00', '0.00', '63000.00', '3648300.00', NULL, 'Opung', 'Januar', 'Ds. B.Agam Dlm No. 201, Cirebon 33887, SulSel', NULL, '(+62) 813 5325 282', 'opung_januar@mail.com', '444', '11', 60186, 'jne', 'JNE - OKE', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-10 02:42:55', '2022-07-10 02:42:55'),
(19, 42, 'INV/20220710/VII/X/00012', 'confirmed', 42, 12, 3, 0, 0, 0, '2022-07-10 09:45:27', '2022-07-17 09:45:27', 'paid', NULL, NULL, '2500000.00', '275000.00', '11.00', '0.00', '0.00', '35000.00', '2810000.00', NULL, 'Najwa', 'Rahmawati', 'Jln. Panjaitan No. 521, Medan 93837, KalUt', NULL, '0804 2741 421', 'najwa_rahmawati@mail.com', '444', '11', 60186, 'jne', 'JNE - OKE', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-10 02:45:27', '2022-07-10 02:45:27'),
(20, 43, 'INV/20220710/VII/X/00013', 'confirmed', 43, 13, 3, 0, 0, 0, '2022-07-10 09:50:17', '2022-07-17 09:50:17', 'paid', NULL, NULL, '2464000.00', '271040.00', '11.00', '0.00', '0.00', '112000.00', '2847040.00', NULL, 'Gawati', 'Astuti', 'Kpg. Padang No. 254, Bontang 41358, KalBar', NULL, '(+62) 803 407 590', 'gawati_astuti@mail.com', '444', '11', 60186, 'jne', 'JNE - OKE', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-10 02:50:17', '2022-07-10 02:50:17'),
(21, 44, 'INV/20220710/VII/X/00014', 'confirmed', 44, 13, 3, 0, 0, 0, '2022-07-10 10:36:42', '2022-07-17 10:36:42', 'paid', NULL, NULL, '2220000.00', '244200.00', '11.00', '0.00', '0.00', '210000.00', '2674200.00', NULL, 'Bagya', 'Kusumo', 'Jln. Haji No. 721, Tegal 88984, Jambi', NULL, '(+62) 410 8847 7207', 'bagya_kusumo@mail.com', '444', '11', 60186, 'jne', 'JNE - OKE', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-10 03:36:42', '2022-07-10 03:36:42'),
(22, 45, 'INV/20220710/VII/X/00015', 'confirmed', 45, 14, 2, 0, 0, 0, '2022-07-10 10:41:46', '2022-07-17 10:41:46', 'paid', NULL, NULL, '1155000.00', '127050.00', '11.00', '0.00', '0.00', '105000.00', '1387050.00', NULL, 'Sakura', 'Wastuti', 'Psr. Sampangan No. 257, Gunungsitoli 95560, Lampung', NULL, '0303 2751 5475', 'sakura_wastuti@mail.com', '444', '11', 60186, 'jne', 'JNE - OKE', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-10 03:41:46', '2022-07-10 03:41:46'),
(23, 46, 'INV/20220710/VII/X/00016', 'confirmed', 46, 14, 2, 0, 0, 0, '2022-07-10 10:44:20', '2022-07-17 10:44:20', 'paid', NULL, NULL, '1480000.00', '162800.00', '11.00', '0.00', '0.00', '140000.00', '1782800.00', NULL, 'Sari', 'Rahimah', 'Psr. Babadan No. 202, Padangpanjang 48655, SulBar', NULL, '0862 9984 1681', 'sari_rahimah@mail.com', '444', '11', 60186, 'jne', 'JNE - OKE', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-10 03:44:20', '2022-07-10 03:44:20'),
(24, 47, 'INV/20220710/VII/X/00017', 'confirmed', 47, 15, 2, 0, 0, 0, '2022-07-10 10:47:15', '2022-07-17 10:47:15', 'paid', NULL, NULL, '1155000.00', '127050.00', '11.00', '0.00', '0.00', '105000.00', '1387050.00', NULL, 'Chandra', 'Suwarno', 'Ds. Surapati No. 471, Pagar Alam 30406, SumUt', NULL, '(+62) 488 8848 409', 'chandra_suwarno@mail.com', '444', '11', 60186, 'jne', 'JNE - OKE', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-10 03:47:15', '2022-07-10 03:47:15'),
(25, 48, 'INV/20220710/VII/X/00018', 'confirmed', 48, 16, 1, 0, 0, 0, '2022-07-10 10:49:30', '2022-07-17 10:49:30', 'paid', NULL, NULL, '770000.00', '84700.00', '11.00', '0.00', '0.00', '70000.00', '924700.00', NULL, 'Gasti', 'Handayani', 'Dk. Banal No. 582, Bandung 56534, SulTra', NULL, '(+62) 474 9649 771', 'gasti_handayani@mail.com', '444', '11', 60186, 'jne', 'JNE - OKE', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-10 03:49:30', '2022-07-10 03:49:30'),
(26, 49, 'INV/20220710/VII/X/00019', 'confirmed', 49, 17, 2, 0, 0, 0, '2022-07-10 10:52:35', '2022-07-17 10:52:35', 'paid', NULL, NULL, '1200000.00', '132000.00', '11.00', '0.00', '0.00', '210000.00', '1542000.00', NULL, 'Hadi', 'Habibi', 'Dk. Gremet No. 630, Jayapura 82455, KalTim', NULL, '0719 8000 2014', 'hadi_habibi@mail.com', '444', '11', 60186, 'jne', 'JNE - OKE', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-10 03:52:35', '2022-07-10 03:52:35'),
(27, 50, 'INV/20220710/VII/X/00020', 'confirmed', 50, 18, 4, 0, 0, 0, '2022-07-10 10:54:37', '2022-07-17 10:54:37', 'paid', NULL, NULL, '3465000.00', '381150.00', '11.00', '0.00', '0.00', '35000.00', '3881150.00', NULL, 'Jane', 'Palastri', 'Jln. Bank Dagang Negara No. 520, Surabaya 41896, MalUt', NULL, '(+62) 377 1085 468', 'jane_palastri@mail.com', '444', '11', 60186, 'jne', 'JNE - OKE', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-10 03:54:37', '2022-07-10 03:54:37'),
(28, 51, 'INV/20220710/VII/X/00021', 'confirmed', 51, 19, 4, 0, 0, 0, '2022-07-10 10:56:45', '2022-07-17 10:56:45', 'paid', NULL, NULL, '3250000.00', '357500.00', '11.00', '0.00', '0.00', '49000.00', '3656500.00', NULL, 'Gawati', 'Pudjiastuti', 'Psr. Suprapto No. 387, Tangerang Selatan 69349, JaBar', NULL, '0669 4277 072', 'gawati_pudjiastuti@mail.com', '444', '11', 60186, 'jne', 'JNE - OKE', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-10 03:56:45', '2022-07-10 03:56:45'),
(29, 52, 'INV/20220710/VII/X/00022', 'confirmed', 52, 20, 3, 0, 0, 0, '2022-07-10 10:58:36', '2022-07-17 10:58:36', 'paid', NULL, NULL, '2200000.00', '242000.00', '11.00', '0.00', '0.00', '42000.00', '2484000.00', NULL, 'Ajiman', 'Nashiruddin', 'Dk. Jagakarsa No. 837, Medan 96444, KalBar', NULL, '0765 7635 1622', 'ajiman_nashiruddin@mail.com', '444', '11', 60186, 'jne', 'JNE - OKE', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-10 03:58:36', '2022-07-10 03:58:36'),
(30, 53, 'INV/20220710/VII/X/00023', 'confirmed', 53, 21, 3, 0, 0, 0, '2022-07-10 11:00:29', '2022-07-17 11:00:29', 'paid', NULL, NULL, '2160000.00', '237600.00', '11.00', '0.00', '0.00', '161000.00', '2558600.00', NULL, 'Nova', 'Wahyuni', 'Gg. Bakau No. 917, Kotamobagu 42964, BaBel', NULL, '0280 5356 005', 'nova_wahyuni@mail.com', '444', '11', 60186, 'jne', 'JNE - OKE', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-10 04:00:29', '2022-07-10 04:00:29'),
(31, 54, 'INV/20220710/VII/X/00024', 'confirmed', 54, 22, 3, 0, 0, 0, '2022-07-10 11:02:42', '2022-07-17 11:02:42', 'paid', NULL, NULL, '2200000.00', '242000.00', '11.00', '0.00', '0.00', '36000.00', '2478000.00', NULL, 'Enteng', 'Pradana', 'Psr. Cihampelas No. 598, Padangsidempuan 63954, SulTeng', NULL, '024 9252 3294', 'enteng_pradana@mail.com', '444', '11', 60186, 'jne', 'JNE - OKE', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-10 04:02:42', '2022-07-10 04:02:42'),
(32, 55, 'INV/20220710/VII/X/00025', 'confirmed', 55, 23, 3, 0, 0, 0, '2022-07-10 11:05:02', '2022-07-17 11:05:02', 'paid', NULL, NULL, '2200000.00', '242000.00', '11.00', '0.00', '0.00', '42000.00', '2484000.00', NULL, 'Jarwa', 'Saragih', 'Psr. Basoka No. 571, Binjai 68470, Riau', NULL, '(+62) 675 6180 0115', 'jarwa_saragih@mail.com', '444', '11', 60186, 'jne', 'JNE - REG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-10 04:05:02', '2022-07-10 04:05:02'),
(33, 56, 'INV/20220710/VII/X/00026', 'confirmed', 56, 24, 3, 0, 0, 0, '2022-07-10 11:07:28', '2022-07-17 11:07:28', 'paid', NULL, NULL, '2275000.00', '250250.00', '11.00', '0.00', '0.00', '49000.00', '2574250.00', NULL, 'Kamila', 'Andriani', 'Psr. Kalimantan No. 627, Kendari 51938, MalUt', NULL, '0371 0071 7331', 'kamila_andriani@mail.com', '444', '11', 60186, 'jne', 'JNE - OKE', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-10 04:07:28', '2022-07-10 04:07:28'),
(34, 57, 'INV/20220710/VII/X/00027', 'confirmed', 57, 24, 2, 0, 0, 0, '2022-07-10 11:09:17', '2022-07-17 11:09:17', 'paid', NULL, NULL, '1225000.00', '134750.00', '11.00', '0.00', '0.00', '28000.00', '1387750.00', NULL, 'Lanjar', 'Suryono', 'Kpg. B.Agam Dlm No. 897, Subulussalam 74452, KalTeng', NULL, '0824 4794 3864', 'lanjar_suryono@mail.com', '444', '11', 60186, 'jne', 'JNE - OKE', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-10 04:09:17', '2022-07-10 04:09:17'),
(35, 28, 'INV/20220710/VII/X/00028', 'confirmed', 28, 24, 2, 0, 0, 0, '2022-07-10 12:03:12', '2022-07-17 12:03:12', 'paid', NULL, NULL, '1225000.00', '134750.00', '11.00', '0.00', '0.00', '28000.00', '1387750.00', NULL, 'Jane', 'Farida', 'Gg. Salam No. 809, Payakumbuh 96147, SulBar', NULL, '024 1125 4899', 'jane_farida@mail.com', '444', '11', 60186, 'jne', 'JNE - OKE', NULL, NULL, NULL, NULL, NULL, '2022-07-10 06:07:34', '2022-07-10 05:03:12', '2022-07-10 05:03:12'),
(36, 28, 'INV/20220710/VII/X/00029', 'confirmed', 28, 24, 2, 0, 0, 0, '2022-07-10 12:25:50', '2022-07-17 12:25:50', 'paid', NULL, NULL, '1225000.00', '134750.00', '11.00', '0.00', '0.00', '28000.00', '1387750.00', NULL, 'Jane', 'Farida', 'Gg. Salam No. 809, Payakumbuh 96147, SulBar', NULL, '024 1125 4899', 'jane_farida@mail.com', '444', '11', 60186, 'jne', 'JNE - OKE', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-10 05:25:50', '2022-07-10 05:25:50'),
(37, 29, 'INV/20220710/VII/X/00030', 'confirmed', 29, 25, 2, 1, 0, 0, '2022-07-10 12:27:47', '2022-07-17 12:27:47', 'paid', NULL, NULL, '1120000.00', '123200.00', '11.00', '0.00', '0.00', '196000.00', '1439200.00', NULL, 'Ian', 'Nababan', 'Kpg. Cihampelas No. 894, Solok 47325, KalTeng', NULL, '0742 6044 1863', 'ian_nababan@mail.com', '444', '11', 60186, 'jne', 'JNE - OKE', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-10 05:27:47', '2022-07-22 13:24:38'),
(38, 30, 'INV/20220710/VII/X/00031', 'confirmed', 30, 25, 2, 0, 0, 0, '2022-07-10 12:32:45', '2022-07-17 12:32:45', 'paid', NULL, NULL, '1125000.00', '123750.00', '11.00', '0.00', '0.00', '175000.00', '1423750.00', NULL, 'Devi', 'Wulandari', 'Kpg. Bakau No. 179, Makassar 68954, Banten', NULL, '(+62) 712 4540 379', 'devi_wulandari@mail.com', '444', '11', 60186, 'jne', 'JNE - OKE', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-10 05:32:45', '2022-07-10 05:32:45'),
(39, 31, 'INV/20220710/VII/X/00032', 'confirmed', 31, 26, 1, 0, 0, 0, '2022-07-10 12:34:38', '2022-07-17 12:34:38', 'paid', NULL, NULL, '800000.00', '88000.00', '11.00', '0.00', '0.00', '120000.00', '1008000.00', NULL, 'Ayu', 'Kuswandari', 'Gg. Suniaraja No. 43, Jambi 91393, JaTeng', NULL, '(+62) 23 9741 4806', 'ayu_kuswandari@mail.com', '444', '11', 60186, 'jne', 'JNE - OKE', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-10 05:34:38', '2022-07-10 05:34:38'),
(40, 32, 'INV/20220710/VII/X/00033', 'confirmed', 32, 27, 1, 0, 0, 0, '2022-07-10 12:37:01', '2022-07-17 12:37:01', 'paid', NULL, NULL, '875000.00', '96250.00', '11.00', '0.00', '0.00', '91000.00', '1062250.00', NULL, 'Anom', 'Megantara', 'Manukan', NULL, '0653 8787 923', 'anom_megantara@mail.com', '444', '11', 60186, 'jne', 'JNE - OKE', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-10 05:37:01', '2022-07-10 05:37:01'),
(41, 55, 'INV/20231107/XI/VII/00001', 'created', 55, 4, 0, 0, 0, 0, '2023-11-07 00:15:35', '2023-11-14 00:15:35', 'unpaid', NULL, NULL, '70000.00', '7700.00', '11.00', '0.00', '0.00', '8000.00', '85700.00', NULL, 'Jarwa', 'Saragih', 'Psr. Basoka No. 571, Binjai 68470, Riau', NULL, '(+62) 675 6180 0115', 'jarwa_saragih@mail.com', '444', '11', 60186, 'jne', 'JNE - OKE', NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-06 17:15:35', '2023-11-06 17:15:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_items`
--

CREATE TABLE `order_items` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `base_price` decimal(16,2) NOT NULL DEFAULT 0.00,
  `base_total` decimal(16,2) NOT NULL DEFAULT 0.00,
  `tax_amount` decimal(16,2) NOT NULL DEFAULT 0.00,
  `tax_percent` decimal(16,2) NOT NULL DEFAULT 0.00,
  `discount_amount` decimal(16,2) NOT NULL DEFAULT 0.00,
  `discount_percent` decimal(16,2) NOT NULL DEFAULT 0.00,
  `sub_total` decimal(16,2) NOT NULL DEFAULT 0.00,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attributes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `order_items`
--

INSERT INTO `order_items` (`order_id`, `product_id`, `qty`, `base_price`, `base_total`, `tax_amount`, `tax_percent`, `discount_amount`, `discount_percent`, `sub_total`, `sku`, `type`, `name`, `weight`, `attributes`, `created_at`, `updated_at`) VALUES
(2, 1, 2, '200000.00', '400000.00', '0.00', '0.00', '0.00', '0.00', '400000.00', 'sku222', 'simple', 'SorgumA', '1000.00', '[]', '2022-06-14 03:51:21', '2022-06-14 03:51:21'),
(4, 1, 2, '200000.00', '400000.00', '0.00', '0.00', '0.00', '0.00', '400000.00', 'sku222', 'simple', 'SorgumA', '1000.00', '[]', '2022-06-20 07:05:25', '2022-06-20 07:05:25'),
(5, 2, 20, '40000.00', '800000.00', '0.00', '0.00', '0.00', '0.00', '800000.00', 'SM001', 'simple', 'Biji Sorgum Merah 1kg', '1000.00', '[]', '2022-07-08 07:41:43', '2022-07-08 07:41:43'),
(6, 3, 10, '70000.00', '700000.00', '0.00', '0.00', '0.00', '0.00', '700000.00', 'SP001', 'simple', 'Tepung Sorgum Putih 1kg', '1000.00', '[]', '2022-07-08 08:09:06', '2022-07-08 08:09:06'),
(7, 4, 25, '34000.00', '850000.00', '0.00', '0.00', '0.00', '0.00', '850000.00', 'BSP001', 'simple', 'Biji Sorgum Putih 1kg', '1000.00', '[]', '2022-07-08 08:14:39', '2022-07-08 08:14:39'),
(8, 5, 40, '34000.00', '1360000.00', '0.00', '0.00', '0.00', '0.00', '1360000.00', 'BSP001', 'simple', 'Biji Sorgum Putih 1kg', '500.00', '[]', '2022-07-10 01:43:07', '2022-07-10 01:43:07'),
(9, 7, 20, '34000.00', '680000.00', '0.00', '0.00', '0.00', '0.00', '680000.00', 'BSP002', 'simple', 'Biji Sorgum Putih 1kg Sorgum Milion', '1000.00', '[]', '2022-07-10 01:47:05', '2022-07-10 01:47:05'),
(10, 6, 25, '74000.00', '1850000.00', '0.00', '0.00', '0.00', '0.00', '1850000.00', 'TS001', 'simple', 'Tepung Sorgum  1kg Sorgum Milion', '1000.00', '[]', '2022-07-10 02:13:32', '2022-07-10 02:13:32'),
(11, 8, 70, '34000.00', '2380000.00', '0.00', '0.00', '0.00', '0.00', '2380000.00', 'BSP001', 'simple', 'Biji Sorgum Putih 1kg  - Sorgum Pahat', '100.00', '[]', '2022-07-10 02:23:50', '2022-07-10 02:23:50'),
(12, 9, 80, '28000.00', '2240000.00', '0.00', '0.00', '0.00', '0.00', '2240000.00', 'BS001', 'simple', 'Biji Sorgum 1kg - Sorgum Numbu', '100.00', '[]', '2022-07-10 02:27:09', '2022-07-10 02:27:09'),
(13, 10, 40, '65000.00', '2600000.00', '0.00', '0.00', '0.00', '0.00', '2600000.00', 'BBS001', 'simple', 'Benih Biji Sorgum 1kg - Sorgum Milion', '500.00', '[]', '2022-07-10 02:30:39', '2022-07-10 02:30:39'),
(14, 11, 35, '74000.00', '2590000.00', '0.00', '0.00', '0.00', '0.00', '2590000.00', 'TS001', 'simple', 'Tepung Sorgum  1kg - Sorgum Milion', '500.00', '[]', '2022-07-10 02:32:26', '2022-07-10 02:32:26'),
(15, 12, 85, '38000.00', '3230000.00', '0.00', '0.00', '0.00', '0.00', '3230000.00', 'BS001', 'simple', 'Biji Sorgum 1kg - Whole Grain (Pahat)', '100.00', '[]', '2022-07-10 02:37:02', '2022-07-10 02:37:02'),
(16, 13, 90, '38000.00', '3420000.00', '0.00', '0.00', '0.00', '0.00', '3420000.00', 'BS002', 'simple', 'Biji Sorgum 1kg - Whole Grain (Milion)', '100.00', '[]', '2022-07-10 02:38:55', '2022-07-10 02:38:55'),
(17, 14, 90, '38000.00', '3420000.00', '0.00', '0.00', '0.00', '0.00', '3420000.00', 'BS003', 'simple', 'Biji Sorgum 1kg - Whole Grain (Numbu)', '100.00', '[]', '2022-07-10 02:40:39', '2022-07-10 02:40:39'),
(18, 15, 85, '38000.00', '3230000.00', '0.00', '0.00', '0.00', '0.00', '3230000.00', 'BS004', 'simple', 'Biji Sorgum 1kg - Whole Grain (Tortillero)', '100.00', '[]', '2022-07-10 02:42:55', '2022-07-10 02:42:55'),
(19, 16, 50, '50000.00', '2500000.00', '0.00', '0.00', '0.00', '0.00', '2500000.00', 'BBS001', 'simple', 'Benih Biji Sorgum 1kg - Sorgum Numbu', '100.00', '[]', '2022-07-10 02:45:27', '2022-07-10 02:45:27'),
(20, 17, 32, '77000.00', '2464000.00', '0.00', '0.00', '0.00', '0.00', '2464000.00', 'TS001', 'simple', 'Tepung Sorgum  1kg - Sorgum Pahat', '500.00', '[]', '2022-07-10 02:50:17', '2022-07-10 02:50:17'),
(21, 18, 30, '74000.00', '2220000.00', '0.00', '0.00', '0.00', '0.00', '2220000.00', 'TS002', 'simple', 'Tepung Sorgum  1kg - Sorgum Milion', '1000.00', '[]', '2022-07-10 03:36:42', '2022-07-10 03:36:42'),
(22, 19, 15, '77000.00', '1155000.00', '0.00', '0.00', '0.00', '0.00', '1155000.00', 'TS001', 'simple', 'Tepung Sorgum  1kg - Sorgum Pahat', '1000.00', '[]', '2022-07-10 03:41:46', '2022-07-10 03:41:46'),
(23, 20, 20, '74000.00', '1480000.00', '0.00', '0.00', '0.00', '0.00', '1480000.00', 'TS002', 'simple', 'Tepung Sorgum  1kg - Sorgum Milion', '1000.00', '[]', '2022-07-10 03:44:20', '2022-07-10 03:44:20'),
(24, 21, 15, '77000.00', '1155000.00', '0.00', '0.00', '0.00', '0.00', '1155000.00', 'TS001', 'simple', 'Tepung Sorgum  1kg - Sorgum Pahat', '1000.00', '[]', '2022-07-10 03:47:15', '2022-07-10 03:47:15'),
(25, 22, 10, '77000.00', '770000.00', '0.00', '0.00', '0.00', '0.00', '770000.00', 'TS001', 'simple', 'Tepung Sorgum  1kg - Sorgum Pahat', '1000.00', '[]', '2022-07-10 03:49:30', '2022-07-10 03:49:30'),
(26, 23, 30, '40000.00', '1200000.00', '0.00', '0.00', '0.00', '0.00', '1200000.00', 'BS001', 'simple', 'Biji Sorgum 1kg - Sorgum Numbu', '1000.00', '[]', '2022-07-10 03:52:36', '2022-07-10 03:52:36'),
(27, 24, 45, '77000.00', '3465000.00', '0.00', '0.00', '0.00', '0.00', '3465000.00', 'TS001', 'simple', 'Tepung Sorgum  1kg - Sorgum Tortillero', '100.00', '[]', '2022-07-10 03:54:37', '2022-07-10 03:54:37'),
(28, 25, 65, '50000.00', '3250000.00', '0.00', '0.00', '0.00', '0.00', '3250000.00', 'BS001', 'simple', 'Benih Biji Sorgum 1kg - Sorgum Milion', '100.00', '[]', '2022-07-10 03:56:45', '2022-07-10 03:56:45'),
(29, 26, 55, '40000.00', '2200000.00', '0.00', '0.00', '0.00', '0.00', '2200000.00', 'BS001', 'simple', 'Biji Sorgum 1kg - Sorgum Numbu', '100.00', '[]', '2022-07-10 03:58:36', '2022-07-10 03:58:36'),
(30, 27, 45, '48000.00', '2160000.00', '0.00', '0.00', '0.00', '0.00', '2160000.00', 'MS001', 'simple', 'Mie Sorgum', '500.00', '[]', '2022-07-10 04:00:29', '2022-07-10 04:00:29'),
(31, 28, 55, '40000.00', '2200000.00', '0.00', '0.00', '0.00', '0.00', '2200000.00', 'BS001', 'simple', 'Biji Sorgum 1kg - Sorgum Pahat', '100.00', '[]', '2022-07-10 04:02:42', '2022-07-10 04:02:42'),
(32, 29, 55, '40000.00', '2200000.00', '0.00', '0.00', '0.00', '0.00', '2200000.00', 'BS001', 'simple', 'Biji Sorgum 1kg - Sorgum Pahat', '100.00', '[]', '2022-07-10 04:05:02', '2022-07-10 04:05:02'),
(33, 30, 65, '35000.00', '2275000.00', '0.00', '0.00', '0.00', '0.00', '2275000.00', 'BS001', 'simple', 'Biji Sorgum 1kg - Whole Grain (Pahat)', '100.00', '[]', '2022-07-10 04:07:28', '2022-07-10 04:07:28'),
(34, 31, 35, '35000.00', '1225000.00', '0.00', '0.00', '0.00', '0.00', '1225000.00', 'BS002', 'simple', 'Biji Sorgum 1kg - Whole Grain (Milion)', '100.00', '[]', '2022-07-10 04:09:17', '2022-07-10 04:09:17'),
(35, 32, 35, '35000.00', '1225000.00', '0.00', '0.00', '0.00', '0.00', '1225000.00', 'BS003', 'simple', 'Biji Sorgum 1kg - Whole Grain (Numbu)', '100.00', '[]', '2022-07-10 05:03:12', '2022-07-10 05:03:12'),
(36, 32, 35, '35000.00', '1225000.00', '0.00', '0.00', '0.00', '0.00', '1225000.00', 'BS003', 'simple', 'Biji Sorgum 1kg - Whole Grain (Numbu)', '100.00', '[]', '2022-07-10 05:25:50', '2022-07-10 05:25:50'),
(37, 33, 28, '40000.00', '1120000.00', '0.00', '0.00', '0.00', '0.00', '1120000.00', 'BS001', 'simple', 'Biji Sorgum 1kg - Sorgum Pahat', '1000.00', '[]', '2022-07-10 05:27:47', '2022-07-10 05:27:47'),
(38, 34, 25, '45000.00', '1125000.00', '0.00', '0.00', '0.00', '0.00', '1125000.00', 'BS002', 'simple', 'Biji Sorgum 1kg - Sorgum Numbu', '1000.00', '[]', '2022-07-10 05:32:45', '2022-07-10 05:32:45'),
(39, 35, 20, '40000.00', '800000.00', '0.00', '0.00', '0.00', '0.00', '800000.00', 'BS001', 'simple', 'Biji Sorgum 1kg - Sorgum Pahat', '1000.00', '[]', '2022-07-10 05:34:38', '2022-07-10 05:34:38'),
(40, 36, 25, '35000.00', '875000.00', '0.00', '0.00', '0.00', '0.00', '875000.00', 'KS001', 'simple', 'Kecap Manis Sorgum', '500.00', '[]', '2022-07-10 05:37:01', '2022-07-10 05:37:01'),
(41, 3, 1, '70000.00', '70000.00', '0.00', '0.00', '0.00', '0.00', '70000.00', 'SP001', 'simple', 'Tepung Sorgum Putih 1kg', '1000.00', '[]', '2023-11-06 17:15:36', '2023-11-06 17:15:36');

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
-- Struktur dari tabel `payment_confirmations`
--

CREATE TABLE `payment_confirmations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nominal` decimal(16,2) NOT NULL DEFAULT 0.00,
  `bank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rekening` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `atasnama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `original` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medium` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `small` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rand_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `shop_id` bigint(20) UNSIGNED NOT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(15,2) DEFAULT NULL,
  `discount` decimal(15,2) DEFAULT NULL,
  `weight` decimal(10,2) DEFAULT NULL,
  `width` decimal(10,2) DEFAULT NULL,
  `height` decimal(10,2) DEFAULT NULL,
  `length` decimal(10,2) DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `rand_id`, `parent_id`, `user_id`, `shop_id`, `sku`, `type`, `name`, `slug`, `price`, `discount`, `weight`, `width`, `height`, `length`, `short_description`, `description`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'sifIrjxoYfnsR4t1uP', NULL, 1, 1, 'sku222', 'simple', 'SorgumA', 'sorguma', '200000.00', NULL, '1000.00', '1.00', '1.00', '1.00', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 1, '2022-06-08 23:16:48', '2022-06-08 23:16:48', NULL),
(2, 'CllihxfDnjkyvJceUC', NULL, 3, 3, 'SM001', 'simple', 'Biji Sorgum Merah 1kg', 'biji-sorgum-merah-1kg', '40000.00', NULL, '1000.00', '1.00', '1.00', '1.00', NULL, 'biji sorgum mengandung 3 jenis karbohidrat, yaitu pati, gula terlarut dan serat.\r\nkeunggulan : free gluten, indeks glikemiks lebih rendah dibanding serealia lainnya, mengandung antioksidan, anti tumor.\r\ncocok untuk membuat aneka kue kering dan roti.', 1, '2022-07-06 11:07:31', '2022-07-06 11:07:31', NULL),
(3, 'rJ76EeF8TEdPyCEAcR', NULL, 4, 4, 'SP001', 'simple', 'Tepung Sorgum Putih 1kg', 'tepung-sorgum-putih-1kg', '70000.00', NULL, '1000.00', '1.00', '1.00', '1.00', NULL, 'Tepung Sorgum yang terbuat dari tanaman sorgum pilihan asli Indonesia. Kandungan serat yang tinggi , tanpa gluten (gluten free) , dan kaya zat besi, menjadikan tepung sorgum sebagai salah satu tepung yang paling sehat sebagai bahan kue atau melengkapi menu masakan anda.', 1, '2022-07-06 11:14:43', '2022-07-06 11:14:43', NULL),
(4, 'yVYzTaoaZKOOq0tYFg', NULL, 5, 5, 'BSP001', 'simple', 'Biji Sorgum Putih 1kg', 'biji-sorgum-putih-1kg', '34000.00', NULL, '1000.00', '1.00', '1.00', '1.00', NULL, 'biji sorgum mengandung 3 jenis karbohidrat, yaitu pati, gula terlarut dan serat.\r\nkeunggulan : free gluten, indeks glikemiks lebih rendah dibanding serealia lainnya, mengandung antioksidan, anti tumor.\r\ncocok untuk membuat aneka kue kering dan roti.', 1, '2022-07-06 11:19:57', '2022-07-06 11:19:57', NULL),
(5, 'SHZPxjoktrd4deqBnh', NULL, 6, 6, 'BSP001', 'simple', 'Biji Sorgum Putih 1kg', 'biji-sorgum-putih-1kg', '34000.00', NULL, '500.00', '1.00', '1.00', '1.00', NULL, 'biji sorgum mengandung 3 jenis karbohidrat, yaitu pati, gula terlarut dan serat.\r\nkeunggulan : free gluten, indeks glikemiks lebih rendah dibanding serealia lainnya, mengandung antioksidan, anti tumor.\r\ncocok untuk membuat aneka kue kering dan roti.', 1, '2022-07-06 11:26:19', '2022-07-06 11:26:19', NULL),
(6, 'BXakNptIEvTvBks41l', NULL, 7, 7, 'TS001', 'simple', 'Tepung Sorgum  1kg Sorgum Milion', 'tepung-sorgum-1kg-sorgum-milion', '74000.00', NULL, '1000.00', '1.00', '1.00', '1.00', NULL, 'Tepung Sorghum Premium 1 Kg / Tepung Sorgum / Sorghum Flour 1Kg\r\n\r\nSorghum adalah sumber pangan masa depan yang sudah dikenal sejak dahulu kala. Sorghum memiliki rasa yang khas, enak dan bermanfaat untuk kesehatan. Sorghum kami sajikan secara alami murni tanpa pengawet, tanpa pewarna dan tanpa MSG. Sorghum merupakan sumber karbohidrat, protein, kalsium, fosfor, zat besi, serta mengandung asam amino esensial & non esensial yang bermanfaat bagi tubuh.\r\n\r\nTidak mengandung gluten, tanpa modifikasi genetik (Non GMO)\r\n100% alami, halal dan menyehatkan.\r\n\r\nTepung Sorghum baik digunakan sebagai bahan pelengkap pembuatan kue, roti, masakan ataupun penyajian makanan favorit Anda sehari-hari.', 1, '2022-07-06 11:32:09', '2022-07-06 11:32:09', NULL),
(7, 'hcEzWMqhBmFyRhHyCr', NULL, 6, 6, 'BSP002', 'simple', 'Biji Sorgum Putih 1kg Sorgum Milion', 'biji-sorgum-putih-1kg-sorgum-milion', '34000.00', NULL, '1000.00', '1.00', '1.00', '1.00', NULL, 'biji sorgum mengandung 3 jenis karbohidrat, yaitu pati, gula terlarut dan serat.\r\nkeunggulan : free gluten, indeks glikemiks lebih rendah dibanding serealia lainnya, mengandung antioksidan, anti tumor.\r\ncocok untuk membuat aneka kue kering dan roti.', 1, '2022-07-06 11:35:02', '2022-07-06 11:35:02', NULL),
(8, 'n1uPtwtqtVQhw4rvKY', NULL, 8, 8, 'BSP001', 'simple', 'Biji Sorgum Putih 1kg  - Sorgum Pahat', 'biji-sorgum-putih-1kg-sorgum-pahat', '34000.00', NULL, '100.00', '1.00', '1.00', '1.00', NULL, 'biji sorgum mengandung 3 jenis karbohidrat, yaitu pati, gula terlarut dan serat.\r\nkeunggulan : free gluten, indeks glikemiks lebih rendah dibanding serealia lainnya, mengandung antioksidan, anti tumor.\r\ncocok untuk membuat aneka kue kering dan roti.\r\n\r\nManfaat sorgum\r\n\r\nBerikut 10 manfaat sorgum untuk kesehatan.\r\n1. Kesehatan Pencernaan\r\n2. Kesehatan Jantung\r\n3. Mencegah Kanker\r\n4. Mengontrol Diabetes\r\n5\r\n6. Kesehatan Tulang\r\n7. Perkembangan Sel Darah Merah\r\n8. Kestabilan Energi\r\n9. Kesehatan Tiroid\r\n10. Meningkatkan Daya Kognitif', 1, '2022-07-06 11:40:29', '2022-07-06 11:40:29', NULL),
(9, 'laUa73DFUwr6fCvMJc', NULL, 9, 9, 'BS001', 'simple', 'Biji Sorgum 1kg - Sorgum Numbu', 'biji-sorgum-1kg-sorgum-numbu', '28000.00', NULL, '100.00', '1.00', '1.00', '1.00', NULL, 'biji sorgum mengandung 3 jenis karbohidrat, yaitu pati, gula terlarut dan serat.\r\nkeunggulan : free gluten, indeks glikemiks lebih rendah dibanding serealia lainnya, mengandung antioksidan, anti tumor.\r\ncocok untuk membuat aneka kue kering dan roti.', 1, '2022-07-06 11:47:54', '2022-07-06 11:47:54', NULL),
(10, 'GD6vQ1JRsVZcqKmKi5', NULL, 9, 9, 'BBS001', 'simple', 'Benih Biji Sorgum 1kg - Sorgum Milion', 'benih-biji-sorgum-1kg-sorgum-milion', '65000.00', NULL, '500.00', '1.00', '1.00', '1.00', NULL, 'Perhatian!!\r\n(ini Benih) Tidak untuk dimakan! tapi untuk ditanam!!!\r\nkarena biji\r\n*Sudah ada lapisan pestisidanya🙏🙏.. jadi berwarna merah\r\n\r\n\r\n\r\n\r\nSorgum (Sorghum spp.) adalah tanaman dari keluarga rumput-rumputan, masih satu keluarga dengan padi, jagung dan gandum. Biji sorgum memiliki kandungan karborhidrat tinggi sehingga dimanfaatkan sebagai makanan pokok, Namun sebagian besar produksi sorgum digunakan untuk pakan ternak. Walaupun demikian, bagi dunia kesehatan sorgum merupakan tanaman yang banyak memiliki nutrisi yang bermanfaat bagi tubuh. Biji sorgum yang telah disosoh kemudian digiling yang kemudian menjadi tepung. Tepung sorgum tersebut dapat dijadikan sebagai campuran kue sehingga dapat mengurangi penggunaan tepung beras yang dibutuhkan untuk kue tersebut. Kue yang bisa dibuat dengan campuran tepung sorgum ini misalnya bolu, nastar, roti, cookies, pop-sorgum, jipang, mie, wajik, dan lapis.', 1, '2022-07-06 11:51:37', '2022-07-06 11:51:37', NULL),
(11, 'oLkKmS6my6KQxRpIy9', NULL, 10, 10, 'TS001', 'simple', 'Tepung Sorgum  1kg - Sorgum Milion', 'tepung-sorgum-1kg-sorgum-milion', '74000.00', NULL, '500.00', '1.00', '1.00', '1.00', NULL, 'Sorghum adalah sumber pangan masa depan yang sudah dikenal sejak dahulu kala. Sorghum memiliki rasa yang khas, enak dan bermanfaat untuk kesehatan. Sorghum kami sajikan secara alami murni tanpa pengawet, tanpa pewarna dan tanpa MSG. Sorghum merupakan sumber karbohidrat, protein, kalsium, fosfor, zat besi, serta mengandung asam amino esensial & non esensial yang bermanfaat bagi tubuh.\r\n\r\nTidak mengandung gluten, tanpa modifikasi genetik (Non GMO)\r\n100% alami, halal dan menyehatkan.\r\n\r\nTepung Sorghum baik digunakan sebagai bahan pelengkap pembuatan kue, roti, masakan ataupun penyajian makanan favorit Anda sehari-hari.', 1, '2022-07-06 11:55:26', '2022-07-06 11:55:26', NULL),
(12, '4flxa2Q1iXjQ3XSKOT', NULL, 11, 11, 'BS001', 'simple', 'Biji Sorgum 1kg - Whole Grain (Pahat)', 'biji-sorgum-1kg-whole-grain-pahat', '38000.00', NULL, '100.00', '1.00', '1.00', '1.00', NULL, 'biji sorgum mengandung 3 jenis karbohidrat, yaitu pati, gula terlarut dan serat.\r\nkeunggulan : free gluten, indeks glikemiks lebih rendah dibanding serealia lainnya, mengandung antioksidan, anti tumor.\r\ncocok untuk membuat aneka kue kering dan roti.', 1, '2022-07-06 12:14:13', '2022-07-06 12:14:13', NULL),
(13, 'o2GXjSpUmUgT9RZ8im', NULL, 11, 11, 'BS002', 'simple', 'Biji Sorgum 1kg - Whole Grain (Milion)', 'biji-sorgum-1kg-whole-grain-milion', '38000.00', NULL, '100.00', '1.00', '1.00', '1.00', NULL, 'biji sorgum mengandung 3 jenis karbohidrat, yaitu pati, gula terlarut dan serat.\r\nkeunggulan : free gluten, indeks glikemiks lebih rendah dibanding serealia lainnya, mengandung antioksidan, anti tumor.\r\ncocok untuk membuat aneka kue kering dan roti.', 1, '2022-07-06 12:25:27', '2022-07-06 12:25:27', NULL),
(14, '5GJIXguZT6gOrbtO6Q', NULL, 11, 11, 'BS003', 'simple', 'Biji Sorgum 1kg - Whole Grain (Numbu)', 'biji-sorgum-1kg-whole-grain-numbu', '38000.00', NULL, '100.00', '1.00', '1.00', '1.00', NULL, 'biji sorgum mengandung 3 jenis karbohidrat, yaitu pati, gula terlarut dan serat.\r\nkeunggulan : free gluten, indeks glikemiks lebih rendah dibanding serealia lainnya, mengandung antioksidan, anti tumor.\r\ncocok untuk membuat aneka kue kering dan roti.', 1, '2022-07-06 12:26:34', '2022-07-06 12:26:34', NULL),
(15, 'zdeiySBBKeWGBUDEWD', NULL, 11, 11, 'BS004', 'simple', 'Biji Sorgum 1kg - Whole Grain (Tortillero)', 'biji-sorgum-1kg-whole-grain-tortillero', '38000.00', NULL, '100.00', '1.00', '1.00', '1.00', NULL, 'biji sorgum mengandung 3 jenis karbohidrat, yaitu pati, gula terlarut dan serat.\r\nkeunggulan : free gluten, indeks glikemiks lebih rendah dibanding serealia lainnya, mengandung antioksidan, anti tumor.\r\ncocok untuk membuat aneka kue kering dan roti.', 1, '2022-07-06 12:28:17', '2022-07-06 12:28:17', NULL),
(16, 'VwWJQ5eld2KAdK3DDf', NULL, 12, 12, 'BBS001', 'simple', 'Benih Biji Sorgum 1kg - Sorgum Numbu', 'benih-biji-sorgum-1kg-sorgum-numbu', '50000.00', NULL, '100.00', NULL, NULL, NULL, NULL, 'Perhatian!!\r\n(ini Benih) Tidak untuk dimakan! tapi untuk ditanam!!!\r\nkarena biji\r\n*Sudah ada lapisan pestisidanya🙏🙏.. jadi berwarna merah\r\n\r\n\r\n\r\n\r\nSorgum (Sorghum spp.) adalah tanaman dari keluarga rumput-rumputan, masih satu keluarga dengan padi, jagung dan gandum. Biji sorgum memiliki kandungan karborhidrat tinggi sehingga dimanfaatkan sebagai makanan pokok, Namun sebagian besar produksi sorgum digunakan untuk pakan ternak. Walaupun demikian, bagi dunia kesehatan sorgum merupakan tanaman yang banyak memiliki nutrisi yang bermanfaat bagi tubuh. Biji sorgum yang telah disosoh kemudian digiling yang kemudian menjadi tepung. Tepung sorgum tersebut dapat dijadikan sebagai campuran kue sehingga dapat mengurangi penggunaan tepung beras yang dibutuhkan untuk kue tersebut. Kue yang bisa dibuat dengan campuran tepung sorgum ini misalnya bolu, nastar, roti, cookies, pop-sorgum, jipang, mie, wajik, dan lapis.', 1, '2022-07-06 16:08:08', '2022-07-06 16:08:08', NULL),
(17, 'w5pEp4tFdvR38Qr7mC', NULL, 13, 13, 'TS001', 'simple', 'Tepung Sorgum  1kg - Sorgum Pahat', 'tepung-sorgum-1kg-sorgum-pahat', '77000.00', NULL, '500.00', '1.00', '1.00', '1.00', NULL, 'Sorghum adalah sumber pangan masa depan yang sudah dikenal sejak dahulu kala. Sorghum memiliki rasa yang khas, enak dan bermanfaat untuk kesehatan. Sorghum kami sajikan secara alami murni tanpa pengawet, tanpa pewarna dan tanpa MSG. Sorghum merupakan sumber karbohidrat, protein, kalsium, fosfor, zat besi, serta mengandung asam amino esensial & non esensial yang bermanfaat bagi tubuh.\r\n\r\nTidak mengandung gluten, tanpa modifikasi genetik (Non GMO)\r\n100% alami, halal dan menyehatkan.\r\n\r\nTepung Sorghum baik digunakan sebagai bahan pelengkap pembuatan kue, roti, masakan ataupun penyajian makanan favorit Anda sehari-hari.', 1, '2022-07-06 16:10:58', '2022-07-06 16:10:58', NULL),
(18, 'CObCgNIPGZfEymCvdW', NULL, 13, 13, 'TS002', 'simple', 'Tepung Sorgum  1kg - Sorgum Milion', 'tepung-sorgum-1kg-sorgum-milion', '74000.00', NULL, '1000.00', '1.00', '1.00', '1.00', NULL, 'Sorghum adalah sumber pangan masa depan yang sudah dikenal sejak dahulu kala. Sorghum memiliki rasa yang khas, enak dan bermanfaat untuk kesehatan. Sorghum kami sajikan secara alami murni tanpa pengawet, tanpa pewarna dan tanpa MSG. Sorghum merupakan sumber karbohidrat, protein, kalsium, fosfor, zat besi, serta mengandung asam amino esensial & non esensial yang bermanfaat bagi tubuh.\r\n\r\nTidak mengandung gluten, tanpa modifikasi genetik (Non GMO)\r\n100% alami, halal dan menyehatkan.\r\n\r\nTepung Sorghum baik digunakan sebagai bahan pelengkap pembuatan kue, roti, masakan ataupun penyajian makanan favorit Anda sehari-hari.', 1, '2022-07-06 16:11:47', '2022-07-06 16:11:47', NULL),
(19, 'dN5OY4ZNXWxhqSao5a', NULL, 14, 14, 'TS001', 'simple', 'Tepung Sorgum  1kg - Sorgum Pahat', 'tepung-sorgum-1kg-sorgum-pahat', '77000.00', NULL, '1000.00', '1.00', '1.00', '1.00', NULL, 'Sorghum adalah sumber pangan masa depan yang sudah dikenal sejak dahulu kala. Sorghum memiliki rasa yang khas, enak dan bermanfaat untuk kesehatan. Sorghum kami sajikan secara alami murni tanpa pengawet, tanpa pewarna dan tanpa MSG. Sorghum merupakan sumber karbohidrat, protein, kalsium, fosfor, zat besi, serta mengandung asam amino esensial & non esensial yang bermanfaat bagi tubuh.\r\n\r\nTidak mengandung gluten, tanpa modifikasi genetik (Non GMO)\r\n100% alami, halal dan menyehatkan.\r\n\r\nTepung Sorghum baik digunakan sebagai bahan pelengkap pembuatan kue, roti, masakan ataupun penyajian makanan favorit Anda sehari-hari.', 1, '2022-07-06 16:13:56', '2022-07-06 16:13:56', NULL),
(20, 'sF6ULQCea4b1C0GX9l', NULL, 14, 14, 'TS002', 'simple', 'Tepung Sorgum  1kg - Sorgum Milion', 'tepung-sorgum-1kg-sorgum-milion', '74000.00', NULL, '1000.00', '1.00', '1.00', '1.00', NULL, 'Sorghum adalah sumber pangan masa depan yang sudah dikenal sejak dahulu kala. Sorghum memiliki rasa yang khas, enak dan bermanfaat untuk kesehatan. Sorghum kami sajikan secara alami murni tanpa pengawet, tanpa pewarna dan tanpa MSG. Sorghum merupakan sumber karbohidrat, protein, kalsium, fosfor, zat besi, serta mengandung asam amino esensial & non esensial yang bermanfaat bagi tubuh.\r\n\r\nTidak mengandung gluten, tanpa modifikasi genetik (Non GMO)\r\n100% alami, halal dan menyehatkan.\r\n\r\nTepung Sorghum baik digunakan sebagai bahan pelengkap pembuatan kue, roti, masakan ataupun penyajian makanan favorit Anda sehari-hari.', 1, '2022-07-06 16:14:44', '2022-07-06 16:14:44', NULL),
(21, 'EULblaNEPZS3VaAEmt', NULL, 15, 15, 'TS001', 'simple', 'Tepung Sorgum  1kg - Sorgum Pahat', 'tepung-sorgum-1kg-sorgum-pahat', '77000.00', NULL, '1000.00', '1.00', '1.00', '1.00', NULL, 'Sorghum adalah sumber pangan masa depan yang sudah dikenal sejak dahulu kala. Sorghum memiliki rasa yang khas, enak dan bermanfaat untuk kesehatan. Sorghum kami sajikan secara alami murni tanpa pengawet, tanpa pewarna dan tanpa MSG. Sorghum merupakan sumber karbohidrat, protein, kalsium, fosfor, zat besi, serta mengandung asam amino esensial & non esensial yang bermanfaat bagi tubuh.\r\n\r\nTidak mengandung gluten, tanpa modifikasi genetik (Non GMO)\r\n100% alami, halal dan menyehatkan.\r\n\r\nTepung Sorghum baik digunakan sebagai bahan pelengkap pembuatan kue, roti, masakan ataupun penyajian makanan favorit Anda sehari-hari.', 1, '2022-07-06 16:16:42', '2022-07-06 16:16:42', NULL),
(22, 'bfPjGTkzycWI8X8GYI', NULL, 16, 16, 'TS001', 'simple', 'Tepung Sorgum  1kg - Sorgum Pahat', 'tepung-sorgum-1kg-sorgum-pahat', '77000.00', NULL, '1000.00', '1.00', '1.00', '1.00', NULL, 'Sorghum adalah sumber pangan masa depan yang sudah dikenal sejak dahulu kala. Sorghum memiliki rasa yang khas, enak dan bermanfaat untuk kesehatan. Sorghum kami sajikan secara alami murni tanpa pengawet, tanpa pewarna dan tanpa MSG. Sorghum merupakan sumber karbohidrat, protein, kalsium, fosfor, zat besi, serta mengandung asam amino esensial & non esensial yang bermanfaat bagi tubuh.\r\n\r\nTidak mengandung gluten, tanpa modifikasi genetik (Non GMO)\r\n100% alami, halal dan menyehatkan.\r\n\r\nTepung Sorghum baik digunakan sebagai bahan pelengkap pembuatan kue, roti, masakan ataupun penyajian makanan favorit Anda sehari-hari.', 1, '2022-07-06 16:19:05', '2022-07-06 16:19:05', NULL),
(23, 'ilVMym8G5H9DWMRzOw', NULL, 17, 17, 'BS001', 'simple', 'Biji Sorgum 1kg - Sorgum Numbu', 'biji-sorgum-1kg-sorgum-numbu', '40000.00', NULL, '1000.00', '1.00', '1.00', '1.00', NULL, 'biji sorgum mengandung 3 jenis karbohidrat, yaitu pati, gula terlarut dan serat.\r\nkeunggulan : free gluten, indeks glikemiks lebih rendah dibanding serealia lainnya, mengandung antioksidan, anti tumor.\r\ncocok untuk membuat aneka kue kering dan roti.', 1, '2022-07-06 16:30:32', '2022-07-06 16:30:32', NULL),
(24, 'FK8ldIMp5FJfIS4kyi', NULL, 18, 18, 'TS001', 'simple', 'Tepung Sorgum  1kg - Sorgum Tortillero', 'tepung-sorgum-1kg-sorgum-tortillero', '77000.00', NULL, '100.00', '1.00', '1.00', '1.00', NULL, 'Sorghum adalah sumber pangan masa depan yang sudah dikenal sejak dahulu kala. Sorghum memiliki rasa yang khas, enak dan bermanfaat untuk kesehatan. Sorghum kami sajikan secara alami murni tanpa pengawet, tanpa pewarna dan tanpa MSG. Sorghum merupakan sumber karbohidrat, protein, kalsium, fosfor, zat besi, serta mengandung asam amino esensial & non esensial yang bermanfaat bagi tubuh.\r\n\r\nTidak mengandung gluten, tanpa modifikasi genetik (Non GMO)\r\n100% alami, halal dan menyehatkan.\r\n\r\nTepung Sorghum baik digunakan sebagai bahan pelengkap pembuatan kue, roti, masakan ataupun penyajian makanan favorit Anda sehari-hari.', 1, '2022-07-06 16:32:28', '2022-07-06 16:32:28', NULL),
(25, 'Nw3ZhotYNAR8eOVUfm', NULL, 19, 19, 'BS001', 'simple', 'Benih Biji Sorgum 1kg - Sorgum Milion', 'benih-biji-sorgum-1kg-sorgum-milion', '50000.00', NULL, '100.00', '1.00', '1.00', '1.00', NULL, 'Perhatian!!\r\n(ini Benih) Tidak untuk dimakan! tapi untuk ditanam!!!\r\nkarena biji\r\n*Sudah ada lapisan pestisidanya🙏🙏.. jadi berwarna merah\r\n\r\n\r\n\r\n\r\nSorgum (Sorghum spp.) adalah tanaman dari keluarga rumput-rumputan, masih satu keluarga dengan padi, jagung dan gandum. Biji sorgum memiliki kandungan karborhidrat tinggi sehingga dimanfaatkan sebagai makanan pokok, Namun sebagian besar produksi sorgum digunakan untuk pakan ternak. Walaupun demikian, bagi dunia kesehatan sorgum merupakan tanaman yang banyak memiliki nutrisi yang bermanfaat bagi tubuh. Biji sorgum yang telah disosoh kemudian digiling yang kemudian menjadi tepung. Tepung sorgum tersebut dapat dijadikan sebagai campuran kue sehingga dapat mengurangi penggunaan tepung beras yang dibutuhkan untuk kue tersebut. Kue yang bisa dibuat dengan campuran tepung sorgum ini misalnya bolu, nastar, roti, cookies, pop-sorgum, jipang, mie, wajik, dan lapis.', 1, '2022-07-06 16:34:29', '2022-07-06 16:34:29', NULL),
(26, 'elW6CD3PPJSfgqaJ1q', NULL, 20, 20, 'BS001', 'simple', 'Biji Sorgum 1kg - Sorgum Numbu', 'biji-sorgum-1kg-sorgum-numbu', '40000.00', NULL, '100.00', '1.00', '1.00', '1.00', NULL, 'biji sorgum mengandung 3 jenis karbohidrat, yaitu pati, gula terlarut dan serat.\r\nkeunggulan : free gluten, indeks glikemiks lebih rendah dibanding serealia lainnya, mengandung antioksidan, anti tumor.\r\ncocok untuk membuat aneka kue kering dan roti.', 1, '2022-07-06 16:36:35', '2022-07-06 16:36:35', NULL),
(27, 'W0e3AyR3Ona0la7PEz', NULL, 21, 21, 'MS001', 'simple', 'Mie Sorgum', 'mie-sorgum', '48000.00', NULL, '500.00', '1.00', '1.00', '1.00', NULL, 'Mi instan sorgum dilengkapi sayuran dan buah. All varian. Kelor, sawi, wortel, buah naga. Sangat cocok untuk program diet glukosa, full serat, non gluten. Nilai gizi Sorgum (Sorghum spp.) adalah tanaman serbaguna yang dapat digunakan sebagai sumber pangan, pakan ternak dan bahan baku industri. Sebagai bahan pangan, sorgum berada pada urutan ke-5 setelah gandum, jagung, padi, dan jelai. Sorgum merupakan makanan pokok penting di Asia Selatan dan Afrika sub-sahara.', 1, '2022-07-06 16:39:13', '2022-07-06 16:39:13', NULL),
(28, '0qpZsHXdigxp8XGbP2', NULL, 22, 22, 'BS001', 'simple', 'Biji Sorgum 1kg - Sorgum Pahat', 'biji-sorgum-1kg-sorgum-pahat', '40000.00', NULL, '100.00', '1.00', '1.00', '1.00', NULL, 'biji sorgum mengandung 3 jenis karbohidrat, yaitu pati, gula terlarut dan serat.\r\nkeunggulan : free gluten, indeks glikemiks lebih rendah dibanding serealia lainnya, mengandung antioksidan, anti tumor.\r\ncocok untuk membuat aneka kue kering dan roti.', 1, '2022-07-06 16:41:24', '2022-07-06 16:41:24', NULL),
(29, 'SqntC2p5RUhU7zc0mx', NULL, 23, 23, 'BS001', 'simple', 'Biji Sorgum 1kg - Sorgum Pahat', 'biji-sorgum-1kg-sorgum-pahat', '40000.00', NULL, '100.00', '1.00', '1.00', '1.00', NULL, 'biji sorgum mengandung 3 jenis karbohidrat, yaitu pati, gula terlarut dan serat.\r\nkeunggulan : free gluten, indeks glikemiks lebih rendah dibanding serealia lainnya, mengandung antioksidan, anti tumor.\r\ncocok untuk membuat aneka kue kering dan roti.', 1, '2022-07-06 16:43:14', '2022-07-06 16:43:14', NULL),
(30, 'K5S0bpzfKdhQW1BRjC', NULL, 24, 24, 'BS001', 'simple', 'Biji Sorgum 1kg - Whole Grain (Pahat)', 'biji-sorgum-1kg-whole-grain-pahat', '35000.00', NULL, '100.00', '1.00', '1.00', '1.00', NULL, 'biji sorgum mengandung 3 jenis karbohidrat, yaitu pati, gula terlarut dan serat.\r\nkeunggulan : free gluten, indeks glikemiks lebih rendah dibanding serealia lainnya, mengandung antioksidan, anti tumor.\r\ncocok untuk membuat aneka kue kering dan roti.', 1, '2022-07-06 16:45:30', '2022-07-06 16:45:30', NULL),
(31, 'cuEoDbN7MMVhVxRVN0', NULL, 24, 24, 'BS002', 'simple', 'Biji Sorgum 1kg - Whole Grain (Milion)', 'biji-sorgum-1kg-whole-grain-milion', '35000.00', NULL, '100.00', '1.00', '1.00', '1.00', NULL, 'biji sorgum mengandung 3 jenis karbohidrat, yaitu pati, gula terlarut dan serat.\r\nkeunggulan : free gluten, indeks glikemiks lebih rendah dibanding serealia lainnya, mengandung antioksidan, anti tumor.\r\ncocok untuk membuat aneka kue kering dan roti.', 1, '2022-07-06 16:46:28', '2022-07-06 16:46:28', NULL),
(32, 'QlHrc7BZlpl38CPiRc', NULL, 24, 24, 'BS003', 'simple', 'Biji Sorgum 1kg - Whole Grain (Numbu)', 'biji-sorgum-1kg-whole-grain-numbu', '35000.00', NULL, '100.00', '1.00', '1.00', '1.00', NULL, 'biji sorgum mengandung 3 jenis karbohidrat, yaitu pati, gula terlarut dan serat.\r\nkeunggulan : free gluten, indeks glikemiks lebih rendah dibanding serealia lainnya, mengandung antioksidan, anti tumor.\r\ncocok untuk membuat aneka kue kering dan roti.', 1, '2022-07-06 16:47:41', '2022-07-06 16:47:41', NULL),
(33, 'a0UTcZyxeH2N2FW9iS', NULL, 25, 25, 'BS001', 'simple', 'Biji Sorgum 1kg - Sorgum Pahat', 'biji-sorgum-1kg-sorgum-pahat', '40000.00', NULL, '1000.00', '1.00', '1.00', '1.00', NULL, 'biji sorgum mengandung 3 jenis karbohidrat, yaitu pati, gula terlarut dan serat.\r\nkeunggulan : free gluten, indeks glikemiks lebih rendah dibanding serealia lainnya, mengandung antioksidan, anti tumor.\r\ncocok untuk membuat aneka kue kering dan roti.', 1, '2022-07-06 16:50:46', '2022-07-06 16:50:46', NULL),
(34, 'TxLWhVkWcEL732Lmla', NULL, 25, 25, 'BS002', 'simple', 'Biji Sorgum 1kg - Sorgum Numbu', 'biji-sorgum-1kg-sorgum-numbu', '45000.00', NULL, '1000.00', '1.00', '1.00', '1.00', NULL, 'biji sorgum mengandung 3 jenis karbohidrat, yaitu pati, gula terlarut dan serat.\r\nkeunggulan : free gluten, indeks glikemiks lebih rendah dibanding serealia lainnya, mengandung antioksidan, anti tumor.\r\ncocok untuk membuat aneka kue kering dan roti.', 1, '2022-07-06 16:51:57', '2022-07-06 16:51:57', NULL),
(35, 'HAT8CI4RkG9teRRQZI', NULL, 26, 26, 'BS001', 'simple', 'Biji Sorgum 1kg - Sorgum Pahat', 'biji-sorgum-1kg-sorgum-pahat', '40000.00', NULL, '1000.00', '1.00', '1.00', '1.00', NULL, 'biji sorgum mengandung 3 jenis karbohidrat, yaitu pati, gula terlarut dan serat.\r\nkeunggulan : free gluten, indeks glikemiks lebih rendah dibanding serealia lainnya, mengandung antioksidan, anti tumor.\r\ncocok untuk membuat aneka kue kering dan roti.', 1, '2022-07-06 16:53:42', '2022-07-06 16:53:42', NULL),
(36, 'KCX6S8y9T7zmBzzGHP', NULL, 27, 27, 'KS001', 'simple', 'Kecap Manis Sorgum', 'kecap-manis-sorgum', '35000.00', NULL, '500.00', '1.00', '1.00', '1.00', NULL, 'Gluten Free Non GMO, Non Soy, Aman Untuk Diabet /Diabetes\r\n\r\nKecap Sorghum merupakan inovasi yang kami ciptakan untuk konsumen kecap di Indonesia, dibuat dari biji sorghum pilihan, sehingga aman bagi konsumen yang alergi terhadap kedelai.\r\n\r\nPerpaduan antara gula kelapa non-sulfit dengan nektar sorghum dan rempah - rempah pilihan yang menghasilkan cita rasa sempurna bagi setiap masakan.', 1, '2022-07-06 16:56:17', '2022-07-06 16:56:17', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_attribute_values`
--

CREATE TABLE `product_attribute_values` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `parent_product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `attribute_id` bigint(20) UNSIGNED NOT NULL,
  `text_value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `boolean_value` tinyint(1) DEFAULT NULL,
  `integer_value` int(11) DEFAULT NULL,
  `float_value` decimal(8,2) DEFAULT NULL,
  `datetime_value` datetime DEFAULT NULL,
  `date_value` date DEFAULT NULL,
  `json_value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_brands`
--

CREATE TABLE `product_brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `product_brands`
--

INSERT INTO `product_brands` (`id`, `product_id`, `brand_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 2),
(4, 4, 2),
(5, 5, 2),
(6, 6, 2),
(7, 8, 2),
(8, 9, 2),
(9, 10, 2),
(10, 11, 2),
(11, 12, 2),
(12, 13, 2),
(13, 14, 2),
(14, 15, 2),
(15, 16, 2),
(16, 17, 2),
(17, 18, 2),
(18, 19, 2),
(19, 20, 2),
(20, 21, 2),
(21, 22, 2),
(22, 23, 2),
(23, 24, 2),
(24, 25, 2),
(25, 26, 2),
(26, 27, 2),
(27, 28, 2),
(28, 29, 2),
(29, 30, 2),
(30, 31, 2),
(31, 32, 2),
(32, 33, 2),
(33, 34, 2),
(34, 35, 2),
(35, 36, 2),
(36, 37, 2),
(37, 38, 2),
(38, 39, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `product_categories`
--

INSERT INTO `product_categories` (`id`, `product_id`, `category_id`) VALUES
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 4),
(6, 6, 5),
(7, 7, 4),
(8, 8, 4),
(9, 9, 7),
(10, 10, 6),
(11, 11, 5),
(12, 12, 7),
(13, 13, 7),
(14, 14, 7),
(15, 15, 7),
(16, 16, 7),
(17, 17, 5),
(18, 18, 5),
(19, 19, 5),
(20, 20, 5),
(21, 21, 5),
(22, 22, 5),
(23, 23, 7),
(24, 24, 5),
(25, 25, 6),
(26, 26, 7),
(27, 27, 8),
(28, 28, 7),
(29, 29, 7),
(30, 30, 7),
(31, 31, 7),
(32, 32, 7),
(33, 33, 7),
(34, 34, 7),
(35, 35, 7),
(36, 36, 9),
(37, 37, 3),
(38, 38, 4),
(39, 39, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `extra_large` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `large` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medium` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `small` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `path`, `extra_large`, `large`, `medium`, `small`, `created_at`, `updated_at`) VALUES
(1, 1, 'uploads/images/original/sorguma_1654755434.jpg', 'uploads/images/xlarge/sorguma_1654755434.jpg', 'uploads/images/large/sorguma_1654755434.jpg', 'uploads/images/medium/sorguma_1654755434.jpg', 'uploads/images/small/sorguma_1654755434.jpg', '2022-06-08 23:17:14', '2022-06-08 23:17:14'),
(2, 36, 'uploads/images/original/kecap-manis-sorgum_1657165991.jpg', 'uploads/images/xlarge/kecap-manis-sorgum_1657165991.jpg', 'uploads/images/large/kecap-manis-sorgum_1657165991.jpg', 'uploads/images/medium/kecap-manis-sorgum_1657165991.jpg', 'uploads/images/small/kecap-manis-sorgum_1657165991.jpg', '2022-07-07 03:53:12', '2022-07-07 03:53:12'),
(3, 2, 'uploads/images/original/biji-sorgum-merah-1kg_1657179332.png', 'uploads/images/xlarge/biji-sorgum-merah-1kg_1657179332.png', 'uploads/images/large/biji-sorgum-merah-1kg_1657179332.png', 'uploads/images/medium/biji-sorgum-merah-1kg_1657179332.png', 'uploads/images/small/biji-sorgum-merah-1kg_1657179332.png', '2022-07-07 07:35:33', '2022-07-07 07:35:33'),
(4, 3, 'uploads/images/original/tepung-sorgum-putih-1kg_1657179438.jpg', 'uploads/images/xlarge/tepung-sorgum-putih-1kg_1657179438.jpg', 'uploads/images/large/tepung-sorgum-putih-1kg_1657179438.jpg', 'uploads/images/medium/tepung-sorgum-putih-1kg_1657179438.jpg', 'uploads/images/small/tepung-sorgum-putih-1kg_1657179438.jpg', '2022-07-07 07:37:18', '2022-07-07 07:37:18'),
(5, 4, 'uploads/images/original/biji-sorgum-putih-1kg_1657179512.jpg', 'uploads/images/xlarge/biji-sorgum-putih-1kg_1657179512.jpg', 'uploads/images/large/biji-sorgum-putih-1kg_1657179512.jpg', 'uploads/images/medium/biji-sorgum-putih-1kg_1657179512.jpg', 'uploads/images/small/biji-sorgum-putih-1kg_1657179512.jpg', '2022-07-07 07:38:32', '2022-07-07 07:38:32'),
(6, 7, 'uploads/images/original/biji-sorgum-putih-1kg-sorgum-milion_1657179581.jpg', 'uploads/images/xlarge/biji-sorgum-putih-1kg-sorgum-milion_1657179581.jpg', 'uploads/images/large/biji-sorgum-putih-1kg-sorgum-milion_1657179581.jpg', 'uploads/images/medium/biji-sorgum-putih-1kg-sorgum-milion_1657179581.jpg', 'uploads/images/small/biji-sorgum-putih-1kg-sorgum-milion_1657179581.jpg', '2022-07-07 07:39:41', '2022-07-07 07:39:41'),
(7, 5, 'uploads/images/original/biji-sorgum-putih-1kg_1657179602.png', 'uploads/images/xlarge/biji-sorgum-putih-1kg_1657179602.png', 'uploads/images/large/biji-sorgum-putih-1kg_1657179602.png', 'uploads/images/medium/biji-sorgum-putih-1kg_1657179602.png', 'uploads/images/small/biji-sorgum-putih-1kg_1657179602.png', '2022-07-07 07:40:03', '2022-07-07 07:40:03'),
(8, 6, 'uploads/images/original/tepung-sorgum-1kg-sorgum-milion_1657179694.jpg', 'uploads/images/xlarge/tepung-sorgum-1kg-sorgum-milion_1657179694.jpg', 'uploads/images/large/tepung-sorgum-1kg-sorgum-milion_1657179694.jpg', 'uploads/images/medium/tepung-sorgum-1kg-sorgum-milion_1657179694.jpg', 'uploads/images/small/tepung-sorgum-1kg-sorgum-milion_1657179694.jpg', '2022-07-07 07:41:34', '2022-07-07 07:41:34'),
(9, 8, 'uploads/images/original/biji-sorgum-putih-1kg-sorgum-pahat_1657179771.jpg', 'uploads/images/xlarge/biji-sorgum-putih-1kg-sorgum-pahat_1657179771.jpg', 'uploads/images/large/biji-sorgum-putih-1kg-sorgum-pahat_1657179771.jpg', 'uploads/images/medium/biji-sorgum-putih-1kg-sorgum-pahat_1657179771.jpg', 'uploads/images/small/biji-sorgum-putih-1kg-sorgum-pahat_1657179771.jpg', '2022-07-07 07:42:52', '2022-07-07 07:42:52'),
(10, 9, 'uploads/images/original/biji-sorgum-1kg-sorgum-numbu_1657179938.jpg', 'uploads/images/xlarge/biji-sorgum-1kg-sorgum-numbu_1657179938.jpg', 'uploads/images/large/biji-sorgum-1kg-sorgum-numbu_1657179938.jpg', 'uploads/images/medium/biji-sorgum-1kg-sorgum-numbu_1657179938.jpg', 'uploads/images/small/biji-sorgum-1kg-sorgum-numbu_1657179938.jpg', '2022-07-07 07:45:38', '2022-07-07 07:45:38'),
(11, 10, 'uploads/images/original/benih-biji-sorgum-1kg-sorgum-milion_1657179959.jpg', 'uploads/images/xlarge/benih-biji-sorgum-1kg-sorgum-milion_1657179959.jpg', 'uploads/images/large/benih-biji-sorgum-1kg-sorgum-milion_1657179959.jpg', 'uploads/images/medium/benih-biji-sorgum-1kg-sorgum-milion_1657179959.jpg', 'uploads/images/small/benih-biji-sorgum-1kg-sorgum-milion_1657179959.jpg', '2022-07-07 07:46:00', '2022-07-07 07:46:00'),
(12, 11, 'uploads/images/original/tepung-sorgum-1kg-sorgum-milion_1657180097.jpg', 'uploads/images/xlarge/tepung-sorgum-1kg-sorgum-milion_1657180097.jpg', 'uploads/images/large/tepung-sorgum-1kg-sorgum-milion_1657180097.jpg', 'uploads/images/medium/tepung-sorgum-1kg-sorgum-milion_1657180097.jpg', 'uploads/images/small/tepung-sorgum-1kg-sorgum-milion_1657180097.jpg', '2022-07-07 07:48:18', '2022-07-07 07:48:18'),
(13, 15, 'uploads/images/original/biji-sorgum-1kg-whole-grain-tortillero_1657180182.jpg', 'uploads/images/xlarge/biji-sorgum-1kg-whole-grain-tortillero_1657180182.jpg', 'uploads/images/large/biji-sorgum-1kg-whole-grain-tortillero_1657180182.jpg', 'uploads/images/medium/biji-sorgum-1kg-whole-grain-tortillero_1657180182.jpg', 'uploads/images/small/biji-sorgum-1kg-whole-grain-tortillero_1657180182.jpg', '2022-07-07 07:49:43', '2022-07-07 07:49:43'),
(14, 12, 'uploads/images/original/biji-sorgum-1kg-whole-grain-pahat_1657180200.png', 'uploads/images/xlarge/biji-sorgum-1kg-whole-grain-pahat_1657180200.png', 'uploads/images/large/biji-sorgum-1kg-whole-grain-pahat_1657180200.png', 'uploads/images/medium/biji-sorgum-1kg-whole-grain-pahat_1657180200.png', 'uploads/images/small/biji-sorgum-1kg-whole-grain-pahat_1657180200.png', '2022-07-07 07:50:01', '2022-07-07 07:50:01'),
(15, 14, 'uploads/images/original/biji-sorgum-1kg-whole-grain-numbu_1657180299.jpg', 'uploads/images/xlarge/biji-sorgum-1kg-whole-grain-numbu_1657180299.jpg', 'uploads/images/large/biji-sorgum-1kg-whole-grain-numbu_1657180299.jpg', 'uploads/images/medium/biji-sorgum-1kg-whole-grain-numbu_1657180299.jpg', 'uploads/images/small/biji-sorgum-1kg-whole-grain-numbu_1657180299.jpg', '2022-07-07 07:51:39', '2022-07-07 07:51:39'),
(16, 13, 'uploads/images/original/biji-sorgum-1kg-whole-grain-milion_1657180338.jpg', 'uploads/images/xlarge/biji-sorgum-1kg-whole-grain-milion_1657180338.jpg', 'uploads/images/large/biji-sorgum-1kg-whole-grain-milion_1657180338.jpg', 'uploads/images/medium/biji-sorgum-1kg-whole-grain-milion_1657180338.jpg', 'uploads/images/small/biji-sorgum-1kg-whole-grain-milion_1657180338.jpg', '2022-07-07 07:52:19', '2022-07-07 07:52:19'),
(17, 16, 'uploads/images/original/benih-biji-sorgum-1kg-sorgum-numbu_1657180572.jpg', 'uploads/images/xlarge/benih-biji-sorgum-1kg-sorgum-numbu_1657180572.jpg', 'uploads/images/large/benih-biji-sorgum-1kg-sorgum-numbu_1657180572.jpg', 'uploads/images/medium/benih-biji-sorgum-1kg-sorgum-numbu_1657180572.jpg', 'uploads/images/small/benih-biji-sorgum-1kg-sorgum-numbu_1657180572.jpg', '2022-07-07 07:56:12', '2022-07-07 07:56:12'),
(18, 17, 'uploads/images/original/tepung-sorgum-1kg-sorgum-pahat_1657180685.jpg', 'uploads/images/xlarge/tepung-sorgum-1kg-sorgum-pahat_1657180685.jpg', 'uploads/images/large/tepung-sorgum-1kg-sorgum-pahat_1657180685.jpg', 'uploads/images/medium/tepung-sorgum-1kg-sorgum-pahat_1657180685.jpg', 'uploads/images/small/tepung-sorgum-1kg-sorgum-pahat_1657180685.jpg', '2022-07-07 07:58:06', '2022-07-07 07:58:06'),
(19, 18, 'uploads/images/original/tepung-sorgum-1kg-sorgum-milion_1657180715.jpg', 'uploads/images/xlarge/tepung-sorgum-1kg-sorgum-milion_1657180715.jpg', 'uploads/images/large/tepung-sorgum-1kg-sorgum-milion_1657180715.jpg', 'uploads/images/medium/tepung-sorgum-1kg-sorgum-milion_1657180715.jpg', 'uploads/images/small/tepung-sorgum-1kg-sorgum-milion_1657180715.jpg', '2022-07-07 07:58:36', '2022-07-07 07:58:36'),
(20, 19, 'uploads/images/original/tepung-sorgum-1kg-sorgum-pahat_1657180797.jpg', 'uploads/images/xlarge/tepung-sorgum-1kg-sorgum-pahat_1657180797.jpg', 'uploads/images/large/tepung-sorgum-1kg-sorgum-pahat_1657180797.jpg', 'uploads/images/medium/tepung-sorgum-1kg-sorgum-pahat_1657180797.jpg', 'uploads/images/small/tepung-sorgum-1kg-sorgum-pahat_1657180797.jpg', '2022-07-07 07:59:57', '2022-07-07 07:59:57'),
(21, 20, 'uploads/images/original/tepung-sorgum-1kg-sorgum-milion_1657180816.jpg', 'uploads/images/xlarge/tepung-sorgum-1kg-sorgum-milion_1657180816.jpg', 'uploads/images/large/tepung-sorgum-1kg-sorgum-milion_1657180816.jpg', 'uploads/images/medium/tepung-sorgum-1kg-sorgum-milion_1657180816.jpg', 'uploads/images/small/tepung-sorgum-1kg-sorgum-milion_1657180816.jpg', '2022-07-07 08:00:16', '2022-07-07 08:00:16'),
(22, 21, 'uploads/images/original/tepung-sorgum-1kg-sorgum-pahat_1657180940.jpg', 'uploads/images/xlarge/tepung-sorgum-1kg-sorgum-pahat_1657180940.jpg', 'uploads/images/large/tepung-sorgum-1kg-sorgum-pahat_1657180940.jpg', 'uploads/images/medium/tepung-sorgum-1kg-sorgum-pahat_1657180940.jpg', 'uploads/images/small/tepung-sorgum-1kg-sorgum-pahat_1657180940.jpg', '2022-07-07 08:02:20', '2022-07-07 08:02:20'),
(23, 22, 'uploads/images/original/tepung-sorgum-1kg-sorgum-pahat_1657181012.jpg', 'uploads/images/xlarge/tepung-sorgum-1kg-sorgum-pahat_1657181012.jpg', 'uploads/images/large/tepung-sorgum-1kg-sorgum-pahat_1657181012.jpg', 'uploads/images/medium/tepung-sorgum-1kg-sorgum-pahat_1657181012.jpg', 'uploads/images/small/tepung-sorgum-1kg-sorgum-pahat_1657181012.jpg', '2022-07-07 08:03:32', '2022-07-07 08:03:32'),
(24, 23, 'uploads/images/original/biji-sorgum-1kg-sorgum-numbu_1657181466.jpg', 'uploads/images/xlarge/biji-sorgum-1kg-sorgum-numbu_1657181466.jpg', 'uploads/images/large/biji-sorgum-1kg-sorgum-numbu_1657181466.jpg', 'uploads/images/medium/biji-sorgum-1kg-sorgum-numbu_1657181466.jpg', 'uploads/images/small/biji-sorgum-1kg-sorgum-numbu_1657181466.jpg', '2022-07-07 08:11:07', '2022-07-07 08:11:07'),
(25, 24, 'uploads/images/original/tepung-sorgum-1kg-sorgum-tortillero_1657181524.jpg', 'uploads/images/xlarge/tepung-sorgum-1kg-sorgum-tortillero_1657181524.jpg', 'uploads/images/large/tepung-sorgum-1kg-sorgum-tortillero_1657181524.jpg', 'uploads/images/medium/tepung-sorgum-1kg-sorgum-tortillero_1657181524.jpg', 'uploads/images/small/tepung-sorgum-1kg-sorgum-tortillero_1657181524.jpg', '2022-07-07 08:12:05', '2022-07-07 08:12:05'),
(26, 25, 'uploads/images/original/benih-biji-sorgum-1kg-sorgum-milion_1657181588.jpg', 'uploads/images/xlarge/benih-biji-sorgum-1kg-sorgum-milion_1657181588.jpg', 'uploads/images/large/benih-biji-sorgum-1kg-sorgum-milion_1657181588.jpg', 'uploads/images/medium/benih-biji-sorgum-1kg-sorgum-milion_1657181588.jpg', 'uploads/images/small/benih-biji-sorgum-1kg-sorgum-milion_1657181588.jpg', '2022-07-07 08:13:09', '2022-07-07 08:13:09'),
(27, 26, 'uploads/images/original/biji-sorgum-1kg-sorgum-numbu_1657181653.jpg', 'uploads/images/xlarge/biji-sorgum-1kg-sorgum-numbu_1657181653.jpg', 'uploads/images/large/biji-sorgum-1kg-sorgum-numbu_1657181653.jpg', 'uploads/images/medium/biji-sorgum-1kg-sorgum-numbu_1657181653.jpg', 'uploads/images/small/biji-sorgum-1kg-sorgum-numbu_1657181653.jpg', '2022-07-07 08:14:13', '2022-07-07 08:14:13'),
(28, 27, 'uploads/images/original/mie-sorgum_1657181747.jpg', 'uploads/images/xlarge/mie-sorgum_1657181747.jpg', 'uploads/images/large/mie-sorgum_1657181747.jpg', 'uploads/images/medium/mie-sorgum_1657181747.jpg', 'uploads/images/small/mie-sorgum_1657181747.jpg', '2022-07-07 08:15:47', '2022-07-07 08:15:47'),
(29, 28, 'uploads/images/original/biji-sorgum-1kg-sorgum-pahat_1657181820.jpg', 'uploads/images/xlarge/biji-sorgum-1kg-sorgum-pahat_1657181820.jpg', 'uploads/images/large/biji-sorgum-1kg-sorgum-pahat_1657181820.jpg', 'uploads/images/medium/biji-sorgum-1kg-sorgum-pahat_1657181820.jpg', 'uploads/images/small/biji-sorgum-1kg-sorgum-pahat_1657181820.jpg', '2022-07-07 08:17:01', '2022-07-07 08:17:01'),
(30, 29, 'uploads/images/original/biji-sorgum-1kg-sorgum-pahat_1657181866.jpg', 'uploads/images/xlarge/biji-sorgum-1kg-sorgum-pahat_1657181866.jpg', 'uploads/images/large/biji-sorgum-1kg-sorgum-pahat_1657181866.jpg', 'uploads/images/medium/biji-sorgum-1kg-sorgum-pahat_1657181866.jpg', 'uploads/images/small/biji-sorgum-1kg-sorgum-pahat_1657181866.jpg', '2022-07-07 08:17:46', '2022-07-07 08:17:46'),
(31, 30, 'uploads/images/original/biji-sorgum-1kg-whole-grain-pahat_1657182058.png', 'uploads/images/xlarge/biji-sorgum-1kg-whole-grain-pahat_1657182058.png', 'uploads/images/large/biji-sorgum-1kg-whole-grain-pahat_1657182058.png', 'uploads/images/medium/biji-sorgum-1kg-whole-grain-pahat_1657182058.png', 'uploads/images/small/biji-sorgum-1kg-whole-grain-pahat_1657182058.png', '2022-07-07 08:20:59', '2022-07-07 08:20:59'),
(32, 32, 'uploads/images/original/biji-sorgum-1kg-whole-grain-numbu_1657182078.png', 'uploads/images/xlarge/biji-sorgum-1kg-whole-grain-numbu_1657182078.png', 'uploads/images/large/biji-sorgum-1kg-whole-grain-numbu_1657182078.png', 'uploads/images/medium/biji-sorgum-1kg-whole-grain-numbu_1657182078.png', 'uploads/images/small/biji-sorgum-1kg-whole-grain-numbu_1657182078.png', '2022-07-07 08:21:20', '2022-07-07 08:21:20'),
(33, 31, 'uploads/images/original/biji-sorgum-1kg-whole-grain-milion_1657182097.png', 'uploads/images/xlarge/biji-sorgum-1kg-whole-grain-milion_1657182097.png', 'uploads/images/large/biji-sorgum-1kg-whole-grain-milion_1657182097.png', 'uploads/images/medium/biji-sorgum-1kg-whole-grain-milion_1657182097.png', 'uploads/images/small/biji-sorgum-1kg-whole-grain-milion_1657182097.png', '2022-07-07 08:21:38', '2022-07-07 08:21:38'),
(34, 33, 'uploads/images/original/biji-sorgum-1kg-sorgum-pahat_1657182193.jpg', 'uploads/images/xlarge/biji-sorgum-1kg-sorgum-pahat_1657182193.jpg', 'uploads/images/large/biji-sorgum-1kg-sorgum-pahat_1657182193.jpg', 'uploads/images/medium/biji-sorgum-1kg-sorgum-pahat_1657182193.jpg', 'uploads/images/small/biji-sorgum-1kg-sorgum-pahat_1657182193.jpg', '2022-07-07 08:23:14', '2022-07-07 08:23:14'),
(35, 34, 'uploads/images/original/biji-sorgum-1kg-sorgum-numbu_1657182220.jpg', 'uploads/images/xlarge/biji-sorgum-1kg-sorgum-numbu_1657182220.jpg', 'uploads/images/large/biji-sorgum-1kg-sorgum-numbu_1657182220.jpg', 'uploads/images/medium/biji-sorgum-1kg-sorgum-numbu_1657182220.jpg', 'uploads/images/small/biji-sorgum-1kg-sorgum-numbu_1657182220.jpg', '2022-07-07 08:23:41', '2022-07-07 08:23:41'),
(36, 35, 'uploads/images/original/biji-sorgum-1kg-sorgum-pahat_1657182294.jpg', 'uploads/images/xlarge/biji-sorgum-1kg-sorgum-pahat_1657182294.jpg', 'uploads/images/large/biji-sorgum-1kg-sorgum-pahat_1657182294.jpg', 'uploads/images/medium/biji-sorgum-1kg-sorgum-pahat_1657182294.jpg', 'uploads/images/small/biji-sorgum-1kg-sorgum-pahat_1657182294.jpg', '2022-07-07 08:24:54', '2022-07-07 08:24:54'),
(37, 38, 'uploads/images/original/sorgum-instan-minoti_1699284947.png', 'uploads/images/xlarge/sorgum-instan-minoti_1699284947.png', 'uploads/images/large/sorgum-instan-minoti_1699284947.png', 'uploads/images/medium/sorgum-instan-minoti_1699284947.png', 'uploads/images/small/sorgum-instan-minoti_1699284947.png', '2023-11-06 15:35:49', '2023-11-06 15:35:49'),
(38, 39, 'uploads/images/original/sorgum-instan-minoti_1699285188.png', 'uploads/images/xlarge/sorgum-instan-minoti_1699285188.png', 'uploads/images/large/sorgum-instan-minoti_1699285188.png', 'uploads/images/medium/sorgum-instan-minoti_1699285188.png', 'uploads/images/small/sorgum-instan-minoti_1699285188.png', '2023-11-06 15:39:49', '2023-11-06 15:39:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_ingredients`
--

CREATE TABLE `product_ingredients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `ingredient_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `product_ingredients`
--

INSERT INTO `product_ingredients` (`id`, `product_id`, `ingredient_id`) VALUES
(1, 2, 4),
(2, 3, 1),
(3, 4, 1),
(4, 5, 1),
(5, 6, 4),
(6, 7, 4),
(7, 8, 1),
(8, 9, 2),
(9, 10, 4),
(10, 11, 4),
(11, 12, 1),
(12, 13, 4),
(13, 14, 2),
(14, 15, 3),
(15, 16, 2),
(16, 17, 1),
(17, 18, 4),
(18, 19, 1),
(19, 20, 4),
(20, 21, 1),
(21, 22, 1),
(22, 23, 2),
(23, 24, 3),
(24, 25, 4),
(25, 26, 2),
(26, 27, 1),
(27, 28, 1),
(28, 29, 1),
(29, 30, 1),
(30, 31, 4),
(31, 32, 2),
(32, 33, 1),
(33, 34, 2),
(34, 35, 1),
(35, 36, 3),
(36, 37, 1),
(37, 38, 1),
(38, 39, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_inventories`
--

CREATE TABLE `product_inventories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `product_inventories`
--

INSERT INTO `product_inventories` (`id`, `product_id`, `qty`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2022-06-08 23:16:49', '2022-06-20 07:05:25'),
(2, 2, 980, '2022-07-06 11:07:31', '2022-07-08 07:41:43'),
(3, 3, 989, '2022-07-06 11:14:43', '2023-11-06 17:15:36'),
(4, 4, 975, '2022-07-06 11:19:57', '2022-07-08 08:14:39'),
(5, 5, 960, '2022-07-06 11:26:20', '2022-07-10 01:43:07'),
(6, 6, 975, '2022-07-06 11:32:10', '2022-07-10 02:13:32'),
(7, 7, 980, '2022-07-06 11:35:02', '2022-07-10 01:47:05'),
(8, 8, 930, '2022-07-06 11:40:29', '2022-07-10 02:23:50'),
(9, 9, 920, '2022-07-06 11:47:54', '2022-07-10 02:27:09'),
(10, 10, 960, '2022-07-06 11:51:37', '2022-07-10 02:30:39'),
(11, 11, 965, '2022-07-06 11:55:26', '2022-07-10 02:32:26'),
(12, 12, 915, '2022-07-06 12:14:13', '2022-07-10 02:37:02'),
(13, 13, 910, '2022-07-06 12:25:27', '2022-07-10 02:38:55'),
(14, 14, 910, '2022-07-06 12:26:34', '2022-07-10 02:40:40'),
(15, 15, 915, '2022-07-06 12:28:18', '2022-07-10 02:42:55'),
(16, 16, 950, '2022-07-06 16:08:08', '2022-07-10 02:45:27'),
(17, 17, 968, '2022-07-06 16:10:59', '2022-07-10 02:50:17'),
(18, 18, 970, '2022-07-06 16:11:48', '2022-07-10 03:36:42'),
(19, 19, 985, '2022-07-06 16:13:56', '2022-07-10 03:41:46'),
(20, 20, 980, '2022-07-06 16:14:44', '2022-07-10 03:44:20'),
(21, 21, 985, '2022-07-06 16:16:43', '2022-07-10 03:47:15'),
(22, 22, 990, '2022-07-06 16:19:05', '2022-07-10 03:49:30'),
(23, 23, 970, '2022-07-06 16:30:33', '2022-07-10 03:52:36'),
(24, 24, 955, '2022-07-06 16:32:28', '2022-07-10 03:54:37'),
(25, 25, 935, '2022-07-06 16:34:29', '2022-07-10 03:56:45'),
(26, 26, 945, '2022-07-06 16:36:35', '2022-07-10 03:58:36'),
(27, 27, 955, '2022-07-06 16:39:14', '2022-07-10 04:00:29'),
(28, 28, 945, '2022-07-06 16:41:25', '2022-07-10 04:02:42'),
(29, 29, 945, '2022-07-06 16:43:14', '2022-07-10 04:05:02'),
(30, 30, 935, '2022-07-06 16:45:31', '2022-07-10 04:07:28'),
(31, 31, 965, '2022-07-06 16:46:28', '2022-07-10 04:09:18'),
(32, 32, 930, '2022-07-06 16:47:42', '2022-07-10 05:25:50'),
(33, 33, 972, '2022-07-06 16:50:46', '2022-07-10 05:27:47'),
(34, 34, 975, '2022-07-06 16:51:57', '2022-07-10 05:32:46'),
(35, 35, 980, '2022-07-06 16:53:42', '2022-07-10 05:34:38'),
(36, 36, 975, '2022-07-06 16:56:18', '2022-07-10 05:37:01'),
(37, 37, 6, '2023-11-06 14:12:10', '2023-11-06 14:12:10'),
(38, 38, 10, '2023-11-06 15:33:43', '2023-11-06 15:33:43'),
(39, 39, 10, '2023-11-06 15:39:36', '2023-11-06 15:39:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_reviews`
--

CREATE TABLE `product_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `rate` tinyint(4) NOT NULL DEFAULT 0,
  `review` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `product_reviews`
--

INSERT INTO `product_reviews` (`id`, `user_id`, `product_id`, `rate`, `review`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 4, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', 'active', '2022-06-22 07:30:44', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_sells`
--

CREATE TABLE `product_sells` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `prod_sell_number` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `product_sells`
--

INSERT INTO `product_sells` (`id`, `product_id`, `prod_sell_number`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'active', '2022-07-11 09:35:21', '2022-07-11 09:35:21'),
(2, 3, 2, 'active', '2022-07-11 09:36:38', '2022-07-11 09:36:38'),
(3, 4, 1, 'active', '2022-07-11 09:37:04', '2022-07-11 09:37:04'),
(4, 5, 1, 'active', '2022-07-11 09:38:59', '2022-07-11 09:38:59'),
(5, 7, 1, 'active', '2022-07-11 09:45:38', '2022-07-11 09:45:38'),
(6, 6, 2, 'active', '2022-07-11 09:46:07', '2022-07-11 09:46:07'),
(7, 8, 1, 'active', '2022-07-11 09:47:41', '2022-07-11 09:47:41'),
(8, 9, 1, 'active', '2022-07-11 09:48:09', '2022-07-11 09:48:09'),
(9, 10, 1, 'active', '2022-07-11 09:49:04', '2022-07-11 09:49:04'),
(10, 11, 2, 'active', '2022-07-11 09:49:29', '2022-07-11 09:49:29'),
(11, 12, 1, 'active', '2022-07-11 09:50:36', '2022-07-11 09:50:36'),
(12, 13, 3, 'active', '2022-07-11 09:50:56', '2022-07-11 09:50:56'),
(13, 14, 3, 'active', '2022-07-11 09:51:18', '2022-07-11 09:51:18'),
(14, 15, 1, 'active', '2022-07-11 09:51:38', '2022-07-11 09:51:38'),
(15, 16, 1, 'active', '2022-07-11 09:57:32', '2022-07-11 09:57:32'),
(16, 17, 2, 'active', '2022-07-11 09:57:56', '2022-07-11 09:57:56'),
(17, 18, 2, 'active', '2022-07-11 09:58:20', '2022-07-11 09:58:20'),
(18, 19, 2, 'active', '2022-07-11 09:58:44', '2022-07-11 09:58:44'),
(19, 20, 2, 'active', '2022-07-11 09:59:05', '2022-07-11 09:59:05'),
(20, 21, 2, 'active', '2022-07-11 09:59:28', '2022-07-11 09:59:28'),
(21, 22, 2, 'active', '2022-07-11 09:59:51', '2022-07-11 09:59:51'),
(22, 23, 1, 'active', '2022-07-11 10:00:59', '2022-07-11 10:00:59'),
(23, 24, 2, 'active', '2022-07-11 10:01:19', '2022-07-11 10:01:19'),
(24, 25, 1, 'active', '2022-07-11 10:01:46', '2022-07-11 10:01:46'),
(25, 26, 1, 'active', '2022-07-11 10:02:11', '2022-07-11 10:02:11'),
(26, 27, 4, 'active', '2022-07-11 10:02:31', '2022-07-11 10:02:31'),
(27, 28, 1, 'active', '2022-07-11 10:03:02', '2022-07-11 10:03:02'),
(28, 29, 1, 'active', '2022-07-11 10:03:21', '2022-07-11 10:03:21'),
(29, 30, 3, 'active', '2022-07-11 10:03:44', '2022-07-11 10:03:44'),
(30, 31, 3, 'active', '2022-07-11 10:04:02', '2022-07-11 10:04:02'),
(31, 32, 1, 'active', '2022-07-11 10:04:22', '2022-07-11 10:04:22'),
(32, 33, 1, 'active', '2022-07-11 10:04:46', '2022-07-11 10:04:46'),
(33, 34, 1, 'active', '2022-07-11 10:05:02', '2022-07-11 10:05:02'),
(34, 35, 1, 'active', '2022-07-11 10:06:37', '2022-07-11 10:06:37'),
(35, 36, 4, 'active', '2022-07-11 10:06:55', '2022-07-11 10:06:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `regions`
--

CREATE TABLE `regions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `province_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province_id` int(11) DEFAULT NULL,
  `city_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `regions`
--

INSERT INTO `regions` (`id`, `province_name`, `province_id`, `city_name`, `city_id`, `number`, `status`, `created_at`, `updated_at`) VALUES
(3, 'JAWA TIMUR', 11, 'KABUPATEN MALANG', 255, 2, 'active', '2022-07-01 06:17:06', '2022-07-01 06:17:06'),
(4, 'JAWA TIMUR', 11, 'KOTA MALANG', 256, 2, 'active', '2022-07-01 06:17:23', '2022-07-01 06:17:23'),
(5, 'JAWA TIMUR', 11, 'KABUPATEN LAMONGAN', 222, 1, 'active', '2022-07-01 06:17:51', '2022-07-01 06:17:51'),
(6, 'JAWA TIMUR', 11, 'KABUPATEN SUMENEP', 441, 4, 'active', '2022-07-01 06:18:19', '2022-07-01 06:18:19'),
(7, 'JAWA TIMUR', 11, 'KABUPATEN KEDIRI', 178, 3, 'active', '2022-07-01 06:18:43', '2022-07-01 06:18:43'),
(8, 'JAWA TIMUR', 11, 'KABUPATEN NGANJUK', 305, 3, 'active', '2022-07-01 06:19:06', '2022-07-01 06:19:06'),
(9, 'JAWA TIMUR', 11, 'KABUPATEN JOMBANG', 164, 2, 'active', '2022-07-01 06:19:25', '2022-07-01 06:19:25'),
(10, 'JAWA TIMUR', 11, 'KABUPATEN BLITAR', 74, 4, 'active', '2022-07-01 06:20:00', '2022-07-01 06:20:00'),
(11, 'JAWA TIMUR', 11, 'KABUPATEN TULUNGAGUNG', 492, 4, 'active', '2022-07-01 06:20:30', '2022-07-01 06:20:30'),
(12, 'JAWA TIMUR', 11, 'KABUPATEN SIDOARJO', 409, 1, 'active', '2022-07-01 06:20:58', '2022-07-01 06:20:58'),
(13, 'JAWA TIMUR', 11, 'KABUPATEN TUBAN', 489, 3, 'active', '2022-07-01 06:21:22', '2022-07-01 06:21:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_des` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `original` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medium` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `small` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `settings`
--

INSERT INTO `settings` (`id`, `title`, `meta_description`, `meta_keyword`, `description`, `short_des`, `logo`, `original`, `medium`, `small`, `address`, `phone`, `email`, `twitter`, `facebook`, `instagram`, `created_at`, `updated_at`) VALUES
(1, 'Sorgum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'keyword', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. sed ut perspiciatis unde sunt in culpa qui officia deserunt mollit anim id est laborum. sed ut perspiciatis unde omnis iste natus error sit voluptatem Excepteu\n                            sunt in culpa qui officia deserunt mollit anim id est laborum. sed ut perspiciatis Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. sed ut perspi deserunt mollit anim id est laborum. sed ut perspi.', 'Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.', 'frontend/assets/imgs/sorgumku.svg', NULL, NULL, NULL, 'NO. 342 - London Oxford Street, 012 United Kingdom', '+060 (800) 801-582', 'cs@mail.com', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `shipments`
--

CREATE TABLE `shipments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `track_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_qty` int(11) NOT NULL,
  `total_weight` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` int(11) DEFAULT NULL,
  `shipped_by` bigint(20) UNSIGNED DEFAULT NULL,
  `shipped_at` datetime DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `shipments`
--

INSERT INTO `shipments` (`id`, `user_id`, `order_id`, `track_number`, `status`, `total_qty`, `total_weight`, `first_name`, `last_name`, `address1`, `address2`, `phone`, `email`, `city_id`, `province_id`, `postcode`, `shipped_by`, `shipped_at`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2, 2, '', 'pending', 2, 1000, 'momon', 'jose', 'Manukan Tama Tandes Surabaya Barat', NULL, '0889999999999', 'momon@mail.com', '51', '11', 60988, 1, NULL, NULL, '2022-06-19 04:50:49', '2022-06-19 04:50:49'),
(2, 2, 4, NULL, 'pending', 2, 2000, 'momon', 'jose', 'Manukan Tama Tandes Surabaya Barat', NULL, '0889999999999', 'momon@mail.com', '51', '11', 60988, NULL, NULL, NULL, '2022-06-20 07:05:25', '2022-06-20 07:05:25'),
(3, 28, 5, NULL, 'pending', 20, 20000, 'Jane', 'Farida', 'Gg. Salam No. 809, Payakumbuh 96147, SulBar', NULL, '024 1125 4899', 'jane_farida@mail.com', '444', '11', 60186, NULL, NULL, NULL, '2022-07-08 07:41:43', '2022-07-08 07:41:43'),
(4, 29, 6, NULL, 'pending', 10, 10000, 'Ian', 'Nababan', 'Kpg. Cihampelas No. 894, Solok 47325, KalTeng', NULL, '0742 6044 1863', 'ian_nababan@mail.com', '444', '11', 60186, NULL, NULL, NULL, '2022-07-08 08:09:06', '2022-07-08 08:09:06'),
(5, 30, 7, NULL, 'pending', 25, 25000, 'Devi', 'Wulandari', 'Kpg. Bakau No. 179, Makassar 68954, Banten', NULL, '(+62) 712 4540 379', 'devi_wulandari@mail.com', '444', '11', 60186, NULL, NULL, NULL, '2022-07-08 08:14:39', '2022-07-08 08:14:39'),
(6, 31, 8, NULL, 'pending', 40, 20000, 'Ayu', 'Kuswandari', 'Gg. Suniaraja No. 43, Jambi 91393, JaTeng', NULL, '(+62) 23 9741 4806', 'ayu_kuswandari@mail.com', '444', '11', 60186, NULL, NULL, NULL, '2022-07-10 01:43:07', '2022-07-10 01:43:07'),
(7, 32, 9, NULL, 'pending', 20, 20000, 'Anom', 'Megantara', 'Manukan', NULL, '0653 8787 923', 'anom_megantara@mail.com', '444', '11', 60186, NULL, NULL, NULL, '2022-07-10 01:47:05', '2022-07-10 01:47:05'),
(8, 33, 10, NULL, 'pending', 25, 25000, 'Nadine', 'Wahyuni', 'Jln. Suryo No. 166, Bandar Lampung 93171, DKI', NULL, '0260 1373 3869', 'nadine_wahyuni@mail.com', '444', '11', 60186, NULL, NULL, NULL, '2022-07-10 02:13:32', '2022-07-10 02:13:32'),
(9, 34, 11, NULL, 'pending', 70, 7000, 'Eka', 'Aryani', 'Jln. Setia Budi No. 259, Subulussalam 78192, KepR', NULL, '(+62) 423 7301 3760', 'eka_aryani@mail.com', '444', '11', 60186, NULL, NULL, NULL, '2022-07-10 02:23:50', '2022-07-10 02:23:50'),
(10, 35, 12, NULL, 'pending', 80, 8000, 'Dodo', 'Dabukke', 'Ds. Cikapayang No. 392, Tangerang Selatan 93552, Aceh', NULL, '(+62) 423 3659 7998', 'dodo_dabukke@mail.com', '444', '11', 60186, NULL, NULL, NULL, '2022-07-10 02:27:09', '2022-07-10 02:27:09'),
(11, 36, 13, NULL, 'pending', 40, 20000, 'Clara', 'Pudjiastuti', 'Jln. Ters. Kiaracondong No. 251, Administrasi Jakarta Utara 70989, Aceh', NULL, '0211 7912 3063', 'clara_pudjiastuti@mail.com', '444', '11', 60186, NULL, NULL, NULL, '2022-07-10 02:30:39', '2022-07-10 02:30:39'),
(12, 37, 14, NULL, 'pending', 35, 17500, 'Kani', 'Wijayanti', 'Gg. Sumpah Pemuda No. 118, Sawahlunto 32059, DKI', NULL, '(+62) 305 5006 7893', 'kani_wijayanti@mail.com', '444', '11', 60186, NULL, NULL, NULL, '2022-07-10 02:32:26', '2022-07-10 02:32:26'),
(13, 38, 15, NULL, 'pending', 85, 8500, 'Samiah', 'Wahyuni', 'Gg. Salak No. 328, Tidore Kepulauan 67073, NTB', NULL, '0254 4590 5349', 'samiah_wahyuni@mail.com', '444', '11', 60186, NULL, NULL, NULL, '2022-07-10 02:37:02', '2022-07-10 02:37:02'),
(14, 39, 16, NULL, 'pending', 90, 9000, 'Eko', 'Najmudin', 'Ds. Flora No. 109, Yogyakarta 21452, SumSel', NULL, '0752 1773 219', 'eko_najmudin@mail.com', '444', '11', 60186, NULL, NULL, NULL, '2022-07-10 02:38:55', '2022-07-10 02:38:55'),
(15, 40, 17, NULL, 'pending', 90, 9000, 'Kemba', 'Nugroho', 'Dk. Tambun No. 529, Bitung 11847, NTT', NULL, '(+62) 219 1298 883', 'kemba_nugroho@mail.com', '444', '11', 60186, NULL, NULL, NULL, '2022-07-10 02:40:40', '2022-07-10 02:40:40'),
(16, 41, 18, NULL, 'pending', 85, 8500, 'Opung', 'Januar', 'Ds. B.Agam Dlm No. 201, Cirebon 33887, SulSel', NULL, '(+62) 813 5325 282', 'opung_januar@mail.com', '444', '11', 60186, NULL, NULL, NULL, '2022-07-10 02:42:55', '2022-07-10 02:42:55'),
(17, 42, 19, NULL, 'pending', 50, 5000, 'Najwa', 'Rahmawati', 'Jln. Panjaitan No. 521, Medan 93837, KalUt', NULL, '0804 2741 421', 'najwa_rahmawati@mail.com', '444', '11', 60186, NULL, NULL, NULL, '2022-07-10 02:45:27', '2022-07-10 02:45:27'),
(18, 43, 20, NULL, 'pending', 32, 16000, 'Gawati', 'Astuti', 'Kpg. Padang No. 254, Bontang 41358, KalBar', NULL, '(+62) 803 407 590', 'gawati_astuti@mail.com', '444', '11', 60186, NULL, NULL, NULL, '2022-07-10 02:50:17', '2022-07-10 02:50:17'),
(19, 44, 21, NULL, 'pending', 30, 30000, 'Bagya', 'Kusumo', 'Jln. Haji No. 721, Tegal 88984, Jambi', NULL, '(+62) 410 8847 7207', 'bagya_kusumo@mail.com', '444', '11', 60186, NULL, NULL, NULL, '2022-07-10 03:36:42', '2022-07-10 03:36:42'),
(20, 45, 22, NULL, 'pending', 15, 15000, 'Sakura', 'Wastuti', 'Psr. Sampangan No. 257, Gunungsitoli 95560, Lampung', NULL, '0303 2751 5475', 'sakura_wastuti@mail.com', '444', '11', 60186, NULL, NULL, NULL, '2022-07-10 03:41:46', '2022-07-10 03:41:46'),
(21, 46, 23, NULL, 'pending', 20, 20000, 'Sari', 'Rahimah', 'Psr. Babadan No. 202, Padangpanjang 48655, SulBar', NULL, '0862 9984 1681', 'sari_rahimah@mail.com', '444', '11', 60186, NULL, NULL, NULL, '2022-07-10 03:44:20', '2022-07-10 03:44:20'),
(22, 47, 24, NULL, 'pending', 15, 15000, 'Chandra', 'Suwarno', 'Ds. Surapati No. 471, Pagar Alam 30406, SumUt', NULL, '(+62) 488 8848 409', 'chandra_suwarno@mail.com', '444', '11', 60186, NULL, NULL, NULL, '2022-07-10 03:47:15', '2022-07-10 03:47:15'),
(23, 48, 25, NULL, 'pending', 10, 10000, 'Gasti', 'Handayani', 'Dk. Banal No. 582, Bandung 56534, SulTra', NULL, '(+62) 474 9649 771', 'gasti_handayani@mail.com', '444', '11', 60186, NULL, NULL, NULL, '2022-07-10 03:49:30', '2022-07-10 03:49:30'),
(24, 49, 26, NULL, 'pending', 30, 30000, 'Hadi', 'Habibi', 'Dk. Gremet No. 630, Jayapura 82455, KalTim', NULL, '0719 8000 2014', 'hadi_habibi@mail.com', '444', '11', 60186, NULL, NULL, NULL, '2022-07-10 03:52:36', '2022-07-10 03:52:36'),
(25, 50, 27, NULL, 'pending', 45, 4500, 'Jane', 'Palastri', 'Jln. Bank Dagang Negara No. 520, Surabaya 41896, MalUt', NULL, '(+62) 377 1085 468', 'jane_palastri@mail.com', '444', '11', 60186, NULL, NULL, NULL, '2022-07-10 03:54:37', '2022-07-10 03:54:37'),
(26, 51, 28, NULL, 'pending', 65, 6500, 'Gawati', 'Pudjiastuti', 'Psr. Suprapto No. 387, Tangerang Selatan 69349, JaBar', NULL, '0669 4277 072', 'gawati_pudjiastuti@mail.com', '444', '11', 60186, NULL, NULL, NULL, '2022-07-10 03:56:45', '2022-07-10 03:56:45'),
(27, 52, 29, NULL, 'pending', 55, 5500, 'Ajiman', 'Nashiruddin', 'Dk. Jagakarsa No. 837, Medan 96444, KalBar', NULL, '0765 7635 1622', 'ajiman_nashiruddin@mail.com', '444', '11', 60186, NULL, NULL, NULL, '2022-07-10 03:58:36', '2022-07-10 03:58:36'),
(28, 53, 30, NULL, 'pending', 45, 22500, 'Nova', 'Wahyuni', 'Gg. Bakau No. 917, Kotamobagu 42964, BaBel', NULL, '0280 5356 005', 'nova_wahyuni@mail.com', '444', '11', 60186, NULL, NULL, NULL, '2022-07-10 04:00:29', '2022-07-10 04:00:29'),
(29, 54, 31, NULL, 'pending', 55, 5500, 'Enteng', 'Pradana', 'Psr. Cihampelas No. 598, Padangsidempuan 63954, SulTeng', NULL, '024 9252 3294', 'enteng_pradana@mail.com', '444', '11', 60186, NULL, NULL, NULL, '2022-07-10 04:02:42', '2022-07-10 04:02:42'),
(30, 55, 32, NULL, 'pending', 55, 5500, 'Jarwa', 'Saragih', 'Psr. Basoka No. 571, Binjai 68470, Riau', NULL, '(+62) 675 6180 0115', 'jarwa_saragih@mail.com', '444', '11', 60186, NULL, NULL, NULL, '2022-07-10 04:05:02', '2022-07-10 04:05:02'),
(31, 56, 33, NULL, 'pending', 65, 6500, 'Kamila', 'Andriani', 'Psr. Kalimantan No. 627, Kendari 51938, MalUt', NULL, '0371 0071 7331', 'kamila_andriani@mail.com', '444', '11', 60186, NULL, NULL, NULL, '2022-07-10 04:07:28', '2022-07-10 04:07:28'),
(32, 57, 34, NULL, 'pending', 35, 3500, 'Lanjar', 'Suryono', 'Kpg. B.Agam Dlm No. 897, Subulussalam 74452, KalTeng', NULL, '0824 4794 3864', 'lanjar_suryono@mail.com', '444', '11', 60186, NULL, NULL, NULL, '2022-07-10 04:09:18', '2022-07-10 04:09:18'),
(33, 28, 35, NULL, 'pending', 35, 3500, 'Jane', 'Farida', 'Gg. Salam No. 809, Payakumbuh 96147, SulBar', NULL, '024 1125 4899', 'jane_farida@mail.com', '444', '11', 60186, NULL, NULL, NULL, '2022-07-10 05:03:12', '2022-07-10 05:03:12'),
(34, 28, 36, NULL, 'pending', 35, 3500, 'Jane', 'Farida', 'Gg. Salam No. 809, Payakumbuh 96147, SulBar', NULL, '024 1125 4899', 'jane_farida@mail.com', '444', '11', 60186, NULL, NULL, NULL, '2022-07-10 05:25:50', '2022-07-10 05:25:50'),
(35, 29, 37, NULL, 'pending', 28, 28000, 'Ian', 'Nababan', 'Kpg. Cihampelas No. 894, Solok 47325, KalTeng', NULL, '0742 6044 1863', 'ian_nababan@mail.com', '444', '11', 60186, NULL, NULL, NULL, '2022-07-10 05:27:47', '2022-07-10 05:27:47'),
(36, 30, 38, NULL, 'pending', 25, 25000, 'Devi', 'Wulandari', 'Kpg. Bakau No. 179, Makassar 68954, Banten', NULL, '(+62) 712 4540 379', 'devi_wulandari@mail.com', '444', '11', 60186, NULL, NULL, NULL, '2022-07-10 05:32:46', '2022-07-10 05:32:46'),
(37, 31, 39, NULL, 'pending', 20, 20000, 'Ayu', 'Kuswandari', 'Gg. Suniaraja No. 43, Jambi 91393, JaTeng', NULL, '(+62) 23 9741 4806', 'ayu_kuswandari@mail.com', '444', '11', 60186, NULL, NULL, NULL, '2022-07-10 05:34:38', '2022-07-10 05:34:38'),
(38, 32, 40, NULL, 'pending', 25, 12500, 'Anom', 'Megantara', 'Manukan', NULL, '0653 8787 923', 'anom_megantara@mail.com', '444', '11', 60186, NULL, NULL, NULL, '2022-07-10 05:37:01', '2022-07-10 05:37:01'),
(39, 55, 41, NULL, 'pending', 1, 1000, 'Jarwa', 'Saragih', 'Psr. Basoka No. 571, Binjai 68470, Riau', NULL, '(+62) 675 6180 0115', 'jarwa_saragih@mail.com', '444', '11', 60186, NULL, NULL, NULL, '2023-11-06 17:15:36', '2023-11-06 17:15:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `shops`
--

CREATE TABLE `shops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` double(8,2) DEFAULT NULL,
  `bank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rekening` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `atasnama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `original` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medium` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `small` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `shops`
--

INSERT INTO `shops` (`id`, `name`, `slug`, `user_id`, `is_active`, `description`, `rating`, `bank`, `rekening`, `atasnama`, `original`, `medium`, `small`, `created_at`, `updated_at`) VALUES
(1, 'Aprilmart', 'aprilmart', 1, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, NULL, NULL, NULL, 'uploads/shops/original/aprilmart_1654755117.png', 'uploads/shops/medium/aprilmart_1654755117.png', 'uploads/shops/small/aprilmart_1654755117.png', '2022-06-08 23:11:58', '2022-06-08 23:11:58'),
(2, 'bumi enjoyfood', 'bumi-enjoyfood', 2, 1, 'lorem ipsum dolor sit amet', NULL, NULL, NULL, NULL, '', '', '', '2022-06-20 07:19:36', '2022-06-20 07:19:36'),
(3, 'Gibze', 'gibze', 3, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, 'BRI', '478201003567xxx', 'gibze', '', '', '', '2022-07-04 14:33:29', '2022-07-04 14:33:29'),
(4, 'bumi superfood', 'bumi-superfood', 4, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, 'BRI', '478201003567xxx', 'bumi_superfood', '', '', '', '2022-07-04 15:12:15', '2022-07-04 15:12:15'),
(5, 'Earth Apothecary', 'earth-apothecary', 5, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, 'BRI', '478201003567xxx', 'earth apothecary', '', '', '', '2022-07-04 15:16:47', '2022-07-04 15:16:47'),
(6, 'Sorgum Lover', 'sorgum-lover', 6, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, 'BNI', '478201003567xxx', 'sorgum lover', '', '', '', '2022-07-04 15:21:44', '2022-07-04 15:21:44'),
(7, 'Unis Sorgum', 'unis-sorgum', 7, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, 'BNI', '478201003567xxx', 'unis sorgum', '', '', '', '2022-07-04 15:26:07', '2022-07-04 15:26:07'),
(8, 'Fighter', 'fighter', 8, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, 'BCA', '478201003567xxx', 'fighter', '', '', '', '2022-07-04 15:28:24', '2022-07-04 15:28:24'),
(9, 'KSO Tirto', 'kso-tirto', 9, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, 'Bank Mandiri', '478201003567xxx', 'kso tirto', '', '', '', '2022-07-04 15:37:18', '2022-07-04 15:37:18'),
(10, 'Anugerah 18', 'anugerah-18', 10, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, 'BRI', '478201003567xxx', 'anugerah 18', '', '', '', '2022-07-04 15:39:40', '2022-07-04 15:39:40'),
(11, 'Floresia Organik', 'floresia-organik', 11, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, 'Bank Mandiri', '478201003567xxx', 'floresia organik', '', '', '', '2022-07-04 15:43:16', '2022-07-04 15:43:16'),
(12, 'Agro Benih', 'agro-benih', 12, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, 'BNI', '478201003567xxx', 'agro benih', '', '', '', '2022-07-04 15:45:40', '2022-07-04 15:45:40'),
(13, 'Purie Shop', 'purie-shop', 13, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, 'BNI', '478201003567xxx', 'purie shop', '', '', '', '2022-07-04 15:51:20', '2022-07-04 15:51:20'),
(14, 'Danish', 'danish', 14, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, 'Bank Mandiri', '478201003567xxx', 'danish', '', '', '', '2022-07-04 15:57:43', '2022-07-04 15:57:43'),
(15, 'Arva Store', 'arva-store', 15, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, 'Bank Permata', '478201003567xxx', 'arva store', '', '', '', '2022-07-04 16:07:07', '2022-07-04 16:07:07'),
(16, 'Savi Store', 'savi-store', 16, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, 'CIMB Niaga', '478201003567xxx', 'savi store', '', '', '', '2022-07-04 16:09:02', '2022-07-04 16:09:02'),
(17, 'Tunas Benih', 'tunas-benih', 17, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, 'Bank Mandiri', '478201003567xxx', 'tunas benih', '', '', '', '2022-07-04 16:12:03', '2022-07-04 16:12:03'),
(18, 'Dapur Mamaku', 'dapur-mamaku', 18, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, 'BNI', '478201003567xxx', 'dapur mamaku', '', '', '', '2022-07-04 16:14:58', '2022-07-04 16:14:58'),
(19, 'Pusat Distributor', 'pusat-distributor', 19, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, 'BNI', '478201003567xxx', 'pusat distributor', '', '', '', '2022-07-05 05:29:30', '2022-07-05 05:29:30'),
(20, 'DIDINOP', 'didinop', 20, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, 'BNI', '478201003567xxx', 'didinop', '', '', '', '2022-07-05 05:51:48', '2022-07-05 05:51:48'),
(21, 'Nutrisi Indah', 'nutrisi-indah', 21, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, 'Bank Mandiri', '478201003567xxx', 'nutrisi indah', '', '', '', '2022-07-05 05:54:08', '2022-07-05 05:54:08'),
(22, 'Pujaseraku', 'pujaseraku', 22, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, 'CIMB Niaga', '478201003567xxx', 'pujaseraku', '', '', '', '2022-07-05 05:56:37', '2022-07-05 05:56:37'),
(23, 'Formula Mart', 'formula-mart', 23, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, 'BNI', '478201003567xxx', 'formula mart', '', '', '', '2022-07-05 05:59:00', '2022-07-05 05:59:00'),
(24, 'Choseed', 'choseed', 24, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, 'BRI', '478201003567xxx', 'choseed', '', '', '', '2022-07-05 06:00:30', '2022-07-05 06:00:30'),
(25, 'Victory Seed', 'victory-seed', 25, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, 'BRI', '478201003567xxx', 'victory seed', '', '', '', '2022-07-05 06:02:32', '2022-07-05 06:02:32'),
(26, 'Kamsya', 'kamsya', 26, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, 'BRI', '478201003567xxx', 'kamsya', '', '', '', '2022-07-05 06:05:27', '2022-07-05 06:05:27'),
(27, 'Cyborgh', 'cyborgh', 27, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, 'BNI', '478201003567xxx', 'cyborgh', '', '', '', '2022-07-05 06:07:37', '2022-07-05 06:07:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `shop_capitals`
--

CREATE TABLE `shop_capitals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shop_id` bigint(20) UNSIGNED NOT NULL,
  `capital_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `shop_capitals`
--

INSERT INTO `shop_capitals` (`id`, `shop_id`, `capital_id`) VALUES
(2, 3, 2),
(3, 4, 2),
(4, 6, 1),
(5, 7, 2),
(6, 8, 2),
(7, 9, 2),
(8, 10, 1),
(9, 11, 1),
(10, 12, 2),
(11, 13, 2),
(12, 14, 3),
(13, 15, 2),
(15, 16, 2),
(16, 17, 3),
(17, 18, 3),
(18, 19, 2),
(19, 20, 2),
(20, 21, 2),
(21, 22, 2),
(22, 23, 3),
(23, 24, 3),
(24, 25, 4),
(25, 26, 4),
(26, 27, 4),
(27, 5, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(11) NOT NULL DEFAULT 0,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `original` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_large` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `small` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `subscribes`
--

CREATE TABLE `subscribes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opened` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `taggables`
--

CREATE TABLE `taggables` (
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `taggable_id` bigint(20) NOT NULL,
  `taggable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `postcode` int(11) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `phone`, `address1`, `address2`, `province_id`, `city_id`, `postcode`, `email_verified_at`, `password`, `isAdmin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mocha', 'zamroni', 'mimin@mail.com', '0607748332', 'Wisma Tengger Kandangan Benowo Surabaya Barat', NULL, 6, 152, 60186, NULL, '$2y$10$GzgjV1M8muSIYkec/9h6n.XFpoShPc2m.PRcz.ToNL5n4iSa3idWC', 1, NULL, NULL, '2022-06-08 23:13:06'),
(2, 'momon', 'jose', 'momon@mail.com', '0889999999999', 'Manukan Tama Tandes Surabaya Barat', NULL, 11, 51, 60988, NULL, '$2y$10$QLFs6jlZ1a9oyQDfyyfC1OUAnqF1o1/Xa3Fx8rvwb8LLBeHMs.vN.', 0, NULL, NULL, '2022-06-09 01:30:02'),
(3, 'Gibze', 'Malang', 'gibze@mail.com', '0812-3309-3232', 'Jl. Kresna, Niwin, Sidorahayu, Kec. Wagir, Kota Malang, Jawa Timur 65158', NULL, 11, 256, 57139, NULL, '$2y$10$ix.QiRNBvscbfdfEH9V9EOOj3jgQV/gIsdfGHaIHi0ovlRzWj3vO6', 0, NULL, NULL, '2022-07-04 14:24:31'),
(4, 'bumi', 'superfood', 'bumi_superfood@mail.com', '(0341) 835199', 'JL. Sidorahayu, RT. 012 RW. 03, Niwen, Kauman, Kec. Klojen, Kota Malang, Jawa Timur 65119', NULL, 11, 256, 65111, NULL, '$2y$10$hr8stjor6CkG0w/9v5jjBuhCCwkFdrHu9SIIdDw7c6b9nMH4QRxd6', 0, NULL, NULL, '2022-07-04 15:03:03'),
(5, 'Earth', 'Apothecary', 'earth_apothecary@mail.com', '(0341) 836612', 'No. 3, Wagir, Ds Sidorahayu, Niwin, Sidorahayu, Kec. Wagir, Malang, Jawa Timur 65158', NULL, 11, 255, 65112, NULL, '$2y$10$A3jlXF7ozwC6DGaoqeAT5OiEhOPROdqKl1CgbU63LC519jeLmQV6y', 0, NULL, NULL, '2022-07-04 15:15:22'),
(6, 'Sorgum', 'Lover', 'sorgum_lover@mail.com', '0823-3823-3888', 'dusun kalikacang rt 01 rw 05, desa, Kali Kacang, Sidorejo, Sugio, Kabupaten Lamongan, Jawa Timur 62256', NULL, 11, 222, 62211, NULL, '$2y$10$BzkL5tpLUXNDnc01eiLToO6yZySJblP7.dCcCcbR7gMURTijLQNW2', 0, NULL, NULL, '2022-07-04 15:20:37'),
(7, 'Unis', 'Sorgum', 'unis_sorgum@mail.com', '0822-5757-9117', 'Jl. Langgarwakaf No.20, Sawo, Babat, Kec. Babat, Kabupaten Lamongan, Jawa Timur 62271', NULL, 11, 222, 62212, NULL, '$2y$10$V7xxAFnetlcvh.8pZmIRd.bW1KVx3W8rUWlSLOhkgXN5KJUwl1OK6', 0, NULL, NULL, '2022-07-04 15:24:15'),
(8, 'Fighter', 'Sumenep', 'fighter@mail.com', '0822-4567-9235', 'taman di dekat Gunung Lapa,, Ares Tengah, Lapa Taman, Dungkek, Kabupaten Sumenep, Jawa Timur 69474', NULL, 11, 441, 69474, NULL, '$2y$10$QdsqqXaewg8OFTkMEaSnReK7MSLlkbXLDLkJc9q0pjyzahbVVLytK', 0, NULL, NULL, '2022-07-04 15:27:35'),
(9, 'KSO', 'Tirto', 'kso_tirto@mail.com', '0815-5181-303', 'Polowijen, Kec. Blimbing, Kota Malang, Jawa Timur 65126', NULL, 11, 255, 65126, NULL, '$2y$10$e9jKPdxxjkTriavNvJhKnO2KU05gamfs5jhXRvitGydRZXUPpj6yq', 0, NULL, NULL, '2022-07-04 15:36:11'),
(10, 'Anugerah', '18', 'anugerah_18@mail.com', '0822-3526-3285', 'Area Sawah, Gunungronggo, Kec. Tajinan, Malang, Jawa Timur 65172', NULL, 11, 256, 65172, NULL, '$2y$10$M1B4XnzH51ge4yckQQ.YWeayUgHlJz5qIxgK0dmSKweaZe/dlQbJ6', 0, NULL, NULL, '2022-07-04 15:38:18'),
(11, 'Floresia', 'Organik', 'floresia_organik@mail.com', '0815-4251-325', 'Jl. Selomangleng No.143, Pojok, Kec. Mojoroto, Kota Kediri, Jawa Timur 64115', NULL, 11, 178, 64115, NULL, '$2y$10$c/NFVYmiyxn9ZuCSJn8LyuL3UPmTjzA.8e6dylbIcCORRr6wcXeXK', 0, NULL, NULL, '2022-07-04 15:41:54'),
(12, 'Agro', 'Benih', 'agro_benih@mail.com', '0822-3622-4356', 'Menang, Kec. Pagu, Kediri, Jawa Timur 64183', NULL, 11, 178, 64183, NULL, '$2y$10$.W0KBDk5fuG4MBmtv8YMlOJo708JhovAewmuJcgIlsBUzosQtDmOu', 0, NULL, NULL, '2022-07-04 15:44:42'),
(13, 'Purie', 'Shop', 'purie_shop@mail.com', '0822-4562-5341', 'Sembung, Margopatut, Sawahan, Kabupaten Nganjuk, Jawa Timur 64475', NULL, 11, 305, 64475, NULL, '$2y$10$mE6ItkbWReHz0FCnoJGS/uDg8SyX3mxQ02OMIYtX.kgSn1RHEQLjK', 0, NULL, NULL, '2022-07-04 15:49:22'),
(14, 'Danish', 'Jombang', 'danish@mail.com', '0812-5264-0505', 'Dusun Sidolegi, Sumberjo, Wonosalam, Sidolegi, Sumberjo, Wonosalam, Kabupaten Jombang, Jawa Timur 61476', NULL, 11, 164, 61476, NULL, '$2y$10$VNb7g6hVct3VPllFqySpIeCQ.0jwgZnmNKK1Kf6vcSU04dgjd8eaK', 0, NULL, NULL, '2022-07-04 15:54:23'),
(15, 'Arva', 'Store', 'arva_store@mail.com', '0812-5327-2461', 'Hutan, Ngluyu, Kabupaten Nganjuk, Jawa Timur 64452', NULL, 11, 305, 64452, NULL, '$2y$10$02RsieUwgLjrdztaWLzOGuwIMzD.wL.Hg.XMe8lvxQ1uWtMUjzHda', 0, NULL, NULL, '2022-07-04 16:05:26'),
(16, 'Savi', 'Store', 'savi_store@mail.com', '0812-3183-9995', 'Dusun Gondang, Desa Carangwulung, Wonosalam, Gondang, Carangwulung, Wonosalam, Kabupaten Jombang, Jawa Timur 61476', NULL, 11, 164, 61476, NULL, '$2y$10$4nvUL7damea597BUBH4FAu06EGMgB4kqL.kES2xyrtLMdmU81Zy1S', 0, NULL, NULL, '2022-07-04 16:08:22'),
(17, 'Tunas', 'Benih', 'tunas_benih@mail.com', '0856-3017-051', 'Kedunglumpang, Kec. Mojoagung, Kabupaten Jombang, Jawa Timur 61482', NULL, 11, 164, 61482, NULL, '$2y$10$bgAZ7OfPsqL7uLfVR1J3reTa11NeG5KtLi4Ugw9qDfyqAQK.6JFFG', 0, NULL, NULL, '2022-07-04 16:10:17'),
(18, 'Dapur', 'Mamaku', 'dapur_mamaku@mail.com', '0812-9878-4888', 'Dawuhan, Kec. Kademangan, Blitar, Jawa Timur 66161', NULL, 11, 74, 66161, NULL, '$2y$10$RHTCKJe610P.an07Awz8X.pwrmBJqIkRDedliiQZnZ6ElBnyxeBBe', 0, NULL, NULL, '2022-07-04 16:13:02'),
(19, 'Pusat', 'Distributor', 'pusat_distributor@mail.com', '0812-2647-3521', 'Jl. Anjuk Ladang, Ploso, Kec. Nganjuk, Kabupaten Nganjuk, Jawa Timur 64417', NULL, 11, 305, 64417, NULL, '$2y$10$zLqHeOYYZg1xgj2a9kyMVupcRARtX5ZQ1mq1dKLao3CCrH/w5jhMe', 0, NULL, NULL, '2022-07-05 05:28:32'),
(20, 'DIDINOP', NULL, 'didinop@mail.com', '0812-2647-3521', 'Jl. Jenderal Sudirman No.16, Kepanjen Lor, Kec. Kepanjenkidul, Kota Blitar, Jawa Timur 66112', NULL, 11, 74, 66112, NULL, '$2y$10$z/jn3Dnlni9IMnmD1xKUQu7lkYhXeBGunrly.C9ROExAC21bpJhky', 0, NULL, NULL, '2022-07-05 05:51:12'),
(21, 'Nutrisi', 'Indah', 'nutrisi_indah@mail.com', '0889999999999', 'Jl. Jenderal Sudirman No.16, Kepanjen Lor, Kec. Kepanjenkidul, Kota Blitar, Jawa Timur 66112', NULL, 11, 74, 66112, NULL, '$2y$10$/Px3qefcFCXfZn86jubXmeAtOQKML95MIduRceX8y4sDMeCamuXF2', 0, NULL, NULL, '2022-07-05 05:53:21'),
(22, 'Pujaseraku', NULL, 'pujaseraku@mail.com', '(0355) 335579', 'Desa Moyoketen, RT.03/RW.04, Kalituri, Waung, Kec. Boyolangu, Kabupaten Tulungagung, Jawa Timur 66235', NULL, 11, 492, 66235, NULL, '$2y$10$BY8o4D9l3qVHJ.a8l9tODeuz1umS983zFWgP/Sy0gPoJLbAQFk12C', 0, NULL, NULL, '2022-07-05 05:55:19'),
(23, 'Formula', 'Mart', 'formula_mart@mail.com', '0812-4327-3481', 'Jl. Wadung Asih, Prasungtambak, Prasung, Kec. Buduran, Kabupaten Sidoarjo, Jawa Timur 61252', NULL, 11, 409, 61252, NULL, '$2y$10$UA6i5WWS4t4SUkrY7JRYOeRhWNksCdLdNO74XSsCxIAK7.n6alZvq', 0, NULL, NULL, '2022-07-05 05:58:21'),
(24, 'Choseed', NULL, 'choseed@mail.com', '0813-3623-3017', 'Jl. Temenggungan Ledok, Kesatrian, Kec. Blimbing, Kota Malang, Jawa Timur 65121', NULL, 11, 256, 65121, NULL, '$2y$10$LL1uILxCVraH/ppuergaROmRQpfdJEZLOc6n6r.Doc12Pzmz6QKtS', 0, NULL, NULL, '2022-07-05 06:00:02'),
(25, 'Victory', 'Seed', 'victory_seed@mail.com', '0812-6425-5471', 'Segolo-golo Eco Park, Area Sawah/Kebun, Panglungan, Wonosalam, Kabupaten Jombang, Jawa Timur 61476', NULL, 11, 164, 61476, NULL, '$2y$10$qokP74vp3FdzIsmcde5rvumge5K6KpxeoTYdbrd8uBP5MKYLzwIfG', 0, NULL, NULL, '2022-07-05 06:01:43'),
(26, 'Kamsya', NULL, 'kamsya@mail.com', '0822-2573-3568', 'Kutorejo, Kec. Tuban, Kabupaten Tuban, Jawa Timur 62311', NULL, 11, 489, 62311, NULL, '$2y$10$6wTrxR3urFgEoL8Dp1xILeWqTvvbaKR3PU51vIdjgWBkg5NzF8uJO', 0, NULL, NULL, '2022-07-05 06:04:11'),
(27, 'Cyborgh', NULL, 'cyborgh@mail.com', '0851-0025-0379', 'Jalan Dokter Soetomo, Serning, Banjaragung, Kec. Bareng, Kabupaten Jombang, Jawa Timur 61474', NULL, 11, 164, 61474, NULL, '$2y$10$hK9FV4YaWCa8vK6H6tDSQO9C8bubogn0ovNdflB7EsfQCB39jTsm2', 0, NULL, NULL, '2022-07-05 06:07:07'),
(28, 'Jane', 'Farida', 'jane_farida@mail.com', '024 1125 4899', 'Gg. Salam No. 809, Payakumbuh 96147, SulBar', NULL, 11, 444, 60186, NULL, '$2y$10$s27OcxHXaz33UzJjCbIz4.628t.PlA94O7NkdKyubi27H/JTXDAYO', 0, NULL, NULL, NULL),
(29, 'Ian', 'Nababan', 'ian_nababan@mail.com', '0742 6044 1863', 'Kpg. Cihampelas No. 894, Solok 47325, KalTeng', NULL, 11, 444, 60186, NULL, '$2y$10$7MqKP7Z.0W5aPuJhxCx0QujoYjc0L6Zb1ky3mEuW/y8PwC7935fjC', 0, NULL, NULL, NULL),
(30, 'Devi', 'Wulandari', 'devi_wulandari@mail.com', '(+62) 712 4540 379', 'Kpg. Bakau No. 179, Makassar 68954, Banten', NULL, 11, 444, 60186, NULL, '$2y$10$MzyK/E/CNX.kYb.GV0eXjurSEHVU3uUYFC3MUdp.MOpuuQ/S6iEVq', 0, NULL, NULL, NULL),
(31, 'Ayu', 'Kuswandari', 'ayu_kuswandari@mail.com', '(+62) 23 9741 4806', 'Gg. Suniaraja No. 43, Jambi 91393, JaTeng', NULL, 11, 444, 60186, NULL, '$2y$10$88uZ6lw4TqBdErhOGEKP6Oe0vNJ4sKfvXBgvRYN1ZdC4.y8lU.v9i', 0, NULL, NULL, NULL),
(32, 'Anom ', 'Megantara', 'anom_megantara@mail.com', '0653 8787 923', 'Manukan', NULL, 11, 444, 60186, NULL, '$2y$10$pnZFU40S55V4FP46Yuzp7OyLIBYqutKG2kijX6XPGNlw/HGMm1Ozq', 0, NULL, NULL, NULL),
(33, 'Nadine ', 'Wahyuni', 'nadine_wahyuni@mail.com', '0260 1373 3869', 'Jln. Suryo No. 166, Bandar Lampung 93171, DKI', NULL, 11, 444, 60186, NULL, '$2y$10$WxUvNjLpBVYvu867ulVTy.y2XXhO19JhFhkbkyh9SCc9s8wwiVZbO', 0, NULL, NULL, NULL),
(34, 'Eka ', 'Aryani', 'eka_aryani@mail.com', '(+62) 423 7301 3760', 'Jln. Setia Budi No. 259, Subulussalam 78192, KepR', NULL, 11, 444, 60186, NULL, '$2y$10$P7qohxILeohbaTZvHlQwtemTBA/nXZ4w4mGuIWrU9gp7xzvEQlroe', 0, NULL, NULL, NULL),
(35, 'Dodo ', 'Dabukke', 'dodo_dabukke@mail.com', '(+62) 423 3659 7998', 'Ds. Cikapayang No. 392, Tangerang Selatan 93552, Aceh', NULL, 11, 444, 60186, NULL, '$2y$10$xDZHZCA7X3xlRkTAQStfI.qdJBnT/Mbz3v5XuTb6Cb.iWpmCjComa', 0, NULL, NULL, NULL),
(36, 'Clara', 'Pudjiastuti', 'clara_pudjiastuti@mail.com', '0211 7912 3063', 'Jln. Ters. Kiaracondong No. 251, Administrasi Jakarta Utara 70989, Aceh', NULL, 11, 444, 60186, NULL, '$2y$10$HIB9pYNof8QcguXbJqgRqeSeKuQ2ZnCkFgNpLoZmu5j1HLP7DvAXi', 0, NULL, NULL, NULL),
(37, 'Kani', 'Wijayanti', 'kani_wijayanti@mail.com', '(+62) 305 5006 7893', 'Gg. Sumpah Pemuda No. 118, Sawahlunto 32059, DKI', NULL, 11, 444, 60186, NULL, '$2y$10$Sg5QWtQwHTdvw16TVfagdO/A099eI8xlmnw7Tn5ngd38WyTm6s8xG', 0, NULL, NULL, NULL),
(38, 'Samiah', 'Wahyuni', 'samiah_wahyuni@mail.com', '0254 4590 5349', 'Gg. Salak No. 328, Tidore Kepulauan 67073, NTB', NULL, 11, 444, 60186, NULL, '$2y$10$QbGi8C1y0f3SYqqGGao4/ua6oSpt1v0UqTnW5lzC8vTwfXG7twAmi', 0, NULL, NULL, NULL),
(39, 'Eko', 'Najmudin', 'eko_najmudin@mail.com', '0752 1773 219', 'Ds. Flora No. 109, Yogyakarta 21452, SumSel', NULL, 11, 444, 60186, NULL, '$2y$10$59D5wxLiCElzN4zLTVc0wuhmDJRfWkXcKnwfcY7Z6aN4IBdYkdKsa', 0, NULL, NULL, NULL),
(40, 'Kemba', 'Nugroho', 'kemba_nugroho@mail.com', '(+62) 219 1298 883', 'Dk. Tambun No. 529, Bitung 11847, NTT', NULL, 11, 444, 60186, NULL, '$2y$10$rN4TJxbsvxjPqZUBc3yi5.f8Q3i3GX1fEgHwg/IoFubmKgWrgeHNO', 0, NULL, NULL, NULL),
(41, 'Opung', 'Januar', 'opung_januar@mail.com', '(+62) 813 5325 282', 'Ds. B.Agam Dlm No. 201, Cirebon 33887, SulSel', NULL, 11, 444, 60186, NULL, '$2y$10$oiiHySvosVDeefcEgFIJtuhOZxTeprAAxu8b7LpKkzqPJtv1puS1i', 0, NULL, NULL, NULL),
(42, 'Najwa', 'Rahmawati', 'najwa_rahmawati@mail.com', '0804 2741 421', 'Jln. Panjaitan No. 521, Medan 93837, KalUt', NULL, 11, 444, 60186, NULL, '$2y$10$1QAM368X2hPQIZUdKjcD6eyJ/juVojyjSwDjTnu30k9sHgA..opu.', 0, NULL, NULL, NULL),
(43, 'Gawati', 'Astuti', 'gawati_astuti@mail.com', '(+62) 803 407 590', 'Kpg. Padang No. 254, Bontang 41358, KalBar', NULL, 11, 444, 60186, NULL, '$2y$10$4dy3Kc36GpPOOnNtHG1O2eCmXFlfa5KhqxHp2x1yqLUpglV3Wgppe', 0, NULL, NULL, NULL),
(44, 'Bagya', 'Kusumo', 'bagya_kusumo@mail.com', '(+62) 410 8847 7207', 'Jln. Haji No. 721, Tegal 88984, Jambi', NULL, 11, 444, 60186, NULL, '$2y$10$ZUch.4rNXa0gkWo3LDMmi.xOygH/EjdnOsyH8AJEqQCYJCRBC9kiW', 0, NULL, NULL, NULL),
(45, 'Sakura', 'Wastuti', 'sakura_wastuti@mail.com', '0303 2751 5475', 'Psr. Sampangan No. 257, Gunungsitoli 95560, Lampung', NULL, 11, 444, 60186, NULL, '$2y$10$hGBXJ8lNaSbBHzLpjvuWT.u5TtqiefhPs3wDpJ6poOD4an90lFjF2', 0, NULL, NULL, NULL),
(46, 'Sari', 'Rahimah', 'sari_rahimah@mail.com', '0862 9984 1681', 'Psr. Babadan No. 202, Padangpanjang 48655, SulBar', NULL, 11, 444, 60186, NULL, '$2y$10$bR5ndKlyPFrrykwK7NIpXev/vnVDwGqa89d8Z2AUYzurL.EfJLe86', 0, NULL, NULL, NULL),
(47, 'Chandra', 'Suwarno', 'chandra_suwarno@mail.com', '(+62) 488 8848 409', 'Ds. Surapati No. 471, Pagar Alam 30406, SumUt', NULL, 11, 444, 60186, NULL, '$2y$10$xVyuO9Fcaki9G2RV4U/0hOvNtTy9gsVx0Bw0FUzWzKiOuX1vTn/xS', 0, NULL, NULL, NULL),
(48, 'Gasti', 'Handayani', 'gasti_handayani@mail.com', '(+62) 474 9649 771', 'Dk. Banal No. 582, Bandung 56534, SulTra', NULL, 11, 444, 60186, NULL, '$2y$10$EwSMcfKUdluAzV6dOFGZXehI2TVIHghYGDyQLsySvzZTujpWyzxfq', 0, NULL, NULL, NULL),
(49, 'Hadi', 'Habibi', 'hadi_habibi@mail.com', '0719 8000 2014', 'Dk. Gremet No. 630, Jayapura 82455, KalTim', NULL, 11, 444, 60186, NULL, '$2y$10$0jo5T.FWkBQx53sXoTvk3evIYedD7qLGvuJ/KKwXyXTyFA9EI6HSK', 0, NULL, NULL, NULL),
(50, 'Jane', 'Palastri', 'jane_palastri@mail.com', '(+62) 377 1085 468', 'Jln. Bank Dagang Negara No. 520, Surabaya 41896, MalUt', NULL, 11, 444, 60186, NULL, '$2y$10$fyiUIADy3yrrggI/T66vtuiIama8AQc5UvTutwguqGyecF9qAuBYS', 0, NULL, NULL, NULL),
(51, 'Gawati', 'Pudjiastuti', 'gawati_pudjiastuti@mail.com', '0669 4277 072', 'Psr. Suprapto No. 387, Tangerang Selatan 69349, JaBar', NULL, 11, 444, 60186, NULL, '$2y$10$mf8SwOSXqJk.3vSqMY0/xO3BvDOpMJr9lQTu9wspq4q9EQgB2UYA6', 0, NULL, NULL, NULL),
(52, 'Ajiman', 'Nashiruddin', 'ajiman_nashiruddin@mail.com', '0765 7635 1622', 'Dk. Jagakarsa No. 837, Medan 96444, KalBar', NULL, 11, 444, 60186, NULL, '$2y$10$yWyRQtsRQFZ0Vw6idWRcE.SHtIcMyoh.1RMWMbJ4nf0a1Xe0RowwS', 0, NULL, NULL, NULL),
(53, 'Nova', 'Wahyuni', 'nova_wahyuni@mail.com', '0280 5356 005', 'Gg. Bakau No. 917, Kotamobagu 42964, BaBel', NULL, 11, 444, 60186, NULL, '$2y$10$7Mx9nX57HX1xEuVoLCEnH..EI0I78QYYHy89vJPpOOpL7wBt15YjG', 0, NULL, NULL, NULL),
(54, 'Enteng', 'Pradana', 'enteng_pradana@mail.com', '024 9252 3294', 'Psr. Cihampelas No. 598, Padangsidempuan 63954, SulTeng', NULL, 11, 444, 60186, NULL, '$2y$10$nutlepU5xJ3j.WEITgD1FuRj6vDOgS3o3tcgaOloooMdC3x/Yd9ya', 0, NULL, NULL, NULL),
(55, 'Jarwa', 'Saragih', 'jarwa_saragih@mail.com', '(+62) 675 6180 0115', 'Psr. Basoka No. 571, Binjai 68470, Riau', NULL, 11, 444, 60186, NULL, '$2y$10$O.GjDAKfF.mKcELwMvN.uu6fOu/JE7/pkOuG4wvz/yN.CsqWCfATG', 0, NULL, NULL, NULL),
(56, 'Kamila', 'Andriani', 'kamila_andriani@mail.com', '0371 0071 7331', 'Psr. Kalimantan No. 627, Kendari 51938, MalUt', NULL, 11, 444, 60186, NULL, '$2y$10$PuQD0E4XDktDLAsZKCS1k.kgmEjY0nReRjysnQsZhluAqUfOinq8G', 0, NULL, NULL, NULL),
(57, 'Lanjar', 'Suryono', 'lanjar_suryono@mail.com', '0824 4794 3864', 'Kpg. B.Agam Dlm No. 897, Subulussalam 74452, KalTeng', NULL, 11, 444, 60186, NULL, '$2y$10$qXNKxTKfXFLhCJXD9jEUL.pLaubdUmfHfH/0C/bgJM9o4IfHHF6Da', 0, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_user_id_foreign` (`user_id`),
  ADD KEY `articles_slug_index` (`slug`),
  ADD KEY `articles_published_at_index` (`published_at`),
  ADD KEY `articles_article_type_index` (`article_type`);

--
-- Indeks untuk tabel `article_categories`
--
ALTER TABLE `article_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_categories_article_id_foreign` (`article_id`),
  ADD KEY `article_categories_category_article_id_foreign` (`category_article_id`);

--
-- Indeks untuk tabel `article_images`
--
ALTER TABLE `article_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_images_imageable_id_imageable_type_index` (`imageable_id`,`imageable_type`);

--
-- Indeks untuk tabel `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `attribute_options`
--
ALTER TABLE `attribute_options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attribute_options_attribute_id_foreign` (`attribute_id`);

--
-- Indeks untuk tabel `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `capitals`
--
ALTER TABLE `capitals`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cart_storage`
--
ALTER TABLE `cart_storage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_storage_id_index` (`id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `category_articles`
--
ALTER TABLE `category_articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_articles_parent_id_foreign` (`parent_id`),
  ADD KEY `category_articles_slug_index` (`slug`);

--
-- Indeks untuk tabel `centroids`
--
ALTER TABLE `centroids`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `centros`
--
ALTER TABLE `centros`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coupons_code_unique` (`code`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favorites_product_id_foreign` (`product_id`),
  ADD KEY `favorites_user_id_product_id_index` (`user_id`,`product_id`);

--
-- Indeks untuk tabel `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `log_activities`
--
ALTER TABLE `log_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_code_unique` (`code`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_approved_by_foreign` (`approved_by`),
  ADD KEY `orders_cancelled_by_foreign` (`cancelled_by`),
  ADD KEY `orders_code_index` (`code`),
  ADD KEY `orders_code_order_date_index` (`code`,`order_date`),
  ADD KEY `orders_payment_token_index` (`payment_token`);

--
-- Indeks untuk tabel `order_items`
--
ALTER TABLE `order_items`
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`),
  ADD KEY `order_items_sku_index` (`sku`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `payment_confirmations`
--
ALTER TABLE `payment_confirmations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payment_confirmations_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`),
  ADD KEY `products_shop_id_foreign` (`shop_id`),
  ADD KEY `products_parent_id_foreign` (`parent_id`);
ALTER TABLE `products` ADD FULLTEXT KEY `search` (`name`,`slug`,`short_description`,`description`);

--
-- Indeks untuk tabel `product_attribute_values`
--
ALTER TABLE `product_attribute_values`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_attribute_values_product_id_foreign` (`product_id`),
  ADD KEY `product_attribute_values_attribute_id_foreign` (`attribute_id`),
  ADD KEY `product_attribute_values_parent_product_id_foreign` (`parent_product_id`);

--
-- Indeks untuk tabel `product_brands`
--
ALTER TABLE `product_brands`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_brands_product_id_foreign` (`product_id`),
  ADD KEY `product_brands_brand_id_foreign` (`brand_id`);

--
-- Indeks untuk tabel `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_categories_product_id_foreign` (`product_id`),
  ADD KEY `product_categories_category_id_foreign` (`category_id`);

--
-- Indeks untuk tabel `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indeks untuk tabel `product_ingredients`
--
ALTER TABLE `product_ingredients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_ingredients_product_id_foreign` (`product_id`),
  ADD KEY `product_ingredients_ingredient_id_foreign` (`ingredient_id`);

--
-- Indeks untuk tabel `product_inventories`
--
ALTER TABLE `product_inventories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_inventories_product_id_foreign` (`product_id`);

--
-- Indeks untuk tabel `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_reviews_user_id_foreign` (`user_id`),
  ADD KEY `product_reviews_product_id_foreign` (`product_id`);

--
-- Indeks untuk tabel `product_sells`
--
ALTER TABLE `product_sells`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `shipments`
--
ALTER TABLE `shipments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shipments_user_id_foreign` (`user_id`),
  ADD KEY `shipments_order_id_foreign` (`order_id`),
  ADD KEY `shipments_shipped_by_foreign` (`shipped_by`),
  ADD KEY `shipments_track_number_index` (`track_number`);

--
-- Indeks untuk tabel `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shops_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `shop_capitals`
--
ALTER TABLE `shop_capitals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shop_capitals_shop_id_foreign` (`shop_id`),
  ADD KEY `shop_capitals_capital_id_foreign` (`capital_id`);

--
-- Indeks untuk tabel `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slides_user_id_index` (`user_id`);

--
-- Indeks untuk tabel `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `taggables`
--
ALTER TABLE `taggables`
  ADD KEY `taggables_tag_id_foreign` (`tag_id`),
  ADD KEY `taggables_taggable_id_taggable_type_index` (`taggable_id`,`taggable_type`);

--
-- Indeks untuk tabel `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tags_slug_index` (`slug`);

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
-- AUTO_INCREMENT untuk tabel `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `article_categories`
--
ALTER TABLE `article_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `article_images`
--
ALTER TABLE `article_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `attribute_options`
--
ALTER TABLE `attribute_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `capitals`
--
ALTER TABLE `capitals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `category_articles`
--
ALTER TABLE `category_articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `centroids`
--
ALTER TABLE `centroids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `centros`
--
ALTER TABLE `centros`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `log_activities`
--
ALTER TABLE `log_activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `payment_confirmations`
--
ALTER TABLE `payment_confirmations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `product_attribute_values`
--
ALTER TABLE `product_attribute_values`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `product_brands`
--
ALTER TABLE `product_brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `product_ingredients`
--
ALTER TABLE `product_ingredients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `product_inventories`
--
ALTER TABLE `product_inventories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `product_reviews`
--
ALTER TABLE `product_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `product_sells`
--
ALTER TABLE `product_sells`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `regions`
--
ALTER TABLE `regions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `shipments`
--
ALTER TABLE `shipments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `shops`
--
ALTER TABLE `shops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `shop_capitals`
--
ALTER TABLE `shop_capitals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `article_categories`
--
ALTER TABLE `article_categories`
  ADD CONSTRAINT `article_categories_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `article_categories_category_article_id_foreign` FOREIGN KEY (`category_article_id`) REFERENCES `category_articles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `attribute_options`
--
ALTER TABLE `attribute_options`
  ADD CONSTRAINT `attribute_options_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `category_articles`
--
ALTER TABLE `category_articles`
  ADD CONSTRAINT `category_articles_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `category_articles` (`id`);

--
-- Ketidakleluasaan untuk tabel `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `favorites_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_approved_by_foreign` FOREIGN KEY (`approved_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `orders_cancelled_by_foreign` FOREIGN KEY (`cancelled_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Ketidakleluasaan untuk tabel `payment_confirmations`
--
ALTER TABLE `payment_confirmations`
  ADD CONSTRAINT `payment_confirmations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `products_shop_id_foreign` FOREIGN KEY (`shop_id`) REFERENCES `shops` (`id`),
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
