-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Apr 2021 pada 08.39
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_akhir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kader`
--

CREATE TABLE `data_kader` (
  `id_kader` int(11) NOT NULL,
  `id_posyandu` int(11) NOT NULL,
  `nama_kader` varchar(50) NOT NULL,
  `username_kader` varchar(50) NOT NULL,
  `pass_kader` varchar(30) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `level` enum('kader1','kader2','kader3','kader4','kader5') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kes_lansia`
--

CREATE TABLE `data_kes_lansia` (
  `id_kesehatan` int(11) NOT NULL,
  `id_lansia` int(11) NOT NULL,
  `tanggal_cek` date NOT NULL,
  `bb_lansia` int(11) NOT NULL,
  `tensi_sistolik` int(11) NOT NULL,
  `tensi_diastolik` int(11) NOT NULL,
  `tinggi_badan` int(11) DEFAULT NULL,
  `IMT` double DEFAULT NULL,
  `analisis_IMT` enum('kurus','normal','gemuk','obesitas') DEFAULT NULL,
  `analisis_tensi` enum('hipotensi','normal','hipertensi') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_kes_lansia`
--

INSERT INTO `data_kes_lansia` (`id_kesehatan`, `id_lansia`, `tanggal_cek`, `bb_lansia`, `tensi_sistolik`, `tensi_diastolik`, `tinggi_badan`, `IMT`, `analisis_IMT`, `analisis_tensi`) VALUES
(2, 2, '2021-04-15', 67, 110, 70, 165, 24.60973370064279, 'normal', 'normal'),
(4, 4, '2021-04-15', 60, 110, 12, 170, 20.761245674740483, 'normal', 'hipotensi'),
(45, 6, '2021-04-02', 78, 110, 90, 168, 27.63605442176871, 'gemuk', 'normal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_lansia`
--

CREATE TABLE `data_lansia` (
  `id_lansia` int(11) NOT NULL,
  `id_posyandu` int(11) NOT NULL,
  `nama_lansia` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `umur` int(11) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_lansia`
--

INSERT INTO `data_lansia` (`id_lansia`, `id_posyandu`, `nama_lansia`, `tanggal_lahir`, `umur`, `jenis_kelamin`, `alamat`) VALUES
(1, 1, 'hkhijiooko', '2021-03-31', 3, 'Laki-laki', 'y45yy'),
(2, 4, 'hsjh', '2021-04-17', 2, 'Laki-laki', '12ndjw'),
(6, 6, 'hana', '2021-04-03', 3, 'Perempuan', '12ndjw'),
(10, 40, 'hk', '2021-04-01', 3, 'Perempuan', '12ndjw');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_posyandu`
--

CREATE TABLE `data_posyandu` (
  `id_posyandu` int(11) NOT NULL,
  `nama_posyandu` varchar(50) NOT NULL,
  `nama_ketua` varchar(50) NOT NULL,
  `jumlah_kader` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_posyandu`
--

INSERT INTO `data_posyandu` (`id_posyandu`, `nama_posyandu`, `nama_ketua`, `jumlah_kader`) VALUES
(1, 'Semangka', 'Hera', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gizi`
--

CREATE TABLE `gizi` (
  `id_gizi` int(11) NOT NULL,
  `jenis` enum('makanan','vitamin') NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `status` enum('belumdiberikan','sudahdiberikan','','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gizi`
--

INSERT INTO `gizi` (`id_gizi`, `jenis`, `tanggal`, `keterangan`, `gambar`, `status`) VALUES
(2, 'makanan', '2021-04-07', 'rwr', 'hhh.jpg', 'belumdiberikan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_kegiatan`
--

CREATE TABLE `jadwal_kegiatan` (
  `id_jadwal` int(11) NOT NULL,
  `kegiatan` varchar(255) NOT NULL,
  `waktu` date NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` enum('admin','nakes','kader','') NOT NULL,
  `blokir` enum('N','Y','','') NOT NULL,
  `id_session` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `level`, `blokir`, `id_session`) VALUES
(0, 'shania', 0, 'niaa455@gmail.com', 'admin', 'N', 'd41d8cd98f00b204e9800998ecf8427e'),
(1, 'admin', 123456, 'admin@gmail.com', 'admin', '', ''),
(2, 'nakes', 123456, 'nakes@gmail.com', 'nakes', 'N', ''),
(3, 'kader', 123456, 'kader@gmail.com', 'kader', 'N', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_kader`
--
ALTER TABLE `data_kader`
  ADD PRIMARY KEY (`id_kader`),
  ADD UNIQUE KEY `id_posyandu` (`id_posyandu`);

--
-- Indeks untuk tabel `data_kes_lansia`
--
ALTER TABLE `data_kes_lansia`
  ADD PRIMARY KEY (`id_kesehatan`),
  ADD UNIQUE KEY `id_lansia` (`id_lansia`);

--
-- Indeks untuk tabel `data_lansia`
--
ALTER TABLE `data_lansia`
  ADD PRIMARY KEY (`id_lansia`),
  ADD UNIQUE KEY `id_posyandu` (`id_posyandu`);

--
-- Indeks untuk tabel `data_posyandu`
--
ALTER TABLE `data_posyandu`
  ADD PRIMARY KEY (`id_posyandu`);

--
-- Indeks untuk tabel `gizi`
--
ALTER TABLE `gizi`
  ADD PRIMARY KEY (`id_gizi`);

--
-- Indeks untuk tabel `jadwal_kegiatan`
--
ALTER TABLE `jadwal_kegiatan`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_kader`
--
ALTER TABLE `data_kader`
  MODIFY `id_kader` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_kes_lansia`
--
ALTER TABLE `data_kes_lansia`
  MODIFY `id_kesehatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `gizi`
--
ALTER TABLE `gizi`
  MODIFY `id_gizi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `jadwal_kegiatan`
--
ALTER TABLE `jadwal_kegiatan`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
