-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jun 2022 pada 23.06
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bsd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gudang`
--

CREATE TABLE `gudang` (
  `id_gudang` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `raw_material` varchar(100) NOT NULL,
  `qty` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kemitraan`
--

CREATE TABLE `kemitraan` (
  `id_mitra` int(11) NOT NULL,
  `pemilik` varchar(100) NOT NULL,
  `toko` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nohp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kemitraan`
--

INSERT INTO `kemitraan` (`id_mitra`, `pemilik`, `toko`, `alamat`, `nohp`, `email`) VALUES
(3, 'Izzati Rozana', 'Ijat Toys', 'Jalan Bogor', '0812345675', 'izzat@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masterdata`
--

CREATE TABLE `masterdata` (
  `id_masdata` int(11) NOT NULL,
  `raw_materialmd` varchar(100) NOT NULL,
  `qty_md` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `masterdata`
--

INSERT INTO `masterdata` (`id_masdata`, `raw_materialmd`, `qty_md`) VALUES
(1, 'Bak', 500),
(2, 'Penyerok', 128),
(3, 'Tungkai', 103),
(4, 'Corong', 357),
(5, 'Roda', 569);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `hp` varchar(12) NOT NULL,
  `qty_penj` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`id_penjualan`, `nama`, `alamat`, `hp`, `qty_penj`) VALUES
(3, 'Agus', 'Jl. Salak Pondoh', '08214012941', 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produksi`
--

CREATE TABLE `produksi` (
  `id_material` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `material` varchar(100) NOT NULL,
  `qty` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produksi`
--

INSERT INTO `produksi` (`id_material`, `id_produk`, `material`, `qty`) VALUES
(57, 1, 'Bak', 55),
(60, 3, 'Tungkai', 13),
(61, 1, 'Bak', 12),
(63, 4, 'Corong', 12),
(65, 2, 'Penyerok', 77);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'produksi@gmail.com', 'produksi123', 'produksi'),
(3, 'gudang@gmail.com', 'gudang123', 'gudang'),
(4, 'marketing@gmail.com', 'marketing123', 'marketing'),
(5, 'pengadaan@gmail.com', 'pengadaan123', 'pengadaan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gudang`
--
ALTER TABLE `gudang`
  ADD PRIMARY KEY (`id_gudang`);

--
-- Indeks untuk tabel `kemitraan`
--
ALTER TABLE `kemitraan`
  ADD PRIMARY KEY (`id_mitra`);

--
-- Indeks untuk tabel `masterdata`
--
ALTER TABLE `masterdata`
  ADD PRIMARY KEY (`id_masdata`);

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indeks untuk tabel `produksi`
--
ALTER TABLE `produksi`
  ADD PRIMARY KEY (`id_material`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gudang`
--
ALTER TABLE `gudang`
  MODIFY `id_gudang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `kemitraan`
--
ALTER TABLE `kemitraan`
  MODIFY `id_mitra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `masterdata`
--
ALTER TABLE `masterdata`
  MODIFY `id_masdata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `produksi`
--
ALTER TABLE `produksi`
  MODIFY `id_material` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
