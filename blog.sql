-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 30 Janvier 2017 à 18:16
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) NOT NULL,
  `texte` text NOT NULL,
  `signature` varchar(25) NOT NULL,
  `date_article` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `texte`, `signature`, `date_article`) VALUES
(1, 'test', 'test', 'test', '2017-01-30'),
(2, 'test2', 'test2', 'test2', '2017-01-30');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE IF NOT EXISTS `commentaire` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `commentaire` text NOT NULL,
  `signature` tinytext NOT NULL,
  `id_article` int(50) NOT NULL,
  `date_commentaire` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_article` (`id_article`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `commentaire`, `signature`, `id_article`, `date_commentaire`) VALUES
(1, 'commentairetest', 'test', 1, '2017-01-30'),
(2, 'testcommentaire', 'test2', 1, '2017-01-30');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`id_article`) REFERENCES `article` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
