-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 01:31 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donnerdb1`
--

-- --------------------------------------------------------

--
-- Table structure for table `donner_info`
--

CREATE TABLE `donner_info` (
  `id` int(100) NOT NULL,
  `name` text NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `occupation` text NOT NULL,
  `gender` text NOT NULL,
  `dateofBirth` varchar(20) NOT NULL,
  `yearlyIncome` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donner_info`
--

INSERT INTO `donner_info` (`id`, `name`, `address`, `email`, `username`, `password`, `occupation`, `gender`, `dateofBirth`, `yearlyIncome`) VALUES
(1, 'sabid', 'rangpur,bangladesh', 'arifinsabid@gmailcom', 'sabid', '@1234@', 'Student ', 'Male','05/07/2001' , 20000000),
(2, 'Ovi', 'Dhaka,bangladesh', 'Ovi@gmail.com', 'ovi', '@1234@', 'Student ', 'Male', '14/12/2000', 4660000),
(3, 'Alif', 'Dhaka,bangladesh', 'alif@gmail.com', 'alif', '@1234@', '01793000282', 'Male', '01/10/2001', 5500000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donner_info`
--
ALTER TABLE `donner_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donner_info`
--
ALTER TABLE `donner_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
