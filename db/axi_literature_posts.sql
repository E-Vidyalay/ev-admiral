-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 19, 2015 at 03:15 PM
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
-- Table structure for table `axi_literature_posts`
--

CREATE TABLE IF NOT EXISTS `axi_literature_posts` (
  `id` char(36) NOT NULL,
  `title` text NOT NULL,
  `meta_description` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` char(36) NOT NULL,
  `literature_id` char(36) NOT NULL,
  `sub_literature_id` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_literature_posts`
--

INSERT INTO `axi_literature_posts` (`id`, `title`, `meta_description`, `updated_at`, `updated_by`, `literature_id`, `sub_literature_id`) VALUES
('5582b3e4-d7a8-44e4-b4bf-0c8e125f2f23', 'demo', '<p>àª•à«‡àª® àªšà«‹?</p>', '2015-06-18 12:04:52', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', '55792ea2-4584-400d-a2af-0e3e125f2f23', '55793081-e578-496f-aa04-0e3d125f2f23'),
('5582b486-60b0-419b-9623-0ac7125f2f23', 'demo1', '<p>àªœà«àª¬à«àª«à«àªœà«àª•à«‡àª¬à«àª¦à«àª«à«àªœà«àª•à«àª¦à«àª¨</p>', '2015-06-18 12:07:34', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', '55792ea2-4584-400d-a2af-0e3e125f2f23', '55793081-e578-496f-aa04-0e3d125f2f23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `axi_literature_posts`
--
ALTER TABLE `axi_literature_posts`
 ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
