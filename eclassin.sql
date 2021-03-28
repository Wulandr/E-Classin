-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 08:42 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eclassin`
--

-- --------------------------------------------------------

--
-- Table structure for table `ipk`
--

CREATE TABLE `ipk` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `nim` varchar(8) NOT NULL,
  `kelas` varchar(8) NOT NULL,
  `semester` int(10) NOT NULL,
  `matakuliah` text NOT NULL,
  `tugas1` int(5) NOT NULL,
  `tugas2` int(5) NOT NULL,
  `tugas3` int(5) NOT NULL,
  `tugas4` int(5) NOT NULL,
  `uts` int(8) NOT NULL,
  `uas` int(8) NOT NULL,
  `ip` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ipk`
--

INSERT INTO `ipk` (`id`, `nama`, `nim`, `kelas`, `semester`, `matakuliah`, `tugas1`, `tugas2`, `tugas3`, `tugas4`, `uts`, `uas`, `ip`) VALUES
(12, 'Erlando Gunawan Budi', 'M3119005', 'B', 1, 'Prak Algoritma & Pemrograman Dasar', 0, 0, 0, 0, 88, 0, 1.702),
(16, 'Ananda Keysha', 'M3119001', 'A', 1, 'Pancasila', 100, 78, 0, 89, 0, 60, 1.494),
(17, 'Muhammad Nabhani Akbar', 'M3119012', 'C', 1, 'Pendidikan Agama', 80, 78, 67, 63, 88, 60, 2.944),
(18, 'Listiana Dewi Pradani', 'M3119010', 'A', 1, 'Matematika TI', 54, 74, 92, 43, 97, 45, 2.798),
(19, 'Kahfi Nuraeni', 'M3119009', 'C', 5, 'Bahasa Inggris TI', 65, 0, 88, 65, 95, 0, 1.956),
(20, 'Tri Wulandari', 'M3119085', 'D', 3, 'Prak Mikrokontroller I', 90, 86, 100, 88, 100, 100, 3.928),
(23, 'Farouq Haidar', 'M3119111', 'B', 1, 'Pendidikan Agama', 100, 70, 98, 87, 80, 78, 3.238);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `nim` varchar(8) NOT NULL,
  `jurusan` text NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `jurusan`, `email`) VALUES
(1, 'Ananda Manohara', 'M3119001', 'D3 Teknik Informatika', 'anandakeysha@gmail.com'),
(2, 'Beny Setiawan', 'M3119002', 'D3 Teknik Informatika', 'Benikur@gmail.com'),
(3, 'Chika Citaku', 'M3119003', 'D3 Teknik Informatika', 'citataku97@gmail.com'),
(4, 'Charlos Houtman', 'M3119004', 'D3 Teknik Informatika', 'charlos@gmail.com'),
(5, 'Erlando Budi Setiawan', 'M3119005', 'D3 Teknik Informatika', 'gunagunadi@gmail.com'),
(6, 'Firanda Amarta', 'M3119006', 'D3 Teknik Informatika', 'amar256@gmail.com'),
(7, 'Grapika Indah Palawi', 'M3119007', 'D3 Teknik Informatika', 'grapikapalawi@gmail.com'),
(8, 'Hussain Elhaq', 'M3119008', 'D3 Teknik Informatika', 'hussainelhaq@gmail.com'),
(9, 'Kahfi Nuraeni', 'M3119009', 'D3 Teknik Informatika', 'kahfinuraen1@gmail.com'),
(10, 'Listiana Dewi Pradani', 'M3119010', 'D3 Teknik Informatika', 'listianaprada@gmail.com'),
(11, 'Asma\' Fikriyyahh', 'M3119011', 'D3 Teknik Informatika', 'asmafikriy200@gmail.com'),
(13, 'Muhammad Nabhani Akbar', 'M3119012', 'D3 Teknik Informatika', 'nabhani@gmail.com'),
(15, 'Nabila Saqeela ', 'M3119013', 'D3 Teknik Informatika', 'saqeenab@gmail.com'),
(17, 'Nadhila Saqeela ', 'M3119014', 'D3 Teknik Informatika', 'saqeenad@gmail.com'),
(19, 'Olivia Karisma Putri', 'M3119015', 'D3 Teknik Informatika', 'Oliviakp@gmail.com'),
(23, 'Michela Faris', 'M3119099', 'D3 Teknik Informatika', 'micela@gmail.com'),
(24, 'Pavilia Sativa', 'M3119017', 'D3 Teknik Informatika', 'paviliasa@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `presensi`
--

CREATE TABLE `presensi` (
  `id` int(11) NOT NULL,
  `nim` varchar(8) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `presensi`
--

INSERT INTO `presensi` (`id`, `nim`, `keterangan`) VALUES
(2, 'M3119111', 'Ijin'),
(3, 'M3119111', 'Ijin'),
(4, 'M3119103', 'Hadir'),
(5, 'M3119010', 'Hadir'),
(6, 'M3119010', 'Hadir'),
(7, 'M311999', 'Ijin'),
(8, 'M3119333', 'Hadir'),
(14, 'M3119222', 'Ijin'),
(15, 'M3115085', 'Hadir'),
(16, 'M3115085', 'Hadir'),
(17, 'M3119085', 'Ijin'),
(18, 'M3119088', 'Hadir'),
(19, 'M3119088', 'Hadir'),
(20, 'M3119088', 'Hadir'),
(21, 'M3119085', 'Ijin'),
(22, 'M3119666', 'Hadir'),
(23, '', 'Hadir'),
(24, 'M3119666', 'Ijin'),
(25, 'M3119000', 'Hadir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ipk`
--
ALTER TABLE `ipk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ipk`
--
ALTER TABLE `ipk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `presensi`
--
ALTER TABLE `presensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
