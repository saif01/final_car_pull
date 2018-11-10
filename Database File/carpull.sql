-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2018 at 09:09 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carpull`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(6) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `admin_img` varchar(255) NOT NULL,
  `admin_phone` varchar(100) NOT NULL,
  `admin_officeID` varchar(100) NOT NULL,
  `admin_status` varchar(20) NOT NULL,
  `register` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_password`, `admin_img`, `admin_phone`, `admin_officeID`, `admin_status`, `register`) VALUES
(1, 'admin', '5683', 'download.png', '01707080401', 'BD00058', '1', '2018-11-08 06:27:10'),
(3, 'admin2', '12345', 'download.png', '017070707', 'BD25821', '1', '2018-11-07 10:08:38');

-- --------------------------------------------------------

--
-- Table structure for table `car_booking`
--

CREATE TABLE `car_booking` (
  `booking_id` int(20) NOT NULL,
  `car_id` varchar(100) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `car_name` varchar(100) NOT NULL,
  `car_number` varchar(100) NOT NULL,
  `car_img` varchar(255) NOT NULL,
  `start_date` varchar(100) NOT NULL,
  `end_date` varchar(100) NOT NULL,
  `location` varchar(255) NOT NULL,
  `day_count` varchar(50) NOT NULL,
  `boking_status` varchar(20) NOT NULL,
  `booking_cost` varchar(100) NOT NULL,
  `driver_rating` varchar(50) NOT NULL,
  `driver_id` varchar(20) NOT NULL,
  `start_mileage` varchar(50) NOT NULL,
  `end_mileage` varchar(50) NOT NULL,
  `reg_date_booking` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_booking`
--

INSERT INTO `car_booking` (`booking_id`, `car_id`, `user_id`, `user_name`, `car_name`, `car_number`, `car_img`, `start_date`, `end_date`, `location`, `day_count`, `boking_status`, `booking_cost`, `driver_rating`, `driver_id`, `start_mileage`, `end_mileage`, `reg_date_booking`) VALUES
(4, '16', '1', 'saif', 'Suzuki', '005', 'ddd (2).jpg', '2018-10-13', '2018-10-15', 'Trisal', '', '1', '1050', '5', '', '4051', '4650', '2018-10-28 06:56:26.604921'),
(6, '16', '2', 'saif', 'Suzuki', '005', 'ddd (2).jpg', '2018-10-13', '2018-10-17', 'Valuka', '', '1', '1050', '', '', '', '', '2018-10-28 06:56:26.604921'),
(8, '16', '1', 'saif', 'Suzuki', '005', 'ddd (2).jpg', '2018-10-12', '2018-10-13', 'Savar', '', '1', '1050', '6', '', '5012', '6021', '2018-10-28 06:56:26.604921'),
(10, '14', '1', 'saif', 'Toyota', '003', 'ddd (1).jpg', '2018-10-15 09:00:00', '2018-10-16 9:30:00', 'Mymenshingh', '', '0', '750', '8', '', '1204', '1354', '2018-10-28 06:56:54.722956'),
(11, '14', '1', 'saif', 'Toyota', '003', 'ddd (1).jpg', '2018-10-16 12:00:00', '2018-10-18 15:00:00', 'Dhaka', '', '1', '1050', '9', '', '4325', '4452', '2018-10-28 06:56:26.604921'),
(18, '19', '1', 'saif', 'Toyota Probox', '002', 'ertyrey.jpg', '2018-10-02 00:00:00', '2018-10-05 00:00:00', 'valuka3', '', '', '1050', '8', '14', '7089', '7895', '2018-10-28 08:32:27.887450'),
(19, '19', '1', 'saif', 'Toyota Probox', '002', 'ertyrey.jpg', '2018-10-12 00:00:00', '2018-10-14 00:00:00', 'savar ', '', '1', '1050', '8', '14', '1265', '1356', '2018-10-29 11:28:31.344383'),
(20, '19', '1', 'saif', 'Toyota Probox', '002', 'ertyrey.jpg', '2018-10-17 06:00:00', '2018-10-17 12:00:00', 'Bogura', '', '1', '1050', '6', '14', '1234', '1345', '2018-10-29 11:28:54.092528'),
(21, '17', '1', 'saif', 'Nissan 2', '001', 'rewre.jpg', '2018-10-17 00:00:00', '2018-10-18 00:00:00', 'Dhaka', '2', '1', '1050', '6', '12', '12345', '23455', '2018-10-29 11:29:22.797270'),
(22, '19', '1', 'saif', 'Toyota Probox', '002', 'ertyrey.jpg', '2018-10-18 01:00:00', '2018-10-22 23:59:00', 'hhhhhhhh', '5', '1', '1050', '9', '14', '4582', '4652', '2018-10-29 11:29:40.956132'),
(23, '14', '1', 'saif', 'Toyota', '003', 'ddd (1).jpg', '2018-11-01 01:00:00', '2018-11-03 23:59:00', 'sssssss', '4', '1', '1050', '9', '11', '4056', '5356', '2018-10-29 10:54:34.884540'),
(27, '14', '1', 'saif', 'Toyota', '003', 'ddd (1).jpg', '2018-10-23 01:00:00', '2018-10-23 23:59:00', 'Mymenshingh', '3', '1', '1250', '9', '11', '1234', '2345', '2018-10-29 11:30:00.309020'),
(28, '14', '1', 'saif', 'Toyota', '003', 'ddd (1).jpg', '2018-11-14 01:00:00', '2018-11-15 23:59:00', 'Valuka', '2', '0', '1050', '9', '11', '2345', '3452', '2018-10-29 11:31:15.343706'),
(29, '14', '1', 'saif', 'Toyota', '003', 'ddd (1).jpg', '2018-10-01 00:00:00', '2018-10-04 00:00:00', 'gggg', '', '1', '1050', '9', '11', '3512', '3652', '2018-10-29 11:30:17.884409'),
(30, '14', '1', 'saif', 'Toyota', '003', 'ddd (1).jpg', '2018-10-04 00:00:00', '2018-10-05 00:00:00', 'ddddddddd', '', '1', '1050', '9', '11', '1234', '2341', '2018-10-29 11:30:48.157678'),
(31, '14', '1', 'saif', 'Toyota', '003', 'ddd (1).jpg', '2018-10-05 00:00:00', '2018-10-06 00:00:00', 'ssssss', '', '1', '870', '8', '11', '4578', '4689', '2018-10-29 12:15:07.689775'),
(32, '14', '1', 'saif', 'Toyota', '003', 'ddd (1).jpg', '2018-10-10 00:00:00', '2018-10-11 00:00:00', 'gggg', '', '0', '1050', '9', '11', '', '', '2018-10-29 12:40:38.654613'),
(33, '14', '1', 'saif', 'Toyota', '003', 'ddd (1).jpg', '2018-10-12 00:00:00', '2018-10-13 00:00:00', 'valuka', '', '1', '1050', '7', '11', '4567', '5683', '2018-10-29 12:41:36.851211'),
(34, '14', '1', 'saif', 'Toyota', '003', 'ddd (1).jpg', '2018-10-20 00:00:00', '2018-10-21 00:00:00', 'Dhaka', '', '1', '1050', '5', '', '', '', '2018-10-28 06:58:14.645241'),
(35, '14', '1', 'saif', 'Toyota', '003', 'ddd (1).jpg', '2018-11-04 00:00:00', '2018-11-06 00:00:00', 'ttttttttt', '', '1', '1050', '8', '11', '1245', '1356', '2018-10-29 10:37:48.663937'),
(36, '14', '1', 'saif', 'Toyota', '003', 'ddd (1).jpg', '2018-10-24 00:00:00', '2018-10-25 00:00:00', 'ffffff', '', '1', '1050', '10', '', '', '', '2018-10-28 06:56:26.604921'),
(37, '14', '1', 'saif', 'Toyota', '003', 'ddd (1).jpg', '2018-10-25 00:00:00', '2018-10-26 00:00:00', 'Mymenshingh', '', '0', '1050', '', '', '7820', '', '2018-10-28 06:57:55.308110'),
(38, '16', '1', 'saif', 'Suzuki', '005', 'ddd (2).jpg', '2018-10-24 06:00:00', '2018-10-24 12:30:00', 'savar', '0', '1', '1050', '', '', '', '', '2018-10-28 06:56:26.604921'),
(39, '16', '1', 'saif', 'Suzuki', '005', 'ddd (2).jpg', '2018-10-01 00:00:00', '2018-10-04 00:00:00', 'Valuka', '3', '1', '1050', '', '', '', '', '2018-10-29 11:16:01.991801'),
(41, '14', '1', 'saif', 'Toyota', '003', 'ddd (1).jpg', '2018-10-27 06:00:00', '2018-10-27 10:00:00', 'savar', '0', '1', '1050', '', '', '', '', '2018-10-28 06:56:26.604921'),
(45, '14', '4', 'rana', 'Toyota', '003', 'ddd (1).jpg', '2018-10-29 01:00:00', '2018-10-29 23:59:00', 'Mymensingh', '1', '1', '780', '8', '11', '4567', '5642', '2018-10-31 06:16:48.859903'),
(46, '16', '4', 'rana', 'Suzuki', '005', 'ddd (2).jpg', '2018-11-03 01:00:00', '2018-11-04 24:00:00', 'Mymensingh', '2', '1', '1478', '8', '1', '5682', '6932', '2018-10-31 06:17:32.102901'),
(47, '19', '4', 'rana', 'Toyota Probox', '002', 'ertyrey.jpg', '2018-11-01 01:00:00', '2018-11-02 23:59:00', 'Mymensingh', '2', '1', '2588', '6', '', '5682', '6935', '2018-10-31 06:17:55.530198'),
(48, '17', '4', 'rana', 'Nissan 2', '001', 'rewre.jpg', '2018-11-01 01:00:00', '2018-11-02 23:59:00', 'valuka', '2', '1', '', '', '', '', '', '2018-10-29 10:53:50.137837'),
(49, '16', '4', 'rana', 'Suzuki', '005', 'ddd (2).jpg', '2018-10-29 01:00:00', '2018-10-31 23:59:00', 'Select Location', '3', '1', '', '', '', '', '', '2018-10-29 10:55:44.851578'),
(50, '16', '4', 'rana', 'Suzuki', '005', 'ddd (2).jpg', '2018-11-06 01:00:00', '2018-11-07 23:59:00', 'Mymensingh', '2', '1', '', '', '', '', '', '2018-10-30 09:43:41.687666'),
(51, '14', '4', 'rana', 'Toyota', '003', 'ddd (1).jpg', '2018-11-06 01:00:00', '2018-11-06 23:59:00', 'Savar', '1', '1', '', '', '', '', '', '2018-10-31 11:07:05.673260'),
(52, '14', '4', 'rana', 'Toyota', '003', 'ddd (1).jpg', '2018-12-07 01:00:00', '2018-12-07 23:59:00', 'Mymensingh', '1', '1', '', '', '', '', '', '2018-10-31 11:12:35.097345'),
(53, '14', '4', 'rana', 'Toyota', '003', 'ddd (1).jpg', ' 01:00:00', ' 23:59:00', 'Select', '1', '1', '', '', '', '', '', '2018-11-01 04:59:21.609958'),
(54, '14', '4', 'rana', 'Toyota', '003', 'ddd (1).jpg', '2018-11-16 01:00:00', '2018-11-17 23:59:00', 'Select Location', '2', '1', '', '', '', '', '', '2018-11-01 05:03:53.378971'),
(55, '14', '4', 'rana', 'Toyota', '003', 'ddd (1).jpg', '2018-11-07 01:00:00', '2018-11-09 23:59:00', 'Select Location', '3', '1', '', '', '', '', '', '2018-11-01 05:12:23.136076'),
(56, '16', '4', 'rana', 'Suzuki', '005', 'ddd (2).jpg', '2018-11-04 01:00:00', '2018-11-04 23:59:00', 'valuka', '1', '1', '', '', '', '', '', '2018-11-01 11:22:16.233565'),
(57, '14', '4', 'rana', 'Toyota', '003', 'ddd (1).jpg', '2018-11-11 01:00:00', '2018-11-11 23:59:00', 'valuka', '1', '1', '', '', '', '', '', '2018-11-01 11:59:10.552789'),
(58, '14', '4', 'rana', 'Toyota', '003', 'ddd (1).jpg', '2018-09-28 01:00:00', '2018-09-28 23:59:00', 'Dhaka', '1', '1', '', '', '', '', '', '2018-11-01 12:11:34.878342'),
(60, '17', '4', 'rana', 'Nissan 2', '001', 'rewre.jpg', '2018-11-07 01:00:00', '2018-11-11 23:59:00', 'Mymensingh', '2', '1', '', '', '', '', '', '2018-11-05 08:45:25.043965'),
(61, '19', '6', 'hadi', 'Toyota Probox', '002', 'ertyrey.jpg', '2018-11-04 01:00:00', '2018-11-05 23:59:00', 'Savar', '2', '1', '', '', '', '', '', '2018-11-07 13:28:50.292544'),
(62, '17', '6', 'hadi', 'Nissan 2', '001', 'rewre.jpg', '2018-10-29 01:00:00', '2018-10-31 23:59:00', 'Savar', '3', '1', '', '', '', '', '', '2018-11-07 13:29:27.766681'),
(63, '19', '6', 'hadi', 'Toyota Probox', '002', 'ertyrey.jpg', '2018-10-29 01:00:00', '2018-10-30 23:59:00', 'Mymensingh', '2', '1', '', '', '', '', '', '2018-11-08 06:08:59.463091'),
(64, '16', '6', 'hadi', 'Suzuki', '005', 'ddd (2).jpg', '2018-10-02 01:00:00', '2018-09-27 23:59:00', 'Dhaka', '4', '1', '', '', '', '', '', '2018-11-08 06:09:26.019357'),
(65, '19', '6', 'hadi', 'Toyota Probox', '002', 'ertyrey.jpg', '2018-11-06 01:00:00', '2018-11-06 23:59:00', 'Dhaka', '1', '1', '', '', '', '', '', '2018-11-08 06:10:15.003289'),
(66, '16', '6', 'hadi', 'Suzuki', '005', 'ddd (2).jpg', '2018-11-05 01:00:00', '2018-11-05 23:59:00', 'Savar', '1', '1', '', '', '', '', '', '2018-11-08 06:12:49.854644');

-- --------------------------------------------------------

--
-- Table structure for table `car_driver`
--

CREATE TABLE `car_driver` (
  `driver_id` int(20) NOT NULL,
  `car_id` int(6) NOT NULL,
  `driver_name` varchar(100) NOT NULL,
  `driver_phone` varchar(50) NOT NULL,
  `driver_img` varchar(255) NOT NULL,
  `driver_license` varchar(100) NOT NULL,
  `driver_nid` varchar(100) NOT NULL,
  `driver_status` varchar(20) NOT NULL,
  `driver_update` varchar(50) NOT NULL,
  `driver_reg` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_driver`
--

INSERT INTO `car_driver` (`driver_id`, `car_id`, `driver_name`, `driver_phone`, `driver_img`, `driver_license`, `driver_nid`, `driver_status`, `driver_update`, `driver_reg`) VALUES
(1, 16, 'Belal', '01707080401', 'driver2.png', '65448161', '25525826522', '1', '', '2018-11-06 12:27:31.738359'),
(11, 14, 'Rahim', '01707080401', 'Driver Default.jpg', '644444444', '2552582652258888', '1', '', '2018-10-17 05:37:55.848103'),
(12, 17, 'Hadi', '1707080401', 'driver2.png', '5689586521', '199235689548', '1', '', '2018-10-17 06:08:20.287857'),
(16, 19, 'Romij', '1707080401', '0003.jpg', '568958hjghk6521', '199235689548', '1', '', '2018-10-31 09:51:26.967493'),
(17, 20, 'syful', '01707080401', 'download.png', '644444444re', '2552582652258888', '1', '', '2018-11-06 13:16:06.607372');

-- --------------------------------------------------------

--
-- Table structure for table `chart_info`
--

CREATE TABLE `chart_info` (
  `chart_id` int(6) NOT NULL,
  `year` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `carName_number` varchar(100) NOT NULL,
  `booking_days` varchar(50) NOT NULL,
  `chart_reg` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chart_info`
--

INSERT INTO `chart_info` (`chart_id`, `year`, `month`, `carName_number`, `booking_days`, `chart_reg`) VALUES
(1, '2018', 'january', 'Toyta-003', '5', '0000-00-00 00:00:00.000000'),
(2, '2018', 'february', 'sujuki-002', '3', '0000-00-00 00:00:00.000000'),
(3, '2018', 'march', 'Toyta2-0034', '5', '2018-10-22 05:28:31.152809'),
(4, '2018', 'february', 'sujuki2-0022', '4', '2018-10-22 05:28:50.754792'),
(5, '2016', 'march', 'Toyta2-0034', '5', '2018-10-22 05:28:31.152809'),
(6, '2017', 'march', 'Toyta2-0034', '5', '2018-10-22 05:28:31.152809');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(6) NOT NULL,
  `location` varchar(250) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `location`, `regDate`) VALUES
(1, 'valuka', '2018-10-28 09:00:19'),
(2, 'Savar', '2018-10-28 09:00:19'),
(3, 'Mymensingh', '2018-10-28 09:00:59'),
(5, 'Dhaka', '2018-10-28 09:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `loginlog`
--

CREATE TABLE `loginlog` (
  `login_id` int(6) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `user_ip` varchar(100) NOT NULL,
  `user_os` varchar(50) NOT NULL,
  `user_browser` varchar(50) NOT NULL,
  `user_device` varchar(100) NOT NULL,
  `user_status` varchar(6) NOT NULL,
  `logIn` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `logOut` varchar(255) NOT NULL,
  `regsistration` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginlog`
--

INSERT INTO `loginlog` (`login_id`, `user_name`, `user_id`, `user_ip`, `user_os`, `user_browser`, `user_device`, `user_status`, `logIn`, `logOut`, `regsistration`) VALUES
(144, 'admin', '', '::1', 'Windows 10', 'Firefox', 'Syful-it', '', '2018-11-03 11:57:48.363731', '10-03-2018', '2018-11-03 11:57:48.363731'),
(145, 'admin', '', '::1', 'Windows 10', 'Firefox', 'Syful-it', '', '2018-11-03 11:29:08.200031', '', '2018-11-03 11:29:08.200031'),
(146, 'admin', '1', '::1', 'Windows 10', 'Firefox', 'Syful-it', '1', '2018-11-03 11:59:06.331193', '03-11-2018 05:59:06 PM', '2018-11-03 11:59:06.331193'),
(147, 'admin', '1', '::1', 'Windows 10', 'Firefox', 'Syful-it', '1', '2018-11-03 12:20:20.296070', '03-11-2018 06:20:20 PM', '2018-11-03 12:20:20.296070'),
(148, 'admin2', '', '::1', 'Windows 10', 'Firefox', 'Computer', '0', '2018-11-03 12:22:21.728494', '', '2018-11-03 12:22:21.728494'),
(149, 'dfhdfh', '', '::1', '0', 'Firefox', 'Computer', '', '2018-11-03 12:23:50.977367', '', '2018-11-03 12:23:50.977367'),
(150, 'admin', '1', '::1', 'Windows 10', 'Firefox', 'Syful-it', '1', '2018-11-03 12:24:02.418512', '', '2018-11-03 12:24:02.418512'),
(151, 'rana', '4', '::1', 'Windows 10', 'Firefox', 'Syful-it', '1', '2018-11-05 09:13:38.542229', '2018-11-05 03:13:38 PM', '2018-11-05 09:13:38.542229'),
(152, 'admin', '1', '::1', 'Windows 10', 'Firefox', 'Syful-it', '1', '2018-11-05 09:13:51.876233', '', '2018-11-05 09:13:51.876233'),
(153, 'admin', '1', '::1', 'Windows 10', 'Firefox', 'Syful-it', '1', '2018-11-07 08:13:41.987667', '07-11-2018 02:13:41 PM', '2018-11-07 08:13:41.987667'),
(154, 'admin', '1', '::1', 'Windows 10', 'Firefox', 'Syful-it', '1', '2018-11-07 08:22:09.771019', '2018-07-11 02:22:09 PM', '2018-11-07 08:22:09.771019'),
(155, 'admin', '1', '::1', 'Windows 10', 'Firefox', 'Syful-it', '1', '2018-11-07 09:11:09.731188', '2018-07-11 03:11:09 PM', '2018-11-07 09:11:09.731188'),
(156, 'admin', '1', '::1', 'Windows 10', 'Firefox', 'Syful-it', '1', '2018-11-07 09:36:35.942905', '2018-07-11 03:36:35 PM', '2018-11-07 09:36:35.942905'),
(157, 'admin', '1', '::1', 'Windows 10', 'Chrome', 'Syful-it', '1', '2018-11-07 09:44:18.239107', '', '2018-11-07 09:44:18.239107'),
(158, 'admin', '1', '::1', 'Windows 10', 'Edge', 'Syful-it', '1', '2018-11-07 09:51:05.641334', '2018-07-11 03:51:05 PM', '2018-11-07 09:51:05.641334'),
(159, 'admin', '1', '::1', 'Windows 10', 'Firefox', 'Syful-it', '1', '2018-11-07 10:04:26.971358', '2018-07-11 04:04:26 PM', '2018-11-07 10:04:26.971358'),
(160, 'sagor', '', '::1', '0', 'Firefox', 'Computer', '', '2018-11-07 10:04:41.612140', '', '2018-11-07 10:04:41.612140'),
(161, 'admin2', '', '::1', 'Windows 10', 'Firefox', 'Computer', '0', '2018-11-07 10:05:18.974859', '', '2018-11-07 10:05:18.974859'),
(162, 'admin2', '3', '::1', 'Windows 10', 'Firefox', 'Syful-it', '1', '2018-11-07 10:56:22.018157', '2018-07-11 04:56:22 PM', '2018-11-07 10:56:22.018157'),
(163, 'rana', '4', '::1', 'Windows 10', 'Firefox', 'Syful-it', '1', '2018-11-07 11:15:51.218263', '2018-11-07 05:15:51 PM', '2018-11-07 11:15:51.218263'),
(164, 'admin', '', '::1', '0', 'Firefox', 'Computer', '', '2018-11-07 11:18:36.605461', '', '2018-11-07 11:18:36.605461'),
(165, 'admin', '1', '::1', 'Windows 10', 'Firefox', 'Syful-it', '1', '2018-11-07 11:18:56.859363', '', '2018-11-07 11:18:56.859363'),
(166, 'admin', '1', '::1', 'Windows 10', 'Chrome', 'Syful-it', '1', '2018-11-07 12:00:04.426638', '2018-07-11 06:00:04 PM', '2018-11-07 12:00:04.426638'),
(167, 'admin', '1', '::1', 'Windows 10', 'Firefox', 'Syful-it', '1', '2018-11-07 13:30:12.164227', '2018-07-11 07:30:12 PM', '2018-11-07 13:30:12.164227'),
(168, 'rana', '4', '::1', 'Windows 10', 'Firefox', 'Syful-it', '1', '2018-11-07 13:27:51.506286', '2018-11-07 07:27:51 PM', '2018-11-07 13:27:51.506286'),
(169, 'hadi', '6', '::1', 'Windows 10', 'Firefox', 'Syful-it', '1', '2018-11-07 13:30:47.698438', '2018-11-07 07:30:47 PM', '2018-11-07 13:30:47.698438'),
(170, 'admin@gmail.com', '', '::1', '0', 'Firefox', 'Computer', '', '2018-11-08 02:57:57.490014', '', '2018-11-08 02:57:57.490014'),
(171, 'admin', '', '::1', '0', 'Firefox', 'Computer', '', '2018-11-08 02:58:08.367573', '', '2018-11-08 02:58:08.367573'),
(172, 'admin', '1', '::1', 'Windows 10', 'Firefox', 'Syful-it', '1', '2018-11-08 02:59:07.057174', '', '2018-11-08 02:59:07.057174'),
(173, 'admin', '1', '::1', 'Windows 10', 'Firefox', 'Syful-it', '1', '2018-11-08 03:22:48.542479', '', '2018-11-08 03:22:48.542479'),
(174, 'admin', '1', '::1', 'Windows 10', 'Firefox', 'Syful-it', '1', '2018-11-08 04:36:52.206346', '2018-08-11 10:36:52 AM', '2018-11-08 04:36:52.206346'),
(175, 'rana', '4', '::1', 'Windows 10', 'Firefox', 'Syful-it', '1', '2018-11-08 06:07:18.178823', '2018-11-08 12:07:18 PM', '2018-11-08 06:07:18.178823'),
(176, 'admin', '1', '::1', 'Windows 10', 'Chrome', 'Syful-it', '1', '2018-11-08 05:47:34.763461', '', '2018-11-08 05:47:34.763461'),
(177, 'hadi', '6', '::1', 'Windows 10', 'Firefox', 'Syful-it', '1', '2018-11-08 06:07:27.429396', '', '2018-11-08 06:07:27.429396');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_car`
--

CREATE TABLE `tbl_car` (
  `car_id` int(20) NOT NULL,
  `car_name` varchar(100) NOT NULL,
  `car_namePlate` varchar(200) NOT NULL,
  `car_type` varchar(100) NOT NULL,
  `car_capacity` varchar(255) NOT NULL,
  `car_img1` varchar(255) NOT NULL,
  `car_img2` varchar(255) NOT NULL,
  `car_img3` varchar(100) NOT NULL,
  `car_door` varchar(50) NOT NULL,
  `car_gearbox` varchar(50) NOT NULL,
  `car_gps` varchar(50) NOT NULL,
  `car_aircobdition` varchar(100) NOT NULL,
  `car_power_doorLock` varchar(100) NOT NULL,
  `car_cdPlayer` varchar(100) NOT NULL,
  `car_remarks` varchar(255) NOT NULL,
  `show_status` varchar(6) NOT NULL,
  `update_time` varchar(100) NOT NULL,
  `reg_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_car`
--

INSERT INTO `tbl_car` (`car_id`, `car_name`, `car_namePlate`, `car_type`, `car_capacity`, `car_img1`, `car_img2`, `car_img3`, `car_door`, `car_gearbox`, `car_gps`, `car_aircobdition`, `car_power_doorLock`, `car_cdPlayer`, `car_remarks`, `show_status`, `update_time`, `reg_time`) VALUES
(14, 'Toyota', '003', 'Petrol', '5', 'ddd (1).jpg', 'dsssss.jpg', 'ddd (2).jpg', '5', 'Automatic', '1', '1', '1', '1', 'this is demo 2', '1', '', '2018-10-17 06:14:07'),
(16, 'Suzuki', '005', 'Petrol', '7', 'ddd (2).jpg', 'dsssss.jpg', 'ddd (1).jpg', '', '', '', '0', '1', '1', 'dfhfghg', '1', '', '2018-10-16 09:34:35'),
(17, 'Nissan 2', '001', 'Petrol', '4', 'rewre.jpg', 'dhtrhtr.jpg', 'ertyrey.jpg', '4', 'Automatic', '0', '1', '1', '1', '								This is Nissan car ............... Updated<br>							', '1', '', '2018-10-27 11:46:31'),
(19, 'Toyota Probox', '002', 'CNG', '4', 'ertyrey.jpg', '', '', '6', 'Automatic', '0', '0', '0', '0', 'This is update test<br>', '1', '', '2018-10-17 06:21:04'),
(20, 'Nissan RR', '008', 'CNG', '4', 'Red-Lamborghini-super-sports-car_1280x800.jpg', '4223206-crazy-car-wallpapers.jpg', 'Aston_Martin_V8_Vantage_Two_Seater_Convertible_Car_Wallpaper.jpg', '4', 'Automatic', '1', '1', '0', '1', '', '0', '', '2018-11-08 06:40:26');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(6) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `user_contract` int(100) NOT NULL,
  `user_img` varchar(255) NOT NULL,
  `user_officeId` varchar(20) NOT NULL,
  `user_status` varchar(6) NOT NULL,
  `user_update` varchar(20) NOT NULL,
  `user_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_pass`, `user_contract`, `user_img`, `user_officeId`, `user_status`, `user_update`, `user_reg`) VALUES
(1, 'saif', '5683', 1707080401, 'download.jpg', '12548', '1', '', '2018-11-06 06:08:12'),
(4, 'rana', '5683', 21474999, 'hdfhgfd.png', 'BG-999999', '1', '13-10-2018 10:36:08 ', '2018-10-29 09:11:19'),
(5, 'user', '12345', 1707080401, '0003.jpg', 'BG-998777666666666', '0', '', '2018-11-07 10:51:47'),
(6, 'hadi', '12345', 14548645, 'download.png', '014894894', '1', '', '2018-11-07 13:27:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `car_booking`
--
ALTER TABLE `car_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `car_driver`
--
ALTER TABLE `car_driver`
  ADD PRIMARY KEY (`driver_id`);

--
-- Indexes for table `chart_info`
--
ALTER TABLE `chart_info`
  ADD PRIMARY KEY (`chart_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `loginlog`
--
ALTER TABLE `loginlog`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `tbl_car`
--
ALTER TABLE `tbl_car`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `car_booking`
--
ALTER TABLE `car_booking`
  MODIFY `booking_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `car_driver`
--
ALTER TABLE `car_driver`
  MODIFY `driver_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `chart_info`
--
ALTER TABLE `chart_info`
  MODIFY `chart_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `loginlog`
--
ALTER TABLE `loginlog`
  MODIFY `login_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;

--
-- AUTO_INCREMENT for table `tbl_car`
--
ALTER TABLE `tbl_car`
  MODIFY `car_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
