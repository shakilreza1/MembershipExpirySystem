-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2017 at 07:51 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `delete_by_date`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `tbl_member_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `expiration_date` varchar(100) NOT NULL,
  `active` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`tbl_member_id`, `first_name`, `last_name`, `contact_number`, `email`, `address`, `expiration_date`, `active`) VALUES
(1, 'John', 'Doe', '346-5683', 'john_Doe@gmail.com', 'United States', '2016/06/09', 'N'),
(2, 'Jane', 'Doe', '457-2358', 'janeDoe@gmail.com', 'Mexico', '2017/05/28', 'Y'),
(3, 'test', 'test', '21', 'test@test.com', 'asdf', '2017/05/24', 'Y'),
(4, 'test2', 'test', 'test', 'test2@test2.com', 'test2', '2017/05/28', 'Y'),
(5, 'test3', 'test', '21', 'test3@test.com', 'test3', '2017/05/28', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`tbl_member_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `tbl_member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
