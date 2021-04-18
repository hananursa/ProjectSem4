-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2021 at 07:40 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `data_kader`
--

CREATE TABLE `data_kader` (
  `id_kader` int(11) NOT NULL,
  `id_posyandu` int(11) NOT NULL,
  `nama_kader` varchar(50) NOT NULL,
  `username_kader` varchar(50) NOT NULL,
  `pass_kader` varchar(30) NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_kader`
--

INSERT INTO `data_kader` (`id_kader`, `id_posyandu`, `nama_kader`, `username_kader`, `pass_kader`, `no_hp`) VALUES
(1, 1, 'adad', 'andry', '123', '1111111111'),
(2, 2, 'wdawwd', 'udin', '123', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `data_kes_lansia`
--

CREATE TABLE `data_kes_lansia` (
  `id_kesehatan` int(11) NOT NULL,
  `id_posyandu` int(11) NOT NULL,
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
-- Dumping data for table `data_kes_lansia`
--

INSERT INTO `data_kes_lansia` (`id_kesehatan`, `id_posyandu`, `id_lansia`, `tanggal_cek`, `bb_lansia`, `tensi_sistolik`, `tensi_diastolik`, `tinggi_badan`, `IMT`, `analisis_IMT`, `analisis_tensi`) VALUES
(1, 1, 1, '2021-04-11', 12, 12, 12, 12, 12, 'kurus', 'hipotensi'),
(2, 2, 2, '2021-04-11', 12, 12, 12, 12, 12, 'kurus', 'hipotensi');

-- --------------------------------------------------------

--
-- Table structure for table `data_lansia`
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
-- Dumping data for table `data_lansia`
--

INSERT INTO `data_lansia` (`id_lansia`, `id_posyandu`, `nama_lansia`, `tanggal_lahir`, `umur`, `jenis_kelamin`, `alamat`) VALUES
(1, 1, 'wdawdwdad', '2021-04-17', 11, 'Laki-laki', 'wdawd'),
(2, 2, 'awdawd', '2021-04-13', 11, 'Laki-laki', 'wadawdaw');

-- --------------------------------------------------------

--
-- Table structure for table `data_posyandu`
--

CREATE TABLE `data_posyandu` (
  `id_posyandu` int(11) NOT NULL,
  `nama_posyandu` varchar(50) NOT NULL,
  `nama_ketua` varchar(50) NOT NULL,
  `jumlah_kader` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_posyandu`
--

INSERT INTO `data_posyandu` (`id_posyandu`, `nama_posyandu`, `nama_ketua`, `jumlah_kader`) VALUES
(1, 'melati', 'aaaa', 2),
(2, 'mawar', 'wadawda', 2);

-- --------------------------------------------------------

--
-- Table structure for table `gizi`
--

CREATE TABLE `gizi` (
  `id_gizi` int(11) NOT NULL,
  `id_posyandu` int(11) NOT NULL,
  `jenis` enum('makanan','vitamin') NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `status` enum('belumdiberikan','sudahdiberikan','','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gizi`
--

INSERT INTO `gizi` (`id_gizi`, `id_posyandu`, `jenis`, `tanggal`, `keterangan`, `gambar`, `status`) VALUES
(1, 2, 'makanan', '2021-04-14', 'wadwdaw', 'wawdaw', 'belumdiberikan'),
(2, 1, 'vitamin', '2021-04-07', 'adawda', 'wadawd', 'sudahdiberikan');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_kegiatan`
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
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `level`, `blokir`, `id_session`) VALUES
(1, 'admin', 123456, 'admin@gmail.com', 'admin', '', ''),
(2, 'nakes', 123456, 'nakes@gmail.com', 'nakes', 'N', ''),
(3, 'kader', 123456, 'kader@gmail.com', 'kader', 'N', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_kader`
--
ALTER TABLE `data_kader`
  ADD PRIMARY KEY (`id_kader`),
  ADD KEY `id_posyandu` (`id_posyandu`);

--
-- Indexes for table `data_kes_lansia`
--
ALTER TABLE `data_kes_lansia`
  ADD PRIMARY KEY (`id_kesehatan`),
  ADD KEY `id_posyandu` (`id_posyandu`),
  ADD KEY `id_lansia` (`id_lansia`);

--
-- Indexes for table `data_lansia`
--
ALTER TABLE `data_lansia`
  ADD PRIMARY KEY (`id_lansia`),
  ADD KEY `id_posyandu` (`id_posyandu`);

--
-- Indexes for table `data_posyandu`
--
ALTER TABLE `data_posyandu`
  ADD PRIMARY KEY (`id_posyandu`);

--
-- Indexes for table `gizi`
--
ALTER TABLE `gizi`
  ADD PRIMARY KEY (`id_gizi`),
  ADD KEY `id_posyandu` (`id_posyandu`);

--
-- Indexes for table `jadwal_kegiatan`
--
ALTER TABLE `jadwal_kegiatan`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_kader`
--
ALTER TABLE `data_kader`
  MODIFY `id_kader` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_kes_lansia`
--
ALTER TABLE `data_kes_lansia`
  MODIFY `id_kesehatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gizi`
--
ALTER TABLE `gizi`
  MODIFY `id_gizi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jadwal_kegiatan`
--
ALTER TABLE `jadwal_kegiatan`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_kader`
--
ALTER TABLE `data_kader`
  ADD CONSTRAINT `data_kader_ibfk_1` FOREIGN KEY (`id_posyandu`) REFERENCES `data_posyandu` (`id_posyandu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_kes_lansia`
--
ALTER TABLE `data_kes_lansia`
  ADD CONSTRAINT `data_kes_lansia_ibfk_1` FOREIGN KEY (`id_posyandu`) REFERENCES `data_posyandu` (`id_posyandu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_kes_lansia_ibfk_2` FOREIGN KEY (`id_lansia`) REFERENCES `data_lansia` (`id_lansia`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_lansia`
--
ALTER TABLE `data_lansia`
  ADD CONSTRAINT `data_lansia_ibfk_1` FOREIGN KEY (`id_posyandu`) REFERENCES `data_posyandu` (`id_posyandu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gizi`
--
ALTER TABLE `gizi`
  ADD CONSTRAINT `gizi_ibfk_1` FOREIGN KEY (`id_posyandu`) REFERENCES `data_posyandu` (`id_posyandu`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
