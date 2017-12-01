-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2017 at 10:12 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karyawan`
--

-- --------------------------------------------------------

--
-- Table structure for table `sertifikasi`
--

CREATE TABLE `sertifikasi` (
  `id` int(11) NOT NULL,
  `sertifikasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sertifikasi`
--

INSERT INTO `sertifikasi` (`id`, `sertifikasi`) VALUES
(1, 'Sertifikasi'),
(2, 'Belum Sertifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ada_tidak`
--

CREATE TABLE `tbl_ada_tidak` (
  `id` int(11) NOT NULL,
  `ada_tidak` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ada_tidak`
--

INSERT INTO `tbl_ada_tidak` (`id`, `ada_tidak`) VALUES
(1, 'Ada'),
(2, 'Tidak Ada');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(2) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_akreditasi_sekolah`
--

CREATE TABLE `tbl_akreditasi_sekolah` (
  `id` int(11) NOT NULL,
  `akreditasi_sekolah` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_akreditasi_sekolah`
--

INSERT INTO `tbl_akreditasi_sekolah` (`id`, `akreditasi_sekolah`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D'),
(5, 'Belum Akreditasi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jabatan`
--

CREATE TABLE `tbl_jabatan` (
  `id` int(11) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`id`, `jabatan`) VALUES
(1, 'Tata Usaha'),
(2, 'Guru Kelas'),
(3, 'Guru Mata Pelajaran');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis_kelamin`
--

CREATE TABLE `tbl_jenis_kelamin` (
  `id` int(11) NOT NULL,
  `jenis_kelamin` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jenis_kelamin`
--

INSERT INTO `tbl_jenis_kelamin` (`id`, `jenis_kelamin`) VALUES
(1, 'Laki - Laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenjang_sekolah`
--

CREATE TABLE `tbl_jenjang_sekolah` (
  `id` int(11) NOT NULL,
  `jenjang_sekolah` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jenjang_sekolah`
--

INSERT INTO `tbl_jenjang_sekolah` (`id`, `jenjang_sekolah`) VALUES
(1, 'PAUD'),
(2, 'TK'),
(3, 'SD'),
(4, 'SMP');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenjang_tempat_tugas`
--

CREATE TABLE `tbl_jenjang_tempat_tugas` (
  `id` int(11) NOT NULL,
  `jenjang_tempat_tugas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jenjang_tempat_tugas`
--

INSERT INTO `tbl_jenjang_tempat_tugas` (`id`, `jenjang_tempat_tugas`) VALUES
(1, 'PAUD'),
(2, 'TK'),
(3, 'SD'),
(4, 'SMP');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_keluarga`
--

CREATE TABLE `tbl_keluarga` (
  `id_data_keluarga` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `status_perkawinan` varchar(20) NOT NULL,
  `foto_ktp_suami_istri` varchar(150) NOT NULL,
  `foto_kartu_keluarga` text NOT NULL,
  `nama_suami_istri` varchar(50) NOT NULL,
  `nik_suami_istri` varchar(30) NOT NULL,
  `jumlah_anak` varchar(30) NOT NULL,
  `nama_anak_pertama` varchar(30) NOT NULL,
  `nik_anak_pertama` varchar(30) NOT NULL,
  `nama_anak_kedua` varchar(30) NOT NULL,
  `nik_anak_kedua` varchar(40) NOT NULL,
  `nama_anak_ketiga` varchar(50) NOT NULL,
  `nik_anak_ketiga` varchar(40) NOT NULL,
  `nama_ayah_kandung` varchar(30) NOT NULL,
  `nik_ayah_kandung` varchar(40) NOT NULL,
  `nama_ibu_kandung` varchar(40) NOT NULL,
  `nik_ibu_kandung` varchar(40) NOT NULL,
  `pekerjaan_suami_istri` varchar(40) NOT NULL,
  `nip_suami_istri` varchar(30) NOT NULL,
  `penghasilan_suami_istri` varchar(40) NOT NULL,
  `alamat_rumah` text NOT NULL,
  `desa_kelurahan` text NOT NULL,
  `kecamatan` text NOT NULL,
  `kabupaten` text NOT NULL,
  `provinsi` text NOT NULL,
  `kode_pos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_keluarga`
--

INSERT INTO `tbl_keluarga` (`id_data_keluarga`, `username`, `nama`, `nip`, `status_perkawinan`, `foto_ktp_suami_istri`, `foto_kartu_keluarga`, `nama_suami_istri`, `nik_suami_istri`, `jumlah_anak`, `nama_anak_pertama`, `nik_anak_pertama`, `nama_anak_kedua`, `nik_anak_kedua`, `nama_anak_ketiga`, `nik_anak_ketiga`, `nama_ayah_kandung`, `nik_ayah_kandung`, `nama_ibu_kandung`, `nik_ibu_kandung`, `pekerjaan_suami_istri`, `nip_suami_istri`, `penghasilan_suami_istri`, `alamat_rumah`, `desa_kelurahan`, `kecamatan`, `kabupaten`, `provinsi`, `kode_pos`) VALUES
(7, 'fahmi', 'Fahmi Hidayat', '198509192014021002', 'Sudah Menikah', 'http://localhost/datakaryawan/', 'http://localhost/datakaryawan/foto_kartu_keluarga/img001.jpg', 'Yuli', '1234567890654321', '1', '1', '0987654321123456', '1', '1', '1', '1', 'Najib', '1234512345123456', 'Zahid', '5432154321543210', 'Guru', '6789067890678901', 'Rp.0,-', '-', '-', 'Delta Pawan', 'Ketapanbng', 'Kalimantan Barat', 78812),
(13, 'user', 'sdfsdf', 'dsfsdf', 'Belum Menikah', 'http://localhost/datakaryawan/', 'http://localhost/datakaryawan/foto_kartu_keluarga/nganu4.png', '324234', '324', '324', '324', '423', '4324', '32432', '432432', '423432', 'dsfsdf', 'sdfsdf', 'sdfsdf', 'dsfs', 'dfsdf', '234234', 'Rp.234.234,-', '4234', '423432', '4234', '4234324', '234234', 32423423),
(23, 'ramdan321', 'sfsdf', 'sdfsd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(42, 'ramdan4567', 'sdfsdf', 'sdfdsf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `session` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `nama`, `username`, `password`, `session`) VALUES
(1, 'admin', 'admin', 'admin', 'admin'),
(13, 'Yuli Hernani', 'yuli', 'hernani', 'user'),
(14, 'Karso', 'aso', 'aso', 'user'),
(15, 'aku', 'aku', 'aku', 'user'),
(19, 'Fahmi Hidayat', 'fahmi', 'hidayat', ''),
(25, 'sdfsdf', 'user', '1234567', 'user'),
(37, 'sfsdf', 'ramdan321', '123456', 'user'),
(57, 'sdfsdf', 'ramdan4567', '12345678', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pangkat_golongan`
--

CREATE TABLE `tbl_pangkat_golongan` (
  `id` int(11) NOT NULL,
  `pangkat_golongan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pangkat_golongan`
--

INSERT INTO `tbl_pangkat_golongan` (`id`, `pangkat_golongan`) VALUES
(1, 'Pengatur Muda, II/a'),
(2, 'Pengatur Muda Tk.1, II/b'),
(3, 'Penata Muda, III/a'),
(4, 'Penata Muda Tk.1, III/b'),
(5, 'Penata, III/c'),
(6, 'Penata Tk.1, III/d');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `id_formulir_pegawai` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nip` int(20) NOT NULL,
  `pangkat_golongan` varchar(500) NOT NULL,
  `tmt_golongan` varchar(20) NOT NULL,
  `sk_pengangkatan_awal` varchar(50) NOT NULL,
  `tmt_pengangkatan_awal` varchar(40) NOT NULL,
  `mengampu_mata_pelajaran` varchar(40) NOT NULL,
  `jumlah_jam_mengajar` varchar(50) NOT NULL,
  `pejabat_yang_mengangkat` varchar(100) NOT NULL,
  `no_sk_cpns` varchar(60) NOT NULL,
  `tmt_sk_cpns` varchar(50) NOT NULL,
  `no_sk_pns` varchar(50) NOT NULL,
  `tmt_sk_pns` varchar(50) NOT NULL,
  `no_sk_pangkat_terakhir` varchar(50) NOT NULL,
  `tmt_sk_pangkat_terakhir` varchar(50) NOT NULL,
  `no_nuptk` varchar(20) NOT NULL,
  `no_karpeg` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `unit_kerja` varchar(50) NOT NULL,
  `sk_pengangkatan_jabatan_fungsional_tertentu` varchar(50) NOT NULL,
  `dokument_sertifikat_diklat` varchar(500) DEFAULT NULL,
  `tmt_jabatan` varchar(50) NOT NULL,
  `masa_kerja_terakhir` varchar(50) NOT NULL,
  `masa_kerja_pengangkatan` varchar(40) NOT NULL,
  `tahun_pensiun` varchar(30) NOT NULL,
  `gaji_terakhir` varchar(40) NOT NULL,
  `sertifikasi` varchar(40) NOT NULL,
  `no_sertifikasi` varchar(50) NOT NULL,
  `tahun_sertifikasi` varchar(30) NOT NULL,
  `berkala_terakhir` varchar(30) NOT NULL,
  `no_berkala_terakhir` varchar(50) NOT NULL,
  `tanggal_berkala_berikutnya` varchar(20) NOT NULL,
  `no_berkala_berikutnya` varchar(30) NOT NULL,
  `no_hp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`id_formulir_pegawai`, `username`, `nama`, `nip`, `pangkat_golongan`, `tmt_golongan`, `sk_pengangkatan_awal`, `tmt_pengangkatan_awal`, `mengampu_mata_pelajaran`, `jumlah_jam_mengajar`, `pejabat_yang_mengangkat`, `no_sk_cpns`, `tmt_sk_cpns`, `no_sk_pns`, `tmt_sk_pns`, `no_sk_pangkat_terakhir`, `tmt_sk_pangkat_terakhir`, `no_nuptk`, `no_karpeg`, `jabatan`, `unit_kerja`, `sk_pengangkatan_jabatan_fungsional_tertentu`, `dokument_sertifikat_diklat`, `tmt_jabatan`, `masa_kerja_terakhir`, `masa_kerja_pengangkatan`, `tahun_pensiun`, `gaji_terakhir`, `sertifikasi`, `no_sertifikasi`, `tahun_sertifikasi`, `berkala_terakhir`, `no_berkala_terakhir`, `tanggal_berkala_berikutnya`, `no_berkala_berikutnya`, `no_hp`) VALUES
(9, 'fahmi', 'Fahmi Hidayat', 2147483647, 'Penata Muda, III/a', '01-October-2014', 'Nomot 70 Tahun 2009', '01-July-2009', 'Kejuruan ATPH', '14', 'Bupati', '2345.UP-B.2014', '01-February-2014', '2345.UP-B.2014', '01-October-2016', '1234.UP-C.2016', '01-October-2016', ' -', 'B123456', 'Guru Mata Pelajaran', 'SMK N 1 Pemahan', 'Kepala Sekolah', 'http://localhost/datakaryawan/dokumen_sertifikat_diklat/Ajuan NUPTK.jpg', '01-December-2016', '8 Tahun 1 Bulan', '01-January-2012', '2050', 'Rp.2.000.000,-', 'Sudah Sertifikasi', '01-October-2016', '2018', 'April 2018', 'BERKALA.23455.2018', 'April 2020', '-', '2147483647'),
(15, 'user', 'sdfsdf', 0, 'Penata Muda, III/a', '14-December-2017', 'sdfsdf', '28-December-2017', 'sdfsd', '24', '23423', '4234', '27-December-2017', '4234', '06-December-2017', '423423', '27-December-2017', '423423', '423432', 'Guru Kelas', '4324', 'Guru', 'http://localhost/datakaryawan/dokumen_sertifikat_diklat/nganu4.png', '06-December-2017', '8 Tahun 1 Bulan', '28-June-2020', '2077', 'Rp.234.234,-', 'Sudah Sertifikasi', '423432', '4234', '32423', '432432432', '44234', '234234', '4234324234'),
(16, 'ramdan321', 'sfsdf', 0, 'Pengatur Muda Tk.1, II/b', '13-December-2017', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '8 Tahun 1 Bulan', '', '', '', '', '', '', '', '', '', '', ''),
(34, 'ramdan4567', 'sdfsdf', 0, 'Pengatur Muda, II/a', '22-December-2017', 'sdfsd', '06-December-2017', 'sdfsdf', '24', '525235', '23534', '05-December-2017', '23534', '27-December-2017', 'ffds', '13-December-2017', 'sfsdf', 'dfsdf', 'Tata Usaha', 'asfs', 'Kepala Sekolah', NULL, '06-December-2017', 'dsfsdf', 'sdfsdf', '2077', 'Rp.0,-', 'Belum Sertifikasi', 'dsfsdf', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'sdfsd', 'fsdfsdf', '54325235');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendidikan`
--

CREATE TABLE `tbl_pendidikan` (
  `id_data_pendidikan` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(29) NOT NULL,
  `nip` varchar(26) NOT NULL,
  `pendidikan_terakhir` varchar(50) NOT NULL,
  `no_ijazah_terakhir` varchar(50) NOT NULL,
  `foto_ijazah_terakhir` text,
  `universitas` varchar(50) NOT NULL,
  `fakultas` varchar(40) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `tahun_lulus` varchar(30) NOT NULL,
  `riwayat_pendidikan_sd` varchar(50) NOT NULL,
  `no_ijazah_sd` varchar(50) NOT NULL,
  `foto_ijazah_sd` text,
  `riwayat_pendidikan_smp` varchar(50) NOT NULL,
  `no_ijazah_smp` varchar(40) NOT NULL,
  `foto_ijazah_smp` text,
  `riwayat_pendidikan_sma` varchar(50) NOT NULL,
  `no_ijazah_sma` varchar(50) NOT NULL,
  `foto_ijazah_sma` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pendidikan`
--

INSERT INTO `tbl_pendidikan` (`id_data_pendidikan`, `username`, `nama`, `nip`, `pendidikan_terakhir`, `no_ijazah_terakhir`, `foto_ijazah_terakhir`, `universitas`, `fakultas`, `jurusan`, `tahun_lulus`, `riwayat_pendidikan_sd`, `no_ijazah_sd`, `foto_ijazah_sd`, `riwayat_pendidikan_smp`, `no_ijazah_smp`, `foto_ijazah_smp`, `riwayat_pendidikan_sma`, `no_ijazah_sma`, `foto_ijazah_sma`) VALUES
(7, 'fahmi', 'Fahmi Hidayat', '198509192014021002', 'S1', 'IJZS1.INST.JOGJA', 'http://localhost/datakaryawan/foto_ijazah_terakhir/images-18.jpeg', 'INSTIPER', 'Teknologi Pertanian', 'Teknologi Hasil Pertanian', '2010', 'SDN 07', 'SDN07.KTP.1997', 'http://localhost/datakaryawan/foto_ijazah_sd/images-27.jpeg', 'SMP N 1 Ketapang', 'SMP.KTP.2000', 'http://localhost/datakaryawan/foto_ijazah_smp/images-52.jpeg', 'SMK N 2 Ketapang', 'SMK2 KTP.2003', 'http://localhost/datakaryawan/foto_ijazah_sma/images-57.jpeg'),
(13, 'user', 'sdfsdf', 'dsfsdf', 'DIII', '4234', 'http://localhost/datakaryawan/foto_ijazah_terakhir/nganu4.png', '423432', '44324', '32432', '4234', '32432432432423', '4324324', 'http://localhost/datakaryawan/foto_ijazah_sd/nganu4.png', '432423', '4234324', 'http://localhost/datakaryawan/foto_ijazah_smp/nganu4.png', '32423', '423423', 'http://localhost/datakaryawan/foto_ijazah_sma/nganu4.png'),
(23, 'ramdan321', 'sfsdf', 'sdfsd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(42, 'ramdan4567', 'sdfsdf', 'sdfdsf', 'DII', 'dfdfgdfg', '', 'sfs', 'fsf', 'sdfs', '', 'fsdf', 'sdfsf', '', 'sfs', 'fsdfsdf', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendidikan_terakhir`
--

CREATE TABLE `tbl_pendidikan_terakhir` (
  `id` int(11) NOT NULL,
  `pendidikan_terakhir` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pendidikan_terakhir`
--

INSERT INTO `tbl_pendidikan_terakhir` (`id`, `pendidikan_terakhir`) VALUES
(1, 'SMA/Sederajat'),
(2, 'DII'),
(3, 'DIII'),
(4, 'DIV'),
(5, 'S1'),
(6, 'S2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profile_pegawai`
--

CREATE TABLE `tbl_profile_pegawai` (
  `id` int(10) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tanggal_lahir` varchar(20) NOT NULL,
  `nik` char(16) NOT NULL,
  `npwp` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `status_pegawai` varchar(50) NOT NULL,
  `jenjang_tempat_tugas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_profile_pegawai`
--

INSERT INTO `tbl_profile_pegawai` (`id`, `kode`, `username`, `password`, `nama`, `nip`, `tempat_lahir`, `tanggal_lahir`, `nik`, `npwp`, `jenis_kelamin`, `status_pegawai`, `jenjang_tempat_tugas`) VALUES
(9, 'SD001', 'yuli', 'hernani', 'Yuli Hernani', '198607042018072002', 'Ketapang', '04-July-1986', '1234567890123456', '1.22.333.4444-55555', 'Perempuan', 'PNS', 'SD'),
(10, 'PAUD001', 'aso', 'aso', 'Karso', '-', 'Ketapang', '04-July-1986', '7777777777666666', '22.333.444-001.23', 'Laki - Lak', 'PNS', 'PAUD'),
(11, 'TK001', 'aku', 'aku', 'aku', '-', 'Ketapang', '04-July-1986', '7777777777666666', '22.333.444-000', 'Perempuan', 'GTY', 'TK'),
(15, '', 'fahmi', 'hidayat', 'Fahmi Hidayat', '198509192014021002', 'Ketapang', '19 September 1985', '1234567890123456', '22.333.444-000', 'Laki - Lak', 'PNS', 'SMP'),
(21, '', 'user', '1234567', 'sdfsdf', 'dsfsdf', 'sdfsd', '27-December-2017', '2342432', '24', 'Perempuan', 'GTY', 'TK'),
(34, '', 'ramdan321', '123456', 'sfsdf', 'sdfsd', 'fsdfs', '13-December-2017', '23432', '4234234', '', 'GTY', 'TK'),
(57, '', 'ramdan4567', '12345678', 'sdfsdf', 'sdfdsf', 'sdf', '07-December-2017', '2342', '3423423', 'Perempuan', 'GTY', 'TK');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sekolah`
--

CREATE TABLE `tbl_sekolah` (
  `id_data_sekolah` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `unit_kerja` varchar(50) NOT NULL,
  `jenjang_sekolah` varchar(50) NOT NULL,
  `nama_sekolah` text NOT NULL,
  `uppk` varchar(70) NOT NULL,
  `nama_kepala_sekolah` varchar(69) NOT NULL,
  `nip_nama_kepala_sekolah` varchar(66) NOT NULL,
  `tanggal_lahir_kepala_sekolah` text NOT NULL,
  `tempat_lahir_kepala_sekolah` text NOT NULL,
  `jenis_kelamin_kepala_sekolah` varchar(11) NOT NULL,
  `pangkat_kepala_sekolah` varchar(40) NOT NULL,
  `pendidikan_terakhir_kepala_sekolah` varchar(70) NOT NULL,
  `tmt_kepala_sekolah_periode_pertama` text NOT NULL,
  `tmt_kepala_sekolah_periode_kedua` text NOT NULL,
  `tmt_kepala_sekolah_periode_ketiga` text NOT NULL,
  `no_sk_kepala_sekolah_pertama` text NOT NULL,
  `no_sk_kepala_sekolah_kedua` text NOT NULL,
  `no_sk_kepala_sekolah_ketiga` text NOT NULL,
  `no_sertifikat_nuk` text NOT NULL,
  `foto_dokumen_nuk` text NOT NULL,
  `akreditasi_sekolah` varchar(11) NOT NULL,
  `nss` int(11) NOT NULL,
  `npsn` int(11) NOT NULL,
  `status_sekolah` varchar(50) NOT NULL,
  `foto_sekolah` text NOT NULL,
  `foto_dokumen_kegiatan_sekolah` text NOT NULL,
  `jumlah_rombel` int(11) NOT NULL,
  `jumlah_tenaga_pengajar` int(11) NOT NULL,
  `jumlah_siswa_laki_laki` int(11) NOT NULL,
  `jumlah_siswa_perempuan` int(11) NOT NULL,
  `jumlah_siswa_keseluruhan` int(11) NOT NULL,
  `kebutuhan_guru` int(11) NOT NULL,
  `guru_yang_tersedia` int(11) NOT NULL,
  `kekurangan_guru` int(11) NOT NULL,
  `kelebihan_guru` int(11) NOT NULL,
  `ruang_keterampilan` varchar(11) NOT NULL,
  `lab_bahasa` varchar(11) NOT NULL,
  `lab_komputer` varchar(11) NOT NULL,
  `lab_ipa` varchar(11) NOT NULL,
  `perpustakaan` varchar(11) NOT NULL,
  `ruang_kelas` varchar(11) NOT NULL,
  `kondisi_ruangan` varchar(11) NOT NULL,
  `alat_pembelajaran` varchar(11) NOT NULL,
  `jumlah_guru_matematika` int(11) NOT NULL,
  `jumlah_guru_ipa` int(11) NOT NULL,
  `jumlah_guru_ips` int(11) NOT NULL,
  `jumlah_guru_sbk` int(11) NOT NULL,
  `jumlah_guru_bahasa_indonesia` int(11) NOT NULL,
  `jumlah_guru_bahasa_inggris` int(11) NOT NULL,
  `jumlah_guru_pjok` int(11) NOT NULL,
  `jumlah_guru_pkn` int(11) NOT NULL,
  `jumlah_guru_prakarya` int(11) NOT NULL,
  `jumlah_guru_agama_islam` int(11) NOT NULL,
  `jumlah_guru_agama_katolik` int(11) NOT NULL,
  `jumlah_guru_agama_protestan` int(11) NOT NULL,
  `jumlah_guru_agama_budha` int(11) NOT NULL,
  `jumlah_guru_agama_hindu` int(11) NOT NULL,
  `jumlah_pns` int(11) NOT NULL,
  `jumlah_gty` int(11) NOT NULL,
  `jumlah_gtk` int(11) NOT NULL,
  `jumlah_gtt` int(11) NOT NULL,
  `jumlah_gdd` int(11) NOT NULL,
  `kepala_dinas_sekarang` varchar(40) NOT NULL,
  `nip_kepala_dinas` int(11) NOT NULL,
  `keterangan_lain` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sekolah`
--

INSERT INTO `tbl_sekolah` (`id_data_sekolah`, `username`, `nama`, `nip`, `unit_kerja`, `jenjang_sekolah`, `nama_sekolah`, `uppk`, `nama_kepala_sekolah`, `nip_nama_kepala_sekolah`, `tanggal_lahir_kepala_sekolah`, `tempat_lahir_kepala_sekolah`, `jenis_kelamin_kepala_sekolah`, `pangkat_kepala_sekolah`, `pendidikan_terakhir_kepala_sekolah`, `tmt_kepala_sekolah_periode_pertama`, `tmt_kepala_sekolah_periode_kedua`, `tmt_kepala_sekolah_periode_ketiga`, `no_sk_kepala_sekolah_pertama`, `no_sk_kepala_sekolah_kedua`, `no_sk_kepala_sekolah_ketiga`, `no_sertifikat_nuk`, `foto_dokumen_nuk`, `akreditasi_sekolah`, `nss`, `npsn`, `status_sekolah`, `foto_sekolah`, `foto_dokumen_kegiatan_sekolah`, `jumlah_rombel`, `jumlah_tenaga_pengajar`, `jumlah_siswa_laki_laki`, `jumlah_siswa_perempuan`, `jumlah_siswa_keseluruhan`, `kebutuhan_guru`, `guru_yang_tersedia`, `kekurangan_guru`, `kelebihan_guru`, `ruang_keterampilan`, `lab_bahasa`, `lab_komputer`, `lab_ipa`, `perpustakaan`, `ruang_kelas`, `kondisi_ruangan`, `alat_pembelajaran`, `jumlah_guru_matematika`, `jumlah_guru_ipa`, `jumlah_guru_ips`, `jumlah_guru_sbk`, `jumlah_guru_bahasa_indonesia`, `jumlah_guru_bahasa_inggris`, `jumlah_guru_pjok`, `jumlah_guru_pkn`, `jumlah_guru_prakarya`, `jumlah_guru_agama_islam`, `jumlah_guru_agama_katolik`, `jumlah_guru_agama_protestan`, `jumlah_guru_agama_budha`, `jumlah_guru_agama_hindu`, `jumlah_pns`, `jumlah_gty`, `jumlah_gtk`, `jumlah_gtt`, `jumlah_gdd`, `kepala_dinas_sekarang`, `nip_kepala_dinas`, `keterangan_lain`) VALUES
(4, 'fahmi', 'Fahmi Hidayat', '198509192014021002', 'SMK N 1 Pemahan', 'SMP', 'SMK N 1 Pemahan', 'Pemahan', 'Fahmi Hidayat', '198509192014021002', '19-September-1985', 'Ketapang', 'Laki - Laki', 'Penata Muda, III/a', 'S1', '1 Desember 2016', '-', '-', 'SK-KS-2016', '-', '-', '0', 'http://localhost/datakaryawan/foto_dokumen_nuk/Contoh Surat Lamaran Kerja Lulusan SMK.png', 'B', 802, 30108095, 'Negeri', 'http://localhost/datakaryawan/foto_sekolah/Hbb.jpg', 'http://localhost/datakaryawan/foto_dokumen_kegiatan_sekolah/IMAG0148.jpg', 6, 19, 70, 50, 120, 22, 19, 3, 0, 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Tidak Ada', 1, 1, 0, 0, 1, 1, 1, 1, 0, 1, 1, 0, 0, 1, 6, 0, 9, 4, 0, 'H Jahilin', 2147483647, 'Selesai'),
(6, 'ramdan4567', 'sdfsdf', 'sdfdsf', 'asfs', 'TK', 'sdfsd', 'Simpang Hulu', 'sdf', '23423', '30-December-2017', '4234', 'Laki - Laki', 'Pengatur Muda Tk.1, II/b', 'DII', 'sfsdf', 'sdfsdf', 'sdfsdf', 'sdfs', 'dfsd', 'fsdfs', '234234', 'http://localhost/project/datakaryawan/foto_dokumen_nuk/', 'B', 423, 4432, 'Swasta', '', '', 423432, 4234, 2343, 2432, 432, 43240, 432, 423, 432, 'Tidak Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 423, 423, 423, 423, 4, 23423, 4234, 423, 4234, 32, 423, 4234, 234, 23423, 4234, 324, 32432, 423, 423, '4234', 32432, '4234');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sertifikasi`
--

CREATE TABLE `tbl_sertifikasi` (
  `id` int(11) NOT NULL,
  `sertifikasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sertifikasi`
--

INSERT INTO `tbl_sertifikasi` (`id`, `sertifikasi`) VALUES
(1, 'Belum Sertifikasi'),
(2, 'Sudah Sertifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sk_pengangkatan_jabatan_fungsional_tertentu`
--

CREATE TABLE `tbl_sk_pengangkatan_jabatan_fungsional_tertentu` (
  `id` int(11) NOT NULL,
  `sk_pengangkatan_jabatan_fungsional_tertentu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sk_pengangkatan_jabatan_fungsional_tertentu`
--

INSERT INTO `tbl_sk_pengangkatan_jabatan_fungsional_tertentu` (`id`, `sk_pengangkatan_jabatan_fungsional_tertentu`) VALUES
(1, 'Guru'),
(2, 'Kepala Sekolah');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status_pegawai`
--

CREATE TABLE `tbl_status_pegawai` (
  `id` int(11) NOT NULL,
  `status_pegawai` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_status_pegawai`
--

INSERT INTO `tbl_status_pegawai` (`id`, `status_pegawai`) VALUES
(1, 'PNS'),
(2, 'GTY'),
(3, 'GTK'),
(4, 'GTT'),
(5, 'GDD');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status_perkawinan`
--

CREATE TABLE `tbl_status_perkawinan` (
  `id` int(11) NOT NULL,
  `status_perkawinan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_status_perkawinan`
--

INSERT INTO `tbl_status_perkawinan` (`id`, `status_perkawinan`) VALUES
(1, 'Sudah Menikah'),
(2, 'Belum Menikah'),
(3, 'Janda'),
(4, 'Duda');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status_sekolah`
--

CREATE TABLE `tbl_status_sekolah` (
  `id` int(11) NOT NULL,
  `status_sekolah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_status_sekolah`
--

INSERT INTO `tbl_status_sekolah` (`id`, `status_sekolah`) VALUES
(1, 'Negeri'),
(2, 'Swasta');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_toggle_edit`
--

CREATE TABLE `tbl_toggle_edit` (
  `id` int(11) NOT NULL,
  `toggle_edit` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_toggle_edit`
--

INSERT INTO `tbl_toggle_edit` (`id`, `toggle_edit`) VALUES
(1, 'true');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_uppk`
--

CREATE TABLE `tbl_uppk` (
  `id` int(11) NOT NULL,
  `uppk` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_uppk`
--

INSERT INTO `tbl_uppk` (`id`, `uppk`) VALUES
(1, 'Delta Pawan'),
(2, 'Benua Kayong'),
(3, 'Matan Hilir Utara'),
(4, 'Muara Pawan'),
(5, 'Matan Hilir Selatan'),
(6, 'Kendawangan'),
(7, 'Air Upas'),
(8, 'Jelai Hulu'),
(9, 'Marau'),
(10, 'Singkup'),
(11, 'Manis Mata'),
(12, 'Pemahan'),
(13, 'Tumbang Titi'),
(14, 'Nanga Tayap'),
(15, 'Sungai Laur'),
(16, 'Sandai'),
(17, 'Simpang Hulu'),
(18, 'Hulu Sungai'),
(19, 'Simpang Dua');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sertifikasi`
--
ALTER TABLE `sertifikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ada_tidak`
--
ALTER TABLE `tbl_ada_tidak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_akreditasi_sekolah`
--
ALTER TABLE `tbl_akreditasi_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jenis_kelamin`
--
ALTER TABLE `tbl_jenis_kelamin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jenjang_sekolah`
--
ALTER TABLE `tbl_jenjang_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jenjang_tempat_tugas`
--
ALTER TABLE `tbl_jenjang_tempat_tugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_keluarga`
--
ALTER TABLE `tbl_keluarga`
  ADD PRIMARY KEY (`id_data_keluarga`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tbl_pangkat_golongan`
--
ALTER TABLE `tbl_pangkat_golongan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`id_formulir_pegawai`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tbl_pendidikan`
--
ALTER TABLE `tbl_pendidikan`
  ADD PRIMARY KEY (`id_data_pendidikan`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tbl_pendidikan_terakhir`
--
ALTER TABLE `tbl_pendidikan_terakhir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_profile_pegawai`
--
ALTER TABLE `tbl_profile_pegawai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `tbl_sekolah`
--
ALTER TABLE `tbl_sekolah`
  ADD PRIMARY KEY (`id_data_sekolah`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tbl_sertifikasi`
--
ALTER TABLE `tbl_sertifikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sk_pengangkatan_jabatan_fungsional_tertentu`
--
ALTER TABLE `tbl_sk_pengangkatan_jabatan_fungsional_tertentu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_status_pegawai`
--
ALTER TABLE `tbl_status_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_status_perkawinan`
--
ALTER TABLE `tbl_status_perkawinan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_status_sekolah`
--
ALTER TABLE `tbl_status_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_toggle_edit`
--
ALTER TABLE `tbl_toggle_edit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_uppk`
--
ALTER TABLE `tbl_uppk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sertifikasi`
--
ALTER TABLE `sertifikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_ada_tidak`
--
ALTER TABLE `tbl_ada_tidak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_akreditasi_sekolah`
--
ALTER TABLE `tbl_akreditasi_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_jenis_kelamin`
--
ALTER TABLE `tbl_jenis_kelamin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_jenjang_sekolah`
--
ALTER TABLE `tbl_jenjang_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_jenjang_tempat_tugas`
--
ALTER TABLE `tbl_jenjang_tempat_tugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_keluarga`
--
ALTER TABLE `tbl_keluarga`
  MODIFY `id_data_keluarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `tbl_pangkat_golongan`
--
ALTER TABLE `tbl_pangkat_golongan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  MODIFY `id_formulir_pegawai` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `tbl_pendidikan`
--
ALTER TABLE `tbl_pendidikan`
  MODIFY `id_data_pendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `tbl_pendidikan_terakhir`
--
ALTER TABLE `tbl_pendidikan_terakhir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_profile_pegawai`
--
ALTER TABLE `tbl_profile_pegawai`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `tbl_sekolah`
--
ALTER TABLE `tbl_sekolah`
  MODIFY `id_data_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_sertifikasi`
--
ALTER TABLE `tbl_sertifikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_sk_pengangkatan_jabatan_fungsional_tertentu`
--
ALTER TABLE `tbl_sk_pengangkatan_jabatan_fungsional_tertentu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_status_pegawai`
--
ALTER TABLE `tbl_status_pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_status_perkawinan`
--
ALTER TABLE `tbl_status_perkawinan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_status_sekolah`
--
ALTER TABLE `tbl_status_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_toggle_edit`
--
ALTER TABLE `tbl_toggle_edit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_uppk`
--
ALTER TABLE `tbl_uppk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
