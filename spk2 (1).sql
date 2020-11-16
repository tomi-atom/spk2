-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Nov 2020 pada 01.54
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon_kriteria`
--

CREATE TABLE `calon_kriteria` (
  `id_nilai` int(11) NOT NULL,
  `calon_id` int(11) DEFAULT NULL,
  `id_kriteria` int(11) DEFAULT NULL,
  `value` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `calon_kriteria`
--

INSERT INTO `calon_kriteria` (`id_nilai`, `calon_id`, `id_kriteria`, `value`) VALUES
(200, 1, 1, 1),
(201, 2, 1, 14),
(202, 3, 1, 15),
(203, 4, 1, 16),
(204, 5, 1, 17),
(205, 6, 1, 18),
(206, 7, 1, 19),
(207, 8, 1, 20),
(208, 9, 1, 21),
(209, 10, 1, 22),
(211, 11, 1, 23),
(212, 12, 1, 1),
(213, 13, 1, 2),
(214, 14, 1, 3),
(215, 15, 1, 4),
(216, 16, 1, 5),
(217, 17, 1, 6),
(218, 18, 1, 7),
(219, 19, 1, 8),
(220, 20, 1, 9),
(221, 21, 1, 10),
(222, 22, 1, 11),
(223, 23, 1, 12),
(224, 1, 2, 13),
(225, 2, 2, 14),
(226, 3, 2, 15),
(227, 4, 2, 16),
(228, 5, 2, 17),
(229, 6, 2, 18),
(230, 7, 2, 19),
(231, 8, 2, 20),
(232, 9, 2, 21),
(234, 10, 2, 22),
(235, 11, 2, 23),
(236, 12, 2, 1),
(237, 13, 2, 2),
(238, 14, 2, 3),
(239, 15, 2, 4),
(240, 16, 2, 5),
(241, 17, 2, 6),
(242, 18, 2, 7),
(243, 19, 2, 8),
(244, 20, 2, 9),
(245, 21, 2, 10),
(246, 22, 2, 11),
(247, 23, 2, 12),
(248, 1, 3, 13),
(249, 2, 3, 14),
(250, 3, 3, 15),
(251, 4, 3, 16),
(252, 5, 3, 17),
(253, 6, 3, 18),
(254, 7, 3, 19),
(255, 8, 3, 20),
(256, 9, 3, 21),
(257, 10, 3, 22),
(258, 11, 3, 23),
(259, 12, 3, 1),
(260, 13, 3, 2),
(261, 14, 3, 3),
(262, 15, 3, 4),
(263, 16, 3, 5),
(264, 17, 3, 6),
(265, 18, 3, 7),
(266, 19, 3, 8),
(267, 20, 3, 9),
(268, 21, 3, 10),
(269, 22, 3, 11),
(270, 23, 3, 12),
(271, 1, 4, 13),
(272, 2, 4, 14),
(273, 3, 4, 15),
(274, 4, 4, 16),
(275, 5, 4, 17),
(276, 6, 4, 18),
(277, 7, 4, 19),
(278, 8, 4, 20),
(279, 9, 4, 21),
(280, 10, 4, 22),
(281, 11, 4, 23),
(282, 12, 4, 1),
(283, 13, 4, 2),
(284, 14, 4, 3),
(285, 15, 4, 4),
(286, 16, 4, 5),
(287, 17, 4, 6),
(288, 18, 4, 7),
(289, 19, 4, 8),
(290, 20, 4, 9),
(291, 21, 4, 10),
(292, 22, 4, 11),
(293, 23, 4, 12),
(294, 1, 5, 13),
(295, 2, 5, 14),
(296, 3, 5, 15),
(297, 4, 5, 16),
(298, 5, 5, 17),
(299, 6, 5, 18),
(300, 7, 5, 19),
(301, 8, 5, 20),
(302, 9, 5, 21),
(303, 10, 5, 22),
(304, 11, 5, 23),
(305, 12, 5, 1),
(306, 13, 5, 2),
(307, 14, 5, 3),
(308, 15, 5, 4),
(309, 16, 5, 5),
(310, 17, 5, 6),
(311, 18, 5, 7),
(312, 19, 5, 8),
(313, 20, 5, 9),
(314, 21, 5, 10),
(315, 22, 5, 11),
(316, 23, 5, 12),
(317, 1, 6, 13),
(318, 2, 6, 14),
(319, 3, 6, 15),
(320, 4, 6, 16),
(321, 5, 6, 17),
(322, 6, 6, 18),
(323, 7, 6, 19),
(324, 8, 6, 20),
(325, 9, 6, 21),
(326, 10, 6, 22),
(327, 11, 6, 23),
(328, 12, 6, 1),
(329, 13, 6, 2),
(330, 14, 6, 3),
(331, 15, 6, 4),
(332, 16, 6, 5),
(333, 17, 6, 6),
(334, 18, 6, 7),
(335, 19, 6, 8),
(336, 20, 6, 9),
(337, 21, 6, 10),
(338, 22, 6, 11),
(339, 23, 6, 12),
(340, 1, 7, 13),
(341, 2, 7, 14),
(342, 3, 7, 15),
(343, 4, 7, 16),
(344, 5, 7, 17),
(345, 6, 7, 18),
(346, 7, 7, 19),
(347, 8, 7, 20),
(348, 9, 7, 21),
(349, 10, 7, 22),
(350, 11, 7, 23),
(351, 12, 7, 2),
(352, 13, 7, 5),
(353, 14, 7, 1),
(354, 15, 7, 1),
(355, 16, 7, 5),
(356, 17, 7, 7),
(357, 18, 7, 1),
(358, 19, 7, 1),
(359, 20, 7, 1),
(360, 21, 7, 1),
(361, 22, 7, 1),
(362, 23, 7, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(50) NOT NULL,
  `NamaJurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `NamaJurusan`) VALUES
(1, 'Sistem Informasi'),
(2, 'Manajemen Informatika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `bobot` double NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `tipe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama`, `bobot`, `jenis`, `tipe`) VALUES
(1, 'IPK', 0.7, 'Benefit', '3'),
(2, 'Prestasi', 0.15, 'Benefit', '3'),
(3, 'Penghasilan Orang Tua / Wali', 0.1, 'Benefit', '3'),
(4, 'Jumlah Tanggungan Orang Tua / Wali', 0.05, 'Benefit', '3'),
(5, 'Semester', 0.05, 'Benefit', '3'),
(6, 'Proposal PKM', 0.1, 'Benefit', '3'),
(7, 'Status Orang Tua', 0.1, 'Benefit', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `leveling`
--

CREATE TABLE `leveling` (
  `id_leveling` int(200) NOT NULL,
  `leveling` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `leveling`
--

INSERT INTO `leveling` (`id_leveling`, `leveling`) VALUES
(1, 'Admin'),
(2, 'Siswa'),
(3, 'Guru'),
(4, 'Kepala _sekolah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `id_jurusan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `id`, `nama`, `id_jurusan`) VALUES
(1, 1, 'Mhs A', 1),
(2, 2, 'Mhs B', 1),
(3, 3, 'Mhs C', 1),
(4, 4, 'Mhs D', 1),
(5, 5, 'Mhs E', 1),
(6, 6, 'Mhs F', 1),
(7, 7, 'Mhs G', 1),
(8, 8, 'Mhs H', 1),
(9, 9, 'Mhs I', 1),
(10, 10, 'Mhs J', 1),
(11, 11, 'Mhs K', 1),
(12, 12, 'Mhs L', 1),
(13, 13, 'Mhs M', 1),
(14, 14, 'Mhs N', 1),
(15, 15, 'Mhs O', 1),
(16, 16, 'Mhs P', 1),
(17, 17, 'Mhs Q', 1),
(18, 18, 'Mhs R', 1),
(19, 19, 'Mhs S', 1),
(20, 20, 'Mhs T', 1),
(21, 21, 'Mhs U', 1),
(22, 22, 'Mhs V', 1),
(23, 23, 'Mhs W', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa2`
--

CREATE TABLE `mahasiswa2` (
  `id_mahasiswa` int(11) NOT NULL,
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `id_jurusan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa2`
--

INSERT INTO `mahasiswa2` (`id_mahasiswa`, `id`, `nama`, `ttl`, `alamat`, `no_hp`, `nim`, `jenis_kelamin`, `id_jurusan`) VALUES
(42, 88, 'Delviro Fajar', 'plg,12-12-12', 'Pekanbaru', '09793431', '', 'Laki - Laki', 1),
(43, 89, 'Rani Ayu', 'plg,12-12-12', 'iswahyudi', '09793431', '', 'Perempuan', 1),
(44, 90, 'Rafif Bahtiar', 'plg,12-12-12', 'iswahyudi', '09793431', '', 'Laki - Laki', 1),
(45, 91, 'Lestari Anindya', 'plg,12-12-12', 'iswahyudi', '09793431', '', 'Laki - Laki', 1),
(46, 92, 'Nooris Mutiara', 'plg,12-12-12', 'iswahyudi', '09793431', '', 'Laki - Laki', 1),
(47, 93, 'Dina Agustina', 'plg,12-12-12', 'iswahyudi', '09793431', '', 'Laki - Laki', 1),
(48, 94, 'Julio Putra', 'plg,12-12-12', 'iswahyudi', '09793431', '', 'Laki - Laki', 1),
(49, 95, 'Zaska Shahira', 'plg,12-12-12', 'iswahyudi', '09793431', '', 'Laki - Laki', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_leveling` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `email`, `username`, `password`, `id_leveling`) VALUES
(45, 'Admin', 'admin@gmail.com', 'admin', '202cb962ac59075b964b07152d234b70', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `calon_kriteria`
--
ALTER TABLE `calon_kriteria`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `subkriteria_id` (`id_kriteria`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `leveling`
--
ALTER TABLE `leveling`
  ADD PRIMARY KEY (`id_leveling`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indeks untuk tabel `mahasiswa2`
--
ALTER TABLE `mahasiswa2`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_leveling` (`id_leveling`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `calon_kriteria`
--
ALTER TABLE `calon_kriteria`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=363;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`id_leveling`) REFERENCES `leveling` (`id_leveling`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
