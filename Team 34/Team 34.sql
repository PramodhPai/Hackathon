-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 15, 2015 at 06:40 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `donor`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `name` varchar(30) NOT NULL,
  `Dateofbirth` date NOT NULL,
  `Gender` varchar(30) NOT NULL,
  `Address` text NOT NULL,
  `PhoneNumber` varchar(30) NOT NULL,
  `Emailid` varchar(30) NOT NULL,
  `BloodGroup` varchar(30) NOT NULL,
  `Nominee` varchar(30) NOT NULL,
  `NomineeContactdetails` varchar(30) NOT NULL,
  `NomineeAddress` text NOT NULL,
  `Nomineeemailaddress` varchar(30) NOT NULL,
  `Donate` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `Dateofbirth`, `Gender`, `Address`, `PhoneNumber`, `Emailid`, `BloodGroup`, `Nominee`, `NomineeContactdetails`, `NomineeAddress`, `Nomineeemailaddress`, `Donate`) VALUES
('ashwin', '1995-11-23', 'male', '31,coimbatore', '99988775544', 'sabjkbkhaa@kjbk.com', 'a+vename', '', '', '', '', ''),
('guest', '0000-00-00', 's', 's', 's', 's', 'guest', 'XYZ', 's', 's', 's', 's');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
