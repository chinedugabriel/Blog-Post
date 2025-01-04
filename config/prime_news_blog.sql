-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 04, 2025 at 10:28 AM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prime_news_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

DROP TABLE IF EXISTS `admin_users`;
CREATE TABLE IF NOT EXISTS `admin_users` (
  `admin_user_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`admin_user_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'Chinedu sebastin', 'chinedugabreil29@gmail.com', '123doTi'),
(2, 'demo_user', 'demouser@gmail.com', 'demo123');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `category_reg_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_reg_date`) VALUES
(1, 'sport', '2024-09-29 19:55:31'),
(2, 'Entertainment', '2024-09-29 19:55:55'),
(3, 'Travel', '2024-09-29 19:56:07'),
(4, 'politics', '2024-09-29 19:56:29'),
(5, 'culture', '2025-01-02 10:22:35'),
(6, 'Entertainment', '2025-01-02 10:23:23'),
(7, 'Religion', '2025-01-02 10:24:47'),
(8, 'Business', '2025-01-02 10:25:13'),
(9, 'Science', '2025-01-02 10:30:25'),
(10, 'Crime', '2025-01-02 10:30:38'),
(11, 'Lifestyle', '2025-01-02 10:31:01'),
(12, 'Local', '2025-01-02 10:31:21'),
(13, 'Global news', '2025-01-02 10:32:07');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `visitor_id` int(11) DEFAULT NULL,
  `visitor_comment_post` varchar(255) NOT NULL,
  `comment_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `reply_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `visitor_id` (`visitor_id`),
  KEY `reply_id` (`reply_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_title` varchar(255) NOT NULL,
  `post_description` varchar(255) NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `post_slider_status` varchar(10) DEFAULT NULL,
  `post_status` varchar(255) DEFAULT NULL,
  `post_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `admin_user_id` int(11) DEFAULT NULL,
  `comment_id` int(11) DEFAULT NULL,
  `post_categories` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`post_id`),
  KEY `admin_user_id` (`admin_user_id`),
  KEY `comment_id` (`comment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post_title`, `post_description`, `post_image`, `post_slider_status`, `post_status`, `post_date`, `admin_user_id`, `comment_id`, `post_categories`) VALUES
(49, 'Cum sed aute ratione', 'Sint praesentium ac', '../uploads/30217381.jpg', 'show', 'publish', '2024-11-25 20:56:59', 1, NULL, 'Sports'),
(50, 'Animi sed velit co', 'Officiis blanditiis', '../uploads/vlcsnap-2024-08-22-15h59m24s080.png', 'hide', 'publish', '2024-12-30 09:15:19', 1, NULL, 'Entertainment'),
(51, 'The passion of christ', 'Christ loves the world and you kpsfdnbvnsfjobvn eo lsdcop\'jsop\'fcbpobs csohbsd/hb y sdjvnospdbfvjbsdfou\'jvbosuwbdfvjl sfdn/v hs djo sljdf l sfdjop vjkdfsbvjpd f', '../uploads/4.jpg', 'show', 'publish', '2024-12-26 15:06:19', 1, NULL, 'Entertainment'),
(52, 'Emmily the Gost', 'Christ loves the world and you kpsfdnbvnsfjobvn eo lsdcop\'jsop\'fcbpobs csohbsd/hb y sdjvnospdbfvjbsdfou\'jvbosuwbdfvjl sfdn/v hs djo sljdf l sfdjop vjkdfsbvjpd Christ loves the world and y', '../uploads/logo_Bridge_of_Hope_v2.jpg', 'show', 'publish', '2024-12-26 14:59:44', 1, NULL, 'Entertainment');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

DROP TABLE IF EXISTS `reply`;
CREATE TABLE IF NOT EXISTS `reply` (
  `reply_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_user_id` int(11) DEFAULT NULL,
  `comment_id` int(11) DEFAULT NULL,
  `reply_message` varchar(255) NOT NULL,
  `reply_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`reply_id`),
  KEY `admin_user_id` (`admin_user_id`),
  KEY `comment_id` (`comment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

DROP TABLE IF EXISTS `visitors`;
CREATE TABLE IF NOT EXISTS `visitors` (
  `visitor_id` int(11) NOT NULL AUTO_INCREMENT,
  `visitor_name` varchar(255) NOT NULL,
  `visitor_email` varchar(255) NOT NULL,
  PRIMARY KEY (`visitor_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
