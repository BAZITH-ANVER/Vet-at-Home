-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2022 at 08:10 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vethome`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doctor_id` varchar(225) NOT NULL,
  `patient_id` varchar(225) NOT NULL,
  `date` varchar(225) NOT NULL,
  `rate` varchar(200) NOT NULL,
  `status` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `doctor_id`, `patient_id`, `date`, `rate`, `status`) VALUES
(1, '1', '1', '2022-05-17', 'dfd', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `specialisation` varchar(225) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `fees` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `email`, `password`, `specialisation`, `phone`, `fees`, `username`, `location`, `status`) VALUES
(1, 'Jithin Babu', 'anu1@gmail.com', 'hibamm1233', 'add', '8075498141', 'dfd', 'jithin', 'pala', ''),
(2, 'Arun', 'anu@gmail.com', '1234', 'Heart Specialist', '7654234566', '1200', 'admin@gmail.com', 'Ernakulam', '1');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_tbl`
--

CREATE TABLE IF NOT EXISTS `feedback_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `complaint` varchar(225) NOT NULL,
  `feedback` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `feedback_tbl`
--

INSERT INTO `feedback_tbl` (`id`, `name`, `complaint`, `feedback`) VALUES
(1, 'Shabna Sara Jithin', 'dewdf', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `address` varchar(200) NOT NULL,
  `password` varchar(225) NOT NULL,
  `age` varchar(225) NOT NULL,
  `username` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `email`, `phone`, `address`, `password`, `age`, `username`) VALUES
(1, 'Shabna', 'anujith@gmail.com', '8075498141', 'kollamm', '1234', '30', 'shabu'),
(2, 'a', 'a@gmail.com', 'b', 'c', '555', 'a', 'a'),
(3, 'arjun', 'appu@gmail.com\n', '8075498141', 'kottayam', 'appu123\n', '24', 'appu');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doctor_id` varchar(225) NOT NULL,
  `patient_id` varchar(225) NOT NULL,
  `date` varchar(225) NOT NULL,
  `rate` varchar(200) NOT NULL,
  `cardname` varchar(225) NOT NULL,
  `cardnumber` varchar(225) NOT NULL,
  `cardtype` varchar(225) NOT NULL,
  `cardmonth` varchar(225) NOT NULL,
  `cardyear` varchar(225) NOT NULL,
  `cvv` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `doctor_id`, `patient_id`, `date`, `rate`, `cardname`, `cardnumber`, `cardtype`, `cardmonth`, `cardyear`, `cvv`) VALUES
(1, '1', '1', '2022-05-17', 'dfd', 'u3orweur', '423455', 'Debite', '6', '2022', '123'),
(2, '1', '1', '2022-05-17', 'dfd', 'u3orweur', '423455', 'Debite', '6', '2022', '123'),
(3, '1', '1', '2022-05-17', 'dfd', 'u3orweur', 'we324535', 'Credit', '5', '2022', '1213');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doctor_id` varchar(100) NOT NULL,
  `patient_id` varchar(225) NOT NULL,
  `date` varchar(225) NOT NULL,
  `time` varchar(250) NOT NULL,
  `fees` varchar(225) NOT NULL,
  `deseases` varchar(225) NOT NULL,
  `status` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `doctor_id`, `patient_id`, `date`, `time`, `fees`, `deseases`, `status`, `address`) VALUES
(1, '1', '1', '2022-05-17', 'sds', 'dfd', 'zxz', 'REQUEST', 'xzd'),
(2, '2', '1', '2022-05-28', '5.00 am', '1200', 'Asad', 'REQUEST', 'as'),
(3, '2', '1', '2022-05-26', '5.00 am', '1200', 'zxz', 'REQUEST', 'JAISFHDJ');

-- --------------------------------------------------------

--
-- Table structure for table `reshedule`
--

CREATE TABLE IF NOT EXISTS `reshedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doctor_id` varchar(225) NOT NULL,
  `patient_id` varchar(225) NOT NULL,
  `date` varchar(225) NOT NULL,
  `time` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `reshedule`
--

INSERT INTO `reshedule` (`id`, `doctor_id`, `patient_id`, `date`, `time`, `status`) VALUES
(1, '<br />\r\n<b>Notice</b>:  Undefined index: id in <b>C:xampphtdocshelperapi\resheule.php</b> on line <b>32</b><br />\r\n', '1', '2022-05-17', '5.00 am', ''),
(2, '<br />\r\n<b>Notice</b>:  Undefined index: id in <b>C:xampphtdocshelperapi\resheule.php</b> on line <b>32</b><br />\r\n', '1', '2022-05-25', '5.00 am', ''),
(3, '<br />\r\n<b>Notice</b>:  Undefined index: id in <b>C:xampphtdocshelperapi\resheule.php</b> on line <b>32</b><br />\r\n', 'asdfd', '2022-05-25', '5.00 am', ''),
(4, '1', '1', '', '5.00 am', 'Accept'),
(5, '1', '1', '2022-05-25', '5.00 am', 'Reject'),
(6, '1', '1', '2022-05-25', '5.00 am', 'Reshedule'),
(7, '1', '1', '2022-05-25', '5.00 am', 'Reshedule');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
