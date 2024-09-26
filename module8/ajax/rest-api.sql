-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2024 at 10:09 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rest-api`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_api`
--

CREATE TABLE `tbl_api` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `ammount` decimal(10,0) DEFAULT NULL,
  `response_code` int(11) DEFAULT NULL,
  `response_desc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_api`
--

INSERT INTO `tbl_api` (`id`, `order_id`, `ammount`, `response_code`, `response_desc`) VALUES
(1, 1545454, '250', 200, 'yes got products details'),
(2, 1545453, '350', 403, 'yes got products details very nice packaging'),
(3, 1545452, '4550', 200, 'yes got products details and very happy customers'),
(4, 1549454, '750', 200, 'yes got products details and yes its good realy');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE `tbl_city` (
  `ctid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `ctname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`ctid`, `sid`, `ctname`) VALUES
(1, 1, 'Rajkot'),
(2, 1, 'ahemdabad'),
(3, 1, 'surat'),
(4, 1, 'gandhinagar'),
(5, 3, 'Mumbai'),
(6, 3, 'Nagpur'),
(7, 2, 'Varansi'),
(8, 2, 'Lucknow'),
(9, 5, 'Navada'),
(10, 2, 'Kanpur'),
(11, 4, 'chung chang');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country`
--

CREATE TABLE `tbl_country` (
  `cid` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_country`
--

INSERT INTO `tbl_country` (`cid`, `cname`) VALUES
(1, 'india'),
(2, 'usa'),
(3, 'china'),
(4, 'srilanka');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE `tbl_state` (
  `sid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `sname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`sid`, `cid`, `sname`) VALUES
(1, 1, 'Gujrat'),
(2, 1, 'Uttar pradesh'),
(3, 1, 'Mahrastra'),
(4, 3, 'sanghai'),
(5, 2, 'california'),
(6, 3, 'fujain'),
(7, 4, 'dhaka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_api`
--
ALTER TABLE `tbl_api`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD PRIMARY KEY (`ctid`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `tbl_country`
--
ALTER TABLE `tbl_country`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `cid` (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_api`
--
ALTER TABLE `tbl_api`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_city`
--
ALTER TABLE `tbl_city`
  MODIFY `ctid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_country`
--
ALTER TABLE `tbl_country`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
