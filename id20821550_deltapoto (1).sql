-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Waktu pembuatan: 12 Okt 2023 pada 16.55
-- Versi server: 5.7.39
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20821550_deltapoto`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `boking_jadwal`
--

CREATE TABLE `boking_jadwal` (
  `id` int(225) NOT NULL,
  `hari` date NOT NULL,
  `jam` varchar(30) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `whatsapp` varchar(50) NOT NULL,
  `bukti` text NOT NULL,
  `bayar` varchar(50) NOT NULL,
  `kurang` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `boking_jadwal`
--

INSERT INTO `boking_jadwal` (`id`, `hari`, `jam`, `jenis`, `nama`, `whatsapp`, `bukti`, `bayar`, `kurang`) VALUES
(6, '2023-10-01', '08:00', 'Foto Wisuda', 'Luci', '08223891743', '20010211172138_00005 (1).jpg', 'Bayar Lunas Rp.200.000', ''),
(8, '2023-10-06', '15:00', 'Foto Prodak', 'lucifer', '085867331899', '502px-Lambang_Kabupaten_Lamandau-removebg-preview.png', 'Bayar Lunas Rp.150.000', ''),
(18, '2023-10-18', '08:00', 'Foto Preweding', 'golo', '0894939849003', '502px-Lambang_Kabupaten_Lamandau-removebg-preview.png', 'Bayar Dp 30% Rp.105.000', 'Bayar Lunas Rp.350.000'),
(19, '2023-09-16', '15:00', 'Foto Model', 'Sleeping with Sirens', '082279415546', 'umk-removebg-preview.png', 'Bayar Lunas Rp.250.000', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `galery`
--

CREATE TABLE `galery` (
  `id` int(30) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `photo` text,
  `photo1` text,
  `photo2` text,
  `keterangan` varchar(225) DEFAULT NULL,
  `harga` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galery`
--

INSERT INTO `galery` (`id`, `name`, `photo`, `photo1`, `photo2`, `keterangan`, `harga`) VALUES
(1, 'Foto Prodak', 'Rectangle 1.png', 'IMG_4155.JPG', 'lofi_girl_by_neonoverdrive_dfwdj88.png', 'bisa foto sesuka hati foto prodaknya untuk promosi', '150.000'),
(2, 'Foto Pernikahan', 'IMG_1169.JPG', 'IMG_0996.JPG', 'IMG_0999.JPG', 'bisa foto sesuka hati', '700.000'),
(3, 'Foto Preweding', 'IMG_9736.JPG', 'IMG_6538.JPG', 'IMG_6658.JPG', 'bisa foto sesuka hati', '350.000'),
(4, 'Foto Wisuda', 'devdjayanda-photography_wisuda1643463098_2.jpg', 'IMG_1929.JPG', 'IMG_1927.JPG', 'bisa foto sesuka hati', '200.000'),
(5, 'Foto Lamaran', 'IMG_0547.jpg', 'IMG_0575.jpg', 'IMG_0538.jpg', 'Bisa foto sesuka hati', '300.000'),
(6, 'Foto Model', 'IMG_1929.JPG', 'IMG_1927.jpg', 'IMG_7693.jpeg', 'Bisa Reques', '250.000'),
(30, 'Poster', 'wallhaven-8o2k9k.jpg', 'walp.png', 'Rectangle 1.png', 'bisa JJ', '80.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_terkonfirmasi`
--

CREATE TABLE `jadwal_terkonfirmasi` (
  `id` int(225) NOT NULL,
  `hari` date NOT NULL,
  `jam` varchar(30) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `whatsapp` varchar(50) NOT NULL,
  `bukti` text NOT NULL,
  `bayar` varchar(50) NOT NULL,
  `kurang` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jadwal_terkonfirmasi`
--

INSERT INTO `jadwal_terkonfirmasi` (`id`, `hari`, `jam`, `jenis`, `nama`, `whatsapp`, `bukti`, `bayar`, `kurang`) VALUES
(14, '2023-10-18', '15:00', 'Foto Model', 'mbah', '09797979797', 'WhatsApp Image 2023-08-29 at 12.25.17 PM (1).jpeg', 'Bayar Lunas RP. 250.000', NULL),
(18, '2023-09-14', '15:00', 'Foto Prodak', 'vallen', '082279415526', '502px-Lambang_Kabupaten_Lamandau-removebg-preview.png', 'Bayar Lunas Rp.150.000', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'vallen', 'asus');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `boking_jadwal`
--
ALTER TABLE `boking_jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jadwal_terkonfirmasi`
--
ALTER TABLE `jadwal_terkonfirmasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `boking_jadwal`
--
ALTER TABLE `boking_jadwal`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `galery`
--
ALTER TABLE `galery`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `jadwal_terkonfirmasi`
--
ALTER TABLE `jadwal_terkonfirmasi`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
