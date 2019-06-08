-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jun 07, 2019 at 01:43 PM
-- Server version: 10.3.13-MariaDB-1:10.3.13+maria~bionic
-- PHP Version: 7.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dreamtours`
--
CREATE DATABASE IF NOT EXISTS `dreamtours` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `dreamtours`;

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` int(10) NOT NULL,
  `location` varchar(150) NOT NULL,
  `price` int(10) NOT NULL,
  `id_tour_operator` int(10) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `location`, `price`, `id_tour_operator`, `image`) VALUES
(1, 'Corse', 765, 1, 'corse.jpg'),
(2, 'Martinique', 786, 1, 'martinique.jpeg'),
(3, 'Barcelone', 876, 1, 'barcelone.jpg'),
(4, 'Da Balaia', 980, 1, 'da_balaia.jpeg'),
(5, 'Nice', 654, 1, 'nice.jpg'),
(6, 'Dublin', 876, 1, 'dublin.jpg'),
(7, 'Florence', 989, 1, 'florence.jpg'),
(8, 'Sicile', 1023, 1, 'sicile.jpg'),
(9, 'Guilin', 884, 1, 'guilin.jpg'),
(10, 'Kabira Ishigaki', 885, 1, 'kabira_ishigaki.jpeg'),
(11, 'Corse', 675, 3, 'corse.jpg'),
(12, 'Barcelone', 456, 3, 'barcelone.jpg'),
(13, 'Da Balaia', 678, 3, 'da_balaia.jpeg'),
(14, 'Nice', 345, 3, 'nice.jpg'),
(15, 'Dublin', 675, 3, 'dublin.jpg'),
(16, 'Florence', 987, 3, 'florence.jpg'),
(17, 'Sicile', 989, 3, 'sicile.jpg'),
(18, 'Guilin', 789, 3, 'guilin.jpg'),
(19, 'Kabira Ishigaki', 768, 3, 'kabira_ishigaki.jpeg'),
(20, 'Martinique', 795, 3, 'martinique.jpeg'),
(21, 'Corse', 387, 2, 'corse.jpg'),
(22, 'Barcelone', 567, 2, 'barcelone.jpg'),
(23, 'Da Balaia', 876, 2, 'da_balaia.jpeg'),
(24, 'Nice', 324, 2, 'nice.jpg'),
(25, 'Dublin', 564, 2, 'dublin.jpg'),
(26, 'Florence', 678, 2, 'florence.jpg'),
(27, 'Sicile', 876, 2, 'sicile.jpg'),
(28, 'Guilin', 1022, 2, 'guilin.jpg'),
(29, 'Kabira Ishigaki', 1560, 2, 'kabira_ishigaki.jpeg'),
(30, 'Martinique', 987, 2, 'martinique.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) NOT NULL,
  `message` varchar(250) NOT NULL,
  `author` varchar(150) NOT NULL,
  `rate` int(1) DEFAULT NULL,
  `id_tour_operator` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `message`, `author`, `rate`, `id_tour_operator`) VALUES
(1, 'super club !', 'alex', 5, 1),
(3, 'Bien mais pas top !!!', 'Serge Karamazov', 3, 2),
(4, 'Organisation parfaite.', 'Celine', 4, 3),
(5, 'Voyage désagréable je ne conseille pas.', 'Celine', 1, 2),
(6, 'Voyage qui pu !!!!', 'Baptiste', 1, 2),
(8, 'des paysages magnifiques ', 'Gilbert Montagnier', 5, 2),
(9, 'cool', 'fred', 2, 2),
(11, 'd\'enfer', 'Lucie Fer', 5, 3),
(12, 'Au top!!', 'Julia', 5, 3),
(13, 'J suis super content.', 'Simon Jérémi', 4, 3),
(15, 'test', 'Lucie Fer', 5, 3),
(17, 'comment', 'fred', 5, 1),
(18, 'test2', 'Baptiste', 3, 3),
(19, 'test etoiles 4', 'Baptiste', 4, 2),
(20, 'test 3 etoiles', 'Julia', 3, 2),
(21, 'test 3 Etoiles', 'Julia', 3, 2),
(22, '3 etoiles', 'Lucie Fer', 3, 2),
(23, '3 etoiles', 'Gilbert Montagnier', 3, 2),
(24, '5 etoiles', 'Celine', 5, 2),
(25, '2 etoiles', 'mickael', 2, 2),
(26, '2 etoiles', 'Elodie', 2, 3),
(28, 'c\'etait cool', 'Christophe', 4, 3),
(29, 'Fabuleux !!', 'Christophe', 4, 2),
(40, 'plus que genial ', 'Kylian', 5, 3),
(42, 'Spécial', 'paulo', 1, 1),
(43, 'Nul !!!', 'Zoé', 1, 2),
(44, 'Sale nul 2 !', 'Joel', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tour_operators`
--

CREATE TABLE `tour_operators` (
  `id` int(10) NOT NULL,
  `name` varchar(150) NOT NULL,
  `grade` int(2) NOT NULL,
  `link` varchar(255) NOT NULL,
  `is_premium` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tour_operators`
--

INSERT INTO `tour_operators` (`id`, `name`, `grade`, `link`, `is_premium`) VALUES
(1, 'club med', 4, 'https://www.clubmed.fr/', 0),
(2, 'thomas cook', 3, 'https://www.thomascook.fr/', 0),
(3, 'Jet tours', 4, 'https://www.jettours.com/', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_operator` (`id_tour_operator`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tour_operator` (`id_tour_operator`);

--
-- Indexes for table `tour_operators`
--
ALTER TABLE `tour_operators`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tour_operators`
--
ALTER TABLE `tour_operators`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
