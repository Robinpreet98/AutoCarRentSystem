-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 04, 2020 at 07:24 PM
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
-- Database: `cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `uname`, `pass`) VALUES
(1, 'root', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
CREATE TABLE IF NOT EXISTS `cars` (
  `car_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_name` varchar(255) NOT NULL,
  `car_type` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `hire_cost` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`car_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `car_name`, `car_type`, `image`, `hire_cost`, `capacity`, `status`) VALUES
(2, 'BMW', 'Sport', 'Bmw.jpg', 2000, 2, 'Available'),
(3, 'Chrysler 300', 'Sedan', 'Chrysler.jpg', 1000, 5, 'Available'),
(5, 'Ferrari', 'Sport ', 'Ferrari.jpg', 2200, 2, 'Available'),
(6, 'Civic', 'Sedan', 'civic.jpg', 800, 5, 'Available'),
(7, 'Lemborghini', 'Sport', 'Lamborghini.jpg', 2400, 2, 'Available'),
(8, 'Nissan', 'SUV', 'Nissan.jpg', 600, 6, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` int(11) NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `fname`, `email`, `password`, `phone`, `status`) VALUES
(2, 'fe', 'fe@yahoo.com', '30073147', 705053484, 'Approved'),
(3, 'abhinav', 'abhinav@gmail.com', '27695131', 707403614, 'Approved'),
(4, 'rithak', 'rithak@gmail.com', '1234567', 717056766, 'Approved'),
(5, 'robin', 'robinpreetsingh472@gmail.com', '123', 2344, 'Approved'),
(7, 'robinpreet', 'robinpreet@gmail.com', '12345', 454654, 'Pending'),
(8, 'akhil', 'akhil@gmail.com', '12345', 455465, 'Pending'),
(9, 'josh', 'josh@gmail.com', '12345', 5154564, 'Pending'),
(10, 'mark', 'mark@gmail.com', '123456', 4564645, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `hire`
--

DROP TABLE IF EXISTS `hire`;
CREATE TABLE IF NOT EXISTS `hire` (
  `hire_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`hire_id`),
  KEY `client_id` (`client_id`),
  KEY `car_id` (`car_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `message`, `status`, `time`) VALUES
(2, 'Am happy its working?', 'Unread', '0000-00-00 00:00:00'),
(3, 'Thanks for that..OK?', 'Unread', '0000-00-00 00:00:00'),
(5, 'I love this. It worked the way i want...', 'Unread', '2015-08-04 21:45:33');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hire`
--
ALTER TABLE `hire`
  ADD CONSTRAINT `hire_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`),
  ADD CONSTRAINT `hire_ibfk_2` FOREIGN KEY (`car_id`) REFERENCES `cars` (`car_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
