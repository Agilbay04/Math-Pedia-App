-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 21 Mar 2020 pada 00.08
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Rumus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_adm` int(11) NOT NULL,
  `foto_adm` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `nama_adm` varchar(30) NOT NULL,
  `jk_adm` enum('Laki-laki','Perempuan') NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `alamat_adm` text NOT NULL,
  `username_adm` varchar(15) NOT NULL,
  `password_adm` varchar(100) NOT NULL,
  `status` enum('Admin','Super Admin') NOT NULL DEFAULT 'Admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_adm`, `foto_adm`, `nama_adm`, `jk_adm`, `no_hp`, `alamat_adm`, `username_adm`, `password_adm`, `status`) VALUES
(1, 'Screenshot_from_2020-03-20_01-02-2410.png', 'Fulan A', 'Perempuan', '085776889000', 'Jombang', 'Fulan123', '1234', 'Super Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rumus_mm`
--

CREATE TABLE `rumus_mm` (
  `id_rms` int(11) NOT NULL,
  `nama_rms` varchar(30) NOT NULL,
  `det_rms` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rumus_mm`
--

INSERT INTO `rumus_mm` (`id_rms`, `nama_rms`, `det_rms`) VALUES
(1, 'Luas Lingkaran 1', 'Screenshot_from_2020-03-09_21-05-052.png'),
(3, 'Volume Kerucut ', 'Screenshot_from_2020-03-12_14-47-394.png'),
(4, 'Modus', 'Screenshot_from_2020-03-20_01-02-24.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_adm`);

--
-- Indeks untuk tabel `rumus_mm`
--
ALTER TABLE `rumus_mm`
  ADD PRIMARY KEY (`id_rms`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `rumus_mm`
--
ALTER TABLE `rumus_mm`
  MODIFY `id_rms` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
