-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 10, 2016 at 06:21 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rebedw_survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE IF NOT EXISTS `survey` (
  `id` int(3) NOT NULL,
  `user` varchar(180) COLLATE utf8_bin NOT NULL,
  `display_image` varchar(180) COLLATE utf8_bin NOT NULL,
  `choice_image` varchar(180) COLLATE utf8_bin NOT NULL,
  `display_time` varchar(180) COLLATE utf8_bin NOT NULL,
  `choice_time` varchar(180) COLLATE utf8_bin NOT NULL,
  `session_id` varchar(20) COLLATE utf8_bin NOT NULL,
  `display_linux_time` varchar(20) COLLATE utf8_bin NOT NULL,
  `choice_linux_time` varchar(20) COLLATE utf8_bin NOT NULL,
  `time_difference` varchar(6) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`id`, `user`, `display_image`, `choice_image`, `display_time`, `choice_time`, `session_id`, `display_linux_time`, `choice_linux_time`, `time_difference`) VALUES
(1, 'User 1', 'defiant-boy', 'teddy', '2016-10-10 05:44:50', '2016-10-10 05:44:54', '1376216', '1476071090', '1476071094', '4'),
(2, 'User2', 'defiant-boy', 'teddy', '2016-10-10 06:19:13', '2016-10-10 06:19:16', '2367342', '1476073153', '1476073156', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
