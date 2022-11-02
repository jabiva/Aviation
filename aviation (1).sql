-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 02, 2022 at 03:17 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aviation`
--

-- --------------------------------------------------------

--
-- Table structure for table `aircraft`
--

CREATE TABLE `aircraft` (
  `id` int NOT NULL,
  `aircraft` varchar(100) NOT NULL,
  `registration` varchar(100) NOT NULL,
  `engine` varchar(100) NOT NULL DEFAULT '1 Engine',
  `seater` varchar(100) NOT NULL DEFAULT '2 Seater',
  `flyable` varchar(100) NOT NULL DEFAULT 'Yes',
  `checking` varchar(50) NOT NULL DEFAULT 'TBO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `aircraft`
--

INSERT INTO `aircraft` (`id`, `aircraft`, `registration`, `engine`, `seater`, `flyable`, `checking`) VALUES
(15, 'Testing', 'Testing', '1 Engine', '2 Seaters', '300NM', 'TBO'),
(16, 'sample', 'sample', '1 Engine', '2 Seaters', '300NM', 'TBO'),
(17, 'dsa', 'dsa', '1 Engine', '2 Seaters', '300NM', 'TBO'),
(18, '1', '1', '1 Engine', '2 Seaters', '300NM', 'TBO'),
(19, '2', '2', '1 Engine', '2 Seaters', '300NM', 'TBO'),
(20, '3', '3', '1 Engine', '2 Seaters', '300NM', 'TBO'),
(21, '2', '2', '1 Engine', '2 Seaters', '300NM', 'TBO'),
(27, '2', '12', '1 Engine', '2 Seaters', '300NM', 'TBO');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int NOT NULL,
  `aircraft` varchar(255) NOT NULL,
  `registration` varchar(255) NOT NULL,
  `instructor` varchar(255) NOT NULL,
  `instrumentrating` varchar(255) NOT NULL,
  `syllabus` varchar(255) NOT NULL,
  `flighttime` varchar(255) NOT NULL,
  `student` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `aircraft`, `registration`, `instructor`, `instrumentrating`, `syllabus`, `flighttime`, `student`) VALUES
(1, 'C-152', 'RP-C1743', 'CAPT.KATAYAMA', 'LCL', '1201', '1030-1230', 'AJ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `usertype` varchar(10) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `contact`, `usertype`) VALUES
(6, 'Jonathan ', 'Abiva', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', '09123456789', 'admin'),
(7, 'Jonathan', 'Abiva', 'jonathan@gmail.com', '123', '09616101785', 'user'),
(8, 'Jonathan', 'Abiva', 'abivajonathan171@gmail.com', '12', '12', 'user'),
(15, 'Jonathan', 'Abiva', 'abivajonathan@gmail.com', '12', '12', 'admin'),
(17, 'Jonathan', 'Abiva', 'admin12@gmail.com', '12', '09616101785', 'user'),
(18, 'Jonathan', '12', 'abivajona2than17@gmail.com', '12', '12', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aircraft`
--
ALTER TABLE `aircraft`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aircraft`
--
ALTER TABLE `aircraft`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
