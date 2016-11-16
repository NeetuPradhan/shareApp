-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2016 at 07:13 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_share_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stock_type`
--

CREATE TABLE `tbl_stock_type` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `added_date` datetime NOT NULL,
  `updated_date` datetime DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `dsplay_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_stock_type`
--

INSERT INTO `tbl_stock_type` (`id`, `type`, `added_date`, `updated_date`, `status`, `dsplay_order`) VALUES
(2, 'Rights', '2016-11-16 23:34:07', NULL, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_stock_type`
--
ALTER TABLE `tbl_stock_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_stock_type`
--
ALTER TABLE `tbl_stock_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
