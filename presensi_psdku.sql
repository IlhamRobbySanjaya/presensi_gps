-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2022 at 09:05 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `presensi_psdku`
--

-- --------------------------------------------------------

--
-- Table structure for table `bagian`
--

CREATE TABLE `bagian` (
  `id_bagian` smallint(3) NOT NULL,
  `bagian` varchar(5) NOT NULL,
  `masuk` time NOT NULL,
  `istirahat_keluar` time NOT NULL,
  `istirahat_masuk` time NOT NULL,
  `pulang` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bagian`
--

INSERT INTO `bagian` (`id_bagian`, `bagian`, `masuk`, `istirahat_keluar`, `istirahat_masuk`, `pulang`) VALUES
(1, 'WFH', '08:00:00', '12:00:00', '13:00:00', '16:00:00'),
(2, 'WFO', '09:00:00', '00:00:00', '00:00:00', '13:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE `cuti` (
  `id` int(11) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `keterangan` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`id`, `nip`, `nama`, `jabatan`, `tgl_mulai`, `tgl_selesai`, `keterangan`, `status`) VALUES
(1, 'E41180650', 'Ilham Robby Sanjaya', 'Dosen', '2021-10-31', '2021-11-03', 'jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `detail_absensi`
--

CREATE TABLE `detail_absensi` (
  `id_absen` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status_kerja` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `keterangan` text NOT NULL,
  `nip` varchar(25) NOT NULL,
  `lat_long` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_absensi`
--

INSERT INTO `detail_absensi` (`id_absen`, `nama`, `status_kerja`, `tanggal`, `waktu`, `keterangan`, `nip`, `lat_long`) VALUES
(238, 'Ilham Robby Sanjaya', 'WFH', '2021-12-02', '08:46:07', 'Masuk', 'E41180650', '-7.257472, 112.752088'),
(239, 'Ilham Robby Sanjaya', 'WFH', '2021-12-02', '09:14:32', 'Masuk', 'E41180650', '-7.1406854,112.4308563'),
(240, 'Ilham Robby Sanjaya', 'WFH', '2021-12-02', '09:15:57', 'Masuk', 'E41180650', '-7.462259,112.7016578'),
(241, 'July aprilio', 'WFH', '2021-12-02', '09:47:20', 'Masuk', 'E41180765', '-7.257472, 112.752088'),
(243, 'Bima Bagaskara', 'WFH', '2021-12-03', '00:13:33', 'Masuk', 'E41180677', '-7.257472, 112.752076'),
(246, 'Ilham Robby Sanjaya', 'WFH', '2021-12-07', '13:03:24', 'Istirahat_keluar', 'E41180650', '-7.257472, 112.758876'),
(251, 'Ilham Robby Sanjaya', 'WFH', '2021-12-07', '13:23:20', 'Istirahat_masuk', 'E41180650', '-7.4029026,112.5600453'),
(252, 'Ilham Robby Sanjaya', 'WFH', '2021-12-07', '18:31:07', 'Pulang', 'E41180650', '-7.4472392,112.6718017'),
(254, 'luluk', 'WFH', '2022-01-07', '19:46:43', 'Pulang', 'E41180808', '-7.4472392,112.672345'),
(255, 'Ilham Robby Sanjaya', 'WFH', '2022-02-02', '13:49:12', 'Istirahat_masuk', 'E41180650', '-7.4472392,112.6718017'),
(256, 'Bima Bagaskara', 'WFH', '2022-02-02', '13:51:59', 'Istirahat_masuk', 'E41180677', '-7.4472392,112.6718017'),
(257, 'Ilham Robby Sanjaya', 'WFH', '2022-09-20', '09:27:52', 'Masuk', 'E41180650', '-7.4472392,112.6718017'),
(258, 'Ilham Robby Sanjaya', 'WFH', '2022-10-13', '10:28:03', 'Masuk', 'E41180650', '-7.4472392,112.6718017');

-- --------------------------------------------------------

--
-- Table structure for table `detail_user`
--

CREATE TABLE `detail_user` (
  `id` int(11) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `bagian` smallint(3) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `foto` varchar(255) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_user`
--

INSERT INTO `detail_user` (`id`, `nip`, `nama`, `jabatan`, `bagian`, `alamat`, `no_telp`, `foto`) VALUES
(2, '999999', 'ilham', 'ilham', 1, 'ilham', '09876', 'default.jpg'),
(3, '4999', 'joyo', 'joyo', 1, 'yooo', '0986', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int(11) NOT NULL,
  `jabatan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jam`
--

CREATE TABLE `jam` (
  `id_jam` tinyint(1) NOT NULL,
  `mulai` time NOT NULL,
  `selesai` time NOT NULL,
  `keterangan` enum('Masuk','Istirahat Keluar','Istirahat Masuk','Pulang') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jam`
--

INSERT INTO `jam` (`id_jam`, `mulai`, `selesai`, `keterangan`) VALUES
(1, '08:00:00', '09:00:00', 'Masuk'),
(2, '12:00:00', '12:30:00', 'Istirahat Keluar'),
(3, '13:00:00', '13:30:00', 'Istirahat Masuk'),
(4, '16:00:00', '16:30:00', 'Pulang');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `role` enum('admin','pegawai') NOT NULL DEFAULT 'pegawai',
  `password` varchar(255) NOT NULL,
  `created_at` varchar(11) NOT NULL,
  `foto` text NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `nip`, `jabatan`, `email`, `no_telp`, `alamat`, `role`, `password`, `created_at`, `foto`, `is_active`) VALUES
(1, 'Adminisitrator', 'admin', 'Admin', 'admin@admin.com', '025123456789', '0', 'admin', '$2y$10$wMgi9s3FEDEPEU6dEmbp8eAAEBUXIXUy3np3ND2Oih.MOY.q/Kpoy', '1568689561', 'd5f22535b639d55be7d099a7315e1f7f.png', 1),
(21, 'Ilham Robby Sanjaya', 'E41180650', 'pengarang', 'ilhamsanjayarobby@gmail.com', '085604825355', 'lamongan', 'pegawai', '$2y$10$Ohc7sdAnca6maqaCWA7tpevdSNR9UUDCZQejY5osUpkzJAlZyVEVK', '1631519842', 'cffb64ad6a34eaafc50cfff9bf51d1a4.png', 1),
(35, 'Bima Bagaskara', 'E41180677', 'Penyair', 'bima.kenong@gmail.com', '087654567654', 'Banyuwangi', 'pegawai', '$2y$10$ohUNG93YsAJv9/79w2z27ettM8gkGjT0LxfoysvzpgzAIHNnLVvRS', '1636326389', 'user.png', 1),
(36, 'July aprilio', 'E41180765', 'Pembangkit listrik', 'july@gmail.com', '098765432112', 'sidoarjo', 'pegawai', '$2y$10$B.ughi8a3JyfBXyzGrzui.jbhDYl1BM8fp7ZZRi5akYerAzwGHTKG', '1636326482', 'user.png', 1),
(37, 'Bomo bogoskoro', 'E41172920', 'Politik Etis', 'bomo@gmail.com', '085604825355', 'Puncak wangi', 'pegawai', '$2y$10$VW4GRxng1vJ.wyCpna2NFefcg6f8mScxUBTcFuYgUSUfmerPkKsy2', '1636326556', 'user.png', 0),
(38, 'kipli', 'E41189760', 'pengarang', 'kipli@gmail.com', '098765432112', 'banjarbendo', 'pegawai', '$2y$10$Rpsw4ztCk/kMN8eoaMO8qOIpstObets.tEz5ESvyVXwndwJGx6RLi', '1636333795', 'user.png', 0),
(39, 'ww', '234411', 'dosen', 'ww@gmail.com', '087654345678', 'sidoarjo', 'pegawai', '$2y$10$YWALAR3fqAM4CCRVQCyTy.pvV2tkADjkR6w8cX8rUKATXTx/Jz12W', '1636385870', 'user.png', 1),
(40, 'luluk', 'E41180808', 'Dosen', 'luluk@gmail.com', '087654345678', 'jl.pegangsangan', 'pegawai', '$2y$10$XM79PMDoImCpxYgBr67jfeFvmpHijDa2yHJeJdAuzDlTGAKILFZHy', '1641557572', 'user.png', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bagian`
--
ALTER TABLE `bagian`
  ADD PRIMARY KEY (`id_bagian`);

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_absensi`
--
ALTER TABLE `detail_absensi`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indexes for table `detail_user`
--
ALTER TABLE `detail_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bagian` (`bagian`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jam`
--
ALTER TABLE `jam`
  ADD PRIMARY KEY (`id_jam`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bagian`
--
ALTER TABLE `bagian`
  MODIFY `id_bagian` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `detail_absensi`
--
ALTER TABLE `detail_absensi`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=259;

--
-- AUTO_INCREMENT for table `detail_user`
--
ALTER TABLE `detail_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jam`
--
ALTER TABLE `jam`
  MODIFY `id_jam` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_user`
--
ALTER TABLE `detail_user`
  ADD CONSTRAINT `detail_user_ibfk_1` FOREIGN KEY (`bagian`) REFERENCES `bagian` (`id_bagian`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
