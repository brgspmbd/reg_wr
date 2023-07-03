-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 03 Jul 2023 pada 08.20
-- Versi server: 8.0.31
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reg_wr`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akumulasi_time`
--

DROP TABLE IF EXISTS `akumulasi_time`;
CREATE TABLE IF NOT EXISTS `akumulasi_time` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_user` varchar(255) NOT NULL,
  `time_check_out` datetime NOT NULL,
  `time_check_in` datetime NOT NULL,
  `total_menit` int NOT NULL,
  `activity` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `business_forum`
--

DROP TABLE IF EXISTS `business_forum`;
CREATE TABLE IF NOT EXISTS `business_forum` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `salutation` varchar(50) NOT NULL,
  `salutation2` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `whatsappnumber` varchar(20) NOT NULL,
  `bukti_transfer` varchar(255) NOT NULL,
  `flagdeleted` varchar(1) NOT NULL,
  `status_approve` varchar(50) NOT NULL,
  `approve_by` varchar(50) NOT NULL,
  `approve_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `full_paper`
--

DROP TABLE IF EXISTS `full_paper`;
CREATE TABLE IF NOT EXISTS `full_paper` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_user` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `paper_id` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `corresponding_author` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `origin_country` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `institution` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alternative_email` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `present_at_the_venue` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `paper_tittle` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `first_author_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `first_author_institution` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `additional_author_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `additional_author_institution` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `full_paper` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `flagdeleted` varchar(1) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_check_in`
--

DROP TABLE IF EXISTS `log_check_in`;
CREATE TABLE IF NOT EXISTS `log_check_in` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_user` varchar(50) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `time` datetime NOT NULL,
  `activity` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_check_out`
--

DROP TABLE IF EXISTS `log_check_out`;
CREATE TABLE IF NOT EXISTS `log_check_out` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_user` varchar(255) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `time` datetime NOT NULL,
  `activity` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_activity`
--

DROP TABLE IF EXISTS `mst_activity`;
CREATE TABLE IF NOT EXISTS `mst_activity` (
  `id` int NOT NULL AUTO_INCREMENT,
  `activity_code` varchar(50) NOT NULL,
  `activity_name` varchar(255) NOT NULL,
  `location` varchar(20) NOT NULL,
  `kapasitas` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rfid` varchar(55) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `country` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `organization` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `level` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `workunit` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `type_of_attendance` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `bukti_transfer` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `activity1` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `activity2` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `activity3` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `activity4` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `activity5` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `activity6` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `activity7` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `activity8` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `activity9` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `activity10` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `activity11` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `activity12` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `activity13` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `flagdeleted` varchar(1) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status_approved` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `voucher` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_admin`
--

DROP TABLE IF EXISTS `user_admin`;
CREATE TABLE IF NOT EXISTS `user_admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lastlogin` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `flagdeleted` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `rules` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `voucher`
--

DROP TABLE IF EXISTS `voucher`;
CREATE TABLE IF NOT EXISTS `voucher` (
  `id` int NOT NULL AUTO_INCREMENT,
  `voucher` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `using_voucher` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
