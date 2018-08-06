-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2017 at 07:33 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `category_id`, `name`, `description`, `image`, `created`, `modified`) VALUES
(1, 1, 'article-1', 'this is description of article-1', 'cardiovascular_technologist.png', '2017-03-16 00:00:00', '2017-03-16 00:00:00'),
(2, 1, 'article-2', 'this is description of article-2', 'cardiovascular_technologist.png', '2017-03-17 00:00:00', '2017-03-17 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created`, `modified`) VALUES
(1, 'CATEGORY-1', 'this is description of category 1', '2017-03-18 00:00:00', '2017-03-16 11:11:22'),
(2, 'CATEGORY-2', 'this is description of category 2', '2017-03-24 00:00:00', '2017-03-16 11:12:43'),
(3, 'CATEGORY-3', 'this is description of category 3', '2017-03-16 06:26:19', '2017-03-16 11:14:07'),
(4, 'testtt', 'ttttttt', '2017-03-16 13:47:14', '2017-03-16 13:47:14');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Web Devloper', '2017-03-17 07:01:29', '2017-03-17 07:01:29'),
(2, 'Wordpress Devloper', '2017-03-17 07:02:00', '2017-03-17 07:02:00'),
(3, 'Android Devloper', '2017-03-17 07:02:23', '2017-03-17 07:02:23'),
(4, 'ISO Devloper', '2017-03-17 07:02:43', '2017-03-17 07:02:44'),
(5, 'QA', '2017-03-17 07:03:02', '2017-03-17 07:03:02'),
(6, 'BA', '2017-03-17 07:03:22', '2017-03-17 07:03:22'),
(7, 'Project Leader', '2017-03-20 10:33:24', '2017-03-20 10:33:24'),
(8, 'Test Dep', '2017-03-22 10:12:44', '2017-03-22 10:12:44');

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Team Leader', '2017-03-17 07:04:16', '2017-03-17 07:04:16'),
(2, 'Seniar Employee', '2017-03-17 07:04:52', '2017-03-17 07:04:52'),
(3, 'EX Employee', '2017-03-17 07:05:14', '2017-03-17 07:05:14'),
(4, 'Trainee', '2017-03-17 07:05:38', '2017-03-17 07:05:38'),
(5, 'Freelance Employee', '2017-03-17 07:06:08', '2017-03-17 07:06:08'),
(6, 'Part Time ', '2017-03-17 07:06:49', '2017-03-17 07:06:49'),
(7, 'Full Time', '2017-03-17 07:07:09', '2017-03-17 07:07:09'),
(8, 'test Des', '2017-03-22 10:12:35', '2017-03-22 10:12:35');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `birtdate` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gender` enum('Male','Female') COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hobby` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `department_id`, `designation_id`, `name`, `email`, `mobile`, `birtdate`, `gender`, `address`, `hobby`, `image`, `created`, `modified`) VALUES
(1, 1, 4, 'asif vora', 'asif.multidots@gmail.com', '7600584687', '10/13/1994', 'Male', 'at-vora vass\r\nsokali\r\nta-viramgam\r\ndist-ahemedabad', 'Criket,Travelling,Drawing,Singing', 'IMG_20170115_154657_2017_03_25_07_30_16.jpg', '2017-03-25 07:28:59', '2017-03-25 07:30:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created`, `modified`) VALUES
(1, 'asif', 'asif', NULL, NULL),
(2, 'admin', '$2y$10$WNX5UxyHJxB/Ho.lESbL1O.KRPJpbfPOojjm83OE5F/3sqoJX30E6', NULL, NULL),
(3, 'neha', 'neha', '2017-03-07 11:31:44', '2017-03-07 11:31:44'),
(4, 'asdfgh', '$2y$10$/SShCPydZMvujP1znacqreX/Fft5kOKU4tAXe8kY.L.pQl3MqIQHy', '2017-03-07 11:39:27', '2017-03-07 11:39:27'),
(5, 'parth bhanusali', '$2y$10$8S4gpmezrpbpHcOcuS/uxOdSu30HknQv.m.VdPh2b4H5gvo8.upzy', '2017-03-07 12:00:51', '2017-03-07 12:01:37'),
(6, 'zoya', '$2y$10$gdNJZN4HtDQgd.1yvvai4.DuTwfwWXHYjuPg.2V9WH.dCxbRfyaiC', '2017-03-07 12:11:28', '2017-03-07 12:11:28'),
(7, 'test', '$2y$10$SOeKlILRjzqRTT8ZJFOqNufOgKOImPpYJTmqGoK9pDKzWkmNNAoIW', '2017-03-07 12:25:43', '2017-03-07 12:25:43'),
(8, 'weoi', '$2y$10$CjREQyf0vw5Fu5eGL15WruCN8GJuBQ9TOOxHiETgzIbxILZaRoe7G', '2017-03-07 14:08:44', '2017-03-07 14:08:44'),
(9, 'weoiewewp', '$2y$10$MAapcafJnDka4ERYtnkiUe5cC8G48NZSU3nkdVutsRFPKZmtGF.0e', '2017-03-07 14:08:59', '2017-03-07 14:08:59'),
(10, 'dsds', NULL, '2017-03-14 06:44:14', '2017-03-14 06:44:14'),
(11, 'sss', NULL, '2017-03-14 06:44:40', '2017-03-14 06:44:40'),
(13, 'asif.multiodts', '$2y$10$Hurd3zejgl0JYBXI8Md2guT/i8DsRoviPIFcZmirkeO7yCg/yiNFO', '2017-03-14 11:14:26', '2017-03-14 11:15:47'),
(14, 'asasa', '$2y$10$7VGi2FB54gribN8XmP6Sv.z44KnaD3NBNUGAEEBoArvkejiTh3.kK', '2017-03-14 12:19:37', '2017-03-14 12:19:37'),
(15, '', NULL, '2017-03-14 12:20:45', '2017-03-14 12:20:45'),
(16, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '$2y$10$claVthVmXhvM7u5BCgDvPuCojYA6BRESS0lzWPE4aZ7eZJA2fEFty', '2017-03-15 05:46:18', '2017-03-15 05:46:18'),
(17, 'adminsasasas', '$2y$10$dOi8o.anZ947PzB1mwaMie83HmdBKWqQzYHHhnIp3ijW1wxMPywhm', '2017-03-15 05:47:07', '2017-03-15 05:47:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `designation_id` (`designation_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
