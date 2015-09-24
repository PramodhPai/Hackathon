-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2015 at 04:09 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `organ`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE IF NOT EXISTS `donor` (
  `user_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `fathername` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `organ` varchar(50) NOT NULL,
  `nominee` varchar(50) NOT NULL,
  `bloodgroup` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `status` int(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`user_id`, `name`, `gender`, `fathername`, `dob`, `email`, `mobile`, `address`, `organ`, `nominee`, `bloodgroup`, `created_date`, `status`) VALUES
(0, 'vinoth', 'male', 'murugesan', '', 'vinoth38vm@gmail.com', '7200635842', 'kgcas', 'Eye', 'dhamu', 'a+', '2015-08-15', 0),
(0, 'sandhiya', 'female', 'chinnadurai', '', 'vinoth38vm@gmail.com', '7200635842', 'cbe', 'All', 'soniya', 'o-', '2015-08-15', 0),
(0, 'sandhiya', 'female', 'chinnadurai', '', 'vinoth38vm@gmail.com', '7200635842', 'cbe', 'All', 'soniya', 'o-', '2015-08-15', 0);

-- --------------------------------------------------------

--
-- Table structure for table `receiver`
--

CREATE TABLE IF NOT EXISTS `receiver` (
  `rid` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `fathername` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `organ` varchar(50) NOT NULL,
  `nominee` varchar(50) NOT NULL,
  `bloodgroup` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `status` int(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
