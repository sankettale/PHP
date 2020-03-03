-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 10, 2019 at 04:51 PM
-- Server version: 5.7.28
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hosticei_prajasattak`
--

-- --------------------------------------------------------

--
-- Table structure for table `counter_table`
--

CREATE TABLE `counter_table` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counter_table`
--

INSERT INTO `counter_table` (`id`, `ip_address`) VALUES
(1, '43.224.0.134'),
(2, '49.35.65.217'),
(3, '106.220.148.61'),
(4, '36.110.199.158'),
(5, '37.120.142.163'),
(6, '61.149.198.66'),
(7, '84.17.58.19'),
(8, '36.99.136.142'),
(9, '36.99.136.143'),
(10, '18.216.132.130'),
(11, '66.249.79.210'),
(12, '66.249.79.208'),
(13, '66.249.79.244'),
(14, '34.216.223.202'),
(15, '77.222.99.214'),
(16, '49.35.95.215'),
(17, '220.181.108.170'),
(18, '138.246.253.5'),
(19, '68.183.225.230'),
(20, '34.218.208.121'),
(21, '108.167.139.245'),
(22, '36.110.199.17'),
(23, '68.183.233.16'),
(24, '5.9.83.145'),
(25, '34.210.83.191'),
(26, '36.110.199.24'),
(27, '195.161.114.244'),
(28, '66.249.66.158'),
(29, '52.42.215.158'),
(30, '51.158.126.165'),
(31, '36.110.199.160'),
(32, '68.183.233.5'),
(33, '92.220.10.100'),
(34, '54.185.29.234'),
(35, '106.220.170.28'),
(36, '144.76.137.254'),
(37, '157.55.39.23'),
(38, '209.97.162.121'),
(39, '157.55.39.24'),
(40, '23.83.230.2'),
(41, '123.125.67.225'),
(42, '82.202.161.133'),
(43, '34.220.223.106'),
(44, '119.92.186.19'),
(45, '157.55.39.43'),
(46, '40.77.167.132'),
(47, '40.77.167.0'),
(48, '201.160.206.184'),
(49, '3.17.159.18'),
(50, '123.125.71.27'),
(51, '10.64.49.25'),
(52, '148.103.43.174'),
(53, '66.249.66.157'),
(54, '66.249.66.156'),
(55, '204.12.226.26'),
(56, '66.249.66.212'),
(57, '84.17.62.142'),
(58, '51.75.104.169'),
(59, '144.76.56.124'),
(60, '54.189.223.106'),
(61, '148.251.69.139'),
(62, '220.181.51.85'),
(63, '148.251.22.75'),
(64, '178.63.34.189'),
(65, '54.149.244.132'),
(66, '143.137.167.213'),
(67, '46.4.63.250'),
(68, '200.113.234.79'),
(69, '62.210.185.4'),
(70, '161.0.3.174'),
(71, '5.189.159.208'),
(72, '213.159.213.236'),
(73, '36.110.199.48'),
(74, '191.102.167.91'),
(75, '138.197.139.168'),
(76, '94.23.201.37'),
(77, '144.76.14.153'),
(78, '54.185.239.254'),
(79, '54.148.122.157'),
(80, '192.99.4.151'),
(81, '43.224.0.148'),
(82, '157.245.212.105'),
(83, '106.66.255.5'),
(84, '106.66.249.129'),
(85, '106.66.252.247'),
(86, '106.66.250.191'),
(87, '123.125.67.156'),
(88, '78.46.176.21'),
(89, '123.125.67.226'),
(90, '5.9.61.101'),
(91, '66.249.66.208'),
(92, '54.186.9.195'),
(93, '43.224.0.195'),
(94, '5.9.88.113'),
(95, '157.55.39.27'),
(96, '144.76.71.176'),
(97, '144.76.60.198'),
(98, '36.110.199.28'),
(99, '192.151.145.178'),
(100, '185.93.54.51'),
(101, '45.119.212.222'),
(102, '69.171.251.8'),
(103, '69.171.251.17'),
(104, '207.46.13.228'),
(105, '157.55.39.124'),
(106, '40.77.167.204'),
(107, '65.154.226.220'),
(108, '36.110.199.45'),
(109, '66.249.79.212'),
(110, '78.46.90.53'),
(111, '104.248.9.4'),
(112, '142.93.190.152'),
(113, '142.93.69.35'),
(114, '209.239.122.40'),
(115, '136.243.37.219'),
(116, '192.151.145.82'),
(117, '34.214.53.124'),
(118, '106.66.201.78'),
(119, '158.69.225.37'),
(120, '51.77.129.165'),
(121, '66.165.236.210'),
(122, '123.125.71.95'),
(123, '66.249.79.246'),
(124, '54.212.226.238'),
(125, '106.66.229.26'),
(126, '106.66.248.30'),
(127, '106.66.252.97'),
(128, '106.66.255.233'),
(129, '106.66.251.144'),
(130, '157.55.39.33'),
(131, '123.125.67.159'),
(132, '10.64.49.29'),
(133, '52.13.37.148'),
(134, '89.163.242.228'),
(135, '199.244.88.124'),
(136, '51.89.171.236'),
(137, '66.249.79.144'),
(138, '128.199.244.150'),
(139, '34.214.56.71'),
(140, '119.129.72.94'),
(141, '123.125.67.220'),
(142, '95.216.9.239'),
(143, '148.251.10.183'),
(144, '36.110.199.153'),
(145, '35.167.204.202'),
(146, '35.166.132.162'),
(147, '36.110.199.159'),
(148, '148.72.232.105'),
(149, '54.214.148.146'),
(150, '78.46.63.108'),
(151, '43.224.0.157'),
(152, '34.216.201.175'),
(153, '66.249.79.157'),
(154, '66.249.79.158'),
(155, '66.249.79.156'),
(156, '54.199.70.40'),
(157, '36.110.199.21'),
(158, '66.249.79.142'),
(159, '34.215.131.14'),
(160, '52.41.211.72'),
(161, '220.181.51.91'),
(162, '69.30.221.250'),
(163, '5.9.154.68'),
(164, '5.9.155.226'),
(165, '52.34.24.33'),
(166, '52.114.14.102'),
(167, '5.9.71.213'),
(168, '52.114.6.38'),
(169, '69.30.211.2'),
(170, '49.14.37.193'),
(171, '36.110.199.179'),
(172, '84.17.47.175'),
(173, '66.249.79.146'),
(174, '167.71.156.62'),
(175, '13.66.132.138'),
(176, '89.45.10.149'),
(177, '52.37.230.128'),
(178, '49.44.80.235'),
(179, '35.194.4.89'),
(180, '36.110.199.161'),
(181, '139.59.67.149'),
(182, '87.236.22.71'),
(183, '35.206.121.239'),
(184, '54.37.121.239'),
(185, '34.215.142.194'),
(186, '173.212.216.120'),
(187, '34.220.162.87'),
(188, '185.93.3.108'),
(189, '84.17.61.142'),
(190, '36.110.199.175'),
(191, '66.36.234.186'),
(192, '157.55.39.14'),
(193, '54.201.55.171'),
(194, '35.162.70.167'),
(195, '49.35.58.112'),
(196, '49.35.31.80'),
(197, '49.35.223.89'),
(198, '157.55.39.3'),
(199, '157.55.39.240'),
(200, '123.125.67.165'),
(201, '18.236.178.203'),
(202, '18.237.241.23'),
(203, '54.218.173.149'),
(204, '209.17.97.82'),
(205, '104.227.246.106'),
(206, '54.238.213.38'),
(207, '34.217.9.60'),
(208, '213.239.206.90'),
(209, '34.214.91.184'),
(210, '34.213.111.187'),
(211, '158.69.241.223'),
(212, '144.76.38.40'),
(213, '185.63.190.149'),
(214, '43.224.0.226'),
(215, '54.184.219.177'),
(216, 'localhostt'),
(217, '175.100.138.165'),
(218, '66.249.64.22'),
(219, '157.55.39.28'),
(220, '207.46.13.181'),
(221, '157.55.39.13'),
(222, '207.46.13.183'),
(223, '52.40.198.254'),
(224, '106.66.250.40'),
(225, '106.66.248.124'),
(226, '106.66.254.146'),
(227, '106.66.253.126'),
(228, '67.227.34.31'),
(229, '185.253.97.235'),
(230, '54.185.47.87'),
(231, '18.236.220.66'),
(232, '209.17.96.162'),
(233, '43.241.71.124'),
(234, '45.144.64.236'),
(235, '45.61.163.184'),
(236, '54.201.78.129'),
(237, '18.237.169.98'),
(238, '185.136.167.225'),
(239, '66.249.75.242'),
(240, '66.249.75.246'),
(241, '162.144.141.141'),
(242, '185.50.25.34'),
(243, '34.214.138.196'),
(244, '104.132.20.95'),
(245, '104.132.20.77'),
(246, '44.226.206.156'),
(247, '209.17.96.178'),
(248, '54.214.90.99'),
(249, '192.151.157.210'),
(250, '34.230.156.67'),
(251, '34.220.177.133'),
(252, '66.249.75.244'),
(253, '69.58.178.28'),
(254, '54.184.76.167'),
(255, '52.12.46.111'),
(256, '157.55.39.1'),
(257, '66.249.75.248'),
(258, '5.9.61.232'),
(259, '103.237.144.136'),
(260, '45.132.194.16'),
(261, '34.209.125.62'),
(262, '198.71.241.14'),
(263, '182.50.135.49'),
(264, '84.17.49.41'),
(265, '185.100.87.207'),
(266, '149.56.151.196'),
(267, '162.144.79.77'),
(268, '49.14.32.64'),
(269, '198.71.235.26'),
(270, '54.148.76.120'),
(271, '5.101.156.145'),
(272, '103.18.179.196'),
(273, '173.214.244.26'),
(274, '173.249.41.173'),
(275, '167.99.212.81'),
(276, '35.164.172.180'),
(277, '148.72.232.36'),
(278, '192.163.233.211'),
(279, '89.105.197.29'),
(280, '52.88.137.196'),
(281, '66.249.75.27'),
(282, '66.249.75.28'),
(283, '163.44.198.39'),
(284, '199.249.230.78'),
(285, '209.17.97.106'),
(286, '195.181.160.70'),
(287, '59.188.250.68'),
(288, '199.192.27.170'),
(289, '107.180.109.34'),
(290, '77.222.96.144'),
(291, '167.71.142.66'),
(292, '125.212.219.42'),
(293, '51.158.113.35'),
(294, '8.209.79.9'),
(295, '120.132.8.232'),
(296, '157.230.141.185'),
(297, '50.62.176.220'),
(298, '149.202.82.11'),
(299, '159.89.144.143'),
(300, '120.132.8.110'),
(301, '120.132.11.94'),
(302, '47.103.20.29'),
(303, '120.132.29.161'),
(304, '148.66.146.2'),
(305, '145.131.25.253'),
(306, '188.213.49.221'),
(307, '198.71.231.35'),
(308, '117.53.45.125'),
(309, '106.66.205.151'),
(310, '54.201.17.147'),
(311, '43.224.0.146'),
(312, '216.244.66.241'),
(313, '51.158.147.12'),
(314, '46.165.245.154'),
(315, '106.67.165.251'),
(316, '209.17.97.2'),
(317, '207.46.13.142'),
(318, '207.46.13.172'),
(319, '34.216.183.71'),
(320, '192.99.151.76'),
(321, '62.210.105.116'),
(322, '157.55.39.186'),
(323, '138.197.134.61'),
(324, '66.249.75.29'),
(325, '66.249.65.114'),
(326, '54.202.94.41'),
(327, '66.249.65.156'),
(328, '220.181.77.162'),
(329, '66.249.65.112'),
(330, '66.249.65.158'),
(331, '66.249.65.157'),
(332, '66.249.65.116'),
(333, '173.249.63.71'),
(334, '52.26.125.218'),
(335, '148.251.49.107'),
(336, '185.217.71.137'),
(337, '89.234.157.254'),
(338, '66.102.8.86'),
(339, '66.102.8.84'),
(340, '209.17.96.170'),
(341, '34.214.48.61'),
(342, '66.249.64.114'),
(343, '173.252.127.6'),
(344, '66.249.64.21'),
(345, '66.249.64.20'),
(346, '66.249.64.112'),
(347, '54.36.205.38'),
(348, '51.38.99.96'),
(349, '213.152.173.179'),
(350, '167.172.22.4'),
(351, '54.187.193.27'),
(352, '66.249.66.144'),
(353, '66.249.66.146'),
(354, '207.46.13.144'),
(355, '157.55.39.20'),
(356, '207.46.13.209'),
(357, '40.77.167.8'),
(358, '185.220.101.25'),
(359, '52.34.241.227'),
(360, '66.102.8.85'),
(361, '31.13.103.11'),
(362, '31.13.103.24'),
(363, '5.9.156.20'),
(364, '167.172.18.87'),
(365, '157.245.1.98'),
(366, '138.197.15.65'),
(367, '66.249.66.142'),
(368, '173.252.87.28'),
(369, '192.99.47.10'),
(370, '167.99.70.191'),
(371, '128.90.86.122'),
(372, '106.78.194.184'),
(373, '106.67.162.143'),
(374, '106.66.236.99'),
(375, '34.217.212.232'),
(376, '43.224.0.248'),
(377, '54.36.148.84'),
(378, '54.36.148.94'),
(379, '66.249.64.116'),
(380, '5.9.144.234'),
(381, '54.201.150.46'),
(382, '106.79.132.120'),
(383, '106.79.138.15'),
(384, '106.78.186.185'),
(385, '1.187.23.11'),
(386, '1.187.17.79'),
(387, '106.79.154.171'),
(388, '106.78.183.124'),
(389, '107.178.236.17'),
(390, '209.17.96.234'),
(391, '158.69.127.133'),
(392, '51.91.218.49'),
(393, '67.227.34.85'),
(394, '195.222.48.151'),
(395, '209.97.159.155'),
(396, '34.221.138.10'),
(397, '172.83.40.18'),
(398, '54.36.149.82'),
(399, '151.80.39.221'),
(400, '118.123.249.79'),
(401, '54.36.148.111'),
(402, '151.80.39.209'),
(403, '155.94.220.188'),
(404, '49.35.53.255'),
(405, '35.183.235.171'),
(406, '49.35.57.209'),
(407, '106.210.205.212'),
(408, '157.33.36.27'),
(409, '157.33.66.121'),
(410, '106.210.205.246'),
(411, '106.210.205.248'),
(412, '34.213.5.22'),
(413, '43.224.0.180'),
(414, '106.66.222.43'),
(415, '106.66.217.27'),
(416, '157.33.24.155'),
(417, '106.220.170.111'),
(418, '185.234.216.20'),
(419, '157.33.120.39'),
(420, '106.220.152.200'),
(421, '157.33.165.199'),
(422, '106.66.206.38'),
(423, '106.67.168.25'),
(424, '157.55.39.16'),
(425, '109.70.100.29');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(200) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `img` varchar(200) DEFAULT NULL,
  `category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `created`, `modified`, `img`, `category`) VALUES
(12, '2019-10-23 14:56:30', '2019-10-23 14:56:30', 'images/uploads/gallery/pic1.jpg', 'Curriculum'),
(13, '2019-10-23 14:56:39', '2019-10-23 14:56:39', 'images/uploads/gallery/pic2.jpg', 'Infrastructure'),
(14, '2019-10-23 14:56:47', '2019-10-23 14:56:47', 'images/uploads/gallery/pic3.jpg', 'Infrastructure'),
(15, '2019-10-23 14:56:55', '2019-10-23 14:56:55', 'images/uploads/gallery/pic4.jpg', 'Infrastructure'),
(16, '2019-10-23 14:57:14', '2019-10-23 14:57:14', 'images/uploads/gallery/pic5.jpg', 'Curriculum'),
(17, '2019-10-23 14:57:22', '2019-10-23 14:57:22', 'images/uploads/gallery/pic6.jpg', 'Curriculum'),
(18, '2019-10-23 14:57:31', '2019-10-23 14:57:31', 'images/uploads/gallery/pic7.jpg', 'TeacherStaff'),
(20, '2019-10-23 14:57:48', '2019-10-23 14:57:48', 'images/uploads/gallery/pic9.jpg', 'TeacherStaff'),
(21, '2019-10-23 14:57:57', '2019-10-23 14:57:57', 'images/uploads/gallery/pic10.jpg', 'Infrastructure'),
(22, '2019-10-23 14:58:07', '2019-10-23 14:58:07', 'images/uploads/gallery/pic11_z.jpg', 'Curriculum'),
(23, '2019-10-23 14:58:18', '2019-10-23 14:58:18', 'images/uploads/gallery/pic12_z.jpg', 'Curriculum'),
(24, '2019-10-23 14:58:29', '2019-10-23 14:58:29', 'images/uploads/gallery/pic13.jpg', 'Curriculum'),
(25, '2019-10-23 14:58:43', '2019-10-23 14:58:43', 'images/uploads/gallery/pic14.jpg', 'TeacherStaff'),
(26, '2019-10-23 14:58:54', '2019-10-23 14:58:54', 'images/uploads/gallery/pic15.jpg', 'Infrastructure'),
(27, '2019-10-23 14:59:12', '2019-10-23 14:59:12', 'images/uploads/gallery/pic17.jpg', 'Infrastructure'),
(28, '2019-10-23 14:59:25', '2019-10-23 14:59:25', 'images/uploads/gallery/pic18.jpg', 'Infrastructure'),
(29, '2019-10-23 14:59:34', '2019-10-23 14:59:34', 'images/uploads/gallery/pic19.jpg', 'Infrastructure');

-- --------------------------------------------------------

--
-- Table structure for table `library_enq`
--

CREATE TABLE `library_enq` (
  `id` int(11) NOT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `lemail` varchar(50) DEFAULT NULL,
  `lnumber` int(12) DEFAULT NULL,
  `lmessage` varchar(1500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `library_enq`
--

INSERT INTO `library_enq` (`id`, `lname`, `lemail`, `lnumber`, `lmessage`) VALUES
(3, 'Dhamm', 'dip@yahoo.com', 2147483647, 'Dhammm');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(20) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `link` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `created`, `modified`, `link`) VALUES
(2, '2019-10-16 14:29:31', '2019-10-16 14:29:31', 'https://sjcsw.in');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(20) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `news` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `created`, `modified`, `news`) VALUES
(1, '2019-10-16 16:31:25', '2019-10-16 16:31:25', 'Today is holiday'),
(2, '2019-10-16 16:32:39', '2019-10-16 16:32:39', 'Today is HOLIDAY');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(20) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `file_name` varchar(255) DEFAULT NULL,
  `file` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `created`, `modified`, `file_name`, `file`) VALUES
(79, '2019-11-14 11:42:14', '2019-11-14 11:42:14', 'notice', 'files/notifications/7248aa03ed84f4949945410b7e777148 (2).docx'),
(82, '2019-11-14 11:49:44', '2019-11-14 11:49:44', 'k', 'files/notifications/1573714170Review paper.doc');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` text,
  `email` varchar(100) DEFAULT NULL,
  `acc_type` varchar(1000) NOT NULL,
  `auth_gallery` int(100) NOT NULL,
  `auth_staff` int(100) NOT NULL,
  `auth_notification` int(100) NOT NULL,
  `auth_link` int(100) NOT NULL,
  `auth_enquiry` int(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `created`, `modified`, `name`, `email`, `acc_type`, `auth_gallery`, `auth_staff`, `auth_notification`, `auth_link`, `auth_enquiry`, `password`) VALUES
(25, '2019-11-15 14:34:20', '2019-11-15 14:34:20', 'Admin', 'admin@admin.com', 'admin', 1, 1, 1, 1, 1, '81dc9bdb52d04dc20036dbd8313ed055'),
(26, '2019-12-05 15:40:13', '2019-12-05 17:11:27', 'testing purpose', 'test@test.com', 'user', 1, 1, 1, 1, 1, '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(20) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `img` varchar(1000) NOT NULL,
  `position` varchar(1000) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `qualification` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `created`, `modified`, `img`, `position`, `name`, `qualification`) VALUES
(1, '2019-11-14 18:52:42', '2019-11-19 10:48:38', 'images/uploads/staff/2c45389827eef7a4813881c3c3fba725.jpg', 'Principal', 'Dr. Bhimrao Gote', 'B.A, M.Ed., Ph.D(Edu)'),
(2, '2019-10-23 14:42:56', '2019-10-23 14:42:56', 'images/uploads/staff/meshram.jpg', 'Assistant Professor', 'Miss. Shital S. Meshram', 'B.SC, M.SC(phy), M.Ed, NET'),
(3, '2019-10-23 14:43:36', '2019-10-23 14:43:36', 'images/uploads/staff/chimurkar.jpg', 'Assistant Professor', 'Mr. Promod U. Chimurkar', 'M.A, M.Ed ,NET(his)'),
(4, '2019-11-06 11:03:20', '2019-12-09 17:10:13', 'images/uploads/staff/pathne.jpg', 'Assistant Professor', 'Miss. Nitu B. Pathane', 'B.Sc, M.Sc(Bot),M.Ed, NET, SET'),
(5, '2019-10-23 14:45:33', '2019-10-23 14:45:33', 'images/uploads/staff/jaybhaye.jpg', 'Assistant Professor', 'Mr. Rameshwar Jaybhaye', 'B.A, M.A(Economics), M.Ed, SET'),
(6, '2019-11-06 11:06:00', '2019-11-06 11:06:00', 'images/uploads/staff/salankar.jpg', 'Assistant Professor', 'Dr. Nita S. Salankar', 'B.Sc, M.A(Psy,soci,his,p.sc), M.Ed, Ph.D'),
(7, '2019-11-06 11:21:54', '2019-11-06 11:21:54', 'images/uploads/staff/mogre.jpg', 'Assistant Professor', 'Mr. Vishwas Mogre', 'B.Com, M.A, M.Ed, SET'),
(8, '2019-10-23 14:47:47', '2019-10-23 14:47:47', 'images/uploads/staff/dummy.png', 'Assistant Professor', 'Mr. Ravindra R. Haridas', 'B.com, M.F.A, Ph.D(Fine arts)'),
(9, '2019-10-23 14:48:26', '2019-10-23 14:48:26', 'images/uploads/staff/waghmare.jpg', 'Assistant Professor', 'Mr. Chandrashekhar V. Waghmare', 'B.F.A, M.V.A, NET'),
(10, '2019-10-23 14:49:01', '2019-10-23 14:49:01', 'images/uploads/staff/bedre.jpg', 'Assistant Professor', 'Miss. Renuka Bedre', 'B.Sc, B.P.Ed, M.P.Ed, NET(phy. edu.)'),
(11, '2019-10-23 14:44:53', '2019-10-23 14:44:53', 'images/uploads/staff/zode.jpg', 'Assistant Professor', 'Miss. Suchita Zode', 'M.A(soc,psc), M.Ed, SET');

-- --------------------------------------------------------

--
-- Table structure for table `student_enqury`
--

CREATE TABLE `student_enqury` (
  `id` int(20) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sname` varchar(255) DEFAULT NULL,
  `semail` varchar(255) DEFAULT NULL,
  `snumber` int(12) DEFAULT NULL,
  `smessage` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_enqury`
--

INSERT INTO `student_enqury` (`id`, `created`, `modified`, `sname`, `semail`, `snumber`, `smessage`) VALUES
(8, '2019-10-18 17:32:30', '2019-10-18 17:32:30', 'Ajay Chute', 'ajay@gmail.com', 2147483647, 'Hiii'),
(12, '2019-10-22 15:55:56', '2019-10-22 15:55:56', 'Anaya Mishra', 'anayamishra@outlook.com', 2147483647, 'My name is anya'),
(13, '2019-10-22 15:59:33', '2019-10-22 15:59:33', 'Ravindra', 'ravi@gmail.com', 987654324, 'Hii'),
(14, '2019-10-22 16:18:30', '2019-10-22 16:18:30', 'Naya nam', 'naya@email.com', 1234567890, 'Nnnnnnnn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `counter_table`
--
ALTER TABLE `counter_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library_enq`
--
ALTER TABLE `library_enq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_enqury`
--
ALTER TABLE `student_enqury`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `counter_table`
--
ALTER TABLE `counter_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=426;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `library_enq`
--
ALTER TABLE `library_enq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `student_enqury`
--
ALTER TABLE `student_enqury`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
