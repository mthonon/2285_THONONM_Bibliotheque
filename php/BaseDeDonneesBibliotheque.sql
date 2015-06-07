-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 07 Juin 2015 à 21:22
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `bibliotheque`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `genre` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `genre`) VALUES
(1, 'Roman'),
(2, 'Sf et Fantastique'),
(3, 'Romance'),
(4, 'Bande dessinée'),
(5, 'Pratique'),
(6, 'Thriller et Policier'),
(7, 'Jeunesse'),
(8, 'Cuisine'),
(9, 'Humour'),
(10, 'Famille'),
(11, 'Santé et Bien être'),
(12, 'Erotique'),
(13, 'Voyage'),
(14, 'Histoire et Cultures'),
(15, 'Cinéma'),
(16, 'Biographies et Mémoires'),
(17, 'Politique et Actualité'),
(18, 'Essais'),
(19, 'Classiques'),
(20, 'Informatique et technologie'),
(21, 'Musique et Peinture'),
(22, 'Contes et Nouvelles'),
(23, 'Philisophie'),
(24, 'Poésie'),
(25, 'Anglais'),
(26, 'Sciences Humaines'),
(27, 'Théatre'),
(28, 'Partitions'),
(29, 'Sciences'),
(30, 'Espagnol'),
(31, 'Italien'),
(32, 'Allemand'),
(33, 'Religion et Spiritualité'),
(34, 'Entreprise'),
(35, 'Manga');

-- --------------------------------------------------------

--
-- Structure de la table `edition`
--

CREATE TABLE IF NOT EXISTS `edition` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `maison` text CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `edition`
--

INSERT INTO `edition` (`id`, `maison`) VALUES
(1, 'Albin Michel'),
(2, 'Edition Atlas'),
(3, 'Eni éditions'),
(4, 'Flammarion'),
(5, 'Folio'),
(6, 'Gallimard'),
(7, 'Guy Trédaniel'),
(8, 'Hachette'),
(9, 'Lafon'),
(10, 'Panthéon'),
(11, 'Piccolo'),
(12, 'Pocket'),
(13, 'Voy''[el]'),
(14, 'Liana Levi');

-- --------------------------------------------------------

--
-- Structure de la table `emplacement`
--

CREATE TABLE IF NOT EXISTS `emplacement` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `emplacement` text CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `emplacement`
--

INSERT INTO `emplacement` (`id`, `emplacement`) VALUES
(1, 'Programmation'),
(2, 'Table de nuit'),
(3, 'Transports en commun'),
(4, 'Voyage'),
(5, 'Travaux scolaires'),
(6, 'Ateliers'),
(7, 'Cuisine'),
(8, 'Décoration');

-- --------------------------------------------------------

--
-- Structure de la table `livres`
--

CREATE TABLE IF NOT EXISTS `livres` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `titre` text NOT NULL,
  `auteur` text NOT NULL,
  `genre_id` smallint(5) unsigned NOT NULL,
  `emplacement_id` smallint(5) unsigned NOT NULL,
  `maison_edit_id` smallint(5) unsigned NOT NULL,
  `annee_edit` year(4) NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `resume` text NOT NULL,
  `vignette` varchar(255) DEFAULT NULL,
  `encodeur_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `livres`
--

INSERT INTO `livres` (`id`, `titre`, `auteur`, `genre_id`, `emplacement_id`, `maison_edit_id`, `annee_edit`, `date_create`, `resume`, `vignette`, `encodeur_id`) VALUES
(1, 'Et après', 'Guillaume MUSSO', 1, 2, 12, 2008, '2015-05-31 18:10:03', 'À huit ans, Nathan s’est noyé en plongeant dans un lac pour sauver une fillette.\r\nArrêt cardiaque, tunnel de lumière, mort clinique. Et puis, contre toute attente, de nouveau la vie.\r\nVingt ans plus tard, Nathan est devenu un brillant avocat new-yorkais.\r\nMeurtri par son divorce, il s’est barricadé dans son travail. C’est alors qu’un mystérieux médecin fait irruption dans son existence.\r\nIl est temps pour lui de découvrir pourquoi il est revenu.', 'img/iconesLivres/il4qwut.jpg', 1),
(2, 'Nécromancienne, Une vie en échange', 'Corinne GUITTEAUD', 2, 2, 13, 2014, '2015-06-07 18:33:44', '    Quand elle se réveille un beau matin, Elizabeth Rosenbach a la désagréable impression qu’il lui manque un pan entier de sa vie. Pour tout dire, elle a signé un pacte un an plus tôt avec une Nécromancienne, pacte qui devait non seulement changer sa propre existence, mais aussi permettre à un être cher de trouver enfin le repos. Mais un événement terrible a conduit le fantôme à renoncer de son côté. En enquêtant sur cette désertion et afin de trouver un moyen de sauver tout de même l’âme perdue, Elizabeth va entrer dans le monde des Nécromanciennes.', 'img/iconesLivres/igt8evp.jpg', 1),
(3, 'Acide sulfurique', 'Amélie Nothom', 1, 4, 1, 2005, '2015-06-06 21:16:29', '   Une émission de télé-réalité, nommée Concentration, est lancée. On y filme des prisonniers, choisis au hasard parmi la population et enlevés par rafles. Leurs conditions de vie sont épouvantables : ils sont peu nourris, insultés, battus par des surveillants appelés Kapo. Chaque jour, deux prisonniers sont choisis et tués, sous le regard des caméras. Zdena, une des kapos, tombe éperdument amoureuse de Pannonique, héroïne du livre et prisonnière connue sous le matricule CKZ 114. La kapo est prête à tout pour elle.', 'img/iconesLivres/ik2d34s.jpg', 1),
(4, 'Venise.net', 'Thierry MAUGENEST', 1, 4, 14, 2003, '2015-06-06 21:13:43', 'Des mails qui traversent l''Atlantique entre Venise et New York. Un peintre du 16eme siècle qui peine à s''imposer parmi les artistes de la Sérenissime et que l''on surnomme tintoretto, Un inspecteur vénitien qui ignore tout de la peinture de la Renaissance, mais, voudrait comprendre.\r\nMais où sommes-nous ? Dans la Venise des doges, où celle desvaporetti ? Les deux. Car pour resoudre le mystère qui entoure plusieurs assassinats, il faut parfois remonter très loin dans le temps ... Et le telescopage des siècle fait de ce roman un polar bien particulier.', 'img/iconesLivres/iedr898.jpg', 1),
(5, 'Je suis une légende', 'Richard MATHESON', 2, 4, 5, 1954, '2015-06-06 20:19:12', '             Le livre relate le destin tragique du dernier homme sur Terre, seul être humain à ne pas avoir subi les affres d''une pandémie ayant inexorablement transformé les victimes infectées en créatures présentant toutes les caractéristiques des vampires mais qui ne sont pas des vampires, ce sont des zombies-vampires.', 'img/iconesLivres/ibs5yxd.jpg', 1),
(6, '7 ans après', 'Guillaume MUSSO', 1, 2, 12, 2012, '2015-06-06 20:26:42', 'Après un divorce orageux, Nikki et Sebastian ont refait leur vie, très loin l’un de l’autre. Jusqu’au jour où leur fils Jeremy disparaît mystérieusement. Fugue ? Kidnapping ?\r\nPour sauver ce qu’elle a de plus cher, Nikki n’a d’autre choix que de se tourner vers son ex-mari qu’elle n’a pas revu depuis sept ans.\r\nContraints d’unir leurs forces, ils s’engagent alors dans une course-poursuite, retrouvant une intimité qu’ils croyaient perdue à jamais…', 'img/iconesLivres/ieg4klv.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'michelle.thonon@mail.be', '564ad243e3d2cd5d218bb9b357b6d22955bcea89');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
