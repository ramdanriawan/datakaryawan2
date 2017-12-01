-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2017 at 01:49 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

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
  `foto_ktp_suami_istri` varchar(30) NOT NULL,
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
(3, 'ulala uwaw mau', 'sdfsdfs', 'ASFSF', 'Janda', 'http://localhost/project/datak', 'http://localhost/project/datakaryawan/foto_kartu_keluarga/records.png', '4324324', '324', '32432', '4324', '432432', '432', '4324', '234324', '32432', '432432', '432432', '432432', '34324', '432432', '4324324', 'Rp.4.324.324,-', '4324324', '432432', '4324234', '4324324', '4324324', 234324);

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
(2, 'user', 'user', 'user', 'user'),
(5, 'ramdan 6', 'Mohammad 3', '212', 'user3'),
(10, 'sdfsdfs', 'ulala uwaw mau', '123', '');

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
  `dokumen_sertifikat_diklat` varchar(500) NOT NULL,
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
  `no_hp` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`id_formulir_pegawai`, `username`, `nama`, `nip`, `pangkat_golongan`, `tmt_golongan`, `sk_pengangkatan_awal`, `tmt_pengangkatan_awal`, `mengampu_mata_pelajaran`, `jumlah_jam_mengajar`, `pejabat_yang_mengangkat`, `no_sk_cpns`, `tmt_sk_cpns`, `no_sk_pns`, `tmt_sk_pns`, `no_sk_pangkat_terakhir`, `tmt_sk_pangkat_terakhir`, `no_nuptk`, `no_karpeg`, `jabatan`, `unit_kerja`, `sk_pengangkatan_jabatan_fungsional_tertentu`, `dokumen_sertifikat_diklat`, `tmt_jabatan`, `masa_kerja_terakhir`, `masa_kerja_pengangkatan`, `tahun_pensiun`, `gaji_terakhir`, `sertifikasi`, `no_sertifikasi`, `tahun_sertifikasi`, `berkala_terakhir`, `no_berkala_terakhir`, `tanggal_berkala_berikutnya`, `no_berkala_berikutnya`, `no_hp`) VALUES
(5, 'ulala uwaw mau', 'sdfsdfs', 0, 'Pengatur Muda, II/a', '11-November-2017', 'sfsdf', '22-November-2017', 'sdfsdf', '24', 'asdsf', 'adasd', '16-November-2017', 'adasd', '17-November-2017', 'sdfsdf', '23-November-2017', 'fdsfds', 'fdsfds', 'Guru Kelas', 'jlkjl', 'Kepala Sekolah', 'http://localhost/project/datakaryawan/dokumen_sertifikat_diklat/records.png', '25-November-2017', '8 Tahun 1 Bulan', '15-May-2020', '2077', 'Rp.0,-', 'Belum Sertifikasi', 'fdsfdsf', 'dsfdsf', 'dsfdsf', 'dsfdsf', 'fdsfds', 'fdsfd', 234324);

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
  `foto_ijazah_terakhir` text NOT NULL,
  `universitas` varchar(50) NOT NULL,
  `fakultas` varchar(40) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `tahun_lulus` varchar(30) NOT NULL,
  `riwayat_pendidikan_sd` varchar(50) NOT NULL,
  `no_ijazah_sd` varchar(50) NOT NULL,
  `foto_ijazah_sd` text NOT NULL,
  `riwayat_pendidikan_smp` varchar(50) NOT NULL,
  `no_ijazah_smp` varchar(40) NOT NULL,
  `foto_ijazah_smp` text NOT NULL,
  `riwayat_pendidikan_sma` varchar(50) NOT NULL,
  `no_ijazah_sma` varchar(50) NOT NULL,
  `foto_ijazah_sma` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pendidikan`
--

INSERT INTO `tbl_pendidikan` (`id_data_pendidikan`, `username`, `nama`, `nip`, `pendidikan_terakhir`, `no_ijazah_terakhir`, `foto_ijazah_terakhir`, `universitas`, `fakultas`, `jurusan`, `tahun_lulus`, `riwayat_pendidikan_sd`, `no_ijazah_sd`, `foto_ijazah_sd`, `riwayat_pendidikan_smp`, `no_ijazah_smp`, `foto_ijazah_smp`, `riwayat_pendidikan_sma`, `no_ijazah_sma`, `foto_ijazah_sma`) VALUES
(3, 'ulala uwaw mau', 'sdfsdfs', 'ASFSF', 'DIII', 'fdfged', 'http://localhost/project/datakaryawan/foto_ijazah_terakhir/records.png', 'sfsdf', 'sdfsd', 'fsdfdsf', '423432', '234324', '432423', 'http://localhost/project/datakaryawan/foto_ijazah_sd/records.png', '324324', '432432', 'http://localhost/project/datakaryawan/foto_ijazah_smp/records.png', '4324', '324324', 'http://localhost/project/datakaryawan/foto_ijazah_sma/records.png');

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
  `nik` int(20) NOT NULL,
  `npwp` int(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `status_pegawai` varchar(50) NOT NULL,
  `jenjang_tempat_tugas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_profile_pegawai`
--

INSERT INTO `tbl_profile_pegawai` (`id`, `kode`, `username`, `password`, `nama`, `nip`, `tempat_lahir`, `tanggal_lahir`, `nik`, `npwp`, `jenis_kelamin`, `status_pegawai`, `jenjang_tempat_tugas`) VALUES
(6, '', 'ulala uwaw mau', '123', 'sdfsdfs', 'ASFSF', 'SDFSF', '11-November-2017', 42342, 0, 'Laki - Lak', 'PNS', 'PAUD');

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
(1, 'ulala uwaw mau', 'sdfsdfs', 'ASFSF', 'jlkjl', 'TK', 'lilkj', 'Sandai', 'lkujlk', '324324', '24-November-2017', 'se4324', 'Perempuan', 'Pengatur Muda Tk.1, II/b', 'DIV', 'sdfsf', 'sdfsdf', 'sdf', 'sdfsd', 'fsdf', 'dsfsdf', '432432', 'http://localhost/project/datakaryawan/foto_dokumen_nuk/records.png', 'B', 0, 0, 'Negeri', 'http://localhost/project/datakaryawan/foto_sekolah/records.png', 'http://localhost/project/datakaryawan/foto_dokumen_kegiatan_sekolah/records.png', 324324, 4324324, 43243, 4324324, 32423, 4324324, 4324, 2344, 432432, 'Tidak Ada', 'Ada', 'Ada', 'Ada', 'Tidak Ada', 'Ada', 'Ada', 'Tidak Ada', 324, 2344, 2344, 432324, 3244, 432432, 432432, 43242, 3244, 343242, 42343, 324, 32432, 432432, 432432, 432423, 432432, 4324, 324324, '324324', 43243, '24324');

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
  ADD UNIQUE KEY `username` (`username`);

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
  MODIFY `id_data_keluarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_pangkat_golongan`
--
ALTER TABLE `tbl_pangkat_golongan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  MODIFY `id_formulir_pegawai` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_pendidikan`
--
ALTER TABLE `tbl_pendidikan`
  MODIFY `id_data_pendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_pendidikan_terakhir`
--
ALTER TABLE `tbl_pendidikan_terakhir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_profile_pegawai`
--
ALTER TABLE `tbl_profile_pegawai`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_sekolah`
--
ALTER TABLE `tbl_sekolah`
  MODIFY `id_data_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
