-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 10 avr. 2019 à 18:27
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `chaussures`
--

-- --------------------------------------------------------

--
-- Structure de la table `basket`
--

CREATE TABLE `equipe` (
  `id_ekip` int(3) NOT NULL,
  `nom` varchar(255) NOT NULL
  


) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `joueur` (
  `id_joueur` int(3) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenoms` varchar(255) NOT NULL,
  `age` int(2) NOT NULL,
  `nationalite` varchar(50) NOT NULL,
  `poste` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_ekip` int(2) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `basket`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`id_ekip`);
  

--
-- Index pour la table `users`
--
ALTER TABLE `joueur`

  ADD PRIMARY KEY (`id_joueur`),
  ADD KEY `id_ekip` (`id_ekip`);
--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- 


--
-- AUTO_INCREMENT pour la table `joueur`
--
ALTER TABLE `joueur`
  MODIFY `id_joueur` int(3) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `joueur`
--
ALTER TABLE `joueur`
  ADD CONSTRAINT `joueur_ibfk_1` FOREIGN KEY (`id_ekip`) REFERENCES `equipe` (`id_ekip`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
