-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 19 Février 2015 à 17:29
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
-- Structure de la table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(255) NOT NULL,
  `news_text` text NOT NULL,
  `news_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_text`, `news_date`) VALUES
(1, 'Caroline Champetier : " Il y avait du don à l’état pur "', 'La demande de Jacques Doillon paraissait simple ou du moins évidente : faire un film à hauteur d''enfant, et plus précisément de l''enfant de 4 ans qu’il avait choisi pour incarner Ponette.\r\n\r\nJ’ai une fille de 4 ans, mais la familiarité me masquait sans doute la traversée du miroir que nous avons vécue pendant le tournage.\r\n\r\nFilmer à hauteur d’enfant, redevenir petit, il y a là du sens propre et du sens figuré, du réel et de l’imaginaire, je m’en tiendrai au réel. Ma place de Directeur de la Photographie m’impose quotidiennement des choix logistiques; d’abord ne pas effrayer les enfants avec un matériel trop lourd; cependant Jacques Doillon et Alain Sarde ayant choisi le 35 mm, et Jacques Doillon souhaitant un zoom pour une plus grande souplesse de cadre, la « bête » était énorme.\r\nFilmer à hauteur d’enfant, redevenir petit, il y a là du sens propre et du sens figuré, du réel et de l’imaginaire, je m’en tiendrai au réel. Ma place de Directeur de la Photographie m’impose quotidiennement des choix logistiques; d’abord ne pas effrayer les enfants avec un matériel trop lourd; cependant Jacques Doillon et Alain Sarde ayant choisi le 35 mm, et Jacques Doillon souhaitant un zoom pour une plus grande souplesse de cadre, la « bête » était énorme.\r\nFilmer à hauteur d’enfant, redevenir petit, il y a là du sens propre et du sens figuré, du réel et de l’imaginaire, je m’en tiendrai au réel. Ma place de Directeur de la Photographie m’impose quotidiennement des choix logistiques; d’abord ne pas effrayer les enfants avec un matériel trop lourd; cependant Jacques Doillon et Alain Sarde ayant choisi le 35 mm, et Jacques Doillon souhaitant un zoom pour une plus grande souplesse de cadre, la « bête » était énorme.\r\nFilmer à hauteur d’enfant, redevenir petit, il y a là du sens propre et du sens figuré, du réel et de l’imaginaire, je m’en tiendrai au réel. Ma place de Directeur de la Photographie m’impose quotidiennement des choix logistiques; d’abord ne pas effrayer les enfants avec un matériel trop lourd; cependant Jacques Doillon et Alain Sarde ayant choisi le 35 mm, et Jacques Doillon souhaitant un zoom pour une plus grande souplesse de cadre, la « bête » était énorme.', '2014-02-11 16:47:38'),
(2, 'Bradley Cooper : après American Sniper, il va lutter contre l''esclavage', 'Bradley Cooper serait de retour au thriller avec le projet Orphan X, adapté d''un roman de Gregg Hurwitz. Ce livre n''est pas encore sorti, mais la firme Warner a déjà pris une option sur les droits, dans le but évident de l''adapter à l''écran, pour l''instant avec Cooper attaché au rôle titre. L''information est rapportée par THR, qui souligne que Cooper produira le film avec Todd Phillips, son réalisateur de la trilogie Very Bad Trip. Les deux hommes viennent d''ailleurs de créer une société de production pour l''instant sans nom, et rattachée à Warner.\r\n\r\nOn sait encore peu de choses sur Orphan X, si ce n''est qu''il raconte l''histoire d''Evan Smoak, le "Nowhere Man" qui aide son prochain, avec des méthodes parfois violentes. Un de ses missions l''entraîne à lutter contre des esclavagistes menés par un détective de la police de Los Angeles.\r\n\r\nReprésentant actuellement un film de la Warner aux Oscars (American Sniper), Bradley Cooper semble rechercher des rôles à performances et des films à sujets forts. En témoignent ses personnages récents de The Place Beyond the Pines et dans American Bluff, à la fois très différents l''un de l''autre, et montrant un nouvel aspect du jeu de l''acteur. S''il est confirmé dans Orphan X, Cooper aura une nouvelle corde à son arc : un rôle destiné à faire oublier encore un peu les personnages plus classiques qu''il a pu interpréter jusque-là.\r\nOn sait encore peu de choses sur Orphan X, si ce n''est qu''il raconte l''histoire d''Evan Smoak, le "Nowhere Man" qui aide son prochain, avec des méthodes parfois violentes. Un de ses missions l''entraîne à lutter contre des esclavagistes menés par un détective de la police de Los Angeles.\r\n\r\nOn sait encore peu de choses sur Orphan X, si ce n''est qu''il raconte l''histoire d''Evan Smoak, le "Nowhere Man" qui aide son prochain, avec des méthodes parfois violentes. Un de ses missions l''entraîne à lutter contre des esclavagistes menés par un détective de la police de Los Angeles.\r\n\r\nOn sait encore peu de choses sur Orphan X, si ce n''est qu''il raconte l''histoire d''Evan Smoak, le "Nowhere Man" qui aide son prochain, avec des méthodes parfois violentes. Un de ses missions l''entraîne à lutter contre des esclavagistes menés par un détective de la police de Los Angeles.\r\n\r\nOn sait encore peu de choses sur Orphan X, si ce n''est qu''il raconte l''histoire d''Evan Smoak, le "Nowhere Man" qui aide son prochain, avec des méthodes parfois violentes. Un de ses missions l''entraîne à lutter contre des esclavagistes menés par un détective de la police de Los Angeles.\r\n', '2014-09-10 16:48:28'),
(5, 'Superhéros et comics : tous les projets en développement', 's fans le réclamaient, les studios l''ont fait : Sony (The Amazing Spider-Man) et Marvel Studios (Avengers, Les Gardiens de la Galaxie) ont trouvé un accord financier pour que Peter Parker puisse rejoindre l''univers des Avengers. Avant cet accord, Marvel ne possédait plus les droits du personnage de Spider-Man (au profit de Sony) et ne pouvait donc l''utiliser dans ses films.\r\n\r\nConcrètement, les droits restent à Sony -le studio avait annoncé ne pas vouloir transiger sur ce point, qui distribuera, produira et gardera le contrôle du personnage, tandis que Marvel pourra scénaristiquement l''inclure à sa Phase trois, dont l''intrigue attendue Civil War, dont le tournage commencera en avril prochain.\r\n\r\nRécemment, la franchise Spider-Man avait connu un revers avec The Amazing Spider-Man 2, qui n''avait pas répondu aux attentes de Sony côté box-office. Amy Pascal (récemment partie de chez Sony pour créer sa maison de production) produira le nouveau film avec Kevin Feige, le président de Marvel Studios.\r\ns fans le réclamaient, les studios l''ont fait : Sony (The Amazing Spider-Man) et Marvel Studios (Avengers, Les Gardiens de la Galaxie) ont trouvé un accord financier pour que Peter Parker puisse rejoindre l''univers des Avengers. Avant cet accord, Marvel ne possédait plus les droits du personnage de Spider-Man (au profit de Sony) et ne pouvait donc l''utiliser dans ses films.\r\n\r\ns fans le réclamaient, les studios l''ont fait : Sony (The Amazing Spider-Man) et Marvel Studios (Avengers, Les Gardiens de la Galaxie) ont trouvé un accord financier pour que Peter Parker puisse rejoindre l''univers des Avengers. Avant cet accord, Marvel ne possédait plus les droits du personnage de Spider-Man (au profit de Sony) et ne pouvait donc l''utiliser dans ses films.\r\n', '2014-10-10 16:45:40'),
(6, 'Officiel : Spider-Man rejoint les Avengers et l''univers Marvel', 'Les fans le réclamaient, les studios l''ont fait : Sony (The Amazing Spider-Man) et Marvel Studios (Avengers, Les Gardiens de la Galaxie) ont trouvé un accord financier pour que Peter Parker puisse rejoindre l''univers des Avengers. Avant cet accord, Marvel ne possédait plus les droits du personnage de Spider-Man (au profit de Sony) et ne pouvait donc l''utiliser dans ses films.\r\n\r\nConcrètement, les droits restent à Sony -le studio avait annoncé ne pas vouloir transiger sur ce point, qui distribuera, produira et gardera le contrôle du personnage, tandis que Marvel pourra scénaristiquement l''inclure à sa Phase trois, dont l''intrigue attendue Civil War, dont le tournage commencera en avril prochain.\r\n\r\nRécemment, la franchise Spider-Man avait connu un revers avec The Amazing Spider-Man 2, qui n''avait pas répondu aux attentes de Sony côté box-office. Amy Pascal (récemment partie de chez Sony pour créer sa maison de production) produira le nouveau film avec Kevin Feige, le président de Marvel Studios.\r\nLes fans le réclamaient, les studios l''ont fait : Sony (The Amazing Spider-Man) et Marvel Studios (Avengers, Les Gardiens de la Galaxie) ont trouvé un accord financier pour que Peter Parker puisse rejoindre l''univers des Avengers. Avant cet accord, Marvel ne possédait plus les droits du personnage de Spider-Man (au profit de Sony) et ne pouvait donc l''utiliser dans ses films.\r\n\r\nLes fans le réclamaient, les studios l''ont fait : Sony (The Amazing Spider-Man) et Marvel Studios (Avengers, Les Gardiens de la Galaxie) ont trouvé un accord financier pour que Peter Parker puisse rejoindre l''univers des Avengers. Avant cet accord, Marvel ne possédait plus les droits du personnage de Spider-Man (au profit de Sony) et ne pouvait donc l''utiliser dans ses films.\r\n\r\nLes fans le réclamaient, les studios l''ont fait : Sony (The Amazing Spider-Man) et Marvel Studios (Avengers, Les Gardiens de la Galaxie) ont trouvé un accord financier pour que Peter Parker puisse rejoindre l''univers des Avengers. Avant cet accord, Marvel ne possédait plus les droits du personnage de Spider-Man (au profit de Sony) et ne pouvait donc l''utiliser dans ses films.\r\n', '2015-01-10 12:31:32'),
(7, 'New article', 'Les fans le réclamaient, les studios l''ont fait : Sony (The Amazing Spider-Man) et Marvel Studios (Avengers, Les Gardiens de la Galaxie) ont trouvé un accord financier pour que Peter Parker puisse rejoindre l''univers des Avengers. Avant cet accord, Marvel ne possédait plus les droits du personnage de Spider-Man (au profit de Sony) et ne pouvait donc l''utiliser dans ses films.\r\n		les fans le réclamaient, les studios l''ont fait : Sony (The Amazing Spider-Man) et Marvel Studios (Avengers, Les Gardiens de la Galaxie) ont trouvé un accord financier pour que Peter \r\n		Parker puisse rejoindre l''univers des Avengers. Avant cet accord, Marvel ne possédait plus les droits du personnage de Spider-Man (au profit de Sony) et ne pouvait donc l''utiliser dans \r\n		ses films.\r\n		les fans le réclamaient, les studios l''ont fait : Sony (The Amazing Spider-Man) et Marvel Studios (Avengers, Les Gardiens de la Galaxie) ont trouvé un accord financier pour que Peter \r\n		Parker puisse rejoindre l''univers des Avengers. Avant cet accord, Marvel ne possédait plus les droits du personnage de Spider-Man (au profit de Sony) et ne pouvait donc l''utiliser dans \r\n		ses films.\r\n		Concrètement, les droits restent à Sony -le studio avait annoncé ne pas vouloir transiger sur ce point, qui distribuera, produira et gardera le contrôle du personnage, tandis que\r\n		Marvel. ', '0000-00-00 00:00:00'),
(8, 'Officiel : Spider-Man rejoint les Avengers et l''univers Marvel', 'Les fans le réclamaient, les studios l''ont fait : Sony (The Amazing Spider-Man) et Marvel Studios (Avengers, Les Gardiens de la Galaxie) ont trouvé un accord financier pour que Peter Parker puisse rejoindre l''univers des Avengers. Avant cet accord, Marvel ne possédait plus les droits du personnage de Spider-Man (au profit de Sony) et ne pouvait donc l''utiliser dans ses films.\r\n		les fans le réclamaient, les studios l''ont fait : Sony (The Amazing Spider-Man) et Marvel Studios (Avengers, Les Gardiens de la Galaxie) ont trouvé un accord financier pour que Peter \r\n		Parker puisse rejoindre l''univers des Avengers. Avant cet accord, Marvel ne possédait plus les droits du personnage de Spider-Man (au profit de Sony) et ne pouvait donc l''utiliser dans \r\n		ses films.\r\n		les fans le réclamaient, les studios l''ont fait : Sony (The Amazing Spider-Man) et Marvel Studios (Avengers, Les Gardiens de la Galaxie) ont trouvé un accord financier pour que Peter \r\n		Parker puisse rejoindre l''univers des Avengers. Avant cet accord, Marvel ne possédait plus les droits du personnage de Spider-Man (au profit de Sony) et ne pouvait donc l''utiliser dans \r\n		ses films.\r\n		Concrètement, les droits restent à Sony -le studio avait annoncé ne pas vouloir transiger sur ce point, qui distribuera, produira et gardera le contrôle du personnage, tandis que\r\n		Marvel. ', '0000-00-00 00:00:00'),
(9, 'Officiel : Spider-Man rejoint les Avengers et l''univers Marvel', 'Les fans le réclamaient, les studios l''ont fait : Sony (The Amazing Spider-Man) et Marvel Studios (Avengers, Les Gardiens de la Galaxie) ont trouvé un accord financier pour que Peter Parker puisse rejoindre l''univers des Avengers. Avant cet accord, Marvel ne possédait plus les droits du personnage de Spider-Man (au profit de Sony) et ne pouvait donc l''utiliser dans ses films.\r\n		les fans le réclamaient, les studios l''ont fait : Sony (The Amazing Spider-Man) et Marvel Studios (Avengers, Les Gardiens de la Galaxie) ont trouvé un accord financier pour que Peter \r\n		Parker puisse rejoindre l''univers des Avengers. Avant cet accord, Marvel ne possédait plus les droits du personnage de Spider-Man (au profit de Sony) et ne pouvait donc l''utiliser dans \r\n		ses films.\r\n		les fans le réclamaient, les studios l''ont fait : Sony (The Amazing Spider-Man) et Marvel Studios (Avengers, Les Gardiens de la Galaxie) ont trouvé un accord financier pour que Peter \r\n		Parker puisse rejoindre l''univers des Avengers. Avant cet accord, Marvel ne possédait plus les droits du personnage de Spider-Man (au profit de Sony) et ne pouvait donc l''utiliser dans \r\n		ses films.\r\n		Concrètement, les droits restent à Sony -le studio avait annoncé ne pas vouloir transiger sur ce point, qui distribuera, produira et gardera le contrôle du personnage, tandis que\r\n		Marvel. ', '2015-02-16 00:00:00'),
(10, 'Officiel : Spider-Man rejoint les Avengers et l''univers Marvel', 'Les fans le réclamaient, les studios l''ont fait : Sony (The Amazing Spider-Man) et Marvel Studios (Avengers, Les Gardiens de la Galaxie) ont trouvé un accord financier pour que Peter Parker puisse rejoindre l''univers des Avengers. Avant cet accord, Marvel ne possédait plus les droits du personnage de Spider-Man (au profit de Sony) et ne pouvait donc l''utiliser dans ses films.\r\n		les fans le réclamaient, les studios l''ont fait : Sony (The Amazing Spider-Man) et Marvel Studios (Avengers, Les Gardiens de la Galaxie) ont trouvé un accord financier pour que Peter \r\n		Parker puisse rejoindre l''univers des Avengers. Avant cet accord, Marvel ne possédait plus les droits du personnage de Spider-Man (au profit de Sony) et ne pouvait donc l''utiliser dans \r\n		ses films.\r\n		les fans le réclamaient, les studios l''ont fait : Sony (The Amazing Spider-Man) et Marvel Studios (Avengers, Les Gardiens de la Galaxie) ont trouvé un accord financier pour que Peter \r\n		Parker puisse rejoindre l''univers des Avengers. Avant cet accord, Marvel ne possédait plus les droits du personnage de Spider-Man (au profit de Sony) et ne pouvait donc l''utiliser dans \r\n		ses films.\r\n		Concrètement, les droits restent à Sony -le studio avait annoncé ne pas vouloir transiger sur ce point, qui distribuera, produira et gardera le contrôle du personnage, tandis que\r\n		Marvel. ', '2015-02-16 00:00:00'),
(11, 'Officiel : Spider-Man rejoint les Avengers et l''univers Marvel', 'Les fans le réclamaient, les studios l''ont fait : Sony (The Amazing Spider-Man) et Marvel Studios (Avengers, Les Gardiens de la Galaxie) ont trouvé un accord financier pour que Peter Parker puisse rejoindre l''univers des Avengers. Avant cet accord, Marvel ne possédait plus les droits du personnage de Spider-Man (au profit de Sony) et ne pouvait donc l''utiliser dans ses films.\r\n		les fans le réclamaient, les studios l''ont fait : Sony (The Amazing Spider-Man) et Marvel Studios (Avengers, Les Gardiens de la Galaxie) ont trouvé un accord financier pour que Peter \r\n		Parker puisse rejoindre l''univers des Avengers. Avant cet accord, Marvel ne possédait plus les droits du personnage de Spider-Man (au profit de Sony) et ne pouvait donc l''utiliser dans \r\n		ses films.\r\n		les fans le réclamaient, les studios l''ont fait : Sony (The Amazing Spider-Man) et Marvel Studios (Avengers, Les Gardiens de la Galaxie) ont trouvé un accord financier pour que Peter \r\n		Parker puisse rejoindre l''univers des Avengers. Avant cet accord, Marvel ne possédait plus les droits du personnage de Spider-Man (au profit de Sony) et ne pouvait donc l''utiliser dans \r\n		ses films.\r\n		Concrètement, les droits restent à Sony -le studio avait annoncé ne pas vouloir transiger sur ce point, qui distribuera, produira et gardera le contrôle du personnage, tandis que\r\n		Marvel. ', '2015-02-16 00:00:00'),
(12, 'Officiel : Spider-Man rejoint les Avengers et l''univers Marvel', 'Les fans le réclamaient, les studios l''ont fait : Sony (The Amazing Spider-Man) et Marvel Studios (Avengers, Les Gardiens de la Galaxie) ont trouvé un accord financier pour que Peter Parker puisse rejoindre l''univers des Avengers. Avant cet accord, Marvel ne possédait plus les droits du personnage de Spider-Man (au profit de Sony) et ne pouvait donc l''utiliser dans ses films.\r\n		les fans le réclamaient, les studios l''ont fait : Sony (The Amazing Spider-Man) et Marvel Studios (Avengers, Les Gardiens de la Galaxie) ont trouvé un accord financier pour que Peter \r\n		Parker puisse rejoindre l''univers des Avengers. Avant cet accord, Marvel ne possédait plus les droits du personnage de Spider-Man (au profit de Sony) et ne pouvait donc l''utiliser dans \r\n		ses films.\r\n		les fans le réclamaient, les studios l''ont fait : Sony (The Amazing Spider-Man) et Marvel Studios (Avengers, Les Gardiens de la Galaxie) ont trouvé un accord financier pour que Peter \r\n		Parker puisse rejoindre l''univers des Avengers. Avant cet accord, Marvel ne possédait plus les droits du personnage de Spider-Man (au profit de Sony) et ne pouvait donc l''utiliser dans \r\n		ses films.\r\n		Concrètement, les droits restent à Sony -le studio avait annoncé ne pas vouloir transiger sur ce point, qui distribuera, produira et gardera le contrôle du personnage, tandis que\r\n		Marvel. ', '2015-02-16 00:00:00'),
(13, 'Officiel : Spider-Man rejoint les Avengers et l''univers Marvel', 'Les fans le réclamaient, les studios l''ont fait : Sony (The Amazing Spider-Man) et Marvel Studios (Avengers, Les Gardiens de la Galaxie) ont trouvé un accord financier pour que Peter Parker puisse rejoindre l''univers des Avengers. Avant cet accord, Marvel ne possédait plus les droits du personnage de Spider-Man (au profit de Sony) et ne pouvait donc l''utiliser dans ses films.\r\n		les fans le réclamaient, les studios l''ont fait : Sony (The Amazing Spider-Man) et Marvel Studios (Avengers, Les Gardiens de la Galaxie) ont trouvé un accord financier pour que Peter \r\n		Parker puisse rejoindre l''univers des Avengers. Avant cet accord, Marvel ne possédait plus les droits du personnage de Spider-Man (au profit de Sony) et ne pouvait donc l''utiliser dans \r\n		ses films.\r\n		les fans le réclamaient, les studios l''ont fait : Sony (The Amazing Spider-Man) et Marvel Studios (Avengers, Les Gardiens de la Galaxie) ont trouvé un accord financier pour que Peter \r\n		Parker puisse rejoindre l''univers des Avengers. Avant cet accord, Marvel ne possédait plus les droits du personnage de Spider-Man (au profit de Sony) et ne pouvait donc l''utiliser dans \r\n		ses films.\r\n		Concrètement, les droits restent à Sony -le studio avait annoncé ne pas vouloir transiger sur ce point, qui distribuera, produira et gardera le contrôle du personnage, tandis que\r\n		Marvel. ', '2015-02-16 00:00:00'),
(14, 'Officiel : Spider-Man rejoint les Avengers et l''univers Marvel', 'Les fans le réclamaient, les studios l''ont fait : Sony (The Amazing Spider-Man) et Marvel Studios (Avengers, Les Gardiens de la Galaxie) ont trouvé un accord financier pour que Peter Parker puisse rejoindre l''univers des Avengers. Avant cet accord, Marvel ne possédait plus les droits du personnage de Spider-Man (au profit de Sony) et ne pouvait donc l''utiliser dans ses films.\r\n		les fans le réclamaient, les studios l''ont fait : Sony (The Amazing Spider-Man) et Marvel Studios (Avengers, Les Gardiens de la Galaxie) ont trouvé un accord financier pour que Peter \r\n		Parker puisse rejoindre l''univers des Avengers. Avant cet accord, Marvel ne possédait plus les droits du personnage de Spider-Man (au profit de Sony) et ne pouvait donc l''utiliser dans \r\n		ses films.\r\n		les fans le réclamaient, les studios l''ont fait : Sony (The Amazing Spider-Man) et Marvel Studios (Avengers, Les Gardiens de la Galaxie) ont trouvé un accord financier pour que Peter \r\n		Parker puisse rejoindre l''univers des Avengers. Avant cet accord, Marvel ne possédait plus les droits du personnage de Spider-Man (au profit de Sony) et ne pouvait donc l''utiliser dans \r\n		ses films.\r\n		Concrètement, les droits restent à Sony -le studio avait annoncé ne pas vouloir transiger sur ce point, qui distribuera, produira et gardera le contrôle du personnage, tandis que\r\n		Marvel. ', '2015-02-16 00:00:00'),
(15, 'Officiel : Spider-Man rejoint les Avengers et l''univers Marvel', 'Les fans le réclamaient, les studios l''ont fait : Sony (The Amazing Spider-Man) et Marvel Studios (Avengers, Les Gardiens de la Galaxie) ont trouvé un accord financier pour que Peter Parker puisse rejoindre l''univers des Avengers. Avant cet accord, Marvel ne possédait plus les droits du personnage de Spider-Man (au profit de Sony) et ne pouvait donc l''utiliser dans ses films.\r\n		les fans le réclamaient, les studios l''ont fait : Sony (The Amazing Spider-Man) et Marvel Studios (Avengers, Les Gardiens de la Galaxie) ont trouvé un accord financier pour que Peter \r\n		Parker puisse rejoindre l''univers des Avengers. Avant cet accord, Marvel ne possédait plus les droits du personnage de Spider-Man (au profit de Sony) et ne pouvait donc l''utiliser dans \r\n		ses films.\r\n		les fans le réclamaient, les studios l''ont fait : Sony (The Amazing Spider-Man) et Marvel Studios (Avengers, Les Gardiens de la Galaxie) ont trouvé un accord financier pour que Peter \r\n		Parker puisse rejoindre l''univers des Avengers. Avant cet accord, Marvel ne possédait plus les droits du personnage de Spider-Man (au profit de Sony) et ne pouvait donc l''utiliser dans \r\n		ses films.\r\n		Concrètement, les droits restent à Sony -le studio avait annoncé ne pas vouloir transiger sur ce point, qui distribuera, produira et gardera le contrôle du personnage, tandis que\r\n		Marvel. ', '2015-02-16 00:00:00'),
(16, 'Officiel : Spider-Man rejoint les Avengers et l''univers Marvel', 'Les fans le réclamaient, les studios l''ont fait : Sony (The Amazing Spider-Man) et Marvel Studios (Avengers, Les Gardiens de la Galaxie) ont trouvé un accord financier pour que Peter Parker puisse rejoindre l''univers des Avengers. Avant cet accord, Marvel ne possédait plus les droits du personnage de Spider-Man (au profit de Sony) et ne pouvait donc l''utiliser dans ses films.\r\n		les fans le réclamaient, les studios l''ont fait : Sony (The Amazing Spider-Man) et Marvel Studios (Avengers, Les Gardiens de la Galaxie) ont trouvé un accord financier pour que Peter \r\n		Parker puisse rejoindre l''univers des Avengers. Avant cet accord, Marvel ne possédait plus les droits du personnage de Spider-Man (au profit de Sony) et ne pouvait donc l''utiliser dans \r\n		ses films.\r\n		les fans le réclamaient, les studios l''ont fait : Sony (The Amazing Spider-Man) et Marvel Studios (Avengers, Les Gardiens de la Galaxie) ont trouvé un accord financier pour que Peter \r\n		Parker puisse rejoindre l''univers des Avengers. Avant cet accord, Marvel ne possédait plus les droits du personnage de Spider-Man (au profit de Sony) et ne pouvait donc l''utiliser dans \r\n		ses films.\r\n		Concrètement, les droits restent à Sony -le studio avait annoncé ne pas vouloir transiger sur ce point, qui distribuera, produira et gardera le contrôle du personnage, tandis que\r\n		Marvel. ', '2015-02-16 00:00:00'),
(17, 'Officiel : Spider-Man rejoint les Avengers et l''univers Marvel', 'Les fans le réclamaient, les studios l''ont fait : Sony (The Amazing Spider-Man) et Marvel Studios (Avengers, Les Gardiens de la Galaxie) ont trouvé un accord financier pour que Peter Parker puisse rejoindre l''univers des Avengers. Avant cet accord, Marvel ne possédait plus les droits du personnage de Spider-Man (au profit de Sony) et ne pouvait donc l''utiliser dans ses films.\r\n		les fans le réclamaient, les studios l''ont fait : Sony (The Amazing Spider-Man) et Marvel Studios (Avengers, Les Gardiens de la Galaxie) ont trouvé un accord financier pour que Peter \r\n		Parker puisse rejoindre l''univers des Avengers. Avant cet accord, Marvel ne possédait plus les droits du personnage de Spider-Man (au profit de Sony) et ne pouvait donc l''utiliser dans \r\n		ses films.\r\n		les fans le réclamaient, les studios l''ont fait : Sony (The Amazing Spider-Man) et Marvel Studios (Avengers, Les Gardiens de la Galaxie) ont trouvé un accord financier pour que Peter \r\n		Parker puisse rejoindre l''univers des Avengers. Avant cet accord, Marvel ne possédait plus les droits du personnage de Spider-Man (au profit de Sony) et ne pouvait donc l''utiliser dans \r\n		ses films.\r\n		Concrètement, les droits restent à Sony -le studio avait annoncé ne pas vouloir transiger sur ce point, qui distribuera, produira et gardera le contrôle du personnage, tandis que\r\n		Marvel. ', '2015-02-16 00:00:00'),
(18, 'Officiel : Spider-Man rejoint les Avengers et l''univers Marvel', 'Les fans le réclamaient, les studios l''ont fait : Sony (The Amazing Spider-Man) et Marvel Studios (Avengers, Les Gardiens de la Galaxie) ont trouvé un accord financier pour que Peter Parker puisse rejoindre l''univers des Avengers. Avant cet accord, Marvel ne possédait plus les droits du personnage de Spider-Man (au profit de Sony) et ne pouvait donc l''utiliser dans ses films.\r\n		les fans le réclamaient, les studios l''ont fait : Sony (The Amazing Spider-Man) et Marvel Studios (Avengers, Les Gardiens de la Galaxie) ont trouvé un accord financier pour que Peter \r\n		Parker puisse rejoindre l''univers des Avengers. Avant cet accord, Marvel ne possédait plus les droits du personnage de Spider-Man (au profit de Sony) et ne pouvait donc l''utiliser dans \r\n		ses films.\r\n		les fans le réclamaient, les studios l''ont fait : Sony (The Amazing Spider-Man) et Marvel Studios (Avengers, Les Gardiens de la Galaxie) ont trouvé un accord financier pour que Peter \r\n		Parker puisse rejoindre l''univers des Avengers. Avant cet accord, Marvel ne possédait plus les droits du personnage de Spider-Man (au profit de Sony) et ne pouvait donc l''utiliser dans \r\n		ses films.\r\n		Concrètement, les droits restent à Sony -le studio avait annoncé ne pas vouloir transiger sur ce point, qui distribuera, produira et gardera le contrôle du personnage, tandis que\r\n		Marvel. ', '2015-02-16 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
