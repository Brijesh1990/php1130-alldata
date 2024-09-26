-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2024 at 04:15 PM
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
-- Database: `addtocart_mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addproducts`
--

CREATE TABLE `tbl_addproducts` (
  `pid` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `descriptions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_addproducts`
--

INSERT INTO `tbl_addproducts` (`pid`, `photo`, `productname`, `price`, `qty`, `descriptions`) VALUES
(1, 'uploads/products/1.webp', 'polo mens shirts', 3500, 1, 'Discover the Polo Shirts by HUGO BOSS for Men. Choose from elaborate designs and ingenious cuts. Shop now in the official HUGO BOSS online shop!'),
(2, 'uploads/products/2.webp', 'polo fit mens shirts', 1800, 1, 'Discover the Polo Shirts by HUGO BOSS for Men. Choose from elaborate designs and ingenious cuts. Shop now in the official HUGO BOSS online shop!'),
(3, 'uploads/products/4.webp', 'polo small fit mens shirts', 2200, 1, 'Discover the Polo Shirts by HUGO BOSS for Men. Choose from elaborate designs and ingenious cuts. Shop now in the official HUGO BOSS online shop!'),
(4, 'uploads/products/10.webp', 'kids frok', 1500, 1, 'Discover the Polo Shirts by HUGO BOSS for Men. Choose from elaborate designs and ingenious cuts. Shop now in the official HUGO BOSS online shop!'),
(5, 'uploads/products/14.webp', 'mens shirt', 1500, 1, 'Discover the Polo Shirts by HUGO BOSS for Men. Choose from elaborate designs and ingenious cuts. Shop now in the official HUGO BOSS online shop!'),
(6, 'uploads/products/27.webp', 'womems suit', 4500, 1, 'Discover the Polo Shirts by HUGO BOSS for Men. Choose from elaborate designs and ingenious cuts. Shop now in the official HUGO BOSS online shop!');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cartid` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cartid`, `photo`, `productname`, `price`, `qty`) VALUES
(2, 'uploads/products/2.webp', 'polo fit mens shirts', 1800, 1),
(3, 'uploads/products/10.webp', 'kids frok', 1500, 1),
(4, 'uploads/products/27.webp', 'womems suit', 4500, 1),
(5, 'uploads/products/14.webp', 'mens shirt', 1500, 1),
(6, 'uploads/products/27.webp', 'womems suit', 4500, 1),
(7, 'uploads/products/14.webp', 'mens shirt', 1500, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_addproducts`
--
ALTER TABLE `tbl_addproducts`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cartid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_addproducts`
--
ALTER TABLE `tbl_addproducts`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
