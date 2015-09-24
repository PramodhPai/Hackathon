-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2015 at 03:53 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `organplus`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE IF NOT EXISTS `contact_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `msg` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `phone`, `msg`) VALUES
(1, 'Kalaivanan', 'mekwebsolution123@gmail.com', '8489099849', 'Sample Message');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE IF NOT EXISTS `partners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `uname` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `email`, `phone`, `uname`, `pass`) VALUES
(1, 'KG Hospital', 'info@kghospital.com', '0422 221 2121', 'kghospital', 'kghospital'),
(2, 'PSG Hospital', 'info@psghospitals.com', '0422 257 0170', 'psg', 'psg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `age` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `uname` varchar(300) NOT NULL,
  `pass` varchar(300) NOT NULL,
  `relation_type` varchar(40) NOT NULL,
  `relation_phone` varchar(20) NOT NULL,
  `relation_name` varchar(50) NOT NULL,
  `organ_type` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `age`, `phone`, `email`, `uname`, `pass`, `relation_type`, `relation_phone`, `relation_name`, `organ_type`) VALUES
(4, 'Sujith Krishna', '19-07-1995', '8489099849', 'sujithkrishna0000009@gmail.com', 'sujith', 'sujith', 'father/husband', '9749258368', 'Sasikumar', 'all'),
(5, 'Kalaivanan', '30-04-1996', '8489099849', 'kalaivanan.muthusamy97@gmail.com', 'kalai', 'kalai', 'father/husband', '9047441617', 'Muthusamy', 'all'),
(6, 'Sweetha', '19-07-1995', '8489099849', 'kalaivananswthrt@gmail.com', 'sweetha', 'swetha', 'father/husband', '9047441617', 'Kumar', 'all'),
(7, 'Sivakumar', '19-07-1995', '8489099849', 'mekwebsolution123@gmail.com', 'siva', 'siva', 'father/husband', '7868686293', 'Subramaniam', 'all'),
(8, '', '', '', '', '', '', 'other', '', '', ''),
(9, 'Muthusamy', '30-04-1990', '7777783893993', 'mutdjidkshds', 'jdjkhasjkdhkjdhjkasd', 'kjasjkadksdkshdkh', 'guardian', '45555555555454553453', 'fghhjhdjhds', 'jjgcfjsdgfsdfsdf');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
