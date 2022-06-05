-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Bulan Mei 2022 pada 08.05
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spk_sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about_site`
--

CREATE TABLE `about_site` (
  `id` int(11) NOT NULL,
  `about` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `about_site`
--

INSERT INTO `about_site` (`id`, `about`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, facilis. Ullam perspiciatis fugiat nihil, magni libero quia, voluptate neque officiis amet recusandae cum. Soluta excepturi repellendus illum modi esse possimus?', '2022-04-21 11:16:14', '2022-04-21 11:19:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Admin'),
(2, 'user', 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'admin@gmail.com', 1, '2022-04-17 09:24:46', 1),
(2, '::1', 'admin@gmail.com', 1, '2022-04-17 10:23:51', 1),
(3, '::1', 'lol', NULL, '2022-04-17 10:24:05', 0),
(4, '::1', 'admin@gmail.com', 1, '2022-04-17 10:26:13', 1),
(5, '::1', 'admin@gmail.com', 1, '2022-04-18 10:00:31', 1),
(6, '::1', 'admin@gmail.com', 1, '2022-04-18 15:27:54', 1),
(7, '::1', 'admin@gmail.com', 1, '2022-04-18 17:22:58', 1),
(8, '::1', 'admin@gmail.com', 1, '2022-04-18 20:01:11', 1),
(9, '::1', 'admin@gmail.com', 1, '2022-04-19 06:45:28', 1),
(10, '::1', 'admin@gmail.com', 1, '2022-04-19 12:32:39', 1),
(11, '::1', 'admin@gmail.com', 1, '2022-04-20 07:50:33', 1),
(12, '::1', 'admin@gmail.com', 1, '2022-04-20 09:35:21', 1),
(13, '::1', 'admin@gmail.com', 1, '2022-04-21 07:08:04', 1),
(14, '::1', 'admin@gmail.com', 1, '2022-04-22 07:05:15', 1),
(15, '::1', 'admin@gmail.com', 1, '2022-04-22 08:03:17', 1),
(16, '::1', 'admin@gmail.com', 1, '2022-04-22 08:50:00', 1),
(17, '::1', 'admin@gmail.com', 1, '2022-05-09 06:54:20', 1),
(18, '::1', 'admin@gmail.com', 1, '2022-05-09 07:42:46', 1),
(19, '::1', 'admin@gmail.com', 1, '2022-05-09 08:24:39', 1),
(20, '::1', 'admin@gmail.com', 1, '2022-05-19 10:15:55', 1),
(21, '::1', 'bagusrahardjo6@gmail.com', 2, '2022-05-19 10:19:36', 1),
(22, '::1', 'admin@gmail.com', 1, '2022-05-20 07:22:40', 1),
(23, '::1', 'bagusrahardjo6@gmail.com', 2, '2022-05-20 07:23:30', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `contacts`
--

INSERT INTO `contacts` (`id`, `phone`, `email`, `address`, `created_at`, `updated_at`) VALUES
(1, '08888888', 'smkswidyanusantara@gmail.com', 'Pandeglang, Banten', '2022-04-19 14:06:16', '2022-04-19 14:09:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `headmaster_welcome`
--

CREATE TABLE `headmaster_welcome` (
  `id` int(1) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `headmaster_welcome`
--

INSERT INTO `headmaster_welcome` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, '<p style=\"text-align: center; \"><img src=\"http://localhost:8080/assets/img/summernote/teacher_1.jpg\" style=\"width: 50%;\" class=\"img-fluid\"></p><p style=\"text-align: center; \">JEFFREY BROWN</p><p style=\"\"><br></p><p style=\"\"><font color=\"#000000\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid perspiciatis non reiciendis expedita nihil recusandae, illum, adipisci, provident quas nulla saepe asperiores eum aspernatur dignissimos rem laboriosam atque hic similique? Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid perspiciatis non reiciendis expedita nihil recusandae, illum, adipisci, provident quas nulla saepe asperiores eum aspernatur dignissimos rem laboriosam atque hic similique? Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid perspiciatis non reiciendis expedita nihil recusandae, illum, adipisci, provident quas nulla saepe asperiores eum aspernatur dignissimos rem laboriosam atque hic similique?</font></p><p style=\"\"><font color=\"#000000\"><br>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor ex nemo in sunt qui unde quasi iusto blanditiis itaque quas. Unde vel enim explicabo eveniet doloribus ipsum quia nesciunt necessitatibus.&nbsp;Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor ex nemo in sunt qui unde quasi iusto blanditiis itaque quas. Unde vel enim explicabo eveniet doloribus ipsum quia nesciunt necessitatibus.&nbsp;Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor ex nemo in sunt qui unde quasi iusto blanditiis itaque quas. Unde vel enim explicabo eveniet doloribus ipsum quia nesciunt necessitatibus.</font><br></p>', '2022-04-21 08:59:22', '2022-04-21 09:11:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `majors`
--

CREATE TABLE `majors` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `majors`
--

INSERT INTO `majors` (`id`, `name`, `slug`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Teknik Komputer Jaringan', 'teknik-komputer-jaringan', '<p style=\"text-align: left;\"><font color=\"#000000\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum distinctio voluptatem cupiditate enim doloribus amet suscipit repudiandae nostrum delectus voluptas nam assumenda, quos temporibus eveniet molestiae quaerat ex quisquam provident.&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum distinctio voluptatem cupiditate enim doloribus amet suscipit repudiandae nostrum delectus voluptas nam assumenda, quos temporibus eveniet molestiae quaerat ex quisquam provident.&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum distinctio voluptatem cupiditate enim doloribus amet suscipit repudiandae nostrum delectus voluptas nam assumenda, quos temporibus eveniet molestiae quaerat ex quisquam provident.</font></p><p style=\"text-align: left;\"><font color=\"#000000\"><br></font></p><p style=\"text-align: left;\"><font color=\"#000000\"><b>Jurusan ini cocok untuk kamu yang</b>:</font></p><ol><li style=\"text-align: left;\"><font color=\"#000000\">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</font></li><li style=\"text-align: left;\"><font color=\"#000000\">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</font></li><li style=\"text-align: left;\"><font color=\"#000000\">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</font></li><li style=\"text-align: left;\"><font color=\"#000000\">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</font></li></ol><p style=\"text-align: left;\"><font color=\"#000000\"><br></font></p><p style=\"text-align: left;\"><font color=\"#000000\">Sampai ketemu di TKJ ya!</font></p>', 'course_1.png', '2022-04-21 13:01:55', '2022-04-21 14:56:31'),
(2, 'Administrasi Perkantoran', 'administrasi-perkantoran', '<p style=\"text-align: left;\"><font color=\"#000000\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum distinctio voluptatem cupiditate enim doloribus amet suscipit repudiandae nostrum delectus voluptas nam assumenda, quos temporibus eveniet molestiae quaerat ex quisquam provident.&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum distinctio voluptatem cupiditate enim doloribus amet suscipit repudiandae nostrum delectus voluptas nam assumenda, quos temporibus eveniet molestiae quaerat ex quisquam provident.&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum distinctio voluptatem cupiditate enim doloribus amet suscipit repudiandae nostrum delectus voluptas nam assumenda, quos temporibus eveniet molestiae quaerat ex quisquam provident.</font></p><p style=\"text-align: left;\"><font color=\"#000000\"><br></font></p><p style=\"text-align: left;\"><font color=\"#000000\"><b>Jurusan ini cocok untuk kamu yang:</b></font></p><ol><li style=\"text-align: left;\"><font color=\"#000000\">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</font></li><li style=\"text-align: left;\"><font color=\"#000000\">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</font></li><li style=\"text-align: left;\"><font color=\"#000000\">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</font></li><li style=\"text-align: left;\"><font color=\"#000000\">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</font></li></ol><p style=\"text-align: left;\"><font color=\"#000000\"><br></font></p><p style=\"text-align: left;\"><font color=\"#000000\">Sampai ketemu di Administrasi Perkantoran ya!</font></p>', 'course_2.png', '2022-04-21 13:55:50', '2022-04-21 14:57:34'),
(3, 'Marketing Penjualan', 'marketing-penjualan', '<p style=\"text-align: left;\"><font color=\"#000000\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum distinctio voluptatem cupiditate enim doloribus amet suscipit repudiandae nostrum delectus voluptas nam assumenda, quos temporibus eveniet molestiae quaerat ex quisquam provident.&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum distinctio voluptatem cupiditate enim doloribus amet suscipit repudiandae nostrum delectus voluptas nam assumenda, quos temporibus eveniet molestiae quaerat ex quisquam provident.&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum distinctio voluptatem cupiditate enim doloribus amet suscipit repudiandae nostrum delectus voluptas nam assumenda, quos temporibus eveniet molestiae quaerat ex quisquam provident.</font></p><p style=\"text-align: left;\"><font color=\"#000000\"><br></font></p><p style=\"text-align: left;\"><font color=\"#000000\"><b>Jurusan ini cocok untuk kamu yang</b>:</font></p><ol><li style=\"text-align: left;\"><font color=\"#000000\">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</font></li><li style=\"text-align: left;\"><font color=\"#000000\">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</font></li><li style=\"text-align: left;\"><font color=\"#000000\">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</font></li><li style=\"text-align: left;\"><font color=\"#000000\">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</font></li></ol><p style=\"text-align: left;\"><font color=\"#000000\"><br></font></p><p style=\"text-align: left;\"><font color=\"#000000\">Sampai ketemu di Marketing Penjualan ya!</font></p>', 'course_3.png', '2022-04-21 13:56:57', '2022-04-21 14:57:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1650009111, 1),
(2, '2022-04-18-033712', 'App\\Database\\Migrations\\SchoolYear', 'default', 'App', 1650253253, 2),
(3, '2022-04-18-052547', 'App\\Database\\Migrations\\HeadmasterWelcome', 'default', 'App', 1650259664, 3),
(4, '2022-04-18-084316', 'App\\Database\\Migrations\\SchoolHistory', 'default', 'App', 1650271426, 4),
(5, '2022-04-18-085004', 'App\\Database\\Migrations\\VisionMission', 'default', 'App', 1650271835, 5),
(6, '2022-04-18-085507', 'App\\Database\\Migrations\\TeacherList', 'default', 'App', 1650272339, 6),
(7, '2022-04-19-062318', 'App\\Database\\Migrations\\Majors', 'default', 'App', 1650349598, 7),
(8, '2022-04-19-064900', 'App\\Database\\Migrations\\Contacts', 'default', 'App', 1650351072, 8),
(9, '2022-04-19-074238', 'App\\Database\\Migrations\\RegistReq', 'default', 'App', 1650354306, 9),
(10, '2022-04-21-025647', 'App\\Database\\Migrations\\RegistProcedure', 'default', 'App', 1650509923, 10),
(11, '2022-04-21-040219', 'App\\Database\\Migrations\\AboutSite', 'default', 'App', 1650513835, 11),
(12, '2022-04-22-001808', 'App\\Database\\Migrations\\RegistSchedule', 'default', 'App', 1650586784, 12),
(13, '2022-05-09-022208', 'App\\Database\\Migrations\\StudentBiodata', 'default', 'App', 1652927956, 13),
(14, '2022-05-19-023114', 'App\\Database\\Migrations\\StudentFile', 'default', 'App', 1652927956, 13),
(15, '2022-05-20-004537', 'App\\Database\\Migrations\\StudentMajor', 'default', 'App', 1653008004, 14);

-- --------------------------------------------------------

--
-- Struktur dari tabel `regist_procedure`
--

CREATE TABLE `regist_procedure` (
  `id` int(11) NOT NULL,
  `procedure` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `regist_procedure`
--

INSERT INTO `regist_procedure` (`id`, `procedure`, `created_at`, `updated_at`) VALUES
(1, 'Prosedur 1 update', '2022-04-21 10:09:28', '2022-04-21 10:15:36'),
(2, 'Prosedur 2', '2022-04-21 10:09:39', '2022-04-21 10:09:39'),
(3, 'Prosedur 3', '2022-04-21 10:09:46', '2022-04-21 10:09:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `regist_req`
--

CREATE TABLE `regist_req` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `regist_req`
--

INSERT INTO `regist_req` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Sudah lulus SMP / sederajat', '2022-04-19 15:04:18', '2022-04-19 15:11:54'),
(2, 'Sehat jasmani dan rohani', '2022-04-19 15:05:04', '2022-04-19 15:05:04'),
(3, 'Mendaftar melalui website ini', '2022-04-19 15:05:17', '2022-04-19 15:05:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `regist_schedule`
--

CREATE TABLE `regist_schedule` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `regist_schedule`
--

INSERT INTO `regist_schedule` (`id`, `title`, `start_event`, `end_event`, `created_at`, `updated_at`) VALUES
(1, 'Tes Acara', '2022-05-09 00:00:00', '2022-05-10 00:00:00', '2022-05-09 07:51:53', '2022-05-09 08:17:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `school_history`
--

CREATE TABLE `school_history` (
  `id` int(1) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `school_history`
--

INSERT INTO `school_history` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, '<p style=\"text-align: center; \"><img src=\"http://localhost:8080/assets/img/summernote/smks.jpeg\" style=\"\" class=\"img-fluid\"></p><p style=\"text-align: center; \">SMKS WIDYA NUSANTARA</p><p style=\"text-align: center; \"><br></p><p style=\"text-align: left;\"><font color=\"#000000\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut blanditiis minima eveniet delectus ea quis vitae facere cupiditate? Est repudiandae quidem fugit. Sint excepturi voluptatem fuga. Quod expedita voluptas quisquam!&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut blanditiis minima eveniet delectus ea quis vitae facere cupiditate? Est repudiandae quidem fugit. Sint excepturi voluptatem fuga. Quod expedita voluptas quisquam!&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut blanditiis minima eveniet delectus ea quis vitae facere cupiditate? Est repudiandae quidem fugit. Sint excepturi voluptatem fuga. Quod expedita voluptas quisquam!</font></p><p style=\"text-align: left;\"><br></p><p style=\"text-align: center;\"><img src=\"http://localhost:8080/assets/img/summernote/smks_lab.jpeg\" style=\"\" class=\"img-fluid\"></p><p style=\"text-align: center;\">LABORATORIUM KOMPUTER</p><p style=\"text-align: center;\"><br></p><p style=\"text-align: left;\"><font color=\"#000000\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque voluptate facere quidem ducimus assumenda nostrum architecto velit, commodi ipsa, possimus provident obcaecati ullam quia ratione accusantium iste! Ad, id optio?&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque voluptate facere quidem ducimus assumenda nostrum architecto velit, commodi ipsa, possimus provident obcaecati ullam quia ratione accusantium iste! Ad, id optio?&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque voluptate facere quidem ducimus assumenda nostrum architecto velit, commodi ipsa, possimus provident obcaecati ullam quia ratione accusantium iste! Ad, id optio?</font><br></p>', '2022-04-21 09:31:51', '2022-04-21 09:31:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `school_year`
--

CREATE TABLE `school_year` (
  `id` int(11) UNSIGNED NOT NULL,
  `school_year` char(9) NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `school_year`
--

INSERT INTO `school_year` (`id`, `school_year`, `status`, `created_at`, `updated_at`) VALUES
(1, '2022/2023', 1, '2022-04-18 12:16:27', '2022-04-18 12:16:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `student_biodata`
--

CREATE TABLE `student_biodata` (
  `id` int(11) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `gender` int(1) NOT NULL,
  `place_birth` varchar(50) NOT NULL,
  `date_birth` date NOT NULL,
  `religion` int(1) NOT NULL,
  `citizenship` varchar(50) NOT NULL,
  `order_family` int(2) NOT NULL,
  `siblings` int(2) NOT NULL,
  `stepbrosis` int(2) NOT NULL,
  `step_sibling` int(2) NOT NULL,
  `orphans` int(1) NOT NULL,
  `language` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel` varchar(13) NOT NULL,
  `live_with` int(1) NOT NULL,
  `distance` double NOT NULL,
  `blood_group` int(1) NOT NULL,
  `disease` varchar(255) NOT NULL,
  `physical_disorder` varchar(255) NOT NULL,
  `height` int(2) NOT NULL,
  `weight` int(3) NOT NULL,
  `graduate_from` varchar(255) NOT NULL,
  `sttb_date` date NOT NULL,
  `sttb_number` varchar(50) NOT NULL,
  `long_study` int(1) NOT NULL,
  `from_school` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `father_place_birth` varchar(50) NOT NULL,
  `father_date_birth` date NOT NULL,
  `father_religion` int(1) NOT NULL,
  `father_citizenship` varchar(50) NOT NULL,
  `father_education` varchar(50) NOT NULL,
  `father_job` varchar(255) NOT NULL,
  `father_income` int(1) NOT NULL,
  `father_address` varchar(255) NOT NULL,
  `father_tel` varchar(13) NOT NULL,
  `father_status` int(1) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `mother_place_birth` varchar(50) NOT NULL,
  `mother_date_birth` date NOT NULL,
  `mother_religion` int(1) NOT NULL,
  `mother_citizenship` varchar(50) NOT NULL,
  `mother_education` varchar(50) NOT NULL,
  `mother_job` varchar(255) NOT NULL,
  `mother_income` int(1) NOT NULL,
  `mother_address` varchar(255) NOT NULL,
  `mother_tel` varchar(13) NOT NULL,
  `mother_status` int(1) NOT NULL,
  `proxy_name` varchar(255) NOT NULL,
  `proxy_place_birth` varchar(50) NOT NULL,
  `proxy_date_birth` date NOT NULL,
  `proxy_religion` int(1) NOT NULL,
  `proxy_citizenship` varchar(50) NOT NULL,
  `proxy_education` varchar(50) NOT NULL,
  `proxy_job` varchar(255) NOT NULL,
  `proxy_income` int(1) NOT NULL,
  `proxy_address` varchar(255) NOT NULL,
  `proxy_tel` varchar(13) NOT NULL,
  `proxy_status` int(1) NOT NULL,
  `sport_hobby` varchar(255) NOT NULL,
  `art_hobby` varchar(255) NOT NULL,
  `org_hobby` varchar(255) NOT NULL,
  `other_hobby` varchar(255) NOT NULL,
  `scholarship_year_1` year(4) NOT NULL,
  `scholarship_class_1` int(1) NOT NULL,
  `scholarship_from_1` int(1) NOT NULL,
  `scholarship_year_2` year(4) NOT NULL,
  `scholarship_class_2` int(1) NOT NULL,
  `scholarship_from_2` int(1) NOT NULL,
  `scholarship_year_3` year(4) NOT NULL,
  `scholarship_class_3` int(1) NOT NULL,
  `scholarship_from_3` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `student_file`
--

CREATE TABLE `student_file` (
  `id` int(11) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `certificate` varchar(255) NOT NULL,
  `skhu` varchar(255) NOT NULL,
  `family_card` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `student_major`
--

CREATE TABLE `student_major` (
  `id` int(11) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `major_id` int(11) UNSIGNED NOT NULL,
  `reason` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `teacher_list`
--

CREATE TABLE `teacher_list` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(100) NOT NULL,
  `homeroom_status` int(1) NOT NULL,
  `homeroom` varchar(100) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `short_desc` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'avatar-1.png',
  `front_status` int(1) NOT NULL,
  `front_seq` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `teacher_list`
--

INSERT INTO `teacher_list` (`id`, `name`, `position`, `homeroom_status`, `homeroom`, `phone`, `short_desc`, `image`, `front_status`, `front_seq`, `created_at`, `updated_at`) VALUES
(1, 'Jeffrey Brown', 'Kepala Sekolah', 0, '', '087873870194', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet incidunt ut suscipit ratione, ea i', 'teacher_1.jpg', 1, 1, '2022-04-18 20:40:57', '2022-04-18 20:40:57'),
(2, 'Alex Greenfield', 'Wakil Kepala Sekolah', 0, '', '089507456916', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, veniam suscipit! Unde voluptatem ', 'teacher_2.jpg', 1, 2, '2022-04-18 20:51:36', '2022-04-18 20:51:36'),
(3, 'Ann Richmond', 'Kepala Tata Usaha', 0, '', '081318567397', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi ipsum quas illum libero magni nobis', 'teacher_3.jpg', 1, 3, '2022-04-18 20:53:31', '2022-04-18 20:53:31'),
(6, 'Bagus Puji Rahardjo', 'Kepala IT', 1, 'XII MIPA 1', '08888888', 'Deskripsi singkat tentang saya', 'photo.jpg', 0, 0, '2022-04-21 15:43:20', '2022-04-21 15:43:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `year_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `email` varchar(255) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'avatar-1.png',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `year_id`, `email`, `phone`, `username`, `fullname`, `image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'admin@gmail.com', '089507456916', 'admin', 'Admin', 'avatar-1.png', '$2y$10$vq/q83KKuEx9Q8eqE0ApwOglbbwoJsV0WQxnuwI4XcIo/db1w3YKO', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-04-16 15:14:42', '2022-04-17 10:28:42', NULL),
(2, 1, 'bagusrahardjo6@gmail.com', '087873870194', 'bagus', 'Bagus Puji Rahardjo', 'avatar-1.png', '$2y$10$SU5i55TUdoUvzi6Txdp/6eHzzajXCaNJd4hSX/wrfa7cxKa5OuafW', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-05-19 10:19:09', '2022-05-19 10:19:09', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `vision_mission`
--

CREATE TABLE `vision_mission` (
  `id` int(1) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `vision_mission`
--

INSERT INTO `vision_mission` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, '<p style=\"text-align: center; \"><b>Visi</b></p><p style=\"text-align: center; \"><font color=\"#000000\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi dignissimos expedita, laboriosam repellat tenetur officia commodi molestiae consequatur qui adipisci illum sint facilis ducimus voluptates, reprehenderit harum nemo veritatis natus?</font></p><p style=\"text-align: center; \"><br></p><p style=\"text-align: center; \"><b>Misi</b></p><ol><li style=\"text-align: left;\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</li><li style=\"text-align: left;\"><span style=\"text-align: center;\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span></li><li style=\"text-align: left;\"><span style=\"text-align: center;\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span></li></ol><p style=\"text-align: left;\"><br></p><p style=\"text-align: center;\"><b>Tujuan</b></p><p style=\"text-align: center;\"><font color=\"#000000\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum consectetur dolorum nobis. Odit enim quis deserunt porro quo. Consectetur, ducimus fugit? Ex ad explicabo quaerat autem tempore reiciendis doloribus repellat!</font><br></p>', '2022-04-21 09:46:45', '2022-04-21 09:51:46');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about_site`
--
ALTER TABLE `about_site`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `headmaster_welcome`
--
ALTER TABLE `headmaster_welcome`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `majors`
--
ALTER TABLE `majors`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `regist_procedure`
--
ALTER TABLE `regist_procedure`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `regist_req`
--
ALTER TABLE `regist_req`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `regist_schedule`
--
ALTER TABLE `regist_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `school_history`
--
ALTER TABLE `school_history`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `school_year`
--
ALTER TABLE `school_year`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `student_biodata`
--
ALTER TABLE `student_biodata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_biodata_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `student_file`
--
ALTER TABLE `student_file`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_file_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `student_major`
--
ALTER TABLE `student_major`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_major_user_id_foreign` (`user_id`),
  ADD KEY `student_major_major_id_foreign` (`major_id`);

--
-- Indeks untuk tabel `teacher_list`
--
ALTER TABLE `teacher_list`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `year_id` (`year_id`);

--
-- Indeks untuk tabel `vision_mission`
--
ALTER TABLE `vision_mission`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about_site`
--
ALTER TABLE `about_site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `headmaster_welcome`
--
ALTER TABLE `headmaster_welcome`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `majors`
--
ALTER TABLE `majors`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `regist_procedure`
--
ALTER TABLE `regist_procedure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `regist_req`
--
ALTER TABLE `regist_req`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `regist_schedule`
--
ALTER TABLE `regist_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `school_history`
--
ALTER TABLE `school_history`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `school_year`
--
ALTER TABLE `school_year`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `student_biodata`
--
ALTER TABLE `student_biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `student_file`
--
ALTER TABLE `student_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `student_major`
--
ALTER TABLE `student_major`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `teacher_list`
--
ALTER TABLE `teacher_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `vision_mission`
--
ALTER TABLE `vision_mission`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `student_biodata`
--
ALTER TABLE `student_biodata`
  ADD CONSTRAINT `student_biodata_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `student_file`
--
ALTER TABLE `student_file`
  ADD CONSTRAINT `student_file_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `student_major`
--
ALTER TABLE `student_major`
  ADD CONSTRAINT `student_major_major_id_foreign` FOREIGN KEY (`major_id`) REFERENCES `majors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_major_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_year_id_foreign` FOREIGN KEY (`year_id`) REFERENCES `school_year` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
