-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2021 at 12:14 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `add_dynamic`
--

-- --------------------------------------------------------

--
-- Table structure for table `dynamic_skills`
--

CREATE TABLE `dynamic_skills` (
  `ID` int(11) NOT NULL,
  `Skills` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dynamic_skills`
--

INSERT INTO `dynamic_skills` (`ID`, `Skills`) VALUES
(21, 'a:3:{i:0;s:3:\"PHP\";i:1;s:4:\"Java\";i:2;s:10:\"C Language\";}'),
(22, 'a:5:{i:0;s:3:\"PHP\";i:1;s:4:\"Java\";i:2;s:6:\"Python\";i:3;s:7:\"Angular\";i:4;s:7:\"English\";}'),
(23, 'a:5:{i:0;s:3:\"PHP\";i:1;s:4:\"Java\";i:2;s:4:\"HTML\";i:3;s:2:\"JS\";i:4;s:5:\"HTML5\";}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dynamic_skills`
--
ALTER TABLE `dynamic_skills`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dynamic_skills`
--
ALTER TABLE `dynamic_skills`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
