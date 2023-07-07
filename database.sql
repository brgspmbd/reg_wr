-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 07 Jul 2023 pada 03.24
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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `akumulasi_time`
--

INSERT INTO `akumulasi_time` (`id`, `id_user`, `time_check_out`, `time_check_in`, `total_menit`, `activity`) VALUES
(1, '1', '2023-07-03 07:57:31', '2023-07-03 09:57:31', 120, 'act1');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `business_forum`
--

INSERT INTO `business_forum` (`id`, `id_user`, `email`, `full_name`, `salutation`, `salutation2`, `country`, `company`, `position`, `whatsappnumber`, `bukti_transfer`, `flagdeleted`, `status_approve`, `approve_by`, `approve_time`) VALUES
(1, '4', 'tarmizibantan@gmail.com', 'bergas', 'Prof.', 'Mr', 'Indnesia', 'Directorate General of Highways, Ministry of Publi', 'as', '098432904832', 'daf2552d71135a5548bfd555b58d1d33.pdf', '0', '', '', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `full_paper`
--

INSERT INTO `full_paper` (`id`, `id_user`, `paper_id`, `corresponding_author`, `date_of_birth`, `origin_country`, `institution`, `email`, `alternative_email`, `phone_number`, `present_at_the_venue`, `paper_tittle`, `first_author_name`, `first_author_institution`, `additional_author_name`, `additional_author_institution`, `full_paper`, `created_at`, `updated_at`, `flagdeleted`) VALUES
(6, '1', 'A-04', 'werwer', '2000-03-08', 'werwer', 'werwe', 'rwerwerwerwer', 'rwerew', 'rwerwer', 'yes', 'wer', 'wer', 'werewr', 'ewrewr', 'werw', '', NULL, NULL, NULL),
(7, '4', 'a04', 'asd', '2023-06-05', 'indonesia', 'as', 'tarmizibantan@gmail.com', 'tar@asd.com', '123456789', 'yes', 'asdfgh', 'wertyu', 'werty', 'ertyu', 'ertyu', '55c00fb6d12c7fea9a07e3e84e3b410b.pdf', NULL, NULL, NULL),
(8, '3', 'a-07', 'sdf', '2018-02-14', 'INdonesia', 'sadas', 'sdf@fd.com', 'sdfsdf', '6871897', 'yes', 'sdfsdf', 'sdfsd', 'fsdfsdf', 'sdfsdfsd', 'fsdfsdf', 'rpt_Rincian_Cuti-Ijin_Per-Karyawan_-_format.pdf', NULL, NULL, NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `log_check_in`
--

INSERT INTO `log_check_in` (`id`, `id_user`, `nama_user`, `time`, `activity`) VALUES
(1, '1', 'Johan Pratama Putra', '2023-07-03 07:56:29', 'act1');

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `log_check_out`
--

INSERT INTO `log_check_out` (`id`, `id_user`, `nama_user`, `time`, `activity`) VALUES
(1, '1', '2', '2023-07-03 09:57:31', 'act1');

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `mst_activity`
--

INSERT INTO `mst_activity` (`id`, `activity_code`, `activity_name`, `location`, `kapasitas`) VALUES
(1, '', 'aasdasd', 'asd', 0),
(2, '', 'sdf', '', 0),
(3, 'act1', 'sdf', '', 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `rfid`, `email`, `title`, `full_name`, `phone_number`, `country`, `organization`, `level`, `workunit`, `type_of_attendance`, `bukti_transfer`, `activity1`, `activity2`, `activity3`, `activity4`, `activity5`, `activity6`, `activity7`, `activity8`, `activity9`, `activity10`, `activity11`, `activity12`, `activity13`, `created_at`, `updated_at`, `flagdeleted`, `status_approved`, `voucher`) VALUES
(1, NULL, 'admin@admin.com', 'Ms.', 'Johan Pratama Putra', '08658848993', 'Indonesia', 'Road Engineering Association of Asia and Australasia (REAAA)', NULL, 'wr', 'Offline', 'fecad02c3f0f09b5e2642d7b0e3a3306.png', 'attend', '', '', '', 'attend', '', '', '', 'attend', '', '', '', '', '2023-06-30', '2023-06-30', '0', 'approved', ''),
(3, NULL, 'bergastripambudi@gmail.com', 'Mr.', 'Bergas Tri Pambudi', '085736439204', 'Indonesia', 'World Road Association (PIARC)', NULL, 'Branch Executive Board of North Sumatera Region', 'Offline', 'ad3e512a0f4c949756f77880da8cd11f.jpg', 'attend', '', 'attend', '', 'attend', '', '', '', '', '', '', '', '', '2023-06-28', '2023-06-28', '0', 'approved', 'abcdef'),
(4, NULL, 'tarmizibantan@gmail.com', 'Mr.', 'tarmizi', '082304832', 'Indnesia', 'Road Engineering Association of Asia and Australasia (REAAA)', NULL, 'Branch Executive Board of Riau Region', 'Online', 'd88225a9bcdf648ab7d196d72d3c475b.PNG', '', 'attend', 'attend', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '0', 'approved', ''),
(5, NULL, 'brgs.tes@gmail.com', 'Mr.', 'Bergas', '12345678', 'Indnesia', 'Directorate General of Highways, Ministry of Public Works and Housing (MPWH)', NULL, 'Branch Executive Board of South Sumatera Region', 'Offline', '8612e24d950afb575d1979a1e7ce2210.PNG', '', '', '', '', '', '', '', 'attend', '', '', '', '', '', '2023-06-28', '2023-06-30', '0', 'approved', ''),
(6, NULL, 'bergaspambudi1@gmail.com', 'Mr.', 'Bergas', '12345', 'INdnesia', 'World Road Association (PIARC)', NULL, 'qwe', 'Offline', 'cef4ae5e8b06e010a42d03d9a5850b79.PNG', '', '', '', '', 'attend', '', '', '', 'attend', '', '', '', '', '2023-06-28', '2023-07-01', '0', 'approved', ''),
(7, NULL, 'avanrinharsah@gmail.com', 'Mr.', 'Avan', '085335580547', 'indonesia', 'Directorate General of Highways, Ministry of Public Works and Housing (MPWH)', NULL, 'Human Resources Development Agency', 'Offline', 'ab601a2e712d9398480349aada3d6832.png', '', '', 'attend', '', '', '', 'attend', '', '', '', '', '', '', '2023-07-01', '2023-06-30', '0', 'pending', 'abcdef'),
(8, NULL, 'dicky.dwi.r@gmail.com', 'Mr.', 'Dicky Dwi R', '+628754916235', 'Indonesia', '', NULL, 'Central Executive Board', 'Offline', '50ef21b87b2833304287201eeb6cce49.jpg', '', '', '', '', '', 'attend', '', '', '', '', '', '', '', NULL, NULL, '0', 'approved', ''),
(9, NULL, 'email', 'Mr.', 'full_name', 'phone_number', 'Indonesia', 'World Road Association (PIARC)', NULL, 'Central Executive Board', 'type_of_attendance', 'bd1a450f99a7a4b38ce12b7197e9a247.jpg', 'attend', '', '', 'attend', '', 'attend', '', '', '', '', '', '', '', '2023-06-27', '2023-06-27', '0', 'approved', ''),
(10, NULL, 'cobaavan@wer', 'Mrs.', 'asd', 'asd', 'asd', 'World Road Association (PIARC)', NULL, 'Branch Executive Board of Riau Region', 'Online', '128ca59b7215faa6d24af4b803bbde39.png', '', '', '', '', 'attend', '', '', '', '', '', '', '', '', '2023-06-26', NULL, '0', 'approved', ''),
(11, NULL, 'email', 'Mrs.', 'full_name', 'phone_number', 'qqqqqq', 'World Road Association (PIARC)', NULL, 'Branch Executive Board of Aceh Region', 'type_of_attendance', '42d78b2efa42e0d946ff7257f7a808be.png', '', '', '', '', 'attend', '', '', '', '', '', '', '', '', '2023-06-26', NULL, '0', 'approved', ''),
(12, NULL, 'wrnet213@gmail.com', 'Mr.', 'WRNET2', '0890', 'ASF', 'Directorate General of Highways, Ministry of Public Works and Housing (MPWH)', NULL, 'Central Executive Board', 'Online', '9d15586c608c6f9700f7b49ae0610113.png', 'attend', '', '', '', '', '', '', '', '', '', '', '', '', '2023-06-26', NULL, '0', 'approved', ''),
(13, NULL, 'wahyudc.work@gmail.com', 'Mr.', 'Wahyu Ganteng', '5668887', 'Bangladesh', 'Road Engineering Association of Asia and Australasia (REAAA)', NULL, 'Manuk akal', 'Online', '', '', '', '', '', 'attend', '', '', '', '', '', '', '', '', '2023-06-30', '2023-06-30', '0', 'approved', 'abcdef'),
(14, NULL, 'aaaa@gmail.com', 'Mr.', 'asd', 'asd', 'asd', 'Road Engineering Association of Asia and Australasia (REAAA)', NULL, 'Branch Executive Board of East Nusa Tenggara Region', 'Offline', 'f002bb4e5c9b231f5b12c92fc40a3518.png', '', '', 'attend', '', '', '', '', '', '', '', '', '', '', '2023-06-27', NULL, '0', 'approved', ''),
(15, NULL, 'avancoba@gmail.com', 'Mrs.', 'asd', 'asd', 'asd', 'World Road Association (PIARC)', NULL, 'Branch Executive Board of Jambi Region', 'Offline', '38450b278fefe257d2f9b6684d6e2880.jpg', 'attend', '', '', '', '', '', '', '', '', '', '', '', '', '2023-06-27', '2023-06-27', '0', 'approved', ''),
(16, NULL, 'dellarisa.astari@pu.go.id', 'Ms.', 'De', '123', 'ina', 'World Road Association (PIARC)', NULL, '', 'Offline', '', 'attend', 'attend', 'attend', 'attend', 'attend', 'attend', 'attend', 'attend', 'attend', 'attend', 'attend', 'attend', 'attend', '2023-06-27', '2023-06-27', '0', 'approved', ''),
(17, NULL, 'indyraa.kusuma@gmail.com', 'Ms.', 'Nindya', '085790253352', 'Indonesia', 'Directorate General of Highways, Ministry of Public Works and Housing (MPWH)', NULL, 'Secretariat General', 'Offline', '', '', '', '', '', '', '', '', '', '', '', 'attend', '', '', '2023-06-30', '2023-07-01', '0', 'approved', 'abcdef'),
(18, NULL, 'subditp2jbh@gmail.com', 'Mrs.', 'Dina Amalia', '082276268440', 'Indonesia', 'Directorate General of Highways, Ministry of Public Works and Housing (MPWH)', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-06-27', '2023-06-27', '0', 'approved', ''),
(19, NULL, 'coba1@gmail.com', 'Mr.', 'bergas', '085456456456', 'indonesia', '', NULL, 'Branch Executive Board of Papua Region', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-06-27', NULL, '0', 'pending', ''),
(20, NULL, 'ferdy@gmail.com', 'Mr.', 'Ferdy Febriyanto', '0865956468359', 'tes', 'Directorate General of Highways, Ministry of Public Works and Housing (MPWH)', NULL, 'option2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-06-28', NULL, '0', 'pending', ''),
(21, NULL, 'ferdyfebriyanto22@gmail.com', 'Mr.', 'Ferdy Febriyanto', '085956468359', 'Indonesia', 'wrnet', NULL, '', 'Offline', '', 'attend', 'attend', 'attend', 'attend', 'attend', 'attend', 'attend', 'attend', 'attend', 'attend', 'attend', 'attend', 'attend', '2023-06-30', '2023-06-30', '0', 'approved', ''),
(22, NULL, 'anggraenifeni5@gmail.com', 'Ms.', 'feni', '09889009890', 'indonesia', 'Road Engineering Association of Asia and Australasia (REAAA)', NULL, 'Japan', 'Online', '', '', '', '', '', '', 'attend', '', '', '', '', '', '', '', '2023-06-30', '2023-06-30', '0', 'approved', 'abcdef'),
(23, NULL, 'indrapm.rama@gmail.com', 'Mr.', 'Mahatma Ghandi', '084546649', 'Indonesia ', 'IMM', NULL, '', 'Online', 'fbbe1988b3a90bb4c6093d6aca9d0d79.jpg', '', 'attend', '', '', '', '', '', '', '', '', '', '', '', '2023-06-30', '2023-06-30', '0', 'approved', ''),
(24, NULL, 'wild98an@gmail.com', 'Mr.', 'Wildan B', '0895327504191', 'Indonesia ', 'Indonesian Road Development Association (HPJI)', NULL, 'Central Executive Board', 'Online', '', '', '', '', '', '', '', '', 'attend', '', '', '', '', '', '2023-06-30', '2023-06-30', '0', 'approved', 'abcdef');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `user_admin`
--

INSERT INTO `user_admin` (`id`, `username`, `email`, `password`, `lastlogin`, `flagdeleted`, `status`, `rules`) VALUES
(1, 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', NULL, NULL, NULL, NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `voucher`
--

INSERT INTO `voucher` (`id`, `voucher`, `using_voucher`) VALUES
(2, 'abcdef', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
