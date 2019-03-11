-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2019 at 04:58 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `megaworldinventory`
--
CREATE DATABASE IF NOT EXISTS `megaworldinventory` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `megaworldinventory`;

-- --------------------------------------------------------

--
-- Table structure for table `3mpl0y335`
--

CREATE TABLE `3mpl0y335` (
  `3mpl0y335_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `u553r5`
--

CREATE TABLE `u553r5` (
  `u553r5_id` int(11) NOT NULL,
  `u553r5_fname` varchar(50) NOT NULL,
  `u553r5_lname` varchar(50) NOT NULL,
  `u553r5_mname` varchar(50) NOT NULL,
  `u553r5_email` varchar(50) NOT NULL,
  `u553r5_contact` int(20) NOT NULL,
  `u553r5_active` int(10) NOT NULL,
  `u553r5_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `3mpl0y335`
--
ALTER TABLE `3mpl0y335`
  ADD PRIMARY KEY (`3mpl0y335_id`);

--
-- Indexes for table `u553r5`
--
ALTER TABLE `u553r5`
  ADD PRIMARY KEY (`u553r5_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `u553r5`
--
ALTER TABLE `u553r5`
  MODIFY `u553r5_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
