-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Client :  sql2.olympe.in
-- Généré le :  Dim 08 Novembre 2015 à 03:35
-- Version du serveur :  5.5.43-MariaDB-1ubuntu0.14.10.1
-- Version de PHP :  5.5.3-1ubuntu2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `wy0qrwam`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `num_uti` int(11) NOT NULL,
  `nom_uti` varchar(30) DEFAULT NULL,
  `prenom_uti` varchar(30) DEFAULT NULL,
  `adresse_uti` varchar(100) DEFAULT NULL,
  `email_uti` varchar(50) DEFAULT NULL,
  `datenaissance_uti` date DEFAULT NULL,
  `pays_uti` varchar(50) DEFAULT NULL,
  `ville_uti` varchar(50) DEFAULT NULL,
  `codepostal_uti` varchar(50) DEFAULT NULL,
  `typeutilisateur` varchar(15) DEFAULT NULL,
  `newsletter` int(1) DEFAULT NULL,
  `mdp` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`num_uti`, `nom_uti`, `prenom_uti`, `adresse_uti`, `email_uti`, `datenaissance_uti`, `pays_uti`, `ville_uti`, `codepostal_uti`, `typeutilisateur`, `newsletter`, `mdp`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@gmail.com', '2015-05-03', 'France', 'Paris', '75015', 'admin', 1, 'b714337aa8007c433329ef43c7b8252c');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`num_uti`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `num_uti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
