-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 19 jan. 2021 à 13:22
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
-- Base de données : `l2_memoires`
--

-- --------------------------------------------------------

--
-- Structure de la table `domaine`
--

DROP TABLE IF EXISTS `domaine`;
CREATE TABLE IF NOT EXISTS `domaine` (
  `idDomaine` int(11) NOT NULL AUTO_INCREMENT,
  `nomDomaine` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`idDomaine`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `domaine`
--

INSERT INTO `domaine` (`idDomaine`, `nomDomaine`) VALUES
(1, 'Informatique'),
(2, 'Gestion');

-- --------------------------------------------------------

--
-- Structure de la table `sujet`
--

DROP TABLE IF EXISTS `sujet`;
CREATE TABLE IF NOT EXISTS `sujet` (
  `idSujet` int(11) NOT NULL AUTO_INCREMENT,
  `libelleSujet` text NOT NULL,
  `description` text NOT NULL,
  `problematique` text NOT NULL,
  `idDomaineF` int(11) NOT NULL,
  PRIMARY KEY (`idSujet`),
  KEY `idDomaineF` (`idDomaineF`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
