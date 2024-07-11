-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2024 at 09:54 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `noida`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `profile_picture` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `profile_picture`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 'Naveen', 'naveenn7271@gmail.com', '$2y$10$7CdeBRYYfDXQ8zTL/bLwluEq.o89WFuWn80Cm14f4Fx/33A9BD82q', '1720712862_17e8a2557a7ddfc23364.png', '2024-07-11 15:20:16', '2024-07-11 15:54:30', '0000-00-00 00:00:00'),
(7, 'Sagar', 's@gmail.com', '$2y$10$4W4XhQcBYwjlNOwLD.zW6eqCpGudqRHELEMgz/K4K.kS2/HC5GQQS', '1720711624_b8749502105c70be7d76.png', '2024-07-11 15:27:04', '2024-07-11 19:25:33', '0000-00-00 00:00:00'),
(8, 'stutu', 'stu@gmail.com', '$2y$10$NoYtoV3PG5qCy5unD.zH3uMVSdvEx9aQRugf21eSighCEdqtIY6he', '1720714637_25ff17548435ce7ec0cd.png', '2024-07-11 16:17:17', '2024-07-11 16:17:40', '0000-00-00 00:00:00');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
