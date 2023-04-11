-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2020 at 02:48 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bucash`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `NID` varchar(20) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `balance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`NID`, `phone`, `balance`) VALUES
('12345', '01971146121', 184781),
('123456555555', '55555555555', 1000000),
('123456789', '1231', 1000000),
('555444666', '58746974', 1000000),
('6789', '01766111949', 65219),
('987654', '55555444442', 450000);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `NID` varchar(17) NOT NULL,
  `type` text NOT NULL,
  `ONID` varchar(17) NOT NULL,
  `amount` float NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `txid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`NID`, `type`, `ONID`, `amount`, `date`, `time`, `txid`) VALUES
('6789', 'sendmoney', '6789', 1234, '2020-12-20', '04:40:30', '5fe3c75eb4513'),
('12345', 'payment', '6789', 1234, '2020-12-11', '16:09:28', '5fe468d818f1b'),
('12345', 'sendmoney', '6789', 1234, '2020-12-26', '12:58:01', '5fe6def9cc24a'),
('6789', 'sendmoney', '12345', 1234, '2020-11-26', '15:28:18', '5fe702327f769'),
('12345', 'sendmoney', '6789', 50000, '2020-12-05', '15:29:23', '5fe7027304d34'),
('6789', 'sendmoney', '12345', 8000, '2020-01-05', '20:07:23', '5fe7439b84bea'),
('12345', 'sendmoney', '6789', 1234, '2020-12-26', '23:53:05', '5fe7788101815'),
('12345', 'sendmoney', '6789', 1234, '2020-12-27', '00:01:56', '5fe77a94c8126'),
('12345', 'sendmoney', '6789', 5764, '2020-12-27', '00:03:08', '5fe77adcd7f4a'),
('12345', 'sendmoney', '6789', 6987, '2020-12-27', '00:05:35', '5fe77b6fd7175'),
('6789', 'recievedmoney', '12345', 6987, '2020-12-27', '00:05:35', '5fe77b6fe1033'),
('6789', 'sendmoney', '12345', 51234, '2020-12-27', '00:21:12', '5fe77f18578d6'),
('12345', 'recievedmoney', '6789', 51234, '2020-12-27', '00:21:12', '5fe77f1861594'),
('6789', 'sendmoney', '12345', 50000, '2020-12-27', '00:23:30', '5fe77fa291b53'),
('12345', 'recievedmoney', '6789', 50000, '2020-12-27', '00:23:30', '5fe77fa29bab2'),
('12345', 'sendmoney', '6789', 1234, '2020-12-27', '02:18:05', '5fe79a7d73272'),
('6789', 'recievedmoney', '12345', 1234, '2020-12-27', '02:18:05', '5fe79a7d7b88e'),
('987654', 'sendmoney', '6789', 50000, '2020-12-27', '23:00:06', '5fe8bd964b0c1'),
('6789', 'recievedmoney', '987654', 50000, '2020-11-27', '23:00:06', '5fe8bd965b701'),
('12345', 'sendmoney', '6789', 50000, '2020-12-27', '23:12:15', '5fe8c06f0d9b3'),
('6789', 'recievedmoney', '12345', 50000, '2020-12-27', '23:12:15', '5fe8c06f15edc'),
('6789', 'sendmoney', '12345', 50000, '2020-12-28', '15:20:08', '5fe9a3486f9f3'),
('12345', 'recievedmoney', '6789', 50000, '2020-12-28', '15:20:08', '5fe9a34879f0a');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `NID` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`name`, `password`, `address`, `NID`, `phone`, `type`) VALUES
('Abdur Rafi', '12345', 'Barishal', '12345', '01971146121', 'personal'),
('avanti', '1234', 'Dhaka', '123456555555', '555777888', 'merchant'),
('Ashfaqul Islam', '121234', 'Azimpur', '123456789', '1231', 'personal'),
('personal', '1234', 'Dhaka', '54654684654', '2147483647', 'personal'),
('Raihan', '1234', 'Dhaka', '555444666', '58746974', 'agent'),
('merchant', '1234', 'Dhaka', '5555544444422', '2147483647', 'merchant'),
('sanjoy', '1234', 'Dhaka', '5558885222', '21485', 'agent'),
('agent', '1234', 'Dhaka', '655564564', '2147483647', 'agent'),
('Sanjoy Dev1', '1234', 'Uttara', '6789', '01766111949', 'personal'),
('Ritu Arobi', '1234', 'Dhaka', '987654', '999888555', 'personal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`NID`,`phone`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`txid`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`NID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
