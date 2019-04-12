-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 10 avr. 2019 à 08:45
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `matt_boutique`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresses`
--

DROP TABLE IF EXISTS `adresses`;
CREATE TABLE IF NOT EXISTS `adresses` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `last_name` varchar(70) NOT NULL,
  `first_name` varchar(70) NOT NULL,
  `num_street` varchar(20) NOT NULL,
  `street` varchar(255) NOT NULL,
  `comp` varchar(255) NOT NULL,
  `zip_code` varchar(8) NOT NULL,
  `city` varchar(70) NOT NULL,
  `country` varchar(70) NOT NULL,
  `customer_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=123 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `adresses`
--

INSERT INTO `adresses` (`id`, `last_name`, `first_name`, `num_street`, `street`, `comp`, `zip_code`, `city`, `country`, `customer_id`) VALUES
(1, 'Sanders', 'Jael', '70', 'Eros Impasse', 'fermentum arcu. Vestibulum ante', '95543', 'Saint-Nazaire', 'France', 20),
(2, 'Bolton', 'Philip', '97', 'Lorem, Impasse', 'tempor, est ac mattis', '10324', 'Orléans', 'France', 38),
(3, 'Schwartz', 'Madaline', '58', 'Risus. Route', 'nisl arcu iaculis enim,', '05492', 'Vierzon', 'France', 28),
(4, 'Shaffer', 'Joy', '30', 'Dignissim Ave', 'ante bibendum ullamcorper. Duis', '65490', 'Nîmes', 'France', 28),
(5, 'Mays', 'Tamekah', '61bis', 'Arcu. Avenue', 'Integer sem elit, pharetra', '38000', 'Grenoble', 'France', 13),
(6, 'Kirk', 'Basil', '57', 'Et Ave', 'Quisque tincidunt pede ac', '27058', 'Lanester', 'France', 21),
(7, 'Huffman', 'Murphy', '23', 'Felis Impasse', 'tellus. Phasellus elit pede,', '26546', 'Champigny-sur-Marne', 'France', 40),
(8, 'Merrill', 'Vernon', '53', 'Risus Chemin', 'ultricies ornare, elit elit', '49059', 'Saint-Médard-en-Jalles', 'France', 33),
(9, 'Clark', 'Morgan', '12', 'Pellentesque Impasse', 'sapien, gravida non, sollicitudin', '27499', 'Montbéliard', 'France', 23),
(10, 'Burch', 'Baxter', '2', 'Nullam Route', 'mi, ac mattis velit', '38024', 'Épinal', 'France', 13),
(11, 'Delacruz', 'Daphne', '98', 'Lacus. Chemin', 'rutrum eu, ultrices sit', '83067', 'Châteauroux', 'France', 6),
(12, 'Becker', 'Reuben', '69', 'Gravida Chemin', 'ut quam vel sapien', '45164', 'Aubervilliers', 'France', 21),
(13, 'Ewing', 'Brandon', '60', 'Luctus Route', 'lorem ut aliquam iaculis,', '41375', 'Nîmes', 'France', 4),
(14, 'Cummings', 'Zane', '57', 'Accumsan Rd.', 'eleifend non, dapibus rutrum,', '61038', 'Aurillac', 'France', 38),
(15, 'Mcdaniel', 'Yetta', '13', 'Aliquet Ave', 'Suspendisse tristique neque venenatis', '81855', 'Saint-Dié-des-Vosges', 'France', 20),
(16, 'Frederick', 'Whoopi', '52', 'In Impasse', 'cursus. Integer mollis. Integer', '17848', 'Mont-de-Marsan', 'France', 38),
(17, 'Rowland', 'Chester', '48', 'At, Avenue', 'eros nec tellus. Nunc', '78827', 'Illkirch-Graffenstaden', 'France', 7),
(18, 'Larsen', 'Sara', '88ter', 'Cubilia Chemin', 'Vivamus rhoncus. Donec est.', '38000', 'Grenoble', 'France', 21),
(19, 'Farmer', 'Ainsley', '72', 'Magna Route', 'Curae; Phasellus ornare. Fusce', '09713', 'Saintes', 'France', 36),
(20, 'Davis', 'Dalton', '89', 'Cursus Av.', 'Cras eget nisi dictum', '07591', 'Rouen', 'France', 39),
(21, 'Morgan', 'Christian', '41', 'Integer Rd.', 'libero est, congue a,', '12615', 'Saumur', 'France', 13),
(23, 'Bishop', 'Cadman', '52', 'Velit Rue', 'semper egestas, urna justo', '63604', 'Saint-Brieuc', 'France', 2),
(24, 'Santana', 'Shaine', '78', 'Sed Ave', 'ac, eleifend vitae, erat.', '89619', 'Aurillac', 'France', 33),
(25, 'Downs', 'Bruno', '69', 'Congue, Avenue', 'condimentum eget, volutpat ornare,', '14296', 'Aurillac', 'France', 30),
(26, 'Mccall', 'Murphy', '77', 'Nam Avenue', 'Nulla eget metus eu', '05527', 'Besançon', 'France', 20),
(27, 'Waters', 'Karleigh', '67', 'Nascetur Avenue', 'Vivamus sit amet risus.', '11172', 'Montauban', 'France', 40),
(28, 'Donovan', 'Brooke', '48', 'Tristique Chemin', 'libero. Proin mi. Aliquam', '30471', 'Le Havre', 'France', 5),
(29, 'Cook', 'Andrew', '79', 'Mus. Route', 'sed dictum eleifend, nunc', '70943', 'Limoges', 'France', 14),
(30, 'Malone', 'Charles', '89', 'Vestibulum Impasse', 'Nunc ac sem ut', '38000', 'Grenoble', 'France', 30),
(31, 'Battle', 'Macon', '21', 'Molestie Rue', 'arcu imperdiet ullamcorper. Duis', '53530', 'Dieppe', 'France', 37),
(32, 'Schultz', 'Clementine', '22', 'Sit Impasse', 'Sed nunc est, mollis', '68652', 'Saint-Étienne-du-Rouvray', 'France', 40),
(33, 'Dickerson', 'Rhonda', '11', 'Turpis Av.', 'Nulla interdum. Curabitur dictum.', '23504', 'Niort', 'France', 39),
(34, 'Giles', 'Ira', '11', 'Enim, Impasse', 'nonummy ac, feugiat non,', '50856', 'Bayonne', 'France', 3),
(35, 'Kerr', 'Piper', '90', 'Metus Rue', 'eget magna. Suspendisse tristique', '97568', 'Agen', 'France', 27),
(36, 'Bernard', 'Vladimir', '93', 'Rhoncus. Route', 'parturient montes, nascetur ridiculus', '48412', 'Poitiers', 'France', 2),
(37, 'Hunt', 'Mari', '30', 'Non Chemin', 'dictum eu, eleifend nec,', '44519', 'Troyes', 'France', 13),
(38, 'Perez', 'Andrew', '76', 'Vivamus Av.', 'tempus non, lacinia at,', '10840', 'Limoges', 'France', 11),
(39, 'Chambers', 'Isaac', '9', 'Pede Chemin', 'a, malesuada id, erat.', '38100', 'Grenoble', 'France', 35),
(40, 'Castillo', 'Henry', '73', 'Risus. Impasse', 'In nec orci. Donec', '71826', 'Blois', 'France', 36),
(41, 'Atkins', 'Macey', '2', 'Urna Rue', 'porta elit, a feugiat', '47412', 'Alès', 'France', 14),
(42, 'Downs', 'Harlan', '57', 'Turpis Ave', 'consequat, lectus sit amet', '52346', 'Sens', 'France', 20),
(43, 'Wilkerson', 'Nevada', '28', 'Nec, Rd.', 'tortor, dictum eu, placerat', '59956', 'Ajaccio', 'France', 28),
(44, 'Woodward', 'Cassidy', '42', 'Ut Route', 'Duis cursus, diam at', '97265', 'Le Petit-Quevilly', 'France', 21),
(45, 'Mosley', 'Elmo', '6', 'Nunc Rue', 'dui. Cras pellentesque. Sed', '67560', 'Périgueux', 'France', 37),
(46, 'Meyer', 'Kennan', '67', 'Etiam Chemin', 'senectus et netus et', '53328', 'Lanester', 'France', 28),
(47, 'Norman', 'Dustin', '29', 'Adipiscing Avenue', 'ut, pharetra sed, hendrerit', '16598', 'Forbach', 'France', 25),
(48, 'Baker', 'Sonya', '60', 'Bibendum. Impasse', 'massa. Integer vitae nibh.', '27437', 'Saint-Étienne-du-Rouvray', 'France', 11),
(49, 'Munoz', 'Ahmed', '5', 'Condimentum Ave', 'placerat eget, venenatis a,', '02630', 'Angers', 'France', 31),
(50, 'Wolfe', 'Stacy', '34', 'Cras Rue', 'Nulla eget metus eu', '26016', 'Paris', 'France', 18),
(51, 'Tillman', 'Wallace', '23', 'Ut Av.', 'mattis. Cras eget nisi', '39228', 'Tourcoing', 'France', 5),
(52, 'Cervantes', 'Irma', '14', 'Enim. Av.', 'nec, euismod in, dolor.', '83901', 'Besançon', 'France', 39),
(53, 'Blair', 'Jordan', '96', 'Dignissim. Rd.', 'auctor ullamcorper, nisl arcu', '05724', 'Sens', 'France', 5),
(54, 'Hunt', 'Cadman', '39', 'Ligula. Chemin', 'feugiat metus sit amet', '98156', 'Troyes', 'France', 11),
(55, 'Luna', 'Vanna', '10', 'Ipsum Rue', 'augue id ante dictum', '38100', 'Grenoble', 'France', 16),
(56, 'Sparks', 'Taylor', '24', 'Blandit Ave', 'primis in faucibus orci', '16833', 'Le Cannet', 'France', 38),
(57, 'Alvarez', 'Beau', '54', 'In Av.', 'arcu et pede. Nunc', '11543', 'Aubagne', 'France', 2),
(58, 'Cook', 'Slade', '65', 'Tellus Impasse', 'Quisque varius. Nam porttitor', '60610', 'Vandoeuvre-lès-Nancy', 'France', 7),
(59, 'Dixon', 'Brian', '9', 'Ultricies Chemin', 'bibendum ullamcorper. Duis cursus,', '01794', 'Limoges', 'France', 37),
(60, 'Levine', 'Jermaine', '74', 'Mauris Avenue', 'vitae, aliquet nec, imperdiet', '85242', 'Illkirch-Graffenstaden', 'France', 24),
(61, 'Hyde', 'Jamal', '40', 'Vitae Chemin', 'Cras convallis convallis dolor.', '68350', 'Brive-la-Gaillarde', 'France', 28),
(62, 'Stein', 'Victor', '40', 'Ut Rue', 'luctus sit amet, faucibus', '80908', 'Tarbes', 'France', 26),
(63, 'Stanley', 'Carolyn', '44', 'Turpis. Impasse', 'ipsum. Suspendisse non leo.', '54886', 'Saintes', 'France', 5),
(64, 'Ray', 'Faith', '56', 'Ut Rd.', 'Suspendisse dui. Fusce diam', '50310', 'Creil', 'France', 2),
(65, 'Kemp', 'Jesse', '76', 'Cum Ave', 'diam eu dolor egestas', '12444', 'Thionville', 'France', 12),
(66, 'Barnes', 'Darius', '77', 'Consequat Avenue', 'risus. In mi pede,', '30430', 'Charleville-Mézières', 'France', 31),
(67, 'Romero', 'Hiram', '7', 'Cursus Rd.', 'lacus. Quisque purus sapien,', '28644', 'Lambersart', 'France', 29),
(68, 'Webster', 'Dante', '69', 'Nullam Ave', 'vitae sodales nisi magna', '11774', 'Mont-de-Marsan', 'France', 16),
(69, 'Barlow', 'Kyle', '49', 'Adipiscing Rd.', 'amet, dapibus id, blandit', '58293', 'Saint-Brieuc', 'France', 11),
(70, 'Brady', 'Clarke', '15', 'At, Av.', 'Cras convallis convallis dolor.', '41428', 'Vitrolles', 'France', 10),
(71, 'Hardin', 'Merritt', '49', 'Maecenas Avenue', 'aliquet odio. Etiam ligula', '60128', 'Saint-Dié-des-Vosges', 'France', 12),
(72, 'Norris', 'Mara', '56', 'Tristique Route', 'auctor odio a purus.', '93193', 'Lanester', 'France', 29),
(73, 'Barrett', 'Lila', '63', 'Nunc Av.', 'Sed nulla ante, iaculis', '05068', 'Saint-Dizier', 'France', 17),
(74, 'Summers', 'Callie', '59', 'Aliquet, Avenue', 'at pretium aliquet, metus', '54761', 'Quimper', 'France', 32),
(76, 'Vega', 'Belle', '2', 'Nascetur Ave', 'porttitor scelerisque neque. Nullam', '52814', 'Châtellerault', 'France', 35),
(77, 'Hickman', 'Michael', '59', 'Dolor, Av.', 'Nunc pulvinar arcu et', '27226', 'Draguignan', 'France', 9),
(78, 'Robles', 'Ian', '84', 'Urna. Ave', 'ultrices sit amet, risus.', '77259', 'Besançon', 'France', 21),
(79, 'Downs', 'Valentine', '2', 'Feugiat Av.', 'sit amet lorem semper', '76240', 'Douai', 'France', 17),
(80, 'Wynn', 'Ignatius', '45', 'At Impasse', 'dui nec urna suscipit', '95680', 'Fréjus', 'France', 33),
(81, 'Weber', 'Aquila', '73', 'Mauris Ave', 'Donec egestas. Aliquam nec', '80385', 'Limoges', 'France', 14),
(82, 'Burt', 'Forrest', '80', 'Consectetuer Ave', 'sociis natoque penatibus et', '16613', 'Nevers', 'France', 20),
(83, 'Harrell', 'Clio', '32', 'In Avenue', 'cursus purus. Nullam scelerisque', '93526', 'Saint-Malo', 'France', 33),
(84, 'Morse', 'Coby', '97', 'Cursus, Ave', 'a felis ullamcorper viverra.', '22015', 'Rodez', 'France', 9),
(85, 'Bradford', 'Justine', '61', 'Lectus, Route', 'ante bibendum ullamcorper. Duis', '67418', 'Brest', 'France', 22),
(86, 'Underwood', 'Claudia', '91', 'Egestas. Avenue', 'urna, nec luctus felis', '36087', 'Calais', 'France', 9),
(87, 'Carver', 'Wang', '13', 'Volutpat. Av.', 'condimentum. Donec at arcu.', '74179', 'Wattrelos', 'France', 21),
(88, 'Dorsey', 'Carter', '26', 'Curabitur Rd.', 'magna. Lorem ipsum dolor', '90660', 'Montigny-lès-Metz', 'France', 33),
(89, 'Kline', 'Brett', '38', 'Erat, Chemin', 'odio sagittis semper. Nam', '81327', 'Ajaccio', 'France', 6),
(90, 'Rogers', 'Kasimir', '64', 'Non, Impasse', 'id ante dictum cursus.', '86986', 'Narbonne', 'France', 2),
(91, 'Joyce', 'Akeem', '7', 'Ac Rue', 'massa rutrum magna. Cras', '71160', 'Le Puy-en-Velay', 'France', 20),
(92, 'Neal', 'Kaitlin', '58', 'Quam Chemin', 'Nulla facilisis. Suspendisse commodo', '21326', 'Orléans', 'France', 15),
(93, 'Lynch', 'Dominique', '74', 'Elit Rue', 'Nullam vitae diam. Proin', '09427', 'Bastia', 'France', 6),
(94, 'Bowman', 'Hiram', '39', 'Tellus Ave', 'laoreet lectus quis massa.', '84107', 'Metz', 'France', 27),
(95, 'Allison', 'Garrett', '45', 'Mi, Av.', 'et malesuada fames ac', '14746', 'Aix-en-Provence', 'France', 38),
(96, 'Wright', 'Zena', '86', 'Aliquam Chemin', 'nisl sem, consequat nec,', '58037', 'Pontarlier', 'France', 16),
(97, 'Baxter', 'Tamara', '7', 'Ave', 'Aliquam ultrices iaculis odio.', '68700', 'Bourges', 'France', 22),
(98, 'Hammond', 'May', '77', 'Imperdiet Av.', 'faucibus orci luctus et', '83639', 'Cambrai', 'France', 34),
(99, 'Myers', 'Acton', '79', 'Cursus. Ave', 'elit sed consequat auctor,', '82647', 'Auxerre', 'France', 24),
(100, 'Allison', 'Violet', '87', 'Ante Impasse', 'risus. Donec egestas. Duis', '08033', 'Brive-la-Gaillarde', 'France', 12),
(107, 'Retest', 'test', '4', 'rue machin', 'truc bidule', '38000', 'Grenoble', 'France', 61),
(112, 'TestPanier', 'Panier', '1', 'rue panier', 'test complement', '38000', 'Grenoble', 'France', 66),
(113, 'TestPanier2', 'test', '2', 'rue panier', 'test complement', '38000', 'Grenoble', 'France', 67),
(114, 'TestPanier3', 'test', '3', 'rue panier', 'test complement', '38000', 'Grenoble', 'France', 68),
(122, 'nocustomer', 'nocustomer', '1', 'rue panier', 'truc', '38000', 'Grenoble', 'France', 78);

-- --------------------------------------------------------

--
-- Structure de la table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `last_name` varchar(70) NOT NULL,
  `first_name` varchar(70) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `customers`
--

INSERT INTO `customers` (`id`, `last_name`, `first_name`, `user_id`) VALUES
(2, 'Gibson', 'Flynn', 1),
(3, 'Joseph', 'Alan', 1),
(4, 'Carter', 'Odysseus', 1),
(5, 'Oneil', 'Calvin', 1),
(6, 'Morrow', 'Armando', 1),
(7, 'Valentine', 'Vaughan', 1),
(8, 'Reid', 'Leroy', 1),
(9, 'Clay', 'Callum', 1),
(10, 'Bradshaw', 'Cooper', 1),
(11, 'Christian', 'Lucius', 1),
(12, 'Dalton', 'William', 1),
(13, 'Galloway', 'David', 1),
(14, 'Fisher', 'Emery', 1),
(15, 'Morales', 'Reed', 1),
(16, 'Ferrell', 'Erasmus', 1),
(17, 'Elliott', 'Kamal', 1),
(18, 'Hampton', 'Lucian', 1),
(19, 'Mcintosh', 'Brady', 1),
(20, 'Stone', 'Marvin', 1),
(21, 'Vinson', 'Emerson', 1),
(22, 'Poole', 'Cullen', 1),
(23, 'Patrick', 'Tyler', 1),
(24, 'Leach', 'Xander', 1),
(25, 'Gaines', 'Macon', 1),
(26, 'Gallagher', 'Eaton', 1),
(27, 'Franks', 'Dieter', 1),
(28, 'Mullins', 'Zeph', 1),
(29, 'Parks', 'Hamish', 1),
(30, 'Pittman', 'Grady', 1),
(31, 'Hays', 'Chase', 1),
(32, 'Berg', 'Rogan', 1),
(33, 'Decker', 'Kenyon', 1),
(34, 'Crawford', 'Colt', 1),
(35, 'Callahan', 'Jasper', 1),
(36, 'Nieves', 'Magee', 1),
(37, 'Lowe', 'Roth', 1),
(38, 'Lynn', 'Logan', 1),
(39, 'Clemons', 'Ferdinand', 1),
(40, 'Pickett', 'Bevis', 1),
(61, 'Retest', 'test', 21),
(66, 'TestPanier', 'Panier', 22),
(67, 'TestPanier2', 'test', 23),
(68, 'TestPanier3', 'test', 24),
(69, 'TestPanier', 'Panier', 27),
(70, 'TestPanier', 'Panier', 27),
(71, 'TestPanier', 'Panier', 27),
(72, 'TestPanier', 'Panier', 27),
(73, 'TestPanier', 'Panier', 27),
(74, 'TestPanier', 'Panier', 27),
(78, 'nocustomer', 'nocustomer', 26);

-- --------------------------------------------------------

--
-- Structure de la table `discounts`
--

DROP TABLE IF EXISTS `discounts`;
CREATE TABLE IF NOT EXISTS `discounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `dateStart` date NOT NULL,
  `dateEnd` date NOT NULL,
  `type` enum('%','€') NOT NULL,
  `value` int(11) NOT NULL COMMENT 'centimes ou %',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `discounts`
--

INSERT INTO `discounts` (`id`, `name`, `dateStart`, `dateEnd`, `type`, `value`) VALUES
(1, 'St Valentin', '2019-02-01', '2019-02-15', '%', 1400),
(2, 'soldes', '2019-01-01', '2019-02-28', '€', 1000),
(3, 'Bon client', '2018-12-15', '2019-03-31', '%', 1000);

-- --------------------------------------------------------

--
-- Structure de la table `discount_product`
--

DROP TABLE IF EXISTS `discount_product`;
CREATE TABLE IF NOT EXISTS `discount_product` (
  `discount_id` int(11) NOT NULL,
  `product_id` int(10) NOT NULL,
  `price` int(10) UNSIGNED NOT NULL,
  KEY `discount_id` (`discount_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_03_07_104114_create_adress_table', 0),
(2, '2019_03_07_104114_create_customers_table', 0),
(3, '2019_03_07_104114_create_discounts_table', 0),
(4, '2019_03_07_104114_create_order_heads_table', 0),
(5, '2019_03_07_104114_create_order_lines_table', 0),
(6, '2019_03_07_104114_create_prd_categories_table', 0),
(7, '2019_03_07_104114_create_prd_discounts_table', 0),
(8, '2019_03_07_104114_create_products_table', 0),
(9, '2019_03_07_104115_add_foreign_keys_to_adress_table', 0),
(10, '2019_03_07_104115_add_foreign_keys_to_order_heads_table', 0),
(11, '2019_03_07_104115_add_foreign_keys_to_order_lines_table', 0),
(12, '2019_03_07_104115_add_foreign_keys_to_prd_discounts_table', 0),
(13, '2019_03_07_104115_add_foreign_keys_to_products_table', 0),
(14, '2019_03_07_110458_create_adress_table', 0),
(15, '2019_03_07_110458_create_customers_table', 0),
(16, '2019_03_07_110458_create_discounts_table', 0),
(17, '2019_03_07_110458_create_order_heads_table', 0),
(18, '2019_03_07_110458_create_order_lines_table', 0),
(19, '2019_03_07_110458_create_prd_categories_table', 0),
(20, '2019_03_07_110458_create_prd_discounts_table', 0),
(21, '2019_03_07_110458_create_products_table', 0),
(22, '2019_03_07_110459_add_foreign_keys_to_adress_table', 0),
(23, '2019_03_07_110459_add_foreign_keys_to_order_heads_table', 0),
(24, '2019_03_07_110459_add_foreign_keys_to_order_lines_table', 0),
(25, '2019_03_07_110459_add_foreign_keys_to_prd_discounts_table', 0),
(26, '2019_03_07_110459_add_foreign_keys_to_products_table', 0),
(32, '2014_10_12_100000_create_password_resets_table', 2),
(31, '2014_10_12_000000_create_users_table', 2),
(29, '2019_03_18_121949_create_order_heads_table', 1),
(30, '2019_03_18_122041_create_order_lines_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num_line` int(10) UNSIGNED DEFAULT NULL,
  `date_order` date NOT NULL,
  `status` enum('P','V','S','D','I') NOT NULL COMMENT 'P(in Progress), V(Validated), S(sent), D(deliver), I(invoice)',
  `delivery_cost` int(10) UNSIGNED NOT NULL COMMENT 'centimes',
  `adr_delivery` int(11) DEFAULT NULL,
  `adr_invoice` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `adr_delivery` (`adr_delivery`),
  KEY `adr_invoice` (`adr_invoice`),
  KEY `customer_id` (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`id`, `num_line`, `date_order`, `status`, `delivery_cost`, `adr_delivery`, `adr_invoice`, `customer_id`) VALUES
(4, 3, '2018-12-30', 'V', 500, 25, 25, 30),
(5, 2, '2018-12-30', 'V', 500, 28, 53, 5),
(6, 2, '2018-12-30', 'V', 500, 40, 19, 36),
(7, 3, '2018-12-30', 'V', 500, 40, 19, 36),
(8, 3, '2018-12-30', 'V', 500, 55, 55, 16),
(9, 3, '2018-12-30', 'V', 500, 48, 69, 11),
(10, 1, '2019-01-05', 'V', 500, 67, 67, 29),
(11, 1, '2019-01-05', 'V', 500, 31, 45, 37),
(12, 1, '2019-01-05', 'V', 500, 95, 16, 38),
(13, 3, '2019-01-05', 'V', 500, 55, 55, 16),
(14, 3, '2019-01-05', 'V', 500, 20, 33, 39),
(15, 2, '2019-01-05', 'V', 500, 58, 17, 7),
(16, 1, '2019-01-05', 'V', 500, 13, 13, 4),
(18, 1, '2019-01-05', 'V', 500, 28, 53, 5),
(19, 1, '2019-01-05', 'V', 500, 42, 1, 20),
(20, 1, '2019-01-26', 'V', 500, 65, 71, 12),
(21, 2, '2019-01-26', 'V', 500, 48, 69, 11),
(22, 1, '2019-01-26', 'V', 500, 23, 64, 2),
(23, 1, '2019-01-26', 'V', 500, 50, 50, 18),
(24, 1, '2019-01-29', 'V', 500, 9, 9, 23),
(25, 2, '2019-01-30', 'V', 500, 20, 33, 39),
(26, 1, '2019-02-01', 'V', 500, 4, 46, 28),
(27, 1, '2019-02-01', 'V', 500, 6, 12, 21),
(28, 1, '2019-02-08', 'V', 500, 92, 92, 15),
(29, 1, '2019-02-08', 'V', 500, 67, 67, 29),
(30, 1, '2019-02-08', 'V', 500, 20, 33, 39),
(31, 1, '2019-02-08', 'V', 500, 7, 27, 40),
(32, 1, '2019-02-08', 'V', 500, 55, 55, 16),
(33, 1, '2019-02-08', 'V', 500, 77, 84, 9),
(34, 1, '2019-02-08', 'V', 500, 18, 44, 21),
(35, 1, '2019-02-08', 'V', 500, 31, 45, 37),
(36, 2, '2019-02-08', 'V', 500, 8, 24, 33),
(37, 1, '2019-02-08', 'V', 500, 23, 90, 2),
(38, 3, '2018-02-15', 'V', 500, 92, 92, 15),
(50, NULL, '2019-03-19', 'P', 0, 17, 17, 7),
(51, NULL, '2019-03-19', 'P', 0, 17, 17, 7),
(52, NULL, '2019-03-19', 'V', 0, 17, 17, 7),
(53, NULL, '2019-03-19', 'P', 0, 17, 17, 7),
(54, NULL, '2019-03-19', 'P', 0, 17, 17, 7),
(55, NULL, '2019-03-19', 'P', 0, 17, 17, 7),
(56, NULL, '2019-03-19', 'V', 0, 17, 17, 7),
(57, NULL, '2019-03-19', 'P', 0, 17, 17, 7),
(60, NULL, '2019-03-19', 'P', 0, 17, 17, 7),
(64, NULL, '2019-03-19', 'P', 0, 17, 17, 7),
(65, NULL, '2019-03-19', 'V', 0, 17, 17, 7),
(66, NULL, '2019-03-19', 'P', 0, 17, 17, 7),
(67, NULL, '2019-03-19', 'P', 0, NULL, NULL, NULL),
(68, NULL, '2019-03-19', 'P', 0, NULL, NULL, NULL),
(69, NULL, '2019-03-19', 'V', 0, NULL, NULL, NULL),
(70, NULL, '2019-03-19', 'P', 0, NULL, NULL, NULL),
(71, NULL, '2019-03-19', 'V', 0, NULL, NULL, NULL),
(72, NULL, '2019-03-19', 'P', 0, NULL, NULL, NULL),
(73, NULL, '2019-03-19', 'P', 0, NULL, NULL, NULL),
(74, NULL, '2019-03-19', 'P', 0, NULL, NULL, NULL),
(75, NULL, '2019-03-19', 'P', 0, NULL, NULL, NULL),
(76, NULL, '2019-03-19', 'P', 0, NULL, NULL, NULL),
(77, NULL, '2019-03-19', 'P', 0, NULL, NULL, NULL),
(79, NULL, '2019-03-19', 'V', 0, NULL, NULL, NULL),
(80, NULL, '2019-03-19', 'V', 0, 17, 17, 7),
(81, NULL, '2019-03-19', 'V', 0, 17, 17, 7),
(82, NULL, '2019-03-19', 'V', 0, NULL, NULL, NULL),
(86, NULL, '2019-03-19', 'V', 0, 112, 112, NULL),
(87, NULL, '2019-03-19', 'V', 0, 112, 112, NULL),
(88, NULL, '2019-03-19', 'V', 0, 113, 113, NULL),
(89, NULL, '2019-03-19', 'V', 0, 113, 113, NULL),
(90, NULL, '2019-03-19', 'V', 0, 113, 113, 67),
(91, NULL, '2019-03-19', 'V', 0, 114, 114, 68),
(92, NULL, '2019-03-19', 'V', 0, 114, 114, 68),
(93, NULL, '2019-03-19', 'V', 0, 114, 114, 68),
(94, NULL, '2019-03-19', 'V', 0, 114, 114, 68),
(95, NULL, '2019-03-19', 'V', 0, 114, 114, 68),
(96, NULL, '2019-03-19', 'V', 0, 114, 114, 68),
(97, NULL, '2019-03-19', 'V', 0, 114, 114, 68),
(98, NULL, '2019-03-19', 'V', 0, 114, 114, 68),
(101, NULL, '2019-03-29', 'P', 0, NULL, NULL, NULL),
(102, NULL, '2019-03-29', 'V', 0, 122, 122, 78),
(103, NULL, '2019-03-29', 'V', 0, 107, 107, 61),
(104, NULL, '2019-03-29', 'V', 0, 112, 112, 66),
(105, NULL, '2019-04-09', 'P', 0, NULL, NULL, NULL),
(106, NULL, '2019-04-09', 'P', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `order_product`
--

DROP TABLE IF EXISTS `order_product`;
CREATE TABLE IF NOT EXISTS `order_product` (
  `quantity` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  KEY `order_id` (`order_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `order_product`
--

INSERT INTO `order_product` (`quantity`, `order_id`, `product_id`) VALUES
(1, 4, 8),
(1, 4, 10),
(1, 5, 4),
(1, 5, 16),
(2, 6, 5),
(2, 6, 17),
(1, 7, 4),
(2, 7, 16),
(2, 7, 17),
(1, 8, 4),
(2, 8, 12),
(1, 8, 9),
(2, 9, 5),
(1, 9, 1),
(4, 9, 17),
(1, 10, 13),
(1, 11, 10),
(1, 12, 15),
(1, 13, 16),
(1, 13, 4),
(1, 13, 5),
(1, 14, 4),
(1, 14, 16),
(1, 14, 17),
(1, 15, 17),
(1, 15, 4),
(1, 16, 13),
(2, 18, 12),
(1, 19, 4),
(1, 20, 20),
(1, 21, 4),
(3, 21, 6),
(1, 22, 9),
(1, 23, 13),
(1, 24, 14),
(1, 25, 16),
(1, 25, 17),
(2, 26, 9),
(2, 27, 4),
(1, 28, 5),
(2, 29, 17),
(1, 30, 18),
(1, 31, 12),
(1, 4, 6),
(1, 32, 4),
(2, 33, 5),
(3, 34, 16),
(2, 35, 17),
(1, 36, 8),
(1, 36, 21),
(1, 37, 12),
(1, 38, 1),
(2, 38, 2),
(2, 38, 3),
(2, 50, 20),
(5, 50, 17),
(7, 50, 24),
(1, 51, 24),
(2, 52, 24),
(3, 52, 12),
(1, 53, 24),
(1, 53, 20),
(1, 53, 12),
(1, 54, 12),
(2, 54, 20),
(1, 55, 24),
(1, 55, 20),
(1, 56, 24),
(1, 56, 20),
(1, 57, 24),
(1, 57, 20),
(1, 60, 20),
(2, 60, 24),
(1, 60, 24),
(1, 60, 24),
(2, 64, 20),
(2, 64, 12),
(6, 64, 24),
(1, 65, 24),
(1, 65, 20),
(1, 66, 24),
(1, 67, 24),
(1, 67, 20),
(1, 68, 24),
(1, 68, 20),
(1, 69, 24),
(1, 69, 20),
(1, 70, 24),
(1, 70, 20),
(1, 71, 24),
(1, 71, 20),
(1, 72, 24),
(1, 72, 20),
(1, 73, 24),
(1, 73, 20),
(2, 74, 24),
(2, 74, 20),
(1, 75, 24),
(1, 75, 20),
(1, 76, 24),
(1, 76, 20),
(1, 77, 24),
(1, 77, 20),
(1, 79, 24),
(1, 79, 20),
(1, 80, 20),
(1, 81, 24),
(1, 81, 20),
(2, 82, 24),
(1, 82, 20),
(2, 86, 24),
(1, 86, 20),
(2, 87, 24),
(1, 87, 20),
(1, 88, 24),
(1, 88, 20),
(1, 89, 24),
(1, 89, 20),
(1, 90, 24),
(1, 90, 20),
(1, 91, 24),
(1, 91, 20),
(1, 92, 24),
(1, 92, 20),
(1, 93, 24),
(1, 93, 20),
(3, 94, 24),
(2, 94, 20),
(3, 95, 24),
(2, 95, 20),
(3, 96, 24),
(2, 96, 20),
(1, 97, 24),
(2, 97, 20),
(2, 98, 20),
(1, 98, 24),
(1, 101, 12),
(1, 101, 10),
(1, 102, 12),
(1, 102, 10),
(1, 103, 12),
(1, 103, 10),
(1, 104, 12),
(1, 104, 10),
(1, 105, 23),
(1, 105, 8),
(1, 106, 6),
(1, 106, 8);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `prd_categories`
--

DROP TABLE IF EXISTS `prd_categories`;
CREATE TABLE IF NOT EXISTS `prd_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(70) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `prd_categories`
--

INSERT INTO `prd_categories` (`id`, `name`) VALUES
(1, 'outdoor'),
(2, 'indoor'),
(3, 'football'),
(4, 'rugby'),
(5, 'tennis');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(70) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(11) NOT NULL COMMENT 'centimes',
  `weight` int(11) NOT NULL COMMENT 'grammes',
  `stock` int(11) NOT NULL COMMENT 'pas de demi produit',
  `status` enum('S','D') NOT NULL DEFAULT 'D' COMMENT 'S = supprimer, D= dispo',
  `imgUrl` varchar(80) NOT NULL,
  `prd_category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `prd_category_id` (`prd_category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `weight`, `stock`, `status`, `imgUrl`, `prd_category_id`) VALUES
(1, 'Predator5', 'ballon de foot haut de gamme', 6500, 450, 5, 'D', 'ballonFoot.jpg', 3),
(2, 'Guilbert1', 'ballon de rugby haut de gamme', 7875, 350, 2, 'D', 'ballonRugby.jpg', 4),
(3, 'Guilbert D', 'ballon de rugby débutant', 3570, 350, 9, 'D', 'ballonRugbyDebutant.jpg', 4),
(4, 'raquetteD', 'raquette de tennis debutant', 980, 25, 24, 'D', 'raquetteTennis.jpg', 5),
(5, 'Tapi Yoga O', 'Tapi de yoga outdoor', 2700, 150, 0, 'D', 'tapisYoga.jpg', 1),
(6, 'Evil Twin', 'Snowboard bataleon freestyle', 142000, 3100, 4, 'D', 'bataleonEvilTwin.jpg', 1),
(8, 'Fat Bob', 'Ski salomon freeride', 62000, 2600, 8, 'D', 'skiSalomon.jpg', 1),
(9, 'Jogging', 'Pour faire du fitness', 2600, 250, 200, 'D', 'joggingFit.jpg', 2),
(10, 'Crampons', 'Crampons de foot haut de gamme', 12000, 205, 5, 'D', 'cramponsFoot.jpg', 3),
(11, 'R Crampons', 'Crampons de rugby milieu de gamme', 8925, 215, 0, 'D', 'cramponsRugby.jpg', 4),
(12, 'Claquette', 'Pour la sortie de la piscine', 2280, 124, 5, 'D', 'claquette.jpg', 2),
(13, 'Requin', 'Chaussure de running haut de gamme', 16490, 186, 15, 'D', 'nikeRequin.jpg', 1),
(14, 'Filet E', 'filet de Volley extérieur', 3990, 2650, 3, 'D', 'filetVolleyExt.jpg', 1),
(15, 'Filet I', 'filet de Volley interieur', 2890, 2750, 6, 'D', 'filetVolleyInt.jpg', 2),
(16, 'Gourde', 'gourde de randonnée 1L', 890, 265, 0, 'D', 'gourdeRandonnee.jpg', 1),
(17, 'Gourde Fit', 'gourde de fitness 0.75L', 890, 165, 6, 'D', 'gourdeFitness.jpg', 2),
(18, 'Rugby Bleu', 'Maillot EDF Rugby', 8348, 110, 4, 'D', 'edfRugby.jpg', 4),
(19, 'Deux étoiles', 'Maillot EDF Foot', 11850, 89, 0, 'D', 'edfFoot.jpg', 3),
(20, 'Burton Custom', 'Fixation de snowboard', 18950, 1450, 0, 'S', 'burtonCustomFix.jpg', 1),
(21, 'Look', 'fixation de ski', 11180, 650, 0, 'D', 'lookFixation.jpg', 1),
(23, 'Goliath', 'Snowboard Bataleon Freestyle all mountain', 46500, 2900, 7, 'D', 'bataleonGoliath.jpg', 1),
(24, 'Airobic', 'Snowboard Bataleon Freestyle park et street', 39500, 2750, 7, 'S', 'bataleonAirobic.jpg', 1),
(26, 'Custom', 'Planche freeride Burton', 49000, 3210, 5, 'S', 'burtonCustom.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `is_admin`, `created_at`, `updated_at`) VALUES
(1, 'AncienClient', 'test@exemple.com', NULL, '$2y$10$OlIIRP3Q.npUjybPRWrbB.QfNb.hxaKfhNXoz1.OH/SXBDBqzPIzS', 'a2Yr18OYlfOcKVswh7mdPVQ7QO7Vb53syBaJYprnbv2PKE4hcLFU5Qyg4Edz', 0, '2019-03-26 07:51:04', '2019-03-26 07:51:04'),
(21, 'retest test', 'retest@exemple.com', NULL, '$2y$10$ZlLhj1EmEiKaDxv/k9t50Oz4eAvufku2Bao6WrenrY5cnT1B2AbWG', 'hLsh9Zq7qOur5DD5atWqfGpVvTEzX33NT3S16J2vDwZKCY7WPea7cjIGVnBs', 1, '2019-03-27 14:09:55', '2019-03-27 14:09:55'),
(22, 'TestPanier', 'TestPanier@exemple.fr', NULL, '$2y$10$8o4XsVdh6UbLilmfECYCje21yq5NFVABqDjts6A7/LLm07UdBa7Di', 'mkRyBR7cjSNtcInL0VFqeJtd71OVvgxlVxc9bNtYX7tc35hpUTj8amosOUiV', 1, '2019-03-28 07:49:28', '2019-03-28 07:49:28'),
(23, 'panier2', 'panier2@exemple.fr', NULL, '$2y$10$wvmq0TOER1eMslG8WHngp.1Np/nF11RVRCGiu9ojAQ7MPO67YRPQe', 'XctCv1Y8bNDT98tMuwmAYxyiYHSSeM7y9tDk022L1OqS70v1jexk4Fvw8bUn', 0, '2019-03-28 09:17:27', '2019-03-28 09:17:27'),
(24, 'panier3', 'panier3@exemple.fr', NULL, '$2y$10$1lPJ3uhwKqmR96c5MjPWhOCZtxkogqfCvK2PPpp1qQvymA5/zI3yi', 'hzwnMe3VVRoJ67F6yq47dIymiIk3He5wjKxAYkCTJn5EALzhUM6fh5Qy0BVa', 0, '2019-03-28 09:43:45', '2019-03-28 09:43:45'),
(25, 'qsdfqds', 'qdfqfds@exemple.com', NULL, '$2y$10$Klf3ENa/xCP6crav.CG6COJcZPjNJ17EFOEjQMdB6xDF2yHsFAxWy', 'lTFX5SJopYwCZU00l4kCdKRD98a1IT4uzjaSMfBo6vbBNaKloA8uoncrzTF3', 0, '2019-03-28 14:42:38', '2019-03-28 14:42:38'),
(26, 'nocustomer', 'nocustomer@exemple.fr', NULL, '$2y$10$S5JnUcNhVNkXhulOas7GX.E2l3WDQGeWGUaRuzIVCSIO8HXhr12v.', '5CajwYjepHXAWveUAzZiMueWjEKLrRnbxYJ5zc2UL2MaZYDbROAzlzim6ntt', 0, '2019-03-29 07:15:35', '2019-03-29 07:15:35'),
(27, 'laurnet', 'laurent@free.fr', NULL, '$2y$10$jRdzNRBafhcYHM.2u5SVM.i18Nt7kFhVDuMj3yp6jTP8OhPl0uus6', 'AmdtkYZCJ5DniOdxqDGCFOadTmTWbqfIvCznhMpSBDq70Wqwx739h2QTNY0S', 0, '2019-03-29 08:46:14', '2019-03-29 08:46:14');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `adresses`
--
ALTER TABLE `adresses`
  ADD CONSTRAINT `adresses_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Contraintes pour la table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `discount_product`
--
ALTER TABLE `discount_product`
  ADD CONSTRAINT `discount_product_ibfk_1` FOREIGN KEY (`discount_id`) REFERENCES `discounts` (`id`),
  ADD CONSTRAINT `discount_product_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`adr_delivery`) REFERENCES `adresses` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`adr_invoice`) REFERENCES `adresses` (`id`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Contraintes pour la table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `order_produt_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Contraintes pour la table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`prd_category_id`) REFERENCES `prd_categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
