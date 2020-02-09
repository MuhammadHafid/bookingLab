-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2019 at 08:11 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookinglab`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id_admin` int(11) NOT NULL,
  `fullname_admin` varchar(200) NOT NULL,
  `username_admin` varchar(100) NOT NULL,
  `email_admin` varchar(200) NOT NULL,
  `password_admin` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id_admin`, `fullname_admin`, `username_admin`, `email_admin`, `password_admin`) VALUES
(1, 'Achmad Syeh Hasimy Md', 'hasimy', 'achmad_syeh_27rpl@student.smktelkom-mlg.sch.id', 'admin1'),
(2, 'Muhammad Irfan Jauhari', 'irfan', 'muhammad_irfan_27rpl@student.smktelkom-mlg.sch.id', 'admin2'),
(3, 'Afrizzul Haq Albar', 'izul', 'afrizzul_haq_27rpl@student.smktelkom-mlg.sch.id', 'admin3'),
(4, 'Aldi Muhammad Farhan', 'aldi', 'aldi_muhammad_27rpl@student.smktelkom-mlg.sch.id', 'admin4'),
(5, 'Muhammad Hafid Azis', 'hafid', 'muhammad_hafid_27rpl@student.smktelkom-mlg.sch.id', 'admin5'),
(6, 'David Gholi Rahmadana', 'david', 'david_gholi_27rpl@student.smktelkom-mlg.sch.id', 'admin6'),
(7, 'Arya Gading Indratama', 'arya_gading', 'arya_gading_27rpl@student.smktelkom-mlg.sch.id', 'admin7');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_lab` int(11) NOT NULL,
  `keperluan` text NOT NULL,
  `tgl_pemakaian` date NOT NULL,
  `waktu_booking` time NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE `lab` (
  `id_lab` int(11) NOT NULL,
  `nama_lab` varchar(20) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`id_lab`, `nama_lab`, `kapasitas`, `status`) VALUES
(1, 'lab_1', 40, 'kosong'),
(2, 'lab_2', 40, 'kosong'),
(3, 'lab_3', 40, 'kosong'),
(4, 'lab_4', 40, 'kosong'),
(5, 'lab_5', 40, 'kosong'),
(6, 'lab_6', 40, 'kosong'),
(7, 'lab_7', 40, 'kosong'),
(8, 'lab_8', 40, 'kosong');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `fullname` varchar(200) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password_1` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `fullname`, `username`, `email`, `password_1`) VALUES
(1, 'Achmad Syeh Hasimy Md', 'hasimy', 'achmad_syeh_27rpl@student.smktelkom-mlg.sch.id', 'admin1'),
(2, 'Muhammad Irfan Jauhari', 'irfan', 'muhammad_irfan_27rpl@student.smktelkom-mlg.sch.id', 'admin2'),
(3, 'Afrizzul Haq Albar', 'izul', 'afrizzul_haq_27rpl@student.smktelkom-mlg.sch.id', 'admin3'),
(4, 'Aldi Muhammad Farhan', 'aldi', 'aldi_muhammad_27rpl@student.smktelkom-mlg.sch.id', 'admin4'),
(5, 'Muhammad Hafid Azis', 'hafid', 'muhammad_hafid_27rpl@student.smktelkom-mlg.sch.id', 'admin5'),
(6, 'David Gholi Rahmadana', 'david', 'david_gholi_27rpl@student.smktelkom-mlg.sch.id', 'admin6'),
(7, 'Arya Gading Indratama', 'arya_gading', 'arya_gading_27rpl@student.smktelkom-mlg.sch.id', 'admin7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indexes for table `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`id_lab`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lab`
--
ALTER TABLE `lab`
  MODIFY `id_lab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
