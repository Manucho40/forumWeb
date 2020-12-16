-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 16 déc. 2020 à 09:42
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `id_filiere` int(4) NOT NULL,
  `id_membre` int(11) NOT NULL,
  `titre` varchar(40) NOT NULL,
  `accroche` varchar(200) NOT NULL,
  `contenu` text NOT NULL,
  `publication` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `id_filiere`, `id_membre`, `titre`, `accroche`, `contenu`, `publication`, `image`) VALUES
(4, 1, 59, 'WINDEV', 'CREATE TABLE  `comments`  (\r\n    `comment_id`  int(255)  NOT  NULL,\r\n    `comment_subject`  varchar(255)  NOT  NULL,\r\n    `comment_text`  text NOT  NULL,\r\n    `comment_status`  int(1)  NOT  NULL\r\n)  E', 'CREATE TABLE  `comments`  (<br />\r\n    `comment_id`  int(255)  NOT  NULL,<br />\r\n    `comment_subject`  varchar(255)  NOT  NULL,<br />\r\n    `comment_text`  text NOT  NULL,<br />\r\n    `comment_status`  int(1)  NOT  NULL<br />\r\n)  ENGINE=InnoDB DEFAULT  CHARSET=latin1;<br />\r\n <br />\r\nALTER TABLE  `comments`<br />\r\nADD PRIMARY KEY  (`comment_id`);<br />\r\nALTER TABLE  `comments`<br />\r\nMODIFY  `comment_id`  int(255)  NOT  NULL  AUTO_INCREMENT,  AUTO_INCREMENT=1;<br />\r\n', '2020-12-11 11:51:46', ''),
(5, 3, 60, 'Comptabilit&eacute;', 'Vous &ecirc;tes-vous d&eacute;j&agrave; demand&eacute; comment les sites de m&eacute;dias sociaux affichent une notification pour chaque action sur votre calendrier ?\r\n\r\nCe syst&egrave;me de notificat', 'Vous &ecirc;tes-vous d&eacute;j&agrave; demand&eacute; comment les sites de m&eacute;dias sociaux affichent une notification pour chaque action sur votre calendrier ?<br />\r\n<br />\r\nCe syst&egrave;me de notification en temps r&eacute;el assure le suivi de toutes les actions que vous et vos amis effectuez sur ces canaux sociaux. Les notifications constituent une grande partie de la fonction d\'engagement en temps r&eacute;el de ces plates-formes. M&ecirc;me si vous n\'&ecirc;tes pas en ligne, vous pouvez toujours recevoir ces notifications. Un syst&egrave;me de notification PHP pourrait &ecirc;tre facilement construit en utilisant un m&eacute;lange de PHP et de JavaScript. Ce syst&egrave;me fournit une notification en temps r&eacute;el dans une application PHP.<br />\r\n<br />\r\nVous &ecirc;tes-vous d&eacute;j&agrave; demand&eacute; comment les sites de m&eacute;dias sociaux affichent une notification pour chaque action sur votre calendrier ?<br />\r\n<br />\r\nCe syst&egrave;me de notification en temps r&eacute;el assure le suivi de toutes les actions que vous et vos amis effectuez sur ces canaux sociaux. Les notifications constituent une grande partie de la fonction d\'engagement en temps r&eacute;el de ces plates-formes. M&ecirc;me si vous n\'&ecirc;tes pas en ligne, vous pouvez toujours recevoir ces notifications. Un syst&egrave;me de notification PHP pourrait &ecirc;tre facilement construit en utilisant un m&eacute;lange de PHP et de JavaScript. Ce syst&egrave;me fournit une notification en temps r&eacute;el dans une application PHP.', '2020-12-11 12:04:02', 'FB_IMG_1598776475224.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `id_membre` int(3) NOT NULL,
  `id_article` int(3) NOT NULL,
  `commentaire` text NOT NULL,
  `publication` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `statu` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `id_membre`, `id_article`, `commentaire`, `publication`, `statu`) VALUES
(1, 60, 4, 'SUPER<br />\r\n', '2020-12-11 11:52:26', NULL),
(2, 61, 4, 'Tres bien', '2020-12-12 15:03:50', NULL),
(3, 61, 4, 'SUPER', '2020-12-12 15:04:12', NULL),
(4, 59, 5, 'SUPER', '2020-12-13 15:14:50', 'unread'),
(5, 59, 5, 'Cool', '2020-12-13 16:33:33', 'unread');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(255) NOT NULL AUTO_INCREMENT,
  `comment_subject` varchar(255) NOT NULL,
  `comment_text` text NOT NULL,
  `comment_status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_subject`, `comment_text`, `comment_status`) VALUES
(1, 'INFORMATIQUE', 'INFORMATIQUE', 0),
(2, 'INFORMATIQUE', 'INFORMATIQUE', 0);

-- --------------------------------------------------------

--
-- Structure de la table `filiere`
--

DROP TABLE IF EXISTS `filiere`;
CREATE TABLE IF NOT EXISTS `filiere` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `filiere`
--

INSERT INTO `filiere` (`id`, `libelle`) VALUES
(1, 'INFORMATIQUE'),
(2, 'BATIMENT ET CONSTRUCTION'),
(3, 'ADMINISTRATION DES ENTREPRISES'),
(4, 'AGROECOLOGIE');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

DROP TABLE IF EXISTS `membres`;
CREATE TABLE IF NOT EXISTS `membres` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `create_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `cle` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `pseudo`, `email`, `password`, `nom`, `prenom`, `active`, `create_at`, `cle`) VALUES
(59, 'Manucho', 'rickypaine40@gmail.com', '$2y$10$2pHA8TY237hqQlla0emVGeFbLkAm643I1Mrm1PtHzysskqZ3EXidW', 'Tehe', 'Carmelle', 1, '2020-12-11 08:23:02', '7037df12a3c07d73b24511d6bf665eb2'),
(60, 'Ricky', 'rickypaine40@gmail.com', '$2y$10$1j363qPqJ1reVncPg7cpO.pHNLkIKM0xkLaoK13rwfV7BHSH2MKDy', 'Tehe', 'Beno&icirc;t', 1, '2020-12-11 09:04:09', '212ee8a281ee7d13c2255b10671dae79'),
(61, 'Manucho14', 'rickypaine40@gmail.com', '$2y$10$LXjKJpKqTZj/sVG1A5VMz.qk5UKhAtbZQHPv47WAtDHLxqgOzrCxG', 'Tehe', 'Beno&icirc;t', 1, '2020-12-12 15:00:39', '51994407037e6cacf7e7eaa6179057b1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
