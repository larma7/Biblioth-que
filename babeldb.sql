-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 05, 2018 at 04:59 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `babeldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `appartient_cat`
--

DROP TABLE IF EXISTS `appartient_cat`;
CREATE TABLE IF NOT EXISTS `appartient_cat` (
  `ref_livre` int(11) NOT NULL,
  `nom_cat` varchar(50) NOT NULL,
  KEY `ref_livre` (`ref_livre`),
  KEY `nom_cat` (`nom_cat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appartient_cat`
--

INSERT INTO `appartient_cat` (`ref_livre`, `nom_cat`) VALUES
(456852302, 'Cuisine'),
(456205147, 'Cuisine'),
(963258741, 'Cuisine'),
(156320447, 'Art'),
(156321481, 'Art'),
(489120154, 'Art'),
(887268951, 'Théâtre'),
(302653133, 'Théâtre'),
(887225941, 'Policier'),
(504930225, 'Policier'),
(132659222, 'Informatique'),
(798852465, 'Informatique'),
(752158031, 'Informatique'),
(745520025, 'Sciences'),
(589002548, 'Sciences'),
(493215009, 'Art'),
(458001252, 'Développement_personnel'),
(887659123, 'Histoire'),
(700521363, 'Histoire'),
(524544658, 'Histoire');

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `nom` varchar(50) NOT NULL,
  PRIMARY KEY (`nom`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`nom`) VALUES
('Art'),
('Cuisine'),
('Développement_personnel'),
('Histoire'),
('Informatique'),
('Policier'),
('Sciences'),
('Théâtre');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `cin` int(11) NOT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `prenom` varchar(20) DEFAULT NULL,
  `adresse` varchar(255) NOT NULL,
  `num_tel` int(11) NOT NULL,
  `mail` varchar(50) NOT NULL,
  PRIMARY KEY (`cin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`cin`, `nom`, `prenom`, `adresse`, `num_tel`, `mail`) VALUES
(11480560, 'Boujeh', 'Tawfik', 'Marsa', 51248795, 'tiboujeh@gmail.com'),
(12485612, 'Chammakhi', 'Hazem', 'Tunis', 98155231, 'chammakhihazem@gmail.com'),
(11401290, 'Bouchoucha', 'Rached', 'Bizerte', 23121500, 'bouchoucharached@gmail.com'),
(11524879, 'Hamdi', 'Mazen', 'Sidi Bouzid', 99456821, 'hamdimazen@gmail.com'),
(11254632, 'Ghimaji', 'Mohamed Amine', 'Tunis', 97996001, 'mohamedaminegh@gmail.com'),
(11897466, 'Guedri', 'Oussema', 'Tunis', 23658102, 'guedrioussema@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `livre`
--

DROP TABLE IF EXISTS `livre`;
CREATE TABLE IF NOT EXISTS `livre` (
  `reference` int(11) NOT NULL,
  `titre` varchar(50) DEFAULT NULL,
  `nbreLivreDispo` int(11) DEFAULT NULL,
  `photo` varchar(255) NOT NULL,
  `synopsis` varchar(255) NOT NULL DEFAULT 'Aucune',
  PRIMARY KEY (`reference`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `livre`
--

INSERT INTO `livre` (`reference`, `titre`, `nbreLivreDispo`, `photo`, `synopsis`) VALUES
(302653133, 'Tous des oiseaux', 14, 'touslesoiseaux.jpg', 'Tous des oiseaux» sera joué du 28 février au 10 mars 2018 au Théâtre national Populaire de Villeurbanne. Dynamitée par la violence du monde d\'aujourd\'hui'),
(887268951, 'La Cerisaie', 29, 'La_Cerisaie.jpg', 'LIOUBOV ANDRÉEVNA, regarde le jardin par la fenêtre.'),
(524544658, 'Ad fines romanae', 31, 'Ad_fines_romanae.jpg', 'Les Maurétanies, Tingitane et Césarienne, tardivement intégrées dans l\'Empire romain, se distinguent des autres provinces africaines par l\'importance de communautés rurales sédentaires '),
(456852302, 'Livre santé des bols chinois zhou dao', 13, 'Livre_santé.jpg', 'Considérées dans l\'antiquité chinoise comme de savantes préparations thérapeutiques réservées aux membres de la famille impériale dont elles devaient promouvoir la longévité'),
(456205147, 'Voyage gourmand en Périgord', 10, 'Voyage_gourmand_en_Périgord.jpg', '3 recettes (entrée + plat + dessert) par chef + son producteur préféré !'),
(963258741, 'Salades sauvages', 15, 'Salades_sauvages.jpg', 'la nature regorge de jeunes feuilles, de pousses tendres et de fleurs comestibles, remarquablement riches en nutriments, et pleines de merveilleuses vertus'),
(700521363, 'Henri IV', 20, 'Henri_IV.jpg', 'Il est le roi de France et de Navarre qui a voulu dépasser les clivages et faire vivre ensemble catholiques et protestants. Il en est mort.'),
(887659123, 'Mai 68, le Débat', 26, 'Mai_68_le_Débat.jpg', 'On n\'en a pas fini avec cet épisode historique. Source de tous les maux de la société selon les uns, révolution culturelle libératrice selon les autres, mai 68, qui fut l\'affaire d\'une génération'),
(458001252, 'Osez désirer tout', 18, 'Osez_désirer_tout.jpg', '« La philosophie du Christ est destinée aux amoureux de l\'intensité, aux amants du vivant. Elle s\'adresse à des êtres dont le désir est tellement grand qu\'il n\'acceptera pas moins qu\'une vie infinie. »'),
(887225941, 'A couper au couteau', 28, 'A_couper_au_couteau.jpg', 'Traduit par Luc Baranger'),
(504930225, 'Trafiquants & associés', 42, 'Trafiquants_&_associés.jpg', 'valentin Pescatore enquête au Mexique pour le compte de la Homeland Security, afin de localiser un passeur mexicain, témoin clé d\'une tuerie de clandestins effectuée selon le mode opératoire des cartels de la drogue'),
(132659222, 'Le Big Data', 15, 'Le_Big_Data.jpg', 'notre époque produit quantité de données. Toutes ces données, utiles pour la conduite de machines, la surveillance d\'ouvrages d\'art ou pour notre vie sociale, économique, sentimentale... laissent des traces ou des scories.'),
(798852465, 'Référencement Google mode d\'emploi', 14, 'Référencement_Google_mode_d\'emploi.jpg', 'La troisème édition entièrement mise à jour de ce petit guide pratique a pour vocation d\'expliquer les fondamentaux du référencement web à tous ceux qui ont peu ou pas de connaissances dans ce domaine'),
(752158031, 'Symfony 3', 26, 'Symfony_3.jpg', 'le livre sur Symfony 3 s\'adresse aux développeurs, chefs de projets, directeurs techniques, qui souhaitent, grâce à ce framework'),
(745520025, 'Petites histoires des mathématiques', 29, 'Petites_histoires_des_mathématiques.jpg', 'Les mathématiques se sont construites comme science bien avant toutes les autres, des millénaires, contre quelques centaines d\'années'),
(589002548, 'La vie sociale des animaux', 9, 'La_vie_sociale_des_animaux.jpg', 'quel est le point commun entre les lions, les fourmis et les ouistitis ? Chacune de ces espèces vit en société'),
(493215009, 'Toni Servillo, le nouveau monstre', 12, 'Toni_Servillo,_le_nouveau_monstre.jpg', 'Toni Servillo n\'est pas un acteur comme les autres. Pas seulement parce que, depuis son apparition sur les écrans italiens en 1992 (avec Mort d\'un mathématicien napolitain de Mario Martone)'),
(489120154, 'René Prou', 15, 'René_Prou.jpg', 'René Prou (1889-1947), ensemblier et décorateur, est, aux côtés de Ruhlmann, Leleu, Dunand, Subes ou Brandt, une figure centrale du mouvement Art déco'),
(156321481, 'Rousseau', 14, 'rousseau.jpg', 'Henri Rousseau (1844-1910) était employé au service des douanes de Paris et rêvait de devenir un artiste célèbre. À 49 ans, il décide de tenter sa chance'),
(156320447, 'Guernica: Catalogue', 0, 'Guernica_Catalogue.jpg', 'Ce catalogue de l\'exposition «Guernica» présente l\'histoire de l\'un des chefs-d\'oeuvre majeurs de Pablo Picasso à travers les liens qui unirent le tableau et l\'artiste tout au long de sa vie');

-- --------------------------------------------------------

--
-- Table structure for table `prendre_livre`
--

DROP TABLE IF EXISTS `prendre_livre`;
CREATE TABLE IF NOT EXISTS `prendre_livre` (
  `ref_livre` int(11) DEFAULT NULL,
  `cin_client` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  KEY `cin_client` (`cin_client`),
  KEY `ref_livre` (`ref_livre`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prendre_livre`
--

INSERT INTO `prendre_livre` (`ref_livre`, `cin_client`, `date`) VALUES
(156320447, 11401290, '2018-04-05');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
