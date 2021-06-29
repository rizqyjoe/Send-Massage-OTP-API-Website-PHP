-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jul 2020 pada 08.13
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formwa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `wamessage`
--

CREATE TABLE `wamessage` (
  `M_ID` int(11) NOT NULL,
  `NO` varchar(25) DEFAULT NULL,
  `PESAN` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wamessage`
--

INSERT INTO `wamessage` (`M_ID`, `NO`, `PESAN`) VALUES
(1, '6289685247265', 'oke gan'),
(2, '6283829377233', 'oke gan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `waotp`
--

CREATE TABLE `waotp` (
  `O_ID` int(11) NOT NULL,
  `NO` varchar(25) DEFAULT NULL,
  `OTP` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `waotp`
--

INSERT INTO `waotp` (`O_ID`, `NO`, `OTP`) VALUES
(1, '6283829377233', '170346'),
(2, '6289685247265', '447746');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `wamessage`
--
ALTER TABLE `wamessage`
  ADD PRIMARY KEY (`M_ID`);

--
-- Indeks untuk tabel `waotp`
--
ALTER TABLE `waotp`
  ADD PRIMARY KEY (`O_ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `wamessage`
--
ALTER TABLE `wamessage`
  MODIFY `M_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `waotp`
--
ALTER TABLE `waotp`
  MODIFY `O_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
