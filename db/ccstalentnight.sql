-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2017 at 06:13 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ccstalentnight`
--

-- --------------------------------------------------------

--
-- Table structure for table `judge`
--

CREATE TABLE IF NOT EXISTS `judge` (
  `judge_id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `judge`
--

INSERT INTO `judge` (`judge_id`, `username`, `name`, `image`) VALUES
(12, 'Judge 1', 'Judge Sample', ''),
(13, 'Judge 2', 'Judge Sample', ''),
(18, 'Judge3', 'Judge Lang', '');

-- --------------------------------------------------------

--
-- Table structure for table `mrcandidate`
--

CREATE TABLE IF NOT EXISTS `mrcandidate` (
  `mrcan_id` int(11) NOT NULL,
  `mrcan_no` int(11) NOT NULL,
  `mrcan_name` varchar(50) NOT NULL,
  `mrprofile` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mrcandidate`
--

INSERT INTO `mrcandidate` (`mrcan_id`, `mrcan_no`, `mrcan_name`, `mrprofile`) VALUES
(32, 1, 'Jose Jeino Solivio', 'uploads/candidate/jino.png'),
(33, 2, 'Mark Poblico', 'uploads/candidate/mark_publico.png'),
(34, 3, 'Christopher Galon', 'uploads/candidate/christopher_galon.png'),
(35, 4, 'Chremarel Turbanus', 'uploads/candidate/chremarel_turbanos.png'),
(36, 5, 'Kent Mykko Tolentino', 'uploads/candidate/kent_myco_tolentino.png'),
(37, 6, 'Jason Mark Pantaleon', 'uploads/candidate/pantaleon_mark_jason.png'),
(38, 7, 'Richard Bula', 'uploads/candidate/richard_bola.png'),
(39, 8, 'Nigel Anthony Oliveros', 'uploads/candidate/nigel_oliveros.png'),
(40, 9, 'Novel Chavez', 'uploads/candidate/novel_chavez.png'),
(41, 10, 'Jeff Ralph Sisles ', 'uploads/candidate/sisles.png');

-- --------------------------------------------------------

--
-- Table structure for table `mrtabulation`
--

CREATE TABLE IF NOT EXISTS `mrtabulation` (
  `mrtab_id` int(11) NOT NULL,
  `mrcan_no` int(11) NOT NULL,
  `mrcan_name` varchar(50) NOT NULL,
  `judge1` float NOT NULL,
  `judge2` float NOT NULL,
  `judge3` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mrtabulation`
--

INSERT INTO `mrtabulation` (`mrtab_id`, `mrcan_no`, `mrcan_name`, `judge1`, `judge2`, `judge3`, `total`) VALUES
(25, 1, 'Jose Jeino Solivio', 0, 0, 0, 0),
(26, 2, 'Mark Poblico', 0, 0, 0, 0),
(27, 3, 'Christopher Galon', 0, 0, 0, 0),
(28, 4, 'Chremarel Turbanus', 0, 0, 0, 0),
(29, 5, 'Kent Mykko Tolentino', 0, 0, 0, 0),
(30, 6, 'Jason Mark Pantaleon', 0, 0, 0, 0),
(31, 7, 'Richard Bula', 0, 0, 0, 0),
(32, 8, 'Nigel Anthony Oliveros', 0, 0, 0, 0),
(33, 9, 'Novel Chavez', 0, 0, 0, 0),
(34, 10, 'Jeff Ralph Sisles', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mrtop5`
--

CREATE TABLE IF NOT EXISTS `mrtop5` (
  `mrtop_id` int(11) NOT NULL,
  `mrcan_id` int(11) NOT NULL,
  `mrcan_no` int(11) NOT NULL,
  `mrcan_name` varchar(50) NOT NULL,
  `mrcan_profile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mscandidate`
--

CREATE TABLE IF NOT EXISTS `mscandidate` (
  `mscan_id` int(11) NOT NULL,
  `mscan_no` int(11) NOT NULL,
  `mscan_name` varchar(50) NOT NULL,
  `msprofile` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mscandidate`
--

INSERT INTO `mscandidate` (`mscan_id`, `mscan_no`, `mscan_name`, `msprofile`) VALUES
(7, 1, 'Sherlyn Mata', 'uploads/candidate/sherlyn.png'),
(8, 2, 'Krystel Dawn Aloba', 'uploads/candidate/krystel_dawn.png'),
(9, 3, 'Maica Mangubat', 'uploads/candidate/myca_mangubat.png'),
(10, 4, 'Cristina Castillo', 'uploads/candidate/cristina_castillo.png'),
(11, 5, 'Jenelyn Giducos', 'uploads/candidate/jenelyn_giducos.png'),
(12, 6, 'Sharmaine Enojo', 'uploads/candidate/sharmaine.png'),
(13, 7, 'Daryl Stefanie Sevilla', 'uploads/candidate/darlyn_stefanie.png'),
(14, 8, 'Gladys Mae Dionzon', 'uploads/candidate/gladys_dionzon.png'),
(15, 9, 'Anna Mae Desuyo', 'uploads/candidate/ana_mae_desuyo.png'),
(16, 10, 'Cherie Mae Batain', 'uploads/candidate/chery_mae_batain.png');

-- --------------------------------------------------------

--
-- Table structure for table `mstabulation`
--

CREATE TABLE IF NOT EXISTS `mstabulation` (
  `mstab_id` int(11) NOT NULL,
  `mscan_no` int(11) NOT NULL,
  `mscan_name` varchar(50) NOT NULL,
  `judge1` float NOT NULL,
  `judge2` float NOT NULL,
  `judge3` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstabulation`
--

INSERT INTO `mstabulation` (`mstab_id`, `mscan_no`, `mscan_name`, `judge1`, `judge2`, `judge3`, `total`) VALUES
(28, 1, 'Sherlyn Mata', 0, 0, 0, 0),
(29, 2, 'Krystel Dawn Aloba', 0, 0, 0, 0),
(30, 3, 'Maica Mangubat', 0, 0, 0, 0),
(31, 4, 'Cristina Castillo', 0, 0, 0, 0),
(32, 5, 'Jenelyn Giducos', 0, 0, 0, 0),
(33, 6, 'Sharmaine Enojo', 0, 0, 0, 0),
(34, 7, 'Daryl Stefanie Sevilla', 0, 0, 0, 0),
(35, 8, 'Gladys Mae Dionzon', 0, 0, 0, 0),
(36, 9, 'Anna Mae Desuyo', 0, 0, 0, 0),
(37, 10, 'Cherie Mae Batain', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mstop5`
--

CREATE TABLE IF NOT EXISTS `mstop5` (
  `mstop_id` int(11) NOT NULL,
  `mscan_id` int(11) NOT NULL,
  `mscan_no` int(11) NOT NULL,
  `mscan_name` varchar(50) NOT NULL,
  `mscan_profile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`) VALUES
(1, 'ducay', '4a1be6d670d56ceb27d8d2114f971a99'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `judge`
--
ALTER TABLE `judge`
  ADD PRIMARY KEY (`judge_id`);

--
-- Indexes for table `mrcandidate`
--
ALTER TABLE `mrcandidate`
  ADD PRIMARY KEY (`mrcan_id`);

--
-- Indexes for table `mrtabulation`
--
ALTER TABLE `mrtabulation`
  ADD PRIMARY KEY (`mrtab_id`);

--
-- Indexes for table `mrtop5`
--
ALTER TABLE `mrtop5`
  ADD PRIMARY KEY (`mrtop_id`);

--
-- Indexes for table `mscandidate`
--
ALTER TABLE `mscandidate`
  ADD PRIMARY KEY (`mscan_id`);

--
-- Indexes for table `mstabulation`
--
ALTER TABLE `mstabulation`
  ADD PRIMARY KEY (`mstab_id`);

--
-- Indexes for table `mstop5`
--
ALTER TABLE `mstop5`
  ADD PRIMARY KEY (`mstop_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `judge`
--
ALTER TABLE `judge`
  MODIFY `judge_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `mrcandidate`
--
ALTER TABLE `mrcandidate`
  MODIFY `mrcan_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `mrtabulation`
--
ALTER TABLE `mrtabulation`
  MODIFY `mrtab_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `mrtop5`
--
ALTER TABLE `mrtop5`
  MODIFY `mrtop_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mscandidate`
--
ALTER TABLE `mscandidate`
  MODIFY `mscan_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `mstabulation`
--
ALTER TABLE `mstabulation`
  MODIFY `mstab_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `mstop5`
--
ALTER TABLE `mstop5`
  MODIFY `mstop_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
