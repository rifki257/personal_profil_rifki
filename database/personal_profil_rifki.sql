-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 16, 2025 at 11:24 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personal_profil_rifki`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint NOT NULL,
  `name` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `born` date NOT NULL,
  `zip_code` int NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `total_project` int NOT NULL,
  `work` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `address` varchar(250) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `name`, `image`, `born`, `zip_code`, `email`, `phone`, `total_project`, `work`, `address`, `description`) VALUES
(6, 'rifki maolana malik', '1755656549 .png', '2007-08-06', 533247, 'rifkimaolana68@gmail.com', '085225934243', 5, 'pelajar', 'dusun langen blok cireong rt7 rw2 desa karangpaningal ', 'Saya merupakan anak pertama dari dua bersaudara, dengan satu adik perempuan. Saat ini saya berstatus sebagai pelajar di SMKN 3 Banjar pada bidang keahlian PPLG (Pengembangan Perangkat Lunak dan Gim). Dan saya sedang melakukan PKL di Yogyakarta di Lauwba techno sebanyak 7 bulan .'),
(7, 'rifki maolana malik', '1755394150.png', '2007-08-06', 23423, 'rifkimaolana68@gmail.com', '085225934243', 1, 'pelajar', 'dusun langen blok cireong rt7 rw2 desa karangpaningal ', 'Saya merupakan anak pertama dari dua bersaudara, dengan satu adik perempuan. Saat ini saya berstatus sebagai pelajar di SMKN 3 Banjar pada bidang keahlian PPLG (Pengembangan Perangkat Lunak dan Gim). Dan saya sedang melakukan PKL di Yogyakarta di Lauwba techno sebanyak 7 bulan.');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint NOT NULL,
  `image` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `author` varchar(250) NOT NULL,
  `tittle` varchar(250) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `date`, `author`, `tittle`, `description`) VALUES
(2, '1755093923 .png', '2024-06-25', 'PMR', 'Piagam penghargaan', 'Ini adalah representasi visual dari sebuah piagam penghargaan. Piagam ini diberikan kepada Rifki Maolana Malik, seorang anggota PMR (Palang Merah Remaja) dari SMK Negeri 3 Banjar. Penghargaan ini diberikan karena ia telah LULUS mengikuti Pelantikan PMR Tahun 2024 yang diselenggarakan oleh PMI (Palang Merah Indonesia) Kota Banjar, bertempat di Area Islamic Center Kota Banjar pada hari Selasa, 25 Juni 2024. Piagam ini ditandatangani oleh Drs. Supratman M.Si.'),
(4, '1755093976 .png', '2024-09-15', 'PMR', 'Jumbara (Jumpa Bakti Gembira)', 'Pada tanggal 15 September 2024, para anggota PMR, SMKN 3 Banjar berpartisipasi dalam acara Jumbara (Jumpa Bakti Gembira). Dalam ajang yang penuh semangat ini, mereka menunjukkan dedikasi dan kerja keras yang biasa saja. Meskipun tidak berhasil meraih gelar juara utama, mereka tetap membawa pulang Piala Penghargaan sebagai Juara 1 Anjangsana. Ini menunjukkan bahwa Keaktifan untuk berkenalan dengan peserta dari sekolah lain tidak dapat di hitung dengan jari. Keberhasilan ini menjadi bukti jiwa sosial yg tinggi dari SMKN3 Banjar. Jumbara sendiri merupakan ajang pertemuan yang bertujuan untuk meningkatkan pengetahuan, keterampilan, dan mempererat tali persahabatan antar anggota PMR dan di adakan sebanyak 4 Tahun sekali.'),
(5, '1755096695 .png', '2024-11-25', 'PMR', 'Foto 3 Angkatan ', '\r\nPada tanggal 25 November 2024, anggota PMR dari tiga angkatan berpartisipasi dalam sebuah lomba di SMAN 2 Banjar. Mereka menunjukkan kemampuan luar biasa dengan memborong berbagai penghargaan. Tim PMR berhasil meraih Juara Umum 1 untuk kategori Pertolongan Pertama dan juga Juara Harapan 2 di kategori yang sama. Selain itu, mereka juga memenangkan Juara 1 untuk kategori Poster. Keberhasilan ini semakin lengkap dengan pengakuan terhadap pembina mereka yang mendapatkan penghargaan sebagai Juara 1 Pembina Terbaik. Prestasi ini menjadi bukti nyata dari kerja keras, dedikasi, dan sinergi yang kuat antara anggota PMR dari berbagai angkatan.'),
(6, '1755098081 .png', '2024-11-25', 'PMR', 'Foto Perangkatan', 'Sebuah momen penting terekam pada 25 November 2024 untuk angkatan 16. Foto ini mengabadikan kebersamaan anggota PMR  angkatan 16. Momen ini tidak hanya menunjukkan kekompakan angkatan 16, tetapi juga dukungan penuh dan bimbingan dari Pembina sebelum memulai kegiatan. Foto ini menjadi pengingat akan semangat juang dan sinergi yang kuat antara anggota dan pembimbing'),
(7, '1755098342 .png', '2024-07-17', 'PMR', 'Demo Organisasi & Ekstrakulikuller', 'Pada tanggal 17 Juli 2024, anggota PMR dari angkatan ke-15 dan 16, berpartisipasi aktif dalam kegiatan Demo Organisasi & Ekstrakurikuler. Acara ini merupakan momen penting untuk memperkenalkan berbagai kegiatan sekolah, khususnya PMR, kepada para siswa-siswi baru. Foto ini mengabadikan momen kebersamaan mereka setelah sukses menampilkan demo yang penuh semangat. Momen ini menjadi bukti kekompakan dan dedikasi angkatan 15 dan 16 dalam menyambut dan mengajak generasi selanjutnya untuk bergabung dengan PMR.\r\n'),
(8, '1755098602 .png', '2025-07-18', 'PMR', 'Demo Organisasi & Ekstrakulikuller', 'Pada tanggal 18 Juli 2025, PMR menampilkan pertunjukan drama yang berkesan dalam acara Demo Organisasi & Ekstrakurikuler. Penampilan ini merupakan kolaborasi apik antara anggota Angkatan 17 (Kelas 11) dengan para senior dari Angkatan 16 (Kelas 12). Momen ini terasa sangat istimewa karena sekaligus menjadi penampilan terakhir bagi Angkatan 16 sebagai penutup masa bakti mereka. Pertunjukan ini tidak hanya berhasil memperkenalkan PMR kepada siswa-siswi baru, tetapi juga menjadi kenangan manis dan perpisahan yang mengharukan bagi para anggota senior yang telah mendedikasikan waktu dan tenaga mereka.');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `massage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `massage`) VALUES
(14, 'iubevrj', '11@gmail.com', '67890987', '4rffff', 'x '),
(16, 'iubevrj', 'eovinekv@gmail.com', '67890987', '9999999', 'wedwedw'),
(17, 'ed', '11@gmail.com', '999999999', 'fef', 'f'),
(18, 'ed', 'eovinekv@gmail.com', '999999999', 'rrttttttttterrte', ',kjghgcxf'),
(19, 'iubevrj', '11@gmail.com', '999999999', '4rffff', 'dd'),
(20, 'iubevrj', 'eovinekv@gmail.com', '67890987', '4rffff', 'r'),
(21, 'iubevrj', '11@gmail.com', '999999999', '4rffff', 's'),
(22, 'iubevrj', 'eovinekv@gmail.com', '34567654', '4rffff', 'd'),
(23, 'iubevrj', 'eovinekv@gmail.com', '999999999', 'fef', 'c'),
(24, 'iubevrj', 'eovinekv@gmail.com', '999999999', '4rffff', '10\r\n'),
(25, 'iubevrj', 'eovinekv@gmail.com', '085225934243', '4rffff', 'e'),
(26, 'iubevrj', 'eovinekv@gmail.com', '34567654d', '4rffff', 'xsxsx'),
(27, 'iubevrj', 'eovinekv@gmail.com', '34567654', 'mjihjvbn bjhb', 'x'),
(28, 'ed', 'eovinekv@gmail.com', '34567654', '4rffffewrw', 'ewrw'),
(29, 'iubevrj', '11@gmail.com', '085225934243', 'fef', 'dd'),
(30, 'nandut', 'eovinekv@gmail.com', '085225934243', 'fef', 'ana cantik banget '),
(31, 'ef', 'wf@gmail.com', 'wef', 'weef', 'wef'),
(32, 'rifki maolana malik', 'rifkimaolana68@gmail.com', ' 34141', 'fef', 'e'),
(33, 'ww', 'ww@gmail.com', '08 ', 'ww', 'ww'),
(34, 'guzhao', 'guzhao@gmail.com', '026527356474', 'pen nanya', 'hai apa kabar');

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint NOT NULL,
  `email` varchar(250) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `created`) VALUES
(5, '1@gmail.com', '2025-08-18 03:50:41'),
(6, 'rifkimaolana68@gmail.com', '2025-08-18 06:54:14'),
(7, '1@gmail.com', '2025-08-18 07:42:09'),
(8, '1@gmail.com', '2025-08-18 07:53:28'),
(9, 'rifkimaolana68@gmail.com', '2025-08-18 07:54:01'),
(10, 'guzhao@gmail.com', '2025-11-25 01:51:53');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint NOT NULL,
  `image` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `job` varchar(250) NOT NULL,
  `category` varchar(250) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `image`, `title`, `job`, `category`, `description`) VALUES
(8, '1755103331 .png', 'Goess', 'Olahraga', 'reallife', 'project goes to Pangandaran & Yogyakarta'),
(9, '1755103546.png', 'Figma', 'Desain', 'screen', 'Pernah belajar  desain aplikasi menggunakan aplikasi laravel');

-- --------------------------------------------------------

--
-- Table structure for table `resumes`
--

CREATE TABLE `resumes` (
  `id` bigint NOT NULL,
  `date` varchar(250) NOT NULL,
  `job` varchar(250) NOT NULL,
  `place` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `icon` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `resumes`
--

INSERT INTO `resumes` (`id`, `date`, `job`, `place`, `description`, `icon`) VALUES
(7, '2023 - Sekarang', 'Pelajar', 'Smkn 3 Banjar', 'Seorang pelajar aktif di SMK Negeri 3 Banjar dengan periode pendidikan tahun 2023. Memiliki semangat belajar biasa saja.', 'bi bi-backpack'),
(8, 'juli 2025 -  januari 2026', 'Pekael', 'PT Lauwba Techno Indonesia', 'PKL di PT Lauwba Techno Indonesia (Juli 2025 – sekarang). Praktik kerja lapangan di bidang pembuatan website', 'bi bi-building');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint NOT NULL,
  `icon` text NOT NULL,
  `job` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `job`, `description`, `image`) VALUES
(4, 'bi bi-pencil-fill', 'Jasa nulis cepat', 'jasa nulis cepat sampe tidak terbaca', '1755099188 .png'),
(5, 'bi bi-controller', 'Jasa instal game / apl bajakan', 'Anda bingung ga punya uang buat beli game atau langganan aplikasi tenang  kan ada bajakan', '1755099570 .png'),
(10, 'bi bi-code', 'Jasa pembuatan website', 'Came on brooo \r\nbutuh website Call me now', '1755225297 .png');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint NOT NULL,
  `skill` varchar(250) NOT NULL,
  `percent` int NOT NULL,
  `image` varchar(250) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill`, `percent`, `image`, `description`) VALUES
(12, 'Main Game', 51, '1755101791.png', 'Bermain fc 25 5jam nonstop tanpa menang\r\n'),
(13, 'Sepak Bola', 40, '1755101934.png', 'Sebagai defender terbaik pada masanya'),
(14, 'Bicycle', 54, '1755102007.png', 'Pernah goes sampai 30km-+'),
(15, 'Web developer', 58, '1755139666.png', 'Sebagai seorang Web Developer, saya memiliki spesialisasi di bidang back-end dengan kemampuan kuat dalam membangun logika dan infrastruktur server-side yang efisien. Saya juga menguasai CSS (50%) untuk mengelola tampilan dan gaya visual, serta HTML (67%)  Laravel (57% )untuk menyusun struktur dasar halaman web dengan baik.');

-- --------------------------------------------------------

--
-- Table structure for table `socmeds`
--

CREATE TABLE `socmeds` (
  `id` bigint NOT NULL,
  `icon` varchar(250) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `socmeds`
--

INSERT INTO `socmeds` (`id`, `icon`, `link`) VALUES
(3, 'bi bi-instagram ', 'https://www.instagram.com/ctrl_6807?igsh=MXFuaWdidWs1ZmZucA=='),
(4, 'bi bi-tiktok', 'https://tiktok.com/@rmm_6807'),
(5, 'bi bi-github', 'https://github.com/qq23e'),
(6, 'bi bi-whatsapp', 'https://wa.me/085225934243');

-- --------------------------------------------------------

--
-- Table structure for table `totals`
--

CREATE TABLE `totals` (
  `id` bigint NOT NULL,
  `icon` text NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `total_project` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(2, 'jamal', 'z@gmail.com', 'z');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socmeds`
--
ALTER TABLE `socmeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `totals`
--
ALTER TABLE `totals`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `resumes`
--
ALTER TABLE `resumes`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `socmeds`
--
ALTER TABLE `socmeds`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `totals`
--
ALTER TABLE `totals`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
