-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jun 08, 2019 at 06:27 PM
-- Server version: 10.3.4-MariaDB
-- PHP Version: 7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comparator`
--
CREATE DATABASE IF NOT EXISTS `comparator` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `comparator`;

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` int(10) NOT NULL,
  `idLocation` int(11) NOT NULL,
  `price` int(10) NOT NULL,
  `description` text NOT NULL,
  `idTourOperator` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `idLocation`, `price`, `description`, `idTourOperator`) VALUES
(2, 1, 740, 'Hôtel 4 étoilesPetit déjeuner inclus5 jours / 4 nuits', 1),
(4, 3, 490, 'odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos', 5),
(5, 5, 529, 'they cannot foresee the pain and trouble that are bound to ensue; and equal ', 5),
(6, 4, 680, 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum', 7),
(7, 6, 775, 'Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis', 7),
(8, 1, 840, 'Si asint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi', 4),
(9, 2, 640, 'necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.', 3),
(10, 3, 620, 'Et harum quidem rerum facilis est et expedita distinctio.', 7),
(11, 2, 650, ' sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur', 1),
(12, 2, 630, 'Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe.', 7),
(13, 5, 599, 'Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet', 3),
(14, 6, 890, 'ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque ', 7),
(15, 4, 670, 'ed quia non numquam eius modi tempora incidunt ut labore', 5),
(16, 2, 640, ' Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse', 5),
(17, 2, 670, 'vel illum qui dolorem eum fugiat quo voluptas nulla pariatur', 1),
(18, 2, 870, 'Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis ', 4),
(19, 1, 776, 'os qui ratione voluptatem sequi nesciunt. Neque porro quisquam', 5),
(20, 6, 750, 'os qui ratione voluptatem sequi nesciunt. Neque porro quisquam', 4),
(21, 4, 850, ' Nor again is there anyone who loves or pursues or desires to obtain pain of itsel', 5),
(22, 5, 650, 'adipisci velit, sed quia non numquam eius modi tempora incidunt ', 1),
(23, 3, 630, 'adipisci velit, sed quia non numquam eius modi tempora incidunt ', 7),
(24, 3, 650, 'adipisci velit, sed quia non numquam eius modi tempora incidunt ', 3),
(25, 3, 650, 'non numquam eius modi tempora incidunt ', 4),
(26, 4, 768, 'adipisci velit, sed quia non numquam eius modi tempora incidunt ', 1),
(27, 1, 650, 'adipisci velit, sed quia non numquam eius modi tempora incidunt ', 3),
(30, 5, 680, 'Menu maxi best of potatoes coca', 13),
(31, 4, 321, 'dfbn', 1);

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`) VALUES
(1, 'Corse'),
(2, 'Baléares'),
(3, 'Croatie'),
(4, 'Grèce'),
(5, 'Italie'),
(6, 'Maldives');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) NOT NULL,
  `message` varchar(250) NOT NULL,
  `author` varchar(150) NOT NULL,
  `idTourOperator` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `message`, `author`, `idTourOperator`) VALUES
(1, 'super club !', 'alex', 1),
(13, 'ah ben ouais mais bon.', 'dédé', 1),
(14, 'J\'AIME TATA !', 'toto', 1),
(15, 'MonAvis', 'MonNom', 1),
(16, 'pas mal.', 'David Goodenough', 3),
(17, 'ouais c\'est pas faux ', 'Perceval', 3),
(18, 'Super merci !!', 'Nico', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tour_operators`
--

CREATE TABLE `tour_operators` (
  `id` int(10) NOT NULL,
  `name` varchar(150) NOT NULL,
  `gradeCount` int(11) NOT NULL DEFAULT 0,
  `grade` float NOT NULL DEFAULT 0,
  `link` varchar(255) NOT NULL,
  `isPremium` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tour_operators`
--

INSERT INTO `tour_operators` (`id`, `name`, `gradeCount`, `grade`, `link`, `isPremium`) VALUES
(1, 'club med', 10, 5.55, 'https://www.clubmed.fr/', 0),
(3, 'club marmara', 12, 9.11361, 'https://www.tui.fr/hotels-clubs-tui/club-marmara/', 1),
(4, 'framissima', 5, 7.73194, 'https://www.fram.fr/sejour/hotels-framissima/', 1),
(5, 'jet tours', 27, 5.03703, 'https://www.jettours.com/', 0),
(7, 'kappa club', 3, 7.66667, 'https://www.kappaclub.fr', 0),
(13, 'OpieOp', 1, 6, 'http://kappa.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_operator` (`idTourOperator`),
  ADD KEY `id_location` (`idLocation`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tour_operator` (`idTourOperator`);

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
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tour_operators`
--
ALTER TABLE `tour_operators`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `destinations`
--
ALTER TABLE `destinations`
  ADD CONSTRAINT `destinations_ibfk_1` FOREIGN KEY (`idLocation`) REFERENCES `locations` (`id`),
  ADD CONSTRAINT `fk_operator` FOREIGN KEY (`idTourOperator`) REFERENCES `tour_operators` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `fk_tour_operator` FOREIGN KEY (`idTourOperator`) REFERENCES `tour_operators` (`id`) ON DELETE CASCADE;
--
-- Database: `comparoperateurcedmarc`
--
CREATE DATABASE IF NOT EXISTS `comparoperateurcedmarc` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `comparoperateurcedmarc`;

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
(3, 'Bora Bora', 1000, 1, 'Bora-Bora est une des îles Sous-le-Vent de l\'archipel de la Société en Polynésie française. Elle est située à 255 km à l\'ouest-nord-ouest de la capitale Papeete. L\'orthographe réelle de son nom est Pora Pora (« première née » en tahitien)1. On l\'appelle aussi Mai te pora (« créée par les dieux »).  Elle abrite l\'aéroport de Bora-Bora.', 'assets/img/destinations/bora_bora.jpg'),
(6, 'Okinawa', 15000, 3, 'L\'archipel d’Okinawa (沖縄諸島, Okinawa shotō?), ou îles Okinawa, est un groupe d\'îles de la mer de Chine orientale situé au sud-ouest du Japon et au nord-est de l\'île de Taïwan. Il fait partie des îles Ryukyu et est rattaché à la préfecture d\'Okinawa. Les archipels Kerama et Daitō sont parfois considérés comme en faisant partie. L\'île d\'Okinawa borde la mer des Philippines sur sa côte sud-est.  On y parle l\'okinawaïen, qui fait partie des langues ryukyu.', 'assets/img/destinations/Okinawa.jpg'),
(7, 'Kazakhstan', 2000, 3, 'Le Kazakhstan, en forme longue la république du Kazakhstan (en kazakh : Qazaqstan, Қазақстан, /qɑzɑqˈstɑn/ et Qazaqstan Respýblıkasy, Қазақстан Республикасы, en russe : Казахстан, Kazakhstán, /kɐzəxˈstɐn/ et Республика Казахстан, Respoublika Kazakhstán), est un pays situé majoritairement au nord de l\'Asie centrale et en partie en Europe de l\'Est (à l\'ouest du fleuve Oural). Sa capitale est Noursoultan.  Pays de steppes peuplé autrefois de cavaliers nomades turcophones, il fit partie de l\'Empire russe puis de l\'Union des républiques socialistes soviétiques. Il est indépendant depuis 1991.  Ses habitants sont appelés les Kazakhstanais. (Le terme Kazakhs ne s\'applique qu\'à l\'ethnie majoritaire du pays).', 'assets/img/destinations/kazakhstan.jpg'),
(8, 'Corse', 4000, 5, 'La Corse (Corsica en corse et en italien ; Còrsega en ligure) est une île située en mer Méditerranée et une collectivité territoriale unique française.  Quatrième île de la mer Méditerranée par sa superficie, la Corse a été rattachée durant près de quatre siècles à la République de Gênes avant une brève indépendance comme royaume de Corse le 15 avril 1736. En 1755, elle adopte la première constitution démocratique de l\'histoire moderne donnant pour la première fois le droit de vote aux femmes. Le 15 mai 1768, elle est cédée par la République de Gênes à la France, bien que Gênes n\'ait qu\'une emprise limitée sur l\'île depuis la déclaration d\'indépendance de 1755. Elle est conquise militairement par le Royaume de France lors de la bataille de Ponte-Novo, le 9 mai 1769.', 'assets/img/destinations/corse.jpg'),
(9, 'Roumanie', 500, 6, 'La Roumanie (en roumain : România) est un État d\'Europe du Sud-Est, le septième pays le plus peuplé de l\'Union européenne et le neuvième par sa superficie. La géographie du pays est structurée par les Carpates, le Danube et le littoral de la mer Noire. Située aux confins de l\'Europe du Sud-Est et de l\'Europe centrale et orientale, la Roumanie a comme pays frontaliers la Hongrie, l\'Ukraine, la Moldavie, la Bulgarie et la Serbie.  Une forte majorité de la population s\'identifie comme de langue roumaine (89 %) et de tradition chrétienne orthodoxe (81 %) ; 11 % des habitants déclarent appartenir à des minorités ethniques et 19 % à des confessions minoritaires ou être sans religion.', 'assets/img/destinations/roumanie.jpg'),
(11, 'Australie', 15000, 4, 'L\'Australie, en forme longue le Commonwealth d\'Australie (en anglais : Australia et Commonwealth of Australia), est un pays de l\'hémisphère sud dont la superficie couvre la plus grande partie de l\'Océanie. En plus de l\'île éponyme, l\'Australie comprend également la Tasmanie ainsi que d’autres îles des océans Austral, Pacifique et Indien. Les nations voisines comprennent notamment l\'Indonésie, le Timor oriental et la Papouasie-Nouvelle-Guinée au nord, les îles Salomon, Vanuatu et le territoire français de Nouvelle-Calédonie au nord-est, la Nouvelle-Zélande au sud-est ainsi que le territoire français des îles Kerguelen (TAAF) à l\'ouest des îles australiennes Heard et McDonald.', 'assets/img/destinations/australie.jpg'),
(19, 'Roanne', 150, 6, 'Roanne c\'est bien, viendez ! ', 'assets/img/destinations/Roanne.jpeg'),
(20, 'Miai', 5000, 4, ' Miami, son eau bleu turquoise, ses grattes-ciel....', 'assets/img/destinations/miami.jpeg'),
(21, 'dvf', 21, 1, ' sqdfghjk', 'assets/img/destinations/download.png');

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
(8, 'Okinawa c\'était le pied !', 'japan guy', 3),
(9, 'fdsfdsf', 'fdsfd', 4),
(10, 'cxwcw', 'cxw', 4);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
--
-- Database: `ComparOperator-Kyl_Bapt`
--
CREATE DATABASE IF NOT EXISTS `ComparOperator-Kyl_Bapt` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ComparOperator-Kyl_Bapt`;

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` int(10) NOT NULL,
  `location` varchar(150) NOT NULL,
  `price` int(10) NOT NULL,
  `id_tour_operator` int(10) NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `location`, `price`, `id_tour_operator`, `img`) VALUES
(1, 'Paris', 250, 1, 'Paris.jpg'),
(2, 'Paris', 320, 3, 'Paris.jpg'),
(3, 'Paris', 400, 4, 'Paris.jpg'),
(4, 'Paris', 435, 5, 'Paris.jpg'),
(5, 'Paris', 480, 6, 'Paris.jpg'),
(6, 'Ajaccio', 500, 1, 'Ajaccio.jpg'),
(7, 'Ajaccio', 520, 3, 'Ajaccio.jpg'),
(8, 'Ajaccio', 580, 4, 'Ajaccio.jpg'),
(9, 'Ajaccio', 620, 5, 'Ajaccio.jpg'),
(10, 'Ajaccio', 650, 6, 'Ajaccio.jpg'),
(11, 'Newyork', 850, 1, 'Newyork.jpg'),
(12, 'Newyork', 890, 3, 'Newyork.jpg'),
(13, 'Newyork', 915, 4, 'Newyork.jpg'),
(14, 'Newyork', 930, 5, 'Newyork.jpg'),
(15, 'Newyork', 980, 6, 'Newyork.jpg'),
(16, 'Tokyo', 1000, 1, 'Tokyo.jpg'),
(17, 'Tokyo', 1180, 3, 'Tokyo.jpg'),
(18, 'Tokyo', 1230, 4, 'Tokyo.jpg'),
(19, 'Tokyo', 1300, 5, 'Tokyo.jpg'),
(20, 'Tokyo', 1410, 6, 'Tokyo.jpg'),
(21, 'Sydney', 2000, 1, 'Sydney.jpg'),
(22, 'Sydney', 2140, 3, 'Sydney.jpg'),
(23, 'Sydney', 2250, 4, 'Sydney.jpg'),
(24, 'Sydney', 2360, 5, 'Sydney.jpg'),
(25, 'Sydney', 2470, 6, 'Sydney.jpg');

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
(4, 'Niceluuuh !', 'Brutus\r\n', 3),
(5, 'hey hey hey ', 'Pitter', 4),
(6, 'Coucou', 'MissJirachi', 5),
(7, 'heeey salut tout le monde c\'st ', 'David lafarge pokemon', 6),
(8, 'BONSOIR PARIS', 'BAPTISTE', 6),
(9, 'aaaaa', 'retets', 6),
(10, 'nnandnazdazdazd', 'NOTRE PROJET', 5),
(12, 'aaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaa', 4),
(13, 'jeazdauzdb', 'azdazd', 1),
(18, 'aaaaaaaaaaaaaa', 'aaaaaaaaaa', 5),
(21, 'J\'aime les frites et les merguez de chez clubmed éhéhé', 'Kylian', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tour_operators`
--

CREATE TABLE `tour_operators` (
  `id` int(10) NOT NULL,
  `name` varchar(150) NOT NULL,
  `grade` int(2) DEFAULT NULL,
  `link` varchar(255) NOT NULL,
  `is_premium` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tour_operators`
--

INSERT INTO `tour_operators` (`id`, `name`, `grade`, `link`, `is_premium`) VALUES
(1, 'ClubMed', 5, 'https://www.clubmed.fr/', 0),
(3, 'Tui', 3, 'https://www.tui.fr/', 0),
(4, 'JetTours', 2, 'https://www.jettours.com/', 0),
(5, 'FRAM', 4, 'https://www.fram.fr/', 0),
(6, 'KappaClub', 5, 'https://www.kappaclub.fr/', 0),
(7, 'test', NULL, 'test', 0),
(8, 'test2', NULL, 'test', 0);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

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
--
-- Database: `ComparOperatorA&E`
--
CREATE DATABASE IF NOT EXISTS `ComparOperatorA&E` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ComparOperatorA&E`;

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` int(10) NOT NULL,
  `location` varchar(150) NOT NULL,
  `price` int(10) NOT NULL,
  `id_tour_operator` int(10) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `pathImg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `location`, `price`, `id_tour_operator`, `ville`, `pathImg`) VALUES
(19, 'Espagne', 633, 1, 'Gijón', '/assets/img/upload/Gijon.jpg'),
(20, 'Espagne', 650, 22, 'Gijón', '/assets/img/upload/Gijon.jpg'),
(21, 'Espagne', 700, 23, 'Gijón', '/assets/img/upload/Gijon.jpg'),
(26, 'Espagne', 780, 24, 'Gijón', '../../assets/img/upload/Gijon.jpg'),
(29, 'Espagne', 650, 25, 'Gijón', '../../assets/img/upload/Gijon.jpg'),
(30, 'Espagne', 650, 9999, 'Gijón', '../../assets/img/upload/Gijon.jpg'),
(31, 'Île de La Réunion', 1454, 1, 'Saint-Gilles les Bains', '../../assets/img/upload/Saint-Gilles les Bains.jpg'),
(32, 'Île de La Réunion', 1454, 9999, 'Saint-Gilles les Bains', '../../assets/img/upload/Saint-Gilles les Bains.jpg'),
(33, 'Île de La Réunion', 1500, 22, 'Saint-Gilles les Bains', '../../assets/img/upload/Saint-Gilles les Bains.jpg'),
(47, 'Île de La Réunion', 1450, 23, 'Saint-Gilles les Bains', '../../assets/img/upload/Saint-Gilles les Bains.jpg'),
(52, 'Île de La Réunion', 1200, 24, 'Saint-Gilles les Bains', '../../assets/img/upload/Saint-Gilles les Bains.jpg'),
(53, 'Île de La Réunion', 1299, 25, 'Saint-Gilles les Bains', '../../assets/img/upload/Saint-Gilles les Bains.jpg'),
(54, 'Grèce', 734, 1, 'Héraklion', '../../assets/img/upload/Heraklion.jpg'),
(55, 'Grèce', 734, 9999, 'Héraklion', '../../assets/img/upload/Heraklion.jpg'),
(56, 'Grèce', 720, 22, 'Héraklion', '../../assets/img/upload/Heraklion.jpg'),
(57, 'Grèce', 740, 23, 'Héraklion', '../../assets/img/upload/Heraklion.jpg'),
(58, 'Grèce', 725, 24, 'Héraklion', '../../assets/img/upload/Heraklion.jpg'),
(59, 'Grèce', 739, 25, 'Héraklion', '../../assets/img/upload/Heraklion.jpg'),
(60, 'Italie', 681, 1, 'Palerme', '../../assets/img/upload/Palerme.jpg'),
(61, 'Italie', 681, 9999, 'Palerme', '../../assets/img/upload/Palerme.jpg'),
(62, 'Italie', 675, 22, 'Palerme', '../../assets/img/upload/Palerme.jpg'),
(64, 'Italie', 650, 23, 'Palerme', '../../assets/img/upload/Palerme.jpg'),
(65, 'Italie', 689, 24, 'Palerme', '../../assets/img/upload/Palerme.jpg'),
(66, 'Italie', 676, 25, 'Palerme', '../../assets/img/upload/Palerme.jpg'),
(67, 'Portugal', 444, 1, 'Ílhavo', '../../assets/img/upload/lhavo.jpg'),
(68, 'Portugal', 444, 9999, 'Ílhavo', '../../assets/img/upload/lhavo.jpg'),
(69, 'Portugal', 430, 22, 'Ílhavo', '../../assets/img/upload/lhavo.jpg'),
(70, 'Portugal', 445, 23, 'Ílhavo', '../../assets/img/upload/lhavo.jpg'),
(71, 'Portugal', 449, 24, 'Ílhavo', '../../assets/img/upload/lhavo.jpg'),
(72, 'Portugal', 442, 25, 'Ílhavo', '../../assets/img/upload/lhavo.jpg'),
(73, 'États-Unis - Californie', 2040, 1, 'San José', '../../assets/img/upload/San Jose.jpg'),
(74, 'États-Unis - Californie', 2040, 9999, 'San José', '../../assets/img/upload/San Jose.jpg'),
(75, 'États-Unis - Californie', 2035, 22, 'San José', '../../assets/img/upload/San Jose.jpg'),
(76, 'États-Unis - Californie', 2045, 23, 'San José', '../../assets/img/upload/San Jose.jpg'),
(77, 'États-Unis - Californie', 2044, 24, 'San José', '../../assets/img/upload/San Jose.jpg'),
(78, 'États-Unis - Californie', 2036, 25, 'San José', '../../assets/img/upload/San Jose.jpg'),
(79, 'Canada', 1374, 1, 'Québec', '../../assets/img/upload/Quebec.jpeg'),
(80, 'Canada', 1374, 9999, 'Québec', '../../assets/img/upload/Quebec.jpeg'),
(81, 'Canada', 1380, 22, 'Québec', '../../assets/img/upload/Quebec.jpeg'),
(82, 'Canada', 1370, 23, 'Québec', '../../assets/img/upload/Quebec.jpeg'),
(83, 'Canada', 1385, 24, 'Québec', '../../assets/img/upload/Quebec.jpeg'),
(84, 'Canada', 1378, 25, 'Québec', '../../assets/img/upload/Quebec.jpeg'),
(85, 'France', 1423, 1, 'Paris', '../../assets/img/upload/paris.jpg'),
(86, 'France', 1423, 9999, 'Paris', '../../assets/img/upload/paris.jpg'),
(87, 'France', 1400, 22, 'Paris', '../../assets/img/upload/paris.jpg'),
(88, 'France', 1426, 23, 'Paris', '../../assets/img/upload/paris.jpg'),
(90, 'France', 1415, 24, 'Paris', '../../assets/img/upload/paris.jpg'),
(91, 'France', 1428, 25, 'Paris', '../../assets/img/upload/paris.jpg'),
(98, 'Russie', 548, 1, 'Moscou', '../../assets/img/upload/moscou.jpg'),
(99, 'Russie', 548, 9999, 'Moscou', '../../assets/img/upload/moscou.jpg'),
(100, 'Russie', 560, 22, 'Moscou', '../../assets/img/upload/moscou.jpg'),
(102, 'Russie', 539, 23, 'Moscou', '../../assets/img/upload/moscou.jpg'),
(103, 'Russie', 545, 24, 'Moscou', '../../assets/img/upload/moscou.jpg'),
(104, 'Russie', 541, 25, 'Moscou', '../../assets/img/upload/moscou.jpg'),
(105, 'Unguja - Tanzanie', 1152, 1, 'Zanzibar', '../../assets/img/upload/Zanzibar.jpg'),
(106, 'Unguja - Tanzanie', 1152, 9999, 'Zanzibar', '../../assets/img/upload/Zanzibar.jpg'),
(107, 'Unguja - Tanzanie', 1155, 22, 'Zanzibar', '../../assets/img/upload/Zanzibar.jpg'),
(108, 'Unguja - Tanzanie', 1149, 23, 'Zanzibar', '../../assets/img/upload/Zanzibar.jpg'),
(109, 'Unguja - Tanzanie', 1148, 24, 'Zanzibar', '../../assets/img/upload/Zanzibar.jpg'),
(110, 'Unguja - Tanzanie', 1150, 25, 'Zanzibar', '../../assets/img/upload/Zanzibar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) NOT NULL,
  `message` varchar(250) NOT NULL,
  `author` varchar(150) NOT NULL,
  `id_tour_operator` int(10) NOT NULL,
  `vote` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `message`, `author`, `id_tour_operator`, `vote`) VALUES
(1, 'super club !', 'alex', 1, 0),
(22, 'cool!', 'pedro', 22, 0),
(35, 'Génial!!!', 'axel', 23, 0),
(40, 'pedro', 'R', 1, 5),
(41, 'zefse', 'e', 1, 5),
(43, 'axel', 'génial', 1, 5),
(44, 'axel', 'génial', 1, 5),
(45, 'axel', 'e', 1, 0),
(46, 'cc', 'emilie', 1, 0),
(47, 'fdsfdsf', 'ddfds', 23, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tour_operators`
--

CREATE TABLE `tour_operators` (
  `id` int(10) NOT NULL,
  `name` varchar(150) NOT NULL,
  `grade` float NOT NULL DEFAULT 0,
  `link` varchar(255) NOT NULL,
  `is_premium` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tour_operators`
--

INSERT INTO `tour_operators` (`id`, `name`, `grade`, `link`, `is_premium`) VALUES
(1, 'Club Med', 2, 'https://www.clubmed.fr/', 1),
(22, 'Air France', 0, 'https://www.airfrance.fr/', 0),
(23, 'Sejours-voyages', 0, 'https://www.sejoursvoyages.com/', 1),
(24, 'La Française des Circuits', 0, 'https://www.lafrancaisedescircuits.biz/index.do?idMicro=', 0),
(25, 'Un Monde à Part', 0, 'https://www.unmondeadeux.com/', 1),
(9999, 'famtome', 5, 'aaaa', 1);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tour_operators`
--
ALTER TABLE `tour_operators`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000;

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
--
-- Database: `ComparOperatorCM`
--
CREATE DATABASE IF NOT EXISTS `ComparOperatorCM` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ComparOperatorCM`;

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
(25, 'Worst tour operator ever', 'John', 7),
(26, 'sdfg', 'fdsfds', 6),
(27, 'dsq', 'dsqdsq', 8),
(28, 'sqdf', 'fds', 8);

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
(6, 'Thomas Cook', 5, 2, 'https://www.thomascook.fr/', '../assets/img/logoTO/81thomas-cook.jpg', 0),
(7, 'Club Med', 1, 1, 'https://www.clubmed.fr/', '../assets/img/logoTO/99club-med.png', 0),
(8, 'Tui', 7, 3, 'https://www.tui.fr/', '../assets/img/logoTO/69index.png', 0),
(9, 'eza', 0, 0, 'http://comparoperator_cm.loc/pages/pagesAdmin/addNewTO.php', '../assets/img/logoTO/45download.png', 0);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tour_operators`
--
ALTER TABLE `tour_operators`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
--
-- Database: `comparOperatorPierreChris`
--
CREATE DATABASE IF NOT EXISTS `comparOperatorPierreChris` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `comparOperatorPierreChris`;

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
(50, 'france', 701, 40),
(51, 'portugal', 22222, 34);

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
(51, 'moyen ', 'pierre', 31, 3),
(52, 'aaaa', 'aa', 37, 2);

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
(34, 'Thomascooks', 0, 'http://comparoperator_cp.loc/admin/update.php', 0, 'download.png'),
(35, 'SelecTour', 0, 'https://www.linkedin.com/in/christophe-chaxel/', 0, 'selectour-crop.jpg'),
(36, 'Holiday Extras', 0, 'https://www.linkedin.com/in/christophe-chaxel/', 0, 'holidayextra-crop.jpg'),
(37, 'Club Med', 2, 'https://www.linkedin.com/in/christophe-chaxel/', 1, 'clubmed-crop.png'),
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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

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
--
-- Database: `Luxury_Compare_Operator`
--
CREATE DATABASE IF NOT EXISTS `Luxury_Compare_Operator` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `Luxury_Compare_Operator`;

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` int(10) NOT NULL,
  `location` varchar(150) NOT NULL,
  `price` int(10) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `imgPath` varchar(255) DEFAULT NULL,
  `id_tour_operator` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `location`, `price`, `description`, `imgPath`, `id_tour_operator`) VALUES
(2, 'test', 250, 'test de description', 'test', 1),
(3, 'test', 250, NULL, 'test', 3),
(4, 'Le domaine de Ker-Ys', 450, 'Une situation exceptionnelle dans la baie de Douarnenez ! ', 'lddky', 4),
(7, 'Le domaine de Ker-Ys', 0, 'Une situation exceptionnelle dans la baie de Douarnenez ! ', 'lddky', 10),
(9, 'Ajaccio', 0, 'Ajaccio est la capitale de la Corse, une île française en mer Méditerranée. Cité portuaire sur la sauvage côte ouest de l\'île, elle est la ville qui a vu naître Napoléon Bonaparte, empereur français, en 1769.', 'ajaccio', 10),
(10, 'Raf-Raf', 0, 'Raf Raf ou Rafraf est une ville du nord-est de la Tunisie située à une soixantaine de kilomètres de Tunis, une quarantaine de kilomètres de Bizerte et à sept kilomètres de Ras Jebel.', 'rafraf', 10),
(11, 'Barcelone', 0, 'Barcelone, la capitale cosmopolite de la région espagnole de Catalogne, est réputée pour son art et son architecture. ', 'barca', 10),
(12, 'Naples', 0, 'Description\r\nNaples est une ville située au sud de l\'Italie, sur la baie de Naples. À proximité se trouve le Vésuve, volcan toujours en activité qui a détruit la ville romaine voisine de Pompéi.', 'naples', 10),
(13, 'Sydney', 0, 'Sydney, capitale de la Nouvelle-Galles du Sud et l\'une des plus grandes villes d\'Australie, est renommée pour son opéra situé dans le port, avec son design distinctif en forme de voiles.', 'sidney', 10),
(14, 'Crête', 0, 'La Crète, l’île grecque la plus grande, offre des paysages variés allant des plages de sable fin, comme celle d’Elafonisi, aux reliefs montagneux, comme ceux des montagnes Blanches', 'crete', 10),
(15, 'Majorque', 0, 'Mallorca (Majorque) est l\'une des îles espagnoles des Baléares, dans la Méditerranée. Elle est réputée pour ses stations balnéaires, ses criques protégées, ses montagnes en calcaire ainsi que ses ruines maures et romaines.', 'majorque', 10),
(16, 'Cannes', 0, 'Cannes, ville balnéaire de la Côte d\'Azur, est célèbre pour son festival international du film. La Croisette, boulevard qui longe la côte, est bordée de plages de sable fin, de boutiques de luxe et de palaces', 'cannes', 10),
(17, 'Pula', 0, 'Pula est une ville de bord de mer située à l\'extrémité de la péninsule istrienne, en Croatie. Elle est connue pour son port protégé, sa côte bordée de plages et ses ruines romaines', 'pula', 10),
(18, 'Ajaccio', 500, NULL, NULL, 4),
(19, 'Barcelone', 350, NULL, NULL, 7),
(26, 'Raf-Raf', 123, NULL, NULL, 8),
(31, 'Barcelone', 123, NULL, NULL, 7),
(33, 'test', 123, NULL, NULL, 3),
(34, 'test', 12314, NULL, NULL, 3);

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
(3, 'test', 'test', 1),
(4, 'test2', 'test2', 1),
(5, 'Pas mal !', 'Jean', 4),
(6, 'dsqfgqsdfgqsd', 'qsgqsdg', 1),
(7, 'salut', 'salut', 1),
(8, 'test', 'test', 1),
(9, 'azer', 'azer', 1),
(10, 'azeazeqsd', 'azerqsd', 1),
(11, 'QFQSF', 'qdsfsqd', 1),
(12, 'SQDFSD', 'fZQSDF', 4),
(13, 'fdsfdfsd', 'fdsfds', 4);

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
(1, 'club med', 5, 'https://www.clubmed.fr/', 1),
(3, 'test', 5, 'https://www.test.fr/', 1),
(4, 'Homair Vacances', 5, 'https://www.homair.com/', 1),
(5, 'Pierre et Vacances', 3, 'https://www.pierreetvacances.com/', 0),
(6, 'Odalys', 3, 'https://www.odalys-vacances.com/', 0),
(7, 'Arts et vie', 3, 'https://www.artsetvie.com/', 0),
(8, 'VVF Vacances', 4, 'https://www.vvf-villages.fr/', 1),
(10, 'admin', 0, '', 1);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tour_operators`
--
ALTER TABLE `tour_operators`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000012;

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
