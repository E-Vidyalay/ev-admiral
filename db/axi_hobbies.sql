-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 20, 2015 at 08:30 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ev`
--

-- --------------------------------------------------------

--
-- Table structure for table `axi_hobbies`
--

CREATE TABLE IF NOT EXISTS `axi_hobbies` (
  `id` char(36) NOT NULL,
  `level_id` char(36) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_hobbies`
--

INSERT INTO `axi_hobbies` (`id`, `level_id`, `name`, `updated_at`, `updated_by`) VALUES
('557f3afa-17f8-4762-9365-07e0125f2f23', '5568340b-2a04-474b-9568-326f125f2f23', 'Reading', '2015-06-19 11:24:40', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('55845a8b-2d24-4e4d-a846-17e7125f2f23', '5568340b-2a04-474b-9568-326f125f2f23', 'Sports', '2015-06-19 18:09:51', '53196213-e8c0-4b42-a3e3-19ecf1301e8a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `axi_hobbies`
--
ALTER TABLE `axi_hobbies`
 ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
