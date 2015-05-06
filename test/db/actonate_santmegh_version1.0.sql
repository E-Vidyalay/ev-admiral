-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 24, 2014 at 05:03 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `actonate_santmegh`
--
CREATE DATABASE IF NOT EXISTS `actonate_santmegh` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `actonate_santmegh`;

-- --------------------------------------------------------

--
-- Table structure for table `axi_markingschemes`
--

CREATE TABLE IF NOT EXISTS `axi_markingschemes` (
  `id` char(36) NOT NULL,
  `positive_marks` double NOT NULL,
  `negative_marks` double NOT NULL,
  `display_name` varchar(20) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` char(36) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `updated_by` (`updated_by`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_markingschemes`
--

INSERT INTO `axi_markingschemes` (`id`, `positive_marks`, `negative_marks`, `display_name`, `updated_at`, `updated_by`) VALUES
('531d5d48-1f14-4e09-915d-1bb0f1301e8a', 3, 2, '+ 3, - 2', '2014-03-10 06:35:52', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('53315959-c268-4cc2-a42f-0c4cf1301e8a', 100, 500, '+ 100, - 500', '2014-03-25 10:24:25', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('53572261-8530-4ef0-9a3d-1618f1301e8a', 1, 0, '+ 1, - 0', '2014-04-23 02:16:01', '53196213-e8c0-4b42-a3e3-19ecf1301e8a');

-- --------------------------------------------------------

--
-- Table structure for table `axi_practical_marks`
--

CREATE TABLE IF NOT EXISTS `axi_practical_marks` (
  `id` char(36) NOT NULL,
  `student_id` char(36) NOT NULL,
  `prac_id` char(36) NOT NULL,
  `marks` double NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` char(36) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `student_id` (`student_id`,`prac_id`,`updated_by`),
  KEY `student_id_2` (`student_id`),
  KEY `prac_id` (`prac_id`),
  KEY `updated_by` (`updated_by`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_practical_marks`
--

INSERT INTO `axi_practical_marks` (`id`, `student_id`, `prac_id`, `marks`, `updated_at`, `updated_by`) VALUES
('5357b704-171c-4a4e-b63a-1618f1301e8a', '531f06b8-00bc-4107-aa63-1d24f1301e8a', '5357b6bf-2b3c-42ea-afee-1618f1301e8a', 5, '2014-04-23 12:50:12', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('5357b704-2ea8-431a-8031-1618f1301e8a', '53200ee5-2418-4a18-8d9b-0648f1301e8a', '5357b6bf-2b3c-42ea-afee-1618f1301e8a', 5, '2014-04-23 12:50:12', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('53587da8-7a84-44cf-b389-15b0f1301e8a', '5321939b-727c-4095-b55b-0d48f1301e8a', '53587d21-bed0-4d26-a227-15b0f1301e8a', 12, '2014-04-24 02:57:44', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('53587dc8-216c-42d4-ad26-15b0f1301e8a', '531f06b8-00bc-4107-aa63-1d24f1301e8a', '53587d21-bed0-4d26-a227-15b0f1301e8a', 12, '2014-04-24 02:58:16', '53196213-e8c0-4b42-a3e3-19ecf1301e8a');

-- --------------------------------------------------------

--
-- Table structure for table `axi_practical_student_test_mappings`
--

CREATE TABLE IF NOT EXISTS `axi_practical_student_test_mappings` (
  `id` char(36) NOT NULL,
  `prac_id` char(36) NOT NULL,
  `student_id` char(36) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` char(36) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `updated_by` (`updated_by`),
  KEY `student_id` (`student_id`),
  KEY `prac_id` (`prac_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_practical_student_test_mappings`
--

INSERT INTO `axi_practical_student_test_mappings` (`id`, `prac_id`, `student_id`, `updated_at`, `updated_by`) VALUES
('5357b6c3-4818-4cab-a280-1618f1301e8a', '5357b6bf-2b3c-42ea-afee-1618f1301e8a', '5333f653-9e38-46ab-a188-1e8cf1301e8a', '2014-04-23 12:49:07', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('5357b6c3-4ae4-4d10-b31a-1618f1301e8a', '5357b6bf-2b3c-42ea-afee-1618f1301e8a', '531f06b8-00bc-4107-aa63-1d24f1301e8a', '2014-04-23 12:49:07', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('5357b6c3-961c-4462-ace4-1618f1301e8a', '5357b6bf-2b3c-42ea-afee-1618f1301e8a', '5321939b-727c-4095-b55b-0d48f1301e8a', '2014-04-23 12:49:07', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('5357b6c3-e420-441f-ae4d-1618f1301e8a', '5357b6bf-2b3c-42ea-afee-1618f1301e8a', '53200ee5-2418-4a18-8d9b-0648f1301e8a', '2014-04-23 12:49:07', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('5357b6c3-fadc-4037-b5b4-1618f1301e8a', '5357b6bf-2b3c-42ea-afee-1618f1301e8a', '534fc40d-1198-4d0c-98f2-0b24f1301e8a', '2014-04-23 12:49:07', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('53587df4-a100-42e5-a88a-15b0f1301e8a', '53587d21-bed0-4d26-a227-15b0f1301e8a', '53200ee5-2418-4a18-8d9b-0648f1301e8a', '2014-04-24 02:59:00', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('53587df4-eb80-497c-bfb3-15b0f1301e8a', '53587d21-bed0-4d26-a227-15b0f1301e8a', '531f06b8-00bc-4107-aa63-1d24f1301e8a', '2014-04-24 02:59:00', '53196213-e8c0-4b42-a3e3-19ecf1301e8a');

-- --------------------------------------------------------

--
-- Table structure for table `axi_practical_tests`
--

CREATE TABLE IF NOT EXISTS `axi_practical_tests` (
  `id` char(36) NOT NULL,
  `name` varchar(100) NOT NULL,
  `total_marks` int(11) NOT NULL,
  `test_id` char(36) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` char(36) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `test_id` (`test_id`,`updated_by`),
  KEY `updated_by` (`updated_by`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_practical_tests`
--

INSERT INTO `axi_practical_tests` (`id`, `name`, `total_marks`, `test_id`, `updated_at`, `updated_by`) VALUES
('53587d21-bed0-4d26-a227-15b0f1301e8a', 'Test 1 ComputerPractical Exam', 15, '53587d21-8dd4-4988-ba0f-15b0f1301e8a', '2014-04-24 02:55:29', '53196213-e8c0-4b42-a3e3-19ecf1301e8a');

-- --------------------------------------------------------

--
-- Table structure for table `axi_question_banks`
--

CREATE TABLE IF NOT EXISTS `axi_question_banks` (
  `id` char(36) NOT NULL,
  `question` varchar(400) NOT NULL,
  `option1` varchar(80) NOT NULL,
  `option2` varchar(80) NOT NULL,
  `option3` varchar(80) NOT NULL,
  `option4` varchar(80) NOT NULL,
  `option5` varchar(80) NOT NULL,
  `correct_ans` varchar(200) NOT NULL,
  `path` varchar(100) NOT NULL,
  `path_dir` varchar(200) NOT NULL,
  `subject_id` char(36) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` char(36) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `updated_by` (`updated_by`),
  KEY `subject_id` (`subject_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_question_banks`
--

INSERT INTO `axi_question_banks` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `option5`, `correct_ans`, `path`, `path_dir`, `subject_id`, `updated_at`, `updated_by`) VALUES
('531de793-8c2c-4f0f-8068-1bb0f1301e8a', '<p>àª•à«‹àª®à«àªªà«àª¤à«àª° àª¨à«‡ àª•à«‡àª¤àª¾àª²àª… àªªàª°à«àª¤ àª¹à«‹àª‡ ?</p>', '<p>à«©</p>', '<p>hello</p>', '<p>à««</p>', '<p>à«¬</p>', '<p>à«§</p>', 'option1,0,0,0,option5', 'Beaver.bmp', '531de793-8c2c-4f0f-8068-1bb0f1301e8a', '5319b5a0-debc-45d0-9d23-19ecf1301e8a', '2014-03-10 16:25:55', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('5321427f-c678-40a8-b030-0648f1301e8a', '<p>abhay</p>', '<p>àª¦à«àª¸à«àª«à«àª—à«àª¦à«àª¸à«àª—à«àª¸</p>', '<p>àª¸à«àª¦à«àª«à«àª—à«àª¸à«àª¦à«àª—</p>', '<p>àª¸à«àª«à«àª—à«àª¦à«àª¸</p>', '<p>àª¦à«àª«à«àª«à«àª¦à«àª—</p>', '<p>àª¦à«àª¸à«àª«à«àª—à«àª¸à«àª¦</p>', 'option1,0,option3,0,0', '', '', '5319b5a0-debc-45d0-9d23-19ecf1301e8a', '2014-03-13 05:30:39', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('532142d4-197c-43ec-b2fa-0648f1301e8a', '<p>samani</p>', '<p>àª¸àª¦à«àª«àª¸à«àª¦à«àª«àª¸à«àª¦à«àª«</p>', '<p>àª…àª¸à«àª¦à«àª«àª¸à«àª¦à«àª«àª¸</p>', '<p>àª¸à«àª¦à«àª«àª¸à«àª«àª¸</p>', '<p>àª…àª¦à«àª¸à«àª«àª¸à«àª«</p>', '<p>àª…àª¸à«àª¦à«àª«àª¸à«àª¦à«àª«</p>', 'option1,option2,0,0,0', '', '', '5319b5a0-debc-45d0-9d23-19ecf1301e8a', '2014-03-13 05:32:04', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('53214382-cb64-4c9a-9d05-0648f1301e8a', '<p>baroda</p>', '<p>àª…àª¸à«àª«</p>', '<p>àª¸à«àª¦à«àª«</p>', '<p>àª¸à«àª¦à«àª«à«àª¸à«àª¦à«àª«</p>', '<p>àª¸à«àª¸à«¨à«©à«§</p>', '<p>à«¨à«§à«©à«§à«¨</p>', 'option1,0,0,0,0', '', '', '5319b5a0-debc-45d0-9d23-19ecf1301e8a', '2014-03-13 05:34:58', '53196213-e8c0-4b42-a3e3-19ecf1301e8a');

-- --------------------------------------------------------

--
-- Table structure for table `axi_students`
--

CREATE TABLE IF NOT EXISTS `axi_students` (
  `id` char(36) NOT NULL,
  `path` varchar(200) NOT NULL,
  `path_dir` varchar(200) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `birthdate` date NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(80) NOT NULL,
  `email` varchar(200) NOT NULL,
  `parent_email` varchar(200) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `parent_mobile` bigint(20) NOT NULL,
  `school` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` char(36) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `updated_by` (`updated_by`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_students`
--

INSERT INTO `axi_students` (`id`, `path`, `path_dir`, `first_name`, `last_name`, `birthdate`, `username`, `password`, `email`, `parent_email`, `mobile`, `parent_mobile`, `school`, `address`, `updated_at`, `updated_by`) VALUES
('531f06b8-00bc-4107-aa63-1d24f1301e8a', 'David.bmp', '531f06b8-00bc-4107-aa63-1d24f1301e8a', 'lakhan', 'samani', '2014-03-11', 'a@gmail.com', '42f4def2565f344edaec6d456683a8674fe9a129', 'a@gmail.com', 'b@gmail.com', 123123, 12312, 'msu', 'vadodara', '2014-03-11 12:51:04', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('53200ee5-2418-4a18-8d9b-0648f1301e8a', 'Da Vinci.bmp', '', 'Ritik', 'Khan', '2014-03-14', 'b@gmail.com', '42f4def2565f344edaec6d456683a8674fe9a129', 'b@gmail.com', 'b@gmail.com', 23422, 43234, 'msu', 'agaere', '2014-03-12 07:38:13', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('5321939b-727c-4095-b55b-0d48f1301e8a', '', '', 'Abhay', 'Patel', '2014-03-13', 'c@gmail.com', 'd0339817ee550c87fbb80a459f3dcd4f56216117', 'c@gmail.com', 'b@gmail.com', 1231231, 13131, 'msu', '', '2014-03-13 11:16:43', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('532193eb-25b0-49c5-a501-0d48f1301e8a', '', '', 'asda', 'samani', '2014-03-11', 'd@gmail.com', '42f4def2565f344edaec6d456683a8674fe9a129', 'd@gmail.com', 'b@gmail.com', 23123, 1231, 'msu', '', '2014-03-13 11:18:03', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('5333f653-9e38-46ab-a188-1e8cf1301e8a', '', '', 'Alpesh', 'nakrani', '2014-03-27', 'a@gmail.com', '42f4def2565f344edaec6d456683a8674fe9a129', 'a@gmail.com', 'a@gmail.com', 1234567890, 1234567890, 'msu', 'sdaf', '2014-03-27 09:58:43', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('534fc40d-1198-4d0c-98f2-0b24f1301e8a', 'Bear.bmp', '534fc40d-1198-4d0c-98f2-0b24f1301e8a', 'my', 'my', '1996-04-18', 'my@gmail.com', '42f4def2565f344edaec6d456683a8674fe9a129', 'my@gmail.com', 'my@gmail.com', 2133, 213213, 'msu', 'my', '2014-04-17 12:07:41', '53196213-e8c0-4b42-a3e3-19ecf1301e8a');

-- --------------------------------------------------------

--
-- Table structure for table `axi_student_subject_mappings`
--

CREATE TABLE IF NOT EXISTS `axi_student_subject_mappings` (
  `id` char(36) NOT NULL,
  `student_id` char(36) NOT NULL,
  `subject_id` char(36) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` char(36) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `updated_by` (`updated_by`),
  KEY `subject_id` (`subject_id`),
  KEY `student_id` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_student_subject_mappings`
--

INSERT INTO `axi_student_subject_mappings` (`id`, `student_id`, `subject_id`, `updated_at`, `updated_by`) VALUES
('5321939b-c690-4d32-8e1b-0d48f1301e8a', '5321939b-727c-4095-b55b-0d48f1301e8a', '5319b5a0-debc-45d0-9d23-19ecf1301e8a', '2014-03-13 11:16:43', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('532193ec-5e68-4e16-871f-0d48f1301e8a', '532193eb-25b0-49c5-a501-0d48f1301e8a', '531ed4ed-3af8-4d2e-8c0c-1bb0f1301e8a', '2014-03-13 11:18:04', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('5333f653-a9bc-4c1c-9d29-1e8cf1301e8a', '5333f653-9e38-46ab-a188-1e8cf1301e8a', '5319b5a0-debc-45d0-9d23-19ecf1301e8a', '2014-03-27 09:58:43', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('534fc40d-91cc-4746-ad4e-0b24f1301e8a', '534fc40d-1198-4d0c-98f2-0b24f1301e8a', '5319b5a0-debc-45d0-9d23-19ecf1301e8a', '2014-04-17 12:07:41', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('5357dbd0-036c-4a48-af7c-15b0f1301e8a', '53200ee5-2418-4a18-8d9b-0648f1301e8a', '5319b5a0-debc-45d0-9d23-19ecf1301e8a', '2014-04-23 15:27:12', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('5357dbd0-3218-49fb-84a9-15b0f1301e8a', '53200ee5-2418-4a18-8d9b-0648f1301e8a', '531ed4ed-3af8-4d2e-8c0c-1bb0f1301e8a', '2014-04-23 15:27:12', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('5357dc77-56f4-4d11-a62d-15b0f1301e8a', '531f06b8-00bc-4107-aa63-1d24f1301e8a', '53200575-56e8-40df-9ab0-0648f1301e8a', '2014-04-23 15:29:59', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('5357dc77-6de4-4214-826c-15b0f1301e8a', '531f06b8-00bc-4107-aa63-1d24f1301e8a', '531ed4ed-3af8-4d2e-8c0c-1bb0f1301e8a', '2014-04-23 15:29:59', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('5357dc77-f190-49b6-8344-15b0f1301e8a', '531f06b8-00bc-4107-aa63-1d24f1301e8a', '5319b5a0-debc-45d0-9d23-19ecf1301e8a', '2014-04-23 15:29:59', '53196213-e8c0-4b42-a3e3-19ecf1301e8a');

-- --------------------------------------------------------

--
-- Table structure for table `axi_subjects`
--

CREATE TABLE IF NOT EXISTS `axi_subjects` (
  `id` char(36) NOT NULL,
  `name` varchar(100) NOT NULL,
  `standard` varchar(10) NOT NULL,
  `display_name` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` char(36) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `updated_by` (`updated_by`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_subjects`
--

INSERT INTO `axi_subjects` (`id`, `name`, `standard`, `display_name`, `updated_at`, `updated_by`) VALUES
('5319b5a0-debc-45d0-9d23-19ecf1301e8a', 'Computer', '10 th', 'Computer of 10 th', '2014-03-07 12:03:44', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('531ed4ed-3af8-4d2e-8c0c-1bb0f1301e8a', 'Science', '10 th', 'Science of 10 th', '2014-03-11 09:18:37', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('53200575-56e8-40df-9ab0-0648f1301e8a', 'DTP', '12', 'DTP of 12', '2014-03-12 06:57:57', '53196213-e8c0-4b42-a3e3-19ecf1301e8a');

-- --------------------------------------------------------

--
-- Table structure for table `axi_tests`
--

CREATE TABLE IF NOT EXISTS `axi_tests` (
  `id` char(36) NOT NULL,
  `name` varchar(100) NOT NULL,
  `subject_id` char(36) NOT NULL,
  `marking_scheme_id` char(36) NOT NULL,
  `date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `test_timer` varchar(10) NOT NULL,
  `question_limit` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` char(36) NOT NULL,
  `prac_chk` int(11) NOT NULL,
  `prac_mrks` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `subject_id` (`subject_id`),
  KEY `marking_scheme_id` (`marking_scheme_id`),
  KEY `updated_by` (`updated_by`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_tests`
--

INSERT INTO `axi_tests` (`id`, `name`, `subject_id`, `marking_scheme_id`, `date`, `start_time`, `end_time`, `test_timer`, `question_limit`, `updated_at`, `updated_by`, `prac_chk`, `prac_mrks`) VALUES
('53587d21-8dd4-4988-ba0f-15b0f1301e8a', 'Test 1 Computer', '5319b5a0-debc-45d0-9d23-19ecf1301e8a', '53572261-8530-4ef0-9a3d-1618f1301e8a', '2014-04-24', '08:24:00', '22:24:00', '30', 3, '2014-04-24 02:55:29', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', 1, 15);

-- --------------------------------------------------------

--
-- Table structure for table `axi_test_question_mappings`
--

CREATE TABLE IF NOT EXISTS `axi_test_question_mappings` (
  `id` char(36) NOT NULL,
  `question_id` char(36) NOT NULL,
  `test_id` char(36) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` char(36) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `question_id` (`question_id`),
  KEY `test_id` (`test_id`),
  KEY `updated_by` (`updated_by`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_test_question_mappings`
--

INSERT INTO `axi_test_question_mappings` (`id`, `question_id`, `test_id`, `updated_at`, `updated_by`) VALUES
('53587de7-99dc-486a-a3b7-15b0f1301e8a', '5321427f-c678-40a8-b030-0648f1301e8a', '53587d21-8dd4-4988-ba0f-15b0f1301e8a', '2014-04-24 02:58:47', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('53587de7-be24-4e4b-abce-15b0f1301e8a', '53214382-cb64-4c9a-9d05-0648f1301e8a', '53587d21-8dd4-4988-ba0f-15b0f1301e8a', '2014-04-24 02:58:47', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('53587de7-fc24-4547-9fd3-15b0f1301e8a', '531de793-8c2c-4f0f-8068-1bb0f1301e8a', '53587d21-8dd4-4988-ba0f-15b0f1301e8a', '2014-04-24 02:58:47', '53196213-e8c0-4b42-a3e3-19ecf1301e8a');

-- --------------------------------------------------------

--
-- Table structure for table `axi_test_question_student_mappings`
--

CREATE TABLE IF NOT EXISTS `axi_test_question_student_mappings` (
  `id` char(36) NOT NULL,
  `test_id` char(36) NOT NULL,
  `question_id` char(36) NOT NULL,
  `student_id` char(36) NOT NULL,
  `ans_s` varchar(30) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `test_id` (`test_id`),
  KEY `question_id` (`question_id`),
  KEY `student_id` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `axi_test_student_mappings`
--

CREATE TABLE IF NOT EXISTS `axi_test_student_mappings` (
  `id` char(36) NOT NULL,
  `test_id` char(36) NOT NULL,
  `student_id` char(36) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` char(36) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `test_id` (`test_id`),
  KEY `student_id` (`student_id`),
  KEY `updated_by` (`updated_by`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_test_student_mappings`
--

INSERT INTO `axi_test_student_mappings` (`id`, `test_id`, `student_id`, `updated_at`, `updated_by`) VALUES
('53587df4-df50-4922-82d9-15b0f1301e8a', '53587d21-8dd4-4988-ba0f-15b0f1301e8a', '53200ee5-2418-4a18-8d9b-0648f1301e8a', '2014-04-24 02:59:00', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('53587df4-e63c-42e7-8757-15b0f1301e8a', '53587d21-8dd4-4988-ba0f-15b0f1301e8a', '531f06b8-00bc-4107-aa63-1d24f1301e8a', '2014-04-24 02:59:00', '53196213-e8c0-4b42-a3e3-19ecf1301e8a');

-- --------------------------------------------------------

--
-- Table structure for table `axi_test_student_results`
--

CREATE TABLE IF NOT EXISTS `axi_test_student_results` (
  `id` char(36) NOT NULL,
  `student_id` char(36) NOT NULL,
  `test_id` char(36) NOT NULL,
  `correct_ans` int(11) NOT NULL,
  `incorrect_ans` int(11) NOT NULL,
  `unmarked` int(11) NOT NULL,
  `total_mrks` double NOT NULL,
  `marks_obtained` double NOT NULL,
  PRIMARY KEY (`id`),
  KEY `student_id` (`student_id`),
  KEY `test_id` (`test_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `axi_users`
--

CREATE TABLE IF NOT EXISTS `axi_users` (
  `id` char(36) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(70) NOT NULL,
  `email` varchar(120) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_users`
--

INSERT INTO `axi_users` (`id`, `name`, `username`, `password`, `email`, `updated_at`) VALUES
('53196213-e8c0-4b42-a3e3-19ecf1301e8a', 'admin', 'admin', 'd0339817ee550c87fbb80a459f3dcd4f56216117', 'admin', '2014-03-07 06:07:15');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `axi_markingschemes`
--
ALTER TABLE `axi_markingschemes`
  ADD CONSTRAINT `axi_markingschemes_ibfk_1` FOREIGN KEY (`updated_by`) REFERENCES `axi_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `axi_practical_tests`
--
ALTER TABLE `axi_practical_tests`
  ADD CONSTRAINT `axi_practical_tests_ibfk_1` FOREIGN KEY (`test_id`) REFERENCES `axi_tests` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `axi_practical_tests_ibfk_2` FOREIGN KEY (`updated_by`) REFERENCES `axi_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `axi_question_banks`
--
ALTER TABLE `axi_question_banks`
  ADD CONSTRAINT `axi_question_banks_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `axi_subjects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `axi_question_banks_ibfk_2` FOREIGN KEY (`updated_by`) REFERENCES `axi_users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `axi_student_subject_mappings`
--
ALTER TABLE `axi_student_subject_mappings`
  ADD CONSTRAINT `axi_student_subject_mappings_ibfk_1` FOREIGN KEY (`updated_by`) REFERENCES `axi_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `axi_student_subject_mappings_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `axi_students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `axi_student_subject_mappings_ibfk_3` FOREIGN KEY (`subject_id`) REFERENCES `axi_subjects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `axi_subjects`
--
ALTER TABLE `axi_subjects`
  ADD CONSTRAINT `axi_subjects_ibfk_1` FOREIGN KEY (`updated_by`) REFERENCES `axi_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `axi_tests`
--
ALTER TABLE `axi_tests`
  ADD CONSTRAINT `axi_tests_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `axi_subjects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `axi_tests_ibfk_2` FOREIGN KEY (`marking_scheme_id`) REFERENCES `axi_markingschemes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `axi_tests_ibfk_3` FOREIGN KEY (`updated_by`) REFERENCES `axi_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `axi_test_question_mappings`
--
ALTER TABLE `axi_test_question_mappings`
  ADD CONSTRAINT `axi_test_question_mappings_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `axi_question_banks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `axi_test_question_mappings_ibfk_2` FOREIGN KEY (`test_id`) REFERENCES `axi_tests` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `axi_test_question_mappings_ibfk_3` FOREIGN KEY (`updated_by`) REFERENCES `axi_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `axi_test_question_student_mappings`
--
ALTER TABLE `axi_test_question_student_mappings`
  ADD CONSTRAINT `axi_test_question_student_mappings_ibfk_1` FOREIGN KEY (`test_id`) REFERENCES `axi_tests` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `axi_test_question_student_mappings_ibfk_2` FOREIGN KEY (`question_id`) REFERENCES `axi_question_banks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `axi_test_question_student_mappings_ibfk_3` FOREIGN KEY (`student_id`) REFERENCES `axi_students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `axi_test_student_mappings`
--
ALTER TABLE `axi_test_student_mappings`
  ADD CONSTRAINT `axi_test_student_mappings_ibfk_1` FOREIGN KEY (`test_id`) REFERENCES `axi_tests` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `axi_test_student_mappings_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `axi_students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `axi_test_student_mappings_ibfk_3` FOREIGN KEY (`updated_by`) REFERENCES `axi_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `axi_test_student_results`
--
ALTER TABLE `axi_test_student_results`
  ADD CONSTRAINT `axi_test_student_results_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `axi_students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `axi_test_student_results_ibfk_2` FOREIGN KEY (`test_id`) REFERENCES `axi_tests` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
