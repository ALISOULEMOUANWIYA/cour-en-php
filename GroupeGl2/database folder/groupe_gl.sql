-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 19 fév. 2021 à 17:54
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `groupe_gl`
--

-- --------------------------------------------------------

--
-- Structure de la table `addresseutill`
--

CREATE TABLE `addresseutill` (
  `IDAddress` int(11) NOT NULL,
  `AddressG` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `addresseutill`
--

INSERT INTO `addresseutill` (`IDAddress`, `AddressG`) VALUES
(1, 'Comores'),
(2, 'Sénégal');

-- --------------------------------------------------------

--
-- Structure de la table `coffres`
--

CREATE TABLE `coffres` (
  `ID_Coffres` int(11) NOT NULL,
  `Date_debut_Coffres` date NOT NULL,
  `Date_fin_Coffres` date NOT NULL,
  `Duree_Coffres` varchar(150) NOT NULL,
  `Cotisation_Coffres` int(11) NOT NULL,
  `Adherant_Coffres` int(11) NOT NULL,
  `Montant_Coffres` int(11) NOT NULL,
  `Contancte_Coffres` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `coffres`
--

INSERT INTO `coffres` (`ID_Coffres`, `Date_debut_Coffres`, `Date_fin_Coffres`, `Duree_Coffres`, `Cotisation_Coffres`, `Adherant_Coffres`, `Montant_Coffres`, `Contancte_Coffres`) VALUES
(1, '2021-02-07', '2021-02-28', '0', 100000, 8, 70000, 3480984),
(2, '2021-01-07', '2021-03-13', '2 Mois 6 Jours.', 20000, 20, 12000, 783404058);

-- --------------------------------------------------------

--
-- Structure de la table `compte_gerant`
--

CREATE TABLE `compte_gerant` (
  `ID_Gerant` int(11) NOT NULL,
  `Prenom_Gerant` varchar(150) NOT NULL,
  `Nom_Gerant` varchar(150) NOT NULL,
  `Address_Email_Gerant` varchar(150) NOT NULL,
  `DATE_naissance_Gerant` varchar(150) NOT NULL,
  `Genre_Gerant` varchar(100) NOT NULL,
  `Numero_Telephone_Gerant` varchar(150) NOT NULL,
  `Address_De_Localisation_Gerant` varchar(150) NOT NULL,
  `ID_Fonction_Gerant` varchar(150) NOT NULL,
  `PassWord_Gerant` varchar(150) NOT NULL,
  `CodeIdentiction_Gerant` varchar(150) NOT NULL,
  `Date_inscription_Gerant` varchar(150) DEFAULT NULL,
  `Matricule_Gerant` varchar(150) NOT NULL,
  `Age_Gerant` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `compte_gerant`
--

INSERT INTO `compte_gerant` (`ID_Gerant`, `Prenom_Gerant`, `Nom_Gerant`, `Address_Email_Gerant`, `DATE_naissance_Gerant`, `Genre_Gerant`, `Numero_Telephone_Gerant`, `Address_De_Localisation_Gerant`, `ID_Fonction_Gerant`, `PassWord_Gerant`, `CodeIdentiction_Gerant`, `Date_inscription_Gerant`, `Matricule_Gerant`, `Age_Gerant`) VALUES
(9, 'ALI', 'soule', 'mouanwiya30@gmail.com', '1959-06-10', 'Homme', '781665800', 'Comores', 'Trésorier', 'f746bbb4493da019b51f18c4318cd25e', 'esro?rile', '19/02/2021 00:20:22', '19/02/20|Trésori|le', '62'),
(10, 'ALI', 'MOUANWIYA', 'mouanwiya30@gmail.com', '1995-12-18', 'Homme', '781665800', 'Comores', 'Administrateur', 'a4e90077a16407894bb749b2bc3f0d73', 'tisuarteinrNIAWAY', '19/02/2021 17:52:46', '19/02/20|Administ|NIAWAY', '26');
-- mot de passe trésorier est : alisoule
-- mot de passe administrateur est : ali12
-- --------------------------------------------------------

--
-- Structure de la table `compte_role`
--

CREATE TABLE `compte_role` (
  `ID_Role` int(11) NOT NULL,
  `Role_Compte` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `compte_role`
--

INSERT INTO `compte_role` (`ID_Role`, `Role_Compte`) VALUES
(1, 'Administrateur '),
(2, 'Trésorier');

-- --------------------------------------------------------

--
-- Structure de la table `compte_utilisateur`
--

CREATE TABLE `compte_utilisateur` (
  `ID_Compte` int(11) NOT NULL,
  `Prenom_Compte` varchar(150) NOT NULL,
  `Nom_Compte` varchar(150) NOT NULL,
  `Address_Email_Compte` varchar(150) NOT NULL,
  `PassWord_Compte` varchar(150) NOT NULL,
  `cleCoffre1` int(11) DEFAULT NULL,
  `cleCoffre2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `compte_utilisateur`
--

INSERT INTO `compte_utilisateur` (`ID_Compte`, `Prenom_Compte`, `Nom_Compte`, `Address_Email_Compte`, `PassWord_Compte`, `cleCoffre1`, `cleCoffre2`) VALUES
(6, 'ALI', 'MOUANWIYA', 'mouanwiya30@gmail.com', '86318e52f5ed4801abe1d13d509443de', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `controllogine`
--

CREATE TABLE `controllogine` (
  `ControlleLogine` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `controllogine`
--

INSERT INTO `controllogine` (`ControlleLogine`) VALUES
(-1);

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE `genre` (
  `IdGenre` int(11) NOT NULL,
  `genreUtilisateur` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`IdGenre`, `genreUtilisateur`) VALUES
(1, 'Homme'),
(2, 'Femme'),
(3, 'Autre');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `addresseutill`
--
ALTER TABLE `addresseutill`
  ADD PRIMARY KEY (`IDAddress`);

--
-- Index pour la table `coffres`
--
ALTER TABLE `coffres`
  ADD PRIMARY KEY (`ID_Coffres`);

--
-- Index pour la table `compte_gerant`
--
ALTER TABLE `compte_gerant`
  ADD PRIMARY KEY (`ID_Gerant`);

--
-- Index pour la table `compte_role`
--
ALTER TABLE `compte_role`
  ADD PRIMARY KEY (`ID_Role`);

--
-- Index pour la table `compte_utilisateur`
--
ALTER TABLE `compte_utilisateur`
  ADD PRIMARY KEY (`ID_Compte`);

--
-- Index pour la table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`IdGenre`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `addresseutill`
--
ALTER TABLE `addresseutill`
  MODIFY `IDAddress` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `coffres`
--
ALTER TABLE `coffres`
  MODIFY `ID_Coffres` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `compte_gerant`
--
ALTER TABLE `compte_gerant`
  MODIFY `ID_Gerant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `compte_role`
--
ALTER TABLE `compte_role`
  MODIFY `ID_Role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `compte_utilisateur`
--
ALTER TABLE `compte_utilisateur`
  MODIFY `ID_Compte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `genre`
--
ALTER TABLE `genre`
  MODIFY `IdGenre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
