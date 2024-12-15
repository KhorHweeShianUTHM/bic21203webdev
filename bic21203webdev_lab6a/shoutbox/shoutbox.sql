-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2024 at 11:38 AM
-- Server version: 10.6.7-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoutbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `shouts`
--

CREATE TABLE `shouts` (
  `shout_id` int(11) NOT NULL,
  `shout_text` varchar(255) NOT NULL,
  `shout_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shouts`
--

INSERT INTO `shouts` (`shout_id`, `shout_text`, `shout_date`) VALUES
(1, 'nice to meet you', '2024-12-15 07:41:31'),
(2, 'my name is Khor Hwee Shian', '2024-12-15 08:10:53'),
(3, 'a', '2024-12-15 08:11:47'),
(4, 'b', '2024-12-15 08:12:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shouts`
--
ALTER TABLE `shouts`
  ADD PRIMARY KEY (`shout_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shouts`
--
ALTER TABLE `shouts`
  MODIFY `shout_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
