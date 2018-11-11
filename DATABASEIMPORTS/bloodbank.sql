-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 11, 2018 at 01:05 PM
-- Server version: 5.7.24-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `NID` int(50) NOT NULL,
  `USERID` int(11) NOT NULL,
  `SENDERID` int(11) NOT NULL,
  `MESSAGE` varchar(100) DEFAULT NULL,
  `SENDDATE` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `bdate` datetime NOT NULL,
  `ldate` datetime NOT NULL,
  `bg` varchar(10) NOT NULL,
  `location` varchar(50) DEFAULT NULL,
  `ft` tinyint(1) DEFAULT NULL,
  `wtd` tinyint(1) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `bdate`, `ldate`, `bg`, `location`, `ft`, `wtd`, `contact`) VALUES
(1, 'Mahir Khan', 'sadman2008bds@gmail.com', '202cb962ac59075b964b07152d234b70', '2018-11-07 00:00:00', '2018-11-16 00:00:00', 'O+', 'mohammedput', 1, 1, '123'),
(2, 'sadman', 'ho@yahoo.com', '202cb962ac59075b964b07152d234b70', '2018-11-03 00:00:00', '2018-11-21 00:00:00', 'AB+', NULL, NULL, NULL, NULL),
(3, 'tomal', 'x@gmail.com', '202cb962ac59075b964b07152d234b70', '2018-11-15 00:00:00', '2018-11-16 00:00:00', 'AB+', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`NID`),
  ADD KEY `USERID` (`USERID`),
  ADD KEY `SENDERID` (`SENDERID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`USERID`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `notifications_ibfk_2` FOREIGN KEY (`SENDERID`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
