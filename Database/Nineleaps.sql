-- phpMyAdmin SQL Dump
-- version 4.4.15.8
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 07, 2017 at 11:53 AM
-- Server version: 5.6.31
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Nineleaps`
--

-- --------------------------------------------------------

--
-- Table structure for table `Employee`
--

CREATE TABLE IF NOT EXISTS `Employee` (
  `Id` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Designation` varchar(45) NOT NULL,
  `Manager` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Employee`
--

INSERT INTO `Employee` (`Id`, `Name`, `Designation`, `Manager`) VALUES
(1, 'Anchal', 'CEO', NULL),
(2, 'Anika', 'Coo', 'Anchal'),
(3, 'Birju', 'Vp Marketing', 'Anchal'),
(4, 'Devak', 'Head(HR)', 'Anchal'),
(5, 'Phani', 'Head(Finance)', 'Anchal'),
(6, 'Hardik', 'Manager Sales', 'Ashlesha'),
(7, 'Jaganmay', 'Manager Marketing', 'Birju'),
(8, 'Lakhan', 'Recruitment Manager', 'Devak'),
(9, 'Naamdev', 'L&D Manager', 'Devak'),
(10, 'Pradosh', 'Facilities', 'Devak'),
(11, 'Sachit', 'CTO', 'Anchal'),
(12, 'Udit', 'Accounts Manager', 'Anika'),
(13, 'Yatiyasa', 'Business Analyst', 'Anika'),
(14, 'Zena', 'Scrum Master', 'Anika'),
(15, 'Aahna', 'Head(Quality)', 'Anika'),
(16, 'Yashraj', 'Quality Manager', 'Aahna'),
(17, 'Veena', 'Tester', 'Yashraj'),
(18, 'Torsha', 'Mobile Tester', 'Yashraj'),
(19, 'Ruchita', 'Tester', 'Yashraj'),
(20, 'Oindrila', 'Mobile Tester', 'Yashraj'),
(21, 'Madhulika ', 'Head(Development)', 'Anika'),
(22, 'Kimaya', 'Developer', 'Madulika'),
(23, 'Indu', 'Developer', 'Madulika'),
(24, 'Gayatri', 'Developer', 'Madulika'),
(25, 'Ekaa', 'Solution Architect', 'Sachit'),
(26, 'Chitral', 'Solution Architect', 'Sachit'),
(27, 'Ashlesha', 'Vp Sales', 'Anchal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Employee`
--
ALTER TABLE `Employee`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Employee`
--
ALTER TABLE `Employee`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
