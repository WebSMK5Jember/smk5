-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2019 at 11:32 PM
-- Server version: 10.1.22-MariaDB
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
-- Table structure for table `nilai_sikap`
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
-- Table structure for table `tabel_absensi`
--

CREATE TABLE `tabel_absensi` (
  `KODE_ABSENSI` int(5) NOT NULL,
  `KETERANGAN` varchar(30) NOT NULL,
  `JUMLAH_HADIR` int(2) NOT NULL,
  `KODE_MAPEL` varchar(5) NOT NULL,
  `NIS` varchar(10) NOT NULL,
  `KODE_GURU` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_admin`
--

CREATE TABLE `tabel_admin` (
  `KODE_ADMIN` varchar(5) NOT NULL,
  `NAMA_ADMIN` varchar(30) DEFAULT NULL,
  `EMAIL` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_jabatan`
--

CREATE TABLE `tabel_jabatan` (
  `KODE_JABATAN` varchar(5) NOT NULL,
  `NAMA_JABATAN` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_jabatan`
--

INSERT INTO `tabel_jabatan` (`KODE_JABATAN`, `NAMA_JABATAN`) VALUES
('1', 'kepala sekolah'),
('2', 'guru');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_jadwal`
--

CREATE TABLE `tabel_jadwal` (
  `KODE_JADWAL` int(5) NOT NULL,
  `KODE_KELAS` varchar(5) DEFAULT NULL,
  `KODE_MAPEL_JADWAL` varchar(5) DEFAULT NULL,
  `KODE_GURU` varchar(5) DEFAULT NULL,
  `JAM` time DEFAULT NULL,
  `RUANG` varchar(10) DEFAULT NULL,
  `HARI` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_jadwal`
--

INSERT INTO `tabel_jadwal` (`KODE_JADWAL`, `KODE_KELAS`, `KODE_MAPEL_JADWAL`, `KODE_GURU`, `JAM`, `RUANG`, `HARI`) VALUES
(1, 'a01', 'BDJW', 'a0001', '01:00:00', '5', '0000-'),
(2, 'a01', 'AGAMA', '7', '01:00:00', '5', 'senin'),
(3, 'a01', 'AGAMA', '1111', '02:00:00', '5', '5'),
(5, 'a01', 'AGAMA', '1', '23:00:00', 'ruang 1', 'senin'),
(6, 'a01', 'AGAMA', '1111', '05:08:00', 'ruang 1', 'S'),
(7, 'a01', 'BING', '3', '12:00:00', 'anggrek', 'senin'),
(9, 'a01', 'BING', '2', '04:00:00', 'ruang 1', 'B'),
(10, '112', 'AGAMA', '8', '14:07:00', 'k', 'sen'),
(11, '112', 'BDJW', '7', '19:06:00', 'ruang 1', 'jumat'),
(12, '112', 'BING', '2', '09:00:00', 'anggrek', 'jumat'),
(13, 'a01', 'DDBT', '12345', '06:00:00', '0', 'k'),
(14, 'a01', 'BDJW', 'a', '09:00:00', 'n', 'j');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_jurusan`
--

CREATE TABLE `tabel_jurusan` (
  `KODE_JURUSAN` varchar(5) NOT NULL,
  `NAMA_JURUSAN` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_jurusan`
--

INSERT INTO `tabel_jurusan` (`KODE_JURUSAN`, `NAMA_JURUSAN`) VALUES
('ank', 'kimia'),
('tkj', 'teknik komputer dan jaringan');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_laporguru`
--

CREATE TABLE `tabel_laporguru` (
  `KODE_LAPORGURU` int(5) NOT NULL,
  `NAMA_GURU_LAPOR` varchar(50) DEFAULT NULL,
  `ISI_LAPORGURU` varchar(300) DEFAULT NULL,
  `TANGGAL_LAPORGURU` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `STATUS_LAPOR_GURU` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_laporguru`
--

INSERT INTO `tabel_laporguru` (`KODE_LAPORGURU`, `NAMA_GURU_LAPOR`, `ISI_LAPORGURU`, `TANGGAL_LAPORGURU`, `STATUS_LAPOR_GURU`) VALUES
(1, 'saiful', '', '2019-02-05 14:41:25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_laporsarana`
--

CREATE TABLE `tabel_laporsarana` (
  `KODE_LAPORSRANA` int(5) NOT NULL,
  `NAMA_SARANA` varchar(50) DEFAULT NULL,
  `ISI_LAPORAN` varchar(300) DEFAULT NULL,
  `TANGGAL_LAPORANSARANA` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `STATUS_LAPOR_SARANA` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_laporsarana`
--

INSERT INTO `tabel_laporsarana` (`KODE_LAPORSRANA`, `NAMA_SARANA`, `ISI_LAPORAN`, `TANGGAL_LAPORANSARANA`, `STATUS_LAPOR_SARANA`) VALUES
(1, 'meja', '', '2019-02-05 14:42:07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_mapel`
--

CREATE TABLE `tabel_mapel` (
  `KODE_MAPEL` varchar(5) NOT NULL,
  `NAMA_MAPEL` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_mapel`
--

INSERT INTO `tabel_mapel` (`KODE_MAPEL`, `NAMA_MAPEL`) VALUES
('AGAMA', 'PENDIDIKAN AGAMA DAN BUDI PEKE'),
('BDJW', 'BAHASA DAERAH JAWA'),
('BING', 'BAHASA INGGRIS'),
('DDBT', 'DASAR-DASAR BUDIDAYA TANAMAN');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_nilai`
--

CREATE TABLE `tabel_nilai` (
  `ID_NILAI` int(11) NOT NULL,
  `NIS` varchar(10) DEFAULT NULL,
  `KODE_MAPEL_NILAI` varchar(5) DEFAULT NULL,
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

--
-- Dumping data for table `tabel_nilai`
--

INSERT INTO `tabel_nilai` (`ID_NILAI`, `NIS`, `KODE_MAPEL_NILAI`, `KODE_KELAS`, `KODE_GURU`, `SEMESTER`, `TUGAS1`, `TUGAS2`, `TUGAS3`, `TUGAS4`, `TUGAS5`, `UH1`, `UH2`, `UH3`, `UH4`, `UTS`, `UAS`, `NRATARAPOT`) VALUES
(1, '111', 'agama', 'a01', '1111', 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '111', 'AGAMA', 'a01', '1111', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '15109/0878', 'AGAMA', 'a01', 'A01', 22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '01', 'AGAMA', '112', 'A01', 4, 50, 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_piket`
--

CREATE TABLE `tabel_piket` (
  `KODE_PIKET` varchar(5) NOT NULL,
  `HARI` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_piket`
--

INSERT INTO `tabel_piket` (`KODE_PIKET`, `HARI`) VALUES
('1', 'senin');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_prakerin`
--

CREATE TABLE `tabel_prakerin` (
  `KODE_PRAKERIN` int(5) NOT NULL,
  `NIS` varchar(10) DEFAULT NULL,
  `KODE_GURU_P` varchar(5) DEFAULT NULL,
  `KODE_TEMPAT_P` varchar(5) DEFAULT NULL,
  `MINAT` varchar(50) DEFAULT NULL,
  `PERSETUJUAN_ORGTUA` varchar(40) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_prakerin`
--

INSERT INTO `tabel_prakerin` (`KODE_PRAKERIN`, `NIS`, `KODE_GURU_P`, `KODE_TEMPAT_P`, `MINAT`, `PERSETUJUAN_ORGTUA`, `status`) VALUES
(5, '15045/0481', '2', '112', 'trouble shooting computer', 'vb.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_saran`
--

CREATE TABLE `tabel_saran` (
  `KODE_SARAN` int(5) NOT NULL,
  `NAMA_SISWA` varchar(50) DEFAULT NULL,
  `DESCRIPSI_SARAN` varchar(500) DEFAULT NULL,
  `TANGGAL_KRITIKSARAN` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `STATUS_SARAN` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_saran`
--

INSERT INTO `tabel_saran` (`KODE_SARAN`, `NAMA_SISWA`, `DESCRIPSI_SARAN`, `TANGGAL_KRITIKSARAN`, `STATUS_SARAN`) VALUES
(1, 'halo', '&lt;p&gt;sx&lt;/p&gt;\r\n', '2019-02-05 10:49:30', 1),
(2, 'halo', 'jdbj', '2019-02-05 11:34:35', 1),
(3, 'm saiful rizal', 'taman rusak', '2019-02-09 12:25:13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_tempat_prakerin`
--

CREATE TABLE `tabel_tempat_prakerin` (
  `KODE_TEMPAT` varchar(5) NOT NULL,
  `NAMA_TEMPAT_PRAKERIN` varchar(30) DEFAULT NULL,
  `LOKASI` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_tempat_prakerin`
--

INSERT INTO `tabel_tempat_prakerin` (`KODE_TEMPAT`, `NAMA_TEMPAT_PRAKERIN`, `LOKASI`) VALUES
('112', 'rera', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `table_daful`
--

CREATE TABLE `table_daful` (
  `KODE_DAFUL` int(5) NOT NULL,
  `NIS` varchar(10) DEFAULT NULL,
  `SEMESTER` int(11) DEFAULT NULL,
  `TANGGAL_DAFUL` datetime DEFAULT NULL,
  `filespp` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_daful`
--

INSERT INTO `table_daful` (`KODE_DAFUL`, `NIS`, `SEMESTER`, `TANGGAL_DAFUL`, `filespp`) VALUES
(1, '01', 2, '2019-02-22 00:00:00', '9bdb9c9c-26af-483f-b7f9-bae074eea53c.jpg'),
(2, '01', 2, '2019-02-22 00:00:00', '9bdb9c9c-26af-483f-b7f9-bae074eea53c.jpg'),
(3, '01', 2, '2019-02-13 00:00:00', '9bdb9c9c-26af-483f-b7f9-bae074eea53c.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agenda`
--

CREATE TABLE `tbl_agenda` (
  `agenda_id` int(11) NOT NULL,
  `agenda_nama` varchar(200) DEFAULT NULL,
  `agenda_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `agenda_deskripsi` text,
  `agenda_mulai` date DEFAULT NULL,
  `agenda_selesai` date DEFAULT NULL,
  `agenda_tempat` varchar(90) DEFAULT NULL,
  `agenda_waktu` time(6) DEFAULT NULL,
  `agenda_keterangan` varchar(200) DEFAULT NULL,
  `agenda_author` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_agenda`
--

INSERT INTO `tbl_agenda` (`agenda_id`, `agenda_nama`, `agenda_tanggal`, `agenda_deskripsi`, `agenda_mulai`, `agenda_selesai`, `agenda_tempat`, `agenda_waktu`, `agenda_keterangan`, `agenda_author`) VALUES
(1, 'Penyembelihan Hewan Kurban Idul Adha 2017', '2017-01-22 06:18:01', 'Idul Adha yang biasa disebut lebaran haji atapun lebaran kurban sangat identik dengan penyembelihan hewan kurban. M-Sekolah tahun ini juga melakukan penyembelihan hewan kurban. Yang rencananya akan dihadiri oleh guru-guru, siswa dan pengurus OSIS.', '2017-01-22', '2017-01-22', 'M-Sekolah', '16:00:00.000000', 'Dihadiri oleh guru-guru, siswa dan pengurus OSIS', 'saifull'),
(2, 'Peluncuran Website Resmi M-Sekolah', '2017-01-22 06:26:33', 'Peluncuran website resmi  M-Sekolah, sebagai media informasi dan akademik online untuk pelayanan pendidikan yang lebih baik kepada siswa, orangtua, dan masyarakat pada umumnya semakin meningkat.', '2017-01-04', '2017-01-04', 'M-Sekolah', '14:00:00.000000', '-', 'saifull'),
(3, 'Penerimaan Raport Semester Ganjil Tahun Ajaran 2017-2018', '2017-01-22 06:29:49', 'Berakhirnya semester ganjil tahun pelajaran 2016-2017, ditandai dengan pembagian laporan hasil belajar.', '2017-02-17', '2017-02-17', 'M-Sekolah', '00:00:00.000000', 'Untuk kelas XI dan XII, pembagian raport dimulai pukul 07.30 WIB. Sedangkan untuk kelas X pada pukul 09.00 WIB. Raport diambil oleh orang tua/wali murid masing-masing.', 'saifull'),
(4, 'rapat', '2019-02-11 02:21:18', 'rapat akhir semester', '2019-02-05', '2019-02-05', 'ruang guru', '10:00:00.000000', 'harus datang semua', 'saifull'),
(5, 'rapat', '2019-02-11 02:21:18', 'rapat akhir semester', '2019-02-05', '2019-02-05', 'ruang guru', '10:00:00.000000', 'harus datang semua', 'saifull');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_album`
--

CREATE TABLE `tbl_album` (
  `album_id` int(11) NOT NULL,
  `album_nama` varchar(50) DEFAULT NULL,
  `album_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `album_pengguna_id` int(11) DEFAULT NULL,
  `album_author` varchar(60) DEFAULT NULL,
  `album_count` int(11) DEFAULT '0',
  `album_cover` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_album`
--

INSERT INTO `tbl_album` (`album_id`, `album_nama`, `album_tanggal`, `album_pengguna_id`, `album_author`, `album_count`, `album_cover`) VALUES
(1, 'Kedatangan Tamu Asing', '2016-09-08 13:00:55', 1, 'M Fikri Setiadi', 5, '202aa754590dfc1070c624bad294abbc.jpg'),
(3, 'Pemilu Osis 2016-2017', '2017-01-21 01:58:16', 1, 'M Fikri Setiadi', 3, 'dc088a9fb62333012ff7a601828219d7.jpg'),
(4, 'Kegiatan Belajar Siswa', '2017-01-24 01:31:13', 1, 'M Fikri Setiadi', 7, '203bc0411a07ed0430d39bcc38ec2c56.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_files`
--

CREATE TABLE `tbl_files` (
  `file_id` int(11) NOT NULL,
  `file_judul` varchar(120) DEFAULT NULL,
  `file_deskripsi` text,
  `file_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `file_oleh` varchar(60) DEFAULT NULL,
  `file_download` int(11) DEFAULT '0',
  `file_data` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_files`
--

INSERT INTO `tbl_files` (`file_id`, `file_judul`, `file_deskripsi`, `file_tanggal`, `file_oleh`, `file_download`, `file_data`) VALUES
(2, 'Dasar-dasar CSS', 'Modul dasar-dasar CSS 3. Modul ini membantu anda untuk memahami struktur dasar CSS', '2017-01-23 04:30:01', 'Drs. Joko', 0, 'ab9a183ff240deadbedaff78e639af2f.pdf'),
(3, '14 Teknik Komunikasi Yang Paling Efektif', 'Ebook 14 teknik komunikasi paling efektif membantu anda untuk berkomunikasi dengan baik dan benar', '2017-01-23 15:26:06', 'Drs. Joko', 0, 'ab2cb34682bd94f30f2347523112ffb9.pdf'),
(4, 'Bagaimana Membentuk Pola Pikir yang Baru', 'Ebook ini membantu anda membentuk pola pikir baru.', '2017-01-23 15:27:07', 'Drs. Joko', 0, '30f588eb5c55324f8d18213f11651855.pdf'),
(5, '7 Tips Penting mengatasi Kritik', '7 Tips Penting mengatasi Kritik', '2017-01-23 15:27:44', 'Drs. Joko', 0, '329a62b25ad475a148e1546aa3db41de.docx'),
(6, '8 Racun dalam kehidupan kita', '8 Racun dalam kehidupan kita', '2017-01-23 15:28:17', 'Drs. Joko', 0, '8e38ad4948ba13758683dea443fbe6be.docx'),
(7, 'Jurnal Teknolgi Informasi', 'Jurnal Teknolgi Informasi', '2017-01-25 03:18:53', 'Gunawan, S.Pd', 0, '87ae0f009714ddfdd79e2977b2a64632.pdf'),
(8, 'Jurnal Teknolgi Informasi 2', 'Jurnal Teknolgi Informasi', '2017-01-25 03:19:22', 'Gunawan, S.Pd', 0, 'c4e966ba2c6e142155082854dc5b3602.pdf'),
(9, 'Naskah Publikasi IT', 'Naskah Teknolgi Informasi', '2017-01-25 03:21:04', 'Gunawan, S.Pd', 0, '71380b3cf16a17a02382098c028ece9c.pdf'),
(10, 'Modul Teknologi Informasi', 'Modul Teknologi Informasi', '2017-01-25 03:22:08', 'Gunawan, S.Pd', 0, '029143a3980232ab2900d94df36dbb0c.pdf'),
(11, 'Modul Teknologi Informasi Part II', 'Modul Teknologi Informasi', '2017-01-25 03:22:54', 'Gunawan, S.Pd', 0, 'ea8f3f732576083156e509657614f551.pdf'),
(12, 'Modul Teknologi Informasi Part III', 'Modul Teknologi Informasi', '2017-01-25 03:23:21', 'Gunawan, S.Pd', 0, 'c5e5e7d16e4cd6c3d22c11f64b0db2af.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `galeri_id` int(11) NOT NULL,
  `galeri_judul` varchar(60) DEFAULT NULL,
  `galeri_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `galeri_gambar` varchar(40) DEFAULT NULL,
  `galeri_album_id` int(11) DEFAULT NULL,
  `galeri_pengguna_id` int(11) DEFAULT NULL,
  `galeri_author` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`galeri_id`, `galeri_judul`, `galeri_tanggal`, `galeri_gambar`, `galeri_album_id`, `galeri_pengguna_id`, `galeri_author`) VALUES
(4, 'Diskusi Pemilihan Ketua Osis', '2017-01-21 14:04:53', '9b10fa300633f62f105e9b52789fc8f3.jpg', 3, 1, 'M Fikri Setiadi'),
(5, 'Panitia Pemilu Osis', '2017-01-22 04:13:20', '0ec0c2f9aae6501d7ed7930995d48b57.jpg', 3, 1, 'M Fikri Setiadi'),
(6, 'Proses Pemilu Osis', '2017-01-22 04:13:43', 'bfbe6cc1c8096f5f36c68e93da53c248.jpg', 3, 1, 'M Fikri Setiadi'),
(7, 'Belajar dengan native speaker', '2017-01-24 01:26:22', '831e5ad43ccc3c851d50c128ff095541.jpg', 1, 1, 'M Fikri Setiadi'),
(8, 'Diskusi dengan native speaker', '2017-01-24 01:27:05', '84afbf1d3ad45932f1d7ac47b8a00949.jpg', 1, 1, 'M Fikri Setiadi'),
(9, 'Foto bareng native speaker', '2017-01-24 01:27:28', 'a99ab060d5d5bf8c96f24fe385f7dd8b.jpg', 1, 1, 'M Fikri Setiadi'),
(10, 'Foto bareng native speaker', '2017-01-24 01:28:40', 'd70cedba6391b7b3c74b914efd82953f.jpg', 1, 1, 'M Fikri Setiadi'),
(11, 'Foto bareng native speaker', '2017-01-24 01:28:54', '10de99f425b9961ce1e87c5e5575f8f4.jpg', 1, 1, 'M Fikri Setiadi'),
(12, 'Belajar sambil bermain', '2017-01-24 01:31:42', '9df82241493b94d1e06b461129cf57b2.jpg', 4, 1, 'M Fikri Setiadi'),
(13, 'Belajar sambil bermain', '2017-01-24 01:31:55', '5374415f11683ad6dd31572a7bbf8a7b.jpg', 4, 1, 'M Fikri Setiadi'),
(14, 'Belajar komputer programming', '2017-01-24 01:32:24', '82b91bd35706b21c3ab04e205e358eb6.jpg', 4, 1, 'M Fikri Setiadi'),
(15, 'Belajar komputer programming', '2017-01-24 01:32:34', '93048f2a103987bce8c8ec8d6912de06.jpg', 4, 1, 'M Fikri Setiadi'),
(16, 'Belajar komputer programming', '2017-01-24 01:32:44', '41f46be181f2f8452c2041b5e79a05a5.jpg', 4, 1, 'M Fikri Setiadi'),
(17, 'Belajar sambil bermain', '2017-01-24 01:33:08', '2858b0555c252690e293d29b922ba8e6.jpg', 4, 1, 'M Fikri Setiadi'),
(18, 'Makan bersama', '2017-01-24 01:33:24', '90d67328e33a31d3f5eecd7dcb25b55d.jpg', 4, 1, 'M Fikri Setiadi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `guru_id` varchar(5) NOT NULL,
  `guru_mapel_id` varchar(5) DEFAULT NULL,
  `guru_jabatan_id` varchar(5) DEFAULT NULL,
  `guru_piket_id` varchar(5) DEFAULT NULL,
  `guru_nip` varchar(30) DEFAULT NULL,
  `guru_nama` varchar(70) DEFAULT NULL,
  `guru_alamat` varchar(100) DEFAULT NULL,
  `guru_jumlah_jam` int(11) DEFAULT NULL,
  `guru_jenkel` varchar(2) DEFAULT NULL,
  `guru_tmp_lahir` varchar(80) DEFAULT NULL,
  `guru_tgl_lahir` varchar(80) DEFAULT NULL,
  `guru_photo` varchar(40) DEFAULT NULL,
  `guru_tgl_input` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_guru`
--

INSERT INTO `tbl_guru` (`guru_id`, `guru_mapel_id`, `guru_jabatan_id`, `guru_piket_id`, `guru_nip`, `guru_nama`, `guru_alamat`, `guru_jumlah_jam`, `guru_jenkel`, `guru_tmp_lahir`, `guru_tgl_lahir`, `guru_photo`, `guru_tgl_input`) VALUES
('1', '0', '', '', '927482658274982', 'M Fikri Setiadi', '', 0, 'L', 'Padang', '25 September 1993', 'f6bbe1e04e78e0d715e9830a605794aa.jpg', '2017-01-26 07:49:43'),
('1111', '0', '2', '1', '22', 'aaa', 'sxsx', 3, 'L', 'je', '2019-02-22', NULL, '2019-02-04 03:08:05'),
('12222', '2', '', '', 'x', 'x', 'x', 4, 'L', 'sds', '2019-02-21', NULL, '2019-02-02 07:42:21'),
('12345', '1', '', '', '21', 'sds', 's', 4, 'L', 'ws', '2019-02-15', NULL, '2019-02-02 07:38:14'),
('2', '0', '', '', '927482658274981', 'Thomas Muller', '', 0, 'L', 'Germany', '25 September 1989', NULL, '2017-01-26 13:38:54'),
('3', '0', '', '', '-', 'Joko Subroto', '', 0, 'L', 'Jakarta', '25 September 1989', NULL, '2017-01-26 13:41:20'),
('4', '0', '', '', '-', 'Kusta Otomo', '', 0, 'L', 'Jakarta', '25 September 1989', NULL, '2017-01-26 13:42:08'),
('5', '0', '', '', '-', 'Yuliani Ningsih', '', 0, 'P', 'Padang', '27 September 1993', NULL, '2017-01-26 13:42:48'),
('6', '0', '', '', '927482658274993', 'Ari Hidayat', '', 0, 'L', 'Padang', '25 September 1993', NULL, '2017-01-26 13:43:46'),
('7', '0', '', '', '927482658274998', 'Irma Cantika', '', 0, 'P', 'Padang', '25 September 1993', '4200d2514abf45755943526b74474c16.jpg', '2017-01-26 13:45:11'),
('8', '0', '', '', '-', 'Ririn Febriesta', '', 0, 'P', 'Padang', '27 September 1994', NULL, '2017-01-27 04:28:23'),
('a', '0', '1', '', 'a', 'akua', 'sa', 3, 'L', 'as', '2019-02-21', NULL, '2019-02-04 00:51:44'),
('a0001', '0', '2', '1', '1', 'saiful', 'jember', 24, 'L', 'jember', '2019-02-12', NULL, '2019-02-03 14:05:13'),
('A01', 'AGAMA', '1', '1', '11212121', 'RERA', 'RAMBI', 24, 'P', 'jakarta', '2019-02-27', NULL, '2019-02-05 15:56:36'),
('a012', '', '1', '1', '33233223', 'rera', 'jember', 24, 'P', 'jember', '2019-02-16', '87c8b34fff6b53f4366ba93658fc9d68.jpg', '2019-02-09 12:28:28'),
('a018', '', '1', '1', '33233223', 'm saiful rizal', 'jember', 24, 'P', 'jember', '2019-02-15', NULL, '2019-02-09 12:29:10'),
('a2244', 'AGAMA', '', '1', 'a333', '333', 'eee3', 4, 'L', 'eee', '2019-02-09', NULL, '2019-02-04 06:56:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inbox`
--

CREATE TABLE `tbl_inbox` (
  `inbox_id` int(11) NOT NULL,
  `inbox_nama` varchar(40) DEFAULT NULL,
  `inbox_email` varchar(60) DEFAULT NULL,
  `inbox_kontak` varchar(20) DEFAULT NULL,
  `inbox_pesan` text,
  `inbox_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `inbox_status` int(11) DEFAULT '1' COMMENT '1=Belum dilihat, 0=Telah dilihat'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inbox`
--

INSERT INTO `tbl_inbox` (`inbox_id`, `inbox_nama`, `inbox_email`, `inbox_kontak`, `inbox_pesan`, `inbox_tanggal`, `inbox_status`) VALUES
(2, 'M Fikri Setiadi', 'fikrifiver97@gmail.com', '-', 'Ping !', '2017-06-21 03:44:12', 0),
(3, 'M Fikri Setiadi', 'fikrifiver97@gmail.com', '-', 'Ini adalah pesan ', '2017-06-21 03:45:57', 0),
(5, 'M Fikri Setiadi', 'fikrifiver97@gmail.com', '-', 'Ping !', '2017-06-21 03:53:19', 0),
(7, 'M Fikri Setiadi', 'fikrifiver97@gmail.com', '-', 'Hi, there!', '2017-07-01 07:28:08', 0),
(8, 'M Fikri', 'fikrifiver97@gmail.com', '084375684364', 'Hi There, Would you please help me about register?', '2018-08-06 13:51:07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(30) DEFAULT NULL,
  `kategori_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`kategori_id`, `kategori_nama`, `kategori_tanggal`) VALUES
(1, 'Pendidikan', '2016-09-06 05:49:04'),
(2, 'Politik', '2016-09-06 05:50:01'),
(5, 'Penelitian', '2016-09-06 06:19:26'),
(6, 'Prestasi', '2016-09-07 02:51:09'),
(13, 'Olah Raga', '2017-01-13 13:20:31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `kelas_id` varchar(5) NOT NULL,
  `kelas_jurusan_id` varchar(5) DEFAULT NULL,
  `kelas_nama` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`kelas_id`, `kelas_jurusan_id`, `kelas_nama`) VALUES
('112', 'ank', 'aa'),
('a01', 'tkj', 'x tkj 1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `komentar_id` int(11) NOT NULL,
  `komentar_nama` varchar(30) DEFAULT NULL,
  `komentar_email` varchar(50) DEFAULT NULL,
  `komentar_isi` varchar(120) DEFAULT NULL,
  `komentar_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `komentar_status` varchar(2) DEFAULT NULL,
  `komentar_tulisan_id` int(11) DEFAULT NULL,
  `komentar_parent` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`komentar_id`, `komentar_nama`, `komentar_email`, `komentar_isi`, `komentar_tanggal`, `komentar_status`, `komentar_tulisan_id`, `komentar_parent`) VALUES
(1, 'M Fikri', 'fikrifiver97@gmail.com', ' Nice Post.', '2018-08-07 15:09:07', '1', 24, 0),
(2, 'M Fikri Setiadi', 'fikrifiver97@gmail.com', ' Awesome Post', '2018-08-07 15:14:26', '1', 24, 0),
(3, 'Joko', 'joko@gmail.com', 'Thank you.', '2018-08-08 03:54:56', '1', 24, 1),
(6, 'b', 'ggf@gmail', ' jhj', '2019-02-01 05:15:01', '1', 22, 0),
(7, 'saiful', 'saiful@gmail.com', ' halo', '2019-02-01 12:30:01', '1', 20, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_log_aktivitas`
--

CREATE TABLE `tbl_log_aktivitas` (
  `log_id` int(11) NOT NULL,
  `log_nama` text,
  `log_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `log_ip` varchar(20) DEFAULT NULL,
  `log_pengguna_id` int(11) DEFAULT NULL,
  `log_icon` blob,
  `log_jenis_icon` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `pengguna_id` int(11) NOT NULL,
  `pengguna_nama` varchar(50) DEFAULT NULL,
  `pengguna_moto` varchar(100) DEFAULT NULL,
  `pengguna_jenkel` varchar(2) DEFAULT NULL,
  `pengguna_username` varchar(30) DEFAULT NULL,
  `pengguna_siswa` varchar(20) DEFAULT NULL,
  `pengguna_guru` varchar(5) DEFAULT NULL,
  `pengguna_password` varchar(255) DEFAULT NULL,
  `pengguna_email` varchar(50) DEFAULT NULL,
  `pengguna_level` varchar(3) DEFAULT NULL,
  `pengguna_register` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `pengguna_photo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`pengguna_id`, `pengguna_nama`, `pengguna_moto`, `pengguna_jenkel`, `pengguna_username`, `pengguna_siswa`, `pengguna_guru`, `pengguna_password`, `pengguna_email`, `pengguna_level`, `pengguna_register`, `pengguna_photo`) VALUES
(3, NULL, NULL, NULL, NULL, 'aku', NULL, 'acfe36faaa1f2fc9b4fd1461940f8ef4', NULL, '4', '2019-02-02 04:58:17', NULL),
(8, NULL, NULL, NULL, NULL, NULL, '12345', '827ccb0eea8a706c4c34a16891f84e7b', NULL, '3', '2019-02-02 07:41:43', NULL),
(9, NULL, NULL, NULL, NULL, NULL, '12345', 'e10adc3949ba59abbe56e057f20f883e', NULL, '3', '2019-02-02 07:41:58', NULL),
(10, NULL, NULL, NULL, NULL, NULL, '12222', 'bae175604f2b1309ea6a36453190b70e', NULL, '3', '2019-02-02 07:42:21', NULL),
(11, NULL, NULL, NULL, NULL, '111', NULL, '698d51a19d8a121ce581499d7b701668', NULL, '4', '2019-02-02 08:14:54', NULL),
(12, 'saiful', NULL, NULL, NULL, NULL, 'a0001', 'cea2b707931a57f569fd6d961637d002', NULL, '3', '2019-02-03 14:05:13', NULL),
(13, 'akua', NULL, NULL, NULL, NULL, 'a', '0cc175b9c0f1b6a831c399e269772661', NULL, '3', '2019-02-04 00:51:44', NULL),
(14, 'aaa', NULL, NULL, NULL, NULL, '1111', 'b59c67bf196a4758191e42f76670ceba', NULL, '3', '2019-02-04 03:08:05', NULL),
(15, '333', NULL, NULL, NULL, NULL, 'a2244', 'ccfd3f7012cdadb009bd7e76819809a3', NULL, '3', '2019-02-04 06:56:01', NULL),
(18, 'saifull', NULL, 'L', 'admin', NULL, NULL, '21232f297a57a5a743894a0e4a801fc3', 'saiful@gmail.com', '1', '2019-02-05 07:24:56', '9aafeef3c7604d1e652ea903c324c215.jpg'),
(20, 'RERA', NULL, NULL, 'A01', NULL, 'A01', 'c79ec7047f39104c8372382cb20f84c0', NULL, '3', '2019-02-05 15:56:36', NULL),
(21, 'ADYA ZALFA ZAHIRAH', NULL, NULL, '15109/0878', '15109/0878', NULL, 'ecf4bd3d635aea52739ace96b53394bb', NULL, '4', '2019-02-06 01:04:37', NULL),
(27, 'm saiful rizal', NULL, NULL, '01', '01', NULL, '96a3be3cf272e017046d1b2674a52bd3', NULL, '4', '2019-02-09 06:46:44', NULL),
(28, 'farel rama', NULL, NULL, NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', NULL, '4', '2019-02-09 12:16:48', NULL),
(29, 'rera', NULL, NULL, 'a012', NULL, 'a012', '97150a281ed51b6929b33be2d1f4e7e4', NULL, '3', '2019-02-09 12:28:28', NULL),
(30, 'm saiful rizal', NULL, NULL, 'a012', NULL, 'a012', '97150a281ed51b6929b33be2d1f4e7e4', NULL, '3', '2019-02-09 12:28:56', NULL),
(31, 'm saiful rizal', NULL, NULL, 'a018', NULL, 'a018', '5e54de03dba9d18c4b83181de22e7b91', NULL, '3', '2019-02-09 12:29:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `pengumuman_id` int(11) NOT NULL,
  `pengumuman_judul` varchar(150) DEFAULT NULL,
  `pengumuman_deskripsi` text,
  `pengumuman_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `pengumuman_author` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`pengumuman_id`, `pengumuman_judul`, `pengumuman_deskripsi`, `pengumuman_tanggal`, `pengumuman_author`) VALUES
(1, 'Pengumuman Libur Semester Ganjil Tahun Ajaran 2016-2017', 'Libur semester ganjil tahun ajaran 2016-2017 dimulai dari tanggal 3 Maret 2017 sampai dengan tanggal 7 Maret 207.', '2017-01-21 01:17:30', 'M Fikri Setiadi'),
(2, 'Pengumuman Pembagian Raport Semester Ganjil Tahun Ajaran 2016-2017', 'Menjelang berakhirnya proses belajar-mengajar di semester ganjil tahun ajaran 2016-2017, maka akan diadakan pembagian hasil belajar/raport pada tanggal 4 Maret 2017 pukul 07.30 WIB.\r\nYang bertempat di SMKN 5 Jember. Raport diambil oleh orang tua/wali kelas murid masing-masing', '2017-01-21 01:16:20', 'M Fikri Setiadi'),
(3, 'Pengumuman Peresmian dan Launching Website SMKN 5 Jember', 'Peresmian dan launching website resmi M-Sekolah akan diadakan pada hari 23 Desember 2016 pukul 10.00, bertepatan dengan pembagian raport semester ganjil tahun ajaran 2016-2017', '2017-01-22 07:16:16', 'M Fikri Setiadi'),
(4, 'Pengumuman Proses Belajar Mengajar di Semester Genap Tahun Ajaran 2018-2019', 'Setelah libur semester ganjil tahun ajaran 2016-2017, proses belajar mengajar di semester genap tahun ajaran 2016-2017 mulai aktif kembali tanggal 2 Maret 2017.', '2017-01-22 07:15:28', 'M Fikri Setiadi'),
(5, 'halo', 'liburan yah', '2019-02-07 14:07:21', 'saifull'),
(6, 'halo', 'halo', '2019-02-07 14:07:57', 'saifull'),
(7, 'halo', 'halo', '2019-02-07 14:08:04', 'saifull');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengunjung`
--

CREATE TABLE `tbl_pengunjung` (
  `pengunjung_id` int(11) NOT NULL,
  `pengunjung_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `pengunjung_ip` varchar(40) DEFAULT NULL,
  `pengunjung_perangkat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengunjung`
--

INSERT INTO `tbl_pengunjung` (`pengunjung_id`, `pengunjung_tanggal`, `pengunjung_ip`, `pengunjung_perangkat`) VALUES
(930, '2018-08-09 08:04:59', '::1', 'Chrome'),
(931, '2019-02-01 00:19:37', '::1', 'Chrome'),
(932, '2019-02-01 23:01:01', '::1', 'Chrome'),
(933, '2019-02-03 14:47:04', '::1', 'Chrome'),
(934, '2019-02-04 01:22:57', '::1', 'Chrome'),
(935, '2019-02-05 02:45:08', '::1', 'Chrome'),
(936, '2019-02-06 00:57:20', '::1', 'Chrome'),
(937, '2019-02-07 09:34:28', '::1', 'Chrome'),
(938, '2019-02-08 05:50:36', '::1', 'Chrome'),
(939, '2019-02-09 11:46:59', '::1', 'Chrome'),
(940, '2019-02-10 06:46:02', '::1', 'Chrome'),
(941, '2019-02-11 02:09:35', '::1', 'Chrome'),
(942, '2019-02-11 22:31:53', '::1', 'Chrome');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `siswa_nis` varchar(20) NOT NULL,
  `siswa_nama` varchar(70) DEFAULT NULL,
  `siswa_jenkel` varchar(2) DEFAULT NULL,
  `siswa_kelas_id` varchar(5) DEFAULT NULL,
  `siswa_tempat_lahir` varchar(25) DEFAULT NULL,
  `siswa_tgl_lahir` date DEFAULT NULL,
  `siswa_alamat` varchar(100) DEFAULT NULL,
  `siswa_ortu` varchar(50) DEFAULT NULL,
  `siswa_asal_sekolah` varchar(50) DEFAULT NULL,
  `no_ijasah` varchar(13) DEFAULT NULL,
  `siswa_photo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`siswa_nis`, `siswa_nama`, `siswa_jenkel`, `siswa_kelas_id`, `siswa_tempat_lahir`, `siswa_tgl_lahir`, `siswa_alamat`, `siswa_ortu`, `siswa_asal_sekolah`, `no_ijasah`, `siswa_photo`) VALUES
('', 'farel rama', 'L', 'a01', 'j', '2019-02-08', 'jember', 'd', 'SMP', 'd', '1a7a20f3b42ae8fa3bd13400cd0f9d7b.jpg'),
('01', 'm saiful rizal', 'L', '112', 'j', '2019-02-05', 'd', 'd', 'SMP', 'd', 'a3bb47136b2356aa5f9889207dd5abc9.jpg'),
('111', 'saiful', 'L', '11', 'jember', '2019-02-22', 'jj', 'jhj', 'jj', '9', NULL),
('15109/0878', 'ADYA ZALFA ZAHIRAH', 'P', 'a01', 'JEMBER', '2001-04-08', 'JL gajah mada XIX/67 Link.condro Selatan', 'AKHMAD KUSYERI', 'SMP', 'DN-05 DI/06 0', 'd4138e4e2460936bd34c8cc79c777ce0.jpg'),
('a', 'a', 'L', '1', 'a', '2019-02-01', 'aa', 'aa', 'q', '1', NULL),
('er', 's', 'L', '10', 'a', '2019-02-15', 'aa', 'aa', 'aaa', '0', NULL),
('q', 'az', 'L', '10', 's', '2019-02-08', 's', 's', 'sd', '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tulisan`
--

CREATE TABLE `tbl_tulisan` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text,
  `tulisan_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) DEFAULT '0',
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL DEFAULT '0',
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tulisan`
--

INSERT INTO `tbl_tulisan` (`tulisan_id`, `tulisan_judul`, `tulisan_isi`, `tulisan_tanggal`, `tulisan_kategori_id`, `tulisan_kategori_nama`, `tulisan_views`, `tulisan_gambar`, `tulisan_pengguna_id`, `tulisan_author`, `tulisan_img_slider`, `tulisan_slug`) VALUES
(25, 'SMKN 5 Bangun Puluhan Screen House', '<p><strong>RADAR JEMBER.ID&nbsp;</strong>&ndash; Program revitalisasi SMK yang dilaksanakan di SMKN 5 Jember atas kerja sama Kementerian Pendidikan dengan Belanda menunjukkan progres yang luar biasa. Kualitas guru dan siswa SMKN 5 Jember terdongkrak. Selain memperbaiki kurikulum pembelajaran, ada juga penguatan kelembagaan.</p>\r\n\r\n<p>Termasuk inovasi Pembelajaran melalui<strong>&nbsp;p</strong>engembangan&nbsp;<em>teaching factory</em>&nbsp;sebagai pusat kreativitas dan inovasi. Berbagai bentuk inovasi pembelajaran telah dilakukan dengan membentuk kelompok-kelompok siswa. Untuk mengelola sebuah pekerjaan, contohnya dengan&nbsp;<em>proyek individu&nbsp;</em>yang dikelola oleh&nbsp;<em>small group</em>&nbsp;(3-4 siswa).</p>\r\n\r\n<p>Kelompok ini merencanakan, melaksanakan, dan mengevaluasi hasil kerja yang dibiayai oleh kelompoknya dengan melakukan kontrak produksi benih dengan PT Benih Citra Asia, dengan luas minimal 1.000 m2. &ldquo;Sebagai tempat pelatihannya di sekolah, difasilitasi 22 bangunan&nbsp;<em>screen house</em>&nbsp;untuk pembelajaran, sekaligus sebagai aplikasi dari model pembelajaran&nbsp;<em>teaching factory,&rdquo;&nbsp;</em>kata &nbsp;Kepala SMKN 5 Jember Sofyan Hadi Purwanto SE MT.</p>\r\n\r\n<p>Sofyan Hadi mengatakan, proyek percontohan revitalisasi SMK Pertanian di SMK Negeri 5 Jember merupakan kerja sama dengan Belanda. &ldquo;Pada tahun pertama telah dihasilkan beberapa kemajuan, di antaranya penguatan kelembagaan (pemutakhiran program kerja sama industri dan lokal SC), pengembangan kurikulum dan inovasi pembelajaran,&rdquo; ujarnya.</p>\r\n\r\n<p>PT Benih Citra Asia Jember salah satu mitra dari dunia kerja untuk sinkronisasi kurikulum antara sekolah dan kebutuhan dunia kerja/industri. Untuk meningkatkan keterampilan tamatan, pelaksanaan praktik kerja industri, dan rekrutmen tamatan telah dilakukan dan disepakati.</p>\r\n\r\n<p>Presiden Jokowi menginstruksikan dalam Inpres Nomor 9 Tahun 2016 tentang Revitalisasi SMK untuk dilakukan reorientasi&nbsp;pendidikan. Selanjutnya, pelatihan vokasi ke arah&nbsp;<em>demand driven.&nbsp;</em>Sehingga kurikulum, materi pembelajaran, praktik kerja, pengujian, serta sertifikasi sesuai dengan permintaan dunia usaha dan industri.</p>\r\n\r\n<p>Reorientasi pendidikan vokasi ini sangat penting dalam beberapa aspek, dengan tujuan agar sekolah menengah kejuruan dapat menyediakan tenaga kerja terampil yang siap kerja. Di berbagai sektor ekonomi seperti pertanian, industri, pariwisata, bahkan ekonomi kreatif. &ldquo;Selain itu, agar dapat mengurangi permasalahan pengangguran usia muda,&rdquo; ujarnya.</p>\r\n\r\n<p>Revitalisasi SMK diharapkan mampu memberikan dampak positif terhadap peningkatan mutu SMK dengan dua orientasi baru. Pertama, mengantisipasi datangnya gelombang Revolusi Industri 4.0 dengan segala teknologi desruptif yang menyertainya. Kedua, orientasi pengembangan keunggulan potensi wilayah sebagai keunggulan nasional untuk menciptakan daya saing bangsa. &ldquo;Pilar pertama memperkokoh jalinan SMK dengan dunia usaha dan industri abad XXI, pilar kedua mendongkrak keunggulan lokal menjadi keunggulan global,&rdquo; terangnya.&nbsp;<strong>(*)</strong></p>\r\n', '2018-08-08 13:26:08', 6, 'Prestasi', 7, 'fd4e3bcf7e92897514fe358c71fa0a2f.jpg', 1, 'M Fikri Setiadi', 0, 'smkn-5-bangun-puluhan-screen-house'),
(26, 'SMKN 5 Jember Dapat Sertifikasi Jaminan Standar Siswa', '<p><strong>Jember Hari Ini &ndash;&nbsp;</strong>SMK Negeri 5 Jember mendapatkan lisensi sertifikasi profesi, sebagai jaminan standar kelayakan siswa, agar bisa diterima bekerja di dalam negeri dan luar negeri.</p>\r\n\r\n<p>Menurut Kepala SMKN 5 Jember, Rinoto, lisensi sertifikasi profesi yang diberikan Badan Nasional Sertifikasi Profesi, menjadi tantangan bagi sekolah untuk meningkatkan kemampuan siswa. Untuk mendapatkan lisensi sertifikasi profesi, siswa harus melakukan uji kompetensi sehingga siswa dinilai layak mendapatkan lisensi.</p>\r\n\r\n<p>Tahun ini, SMK Negeri 5 Jember menjadi tempat uji kompetensi untuk mendapatkan lisensi sertifikasi profesi untuk seluruh SMK negeri di Jember. Saat ini SMK Negeri 5 Jember berkoordinasi dengan kepala SMK negeri melalui Musyawarah Kerja Kepala Sekolah (MKKS) SMK negeri di Kabupaten Jember.</p>\r\n\r\n<p>Rinoto menambahkan, nantinya seluruh SMK negeri di Jember akan mendapatkan lisensi sertifikasi profesi, sehingga mampu bersaing menghadapi tantangan pasar bebas Masyarakat Ekonomi ASEAN (MEA).&nbsp;</p>\r\n', '2019-02-04 01:26:30', 6, 'Prestasi', 0, 'fde5e4dee768ba59e25e168c6203b35c.jpg', 18, 'saifull', 0, 'smkn-5-jember-dapat-sertifikasi-jaminan-standar-siswa'),
(27, 'Jokowi Singgung Antek Asing, Habiburokhman : Jangan Baper Deh', '<p><strong>Jakarta</strong>&nbsp;- Capres petahana Joko Widodo atau&nbsp;<a href=\"https://www.detik.com/pemilu/\">Jokowi&nbsp;</a>menyindir elite yang kerap menyebut dirinya antek asing namun justru penyindir itulah yang disebutnya antek asing. Juru bicara Direktorat Advokasi Badan Pemenangan Nasional (BPN) Prabowo Subianto-Sandiaga Uno,&nbsp;<a href=\"https://www.detik.com/pemilu/\">Habiburokhman</a>, meminta Jokowi tidak terlalu terbawa perasaan soal antek asing.<br />\r\n<br />\r\n&quot;Pak Prabowo tidak pernah tendensius ke individu tertentu dalam menyampaikan kritikan. Soal antek asing itu mengacu pada sistem yang dianggap lebih menguntungkan asing daripada kepentingan nasional, dan kita harus perbaiki sistem tersebut,&quot; kata Habiburokhman kepada wartawan, Senin (4/2/2019).&nbsp;<br />\r\n<br />\r\n&quot;Jadi jangan ada yang baper deh,&quot; imbuh dia.<br />\r\n&nbsp;</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Baca juga:&nbsp;</strong><a href=\"https://news.detik.com/read/2019/02/04/072952/4412953/10/jokowi-singgung-konsultan-asing-tkn-itu-warning\">Jokowi Singgung Konsultan Asing, TKN: Itu Warning</a></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\nHabiburokhman meminta semua pihak berbicara tentang sistem, bukan individu. Kalau soal individu, Habiburokhman yakin&nbsp;<a href=\"https://www.detik.com/pemilu/\">Prabowo Subianto</a>&nbsp;jauh dari sosok antek asing.<br />\r\n<br />\r\n&quot;Kita harus lebih sering bicara sistem daripada personal. Kalau personal, sosok Pak Prabowo kurang apa? Beliau cucu dan anak pejuang, beliau sendiri puluhan tahun berjuang untuk NKRI, nggak ceritanya dituduh antek asing,&quot; tegas politikus Partai Gerindra itu.<br />\r\n&nbsp;</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Baca juga:&nbsp;</strong><a href=\"https://news.detik.com/read/2019/02/04/063737/4412917/10/sederet-sindiran-jokowi-habis-propaganda-rusia-terbit-konsultan-asing\">Sederet Sindiran Jokowi: Habis &#39;Propaganda Rusia&#39; Terbit &#39;Konsultan Asing&#39;</a></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\nSoal antek asing,&nbsp;<a href=\"https://www.detik.com/pemilu/\">Jokowi&nbsp;</a>awalnya menuding elite yang menggunakan propaganda Rusia memakai jasa konsultan asing. Namun Jokowi tidak menyebut siapa elite tersebut.<br />\r\n<br />\r\n&quot;Yang dipakai konsultan asing. Nggak mikir ini memecah belah rakyat atau tidak, nggak mikir mengganggu ketenangan rakyat atau tidak, ini membuat rakyat khawatir atau tidak, membuat rakyat takut, nggak peduli. Konsultannya konsultan asing. Terus yang antek asing siapa?&quot; kata Jokowi di De Tjolomadoe, Kabupaten Karanganyar, Jawa Tengah, Minggu (3/2).<br />\r\n<br />\r\n&quot;Kanan sampai kita disuguhi kebohongan yang terus-menerus. Rakyat kita sudah pintar, baik yang di kota atau di desa,&quot; imbuh Jokowi.<br />\r\n&nbsp;</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Baca juga:&nbsp;</strong><a href=\"https://news.detik.com/read/2019/02/03/143520/4412428/10/jokowi-jangan-tunjuk-tunjuk-antek-asing-padahal-dia-sendiri-antek-asing\">Jokowi: Jangan Tunjuk-tunjuk Antek Asing Padahal Dia Sendiri Antek Asing</a></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\nJokowi menambahkan, dia kerap dituding sebagai antek asing. Jokowi menepisnya dengan kebijakan pemerintah mengambil alih Blok Rokan, Blok Mahakam, dan kepemilikan saham 51 persen di PT Freeport.&nbsp;<br />\r\n<br />\r\n&quot;Yang antek asing siapa? Jangan begitu dong. Maksudnya, jangan nunjuk-nunjuk dia antek asing, padahal dirinya sendiri antek asing. Nggak mempan antek asing, ganti lagi,&quot; ujar Jokowi.&nbsp;</p>\r\n', '2019-02-04 02:32:17', 2, 'Politik', 0, '95bec55c1290fd6aedac99e19a6b1f67.jpeg', 18, 'saifull', 0, 'jokowi-singgung-antek-asing,-habiburokhman-:-jangan-baper-deh'),
(28, '7 Fakta dan Statistik Kemenangan MU atas ', '<p>&nbsp;</p>\r\n\r\n<p><strong>Jakarta</strong>&nbsp;-&nbsp;<a href=\"https://www.detik.com/tag/manchester-united/\">Manchester United</a>&nbsp;kembali ke jalur kemenangan setelah mengalahkan Leicester City 1-0. Beberapa torehan dibuat The Red Devils dari laga tersebut.<br />\r\n&nbsp;</p>\r\n\r\n<p><ins><img alt=\"\" src=\"https://wtf2.forkcdn.com/www/delivery/lg.php?bannerid=0&amp;campaignid=0&amp;zoneid=4563&amp;loc=https%3A%2F%2Fsport.detik.com%2Fsepakbola%2Fliga-inggris%2Fd-4413026%2F7-fakta-dan-statistik-kemenangan-mu-atas-leicester&amp;referer=https%3A%2F%2Fsport.detik.com%2F&amp;cb=9397d770d1\" style=\"height:0px; width:0px\" /></ins></p>\r\n\r\n<p>Berikut data dan fakta kemenangan Manchester United atas&nbsp;<a href=\"https://www.detik.com/tag/leicester-city/\">Leicester City</a>, seperti dihimpun oleh Opta:<br />\r\n<br />\r\n- Manchester United meraih kemenangan kelimanya secara beruntun untuk laga away di semua kompetisi. Ini adalah untuk kali pertama terjadi setelah Oktober 2012 bersama Sir Alex Ferguson.<br />\r\n<br />\r\n- Di Premier League, Leicester City paling sering kalah dari Manchester United dibanding klub lain. The Foxes tumbang 17 kali di tangan Setan Merah.<br />\r\n<br />\r\n- Leicester City sedang dalam tren buruk, mereka menelan empat kekalahan dan sekali imbang di lima laga terakhir.&nbsp;<br />\r\n&nbsp;</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Baca juga:&nbsp;</strong><a href=\"https://sport.detik.com/sepakbola/read/2019/02/04/004232/4412842/72/pujian-rashford-untuk-pogba\">Pujian Rashford untuk Pogba</a></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\n<br />\r\n- Sejak&nbsp;<a href=\"https://www.detik.com/tag/ole-gunnar-solskjaer/\">Solskjaer</a>&nbsp;menjadi manajer interim MU, Paul Pogba merupakan pemain dengan keterlibatan menciptakan gol paling banyak di Premier League. Dia terlibat dalam terciptanya 11 gol (6 gol dan 11 assist).<br />\r\n<br />\r\n- Sejak melakoni debut di Manchester United,&nbsp;<a href=\"https://www.detik.com/tag/marcus-rashford/\">Marcus Rasford</a>&nbsp;sudah membuat 42 gol di semua kompetisi. Dalam kurun yang sama tak ada pemain MU lain yang lebih tajam darinya.<br />\r\n<br />\r\n- MU meraih poin paling banyak sejak Ole Gunnar Solskjaer datang dibanding klub lain pada periode yang sama. MU mengoleksi 22 poin hasil dari tujuh kemenangan, sekali imbang, dan belum pernah kalah.<br />\r\n<br />\r\n- Di usianya yang baru 21 tahun dan 95 hari, Marcus Rashford sudah mencatatkan 100 penampilan di Premier League. Rekor itu hanya kalah dari Ryan Giggs yang membuat 100 penampilan bersama MU di usia 21 tahun dan 74 hari.<br />\r\n&nbsp;</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Baca juga:&nbsp;</strong><a href=\"https://sport.detik.com/sepakbola/read/2019/02/04/063644/4412916/72/andai-solskjaer-datang-ke-mu-di-awal-musim\">Andai Solskjaer Datang ke MU di Awal Musim...</a></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '2019-02-04 02:34:48', 13, 'Olah Raga', 3, '70a67bf0a3871b91e63059aa10b6ec27.jpeg', 2, 'saiful', 0, '7-fakta-dan-statistik-kemenangan-mu-atas');

--
-- Indexes for dumped tables
--

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
  ADD KEY `NIS` (`NIS`),
  ADD KEY `KODE_GURU` (`KODE_GURU`);

--
-- Indexes for table `tabel_admin`
--
ALTER TABLE `tabel_admin`
  ADD PRIMARY KEY (`KODE_ADMIN`);

--
-- Indexes for table `tabel_jabatan`
--
ALTER TABLE `tabel_jabatan`
  ADD PRIMARY KEY (`KODE_JABATAN`);

--
-- Indexes for table `tabel_jadwal`
--
ALTER TABLE `tabel_jadwal`
  ADD PRIMARY KEY (`KODE_JADWAL`),
  ADD KEY `FK_REFERENCE_2` (`KODE_KELAS`),
  ADD KEY `FK_REFERENCE_3` (`KODE_GURU`),
  ADD KEY `FK_REFERENCE_5` (`KODE_MAPEL_JADWAL`);

--
-- Indexes for table `tabel_jurusan`
--
ALTER TABLE `tabel_jurusan`
  ADD PRIMARY KEY (`KODE_JURUSAN`);

--
-- Indexes for table `tabel_laporguru`
--
ALTER TABLE `tabel_laporguru`
  ADD PRIMARY KEY (`KODE_LAPORGURU`);

--
-- Indexes for table `tabel_laporsarana`
--
ALTER TABLE `tabel_laporsarana`
  ADD PRIMARY KEY (`KODE_LAPORSRANA`);

--
-- Indexes for table `tabel_mapel`
--
ALTER TABLE `tabel_mapel`
  ADD PRIMARY KEY (`KODE_MAPEL`);

--
-- Indexes for table `tabel_nilai`
--
ALTER TABLE `tabel_nilai`
  ADD PRIMARY KEY (`ID_NILAI`),
  ADD KEY `FK_REFERENCE_6` (`NIS`),
  ADD KEY `FK_REFERENCE_7` (`KODE_MAPEL_NILAI`),
  ADD KEY `FK_REFERENCE_8` (`KODE_KELAS`),
  ADD KEY `FK_REFERENCE_9` (`KODE_GURU`);

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
  ADD KEY `FK_REFERENCE_14` (`KODE_GURU_P`),
  ADD KEY `FK_REFERENCE_15` (`NIS`),
  ADD KEY `FK_REFERENCE_22` (`KODE_TEMPAT_P`);

--
-- Indexes for table `tabel_saran`
--
ALTER TABLE `tabel_saran`
  ADD PRIMARY KEY (`KODE_SARAN`);

--
-- Indexes for table `tabel_tempat_prakerin`
--
ALTER TABLE `tabel_tempat_prakerin`
  ADD PRIMARY KEY (`KODE_TEMPAT`);

--
-- Indexes for table `table_daful`
--
ALTER TABLE `table_daful`
  ADD PRIMARY KEY (`KODE_DAFUL`),
  ADD KEY `FK_REFERENCE_13` (`NIS`);

--
-- Indexes for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  ADD PRIMARY KEY (`agenda_id`);

--
-- Indexes for table `tbl_album`
--
ALTER TABLE `tbl_album`
  ADD PRIMARY KEY (`album_id`),
  ADD KEY `album_pengguna_id` (`album_pengguna_id`);

--
-- Indexes for table `tbl_files`
--
ALTER TABLE `tbl_files`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`galeri_id`),
  ADD KEY `galeri_album_id` (`galeri_album_id`),
  ADD KEY `galeri_pengguna_id` (`galeri_pengguna_id`);

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`guru_id`);

--
-- Indexes for table `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  ADD PRIMARY KEY (`inbox_id`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`kelas_id`);

--
-- Indexes for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`komentar_id`),
  ADD KEY `komentar_tulisan_id` (`komentar_tulisan_id`);

--
-- Indexes for table `tbl_log_aktivitas`
--
ALTER TABLE `tbl_log_aktivitas`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `log_pengguna_id` (`log_pengguna_id`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- Indexes for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`pengumuman_id`);

--
-- Indexes for table `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  ADD PRIMARY KEY (`pengunjung_id`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`siswa_nis`);

--
-- Indexes for table `tbl_tulisan`
--
ALTER TABLE `tbl_tulisan`
  ADD PRIMARY KEY (`tulisan_id`),
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`),
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_absensi`
--
ALTER TABLE `tabel_absensi`
  MODIFY `KODE_ABSENSI` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tabel_jadwal`
--
ALTER TABLE `tabel_jadwal`
  MODIFY `KODE_JADWAL` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tabel_laporguru`
--
ALTER TABLE `tabel_laporguru`
  MODIFY `KODE_LAPORGURU` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tabel_laporsarana`
--
ALTER TABLE `tabel_laporsarana`
  MODIFY `KODE_LAPORSRANA` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tabel_nilai`
--
ALTER TABLE `tabel_nilai`
  MODIFY `ID_NILAI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tabel_prakerin`
--
ALTER TABLE `tabel_prakerin`
  MODIFY `KODE_PRAKERIN` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tabel_saran`
--
ALTER TABLE `tabel_saran`
  MODIFY `KODE_SARAN` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `table_daful`
--
ALTER TABLE `table_daful`
  MODIFY `KODE_DAFUL` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  MODIFY `agenda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_album`
--
ALTER TABLE `tbl_album`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_files`
--
ALTER TABLE `tbl_files`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `galeri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  MODIFY `inbox_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `komentar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_log_aktivitas`
--
ALTER TABLE `tbl_log_aktivitas`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `pengguna_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `pengumuman_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  MODIFY `pengunjung_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=943;
--
-- AUTO_INCREMENT for table `tbl_tulisan`
--
ALTER TABLE `tbl_tulisan`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
