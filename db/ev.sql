-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 07, 2015 at 09:03 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

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
-- Table structure for table `axi_markingschemes`
--

CREATE TABLE IF NOT EXISTS `axi_markingschemes` (
  `id` char(36) NOT NULL,
  `positive_marks` double NOT NULL,
  `negative_marks` double NOT NULL,
  `display_name` varchar(20) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_markingschemes`
--

INSERT INTO `axi_markingschemes` (`id`, `positive_marks`, `negative_marks`, `display_name`, `updated_at`, `updated_by`) VALUES
('531d5d48-1f14-4e09-915d-1bb0f1301e8a', 3, 2, '+ 3, - 2', '2014-03-10 06:35:52', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('53315959-c268-4cc2-a42f-0c4cf1301e8a', 100, 500, '+ 100, - 500', '2014-03-25 10:24:25', '53196213-e8c0-4b42-a3e3-19ecf1301e8a');

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
  `updated_by` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_question_banks`
--

INSERT INTO `axi_question_banks` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `option5`, `correct_ans`, `path`, `path_dir`, `subject_id`, `updated_at`, `updated_by`) VALUES
('531de793-8c2c-4f0f-8068-1bb0f1301e8a', '<p>àª•à«‹àª®à«àªªà«àª¤à«àª° àª¨à«‡ àª•à«‡àª¤àª¾àª²àª… àªªàª°à«àª¤ àª¹à«‹àª‡ ?</p>', '<p>à«©</p>', '<p>hello</p>', '<p>à««</p>', '<p>à«¬</p>', '<p>à«§</p>', 'option1,0,0,0,option5', 'Beaver.bmp', '531de793-8c2c-4f0f-8068-1bb0f1301e8a', '5319b5a0-debc-45d0-9d23-19ecf1301e8a', '2014-03-10 16:25:55', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('5321427f-c678-40a8-b030-0648f1301e8a', '<p>abhay</p>', '<p>àª¦à«àª¸à«àª«à«àª—à«àª¦à«àª¸à«àª—à«àª¸</p>', '<p>àª¸à«àª¦à«àª«à«àª—à«àª¸à«àª¦à«àª—</p>', '<p>àª¸à«àª«à«àª—à«àª¦à«àª¸</p>', '<p>àª¦à«àª«à«àª«à«àª¦à«àª—</p>', '<p>àª¦à«àª¸à«àª«à«àª—à«àª¸à«àª¦</p>', 'option1,0,option3,0,0', '', '', '5319b5a0-debc-45d0-9d23-19ecf1301e8a', '2014-03-13 05:30:39', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('532142d4-197c-43ec-b2fa-0648f1301e8a', '<p>samani</p>', '<p>àª¸àª¦à«àª«àª¸à«àª¦à«àª«àª¸à«àª¦à«àª«</p>', '<p>àª…àª¸à«àª¦à«àª«àª¸à«àª¦à«àª«àª¸</p>', '<p>àª¸à«àª¦à«àª«àª¸à«àª«àª¸</p>', '<p>àª…àª¦à«àª¸à«àª«àª¸à«àª«</p>', '<p>àª…àª¸à«àª¦à«àª«àª¸à«àª¦à«àª«</p>', 'option1,option2,0,0,0', '', '', '5319b5a0-debc-45d0-9d23-19ecf1301e8a', '2014-03-13 05:32:04', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('532142f9-5e50-495a-8c02-0648f1301e8a', '<p>patel</p>', '<p>àª¸à«àª¦à«àª«àª¦</p>', '<p>àª¸à«àª¦à«àª«àª¦à«àª«</p>', '<p>àª¸à«àª¦àª«àª¸</p>', '<p>àª¸à«àª¦à«àª«àª¸à«àª¦</p>', '<p>àª¸à«àª¦à«àª«àª¸à«àª¦à«àª«</p>', 'option1,0,0,0,0', 'Alien 1.bmp', '532142f9-5e50-495a-8c02-0648f1301e8a', '5319b5a0-debc-45d0-9d23-19ecf1301e8a', '2014-03-13 05:32:41', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('5321435f-d668-43d7-adc3-0648f1301e8a', '<p>shah</p>', '<p>àª¸à«àª¦à«àª«àª¸à«àª¦</p>', '<p>àª¸à«àª¦à«àª¦à«àª«</p>', '<p>àª¸à«àª¦à«àª«à«àª¸à«àª¦</p>', '<p>àª«à«àª¸à«àª¦à«àª¸</p>', '<p>àª…àª¸à«àª¦àª¦</p>', 'option1,0,0,0,0', '', '', '5319b5a0-debc-45d0-9d23-19ecf1301e8a', '2014-03-13 05:34:23', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('53214382-cb64-4c9a-9d05-0648f1301e8a', '<p>baroda</p>', '<p>àª…àª¸à«àª«</p>', '<p>àª¸à«àª¦à«àª«</p>', '<p>àª¸à«àª¦à«àª«à«àª¸à«àª¦à«àª«</p>', '<p>àª¸à«àª¸à«¨à«©à«§</p>', '<p>à«¨à«§à«©à«§à«¨</p>', 'option1,0,0,0,0', '', '', '5319b5a0-debc-45d0-9d23-19ecf1301e8a', '2014-03-13 05:34:58', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('5321548a-28b0-4e9b-abb1-0648f1301e8a', '<p>dtp</p>', '<p>sdaf</p>', '<p>sdfa</p>', '<p>sadfa</p>', '<p>sdfa</p>', '<p>dsfa</p>', '0,0,0,option4,0', '', '', '53200575-56e8-40df-9ab0-0648f1301e8a', '2014-03-13 06:47:38', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('532be0f2-9878-4b9b-b23a-1530f1301e8a', '<p>sci</p>', '<p>sdfa</p>', '<p>sdf</p>', '<p>sdf</p>', '<p>sdf</p>', '<p>dfs</p>', 'option1,0,0,0,0', '', '', '531ed4ed-3af8-4d2e-8c0c-1bb0f1301e8a', '2014-03-21 06:49:22', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('532be1a6-a9d4-487c-b011-1530f1301e8a', '<p>sc2</p>', '<p>a</p>', '<p>vv</p>', '<p>av</p>', '<p>ava</p>', '<p>ava</p>', 'option1,0,0,0,0', '', '', '531ed4ed-3af8-4d2e-8c0c-1bb0f1301e8a', '2014-03-21 06:52:22', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('533159cd-2814-41b9-ace0-0c4cf1301e8a', '<p>àª¸à«àª¦à«àª«</p>', '<p>àª¸à«àª¦à«àª«</p>', '<p>àª¸à«àª¦à«àª«</p>', '', '<p>àª¸à«àª¦à«àª«</p>', '<p>àª¸àª¦à«àª«</p>', '0,0,0,option4,option5', 'Alien 1.bmp', '533159cd-2814-41b9-ace0-0c4cf1301e8a', '531ed4ed-3af8-4d2e-8c0c-1bb0f1301e8a', '2014-03-25 10:26:21', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('5333f604-e200-4e62-a984-1e8cf1301e8a', '<p>zxcvzv</p>', '<p>xcvz</p>', '<p>cxvz</p>', '<p>xcv</p>', '<p>czxv</p>', '<p>cvzc</p>', '0,option2,0,0,0', '', '', '5319b5a0-debc-45d0-9d23-19ecf1301e8a', '2014-03-27 09:57:24', '53196213-e8c0-4b42-a3e3-19ecf1301e8a');

-- --------------------------------------------------------

--
-- Table structure for table `axi_students`
--

CREATE TABLE IF NOT EXISTS `axi_students` (
  `id` char(36) NOT NULL,
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
  `updated_by` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_students`
--

INSERT INTO `axi_students` (`id`, `first_name`, `last_name`, `birthdate`, `username`, `password`, `email`, `parent_email`, `mobile`, `parent_mobile`, `school`, `address`, `updated_at`, `updated_by`) VALUES
('531f06b8-00bc-4107-aa63-1d24f1301e8a', 'lakhan', 'samani', '2014-03-11', 'a@gmail.com', 'd0339817ee550c87fbb80a459f3dcd4f56216117', 'a@gmail.com', 'b@gmail.com', 123123, 12312, 'msu', 'vadodara', '2014-03-11 12:51:04', '531f06b8-00bc-4107-aa63-1d24f1301e8a'),
('53200ee5-2418-4a18-8d9b-0648f1301e8a', 'Ritik', 'Khan', '2014-03-14', 'b@gmail.com', 'd0339817ee550c87fbb80a459f3dcd4f56216117', 'b@gmail.com', 'b@gmail.com', 23422, 43234, 'msu', 'agaere', '2014-03-12 07:38:13', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('5321939b-727c-4095-b55b-0d48f1301e8a', 'Abhay', 'Patel', '2014-03-13', 'c@gmail.com', 'd0339817ee550c87fbb80a459f3dcd4f56216117', 'c@gmail.com', 'b@gmail.com', 1231231, 13131, 'msu', '', '2014-03-13 11:16:43', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('532193eb-25b0-49c5-a501-0d48f1301e8a', 'asda', 'samani', '2014-03-11', 'd@gmail.com', '42f4def2565f344edaec6d456683a8674fe9a129', 'd@gmail.com', 'b@gmail.com', 23123, 1231, 'msu', '', '2014-03-13 11:18:03', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('5333f653-9e38-46ab-a188-1e8cf1301e8a', 'Alpesh', 'nakrani', '2014-03-27', 'a@gmail.com', '42f4def2565f344edaec6d456683a8674fe9a129', 'a@gmail.com', 'a@gmail.com', 1234567890, 1234567890, 'msu', 'sdaf', '2014-03-27 09:58:43', '53196213-e8c0-4b42-a3e3-19ecf1301e8a');

-- --------------------------------------------------------

--
-- Table structure for table `axi_student_subject_mappings`
--

CREATE TABLE IF NOT EXISTS `axi_student_subject_mappings` (
  `id` char(36) NOT NULL,
  `student_id` char(36) NOT NULL,
  `subject_id` char(36) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_student_subject_mappings`
--

INSERT INTO `axi_student_subject_mappings` (`id`, `student_id`, `subject_id`, `updated_at`, `updated_by`) VALUES
('53203466-30b8-4e98-8b5d-0648f1301e8a', '53200ee5-2418-4a18-8d9b-0648f1301e8a', '5319b5a0-debc-45d0-9d23-19ecf1301e8a', '2014-03-12 10:18:14', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('53203466-c18c-4403-97a2-0648f1301e8a', '53200ee5-2418-4a18-8d9b-0648f1301e8a', '531ed4ed-3af8-4d2e-8c0c-1bb0f1301e8a', '2014-03-12 10:18:14', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('5320346a-a2c0-4f5a-9ceb-0648f1301e8a', '531f06b8-00bc-4107-aa63-1d24f1301e8a', '5319b5a0-debc-45d0-9d23-19ecf1301e8a', '2014-03-12 10:18:18', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('5320346a-cff4-4274-8f7b-0648f1301e8a', '531f06b8-00bc-4107-aa63-1d24f1301e8a', '531ed4ed-3af8-4d2e-8c0c-1bb0f1301e8a', '2014-03-12 10:18:18', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('5320346a-d45c-4cfd-b22e-0648f1301e8a', '531f06b8-00bc-4107-aa63-1d24f1301e8a', '53200575-56e8-40df-9ab0-0648f1301e8a', '2014-03-12 10:18:18', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('5321939b-c690-4d32-8e1b-0d48f1301e8a', '5321939b-727c-4095-b55b-0d48f1301e8a', '5319b5a0-debc-45d0-9d23-19ecf1301e8a', '2014-03-13 11:16:43', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('532193ec-5e68-4e16-871f-0d48f1301e8a', '532193eb-25b0-49c5-a501-0d48f1301e8a', '531ed4ed-3af8-4d2e-8c0c-1bb0f1301e8a', '2014-03-13 11:18:04', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('5333f653-a9bc-4c1c-9d29-1e8cf1301e8a', '5333f653-9e38-46ab-a188-1e8cf1301e8a', '5319b5a0-debc-45d0-9d23-19ecf1301e8a', '2014-03-27 09:58:43', '53196213-e8c0-4b42-a3e3-19ecf1301e8a');

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
  `updated_by` char(36) NOT NULL
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
  `question_limit` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_tests`
--

INSERT INTO `axi_tests` (`id`, `name`, `subject_id`, `marking_scheme_id`, `date`, `start_time`, `end_time`, `question_limit`, `updated_at`, `updated_by`) VALUES
('5333f0a4-749c-4e44-9064-1e8cf1301e8a', 'Computer Test 1', '5319b5a0-debc-45d0-9d23-19ecf1301e8a', '531d5d48-1f14-4e09-915d-1bb0f1301e8a', '2014-03-27', '15:04:00', '16:04:00', 4, '2014-03-27 09:34:28', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('533e7001-a2cc-4550-aadb-09c8f1301e8a', 'Test 3', '5319b5a0-debc-45d0-9d23-19ecf1301e8a', '531d5d48-1f14-4e09-915d-1bb0f1301e8a', '2014-04-04', '14:09:00', '16:09:00', 5, '2014-04-04 08:40:33', '53196213-e8c0-4b42-a3e3-19ecf1301e8a');

-- --------------------------------------------------------

--
-- Table structure for table `axi_test_question_mappings`
--

CREATE TABLE IF NOT EXISTS `axi_test_question_mappings` (
  `id` char(36) NOT NULL,
  `question_id` char(36) NOT NULL,
  `test_id` char(36) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_test_question_mappings`
--

INSERT INTO `axi_test_question_mappings` (`id`, `question_id`, `test_id`, `updated_at`, `updated_by`) VALUES
('5333f0b7-37b8-4385-99c7-1e8cf1301e8a', '532142d4-197c-43ec-b2fa-0648f1301e8a', '5333f0a4-749c-4e44-9064-1e8cf1301e8a', '2014-03-27 09:34:47', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('5333f0b7-44f8-435e-92a3-1e8cf1301e8a', '532142f9-5e50-495a-8c02-0648f1301e8a', '5333f0a4-749c-4e44-9064-1e8cf1301e8a', '2014-03-27 09:34:47', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('5333f0b7-a3d8-44f4-aa9e-1e8cf1301e8a', '5321435f-d668-43d7-adc3-0648f1301e8a', '5333f0a4-749c-4e44-9064-1e8cf1301e8a', '2014-03-27 09:34:47', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('5333f0b7-b118-4b42-92c3-1e8cf1301e8a', '53214382-cb64-4c9a-9d05-0648f1301e8a', '5333f0a4-749c-4e44-9064-1e8cf1301e8a', '2014-03-27 09:34:47', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('533e7001-2124-4843-874c-09c8f1301e8a', '532142f9-5e50-495a-8c02-0648f1301e8a', '533e7001-a2cc-4550-aadb-09c8f1301e8a', '2014-04-04 08:40:33', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('533e7001-456c-4847-9fc7-09c8f1301e8a', '5321435f-d668-43d7-adc3-0648f1301e8a', '533e7001-a2cc-4550-aadb-09c8f1301e8a', '2014-04-04 08:40:33', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('533e7001-8ce0-486f-9685-09c8f1301e8a', '5333f604-e200-4e62-a984-1e8cf1301e8a', '533e7001-a2cc-4550-aadb-09c8f1301e8a', '2014-04-04 08:40:33', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('533e7001-d94c-4c08-b910-09c8f1301e8a', '531de793-8c2c-4f0f-8068-1bb0f1301e8a', '533e7001-a2cc-4550-aadb-09c8f1301e8a', '2014-04-04 08:40:33', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('533e7001-f900-42e0-8ae8-09c8f1301e8a', '53214382-cb64-4c9a-9d05-0648f1301e8a', '533e7001-a2cc-4550-aadb-09c8f1301e8a', '2014-04-04 08:40:33', '53196213-e8c0-4b42-a3e3-19ecf1301e8a');

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
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_test_question_student_mappings`
--

INSERT INTO `axi_test_question_student_mappings` (`id`, `test_id`, `question_id`, `student_id`, `ans_s`, `updated_at`) VALUES
('533e706c-6278-4ae9-b51b-09c8f1301e8a', '533e7001-a2cc-4550-aadb-09c8f1301e8a', '532142f9-5e50-495a-8c02-0648f1301e8a', '531f06b8-00bc-4107-aa63-1d24f1301e8a', '0,0,option3,0,0', '2014-04-04 08:42:20'),
('533e706c-6fb8-43ee-ba3a-09c8f1301e8a', '533e7001-a2cc-4550-aadb-09c8f1301e8a', '5321435f-d668-43d7-adc3-0648f1301e8a', '531f06b8-00bc-4107-aa63-1d24f1301e8a', '0,option2,option3,0,0', '2014-04-04 08:42:20'),
('533e706c-7980-4673-a313-09c8f1301e8a', '533e7001-a2cc-4550-aadb-09c8f1301e8a', '53214382-cb64-4c9a-9d05-0648f1301e8a', '531f06b8-00bc-4107-aa63-1d24f1301e8a', 'option1,0,0,0,0', '2014-04-04 08:42:20'),
('533e706c-7cf8-448b-bffd-09c8f1301e8a', '533e7001-a2cc-4550-aadb-09c8f1301e8a', '5333f604-e200-4e62-a984-1e8cf1301e8a', '531f06b8-00bc-4107-aa63-1d24f1301e8a', '0,0,0,0,0', '2014-04-04 08:42:20'),
('533e706c-e75c-4a89-9dec-09c8f1301e8a', '533e7001-a2cc-4550-aadb-09c8f1301e8a', '531de793-8c2c-4f0f-8068-1bb0f1301e8a', '531f06b8-00bc-4107-aa63-1d24f1301e8a', '0,0,0,0,0', '2014-04-04 08:42:20');

-- --------------------------------------------------------

--
-- Table structure for table `axi_test_student_mappings`
--

CREATE TABLE IF NOT EXISTS `axi_test_student_mappings` (
  `id` char(36) NOT NULL,
  `test_id` char(36) NOT NULL,
  `student_id` char(36) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_test_student_mappings`
--

INSERT INTO `axi_test_student_mappings` (`id`, `test_id`, `student_id`, `updated_at`, `updated_by`) VALUES
('5333f0b9-4684-4aa8-af0a-1e8cf1301e8a', '5333f0a4-749c-4e44-9064-1e8cf1301e8a', '531f06b8-00bc-4107-aa63-1d24f1301e8a', '2014-03-27 09:34:49', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('5333f0b9-5428-4623-983c-1e8cf1301e8a', '5333f0a4-749c-4e44-9064-1e8cf1301e8a', '53200ee5-2418-4a18-8d9b-0648f1301e8a', '2014-03-27 09:34:49', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('5333f0b9-dac8-446c-b251-1e8cf1301e8a', '5333f0a4-749c-4e44-9064-1e8cf1301e8a', '5321939b-727c-4095-b55b-0d48f1301e8a', '2014-03-27 09:34:49', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('533e7009-95c0-4bb0-908a-09c8f1301e8a', '533e7001-a2cc-4550-aadb-09c8f1301e8a', '531f06b8-00bc-4107-aa63-1d24f1301e8a', '2014-04-04 08:40:41', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('533e7009-a300-42e4-8405-09c8f1301e8a', '533e7001-a2cc-4550-aadb-09c8f1301e8a', '53200ee5-2418-4a18-8d9b-0648f1301e8a', '2014-04-04 08:40:41', '53196213-e8c0-4b42-a3e3-19ecf1301e8a');

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
  `marks_obtained` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_test_student_results`
--

INSERT INTO `axi_test_student_results` (`id`, `student_id`, `test_id`, `correct_ans`, `incorrect_ans`, `unmarked`, `total_mrks`, `marks_obtained`) VALUES
('533e706c-bbc0-4a42-a3cf-09c8f1301e8a', '531f06b8-00bc-4107-aa63-1d24f1301e8a', '533e7001-a2cc-4550-aadb-09c8f1301e8a', 1, 2, 2, 15, -1);

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
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_users`
--

INSERT INTO `axi_users` (`id`, `name`, `username`, `password`, `email`, `updated_at`) VALUES
('53196213-e8c0-4b42-a3e3-19ecf1301e8a', 'admin', 'admin@gmail.com', '39dea93b8f5e606c5fa3a62859d5af337561905d', 'admin', '2014-03-07 06:07:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `axi_markingschemes`
--
ALTER TABLE `axi_markingschemes`
 ADD PRIMARY KEY (`id`), ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `axi_question_banks`
--
ALTER TABLE `axi_question_banks`
 ADD PRIMARY KEY (`id`), ADD KEY `updated_by` (`updated_by`), ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `axi_students`
--
ALTER TABLE `axi_students`
 ADD PRIMARY KEY (`id`), ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `axi_student_subject_mappings`
--
ALTER TABLE `axi_student_subject_mappings`
 ADD PRIMARY KEY (`id`), ADD KEY `updated_by` (`updated_by`), ADD KEY `subject_id` (`subject_id`), ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `axi_subjects`
--
ALTER TABLE `axi_subjects`
 ADD PRIMARY KEY (`id`), ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `axi_tests`
--
ALTER TABLE `axi_tests`
 ADD PRIMARY KEY (`id`), ADD KEY `subject_id` (`subject_id`), ADD KEY `marking_scheme_id` (`marking_scheme_id`), ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `axi_test_question_mappings`
--
ALTER TABLE `axi_test_question_mappings`
 ADD PRIMARY KEY (`id`), ADD KEY `question_id` (`question_id`), ADD KEY `test_id` (`test_id`), ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `axi_test_question_student_mappings`
--
ALTER TABLE `axi_test_question_student_mappings`
 ADD PRIMARY KEY (`id`), ADD KEY `test_id` (`test_id`), ADD KEY `question_id` (`question_id`), ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `axi_test_student_mappings`
--
ALTER TABLE `axi_test_student_mappings`
 ADD PRIMARY KEY (`id`), ADD KEY `test_id` (`test_id`), ADD KEY `student_id` (`student_id`), ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `axi_test_student_results`
--
ALTER TABLE `axi_test_student_results`
 ADD PRIMARY KEY (`id`), ADD KEY `student_id` (`student_id`), ADD KEY `test_id` (`test_id`);

--
-- Indexes for table `axi_users`
--
ALTER TABLE `axi_users`
 ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `axi_markingschemes`
--
ALTER TABLE `axi_markingschemes`
ADD CONSTRAINT `axi_markingschemes_ibfk_1` FOREIGN KEY (`updated_by`) REFERENCES `axi_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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