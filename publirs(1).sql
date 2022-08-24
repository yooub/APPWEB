-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 28 Mai 2022 à 18:49
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `publirs`
--

-- --------------------------------------------------------

--
-- Structure de la table `collaboration`
--

CREATE TABLE IF NOT EXISTS `collaboration` (
  `id_collaboration` int(11) NOT NULL AUTO_INCREMENT,
  `id_influenceur` int(11) DEFAULT NULL,
  `id_marque` int(11) DEFAULT NULL,
  `date` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_collaboration`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `influenceur`
--

CREATE TABLE IF NOT EXISTS `influenceur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text,
  `prenom` text,
  `email` text,
  `insta` text,
  `nbrabonne` bigint(20) DEFAULT NULL,
  `img` longblob,
  `ville` text,
  `descript` longtext,
  `mdp` text,
  `civilite` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `influenceur`
--

INSERT INTO `influenceur` (`id`, `nom`, `prenom`, `email`, `insta`, `nbrabonne`, `img`, `ville`, `descript`, `mdp`, `civilite`) VALUES
(3, 'najwa', 'abouchama', 'ritazahir24@gmail.com', 'https://www.youtube.com/watch?v=6LluUPE595o', 2000, '', 'fes', 'dgygfyg', 'ritalima2002', 'femme'),
(4, 'rita', 'jifj', 'ritazahir93@gmail.com', 'https://www.youtube.com/watch?v=6LluUPE595o', 2000, '', 'fes', 'djievif', 'ritalima2002', 'femme'),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'rita', 'jifj', 'ritazahir93@gmail.com', 'https://www.youtube.com/watch?v=6LluUPE595o', 2000, '', 'fes', 'djievif', 'ritalima2002', 'femme'),
(7, 'rita', 'jifj', 'ritazahir93@gmail.com', 'https://www.youtube.com/watch?v=6LluUPE595o', 2000, '', 'fes', 'djievif', 'ritalima2002', 'femme'),
(8, 'rita', 'jifj', 'ritazahir93@gmail.com', 'https://www.youtube.com/watch?v=6LluUPE595o', 2000, '', 'fes', 'djievif', 'ritalima2002', 'femme'),
(9, 'rita', 'jifj', 'ritazahir93@gmail.com', 'https://www.youtube.com/watch?v=6LluUPE595o', 2000, '', 'fes', 'djievif', 'ritalima2002', 'femme'),
(10, 'ijijaf', 'fehah', 'jbffg@gmail.com', 'https://www.youtube.com/watch?v=6LluUPE595o', 2000, '', 'fes', 'ugyyi', 'ritalima2002', 'homme');

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

CREATE TABLE IF NOT EXISTS `marque` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marque` text,
  `email` text,
  `tel` text,
  `typeproduit` text,
  `logo` longblob,
  `produit` text,
  `mdp` text,
  `descript` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
