-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 31, 2015 at 08:30 AM
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
-- Table structure for table `axi_articles`
--

CREATE TABLE IF NOT EXISTS `axi_articles` (
  `id` char(36) NOT NULL,
  `title` text NOT NULL,
  `alias` text NOT NULL,
  `keywords` text NOT NULL,
  `meta_description` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_articles`
--

INSERT INTO `axi_articles` (`id`, `title`, `alias`, `keywords`, `meta_description`, `content`) VALUES
('5554f5c6-16bc-41e9-9af5-5995125f2f23', 'â€œàªœà«‡ àªªà«àª°àª•àª¾àª°àª¨à«àª‚ àª†àªšàª°àª£ àª¶à«àª°à«‡àª·à«àª  (àª…àª¹à«€àª‚ â€™àª­àª£à«‡àª²àª¾â€™)àª²à«‹àª•à«‹ àª•àª°à«‡ àª›à«‡ àª¤à«‡ àªªà«àª°àª•àª¾àª°àª¨à«àª‚ àª†àªšàª°àª£ àª¬àª¾àª•à«€àª¨àª¾ àª…àª¨à«àª¸àª°à«‡ àª›à«‡â€', 'home', 'home', 'home', '<div class="row">\r\n<div class="columns large-7">\r\n<p>àªœà«‡àª® àªœà«‡àª® àª†àªªàª£à«‡ &lsquo;àªˆ&rsquo;- àª¯à«àª—àª®àª¾àª‚ àª†àª—àª³ àª§àªªàª¤àª¾ àªœàªˆàª àª›à«€àª; àª¤à«‡àª® àª¤à«‡àª® àª–àª°à«€àª¦à«€, àª¸àª‚àª¦à«‡àª¶àª¾ àªµà«àª¯àªµàª¹àª¾àª°, àªŸàª¿àª•à«€àªŸà«‹ àª–àª°à«€àª¦àªµà«€, àªàªµàª¾àª‚ àª˜àª£àª¾àª‚ àª°à«‹àªœàª¿àª‚àª¦àª¾ àª•àª¾àª®à«‹àª®àª¾àª‚ àª†àªªàª£à«‡ àª‡àª¨à«àªŸàª°àª¨à«‡àªŸ àªªàª° àªµàª§àª¾àª°à«‡ àª¨à«‡ àªµàª§àª¾àª°à«‡ àª†àª§àª¾àª° àª°àª¾àª–àª¤àª¾ àª¥àªµàª¾ àª²àª¾àª—à«àª¯àª¾ àª›à«€àª. àª†àª¨à«‡ àª•àª¾àª°àª£à«‡ àª¶à«€àª–àªµàª¾àª¨à«€ àª†àªªàª£à«€ àªªàª§à«àª§àª¤àª¿àª®àª¾àª‚ àªªàª£ àª¬àª¦àª²àª¾àªµ àª†àªµàªµàª¾ àª²àª¾àª—à«àª¯à«‹ àª›à«‡.àªˆ-àªµàª¿àª¦à«àª¯àª¾àª²àª¯ àª†àªµàª¾ àªœ àªàª• àª¬àª¦àª²àª¾àªµ àª¤àª°àª«àª¨à«‹ àªªà«àª°àª¾àª®àª¾àª£àª¿àª• àªªà«àª°àª¯àª¤à«àª¨ àª›à«‡ - àª¶à«€àª–àªµàª¾àª¨à«€ àª°à«€àª¤àª®àª¾àª‚ àªªàª°àª¿àªµàª°à«àª¤àª¨ àª†àªµà«‡, àª¤à«‡ àª®àª¾àªŸà«‡àª¨à«‹ àªªà«àª°àª¯àª¾àª¸. àª†àª¶àª¯ àª àª›à«‡ àª•à«‡, àª¨àªµà«àª‚ àªœà«àªžàª¾àª¨ àª¸àª®àªœàªµàª¾àª¨à«€ àªªà«àª°àª•à«àª°àª¿àª¯àª¾ àª¸àª°àª³ àª¬àª¨à«€ àªœàª¾àª¯; àª¤à«‡ àªµàª¿àª¦à«àª¯àª¾àª°à«àª¥à«€àª¨à«‡ àª®àª¾àªŸà«‡ àª–à«àª¬ àª¸àª°àª³ àª¹à«‹àª¯ àª…àª¨à«‡ àª°àª¸ àªªàª¡à«‡ àª¤à«‡àªµà«€ àªªàª£ àª¹à«‹àª¯ àª…àª¨à«‡ àª›àª¤àª¾àª‚ àª¤à«‡àª®àª¾àª‚ àª¸àª®àª¯ àª…àª¨à«‡ àªœàª—à«àª¯àª¾àª¨à«àª‚ àª¬àª‚àª§àª¨ àª¨ àª°àª¹à«‡.</p>\r\n<p>àªˆ-àªµàª¿àª¦à«àª¯àª¾àª²àª¯àª®àª¾àª‚ àª¹àª¾àª² àªªà«àª°àª¾àª¥àª®àª¿àª• àª…àª¨à«‡ àª®àª¾àª§à«àª¯àª®àª¿àª• àª¶àª¿àª•à«àª·àª£ àª®àª¾àªŸà«‡àª¨à«€ àªàª• àª“àª¨ àª²àª¾àªˆàª¨ àªµàª¿àª¡àª¿àª¯à«‹ àª²àª¾àª¯àª¬à«àª°à«‡àª°à«€ àª›à«‡.àª¤à«‡àª®àª¾àª‚ àª¹àª¾àª² àª—àª£àª¿àª¤, àªàª¡àªªà«€ àª—àª£àª¤àª°à«€ àª…àª¨à«‡ àª—à«àªœàª°àª¾àª¤à«€àª¨àª¾ àªªà«àª°àª¾àª°àª‚àª­àª¿àª• àª¶àª¿àª•à«àª·àª£àª¨à«‡ àª²àª—àª¤àª¾ àªµàª¿àª¡àª¿àª¯à«‹ àª®à«‹àªœà«‚àª¦ àª›à«‡.àª¤àª®àª¾àª°àª¾ àª¤àª°àª«àª¥à«€ àª®àª³àª¤àª¾ àª«à«€àª¡àª¬à«‡àª• ( àªªà«àª°àª¤àª¿àª­àª¾àªµà«‹ àª…àª¨à«‡ àª¸à«‚àªšàª¨à«‹) àª§à«àª¯àª¾àª¨àª®àª¾àª‚ àª°àª¾àª–à«€àª¨à«‡ àª† àªµàª¿àª¡àª¿àª¯à«‹ àª²àª¾àª¯àª¬à«àª°à«‡àª°à«€àª®àª¾àª‚ àª¸àª¤àª¤ àª¸àª‚àªµàª°à«àª§àª¨ àª…àª¨à«‡ àª«à«‡àª°àª«àª¾àª° àªªàª£ àª¥àªˆ àª°àª¹à«àª¯àª¾ àª›à«‡.</p>\r\n<p>àª àª¨à«‹àª‚àª§àªµàª¾ àª²àª¾àª¯àª• àª›à«‡ àª•à«‡,<a href="http://evidyalay.net/evidyalayyoutubeedu/">àª¯à«-àªŸà«àª¯à«àª¬ àª¸àª‚àª¸à«àª¥àª¾àª¨àª¾ àª¶àª¿àª•à«àª·àª£àª¾àª¤à«àª®àª• àªµàª¿àª­àª¾àª—</a>&nbsp;àª¤àª°àª«àª¥à«€ àªˆ-àªµàª¿àª¦à«àª¯àª¾àª²àª¯àª¨à«‡ àª®àª¾àª¨à«àª¯àª¤àª¾ àª®àª³à«‡àª²à«€ àª›à«‡.</p>\r\n</div>\r\n<div class="columns large-5"><iframe src="https://www.youtube.com/embed/R7nk2emAVG0?list=PLB4CEAC5DC720AAB9" frameborder="0" width="100%" height="270"></iframe></div>\r\n</div>'),
('5555090f-5788-48f9-8844-5c79125f2f23', 'About EVidyalay', 'about_us', 'about_us', 'about_us', '<p>As we all move in the new era of &ldquo;e&rdquo;, where internet is the key enabler for majority of the day to day things, right from shopping, communicating, tickets, so on and so forth.<br />This has initiated a change in the way of learning as well.<br />EVidyalay is one more sincere attempt to drive the change in the way of learning so that the learning becomes simple, more users friendly and interesting.<br />EVidyalay is an online video library of Mathematics, Vedic Maths and Early learning Gujarati. The video library is under continuous development taking into consideration your feedbacks. EVidyalay&rsquo;s vision is to make education accessible to all children, which is repeatable as well as independent of time and location. Children should be able to learn anytime, anywhere at their own pace.</p>\r\n<p>EVidyalay also hosts 3 interesting features. 1. &lsquo;JIVAN CHARITRA (Biography)&rsquo;, a collection of inspiring stories of Legendary lives. This will help build value system and overall development of children, 2. &lsquo;Hobby Lobby&rsquo;, to ignite Creativity, an essential skill for effective learning. 3) &lsquo;Mahiti Mitra&rsquo;, to give friendly educational information.</p>\r\n<p>Evidyalay has got acceptance from&nbsp;<span><a href="http://evidyalay.net/evidyalayyoutubeedu/">YouTube EDU(The Global Classroom).</a></span></p>'),
('555509e0-8924-4337-b2eb-5b46125f2f23', 'Vision', 'vision', 'vision', 'vision', '<p>&nbsp;&lsquo;Education is a key to progress.&rsquo; &ndash; is a very well known saying; though there are other dimensions too. It is education and pursuant zeal and inquisitiveness to know and explore the unknown that open the door to knowledge and awakening.</p>\r\n<p>With the advent of human mind into fathomless depths of knowledge, the human societies have evolved into more and more complex structures and directions; and they are still evolving at a much greater pace. What quality and dimension the human societies will shape into &ndash; say after 50 or 100 years &ndash; is mind boggling. We feel awed at the achievements of human mind in multifarious directions.</p>\r\n<p>We also feel awfully sorry for the immense harm the same human mind has done to the environment, the biomes, animal and vegetation species and last but not the least, the human societies themselves.</p>\r\n<p>Schools are abodes for learning processes, right from the dawn of civilization; and are the cradles of this development of human mind. The task of a teacher &ndash; to prepare a child to come up to a measurable standard tto acquire at least a part existing knowledge base and be armed to venture into the unknown &ndash; is becoming more and more onerous.</p>\r\n<p>At the same time, we feel ashamed at the degeneration of the education system; which aims only at preparing students for a race to acquire prosperity and recognition. Development of rudimentary scholastic qualities unfortunately gets a secondary importance.</p>\r\n<p>It is in this light that the spirit of &lsquo;E-Vidyalay&rsquo; may be interpreted. It aims at nurturing the qualities of fresh thought, creativity, honest inquisitiveness and last but not the least, the fundamentally built in human and moral values. The following video aptly focuses our attention on this spirit.</p>\r\n<div>&lt;iframe style="height:800px;width:100%" src="https://www.youtube.com/embed/hi0dWqK00Nw" frameborder="0" allowfullscreen&gt;&lt;/iframe&gt;</div>\r\n<p>Hiral&rsquo;s output of&nbsp;<span><span>2 years (280+ quality&nbsp;educational videos)</span></span>&nbsp;is no doubt a commendable effort. How far she has succeeded can only be judged, if the approach is implemented by students, teachers and parents; and whether it is effective. But more noticeable fact , is her urge to evolve a new approach in the method of imparting knowledge. It is an initiative in the right direction. It is also possible that new avenues of education system may evolve by the interactions; E-Vidyalay is going to generate amongst its audience. The theatre here is open for a creative and refreshing play.</p>\r\n<p>Let it generate fun, quest, creativity and fresh thought. Let thousand blooms blossom and door to a<span><span>&nbsp;new way of &lsquo;How to live life?&rsquo;</span></span>&nbsp;open up.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `axi_levels`
--

CREATE TABLE IF NOT EXISTS `axi_levels` (
  `id` char(36) NOT NULL,
  `level_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_levels`
--

INSERT INTO `axi_levels` (`id`, `level_name`) VALUES
('5568340b-2a04-474b-9568-326f125f2f23', 'Primary');

-- --------------------------------------------------------

--
-- Table structure for table `axi_links`
--

CREATE TABLE IF NOT EXISTS `axi_links` (
  `id` char(36) NOT NULL,
  `topic_id` char(36) NOT NULL,
  `link_title` varchar(100) NOT NULL,
  `link_url` varchar(500) NOT NULL,
  `tags` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_links`
--

INSERT INTO `axi_links` (`id`, `topic_id`, `link_title`, `link_url`, `tags`) VALUES
('556aa850-7de0-46e5-a066-101d125f2f23', '556aa68d-0198-462b-9ddb-101e125f2f23', 'Circle', 'geometry.com', 'asfsdfds');

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
-- Table structure for table `axi_news_letters`
--

CREATE TABLE IF NOT EXISTS `axi_news_letters` (
  `id` char(36) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_news_letters`
--

INSERT INTO `axi_news_letters` (`id`, `title`, `content`, `date`, `user_id`) VALUES
('556430fa-9b0c-4ed5-8c3f-0460125f2f23', 'EV latest update-1', '<p>àªœà«‡àª® àªœà«‡àª® àª†àªªàª£à«‡ &lsquo;àªˆ&rsquo;- àª¯à«àª—àª®àª¾àª‚ àª†àª—àª³ àª§àªªàª¤àª¾ àªœàªˆàª àª›à«€àª; àª¤à«‡àª® àª¤à«‡àª® àª–àª°à«€àª¦à«€, àª¸àª‚àª¦à«‡àª¶àª¾ àªµà«àª¯àªµàª¹àª¾àª°, àªŸàª¿àª•à«€àªŸà«‹ àª–àª°à«€àª¦àªµà«€, àªàªµàª¾àª‚ àª˜àª£àª¾àª‚ àª°à«‹àªœàª¿àª‚àª¦àª¾ àª•àª¾àª®à«‹àª®àª¾àª‚ àª†àªªàª£à«‡ àª‡àª¨à«àªŸàª°àª¨à«‡àªŸ àªªàª° àªµàª§àª¾àª°à«‡ àª¨à«‡ àªµàª§àª¾àª°à«‡ àª†àª§àª¾àª° àª°àª¾àª–àª¤àª¾ àª¥àªµàª¾ àª²àª¾àª—à«àª¯àª¾ àª›à«€àª. àª†àª¨à«‡ àª•àª¾àª°àª£à«‡ àª¶à«€àª–àªµàª¾àª¨à«€ àª†àªªàª£à«€ àªªàª§à«àª§àª¤àª¿àª®àª¾àª‚ àªªàª£ àª¬àª¦àª²àª¾àªµ àª†àªµàªµàª¾ àª²àª¾àª—à«àª¯à«‹ àª›à«‡. <br /> àªˆ-àªµàª¿àª¦à«àª¯àª¾àª²àª¯ àª†àªµàª¾ àªœ àªàª• àª¬àª¦àª²àª¾àªµ àª¤àª°àª«àª¨à«‹ àªªà«àª°àª¾àª®àª¾àª£àª¿àª• àªªà«àª°àª¯àª¤à«àª¨ àª›à«‡ - àª¶à«€àª–àªµàª¾àª¨à«€ àª°à«€àª¤àª®àª¾àª‚ àªªàª°àª¿àªµàª°à«àª¤àª¨ àª†àªµà«‡, àª¤à«‡ àª®àª¾àªŸà«‡àª¨à«‹ àªªà«àª°àª¯àª¾àª¸. àª†àª¶àª¯ àª àª›à«‡ àª•à«‡, àª¨àªµà«àª‚ àªœà«àªžàª¾àª¨ àª¸àª®àªœàªµàª¾àª¨à«€ àªªà«àª°àª•à«àª°àª¿àª¯àª¾ àª¸àª°àª³ àª¬àª¨à«€ àªœàª¾àª¯; àª¤à«‡ àªµàª¿àª¦à«àª¯àª¾àª°à«àª¥à«€àª¨à«‡ àª®àª¾àªŸà«‡ àª–à«àª¬ àª¸àª°àª³ àª¹à«‹àª¯ àª…àª¨à«‡ àª°àª¸ àªªàª¡à«‡ àª¤à«‡àªµà«€ àªªàª£ àª¹à«‹àª¯ àª…àª¨à«‡ àª›àª¤àª¾àª‚ àª¤à«‡àª®àª¾àª‚ àª¸àª®àª¯ àª…àª¨à«‡ àªœàª—à«àª¯àª¾àª¨à«àª‚ àª¬àª‚àª§àª¨ àª¨ àª°àª¹à«‡. <br /> àªˆ-àªµàª¿àª¦à«àª¯àª¾àª²àª¯àª®àª¾àª‚ àª¹àª¾àª² àªªà«àª°àª¾àª¥àª®àª¿àª• àª…àª¨à«‡ àª®àª¾àª§à«àª¯àª®àª¿àª• àª¶àª¿àª•à«àª·àª£ àª®àª¾àªŸà«‡àª¨à«€ àªàª• àª“àª¨ àª²àª¾àªˆàª¨ àªµàª¿àª¡àª¿àª¯à«‹ àª²àª¾àª¯àª¬à«àª°à«‡àª°à«€ àª›à«‡.àª¤à«‡àª®àª¾àª‚ àª¹àª¾àª² àª—àª£àª¿àª¤, àªàª¡àªªà«€ àª—àª£àª¤àª°à«€ àª…àª¨à«‡ àª—à«àªœàª°àª¾àª¤à«€àª¨àª¾ àªªà«àª°àª¾àª°àª‚àª­àª¿àª• àª¶àª¿àª•à«àª·àª£àª¨à«‡ àª²àª—àª¤àª¾ àªµàª¿àª¡àª¿àª¯à«‹ àª®à«‹àªœà«‚àª¦ àª›à«‡.àª¤àª®àª¾àª°àª¾ àª¤àª°àª«àª¥à«€ àª®àª³àª¤àª¾ àª«à«€àª¡àª¬à«‡àª• ( àªªà«àª°àª¤àª¿àª­àª¾àªµà«‹ àª…àª¨à«‡ àª¸à«‚àªšàª¨à«‹) àª§à«àª¯àª¾àª¨àª®àª¾àª‚ àª°àª¾àª–à«€àª¨à«‡ àª† àªµàª¿àª¡àª¿àª¯à«‹ àª²àª¾àª¯àª¬à«àª°à«‡àª°à«€àª®àª¾àª‚ àª¸àª¤àª¤ àª¸àª‚àªµàª°à«àª§àª¨ àª…àª¨à«‡ àª«à«‡àª°àª«àª¾àª° àªªàª£ àª¥àªˆ àª°àª¹à«àª¯àª¾ àª›à«‡. <br /> <strong>àª àª¨à«‹àª‚àª§àªµàª¾ àª²àª¾àª¯àª• àª›à«‡ àª•à«‡,<a href="http://evidyalay.net/evidyalayyoutubeedu/">àª¯à«-àªŸà«àª¯à«àª¬ àª¸àª‚àª¸à«àª¥àª¾àª¨àª¾ àª¶àª¿àª•à«àª·àª£àª¾àª¤à«àª®àª• àªµàª¿àª­àª¾àª—</a> àª¤àª°àª«àª¥à«€ àªˆ-àªµàª¿àª¦à«àª¯àª¾àª²àª¯àª¨à«‡ àª®àª¾àª¨à«àª¯àª¤àª¾ àª®àª³à«‡àª²à«€ àª›à«‡.</strong></p>', '2015-05-26 08:38:18', '53196213-e8c0-4b42-a3e3-19ecf1301e8a');

-- --------------------------------------------------------

--
-- Table structure for table `axi_parents`
--

CREATE TABLE IF NOT EXISTS `axi_parents` (
  `id` char(36) NOT NULL,
  `parent_data` text NOT NULL
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
  `path` varchar(100) DEFAULT NULL,
  `path_dir` varchar(200) DEFAULT NULL,
  `topic_id` char(36) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `axi_students`
--

CREATE TABLE IF NOT EXISTS `axi_students` (
  `id` char(36) NOT NULL,
  `school` varchar(100) DEFAULT NULL,
  `user_id` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_students`
--

INSERT INTO `axi_students` (`id`, `school`, `user_id`) VALUES
('5561c76e-ee1c-44bf-af4e-01bf125f2f23', NULL, '5561c5af-8890-4d1d-b708-01be125f2f23'),
('556348ba-c124-4fb2-b7c8-01f6125f2f23', NULL, '556348ba-76c4-488b-a3e8-01f6125f2f23'),
('5568802f-2e80-4ebb-a026-326d125f2f23', NULL, '5568802f-cd70-4325-b47a-326d125f2f23');

-- --------------------------------------------------------

--
-- Table structure for table `axi_student_subject_mappings`
--

CREATE TABLE IF NOT EXISTS `axi_student_subject_mappings` (
  `id` char(36) NOT NULL,
  `student_id` char(36) NOT NULL,
  `topic_id` char(36) NOT NULL,
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
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_subjects`
--

INSERT INTO `axi_subjects` (`id`, `name`, `updated_at`, `updated_by`) VALUES
('55682636-b5d4-4804-adc4-326d125f2f23', 'Mathematics', '2015-05-31 06:29:24', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('556aaa3b-8de4-4597-9181-0f2a125f2f23', 'English', '2015-05-31 06:29:15', '53196213-e8c0-4b42-a3e3-19ecf1301e8a');

-- --------------------------------------------------------

--
-- Table structure for table `axi_teachers`
--

CREATE TABLE IF NOT EXISTS `axi_teachers` (
  `id` char(36) NOT NULL,
  `teacher_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `axi_test_applications`
--

CREATE TABLE IF NOT EXISTS `axi_test_applications` (
  `id` char(36) NOT NULL,
  `student_id` char(36) NOT NULL,
  `topic_id` char(36) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `axi_test_results`
--

CREATE TABLE IF NOT EXISTS `axi_test_results` (
  `id` char(36) NOT NULL,
  `test_id` char(36) NOT NULL,
  `question_id` char(36) NOT NULL,
  `result` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `axi_topics`
--

CREATE TABLE IF NOT EXISTS `axi_topics` (
  `id` char(36) NOT NULL,
  `name` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` char(36) NOT NULL,
  `subject_id` char(36) NOT NULL,
  `level_id` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_topics`
--

INSERT INTO `axi_topics` (`id`, `name`, `updated_at`, `updated_by`, `subject_id`, `level_id`) VALUES
('556aa68d-0198-462b-9ddb-101e125f2f23', 'Geometry', '2015-05-31 06:13:33', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', '55682636-b5d4-4804-adc4-326d125f2f23', '5568340b-2a04-474b-9568-326f125f2f23');

-- --------------------------------------------------------

--
-- Table structure for table `axi_users`
--

CREATE TABLE IF NOT EXISTS `axi_users` (
  `id` char(36) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fb_token` varchar(50) DEFAULT NULL,
  `google_token` varchar(50) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_type` char(36) DEFAULT NULL,
  `path` text,
  `path_dir` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_users`
--

INSERT INTO `axi_users` (`id`, `name`, `username`, `password`, `fb_token`, `google_token`, `created`, `user_type`, `path`, `path_dir`) VALUES
('5561c5af-8890-4d1d-b708-01be125f2f23', 'Lakhan Samani', 'lakhan.m.samani@gmail.com', '39dea93b8f5e606c5fa3a62859d5af337561905d', NULL, NULL, '2015-05-24 07:05:59', 'cb6f8154-fbbc-11e4-b148-01f8d649e9b6', 'p_2.jpg', '5561c5af-8890-4d1d-b708-01be125f2f23'),
('556348ba-76c4-488b-a3e8-01f6125f2f23', 'Lakhan Samani', 'lakhan.samani@actonate.com', '39dea93b8f5e606c5fa3a62859d5af337561905d', NULL, NULL, '2015-05-25 10:37:22', 'cb6f8154-fbbc-11e4-b148-01f8d649e9b6', NULL, NULL),
('5568802f-cd70-4325-b47a-326d125f2f23', 'Kashyap', 'kashyap@gmail.com', '39dea93b8f5e606c5fa3a62859d5af337561905d', NULL, NULL, '2015-05-29 09:35:19', 'cb6f8154-fbbc-11e4-b148-01f8d649e9b6', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `axi_user_types`
--

CREATE TABLE IF NOT EXISTS `axi_user_types` (
  `id` char(36) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_user_types`
--

INSERT INTO `axi_user_types` (`id`, `name`) VALUES
('cb6f8154-fbbc-11e4-b148-01f8d649e9b6', 'student'),
('cb6f95fe-fbbc-11e4-b148-01f8d649e9b6', 'teacher'),
('d0cf96fc-fbbc-11e4-b148-01f8d649e9b6', 'parent');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `axi_admins`
--
ALTER TABLE `axi_admins`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `axi_articles`
--
ALTER TABLE `axi_articles`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `axi_levels`
--
ALTER TABLE `axi_levels`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `axi_links`
--
ALTER TABLE `axi_links`
 ADD PRIMARY KEY (`id`), ADD KEY `subtopic_id` (`topic_id`);

--
-- Indexes for table `axi_markingschemes`
--
ALTER TABLE `axi_markingschemes`
 ADD PRIMARY KEY (`id`), ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `axi_news_letters`
--
ALTER TABLE `axi_news_letters`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `axi_parents`
--
ALTER TABLE `axi_parents`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `axi_question_banks`
--
ALTER TABLE `axi_question_banks`
 ADD PRIMARY KEY (`id`), ADD KEY `subject_id` (`topic_id`);

--
-- Indexes for table `axi_students`
--
ALTER TABLE `axi_students`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `user_id_2` (`user_id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `axi_student_subject_mappings`
--
ALTER TABLE `axi_student_subject_mappings`
 ADD PRIMARY KEY (`id`), ADD KEY `updated_by` (`updated_by`), ADD KEY `subject_id` (`topic_id`), ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `axi_subjects`
--
ALTER TABLE `axi_subjects`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `axi_teachers`
--
ALTER TABLE `axi_teachers`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `axi_test_applications`
--
ALTER TABLE `axi_test_applications`
 ADD PRIMARY KEY (`id`), ADD KEY `student_id` (`student_id`), ADD KEY `subject_id` (`topic_id`);

--
-- Indexes for table `axi_test_results`
--
ALTER TABLE `axi_test_results`
 ADD PRIMARY KEY (`id`), ADD KEY `test_id` (`test_id`), ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `axi_topics`
--
ALTER TABLE `axi_topics`
 ADD PRIMARY KEY (`id`), ADD KEY `updated_by` (`updated_by`), ADD KEY `subject_id` (`subject_id`), ADD KEY `level_id` (`level_id`);

--
-- Indexes for table `axi_users`
--
ALTER TABLE `axi_users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `google_token` (`google_token`), ADD KEY `user_type` (`user_type`), ADD KEY `user_type_2` (`user_type`);

--
-- Indexes for table `axi_user_types`
--
ALTER TABLE `axi_user_types`
 ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `axi_links`
--
ALTER TABLE `axi_links`
ADD CONSTRAINT `axi_links_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `axi_topics` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `axi_markingschemes`
--
ALTER TABLE `axi_markingschemes`
ADD CONSTRAINT `axi_markingschemes_ibfk_1` FOREIGN KEY (`updated_by`) REFERENCES `axi_admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `axi_news_letters`
--
ALTER TABLE `axi_news_letters`
ADD CONSTRAINT `axi_news_letters_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `axi_admins` (`id`);

--
-- Constraints for table `axi_question_banks`
--
ALTER TABLE `axi_question_banks`
ADD CONSTRAINT `axi_question_banks_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `axi_topics` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `axi_students`
--
ALTER TABLE `axi_students`
ADD CONSTRAINT `axi_students_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `axi_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `axi_student_subject_mappings`
--
ALTER TABLE `axi_student_subject_mappings`
ADD CONSTRAINT `axi_student_subject_mappings_ibfk_1` FOREIGN KEY (`updated_by`) REFERENCES `axi_admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `axi_student_subject_mappings_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `axi_students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `axi_student_subject_mappings_ibfk_3` FOREIGN KEY (`topic_id`) REFERENCES `axi_topics` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `axi_test_applications`
--
ALTER TABLE `axi_test_applications`
ADD CONSTRAINT `axi_test_applications_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `axi_students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `axi_test_applications_ibfk_2` FOREIGN KEY (`topic_id`) REFERENCES `axi_topics` (`id`);

--
-- Constraints for table `axi_topics`
--
ALTER TABLE `axi_topics`
ADD CONSTRAINT `axi_topics_ibfk_1` FOREIGN KEY (`updated_by`) REFERENCES `axi_admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `axi_topics_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `axi_subjects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `axi_topics_ibfk_3` FOREIGN KEY (`level_id`) REFERENCES `axi_levels` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `axi_users`
--
ALTER TABLE `axi_users`
ADD CONSTRAINT `axi_users_ibfk_1` FOREIGN KEY (`user_type`) REFERENCES `axi_user_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
