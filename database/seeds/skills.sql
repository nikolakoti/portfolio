-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2018 at 12:34 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.1.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill_name`, `img_name`, `created_at`, `updated_at`) VALUES
(1, 'PHP', 'php.png', NULL, NULL),
(2, 'MySQL', 'mysql.png', NULL, NULL),
(3, 'Laravel', 'laravel.png', NULL, NULL),
(4, 'HTML5', 'html5.png', NULL, NULL),
(5, 'CSS3', 'css3.png', NULL, NULL),
(6, 'JavaScript', 'javascript.png', NULL, NULL),
(7, 'jQuery', 'jquery.png', NULL, NULL),
(8, 'Bootstrap', 'bootstrap.png', NULL, NULL),
(9, 'AJAX', 'ajax.png', NULL, NULL),
(10, 'git', 'git.png', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
