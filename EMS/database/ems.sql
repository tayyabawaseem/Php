-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2024 at 03:13 PM
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
-- Database: `ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `empform`
--

CREATE TABLE `empform` (
  `Id` int(11) NOT NULL,
  `empName` varchar(80) NOT NULL,
  `empEmail` varchar(255) NOT NULL,
  `empGender` varchar(30) NOT NULL,
  `empDepart` varchar(255) NOT NULL,
  `empAddress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `empform`
--

INSERT INTO `empform` (`Id`, `empName`, `empEmail`, `empGender`, `empDepart`, `empAddress`) VALUES
(1, 'tayyaba', 'tayyaba@gmail.com', 'female', 'Not select', ' 5C 7/17'),
(2, 'hanii', 'h@hmail.com', 'other', '', 'jiiii'),
(6, 'Dayan', 'Dayan@gmail.com', 'male', 'it', 'tfhbfthbyf'),
(7, 'tehreem', 'tehreem@gmail.com', 'Not Select', 'Not select', 'mjkj'),
(8, 'ali', 'ali@gmail.com', 'male', 'sales', 'jksjf'),
(13, 'ayesha', 'ash@gmail.com', 'male', 'sales', 'ttttt'),
(14, 'ayesha', 'ash@gmail.com', 'male', 'sales', 'ttttt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `empform`
--
ALTER TABLE `empform`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `empform`
--
ALTER TABLE `empform`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
