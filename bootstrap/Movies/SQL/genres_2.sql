-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 20 Février 2015 à 17:38
-- Version du serveur :  5.6.16
-- Version de PHP :  5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `movies`
--

-- --------------------------------------------------------

--
-- Structure de la table `genres`
--

CREATE TABLE IF NOT EXISTS `genres` (
  `genra_id` int(3) NOT NULL AUTO_INCREMENT,
  `genre_label` varchar(50) NOT NULL,
  `genre_name` varchar(50) NOT NULL,
  PRIMARY KEY (`genra_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Contenu de la table `genres`
--

INSERT INTO `genres` (`genra_id`, `genre_label`, `genre_name`) VALUES
(1, 'action', 'Action'),
(2, 'news', 'Actualité'),
(3, 'adventure', 'Aventure'),
(4, 'animation', 'Animation'),
(5, 'biography', 'Biographie'),
(6, 'comedy', 'Comédie'),
(7, 'short', 'Court métrage'),
(8, 'documentary', 'Documentaire'),
(9, 'drama', 'Drame'),
(10, 'erotica', 'Erotique'),
(11, 'experimental', 'Experimentale'),
(12, 'family', 'Famille'),
(13, 'fantasy', 'Fantasy'),
(14, 'film-noir', 'Film-noir'),
(15, 'game-show', 'Game-show'),
(16, 'history', 'Historique'),
(17, 'horror', 'Horreur'),
(18, 'music', 'Musique'),
(19, 'musical', 'Musical'),
(20, 'mystery', 'Mystère'),
(21, 'crime', 'Policier'),
(22, 'reality-tv', 'TV réalité'),
(23, 'romance', 'Romance'),
(24, 'sci-fi', 'Science Fiction'),
(25, 'lifestyle', 'Sociologie'),
(26, 'sport', 'Sport'),
(27, 'talk-show', 'Talk-show'),
(28, 'thriller', 'Thriller'),
(29, 'war', 'Guerre'),
(30, 'western', 'Western');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
