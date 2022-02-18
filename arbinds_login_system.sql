-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Oct 07, 2021 at 12:50 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arbinds_login_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `headline` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `post_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `headline`, `description`, `post_image`) VALUES
(2, 'Bling Bling', 'Something brighter than my future', 'post615b77addf3d68.31132952.jpg'),
(4, 'My Daughter', 'My first child <3', 'post615b7a3f5d4551.69837551.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `is_superuser` tinyint(1) DEFAULT 0,
  `is_active` tinyint(1) DEFAULT 1,
  `joined_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `middlename`, `lastname`, `username`, `email`, `user_password`, `profile_image`, `is_superuser`, `is_active`, `joined_date`) VALUES
(4, 'Ram', '', 'Bahadur', 'admin', 'admin@email.com', '$2y$10$XLmS6CGMW6.s9uUND23hau0mazsCKxlfidq4F.XCwTSrS3qyWOiMq', 'image615b7357e43031.13649764.jpg', 1, 1, '2021-09-28 14:37:43'),
(5, 'Arbind', 'SomeRandomMN', 'Shakya', 'arbind', 'arbind@email.com', '$2y$10$XLmS6CGMW6.s9uUND23hau0mazsCKxlfidq4F.XCwTSrS3qyWOiMq', NULL, 0, 1, '2021-09-30 12:05:13');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
