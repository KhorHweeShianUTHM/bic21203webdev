-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2025 at 05:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab7_graph`
--

-- --------------------------------------------------------

--
-- Table structure for table `tourists`
--

CREATE TABLE `tourists` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tourists`
--

INSERT INTO `tourists` (`id`, `year`, `category`, `value`) VALUES
(1, 2010, 'Food', 6448),
(2, 2010, 'Transport', 6220),
(3, 2010, 'Accommodation', 6096),
(4, 2010, 'Shopping', 2603),
(5, 2010, 'Expenditure', 595),
(6, 2010, 'Other', 1722),
(7, 2011, 'Food', 7756),
(8, 2011, 'Transport', 7417),
(9, 2011, 'Accommodation', 4985),
(10, 2011, 'Shopping', 3801),
(11, 2011, 'Expenditure', 801),
(12, 2011, 'Other', 2249);

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `year`, `category`, `value`) VALUES
(1, 2010, 'Shopping', 8914),
(2, 2010, 'Transport', 8098),
(3, 2010, 'Food', 7975),
(4, 2010, 'Accommodation', 6130),
(5, 2010, 'Expenditure', 894),
(6, 2010, 'Other', 2667),
(7, 2011, 'Shopping', 13149),
(8, 2011, 'Transport', 10019),
(9, 2011, 'Food', 9691),
(10, 2011, 'Accommodation', 5028),
(11, 2011, 'Expenditure', 1097),
(12, 2011, 'Other', 3362);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tourists`
--
ALTER TABLE `tourists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tourists`
--
ALTER TABLE `tourists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
