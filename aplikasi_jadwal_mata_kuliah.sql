-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2024 at 11:20 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_jadwal_mata_kuliah`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_mata_kuliah` int(11) NOT NULL,
  `nama_mata_kuliah` varchar(255) NOT NULL,
  `dosen_mata_kuliah` varchar(255) NOT NULL,
  `hari_mata_kuliah` text NOT NULL,
  `waktu_mata_kuliah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_mata_kuliah`, `nama_mata_kuliah`, `dosen_mata_kuliah`, `hari_mata_kuliah`, `waktu_mata_kuliah`) VALUES
(1, 'SISTEM TERDISTRIBUSI', 'Mas Deka', '1', '16:30-18:00'),
(2, 'METODE PENELITIAN', 'Pak Zia', '1', '18:15-19:45'),
(3, 'INTERAKSI MANUSIA DAN KOMPUTER', 'Bu Nurus', '2', '16:30-18:00'),
(4, 'TEORI BAHASA DAN AUTOMATA', 'Pak Ferry', '2', '18:15-19:45'),
(5, 'PEMROGRAMAN WEB II', 'Bu Tri', '3', '16:30-18:00'),
(6, 'SISTEM INFORMASI', 'Mas Deka', '3', '18:15-19:45'),
(7, 'ADMINISTRASI SISTEM JARINGAN', 'Pak Hendra', '4', '16:30-18:00');

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `id_tugas` int(11) NOT NULL,
  `nama_mata_kuliah` varchar(255) NOT NULL,
  `isi_tugas` text NOT NULL,
  `dateline_tugas` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`id_tugas`, `nama_mata_kuliah`, `isi_tugas`, `dateline_tugas`, `created_at`, `updated_at`) VALUES
(1, 'SISTEM TERDISTRIBUSI', 'PRESENTASI', '2024-10-28 16:30:12', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'METODE PENELITIAN', 'TUGAS DI CLASSROOM', '2024-10-14 16:30:12', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'INTERAKSI MANUSIA DAN KOMPUTER', 'PRESENTASI', '2024-10-29 16:30:12', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'PEMROGRAMAN WEB II', 'MEMBUAT WEB', '2024-10-30 16:30:12', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'SISTEM INFORMASI', 'PRESENTASI', '2024-10-30 16:30:12', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'ADMINISTRASI SISTEM JARINGAN', 'CISCO PACKET TRACKER', '2024-10-31 16:30:12', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_nim` varchar(20) NOT NULL,
  `user_nama` varchar(255) NOT NULL,
  `user_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_nim`, `user_nama`, `user_password`) VALUES
(1, 'S1TIS220481', 'ACHMAD NUR MASRUHIN', '$2y$10$VlMe9538qwxHVerBwTK1ZeltEtWsFb.5b/L8P.PGj/ngdDcV3Cd7S'),
(2, 'S1TIS220445', 'ALVIA FATMA RISQI', '$2y$10$VlMe9538qwxHVerBwTK1ZeltEtWsFb.5b/L8P.PGj/ngdDcV3Cd7S'),
(3, 'S1TIS220447', 'DWI ARINA SALSA BILL', '$2y$10$VlMe9538qwxHVerBwTK1ZeltEtWsFb.5b/L8P.PGj/ngdDcV3Cd7S'),
(4, 'S1TIS220450', 'FAHMIYATUL HIBAH', '$2y$10$VlMe9538qwxHVerBwTK1ZeltEtWsFb.5b/L8P.PGj/ngdDcV3Cd7S'),
(5, 'S1TIS220452', 'GILANG NUR IKHSAN', '$2y$10$VlMe9538qwxHVerBwTK1ZeltEtWsFb.5b/L8P.PGj/ngdDcV3Cd7S'),
(6, 'S1TIS220454', 'IMAM NURFALAH', '$2y$10$KbnyuOh7mZmXfd4OPqlF2.P7IohDYK7K9DSR4652P1TdamGxZnPEW'),
(7, 'S1TIS220455', 'KHAFID ILHAN AL MANJIZ', '$2y$10$VlMe9538qwxHVerBwTK1ZeltEtWsFb.5b/L8P.PGj/ngdDcV3Cd7S'),
(8, 'S1TIS220457', 'M. BIMA AR ROZAQ', '$2y$10$VlMe9538qwxHVerBwTK1ZeltEtWsFb.5b/L8P.PGj/ngdDcV3Cd7S'),
(9, 'S1TIS220458', 'MOH. AFIF SEPTIANTO ', '$2y$10$VlMe9538qwxHVerBwTK1ZeltEtWsFb.5b/L8P.PGj/ngdDcV3Cd7S'),
(10, 'S1TIS220444', 'MUHAMMAD AHADUZ ZEN', '$2y$10$VlMe9538qwxHVerBwTK1ZeltEtWsFb.5b/L8P.PGj/ngdDcV3Cd7S'),
(11, 'S1TIS220460', 'MUHAMMAD ALDI ARLIANSAH', '$2y$10$VlMe9538qwxHVerBwTK1ZeltEtWsFb.5b/L8P.PGj/ngdDcV3Cd7S'),
(12, 'S1TIS220461', 'NAQA RIZKI OKTAVIA', '$2y$10$VlMe9538qwxHVerBwTK1ZeltEtWsFb.5b/L8P.PGj/ngdDcV3Cd7S'),
(13, 'S1TIS220462', 'PUPUT ALVIONITA', '$2y$10$VlMe9538qwxHVerBwTK1ZeltEtWsFb.5b/L8P.PGj/ngdDcV3Cd7S'),
(14, 'S1TIS220463', 'RASYID NAUFAL SAPUTRA', '$2y$10$VlMe9538qwxHVerBwTK1ZeltEtWsFb.5b/L8P.PGj/ngdDcV3Cd7S'),
(15, 'S1TIS220464', 'RIFKI FIGIANTO', '$2y$10$VlMe9538qwxHVerBwTK1ZeltEtWsFb.5b/L8P.PGj/ngdDcV3Cd7S'),
(16, 'S1TIS220466', 'RIZKI NGAFIFUDIN', '$2y$10$VlMe9538qwxHVerBwTK1ZeltEtWsFb.5b/L8P.PGj/ngdDcV3Cd7S'),
(17, 'S1TIS220468', 'ROHMAH FITRIYANI', '$2y$10$VlMe9538qwxHVerBwTK1ZeltEtWsFb.5b/L8P.PGj/ngdDcV3Cd7S'),
(18, 'S1TIS220469', 'RONI APRILIYANTO', '$2y$10$VlMe9538qwxHVerBwTK1ZeltEtWsFb.5b/L8P.PGj/ngdDcV3Cd7S'),
(19, 'S1TIS220470', 'SEFA WAHYU SAFITRI', '$2y$10$VlMe9538qwxHVerBwTK1ZeltEtWsFb.5b/L8P.PGj/ngdDcV3Cd7S'),
(20, 'S1TIS220475', 'YASIR MUDRIK KHOIRULLOH', '$2y$10$VlMe9538qwxHVerBwTK1ZeltEtWsFb.5b/L8P.PGj/ngdDcV3Cd7S'),
(21, 'S1TIS220477', 'WAGIMIN', '$2y$10$VlMe9538qwxHVerBwTK1ZeltEtWsFb.5b/L8P.PGj/ngdDcV3Cd7S');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_mata_kuliah`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id_tugas`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_mata_kuliah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id_tugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
