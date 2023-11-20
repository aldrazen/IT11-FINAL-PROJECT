-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2023 at 08:11 AM
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
-- Database: `umconnect`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `student_id` int(8) NOT NULL,
  `student_email` varchar(50) NOT NULL,
  `mobile_number` varchar(11) NOT NULL,
  `student_password` varchar(20) NOT NULL,
  `student_fname` varchar(100) NOT NULL,
  `student_lname` varchar(100) NOT NULL,
  `student_course` varchar(20) NOT NULL,
  `student_yearrlevel` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`student_id`, `student_email`, `mobile_number`, `student_password`, `student_fname`, `student_lname`, `student_course`, `student_yearrlevel`) VALUES
(1738, 'edsheeran@gmail.com', '9091013645', 'password123', 'ed', 'sheeran', 'BSIT', 3),
(5150, 'swaelee@gmail.com', '9091013645', 'password', 'swae', 'lee', 'BSIT', 3),
(12345, 'test@umindanao.edu.ph', '096642069', 'uwuwuuwu', '', '0', '0', 0),
(51515, 'khalid@gmail.com', '9091013645', 'passwordd', 'khalid', 'location', 'BSIT', 2),
(123456, 'ewqewqewq@gmail.com', '0909054555', 'localhero123', '', '0', '0', 0),
(531681, 'a.sagarino.531681@umindanao.edu.ph', '09091013645', 'localhero123', '', '0', '0', 0),
(531714, 'l.lao.531714@umindanao.edu.ph', '09184956237', 'Keyboardist', '', '0', '0', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `student_email` (`student_email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
