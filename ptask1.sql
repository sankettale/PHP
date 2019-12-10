-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 10, 2019 at 10:16 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ptask1`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `file_name`, `uploaded_on`, `status`) VALUES
(1, 'fb.png', '2019-11-29 12:43:26', '1'),
(2, 'lock.png', '2019-11-29 12:43:43', '1'),
(3, 'mail.png', '2019-11-29 12:43:43', '1'),
(4, 'top-key.png', '2019-11-29 12:44:21', '1'),
(5, 'top-lock.png', '2019-11-29 12:44:21', '1'),
(6, 'top-note.png', '2019-11-29 12:44:21', '1'),
(7, 'twt.png', '2019-11-29 12:44:21', '1'),
(8, 'top-key.png', '2019-11-29 12:51:05', '1'),
(9, 'top-lock.png', '2019-11-29 12:51:05', '1'),
(10, 'top-note.png', '2019-11-29 12:51:05', '1'),
(11, 'twt.png', '2019-11-29 12:51:05', '1'),
(12, 'uploads/top-key.pngtop-key.png', '2019-11-29 13:13:53', '1'),
(13, 'uploads/top-lock.pngtop-lock.png', '2019-11-29 13:13:53', '1');

-- --------------------------------------------------------

--
-- Table structure for table `multi`
--

DROP TABLE IF EXISTS `multi`;
CREATE TABLE IF NOT EXISTS `multi` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `file` varchar(1000) NOT NULL,
  `file1` varchar(1000) NOT NULL,
  `file2` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `multi`
--

INSERT INTO `multi` (`id`, `file`, `file1`, `file2`) VALUES
(1, 'uploads/', 'login/', 'uploads/'),
(2, 'uploads/', 'uploads/', 'uploads/'),
(3, '1', '', 'AdminLTE-2.4.5/Dr. N. D. Parlawar .jpg'),
(4, '1', '1', 'AdminLTE-2.4.5/Dr. N. D. Parlawar .jpg'),
(5, 'uploads/gandhijayanti-vncab-19.pdf', 'uploads/nssestaday-vncab-19.pdf', 'uploads/dummy.png'),
(6, 'uploads/', 'login/Dr. N. D. Parlawar .jpg', 'AdminLTE-2.4.5/Dr. N. D. Parlawar .jpg'),
(7, 'uploads/', 'login/', 'AdminLTE-2.4.5/'),
(9, 'uploads/Dr. N. D. Parlawar .jpg', 'login/Dr. N. D. Parlawar .jpg', 'AdminLTE-2.4.5/'),
(8, 'uploads/', 'login/dummy.png', 'AdminLTE-2.4.5/'),
(10, 'uploads/Dr. N. D. Parlawar .jpg', 'login/3b791451041b68cef33ade8a0fa1272c.jpg', 'AdminLTE-2.4.5/3b791451041b68cef33ade8a0fa1272c.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `task1`
--

DROP TABLE IF EXISTS `task1`;
CREATE TABLE IF NOT EXISTS `task1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(1000) NOT NULL,
  `pass` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task1`
--

INSERT INTO `task1` (`id`, `user`, `pass`) VALUES
(23, 'akashdip@gmail.com', 'asdfghj'),
(22, 'SRK123@yahoo.cm', 'asas'),
(21, 'santosh@hotmail.com', 'sdzdz'),
(19, 'santosh123@gmal.com', 'okokok'),
(15, 'sankettale@Yahoo.com', 'mnbvcxz');

-- --------------------------------------------------------

--
-- Table structure for table `task2`
--

DROP TABLE IF EXISTS `task2`;
CREATE TABLE IF NOT EXISTS `task2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(1000) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task2`
--

INSERT INTO `task2` (`id`, `fullname`, `address`, `mobile`, `email`) VALUES
(7, 'sameer kadgaye', 'nandanwan nagpur', '7896541231', 'Sameer@gmail.com'),
(8, 'sanket', 'Hingna Nagpur', '4568975225', 'sankettale700@gmail.com'),
(9, 'santosh', 'Hingna Nagpur', '779797699766', 'santosh@gmail.com'),
(10, 'akashdip', 'Akola', '7896541230', 'akashdip@gmail');

-- --------------------------------------------------------

--
-- Table structure for table `task3`
--

DROP TABLE IF EXISTS `task3`;
CREATE TABLE IF NOT EXISTS `task3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file` varchar(1111) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task3`
--

INSERT INTO `task3` (`id`, `file`, `created`, `modified`) VALUES
(39, 'login/dummy.png', '2019-12-09 13:05:25', '2019-12-09 13:05:25'),
(38, 'login/contact_banner12.jpg', '2019-11-29 11:37:58', '2019-11-29 11:37:58'),
(37, 'login/iceico group.png', '2019-11-29 11:32:15', '2019-11-29 11:32:15'),
(36, 'login/female-profile.jpg', '2019-11-29 11:31:58', '2019-11-29 11:31:58'),
(35, 'login/jlpt.png', '2019-11-28 12:24:28', '2019-11-28 12:24:28');

-- --------------------------------------------------------

--
-- Table structure for table `task4`
--

DROP TABLE IF EXISTS `task4`;
CREATE TABLE IF NOT EXISTS `task4` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(1111) NOT NULL,
  `email` varchar(1111) NOT NULL,
  `website` varchar(1000) NOT NULL,
  `comment` varchar(10000) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task4`
--

INSERT INTO `task4` (`id`, `name`, `email`, `website`, `comment`, `gender`, `created`, `modified`) VALUES
(1, '', '', '', '', '', '2019-11-28 15:09:39', '2019-11-28 15:09:39'),
(2, 'asdfg', '', '', '', '', '2019-11-28 15:10:05', '2019-11-28 15:10:05'),
(3, '', '', '', '', '', '2019-11-28 15:13:24', '2019-11-28 15:13:24'),
(4, '', '', '', '', '', '2019-11-28 15:15:50', '2019-11-28 15:15:50'),
(5, '', '', '', '', '', '2019-11-28 15:17:30', '2019-11-28 15:17:30'),
(6, '', '', '', '', 'on', '2019-11-28 15:17:38', '2019-11-28 15:17:38'),
(7, '', '', '', '', 'on', '2019-11-28 15:18:56', '2019-11-28 15:18:56'),
(8, '', '', '', '', 'female', '2019-11-28 15:19:34', '2019-11-28 15:19:34'),
(9, '', '', '', '', 'female', '2019-11-28 15:22:21', '2019-11-28 15:22:21'),
(10, '', '', '', '', 'female', '2019-11-28 15:24:54', '2019-11-28 15:24:54'),
(11, '', '', '', '', 'female', '2019-11-28 15:25:44', '2019-11-28 15:25:44'),
(12, '', '', '', '', '', '2019-11-28 15:29:44', '2019-11-28 15:29:44'),
(13, '', '', '', '', '', '2019-11-28 15:37:58', '2019-11-28 15:37:58'),
(14, 'xcfghjk', 'sankettale45@gmail.com', 'http://localhost/Php/fvalidation.php', 'olkjmnb vhgjkl;olp[lkojihujbvn m,.lknjbhn', 'female', '2019-11-28 15:43:32', '2019-11-28 15:43:32'),
(15, 'xcfghjk', 'sankettale45@gmail.com', 'http://localhost/Php/fvalidation.php', 'olkjmnb vhgjkl;olp[lkojihujbvn m,.lknjbhn', 'female', '2019-11-28 15:46:11', '2019-11-28 15:46:11'),
(16, '', '', '', '', '', '2019-11-28 17:23:41', '2019-11-28 17:23:41'),
(17, 'name', 'email', 'website', 'comment', 'gender', '2019-11-28 17:24:38', '2019-11-28 17:24:38'),
(18, '', '', '', '', 'male', '2019-11-28 17:26:11', '2019-11-28 17:26:11'),
(19, '', '', '', '', '', '2019-11-28 17:34:47', '2019-11-28 17:34:47'),
(20, '', '', '', '', '', '2019-11-28 17:35:06', '2019-11-28 17:35:06'),
(21, '', '', '', '', 'male', '2019-11-28 17:35:54', '2019-11-28 17:35:54'),
(22, 'asdfg', '', '', '', '', '2019-11-28 17:38:43', '2019-11-28 17:38:43'),
(23, 'asdf', 'sankettale45@gmail.com', '', '', 'male', '2019-11-28 18:01:11', '2019-11-28 18:01:11'),
(24, 'AS', 'sankettale45@gmail.com', 'http://localhost/Php/fvalidation.php', 'asd', 'male', '2019-11-28 18:11:03', '2019-11-28 18:11:03'),
(25, 'hj', '', '', '', 'on', '2019-11-28 18:31:17', '2019-11-28 18:31:17'),
(26, '', '', '', '', 'on', '2019-11-28 18:31:45', '2019-11-28 18:31:45'),
(27, 'asdfgh', 'sankettale45@gmail.com', 'http://localhost/Php/fvalidation.php', 'sdf', 'on', '2019-11-28 18:53:50', '2019-11-28 18:53:50'),
(28, 'sfdg', 'sankettale45@gmail.com', 'http://localhost/Php/fvalidation.php', 'dsf', 'on', '2019-11-28 18:54:32', '2019-11-28 18:54:32'),
(29, 'asdfb', 'sankettale45@gmail.com', 'http://localhost/Php/fvalidation.php', 'asdfbn', 'Female', '2019-11-28 18:57:14', '2019-11-28 18:57:14');

-- --------------------------------------------------------

--
-- Table structure for table `task5`
--

DROP TABLE IF EXISTS `task5`;
CREATE TABLE IF NOT EXISTS `task5` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(1000) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task5`
--

INSERT INTO `task5` (`id`, `file_name`, `created`, `modified`) VALUES
(5, 'uploads/bg.jpg', '2019-11-29 12:32:00', '2019-11-29 12:32:00'),
(6, 'uploads/lock.png', '2019-11-29 12:32:20', '2019-11-29 12:32:20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
