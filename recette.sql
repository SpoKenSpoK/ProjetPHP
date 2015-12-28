-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 28 Décembre 2015 à 14:45
-- Version du serveur :  5.6.20-log
-- Version de PHP :  5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `recette`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_utilisateur_uti`
--

CREATE TABLE IF NOT EXISTS `t_utilisateur_uti` (
`UTI_ID` bigint(20) unsigned NOT NULL,
  `UTI_LOGIN` varchar(255) NOT NULL,
  `UTI_MAIL` varchar(255) NOT NULL,
  `UTI_NOM` varchar(255) NOT NULL,
  `UTI_PRENOM` varchar(255) NOT NULL,
  `UTI_PASS` varchar(40) NOT NULL,
  `UTI_ADMIN` tinyint(1) NOT NULL DEFAULT '0',
  `UTI_AVATAR` varchar(80) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `t_utilisateur_uti`
--

INSERT INTO `t_utilisateur_uti` (`UTI_ID`, `UTI_LOGIN`, `UTI_MAIL`, `UTI_NOM`, `UTI_PRENOM`, `UTI_PASS`, `UTI_ADMIN`, `UTI_AVATAR`) VALUES
(1, 'keke', 'keke@yoro.fr', 'boehm', 'guillaume', 'lol', 1, ''),
(2, 'thib', 'thib@spoken.fr', 'heckel', 'thibault', 'lol', 1, ''),
(3, 'toto', 'toto@tata.fr', 'toto', 'toto', 'lol', 0, '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `t_utilisateur_uti`
--
ALTER TABLE `t_utilisateur_uti`
 ADD PRIMARY KEY (`UTI_ID`), ADD UNIQUE KEY `UTI_LOGIN` (`UTI_LOGIN`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `t_utilisateur_uti`
--
ALTER TABLE `t_utilisateur_uti`
MODIFY `UTI_ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
