-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2018 at 12:23 PM
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
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `lang`, `position`, `company`, `company_address`, `city`, `working_period`, `job_description`, `created_at`, `updated_at`) VALUES
(1, 'en', 'Supervisor guest response', 'Air Serbia Ground Services, llc', 'Airport Nikola Tesla', 'Belgrade', 'October 2014 - January 2018', '<ul class=\"list-unstyled pr-2\">\r\n  <li>Supervise the check-in process to make sure that correct procedures\r\nare being followed;\r\n</li>\r\n  <li>Dealing with passenger enquires about flight departures and arrivals;</li>\r\n  <li>Helping passengers who are facing delays, including arranging refreshments,\r\n  meals and accommodation;\r\n</li>\r\n  <li>Display excellent motivational leadership, delegation and mentoring\r\nin-order to facilitate customer satisfaction; \r\n</li>\r\n  <li>Support, coach, develop and motivate all team members, to build moral \r\nand ensure they all comply with Company regulations;  \r\n</li>\r\n  <li>Keep records and write reports to duty manager. </li>\r\n  </ul>', NULL, NULL),
(2, 'en', 'Guest service agent', 'Air Serbia Ground Services, llc', 'Airport Nikola Tesla', 'Belgrade', 'March 2014 - September 2014', '<ul class=\"list-unstyled pr-2\">\r\n  <li>Dealing with passenger enquires about flight departures and arrivals; \r\n</li>\r\n  <li>Checking passengers in;</li>\r\n  <li>Giving seat numbers;\r\n</li>\r\n  <li>Providing boarding passes and luggage labels; \r\n</li>\r\n  <li>Telling passengers about luggage restrictions;   \r\n</li>\r\n  <li>Weighing baggage and collecting any excess weight charges;</li>\r\n  <liTaking care of people with special needs, and unaccompanied children.</li>\r\n</ul>', NULL, NULL),
(3, 'sr', 'Supervizor za putničke usluge', 'Air Serbia Ground Services d.o.o.', 'Aerodrom Nikola Tesla', 'Beograd', 'Oktobar 2014 - Januar 2018', '<ul class=\"list-unstyled pr-2\">\r\n  <li>Vrši nadzor i kontrolu aktivnosti vezanih za zemaljsko opsluživanje;\r\n</li>\r\n  <li>Obezbeđuje optimalni standard pružanja usluga putnicima, primenjujući  \r\nvažeća upustva i priručnike;\r\n</li>\r\n  <li>Raspodeljuje resurse i opremu i održava snažan fokus na blagovremeno  \r\nobavljanje aktivnosti;\r\n</li>\r\n  <li>Odgovoran za implementaciju efektivnog smenskog rada kojim se \r\nispunjavaju uslovi vezani za zemaljsko opsluživanje, kao i operativni i pravni uslovi; \r\n </li>\r\n  <li>Pomaže putnicima u slučaju nepravilnosti vezanih za let, koordiniše komunikaciju \r\nsa putnicima; \r\n  </li>\r\n  <li>Delegira zadatke članovima tima i obezbeđuje da se aktivnosti vrše u skladu sa \r\nstandardima i vremenskim normama; \r\n</li>\r\n<li>Podnosi odgovarajuće dnevne i druge izveštaje.</li>\r\n</ul>', NULL, NULL),
(4, 'sr', 'Agent za putničke usluge', 'Air Serbia Ground Services d.o.o.', 'Aerodrom Nikola Tesla', 'Beograd', 'Mart 2014 - Septembar 2014', '<ul class=\"list-unstyled pr-2\">\r\n  <li>Vrši prijem lokalnih i transfernih putnika uz adekvatnu kontrolu  \r\nnjihovog identiteta;\r\n\r\n</li>\r\n  <li>Pruža adekvatnu uslugu putnicima sa posebnim zahtevima \r\nili po posebnoj najavi;\r\n\r\n</li>\r\n  <li>Obezbeđuje redovnost saobraćaja time što sve potrebne aktivnosti \r\nvrši isključivo u skladu sa standardima i vremenskim normama;\r\n\r\n</li>\r\n  <li>Pomaže putnicima u slučaju nepravilnosti vezanih za let i prtljag;\r\n </li>\r\n  <li>O svim neregularnostima i nepravilnostima koje uoči u procesima \r\nobaveštava supervizora. \r\n  </li>\r\n </ul>', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
