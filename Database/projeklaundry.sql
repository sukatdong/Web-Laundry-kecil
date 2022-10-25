-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Nov 2021 pada 16.41
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeklaundry`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `loginadmin`
--

CREATE TABLE `loginadmin` (
  `id` int(11) NOT NULL,
  `namaadmin` varchar(30) NOT NULL,
  `tempattanggallahiradmin` varchar(30) NOT NULL,
  `alamatadmin` varchar(30) NOT NULL,
  `jeniskelaminadmin` varchar(30) NOT NULL,
  `usernameadmin` varchar(30) NOT NULL,
  `passwordadmin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `loginpelanggan`
--

CREATE TABLE `loginpelanggan` (
  `id` int(11) NOT NULL,
  `namapelanggan` varchar(30) NOT NULL,
  `tempattanggallahirpelanggan` varchar(30) NOT NULL,
  `alamatpelanggan` varchar(30) NOT NULL,
  `jeniskelaminpelanggan` varchar(30) NOT NULL,
  `usernamepelanggan` varchar(30) NOT NULL,
  `passwordpelanggan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `orderkiloan`
--

CREATE TABLE `orderkiloan` (
  `namapelanggan` varchar(30) NOT NULL,
  `cucisetrika` int(11) NOT NULL,
  `cucikering` int(11) NOT NULL,
  `cucikilat` int(11) NOT NULL,
  `gordyyn` int(11) NOT NULL,
  `selimut` int(11) NOT NULL,
  `cucipetir` int(11) NOT NULL,
  `bedcover` int(11) NOT NULL,
  `setrikasaja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `orderpaketan`
--

CREATE TABLE `orderpaketan` (
  `namapelanggan` varchar(30) NOT NULL,
  `cucisetrika20kg` int(11) NOT NULL,
  `bedcover20kg` int(11) NOT NULL,
  `setrika45kg` int(11) NOT NULL,
  `setrika25kg` int(11) NOT NULL,
  `setrika10kg` int(11) NOT NULL,
  `setrika65kg` int(11) NOT NULL,
  `bedcover10kg` int(11) NOT NULL,
  `cucisetrika30kg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ordersatuan`
--

CREATE TABLE `ordersatuan` (
  `namapelanggan` varchar(30) NOT NULL,
  `celanapanjang` int(11) NOT NULL,
  `celanapendek` int(11) NOT NULL,
  `jeanspanjang` int(11) NOT NULL,
  `skirtblouse` int(11) NOT NULL,
  `jeanspendek` int(11) NOT NULL,
  `kemejapendek` int(11) NOT NULL,
  `kemejapanjang` int(11) NOT NULL,
  `jaketnonkulit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `loginadmin`
--
ALTER TABLE `loginadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `loginpelanggan`
--
ALTER TABLE `loginpelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orderkiloan`
--
ALTER TABLE `orderkiloan`
  ADD PRIMARY KEY (`namapelanggan`);

--
-- Indeks untuk tabel `orderpaketan`
--
ALTER TABLE `orderpaketan`
  ADD PRIMARY KEY (`namapelanggan`);

--
-- Indeks untuk tabel `ordersatuan`
--
ALTER TABLE `ordersatuan`
  ADD PRIMARY KEY (`namapelanggan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `loginadmin`
--
ALTER TABLE `loginadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `loginpelanggan`
--
ALTER TABLE `loginpelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
