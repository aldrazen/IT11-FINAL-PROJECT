-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2023 at 01:44 PM
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
-- Table structure for table `messagetbl`
--

CREATE TABLE `messagetbl` (
  `messageID` int(11) NOT NULL,
  `studentID` int(11) NOT NULL,
  `msg` text NOT NULL,
  `stat` text NOT NULL,
  `dateDelivered` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messagetbl`
--

INSERT INTO `messagetbl` (`messageID`, `studentID`, `msg`, `stat`, `dateDelivered`) VALUES
(10, 531681, 'gwapo kaayo ka dong', 'Delivered', '2023-11-26'),
(11, 531681, 'psstt 150', 'Delivered', '2023-11-26'),
(12, 505181, 'gwapo', 'Delivered', '2023-11-26'),
(13, 505181, 'gwapo', 'Delivered', '2023-11-26'),
(14, 505181, 'gwapo', 'Delivered', '2023-11-26'),
(15, 531681, 'drazen!', 'Delivered', '2023-11-26'),
(16, 531681, 'hi draz', 'Delivered', '2023-11-26'),
(17, 531681, 'trada', 'Delivered', '2023-11-26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_ID` int(4) NOT NULL,
  `admin_username` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_ID`, `admin_username`, `admin_password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `student_id` int(8) NOT NULL,
  `student_email` varchar(50) NOT NULL,
  `mobile_number` varchar(20) NOT NULL,
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
(505181, 'hello@hotmail.com', '639854674562', 'hello123', 'Gina', 'Non', 'BSIT', 3),
(525069, 'r.gudito.525069@umindanao.edu.ph', '639912947228', 'hello123', 'Ryann', 'Gudito', 'BSIT', 3),
(531681, 'a.sagarino.531681@umindanao.edu.ph', '639303382904', 'nezard123', 'drazen', 'sagarino', 'BSIT', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messagetbl`
--
ALTER TABLE `messagetbl`
  ADD PRIMARY KEY (`messageID`),
  ADD KEY `studentID` (`studentID`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_ID`),
  ADD UNIQUE KEY `admin_username` (`admin_username`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `student_email` (`student_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messagetbl`
--
ALTER TABLE `messagetbl`
  MODIFY `messageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `messagetbl`
--
ALTER TABLE `messagetbl`
  ADD CONSTRAINT `messagetbl_ibfk_1` FOREIGN KEY (`studentID`) REFERENCES `tbl_student` (`student_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
