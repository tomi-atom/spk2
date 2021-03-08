-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Nov 2020 pada 03.06
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
(200, 1, 1, 4),
(201, 2, 1, 5),
(202, 3, 1, 5),
(203, 4, 1, 4),
(204, 5, 1, 4),
(205, 6, 1, 4),
(206, 7, 1, 4),
(207, 8, 1, 4),
(208, 9, 1, 4),
(209, 10, 1, 4),
(211, 11, 1, 4),
(212, 12, 1, 5),
(213, 13, 1, 4),
(214, 14, 1, 3),
(215, 15, 1, 5),
(216, 16, 1, 3),
(217, 17, 1, 5),
(218, 18, 1, 5),
(219, 19, 1, 5),
(220, 20, 1, 5),
(221, 21, 1, 5),
(222, 22, 1, 5),
(223, 23, 1, 5),
(224, 1, 2, 2),
(225, 2, 2, 1),
(226, 3, 2, 2),
(227, 4, 2, 2),
(228, 5, 2, 1),
(229, 6, 2, 1),
(230, 7, 2, 2),
(231, 8, 2, 2),
(232, 9, 2, 1),
(234, 10, 2, 1),
(235, 11, 2, 2),
(236, 12, 2, 2),
(237, 13, 2, 2),
(238, 14, 2, 2),
(239, 15, 2, 1),
(240, 16, 2, 1),
(241, 17, 2, 2),
(242, 18, 2, 2),
(243, 19, 2, 2),
(244, 20, 2, 1),
(245, 21, 2, 1),
(246, 22, 2, 1),
(247, 23, 2, 2),
(248, 1, 3, 3),
(249, 2, 3, 1),
(250, 3, 3, 5),
(251, 4, 3, 5),
(252, 5, 3, 5),
(253, 6, 3, 5),
(254, 7, 3, 5),
(255, 8, 3, 3),
(256, 9, 3, 1),
(257, 10, 3, 5),
(258, 11, 3, 5),
(259, 12, 3, 5),
(260, 13, 3, 1),
(261, 14, 3, 3),
(262, 15, 3, 5),
(263, 16, 3, 3),
(264, 17, 3, 1),
(265, 18, 3, 5),
(266, 19, 3, 5),
(267, 20, 3, 1),
(268, 21, 3, 5),
(269, 22, 3, 3),
(270, 23, 3, 1),
(271, 1, 4, 2),
(272, 2, 4, 3),
(273, 3, 4, 3),
(274, 4, 4, 4),
(275, 5, 4, 2),
(276, 6, 4, 1),
(277, 7, 4, 3),
(278, 8, 4, 1),
(279, 9, 4, 2),
(280, 10, 4, 1),
(281, 11, 4, 3),
(282, 12, 4, 3),
(283, 13, 4, 1),
(284, 14, 4, 3),
(285, 15, 4, 2),
(286, 16, 4, 3),
(287, 17, 4, 2),
(288, 18, 4, 5),
(289, 19, 4, 2),
(290, 20, 4, 3),
(291, 21, 4, 4),
(292, 22, 4, 4),
(293, 23, 4, 1),
(294, 1, 5, 1),
(295, 2, 5, 1),
(296, 3, 5, 1),
(297, 4, 5, 1),
(298, 5, 5, 1),
(299, 6, 5, 1),
(300, 7, 5, 3),
(301, 8, 5, 3),
(302, 9, 5, 1),
(303, 10, 5, 1),
(304, 11, 5, 1),
(305, 12, 5, 1),
(306, 13, 5, 1),
(307, 14, 5, 3),
(308, 15, 5, 1),
(309, 16, 5, 1),
(310, 17, 5, 1),
(311, 18, 5, 1),
(312, 19, 5, 1),
(313, 20, 5, 1),
(314, 21, 5, 3),
(315, 22, 5, 3),
(316, 23, 5, 3),
(317, 1, 6, 2),
(318, 2, 6, 2),
(319, 3, 6, 2),
(320, 4, 6, 1),
(321, 5, 6, 2),
(322, 6, 6, 2),
(323, 7, 6, 2),
(324, 8, 6, 1),
(325, 9, 6, 2),
(326, 10, 6, 1),
(327, 11, 6, 1),
(328, 12, 6, 2),
(329, 13, 6, 2),
(330, 14, 6, 2),
(331, 15, 6, 1),
(332, 16, 6, 2),
(333, 17, 6, 2),
(334, 18, 6, 2),
(335, 19, 6, 2),
(336, 20, 6, 1),
(337, 21, 6, 2),
(338, 22, 6, 2),
(339, 23, 6, 2),
(340, 1, 7, 1),
(341, 2, 7, 1),
(342, 3, 7, 1),
(343, 4, 7, 1),
(344, 5, 7, 1),
(345, 6, 7, 1),
(346, 7, 7, 1),
(347, 8, 7, 1),
(348, 9, 7, 1),
(349, 10, 7, 1),
(350, 11, 7, 1),
(351, 12, 7, 1),
(352, 13, 7, 1),
(353, 14, 7, 1),
(354, 15, 7, 1),
(355, 16, 7, 1),
(356, 17, 7, 2),
(357, 18, 7, 2),
(358, 19, 7, 2),
(359, 20, 7, 2),
(360, 21, 7, 2),
(361, 22, 7, 2),
(362, 23, 7, 2);

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
(1, 'Mhs A', 'mhsa@gmail.com', '1', '202cb962ac59075b964b07152d234b70', 2),
(2, 'Mhs B', 'mhsb@gmail.com', '2', '202cb962ac59075b964b07152d234b70', 2),
(3, 'Mhs C', 'mhsc@gmail.com', '3', '202cb962ac59075b964b07152d234b70', 2),
(4, 'Mhs D', 'mhsd@gmail.com', '4', '202cb962ac59075b964b07152d234b70', 2),
(5, 'Mhs E', 'mhse@gmail.com', '5', '202cb962ac59075b964b07152d234b70', 2),
(6, 'Mhs F', 'mhsf@gmail.com', '6', '202cb962ac59075b964b07152d234b70', 2),
(7, 'Mhs G', 'mhsg@gmail.com', '7', '202cb962ac59075b964b07152d234b70', 2),
(8, 'Mhs H', 'mhsh@gmail.com', '8', '202cb962ac59075b964b07152d234b70', 2),
(9, 'Mhs I', 'mhsi@gmail.com', '9', '202cb962ac59075b964b07152d234b70', 2),
(10, 'Mhs J', 'mhsj@gmail.com', '10', '202cb962ac59075b964b07152d234b70', 2),
(11, 'Mhs K', 'mhsk@gmail.com', '11', '202cb962ac59075b964b07152d234b70', 2),
(12, 'Mhs L', 'mhsl@gmail.com', '12', '202cb962ac59075b964b07152d234b70', 2),
(13, 'Mhs M', 'mhsm@gmail.com', '13', '202cb962ac59075b964b07152d234b70', 2),
(14, 'Mhs N', 'mhsn@gmail.com', '14', '202cb962ac59075b964b07152d234b70', 2),
(15, 'Mhs O', 'mhsol@gmail.com', '15', '202cb962ac59075b964b07152d234b70', 2),
(16, 'Mhs P', 'mhsp@gmail.com', '16', '202cb962ac59075b964b07152d234b70', 2),
(17, 'Mhs Q', 'mhsq@gmail.com', '17', '202cb962ac59075b964b07152d234b70', 2),
(18, 'Mhs R', 'mhsr@gmail.com', '18', '202cb962ac59075b964b07152d234b70', 2),
(19, 'Mhs S', 'mhss@gmail.com', '19', '202cb962ac59075b964b07152d234b70', 2),
(20, 'Mhs T', 'mhst@gmail.com', '20', '202cb962ac59075b964b07152d234b70', 2),
(21, 'Mhs U', 'mhsu@gmail.com', '21', '202cb962ac59075b964b07152d234b70', 2),
(22, 'Mhs V', 'mhsv@gmail.com', '22', '202cb962ac59075b964b07152d234b70', 2),
(23, 'Mhs W', 'mhsw@gmail.com', '23', '202cb962ac59075b964b07152d234b70', 2),
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
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=364;

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
