-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Nov 2020 pada 16.13
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuaproyek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar_user`
--

CREATE TABLE `komentar_user` (
  `id_user` int(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `kritik_saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar_user`
--

INSERT INTO `komentar_user` (`id_user`, `email`, `kritik_saran`) VALUES
(1, 'nita@gmail.com', ''),
(2, 'nita@gmail.com', 'ayokkk semangat gaesss'),
(3, 'nita@gmail.com', 'yokkkk semangatt yokkkkkkk'),
(4, 'nita@gmail.com', 'yokkkkkkkkkk ayokk'),
(5, 'nita@gmail.com', 'yokkkk semangatt yokkkkkkk'),
(6, 'nita@gmail.com', 'ayokkk semangat gaesss'),
(7, 'nita@gmail.com', 'ayokkk semangat gaesss'),
(8, 'dela@gmail.com', 'ayok piyee sido e'),
(9, 'dela@gmail.com', 'delamontin'),
(10, 'a@a.a', 'yuhuuuu'),
(11, 'liameliyana@gmail.com', 'semangat'),
(12, 'agungdwiprastomo190@gmail.com', 'bismillah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_admin`
--

CREATE TABLE `login_admin` (
  `id_admin` int(10) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login_admin`
--

INSERT INTO `login_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'arfia', '12345'),
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int(11) NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `akad` varchar(30) NOT NULL,
  `tanggal_akad` date NOT NULL,
  `alamat_akad` varchar(100) NOT NULL,
  `nama_suami` varchar(100) NOT NULL,
  `nik_suami` int(16) NOT NULL,
  `tempat_lahir_suami` varchar(50) NOT NULL,
  `tanggal_lahir_suami` date NOT NULL,
  `alamat_suami` varchar(100) NOT NULL,
  `kewarganegaraan_suami` varchar(50) NOT NULL,
  `agama_suami` varchar(10) NOT NULL,
  `status_suami` varchar(30) NOT NULL,
  `email_suami` varchar(50) NOT NULL,
  `no_telp_suami` char(20) NOT NULL,
  `pekerjaan_suami` varchar(50) NOT NULL,
  `gambar_suami` varchar(100) NOT NULL,
  `nama_istri` varchar(100) NOT NULL,
  `nik_istri` int(16) NOT NULL,
  `tempat_lahir_istri` varchar(50) NOT NULL,
  `tanggal_lahir_istri` date NOT NULL,
  `alamat_istri` varchar(100) NOT NULL,
  `kewarganegaraan_istri` varchar(50) NOT NULL,
  `agama_istri` char(10) NOT NULL,
  `status_istri` varchar(30) NOT NULL,
  `email_istri` varchar(50) NOT NULL,
  `no_telp_istri` char(20) NOT NULL,
  `pekerjaan_istri` varchar(50) NOT NULL,
  `gambar_istri` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `tanggal_daftar`, `kecamatan`, `akad`, `tanggal_akad`, `alamat_akad`, `nama_suami`, `nik_suami`, `tempat_lahir_suami`, `tanggal_lahir_suami`, `alamat_suami`, `kewarganegaraan_suami`, `agama_suami`, `status_suami`, `email_suami`, `no_telp_suami`, `pekerjaan_suami`, `gambar_suami`, `nama_istri`, `nik_istri`, `tempat_lahir_istri`, `tanggal_lahir_istri`, `alamat_istri`, `kewarganegaraan_istri`, `agama_istri`, `status_istri`, `email_istri`, `no_telp_istri`, `pekerjaan_istri`, `gambar_istri`) VALUES
(3, '2020-11-14', 'Jombang', 'Di KUA', '2020-11-30', 'jombang', 'Haryono', 2147483647, 'Surabaya', '1990-12-29', 'gudo', 'WNI', 'Islam', 'Jejaka', 'halo@gmail.com', '085677888123', 'Pengusaha', '', 'Susi', 2147483647, 'Jombang', '1995-08-05', 'jombang', 'WNI', 'Islam', 'Perawan', 'oke@gmail.com', '087652341098', 'Karyawan Swasta', ''),
(4, '0000-00-00', 'Pilih', 'Pilih', '0000-00-00', '', '', 0, '', '0000-00-00', '', 'Pilih', 'Pilih', 'Pilih', '', '', 'Pilih', '', '', 0, '', '0000-00-00', '', 'Pilih', 'Pilih', 'Pilih', '', '', 'Pilih', ''),
(5, '2020-11-13', 'Mojowarno', 'Di Rumah', '2020-11-25', 'wdsf', 'dfhtr', 4235, 'gerq', '2020-11-10', 'argerh', 'WNI', 'Budha', 'Cerai Hidup', 'dgzsa@gmail.com', '141255', 'Atlet', 'IMG_20180908_171058.jpg', 'hvh', 8764, 'DGSARH', '2020-11-24', 'bukf', 'WNI', 'Budha', 'Cerai Hidup', 'AGEAHTH@Gmail.com', '67557', 'Pengusaha', 'IMG_20180908_171219.jpg'),
(6, '2020-11-13', 'Mojowarno', 'Di Rumah', '2020-11-25', 'wdsf', 'dfhtr', 4235, 'gerq', '2020-11-10', 'argerh', 'WNI', 'Budha', 'Cerai Hidup', 'dgzsa@gmail.com', '141255', 'Atlet', 'IMG_20180908_171058.jpg', 'hvh', 8764, 'DGSARH', '2020-11-24', 'bukf', 'WNI', 'Budha', 'Cerai Hidup', 'AGEAHTH@Gmail.com', '67557', 'Pengusaha', 'IMG_20180908_171219.jpg'),
(7, '2020-11-13', 'Mojowarno', 'Di Rumah', '2020-11-25', 'wdsf', 'dfhtr', 4235, 'gerq', '2020-11-10', 'argerh', 'WNI', 'Budha', 'Cerai Hidup', 'dgzsa@gmail.com', '141255', 'Atlet', 'IMG_20180908_171058.jpg', 'hvh', 8764, 'DGSARH', '2020-11-24', 'bukf', 'WNI', 'Budha', 'Cerai Hidup', 'AGEAHTH@Gmail.com', '67557', 'Pengusaha', 'IMG_20180908_171219.jpg'),
(8, '2020-11-13', 'Mojowarno', 'Di Rumah', '2020-11-25', 'wdsf', 'dfhtr', 4235, 'gerq', '2020-11-10', 'argerh', 'WNI', 'Budha', 'Cerai Hidup', 'dgzsa@gmail.com', '141255', 'Atlet', 'IMG_20180908_171058.jpg', 'hvh', 8764, 'DGSARH', '2020-11-24', 'bukf', 'WNI', 'Budha', 'Cerai Hidup', 'AGEAHTH@Gmail.com', '67557', 'Pengusaha', 'IMG_20180908_171219.jpg'),
(9, '2020-11-13', 'Mojowarno', 'Di Rumah', '2020-11-25', 'wdsf', 'dfhtr', 4235, 'gerq', '2020-11-10', 'argerh', 'WNI', 'Budha', 'Cerai Hidup', 'dgzsa@gmail.com', '141255', 'Atlet', 'IMG_20180908_171058.jpg', 'hvh', 8764, 'DGSARH', '2020-11-24', 'bukf', 'WNI', 'Budha', 'Cerai Hidup', 'AGEAHTH@Gmail.com', '67557', 'Pengusaha', 'IMG_20180908_171219.jpg'),
(10, '2020-11-13', 'Mojowarno', 'Di Rumah', '2020-11-25', 'wdsf', 'dfhtr', 4235, 'gerq', '2020-11-10', 'argerh', 'WNI', 'Budha', 'Cerai Hidup', 'dgzsa@gmail.com', '141255', 'Atlet', 'IMG_20180908_171058.jpg', 'hvh', 8764, 'DGSARH', '2020-11-24', 'bukf', 'WNI', 'Budha', 'Cerai Hidup', 'AGEAHTH@Gmail.com', '67557', 'Pengusaha', 'IMG_20180908_171219.jpg'),
(11, '2020-11-13', 'Mojowarno', 'Di Rumah', '2020-11-25', 'wdsf', 'dfhtr', 4235, 'gerq', '2020-11-10', 'argerh', 'WNI', 'Budha', 'Cerai Hidup', 'dgzsa@gmail.com', '141255', 'Atlet', 'IMG_20180908_171058.jpg', 'hvh', 8764, 'DGSARH', '2020-11-24', 'bukf', 'WNI', 'Budha', 'Cerai Hidup', 'AGEAHTH@Gmail.com', '67557', 'Pengusaha', 'IMG_20180908_171219.jpg'),
(12, '2020-11-13', 'Mojowarno', 'Di Rumah', '2020-11-25', 'wdsf', 'dfhtr', 4235, 'gerq', '2020-11-10', 'argerh', 'WNI', 'Budha', 'Cerai Hidup', 'dgzsa@gmail.com', '141255', 'Atlet', 'IMG_20180908_171058.jpg', 'hvh', 8764, 'DGSARH', '2020-11-24', 'bukf', 'WNI', 'Budha', 'Cerai Hidup', 'AGEAHTH@Gmail.com', '67557', 'Pilih', 'IMG_20180908_171219.jpg'),
(13, '2020-11-28', 'Mojowarno', 'Di Rumah', '2020-11-01', 'malang', 'lail', 123456789, 'fsawh', '2020-12-01', 'sfggfsdafg', 'WNI', 'Budha', 'Cerai Hidup', 'dgzsa@gmail.com', '141255', 'Pegawai Negri Sipil', 'IMG_20180908_171138.jpg', 'qRTW', 25524425, 'DGSARH', '2020-11-19', 'daerghgfd', 'WNI', 'Islam', 'Perawan', 'AGEAHTH@Gmail.com', '1243156', 'Tidak Bekerja', 'IMG_20180908_171036.jpg'),
(14, '2020-11-28', 'Mojowarno', 'Di Rumah', '2020-11-01', 'malang', 'lail', 123456789, 'fsawh', '2020-12-01', 'sfggfsdafg', 'WNI', 'Budha', 'Cerai Hidup', 'dgzsa@gmail.com', '141255', 'Pegawai Negri Sipil', '3x4.jpg', 'qRTW', 25524425, 'DGSARH', '2020-11-19', 'daerghgfd', 'WNI', 'Islam', 'Perawan', 'AGEAHTH@Gmail.com', '1243156', 'Tidak Bekerja', '3x4.jpg'),
(15, '2020-11-30', 'Mojowarno', 'Di Rumah', '2020-11-01', 'malang', 'wkkw', 123456789, 'fsawh', '2020-12-01', 'sfggfsdafg', 'WNI', 'Budha', 'Cerai Hidup', 'dgzsa@gmail.com', '141255', 'Pegawai Negri Sipil', '3x4.jpg', 'qRTW', 25524425, 'DGSARH', '2020-11-19', 'daerghgfd', 'WNI', 'Islam', 'Perawan', 'AGEAHTH@Gmail.com', '1243156', 'Tidak Bekerja', '3x4.jpg'),
(16, '2020-11-28', 'Mojowarno', 'Di Rumah', '2020-11-01', 'malang', 'Agung Dwi Prastomo', 123456789, 'fsawh', '2020-12-01', 'sfggfsdafg', 'WNI', 'Budha', 'Cerai Hidup', 'dgzsa@gmail.com', '141255', 'Pegawai Negri Sipil', '3x4.jpg', 'qRTW', 25524425, 'DGSARH', '2020-11-19', 'daerghgfd', 'WNI', 'Islam', 'Perawan', 'AGEAHTH@Gmail.com', '1243156', 'Tidak Bekerja', 'download.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_registrasi` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirm_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `komentar_user`
--
ALTER TABLE `komentar_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_registrasi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `komentar_user`
--
ALTER TABLE `komentar_user`
  MODIFY `id_user` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_registrasi` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
