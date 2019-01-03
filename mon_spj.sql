-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03 Jan 2019 pada 11.00
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mon_spj`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mak`
--

CREATE TABLE `mak` (
  `id` int(11) NOT NULL,
  `kode_mak` int(11) NOT NULL,
  `nama_mak` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mak`
--

INSERT INTO `mak` (`id`, `kode_mak`, `nama_mak`) VALUES
(1, 525115, 'transport'),
(2, 525111, 'honor'),
(3, 525111, 'lembur'),
(4, 525113, 'Gaji Non pns (TKT)'),
(5, 525113, 'gaji pramubakti'),
(6, 525112, 'UM non PNS (TKT)'),
(7, 511129, 'UM PNS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengantar_nominatif`
--

CREATE TABLE `pengantar_nominatif` (
  `id` int(11) NOT NULL,
  `no_spp` int(11) NOT NULL,
  `uraian_kegiatan` varchar(300) NOT NULL,
  `mak` int(11) NOT NULL,
  `jml_kotor` int(11) NOT NULL,
  `pajak` int(11) NOT NULL,
  `jml_bersih` int(11) NOT NULL,
  `tgl_spp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengantar_nominatif`
--

INSERT INTO `pengantar_nominatif` (`id`, `no_spp`, `uraian_kegiatan`, `mak`, `jml_kotor`, `pajak`, `jml_bersih`, `tgl_spp`) VALUES
(6, 1273, 'rapat kerja pokjar', 525115, 7560000, 0, 7560000, '2019-01-03'),
(7, 1274, 'rekrutmen mhs baru', 525115, 3616000, 0, 3616000, '2019-01-03'),
(8, 1275, 'rekrutmen mhs pengiriman hasil uas', 525115, 4460000, 0, 4460000, '2019-01-03'),
(9, 1276, 'konsumsi pengawas uas', 525112, 250000, 127, 235000, '2019-01-03'),
(10, 1277, 'honorariunm panitia uas', 525111, 3860000, 127, 3667000, '2019-01-03'),
(11, 1278, 'honorarium supervisor 1 praktik', 525115, 34200000, 127, 32148000, '2019-01-03'),
(12, 1278, 'honorarium penyiapan lokasi', 525115, 34200000, 2052000, 32148000, '2019-01-03'),
(13, 2, 'honor tutor', 525111, 3000000, 150000, 2850000, '2019-01-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mak`
--
ALTER TABLE `mak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengantar_nominatif`
--
ALTER TABLE `pengantar_nominatif`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mak`
--
ALTER TABLE `mak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pengantar_nominatif`
--
ALTER TABLE `pengantar_nominatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
