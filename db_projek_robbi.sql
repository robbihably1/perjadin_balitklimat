-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2022 at 04:25 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_projek_robbi`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_anggota_perjadin`
--

CREATE TABLE `data_anggota_perjadin` (
  `id_anggota_perjadin` int(11) NOT NULL,
  `id_perjalanan_dinas` int(11) NOT NULL,
  `nip_anggota_perjadin` varchar(18) NOT NULL,
  `no_sppd` int(11) DEFAULT NULL,
  `no_kas` int(11) DEFAULT NULL,
  `uang_harian` int(11) NOT NULL,
  `uang_transportasi` int(11) DEFAULT NULL,
  `hari1` int(11) DEFAULT NULL,
  `hari2` int(11) DEFAULT NULL,
  `hari3` int(11) DEFAULT NULL,
  `biaya1` int(11) DEFAULT NULL,
  `biaya2` int(11) DEFAULT NULL,
  `biaya3` int(11) DEFAULT NULL,
  `uang_penginapan` int(11) DEFAULT NULL,
  `total_pendapatan` int(11) NOT NULL,
  `status_perjalanan_dinas` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_anggota_perjadin`
--

INSERT INTO `data_anggota_perjadin` (`id_anggota_perjadin`, `id_perjalanan_dinas`, `nip_anggota_perjadin`, `no_sppd`, `no_kas`, `uang_harian`, `uang_transportasi`, `hari1`, `hari2`, `hari3`, `biaya1`, `biaya2`, `biaya3`, `uang_penginapan`, `total_pendapatan`, `status_perjalanan_dinas`) VALUES
(3, 14, '116058061191089', NULL, NULL, 3960000, 50000, 1, 3, 1, 200000, 300000, 100000, 1200000, 0, 'Belum Berangkat'),
(6, 14, '116058061191078', NULL, NULL, 3960000, 50000, 0, 0, 0, 0, 0, 0, 0, 0, 'Sedang Berlangsung'),
(25, 13, '116058061191076', NULL, NULL, 5400000, 500000, 0, 0, 0, 0, 0, 0, 0, 5900000, 'Sedang Berlangsung'),
(26, 13, '116058061191077', NULL, NULL, 5400000, 0, 0, 0, 0, 0, 0, 0, 0, 5400000, 'Belum Berangkat');

-- --------------------------------------------------------

--
-- Table structure for table `data_divisi`
--

CREATE TABLE `data_divisi` (
  `id_divisi` int(11) NOT NULL,
  `divisi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_divisi`
--

INSERT INTO `data_divisi` (`id_divisi`, `divisi`) VALUES
(2, 'Jasa Penelitian'),
(3, 'Penelitian Tes');

-- --------------------------------------------------------

--
-- Table structure for table `data_golongan`
--

CREATE TABLE `data_golongan` (
  `id_golongan` int(11) NOT NULL,
  `golongan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_golongan`
--

INSERT INTO `data_golongan` (`id_golongan`, `golongan`) VALUES
(1, 'II C'),
(3, 'II D'),
(4, 'III A'),
(6, 'III C'),
(7, 'III D'),
(8, 'IV A'),
(9, 'IV B'),
(10, 'IV C'),
(11, 'IV D');

-- --------------------------------------------------------

--
-- Table structure for table `data_header_surat`
--

CREATE TABLE `data_header_surat` (
  `id_header_surat` varchar(10) NOT NULL,
  `nama_kementerian` varchar(50) NOT NULL,
  `eslon_satu` varchar(50) NOT NULL,
  `eslon_dua` varchar(50) NOT NULL,
  `eslon_tiga` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_header_surat`
--

INSERT INTO `data_header_surat` (`id_header_surat`, `nama_kementerian`, `eslon_satu`, `eslon_dua`, `eslon_tiga`, `alamat`) VALUES
('h01', 'KEMENTERIAN PERTANIAN', 'BADAN PENELITIAN DAN PENGEMBANGAN PERTANIAN', 'BALAI BESAR LITBANG SUMBERDAYA LAHAN PERTANIAN', 'BALAI PENELITIAN AGROKLIMAT DAN HIDROLOGI', 'Jalan Tentara Pelajar No.1A, Kampus Penelitian Pertanian - Cimanggu Bogor 16111');

-- --------------------------------------------------------

--
-- Table structure for table `data_jabatan`
--

CREATE TABLE `data_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `jabatan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_jabatan`
--

INSERT INTO `data_jabatan` (`id_jabatan`, `jabatan`) VALUES
(1, 'Kepala Balai'),
(2, 'Plt. Kepala Balai'),
(3, 'Peneliti Ahli Utama'),
(4, 'Peneliti Ahli Madya'),
(5, 'Peneliti Ahli Muda'),
(6, 'Peneliti Ahli Pertama'),
(7, 'Analis Data dan Informasi'),
(8, 'Bendahara Penerimaan'),
(9, 'Analis Optimasi Air'),
(10, 'Teknisi Litkayasa Penyelia'),
(11, 'Bendahara Pengeluaran'),
(12, 'Analis Data dan Informasi'),
(13, 'Pejabat Pembuat Komitmen'),
(14, 'Analis Data dan Informasi'),
(15, 'Pengumpul Data'),
(16, 'Teknisi Litkayasa Pelaksana'),
(17, 'Teknisi Litkayasa Pelaksana Mahir'),
(18, 'Petugas SIMAK BMN'),
(19, 'Petugas Sarana Prasarana'),
(20, 'Pengadministrasi Umum'),
(21, 'Pengadiministrasi Kepegawaian'),
(22, 'Teknisi Gedung'),
(23, 'Petugas Operasional Kend Dinas'),
(24, 'Caraka'),
(25, 'Pekarya Kebun'),
(26, 'Peneliti Pertama'),
(27, 'Teknisi Litkayasa Terampil'),
(28, 'Kasie Jasa Penelitian'),
(29, 'Kasubbag Tata Usaha'),
(30, 'Calon Peneliti'),
(31, 'Calon Teknisi'),
(32, 'Sopir');

-- --------------------------------------------------------

--
-- Table structure for table `data_jenis_keg`
--

CREATE TABLE `data_jenis_keg` (
  `id_jenis_keg` int(11) NOT NULL,
  `jenis_keg` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_jenis_keg`
--

INSERT INTO `data_jenis_keg` (`id_jenis_keg`, `jenis_keg`) VALUES
(2, 'Kerjasama'),
(8, 'APBN');

-- --------------------------------------------------------

--
-- Table structure for table `data_kegiatan`
--

CREATE TABLE `data_kegiatan` (
  `kode_kegiatan` varchar(10) NOT NULL,
  `judul_kegiatan` varchar(50) NOT NULL,
  `id_jenis_keg` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `nip_pj_kegiatan` varchar(18) NOT NULL,
  `nip_pj_rrr` varchar(18) NOT NULL,
  `biaya_pengeluaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kegiatan`
--

INSERT INTO `data_kegiatan` (`kode_kegiatan`, `judul_kegiatan`, `id_jenis_keg`, `tahun`, `nip_pj_kegiatan`, `nip_pj_rrr`, `biaya_pengeluaran`) VALUES
('RPTP-1.1', 'Pemetaan lahan pertanian Indonesiaa', 8, 2023, '116058061191089', '116058061191089', 0),
('RPTP1', 'Pemetaan Lahan Pertanian Indonesia', 2, 2022, '116058061191076', '116058061191076', 0),
('RPTP1.2', 'Pemetaan Lahan Pertanian Indonesiaaaa', 2, 2022, '116058061191077', '116058061191076', 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_kota`
--

CREATE TABLE `data_kota` (
  `id_kota` int(11) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `id_sbuh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kota`
--

INSERT INTO `data_kota` (`id_kota`, `kota`, `id_sbuh`) VALUES
(6, 'Kota Medan', 3),
(7, 'Banda Aceh', 1),
(8, 'Kabupaten Aceh Barat', 1),
(9, 'Kota Bogor', 13),
(10, 'Kabupaten Bogor', 13),
(11, 'Kota Bandung', 13),
(12, 'Jakarta Selatan', 14),
(13, 'Jakarta Timur', 14);

-- --------------------------------------------------------

--
-- Table structure for table `data_mak`
--

CREATE TABLE `data_mak` (
  `kode_mak` varchar(15) NOT NULL,
  `judul_mak` varchar(50) NOT NULL,
  `tahun` int(11) NOT NULL,
  `banyak_anggaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_mak`
--

INSERT INTO `data_mak` (`kode_mak`, `judul_mak`, `tahun`, `banyak_anggaran`) VALUES
('1', 'Biaya perjalanan dinas dalam negeri', 2021, 13700000),
('2', 'Biaya Perjalanan Dinas Luar Negeri', 2022, 53000000);

-- --------------------------------------------------------

--
-- Table structure for table `data_pangkat`
--

CREATE TABLE `data_pangkat` (
  `id_pangkat` int(11) NOT NULL,
  `pangkat` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pangkat`
--

INSERT INTO `data_pangkat` (`id_pangkat`, `pangkat`) VALUES
(1, 'Pembina Tk I'),
(2, 'Pembina Utama'),
(3, 'Pembina Utama Muda'),
(4, 'Pembina'),
(6, 'Penata'),
(7, 'Penata Tk I'),
(8, 'Pengatur Tk I');

-- --------------------------------------------------------

--
-- Table structure for table `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `nip` varchar(18) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `id_golongan` int(11) NOT NULL,
  `id_status_peg` int(11) NOT NULL,
  `id_pangkat` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `id_divisi` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `no_whatsapp` varchar(20) NOT NULL,
  `admin` varchar(10) NOT NULL,
  `pumk` varchar(10) NOT NULL,
  `kpa` varchar(10) NOT NULL,
  `pj` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pegawai`
--

INSERT INTO `data_pegawai` (`nip`, `nama_pegawai`, `foto`, `id_golongan`, `id_status_peg`, `id_pangkat`, `id_jabatan`, `id_divisi`, `nik`, `email`, `password`, `no_whatsapp`, `admin`, `pumk`, `kpa`, `pj`) VALUES
('116058061191076', 'Robbi Hably Minassholihyn', 'fix_kolokium2.jpg', 1, 1, 1, 1, 2, '121212', 'robbihably@yahoo.com', 'hihi', '6281973034079', 'Iya', 'Iya', 'Iya', 'Iya'),
('116058061191077', 'Lugas Munayasika', 'default.png', 3, 1, 1, 11, 2, '12121211', 'robbihabli17@gmail.com', 'hihi', '6281973034079', 'Iya', 'Iya', 'Iya', 'Iya'),
('116058061191078', 'Reza Fahneri', 'default.png', 3, 2, 2, 13, 3, '12121211', 'robbihabli17@gmail.com', 'hihi', '6281973034079', 'Iya', 'Iya', 'Iya', 'Tidak'),
('116058061191079', 'Nasywa', 'default.png', 1, 1, 1, 8, 2, '12121211', 'robbihably@apps.ipb.ac.id', 'hihi', '6281973034079', 'Iya', 'Iya', 'Iya', 'Tidak'),
('116058061191089', 'Deila Saelfira', 'default.png', 1, 1, 1, 2, 3, '12121211', 'robbihably1@apps.ipb.ac.id', 'hihi', '6281973034079', 'Iya', 'Iya', 'Iya', 'Iya');

-- --------------------------------------------------------

--
-- Table structure for table `data_perjalanan_dinas`
--

CREATE TABLE `data_perjalanan_dinas` (
  `id_perjalanan_dinas` int(11) NOT NULL,
  `kode_kegiatan` varchar(10) NOT NULL,
  `dalam_rangka` varchar(100) NOT NULL,
  `nip_pumk` varchar(18) NOT NULL,
  `tanggal_pengajuan` date NOT NULL,
  `no_surat_tugas` varchar(25) NOT NULL,
  `kode_mak` varchar(15) NOT NULL,
  `jenis_pengajuan` varchar(5) NOT NULL,
  `jenis_perjalanan_dinas` varchar(15) NOT NULL,
  `id_kota_asal` int(11) NOT NULL,
  `id_kota_tujuan` int(11) NOT NULL,
  `kendaraan` varchar(20) NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `lama_perjalanan` int(11) NOT NULL,
  `nip_ppk` varchar(18) NOT NULL,
  `nip_verifikator` varchar(18) NOT NULL,
  `nip_kpa` varchar(18) NOT NULL,
  `nip_bendahara` varchar(18) NOT NULL,
  `nip_kepala_balai` varchar(18) NOT NULL,
  `nip_plt_kb` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_perjalanan_dinas`
--

INSERT INTO `data_perjalanan_dinas` (`id_perjalanan_dinas`, `kode_kegiatan`, `dalam_rangka`, `nip_pumk`, `tanggal_pengajuan`, `no_surat_tugas`, `kode_mak`, `jenis_pengajuan`, `jenis_perjalanan_dinas`, `id_kota_asal`, `id_kota_tujuan`, `kendaraan`, `tanggal_berangkat`, `tanggal_kembali`, `lama_perjalanan`, `nip_ppk`, `nip_verifikator`, `nip_kpa`, `nip_bendahara`, `nip_kepala_balai`, `nip_plt_kb`) VALUES
(13, 'RPTP1', 'Menjaga kestabilan', '116058061191076', '2022-02-24', '/SPT/KP.340/I.8/02/2022', '1', 'LS', 'Menginap', 9, 8, 'Dinas', '2022-02-25', '2022-03-11', 15, '116058061191078', '116058061191076', '116058061191078', '116058061191077', '116058061191076', '116058061191089'),
(14, 'RPTP-1.1', 'Seminar analisis lahan pertanian', '116058061191076', '2022-02-25', '/SPT/KP.340/I.8/02/2022', '1', 'LS', 'Tidak Menginap', 9, 7, 'Dinas', '2022-03-01', '2022-03-11', 11, '116058061191078', '116058061191076', '116058061191076', '116058061191077', '116058061191076', '116058061191089');

-- --------------------------------------------------------

--
-- Table structure for table `data_role`
--

CREATE TABLE `data_role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_role`
--

INSERT INTO `data_role` (`id_role`, `role`) VALUES
(1, 'Admin'),
(3, 'PUMK'),
(4, 'Bendahara ');

-- --------------------------------------------------------

--
-- Table structure for table `data_sbuh`
--

CREATE TABLE `data_sbuh` (
  `id_sbuh` int(11) NOT NULL,
  `nama_provinsi` varchar(25) NOT NULL,
  `luar_kota` int(11) NOT NULL,
  `dalam_kota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_sbuh`
--

INSERT INTO `data_sbuh` (`id_sbuh`, `nama_provinsi`, `luar_kota`, `dalam_kota`) VALUES
(1, 'Aceh', 360000, 140000),
(3, 'Sumatera Utara', 370000, 150000),
(4, 'Riau', 370000, 150000),
(5, 'Kepulauan Riau', 370000, 150000),
(6, 'Jambi', 370000, 150000),
(7, 'Sumatera Barat', 380000, 150000),
(8, 'Sumatera Selatan', 380000, 150000),
(9, 'Lampung', 380000, 150000),
(10, 'Bengkulu', 380000, 150000),
(11, 'Bangka Belitung', 410000, 160000),
(12, 'Banten', 370000, 150000),
(13, 'Jawa Barat', 430000, 170000),
(14, 'D.K.I. Jakarta', 530000, 210000),
(15, 'Jawa Tengah', 370000, 150000),
(16, 'D.I. Yogyakarta', 420000, 170000),
(17, 'Jawa Timur', 410000, 160000),
(18, 'Bali', 480000, 190000),
(19, 'Nusa Tenggara Barat', 440000, 180000),
(20, 'Nusa Tenggara Timur', 430000, 170000),
(21, 'Kalimantan Barat', 380000, 150000),
(22, 'Kalimantan Tengah', 360000, 140000),
(23, 'Kalimantan Selatan', 380000, 150000),
(24, 'Kalimantan Timur', 430000, 170000),
(25, 'Kalimantan Utara', 430000, 170000),
(26, 'Sulawesi Utara', 370000, 150000),
(27, 'Gorontalo', 370000, 150000),
(28, 'Sulawesi Barat', 410000, 160000),
(29, 'Sulawesi Selatan', 430000, 170000),
(30, 'Sulawesi Tengah', 370000, 150000),
(31, 'Sulawesi Tenggara', 380000, 150000),
(32, 'Maluku', 380000, 150000),
(33, 'Maluku Utara', 430000, 170000),
(34, 'Papua', 580000, 230000),
(35, 'Papua Barat', 480000, 190000);

-- --------------------------------------------------------

--
-- Table structure for table `status_kepegawaian`
--

CREATE TABLE `status_kepegawaian` (
  `id_status_peg` int(11) NOT NULL,
  `status_kepegawaian` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_kepegawaian`
--

INSERT INTO `status_kepegawaian` (`id_status_peg`, `status_kepegawaian`) VALUES
(1, 'PNS'),
(2, 'PNS/TB'),
(3, 'CPNS'),
(5, 'PPNPN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_anggota_perjadin`
--
ALTER TABLE `data_anggota_perjadin`
  ADD PRIMARY KEY (`id_anggota_perjadin`),
  ADD KEY `id_perjadin_ap_perjadin` (`id_perjalanan_dinas`),
  ADD KEY `nip_anggota_ap_peg` (`nip_anggota_perjadin`);

--
-- Indexes for table `data_divisi`
--
ALTER TABLE `data_divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `data_golongan`
--
ALTER TABLE `data_golongan`
  ADD PRIMARY KEY (`id_golongan`);

--
-- Indexes for table `data_header_surat`
--
ALTER TABLE `data_header_surat`
  ADD PRIMARY KEY (`id_header_surat`);

--
-- Indexes for table `data_jabatan`
--
ALTER TABLE `data_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `data_jenis_keg`
--
ALTER TABLE `data_jenis_keg`
  ADD PRIMARY KEY (`id_jenis_keg`);

--
-- Indexes for table `data_kegiatan`
--
ALTER TABLE `data_kegiatan`
  ADD PRIMARY KEY (`kode_kegiatan`),
  ADD KEY `nip_pj_keg_nip` (`nip_pj_kegiatan`),
  ADD KEY `nip_pj_rrr_nip` (`nip_pj_rrr`),
  ADD KEY `id_jenis_keg_jk_keg` (`id_jenis_keg`);

--
-- Indexes for table `data_kota`
--
ALTER TABLE `data_kota`
  ADD PRIMARY KEY (`id_kota`),
  ADD KEY `id_sbuh_kota_sbuh` (`id_sbuh`);

--
-- Indexes for table `data_mak`
--
ALTER TABLE `data_mak`
  ADD PRIMARY KEY (`kode_mak`);

--
-- Indexes for table `data_pangkat`
--
ALTER TABLE `data_pangkat`
  ADD PRIMARY KEY (`id_pangkat`);

--
-- Indexes for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `id_golongan_gol_peg` (`id_golongan`),
  ADD KEY `id_status_kepegawaian_sk_peg` (`id_status_peg`),
  ADD KEY `id_pangkat_pangkat_peg` (`id_pangkat`),
  ADD KEY `id_divisi_div_peg` (`id_divisi`),
  ADD KEY `id_jabatan_peg_jab` (`id_jabatan`);

--
-- Indexes for table `data_perjalanan_dinas`
--
ALTER TABLE `data_perjalanan_dinas`
  ADD PRIMARY KEY (`id_perjalanan_dinas`),
  ADD KEY `kode_kegiatan_dpd_dk` (`kode_kegiatan`),
  ADD KEY `nip_pumk_nip` (`nip_pumk`),
  ADD KEY `id_kota_asal_id_kota` (`id_kota_asal`),
  ADD KEY `id_kota_tujuan_id_kota` (`id_kota_tujuan`),
  ADD KEY `kode_mak_mak_peg` (`kode_mak`),
  ADD KEY `nip_kpa_dpd_peg` (`nip_kpa`),
  ADD KEY `nip_bendahara_dpd_peg` (`nip_bendahara`),
  ADD KEY `nip_kepala_balai_dpd_peg` (`nip_kepala_balai`),
  ADD KEY `nip_plt_kb_keg_peg` (`nip_plt_kb`),
  ADD KEY `nip_ppk_dpd_peg` (`nip_ppk`),
  ADD KEY `nip_verifikator_dpd_peg` (`nip_verifikator`);

--
-- Indexes for table `data_role`
--
ALTER TABLE `data_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `data_sbuh`
--
ALTER TABLE `data_sbuh`
  ADD PRIMARY KEY (`id_sbuh`);

--
-- Indexes for table `status_kepegawaian`
--
ALTER TABLE `status_kepegawaian`
  ADD PRIMARY KEY (`id_status_peg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_anggota_perjadin`
--
ALTER TABLE `data_anggota_perjadin`
  MODIFY `id_anggota_perjadin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `data_divisi`
--
ALTER TABLE `data_divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_golongan`
--
ALTER TABLE `data_golongan`
  MODIFY `id_golongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `data_jabatan`
--
ALTER TABLE `data_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `data_jenis_keg`
--
ALTER TABLE `data_jenis_keg`
  MODIFY `id_jenis_keg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `data_kota`
--
ALTER TABLE `data_kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `data_pangkat`
--
ALTER TABLE `data_pangkat`
  MODIFY `id_pangkat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `data_perjalanan_dinas`
--
ALTER TABLE `data_perjalanan_dinas`
  MODIFY `id_perjalanan_dinas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `data_role`
--
ALTER TABLE `data_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_sbuh`
--
ALTER TABLE `data_sbuh`
  MODIFY `id_sbuh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `status_kepegawaian`
--
ALTER TABLE `status_kepegawaian`
  MODIFY `id_status_peg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_kegiatan`
--
ALTER TABLE `data_kegiatan`
  ADD CONSTRAINT `id_jenis_keg_jk_keg` FOREIGN KEY (`id_jenis_keg`) REFERENCES `data_jenis_keg` (`id_jenis_keg`),
  ADD CONSTRAINT `nip_pj_keg_nip` FOREIGN KEY (`nip_pj_kegiatan`) REFERENCES `data_pegawai` (`nip`),
  ADD CONSTRAINT `nip_pj_rrr_nip` FOREIGN KEY (`nip_pj_rrr`) REFERENCES `data_pegawai` (`nip`);

--
-- Constraints for table `data_kota`
--
ALTER TABLE `data_kota`
  ADD CONSTRAINT `id_sbuh_kota_sbuh` FOREIGN KEY (`id_sbuh`) REFERENCES `data_sbuh` (`id_sbuh`);

--
-- Constraints for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD CONSTRAINT `id_divisi_div_peg` FOREIGN KEY (`id_divisi`) REFERENCES `data_divisi` (`id_divisi`),
  ADD CONSTRAINT `id_golongan_gol_peg` FOREIGN KEY (`id_golongan`) REFERENCES `data_golongan` (`id_golongan`),
  ADD CONSTRAINT `id_jabatan_peg_jab` FOREIGN KEY (`id_jabatan`) REFERENCES `data_jabatan` (`id_jabatan`),
  ADD CONSTRAINT `id_pangkat_pangkat_peg` FOREIGN KEY (`id_pangkat`) REFERENCES `data_pangkat` (`id_pangkat`),
  ADD CONSTRAINT `id_status_kepegawaian_sk_peg` FOREIGN KEY (`id_status_peg`) REFERENCES `status_kepegawaian` (`id_status_peg`);

--
-- Constraints for table `data_perjalanan_dinas`
--
ALTER TABLE `data_perjalanan_dinas`
  ADD CONSTRAINT `id_kota_asal_id_kota` FOREIGN KEY (`id_kota_asal`) REFERENCES `data_kota` (`id_kota`),
  ADD CONSTRAINT `id_kota_tujuan_id_kota` FOREIGN KEY (`id_kota_tujuan`) REFERENCES `data_kota` (`id_kota`),
  ADD CONSTRAINT `kode_kegiatan_dpd_dk` FOREIGN KEY (`kode_kegiatan`) REFERENCES `data_kegiatan` (`kode_kegiatan`),
  ADD CONSTRAINT `kode_mak_mak_peg` FOREIGN KEY (`kode_mak`) REFERENCES `data_mak` (`kode_mak`),
  ADD CONSTRAINT `nip_bendahara_dpd_peg` FOREIGN KEY (`nip_bendahara`) REFERENCES `data_pegawai` (`nip`),
  ADD CONSTRAINT `nip_kepala_balai_dpd_peg` FOREIGN KEY (`nip_kepala_balai`) REFERENCES `data_pegawai` (`nip`),
  ADD CONSTRAINT `nip_kpa_dpd_peg` FOREIGN KEY (`nip_kpa`) REFERENCES `data_pegawai` (`nip`),
  ADD CONSTRAINT `nip_plt_kb_keg_peg` FOREIGN KEY (`nip_plt_kb`) REFERENCES `data_pegawai` (`nip`),
  ADD CONSTRAINT `nip_ppk_dpd_peg` FOREIGN KEY (`nip_ppk`) REFERENCES `data_pegawai` (`nip`),
  ADD CONSTRAINT `nip_pumk_nip` FOREIGN KEY (`nip_pumk`) REFERENCES `data_pegawai` (`nip`),
  ADD CONSTRAINT `nip_verifikator_dpd_peg` FOREIGN KEY (`nip_verifikator`) REFERENCES `data_pegawai` (`nip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
