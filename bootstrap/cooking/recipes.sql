-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 18 Mars 2015 à 17:20
-- Version du serveur :  5.6.16
-- Version de PHP :  5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `cooking`
--

-- --------------------------------------------------------

--
-- Structure de la table `recipes`
--

CREATE TABLE IF NOT EXISTS `recipes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` tinyint(2) NOT NULL,
  `title` varchar(100) NOT NULL,
  `ingredients` text NOT NULL,
  `content` text NOT NULL,
  `picture` varchar(100) DEFAULT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `recipes`
--

INSERT INTO `recipes` (`id`, `type`, `title`, `ingredients`, `content`, `picture`, `date`) VALUES
(1, 1, 'cookies', '150g farines\r\n2 oeufs\r\n250g de beurre\r\n200g de pépites de chocolat', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'cookie.jpg', '2015-03-17 15:52:41'),
(2, 3, 'soupe aux 7 légumes ', '1 gros poireau\r\n6 carottes\r\n1 navet\r\n1 branche de céleri\r\n2 pommes de terre\r\n2 tomates\r\n1 courgette\r\n1 oignon\r\n1bouillon cube\r\n10 cl de crème fraîche\r\nun peu de beurre', 'Peler, laver et couper les légumes en petits morceaux.\r\nFaire revenir le poireau dans le beurre 10 minutes environ.\r\nDans une autre marmite, mettre les autres légumes et les recouvrir d''eau.\r\nAjouter la moitié du bouillon cube et faire cuire 30 minutes ou 10 minutes à l''autocuiseur.\r\nRecouvrir le poireau d''eau et y ajouter le reste du bouillon cube. Faire cuire 20 minutes environ.\r\nLorsque les légumes (carottes, navet, tomates... mais pas le poireau !) sont cuits, les mixer et assaisonner à votre goût.\r\nAjouter la crème fraiche et le poireau non mixé. \r\nMélanger le tout et déguster.\r\nBon appétit.\r\n', 'soupe.jpg', '2015-03-17 17:22:31'),
(3, 2, 'Hamburger maison', 'pains à hamburgers\r\nsteak haché\r\noignons\r\ncheddar (achat sous vide en grande surface) \r\ntomates\r\nsalade\r\nmoutarde\r\nketchup', 'Faites revenir les oignons à feux doux. \r\nAjouter les steaks. \r\nUne fois saisi, poser une tranche de cheddar sur le steak et laisser fondre. \r\nUne fois cuit, déposer le steak et le fromage sur une des tranches du pain que vous aurez auparavant tartinée d''un mélange de ketchup et de moutarde. \r\nAjouter la salade et de petites rondelles de tomates. \r\nVous pouvez maintenant recouvrir la préparation de l''autre tranche (avec ketchup et moutarde)', 'burger.jpg', '2015-03-18 10:34:09'),
(4, 1, 'Gâteau aux chocolat ', '200 g de chocolat noir\r\n150 g de sucre\r\n50 g de farine\r\n150 g de beurre\r\n4 oeufs', 'Cassez les oeufs en séparant les blancs des jaunes. Battez fermement les blancs en neige avec une pincée de sel.\r\nMélangez le beurre mou et le sucre. Ajoutez-y le chocolat fondu tout en continuant de mélanger puis incorporez un à un les jaunes d''oeufs sans cesser de remuer.\r\nAjouter la farine puis les blancs d''oeufs et mélangez délicatement.', 'choclate.png', '2015-03-18 14:12:50'),
(5, 2, 'Pizza', '1 pâte à pizza\r\n1 tomate pelée\r\n1 paquet de dès de jambon\r\n1 paquet de fromage râpé\r\n1 paquet de mozzarella\r\n1 boîte de concentré de tomates\r\nquelques champignons\r\n1 oignon\r\nquelques olives noires\r\nquelques feuilles de basilic frais\r\n1 filet d''huile d''olive\r\nsel, poivre', 'Allumez votre four th.7 (210°C).2Hachez l’oignon. Faîtes chauffer l’huile dans une casserole puis faîtes revenir doucement l’oignon haché et la tomate pelée puis remuez. 3Ajoutez le concentré de tomates, une pincée de sel et mélangez. Laissez cuire à feu doux avec un couvercle pendant 10 min. 4Farinez la table ou une planche à pâtisserie et étalez la pâte avec un rouleau.5Beurrez la plaque du four et déposez la pâte étalée dessus.6Mettez sur la pâte la sauce tomate en l’étalant, sans en mettre sur les bords. 7Ajoutez tous les ingrédients que vous voulez pour compléter et décorez votre pizza : fromage, mozzarella, olives noires, jambon, champignons, anchois…8Mettez au four 25 à 30 min. 9Verse un filet d’huile d’olive et ajoutez quelques feuilles de basilic frais au moment de servir.', 'pizza.png', '2015-03-18 14:17:16');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
