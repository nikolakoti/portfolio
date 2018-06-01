-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2018 at 12:27 PM
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
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `lang`, `education`, `school`, `school_address`, `city`, `education_period`, `about_education`, `created_at`, `updated_at`) VALUES
(1, 'en', 'Web Development certificate', 'Cubes, llc / Cubes School', 'Boulevard Mihajla Pupina 181', 'Belgrade', 'September 2017 - March 2018', 'The course included a six month intensive training, from September 2017 to March 2018. The classes were based on learning web technology used in web app development. After the course I gained an advanced level of knowledge in the field of web development and app of different web technology :\r\n\r\n<ul class=\"list-inline pt-1\">\r\n<li class=\"list-inline-item\">PHP /</li>\r\n<li class=\"list-inline-item\">MySQL /</li>\r\n<li class=\"list-inline-item\">OOP /</li>\r\n<li class=\"list-inline-item\">Laravel /</li>\r\n<li class=\"list-inline-item\">HTML5 /</li>\r\n<li class=\"list-inline-item\">CSS /</li>\r\n<li class=\"list-inline-item\">Boostrap /</li>\r\n<li class=\"list-inline-item\">JavaScript /</li>\r\n<li class=\"list-inline-item\">jQuery /</li>\r\n<li class=\"list-inline-item\">AJAX</li>\r\n</ul>', NULL, NULL),
(2, 'en', 'Graduated Forestry engineer', 'Faculty of Forestry, University in Belgrade', 'Kneza Viseslava 1', 'Belgrade', 'October 2013', NULL, NULL, NULL),
(3, 'sr', 'Sertifikat iz oblasti Web Development', 'Cubes d.o.o. / Cubes School', 'Bulevar Mihajla Pupina 181', 'Beograd', 'Septembar 2017 - Mart 2018', 'Kurs je obuhvatao šestomesečnu intezivnu obuku, u periodu od septembra 2017. do marta 2018. godine. Nastava se bazirala na učenju web tehnologija koje se koriste u razvoju web aplikacija.\r\nPo završetku obuke stekao sam napredni nivo znanja iz oblasti WEB Development i primenu različitih web tehnologija:\r\n\r\n<ul class=\"list-inline pt-1\">\r\n<li class=\"list-inline-item\">PHP /</li>\r\n<li class=\"list-inline-item\">MySQL /</li>\r\n<li class=\"list-inline-item\">OOP /</li>\r\n<li class=\"list-inline-item\">Laravel /</li>\r\n<li class=\"list-inline-item\">HTML5 /</li>\r\n<li class=\"list-inline-item\">CSS /</li>\r\n<li class=\"list-inline-item\">Boostrap /</li>\r\n<li class=\"list-inline-item\">JavaScript /</li>\r\n<li class=\"list-inline-item\">jQuery /</li>\r\n<li class=\"list-inline-item\">AJAX</li>\r\n</ul>\r\n \r\n', NULL, NULL),
(4, 'sr', 'Dipl. inženjer šumarstva', 'Šumarski fakultet, Univerzitet u Beogradu', 'Kneza Višeslava 1', 'Beograd', 'Oktobar 2013', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
