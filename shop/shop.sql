-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 26 Octobre 2016 à 00:30
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `shop`
--

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

CREATE TABLE IF NOT EXISTS `auteur` (
  `id_auteur` int(11) NOT NULL AUTO_INCREMENT,
  `auteur` varchar(255) NOT NULL,
  PRIMARY KEY (`id_auteur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `auteur`
--

INSERT INTO `auteur` (`id_auteur`, `auteur`) VALUES
(1, 'J. K. Rowling'),
(2, 'Howard Phillips Lovecraft'),
(3, 'Naoki Urasawa'),
(4, 'Jakob et Wilhelm Grimm');

-- --------------------------------------------------------

--
-- Structure de la table `edition`
--

CREATE TABLE IF NOT EXISTS `edition` (
  `id_edition` int(11) NOT NULL AUTO_INCREMENT,
  `edition` varchar(255) NOT NULL,
  PRIMARY KEY (`id_edition`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `edition`
--

INSERT INTO `edition` (`id_edition`, `edition`) VALUES
(1, 'Folio'),
(2, 'Kana'),
(3, 'Librio');

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE IF NOT EXISTS `genre` (
  `id_genre` int(11) NOT NULL AUTO_INCREMENT,
  `genre` varchar(255) NOT NULL,
  PRIMARY KEY (`id_genre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `genre`
--

INSERT INTO `genre` (`id_genre`, `genre`) VALUES
(1, 'Roman'),
(2, 'Manga'),
(3, 'Conte');

-- --------------------------------------------------------

--
-- Structure de la table `langue`
--

CREATE TABLE IF NOT EXISTS `langue` (
  `id_langue` int(11) NOT NULL AUTO_INCREMENT,
  `langue` int(255) NOT NULL,
  PRIMARY KEY (`id_langue`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

CREATE TABLE IF NOT EXISTS `livre` (
  `id_livre` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `parution` date NOT NULL,
  `couverture` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  `stock` int(11) NOT NULL,
  `langue` varchar(255) NOT NULL,
  `edition` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  PRIMARY KEY (`id_livre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `livre`
--

INSERT INTO `livre` (`id_livre`, `titre`, `auteur`, `parution`, `couverture`, `prix`, `stock`, `langue`, `edition`, `genre`) VALUES
(1, 'Harry Potter à l''école des sorciers - Tome 1', 'J. K. Rowling', '1997-06-26', 'harry_potter_ecole_sorciers.jpg', 19.9, 100, 'français', 'folio', 'roman'),
(2, 'Harry Potter et la Chambre des secrets - Tome 2', 'J. K. Rowling', '1998-07-02', 'harry_potter_chambre_secrets.jpg', 19.9, 100, 'français', 'folio', 'roman'),
(3, 'Harry Potter et le Prisonnier d''Azkaban - Tome 3', 'J. K. Rowling', '1999-07-08', 'harry_potter_prisonnier_azkaban.jpg', 19.9, 100, 'français', 'folio', 'roman'),
(4, 'Harry Potter et la Coupe de feu - Tome 4', 'J. K. Rowling', '2000-07-08', 'harry_potter_coupe_feu.jpg', 19.9, 100, 'français', 'folio', 'roman'),
(5, 'Harry Potter et l''Ordre du phénix - Tome 5', 'J. K. Rowling', '2003-06-21', 'harry_potter_ordre_phenix.jpg', 19.9, 100, 'français', 'folio', 'roman'),
(6, 'Harry Potter et le Prince de sang-mêlé - Tome 6', 'J. K. Rowling', '2005-07-16', 'harry_potter_prince_sangmele.jpg', 19.9, 100, 'français', 'folio', 'roman'),
(7, 'Harry Potter et les Reliques de la Mort - Tome 7', 'J. K. Rowling', '2007-07-21', 'harry_potter_reliques_mort.jpg', 19.9, 100, 'français', 'folio', 'roman'),
(8, 'Je suis d''ailleurs', 'Howard Phillips Lovecraft', '2002-09-01', 'lovecraft_ailleurs.jpg', 6.5, 100, 'français', 'folio', 'roman'),
(9, 'La couleur tombée du ciel', 'Howard Phillips Lovecraft', '2000-10-11', 'lovecraft_couleur_tombee_ciel.jpg', 7.1, 100, 'français', 'folio', 'roman'),
(10, 'Monster - Tome 1', 'Naoki Urasawa', '2001-10-20', 'monster_tome_1.jpg', 5.21, 100, 'français', 'Kana', 'manga'),
(11, 'Monster - Tome 2', 'Naoki Urasawa', '2001-12-04', 'monster_tome_2.jpg', 5.21, 100, 'français', 'Kana', 'manga'),
(12, 'Monster - Tome 3', 'Naoki Urasawa', '2002-03-21', 'monster_tome_3.jpg', 5.21, 100, 'français', 'Kana', 'manga'),
(13, 'Monster - Tome 4', 'Naoki Urasawa', '2002-06-04', 'monster_tome_4.jpg', 5.21, 100, 'français', 'Kana', 'manga'),
(14, 'Blanche-Neige', 'Jakob et Wilhelm Grimm', '2003-07-15', 'blanche_neige.jpg', 2, 100, 'français', 'librio', 'conte');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE IF NOT EXISTS `panier` (
  `id_user` int(11) NOT NULL,
  `id_livre` int(11) NOT NULL,
  `quantite` decimal(3,0) NOT NULL,
  `total` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `panier`
--

INSERT INTO `panier` (`id_user`, `id_livre`, `quantite`, `total`) VALUES
(1, 1, '8', '159.20'),
(1, 8, '2', '13.00'),
(1, 10, '1', '5.21'),
(1, 7, '1', '19.90'),
(1, 14, '1', '2.00');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `inscription` date NOT NULL,
  `pseudo` text NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_user`, `prenom`, `nom`, `mail`, `mdp`, `inscription`, `pseudo`) VALUES
(1, 'Robert', 'Dupond', 'dupond@gmail.com', 'dupond', '2016-08-24', 'dupond'),
(2, 'George', 'De la jungle', 'george@gmail.com', 'george', '2016-08-25', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
