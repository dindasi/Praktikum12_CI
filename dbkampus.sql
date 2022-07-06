-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jun 2022 pada 05.25
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbkampus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `nidn` varchar(10) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `gender` char(1) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `tmp_lahir` varchar(30) DEFAULT NULL,
  `pendidikan_akhir` varchar(50) NOT NULL,
  `prodi_kode` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`nidn`, `nama`, `gender`, `tgl_lahir`, `tmp_lahir`, `pendidikan_akhir`, `prodi_kode`) VALUES
('190096871', 'David Panji', 'L', '1990-12-12', 'Jakarta', 'S2', 'BD'),
('190096872', 'Misna Azqia', 'P', '1993-02-12', 'Jakarta', 'S2', 'SI'),
('190096873', 'Tifani Nabarian', 'P', '1991-05-10', 'Depok', 'S1', 'TI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `gender` char(1) DEFAULT NULL,
  `tmp_lahir` varchar(30) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `ipk` double DEFAULT NULL,
  `prodi_kode` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `gender`, `tmp_lahir`, `tgl_lahir`, `ipk`, `prodi_kode`) VALUES
('01021001', 'Naurah Husna', 'P', 'Jakarta', '2003-03-08', 3.85, 'TI'),
('02021020', 'Ahmad Afif', 'L', 'Depok', '2004-01-20', 3.2, 'BD'),
('03021021', 'Furqon Zaki', 'L', 'Bogor', '2003-01-25', 3.67, 'SI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `kode` varchar(2) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `kaprodi` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`kode`, `nama`, `kaprodi`) VALUES
('BD', 'Bisnis Digital', 'David Panji'),
('SI', 'Sistem Informasi', 'Misna Azqia'),
('TI', 'Teknik Informatika', 'Tifani Nabarian');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(45) NOT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_login` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `role`, `created_at`, `last_login`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'admin@sttnf.ac.id', 'ADMIN', '2022-06-18 03:00:06', '2022-06-18 03:00:06'),
(2, 'siswa1', '827ccb0eea8a706c4c34a16891f84e7b', 'siswa1@sttnf.ac.id', 'MAHASISWA', '2022-06-18 03:02:29', '2022-06-18 03:02:29');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nidn`),
  ADD KEY `prodi_kode` (`prodi_kode`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `prodi_kode` (`prodi_kode`);

--
-- Indeks untuk tabel `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `dosen_ibfk_1` FOREIGN KEY (`prodi_kode`) REFERENCES `prodi` (`kode`);

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`prodi_kode`) REFERENCES `prodi` (`kode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
