-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Des 2023 pada 08.01
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jdn`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `judul_isi` varchar(255) DEFAULT NULL,
  `isi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id`, `judul_isi`, `isi`) VALUES
(1, 'halo', 'iya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `apuser`
--

CREATE TABLE `apuser` (
  `user_id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `apuser`
--

INSERT INTO `apuser` (`user_id`, `nama`, `email`, `username`, `password`) VALUES
(1, 'hah', 'hu@gmail.com', 'he', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'coba', 'coba@gmail.com', 'admin', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'Nama Pengguna', 'email@example.com', 'admin', 'ec6a6536ca304edf844d1d248a4f08dc');

-- --------------------------------------------------------

--
-- Struktur dari tabel `header`
--

CREATE TABLE `header` (
  `id` int(11) NOT NULL,
  `home_header` text NOT NULL,
  `about_header` text NOT NULL,
  `contact_header` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `header`
--

INSERT INTO `header` (`id`, `home_header`, `about_header`, `contact_header`) VALUES
(1, 'home ', 'header', 'contact');

-- --------------------------------------------------------

--
-- Struktur dari tabel `home_page`
--

CREATE TABLE `home_page` (
  `id` int(11) NOT NULL,
  `judul_header` varchar(255) NOT NULL,
  `judul_singkat` varchar(255) NOT NULL,
  `judul_web` varchar(255) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `image1` varchar(50) DEFAULT NULL,
  `judul_isi` varchar(255) DEFAULT NULL,
  `isi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `home_page`
--

INSERT INTO `home_page` (`id`, `judul_header`, `judul_singkat`, `judul_web`, `keterangan`, `image1`, `judul_isi`, `isi`) VALUES
(1, 'PT.JARINGAN DATA NUSANTARA  ', 'JDN ', 'jaringan data nusanatara ', 'jaringan yang sangat kencang samapai tak terkendali', 'about-2.jpg', 'jarinngan dengan kecepatan kilat ini akan membamtu anda ', 'ayo mari interneta dengan harga mura dan kencang ayo gasken otw ke cleon dan jaringan data nusanatara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi_kontak`
--

CREATE TABLE `informasi_kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `fb` varchar(255) DEFAULT NULL,
  `twt` varchar(255) DEFAULT NULL,
  `ig` varchar(255) DEFAULT NULL,
  `link_lokasi` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `informasi_kontak`
--

INSERT INTO `informasi_kontak` (`id`, `nama`, `alamat`, `email`, `telepon`, `fb`, `twt`, `ig`, `link_lokasi`) VALUES
(1, 'bintang indarto ', 'lebaksiu, tegal', 'bintangindarto10@gmail.com', '085779322336', '@madara.tsukoyomi.9', '@Bintang55518134', '@btsukoyomi', '\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.667255579412!2d110.36529307485816!3d-7.8249986777191864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5926b951619f%3A0x1e5e08ffddad21c6!2sLife%20Media!5e0!3m2!1sid!2sid!4v1701338717393!5m2!1sid!2sid\" ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak_form`
--

CREATE TABLE `kontak_form` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `waktu_submit` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kontak_form`
--

INSERT INTO `kontak_form` (`id`, `name`, `email`, `subject`, `message`, `waktu_submit`) VALUES
(140, 'dfndnfk', 'b@gmail.com', 'jndjf', 'cjb', '2023-12-05 09:54:30'),
(141, 'rg', 'jdj@gmail.com', 'ee', 'e', '2023-12-05 11:40:49'),
(142, 'f', 'dg@gmail.com', 'sfe', 'sfe', '2023-12-06 04:54:15'),
(143, 'berhasil', 'dg@gmail.com', 'sfe', 'sfe', '2023-12-06 05:01:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `statistik`
--

CREATE TABLE `statistik` (
  `id` int(11) NOT NULL,
  `happy_clients` int(11) DEFAULT NULL,
  `happy_clients_description` text DEFAULT NULL,
  `projects` int(11) DEFAULT NULL,
  `projects_description` text DEFAULT NULL,
  `hours_of_support` int(11) DEFAULT NULL,
  `hours_of_support_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `statistik`
--

INSERT INTO `statistik` (`id`, `happy_clients`, `happy_clients_description`, `projects`, `projects_description`, `hours_of_support`, `hours_of_support_description`) VALUES
(1, 150, 'Jumlah klien yang puas dengan layanan kami', 123, 'Jumlah proyek yang telah selesai', 382, 'Jumlah jam dukungan yang diberikan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `apuser`
--
ALTER TABLE `apuser`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `home_page`
--
ALTER TABLE `home_page`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `informasi_kontak`
--
ALTER TABLE `informasi_kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kontak_form`
--
ALTER TABLE `kontak_form`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `statistik`
--
ALTER TABLE `statistik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `apuser`
--
ALTER TABLE `apuser`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `header`
--
ALTER TABLE `header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `home_page`
--
ALTER TABLE `home_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `informasi_kontak`
--
ALTER TABLE `informasi_kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kontak_form`
--
ALTER TABLE `kontak_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT untuk tabel `statistik`
--
ALTER TABLE `statistik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
