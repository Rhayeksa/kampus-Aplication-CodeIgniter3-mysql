-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 04 Des 2020 pada 01.13
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_kampus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosens`
--

CREATE TABLE `dosens` (
  `nid` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_studies`
--

CREATE TABLE `hasil_studies` (
  `kode` varchar(255) NOT NULL,
  `absen` decimal(10,0) NOT NULL,
  `tugas` decimal(10,0) NOT NULL,
  `uts` decimal(10,0) NOT NULL,
  `uas` decimal(10,0) NOT NULL,
  `nilai` decimal(10,0) NOT NULL,
  `kriteria` varchar(255) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `dosenNid` varchar(255) DEFAULT NULL,
  `mataKuliahKode` varchar(255) DEFAULT NULL,
  `mahasiswaNim` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswas`
--

CREATE TABLE `mahasiswas` (
  `nim` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_kuliahs`
--

CREATE TABLE `mata_kuliahs` (
  `kode` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `sks` int(11) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rencana_studies`
--

CREATE TABLE `rencana_studies` (
  `kode` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL,
  `banyak_pertemuan` int(11) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `dosenNid` varchar(255) DEFAULT NULL,
  `mataKuliahKode` varchar(255) DEFAULT NULL,
  `mahasiswaNim` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dosens`
--
ALTER TABLE `dosens`
  ADD PRIMARY KEY (`nid`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `hasil_studies`
--
ALTER TABLE `hasil_studies`
  ADD KEY `dosenNid` (`dosenNid`),
  ADD KEY `mataKuliahKode` (`mataKuliahKode`),
  ADD KEY `mahasiswaNim` (`mahasiswaNim`);

--
-- Indeks untuk tabel `mahasiswas`
--
ALTER TABLE `mahasiswas`
  ADD PRIMARY KEY (`nim`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `mata_kuliahs`
--
ALTER TABLE `mata_kuliahs`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `rencana_studies`
--
ALTER TABLE `rencana_studies`
  ADD KEY `dosenNid` (`dosenNid`),
  ADD KEY `mataKuliahKode` (`mataKuliahKode`),
  ADD KEY `mahasiswaNim` (`mahasiswaNim`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `hasil_studies`
--
ALTER TABLE `hasil_studies`
  ADD CONSTRAINT `hasil_studies_ibfk_1` FOREIGN KEY (`dosenNid`) REFERENCES `dosens` (`nid`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `hasil_studies_ibfk_2` FOREIGN KEY (`mataKuliahKode`) REFERENCES `mata_kuliahs` (`kode`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `hasil_studies_ibfk_3` FOREIGN KEY (`mahasiswaNim`) REFERENCES `mahasiswas` (`nim`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rencana_studies`
--
ALTER TABLE `rencana_studies`
  ADD CONSTRAINT `rencana_studies_ibfk_1` FOREIGN KEY (`dosenNid`) REFERENCES `dosens` (`nid`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `rencana_studies_ibfk_2` FOREIGN KEY (`mataKuliahKode`) REFERENCES `mata_kuliahs` (`kode`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `rencana_studies_ibfk_3` FOREIGN KEY (`mahasiswaNim`) REFERENCES `mahasiswas` (`nim`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
