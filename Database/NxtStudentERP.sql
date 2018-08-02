-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 02, 2018 at 08:54 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `NxtStudentERP`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_admission`
--

CREATE TABLE `student_admission` (
  `Id` int(11) NOT NULL,
  `adm_date` date NOT NULL,
  `stud_name` text NOT NULL,
  `father_name` text NOT NULL,
  `mother_name` text NOT NULL,
  `father_number` text NOT NULL,
  `mother_number` text NOT NULL,
  `current_address` text NOT NULL,
  `perma_address` text NOT NULL,
  `father_email` text NOT NULL,
  `stud_dob` date NOT NULL,
  `stud_gender` text NOT NULL,
  `stud_blood_group` text NOT NULL,
  `stud_caste` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `perma_address_pin` int(7) NOT NULL,
  `stud_email` text NOT NULL,
  `stud_phone` text NOT NULL,
  `photo` text NOT NULL,
  `father_o_number` text NOT NULL,
  `mother_o_number` text NOT NULL,
  `password` text NOT NULL,
  `class_id` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  `currrent_address_pin` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_admission`
--
ALTER TABLE `student_admission`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_admission`
--
ALTER TABLE `student_admission`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
