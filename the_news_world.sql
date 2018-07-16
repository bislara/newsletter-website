-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 16, 2018 at 01:10 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `the news world`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

DROP TABLE IF EXISTS `admin_user`;
CREATE TABLE IF NOT EXISTS `admin_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `name`, `email`, `username`, `password`, `register_date`) VALUES
(1, 'bislara', 'bislara@gmail.com', '123', '827ccb0eea8a706c4c34a16891f84e7b', '2018-06-28 07:47:47');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `post_id`, `name`, `body`, `created_at`) VALUES
(1, 1, 'lara', 'Go through the NITR website', '2018-07-05 10:16:56'),
(2, 2, 'john', 'Get a permission letter from doctor', '2018-07-05 10:17:59');

-- --------------------------------------------------------

--
-- Table structure for table `ask_a_question`
--

DROP TABLE IF EXISTS `ask_a_question`;
CREATE TABLE IF NOT EXISTS `ask_a_question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `authority` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ask_a_question`
--

INSERT INTO `ask_a_question` (`id`, `user_id`, `name`, `question`, `authority`) VALUES
(1, 2, 'lara', 'how to I book guest house', 'FacAd'),
(2, 2, 'john', 'How to apply for medical leave?', 'H.O.D');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`) VALUES
(1, 'Technology', '2018-06-03 11:10:27'),
(2, 'Entertainment', '2018-06-03 11:10:27');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `name`, `email`, `body`, `created_at`) VALUES
(1, 2, 'lara', 'lara@gmail.com', 'great post..', '2018-06-04 22:06:39'),
(2, 2, 'bro', 'hello@gmail.com', 'awesome job', '2018-06-04 22:11:54'),
(3, 3, 'john', 'biswajeetsahoo54@gmail.com', 'nice one', '2018-06-05 15:52:49'),
(4, 10, 'sambit', 'parida@gmail.com', 'awesome man..grand salute', '2018-06-06 18:15:29'),
(5, 8, 'lara', 'lara@gmail.com', 'good', '2018-06-06 20:07:20'),
(6, 8, 'unknown', 'abc@gmail.com', 'not good', '2018-06-06 20:08:48'),
(7, 10, 'parida', 'parida@gmail.com', 'good..', '2018-06-06 20:35:32'),
(9, 3, 'malkhan', 'malkhan@gmail.com', 'This comment api test', '2018-07-03 14:01:48'),
(14, 11, 'samba', 'samba@gmail.com', 'this is a comment of local post.. ', '2018-07-09 04:45:13');

-- --------------------------------------------------------

--
-- Table structure for table `discuss`
--

DROP TABLE IF EXISTS `discuss`;
CREATE TABLE IF NOT EXISTS `discuss` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `forum_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discuss`
--

INSERT INTO `discuss` (`id`, `forum_id`, `name`, `body`, `created_at`) VALUES
(1, 1, 'roshan', 'Is it easy?How many from a branch are allowed to change?How many to a branch are allowed to change?\r\nI wish to change to ECE from Food technology ', '2018-06-21 12:29:29'),
(2, 2, 'Subham', 'This is the best fest..welcome to NITR..well done..hope to see u soon..', '2018-06-24 06:54:47'),
(3, 2, 'sk patra', 'hiiiiiiiiiiiiiiiiiiiiiiiii', '2018-06-24 07:00:54'),
(4, 2, 'lara sahoo', 'byeeeee...', '2018-06-24 07:16:08'),
(5, 3, 'samba', 'mess food is not good..Go to Jo\'z.. n enjoy.', '2018-07-09 04:52:24');

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

DROP TABLE IF EXISTS `forum`;
CREATE TABLE IF NOT EXISTS `forum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reply` int(11) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`id`, `reply`, `title`, `username`, `slug`, `body`, `created_at`) VALUES
(1, 1, 'Branch change and difficulties', 'rocky', 'one', 'JEE Main Counselling & Seat Allotment is scheduled to start in the month of June 2018. JEE Main Counselling is held concurrently with JEE Advanced 2018 Counselling and is called as JoSAA. Joint Seat Allocation Authority (JoSAA) will handle the JEE Main counseling and seat allotment for the year 2018. By qualifying JEE Main 2018 Engineering Entrance Exam, candidates can get admission in various Under Graduate Courses in the field of engineering & architecture. The previous year, a number of 97 colleges and institutes participated in counselling held by JoSAA. Top Indian colleges like IITs, NITs & other institutions consider JEE Main score for granting admissions to applicants. To get an admission to any IITâ ', '2018-06-19 13:37:03'),
(2, 3, 'Nitrutasav 2018', 'subham', 'two', 'Why the article \"Rewinding the tape:Nitrutsav 2k18\" is removed from the website.It was a very good work from team MM for bringing the truth in front of NITR junta. ', '2018-06-19 13:39:12'),
(3, 1, 'Mess Food in Hostel', 'Sahoo', 'Mess-Food-in-Hostel', 'Mess food is becoming too worst day by day. It was also observed that caterers are not changed since long time but they just changed halls. I think losing the contract fear in catrer may increase food quality and food taste. Let us have a discussion on this topic ', '2018-06-20 10:50:07');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `featured` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `comments` int(11) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `post_image` varchar(255) NOT NULL DEFAULT 'noimage.jpg',
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `featured`, `user_id`, `views`, `comments`, `title`, `slug`, `post_image`, `body`, `created_at`) VALUES
(2, 2, 1, 0, 5, 2, 'Post Five', 'Post-Five', 'drone.jpg', '<p><strong>Hello</strong><strong> World I am Biswajeet Sahoo. this is edited.</strong>...... wtf..&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;</p>\r\n', '2018-06-04 08:37:15'),
(3, 2, 1, 0, 3, 2, 'Post Four', 'Post-Four', 'noimage.jpg', '<p><strong>Hello</strong><strong> World I am Biswajeet Sahoo. this is edited.</strong>...... hey bye.&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;</p>\r\n', '2018-06-02 05:10:03'),
(8, 1, 0, 2, 4, 0, 'post one', 'post-one', 'ask-question.jpg', '<p>this is post one</p>\r\n', '2018-06-05 15:55:59'),
(10, 2, 1, 2, 3, 2, 'post Two', 'post-Two', 'noimage.jpg', '<p><em><strong>Hello everyone...this is post two...</strong></em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>bye everyone..have a good day....kakdkaai</p>\r\n', '2018-06-06 18:14:19'),
(11, 1, 0, 3, 7, 1, 'local', 'local', 'baidu.jpg', '<p>&nbsp;</p>\r\n\r\n<p>kaodpapskdpa</p>\r\n', '2018-06-07 04:01:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `register_date`) VALUES
(1, 'rocky', 'rocky@gmail.com', 'rock', '827ccb0eea8a706c4c34a16891f84e7b', '2018-06-05 10:20:11'),
(2, 'lara', 'larasahoo@gmail.com', 'lara', '827ccb0eea8a706c4c34a16891f84e7b', '2018-06-05 14:03:18'),
(3, 'mahesh rana', 'mr33325@gmail.com', 'mr33325', 'e807f1fcf82d132f9bb018ca6738a19f', '2018-06-07 03:52:27'),
(4, 'bhuban', 'Vhuban12@gmail.com', 'rebel bhuban', 'ae6aa7365359bd7185be714b6e8270e0', '2018-06-07 15:54:43');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
