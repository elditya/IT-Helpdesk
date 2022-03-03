-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Mar 2021 pada 21.03
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpdesk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kerusakan`
--

CREATE TABLE `kerusakan` (
  `id` varchar(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `inisial` varchar(5) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `waktu_pembuatan` time NOT NULL,
  `status_pengerjaan` varchar(255) NOT NULL,
  `jenis_kerusakan` varchar(255) NOT NULL,
  `waktu_selesai` time NOT NULL,
  `foto_kerusakan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kerusakan`
--

INSERT INTO `kerusakan` (`id`, `nama`, `inisial`, `jabatan`, `jenis`, `waktu_pembuatan`, `status_pengerjaan`, `jenis_kerusakan`, `waktu_selesai`, `foto_kerusakan`) VALUES
('ID005', 'bagas', 'BAG', 'staff', 'Komputer Lemot', '16:18:00', 'Selesai', 'low', '16:20:00', 'komputer lemot.jpg'),
('ID006', 'staff', 'STF', 'staff', 'Word Error', '16:46:00', 'Selesai', 'low', '18:53:00', 'word error.png'),
('ID007', 'bagas', 'BAG', 'staff', 'Desktop Gelap Setelah login', '18:14:00', 'Selesai', 'medium', '01:14:00', 'black screen.png'),
('ID008', 'bagas', 'BAG', 'staff', 'Power Point Error', '19:32:00', 'Selesai', 'low', '01:44:00', 'pp error.png'),
('ID009', 'staff', '', '', 'jyjhgjhgjhhj', '01:00:00', 'Selesai', 'medium', '01:14:00', 'WhatsApp Image 2021-03-02 at 09.26.26.jpeg'),
('ID012', 'staff', 'staff', '', 'komputer mati', '01:21:00', 'Selesai', 'medium', '01:25:00', 'logo_ponpes.png'),
('ID013', 'staff', 'staff', '', '', '01:28:00', 'Selesai', 'medium', '02:05:00', '1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` varchar(12) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `inisial` varchar(5) NOT NULL,
  `jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`, `inisial`, `jabatan`) VALUES
('US001', 'admin', 'admin', 'admin', '', ''),
('US002', 'staff', 'staff', 'staff', 'staff', 'staff'),
('US003', 'it', 'it', 'it', '', ''),
('US004', 'bagas', '123', 'staff', 'BAG', 'staff'),
('US005', 'irfan', '123', 'staff', 'IRF', 'staff'),
('US006', 'aqil', '123', 'staff', 'AQL', 'staff');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kerusakan`
--
ALTER TABLE `kerusakan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
