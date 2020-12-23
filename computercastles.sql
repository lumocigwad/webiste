-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2019 at 07:40 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `computercastles`
--

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` int(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `job_introduction` varchar(255) NOT NULL,
  `job_description` longtext NOT NULL,
  `responsibilities` longtext NOT NULL,
  `qualifications` longtext NOT NULL,
  `published` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `job_title`, `job_introduction`, `job_description`, `responsibilities`, `qualifications`, `published`) VALUES
(1, 'Senior Product Manager', 'Get it up and running on your website in minutes, and easily customise colours and content using Page builder. Try it now!', '\r\n\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis lobortis purus sed risus euismod, ac accumsan lectus congue. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce quis mauris turpis. Nulla non massa eget quam gravida auctor. Praesent eget dignissim orci. Praesent nec posuere tortor now use Lorem Ipsum.', '\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis lobortis purus sed risus euismod, ac accumsan lectus congue. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce quis mauris turpis. Nulla non massa eget quam gravida auctor. Praesent eget dignissim orci. Praesent nec posuere tortor now use Lorem Ipsum.\r\n\r\nCurabitur non imperdiet justo. Mauris faucibus enim urna, in tempus neque gravida vestibulum. Curabitur facilisis est sem, vitae dapibus eros lobortis eu. Sed suscipit libero posuere, pulvinar felis\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis lobortis purus sed risus euismod, ac accumsan lectus congue. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce quis mauris turpis. Nulla non massa eget quam gravida auctor. Praesent eget dignissim orci. Praesent nec posuere tortor now use Lorem Ipsum.\r\n\r\nCurabitur non imperdiet justo. Mauris faucibus enim urna, in tempus neque gravida vestibulum. Curabitur facilisis est sem, vitae dapibus eros lobortis eu. Sed suscipit libero posuere, pulvinar felis', 1),
(15, 'DEQSQ', '', '<p>xvjhbkml</p>\r\n', '', '', 1),
(16, 'DEVELOPER', '', '<p>gbdfbdfb</p>\r\n', '', '', 1),
(17, '2019-08-08', '', '<p>fjgyku</p>\r\n', '', '', 1),
(18, 'DEQSQ', '', '<p>dfhdtfhdtf</p>\r\n', '', '', 1),
(19, 'DEQSQ', '', '<p>dfgdfg</p>\r\n', '', '', 1),
(20, 'DEVELOPER', '', '<p>cvxcbd</p>\r\n', '', '', 1),
(21, 'DEQSQ', '', '<p>&nbsp;c&nbsp;</p>\r\n', '', '', 1),
(22, '2019-08-08', '', '<p>xzxv zx</p>\r\n', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `content` longtext NOT NULL,
  `published` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `slug`, `image`, `views`, `content`, `published`, `created_at`, `updated_at`) VALUES
(1, 1, '5 HABITS THAT CAN IMPROVE YOUR LIFE  JKL', '5-habits-that-can-improve-your-life', '', 11, 'Read every day zuydvd', 0, '2019-08-12 15:38:21', '2019-07-30 09:58:02'),
(2, 1, 'SECOND POST ON LIFEBLOG WE', 'second-post-on-lifeblog', '', 4, 'This is the body of the second post on this site', 1, '2019-08-12 14:48:52', '2019-07-30 09:58:02');

-- --------------------------------------------------------

--
-- Table structure for table `post_topic`
--

CREATE TABLE `post_topic` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_topic`
--

INSERT INTO `post_topic` (`id`, `post_id`, `topic_id`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `firstname`, `lastname`, `email`, `status`, `phone`, `photo`, `title`, `description`) VALUES
(2, 'LAURU', 'MINAYOU', 'lumocigwad@gmail.comu', 1, '34354', 'aboutus-team2.jpg', '2019-08-08', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(3, 'FELIX', 'NAMUTARE', 'felix@gmail.com', 0, '53453423', '1.jpg', '2019-08-08', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(4, 'LUCY', 'NJUHI', 'lucy@gmail.com', 0, '53453423', 'p5-1.png', '2019-08-08', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(5, 'WE', 'RT', 'sechere@mail.com', 1, '534534', 'aboutus-team3.jpg', '2019-08-08', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(6, 'ENOCK', 'BASIGWA', 'enock@gmail.com', 0, '3456', 'afrikana.jpg', 'Developer', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(7, 'LAURA1', 'MINAYOP0', 'jermains@computercastlesltd.co.ke', 0, '34354', 'amazon-fire-hd-8-tablet-alexa-2017-16-gb-black - Copy.jpg', 'Developer', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(8, 'LAURA1', 'MINAYOP0', 'lumocigwad@gmail.com', 1, '6676', 'amazon-fire-hd-8-tablet-alexa-2017-16-gb-black - Copy.jpg', 'Developer', '<p>dqdq<strong>cscscscscc<span class=\"marker\">scscsdc</span></strong></p>\r\n'),
(9, 'SSS', 'MINAYOP0', 'sechqere@mail.com', 1, '6676', 'amazon-fire-hd-8-tablet-alexa-2017-16-gb-black - Copy.jpg', 'Developer', '<h1>saxssxx<span class=\"marker\">xwsxqwx</span></h1>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `slug`) VALUES
(1, 'Inspiration', 'inspiration'),
(2, 'Motivation', 'motivation'),
(3, 'Diary', 'diary');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` enum('Author','Admin') DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `email`, `role`, `password`, `created_at`, `updated_at`, `country`) VALUES
(1, '', '', 'jermaine', 'jermains@computercastlesltd.co.ke', 'Admin', 'jermaine1902', '2019-07-30 09:52:58', '2019-07-30 09:52:58', ''),
(2, '', '', 'Sechere', 'sechere@mail.com', NULL, 'c0c09c4f81e71e441734185d64064ea6', '2019-07-30 11:29:07', '2019-07-30 11:29:07', ''),
(13, '', '', '', '', NULL, '', '2019-08-01 13:00:18', NULL, ''),
(14, 'vcc', 'vcv', 'den', 'sechere@gmail.com', NULL, 'jermaine1902', '2019-08-01 13:20:30', NULL, 'bahamas'),
(15, 'dennis', 'lumosi', 'dennis', 'lumocigwad@gmail.com', NULL, '$2y$10$it9V7gF7QtLQ.A2eKqqUjOQ9aWQdZ7n.u7D5VtUi9E/XLvLWsmnnG', '2019-08-09 08:00:31', NULL, 'bahrain');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `post_topic`
--
ALTER TABLE `post_topic`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `post_id` (`post_id`),
  ADD UNIQUE KEY `post_id_2` (`post_id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD UNIQUE KEY `slug_2` (`slug`),
  ADD UNIQUE KEY `slug_3` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `post_topic`
--
ALTER TABLE `post_topic`
  ADD CONSTRAINT `post_topic_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `post_topic_ibfk_2` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
