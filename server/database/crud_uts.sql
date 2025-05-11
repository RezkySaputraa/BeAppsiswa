-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2025 at 11:21 AM
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
-- Database: `crud_uts`
--

-- --------------------------------------------------------

--
-- Table structure for table `beasiswa`
--

CREATE TABLE `beasiswa` (
  `id_beasiswa` varchar(100) NOT NULL,
  `nama_beasiswa` varchar(255) NOT NULL,
  `deskripsi_beasiswa` text NOT NULL,
  `tanggal_ditutup_beasiswa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `beasiswa`
--

INSERT INTO `beasiswa` (`id_beasiswa`, `nama_beasiswa`, `deskripsi_beasiswa`, `tanggal_ditutup_beasiswa`) VALUES
('B001', 'Beasiswa Jepang', 'Beasiswa Jepang menawarkan berbagai peluang bagi pelajar internasional, termasuk dari Indonesia', '2025-06-15'),
('B002', 'Beasiswa Brazil', 'Beasiswa Brazil menawarkan kesempatan pendidikan di berbagai universitas', '2026-05-17'),
('B003', 'Beasiswa Australia', 'Beasiswa Australia memberikan dukungan finansial bagi mahasiswa asing', '2025-10-10'),
('B004', 'Beasiswa Korea', 'Beasiswa Korea tersedia bagi pelajar yang ingin studi di berbagai bidang', '2026-03-15'),
('B005', 'Beasiswa Amerika', 'Beasiswa Amerika membuka peluang bagi mahasiswa internasional di berbagai universitas', '2025-09-20'),
('B006', 'Beasiswa Inggris', 'Beasiswa Inggris mendukung studi di bidang ilmu sosial dan teknik', '2026-06-30'),
('B007', 'Beasiswa Kanada', 'Beasiswa Kanada memberikan bantuan bagi mahasiswa yang ingin studi pascasarjana', '2025-08-25'),
('B008', 'Beasiswa Jerman', 'Beasiswa Jerman didukung oleh pemerintah dan universitas terbaik', '2026-02-28'),
('B009', 'Beasiswa Prancis', 'Beasiswa Prancis menawarkan bantuan finansial bagi pelajar asing', '2025-07-19'),
('B010', 'Beasiswa Belanda', 'Beasiswa Belanda mendukung studi dengan berbagai program pendanaan', '2026-01-05'),
('B011', 'Beasiswa Swiss', 'Beasiswa Swiss memberikan akses ke universitas unggulan', '2025-11-11'),
('B012', 'Beasiswa Italia', 'Beasiswa Italia membantu mahasiswa yang ingin mendalami seni dan budaya', '2026-04-22'),
('B013', 'Beasiswa Rusia', 'Beasiswa Rusia tersedia bagi mahasiswa yang tertarik dengan penelitian teknologi', '2025-06-15'),
('B014', 'Beasiswa China', 'Beasiswa China menawarkan program pembiayaan penuh untuk studi berbagai jurusan', '2026-07-08'),
('B015', 'Beasiswa India', 'Beasiswa India mendukung pelajar internasional dalam bidang sains dan teknologi', '2025-05-30'),
('B016', 'Beasiswa Malaysia', 'Beasiswa Malaysia menawarkan pembiayaan penuh dan parsial bagi pelajar internasional', '2025-09-12'),
('B017', 'Beasiswa Singapura', 'Beasiswa Singapura mendukung mahasiswa berprestasi yang ingin melanjutkan studi', '2026-05-25'),
('B018', 'Beasiswa Thailand', 'Beasiswa Thailand terbuka bagi mahasiswa yang ingin studi di universitas ternama', '2025-07-03'),
('B019', 'Beasiswa Vietnam', 'Beasiswa Vietnam memberikan bantuan finansial bagi pelajar asing', '2026-08-11'),
('B020', 'Beasiswa Filipina', 'Beasiswa Filipina menawarkan program pendanaan bagi studi berbagai jurusan', '2025-06-29'),
('B021', 'Beasiswa Turki', 'Beasiswa Turki menyediakan kesempatan bagi mahasiswa untuk studi S1, S2, dan S3', '2026-02-14'),
('B022', 'Beasiswa Arab Saudi', 'Beasiswa Arab Saudi mendukung mahasiswa yang ingin mendalami studi Islam dan sains', '2025-10-21'),
('B023', 'Beasiswa UEA', 'Beasiswa UEA menawarkan bantuan finansial bagi pelajar yang ingin studi teknologi dan bisnis', '2026-04-18'),
('B024', 'Beasiswa Qatar', 'Beasiswa Qatar memberikan akses pendidikan berkualitas dengan berbagai program pendanaan', '2025-12-05'),
('B025', 'Beasiswa Afrika Selatan', 'Beasiswa Afrika Selatan terbuka untuk mahasiswa asing dengan berbagai bidang studi', '2026-03-09'),
('B026', 'Beasiswa Mesir', 'Beasiswa Mesir menyediakan dukungan bagi mahasiswa yang ingin mempelajari sejarah dan sains', '2025-08-17'),
('B027', 'Beasiswa Argentina', 'Beasiswa Argentina membantu mahasiswa yang ingin studi dengan sistem pendidikan Amerika Latin', '2026-01-30'),
('B028', 'Beasiswa Meksiko', 'Beasiswa Meksiko menawarkan berbagai skema pembiayaan bagi pelajar internasional', '2025-11-23'),
('B029', 'Beasiswa Peru', 'Beasiswa Peru memberikan kesempatan pendidikan bagi pelajar luar negeri', '2026-06-07'),
('B030', 'Beasiswa Chili', 'Beasiswa Chili mendukung studi dalam bidang teknologi dan sains', '2025-07-20'),
('B031', 'Beasiswa Portugal', 'Beasiswa Portugal terbuka bagi mahasiswa yang ingin mendalami budaya dan seni', '2026-09-03'),
('B032', 'Beasiswa Spanyol', 'Beasiswa Spanyol menawarkan berbagai bantuan pendanaan bagi mahasiswa asing', '2025-05-15'),
('B033', 'Beasiswa Yunani', 'Beasiswa Yunani mendukung studi di berbagai bidang, termasuk filsafat dan arsitektur', '2026-08-29'),
('B034', 'Beasiswa Finlandia', 'Beasiswa Finlandia menawarkan pendidikan berkualitas tinggi dengan berbagai program bantuan', '2025-10-02'),
('B035', 'Beasiswa Swedia', 'Beasiswa Swedia mendukung mahasiswa yang ingin studi dalam bidang teknologi dan inovasi', '2026-07-16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(15) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `password`) VALUES
(1, 'admin', 'admin nama', 'admin'),
(2, 'johndoe', 'John Doe', 'password123'),
(3, 'janedoe', 'Jane Doe', 'securepass456'),
(4, 'alexsmith', 'Alex Smith', 'pass789'),
(5, 'mariagarcia', 'Maria Garcia', 'maria_secure'),
(6, 'davidlee', 'David Lee', 'lee_password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
