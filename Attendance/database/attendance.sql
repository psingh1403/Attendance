-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2023 at 06:31 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `sno` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`sno`, `username`, `fname`, `lname`, `password`) VALUES
(1, 'root1', 'root1', 'root1', 'root1');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `sno` int(11) NOT NULL,
  `userid` int(5) NOT NULL,
  `Attendancesymbole` varchar(3) NOT NULL,
  `date` varchar(100) NOT NULL,
  `day` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`sno`, `userid`, `Attendancesymbole`, `date`, `day`) VALUES
(1, 1, 'P', '04/01/23', 'Wednesday'),
(4, 1, 'P', '01/01/23', 'Sunday'),
(5, 1, 'P', '02/01/23', 'Monday'),
(6, 1, 'P', '03/01/23', 'Tuesday'),
(8, 1, 'P', '05/01/23', 'Thursday'),
(9, 1, 'A', '06/01/23', 'Friday'),
(10, 1, 'P', '07/01/23', 'Saturday'),
(11, 1, 'P', '08/01/23', 'Sunday'),
(12, 1, 'P', '09/01/23', 'Monday'),
(13, 1, 'P', '10/01/23', 'Tuesday'),
(14, 1, 'P', '11/01/23', 'Wednesday'),
(15, 1, 'P', '12/01/23', 'Thursday'),
(16, 1, 'P', '13/01/23', 'Friday'),
(17, 1, 'P', '14/01/23', 'Saturday'),
(18, 1, 'P', '15/01/23', 'Sunday'),
(19, 1, 'A', '16/01/23', 'Monday'),
(20, 1, 'HO', '17/01/23', 'Tuesday'),
(21, 1, 'P', '18/01/23', 'Wednesday'),
(22, 1, 'P', '19/01/23', 'Thursday'),
(23, 1, 'P', '20/01/23', 'Friday'),
(24, 1, 'P', '21/01/23', 'Saturday'),
(25, 1, 'P', '22/01/23', 'Sunday'),
(26, 1, 'P', '23/01/23', 'Monday'),
(27, 1, 'P', '24/01/23', 'Tuesday'),
(28, 1, 'A', '25/01/23', 'Wednesday'),
(29, 1, 'P', '26/01/23', 'Thursday'),
(32, 1, 'A', '29/01/23', 'Sunday'),
(34, 1, 'P', '31/01/23', 'Tuesday'),
(36, 1, 'P', '27/01/23', 'Friday'),
(37, 1, 'P', '28/01/23', 'Saturday'),
(39, 1, 'P', '30/01/23', 'Monday');

-- --------------------------------------------------------

--
-- Table structure for table `employeelogin`
--

CREATE TABLE `employeelogin` (
  `sno` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `post` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employeelogin`
--

INSERT INTO `employeelogin` (`sno`, `username`, `fname`, `lname`, `mobile`, `post`, `password`) VALUES
(1, 'root1', 'root1', 'root1', '8888888888', 'cook', 'root1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `employeelogin`
--
ALTER TABLE `employeelogin`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `employeelogin`
--
ALTER TABLE `employeelogin`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
