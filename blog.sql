-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 17 avr. 2021 à 08:54
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog`
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `id_filiere`, `id_membre`, `titre`, `accroche`, `contenu`, `publication`, `image`) VALUES
(1, 1, 59, 'WINDEV', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br />\r\n<br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2021-04-16 16:04:48', ''),
(3, 3, 59, 'Comptabilit&eacute;', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et emp&ecirc;che de se concentrer sur l', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et emp&ecirc;che de se concentrer sur la mise en page elle-m&ecirc;me. L\'avantage du Lorem Ipsum sur un texte g&eacute;n&eacute;rique comme \'Du texte. Du texte. Du texte.\' est qu\'il poss&egrave;de une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du fran&ccedil;ais standard. De nombreuses suites logicielles de mise en page ou &eacute;diteurs de sites Web ont fait du Lorem Ipsum leur faux texte par d&eacute;faut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'&agrave; leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et emp&ecirc;che de se concentrer sur la mise en page elle-m&ecirc;me. L\'avantage du Lorem Ipsum sur un texte g&eacute;n&eacute;rique comme \'Du texte. Du texte. Du texte.\' est qu\'il poss&egrave;de une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du fran&ccedil;ais standard. De nombreuses suites logicielles de mise en page ou &eacute;diteurs de sites Web ont fait du Lorem Ipsum leur faux texte par d&eacute;faut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'&agrave; leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et emp&ecirc;che de se concentrer sur la mise en page elle-m&ecirc;me. L\'avantage du Lorem Ipsum sur un texte g&eacute;n&eacute;rique comme \'Du texte. Du texte. Du texte.\' est qu\'il poss&egrave;de une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du fran&ccedil;ais standard. De nombreuses suites logicielles de mise en page ou &eacute;diteurs de sites Web ont fait du Lorem Ipsum leur faux texte par d&eacute;faut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'&agrave; leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).', '2021-04-16 16:07:26', 'manu.png'),
(4, 4, 60, 'BOTANIQUE', '&Eacute; um facto estabelecido de que um leitor &eacute; distra&iacute;do pelo conte&uacute;do leg&iacute;vel de uma p&aacute;gina quando analisa a su', '&Eacute; um facto estabelecido de que um leitor &eacute; distra&iacute;do pelo conte&uacute;do leg&iacute;vel de uma p&aacute;gina quando analisa a sua mancha gr&aacute;fica. Logo, o uso de Lorem Ipsum leva a uma distribui&ccedil;&atilde;o mais ou menos normal de letras, ao contr&aacute;rio do uso de &quot;Conte&uacute;do aqui, conte&uacute;do aqui&quot;, tornando-o texto leg&iacute;vel. Muitas ferramentas de publica&ccedil;&atilde;o electr&oacute;nica e editores de p&aacute;ginas web usam actualmente o Lorem Ipsum como o modelo de texto usado por omiss&atilde;o, e uma pesquisa por &quot;lorem ipsum&quot; ir&aacute; encontrar muitos websites ainda na sua inf&acirc;ncia. V&aacute;rias vers&otilde;es t&ecirc;m evolu&iacute;do ao longo dos anos, por vezes por acidente, por vezes propositadamente (como no caso do humor).<br />\r\n&Eacute; um facto estabelecido de que um leitor &eacute; distra&iacute;do pelo conte&uacute;do leg&iacute;vel de uma p&aacute;gina quando analisa a sua mancha gr&aacute;fica. Logo, o uso de Lorem Ipsum leva a uma distribui&ccedil;&atilde;o mais ou menos normal de letras, ao contr&aacute;rio do uso de &quot;Conte&uacute;do aqui, conte&uacute;do aqui&quot;, tornando-o texto leg&iacute;vel. Muitas ferramentas de publica&ccedil;&atilde;o electr&oacute;nica e editores de p&aacute;ginas web usam actualmente o Lorem Ipsum como o modelo de texto usado por omiss&atilde;o, e uma pesquisa por &quot;lorem ipsum&quot; ir&aacute; encontrar muitos websites ainda na sua inf&acirc;ncia. V&aacute;rias vers&otilde;es t&ecirc;m evolu&iacute;do ao longo dos anos, por vezes por acidente, por vezes propositadamente (como no caso do humor).', '2021-04-16 16:08:17', ''),
(5, 3, 60, 'MATH FIN', '&Eacute; um facto estabelecido de que um leitor &eacute; distra&iacute;do pelo conte&uacute;do leg&iacute;vel de uma p&aacute;gina quando analisa a su', '&Eacute; um facto estabelecido de que um leitor &eacute; distra&iacute;do pelo conte&uacute;do leg&iacute;vel de uma p&aacute;gina quando analisa a sua mancha gr&aacute;fica. Logo, o uso de Lorem Ipsum leva a uma distribui&ccedil;&atilde;o mais ou menos normal de letras, ao contr&aacute;rio do uso de &quot;Conte&uacute;do aqui, conte&uacute;do aqui&quot;, tornando-o texto leg&iacute;vel. Muitas ferramentas de publica&ccedil;&atilde;o electr&oacute;nica e editores de p&aacute;ginas web usam actualmente o Lorem Ipsum como o modelo de texto usado por omiss&atilde;o, e uma pesquisa por &quot;lorem ipsum&quot; ir&aacute; encontrar muitos websites ainda na sua inf&acirc;ncia. V&aacute;rias vers&otilde;es t&ecirc;m evolu&iacute;do ao longo dos anos, por vezes por acidente, por vezes propositadamente (como no caso do humor).<br />\r\n&Eacute; um facto estabelecido de que um leitor &eacute; distra&iacute;do pelo conte&uacute;do leg&iacute;vel de uma p&aacute;gina quando analisa a sua mancha gr&aacute;fica. Logo, o uso de Lorem Ipsum leva a uma distribui&ccedil;&atilde;o mais ou menos normal de letras, ao contr&aacute;rio do uso de &quot;Conte&uacute;do aqui, conte&uacute;do aqui&quot;, tornando-o texto leg&iacute;vel. Muitas ferramentas de publica&ccedil;&atilde;o electr&oacute;nica e editores de p&aacute;ginas web usam actualmente o Lorem Ipsum como o modelo de texto usado por omiss&atilde;o, e uma pesquisa por &quot;lorem ipsum&quot; ir&aacute; encontrar muitos websites ainda na sua inf&acirc;ncia. V&aacute;rias vers&otilde;es t&ecirc;m evolu&iacute;do ao longo dos anos, por vezes por acidente, por vezes propositadamente (como no caso do humor).', '2021-04-16 16:08:44', ''),
(6, 1, 60, 'DEV WEB', 'Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeu', 'Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft niet alleen vijf eeuwen overleefd maar is ook, vrijwel onveranderd, overgenomen in elektronische letterzetting. Het is in de jaren \'60 populair geworden met de introductie van Letraset vellen met Lorem Ipsum passages en meer recentelijk door desktop publishing software zoals Aldus PageMaker die versies van Lorem Ipsum bevatten.Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft niet alleen vijf eeuwen overleefd maar is ook, vrijwel onveranderd, overgenomen in elektronische letterzetting. Het is in de jaren \'60 populair geworden met de introductie van Letraset vellen met Lorem Ipsum passages en meer recentelijk door desktop publishing software zoals Aldus PageMaker die versies van Lorem Ipsum bevatten.Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft niet alleen vijf eeuwen overleefd maar is ook, vrijwel onveranderd, overgenomen in elektronische letterzetting. Het is in de jaren \'60 populair geworden met de introductie van Letraset vellen met Lorem Ipsum passages en meer recentelijk door desktop publishing software zoals Aldus PageMaker die versies van Lorem Ipsum bevatten.', '2021-04-16 16:09:20', '');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `id_membre`, `id_article`, `commentaire`, `publication`, `statu`) VALUES
(1, 59, 6, 'Super ton article', '2021-04-16 20:17:32', 'unread');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(2, 'BAT ET CONSTRUCTION'),
(3, 'AD ENTREPRISES'),
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
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `pseudo`, `email`, `password`, `nom`, `prenom`, `active`, `create_at`, `cle`) VALUES
(59, 'Manucho', 'rickypaine40@gmail.com', '$2y$10$2pHA8TY237hqQlla0emVGeFbLkAm643I1Mrm1PtHzysskqZ3EXidW', 'Tehe', 'Carmelle', 1, '2020-12-11 08:23:02', '7037df12a3c07d73b24511d6bf665eb2'),
(60, 'Ricky', 'rickypaine40@gmail.com', '$2y$10$1j363qPqJ1reVncPg7cpO.pHNLkIKM0xkLaoK13rwfV7BHSH2MKDy', 'Tehe', 'Beno&icirc;t', 1, '2020-12-11 09:04:09', '212ee8a281ee7d13c2255b10671dae79'),
(61, 'carmelle', 'vzh79536@zwoho.com', '$2y$10$PPAlgunV6RakIjDW4WzbQevcCxv5IZd074DVeG2vSeNbQrb6EzSAu', 'Tehe', 'Beno&icirc;t', 0, '2021-04-16 21:44:17', 'd1b7c82d2ac8c843113ad926e00ea4e3'),
(62, 'as', 'kkw15916@eoopy.com', '$2y$10$NzG7Sf1mI3S4LAfHfsJVGu3azMsv.lvT6bfEdfe3cjVtBvIYSJaSG', 'eknksksd', 'Carmelle', 0, '2021-04-16 21:48:50', '2aa91beca12b27ec90f0870b1878006e');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
