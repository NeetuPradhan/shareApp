-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2016 at 02:28 PM
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
-- Table structure for table `tbl_user_stock`
--

CREATE TABLE `tbl_user_stock` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `transaction_no` int(11) NOT NULL,
  `stock_type_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `rate` decimal(10,0) NOT NULL,
  `broker_id` int(11) NOT NULL,
  `transaction_date` date DEFAULT NULL,
  `added_date` datetime NOT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_stock`
--

INSERT INTO `tbl_user_stock` (`id`, `user_id`, `transaction_no`, `stock_type_id`, `company_id`, `quantity`, `rate`, `broker_id`, `transaction_date`, `added_date`, `updated_date`) VALUES
(1, 3, 0, 1, 0, 10, '100', 1, '2016-11-15', '2016-11-17 05:22:16', NULL),
(2, 3, 0, 2, 0, 120, '250', 34, '2016-11-02', '2016-11-14 04:32:13', NULL),
(3, 3, 0, 2, 0, 130, '103', 5, '2016-01-15', '2015-11-17 05:02:16', NULL),
(4, 0, 0, 3, 0, 234, '123', 23, '2013-11-02', '2016-11-04 04:32:03', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user_stock`
--
ALTER TABLE `tbl_user_stock`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user_stock`
--
ALTER TABLE `tbl_user_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
