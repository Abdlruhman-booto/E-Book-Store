-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2023 at 09:02 PM
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
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Username` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Username`, `Email`, `Age`, `Password`) VALUES
(6, '3abdelrhman_ahmed', 'aq25@101.aq25', 13, '1'),
(9, '3abdelrhman_ahmed', 'abdelrhmanelkassas@students.du.edu.eg', 19, '1234'),
(10, '3abdelrhman_ahmed', 'ws@f.com', 1, 'ss'),
(12, '22112', 'akk@hh.com', 1, '1'),
(14, 'Abdelrhman11', 'abdo@sliem.com', 19, '1'),
(16, 'adb', 'as@gmail.com', 55, '1234'),
(17, 'hello', 'dssd@gmail.com', 11, '552'),
(18, 'Abdelrhmanwww', 'ff@gmail.com', 20, '1'),
(19, 'Abdelrhman122', 'aq25@101.aq24', 11, '1'),
(20, 'naema', 'naema@e.com', 55, '0000'),
(21, 'mohamed elkassas', 'mohamed111@gmail.com', 32, '12345'),
(22, 'walid wail', 'walidwail@12.com', 19, '12'),
(23, '', '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
