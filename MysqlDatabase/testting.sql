-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 24, 2023 at 12:24 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testting`
--

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `id` int(10) NOT NULL,
  `id_pertanyaan` int(10) NOT NULL,
  `jawaban` varchar(255) NOT NULL,
  `pilihan_ganda` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `jawaban`
--

INSERT INTO `jawaban` (`id`, `id_pertanyaan`, `jawaban`, `pilihan_ganda`) VALUES
(370, 1, 'elon', 'A'),
(371, 1, 'mark', 'B'),
(372, 1, 'reusmana', 'C'),
(373, 1, 'yunita', 'D'),
(374, 2, 'mark', 'A'),
(375, 2, 'elon', 'B'),
(376, 2, 'reusmana', 'C'),
(377, 2, 'yunita', 'D'),
(378, 3, 'mark', 'A'),
(379, 3, 'Thomas Edison', 'B'),
(380, 3, 'reusmana', 'C'),
(381, 3, 'yunita', 'D'),
(382, 4, 'Mana saya tau', 'A'),
(383, 4, 'Bisa Di panggil Berulang ulang', 'B'),
(384, 4, 'Ko tanya saya', 'C'),
(385, 4, 'Yo wisss', 'D'),
(386, 5, 'Bisa Menghantuin', 'A'),
(387, 5, 'Bisa Jadi Reusable', 'B'),
(388, 5, 'Ko tanya saya', 'C'),
(389, 5, 'Yo wisss', 'D'),
(390, 6, 'Pemain Si paling tersakiti', 'A'),
(391, 6, 'Pemain Sinetron', 'B'),
(392, 6, 'Ko tanya saya', 'C'),
(393, 6, 'Main Bola', 'D'),
(394, 7, 'Artisan Indo', 'A'),
(395, 7, 'Anggota Grup Girl band', 'B'),
(396, 7, 'Ko tanya saya', 'C'),
(397, 7, 'ADuhhhhhh', 'D'),
(398, 8, 'Artisan Indo', 'A'),
(399, 8, 'Anggota Grup Girl band', 'B'),
(400, 8, 'Ko tanya saya', 'C'),
(401, 8, 'ADuhhhhhh', 'D'),
(402, 9, 'Dolar', 'A'),
(403, 9, 'Rupiah', 'B'),
(404, 9, 'Ko tanya saya', 'C'),
(405, 9, 'Nihaoooo', 'D'),
(406, 10, '5555', 'A'),
(407, 10, 'wkwkkwkw', 'B'),
(408, 10, 'Ko tanya saya', 'C'),
(409, 10, 'huhuhuuhu', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id` int(10) NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `jawaban` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id`, `pertanyaan`, `jawaban`) VALUES
(1, 'siapa penemu facebook?', 'B'),
(2, 'siapa penemu tesla?', 'B'),
(3, 'siapa penemu lampu?', 'B'),
(4, 'apa itu reusable dalam programming?', 'B'),
(5, 'kegunaan function?', 'B'),
(6, 'citra kirana siapa?', 'B'),
(7, 'siapa jisoo blackpink dududdud', 'B'),
(8, 'siapa itu eunha', 'B'),
(9, 'apa mata uang indo', 'B'),
(10, 'ketawa nya bebek', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nilai` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `nilai`, `status`) VALUES
(19, 'reusmana sujani', '50', 'done'),
(20, 'ress', '40', 'done'),
(21, 'ressmana', '90', 'done');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=410;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
