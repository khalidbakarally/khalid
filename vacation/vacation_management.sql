-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2020 at 12:50 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vacation_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` varchar(30) NOT NULL,
  `dept_name` varchar(200) DEFAULT NULL,
  `EmpId` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `pid` varchar(20) NOT NULL,
  `title` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `EmpId` varchar(30) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `username` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`EmpId`, `name`, `email`, `DOB`, `phone`, `username`, `password`, `role`) VALUES
('staff01', 'Khalid Bakar Ally', 'allykhlid56@mail.com', '1996-06-24', 776689807, 'khalid', '12345', 'admin'),
('staff02', 'Fakih Bakar Ally', 'fakih@mail.com', '2006-06-01', 775674625, 'fakih', '12345', 'staff'),
('staff03', 'Bakar Ally Rajab', 'bakar@gmail.com', '2020-08-14', 775674623, 'bakar', '12345', 'director');

-- --------------------------------------------------------

--
-- Table structure for table `staff_position`
--

CREATE TABLE `staff_position` (
  `pid` varchar(100) DEFAULT NULL,
  `EmpId` varchar(30) DEFAULT NULL,
  `S_Date` date DEFAULT NULL,
  `E_Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff_vacation`
--

CREATE TABLE `staff_vacation` (
  `vac_id` int(11) DEFAULT NULL,
  `EmpId` varchar(30) DEFAULT NULL,
  `S_date` date DEFAULT NULL,
  `E_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vacation`
--

CREATE TABLE `vacation` (
  `vac_id` int(11) NOT NULL,
  `EmpId` varchar(30) NOT NULL,
  `type` varchar(200) DEFAULT NULL,
  `title` varchar(300) DEFAULT NULL,
  `status` varchar(50) DEFAULT 'pending...',
  `ready` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vacation`
--

INSERT INTO `vacation` (`vac_id`, `EmpId`, `type`, `title`, `status`, `ready`) VALUES
(4, 'staff02', 'with payment', 'i need to work', 'Accepted', 'Not readed'),
(5, 'staff02', 'No payment', 'for luxury', 'Accepted', 'Not readed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`),
  ADD KEY `EmpId` (`EmpId`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`EmpId`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `staff_position`
--
ALTER TABLE `staff_position`
  ADD KEY `pid` (`pid`),
  ADD KEY `EmpId` (`EmpId`);

--
-- Indexes for table `staff_vacation`
--
ALTER TABLE `staff_vacation`
  ADD KEY `EmpId` (`EmpId`),
  ADD KEY `vac_id` (`vac_id`);

--
-- Indexes for table `vacation`
--
ALTER TABLE `vacation`
  ADD PRIMARY KEY (`vac_id`),
  ADD KEY `EmpId` (`EmpId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vacation`
--
ALTER TABLE `vacation`
  MODIFY `vac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`EmpId`) REFERENCES `staff` (`EmpId`);

--
-- Constraints for table `staff_position`
--
ALTER TABLE `staff_position`
  ADD CONSTRAINT `staff_position_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `positions` (`pid`),
  ADD CONSTRAINT `staff_position_ibfk_2` FOREIGN KEY (`EmpId`) REFERENCES `staff` (`EmpId`);

--
-- Constraints for table `staff_vacation`
--
ALTER TABLE `staff_vacation`
  ADD CONSTRAINT `staff_vacation_ibfk_2` FOREIGN KEY (`EmpId`) REFERENCES `staff` (`EmpId`),
  ADD CONSTRAINT `staff_vacation_ibfk_3` FOREIGN KEY (`vac_id`) REFERENCES `vacation` (`vac_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
