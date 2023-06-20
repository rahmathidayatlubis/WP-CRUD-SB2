-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jun 2023 pada 08.09
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_project_akhir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `qty` int(2) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_info_web`
--

CREATE TABLE `tabel_info_web` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi_web` text NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_info_web`
--

INSERT INTO `tabel_info_web` (`id`, `judul`, `deskripsi_web`, `waktu`) VALUES
(6, 'Libur Semester Genap', 'Libur selama 2 minggu dan masuk kembali seperti biasa', '2023-06-18 21:46:42'),
(7, 'Perubahan UU Konoha', 'Perurbahan akan dilakukan dengan melakukan sudy banding dengan beberapa saksi dan golongan yang dapat membantu proses filterasi dan meminimalisir kejadian seperti yang terjadipada tahun 198989jgdfgkgjfgkghsjgkhjfhgskgsf', '2023-06-18 21:39:36'),
(12, 'Peralihan Jalan Hidup', 'Menurut ideologi raja pertama, jalan hidup manusia ditentukan seberapa besar tantangannya', '2023-06-20 09:46:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_kategori`
--

CREATE TABLE `tabel_kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_kategori`
--

INSERT INTO `tabel_kategori` (`id`, `kategori`) VALUES
(21, 'Makanan'),
(22, 'Minuman'),
(23, 'Seafood');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_kuliner`
--

CREATE TABLE `tabel_kuliner` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_kuliner`
--

INSERT INTO `tabel_kuliner` (`id`, `id_kategori`, `nama`, `harga`) VALUES
(76, 21, 'Ayam Rendang', 15000),
(77, 21, 'Bebek Carok', 20000),
(78, 22, 'Jus Jeruk', 6000),
(79, 22, 'Teh Maniss', 5000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_user`
--

INSERT INTO `tabel_user` (`id`, `nama_user`, `username`, `password`) VALUES
(3, 'Rahmat Hidayat Lubis', 'Math.bis', 'merdekaaaa55'),
(4, 'Diajeng Puspa Wahyuni', 'puspa', 'ayolahahhah'),
(14, 'Muhammad Al Fariqo', 'muhammad648f', 'riqooo'),
(15, 'Zainul Adensyah', 'zainul6491', 'syahhh'),
(16, 'Cendana Head Marketing', 'Dorrr', 'tomi678');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tabel_info_web`
--
ALTER TABLE `tabel_info_web`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_kategori`
--
ALTER TABLE `tabel_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_kuliner`
--
ALTER TABLE `tabel_kuliner`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tabel_kuliner_ibfk_1` (`id_kategori`);

--
-- Indeks untuk tabel `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tabel_info_web`
--
ALTER TABLE `tabel_info_web`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tabel_kategori`
--
ALTER TABLE `tabel_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tabel_kuliner`
--
ALTER TABLE `tabel_kuliner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT untuk tabel `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tabel_user` (`id`);

--
-- Ketidakleluasaan untuk tabel `tabel_kuliner`
--
ALTER TABLE `tabel_kuliner`
  ADD CONSTRAINT `tabel_kuliner_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tabel_kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
