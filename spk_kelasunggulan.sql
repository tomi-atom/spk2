-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 05 Jan 2019 pada 16.26
-- Versi Server: 5.7.24-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_kelasunggulan`
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
(200, 42, 4, 85),
(201, 43, 4, 89),
(202, 44, 4, 92),
(203, 45, 4, 83),
(204, 46, 4, 88),
(205, 47, 4, 94),
(206, 48, 4, 91),
(207, 49, 4, 92),
(208, 42, 5, 1),
(209, 43, 5, 3),
(211, 44, 5, 6),
(212, 45, 5, 2),
(213, 46, 5, 4),
(214, 48, 5, 5),
(215, 49, 5, 7),
(216, 42, 7, 76),
(217, 43, 7, 53),
(218, 44, 7, 87),
(219, 45, 7, 90),
(220, 46, 7, 70),
(221, 47, 7, 65),
(222, 48, 7, 68),
(223, 49, 7, 84),
(224, 43, 3, 90),
(225, 45, 3, 95),
(226, 46, 3, 81),
(227, 49, 3, 65),
(228, 42, 3, 86),
(229, 48, 3, 73),
(230, 44, 3, 76),
(231, 47, 3, 87),
(232, 47, 5, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_guru`, `id`, `id_kelas`) VALUES
(15, 96, 1),
(16, 97, 2),
(17, 98, 3),
(18, 99, 6),
(19, 100, 7),
(20, 101, 8),
(21, 102, 9),
(22, 103, 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(50) NOT NULL,
  `NamaKelas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `NamaKelas`) VALUES
(1, 'X IPA 1'),
(2, 'X IPA 2'),
(3, 'X IPA 3'),
(6, 'X IPA 4'),
(7, 'X IPA 5'),
(8, 'X IPS 1'),
(9, 'X IPS 2'),
(10, 'X IPS 3');

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
(3, 'Rata-Rata Nilai Akademik', 0.7, 'Benefit', '3'),
(4, 'Nilai Psikotes', 0.15, 'Benefit', '3'),
(5, 'Sertifikat Prestasi', 0.1, 'Benefit', '3'),
(7, 'Nilai UN', 0.05, 'Benefit', '3');

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
-- Struktur dari tabel `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id_mp` int(11) NOT NULL,
  `nama_mp` varchar(100) NOT NULL,
  `jurusan_mp` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id_mp`, `nama_mp`, `jurusan_mp`) VALUES
(1, 'Pendidikan Agama dan Budi Pekerti', 'IPA'),
(2, 'Bahasa Indonesia', 'IPA'),
(3, 'Fisika', 'IPA'),
(4, 'Prakarya', 'IPA'),
(5, 'Ekonomi lintas minat', 'IPA'),
(6, 'Geografi lintas minat', 'IPA'),
(7, 'Matematika wajib', 'IPA'),
(8, 'Bahasa inggris', 'IPA'),
(9, 'Matematika peminatan', 'IPA'),
(10, 'Kimia peminatan', 'IPA'),
(11, 'Sejarah Indonesia', 'IPA'),
(12, 'Ekonomi Peminatan', 'IPS'),
(13, 'Kimia lintas Minat', 'IPS'),
(14, 'PKN', 'IPS'),
(15, 'Fisika', 'IPS'),
(16, 'Prakarya', 'IPS'),
(17, 'Geografi peminatan', 'IPS'),
(18, 'Pendidikan agama dan budi pekerti', 'IPS'),
(19, 'Bahasa Indonesia', 'IPS'),
(20, 'Sosiologi', 'IPS'),
(21, 'Senibudaya', 'IPS'),
(22, 'Sejarah Indonesia', 'IPS'),
(23, 'Bahasa inggris', 'IPS'),
(24, 'Penjaskes', 'IPS'),
(25, 'Sejarah peminatan', 'IPS'),
(26, 'Matematika wajib', 'IPS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilaiakademik`
--

CREATE TABLE `nilaiakademik` (
  `id_nilai_akademik` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_mp` int(11) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilaiakademik`
--

INSERT INTO `nilaiakademik` (`id_nilai_akademik`, `id_siswa`, `id_mp`, `nilai`) VALUES
(60, 43, 1, 90),
(61, 43, 2, 90),
(62, 43, 3, 90),
(63, 43, 4, 90),
(64, 43, 5, 90),
(65, 43, 6, 90),
(66, 43, 7, 90),
(67, 43, 8, 90),
(68, 43, 9, 90),
(69, 43, 10, 90),
(70, 43, 11, 90),
(71, 45, 1, 95),
(72, 45, 2, 95),
(73, 45, 3, 95),
(74, 45, 4, 95),
(75, 45, 5, 95),
(76, 45, 6, 95),
(77, 45, 7, 95),
(78, 45, 8, 95),
(79, 45, 9, 95),
(80, 45, 10, 95),
(81, 45, 11, 95),
(82, 46, 1, 81),
(83, 46, 2, 81),
(84, 46, 3, 81),
(85, 46, 4, 81),
(86, 46, 5, 81),
(87, 46, 6, 81),
(88, 46, 7, 81),
(89, 46, 8, 81),
(90, 46, 9, 81),
(91, 46, 10, 81),
(92, 46, 11, 81),
(93, 49, 1, 65),
(94, 49, 2, 65),
(95, 49, 3, 65),
(96, 49, 4, 65),
(97, 49, 5, 65),
(98, 49, 6, 65),
(99, 49, 7, 65),
(100, 49, 8, 65),
(101, 49, 9, 65),
(102, 49, 10, 65),
(103, 49, 11, 65),
(104, 42, 12, 86),
(105, 42, 13, 86),
(106, 42, 14, 86),
(107, 42, 15, 86),
(108, 42, 16, 86),
(109, 42, 17, 86),
(110, 42, 18, 86),
(111, 42, 19, 86),
(112, 42, 20, 86),
(113, 42, 21, 86),
(114, 42, 22, 86),
(115, 42, 23, 86),
(116, 42, 24, 86),
(117, 42, 25, 86),
(118, 42, 26, 86),
(119, 48, 12, 73),
(120, 48, 13, 73),
(121, 48, 14, 73),
(122, 48, 15, 73),
(123, 48, 16, 73),
(124, 48, 17, 73),
(125, 48, 18, 73),
(126, 48, 19, 73),
(127, 48, 20, 73),
(128, 48, 21, 73),
(129, 48, 22, 73),
(130, 48, 23, 73),
(131, 48, 24, 73),
(132, 48, 25, 73),
(133, 48, 26, 73),
(134, 44, 12, 76),
(135, 44, 13, 76),
(136, 44, 14, 76),
(137, 44, 15, 76),
(138, 44, 16, 76),
(139, 44, 17, 76),
(140, 44, 18, 76),
(141, 44, 19, 76),
(142, 44, 20, 76),
(143, 44, 21, 76),
(144, 44, 22, 76),
(145, 44, 23, 76),
(146, 44, 24, 76),
(147, 44, 25, 76),
(148, 44, 26, 76),
(149, 47, 12, 87),
(150, 47, 13, 87),
(151, 47, 14, 87),
(152, 47, 15, 87),
(153, 47, 16, 87),
(154, 47, 17, 87),
(155, 47, 18, 87),
(156, 47, 19, 87),
(157, 47, 20, 87),
(158, 47, 21, 87),
(159, 47, 22, 87),
(160, 47, 23, 87),
(161, 47, 24, 87),
(162, 47, 25, 87),
(163, 47, 26, 87);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilaiun`
--

CREATE TABLE `nilaiun` (
  `id_nilai_un` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `mtk` double NOT NULL,
  `b_ind` double NOT NULL,
  `b_ing` double NOT NULL,
  `ipa` double NOT NULL,
  `ips` double NOT NULL,
  `agama` double NOT NULL,
  `pkn` double NOT NULL,
  `rata` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilaiun`
--

INSERT INTO `nilaiun` (`id_nilai_un`, `id`, `mtk`, `b_ind`, `b_ing`, `ipa`, `ips`, `agama`, `pkn`, `rata`) VALUES
(4, 65, 80, 70, 80, 80, 70, 90, 70, 77.142857142857),
(5, 68, 90, 90, 90, 90, 90, 90, 90, 90),
(6, 67, 50, 50, 50, 50, 50, 50, 50, 50),
(7, 69, 80, 80, 80, 80, 80, 80, 80, 80),
(8, 87, 90, 100, 78, 80, 0, 0, 0, 87),
(9, 88, 75, 75, 77, 76, 0, 0, 0, 75.75),
(10, 89, 56, 51, 52, 53, 0, 0, 0, 53),
(11, 90, 90, 90, 82, 86, 0, 0, 0, 87),
(12, 91, 90, 91, 89, 90, 0, 0, 0, 90),
(13, 92, 71, 70, 73, 66, 0, 0, 0, 70),
(14, 93, 82, 75, 78, 25, 0, 0, 0, 65),
(15, 94, 80, 68, 62, 62, 0, 0, 0, 68),
(16, 95, 85, 84, 80, 87, 0, 0, 0, 84);

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
(45, 'Admin', 'admin@gmail.com', 'mhakim', '202cb962ac59075b964b07152d234b70', 1),
(65, 'Anjas', 'anjas@gmail.com', 'anjas', '202cb962ac59075b964b07152d234b70', 2),
(67, 'Jack Komboy', 'jack@gmail.com', 'jack', '202cb962ac59075b964b07152d234b70', 2),
(68, 'Diana', 'diana@gmail.com', 'diana', '202cb962ac59075b964b07152d234b70', 2),
(69, 'Fenita', 'fenita@gmail.com', 'fenita', '202cb962ac59075b964b07152d234b70', 2),
(71, 'Cadi', 'cadi@gmail.com', 'cadi', '202cb962ac59075b964b07152d234b70', 2),
(72, 'Salim', 'salim@gmail.com', 'salim', '202cb962ac59075b964b07152d234b70', 4),
(74, 'Ahmad Jeri', 'jeri@gmail.com', 'jeri_x', '202cb962ac59075b964b07152d234b70', 2),
(75, 'Yunita', 'yunita@gmail.com', 'yunita', '202cb962ac59075b964b07152d234b70', 2),
(76, 'Gouza Zou ', 'go@gmail.com', 'gou', '202cb962ac59075b964b07152d234b70', 2),
(77, 'Alisia Septa', 'alisia@gmail.com', 'alis', '202cb962ac59075b964b07152d234b70', 2),
(78, 'Mauro Zarate', 'zarate@gmail.com', 'zarate', '202cb962ac59075b964b07152d234b70', 2),
(79, 'Tatitjana Indah', 'tea@gmail.com', 'tea', '202cb962ac59075b964b07152d234b70', 2),
(81, 'Jojo', 'jojo@gmail.com', 'jojo', '202cb962ac59075b964b07152d234b70', 2),
(84, 'Debris ', 'debris@gmail.com', 'debris', '202cb962ac59075b964b07152d234b70', 2),
(85, 'Axel Rose', 'axl@gmail.com', 'axel_rose', '202cb962ac59075b964b07152d234b70', 2),
(87, 'Sri Xendarina', 'sri@gmail.com', 'sriX', '202cb962ac59075b964b07152d234b70', 2),
(88, 'Delviro Fajar', 'delviro@gmail.com', 'Delviro', '202cb962ac59075b964b07152d234b70', 2),
(89, 'Rani Ayu', 'rani@gmail.com', 'rani', '202cb962ac59075b964b07152d234b70', 2),
(90, 'Rafif Bahtiar', 'rafif@gmail.com', 'rafif', '202cb962ac59075b964b07152d234b70', 2),
(91, 'Lestari Anindya', 'lestari@gmail.com', 'lestari', '202cb962ac59075b964b07152d234b70', 2),
(92, 'Nooris Mutiara', 'nooris@gmail.com', 'nooris', '202cb962ac59075b964b07152d234b70', 2),
(93, 'Dina Agustina', 'dina@gmail.com', 'dina', '202cb962ac59075b964b07152d234b70', 2),
(94, 'Julio Putra', 'julio@gmail.com', 'julio', '202cb962ac59075b964b07152d234b70', 2),
(95, 'Zaska Shahira', 'zaska@gmail.com', 'zaska', '202cb962ac59075b964b07152d234b70', 2),
(96, 'Cari Candra Panjaitan', 'cari@gmail.com', 'cari', '202cb962ac59075b964b07152d234b70', 3),
(97, 'Eko Harmok', 'eko@gmail.com', 'eko', '202cb962ac59075b964b07152d234b70', 3),
(98, 'Try Yuniarsih', 'try@gmail.com', 'try', '202cb962ac59075b964b07152d234b70', 3),
(99, 'Ruthmaida Hutabarat', 'ruthmaida@gmail.com', 'ruthmaida', '202cb962ac59075b964b07152d234b70', 3),
(100, 'Mandala Riano', 'mandala@gmail.com', 'mandala', '202cb962ac59075b964b07152d234b70', 3),
(101, 'Reli Sinabanan', 'reli@gmail.com', 'reli', '202cb962ac59075b964b07152d234b70', 3),
(102, 'Subroto Simanjutak', 'subroto@gmail.com', 'subroto', '202cb962ac59075b964b07152d234b70', 3),
(103, 'Solida Manurung', 'solida@gmail.com', 'solida', '202cb962ac59075b964b07152d234b70', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `psikotes`
--

CREATE TABLE `psikotes` (
  `id_psikotes` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rangking`
--

CREATE TABLE `rangking` (
  `No` int(11) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Id_Siswa` int(11) NOT NULL,
  `Leaving_flow` double NOT NULL,
  `Entering_flow` double NOT NULL,
  `Net_Flow` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rangking`
--

INSERT INTO `rangking` (`No`, `Nama`, `Id_Siswa`, `Leaving_flow`, `Entering_flow`, `Net_Flow`) VALUES
(1, 'Rani Ayu', 43, 0.07901484230055657, -0.014729128014842302, 0.09374397031539887),
(2, 'Lestari Anindya', 45, 0.13471768707482995, 0.018853741496598637, 0.11586394557823132),
(3, 'Nooris Mutiara', 46, -0.013269016697588124, 0.013269016697588124, -0.02653803339517625),
(4, 'Zaska Shahira', 49, 0.09179715522572665, 0.1367742733457019, -0.04497711811997526),
(5, 'Delviro Fajar', 42, 0.02671243042671614, 0.044716141001855274, -0.018003710575139133),
(6, 'Julio Putra', 48, -0.018855287569573283, 0.08314100185528757, -0.10199628942486086),
(7, 'Rafif Bahtiar', 44, -0.02373747680890537, 0.048737476808905375, -0.07247495361781074),
(8, 'Dina Agustina', 47, 0.07361966604823747, 0.01923747680890538, 0.05438218923933209);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sertifikat`
--

CREATE TABLE `sertifikat` (
  `id_sertifikat` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `NamaSertifikat` varchar(500) NOT NULL,
  `FileSertifikat` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sertifikat`
--

INSERT INTO `sertifikat` (`id_sertifikat`, `id`, `NamaSertifikat`, `FileSertifikat`) VALUES
(17, 65, 'Sertifikat_saya', 'bg21.jpg'),
(18, 65, 'Sertifikat_saya_dua', 'aroma-jeruk1.jpg'),
(19, 65, 'Sertifikat_saya_tiga', 'batman1.jpg'),
(20, 68, 'satu_ser', 'aroma-jeruk2.jpg'),
(21, 67, 'Sertifikat_saya', 'aroma-jeruk3.jpg'),
(22, 69, 'satu_ser', 'bf.jpg'),
(23, 87, 'Sertifikat_saya', 'family.jpg'),
(24, 87, 'satu_ser', 'shutterstock-252338818.jpg'),
(25, 69, 'hai', '8754225673735.jpg'),
(26, 88, '1', 'Screenshot from 2018-10-22 18-59-15.png'),
(27, 89, '1', 'Screenshot from 2018-10-22 18-55-53.png'),
(28, 89, '2', 'Screenshot from 2018-10-22 18-55-20.png'),
(29, 89, '3', '8821016767869.jpg'),
(30, 90, '1', 'Screenshot from 2018-10-22 18-56-22.png'),
(31, 90, '2', 'logo.png'),
(32, 90, '3', 'srifoton.jpg'),
(33, 90, '5', '9114177318940.jpg'),
(34, 90, '4', 'Screenshot from 2018-10-22 18-55-531.png'),
(35, 90, '5', '91141773189401.jpg'),
(36, 91, '1', 'Fig-11.jpg'),
(37, 91, '2', 'logo1.png'),
(38, 92, '1', 'graph.jpg'),
(39, 92, '2', 'srifoton1.jpg'),
(40, 92, '3', 'logo2.png'),
(41, 92, '4', 'Screenshot from 2018-10-22 18-55-201.png'),
(42, 94, '1', 'Screenshot from 2018-10-22 18-55-532.png'),
(43, 94, '2', 'Screenshot from 2018-10-22 19-06-47.png'),
(44, 94, '3', 'Screenshot from 2018-11-26 13-09-20.png'),
(45, 94, '4', 'Screenshot from 2018-10-22 18-59-151.png'),
(46, 94, '5', 'Screenshot from 2018-10-22 18-53-54.png'),
(47, 95, '1', 'Screenshot from 2018-10-22 18-56-221.png'),
(48, 95, '2', 'Screenshot from 2018-10-22 19-06-471.png'),
(49, 95, '3', 'Screenshot from 2018-10-22 18-55-533.png'),
(50, 95, '4', 'Screenshot from 2018-10-22 19-06-472.png'),
(51, 95, '5', 'Screenshot from 2018-10-22 18-55-534.png'),
(52, 95, '6', 'Screenshot from 2018-11-26 13-09-201.png'),
(53, 95, '7', 'Screenshot from 2018-10-22 18-56-222.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL DEFAULT 'kosong',
  `ttl` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `submit_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `id`, `nama`, `asal_sekolah`, `ttl`, `alamat`, `no_hp`, `nis`, `jenis_kelamin`, `kecamatan`, `id_kelas`, `status`, `submit_by`) VALUES
(42, 88, 'Delviro Fajar', 'smp 8', 'plg,12-12-12', 'iswahyudi', '09793431', '12445335', 'Laki - Laki', 'kalidoni', 8, 'Ditolak', NULL),
(43, 89, 'Rani Ayu', 'smp 8', 'plg,12-12-12', 'iswahyudi', '09793431', '12445335', 'Perempuan', 'kalidoni', 1, 'Diterima', NULL),
(44, 90, 'Rafif Bahtiar', 'smp 8', 'plg,12-12-12', 'iswahyudi', '09793431', '12445335', 'Laki - Laki', 'kalidoni', 9, 'Ditolak', NULL),
(45, 91, 'Lestari Anindya', 'smp 8', 'plg,12-12-12', 'iswahyudi', '09793431', '12445335', 'Laki - Laki', 'kalidoni', 2, 'Diterima', NULL),
(46, 92, 'Nooris Mutiara', 'smp 8', 'plg,12-12-12', 'iswahyudi', '09793431', '12445335', 'Laki - Laki', 'kalidoni', 3, 'Ditolak', NULL),
(47, 93, 'Dina Agustina', 'smp 8', 'plg,12-12-12', 'iswahyudi', '09793431', '12445335', 'Laki - Laki', 'kalidoni', 10, 'Diterima', NULL),
(48, 94, 'Julio Putra', 'smp 8', 'plg,12-12-12', 'iswahyudi', '09793431', '12445335', 'Laki - Laki', 'kalidoni', 8, 'Ditolak', NULL),
(49, 95, 'Zaska Shahira', 'smp 8', 'plg,12-12-12', 'iswahyudi', '09793431', '12445335', 'Laki - Laki', 'kalidoni', 6, 'Ditolak', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon_kriteria`
--
ALTER TABLE `calon_kriteria`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `calon_id` (`calon_id`),
  ADD KEY `subkriteria_id` (`id_kriteria`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`),
  ADD KEY `id` (`id`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `leveling`
--
ALTER TABLE `leveling`
  ADD PRIMARY KEY (`id_leveling`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id_mp`);

--
-- Indexes for table `nilaiakademik`
--
ALTER TABLE `nilaiakademik`
  ADD PRIMARY KEY (`id_nilai_akademik`),
  ADD KEY `id` (`id_siswa`),
  ADD KEY `id_mp` (`id_mp`);

--
-- Indexes for table `nilaiun`
--
ALTER TABLE `nilaiun`
  ADD PRIMARY KEY (`id_nilai_un`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_leveling` (`id_leveling`);

--
-- Indexes for table `psikotes`
--
ALTER TABLE `psikotes`
  ADD PRIMARY KEY (`id_psikotes`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `rangking`
--
ALTER TABLE `rangking`
  ADD PRIMARY KEY (`No`),
  ADD KEY `Id_Siswa` (`Id_Siswa`);

--
-- Indexes for table `sertifikat`
--
ALTER TABLE `sertifikat`
  ADD PRIMARY KEY (`id_sertifikat`),
  ADD KEY `id_pengguna` (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `submit_by` (`submit_by`),
  ADD KEY `id` (`id`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon_kriteria`
--
ALTER TABLE `calon_kriteria`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=233;
--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id_mp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `nilaiakademik`
--
ALTER TABLE `nilaiakademik`
  MODIFY `id_nilai_akademik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;
--
-- AUTO_INCREMENT for table `nilaiun`
--
ALTER TABLE `nilaiun`
  MODIFY `id_nilai_un` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT for table `psikotes`
--
ALTER TABLE `psikotes`
  MODIFY `id_psikotes` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rangking`
--
ALTER TABLE `rangking`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `sertifikat`
--
ALTER TABLE `sertifikat`
  MODIFY `id_sertifikat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `calon_kriteria`
--
ALTER TABLE `calon_kriteria`
  ADD CONSTRAINT `FK__calon` FOREIGN KEY (`calon_id`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `calon_kriteria_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON UPDATE CASCADE,
  ADD CONSTRAINT `guru_ibfk_2` FOREIGN KEY (`id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `nilaiakademik`
--
ALTER TABLE `nilaiakademik`
  ADD CONSTRAINT `nilaiakademik_ibfk_2` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilaiakademik_ibfk_3` FOREIGN KEY (`id_mp`) REFERENCES `mata_pelajaran` (`id_mp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `nilaiun`
--
ALTER TABLE `nilaiun`
  ADD CONSTRAINT `nilaiun_ibfk_1` FOREIGN KEY (`id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`id_leveling`) REFERENCES `leveling` (`id_leveling`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `psikotes`
--
ALTER TABLE `psikotes`
  ADD CONSTRAINT `psikotes_ibfk_1` FOREIGN KEY (`id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rangking`
--
ALTER TABLE `rangking`
  ADD CONSTRAINT `relasi_1` FOREIGN KEY (`Id_Siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `sertifikat`
--
ALTER TABLE `sertifikat`
  ADD CONSTRAINT `sertifikat_ibfk_1` FOREIGN KEY (`id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`submit_by`) REFERENCES `pengguna` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_3` FOREIGN KEY (`id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
