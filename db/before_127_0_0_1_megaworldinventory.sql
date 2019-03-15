-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2019 at 10:57 AM
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
  `empl0y335_id` int(11) NOT NULL,
  `empl0y335_creator_no` int(11) NOT NULL,
  `empl0y335_fname` varchar(50) DEFAULT NULL,
  `empl0y335_mname` varchar(50) DEFAULT NULL,
  `empl0y335_lname` varchar(50) DEFAULT NULL,
  `empl0y335_age` int(50) DEFAULT NULL,
  `empl0y335_bdate` date DEFAULT NULL,
  `empl0y335_email` varchar(50) DEFAULT NULL,
  `empl0y335_contact` int(50) DEFAULT NULL,
  `empl0y335_address` text,
  `empl0y335_country` varchar(50) DEFAULT NULL,
  `empl0y335_status` int(1) DEFAULT NULL,
  `empl0y335_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `3mpl0y335`
--

INSERT INTO `3mpl0y335` (`empl0y335_id`, `empl0y335_creator_no`, `empl0y335_fname`, `empl0y335_mname`, `empl0y335_lname`, `empl0y335_age`, `empl0y335_bdate`, `empl0y335_email`, `empl0y335_contact`, `empl0y335_address`, `empl0y335_country`, `empl0y335_status`, `empl0y335_date`) VALUES
(1, 1, 'Nielsen', 'E.', 'Espiritu', 22, '1994-02-02', 'senii@gmail.com', 912391231, 'makati city', 'philippines', NULL, '2019-03-13 12:04:00'),
(2, 3, 'Gena', 'T', 'Tusi', 29, '2025-04-05', 'gtusi@megaworld.com', 2147483647, 'Makati City', 'Philippines', NULL, '2019-03-14 14:04:03'),
(3, 6, 'Kaye', 'Nacario', 'Palileo', 25, '2022-05-25', 'knacario@gmail.com', 1923123912, 'Makati City', 'Philippines', NULL, '2019-03-13 12:21:28'),
(4, 1, 'Hannah', 'Mallapre', 'Costas', 22, '1996-01-11', 'hcostas@gmail.com', 2147483647, 'West Rembo Zero Block Makati City', 'Philippines', NULL, '2019-03-13 12:26:05'),
(5, 1, 'Kevs', 'Flor', 'Ayag', 22, '1992-04-02', 'kayag.global@megaworldcorp.com', 192312312, 'wqeqwe', 'eqweqweqw', NULL, '2019-03-13 12:44:46');

-- --------------------------------------------------------

--
-- Table structure for table `u553r5`
--

CREATE TABLE `u553r5` (
  `u553r5_id` int(11) NOT NULL,
  `u553r5_fname` varchar(50) NOT NULL,
  `u553r5_uname` varchar(255) NOT NULL,
  `u553r5_upass` varchar(255) NOT NULL,
  `u553r5_lname` varchar(50) NOT NULL,
  `u553r5_mname` varchar(50) NOT NULL,
  `u553r5_email` varchar(50) NOT NULL,
  `u553r5_contact` varchar(100) NOT NULL,
  `u553r5_position` varchar(50) NOT NULL,
  `u553r5_active` int(10) NOT NULL,
  `u553r5_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `u553r5`
--

INSERT INTO `u553r5` (`u553r5_id`, `u553r5_fname`, `u553r5_uname`, `u553r5_upass`, `u553r5_lname`, `u553r5_mname`, `u553r5_email`, `u553r5_contact`, `u553r5_position`, `u553r5_active`, `u553r5_date`) VALUES
(1, 'Sean', 'seann', '0b1f54a61fa4b42f021b4703a8c8a7842a8323f9d966bf4d9e9a6cdb34432e26', 'Narvasa', 'D', 'sa.narvasa@gmail.com', '09166860971', '4dm1n15tr4t0r', 1, '2019-03-12 17:50:05'),
(2, 'Gena', 's', '043a718774c572bd8a25adbeb1bfcd5c0256ae11cecf9f9c3f925d0e52beaf89', 'Tusi', 'L', 's@s', '2', 'r36u14ru53r', 1, '2019-03-14 13:08:05'),
(3, 'Spencer', 'shart', '01206183ad65e887bf6fa0c070bc0ccab9532feff45c9c658a0f879bcd7f5eb0', 'Hart', 'Madriaga', 'shart.global@megaworldcorp.com', '091239812312', '4dm1n15tr4t0r', 1, '2019-03-12 17:16:29'),
(5, 'Anne', 'anne', '90b8de4051f02b7a29484341f3a903e1b2c6a233f5465e19c634535c7b315e6f', 'Marisse', 'S', 'amarisse.global@megaworldcorp.com', '091231231924', 'r36u14ru53r', 1, '2019-03-12 17:31:06'),
(6, 'Darnell', 'nell', '604de9dbdb1909b6ad941a1a52b06e83c09750c0afb18726eca4cb943b9b91e2', 'Nacario', 'Corpuz', 'dnacario.k1194123@umak.edu.ph', '091239123912', 'r36u14ru53r', 1, '2019-03-12 17:33:33'),
(8, 'Ivan', 'ivan', 'cd0b9452fc376fc4c35a60087b366f70d883fc901524daf1f122fbd319384f6a', 'Correa', 'X', 'ivan@ue.com', '091283182312', 'r36u14ru53r', 1, '2019-03-13 12:43:45'),
(9, 'Roniel', 'roniel', 'a8c0808d025da1aff2a2ffdc70d4f5159df705d95b5e9a299628cc1a299e283f', 'Canto', 'r', 's@s', '12312312', '', 1, '2019-03-13 12:43:46'),
(10, 'Jonah', 'x', '2d711642b726b04401627ca9fbac32f5c8530fb1903cc4db02258717921a4881', 'Pardo', 'P.', 'x@x', '10101', '', 1, '2019-03-14 09:14:37'),
(11, 'Jin', 'jin', '4e766f099e980c1ed89164271b470d32d330563ac6f866f3a46146bb429bb71f', 'Kazama', 'T.', 'jinkazza@tekken.com', '011191923', '', 0, '2019-03-14 09:12:19'),
(12, 'kjkaskldaj', 'gg', 'cbd3cfb9b9f51bbbfbf08759e243f5b3519cbf6ecc219ee95fe7c667e32c0a8d', 'jkljaslkdjals', 'klasjdlkajsd', 'aklsjdl@aklsjdklajsd', '1230192312', 'r36u14ru53r', 0, '2019-03-14 09:14:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `3mpl0y335`
--
ALTER TABLE `3mpl0y335`
  ADD PRIMARY KEY (`empl0y335_id`);

--
-- Indexes for table `u553r5`
--
ALTER TABLE `u553r5`
  ADD PRIMARY KEY (`u553r5_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `3mpl0y335`
--
ALTER TABLE `3mpl0y335`
  MODIFY `empl0y335_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `u553r5`
--
ALTER TABLE `u553r5`
  MODIFY `u553r5_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
