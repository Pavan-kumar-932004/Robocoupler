-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2023 at 07:06 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `master`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('nisar', 'nisar');

-- --------------------------------------------------------

--
-- Table structure for table `name_master`
--

CREATE TABLE `name_master` (
  `insname` varchar(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `ename` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `rwname` varchar(100) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `sob` varchar(40) NOT NULL,
  `scode` varchar(40) NOT NULL,
  `qcode` varchar(40) NOT NULL,
  `dcode` varchar(40) NOT NULL,
  `nwork` varchar(100) NOT NULL,
  `nwork2` varchar(100) NOT NULL,
  `nwork3` varchar(100) NOT NULL,
  `tno` int(15) NOT NULL,
  `mno` int(15) NOT NULL,
  `crw` varchar(100) NOT NULL,
  `aadhar` int(15) NOT NULL,
  `tid` varchar(100) NOT NULL,
  `idno` varchar(100) NOT NULL,
  `mcode` int(80) NOT NULL,
  `ocode` int(80) NOT NULL,
  `doe` date NOT NULL,
  `city` varchar(50) NOT NULL,
  `spl` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `name_master`
--

INSERT INTO `name_master` (`insname`, `pname`, `ename`, `title`, `rwname`, `sex`, `dob`, `sob`, `scode`, `qcode`, `dcode`, `nwork`, `nwork2`, `nwork3`, `tno`, `mno`, `crw`, `aadhar`, `tid`, `idno`, `mcode`, `ocode`, `doe`, `city`, `spl`, `time`) VALUES
('Robocoupler', 'Dheeraj', '1', '2', 'Sirakasula', 'Male', '2023-02-06', 'Visakhapatnam', '1', '1', '1', '1', '1', '1', 123456789, 123456789, '1', 123456789, '1', '123456789', 123456789, 123456789, '2023-06-07', 'Chennai', 'I have book', '2023-06-01 12:13:24'),
('Vignan', 'wdwdw', '1111', '1', '555555', 'Male', '2023-06-01', '555555555', '1', '1', '1', '1', '1', '1', 5555555, 5555555, '1', 55555555, '1', '5555555', 5555555, 2147483647, '2023-06-01', '5555555', '555555', '2023-06-02 12:02:04'),
('Gitam', '11111111', '11111', '1', '1111', 'Male', '2023-05-31', 'India', '1', '1', '1', '1', '1', '1', 2147483647, 111111, '1', 111111, '1', '11111111', 11111, 111111, '2023-06-18', 'Visakhapatnam', 'I have book', '2023-06-01 05:24:09'),
('Vignan', 'Pavan', '121212', '1', '12121212', 'Male', '2023-06-02', 'India', '1', '1', '1', '1', '1', '1', 2147483647, 2147483647, '1', 121212121, '1', '', 12121, 21212, '2023-07-05', 'Visakhapatnam', 'I have book', '2023-06-01 05:13:36'),
('VIIT', 'Sanjana', '123', '1', 'Mandarapu', 'Female', '2004-05-16', 'Visakhapatnam', '1', '2', '2', '2', '1', '1', 2147483647, 2147483647, '2', 2147483647, '2', '99999', 23232, 121121, '2023-06-14', 'Visakhapatnam', 'I like sprite', '2023-06-14 17:03:55'),
('Vignan', 'Pavan', '12345', '1', 'Kumar', 'Male', '2023-06-09', 'India', '1', '1', '1', '1', '1', '1', 999999, 999999, '1', 999999, '1', '', 888888, 8888888, '2023-06-21', 'Visakhapatnam', 'I dont have book', '2023-06-01 01:50:46'),
('Gayatri', 'Pavan', '23456', '2', 'Kumar', 'Female', '2023-06-02', 'India', '1', '1', '2', '2', '1', '1', 2147483647, 2222, '2', 22222, '1', '32323', 12345, 12345, '2023-06-07', 'Visakhapatnam', 'I dont have book', '2023-06-01 05:36:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `name_master`
--
ALTER TABLE `name_master`
  ADD PRIMARY KEY (`ename`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
