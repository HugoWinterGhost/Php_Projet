-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 11 oct. 2021 à 10:59
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
-- Base de données : `kira_spa`
--

DROP DATABASE IF EXISTS `kira_spa`;
CREATE DATABASE IF NOT EXISTS `kira_spa`;
USE `kira_spa`;

-- --------------------------------------------------------

--
-- Structure de la table `animaux`
--

DROP TABLE IF EXISTS `animaux`;
CREATE TABLE IF NOT EXISTS `animaux` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_categorie` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `couleur` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `race` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `booking` tinyint(1) NOT NULL,
  `compatibleChat` tinyint(1) DEFAULT NULL,
  `compatibleChien` tinyint(1) DEFAULT NULL,
  `compatibleEnfants` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `animaux`
--

INSERT INTO `animaux` (`id`, `id_categorie`, `nom`, `couleur`, `age`, `race`, `description`, `booking`, `compatibleChat`, `compatibleChien`, `compatibleEnfants`) VALUES
(1, 1, 'Minou', 'gris', 3, 'Siamois', 'toto', 0, 1, 1, 0),
(2, 1, 'Akira', 'noir & blanc', 4, 'Européen', 'toto', 1, 1, 1, 1),
(3, 2, 'Pepper', 'marron', 5, 'Chihuahua', 'toto', 1, 0, 0, 0),
(4, 2, 'Louna', 'fauve charbonnée', 9, 'Berger de Shetland', 'toto', 0, 1, 1, 1),
(5, 3, 'Dory', 'bleue et jaune', 3, 'Chirurgien bleu', 'toto', 0, NULL, NULL, NULL),
(6, 4, 'Filou', 'marron et jaune', 3, 'Python', 'toto', 0, NULL, NULL, NULL),
(7, 4, 'Michou', 'vert clair', 4, 'Couleuvre', 'toto', 0, NULL, NULL, NULL),
(8, 4, 'Bella', 'taupe', 5, 'Vipère', 'toto', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `nom`) VALUES
(1, 'Chat'),
(2, 'Chien'),
(3, 'Poisson'),
(4, 'Reptile');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `mail`, `password`, `role`) VALUES
(1, 'test', 'test', 'test@test.com', '$2y$12$Jwdgr8ejHjsKUFrsQ4XVe.jbx9bxBPwnL7A4H1uUWfG7dwysjcBGu', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
