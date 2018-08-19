-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 19, 2018 at 08:56 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

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
-- Table structure for table `batches_all`
--

CREATE TABLE `batches_all` (
  `id` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `coordinator` int(11) NOT NULL,
  `subject_teachers` text NOT NULL,
  `students_list` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batches_all`
--

INSERT INTO `batches_all` (`id`, `year_id`, `class_id`, `section_id`, `coordinator`, `subject_teachers`, `students_list`) VALUES
(1, 1, 1, 1, 4, '{\"1\":[\"4\"],\"5\":[\"2\"]}', '[1,4]'),
(2, 1, 1, 2, 1, '{\"1\":[\"2\"],\"3\":[\"3\"],\"7\":[\"1\"],\"8\":[\"4\"]}', '[2]'),
(3, 1, 1, 3, 1, '{\"1\":[\"4\"],\"2\":[\"2\"],\"2\":[\"3\"]}', '[3]'),
(4, 1, 6, 1, 1, '{\"1\":[\"4\"],\"8\":[\"4\"],\"3\":[\"3\"],\"2\":[\"2\"],\"4\":[\"3\"],\"7\":[\"1\"],\"5\":[\"2\"],\"6\":[\"4\"]}', '[]'),
(5, 2, 1, 1, 1, '{\"1\":[\"1\"],\"3\":[\"2\"],\"4\":[\"3\"]}', '[5]');

-- --------------------------------------------------------

--
-- Table structure for table `classes_list`
--

CREATE TABLE `classes_list` (
  `id` int(11) NOT NULL,
  `class` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes_list`
--

INSERT INTO `classes_list` (`id`, `class`) VALUES
(1, '1st'),
(2, '2nd'),
(3, '3rd'),
(4, '4th'),
(5, '5th'),
(6, '6th'),
(7, '7th'),
(8, '8th'),
(9, '9th'),
(10, '10th'),
(11, '11th'),
(12, '12th');

-- --------------------------------------------------------

--
-- Table structure for table `professor_joining`
--

CREATE TABLE `professor_joining` (
  `id` int(11) NOT NULL,
  `join_date` date NOT NULL,
  `prof_name` text NOT NULL,
  `phone` text NOT NULL,
  `prof_dob` date NOT NULL,
  `email` text NOT NULL,
  `gender` text NOT NULL,
  `prof_category` text NOT NULL,
  `state` text NOT NULL,
  `city` text NOT NULL,
  `prof_bloodgroup` text NOT NULL,
  `current_address` text NOT NULL,
  `permanent_address` text NOT NULL,
  `current_address_pin` int(7) NOT NULL,
  `permanent_address_pin` int(7) NOT NULL,
  `photo` text NOT NULL,
  `father_name` text NOT NULL,
  `mother_name` text NOT NULL,
  `password` text NOT NULL,
  `highest_qualification` text NOT NULL,
  `bank_name` text NOT NULL,
  `pan_number` text NOT NULL,
  `branch_name` text NOT NULL,
  `account_number` text NOT NULL,
  `ifsc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `professor_joining`
--

INSERT INTO `professor_joining` (`id`, `join_date`, `prof_name`, `phone`, `prof_dob`, `email`, `gender`, `prof_category`, `state`, `city`, `prof_bloodgroup`, `current_address`, `permanent_address`, `current_address_pin`, `permanent_address_pin`, `photo`, `father_name`, `mother_name`, `password`, `highest_qualification`, `bank_name`, `pan_number`, `branch_name`, `account_number`, `ifsc`) VALUES
(1, '2018-08-18', 'Hinduja Amplifier', '9424122932', '1998-09-27', 'hinduja@gmail.com', 'female', 'gn', 'mp', 'Indore', 'opos', 'Kartaj, Pune', 'Katraj, Indore', 491441, 491441, '', 'Golchha Modi', 'Golchha Modi', 'Yg123456', 'MA', 'SBI', 'AQWE0132DD', 'Indore', '1234567890', 'SBIN0000123'),
(2, '2018-08-19', 'Vivek Modi', '9158392945', '1998-09-21', 'modi@gmail.com', 'male', 'gn', 'mp', 'Mandla', 'opos', 'Kartaj, Pune', 'Katraj, Indore', 491441, 491441, '', 'Aditya Gupta', 'Safari', 'Vm123458', 'MA', 'SBI', 'AQWE0132DD', 'Indore', '1234567890', 'SBIN0000123'),
(3, '2018-08-19', 'Yash Golchha', '9424122932', '1998-09-27', 'yash@gmail.com', 'male', 'gn', 'mp', 'rajnandgaon', 'opos', 'Kartaj, Pune', 'Katraj, Pune', 491441, 491441, '', 'Nirmal Golchha', 'Hema Golchha', 'Yg123458', 'MA', 'SBI', 'AQWE0132DD', 'Indore', '1234567890', 'SBIN0000123'),
(4, '2018-08-19', 'Rupal Singh', '9424122932', '1998-09-27', 'yash@gmail.com', 'male', 'gn', 'mp', 'rajnandgaon', 'opos', 'Kartaj, Pune', 'Katraj, Pune', 491441, 491441, '', 'Abc', 'abc', 'Yg123458', 'MA', 'SBI', 'AQWE0132DD', 'Indore', '1234567890', 'SBIN0000123');

-- --------------------------------------------------------

--
-- Table structure for table `section_list`
--

CREATE TABLE `section_list` (
  `id` int(11) NOT NULL,
  `section` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_list`
--

INSERT INTO `section_list` (`id`, `section`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D');

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
  `currrent_address_pin` int(7) NOT NULL,
  `batch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_admission`
--

INSERT INTO `student_admission` (`Id`, `adm_date`, `stud_name`, `father_name`, `mother_name`, `father_number`, `mother_number`, `current_address`, `perma_address`, `father_email`, `stud_dob`, `stud_gender`, `stud_blood_group`, `stud_caste`, `city`, `state`, `perma_address_pin`, `stud_email`, `stud_phone`, `photo`, `father_o_number`, `mother_o_number`, `password`, `currrent_address_pin`, `batch_id`) VALUES
(1, '2018-08-19', 'Burhan Mullamitha', 'XYZ', 'ASD', '9424122932', '9424122932', 'Dahode                                    ', 'Dahode                                    ', 'DSD@yahoo.in', '1998-09-27', 'male', 'opos', 'gn', 'Gujrat', 'mp', 491441, 'burhan@gmail.com', '9424122932', 'modi.png', '9424122932', '9424122932', 'Yasskdk`134', 491441, 1),
(2, '2018-08-19', 'Yash Golchha', 'XYZ', 'ASD', '9424122932', '9424122932', 'Dahode                                    ', 'Dahode                                    ', 'DSD@yahoo.in', '1998-09-27', 'male', 'opos', 'gn', 'Gujrat', 'mp', 491441, 'burhan@gmail.com', '9424122932', 'modi.png', '9424122932', '9424122932', 'Yasdsfdjd23', 491441, 2),
(3, '2018-08-19', 'Aditya Gupta', 'XYZ', 'ASD', '9424122932', '9424122932', 'Dahode', 'Dahode', 'DSD@yahoo.in', '1998-09-27', 'male', 'opos', 'gn', 'Gujrat', 'mp', 491441, 'burhan@gmail.com', '9424122932', 'modi.png', '9424122932', '9424122932', 'Burhan123456', 491441, 3),
(4, '2018-08-19', 'Subham Singh', 'XYZ', 'ASD', '9424122932', '9424122932', 'Dahode', 'Dahode', 'DSD@yahoo.in', '1998-09-27', 'male', 'opos', 'gn', 'Gujrat', 'mp', 491441, 'burhan@gmail.com', '9424122932', 'modi.png', '9424122932', '9424122932', 'Burhan123456', 491441, 1),
(5, '2018-08-20', 'Deepansh Dubey', 'XYZ', 'ASD', '9424122932', '9424122932', 'Pune                                    ', 'Pune                                    ', 'DSD@yahoo.in', '1998-09-27', 'male', 'opos', 'gn', 'Mandla', 'mp', 491441, 'deepansh@gmail.com', '9424122932', 'deeepansh1.png', '9424122932', '9424122932', 'Deep1234', 491441, 5);

-- --------------------------------------------------------

--
-- Table structure for table `subject_list`
--

CREATE TABLE `subject_list` (
  `id` int(11) NOT NULL,
  `subject` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_list`
--

INSERT INTO `subject_list` (`id`, `subject`) VALUES
(1, 'English'),
(2, 'Hindi'),
(3, 'Mathematics'),
(4, 'Physics'),
(5, 'Biology'),
(6, 'History'),
(7, 'Civics'),
(8, 'Geography');

-- --------------------------------------------------------

--
-- Table structure for table `years_list`
--

CREATE TABLE `years_list` (
  `id` int(11) NOT NULL,
  `year` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `years_list`
--

INSERT INTO `years_list` (`id`, `year`) VALUES
(1, '2018'),
(2, '2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batches_all`
--
ALTER TABLE `batches_all`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes_list`
--
ALTER TABLE `classes_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professor_joining`
--
ALTER TABLE `professor_joining`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_list`
--
ALTER TABLE `section_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_admission`
--
ALTER TABLE `student_admission`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `subject_list`
--
ALTER TABLE `subject_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `years_list`
--
ALTER TABLE `years_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batches_all`
--
ALTER TABLE `batches_all`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `classes_list`
--
ALTER TABLE `classes_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `professor_joining`
--
ALTER TABLE `professor_joining`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `section_list`
--
ALTER TABLE `section_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_admission`
--
ALTER TABLE `student_admission`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subject_list`
--
ALTER TABLE `subject_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `years_list`
--
ALTER TABLE `years_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
