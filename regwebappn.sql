-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 25, 2019 at 05:24 PM
-- Server version: 5.7.25-0ubuntu0.16.04.2
-- PHP Version: 7.0.33-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `regwebappn`
--

-- --------------------------------------------------------

--
-- Table structure for table `pdetails`
--

CREATE TABLE `pdetails` (
  `fname` varchar(25) DEFAULT NULL,
  `father` varchar(25) DEFAULT NULL,
  `mobile` bigint(15) NOT NULL,
  `landline` bigint(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pdetails`
--

INSERT INTO `pdetails` (`fname`, `father`, `mobile`, `landline`) VALUES
('fname', 'mname', 8123452478, 9879879878),
('ABCD', 'EFGH', 9999999999, 9876543);

-- --------------------------------------------------------

--
-- Table structure for table `plot`
--

CREATE TABLE `plot` (
  `mobile` bigint(15) NOT NULL,
  `addr` varchar(50) NOT NULL,
  `district` text NOT NULL,
  `pincode` int(8) NOT NULL,
  `state` varchar(20) NOT NULL,
  `pure_silk_proposed` varchar(30) NOT NULL,
  `sector` text NOT NULL,
  `app_type` text NOT NULL,
  `house_owner` text NOT NULL,
  `rearing_done_sep` text NOT NULL,
  `host_plant_1` text NOT NULL,
  `capacity` float NOT NULL,
  `host_plant_2` text NOT NULL,
  `year_estab` int(4) NOT NULL,
  `transaction_id` int(25) NOT NULL,
  `other_details` varchar(500) NOT NULL,
  `reg_cert_photo` mediumblob NOT NULL,
  `sign_photo` longblob NOT NULL,
  `date` date NOT NULL,
  `produce_photo` mediumblob NOT NULL,
  `ack_number` varchar(20) NOT NULL,
  `exp_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pdetails`
--
ALTER TABLE `pdetails`
  ADD PRIMARY KEY (`mobile`);

--
-- Indexes for table `plot`
--
ALTER TABLE `plot`
  ADD PRIMARY KEY (`ack_number`),
  ADD KEY `mobile` (`mobile`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `plot`
--
ALTER TABLE `plot`
  ADD CONSTRAINT `plot_ibfk_1` FOREIGN KEY (`mobile`) REFERENCES `pdetails` (`mobile`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
