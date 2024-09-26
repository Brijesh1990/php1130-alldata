-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2024 at 07:18 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_api`
--
ALTER TABLE `tbl_api`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_api`
--
ALTER TABLE `tbl_api`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
