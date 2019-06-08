-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jun 08, 2019 at 12:17 PM
-- Server version: 10.3.13-MariaDB-1:10.3.13+maria~bionic
-- PHP Version: 7.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comparoperateur`
--

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` int(10) NOT NULL,
  `location` varchar(150) NOT NULL,
  `price` int(10) NOT NULL,
  `id_tour_operator` int(10) NOT NULL,
  `description` text NOT NULL,
  `imagePath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `location`, `price`, `id_tour_operator`, `description`, `imagePath`) VALUES
(1, 'corse', 500, 1, 'La Corse (Corsica en corse et en italien ; Còrsega en ligure) est une île située en mer Méditerranée et une collectivité territoriale unique française.  Quatrième île de la mer Méditerranée par sa superficie, la Corse a été rattachée durant près de quatre siècles à la République de Gênes avant une brève indépendance comme royaume de Corse le 15 avril 1736. En 1755, elle adopte la première constitution démocratique de l\'histoire moderne donnant pour la première fois le droit de vote aux femmes. Le 15 mai 1768, elle est cédée par la République de Gênes à la France, bien que Gênes n\'ait qu\'une emprise limitée sur l\'île depuis la déclaration d\'indépendance de 1755. Elle est conquise militairement par le Royaume de France lors de la bataille de Ponte-Novo, le 9 mai 1769.', 'assets/img/destinations/corse.jpg'),
(2, 'Bahamas', 500, 1, 'Les Bahamas, en forme longue le Commonwealth des Bahamas (en anglais The Bahamas et Commonwealth of The Bahamas), sont un pays anglophone situé au nord de la mer des Caraïbes. L\'archipel des Bahamas occupe environ 700 îles et îlots des îles Lucayes situées dans l\'océan Atlantique, à l\'est-sud-est de la Floride, au nord-est de Cuba, au nord-ouest d\'Hispaniola et des îles Turques-et-Caïques, ces dernières étant sous dépendance britannique. Sa capitale est Nassau, située sur l\'île de New Providence. Ses habitants sont les Bahaméens.', 'assets/img/destinations/bahamas.jpg'),
(3, 'Bora Bora', 1000, 1, 'Bora-Bora est une des îles Sous-le-Vent de l\'archipel de la Société en Polynésie française. Elle est située à 255 km à l\'ouest-nord-ouest de la capitale Papeete. L\'orthographe réelle de son nom est Pora Pora (« première née » en tahitien)1. On l\'appelle aussi Mai te pora (« créée par les dieux »).  Elle abrite l\'aéroport de Bora-Bora.', 'assets/img/destinations/bora_bora.jpg'),
(6, 'Okinawa', 15000, 3, 'L\'archipel d’Okinawa (沖縄諸島, Okinawa shotō?), ou îles Okinawa, est un groupe d\'îles de la mer de Chine orientale situé au sud-ouest du Japon et au nord-est de l\'île de Taïwan. Il fait partie des îles Ryukyu et est rattaché à la préfecture d\'Okinawa. Les archipels Kerama et Daitō sont parfois considérés comme en faisant partie. L\'île d\'Okinawa borde la mer des Philippines sur sa côte sud-est.  On y parle l\'okinawaïen, qui fait partie des langues ryukyu.', 'assets/img/destinations/Okinawa.jpg'),
(7, 'Kazakhstan', 2000, 3, 'Le Kazakhstan, en forme longue la république du Kazakhstan (en kazakh : Qazaqstan, Қазақстан, /qɑzɑqˈstɑn/ et Qazaqstan Respýblıkasy, Қазақстан Республикасы, en russe : Казахстан, Kazakhstán, /kɐzəxˈstɐn/ et Республика Казахстан, Respoublika Kazakhstán), est un pays situé majoritairement au nord de l\'Asie centrale et en partie en Europe de l\'Est (à l\'ouest du fleuve Oural). Sa capitale est Noursoultan.  Pays de steppes peuplé autrefois de cavaliers nomades turcophones, il fit partie de l\'Empire russe puis de l\'Union des républiques socialistes soviétiques. Il est indépendant depuis 1991.  Ses habitants sont appelés les Kazakhstanais. (Le terme Kazakhs ne s\'applique qu\'à l\'ethnie majoritaire du pays).', 'assets/img/destinations/kazakhstan.jpg'),
(8, 'Corse', 4000, 5, 'La Corse (Corsica en corse et en italien ; Còrsega en ligure) est une île située en mer Méditerranée et une collectivité territoriale unique française.  Quatrième île de la mer Méditerranée par sa superficie, la Corse a été rattachée durant près de quatre siècles à la République de Gênes avant une brève indépendance comme royaume de Corse le 15 avril 1736. En 1755, elle adopte la première constitution démocratique de l\'histoire moderne donnant pour la première fois le droit de vote aux femmes. Le 15 mai 1768, elle est cédée par la République de Gênes à la France, bien que Gênes n\'ait qu\'une emprise limitée sur l\'île depuis la déclaration d\'indépendance de 1755. Elle est conquise militairement par le Royaume de France lors de la bataille de Ponte-Novo, le 9 mai 1769.', 'assets/img/destinations/corse.jpg'),
(9, 'Roumanie', 500, 6, 'La Roumanie (en roumain : România) est un État d\'Europe du Sud-Est, le septième pays le plus peuplé de l\'Union européenne et le neuvième par sa superficie. La géographie du pays est structurée par les Carpates, le Danube et le littoral de la mer Noire. Située aux confins de l\'Europe du Sud-Est et de l\'Europe centrale et orientale, la Roumanie a comme pays frontaliers la Hongrie, l\'Ukraine, la Moldavie, la Bulgarie et la Serbie.  Une forte majorité de la population s\'identifie comme de langue roumaine (89 %) et de tradition chrétienne orthodoxe (81 %) ; 11 % des habitants déclarent appartenir à des minorités ethniques et 19 % à des confessions minoritaires ou être sans religion.', 'assets/img/destinations/roumanie.jpg'),
(11, 'Australie', 15000, 4, 'L\'Australie, en forme longue le Commonwealth d\'Australie (en anglais : Australia et Commonwealth of Australia), est un pays de l\'hémisphère sud dont la superficie couvre la plus grande partie de l\'Océanie. En plus de l\'île éponyme, l\'Australie comprend également la Tasmanie ainsi que d’autres îles des océans Austral, Pacifique et Indien. Les nations voisines comprennent notamment l\'Indonésie, le Timor oriental et la Papouasie-Nouvelle-Guinée au nord, les îles Salomon, Vanuatu et le territoire français de Nouvelle-Calédonie au nord-est, la Nouvelle-Zélande au sud-est ainsi que le territoire français des îles Kerguelen (TAAF) à l\'ouest des îles australiennes Heard et McDonald.', 'assets/img/destinations/australie.jpg'),
(19, 'Roanne', 150, 6, 'Roanne c\'est bien, viendez ! ', 'assets/img/destinations/Roanne.jpeg'),
(20, 'Miai', 5000, 4, ' Miami, son eau bleu turquoise, ses grattes-ciel....', 'assets/img/destinations/miami.jpeg');

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
(3, 'fantastique !', 'marc', 1),
(4, 'site de merde', 'xtof', 6),
(5, 'Ceci est un long texte. Ceci est un long texte. Ceci est un long texte. Ceci est un long texte. Ceci est un long texte. Ceci est un long texte. Ceci est un long texte. Ceci est un long texte. Ceci est un long texte. Ceci est un long texte. ', 'test', 1),
(6, 'Génial !', 'Axel', 1),
(7, 'J\'adore votre site :) lol', 'Alex', 6),
(8, 'Okinawa c\'était le pied !', 'japan guy', 3);

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
  `logoPath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tour_operators`
--

INSERT INTO `tour_operators` (`id`, `name`, `grade`, `link`, `is_premium`, `logoPath`) VALUES
(1, 'club med', 5, 'https://www.clubmed.fr/', 1, 'assets/img/logo/Club_Med.jpg'),
(3, 'Travel Japan', 5, 'https://fr.japantravel.com/', 1, 'assets/img/logo/travel_japan.jpg'),
(4, 'Bravo Club', 6, 'https://www.bravoclub.com', 0, 'assets/img/logo/bravo_club.png'),
(5, 'Corsicatours', 2, 'http://www.corsicatours.com/', 0, 'assets/img/logo/corsicatours.jpg'),
(6, 'Croisi Europe', 10, 'https://www.croisieurope.com', 0, 'assets/img/logo/CroisiEurope.jpg');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tour_operators`
--
ALTER TABLE `tour_operators`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
