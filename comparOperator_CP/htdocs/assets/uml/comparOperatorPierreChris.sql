-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jun 07, 2019 at 01:53 PM
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
-- Database: `comparOperatorPierreChris`
--

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` int(10) NOT NULL,
  `location` varchar(150) NOT NULL,
  `price` int(10) NOT NULL,
  `id_tour_operator` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `location`, `price`, `id_tour_operator`) VALUES
(24, 'maroc', 1550, 31),
(25, 'bresil', 1800, 31),
(26, 'ilemaurice', 2300, 31),
(27, 'japon', 4000, 31),
(28, 'france', 450, 31),
(29, 'maroc', 2000, 32),
(30, 'japon', 4555, 32),
(31, 'mexique', 3000, 33),
(32, 'usa', 12399, 33),
(33, 'portugal', 889, 34),
(34, 'espagne', 1220, 34),
(35, 'usa', 4550, 35),
(36, 'mexique', 3440, 35),
(37, 'ilemaurice', 3000, 36),
(38, 'mexique', 2330, 36),
(39, 'maroc', 2500, 37),
(40, 'bresil', 1657, 37),
(41, 'ilemaurice', 1560, 37),
(42, 'portugal', 5240, 37),
(43, 'japon', 8775, 37),
(44, 'usa', 1890, 37),
(45, 'france', 355, 37),
(46, 'mexique', 1590, 37),
(47, 'espagne', 3545, 37),
(48, 'japon', 9999, 38),
(49, 'bresil', 7130, 39),
(50, 'france', 701, 40);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) NOT NULL,
  `message` varchar(250) NOT NULL,
  `author` varchar(150) NOT NULL,
  `id_tour_operator` int(10) NOT NULL,
  `grade` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `message`, `author`, `id_tour_operator`, `grade`) VALUES
(50, 'Vamos !! Rafa va gagner !!!', 'Christophe', 31, 5),
(51, 'moyen ', 'pierre', 31, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tour_operators`
--

CREATE TABLE `tour_operators` (
  `id` int(10) NOT NULL,
  `name` varchar(150) NOT NULL,
  `grade` int(2) DEFAULT NULL,
  `link` varchar(255) NOT NULL,
  `is_premium` tinyint(1) NOT NULL DEFAULT 0,
  `logo` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tour_operators`
--

INSERT INTO `tour_operators` (`id`, `name`, `grade`, `link`, `is_premium`, `logo`) VALUES
(31, 'Wamos', 4, 'https://www.linkedin.com/in/christophe-chaxel/', 1, 'wamos.jpg'),
(32, 'Transat', 0, 'https://www.linkedin.com/in/christophe-chaxel/', 0, 'transat-crop.jpg'),
(33, 'Tohapi', 0, 'https://www.linkedin.com/in/christophe-chaxel/', 0, 'tohapi.jpg'),
(34, 'Thomascook', 0, 'https://www.linkedin.com/in/christophe-chaxel/', 0, 'thomascook-crop.png'),
(35, 'SelecTour', 0, 'https://www.linkedin.com/in/christophe-chaxel/', 0, 'selectour-crop.jpg'),
(36, 'Holiday Extras', 0, 'https://www.linkedin.com/in/christophe-chaxel/', 0, 'holidayextra-crop.jpg'),
(37, 'Club Med', 0, 'https://www.linkedin.com/in/christophe-chaxel/', 1, 'clubmed-crop.png'),
(38, 'Asia', 0, 'https://www.linkedin.com/in/christophe-chaxel/', 0, 'asia.jpg'),
(39, 'Alqueva', 0, 'https://www.linkedin.com/in/christophe-chaxel/', 0, 'alqueva-crop.jpg'),
(40, 'AirTours', 0, 'https://www.linkedin.com/in/christophe-chaxel/', 1, 'airtours-crop.png');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tour_operators`
--
ALTER TABLE `tour_operators`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

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
