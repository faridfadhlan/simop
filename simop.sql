-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28 Jan 2016 pada 04.15
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidang`
--

CREATE TABLE `bidang` (
  `id` int(11) NOT NULL,
  `nama_bidang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bidang`
--

INSERT INTO `bidang` (`id`, `nama_bidang`) VALUES
(1, 'Kepala'),
(2, 'Tata Usaha'),
(3, 'Statistik Sosial'),
(4, 'Statistik Produksi'),
(5, 'Statistik Distribusi'),
(6, 'Neraca Wilayah dan Analisis Statistik'),
(7, 'Integrasi Pengolahan dan Diseminasi Statistik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `catatan`
--

CREATE TABLE `catatan` (
  `id` int(11) NOT NULL,
  `catatan` text NOT NULL,
  `pekerjaan_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_waktu`
--

CREATE TABLE `jenis_waktu` (
  `id` int(11) NOT NULL,
  `jenis_waktu` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_waktu`
--

INSERT INTO `jenis_waktu` (`id`, `jenis_waktu`) VALUES
(1, 'Sensus'),
(2, 'Tahunan'),
(3, 'Triwulan'),
(4, 'Subround'),
(5, 'Semester'),
(6, 'Adhoc');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `jenis_waktu_id` int(11) DEFAULT NULL,
  `nilai_waktu` varchar(4) NOT NULL,
  `tahun` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `nama`, `jenis_waktu_id`, `nilai_waktu`, `tahun`) VALUES
(1, 'Sensus Ekonomi', 1, '2016', '2016'),
(2, 'Ubinan', 4, '1', '2016'),
(3, 'Survei Sosial Ekonomi Nasional', 5, '1', '2016'),
(4, 'Pemutakhiran Basis Data Terpadu', 6, '2016', '2016'),
(5, 'Maintenance Server BPS Provinsi', 6, '2016', '2016');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id` int(11) NOT NULL,
  `nama_level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id`, `nama_level`) VALUES
(1, 'Administrator'),
(2, 'Kepala BPS Provinsi'),
(3, 'Kepala Bidang'),
(4, 'Kepala Seksi'),
(5, 'Staf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `jumlah_target` int(11) NOT NULL,
  `keterangan` text,
  `unit_target_id` int(11) DEFAULT NULL,
  `user_creator_id` int(11) DEFAULT NULL,
  `user_pj_id` int(11) DEFAULT NULL,
  `kegiatan_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `nama`, `tgl_mulai`, `tgl_selesai`, `jumlah_target`, `keterangan`, `unit_target_id`, `user_creator_id`, `user_pj_id`, `kegiatan_id`) VALUES
(1, 'Listing Ubinan Subround I Tahun 2016', '2016-01-01', '2016-01-31', 120, NULL, 1, 8, 8, 2),
(2, 'Monitoring Entri Pemutakhiran Susenas Semester I Tahun 2016', '2016-01-05', '2016-01-30', 250, NULL, 1, 17, 17, 3),
(3, 'Memasang Rak Server', '2016-01-25', '2016-02-01', 1, NULL, NULL, 18, 18, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelaksana_pekerjaan`
--

CREATE TABLE `pelaksana_pekerjaan` (
  `id` int(11) NOT NULL,
  `tgl_alokasi` date NOT NULL,
  `jumlah_target` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `kualitas` float NOT NULL,
  `pekerjaan_id` int(11) DEFAULT NULL,
  `user_pelaksana_id` int(11) DEFAULT NULL,
  `user_pengalokasi_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelaksana_pekerjaan`
--

INSERT INTO `pelaksana_pekerjaan` (`id`, `tgl_alokasi`, `jumlah_target`, `keterangan`, `kualitas`, `pekerjaan_id`, `user_pelaksana_id`, `user_pengalokasi_id`) VALUES
(1, '2016-01-05', 250, '', 0, 2, 17, 17);

-- --------------------------------------------------------

--
-- Struktur dari tabel `progres_pelaksana_pekerjaan`
--

CREATE TABLE `progres_pelaksana_pekerjaan` (
  `id` int(11) NOT NULL,
  `persentase` float NOT NULL,
  `jumlah_realisasi` int(11) DEFAULT NULL,
  `pelaksana_pekerjaan_id` int(11) DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `progres_pelaksana_pekerjaan`
--

INSERT INTO `progres_pelaksana_pekerjaan` (`id`, `persentase`, `jumlah_realisasi`, `pelaksana_pekerjaan_id`, `create_time`, `update_time`) VALUES
(1, 50, 125, 1, '2016-01-19 00:00:00', '2016-01-19 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `seksi`
--

CREATE TABLE `seksi` (
  `id` int(11) NOT NULL,
  `nama_seksi` varchar(50) NOT NULL,
  `bidang_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `seksi`
--

INSERT INTO `seksi` (`id`, `nama_seksi`, `bidang_id`) VALUES
(1, 'Bina Program', 2),
(2, 'Kepegawaian dan Hukum', 2),
(3, 'Keuangan', 2),
(4, 'Urusan Dalam', 2),
(5, 'Statistik Kependudukan', 3),
(6, 'Statistik Ketahanan Sosial', 3),
(7, 'Statistik Kesejahteraan Rakyat', 3),
(8, 'Statistik Pertanian', 4),
(9, 'Statistik Industri', 4),
(10, 'Statistik Pertambangan, Energi dan Konstruksi', 4),
(11, 'Statistik Harga Konsumen dan Harga Perdagangan Bes', 5),
(12, 'Statistik Keuangan dan Harga Produsen', 5),
(13, 'Statistik Niaga dan Jasa', 5),
(14, 'Neraca Produksi', 6),
(15, 'Neraca Konsumsi', 6),
(16, 'Analisis Statistik Lintas Sektoral', 6),
(17, 'Integrasi Pengolahan Data', 7),
(18, 'Jaringan dan Rujukan Statistik', 7),
(19, 'Diseminasi dan Layanan Statistik', 7),
(20, 'Kepala Bagian', 2),
(21, 'Kepala Bidang', 3),
(22, 'Kepala Bidang', 4),
(23, 'Kepala Bidang', 5),
(24, 'Kepala Bidang', 6),
(25, 'Kepala Bidang', 7),
(26, 'Kepala Provinsi', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `unit_target`
--

CREATE TABLE `unit_target` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `unit_target`
--

INSERT INTO `unit_target` (`id`, `nama`) VALUES
(1, 'Blok Sensus'),
(2, 'Dokumen'),
(3, 'Tabel'),
(4, 'Kecamatan'),
(5, 'Kegiatan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nip` char(18) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(60) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `seksi_id` int(11) DEFAULT NULL,
  `level_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nip`, `nama`, `username`, `email`, `password`, `remember_token`, `seksi_id`, `level_id`) VALUES
(1, '196811051994012001', 'Ika Novia Satriana SE, MM', 'ika', '', '$2y$10$AHABsyePbKWsCKro3R4qb.GvmO5F/ekF2Jo6Q3.S.efhaszh9nZHi', 'htHgcIuszC0RlVvcyduMCjRZLxVNS7BgyFb9Rct31h3bVkC2eo4Gwc9A1KLP', 1, 4),
(2, '196604131986032002', 'Faridawati', 'faridawati', '', '$2y$10$AHABsyePbKWsCKro3R4qb.GvmO5F/ekF2Jo6Q3.S.efhaszh9nZHi', '', 2, 4),
(3, '196903221994012001', 'Ir.  Elly Nurmawati  M.M.', 'elly', '', '$2y$10$AHABsyePbKWsCKro3R4qb.GvmO5F/ekF2Jo6Q3.S.efhaszh9nZHi', '', 3, 4),
(4, '195807271981031004', 'Suryadi S  S.H.', 'suryadi', '', '$2y$10$AHABsyePbKWsCKro3R4qb.GvmO5F/ekF2Jo6Q3.S.efhaszh9nZHi', '', 4, 4),
(5, '197911262002121006', 'Imam Setia Harnomo SST, M.Stat', 'imam', '', '$2y$10$AHABsyePbKWsCKro3R4qb.GvmO5F/ekF2Jo6Q3.S.efhaszh9nZHi', '', 5, 4),
(6, '196509051992031004', 'Muhammad Yani SE', 'yani', '', '$2y$10$AHABsyePbKWsCKro3R4qb.GvmO5F/ekF2Jo6Q3.S.efhaszh9nZHi', '', 6, 4),
(7, '198104212003122001', 'Rika Kartini S.ST', 'rika', '', '$2y$10$AHABsyePbKWsCKro3R4qb.GvmO5F/ekF2Jo6Q3.S.efhaszh9nZHi', '', 7, 4),
(8, '196703151994011001', 'Ir. Triyanto Widiarso MMA.', 'dimas', '', '$2y$10$AHABsyePbKWsCKro3R4qb.GvmO5F/ekF2Jo6Q3.S.efhaszh9nZHi', '', 8, 4),
(9, '198310072006022002', 'Retno Pertiwi SST.,M.Si', 'retno', '', '$2y$10$AHABsyePbKWsCKro3R4qb.GvmO5F/ekF2Jo6Q3.S.efhaszh9nZHi', '', 9, 4),
(10, '197506241994031001', 'M. Yun Imran SE', 'yun', '', '$2y$10$AHABsyePbKWsCKro3R4qb.GvmO5F/ekF2Jo6Q3.S.efhaszh9nZHi', '', 10, 4),
(11, '196705291994012001', 'Parmiatun SE', 'bunda', '', '$2y$10$AHABsyePbKWsCKro3R4qb.GvmO5F/ekF2Jo6Q3.S.efhaszh9nZHi', '', 11, 4),
(12, '196003161979121001', 'Abdul Kadir SE', 'kadir', '', '$2y$10$AHABsyePbKWsCKro3R4qb.GvmO5F/ekF2Jo6Q3.S.efhaszh9nZHi', '', 12, 4),
(13, '198307072007012012', 'Fitri Wahyu Yuliasih SST', 'fitri', '', '$2y$10$AHABsyePbKWsCKro3R4qb.GvmO5F/ekF2Jo6Q3.S.efhaszh9nZHi', 'cVzqaAPaAUZ9VmLMq73or8aIfOwDZyoIp4412W718w9REfpdJAVnWehbw6BM', 13, 4),
(14, '197206121994122001', 'Sri Suyatmi S.Si, M.Si', 'sri', '', '$2y$10$AHABsyePbKWsCKro3R4qb.GvmO5F/ekF2Jo6Q3.S.efhaszh9nZHi', '', 14, 4),
(15, '197608171999011001', 'Agus Hartanto, SE, M.Eng M.Sc', 'agus', '', '$2y$10$AHABsyePbKWsCKro3R4qb.GvmO5F/ekF2Jo6Q3.S.efhaszh9nZHi', '', 15, 4),
(16, '196611111994012001', 'Tri Setiani SE, M.M.', 'tri', '', '$2y$10$AHABsyePbKWsCKro3R4qb.GvmO5F/ekF2Jo6Q3.S.efhaszh9nZHi', '', 16, 4),
(17, '197604091999011001', 'Hakim Azizi S.ST', 'hakim', 'hakim@bps.go.id', '$2y$10$AHABsyePbKWsCKro3R4qb.GvmO5F/ekF2Jo6Q3.S.efhaszh9nZHi', 'yFqVPJg7YGw5yqinxOksFzB6cDO9irmKMU1GtOc8VlvhtKejnCkSKZ7m6R8x', 17, 4),
(18, '196005121981031002', 'Syarif Busri S.E.', 'busri', '', '$2y$10$AHABsyePbKWsCKro3R4qb.GvmO5F/ekF2Jo6Q3.S.efhaszh9nZHi', 'wNlE9EEK8w8qFsoQyLj5YWME2ytA2bfK2NvWUDI2X5HaqV5NMARJpeEW1f54', 18, 4),
(19, '197612121999032001', 'Heny Sucihati S.ST', 'heny', '', '$2y$10$AHABsyePbKWsCKro3R4qb.GvmO5F/ekF2Jo6Q3.S.efhaszh9nZHi', '', 19, 4),
(20, '196509101994021001', 'Ir. Jamaludin ?MM', 'jamaludin', '', '$2y$10$AHABsyePbKWsCKro3R4qb.GvmO5F/ekF2Jo6Q3.S.efhaszh9nZHi', '', 20, 3),
(21, '196309041991031002', 'Duaksa Aritonang SE, MM', 'duaksa', '', '$2y$10$AHABsyePbKWsCKro3R4qb.GvmO5F/ekF2Jo6Q3.S.efhaszh9nZHi', 'F9hY3ovkJfArfP0xgnoEnfD3lLVAZsrs6nT7SySniPC8Zv7eVshlhVqTpUmm', 21, 3),
(22, '196703211992032002', 'Sari Mariani SE', 'mariani', '', '$2y$10$AHABsyePbKWsCKro3R4qb.GvmO5F/ekF2Jo6Q3.S.efhaszh9nZHi', '', 22, 3),
(23, '195804261983021001', 'Edi Rahman Asmara S.Si, M.M', 'edi', '', '$2y$10$AHABsyePbKWsCKro3R4qb.GvmO5F/ekF2Jo6Q3.S.efhaszh9nZHi', '', 23, 3),
(24, '196603041992032001', 'Ir. Martalena M.M.', 'martalena', '', '$2y$10$AHABsyePbKWsCKro3R4qb.GvmO5F/ekF2Jo6Q3.S.efhaszh9nZHi', '', 24, 3),
(25, '197101211993121002', 'Sudiyanto S.Si., MM', 'sudiyanto', '', '$2y$10$AHABsyePbKWsCKro3R4qb.GvmO5F/ekF2Jo6Q3.S.efhaszh9nZHi', 'CfBRw3clljzEZdYyxq7qytp89HFbnpONo9dLPqZX9jYoeZon76MSSYzcSyUf', 25, 3),
(26, '196405111992031003', 'Ir. Pitono MAP', 'pitono', '', '$2y$10$AHABsyePbKWsCKro3R4qb.GvmO5F/ekF2Jo6Q3.S.efhaszh9nZHi', '8RnPULPnik0HJ78A4ALxDq9NHYxjqAXyXGJn1efBOSG3DC200VaS8wEek6r5', 26, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bidang`
--
ALTER TABLE `bidang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catatan`
--
ALTER TABLE `catatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IX_Relationship5` (`pekerjaan_id`),
  ADD KEY `IX_Relationship13` (`user_id`);

--
-- Indexes for table `jenis_waktu`
--
ALTER TABLE `jenis_waktu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IX_Relationship1` (`jenis_waktu_id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IX_Relationship2` (`kegiatan_id`),
  ADD KEY `IX_Relationship3` (`unit_target_id`),
  ADD KEY `IX_Relationship12` (`user_creator_id`),
  ADD KEY `IX_Relationship17` (`user_pj_id`);

--
-- Indexes for table `pelaksana_pekerjaan`
--
ALTER TABLE `pelaksana_pekerjaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IX_Relationship14` (`pekerjaan_id`),
  ADD KEY `IX_Relationship18` (`user_pelaksana_id`),
  ADD KEY `IX_Relationship19` (`user_pengalokasi_id`);

--
-- Indexes for table `progres_pelaksana_pekerjaan`
--
ALTER TABLE `progres_pelaksana_pekerjaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IX_Relationship16` (`pelaksana_pekerjaan_id`);

--
-- Indexes for table `seksi`
--
ALTER TABLE `seksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IX_Relationship9` (`bidang_id`);

--
-- Indexes for table `unit_target`
--
ALTER TABLE `unit_target`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IX_Relationship7` (`seksi_id`),
  ADD KEY `IX_Relationship8` (`level_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bidang`
--
ALTER TABLE `bidang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `catatan`
--
ALTER TABLE `catatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jenis_waktu`
--
ALTER TABLE `jenis_waktu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pelaksana_pekerjaan`
--
ALTER TABLE `pelaksana_pekerjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `progres_pelaksana_pekerjaan`
--
ALTER TABLE `progres_pelaksana_pekerjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `seksi`
--
ALTER TABLE `seksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `unit_target`
--
ALTER TABLE `unit_target`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `catatan`
--
ALTER TABLE `catatan`
  ADD CONSTRAINT `Relationship13` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `Relationship5` FOREIGN KEY (`pekerjaan_id`) REFERENCES `pekerjaan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD CONSTRAINT `Relationship1` FOREIGN KEY (`jenis_waktu_id`) REFERENCES `jenis_waktu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD CONSTRAINT `Relationship12` FOREIGN KEY (`user_creator_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `Relationship17` FOREIGN KEY (`user_pj_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `Relationship2` FOREIGN KEY (`kegiatan_id`) REFERENCES `kegiatan` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `Relationship3` FOREIGN KEY (`unit_target_id`) REFERENCES `unit_target` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pelaksana_pekerjaan`
--
ALTER TABLE `pelaksana_pekerjaan`
  ADD CONSTRAINT `Relationship14` FOREIGN KEY (`pekerjaan_id`) REFERENCES `pekerjaan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Relationship18` FOREIGN KEY (`user_pelaksana_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `Relationship19` FOREIGN KEY (`user_pengalokasi_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `progres_pelaksana_pekerjaan`
--
ALTER TABLE `progres_pelaksana_pekerjaan`
  ADD CONSTRAINT `Relationship16` FOREIGN KEY (`pelaksana_pekerjaan_id`) REFERENCES `pelaksana_pekerjaan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `seksi`
--
ALTER TABLE `seksi`
  ADD CONSTRAINT `Relationship9` FOREIGN KEY (`bidang_id`) REFERENCES `bidang` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `Relationship7` FOREIGN KEY (`seksi_id`) REFERENCES `seksi` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `Relationship8` FOREIGN KEY (`level_id`) REFERENCES `level` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
