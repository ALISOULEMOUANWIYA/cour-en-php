-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 11 juil. 2021 à 08:20
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
-- Base de données : `app`
--

-- --------------------------------------------------------

--
-- Structure de la table `acceptation`
--

CREATE TABLE `acceptation` (
  `IdIviation` int(11) NOT NULL,
  `Demende` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `acceptation`
--

INSERT INTO `acceptation` (`IdIviation`, `Demende`) VALUES
(1, 'Accepter'),
(2, 'Attendre'),
(3, 'Supprimer');

-- --------------------------------------------------------

--
-- Structure de la table `amies`
--

CREATE TABLE `amies` (
  `id_Amis` int(11) NOT NULL,
  `ID_unque_Amis` int(255) NOT NULL,
  `AmisAjouter` int(250) NOT NULL,
  `IdInvitation` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `amies`
--

INSERT INTO `amies` (`id_Amis`, `ID_unque_Amis`, `AmisAjouter`, `IdInvitation`) VALUES
(57, 1273194096, 589409566, 2),
(61, 1273194096, 90714180, 1);

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 1568584556, 1273194096, 'salut'),
(2, 1568584556, 1273194096, 'tu vas bien'),
(3, 1273194096, 1568584556, 'oue ça va et toi'),
(4, 1273194096, 90714180, 'SALUT'),
(5, 90714180, 1273194096, 'OH TOI CV ?'),
(6, 1568584556, 1273194096, 'SALUT');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `demande` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`, `demande`) VALUES
(1, 1568584556, 'ALI', 'MOUANWIYA', 'mouanwiya30@gmail.com', 'passer123', '1625354543Mouanwiya_2.jpg', 'hors ligne maintenant', 0),
(2, 882927933, 'tadjiri', 'ALI Soule', 'mouanali30@gmail.com', '123passer', '1625354704WhatsApp oe1.jpeg', 'hors ligne maintenant', 0),
(3, 589409566, 'ALI', 'MOUSSA', 'moussa30@gmail.com', 'mou123', '1625355036WhatsApp oe1.jpeg', 'hors ligne maintenant', 0),
(4, 1273194096, 'ALI', 'MOUNIB', 'mounib@gamil.com', 'nib123', '1625356000Mouanwiya_2.jpg', 'Active maintenant', 0),
(5, 90714180, 'Hilla', 'idrisse', 'hilla@gmail.com', 'hi1', '1625381938Mouanwiya_2.jpg', 'Active maintenant', 0),
(6, 509673444, 'ALI SOULE', 'MOUANWIYA', 'ali@gmail.com', 'ali123', '1625595892Mouanwiya_2.jpg', 'hors ligne maintenant', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `acceptation`
--
ALTER TABLE `acceptation`
  ADD PRIMARY KEY (`IdIviation`);

--
-- Index pour la table `amies`
--
ALTER TABLE `amies`
  ADD PRIMARY KEY (`id_Amis`),
  ADD KEY `lienInvitation` (`IdInvitation`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `acceptation`
--
ALTER TABLE `acceptation`
  MODIFY `IdIviation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `amies`
--
ALTER TABLE `amies`
  MODIFY `id_Amis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `amies`
--
ALTER TABLE `amies`
  ADD CONSTRAINT `lienInvitation` FOREIGN KEY (`IdInvitation`) REFERENCES `acceptation` (`IdIviation`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
