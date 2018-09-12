-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2018 at 11:54 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ice`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(3) NOT NULL,
  `post_title` varchar(50) NOT NULL,
  `post_desc` varchar(140) NOT NULL,
  `post_body` text CHARACTER SET utf8 NOT NULL,
  `post_author` varchar(20) NOT NULL,
  `post_time` date NOT NULL,
  `post_status` tinyint(1) NOT NULL,
  `post_uniqueid` int(17) NOT NULL,
  `post_featuredimage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_title`, `post_desc`, `post_body`, `post_author`, `post_time`, `post_status`, `post_uniqueid`, `post_featuredimage`) VALUES
(15, 'Ice update on the Asaba project', 'Latest news on Asaba Solar project. . . ', '<p>This is a test post</p>', 'Bright Sunday', '2018-08-22', 1, 0, 'uploads/images/avatar.png'),
(16, 'News Update', 'Latest news. . . ', '<p>This is a second test post</p>', 'Bright Sunday', '2018-08-22', 1, 0, 'uploads/images/Absolute_flawless_HD_foundation.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `users_fname` varchar(15) NOT NULL,
  `users_lname` varchar(15) NOT NULL,
  `users_email` varchar(20) NOT NULL,
  `users_pword` varchar(66) NOT NULL,
  `users_priv` int(3) NOT NULL,
  `users_username` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `users_fname`, `users_lname`, `users_email`, `users_pword`, `users_priv`, `users_username`) VALUES
(1, 'Bright', 'Sunday', 'bmsunday@icecommpowe', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 5, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
