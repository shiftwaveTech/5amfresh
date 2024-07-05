-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 02, 2024 at 06:58 AM
-- Server version: 5.7.40
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freshoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `admin_status` int(11) DEFAULT '1',
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `email`, `password_hash`, `admin_status`) VALUES
(1, 'admin', 'admin@shiftwave.com', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `house_no` varchar(10) DEFAULT NULL,
  `landmark` varchar(100) DEFAULT NULL,
  `area` varchar(50) DEFAULT NULL,
  `whatsapp_number` varchar(100) DEFAULT NULL,
  `selected_day` varchar(255) DEFAULT NULL,
  `selected_plan` varchar(255) DEFAULT NULL,
  `selected_offer` varchar(255) DEFAULT NULL,
  `created_on` datetime NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `name`, `email`, `mobile`, `address`, `house_no`, `landmark`, `area`, `whatsapp_number`, `selected_day`, `selected_plan`, `selected_offer`, `created_on`, `status`) VALUES
(1, 'Hemant', 'Hemant@shiftwave.com', '9988776655', 'Siripuram', 'A-112', 'Near rtc complex', 'vizag', NULL, NULL, NULL, NULL, '2024-03-25 09:48:34', 'active'),
(2, 'Sarath', 'sarath@shiftwave.com', '7732033150', 'Allipuram', 'A-113', 'Near rtc complex', 'Vizag', NULL, NULL, NULL, NULL, '2024-03-25 09:48:34', 'active'),
(3, 'sekhar', 'sekhar@shiftwave.com', '9951537252', 'Gajuwaka ,visakhapatnam ', 'A-123', 'Near durga devi ', 'Siripuram', '9951537252', 'Tuesday', '599', 'Monthly', '2024-05-18 06:16:58', 'Active'),
(4, 'Durga Prasad', 'Durgaa@shiftwave.com', '8958692545', 'Poorna Market, Visakhapatnam', 'a-45', 'Near Saraswathi Villa', 'CBM Compound', NULL, NULL, NULL, NULL, '2024-05-18 06:16:58', 'Active'),
(5, 'user1', 'user@shiftwave.com', '78958485785', 'Near kanipuram', 'A-1234', 'Near temple', 'Vizag', NULL, NULL, NULL, NULL, '2024-05-20 09:00:55', 'Active'),
(6, 'User2', 'User2@shiftwave.com', '8958692545', 'Pendhurthi ', 'A-12', 'Near temple ', 'Vizag', NULL, NULL, NULL, NULL, '2024-05-20 09:00:55', 'Active'),
(10, 'test', 'test@shiftwave.com', '9951554353', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', ''),
(11, 'test', 'sekhar@shiftwave.com', '9951537242', 'Gajuwaka ,visakhapatnam ', 'A-123', 'Near durga devi ', 'Siripuram', '9951537252', NULL, NULL, NULL, '0000-00-00 00:00:00', ''),
(12, 'test', 'sekhar@shiftwave.com', '9951537251', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `lgs_logdetails`
--

DROP TABLE IF EXISTS `lgs_logdetails`;
CREATE TABLE IF NOT EXISTS `lgs_logdetails` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `ip_address` varchar(50) NOT NULL,
  `log_date` datetime DEFAULT NULL,
  `login_form_data` text NOT NULL,
  `login_status` varchar(30) NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=246 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lgs_logdetails`
--

INSERT INTO `lgs_logdetails` (`log_id`, `user_id`, `ip_address`, `log_date`, `login_form_data`, `login_status`) VALUES
(1, 1, '192.168.0.135', '2024-03-22 09:56:36', '{1 , admin@shiftwave.com , admin}', 'success'),
(2, 1, '192.168.0.135', '2024-03-22 10:01:22', '{1 , admin@shiftwave.com , admin}', 'success'),
(3, 1, '192.168.0.135', '2024-03-22 10:09:40', '{1 , admin@shiftwave.com , admin}', 'success'),
(4, 1, '192.168.0.135', '2024-03-22 10:12:44', '{1 , admin@shiftwave.com , admin}', 'success'),
(5, 1, '192.168.0.135', '2024-03-22 11:45:37', '{1 , admin@shiftwave.com , admin}', 'success'),
(6, 1, '192.168.0.135', '2024-03-23 09:54:48', '{1 , admin@shiftwave.com , admin}', 'success'),
(7, 1, '192.168.0.135', '2024-03-23 11:24:44', '{1 , admin@shiftwave.com , admin}', 'success'),
(8, 1, '192.168.0.135', '2024-03-23 11:25:40', '{1 , admin@shiftwave.com , admin}', 'success'),
(9, 1, '192.168.0.135', '2024-03-25 10:16:47', '{1 , admin@shiftwave.com , admin}', 'success'),
(10, 1, '192.168.0.135', '2024-03-25 10:17:22', '{1 , admin@shiftwave.com , admin}', 'success'),
(11, 1, '192.168.0.135', '2024-03-25 11:10:54', '{1 , admin@shiftwave.com , admin}', 'success'),
(12, 1, '192.168.0.135', '2024-03-25 14:11:56', '{1 , admin@shiftwave.com , admin}', 'success'),
(13, 1, '192.168.0.135', '2024-03-25 14:16:35', '{1 , admin@shiftwave.com , admin}', 'success'),
(14, 1, '192.168.0.135', '2024-03-25 14:17:26', '{1 , admin@shiftwave.com , admin}', 'success'),
(15, 1, '192.168.0.135', '2024-03-25 14:54:18', '{1 , admin@shiftwave.com , admin}', 'success'),
(16, 1, '192.168.0.135', '2024-03-25 15:02:04', '{1 , admin@shiftwave.com , admin}', 'success'),
(17, 1, '192.168.0.135', '2024-03-25 15:09:01', '{1 , admin@shiftwave.com , admin}', 'success'),
(18, 1, '192.168.0.135', '2024-03-25 15:09:19', '{1 , admin@shiftwave.com , admin}', 'success'),
(19, 1, '192.168.0.135', '2024-03-25 15:13:12', '{1 , admin@shiftwave.com , admin}', 'success'),
(20, 1, '192.168.0.135', '2024-03-25 15:14:07', '{1 , admin@shiftwave.com , admin}', 'success'),
(21, 1, '192.168.0.135', '2024-03-25 15:52:43', '{1 , admin@shiftwave.com , admin}', 'success'),
(22, 1, '192.168.0.135', '2024-03-25 18:08:03', '{1 , admin@shiftwave.com , admin}', 'success'),
(23, 1, '192.168.0.135', '2024-03-26 09:05:02', '{1 , admin@shiftwave.com , admin}', 'success'),
(24, 1, '192.168.0.135', '2024-03-26 09:06:52', '{1 , admin@shiftwave.com , admin}', 'success'),
(25, 1, '192.168.0.135', '2024-03-26 09:14:16', '{1 , admin@shiftwave.com , admin}', 'success'),
(26, 1, '192.168.0.135', '2024-03-26 09:16:47', '{1 , admin@shiftwave.com , admin}', 'success'),
(27, 1, '192.168.0.135', '2024-03-26 09:17:22', '{1 , admin@shiftwave.com , admin}', 'success'),
(28, 1, '192.168.0.135', '2024-03-26 09:29:20', '{1 , admin@shiftwave.com , admin}', 'success'),
(29, 1, '192.168.0.135', '2024-03-26 09:29:55', '{1 , admin@shiftwave.com , admin}', 'success'),
(30, 1, '192.168.0.135', '2024-03-26 09:31:57', '{1 , admin@shiftwave.com , admin}', 'success'),
(31, 1, '192.168.0.135', '2024-03-26 09:32:09', '{1 , admin@shiftwave.com , admin}', 'success'),
(32, 1, '192.168.0.135', '2024-03-26 10:03:43', '{1 , admin@shiftwave.com , admin}', 'success'),
(33, 1, '192.168.0.135', '2024-03-26 13:52:33', '{1 , admin@shiftwave.com , admin}', 'success'),
(34, 1, '192.168.0.135', '2024-03-26 13:56:00', '{1 , admin@shiftwave.com , admin}', 'success'),
(35, 1, '192.168.0.135', '2024-03-26 13:57:26', '{1 , admin@shiftwave.com , admin}', 'success'),
(36, 1, '192.168.0.135', '2024-03-26 15:34:48', '{1 , admin@shiftwave.com , admin}', 'success'),
(37, 1, '192.168.0.135', '2024-03-26 17:15:32', '{1 , admin@shiftwave.com , admin}', 'success'),
(38, 1, '192.168.0.135', '2024-03-26 17:15:49', '{1 , admin@shiftwave.com , admin}', 'success'),
(39, 1, '192.168.0.135', '2024-03-26 17:16:06', '{1 , admin@shiftwave.com , admin}', 'success'),
(40, 1, '192.168.0.135', '2024-03-26 17:17:37', '{1 , admin@shiftwave.com , admin}', 'success'),
(41, 1, '192.168.0.135', '2024-03-26 17:42:43', '{1 , admin@shiftwave.com , admin}', 'success'),
(42, 1, '192.168.0.135', '2024-03-26 17:42:55', '{1 , admin@shiftwave.com , admin}', 'success'),
(43, 1, '192.168.0.135', '2024-03-26 17:47:11', '{1 , admin@shiftwave.com , admin}', 'success'),
(44, 1, '192.168.0.135', '2024-03-27 09:06:58', '{1 , admin@shiftwave.com , admin}', 'success'),
(45, 1, '192.168.0.135', '2024-03-27 09:50:01', '{1 , admin@shiftwave.com , admin}', 'success'),
(46, 1, '192.168.0.135', '2024-03-27 09:50:29', '{1 , admin@shiftwave.com , admin}', 'success'),
(47, 1, '192.168.0.135', '2024-03-27 10:46:30', '{1 , admin@shiftwave.com , admin}', 'success'),
(48, 1, '192.168.0.135', '2024-03-27 10:49:09', '{1 , admin@shiftwave.com , admin}', 'success'),
(49, 1, '192.168.0.135', '2024-03-27 10:53:24', '{1 , admin@shiftwave.com , admin}', 'success'),
(50, 1, '192.168.0.135', '2024-03-27 10:55:57', '{1 , admin@shiftwave.com , admin}', 'success'),
(51, 1, '192.168.0.135', '2024-03-27 11:01:20', '{1 , admin@shiftwave.com , admin}', 'success'),
(52, 1, '192.168.0.135', '2024-03-27 11:02:30', '{1 , admin@shiftwave.com , admin}', 'success'),
(53, 1, '192.168.0.135', '2024-03-27 11:07:03', '{1 , admin@shiftwave.com , admin}', 'success'),
(54, 1, '192.168.0.135', '2024-03-27 11:07:30', '{1 , admin@shiftwave.com , admin}', 'success'),
(55, 1, '192.168.0.135', '2024-03-27 11:08:01', '{1 , admin@shiftwave.com , admin}', 'success'),
(56, 1, '192.168.0.135', '2024-03-27 11:12:54', '{1 , admin@shiftwave.com , admin}', 'success'),
(57, 1, '192.168.0.135', '2024-03-27 11:14:10', '{1 , admin@shiftwave.com , admin}', 'success'),
(58, 1, '192.168.0.135', '2024-03-27 11:19:40', '{1 , admin@shiftwave.com , admin}', 'success'),
(59, 1, '192.168.0.135', '2024-03-27 11:31:57', '{1 , admin@shiftwave.com , admin}', 'success'),
(60, 1, '192.168.0.135', '2024-03-27 11:34:33', '{1 , admin@shiftwave.com , admin}', 'success'),
(61, 1, '192.168.0.135', '2024-03-27 11:54:53', '{1 , admin@shiftwave.com , admin}', 'success'),
(62, 1, '192.168.0.135', '2024-03-27 12:08:12', '{1 , admin@shiftwave.com , admin}', 'success'),
(63, 1, '192.168.0.135', '2024-03-27 12:24:33', '{1 , admin@shiftwave.com , admin}', 'success'),
(64, 1, '192.168.0.135', '2024-03-27 13:42:14', '{1 , admin@shiftwave.com , admin}', 'success'),
(65, 1, '192.168.0.135', '2024-03-27 14:14:05', '{1 , admin@shiftwave.com , admin}', 'success'),
(66, 1, '192.168.0.135', '2024-03-27 14:21:38', '{1 , admin@shiftwave.com , admin}', 'success'),
(67, 1, '192.168.0.135', '2024-03-28 09:14:13', '{1 , admin@shiftwave.com , admin}', 'success'),
(68, 1, '192.168.0.135', '2024-03-28 10:07:52', '{1 , admin@shiftwave.com , admin}', 'success'),
(69, 1, '192.168.0.135', '2024-03-28 10:08:47', '{1 , admin@shiftwave.com , admin}', 'success'),
(70, 1, '192.168.0.135', '2024-03-28 10:12:54', '{1 , admin@shiftwave.com , admin}', 'success'),
(71, 1, '192.168.0.135', '2024-03-28 10:16:21', '{1 , admin@shiftwave.com , admin}', 'success'),
(72, 1, '192.168.0.135', '2024-03-28 10:17:38', '{1 , admin@shiftwave.com , admin}', 'success'),
(73, 1, '192.168.0.135', '2024-03-28 10:20:36', '{1 , admin@shiftwave.com , admin}', 'success'),
(74, 1, '192.168.0.135', '2024-03-28 10:24:20', '{1 , admin@shiftwave.com , admin}', 'success'),
(75, 1, '192.168.0.135', '2024-03-28 10:24:34', '{1 , admin@shiftwave.com , admin}', 'success'),
(76, 1, '192.168.0.135', '2024-03-28 10:24:44', '{1 , admin@shiftwave.com , admin}', 'success'),
(77, 1, '192.168.0.135', '2024-03-28 11:07:58', '{1 , admin@shiftwave.com , admin}', 'success'),
(78, 1, '192.168.0.135', '2024-03-28 11:13:25', '{1 , admin@shiftwave.com , admin}', 'success'),
(79, 1, '192.168.0.135', '2024-03-28 11:18:31', '{1 , admin@shiftwave.com , admin}', 'success'),
(80, 1, '192.168.0.135', '2024-03-28 11:20:52', '{1 , admin@shiftwave.com , admin}', 'success'),
(81, 1, '192.168.0.135', '2024-03-28 12:05:46', '{1 , admin@shiftwave.com , admin}', 'success'),
(82, 1, '192.168.0.135', '2024-03-28 12:07:07', '{1 , admin@shiftwave.com , admin}', 'success'),
(83, 1, '192.168.0.135', '2024-03-28 12:10:39', '{1 , admin@shiftwave.com , admin}', 'success'),
(84, 1, '192.168.0.135', '2024-03-28 12:18:02', '{1 , admin@shiftwave.com , admin}', 'success'),
(85, 1, '192.168.0.135', '2024-03-28 13:59:05', '{1 , admin@shiftwave.com , admin}', 'success'),
(86, 1, '192.168.0.135', '2024-03-28 14:50:15', '{1 , admin@shiftwave.com , admin}', 'success'),
(87, 1, '192.168.0.135', '2024-03-28 15:39:16', '{1 , admin@shiftwave.com , admin}', 'success'),
(88, 1, '192.168.0.135', '2024-03-28 16:18:51', '{1 , admin@shiftwave.com , admin}', 'success'),
(89, 1, '192.168.0.135', '2024-03-28 17:29:58', '{1 , admin@shiftwave.com , admin}', 'success'),
(90, 1, '192.168.0.135', '2024-03-28 17:31:35', '{1 , admin@shiftwave.com , admin}', 'success'),
(91, 1, '192.168.0.135', '2024-03-29 09:31:07', '{1 , admin@shiftwave.com , admin}', 'success'),
(92, 1, '192.168.0.135', '2024-03-29 11:39:46', '{1 , admin@shiftwave.com , admin}', 'success'),
(93, 1, '192.168.0.135', '2024-03-29 11:40:21', '{1 , admin@shiftwave.com , admin}', 'success'),
(94, 1, '192.168.0.135', '2024-03-29 11:41:12', '{1 , admin@shiftwave.com , admin}', 'success'),
(95, 1, '192.168.0.135', '2024-03-29 11:41:31', '{1 , admin@shiftwave.com , admin}', 'success'),
(96, 1, '192.168.0.135', '2024-03-29 11:55:38', '{1 , admin@shiftwave.com , admin}', 'success'),
(97, 1, '192.168.0.135', '2024-03-29 16:08:33', '{1 , admin@shiftwave.com , admin}', 'success'),
(98, 1, '192.168.0.135', '2024-03-29 16:09:43', '{1 , admin@shiftwave.com , admin}', 'success'),
(99, 1, '192.168.0.135', '2024-03-29 16:10:38', '{1 , admin@shiftwave.com , admin}', 'success'),
(100, 1, '192.168.0.135', '2024-03-29 16:27:55', '{1 , admin@shiftwave.com , admin}', 'success'),
(101, 1, '192.168.0.135', '2024-03-29 16:30:28', '{1 , admin@shiftwave.com , admin}', 'success'),
(102, 1, '192.168.0.135', '2024-03-29 16:32:11', '{1 , admin@shiftwave.com , admin}', 'success'),
(103, 1, '192.168.0.135', '2024-03-29 16:33:39', '{1 , admin@shiftwave.com , admin}', 'success'),
(104, 1, '192.168.0.135', '2024-03-29 16:38:40', '{1 , admin@shiftwave.com , admin}', 'success'),
(105, 1, '192.168.0.135', '2024-03-29 16:48:42', '{1 , admin@shiftwave.com , admin}', 'success'),
(106, 1, '192.168.0.135', '2024-03-29 16:50:59', '{1 , admin@shiftwave.com , admin}', 'success'),
(107, 1, '192.168.0.135', '2024-03-29 16:59:11', '{1 , admin@shiftwave.com , admin}', 'success'),
(108, 1, '192.168.0.135', '2024-03-30 09:01:18', '{1 , admin@shiftwave.com , admin}', 'success'),
(109, 1, '192.168.0.135', '2024-03-30 13:08:12', '{1 , admin@shiftwave.com , admin}', 'success'),
(110, 1, '192.168.0.135', '2024-04-01 09:09:53', '{1 , admin@shiftwave.com , admin}', 'success'),
(111, 1, '192.168.0.135', '2024-04-01 09:15:27', '{1 , admin@shiftwave.com , admin}', 'success'),
(112, 1, '192.168.0.135', '2024-04-01 09:20:45', '{1 , admin@shiftwave.com , admin}', 'success'),
(113, 1, '192.168.0.135', '2024-04-01 09:28:34', '{1 , admin@shiftwave.com , admin}', 'success'),
(114, 1, '192.168.0.135', '2024-04-01 09:34:49', '{1 , admin@shiftwave.com , admin}', 'success'),
(115, 1, '192.168.0.135', '2024-04-01 09:50:35', '{1 , admin@shiftwave.com , admin}', 'success'),
(116, 1, '192.168.0.135', '2024-04-01 10:23:26', '{1 , admin@shiftwave.com , admin}', 'success'),
(117, 1, '192.168.0.135', '2024-04-01 10:25:15', '{1 , admin@shiftwave.com , admin}', 'success'),
(118, 1, '192.168.0.135', '2024-04-01 10:46:17', '{1 , admin@shiftwave.com , admin}', 'success'),
(119, 1, '192.168.0.135', '2024-04-01 11:07:30', '{1 , admin@shiftwave.com , admin}', 'success'),
(120, 1, '192.168.0.135', '2024-04-01 12:06:35', '{1 , admin@shiftwave.com , admin}', 'success'),
(121, 1, '192.168.0.135', '2024-04-01 12:13:47', '{1 , admin@shiftwave.com , admin}', 'success'),
(122, 1, '192.168.0.135', '2024-04-01 12:14:00', '{1 , admin@shiftwave.com , admin}', 'success'),
(123, 1, '192.168.0.135', '2024-04-01 12:14:20', '{1 , admin@shiftwave.com , admin}', 'success'),
(124, 1, '192.168.0.135', '2024-04-01 13:39:29', '{1 , admin@shiftwave.com , admin}', 'success'),
(125, 1, '192.168.0.135', '2024-04-01 13:43:27', '{1 , admin@shiftwave.com , admin}', 'success'),
(126, 1, '192.168.0.135', '2024-04-01 15:27:21', '{1 , admin@shiftwave.com , admin}', 'success'),
(127, 1, '192.168.0.135', '2024-04-01 15:38:30', '{1 , admin@shiftwave.com , admin}', 'success'),
(128, 1, '192.168.0.135', '2024-04-01 15:50:03', '{1 , admin@shiftwave.com , admin}', 'success'),
(129, 1, '192.168.0.135', '2024-04-01 15:51:02', '{1 , admin@shiftwave.com , admin}', 'success'),
(130, 1, '192.168.0.135', '2024-04-01 15:51:52', '{1 , admin@shiftwave.com , admin}', 'success'),
(131, 1, '192.168.0.135', '2024-04-01 15:54:32', '{1 , admin@shiftwave.com , admin}', 'success'),
(132, 1, '192.168.0.135', '2024-04-01 15:55:29', '{1 , admin@shiftwave.com , admin}', 'success'),
(133, 1, '192.168.0.135', '2024-04-01 15:56:00', '{1 , admin@shiftwave.com , admin}', 'success'),
(134, 1, '192.168.0.135', '2024-04-01 15:56:50', '{1 , admin@shiftwave.com , admin}', 'success'),
(135, 1, '192.168.0.135', '2024-04-01 16:00:17', '{1 , admin@shiftwave.com , admin}', 'success'),
(136, 1, '192.168.0.135', '2024-04-01 16:44:28', '{1 , admin@shiftwave.com , admin}', 'success'),
(137, 1, '192.168.0.135', '2024-04-02 09:00:47', '{1 , admin@shiftwave.com , admin}', 'success'),
(138, 1, '192.168.0.135', '2024-04-02 10:52:36', '{1 , admin@shiftwave.com , admin}', 'success'),
(139, 1, '192.168.0.135', '2024-04-02 10:53:26', '{1 , admin@shiftwave.com , admin}', 'success'),
(140, 1, '192.168.0.135', '2024-04-02 14:39:29', '{1 , admin@shiftwave.com , admin}', 'success'),
(141, 1, '192.168.0.135', '2024-04-02 14:59:15', '{1 , admin@shiftwave.com , admin}', 'success'),
(142, 1, '192.168.0.135', '2024-04-02 15:01:56', '{1 , admin@shiftwave.com , admin}', 'success'),
(143, 1, '192.168.0.135', '2024-04-02 15:03:41', '{1 , admin@shiftwave.com , admin}', 'success'),
(144, 1, '192.168.0.135', '2024-04-02 15:09:37', '{1 , admin@shiftwave.com , admin}', 'success'),
(145, 1, '192.168.0.135', '2024-04-02 15:10:57', '{1 , admin@shiftwave.com , admin}', 'success'),
(146, 1, '192.168.0.135', '2024-04-02 15:13:45', '{1 , admin@shiftwave.com , admin}', 'success'),
(147, 1, '192.168.0.135', '2024-04-02 15:17:56', '{1 , admin@shiftwave.com , admin}', 'success'),
(148, 1, '192.168.0.135', '2024-04-02 15:25:59', '{1 , admin@shiftwave.com , admin}', 'success'),
(149, 1, '192.168.0.135', '2024-04-02 15:58:23', '{1 , admin@shiftwave.com , admin}', 'success'),
(150, 1, '192.168.0.135', '2024-04-02 16:31:18', '{1 , admin@shiftwave.com , admin}', 'success'),
(151, 1, '192.168.0.135', '2024-04-02 16:32:06', '{1 , admin@shiftwave.com , admin}', 'success'),
(152, 1, '192.168.0.135', '2024-04-02 16:50:32', '{1 , admin@shiftwave.com , admin}', 'success'),
(153, 1, '192.168.0.135', '2024-04-02 16:52:16', '{1 , admin@shiftwave.com , admin}', 'success'),
(154, 1, '192.168.0.135', '2024-04-02 16:54:14', '{1 , admin@shiftwave.com , admin}', 'success'),
(155, 1, '192.168.0.135', '2024-04-02 17:08:14', '{1 , admin@shiftwave.com , admin}', 'success'),
(156, 1, '192.168.0.135', '2024-04-02 17:16:40', '{1 , admin@shiftwave.com , admin}', 'success'),
(157, 1, '192.168.0.135', '2024-04-02 17:37:30', '{1 , admin@shiftwave.com , admin}', 'success'),
(158, 1, '192.168.0.135', '2024-04-02 17:39:42', '{1 , admin@shiftwave.com , admin}', 'success'),
(159, 1, '192.168.0.135', '2024-04-02 17:54:00', '{1 , admin@shiftwave.com , admin}', 'success'),
(160, 1, '192.168.0.135', '2024-04-03 10:42:31', '{1 , admin@shiftwave.com , admin}', 'success'),
(161, 1, '192.168.0.135', '2024-04-03 15:30:39', '{1 , admin@shiftwave.com , admin}', 'success'),
(162, 1, '192.168.0.135', '2024-04-03 16:21:35', '{1 , admin@shiftwave.com , admin}', 'success'),
(163, 1, '192.168.0.135', '2024-04-03 16:27:39', '{1 , admin@shiftwave.com , admin}', 'success'),
(164, 1, '192.168.0.135', '2024-04-05 11:48:01', '{1 , admin@shiftwave.com , admin}', 'success'),
(165, 1, '192.168.0.135', '2024-04-05 17:45:45', '{1 , admin@shiftwave.com , admin}', 'success'),
(166, 1, '192.168.0.135', '2024-04-15 09:59:16', '{1 , admin@shiftwave.com , admin}', 'success'),
(167, 1, '192.168.0.135', '2024-04-15 11:56:20', '{1 , admin@shiftwave.com , admin}', 'success'),
(168, 1, '192.168.0.135', '2024-04-15 14:06:33', '{1 , admin@shiftwave.com , admin}', 'success'),
(169, 1, '192.168.0.135', '2024-04-15 14:12:30', '{1 , admin@shiftwave.com , admin}', 'success'),
(170, 1, '192.168.0.135', '2024-04-15 14:16:04', '{1 , admin@shiftwave.com , admin}', 'success'),
(171, 1, '192.168.0.135', '2024-04-15 14:22:36', '{1 , admin@shiftwave.com , admin}', 'success'),
(172, 1, '192.168.0.135', '2024-04-15 15:20:41', '{1 , admin@shiftwave.com , admin}', 'success'),
(173, 1, '192.168.0.135', '2024-04-16 09:04:44', '{1 , admin@shiftwave.com , admin}', 'success'),
(174, 1, '192.168.0.135', '2024-04-16 09:08:12', '{1 , admin@shiftwave.com , admin}', 'success'),
(175, 1, '192.168.0.135', '2024-04-16 09:19:48', '{1 , admin@shiftwave.com , admin}', 'success'),
(176, 1, '192.168.0.135', '2024-04-16 10:02:40', '{1 , admin@shiftwave.com , admin}', 'success'),
(177, 1, '192.168.0.135', '2024-04-16 11:17:38', '{1 , admin@shiftwave.com , admin}', 'success'),
(178, 1, '192.168.0.135', '2024-04-16 11:18:54', '{1 , admin@shiftwave.com , admin}', 'success'),
(179, 1, '192.168.0.135', '2024-04-16 11:24:49', '{1 , admin@shiftwave.com , admin}', 'success'),
(180, 1, '192.168.0.135', '2024-04-16 11:25:40', '{1 , admin@shiftwave.com , admin}', 'success'),
(181, 1, '192.168.0.135', '2024-04-16 11:26:18', '{1 , admin@shiftwave.com , admin}', 'success'),
(182, 1, '192.168.0.135', '2024-04-16 11:30:24', '{1 , admin@shiftwave.com , admin}', 'success'),
(183, 1, '192.168.0.135', '2024-04-16 11:32:14', '{1 , admin@shiftwave.com , admin}', 'success'),
(184, 1, '192.168.0.135', '2024-04-16 12:29:01', '{1 , admin@shiftwave.com , admin}', 'success'),
(185, 1, '192.168.0.135', '2024-04-16 13:34:02', '{1 , admin@shiftwave.com , admin}', 'success'),
(186, 1, '192.168.0.135', '2024-04-16 13:39:19', '{1 , admin@shiftwave.com , admin}', 'success'),
(187, 1, '192.168.0.135', '2024-04-16 13:47:57', '{1 , admin@shiftwave.com , admin}', 'success'),
(188, 1, '192.168.0.135', '2024-04-16 13:48:19', '{1 , admin@shiftwave.com , admin}', 'success'),
(189, 1, '192.168.0.135', '2024-04-16 13:58:20', '{1 , admin@shiftwave.com , admin}', 'success'),
(190, 1, '192.168.0.135', '2024-04-23 10:34:08', '{1 , admin@shiftwave.com , admin}', 'success'),
(191, 1, '192.168.0.135', '2024-04-23 10:41:46', '{1 , admin@shiftwave.com , admin}', 'success'),
(192, 1, '192.168.0.135', '2024-04-27 10:30:10', '{1 , admin@shiftwave.com , admin}', 'success'),
(193, 1, '192.168.0.135', '2024-04-27 10:41:05', '{1 , admin@shiftwave.com , admin}', 'success'),
(194, 1, '192.168.0.135', '2024-05-01 10:19:23', '{1 , admin@shiftwave.com , admin}', 'success'),
(195, 1, '192.168.0.135', '2024-05-02 09:23:58', '{1 , admin@shiftwave.com , admin}', 'success'),
(196, 1, '192.168.0.135', '2024-05-02 14:51:35', '{1 , admin@shiftwave.com , admin}', 'success'),
(197, 1, '192.168.0.135', '2024-05-02 14:56:09', '{1 , admin@shiftwave.com , admin}', 'success'),
(198, 1, '192.168.0.135', '2024-05-07 11:23:08', '{1 , admin@shiftwave.com , admin}', 'success'),
(199, 1, '192.168.0.135', '2024-05-07 11:26:23', '{1 , admin@shiftwave.com , admin}', 'success'),
(200, 1, '192.168.0.135', '2024-05-08 10:08:21', '{1 , admin@shiftwave.com , admin}', 'success'),
(201, 1, '192.168.0.135', '2024-05-08 11:15:32', '{1 , admin@shiftwave.com , admin}', 'success'),
(202, 1, '192.168.0.135', '2024-05-08 18:19:09', '{1 , admin@shiftwave.com , admin}', 'success'),
(203, 1, '192.168.0.135', '2024-05-09 12:14:08', '{1 , admin@shiftwave.com , admin}', 'success'),
(204, 1, '192.168.0.135', '2024-05-09 15:40:36', '{1 , admin@shiftwave.com , admin}', 'success'),
(205, 1, '192.168.0.135', '2024-05-09 16:27:02', '{1 , admin@shiftwave.com , admin}', 'success'),
(206, 1, '192.168.0.135', '2024-05-15 10:50:52', '{1 , admin@shiftwave.com , admin}', 'success'),
(207, 1, '192.168.0.135', '2024-05-15 16:44:03', '{1 , admin@shiftwave.com , admin}', 'success'),
(208, 1, '192.168.0.135', '2024-05-16 17:01:42', '{1 , admin@shiftwave.com , admin}', 'success'),
(209, 1, '192.168.0.135', '2024-05-17 09:11:09', '{1 , admin@shiftwave.com , admin}', 'success'),
(210, 1, '192.168.0.135', '2024-05-17 10:22:51', '{1 , admin@shiftwave.com , admin}', 'success'),
(211, 1, '192.168.0.135', '2024-05-20 10:06:17', '{1 , admin@shiftwave.com , admin}', 'success'),
(212, 1, '192.168.0.135', '2024-05-20 11:46:07', '{1 , admin@shiftwave.com , admin}', 'success'),
(213, 1, '192.168.0.135', '2024-05-20 11:50:21', '{1 , admin@shiftwave.com , admin}', 'success'),
(214, 1, '192.168.0.135', '2024-05-20 12:10:55', '{1 , admin@shiftwave.com , admin}', 'success'),
(215, 1, '192.168.0.135', '2024-05-20 12:18:03', '{1 , admin@shiftwave.com , admin}', 'success'),
(216, 1, '192.168.0.135', '2024-05-20 14:13:06', '{1 , admin@shiftwave.com , admin}', 'success'),
(217, 1, '192.168.0.135', '2024-05-20 14:16:11', '{1 , admin@shiftwave.com , admin}', 'success'),
(218, 1, '192.168.0.135', '2024-05-20 14:21:12', '{1 , admin@shiftwave.com , admin}', 'success'),
(219, 1, '192.168.0.135', '2024-05-20 16:07:52', '{1 , admin@shiftwave.com , admin}', 'success'),
(220, 1, '192.168.0.135', '2024-05-20 16:47:07', '{1 , admin@shiftwave.com , admin}', 'success'),
(221, 1, '192.168.0.135', '2024-05-20 16:48:11', '{1 , admin@shiftwave.com , admin}', 'success'),
(222, 1, '192.168.0.135', '2024-05-20 16:49:11', '{1 , admin@shiftwave.com , admin}', 'success'),
(223, 1, '192.168.0.135', '2024-05-20 17:04:41', '{1 , admin@shiftwave.com , admin}', 'success'),
(224, 1, '192.168.0.135', '2024-05-20 18:09:35', '{1 , admin@shiftwave.com , admin}', 'success'),
(225, 1, '192.168.0.135', '2024-05-20 18:10:25', '{1 , admin@shiftwave.com , admin}', 'success'),
(226, 1, '192.168.0.135', '2024-05-21 09:19:58', '{1 , admin@shiftwave.com , admin}', 'success'),
(227, 1, '192.168.0.135', '2024-05-21 09:39:43', '{1 , admin@shiftwave.com , admin}', 'success'),
(228, 1, '192.168.0.135', '2024-05-21 10:08:44', '{1 , admin@shiftwave.com , admin}', 'success'),
(229, 1, '192.168.0.135', '2024-05-21 10:37:06', '{1 , admin@shiftwave.com , admin}', 'success'),
(230, 1, '192.168.0.135', '2024-05-21 10:40:14', '{1 , admin@shiftwave.com , admin}', 'success'),
(231, 1, '192.168.0.135', '2024-05-21 10:40:25', '{1 , admin@shiftwave.com , admin}', 'success'),
(232, 1, '192.168.0.135', '2024-05-21 11:04:44', '{1 , admin@shiftwave.com , admin}', 'success'),
(233, 1, '192.168.0.135', '2024-05-21 11:05:11', '{1 , admin@shiftwave.com , admin}', 'success'),
(234, 1, '192.168.0.135', '2024-05-21 11:11:04', '{1 , admin@shiftwave.com , admin}', 'success'),
(235, 1, '192.168.0.135', '2024-05-21 11:16:36', '{1 , admin@shiftwave.com , admin}', 'success'),
(236, 1, '192.168.0.135', '2024-05-21 11:16:51', '{1 , admin@shiftwave.com , admin}', 'success'),
(237, 1, '192.168.0.135', '2024-05-21 12:01:56', '{1 , admin@shiftwave.com , admin}', 'success'),
(238, 1, '192.168.0.135', '2024-05-21 12:10:00', '{1 , admin@shiftwave.com , admin}', 'success'),
(239, 1, '192.168.0.135', '2024-05-21 12:13:01', '{1 , admin@shiftwave.com , admin}', 'success'),
(240, 1, '192.168.0.135', '2024-05-21 13:47:35', '{1 , admin@shiftwave.com , admin}', 'success'),
(241, 1, '192.168.0.135', '2024-05-21 13:48:06', '{1 , admin@shiftwave.com , admin}', 'success'),
(242, 1, '192.168.0.135', '2024-05-21 13:50:24', '{1 , admin@shiftwave.com , admin}', 'success'),
(243, 1, '192.168.0.135', '2024-05-21 15:00:15', '{1 , admin@shiftwave.com , admin}', 'success'),
(244, 1, '192.168.0.135', '2024-05-21 15:44:56', '{1 , admin@shiftwave.com , admin}', 'success'),
(245, 1, '192.168.0.135', '2024-05-21 16:23:37', '{1 , admin@shiftwave.com , admin}', 'success');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_ID` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(10) NOT NULL,
  `slot_id` varchar(10) NOT NULL,
  `order_delivery_Date` datetime NOT NULL,
  `plan_id` int(11) NOT NULL,
  `order_status` varchar(20) NOT NULL,
  PRIMARY KEY (`order_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_ID`, `customer_id`, `slot_id`, `order_delivery_Date`, `plan_id`, `order_status`) VALUES
(1, '5', '2', '2024-04-23 14:25:07', 1, 'pending'),
(2, '5', '2', '2024-04-30 14:25:49', 1, 'pending'),
(3, '5', '2', '2024-05-07 14:25:49', 1, 'pending'),
(4, '5', '2', '2024-05-14 14:27:13', 1, 'pending'),
(17, '5', '4', '2024-04-18 14:28:33', 1, 'pending'),
(18, '5', '4', '2024-04-25 14:28:33', 1, 'pending'),
(19, '5', '4', '2024-05-02 14:32:10', 1, 'pending'),
(20, '5', '4', '2024-05-09 14:36:28', 1, 'pending'),
(21, '5', '3', '2024-03-20 14:36:49', 1, 'pending'),
(22, '5', '3', '2024-03-27 14:36:49', 1, 'pending'),
(23, '5', '3', '2024-04-03 14:39:40', 1, 'pending'),
(24, '5', '3', '2024-04-10 14:39:59', 1, 'pending'),
(25, '2', '1', '2024-05-20 14:40:16', 2, 'pending'),
(26, '2', '1', '2024-05-27 14:40:16', 1, 'pending'),
(27, '2', '1', '2024-06-03 14:42:47', 2, 'pending'),
(28, '2', '1', '2024-06-10 14:43:42', 2, 'pending'),
(29, '1', '5', '2024-04-19 14:44:16', 1, 'pending'),
(30, '1', '5', '2024-04-26 14:44:16', 1, 'pending'),
(31, '1', '5', '2024-05-03 14:48:37', 1, 'pending'),
(32, '1', '5', '2024-05-10 14:48:59', 1, 'pending'),
(33, '3', '3', '2024-05-22 15:25:51', 2, 'pending'),
(34, '3', '3', '2024-05-29 15:25:51', 2, 'pending'),
(35, '3', '3', '2024-06-05 15:28:40', 2, 'pending'),
(36, '3', '3', '2024-06-12 15:29:15', 2, 'pending'),
(37, '4', '3', '2024-05-22 15:30:24', 1, 'pending'),
(38, '4', '3', '2024-05-29 15:30:24', 1, 'pending'),
(39, '4', '3', '2024-06-05 15:31:06', 1, 'pending'),
(40, '4', '3', '2024-06-12 15:31:26', 1, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

DROP TABLE IF EXISTS `plans`;
CREATE TABLE IF NOT EXISTS `plans` (
  `plan_id` int(11) NOT NULL,
  `plan_name` varchar(255) NOT NULL,
  `plan_description` text,
  `plan_varaities_veggies` varchar(255) DEFAULT NULL,
  `veggies_weight` varchar(50) DEFAULT NULL,
  `plan_createdon` datetime DEFAULT NULL,
  `plan_Modified_on` datetime DEFAULT NULL,
  `plan_status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`plan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`plan_id`, `plan_name`, `plan_description`, `plan_varaities_veggies`, `veggies_weight`, `plan_createdon`, `plan_Modified_on`, `plan_status`) VALUES
(1, 'Plan 399', 'Subscribe for a Monthly PlanGet One Week Free', 'Vegetables (15)', '7kg', '2024-05-17 15:14:30', '2024-05-17 15:14:30', 'Active'),
(2, 'Plan 599', 'Subscribe for a Monthly Plan Get One Week Free', 'Vegetables (17)', '8kg', '2024-05-17 15:16:45', '2024-05-17 15:14:30', 'Active'),
(3, 'Plan 799', 'Subscribe for a Monthly PlanGet One Week Free', 'Vegetables (19)', '9kg', '2024-05-17 15:14:30', '2024-05-17 15:14:30', 'Active'),
(4, 'Plan 999', 'Subscribe for a Monthly PlanGet One Week Free', 'Vegetables (21)', '10kg', '2024-05-17 15:14:30', '2024-05-17 15:14:30', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `plan_details`
--

DROP TABLE IF EXISTS `plan_details`;
CREATE TABLE IF NOT EXISTS `plan_details` (
  `plan_details_id` int(11) NOT NULL AUTO_INCREMENT,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `plan_id` int(10) DEFAULT NULL,
  `customer_id` int(10) DEFAULT NULL,
  `plan_details_created_date` datetime DEFAULT NULL,
  `slot_id` int(10) DEFAULT NULL,
  `transaction_id` int(10) DEFAULT NULL,
  `plan_status` enum('active','inactive') DEFAULT NULL,
  `plan_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`plan_details_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plan_details`
--

INSERT INTO `plan_details` (`plan_details_id`, `start_date`, `end_date`, `plan_id`, `customer_id`, `plan_details_created_date`, `slot_id`, `transaction_id`, `plan_status`, `plan_modified`) VALUES
(1, '2024-04-22 00:00:00', '2024-05-22 00:00:00', 1, 5, '2024-05-20 12:39:35', 2, 1, 'active', '2024-05-20 12:39:35'),
(2, '2024-04-17 09:29:35', '2024-05-17 09:29:35', 1, 5, '2024-04-17 09:29:31', 4, 2, 'active', '2024-04-17 09:28:31'),
(4, '2024-03-16 09:29:35', '2024-04-16 09:29:35', 1, 5, '2024-03-16 09:29:35', 3, 3, 'active', '2024-03-16 09:29:35'),
(6, '2024-05-14 09:49:21', '2024-06-14 09:49:21', 2, 2, '2024-05-14 09:49:21', 1, 4, 'active', '2024-05-14 09:49:21'),
(7, '2024-04-13 09:52:09', '2024-05-13 09:52:09', 1, 1, '2024-04-13 09:52:09', 5, 6, 'active', '2024-04-13 09:52:09'),
(10, '2024-05-21 15:10:04', '2024-06-21 15:10:04', 2, 3, '2024-05-21 15:10:04', 3, 7, 'active', '2024-05-21 15:10:04'),
(12, '2024-05-21 15:12:29', '2024-06-21 15:12:29', 1, 4, '2024-05-21 15:12:29', 3, 8, 'active', '2024-05-21 15:12:29');

-- --------------------------------------------------------

--
-- Table structure for table `plan_varaities`
--

DROP TABLE IF EXISTS `plan_varaities`;
CREATE TABLE IF NOT EXISTS `plan_varaities` (
  `Veg_id` int(11) NOT NULL AUTO_INCREMENT,
  `plan_id` int(11) NOT NULL,
  `item_id` int(11) DEFAULT NULL,
  `weight` varchar(20) DEFAULT NULL,
  `Included_veggies` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Veg_id`),
  KEY `Item_id` (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plan_varaities`
--

INSERT INTO `plan_varaities` (`Veg_id`, `plan_id`, `item_id`, `weight`, `Included_veggies`) VALUES
(1, 1, 1, '2kg', ''),
(2, 1, 2, '1kg', ''),
(3, 1, 3, '500gms', ''),
(4, 1, 4, '300gms', ''),
(5, 1, 5, '100gms', ''),
(6, 1, 6, '100gms', ''),
(7, 1, 7, '100gms', ''),
(8, 1, 8, '150gms', ''),
(9, 1, 9, NULL, 'Three Included - 250gms Each'),
(10, 1, 10, NULL, ''),
(11, 1, 11, NULL, ''),
(12, 1, 16, NULL, ''),
(13, 1, 17, NULL, 'Two Included - 250gms (Each)'),
(14, 1, 18, NULL, ''),
(15, 1, 19, NULL, ''),
(16, 1, 27, NULL, 'One Included - 250gms'),
(17, 1, 28, NULL, ''),
(18, 1, 23, NULL, ''),
(19, 1, 24, NULL, 'Two Included - 500gms (Each)'),
(20, 1, 25, NULL, ''),
(21, 2, 1, '3kg', ''),
(22, 2, 2, '2kg', ''),
(23, 2, 3, '500gms', ''),
(24, 2, 4, '300gms', ''),
(25, 2, 5, '200gms', ''),
(26, 2, 6, '200gms', ''),
(27, 2, 7, '200gms', ''),
(28, 2, 8, '200gms', ''),
(29, 2, 9, NULL, 'Three Included - 250gms Each'),
(30, 2, 10, NULL, ''),
(31, 2, 11, NULL, ''),
(32, 2, 16, NULL, ''),
(33, 2, 17, NULL, 'Two Included - 250gms (Each)'),
(34, 2, 18, NULL, ''),
(35, 2, 19, NULL, ''),
(36, 2, 27, NULL, 'One Included - 250gms'),
(37, 2, 28, NULL, ''),
(38, 2, 23, NULL, ''),
(39, 2, 24, NULL, 'Two Included - 500gms (Each)'),
(40, 2, 25, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `slots`
--

DROP TABLE IF EXISTS `slots`;
CREATE TABLE IF NOT EXISTS `slots` (
  `slot_id` int(11) NOT NULL AUTO_INCREMENT,
  `slot_day` varchar(20) NOT NULL,
  `no_of_slots` int(11) NOT NULL,
  `modifiedOn` datetime NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`slot_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slots`
--

INSERT INTO `slots` (`slot_id`, `slot_day`, `no_of_slots`, `modifiedOn`, `status`) VALUES
(1, 'Monday', 20, '2024-03-25 09:48:34', 'Active'),
(2, 'Tuesday', 30, '2024-03-25 09:48:34', 'Active'),
(3, 'Wednesday', 20, '2024-05-17 16:19:15', 'Active'),
(4, 'Thuresday', 40, '2024-05-17 16:20:07', 'Active'),
(5, 'Friday', 24, '2024-05-17 16:20:29', 'Active'),
(6, 'Saturday', 30, '2024-05-17 16:20:51', 'Active'),
(7, 'Sunday', 24, '2024-05-17 16:21:06', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

DROP TABLE IF EXISTS `subscribers`;
CREATE TABLE IF NOT EXISTS `subscribers` (
  `subscriber_id` int(11) NOT NULL AUTO_INCREMENT,
  `plan_details_id` int(255) NOT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  PRIMARY KEY (`subscriber_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `transaction_id` int(10) NOT NULL,
  `customer_id` int(10) DEFAULT NULL,
  `plan_id` int(10) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `payment_date` datetime DEFAULT NULL,
  `payment_method` varchar(50) DEFAULT NULL,
  `payment_status` enum('success','failed','pending') DEFAULT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`transaction_id`, `customer_id`, `plan_id`, `amount`, `payment_date`, `payment_method`, `payment_status`) VALUES
(1, 5, 1, '399.00', '2024-05-20 13:47:35', '\'Credit Card\'', 'success'),
(2, 5, 1, '399.00', '2024-04-17 14:03:18', '\'Credit Card\'', 'success'),
(3, 5, 1, '399.00', '2024-03-16 14:03:18', '\'debit card\'', 'success'),
(4, 2, 2, '599.00', '2024-05-14 14:11:45', '\'credit card\'', 'success'),
(6, 1, 1, '399.00', '2024-04-13 14:13:01', '\'Credit Card\'', 'success'),
(7, 1, 1, '399.00', '2024-04-12 14:14:10', '\'Credit Card\'', 'success');

-- --------------------------------------------------------

--
-- Table structure for table `vegetables`
--

DROP TABLE IF EXISTS `vegetables`;
CREATE TABLE IF NOT EXISTS `vegetables` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(50) NOT NULL,
  `item_image` varchar(50) NOT NULL,
  `item_quantity` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vegetables`
--

INSERT INTO `vegetables` (`item_id`, `item_name`, `item_image`, `item_quantity`, `price`, `category`) VALUES
(1, 'onion', 'onion_img', '5kg', 100, 'Essential'),
(2, 'tomato', 'img', '10kg', 200, 'Essential'),
(3, 'Potatoes', 'img', '8kg', 300, 'Essential'),
(4, 'Garlic', 'img', '20kg', 400, 'Essential'),
(5, 'Coriander', 'img', '25kg', 500, 'Essential'),
(6, 'Green Chilli', 'img', '30kg', 1000, 'Essential'),
(7, 'Curry Leaf', 'img', '40kg', 600, 'Essential'),
(8, 'Ginger', 'img', '10kg', 220, 'Essential'),
(9, 'Cabbage', 'img', '10kg', 180, 'Other'),
(10, 'Cauliflower', 'img', '20kg', 300, 'Other'),
(11, 'Brinjal', 'img', '10kg', 220, 'Other'),
(12, 'Black Eggplant', 'img', '30kg', 150, 'Other'),
(13, 'Okra', 'img', '10kg', 200, 'Other'),
(14, 'Ivy Gourd', 'img', '10kg', 450, 'Other'),
(15, 'Drumstick', 'img', '80kg', 200, 'Other'),
(16, 'Spinach', 'img', '5kg', 400, 'Leafy'),
(17, 'Mint Leaves', 'img', '15kg', 200, 'Leafy'),
(18, 'Amaranth', 'img', '8kg', 350, 'Leafy'),
(19, 'Sorrel Leaves', 'img', '12kg', 200, 'Leafy'),
(20, 'Carrot', 'img', '6kg', 180, 'Root'),
(21, 'Radish', 'img', '7kg', 200, 'Root'),
(22, 'Beetroot', 'img', '10kg', 200, 'Root'),
(23, 'Bitter Gourd', 'img', '20kg', 220, 'Squash'),
(24, 'Bottle Gourd', 'img', '13kg', 200, 'Squash'),
(25, 'Ridge Gourd', 'img', '8kg', 300, 'Squash'),
(26, 'Pointed Gourd', 'img', '10kg', 250, 'Squash'),
(27, 'Peas', 'img', '5kg', 200, 'Podded'),
(28, 'Hyacinth', 'img', '6kg', 400, 'Podded');

-- --------------------------------------------------------

--
-- Table structure for table `vegetables_plan`
--

DROP TABLE IF EXISTS `vegetables_plan`;
CREATE TABLE IF NOT EXISTS `vegetables_plan` (
  `id` int(11) NOT NULL,
  `items` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `plan_varaities`
--
ALTER TABLE `plan_varaities`
  ADD CONSTRAINT `plan_varaities_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `vegetables` (`item_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
