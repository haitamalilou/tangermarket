-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 27 mai 2021 à 10:23
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tangermarket`
--

-- --------------------------------------------------------

--
-- Structure de la table `log_in`
--

CREATE TABLE `log_in` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `log_in`
--

INSERT INTO `log_in` (`username`, `password`) VALUES
('haitam', 'alilou');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `réference` int(11) NOT NULL,
  `libelle` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `prix_unitaire` int(11) NOT NULL,
  `quantite_minimale` int(11) NOT NULL,
  `quantite_en_stock` int(19) NOT NULL,
  `categorie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`réference`, `libelle`, `prix_unitaire`, `quantite_minimale`, `quantite_en_stock`, `categorie`) VALUES
(2, 'zara', 200, 10, 400, 'vetement'),
(5, 'efevfe', 0, 32, 5454, 'FOOD');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`réference`),
  ADD UNIQUE KEY `réference` (`réference`),
  ADD KEY `réference_2` (`réference`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
