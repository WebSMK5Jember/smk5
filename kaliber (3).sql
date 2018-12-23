-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23 Des 2018 pada 13.55
-- Versi Server: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kaliber`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pengumuman`
--

CREATE TABLE `detail_pengumuman` (
  `NIS` varchar(10) DEFAULT NULL,
  `KODE_PENGUMUMAN` varchar(5) DEFAULT NULL,
  `KODE_DETAIL` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_sikap`
--

CREATE TABLE `nilai_sikap` (
  `NIS` varchar(10) DEFAULT NULL,
  `KERAJINAN` int(11) DEFAULT NULL,
  `KERAPIAN` int(11) DEFAULT NULL,
  `KELAKUAN` int(11) DEFAULT NULL,
  `KEBERSIHAN` int(11) DEFAULT NULL,
  `SEMESTER` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_absensi`
--

CREATE TABLE `tabel_absensi` (
  `KODE_ABSENSI` varchar(5) NOT NULL,
  `KETERANGAN` varchar(30) NOT NULL,
  `JUMLAH_HADIR` int(2) NOT NULL,
  `KODE_MAPEL` varchar(5) NOT NULL,
  `NIS` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_admin`
--

CREATE TABLE `tabel_admin` (
  `KODE_ADMIN` varchar(5) NOT NULL,
  `NAMA_ADMIN` varchar(30) DEFAULT NULL,
  `JABATAN` varchar(20) DEFAULT NULL,
  `EMAIL` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_admin`
--

INSERT INTO `tabel_admin` (`KODE_ADMIN`, `NAMA_ADMIN`, `JABATAN`, `EMAIL`) VALUES
('1', 'admin1', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_agenda`
--

CREATE TABLE `tabel_agenda` (
  `KODE_AGENDA` varchar(5) NOT NULL,
  `KODE_ADMIN` varchar(5) DEFAULT NULL,
  `NAMA_AGENDA` varchar(30) DEFAULT NULL,
  `TANGGAL_AGENDA` date DEFAULT NULL,
  `DESKRIPSI_AGENDA` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_galeri`
--

CREATE TABLE `tabel_galeri` (
  `KODE_FOTO` varchar(5) NOT NULL,
  `KODE_ADMIN` varchar(5) DEFAULT NULL,
  `NAMA_FOTO` varchar(20) DEFAULT NULL,
  `FOTO` longblob,
  `DESCRIPSI` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_guru`
--

CREATE TABLE `tabel_guru` (
  `NIP` varchar(30) NOT NULL,
  `KODE_MAPEL` varchar(5) DEFAULT NULL,
  `KODE_GURU` varchar(5) NOT NULL,
  `KODE_JABATAN` varchar(5) DEFAULT NULL,
  `KODE_PIKET` varchar(5) DEFAULT NULL,
  `NAMA_GURU` varchar(50) DEFAULT NULL,
  `ALAMAT_GURU` varchar(50) DEFAULT NULL,
  `JABATAN` varchar(10) DEFAULT NULL,
  `JUMLAH_JAM` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_guru`
--

INSERT INTO `tabel_guru` (`NIP`, `KODE_MAPEL`, `KODE_GURU`, `KODE_JABATAN`, `KODE_PIKET`, `NAMA_GURU`, `ALAMAT_GURU`, `JABATAN`, `JUMLAH_JAM`) VALUES
('19700317 199303 1 008', NULL, 'A01', NULL, NULL, 'Sofyan Hadi Purwanto, SE, MT', NULL, NULL, 24);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_jabatan`
--

CREATE TABLE `tabel_jabatan` (
  `KODE_JABATAN` varchar(5) NOT NULL,
  `NAMA_JABATAN` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_jadwal`
--

CREATE TABLE `tabel_jadwal` (
  `KODE_KELAS` varchar(5) DEFAULT NULL,
  `KODE_MAPEL` varchar(5) DEFAULT NULL,
  `KODE_GURU` varchar(5) DEFAULT NULL,
  `JAM` time DEFAULT NULL,
  `RUANG` varchar(10) DEFAULT NULL,
  `HARI` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_jurusan`
--

CREATE TABLE `tabel_jurusan` (
  `KODE_JURUSAN` varchar(5) NOT NULL,
  `NAMA_JURUSAN` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_jurusan`
--

INSERT INTO `tabel_jurusan` (`KODE_JURUSAN`, `NAMA_JURUSAN`) VALUES
('TK', 'Teknik Kimia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_kelas`
--

CREATE TABLE `tabel_kelas` (
  `KODE_KELAS` varchar(5) NOT NULL,
  `KODE_GURU` varchar(5) DEFAULT NULL,
  `NAMA_KELAS` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_kelas`
--

INSERT INTO `tabel_kelas` (`KODE_KELAS`, `KODE_GURU`, `NAMA_KELAS`) VALUES
('XKIA1', NULL, 'X Kimia Analisis 1'),
('XMMD1', NULL, 'X Multimedia 1'),
('XTKJ1', NULL, 'X TKJ 1'),
('XTPH1', NULL, 'X TPH 1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_laporguru`
--

CREATE TABLE `tabel_laporguru` (
  `KODE_LAPORGURU` varchar(5) NOT NULL,
  `KODE_GURU` varchar(5) DEFAULT NULL,
  `ISI_LAPORGURU` varchar(300) DEFAULT NULL,
  `TANGGAL_LAPORGURU` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_laporsarana`
--

CREATE TABLE `tabel_laporsarana` (
  `KODE_LAPORSRANA` varchar(5) NOT NULL,
  `NIS` varchar(10) DEFAULT NULL,
  `ISI_LAPORAN` varchar(300) DEFAULT NULL,
  `TANGGAL_LAPORANSARANA` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_mapel`
--

CREATE TABLE `tabel_mapel` (
  `KODE_MAPEL` varchar(5) NOT NULL,
  `NAMA_MAPEL` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_nilai`
--

CREATE TABLE `tabel_nilai` (
  `NIS` varchar(10) DEFAULT NULL,
  `KODE_MAPEL` varchar(5) DEFAULT NULL,
  `KODE_KELAS` varchar(5) DEFAULT NULL,
  `KODE_GURU` varchar(5) DEFAULT NULL,
  `SEMESTER` int(11) DEFAULT NULL,
  `TUGAS1` int(11) DEFAULT NULL,
  `TUGAS2` int(11) DEFAULT NULL,
  `TUGAS3` int(11) DEFAULT NULL,
  `TUGAS4` int(11) DEFAULT NULL,
  `TUGAS5` int(11) DEFAULT NULL,
  `UH1` int(11) DEFAULT NULL,
  `UH2` int(11) DEFAULT NULL,
  `UH3` int(11) DEFAULT NULL,
  `UH4` int(11) DEFAULT NULL,
  `UTS` int(11) DEFAULT NULL,
  `UAS` int(11) DEFAULT NULL,
  `NRATARAPOT` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_pengumuman`
--

CREATE TABLE `tabel_pengumuman` (
  `KODE_PENGUMUMAN` varchar(5) NOT NULL,
  `KODE_ADMIN` varchar(5) DEFAULT NULL,
  `NAMA_PENGUMUMAN` varchar(30) DEFAULT NULL,
  `TANGGAL_PENGUMUMAN` date DEFAULT NULL,
  `DESCRIPSI_PENGUMUMAN` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_piket`
--

CREATE TABLE `tabel_piket` (
  `KODE_PIKET` varchar(5) NOT NULL,
  `HARI` date DEFAULT NULL,
  `JAM` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_prakerin`
--

CREATE TABLE `tabel_prakerin` (
  `KODE_PRAKERIN` varchar(5) NOT NULL,
  `NIS` varchar(10) DEFAULT NULL,
  `KODE_GURU` varchar(5) DEFAULT NULL,
  `KODE_TEMPAT` varchar(5) DEFAULT NULL,
  `TEMPAT` varchar(30) DEFAULT NULL,
  `TANGGAL_DFTAR` date DEFAULT NULL,
  `TANGGAL_KELUAR` date DEFAULT NULL,
  `KETERANGAN` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_saran`
--

CREATE TABLE `tabel_saran` (
  `KODE_SARAN` varchar(5) NOT NULL,
  `KODE_ADMIN` varchar(5) DEFAULT NULL,
  `DESCRIPSI_SARAN` varchar(200) DEFAULT NULL,
  `DESCRIPSI_KRITIK` varchar(200) DEFAULT NULL,
  `TANGGAL_KRITIKSARAN` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_siswa`
--

CREATE TABLE `tabel_siswa` (
  `NIS` varchar(10) NOT NULL,
  `KODE_KELAS` varchar(5) DEFAULT NULL,
  `KODE_PRODI` varchar(5) DEFAULT NULL,
  `NAMA_SISWA` varchar(50) DEFAULT NULL,
  `TEMPAT_LAHIR` varchar(20) DEFAULT NULL,
  `TANGGAL_LAHIR` date DEFAULT NULL,
  `ALAMAT_SISWA` varchar(50) DEFAULT NULL,
  `JENIS_KELAMIN` char(1) DEFAULT NULL,
  `NAMA_ORANG_TUA` varchar(50) DEFAULT NULL,
  `ASAL_SEKOLAH` varchar(50) DEFAULT NULL,
  `NO_IJASAH` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_siswa`
--

INSERT INTO `tabel_siswa` (`NIS`, `KODE_KELAS`, `KODE_PRODI`, `NAMA_SISWA`, `TEMPAT_LAHIR`, `TANGGAL_LAHIR`, `ALAMAT_SISWA`, `JENIS_KELAMIN`, `NAMA_ORANG_TUA`, `ASAL_SEKOLAH`, `NO_IJASAH`) VALUES
('15034/0470', 'XKIA1', 'KIA', 'ALDY ALVIANSYAH', 'JEMBER', '2000-04-27', 'JL. Anggur II/28 Lingkungan Perumnas', 'L', 'PONIMIN', 'SMP', 'DN-05 DI 0335633');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_tempat_prakerin`
--

CREATE TABLE `tabel_tempat_prakerin` (
  `KODE_TEMPAT` varchar(5) NOT NULL,
  `NAMA_TEMPAT_PRAKERIN` varchar(30) DEFAULT NULL,
  `LOKASI` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_user`
--

CREATE TABLE `tabel_user` (
  `ID_USER` int(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `KODE_ADMIN_USER` varchar(5) DEFAULT NULL,
  `NIS_USER` varchar(10) DEFAULT NULL,
  `KODE_GURU_USER` varchar(5) DEFAULT NULL,
  `LEVEL` enum('1','2','3','4','5') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_user`
--

INSERT INTO `tabel_user` (`ID_USER`, `password`, `KODE_ADMIN_USER`, `NIS_USER`, `KODE_GURU_USER`, `LEVEL`) VALUES
(1, '1234', NULL, '15034/0470', NULL, '4'),
(2, '1234', NULL, NULL, 'A01', '1'),
(3, '1234', '1', NULL, NULL, '5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_daful`
--

CREATE TABLE `table_daful` (
  `KODE_DAFUL` varchar(5) NOT NULL,
  `NIS` varchar(10) DEFAULT NULL,
  `SEMESTER` int(11) DEFAULT NULL,
  `TANGGAL_DAFUL` datetime DEFAULT NULL,
  `STATUS` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_prodi`
--

CREATE TABLE `table_prodi` (
  `KODE_PRODI` varchar(5) NOT NULL,
  `KODE_JURUSAN` varchar(5) DEFAULT NULL,
  `NAMA_PRODI` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_prodi`
--

INSERT INTO `table_prodi` (`KODE_PRODI`, `KODE_JURUSAN`, `NAMA_PRODI`) VALUES
('KIA', 'TK', 'Kimia Analisis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_pengumuman`
--
ALTER TABLE `detail_pengumuman`
  ADD PRIMARY KEY (`KODE_DETAIL`),
  ADD KEY `FK_REFERENCE_26` (`NIS`),
  ADD KEY `FK_REFERENCE_27` (`KODE_PENGUMUMAN`);

--
-- Indexes for table `nilai_sikap`
--
ALTER TABLE `nilai_sikap`
  ADD KEY `FK_REFERENCE_11` (`NIS`);

--
-- Indexes for table `tabel_absensi`
--
ALTER TABLE `tabel_absensi`
  ADD PRIMARY KEY (`KODE_ABSENSI`),
  ADD KEY `KODE_MAPEL` (`KODE_MAPEL`),
  ADD KEY `NIS` (`NIS`);

--
-- Indexes for table `tabel_admin`
--
ALTER TABLE `tabel_admin`
  ADD PRIMARY KEY (`KODE_ADMIN`);

--
-- Indexes for table `tabel_agenda`
--
ALTER TABLE `tabel_agenda`
  ADD PRIMARY KEY (`KODE_AGENDA`),
  ADD KEY `FK_REFERENCE_17` (`KODE_ADMIN`);

--
-- Indexes for table `tabel_galeri`
--
ALTER TABLE `tabel_galeri`
  ADD PRIMARY KEY (`KODE_FOTO`),
  ADD KEY `FK_REFERENCE_16` (`KODE_ADMIN`);

--
-- Indexes for table `tabel_guru`
--
ALTER TABLE `tabel_guru`
  ADD PRIMARY KEY (`KODE_GURU`),
  ADD KEY `FK_REFERENCE_24` (`KODE_JABATAN`),
  ADD KEY `FK_REFERENCE_25` (`KODE_PIKET`),
  ADD KEY `FK_REFERENCE_4` (`KODE_MAPEL`);

--
-- Indexes for table `tabel_jabatan`
--
ALTER TABLE `tabel_jabatan`
  ADD PRIMARY KEY (`KODE_JABATAN`);

--
-- Indexes for table `tabel_jadwal`
--
ALTER TABLE `tabel_jadwal`
  ADD KEY `FK_REFERENCE_2` (`KODE_KELAS`),
  ADD KEY `FK_REFERENCE_3` (`KODE_GURU`),
  ADD KEY `FK_REFERENCE_5` (`KODE_MAPEL`);

--
-- Indexes for table `tabel_jurusan`
--
ALTER TABLE `tabel_jurusan`
  ADD PRIMARY KEY (`KODE_JURUSAN`);

--
-- Indexes for table `tabel_kelas`
--
ALTER TABLE `tabel_kelas`
  ADD PRIMARY KEY (`KODE_KELAS`),
  ADD KEY `FK_REFERENCE_1` (`KODE_GURU`);

--
-- Indexes for table `tabel_laporguru`
--
ALTER TABLE `tabel_laporguru`
  ADD PRIMARY KEY (`KODE_LAPORGURU`),
  ADD KEY `FK_REFERENCE_20` (`KODE_GURU`);

--
-- Indexes for table `tabel_laporsarana`
--
ALTER TABLE `tabel_laporsarana`
  ADD PRIMARY KEY (`KODE_LAPORSRANA`),
  ADD KEY `FK_REFERENCE_21` (`NIS`);

--
-- Indexes for table `tabel_mapel`
--
ALTER TABLE `tabel_mapel`
  ADD PRIMARY KEY (`KODE_MAPEL`);

--
-- Indexes for table `tabel_nilai`
--
ALTER TABLE `tabel_nilai`
  ADD KEY `FK_REFERENCE_6` (`NIS`),
  ADD KEY `FK_REFERENCE_7` (`KODE_MAPEL`),
  ADD KEY `FK_REFERENCE_8` (`KODE_KELAS`),
  ADD KEY `FK_REFERENCE_9` (`KODE_GURU`);

--
-- Indexes for table `tabel_pengumuman`
--
ALTER TABLE `tabel_pengumuman`
  ADD PRIMARY KEY (`KODE_PENGUMUMAN`),
  ADD KEY `FK_REFERENCE_18` (`KODE_ADMIN`);

--
-- Indexes for table `tabel_piket`
--
ALTER TABLE `tabel_piket`
  ADD PRIMARY KEY (`KODE_PIKET`);

--
-- Indexes for table `tabel_prakerin`
--
ALTER TABLE `tabel_prakerin`
  ADD PRIMARY KEY (`KODE_PRAKERIN`),
  ADD KEY `FK_REFERENCE_14` (`KODE_GURU`),
  ADD KEY `FK_REFERENCE_15` (`NIS`),
  ADD KEY `FK_REFERENCE_22` (`KODE_TEMPAT`);

--
-- Indexes for table `tabel_saran`
--
ALTER TABLE `tabel_saran`
  ADD PRIMARY KEY (`KODE_SARAN`),
  ADD KEY `FK_REFERENCE_19` (`KODE_ADMIN`);

--
-- Indexes for table `tabel_siswa`
--
ALTER TABLE `tabel_siswa`
  ADD PRIMARY KEY (`NIS`),
  ADD KEY `FK_REFERENCE_12` (`KODE_KELAS`),
  ADD KEY `FK_REFERENCE_23` (`KODE_PRODI`);

--
-- Indexes for table `tabel_tempat_prakerin`
--
ALTER TABLE `tabel_tempat_prakerin`
  ADD PRIMARY KEY (`KODE_TEMPAT`);

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`ID_USER`),
  ADD KEY `FK_REFERENCE_29` (`KODE_ADMIN_USER`),
  ADD KEY `FK_REFERENCE_30` (`NIS_USER`),
  ADD KEY `FK_REFERENCE_31` (`KODE_GURU_USER`);

--
-- Indexes for table `table_daful`
--
ALTER TABLE `table_daful`
  ADD PRIMARY KEY (`KODE_DAFUL`),
  ADD KEY `FK_REFERENCE_13` (`NIS`);

--
-- Indexes for table `table_prodi`
--
ALTER TABLE `table_prodi`
  ADD PRIMARY KEY (`KODE_PRODI`),
  ADD KEY `FK_REFERENCE_28` (`KODE_JURUSAN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `ID_USER` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_pengumuman`
--
ALTER TABLE `detail_pengumuman`
  ADD CONSTRAINT `FK_REFERENCE_26` FOREIGN KEY (`NIS`) REFERENCES `tabel_siswa` (`NIS`),
  ADD CONSTRAINT `FK_REFERENCE_27` FOREIGN KEY (`KODE_PENGUMUMAN`) REFERENCES `tabel_pengumuman` (`KODE_PENGUMUMAN`);

--
-- Ketidakleluasaan untuk tabel `nilai_sikap`
--
ALTER TABLE `nilai_sikap`
  ADD CONSTRAINT `FK_REFERENCE_11` FOREIGN KEY (`NIS`) REFERENCES `tabel_siswa` (`NIS`);

--
-- Ketidakleluasaan untuk tabel `tabel_absensi`
--
ALTER TABLE `tabel_absensi`
  ADD CONSTRAINT `tabel_absensi_ibfk_1` FOREIGN KEY (`NIS`) REFERENCES `tabel_siswa` (`NIS`),
  ADD CONSTRAINT `tabel_absensi_ibfk_2` FOREIGN KEY (`KODE_MAPEL`) REFERENCES `tabel_mapel` (`KODE_MAPEL`);

--
-- Ketidakleluasaan untuk tabel `tabel_agenda`
--
ALTER TABLE `tabel_agenda`
  ADD CONSTRAINT `FK_REFERENCE_17` FOREIGN KEY (`KODE_ADMIN`) REFERENCES `tabel_admin` (`KODE_ADMIN`);

--
-- Ketidakleluasaan untuk tabel `tabel_galeri`
--
ALTER TABLE `tabel_galeri`
  ADD CONSTRAINT `FK_REFERENCE_16` FOREIGN KEY (`KODE_ADMIN`) REFERENCES `tabel_admin` (`KODE_ADMIN`);

--
-- Ketidakleluasaan untuk tabel `tabel_guru`
--
ALTER TABLE `tabel_guru`
  ADD CONSTRAINT `FK_REFERENCE_24` FOREIGN KEY (`KODE_JABATAN`) REFERENCES `tabel_jabatan` (`KODE_JABATAN`),
  ADD CONSTRAINT `FK_REFERENCE_25` FOREIGN KEY (`KODE_PIKET`) REFERENCES `tabel_piket` (`KODE_PIKET`),
  ADD CONSTRAINT `FK_REFERENCE_4` FOREIGN KEY (`KODE_MAPEL`) REFERENCES `tabel_mapel` (`KODE_MAPEL`);

--
-- Ketidakleluasaan untuk tabel `tabel_jadwal`
--
ALTER TABLE `tabel_jadwal`
  ADD CONSTRAINT `FK_REFERENCE_2` FOREIGN KEY (`KODE_KELAS`) REFERENCES `tabel_kelas` (`KODE_KELAS`),
  ADD CONSTRAINT `FK_REFERENCE_3` FOREIGN KEY (`KODE_GURU`) REFERENCES `tabel_guru` (`KODE_GURU`),
  ADD CONSTRAINT `FK_REFERENCE_5` FOREIGN KEY (`KODE_MAPEL`) REFERENCES `tabel_mapel` (`KODE_MAPEL`);

--
-- Ketidakleluasaan untuk tabel `tabel_kelas`
--
ALTER TABLE `tabel_kelas`
  ADD CONSTRAINT `FK_REFERENCE_1` FOREIGN KEY (`KODE_GURU`) REFERENCES `tabel_guru` (`KODE_GURU`);

--
-- Ketidakleluasaan untuk tabel `tabel_laporguru`
--
ALTER TABLE `tabel_laporguru`
  ADD CONSTRAINT `FK_REFERENCE_20` FOREIGN KEY (`KODE_GURU`) REFERENCES `tabel_guru` (`KODE_GURU`);

--
-- Ketidakleluasaan untuk tabel `tabel_laporsarana`
--
ALTER TABLE `tabel_laporsarana`
  ADD CONSTRAINT `FK_REFERENCE_21` FOREIGN KEY (`NIS`) REFERENCES `tabel_siswa` (`NIS`);

--
-- Ketidakleluasaan untuk tabel `tabel_nilai`
--
ALTER TABLE `tabel_nilai`
  ADD CONSTRAINT `FK_REFERENCE_6` FOREIGN KEY (`NIS`) REFERENCES `tabel_siswa` (`NIS`),
  ADD CONSTRAINT `FK_REFERENCE_7` FOREIGN KEY (`KODE_MAPEL`) REFERENCES `tabel_mapel` (`KODE_MAPEL`),
  ADD CONSTRAINT `FK_REFERENCE_8` FOREIGN KEY (`KODE_KELAS`) REFERENCES `tabel_kelas` (`KODE_KELAS`),
  ADD CONSTRAINT `FK_REFERENCE_9` FOREIGN KEY (`KODE_GURU`) REFERENCES `tabel_guru` (`KODE_GURU`);

--
-- Ketidakleluasaan untuk tabel `tabel_pengumuman`
--
ALTER TABLE `tabel_pengumuman`
  ADD CONSTRAINT `FK_REFERENCE_18` FOREIGN KEY (`KODE_ADMIN`) REFERENCES `tabel_admin` (`KODE_ADMIN`);

--
-- Ketidakleluasaan untuk tabel `tabel_prakerin`
--
ALTER TABLE `tabel_prakerin`
  ADD CONSTRAINT `FK_REFERENCE_14` FOREIGN KEY (`KODE_GURU`) REFERENCES `tabel_guru` (`KODE_GURU`),
  ADD CONSTRAINT `FK_REFERENCE_15` FOREIGN KEY (`NIS`) REFERENCES `tabel_siswa` (`NIS`),
  ADD CONSTRAINT `FK_REFERENCE_22` FOREIGN KEY (`KODE_TEMPAT`) REFERENCES `tabel_tempat_prakerin` (`KODE_TEMPAT`);

--
-- Ketidakleluasaan untuk tabel `tabel_saran`
--
ALTER TABLE `tabel_saran`
  ADD CONSTRAINT `FK_REFERENCE_19` FOREIGN KEY (`KODE_ADMIN`) REFERENCES `tabel_admin` (`KODE_ADMIN`);

--
-- Ketidakleluasaan untuk tabel `tabel_siswa`
--
ALTER TABLE `tabel_siswa`
  ADD CONSTRAINT `FK_REFERENCE_12` FOREIGN KEY (`KODE_KELAS`) REFERENCES `tabel_kelas` (`KODE_KELAS`),
  ADD CONSTRAINT `FK_REFERENCE_23` FOREIGN KEY (`KODE_PRODI`) REFERENCES `table_prodi` (`KODE_PRODI`);

--
-- Ketidakleluasaan untuk tabel `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD CONSTRAINT `FK_REFERENCE_29` FOREIGN KEY (`KODE_ADMIN_USER`) REFERENCES `tabel_admin` (`KODE_ADMIN`),
  ADD CONSTRAINT `FK_REFERENCE_30` FOREIGN KEY (`NIS_USER`) REFERENCES `tabel_siswa` (`NIS`),
  ADD CONSTRAINT `FK_REFERENCE_31` FOREIGN KEY (`KODE_GURU_USER`) REFERENCES `tabel_guru` (`KODE_GURU`);

--
-- Ketidakleluasaan untuk tabel `table_daful`
--
ALTER TABLE `table_daful`
  ADD CONSTRAINT `FK_REFERENCE_13` FOREIGN KEY (`NIS`) REFERENCES `tabel_siswa` (`NIS`);

--
-- Ketidakleluasaan untuk tabel `table_prodi`
--
ALTER TABLE `table_prodi`
  ADD CONSTRAINT `FK_REFERENCE_28` FOREIGN KEY (`KODE_JURUSAN`) REFERENCES `tabel_jurusan` (`KODE_JURUSAN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
