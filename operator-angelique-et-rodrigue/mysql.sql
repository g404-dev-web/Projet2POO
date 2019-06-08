-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jun 07, 2019 at 02:26 PM
-- Server version: 10.3.13-MariaDB-1:10.3.13+maria~bionic
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ComparOperatorAngRod`
--
CREATE DATABASE IF NOT EXISTS `ComparOperatorAngRod` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ComparOperatorAngRod`;

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` int(10) NOT NULL,
  `location` varchar(150) NOT NULL,
  `price` int(10) NOT NULL,
  `id_tour_operator` int(10) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `location`, `price`, `id_tour_operator`, `image`) VALUES
(1, 'Corse', 500, 1, 'https://i.f1g.fr/media/madame/300x300_crop/sites/default/files/img/2017/08/falaises_de_bonifacio.jpg'),
(2, 'Italie', 800, 1, 'http://www.aquitours.com/wp-content/uploads/2018/04/Fotolia_46564077_XL-300x300.jpg'),
(3, 'Espagne', 900, 1, 'https://raoux-carre.fr/wp-content/uploads/2019/03/imagesGROUPE_PRODUIT42P23-iStock-508539724-300x300.jpg'),
(4, 'Thailand', 800, 1, 'https://coolasiatravel.com/wp-content/uploads/2013/12/Une-journee-a-Ayutthaya-Cool-Asia-Travel-300x300.jpg'),
(5, 'Japon', 800, 1, 'http://fudoshinkan.eu/wp-content/uploads/2013/10/Osaka-chateau-japon.jpg'),
(6, 'USA', 1000, 1, 'http://www.idealangues.com/wp-content/uploads/2011/02/NewYork-300x300.jpg'),
(7, 'Russie', 900, 1, 'http://www.privetvip.com/maj/phototheque/photos/voyage/st-petersburg-president-putin-gazprom-lisa-mae.jpg'),
(8, 'Maroc', 600, 1, 'https://www.desertfuntrip.com/wp-content/uploads/2019/03/excursion-prive-ait-ben-hadou-village-telouat-300x300.jpg'),
(9, 'Finlande', 800, 1, 'http://www.monsieurvintage.com/photos/2019/02/finlande-1-300x300.jpg'),
(10, 'Hongrie', 900, 1, 'https://rivagesdumonde.fr/images/croisiere_partenaire/Pelerin/DOURO_2019/Pelerin_Douro_2019.jpg'),
(11, 'Corse', 475, 2, ''),
(12, 'Italie', 820, 2, ''),
(13, 'Espagne', 950, 2, ''),
(14, 'Thailand', 799, 2, ''),
(15, 'Japon', 849, 2, ''),
(16, 'USA', 985, 2, ''),
(17, 'Russie', 855, 2, ''),
(18, 'Maroc', 639, 2, ''),
(19, 'Finlande', 815, 2, ''),
(20, 'Hongrie', 865, 2, ''),
(21, 'Corse', 530, 3, ''),
(22, 'Italie', 795, 3, ''),
(23, 'Espagne', 899, 3, ''),
(24, 'Thailand', 845, 3, ''),
(25, 'Japon', 825, 3, ''),
(26, 'USA', 1099, 3, ''),
(29, 'Russie', 920, 3, ''),
(30, 'Maroc', 589, 3, ''),
(31, 'Finlande', 795, 3, ''),
(32, 'Hongrie', 949, 3, ''),
(33, 'Corse', 489, 4, ''),
(34, 'Italie', 799, 4, ''),
(35, 'Espagne', 905, 4, ''),
(36, 'Thailand', 819, 4, ''),
(37, 'Japon', 825, 4, ''),
(38, 'USA', 999, 4, ''),
(39, 'Russie', 900, 4, ''),
(41, 'Maroc', 599, 4, ''),
(42, 'Finlande', 799, 4, ''),
(43, 'Hongrie', 929, 4, '');

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
(1, 'super club !', 'alex', 1),
(3, 'Je recommande !', 'John', 2),
(4, 'Super !!', 'pierre', 3),
(5, 'SUper expérience !!', 'elodie', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tour_operators`
--

CREATE TABLE `tour_operators` (
  `id` int(10) NOT NULL,
  `name` varchar(150) NOT NULL,
  `grade` int(2) NOT NULL,
  `link` varchar(255) NOT NULL,
  `is_premium` tinyint(1) NOT NULL DEFAULT 0,
  `img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tour_operators`
--

INSERT INTO `tour_operators` (`id`, `name`, `grade`, `link`, `is_premium`, `img`) VALUES
(1, 'Club Med', 5, 'https://www.clubmed.fr/', 0, 'http://www.worldofsportrecruitment.com.au/wp-content/uploads/2018/04/club-med-1.png'),
(2, 'Le Petit Fute', 4, 'https://www.petitfute.com/', 0, 'https://pbs.twimg.com/profile_images/1027479553072144384/me3fQGu0_reasonably_small.jpg'),
(3, 'ThomasCook', 3, 'https://www.thomascook.fr/', 0, 'https://www.observatoiredelafranchise.fr/images/logos/3678-thomascook.jpg'),
(4, 'Jet-Tours', 2, 'https://www.jettours.com/', 0, 'https://pbs.twimg.com/profile_images/1098502564360929280/2EiOUJBT_reasonably_small.jpg');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tour_operators`
--
ALTER TABLE `tour_operators`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
