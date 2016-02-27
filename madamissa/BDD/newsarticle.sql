-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Client :  sql2.olympe.in
-- Généré le :  Dim 08 Novembre 2015 à 03:36
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
-- Structure de la table `newsarticle`
--

CREATE TABLE `newsarticle` (
  `num` int(9) NOT NULL,
  `categorie` char(20) DEFAULT NULL,
  `titre` char(50) DEFAULT NULL,
  `texte` text,
  `image` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `newsarticle`
--
ALTER TABLE `newsarticle`
  ADD PRIMARY KEY (`num`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `newsarticle`
--
ALTER TABLE `newsarticle`
  MODIFY `num` int(9) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
