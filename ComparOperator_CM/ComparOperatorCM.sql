-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jun 07, 2019 at 02:35 PM
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
-- Database: `ComparOperatorCM`
--

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` int(10) NOT NULL,
  `location` varchar(150) NOT NULL,
  `imgName` varchar(255) DEFAULT NULL,
  `price` int(10) NOT NULL,
  `id_tour_operator` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `location`, `imgName`, `price`, `id_tour_operator`) VALUES
(2, 'Corse', 'Corse.jpg', 0, 2),
(3, 'Italie', 'Italie.jpg', 0, 2),
(8, 'Bali', 'Bali.jpg', 0, 2),
(9, 'Espagne', 'Espagne.jpg', 0, 2),
(10, 'Dubai', 'Dubai.jpg', 0, 2),
(11, 'États-Unis', 'Etatsunis.jpg', 0, 2),
(12, 'Grèce', 'Grece.jpg', 0, 2),
(13, 'Kenya', 'Kenya.jpeg', 0, 2),
(14, 'Maroc', 'Maroc.jpg', 0, 2),
(15, 'Turquie', 'Turquie.jpg', 0, 2),
(19, 'Italie', NULL, 350, 6),
(20, 'Italie', NULL, 500, 7),
(21, 'États-Unis', NULL, 1200, 8),
(22, 'Maroc', NULL, 450, 6),
(23, 'Turquie', NULL, 560, 8),
(24, 'Bali', NULL, 1200, 7),
(25, 'Kenya', NULL, 2000, 8),
(26, 'Dubai', NULL, 600, 6),
(27, 'Grèce', NULL, 780, 7),
(28, 'Kenya', NULL, 800, 6),
(29, 'Turquie', NULL, 450, 6),
(30, 'Espagne', NULL, 300, 6),
(31, 'Maroc', NULL, 450, 8);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) NOT NULL,
  `message` varchar(250) NOT NULL,
  `author` varchar(150) NOT NULL,
  `id_tour_operator` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `message`, `author`, `id_tour_operator`) VALUES
(23, 'J\'adore Thomas Cook !!!', 'Bob', 6),
(24, 'Tui c\'est la folie!', 'Marlène', 8),
(25, 'Worst tour operator ever', 'John', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tour_operators`
--

CREATE TABLE `tour_operators` (
  `id` int(10) NOT NULL,
  `name` varchar(150) NOT NULL,
  `grade` float NOT NULL,
  `numberOfGrade` int(11) NOT NULL DEFAULT 0,
  `link` varchar(255) NOT NULL,
  `imgPath` varchar(255) NOT NULL,
  `is_premium` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tour_operators`
--

INSERT INTO `tour_operators` (`id`, `name`, `grade`, `numberOfGrade`, `link`, `imgPath`, `is_premium`) VALUES
(2, 'selectorDestination', 0, 0, '', '', 0),
(6, 'Thomas Cook', 3, 1, 'https://www.thomascook.fr/', '../assets/img/logoTO/81thomas-cook.jpg', 0),
(7, 'Club Med', 1, 1, 'https://www.clubmed.fr/', '../assets/img/logoTO/99club-med.png', 0),
(8, 'Tui', 5, 1, 'https://www.tui.fr/', '../assets/img/logoTO/69index.png', 0);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tour_operators`
--
ALTER TABLE `tour_operators`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `destinations`
--
ALTER TABLE `destinations`
  ADD CONSTRAINT `fk_operator` FOREIGN KEY (`id_tour_operator`) REFERENCES `tour_operators` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `fk_tour_operator` FOREIGN KEY (`id_tour_operator`) REFERENCES `tour_operators` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
