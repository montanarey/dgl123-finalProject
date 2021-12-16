-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 16, 2021 at 06:54 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpsons`
--

-- --------------------------------------------------------

--
-- Table structure for table `characters`
--

CREATE TABLE `characters` (
  `id` int(11) NOT NULL,
  `first_name` varchar(250) DEFAULT NULL,
  `last_name` varchar(250) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `occupation` varchar(250) DEFAULT NULL,
  `voiced_by` varchar(250) DEFAULT NULL,
  `image_url` varchar(250) DEFAULT NULL,
  `display` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `characters`
--

INSERT INTO `characters` (`id`, `first_name`, `last_name`, `age`, `occupation`, `voiced_by`, `image_url`, `display`) VALUES
(1, 'Homer', 'Simpson', 40, 'Nuclear Safety Inspector', 'Dan Castellaneta', 'images/homer.png', 0),
(2, 'Marge', 'Simpson', 40, 'Homemaker', 'Julie Kavner', 'images/marge.png', 0),
(3, 'Bart', 'Simpson', 10, 'Student', 'Nancy Cartwright', 'images/bart.png', 0),
(4, 'Lisa', 'Simpsom', 8, 'Student', 'Yeardley Smith', 'images/lisa.png', 0),
(5, 'Maggie', 'Simpson', 1, 'Baby', '', 'images/maggie.png', 0),
(6, 'Moe', 'Szyslak', 55, 'Bartender', '', 'images/moe.png', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
