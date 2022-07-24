-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jun 2021 pada 06.33
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baex`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `baex`
--

CREATE TABLE `baex` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `wisata` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `nomorhp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `baex`
--

INSERT INTO `baex` (`id`, `nama`, `email`, `tanggal`, `wisata`, `jumlah`, `nomorhp`) VALUES
(12, 'Muhammad jauhar Alfi tsani', 'alfytsani@gmail.com', '2021-06-26', 'The Village Baturaden', 4, '0'),
(13, 'Muhammad jauhar Alfi tsani', 'alfytsani01@gmail.com', '2021-06-26', 'Telaga Sunyi', 3, '0'),
(16, 'Muhammad Jauhar Alfi Tsani', 'kharisudin@uinsby.ac.id', '2021-06-26', 'Baturaden Botanical Park', 32, '0'),
(17, 'test', 'test@gmail.com', '2021-06-26', 'Baturaden Botanical Park', 2, '0'),
(18, 'jojo', 'jojo@gmail.com', '2000-01-12', 'Baturaden Botanical Park', 10, '0'),
(19, 'percobaan1', 'percobaan1@gmail.com', '2021-06-26', 'Telaga Sunyi', 3, '2147483647'),
(20, 'NINIK NURBANI', 'kharisudin@uinsby.ac.id', '2021-06-26', 'Baturaden Botanical Park', 1, '085868646342'),
(21, 'Kharisudin Aqib', 'nizaremania87@gmail.com', '2021-06-23', 'Curug Telu', 2, '085868646342'),
(22, 'Kharisudin Aqib', 'kharisuddinaqib01@gmail.com', '2021-07-01', 'Hutan Pinus Limpakuwus', 1, '085868646342'),
(23, 'ujicoba', 'ujicoba@gmail.com', '2021-06-25', 'Curug Telu', 3, '085868646'),
(24, 'oh yeahhh', 'nizaremania87@gmail.com', '2021-07-10', 'Telaga Sunyi', 1, '085868646352'),
(25, 'Kharisudin Aqib', 'kharisudin@uinsby.ac.id', '2021-07-01', 'Baturaden Botanical Park', 1, '085868646342'),
(26, 'Melinia Dini Afrian', 'Meliniadiniafrian@gmail.com', '2021-07-10', 'Curug Telu', 3, '085868646342');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `baex`
--
ALTER TABLE `baex`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `baex`
--
ALTER TABLE `baex`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
