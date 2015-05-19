-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 19, 2015 at 02:06 AM
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
-- Table structure for table `axi_admins`
--

CREATE TABLE IF NOT EXISTS `axi_admins` (
  `id` char(36) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(70) NOT NULL,
  `email` varchar(120) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_admins`
--

INSERT INTO `axi_admins` (`id`, `name`, `username`, `password`, `email`, `updated_at`) VALUES
('53196213-e8c0-4b42-a3e3-19ecf1301e8a', 'admin', 'admin@gmail.com', '39dea93b8f5e606c5fa3a62859d5af337561905d', 'admin', '2014-03-07 06:07:15');

-- --------------------------------------------------------

--
-- Table structure for table `axi_files`
--

CREATE TABLE IF NOT EXISTS `axi_files` (
  `id` char(36) NOT NULL,
  `subtopic_id` char(36) NOT NULL,
  `file` varchar(255) NOT NULL,
  `file_type` varchar(255) NOT NULL,
  `uploaded_by` char(36) NOT NULL,
  `file_desc` varchar(800) DEFAULT NULL,
  `file_dir` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_files`
--

INSERT INTO `axi_files` (`id`, `subtopic_id`, `file`, `file_type`, `uploaded_by`, `file_desc`, `file_dir`) VALUES
('555a46fb-7134-4c7f-9794-5223125f2f23', '55572b2a-9ed0-4466-a270-0ecb125f2f23', 'Screenshot from 2015-05-17 00:48:43.png', 'image/png', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', NULL, '555a46fb-7134-4c7f-9794-5223125f2f23'),
('555a46fb-8498-40dd-b1a0-5223125f2f23', '55572b2a-9ed0-4466-a270-0ecb125f2f23', 'Screenshot from 2015-05-17 00:50:30.png', 'image/png', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', NULL, '555a46fb-8498-40dd-b1a0-5223125f2f23'),
('555a46fb-52b4-4c7c-8d88-5223125f2f23', '55572b2a-9ed0-4466-a270-0ecb125f2f23', 'Screenshot from 2015-05-17 12:10:21.png', 'image/png', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', NULL, '555a46fb-52b4-4c7c-8d88-5223125f2f23'),
('555a477b-b194-4b7f-b535-52f3125f2f23', '55572b2a-9ed0-4466-a270-0ecb125f2f23', '10904505_575795349222972_3590658698566290572_o.jpg', 'image/jpeg', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', 'asdlkjhakjdsfkfjsdfDVFLKJ;EVRNASKLLKSF', '555a477b-b194-4b7f-b535-52f3125f2f23'),
('555a477b-d3b0-4c08-9a25-52f3125f2f23', '55572b2a-9ed0-4466-a270-0ecb125f2f23', '10957339_592163027586204_5377968201807179295_n.jpg', 'image/jpeg', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', 'asdlkjhakjdsfkfjsdfDVFLKJ;EVRNASKLLKSF', '555a477b-d3b0-4c08-9a25-52f3125f2f23'),
('555a477c-2d5c-4014-a62e-52f3125f2f23', '55572b2a-9ed0-4466-a270-0ecb125f2f23', 'Asx6afNEuhSmhGVRR3Ivh91b6iudks38ffQiRVNgB333.jpg', 'image/jpeg', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', 'asdlkjhakjdsfkfjsdfDVFLKJ;EVRNASKLLKSF', '555a477c-2d5c-4014-a62e-52f3125f2f23'),
('555a47a4-748c-4c8d-bccc-5254125f2f23', '55572b2a-9ed0-4466-a270-0ecb125f2f23', '10904505_575795349222972_3590658698566290572_o.jpg', 'image/jpeg', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', '', '555a47a4-748c-4c8d-bccc-5254125f2f23'),
('555a4c0a-49ec-44f8-ba09-50db125f2f23', '55572b2a-9ed0-4466-a270-0ecb125f2f23', '10957339_592163027586204_5377968201807179295_n.jpg', 'image/jpeg', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', '', '555a4c0a-49ec-44f8-ba09-50db125f2f23'),
('555a4c0a-91cc-4c47-8d84-50db125f2f23', '55572b2a-9ed0-4466-a270-0ecb125f2f23', '11148457_890961960925948_5856222529497236170_n.jpg', 'image/jpeg', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', '', '555a4c0a-91cc-4c47-8d84-50db125f2f23'),
('555a4c0b-744c-4d76-b9e5-50db125f2f23', '55572b2a-9ed0-4466-a270-0ecb125f2f23', 'Asx6afNEuhSmhGVRR3Ivh91b6iudks38ffQiRVNgB333.jpg', 'image/jpeg', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', '', '555a4c0b-744c-4d76-b9e5-50db125f2f23'),
('555a559d-1e38-4d6c-b30c-5503125f2f23', '55572b2a-9ed0-4466-a270-0ecb125f2f23', 'CakePHPCookbook.pdf', 'application/pdf', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', '', '555a559d-1e38-4d6c-b30c-5503125f2f23'),
('555a6f23-4468-464f-b0f1-4d84125f2f23', '55572b2a-9ed0-4466-a270-0ecb125f2f23', 'Hacking Android Smartphone Tutorial using Metasploit.mp4', 'video/mp4', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', '', '555a6f23-4468-464f-b0f1-4d84125f2f23'),
('555a6fca-3e8c-4839-927b-5c5c125f2f23', '55572b2a-9ed0-4466-a270-0ecb125f2f23', 'Imagine Dragons - Demons (Official).mp4', 'video/mp4', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', '', '555a6fca-3e8c-4839-927b-5c5c125f2f23'),
('555a7110-1d70-48fc-9c04-4ff4125f2f23', '55572b2a-9ed0-4466-a270-0ecb125f2f23', 'Arijit Singh - Unplugged Season 3 - ''Ilahi''.MP4', 'video/mp4', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', '', '555a7110-1d70-48fc-9c04-4ff4125f2f23'),
('555a7129-3e6c-4c5b-b61e-5c5c125f2f23', '55572b2a-9ed0-4466-a270-0ecb125f2f23', '11148457_890961960925948_5856222529497236170_n.jpg', 'image/jpeg', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', '', '555a7129-3e6c-4c5b-b61e-5c5c125f2f23'),
('555a719e-a894-43f7-9054-5d6d125f2f23', '55572b2a-9ed0-4466-a270-0ecb125f2f23', '', '', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', '', NULL),
('555a71e6-f0fc-4866-a604-4d84125f2f23', '55572b2a-9ed0-4466-a270-0ecb125f2f23', '10904505_575795349222972_3590658698566290572_o.jpg', 'image/jpeg', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', '', '555a71e6-f0fc-4866-a604-4d84125f2f23'),
('555a71e6-c9ac-49e6-b219-4d84125f2f23', '55572b2a-9ed0-4466-a270-0ecb125f2f23', '10957339_592163027586204_5377968201807179295_n.jpg', 'image/jpeg', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', '', '555a71e6-c9ac-49e6-b219-4d84125f2f23'),
('555a71e6-8978-4b0c-b6df-4d84125f2f23', '55572b2a-9ed0-4466-a270-0ecb125f2f23', '11148457_890961960925948_5856222529497236170_n.jpg', 'image/jpeg', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', '', '555a71e6-8978-4b0c-b6df-4d84125f2f23'),
('555a7226-51a4-4d33-9b82-5db6125f2f23', '55572b2a-9ed0-4466-a270-0ecb125f2f23', '5 - 1 - Select project join (18 min).mp4', 'video/mp4', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', '', '555a7226-51a4-4d33-9b82-5db6125f2f23'),
('555a7226-369c-45c9-9596-5db6125f2f23', '55572b2a-9ed0-4466-a270-0ecb125f2f23', '5 - 2 - Set operators renaming notation (20 min).mp4', 'video/mp4', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', '', '555a7226-369c-45c9-9596-5db6125f2f23'),
('555a7526-dccc-4b09-ae01-5df0125f2f23', '55572b2a-9ed0-4466-a270-0ecb125f2f23', '5 - 2 - Set operators renaming notation (20 min).mp4', 'video/mp4', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', '', '555a7526-dccc-4b09-ae01-5df0125f2f23'),
('555a75e6-bb98-4fc8-8be0-5e5f125f2f23', '55572b2a-9ed0-4466-a270-0ecb125f2f23', '5 - 1 - Select project join (18 min).mp4', 'video/mp4', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', '', '555a75e6-bb98-4fc8-8be0-5e5f125f2f23');

-- --------------------------------------------------------

--
-- Table structure for table `axi_links`
--

CREATE TABLE IF NOT EXISTS `axi_links` (
  `id` char(36) NOT NULL,
  `subtopic_id` char(36) NOT NULL,
  `link_url` varchar(500) NOT NULL,
  `tags` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_links`
--

INSERT INTO `axi_links` (`id`, `subtopic_id`, `link_url`, `tags`) VALUES
('5559a793-bbac-44fb-99e8-0b41125f2f23', '55572b2a-9ed0-4466-a270-0ecb125f2f23', 'sdfaklfd', '11th english -> grammar -> verbs'),
('555a2a28-e5ec-4fdf-b5ca-3464125f2f23', '55572b2a-9ed0-4466-a270-0ecb125f2f23', '', '11th english -> grammar -> verbs'),
('555a2b6f-7998-4b9c-8754-3e76125f2f23', '55572b2a-9ed0-4466-a270-0ecb125f2f23', '', '11th english -> grammar -> verbs');

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
-- Table structure for table `axi_parents`
--

CREATE TABLE IF NOT EXISTS `axi_parents` (
  `id` char(36) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(80) NOT NULL,
  `address` text NOT NULL,
  `mobile` bigint(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `axi_standards`
--

CREATE TABLE IF NOT EXISTS `axi_standards` (
  `id` char(36) NOT NULL,
  `section` varchar(16) NOT NULL,
  `standard` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_standards`
--

INSERT INTO `axi_standards` (`id`, `section`, `standard`) VALUES
('55503091-9644-44a9-a6d6-0430125f2f23', 'secondary', 11),
('5550579c-77e0-4eca-9cb6-0d20125f2f23', 'higher secondary', 12);

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
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_students`
--

INSERT INTO `axi_students` (`id`, `first_name`, `last_name`, `birthdate`, `username`, `password`, `email`, `parent_email`, `mobile`, `parent_mobile`, `school`, `address`, `updated_at`) VALUES
('531f06b8-00bc-4107-aa63-1d24f1301e8a', 'lakhan', 'samani', '2014-03-11', 'a@gmail.com', 'd0339817ee550c87fbb80a459f3dcd4f56216117', 'a@gmail.com', 'b@gmail.com', 123123, 12312, 'msu', 'vadodara', '2014-03-11 12:51:04'),
('53200ee5-2418-4a18-8d9b-0648f1301e8a', 'Ritik', 'Khan', '2014-03-14', 'b@gmail.com', 'd0339817ee550c87fbb80a459f3dcd4f56216117', 'b@gmail.com', 'b@gmail.com', 23422, 43234, 'msu', 'agaere', '2014-03-12 07:38:13'),
('5321939b-727c-4095-b55b-0d48f1301e8a', 'Abhay', 'Patel', '2014-03-13', 'c@gmail.com', 'd0339817ee550c87fbb80a459f3dcd4f56216117', 'c@gmail.com', 'b@gmail.com', 1231231, 13131, 'msu', '', '2014-03-13 11:16:43'),
('532193eb-25b0-49c5-a501-0d48f1301e8a', 'asda', 'samani', '2014-03-11', 'd@gmail.com', '42f4def2565f344edaec6d456683a8674fe9a129', 'd@gmail.com', 'b@gmail.com', 23123, 1231, 'msu', '', '2014-03-13 11:18:03'),
('5333f653-9e38-46ab-a188-1e8cf1301e8a', 'Alpesh', 'nakrani', '2014-03-27', 'a@gmail.com', '42f4def2565f344edaec6d456683a8674fe9a129', 'a@gmail.com', 'a@gmail.com', 1234567890, 1234567890, 'msu', 'sdaf', '2014-03-27 09:58:43');

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

-- --------------------------------------------------------

--
-- Table structure for table `axi_subjects`
--

CREATE TABLE IF NOT EXISTS `axi_subjects` (
  `id` char(36) NOT NULL,
  `name` varchar(100) NOT NULL,
  `standard_id` char(36) NOT NULL,
  `display_name` varchar(100) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_subjects`
--

INSERT INTO `axi_subjects` (`id`, `name`, `standard_id`, `display_name`, `updated_at`, `updated_by`) VALUES
('555369e4-9700-4781-8a78-07e8125f2f23', 'english', '55503091-9644-44a9-a6d6-0430125f2f23', '11th english', '2015-05-13 15:12:36', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('555369eb-2cf8-4d3c-8603-07e8125f2f23', 'maths', '55503091-9644-44a9-a6d6-0430125f2f23', '11th maths', '2015-05-13 15:12:43', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('55560800-39d4-49c5-b190-128b125f2f23', 'Statistics', '5550579c-77e0-4eca-9cb6-0d20125f2f23', '12th Statistics', '2015-05-15 14:51:44', '53196213-e8c0-4b42-a3e3-19ecf1301e8a');

-- --------------------------------------------------------

--
-- Table structure for table `axi_subject_topics`
--

CREATE TABLE IF NOT EXISTS `axi_subject_topics` (
  `id` char(36) NOT NULL,
  `subject_id` char(36) NOT NULL,
  `topic_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_subject_topics`
--

INSERT INTO `axi_subject_topics` (`id`, `subject_id`, `topic_name`) VALUES
('555475e1-8c7c-4ca0-ab33-00c0125f2f23', '555369e4-9700-4781-8a78-07e8125f2f23', 'grammar'),
('55547622-fa70-4b33-92d4-00c0125f2f23', '555369eb-2cf8-4d3c-8603-07e8125f2f23', 'aacounts');

-- --------------------------------------------------------

--
-- Table structure for table `axi_sub_topics`
--

CREATE TABLE IF NOT EXISTS `axi_sub_topics` (
  `id` char(36) NOT NULL,
  `subject_topic_id` char(36) NOT NULL,
  `subtopic_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_sub_topics`
--

INSERT INTO `axi_sub_topics` (`id`, `subject_topic_id`, `subtopic_name`) VALUES
('55572b2a-9ed0-4466-a270-0ecb125f2f23', '555475e1-8c7c-4ca0-ab33-00c0125f2f23', 'verbs'),
('55572b8d-2d80-45b8-ace8-0edc125f2f23', '555475e1-8c7c-4ca0-ab33-00c0125f2f23', 'prepositions'),
('55574046-7468-4109-9232-0c78125f2f23', '555475e1-8c7c-4ca0-ab33-00c0125f2f23', 'pronouns');

-- --------------------------------------------------------

--
-- Table structure for table `axi_teachers`
--

CREATE TABLE IF NOT EXISTS `axi_teachers` (
  `id` char(36) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(80) NOT NULL,
  `address` text NOT NULL,
  `mobile` bigint(50) NOT NULL,
  `school` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for dumped tables
--

--
-- Indexes for table `axi_admins`
--
ALTER TABLE `axi_admins`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `axi_links`
--
ALTER TABLE `axi_links`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `axi_markingschemes`
--
ALTER TABLE `axi_markingschemes`
 ADD PRIMARY KEY (`id`), ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `axi_parents`
--
ALTER TABLE `axi_parents`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `axi_question_banks`
--
ALTER TABLE `axi_question_banks`
 ADD PRIMARY KEY (`id`), ADD KEY `updated_by` (`updated_by`), ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `axi_standards`
--
ALTER TABLE `axi_standards`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `axi_students`
--
ALTER TABLE `axi_students`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `axi_student_subject_mappings`
--
ALTER TABLE `axi_student_subject_mappings`
 ADD PRIMARY KEY (`id`), ADD KEY `updated_by` (`updated_by`), ADD KEY `subject_id` (`subject_id`), ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `axi_subjects`
--
ALTER TABLE `axi_subjects`
 ADD PRIMARY KEY (`id`), ADD KEY `updated_by` (`updated_by`), ADD KEY `standard` (`standard_id`);

--
-- Indexes for table `axi_subject_topics`
--
ALTER TABLE `axi_subject_topics`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `axi_sub_topics`
--
ALTER TABLE `axi_sub_topics`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `axi_teachers`
--
ALTER TABLE `axi_teachers`
 ADD PRIMARY KEY (`id`);

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
-- Constraints for dumped tables
--

--
-- Constraints for table `axi_markingschemes`
--
ALTER TABLE `axi_markingschemes`
ADD CONSTRAINT `axi_markingschemes_ibfk_1` FOREIGN KEY (`updated_by`) REFERENCES `axi_admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `axi_question_banks`
--
ALTER TABLE `axi_question_banks`
ADD CONSTRAINT `axi_question_banks_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `axi_subjects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `axi_question_banks_ibfk_2` FOREIGN KEY (`updated_by`) REFERENCES `axi_admins` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `axi_student_subject_mappings`
--
ALTER TABLE `axi_student_subject_mappings`
ADD CONSTRAINT `axi_student_subject_mappings_ibfk_1` FOREIGN KEY (`updated_by`) REFERENCES `axi_admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `axi_student_subject_mappings_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `axi_students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `axi_student_subject_mappings_ibfk_3` FOREIGN KEY (`subject_id`) REFERENCES `axi_subjects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `axi_subjects`
--
ALTER TABLE `axi_subjects`
ADD CONSTRAINT `axi_subjects_ibfk_1` FOREIGN KEY (`updated_by`) REFERENCES `axi_admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `axi_subjects_ibfk_2` FOREIGN KEY (`standard_id`) REFERENCES `axi_standards` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `axi_tests`
--
ALTER TABLE `axi_tests`
ADD CONSTRAINT `axi_tests_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `axi_subjects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `axi_tests_ibfk_2` FOREIGN KEY (`marking_scheme_id`) REFERENCES `axi_markingschemes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `axi_tests_ibfk_3` FOREIGN KEY (`updated_by`) REFERENCES `axi_admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `axi_test_question_mappings`
--
ALTER TABLE `axi_test_question_mappings`
ADD CONSTRAINT `axi_test_question_mappings_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `axi_question_banks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `axi_test_question_mappings_ibfk_2` FOREIGN KEY (`test_id`) REFERENCES `axi_tests` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `axi_test_question_mappings_ibfk_3` FOREIGN KEY (`updated_by`) REFERENCES `axi_admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
ADD CONSTRAINT `axi_test_student_mappings_ibfk_3` FOREIGN KEY (`updated_by`) REFERENCES `axi_admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `axi_test_student_results`
--
ALTER TABLE `axi_test_student_results`
ADD CONSTRAINT `axi_test_student_results_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `axi_students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `axi_test_student_results_ibfk_2` FOREIGN KEY (`test_id`) REFERENCES `axi_tests` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
