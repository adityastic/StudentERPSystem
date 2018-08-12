-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 12, 2018 at 11:17 AM
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
(1, '2018-08-09', 'bhbshcj sbvbad', '8446593128', '0000-00-00', 'cbh@g.c', 'female', 'obc', 'mp', 'fvdf', 'aneg', 'csbdvbhs', 'ssbdgs', 411043, 411043, '../uploads/avatar6.jpg', 'asasgf', 'scsjdhgv', 'GFG5FFFD5GDSs', '', '', '', '', '', ''),
(2, '2018-08-09', 'bhbshcj sbvbad', '8446593128', '0000-00-00', 'cbh@g.c', 'female', 'obc', 'mp', 'fvdf', 'aneg', 'csbdvbhs', 'ssbdgs', 411043, 411043, '../uploads/avatar61.jpg', 'asasgf', 'scsjdhgv', 'GFG5FFFD5GDSs', '', '', '', '', '', '');

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
-- Dumping data for table `student_admission`
--

INSERT INTO `student_admission` (`Id`, `adm_date`, `stud_name`, `father_name`, `mother_name`, `father_number`, `mother_number`, `current_address`, `perma_address`, `father_email`, `stud_dob`, `stud_gender`, `stud_blood_group`, `stud_caste`, `city`, `state`, `perma_address_pin`, `stud_email`, `stud_phone`, `photo`, `father_o_number`, `mother_o_number`, `password`, `class_id`, `year_id`, `currrent_address_pin`) VALUES
(1, '2018-08-09', 'Aditya Gupta', 'Ravindra Gupta', 'Kiran Gupta', '9423232322', '1123456789', 'Katraj Pune', 'Khajrana Indore', 'gg@gmail.com', '2018-08-02', 'male', 'opos', 'gn', 'Indore', 'mp', 123455, 'Aditya@gmail.com', '8458892226', '../uploads/rakul_preet_singh_bollywood_actress_celebrity_model_girl_beautiful_brunette_pretty_cute_beauty_sexy_hot_pose_face_eyes_hair_lips_smile_figure_indian_3165x2048.jpg', '9423232322', '1123456789', 'Ag123456', 1, 2017, 412323),
(2, '2018-08-09', 'Aditya Gupta', 'Ravindra Gupta', 'Kiran Gupta', '9423232322', '1123456789', 'Katraj Pune', 'Khajrana Indore', 'gg@gmail.com', '2018-08-02', 'male', 'opos', 'gn', 'Indore', 'mp', 123455, 'Aditya@gmail.com', '8458892226', '../uploads/DEEPIKA_PADUKONE_indian_film_actress_model_bollywood_babe__64__4252x3189.jpg', '9423232322', '1123456789', 'Ag123456', 2, 2017, 412323),
(3, '2018-08-09', 'Aditya Gupta', 'Ravindra Gupta', 'Kiran Gupta', '9423232322', '1123456789', 'Katraj Pune', 'Khajrana Indore', 'gg@gmail.com', '2018-08-02', 'male', 'opos', 'gn', 'Indore', 'mp', 123455, 'Aditya@gmail.com', '8458892226', '../uploads/avatar10.jpg', '9423232322', '1123456789', 'Ag123456', 1, 2017, 412323);

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
(2, 'English'),
(4, 'Mathematics');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `professor_joining`
--
ALTER TABLE `professor_joining`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `professor_joining`
--
ALTER TABLE `professor_joining`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_admission`
--
ALTER TABLE `student_admission`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subject_list`
--
ALTER TABLE `subject_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
