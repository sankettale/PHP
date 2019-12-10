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
-- Database: `adminpanel`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

DROP TABLE IF EXISTS `signup`;
CREATE TABLE IF NOT EXISTS `signup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `password`, `created`, `modified`) VALUES
(25, 'extra', 'extra@mail.com', '202cb962ac59075b964b07152d234b70', '2019-11-21 12:14:52', '2019-11-21 12:16:28');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

DROP TABLE IF EXISTS `student_info`;
CREATE TABLE IF NOT EXISTS `student_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(1000) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `city` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `sports` varchar(100) NOT NULL,
  `uploadimg` varchar(1000) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `name`, `address`, `city`, `mobile`, `email`, `dob`, `gender`, `sports`, `uploadimg`, `created`, `modified`) VALUES
(1, 'asdc', 'sdcvf', 'Nagpur', '7894561230', 'extra@mail.com', '2019-11-15', 'male', 'Array', '3', '2019-11-26 17:50:15', '2019-11-26 17:50:15'),
(2, 'Sameer Kadgaye', 'crpf gate', 'Nagpur', '7896321450', 'sameer@gmail.com', '2019-11-01', 'female', 'Array', '4', '2019-11-26 17:54:42', '2019-11-26 17:54:42'),
(3, 'Sanket Tale ', 'sssdfg', 'Amravati', '7896541230', 'extra@mail.com', '2019-11-13', 'male', 'cricket,cricket', '3', '2019-11-26 18:18:22', '2019-11-26 18:18:22'),
(4, 'asdfgh', 'cvbnm', 'Akola', '1234567899', 'extra@mail.com', '2019-11-02', 'female', 'kabbadi,Hockey', '3', '2019-11-26 18:23:17', '2019-11-26 18:23:17'),
(5, 'ferty', 'fg', 'Nagpur', '51556565', 'Sameer@gmail.com', '2019-11-08', 'male', 'cricket,kabbadi', '6', '2019-11-27 14:01:04', '2019-11-27 14:01:04'),
(6, 'asdfghj', 'asdfghjk', 'Amravati', '23456', 'sankettale6@gmail.com', '2019-11-01', 'male', 'kabbadi,Hockey', '', '2019-11-27 18:39:39', '2019-11-27 18:39:39'),
(7, 'asdfghj', 'asdfghjk', 'Amravati', '123456789', 'Sameer@gmail.com', '2019-11-08', 'male', 'kabbadi,Hockey', '', '2019-11-27 18:42:45', '2019-11-27 18:42:45'),
(8, 'asdfghjk', 'kjhgfdsa', 'Amravati', '098765434', 'sankettale45@gmail.com', '2000-02-22', 'male', 'kabbadi,Hockey', '', '2019-11-27 18:45:53', '2019-11-27 18:45:53'),
(9, 'asdfghj', 'lkjhg', 'Amravati', '11234567', 'extra@mail.com', '2019-11-06', 'male', 'cricket', '', '2019-11-28 11:56:27', '2019-11-28 11:56:27'),
(10, 'asd', 'asdfgh', 'Nagpur', '123456', 'extra@mail.com', '2019-11-01', 'male', 'kabbadi', '', '2019-11-28 11:57:29', '2019-11-28 11:57:29'),
(11, 'asd', 'asdfgh', 'Nagpur', '123456', 'extra@mail.com', '2019-11-01', 'male', 'kabbadi', '', '2019-11-28 11:58:39', '2019-11-28 11:58:39'),
(12, 'asd', 'asdfgh', 'Nagpur', '123456', 'extra@mail.com', '2019-11-01', 'male', 'kabbadi', '', '2019-11-28 11:59:41', '2019-11-28 11:59:41'),
(13, 'asd', 'asdfgh', 'Nagpur', '123456', 'extra@mail.com', '2019-11-01', 'male', 'kabbadi', '', '2019-11-28 12:00:15', '2019-11-28 12:00:15'),
(14, 'asd', 'asdfgh', 'Nagpur', '123456', 'extra@mail.com', '2019-11-01', 'male', 'kabbadi', '', '2019-11-28 12:03:09', '2019-11-28 12:03:09'),
(15, 'asd', 'asdfgh', 'Nagpur', '123456', 'extra@mail.com', '2019-11-01', 'male', 'kabbadi', '', '2019-11-28 12:05:14', '2019-11-28 12:05:14'),
(16, 'asd', 'asdfgh', 'Nagpur', '123456', 'extra@mail.com', '2019-11-01', 'male', 'kabbadi', '', '2019-11-28 12:05:34', '2019-11-28 12:05:34'),
(17, 'asd', 'asdfgh', 'Nagpur', '123456', 'extra@mail.com', '2019-11-01', 'male', 'kabbadi', '', '2019-11-28 12:06:00', '2019-11-28 12:06:00'),
(18, 'asd', 'asdfgh', 'Nagpur', '123456', 'extra@mail.com', '2019-11-01', 'male', 'kabbadi', '', '2019-11-28 12:12:04', '2019-11-28 12:12:04'),
(19, 'asd', 'asdfgh', 'Nagpur', '123456', 'extra@mail.com', '2019-11-01', 'male', 'kabbadi', '', '2019-11-28 12:14:14', '2019-11-28 12:14:14'),
(20, 'asd', 'asdfgh', 'Nagpur', '123456', 'extra@mail.com', '2019-11-01', 'male', 'kabbadi', '', '2019-11-28 12:16:24', '2019-11-28 12:16:24'),
(21, 'asdfg', 'asdfgh', 'Amravati', '123456', 'extra@mail.com', '2019-11-02', 'male', 'cricket', 'jlpt1.png', '2019-11-28 12:18:07', '2019-11-28 12:18:07'),
(22, 'asdfg', 'asdfgh', 'Amravati', '123456', 'extra@mail.com', '2019-11-02', 'male', 'cricket', 'login/jlpt1.png', '2019-11-28 12:19:08', '2019-11-28 12:19:08'),
(23, 'asdfg', 'asdfgh', 'Amravati', '123456', 'extra@mail.com', '2019-11-02', 'male', 'cricket', 'login/jlpt1.png', '2019-11-28 12:19:54', '2019-11-28 12:19:54'),
(24, 'asdfg', 'asdfgh', 'Amravati', '123456', 'extra@mail.com', '2019-11-02', 'male', 'cricket', 'login/jlpt1.png', '2019-11-28 12:20:05', '2019-11-28 12:20:05'),
(25, 'asdfghj', 'mngfdw', 'Amravati', '87654321', 'extra@mail.com', '2019-11-02', 'female', 'kabbadi', 'login/Logo.png', '2019-11-28 12:31:39', '2019-11-28 12:31:39');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
