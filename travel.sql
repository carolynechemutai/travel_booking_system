-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2017 at 12:57 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'carol', '123'),
(2, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `Passport_no` varchar(80) NOT NULL,
  `FullName` varchar(80) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Phone_Number` varchar(10) NOT NULL,
  `email_Address` date NOT NULL,
  `position` varchar(52) NOT NULL,
  `Date_of_Registration` date NOT NULL,
  `Marital_status` varchar(20) NOT NULL,
  `Date_of_Birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`Passport_no`, `FullName`, `Gender`, `Phone_Number`, `email_Address`, `position`, `Date_of_Registration`, `Marital_status`, `Date_of_Birth`) VALUES
('2548000', 'Caroline Chemutai', 'Female', '0784512632', '2017-09-05', 'Manenger', '2017-09-05', 'married', '2017-09-05');

-- --------------------------------------------------------

--
-- Table structure for table `travelplans`
--

CREATE TABLE `travelplans` (
  `plan_code` int(11) NOT NULL,
  `Fullname` varchar(100) NOT NULL,
  `Institution` varchar(100) NOT NULL,
  `venue` varchar(100) NOT NULL,
  `Date_of_travel` date NOT NULL,
  `Days_away` int(11) NOT NULL,
  `Leave_Days` int(11) NOT NULL,
  `Justification` varchar(100) NOT NULL,
  `Project` varchar(100) NOT NULL,
  `Budget_Line` int(11) NOT NULL,
  `Estmated_Travel_Cost` int(11) NOT NULL,
  `Additional_costs` int(11) NOT NULL,
  `Percentage_of_Travel_Cost` int(11) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `Applicable_Quarter` int(11) NOT NULL,
  `Total_Allotment` int(11) NOT NULL,
  `Total_Travel_Budget` int(11) NOT NULL,
  `Regional_Office` varchar(100) NOT NULL,
  `Communication_Support_Required` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `travelplans`
--

INSERT INTO `travelplans` (`plan_code`, `Fullname`, `Institution`, `venue`, `Date_of_travel`, `Days_away`, `Leave_Days`, `Justification`, `Project`, `Budget_Line`, `Estmated_Travel_Cost`, `Additional_costs`, `Percentage_of_Travel_Cost`, `Department`, `Applicable_Quarter`, `Total_Allotment`, `Total_Travel_Budget`, `Regional_Office`, `Communication_Support_Required`) VALUES
(1, 'Carolyne Chemutai', 'Staff', 'Nairobi Kenya', '2017-09-20', 3, 4, 'Will use the Remaining day to to travel back to work.', 'Research', 54000, 56000, 2000, 60, '2', 23, 60000, 3000, 'Westlands', '78454123'),
(2, 'Akinyi', 'Student', 'Mombasa', '2017-09-05', 5, 3, 'Will be able to return on time', 'Holiday', 6000, 2100, 300, 50, 'Managemnt', 545, 48, 41, '111', '07855313');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`Passport_no`);

--
-- Indexes for table `travelplans`
--
ALTER TABLE `travelplans`
  ADD PRIMARY KEY (`plan_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `travelplans`
--
ALTER TABLE `travelplans`
  MODIFY `plan_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
